<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding margin-tb35">
    <div class="row search-con">
        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 border padding border ">
            
                <select class="category oh-select search-box">
                    <option value=""><?php echo e(trans('lang.select_msg',['attribute' => trans('lang.category')])); ?></option>
                <?php $__currentLoopData = $Categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($Category->id); ?>" <?php echo e($category == $Category->id?'selected':''); ?>><?php echo e($Category->text); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            
        </div>
        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-4 border padding border ">
            <div class="search-oh search-box1">
                <input type="image" class="oh-btn" img="" src="<?php echo e(custom_asset('brn-search.png')); ?>">
                <input type="text" placeholder="Search" class="oh-input search-box">
                <div class="clr"></div>
            </div>
            <div class="clr"></div>
        </div>

        <!--End search Area-->
        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 border padding border">
            <div class="search-ohch">
                        <input class="ohch-input" name="date" id="start-date" placeholder="Date for visit DD-MM-YYYY"
                            required="required" type="date">
                        <div class="clr"></div>
            </div>
            <span class="ab-to"><?php echo e(trans('lang.to')); ?></span>
            <div class="search-ohch">
                <input class="ohch-input" name="date" id="end-date" placeholder="Date for visit DD-MM-YYYY"
                            required="required" type="date">
                <div class="clr"></div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1 border padding border">
            <div class="addnew-btn clear-filters"><a href="#"><?php echo e(trans('lang.clear-filter')); ?></a></div>
        </div>
        
    </div>
    <div class="table-div1">
        <table>

            <tr>
                <th class="side1">Date</th>
                <th>Title</th>
                <th>Time</th>
                <th>Location</th>
                <th class="disply-table">City</th>
                <th class="disply-table">Cost</th>
                <th class="side2">Booking Link</th>
            </tr>

            <?php $__currentLoopData = $Events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(str_contains($Event->price, '-')): ?>
                    <?php$price = explode('-', $Event->price);
                        $Event->price = '' . $price[0] . '' . $price[1];
                    ?>
                <?php else: ?>
                    <?php $Event->price = "".$Event->price; ?>
                <?php endif; ?>
                <tr>
                    <td class="list10"><?php echo e(date('d-M-Y', strtotime($Event->event_date))); ?></td>
                    <td class="list20"> <?php echo e(shortenTextLength($Event->title)); ?></td>
                    <td class="list20"><?php echo e(\Carbon\Carbon::createFromFormat('H:i:s', $Event->time)->format('h:i A')); ?>

                    </td>
                    <td class="list20"><?php echo e($Event->venue); ?></td>

                    <td class="list20"><?php echo e($Event->city); ?></td>
                    <td class="list20"><?php echo e($Event->price); ?></td>
                    <?php if($Event->category_id == 2): ?>
                    <td class=" list30"><span class="btn-download"><a href="<?php echo e($Event->booking_link); ?>"
                                target="_blank">Book Here</a></span></td>
                    <?php else: ?>
                        <td class=" list30"><span class="btn-download" ><a href="<?php echo e(route('event.book',$Event->slug)); ?>" class="btn-vcc" data-id="<?php echo e($Event->price); ?>">Book Here</a></span></td>
                    <?php endif; ?>

                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



        </table>
    </div>
    <div class="clr"></div>
</div>
<?php echo $__env->make('sections.pagination.paginationv1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!--  -->
<!--  -->

<!--End Table listing-->
<?php /**PATH /var/www/staging/resources/views/eventcalenders/events-detail.blade.php ENDPATH**/ ?>