@extends('layouts.layoutv2')
@section('content')
      
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
         <div class="middle margin-top30">
            <h2 class="text-center h2">{{ trans('lang.hello')}} {{ $Customer->name }}</h2>
            <div class="desh-normal">Premium</div>
            <h1 class="h1-black text-center">{{ trans('lang.dashboard') }}</h1>
            <!--Strat Place Order-->
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 border">
               <div class="db-list">
                  <div class="db-img">
                     <img src="{{ custom_asset('place-order.png') }}" alt="" height="52">
                  </div>
                  <div class="db-name">
                     {{ trans('lang.place-order') }}
                  </div>
                  <div class="db-text">
                     {{ trans('lang.place-new-order') }}
                  </div>
                  <div class="pd-btn">
                     <a href="{{ prefix_route('place-order') }}">{{trans('lang.click-here') }}</a>
                  </div>
                  <div class="clr"></div>
               </div>
               <div class="clr"></div>
            </div>
            <!--End Place Order-->
            <!--Strat Place Quote-->
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 border">
               <div class="db-list">
                  <div class="db-img">
                     <img src="./images/place-quote.png" alt="" height="52">
                  </div>
                  <div class="db-name">
                     Place Quote
                  </div>
                  <div class="db-text">
                     You can place a new order
                  </div>
                  <div class="pd-btn">
                     <a href="place-quote.php">Click Here</a>
                  </div>
                  <div class="clr"></div>
               </div>
               <div class="clr"></div>
            </div>
            <!--End Place Quote-->	
            <!--Strat Order History-->
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 border">
               <div class="db-list">
                  <div class="db-img">
                     <img src="{{ custom_asset('order-history.png') }}" alt="" height="52">
                  </div>
                  <div class="db-name">
                     {{ trans('lang.order_history')}}
                  </div>
                  <div class="db-text">
                  {{ trans('lang.place-new-order') }}
                  </div>
                  <div class="pd-btn">
                     <a href="{{ prefix_route('orders.history') }}">{{trans('lang.click-here') }}</a>
                  </div>
                  <div class="clr"></div>
               </div>
               <div class="clr"></div>
            </div>
            <!--End Order History-->	
            <!--Strat Quote History-->
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 border">
               <div class="db-list">
                  <div class="db-img">
                     <img src="./images/quote-history.png" alt="" height="52">
                  </div>
                  <div class="db-name">
                     Quote History
                  </div>
                  <div class="db-text">
                     You can place a new order
                  </div>
                  <div class="pd-btn">
                     <a href="quote-history.php">Click Here</a>
                  </div>
                  <div class="clr"></div>
               </div>
               <div class="clr"></div>
            </div>
            <!--End Quote History-->	
            <!--Strat Invoices-->
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 border">
               <div class="db-list">
                  <div class="db-img">
                     <img src="./images/invoices.png" alt="" height="52">
                  </div>
                  <div class="db-name">
                     Invoices
                  </div>
                  <div class="db-text">
                     You can place a new order
                  </div>
                  <div class="pd-btn">
                     <a href="invoices.php">Click Here</a>
                  </div>
                  <div class="clr"></div>
               </div>
               <div class="clr"></div>
            </div>
            <!--End Invoices-->	
            <div class="clr"></div>
         </div>
         <div class="clr"></div>
      </div>
@endsection