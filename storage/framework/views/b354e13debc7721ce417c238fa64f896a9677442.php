<?php $__env->startSection('content'); ?>
<section class="page_404">

	<div class="container">
		<div class="row">	
		<div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
		<h1 class="text-center "><?php echo e(trans('messages.errors.404.code')); ?></h1>
		<div class="four_zero_four_bg">
		</div>
		<div class="contant_box_404">
		<h3 class="h2"><?php echo e(trans('messages.errors.404.heading')); ?></h3>
		<p><?php echo e(trans('messages.errors.404.description')); ?></p>
		
		</div>
		</div>
		</div>
	</div>
    
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make(config('site_config.constants.base_layout'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/staging/resources/views/errors/404.blade.php ENDPATH**/ ?>