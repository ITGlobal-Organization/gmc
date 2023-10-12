    <!--Strat FEATURED PRODUCTS-->
    @include('sections.wigets.featured-products',[
        'Products' => $products,
        'view_all_link' => route('order-form'),
        'container_class' => 'section-1',
        'heading' =>trans('content.featured-products.heading') !!}
    ])
    <!--End FEATURED PRODUCTS-->

    <!--Strat Patches Products-->
    <section class="section2">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
            <div class="middle">


                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border">
                    <h2 class="margin-tb35 color-black width-fix">Patches</h2>

                    <span ><a href="#">View All</a></span>

                    <div id="owl-patches" class="owl-carousel">
                        <!--Start Product List Area-->
                    @foreach($products as $product)
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding padding-lr5">
                            <div class="pd-list">
                                <div class="pd-img">
                                    <img src="{{$product->image_url}}" alt="" width="250"/>
                                    <div class="img-fix img-fix2"><img src="{{ custom_asset('add-image.png') }}" alt="" id="myBtn2" onClick="modalOpen({{$product->id}})"/></div>
                                </div>
                                <div class="pd-name">
                                    {{$product->name}}
                                </div>
                                <div class="pd-text">
                                    {!! $product->description !!}
                                </div>
                                <div class="pd-btn">
                                    <a href="{{route('order-form')}}">SELECT</a>
                                </div>
                            </div>
                            <div class="clr"></div>
                        </div>
                    @endforeach
                        <!--End Product List Area-->


                    </div>

                    <div class="clr"></div>
                </div>

                <!--Start Pop Area-->
                <div id="myModal2" class="modal5">
                <!-- Modal content -->
                <div class="modal5-content5">
                <span class="close51" onClick="modelCLose()">&times;</span>
                </br>
                </br>

                    <div class="container1">
                    <div class="mySlides2">
                        <img src="{{ custom_asset('p2-1.jpg') }}" style="width:100%">
                    </div>

                    <div class="mySlides2">
                        <img src="{{ custom_asset('p2-2.jpg') }}" style="width:100%">
                    </div>

                    <div class="mySlides2">
                        <img src="{{ custom_asset('p2-3.jpg') }}" style="width:100%">
                    </div>

                    <div class="mySlides2">
                        <img src="{{ custom_asset('p2-4.jpg') }}" style="width:100%">
                    </div>

                    <div class="mySlides2">
                        <img src="{{ custom_asset('p2-5.jpg') }}" style="width:100%">
                    </div>

                    <div class="mySlides2">
                        <img src="{{ custom_asset('p2-6.jpg') }}" style="width:100%">
                    </div>

                    <!--  <a class="prev" onclick="plusSlides(-1)">❮</a>
                    <a class="next" onclick="plusSlides(1)">❯</a>-->


                    <div class="row scrol">
                        <div class="column">
                        <img class="demo2 cursor" src="{{ custom_asset('p2-1.jpg') }}" style="width:100%" onclick="currentSlide2(1)" alt="">
                        </div>
                        <div class="column">
                        <img class="demo2 cursor" src="{{ custom_asset('p2-2.jpg') }}" style="width:100%" onclick="currentSlide2(2)" alt="">
                        </div>
                        <div class="column">
                        <img class="demo2 cursor" src="{{ custom_asset('p2-3.jpg') }}" style="width:100%" onclick="currentSlide2(3)" alt="">
                        </div>
                        <div class="column">
                        <img class="demo2 cursor" src="{{ custom_asset('p2-4.jpg') }}" style="width:100%" onclick="currentSlide2(4)" alt="">
                        </div>
                        <div class="column">
                        <img class="demo2 cursor" src="{{ custom_asset('p2-5.jpg') }}" style="width:100%" onclick="currentSlide2(5)" alt="">
                        </div>
                        <div class="column">
                        <img class="demo2 cursor" src="{{ custom_asset('p2-6.jpg') }}" style="width:100%" onclick="currentSlide2(6)" alt="">
                        </div>
                    </div>
                    </div>
                                        <div class="clr"></div>
                                    </div>
                                </div>
                <!--End Pop Area-->

                <div class="clr"></div>
            </div>
            <div class="clr"></div>
        </div>
    
    </section>
    <!--End Patches Products-->

    <!--Strat Custom Patches Products-->
    <section class="section-3">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
            <div class="middle">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border">
                    <h2 class="margin-tb35 color-black width-fix">Custom Products</h2>
                    <span><a href="#">View All</a></span>
                    <div id="owl-cpatches" class="owl-carousel">
                        <!--Start Product List Area-->
                        @foreach($products as $product)
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding padding-lr5">
                            <div class="pd-list">
                                <div class="pd-img">
                                    <img src="{{$product->image_url}}" alt="" width="250"/>
                                    <div class="img-fix img-fix2"><img src="{{ custom_asset('add-image.png') }}" alt="" id="myBtn3" onClick="modalOpen({{$product->id}})"/></div>
                                </div>
                                <div class="pd-name">
                                    {{$product->name}}
                                </div>
                                <div class="pd-text">
                                    {!! $product->description !!}
                                </div>
                                <div class="pd-btn">
                                    <a href="{{route('order-form')}}">SELECT</a>
                                </div>
                            </div>
                            <div class="clr"></div>
                        </div>
                        @endforeach
                        <!--End Product List Area-->
                    </div>
                    <div class="clr"></div>
                </div>
                <div class="clr"></div>
            </div>
            <div class="clr"></div>
        </div>
    </section>
    <!--End Custom Patches Products-->

    <script>
        $( document ).ready( function ( $ ) {
            $( "#owl-example" ).owlCarousel();
        } );
        $( "body" ).data( "page", "frontpage" );
    </script>

    <script>
        $( document ).ready( function () {

            var owl = $( "#owl-demo" );

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

    <script>
        $( document ).ready( function () {

            var owl = $( "#owl-patches" );

            owl.owlCarousel( {
                items: 4, //10 items above 1000px browser width
                itemsDesktop: [ 1199, 4 ], //5 items between 1000px and 901px
                itemsDesktopSmall: [ 900, 3 ], // betweem 900px and 601px
                itemsTablet: [ 768, 3 ], //2 items between 600 and 0
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

    <script>
        $( document ).ready( function () {

            var owl = $( "#owl-cpatches" );

            owl.owlCarousel( {
                items: 4, //10 items above 1000px browser width
                itemsDesktop: [ 1199, 4 ], //5 items between 1000px and 901px
                itemsDesktopSmall: [ 900, 3 ], // betweem 900px and 601px
                itemsTablet: [ 768, 3 ], //2 items between 600 and 0
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

    <script>
        $( document ).ready( function () {

            var owl = $( "#owl-arrivals" );

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

    <script>
        $( document ).ready( function () {

            var owl = $( "#owl-women" );

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

    <script>
        $( document ).ready( function () {

            var owl = $( "#owl-men" );

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


    <script>
        $( document ).ready( function () {

            var owl = $( "#owl-kids" );

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

    <script>
    let slideIndex = 1;
    // showSlides(slideIndex);

    function plusSlides(n) {
        console.log("push slides")
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("demo");
      let captionText = document.getElementById("caption");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
    //   captionText.innerHTML = dots[slideIndex-1].alt;
    }
    </script>


    <script>
        function modelCLose(){
            var modal = document.getElementById( "myModal");
            //alert('here')
            modal.style.display = "none";
        }
        function modalOpen(productId){

            var modal = document.getElementById( "myModal" );
            $.ajax({
                method:"get",
                url:"{{route('get-product-images')}}",
                data:{productId:productId},
                success:function(response){
                    $('#myModal').html(response.html)
                    showSlides(1)
                    modal.style.display = "block";
                },
                error:function(error){
                    console.log(error)
                }
            });
        }
    </script>

    {{-- <script>
    let slideIndex2 = 1;
    showSlides2(slideIndex2);

    function plusSlides2(n) {
      showSlides2(slideIndex2 += n);
    }

    function currentSlide2(n) {
      showSlides2(slideIndex2 = n);
    }

    function showSlides2(n) {
        console.log("show slides2")
      let i;
      let slides = document.getElementsByClassName("mySlides2");
      let dots = document.getElementsByClassName("demo2");
      let captionText = document.getElementById("caption2");
      if (n > slides.length) {slideIndex2 = 1}
      if (n < 1) {slideIndex2 = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex2-1].style.display = "block";
      dots[slideIndex2-1].className += " active";
      captionText.innerHTML = dots[slideIndex2-1].alt;
    }
    </script> --}}


    {{-- <script>
    let slideIndex3 = 1;
    showSlides3(slideIndex3);

    function plusSlides2(n) {
      showSlides3(slideIndex3 += n);
    }

    function currentSlide3(n) {
      showSlides3(slideIndex3 = n);
    }

    function showSlides3(n) {
        console.log("show slides3")
      let i;
      let slides = document.getElementsByClassName("mySlides3");
      let dots = document.getElementsByClassName("demo3");
      let captionText = document.getElementById("caption3");
      if (n > slides.length) {slideIndex3 = 1}
      if (n < 1) {slideIndex3 = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex3-1].style.display = "block";
      dots[slideIndex3-1].className += " active";
      captionText.innerHTML = dots[slideIndex3-1].alt;
    }
    </script> --}}
