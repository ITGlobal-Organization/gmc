<?php $__env->startSection('content'); ?>
	<!--Start Middle-->
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
		<div class="middle mtb-60">

			<h1 class="mb-40 text-center"><?php echo e(trans('lang.news')); ?> <?php echo e(trans('lang.categories')); ?></h1>

			<div class="blogs">

			</div>



			<div class="clr"></div>
		</div>
		<div class="clr"></div>
	</div>
	<!--End Middle-->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>

<script>
	let filters = {
		start:1,
		order_by:"",
        order:"",
	}

	$(document).on("change",'.sort_by',function(){
		let sort_by = $(this).val();
        filters.order_by = sort_by.split('-')[0];
        filters.order = sort_by.split('-')[1];
		getBlogsListing();
	});

	$(document).ready(function(){
		getBlogsListing();
	})
	function getBlogsListing(){
		ajaxGet("<?php echo e(route('blogs.ajax')); ?>",filters,".blogs",responseType='html');
	}

    let paginationConfig = {
        renderFunction:getBlogsListing
    }
</script>

<script src="<?php echo e(custom_asset('pagination.js','scripts')); ?>"></script>
<?php $__env->stopSection(); ?>
 
<?php echo $__env->make('layouts.layoutv2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/staging/resources/views/blogs/blogs.blade.php ENDPATH**/ ?>