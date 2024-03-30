<?php

namespace App\Traits;

use App\Models\Subscription;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Payment;
use Stripe;
use Log;
use Stripe\Event;
use Stripe\Refund;


trait StripeTrait
{


    public function addStripeCustomer($name = '',$email = '')
    {

        $customer = $this->stripe->customers->create([
            'description' => $this->name,
            'name' =>$name,
            'email' => $email
        ]);
        $this->stripe_id = $customer->id;
        // $this->save();
        return $customer->id;
    }

    public function addGuestCustomer($name)
    {

        $customer = $this->stripe->customers->create([
            'description' => $name,
        ]);
        // $this->stripe_id = $customer->id;
        // $this->save();
        return $customer->id;
    }
    public function setApiKey(){
        $this->stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        // dd(env('STRIPE_SECRET'));
    }

    public function addNewPaymentMethod($paymentMethodId)
    {
        try{

            return $this->stripe->paymentMethods->attach(
                $paymentMethodId,
                ['customer' => $this->stripe_id]
            );
        }catch(Exception $e){
            return false;
        }
        
    }

    public function updateDefaultPaymentMethod($paymentMethodId)
    {
        $this->stripe->customers->update(
            $this->stripe_id,
            [
                'invoice_settings' => [
                    'default_payment_method' => $paymentMethodId
                ]
            ]
        );
    }

    public function getDefaultPaymentMethod()
    {
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $customer = $stripe->customers->retrieve(
            $this->stripe_id,
            []
        );

        return $customer->invoice_settings->default_payment_method;
    }

    public function updateCardBySource($token)
    {
        return $this->stripe->customers->createSource($this->stripe_id, ['source' => $token]);
    }
    public function updateDefaultSourch($token)
    {
        return $this->stripe->customers->update($this->stripe_id, ['default_source' => $token]);
    }

    public function addNewSubscription($product_id, $plan_id, $trail = '', $quantity = 1)
    {
        $status = 'active';
        DB::beginTransaction();
        if ($trail != '') {
            $subscription = $this->stripe->subscriptions->create([
                'customer' => $this->stripe_id,
                'items' => [
                    ['price' => $plan_id],
                ],
                'trial_end' => Carbon::now()->addDays(config('constant.trail'))->timestamp,
            ]);
            $status = 'trailing';
        } else {
            $subscription = $this->stripe->subscriptions->create([
                'customer' => $this->stripe_id,
                'items' => [
                    ['price' => $plan_id],
                ],
            ]);
        }
        //            $subs_item = $this->stripe->subscriptionItems->create([
        //                'subscription' => $subscription->id,
        //                'price' => $plan_id,
        //                'quantity' => $quantity,
        //            ]);
        //        dd('here');
        $subscription_id = Subscription::insertGetId([
            'user_id' => $this->id,
            'name' => $product_id,
            'stripe_id' => $subscription->id,
            'stripe_status' => $status,
            'stripe_price' => $plan_id,
            'quantity' => $quantity,
            'trial_ends_at' => Carbon::now()->addDays(config('constant.trail')),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::commit();
        return $subscription_id;
    }
    public function createPaymentIntent($amount,$customer='')
    {
        if ($this->stripe == null) {
            $this->stripe = new Stripe\StripeClient(env('STRIPE_SECRET'));
        }
        // $paymentMethod = $this->createPaymentMethod();
        // dd($amount);
        $paymentIntent = $this->stripe->paymentIntents->create([
            'amount' => $amount,
            'currency' => 'gbp',
            'customer' => ($customer != '')?$customer: $this->addGuestCustomer('Guest'),
            // 'payment_method' => $paymentMethod,
            'automatic_payment_methods' => [
                'enabled' => true,
            ],
        ]);

        return $paymentIntent;
    }

    public function getSubscriptions()
    {
        $subscription = Subscription::select('stripe_id')->where('user_id', $this->id)->first();
        $Subscriptions = $this->stripe->subscriptions->retrieve($subscription->stripe_id, []);

        $Subscriptions['last_invoice_data'] = $this->getInvoice($Subscriptions->latest_invoice);
        return $Subscriptions;
    }
    public function subscriptions()
    {
        return $this->hasOne(Subscription::class, 'user_id');
    }
    public function getPaymentMethods()
    {
        return $this->stripe->customers->allPaymentMethods($this->stripe_id, ['type' => 'card']);
    }
    public function udpatePaymentMethod($paymentMethodId)
    {
        return $this->stripe->paymentMethods->update($paymentMethodId);
    }

    public function cancelSubscription()
    {
        $subscription = $this->stripe->subscriptions->cancel($this->getSubscriptions()->id, []);
        $this->{$this->roles[0]->name}->is_subscribed = 0;
        $this->{$this->roles[0]->name}->save();
        $response = $this->subscriptions->delete();

        return $response;
    }

    public function getInvoice($invoice_id)
    {

        $invoice = $this->stripe->invoices->retrieve($invoice_id);

        return $invoice;
    }

    public function getCustomerAllTransactions($data = [])
    {

        $params = [];
        $params['limit'] = 10;
        $params['customer'] = $this->stripe_id;
        if (isset($data['limit'])) {
            $params['limit'] = $data['limit'];
        }
        if (isset($data['start']) && $data['start'] != '') {
            $params['starting_after'] = $data['start'];
        }

        $transactions = $this->stripe->charges->all([
            'customer' => $this->stripe_id,
        ]);
        $FilterTransactions = $this->stripe->charges->all($params);
        $transactionCount = count($transactions);

        return [
            'count' => $transactionCount,
            'transactions' => $FilterTransactions,
        ];
    }

    public function createCharge($data)
    {

        if ($data['is_card_updated']) {
            $ch = $this->updateCardBySource($data['paymentMethodId']['id']);
            //dd($charge);
            // $charge['source'] = $data['paymentMethodId']['id'];
        }
        $charge['amount'] = $data['amount'];
        $charge['currency'] = 'usd';
        $charge['customer'] = $this->stripe_id;
        $charge['description'] = $data['description'];
        return $this->stripe->charges->create($charge);
    }

    public function reterieveCharge($chargeId)
    {

        try{
            
            $charge = $this->stripe->charges->retrieve($chargeId);
        
            return $charge;
            
        }catch(\Exception $e){
            Log::error($e);
            return false;
        }
    }

    public function createPaymentMethod($card=[]){
        try{
            if(count($card) > 0){
                $paymentMethod = $this->stripe->paymentMethods->create([
                    'type' => 'card',
                    'card' => $card
                ]);
            }else{
                $paymentMethod = $this->stripe->paymentMethods->create([
                    'type' => 'card',
                    'card' => $card
                ]);
            }

            return $paymentMethod;
            
        }catch(\Exception $e){
            Log::error($e);
            return false;
        }
       
    }

    public function confirmIntent($intentId,$return_url=''){
        try{
            $intent=$this->stripe->paymentIntents->confirm(
                $intentId,
                [
                    'return_url' => $return_url,
                    'customer' => $this->stripe_id
                ],
                // ['payment_method' => 'pm_card_visa']
            );
            return $intent;
        }catch(\Exception $e){
            Log::error($e);
            dd($e);
            return false;
        }
    }

    public function retrievePaymentIntent($intentId){
        try{
            $intent=$this->stripe->paymentIntents->retrieve(
                $intentId,
                // ['payment_method' => 'pm_card_visa']
            );
            return $intent;
        }catch(\Exception $e){
            Log::error($e);
           // dd($e);
            return false;
        }
    }

    public function addPaymentLog($data){
        try{
            $payment = new Payment();
            return $payment->store($data);
            DB::commit();
        }catch(\Exception $e){
            Log::error($e);
            return false;
        }
    }

    public function refundCharge($chargeId){
        try{
            $refund = Refund::create([
                'charge' => 'ch_123456789', // Charge ID
            ]);
            if ($refund->status === 'succeeded') {
                // Refund was successful
                $payment = Payment::where('transaction_id',$chargeId)->first();
                return $payment->update([
                    'status' => 'CANCELLED',
                    'payment_status' => 'REFUND'
                ]);
                DB::commit();
            } else {
               return false;
            }
            
           
        }catch(\Exception $e){
            Log::error($e);
            return false;
        }
    }

    public function refundPayment($paymentId){
        try{
            $payment = Payment::where('stripe_payment_id',$paymentId)->first();
            return $payment->update([
                'status' => 'CANCELLED',
                'payment_status' => 'REFUND'
            ]);
            DB::commit();
        }catch(\Exception $e){
            Log::error($e);
            return false;
        }
        
    }
  
}