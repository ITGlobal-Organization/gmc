<!--Start Benefits Tab Area-->
<div class="offers-tab">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border margin-tb25">
        <div class="row">
            <?php if(isset($Offers)): ?>
                <?php $__currentLoopData = $Offers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Offer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="main-box">
                            <div class="box-img card-image ">
                                <a href="<?php echo e(route('offers.get',$Offer->slug)); ?>"><img src="<?php echo e($Offer->image_url); ?>"
                                    alt="" width="100%" class="box-img" /></a>
                            </div>
                            <div class="box-name home">
                                <div style="display: flex; justify-content: center; align-items: center;">
                                    <a href="<?php echo e(route('offers.get',$Offer->slug)); ?>"
                                        style="color: #ffffff; text-decoration: none; font-size: 14px; padding: 5px;">
                                        <?php echo e($Offer->company_name); ?>

                                    </a>
                                </div>
                            </div>
                            <div class="box-text">
                                <?php echo $Offer->offer_details; ?>

                            </div>
                        </div>
                        <div class="clr"></div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="clr"></div>
</div>
<!--End Benefits Tab Area-->
<?php /**PATH /var/www/staging/resources/views/tabs/offers.blade.php ENDPATH**/ ?>