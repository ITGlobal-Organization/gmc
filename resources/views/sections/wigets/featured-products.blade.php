<div id="featured-product-{{$category}}" class="owl-carousel" >
   <!--Start Product List Area-->
   @if(count($Products) > 0)
   @foreach ($Products as $product )
   
   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding padding-lr5">
      @include('sections.wigets.catalog',[
            'product' => $product,
            'link' => route('order-form',['product' => $product->id])
        ])
      <div class="clr"></div>
   </div>
   @endforeach
   @else
   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding padding-lr5">
   <div class="pd-list">
    {{ trans('lang.not_found')}}
      </div>
   </div>
   @endif
   <!--Start Product List Area-->
</div>
   <script>
        $( document ).ready( function () {

            const owl = $('#featured-product-{{$category}}');

                owl.owlCarousel( {
                    items: 4, //10 items above 1000px browser width
                    itemsDesktop: [ 1199, 4 ], //5 items between 1000px and 901px
                    itemsDesktopSmall: [ 900, 3 ], // betweem 900px and 601px
                    itemsTablet: [ 768, 2 ], //2 items between 600 and 0
                    itemsMobile: [ 479, 1 ], // itemsMobile disabled - inherit from itemsTablet option
                } );

                // Custom Navigation Events
                $( ".next" ).click( function () {
                    owl.trigger( 'owl.next' );
                } )
                $( ".prev" ).click( function () {
                    owl.trigger( 'owl.prev' );
                } )
                $( ".play" ).click( function () {
                    owl.trigger( 'owl.play', 1000 ); //owl.play event accept autoPlay speed as second parameter
                } )
                $( ".stop" ).click( function () {
                    owl.trigger( 'owl.stop' );
                } )
            

            

        } );
    </script>
   <!--End Product List Area-->
