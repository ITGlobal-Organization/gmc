<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/x-icon" href="{{ asset('images/fav-icon.png') }}">

        <title>{{ env('APP_NAME')}} - {{ isset($title)?$title:'Admin'}}</title>

        <!-- Fonts -->
        <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/skeleton-elements.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
        

    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper" >
            @include('navigations.navigationv1')
            @include('sidebars.sidebarv1')
            <!-- Page Content -->
            <div class="content-wrapper" id="app">
                <router-view/>
            </div>
        </div>
        <!-- jQuery -->
         <!-- Scripts -->
         <!-- <script>
            window.function 
         </script> -->
         <!-- <script async src="https://maps.googleapis.com/maps/api/js?libraries=places&key={{ env('GOOGLE_MAP_API_KEY') }}"></script> -->
         <script src="{{ asset('js/manifest.js') }}"></script>
         <script src="{{ asset('js/vendor.js') }}"></script>
         <script src="{{ asset('js/app.js') }}"></script>
    
        
        <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

    </body>
</html>
