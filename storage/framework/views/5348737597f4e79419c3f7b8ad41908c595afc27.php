<?php $__env->startSection('content'); ?>
    <!--Start Middle-->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
        <div class="middle mtb-60">

                <h1 class="text-center mb-40"><?php echo e(trans('lang.events')); ?></h1>
                <p class="text-center">
                    <?php echo trans('content.events.description'); ?>

                </p>

            <div class="clr"></div>
            <div id="container">
                <?php if(session('success')): ?>
                  <div class="alert alert-success">
                     <?php echo session('success'); ?>

                  </div>
               <?php endif; ?>

               <?php if(session('error')): ?>
                  <div class="alert alert-danger">
                     <?php echo session('error'); ?>

                  </div>
               <?php endif; ?>
               <div id="parentHorizontalTab" class="parentHorizontalTab">
                    <div class="event-tabs-cal-list">
                    <ul class="resp-tabs-list hor_1 resp-tabs-list1">
                        <li>&nbsp; <?php echo e(trans('lang.box-view')); ?> &nbsp;</li>
                        <li>&nbsp; <?php echo e(trans('lang.table-view')); ?> &nbsp;</li>
                        <li>&nbsp; <?php echo e(trans('lang.calendar-view')); ?> &nbsp;</li>

                    </ul>
                    </div>
                  <div class="resp-tabs-container hor_1">
                    <!--Start Table View listing-->
                    <div>
                        <div class="events-box"></div>
                        <div class="clr"></div>
                    </div>
                       <!--End Table View listing-->
                     <!--Start Table View listing-->
                     <div>
                        <div class="events"></div>
                        <div class="clr"></div>
                    </div>
                     <!--End Table View listing-->
                     <!--Start Calendar View listing-->
                     <div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding mb-20">
                           <div id="calendar"></div>
                           <div class="clr"></div>
                        </div>
                        <div class="clr"></div>
                     </div>
                     <!--End Calendar View listing-->
                  </div>
               </div>
            </div>
        </div>
        <div class="clr"></div>
       
                
               <!--End Visa Credit Card POPUP		
               <div class="clr"></div>
            </div>
    </div>

    End Middle-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<link rel="stylesheet" href="<?php echo e(custom_asset('calendar-gc.css','css')); ?>">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
         integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="<?php echo e(custom_asset('calendar-gc.min.js','scripts')); ?>"></script>
<script src="<?php echo e(custom_asset('easyResponsiveTabs.js','scripts')); ?>"></script>
<script>

	// sort_by = "";
    // search ="";

    let filters = {
        start_date:"",
        end_date:"",
        order_by:"",
        order:"",
        start:1,
        view_type:"",
        category_id:0

    }

	$(document).on("change",'.sort_by',async function(){
		let sort_by = $(this).val();
        filters.order_by = sort_by.split('-')[0];
        filters.order = sort_by.split('-')[1];
		getEventsListing()
	});

    $(document).on('change','.category',function(){
        filters.category_id = $(this).val();
        getEventsListing()
    })

	$(document).ready(async function(){
		let events = await getEventsListing();
        let ref = $("#calendar");
        // $('.category').select2();
        let eventModal = $('#itglobal-modal');
            var calendar = ref.calendarGC({
                        dayBegin: 0,
                        prevIcon: '',
                        nextIcon: '',
                        // onPrevMonth: function (e) {
                        //     console.log("prev");
                        //     console.log(e);
                        // },
                        // onNextMonth: function (e) {
                        //     console.log("next");
                        //     console.log(e);
                        // },
                        events: events,
                        onclickDate: function (e, event) {
                            console.log(event)
                            // eventModal.modal()
                            // alert(event)
                        }
            });
	})
    $(document).on('keyup','.search-box',function(){
        filters.search = $(this).val();
        
        setTimeout(() => {
            // console.log(filters.search)
                if (filters.search.length > 2) {
                    getEventsListing()
                } 
            }, 1000);
    });
    $(document).on('change', '#end-date',async function (ev) {
        filters.start_date = $('#start-date').val();
        filters.end_date = $('#end-date').val();
        getEventsListing()
    });
    $(document).on('click', '.clear-filters',async function (ev) {
        filters = {};
        getEventsListing();
    });
    async function getAjaxEvents(){

        let events = []
        await ajaxGet("<?php echo e(route('event-calenders.ajax')); ?>",{},"",'json', async (response) =>{
                    let data = await response.data
                    for(let i=0 ; i<data.length;i++){
                        events.push({
                            date: new Date(data[i].event_date),
                            eventName: data[i].title,
                            className: "badge cursor-pointer",
                            slug:data[i].slug,
                            onclick:async function(e, data) {

                                await ajaxGet("/event-calenders/modal/"+data.slug,{},".modal-data",'html')
                                $('#itglobal-modal').modal('show');
                            },
                            dateColor: "red"
                        });
                    }

            });
        return events;

    }
    async function getEventsListing (){
        filters.view_type = 'box';
        await ajaxGet("<?php echo e(route('event-calenders.ajax')); ?>",filters,".events-box",responseType='html');
        filters.view_type = 'table';
        await ajaxGet("<?php echo e(route('event-calenders.ajax')); ?>",filters,".events",responseType='html');
        let events = await getAjaxEvents();
        console.log('here',events)
        return events;
    }

    // tabs
    $(function (e) {

         });
    let parent = $( '#parentHorizontalTab' );
                console.log(parent)
                parent.easyResponsiveTabs( {
                    type: 'default', //Types: default, vertical, accordion
                    width: 'auto', //auto or any width like 600px
                    fit: true, // 100% fit in a container
                    tabidentify: 'hor_1', // The tab groups identifier
                    activate: function ( event ) { // Callback function if tab is switched
                        var $tab = $( this );
                        var $info = $( '#nested-tabInfo' );
                        var $name = $( 'span', $info );
                        $name.text( $tab.text() );
                        $info.show();
                    }
                } );
    // Child Tab
    $('#ChildVerticalTab_1').easyResponsiveTabs({
                type: 'vertical',
                width: 'auto',
                fit: true,
                tabidentify: 'ver_1', // The tab groups identifier
                activetab_bg: '#fff', // background color for active tabs in this group
                inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
                active_border_color: '#c1c1c1', // border color for active tabs heads in this group
                active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
            });

            //Vertical Tab
            $('#parentVerticalTab').easyResponsiveTabs({
                type: 'vertical', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                closed: 'accordion', // Start closed if in accordion view
                tabidentify: 'hor_1', // The tab groups identifier
                activate: function(event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#nested-tabInfo2');;
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });

            let paginationConfig = {
            renderFunction:getEventsListing
        }
</script>
<script src="<?php echo e(custom_asset('pagination.js','scripts')); ?>"></script>
		
 
      
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layoutv2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/staging/resources/views/eventcalenders/event-calenders.blade.php ENDPATH**/ ?>