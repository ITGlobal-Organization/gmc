<!--Start News Tab Area-->
<div class="news-tab">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border margin-tb25">
        <div class="row">
            <?php if(isset($News)): ?>
                <?php $__currentLoopData = $News; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $News): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="main-box">
                            <div class="box-img card-image">
                                <a href="<?php echo e(route('blogs.get', $News->slug)); ?>"><img src="<?php echo e($News->image_url); ?>"
                                        alt="" width="100%" class="box-img" /></a>
                            </div>
                            <div class="box-name home">
                                <div style="display: flex; justify-content: center; align-items: center;">
                                    <a href="<?php echo e(route('blogs.get', $News->slug)); ?>"
                                        style="color: #ffffff; text-decoration: none; font-size: 14px; padding: 5px;">
                                        <?php echo e($News->title); ?>

                                    </a>
                                </div>
                            </div>
                            <?php  $Description =$News->description; ?> 
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
<!--End News Tab Area-->
<?php /**PATH /var/www/staging/resources/views/tabs/news.blade.php ENDPATH**/ ?>