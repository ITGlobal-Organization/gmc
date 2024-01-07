<h1 class="mb-25 text-center"><?php echo e(trans('lang.space-finders')); ?></h1>
<p class="mb-40 text-center">
    <?php echo trans('content.space-finders.description'); ?>

</p>

<div class="col-xs-12 col-sm-7 col-md-7 col-lg-8 padding border mb-25">
    <span class="listin-found"><b><?php echo e($count); ?></b> Listings Found</span>
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
    <?php $__currentLoopData = $SpaceFinders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $SpaceFinder): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">

            <div class="main-box">

                <div class="box-img card-image">
                    <?php
                        $User = auth()->user();
                    ?>

                    <?php if(!isset($User)): ?>
                        <a href="<?php echo e(route('login')); ?>">
                            <?php echo $__env->make('components.image', [
                                'image' => $SpaceFinder->image_url,
                            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <img src="" alt="" width="100%" class="box-img" />
                        </a>
                    <?php else: ?>
                        <a href="<?php echo e(route('space-finders.get', $SpaceFinder->slug)); ?>">
                            <?php echo $__env->make('components.image', [
                                'image' => $SpaceFinder->image_url,
                            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </a>
                    <?php endif; ?>

                </div>
                <!--<div class="box-date"><i class="far fa-calendar-alt" style="color: #ffffff;"></i> March 11, 2022</div>-->
                <div class="box-name home home-text">
                    <div style="display: flex; justify-content: center; align-items: center;">
                        <?php
                            $User = auth()->user();
                        ?>
                        <?php if(!isset($User)): ?>
                            <a href="<?php echo e(route('login')); ?>">
                            <?php else: ?>
                                <a href="<?php echo e(route('space-finders.get', $SpaceFinder->slug)); ?>">
                        <?php endif; ?>
                        <?php echo e(shortenTextLength($SpaceFinder->title)); ?> </a>
                    </div>
                </div>
                <div class="box-text1">
                    <i class="fad fa-check"
                        style="--fa-primary-color: #5f439b; --fa-secondary-color: #5f439b;"></i>&nbsp;<?php echo e($SpaceFinder->categories); ?>

                </div>

            </div>

            <div class="clr"></div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<div class="clr"></div>
<?php echo $__env->make('sections.pagination.paginationv1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /var/www/staging/resources/views/sections/space-finders.blade.php ENDPATH**/ ?>