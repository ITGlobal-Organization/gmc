<?php $__env->startSection('content'); ?>



<!--Start Middle-->

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">

<div class="middle mtb-60">

<h1 class="text-center mb-40"><?php echo e($PlatinumPartner->title); ?></h1>



<div class="text-center mtb-25">

<?php if(isset($PlatinumPartner->media[0])): ?>
    <img src="<?php echo e($PlatinumPartner->media[0]->image_url); ?>" alt="Logo" class="blog-img" />
<?php else: ?>
    <img src="<?php echo e(custom_asset('image-not-found.png')); ?>" alt="Logo" class="blog-img" />
<?php endif; ?>

</div>

<p>

<?php echo $PlatinumPartner->description; ?>



</p>
<a href="<?php echo e(isset($PlatinumPartner->web_url)?$PlatinumPartner->web_url:'javascript:void(0);'); ?>" target="_blank"> <?php echo e(trans('lang.click-here')); ?></a>
</div>

<div class="clr"></div>

</div>

<!--End Middle-->

<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.layoutv2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/staging/resources/views/platinumpartners/platinum-partner.blade.php ENDPATH**/ ?>