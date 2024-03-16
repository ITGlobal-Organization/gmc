<div class="middle mtb-60">
    <div>
        <h1 class="mb-25 text-center"><?php echo e(trans('lang.space_finders')); ?></h1>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">


        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-6 padding border mb-25">
            <span class="listin-found"><b><?php echo e(count($SpaceFinders)); ?></b> <?php echo e(trans('lang.listings')); ?> <?php echo e(trans('lang.found')); ?></span>
        </div>
        <div class="col-xs-12 col-sm-2 col-md-3 col-lg-3 padding border mb-25 text-center">
            <div class="addnew-btn"><a href="<?php echo e(route('user.space-finders.create')); ?>"><?php echo e(trans('messages.add_new_msg',[
                    'attribute' => trans('lang.space_finder')
                ])); ?></a></div>
            <div class="clr"></div>
        </div>
        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 padding border mb-25">
            <select class="pd-sort sort_by">
                <option value=""><?php echo e(trans('lang.sort_by')); ?></option>
                <option value="title-asc">A to Z</option>
                <option value="title-desc">Z to A</option>
                <option value="created_at-asc"><?php echo e(trans('lang.latest_to_oldest')); ?></option>
                <option value="created_at-desc"><?php echo e(trans('lang.oldest_to_latest')); ?></option>
            </select>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border-all"></div>

        <div class="row">
            <?php $__currentLoopData = $SpaceFinders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $SpaceFinder): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="main-box">
                    <div class="<?php echo e($SpaceFinder->is_approved==1?'approved':'notapproved'); ?>"><?php echo e($SpaceFinder->is_approved==1?trans('lang.approved'):trans('lang.not-approved')); ?></div>
                        <div class="box-img card-image">
                            <a href="spacefinder-details.php"><img src="<?php echo e($SpaceFinder->image_url); ?>" alt="Logo"
                                    width="100%" class="box-img" /></a>
                        </div>
                        <!--<div class="box-date"><i class="far fa-calendar-alt" style="color: #ffffff;"></i> March 11, 2022</div>-->
                        <div class="box-name mtb-15">
                            <a href="spacefinder-details.php">
                                <?php echo e($SpaceFinder->title); ?>

                            </a>

                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mb-25 text-center edit-btn">

                            <a href="#" style="font-size: 16px;" class="edit"
                                data-id="<?php echo e($SpaceFinder->id); ?>"><?php echo e(trans('lang.edit')); ?></a>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mb-25 text-center delete-btn">

                            <a href="#" style="font-size: 16px;" class="delete"
                                data-id="<?php echo e($SpaceFinder->id); ?>"><?php echo e(trans('lang.delete')); ?></a>
                        </div>

                        <div class="clr"></div>
                    </div>

                    <div class="clr"></div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="clr"></div>
    </div>
    <div class="clr"></div>
</div>
<?php /**PATH /var/www/staging/resources/views/user/space-finder/listing.blade.php ENDPATH**/ ?>