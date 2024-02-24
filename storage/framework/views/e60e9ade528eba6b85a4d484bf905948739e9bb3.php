<?php $__env->startSection('content'); ?>

    <!--Start Middle-->

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding ">
    <div class="middle mtb-60">

        <h1 class="text-center mb-40"><?php echo e(trans('lang.events_calendar')); ?></h1>
        <div class="success"></div>
        <!--Start search Area-->
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-6 border padding border">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border border text-right">
                <div class="addnew-btn clear-filters"><a href="#">Clear Filters</a></div>
                <div class="clr"></div>
            </div>

            
            <div class="clr"></div>
        </div>
        <!--End search Area-->

        <!--Start calendar Area-->
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-6 border padding border">

            <div class="search-ohch">
                <input class="ohch-input" name="date" id="start-date" placeholder="Date for visit DD-MM-YYYY"
                    required="required" type="date">
                <div class="clr"></div>
            </div>

            <span class="ab-to">TO</span>

            <div class="search-ohch">
                <input class="ohch-input" name="date" id="end-date" placeholder="Date for visit DD-MM-YYYY"
                    required="required" type="date">
                <div class="clr"></div>
            </div>

            <div class="clr"></div>
        </div>
        <!--Start calendar Area-->

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding border mb-25"></div>


        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border border text-right">
            <div class="addnew-btn"><a href="<?php echo e(route('user.events.create')); ?>"><?php echo e(trans('messages.add_new_msg',[
                'attribute' => trans('lang.event')
            ])); ?></a></div>
            <div class="clr"></div>
        </div>
        <div class="events"></div>
        <div class="clr"></div>
    </div>
    <div class="clr"></div>
</div>



    <!--End Middle-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script>
    let filters = {
        start_date:"",
        end_date:"",
        order_by:"created_at",
        order:"desc",

    }

	$(document).on("change",'.sort_by',function(){
		let sort_by = $(this).val();
        filters.order_by = sort_by.split('-')[0];
        filters.order = sort_by.split('-')[1];
		getEventsListing();
	});
        $(document).ready(function() {
            getEventsListing();
        });
        $(document).on('keyup', '.search-box', function() {
            search = $(this).val();
              
            setTimeout(() => {
            // console.log(filters.search)
                if (search.length > 2) {
                    ajaxGet("<?php echo e(route('user.event-calenders.search')); ?>", {
                        search
                    }, ".events", responseType = 'html');
                } 
            }, 1000);
            // setInterval(() => {
                
            // }, 3000);
            
        });
        $(document).on('click','.edit' ,function(e) {
            e.preventDefault();
            let id = $(this).attr('data-id');
            window.location.href = "<?php echo e(route('user.events.edit', '')); ?>" + "/" + id;
            // ajaxGet("<?php echo e(route('user.events.ajax')); ?>",{id:id},".events",responseType = 'html');
        });
        $(document).on('click', '.delete',function(e) {
            e.preventDefault();
            let id = $(this).attr('data-id');
            let url = "<?php echo e(route('user.events.destroy', '')); ?>" + "/" + id;
            destroy(url);
        });

        $(document).on('click', '.clear-filters',function(e) {
            e.preventDefault();
            getEventsListing();
        });

        $(document).on('change', '#end-date', function(ev) {
            start_date = $('#start-date').val();
            end_date = $('#end-date').val();
            ajaxGet("<?php echo e(route('user.event-calenders.search')); ?>", {
                start_date: start_date,
                end_date: end_date
            }, ".events", responseType = 'html');
        });

        function getEventsListing() {
            ajaxGet("<?php echo e(route('user.events.listing')); ?>",
                filters
            , ".events", responseType = 'html');
        }
    </script>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/staging/resources/views/user/event/index.blade.php ENDPATH**/ ?>