<h6 class="mb-25"><?php echo e(trans('lang.latest-post')); ?></h6>


<?php $__currentLoopData = $LatestBlog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-xs-12 col-sm-6 col-md-12 col-lg-12 padding">

<a href="<?php echo e(route('blogs.get',$blog->slug)); ?>"><img src="<?php echo e($blog->image_url); ?>" alt="Blog Image" width="100%" class="latest-img" /></a>
<div class="latest-text">
<a href="<?php echo e(route('blogs.get',$blog->slug)); ?>"><?php echo e($blog->title); ?></a>
</div>
<span class="p-date"><?php echo e($blog->created_at); ?></span>
<div class="border-bot"></div>

<div class="clr"></div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /var/www/staging/resources/views/blogs/left.blade.php ENDPATH**/ ?>