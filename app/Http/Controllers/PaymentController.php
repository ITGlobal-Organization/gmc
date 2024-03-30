<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
// use App\Traits\StripeTrait;
use App\Models\Payment;
use App\Models\EventCalender;
use App\Models\Cart;
use Carbon\Carbon;
use DB;
use Log;

class PaymentController extends BaseController
{
    //
   
    private $payment;
    public function __construct(Payment $payment,EventCalender $event){

        $this->event = $event;
        $this->payment = $payment;
        $this->setModel($this->payment);

    }

    public function createPaymentIntent(Request $request){

        try{
            // $this->payment = auth()->user();
            $this->payment->setApiKey();
           // $Event = $this->event->first('id','=',$request->event_id);
            // dd($totalAmount);
            $totalAmount = $request->price * 100;
            // session(['event_id' => $Event->id]);
            $intent = $this->payment->createPaymentIntent($totalAmount,session('customer'));
            // dd($intent);
            // die();
            return $this->sendResponse([
                'clientSecret'=> $intent['client_secret'],
                'intent_id' => $intent['id'],
                'amount' => $totalAmount
            ]);


        }catch(\Exception $e){
            DB::rollback();
            Log::error($e);
            return $this->sendError(trans('validation.custom.errors.server-errors'));
        }
    }


    public function chargeStripePayment(Request $request){

        // $request->validate($this->customerCard->getRules());
        try{
            // $this->payment = auth()->user();
            $this->payment->setApiKey();

            $intent = $this->payment->retrievePaymentIntent($request->payment_intent);

        
            $ChargeObj = $this->payment->reterieveCharge($intent['latest_charge']);

            $data = [
                'transaction_id' => $ChargeObj['id'],
                'amount' => $ChargeObj['amount'],
                'payment_method' => 2,
                'payment_date' => Carbon::now(),
                'user_id' => 0,
                'payment_status' => $intent['status'] =='succeeded' ? 'Paid' : 'Not Paid',
                'stripe_payment_id' => $request->payment_intent,
                'order_id' => session('booking_id'),
                'status' => 'BOOKED'
                
            ];

            $status = $this->payment->addPaymentLog($data);

            if($status){
                return redirect()->route('event-calenders.index')->with('success',trans('messages.payment_charged_successfully'));
            }else
                return redirect()->route('event-calenders.index')->with('error',trans('validation.custom.errors.server-errors'));



        }catch(\Exception $e){
            DB::rollback();
            Log::error($e);
            return redirect()->route('event-calenders.index')->with('error',trans('validation.custom.errors.server-errors'));
        }

    }


    public function handleWebhook(Request $request)
    {
        $payload = $request->getContent();
        $sigHeader = $request->header('Stripe-Signature');
        $event = null;

        try {
            $event = Event::constructFrom(
                json_decode($payload, true),
                $sigHeader,
                config('services.stripe.webhook_secret')
            );
        } catch (\UnexpectedValueException $e) {
            // Invalid payload
            return response()->json(['error' => 'Invalid payload'], 400);
        } catch (\Stripe\Exception\SignatureVerificationException $e) {
            // Invalid signature
            return response()->json(['error' => 'Invalid signature'], 400);
        }

        // Handle the event
        if ($event->type === 'charge.refunded') {
            // Extract payment ID from event data
            $paymentId = $event->data->object->payment_intent;

            // Cancel the payment
            $this->payment->refundPayment($paymentId);
        }

        return response()->json(['success' => true]);
    }
}
