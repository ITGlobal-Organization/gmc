<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name')}} | {{ isset($title)?$title:'Page'}}</title>
    <link rel="icon" type="image/x-icon" href="images/fav-icon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="{{ asset(config('site_config.assets.css').'app.css') }}" rel="stylesheet">
    <link href="{{ asset(config('site_config.assets.css').'main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link href="{{ asset(config('site_config.assets.css').'jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset(config('site_config.assets.css').'slick.css') }}" rel="stylesheet">
    <link href="{{ asset(config('site_config.assets.css').'slick-theme.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- <link href="{{ asset(config('site_config.assets.css').'jquery.fancybox.min.css.css') }}" rel="stylesheet"> -->
    <link href="{{ asset(config('site_config.assets.css').'animate.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset(config('site_config.assets.css').'mobiscroll.jquery.min.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset(config('site_config.assets.css').'animate.css') }}"> -->
  </head>
  <body>
 
    <!-- Header Starts -->
    @include('headers.headerv1')
    <!-- Header Ends -->
    <!-- Content Starts -->
    @include('components.loader')

    @yield('content')
    <!-- Content Ends  -->
    <!-- FOOTER SECTION BEGIN -->
  
    <!-- FOOTER SECTION END -->
    @include('footers.footerv1')
    <!-- Latest compiled JavaScript -->
    <!-- <script src="{{ asset(config('site_config.assets.js').'app.js') }}"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <script src="{{ asset(config('site_config.assets.plugins').'jquery/jquery.min.js') }}"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <!-- <script src="{{ asset(config('site_config.assets.js_scripts').'main.js') }}"></script>
    <script src="{{ asset(config('site_config.assets.js_scripts').'slick.min.js') }}"></script> -->
    <script src="{{ asset(config('site_config.assets.js_scripts').'jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset(config('site_config.assets.js_scripts').'owl.carousel.min.js') }}"></script>
    <script src="{{ asset(config('site_config.assets.js_scripts').'wow.min.js') }}"></script>
    <script src="{{ asset(config('site_config.assets.js_scripts').'mobiscroll.jquery.min.js') }}"></script>
    
    <script>
      const blade_config = {
        baseUrl: "{{ env('APP_URL') }}"
      }
    </script>
   
    
    
  
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

    <script>
    new WOW().init();
    </script>
    <script>
     /*MENUBAR SCRIPT BEGIN*/
     const navbarMenu = document.getElementById("menu");
     const burgerMenu = document.getElementById("burger");
     const headerMenu = document.getElementById("header");
     const overlayMenu = document.querySelector(".overlay");
      if (burgerMenu && navbarMenu) {
         burgerMenu.addEventListener("click", () => {
            burgerMenu.classList.toggle("is-active");
            navbarMenu.classList.toggle("is-active");
         });
      }
      document.querySelectorAll(".menu-link").forEach((link) => {
         link.addEventListener("click", () => {
            burgerMenu.classList.remove("is-active");
            navbarMenu.classList.remove("is-active");
         });
      });
      window.addEventListener("resize", () => {
         if (window.innerWidth >= 992) {
            if (navbarMenu.classList.contains("is-active")) {
               navbarMenu.classList.remove("is-active");
               overlayMenu.classList.remove("is-active");
            }
         }
      });
      document.addEventListener("DOMContentLoaded", () => {
         const darkSwitch = document.getElementById("switch");
         if(darkSwitch){
            darkSwitch.addEventListener("click", () => {
            document.documentElement.classList.toggle("darkmode");
            document.body.classList.toggle("darkmode");
         });
         }
         
      });
      /*MENUBAR SCRIPT END*/
      /*DROPDOWN SCRIPT BEGIN*/
      $(".dropdown_click .menu-item").on('mouseenter', function() {
         var drpdown = $(this).data('target');
         console.log(drpdown);
         $(drpdown).slideToggle();
        });
        $(".dropdown_click .drop-content ul li a").on('mouseleave', function() {
         var drpdown = $(this).data('target');
         $(drpdown).slideUp();
        }); 

        $(".drop-content").on('mouseleave', function() {
         var drpdown = $(this).data('target');
         $(drpdown).slideUp();
        }); 
      /*DROPDOWN SCRIPT END*/
    </script>
    
     <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_API_KEY') }}"></script>
     <script src="{{ asset(config('site_config.assets.js_scripts').'gmaps.js') }}"></script>
      @yield('scripts')
   
     <script src="{{ asset(config('site_config.assets.js').'custom/common.js') }}"></script>
  </body>
</html>
