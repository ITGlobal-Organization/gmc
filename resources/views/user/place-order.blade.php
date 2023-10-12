@extends('layouts.layoutv2')
@section('content')

      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
         <div class="middle margin-top30">
            <div class="desh-normal">Premium</div>
            <h1 class="h1-black text-center">{{ trans('lang.place-order') }}</h1>
            <div class="col-xs-0 col-sm-0 col-md-0 col-lg-2 border po-none"></div>
            <form class="place-order">
               
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 border padding">
               <div class="success row"></div>
               <div class="error row"></div>
               <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border">
                     <div class="login-name">{{ trans('lang.design_name')}}</div>
                     <input type="text" class="po-input" name="design_name">
                     <div class="clr"></div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border">
                     <div class="login-name">{{ trans('lang.patch-type') }}</div>
                     <select name="product_id" class="po-input products" id="products">
                        <option value="24">{{ trans('lang.select_msg',['attribute' => trans('lang.patch-type')]) }}</option>
                        @foreach($Products as $Product)
                            <option value="{{ $Product->id }}">{{$Product->name }}</option>
                        @endforeach
                        
                     </select>
                     <div class="clr"></div>
                     <div class="error-product_id errors"></div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border">
                     <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 border padding">
                        <div class="login-name">{{ trans('lang.unit')}}</div>
                        <select name="unit" class="po-input unit">
                           <option value="">{{ trans('lang.select_msg',['attribute' => trans('lang.unit')]) }}</option>
                           <option value="1">Inch</option>
                           <option value="2">Centimeter</option>                          
                        </select>
                        <div class="error-unit errors"></div>
                     </div>
                     <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 border">
                        <div class="login-name">{{ trans('lang.sizes')}}</div>
                        <select name="size" class="po-input sizes">
                           <option value="">{{ trans('lang.select_msg',['attribute' => trans('lang.size')]) }}</option>
                        </select>
                        <div class="error-size errors"></div>
                     </div>
                     <!-- <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 border padding">
                        <div class="login-name">{{ trans('lang.height') }}</div>
                        <input type="text" class="po-input">
                     </div> -->
                     <div class="clr"></div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border">
                     <div class="login-name">{{ trans('lang.backing') }}</div>
                     <select name="backing_id" class="po-input">
                        <option value="">{{ trans('lang.select_msg',['attribute' => trans('lang.backing')]) }}</option>
                        @foreach($Backings as $Backing)
                            <option value="{{ $Backing->id.','.$Backing->price }}">{{$Backing->name }}</option>
                        @endforeach
                     </select>
                     <div class="clr"></div>
                     <div class="error-backing_id errors"></div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border">
                     <div class="login-name">{{ trans('lang.border') }}</div>
                     <select name="border_id" class="po-input">
                        <option value="">{{ trans('lang.select_msg',['attribute' => trans('lang.borders')]) }}</option>
                        @foreach($Borders as $Border)
                            <option value="{{ $Border->id.','.$Border->price }}">{{$Border->name }}</option>
                        @endforeach
                     </select>
                     <div class="clr"></div>
                     <div class="error-border_id errors"></div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border">
                     <div class="login-name">{{ trans('lang.addon') }}</div>
                     <select name="addon_id" class="po-input">
                        <option value="">{{ trans('lang.select_msg',['attribute' => trans('lang.addon')]) }}</option>
                        @foreach($Addons as $Addon)
                            <option value="{{ $Addon->id.','.$Addon->price }}">{{$Addon->name }}</option>
                        @endforeach
                     </select>
                     <div class="clr"></div>
                     <div class="error-addon_id errors"></div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border">
                     <div class="login-name">{{ trans('lang.shipment_address') }}</div>
                     <input type="text" class="po-input shipment_address" name="shippment_address" value="{{ auth()->user()->customer->address }}">
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
                        <label class="container2">{{ trans('lang.shipping_to_a_different_address')}}
                        <input type="checkbox" name="is_shipping_to_new" class="address-check">
                        <span class="checkmark"></span>
                        </label>	
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
                        <input type="text" class="po-input new_shipping_address" value="" name="new_shipping_address" disabled="true" placeholder="New {{ trans('lang.shipment_address') }}">
                     </div>
                     <div class="clr"></div>
                     <div class="error-shipment_address errors"></div>
                  </div>
                  
                  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 border">
                     <div class="login-name">{{ trans('lang.quantity') }}</div>
                     <input type="text" name="quantity" class="po-input" value="0">
                     
                     <div class="clr"></div>
                     <div class="error-quantity errors"></div>
                  </div>
                  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 border">
                     <div class="login-name">{{ trans('lang.attachment')}}</div>
                     <div class="upload-btn-wrapper-samp1">
                        <button class="btn2" type="button"><span><img src="{{ custom_asset('attach-icon.png') }}" alt=""/></span> {{trans('lang.attach_file') }}</button>
                        <input type="file" name="attachment" >
                     </div>
                     <div class="clr"></div>
                      <div class="error-attachment errors"></div>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border text-center">
                  <input class="submit-po" value="Place Order" type="submit">
                  <div class="clr"></div>
               </div>
            </div>
            </form>
            <div class="col-xs-0 col-sm-0 col-md-0 col-lg-2 border po-none"></div>
            <div class="clr"></div>
         </div>
         <div class="clr"></div>
      </div>
      <!--End Middle-->

@endsection

@section('scripts')
<!-- <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>  -->
      <script type="text/javascript">
         // Get All Sizes wi
         $('#products').change(function() {
            let product_id = $(this).val();
               ajaxGet(`/sizes/${product_id}`,{},"","json",(response) => {
                     html = ""
                     console.log(response.data)
                     response.data.map((row) =>{
                        html += '<option value="'+row.id+'">'+ row.text+ '</option>'
                     })
                     console.log(html)
                     $('.sizes').append(html)
               })
         })
         // $('select').each(function(){
         //     var $this = $(this), numberOfOptions = $(this).children('option').length;
           
         //     $this.addClass('select-hidden'); 
         //     $this.wrap('<div class="select"></div>');
         //     $this.after('<div class="select-styled"></div>');
         
         //     var $styledSelect = $this.next('div.select-styled');
         //     $styledSelect.text($this.children('option').eq(0).text());
           
         //     var $list = $('<ul />', {
         //         'class': 'select-options'
         //     }).insertAfter($styledSelect);
           
         //     for (var i = 0; i < numberOfOptions; i++) {
         //         $('<li />', {
         //             text: $this.children('option').eq(i).text(),
         //             rel: $this.children('option').eq(i).val()
         //         }).appendTo($list);
         //     }
           
         //     var $listItems = $list.children('li');
         
          
           
         //   $styledSelect.click(function(e) {
         //      if($('.select-options').is(':visible')) {
         //         e.stopPropagation();
         //         $styledSelect.text($(this).text()).removeClass('active');
         //         $this.val($(this).attr('rel'));
               
         //         $list.hide();
         //         //console.log($this.val());   
         
         //      } else {
         //         e.stopPropagation();
         //         $('div.select-styled.active').each(function(){
         //             $(this).removeClass('active').next('ul.select-options').hide();
         //         });
         //         $(this).toggleClass('active').next('ul.select-options').toggle();
         //      }//end if
         //     });
           
         //     $listItems.click(function(e) {
         //         e.stopPropagation();
         //         $styledSelect.text($(this).text()).removeClass('active');
         //         $this.val($(this).attr('rel'));
         //         $list.hide();
         //         //console.log($this.val());
         //     });
             
         //     $(document).click(function() {
         //         $styledSelect.removeClass('active');
         //         $list.hide();
         //     });
         
         // });
         $(".address-check").change(function () {
               // alert('here')
                var isChecked = $(this).prop("checked");
               // console.log(isChecked);
                $(".new_shipping_address").prop("disabled", !isChecked);
         });

         $('.place-order').on('submit', function(e){
            e.preventDefault();
            var formData = new FormData(this);
            ajaxPost("{{ prefix_route('orders.store')}}",formData,'.success','.error')
         })
         
      </script>

@endsection