<?php $__env->startSection('content'); ?>
<div class="categories">
   
</div>
<div class="clr"></div>
<script>
  let totalPages = 0;
        let filters = {
            search:"",
            start:1

        }

        $(document).on('keyup','#searchInput',function(e){
            filters.search = $(this).val();
            setTimeout(() => {
               getCategoriesListings();
            }, 2000);
            
        });

        $(document).ready(function() {
         getCategoriesListings();
        });
        // Pagination
        

      function getCategoriesListings() {
            ajaxGet("<?php echo e(route('directories.category.ajax')); ?>", filters, ".categories", responseType = 'html');
      }

      let paginationConfig = {
            renderFunction:getCategoriesListings
        }
   
</script>
<script src="<?php echo e(custom_asset('pagination.js','scripts')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layoutv2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/staging/resources/views/directories/categories/categories.blade.php ENDPATH**/ ?>