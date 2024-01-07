<?php $__env->startSection('content'); ?>



<!--Start Middle-->

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">

<div class="middle mtb-60">

<h1 class="text-center mb-40"><?php echo e($Offer->company_name); ?></h1>



<div class="text-center mtb-25">

<img src="<?php echo e(isset($Offer->media[0]->image_url) ? $Offer->media[0]->image_url : asset('/media/image-not-found.png')); ?>" alt=""/></a>

</div>

<p><?php echo $Offer->offer_details; ?></p>
</div>

<div class="clr"></div>

</div>

<!--End Middle-->

<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.layoutv2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/staging/resources/views/offers/offer-details.blade.php ENDPATH**/ ?>