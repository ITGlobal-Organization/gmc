<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex,nofollow">
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	<link href="<?php echo e(custom_asset('bootstrap.css','css')); ?> " rel="stylesheet" type="text/css">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo e(custom_asset('style.css','css')); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo e(custom_asset('extra.css','css')); ?>" rel="stylesheet" type="text/css">

	<link href="<?php echo e(custom_asset('easy-responsive-tabs.css','css')); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo e(asset(config('site_config.assets.plugins').'select2/css/select2.css')); ?>" rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.min.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="<?php echo e(custom_asset('favicon.jpg')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(custom_asset('font-awesome.min.css','css')); ?>">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />



    <link href="<?php echo e(custom_asset('owl.carousel.css','css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(custom_asset('owl.theme.css','css')); ?>" rel="stylesheet" type="text/css">

	<link href="<?php echo e(custom_asset('easy-responsive-tabs.css','css')); ?>" rel="stylesheet" type="text/css">


	<!-- <script src="<?php echo e(asset(config('site_config.assets.plugins').'jquery/jquery.js')); ?>"></script>  -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


	<title><?php echo e(config('app.name')); ?> | <?php echo e(isset($title)?$title:'Page'); ?></title>
</head>
<body>
<!--Start Header-->
<?php
	$User = auth()->user();
?>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
	<?php echo $__env->make('headers.headerv4',[
		'User' => $User
	], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
</div>

<!--End Header-->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
<?php echo $__env->make('components.loader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>



<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
	<div class="middle mtb-60">
		<div class="col-2 text-center mt-10"></div>
		<?php if(\Request::route()->getName() =='user.dashboard'): ?>
		<h1 class="mb-40 text-center"><?php echo e(trans('messages.welcome_msg',[
		'attribute' => $User->first_name
	])); ?></h1>
			<?php endif; ?>
	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 border padding">
		<?php echo $__env->make('sidebars.sidebarv4', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</div>

	   <!--Start Middle-->
	   <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 border padding dashboard-layout">
        	<?php echo $__env->yieldContent('content'); ?>
       </div>
	</div>

       <!--End Middle-->
</div>

<!--Start Left Side-->





<!--End Middle-->

<!--Start Footer-->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
<?php echo $__env->make('footers.footerv2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
</div>
<!--End Footer-->


    <!-- <script src="<?php echo e(asset(config('site_config.assets.plugins').'jquery/jquery.min.js')); ?>"></script> -->


<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.all.min.js"></script>

<script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>

 <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  -->
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <!-- Select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>
const blade_config = {
	baseUrl : "<?php echo e(config('app.url')); ?>"
}
</script>
<script src="<?php echo e(custom_asset('common.js','scripts')); ?>"></script>
<script src="<?php echo e(custom_asset('owl.carousel.js','scripts')); ?>"></script>
<script src="<?php echo e(custom_asset('utils.js','scripts')); ?>"></script>
<script src="<?php echo e(custom_asset('banner-script.js','scripts')); ?>"></script>

<script>
		// $(document).ready(function(){
		// 	$('select').select2();
		// })

	</script>
<?php echo $__env->yieldContent('scripts'); ?>

</body>
</html>
<?php /**PATH /var/www/staging/resources/views/layouts/auth.blade.php ENDPATH**/ ?>