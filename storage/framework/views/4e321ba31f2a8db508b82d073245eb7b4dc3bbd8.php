<?php $__env->startSection('content'); ?>
    

    <div class="offers"></div>
    <!--End Middle-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script>
        let filters = {
            start_date: "",
            end_date: "",
            order_by: "",
            order: "",

        }
        $(document).ready(function() {
            getOffersListing();
        })

        function getOffersListing() {
            ajaxGet("<?php echo e(route('user.offers.listing')); ?>",
                filters
            , ".offers", responseType = 'html');
        }
        $(document).on('click', '.edit', function(e) {
            e.preventDefault();
            let id = $(this).attr('data-id');
            window.location.href = "<?php echo e(route('user.offers.edit', '')); ?>" + "/" + id;
            // ajaxGet("<?php echo e(route('user.events.ajax')); ?>",{id:id},".events",responseType = 'html');
        });
        $(document).on('click', '.delete', function(e) {
            e.preventDefault();
            let id = $(this).attr('data-id');
            let url = "<?php echo e(route('user.offers.destroy', '')); ?>" + "/" + id;
            destroy(url);
        });


        $(document).on("change", '.sort_by', function() {
            let sort_by = $(this).val();
            filters.order_by = sort_by.split('-')[0];
            filters.order = sort_by.split('-')[1];
            getOffersListing();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/staging/resources/views/user/offer/index.blade.php ENDPATH**/ ?>