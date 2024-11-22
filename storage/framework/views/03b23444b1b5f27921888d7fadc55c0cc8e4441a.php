<h1 class="mb-80 text-center"><?php echo e(trans('lang.offers')); ?></h1>

<div class="col-xs-12 col-sm-7 col-md-7 col-lg-8 padding border mb-25">
    <span class="listin-found"><b><?php echo e($count); ?></b> Listings Found</span>
</div>

<div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 padding border mb-25">
<?php echo $__env->make('sections.wigets.selectv1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border-all"></div>
<div class="row">
    <?php if(isset($Offers)): ?>
        <?php $__currentLoopData = $Offers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Offer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="main-box">
                    <div class="brand-img">
                        <?php
                            $User = auth()->user();
                          
                        ?>

                        <?php if(!isset($User)): ?>
                            <a href="<?php echo e(route('login')); ?>">
                                <?php echo $__env->make('components.image', [
                                    'image' => $Offer->image_url,
                                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                             
                            </a>
                        <?php else: ?>
                       
                            <a href="<?php echo e(route('offers.get', $Offer->slug)); ?>">
                                <?php echo $__env->make('components.image', [
                                    'image' => $Offer->image_url,
                                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="box-name home home-text">
                        <?php if(!isset($User)): ?>
                            <a href="<?php echo e(route('login')); ?>">
                            <?php else: ?>
                                <a href="<?php echo e(route('offers.get', $Offer->slug)); ?>">
                        <?php endif; ?>
                        <?php echo e(shortenTextLength($Offer->company_name)); ?> </a>
                    </div>
                    <div class="brand-text">
                        <?php echo shortenTextLength($Offer->offer_details); ?>

                    </div>

                </div>
                <div class="clr"></div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</div>
<?php echo $__env->make('sections.pagination.paginationv1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /var/www/staging/resources/views/sections/offers.blade.php ENDPATH**/ ?>