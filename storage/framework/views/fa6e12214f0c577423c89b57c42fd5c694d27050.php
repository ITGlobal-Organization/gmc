<h1 class="mb-80 text-center"><?php echo e(trans('lang.platiniumpartners')); ?></h1>

<div class="col-xs-12 col-sm-7 col-md-7 col-lg-8 padding border mb-25">
    <span class="listin-found"><b><?php echo e(count($PlatinumPartners)); ?></b> Listings Found</span>
</div>

<div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 padding border mb-25">
    <select class="pd-sort sort_by">
        <option value=""><?php echo e(trans('lang.sort_by')); ?></option>
        <option value="title-asc">A to Z</option>
        <option value="title-desc">Z to A</option>
        <option value="created_at-desc"><?php echo e(trans('lang.latest_to_oldest')); ?></option>
        <option value="created_at-asc"><?php echo e(trans('lang.oldest_to_latest')); ?></option>
    </select>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border-all"></div>
<div class="row">
    <?php if(isset($PlatinumPartners)): ?>
    <?php $__currentLoopData = $PlatinumPartners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $PlatinumPartner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">

        <div class="main-box"> 

            <div class="brand-img platinum-partners-card card-image">

                <a href="<?php echo e(route('platinum-partners.get',$PlatinumPartner->slug)); ?>"><img src="<?php echo e($PlatinumPartner->image_url != "" ?  $PlatinumPartner->image_url : asset('media/image-not-found.png')); ?>" alt="" width="150" /></a>

            </div>
            <div class="box-name home home-text">
                <a href="<?php echo e(route('platinum-partners.get',$PlatinumPartner->slug)); ?>">
                    <?php echo e($PlatinumPartner->title); ?>

                </a>
            </div>
            <?php  $Description =$PlatinumPartner->description; ?> 
            <?php echo $__env->make('sections.wigets.description', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
           
        </div>

        <div class="clr"></div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</div>
<?php /**PATH /var/www/staging/resources/views/sections/platinum-partners.blade.php ENDPATH**/ ?>