<div class="middle mtb-60">
    <div>
        <h1 class="mb-25 text-center"><?php echo e(trans('lang.offers')); ?></h1>
        <!-- <p class="mb-40 text-center">
            Here we have harnessed space (indoors and out) from within our membership and partners.
            <br>
            This includes property for long term let or sale and also space for use and hire by the hour, day, week,
            month and so on.
            <br>
            There is a variety of options with different facilities e.g. parking and catering.
            <br>
            Please register to upload space you have to offer or search for your needs if you are looking.
        </p> -->
    </div>
    
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
    <div class="middle mtb-60">

        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-6 padding border mb-25">
            <span class="listin-found"><b><?php echo e($count); ?></b> <?php echo e(trans('lang.listing')); ?> <?php echo e(trans('lang.found')); ?></span>
        </div>
        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 padding border mb-25 text-center">
            <div class="addnew-btn"><a href="<?php echo e(route('user.offers.create')); ?>"><?php echo e(trans('messages.add_new_msg',[
                    'attribute' => trans('lang.offer')
                ])); ?></a></div>
            <div class="clr"></div>
        </div>
        <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 padding border mb-25">
            <select class="pd-sort sort_by">
                <option value=""><?php echo e(trans('lang.sort_by')); ?></option>
                <option value="title-asc">A to Z</option>
                <option value="title-desc">Z to A</option>
                <option value="id-asc"><?php echo e(trans('lang.latest_to_oldest')); ?></option>
                <option value="id-desc"><?php echo e(trans('lang.oldest_to_latest')); ?></option>
            </select>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border-all"></div>

        <div class="row">
            <?php $__currentLoopData = $Offers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Offer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="<?php echo e($Offer->is_approved==1?'approved':'notapproved'); ?>"><?php echo e($Offer->is_approved==1?trans('lang.approved'):trans('lang.not-approved')); ?></div>
                    <div class="main-box">
                        <div class="box-img card-image">
                            <a href="#"><img src="<?php echo e($Offer->image_url); ?>" alt=""
                                    width="100%" class="box-img" /></a>
                        </div>
                        <!--<div class="box-date"><i class="far fa-calendar-alt" style="color: #ffffff;"></i> March 11, 2022</div>-->
                        <div class="box-name mtb-15">
                            <a href="#">
                                <?php echo e($Offer->title); ?>

                            </a>

                        </div>
                       

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mb-25 text-center edit-btn">
                            <a href="#" style="color: #000;font-size: 16px;" class="edit"
                                data-id="<?php echo e($Offer->id); ?>"><?php echo e(trans('lang.edit')); ?></a>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mb-25 text-center delete-btn">
                            <a href="#" style="color: #000;font-size: 16px;" class="delete"
                                data-id="<?php echo e($Offer->id); ?>"><?php echo e(trans('lang.delete')); ?></a>
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
</div>
<?php /**PATH /var/www/staging/resources/views/user/offer/listing.blade.php ENDPATH**/ ?>