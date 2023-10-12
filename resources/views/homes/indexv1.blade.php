@extends('layouts.layoutv2')

@section('content')
@php
    $Category =  new App\Models\Category();
    $Category->setLength(3);
    $Categories = $Category->getAll([],['categories.id','categories.name']);
    
@endphp

<!-- Feature Products in Banner start -->
<section class="section-1">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mid-fdbg">
            <div class="middle1">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 padding border">
                    <div class="mid-fdcol">
                       {!! trans('content.featured-products.top-content') !!}
                    </div>
                    <div class="clr"></div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 border">
                    <h2 class="margin-tb35">{{ $Categories[0]->name }}</h2>
                    <div id="featured-product-1" data-id="{{ $Categories[0]->id }}">

                    </div>
                    <div class="clr"></div>
                </div>
                <div id="myModal" class="modal5"></div>
                <div class="clr"></div>
            </div>
            <div class="clr"></div>
        </div>
</section>
<!-- Featured Products end -->

<!--Strat Patches Products-->
<section class="section2">
   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
      <div class="middle">
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border">
            <h2 class="margin-tb35 color-black width-fix">{{ $Categories[1]->name}}</h2>
            <span ><a href="#">{{ trans('lang.view_all') }}</a></span>
            <div id="featured-product-2" data-id="{{ $Categories[1]->id }}">
            </div>
            <div class="clr"></div>
         </div>
         <!--Start Pop Area-->
     
         <!--End Pop Area-->
         <div class="clr"></div>
      </div>
      <div class="clr"></div>
   </div>
</section>
<!--End Patches Products-->

<!--Strat Patches Products-->
<section class="section-3">
   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
      <div class="middle">
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border">
            <h2 class="margin-tb35 color-black width-fix">{{ $Categories[2]->name}}</h2>
            <span ><a href="#">{{ trans('lang.view_all') }}</a></span>
            <div id="featured-product-3" data-id="{{ $Categories[2]->id }}">
            </div>
            <div class="clr"></div>
         </div>
         <!--Start Pop Area-->
     
         <!--End Pop Area-->
         <div class="clr"></div>
      </div>
      <div class="clr"></div>
   </div>
</section>
<!--End Patches Products-->

@endsection

@section('scripts')
<!-- Frontpage Demo -->
<script>
	$( document ).ready( function ( $ ) {
        let category1 = $('#featured-product-1').data('id');
        getFeaturedProducts(category1,'#featured-product-1');

        let category2 = $('#featured-product-2').data('id');
        getFeaturedProducts(category2,'#featured-product-2');

        let category3 = $('#featured-product-3').data('id');
        getFeaturedProducts(category3,'#featured-product-3');

        
	});

    function getFeaturedProducts(category,container){
        
        ajaxGet("{{route('home.featured-products')}}",{category},container,responseType='html');
        // $.ajax({
        //     method:"get",
        //     url:"{{route('home.featured-products')}}",
        //     data
        //     success:function(data){
        //         $("#main").html(data.html);
        //     },
        //     error:function(error){

        //     }
        // });
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

@endsection
