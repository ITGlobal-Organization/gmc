@extends('layouts.layoutv2')
@section('content')
    <!--Start Middle-->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
        <div class="middle mtb-60">
            <h1 class="text-center mb-40">{{ trans('lang.book_now')}}</h1>


            <!--Strat Foram Area-->

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding mtb-25">
                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 border padding form-none"></div>
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 border join-bg">
                        <h5 class="text-center mb-25">{{ trans('messages.book_msg',[
                            'attribute' => trans('lang.event')])}} </h5>
                        <div class="success"></div>
                        <div class="error"></div>
                        <input type="hidden" class="payment_price" value="{{ $Event->price }}"/>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
                                <div>
                                    <label>{{ trans('lang.first_name')}}<span class="red">*</span></label>
                                    <input type="text" class="join-input first_name" value="" placeholder="{{ trans('lang.first_name')}}*"
                                        name="first_name">
                                    <div class="error-first_name"></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
                                <label>{{ trans('lang.last_name')}}<span class="red">*</span></label>
                                <input type="text" class="join-input last_name" value="" placeholder="{{ trans('lang.last_name')}}*"
                                    name="last_name">
                                    <div class="error-last_name"></div>
                            </div>
                        </div>
                        <!--End Table listing-->
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
                                <label>{{ trans('lang.email')}}<span class="red"> *</span></label>
                                <input type="text" class="join-input email" value="" placeholder="{{ trans('lang.email')}}"
                                    name="email">
                                <div class="error-email"></div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
                                <label>{{ trans('lang.phone')}}<span class="red"> *</span></label>
                                <input type="text" class="join-input phone_no" value="" placeholder="{{ trans('lang.phone')}}"
                                    name="phone">
                                <div class="error-phone"></div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mb-20">
                            <label>{{ trans('lang.address')}}<span class="red"> *</span></label>
                            <textarea type="text" class="join-input address" value="" placeholder="{{ trans('lang.address')}}"
                                    name="address"></textarea>
                            <div class="error-address"></div>
                        </div>
                        </div>



                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center mtb-40">
                            <button class="ct-submit submit" >{{ trans('lang.submit')}}</button>
                            <!-- <input type="submit"  value=""> -->
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 border padding form-none"></div>
                </div>

        </div>
    </div>
    <div id="vcc" class="modal">
               <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                    <div class="modal-content">
                     <span class="close close1" id="close1">&times;</span>
                        <div class="clr"></div>
                        <div class="modal-body" id="payment-element"></div>
                        <div class="modal-footer">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border">
                        <div class="addnew-btn" >
                            <a href="javascript:void(0)" class="btn-download w-100" onclick="chargePayment()">{{ trans('lang.continue')}}</a>
                        </div>
                            <!-- <input type="submit" value=""  > -->
                            <div class="clr"></div>
                        </div>
                        </div>
                     </div>
                     <div class="clr"></div>
                  </div>
                </div>
               </div>
    </div>




    <!--End Middle-->
@endsection
@section('scripts')
<script src="https://js.stripe.com/v3/"></script>

<!--End Footer-->
<script>
    const stripeConfig = {
        apiKey:"{{ env('STRIPE_PUBLIC')}}",
        paymentIntentRoute:"{{ route('payment.intent')}}",
        confirmIntentRoute:"{{ route('payment.charge') }}",
        price:$('.payment_price').val(),
    }

    $(document).on('click','.submit',async function(){
        let data = new FormData();
        data.append('first_name',$('.first_name').val());
        data.append('last_name',$('.last_name').val());
        data.append('email',$('.email').val());
        data.append('phone',$('.phone_no').val());
        data.append('address',$('.address').val());
        data.append('event_id',"{{ $Event->id}}");

        await ajaxPost("{{ route('event.book.store') }}",data,'.success','.error',true);
        console.log('here',$('.success').text() != '');
        let price = "{{ $Event->price }}";
        if(price == "" || price == "FOC" || price == 0){
            window.location.href = "{{}}";
        }
        if($('.success').text() != ''){
            $(this).addClass('btn-vcc')
                $(this).text('Checkout')
                $(this).removeClass('submit')
        }
    })
</script>
<script src="{{ custom_asset('stripe.js','scripts')}}"></script>
@endsection
