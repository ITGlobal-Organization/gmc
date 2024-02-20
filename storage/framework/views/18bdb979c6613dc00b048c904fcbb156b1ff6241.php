<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
<div class="middle mtb-60">
    <div>
        <h1 class="mb-25 text-center"><?php echo e(trans('lang.employees')); ?></h1>

    </div>

        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-6 padding border mb-25">
            <span class="listin-found"><b><?php echo e($count); ?></b> <?php echo e(trans('lang.listings')); ?> <?php echo e(trans('lang.found')); ?></span>
        </div>
        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 padding border mb-25 text-center">
            <div class="addnew-btn"><a href="<?php echo e(route('user.employees.create')); ?>"><?php echo e(trans('messages.add_new_msg',[
                    'attribute' => trans('lang.employee')
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
            <?php $__currentLoopData = $Employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="main-box">
                        <div class="box-img card-image">
                            <a href="Employee-details.php"><img src="<?php echo e($Employee->image_url); ?>" alt=""
                                    width="100%" class="box-img" /></a>
                        </div>
                        <!--<div class="box-date"><i class="far fa-calendar-alt" style="color: #ffffff;"></i> March 11, 2022</div>-->
                        <div class="box-name mtb-15">
                            <a href="Employee-details.php">
                                <?php echo e($Employee->first_name); ?> <?php echo e($Employee->last_name); ?>

                            </a>

                        </div>
                   

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mb-25 text-center">
                            <i class="fas fa-edit" style="color: #0000ff;"></i>
                            <a href="#" style="color: #000;font-size: 16px;" class="edit"
                                data-id="<?php echo e($Employee->id); ?>">Edit</a>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mb-25 text-center">
                            <i class="fas fa-trash-alt" style="color: #ff0000;"></i>
                            <a href="#" style="color: #000;font-size: 16px;" class="delete"
                                data-id="<?php echo e($Employee->id); ?>">Delete</a>
                        </div>

                        <div class="clr"></div>
                    </div>

                    <div class="clr"></div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="clr"></div>

    <div class="clr"></div>
</div>
</div>
<?php /**PATH /var/www/staging/resources/views/user/employee/listing.blade.php ENDPATH**/ ?>