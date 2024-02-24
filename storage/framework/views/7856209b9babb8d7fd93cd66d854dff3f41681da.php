<?php $__env->startSection('content'); ?>
	<!--Start Middle-->
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
		<div class="middle mtb-60">
            <div class="spacefinders">

			</div>
		</div>
		<div class="clr"></div>
	</div>
	<!--End Middle-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script>
       let totalPages = 0;
        let filters = {
            order_by:"",
            order:"",
            title:"",
            email:"",
            address:"",
            mobile_no:"",
            phone:"",
            web_url:"",
            start:1

        }

        $(document).on("change", '.sort_by', function() {
            let sort_by = $(this).val();
            filters.order_by = sort_by.split('-')[0];
            filters.order = sort_by.split('-')[1];
            getSpaceFinderListing();
        });
        $(document).on('click', '.apply-filters', function() {
            filters.title = $('.title').val();
            filters.email = $('.email').val();
            filters.address = $('.address').val();
            filters.mobile_no = $('.mobile_no').val();
            filters.phone = $('.phone').val();
            filters.web_url = $('.web_url').val();

            getSpaceFinderListing()
        });

        $(document).ready(function() {
            getSpaceFinderListing();
        })

        function getSpaceFinderListing() {
            ajaxGet("<?php echo e(route('space-finders.ajax')); ?>", filters, ".spacefinders", responseType = 'html');
        }


        let paginationConfig = {
        renderFunction:getSpaceFinderListing
    }
</script>
<script src="<?php echo e(custom_asset('pagination.js','scripts')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layoutv2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/staging/resources/views/space-finders/space-finders.blade.php ENDPATH**/ ?>