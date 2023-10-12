@extends('layouts.layoutv2')
@section('content')

<!--Start Middle-->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
<div class="middle margin-top30">
   <div class="desh-normal">Premium</div>
   <h1 class="h1-black text-center">{{ trans('lang.order_history')}}</h1>
   <!--Start search Area-->
   <div class="col-xs-12 col-sm-6 col-md-6 col-lg-8 border padding border">
      <div class="search-oh search-box1">
         <input type="image" class="oh-btn" img="" src="{{ custom_asset('brn-search.png') }}">	
         <input type="text" placeholder="Search Order Number" class="oh-input search">	
         <div class="clr"></div>
      </div>
   </div>
   <!--End search Area-->
   <!--Start calendar Area-->	
   <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 border padding border">
      <div class="search-ohch">
         <input class="ohch-input start_date" name="date" id="" placeholder="Date for visit DD-MM-YYYY" required="required" type="date">
         <div class="clr"></div>
      </div>
      <span class="ab-to">{{ trans('lang.to')}}</span>
      <div class="search-ohch">
         <input class="ohch-input end_date" name="date" id="" placeholder="Date for visit DD-MM-YYYY" required="required" type="date">
         <div class="clr"></div>
      </div>
   </div>
   <!--Start calendar Area-->	
   <!--Start Table listing-->	
   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding margin-tb35">
      <div class="table-div1 orders">
         
      </div>
      <div class="clr"></div>
   </div>
   <!--End Table listing-->	
   <div class="clr"></div>
</div>
<!--End Middle-->
@endsection
@section('scripts')
<script>
    let search = '';
    let start_date = '';
    let end_date = '';
    $(document).ready(function(){
        getOrders();
    });

    function getOrders(){
        ajaxGet("{{ prefix_route('orders.history.ajax')}}",{
            search:search,start_date:start_date,end_date:end_date
        },'.orders','html')
    }

    $('.search').keypress(function(){
        search = ($(this).val() != '')?$(this).val():'';
        setTimeout(() => {
            getOrders();
        }, 500);
        
        
    })

    $(document).on('change','.start_date',function(){
        start_date = ($(this).val() != '')?$(this).val():'';
        getOrders();    
    })

    $(document).on('change','.end_date',function(){
        end_date = ($(this).val() != '')?$(this).val():'';
        getOrders();
        
    })

</script>
@endsection