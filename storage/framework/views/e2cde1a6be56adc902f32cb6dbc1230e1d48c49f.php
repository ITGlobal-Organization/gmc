



    <div class="middle mtb-60">
    <div>
        <h1 class="mb-25 text-center"><?php echo e(trans('lang.news')); ?></h1>

    </div>
        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-6 padding border mb-25">
            <span class="listin-found"><b><?php echo e(count($Blogs)); ?></b> Listings Found</span>
        </div>
        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 padding border mb-25 text-center">
            <div class="addnew-btn"><a href="<?php echo e(route('user.news.create')); ?>"><?php echo e(trans('messages.add_new_msg',[
                'attribute' => trans('lang.news')
            ])); ?></a></div>
            <div class="clr"></div>
        </div>
        <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 padding border mb-25">
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
            <?php $__currentLoopData = $Blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="<?php echo e($Blog->is_approved==1?'approved':'notapproved'); ?>"><?php echo e($Blog->is_approved==1?trans('lang.approved'):trans('lang.not-approved')); ?></div>
                    <div class="main-box">
                        <div class="box-img card-image">
                            <a href="spacefinder-details.php"><img src="<?php echo e($Blog->image_url); ?>" alt="Blog Image"
                                    width="100%" class="box-img" /></a>
                        </div>
                        <!--<div class="box-date"><i class="far fa-calendar-alt" style="color: #ffffff;"></i> March 11, 2022</div>-->
                        <div class="box-name mtb-15">
                            <a href="spacefinder-details.php">
                                <?php if(strlen($Blog->title) > 30): ?>
                                    <?php echo e(substr($Blog->title, 0, 20).'...'); ?>

                                <?php else: ?>
                                    <?php echo e($Blog->title); ?>

                                <?php endif; ?>

                            </a>

                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mb-25 text-center edit-btn">

                            <a href="#"  class="edit"
                                data-id="<?php echo e($Blog->id); ?>"><i class="fa fa-edit"></i></a>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mb-25 text-center delete-btn">

                            <a href="#"  class="delete"
                                data-id="<?php echo e($Blog->id); ?>"><i class="fa fa-trash"></i></a>
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


<?php /**PATH /var/www/staging/resources/views/user/news/listing.blade.php ENDPATH**/ ?>