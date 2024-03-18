<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding mb-20">
    <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 padding border mb-25">
        <select class="pd-sort sort_by">
            <option value=""><?php echo e(trans('lang.sort_by')); ?></option>
            <option value="title-asc">A to Z</option>
            <option value="title-desc">Z to A</option>

            <option value="event_date-asc"><?php echo e(trans('lang.upcoming_first')); ?></option>
            <option value="event_date-desc"><?php echo e(trans('lang.distant_first')); ?></option>
        </select>
    </div>

<!--Start calendar Area-->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border-all"></div>

<!--Start Events Tab Area-->
<div class="events-tab">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border margin-tb25">
        <div class="row">
            <?php if(isset($Events)): ?>
                <?php $__currentLoopData = $Events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="main-box">
                            <div class="box-img card-image">
                          
                                <a href="<?php echo e($Event->booking_link); ?>" target="_blank">
                                <?php echo $__env->make('components.image',[
										
                                        'image' => $Event->image_url
                                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
                                    </a>
                            </div>
                            <div class="box-date"><i class="far fa-calendar-alt" style="color: #ffffff;"></i>
                                <?php echo e(\Carbon\Carbon::parse($Event->event_date)->format('d-m-Y')); ?></div>
                            <div class="box-name">
                                <a href="<?php echo e($Event->booking_link); ?>" target="_blank">
                                    <?php echo e(shortenTextLength($Event->title)); ?>

                                </a>
                            </div>
                            <div class="box-text" >
                                <b>Date:</b> <?php echo e(date('d-M-Y', strtotime($Event->event_date))); ?> <b>Time:</b> <?php echo e(\Carbon\Carbon::createFromFormat('H:i:s',$Event->time)->format('h:i A')); ?><br>
                                <b>Venue:</b> <?php echo e($Event->venue); ?>

                                <b>Price:</b> <?php echo e($Event->price); ?><br><br>
                                <span class="btn-download"><a href="<?php echo e($Event->booking_link); ?>" target="_blank">Book Now</a>
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
<!--End Events Tab Area-->
</div>
<?php echo $__env->make('sections.pagination.paginationv1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /var/www/staging/resources/views/eventcalenders/event-details-box.blade.php ENDPATH**/ ?>