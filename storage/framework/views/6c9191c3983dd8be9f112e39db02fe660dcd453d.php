<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border margin-tb25">
      <div class="middle mtb-60">
        <h1 class="text-center mb-40"><?php echo e(trans('lang.categories')); ?></h1>
         <div class="search-oh search-box1">
            <input type="image" class="oh-btn search" img="" src="<?php echo e(custom_asset('brn-search.png')); ?>">
            <input type="text" id="searchInput" placeholder="<?php echo e(trans('lang.search')); ?>" class="oh-input">
            <div class="clr"></div>
         </div>
         <div class="row">
            <!-- Start of row -->
            <?php $__currentLoopData = $Categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 contact-list2">
               <a href="<?php echo e(route('directories.index' ,[
                'category' => $Category->slug
                ])); ?>"><?php echo e($Category->name); ?></a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </div>
         <!-- End of row -->
      </div>
      <?php echo $__env->make('sections.pagination.paginationv1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>


<?php /**PATH /var/www/staging/resources/views/directories/categories/listing.blade.php ENDPATH**/ ?>