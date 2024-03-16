<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <link rel="icon" type="image/x-icon" href="<?php echo e(asset('images/fav-icon.png')); ?>">

        <title><?php echo e(config('app.name')); ?> - <?php echo e(isset($title)?$title:'Admin'); ?></title>

        <!-- Fonts -->
        <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/skeleton-elements.css')); ?>">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo e(asset('plugins/fontawesome-free/css/all.min.css')); ?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo e(asset('dist/css/adminlte.min.css')); ?>">
        

    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper" >
            <?php echo $__env->make('navigations.navigationv1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('sidebars.sidebarv1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
         <!-- <script async src="https://maps.googleapis.com/maps/api/js?libraries=places&key=<?php echo e(env('GOOGLE_MAP_API_KEY')); ?>"></script> -->
         <script src="<?php echo e(asset('js/manifest.js')); ?>"></script>
         <script src="<?php echo e(asset('js/vendor.js')); ?>"></script>
         <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    
        
        <script src="<?php echo e(asset('plugins/jquery/jquery.min.js')); ?>"></script>
        <!-- Bootstrap 4 -->
        <script src="<?php echo e(asset('plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo e(asset('dist/js/adminlte.min.js')); ?>"></script>

    </body>
</html>
<?php /**PATH /var/www/staging/resources/views/layouts/admin.blade.php ENDPATH**/ ?>