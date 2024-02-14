<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding mb-20">
    <div class="table-div1">
        <table>
            <tr>
                <th class="side1">Date</th>
                <th>Title</th>
                <th>Time</th>
                <th>Location</th>
                <th>City</th>
                <th>Cost</th>
                <th>Booking Link</th>
                <th><?php echo e(trans('lang.status')); ?></th>
                <th><?php echo e(trans('lang.action')); ?></th>

            </tr>

            <?php $__currentLoopData = $Events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(str_contains($Event->price, '-')): ?>
                    <?php$price = explode('-', $Event->price);
                                                                $Event->price = '€' . $price[0] . '-€' . $price[1]; ?> ?> ?> ?>
                <?php else: ?>
                    <?php $Event->price = $Event->price; ?>
                <?php endif; ?>
                <tr>
                    <td class="list10"><?php echo e(date('d-M-Y', strtotime($Event->event_date))); ?></td>
                    <td class="list20">
                        <?php echo e($Event->title); ?>

                    </td>
                    <td class="list20">
                        <?php echo e(\Carbon\Carbon::createFromFormat('H:i:s', $Event->time)->format('h:i A')); ?>

                    </td>
                    <td class="list20"><?php echo e($Event->venue); ?></td>
                    <td class="list20"><?php echo e($Event->city); ?></td>
                    <td class="list20"><?php echo e($Event->price); ?></td>
                    <td class=" list30">
                        <span class="btn-download"><a
                                href="<?php echo e($Event->booking_link); ?>">Book
                                Here</a></span>
                            </td>
                    <td class="list30"><div class="<?php echo e($Event->is_approved==1?'approved':'notapproved'); ?>" style="top:0px;"><?php echo e($Event->is_approved==1?trans('lang.approved'):trans('lang.not-approved')); ?></div></td>

                    <td class="list30">
                        <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 mb-25 text-center edit-btn">

                            <a href="#" style="font-size: 12px;" class="edit"
                                data-id="<?php echo e($Event->id); ?>"><?php echo e(trans('lang.edit')); ?></a>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 mb-25 text-center delete-btn">

                            <a href="#" style="font-size: 12px;" class="delete"
                                data-id="<?php echo e($Event->id); ?>"><?php echo e(trans('lang.delete')); ?></a>
                        </div>

                        </div>

                    </td>

                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
    <div class="clr"></div>
</div>
<?php /**PATH /var/www/staging/resources/views/user/event/listing.blade.php ENDPATH**/ ?>