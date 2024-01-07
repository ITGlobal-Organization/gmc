<!--Start Platinum Partners Tab Area-->
<div class="platinum-partners-tab">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border margin-tb25">
            <div class="row">
              
                <?php if(isset($PlatinumPartners)): ?>
                    <?php $__currentLoopData = $PlatinumPartners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $PlatinumPartner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="main-box">
                                <div class="brand-img platinum-partners-card card-image">
                                    <a href="<?php echo e(route('platinum-partners.get',$PlatinumPartner->slug)); ?>"><img src="<?php echo e($PlatinumPartner->image_url); ?>"
                                            alt="" width="100%" class="box-img" /></a>
                                </div>
                                <div class="box-name home home-text">
                                    <div style="display: flex; justify-content: center; align-items: center;">
                                        <a href="<?php echo e(route('platinum-partners.get',$PlatinumPartner->slug)); ?>"
                                            style="color: #ffffff; text-decoration: none; font-size: 14px; padding: 5px;">
                                            <?php echo e($PlatinumPartner->title); ?>

                                        </a>
                                    </div>
                                </div>
                                <div class="brand-text">
                                    <?php echo $PlatinumPartner->description; ?>

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
    <!--End Platinum Partners Tab Area-->
<?php /**PATH /var/www/staging/resources/views/tabs/platinum-partners.blade.php ENDPATH**/ ?>