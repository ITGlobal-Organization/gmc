<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <input type="hidden" class="count" value="<?php echo e($count); ?>"/>
    <?php 
        $totalPages = 0; 
        $itemPerPage = isset($perPage)?$perPage:config('site_config.constants.item_per_page');
    ?>
    <?php $totalPages = (int)ceil($count / $itemPerPage); ?>
    <?php if($totalPages > 0 && $count > $itemPerPage): ?>
 
    <div class="pagination">
        <a href="#" title="previous page" class="page prev"><svg fill="currentColor"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/></svg> <?php echo e(trans('lang.previous')); ?></a>
            <?php for($i = 1; $i <= $totalPages; $i++): ?>
               
                    <a href="#" class="<?php echo e($i == $page?'page-active':''); ?> page" data-page = "page-<?php echo e($i); ?>"><?php echo e($i); ?></a>
                
                 
            <?php endfor; ?>
        <a href="#" title="next page" class="page next"><?php echo e(trans('lang.next')); ?> <svg fill="currentColor"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg></a>
    <?php endif; ?>
</div><?php /**PATH /var/www/staging/resources/views/sections/pagination/paginationv1.blade.php ENDPATH**/ ?>