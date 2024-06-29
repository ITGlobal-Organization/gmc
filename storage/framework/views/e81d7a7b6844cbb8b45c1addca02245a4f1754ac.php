<!--Start Events Tab Area-->
<div class="events-tab">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border margin-tb25">
        <div class="row">
            <?php if(isset($Events)): ?>
                <?php $__currentLoopData = $Events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="main-box">
                            <div class="box-img card-image">
                                <a href="<?php echo e($Event->booking_link); ?>" target="_blank"><img src="<?php echo e($Event->image_url); ?>" alt="not found"
                                        width="100%" class="box-img" /></a>
                            </div>
                            <div class="box-date"><i class="far fa-calendar-alt" style="color: #ffffff;"></i>
                                <?php echo e(\Carbon\Carbon::parse($Event->event_date)->format('d-m-Y')); ?></div>
                            <div class="box-name">
                                <a href="<?php echo e($Event->booking_link); ?>" target="_blank">
                                    <?php echo e($Event->title); ?>

                                </a>
                            </div>
                            <?php  $Description =$Event->description; ?> 
                            <?php echo $__env->make('sections.wigets.description', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
<?php /**PATH /var/www/staging/resources/views/tabs/events.blade.php ENDPATH**/ ?>