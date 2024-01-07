<?php $__env->startSection('content'); ?>
    <!--Start Tabbing Area-->
    <div class="middle mtb-30">
        <div id="container">
            <div id="parentHorizontalTab">
                <ul class="resp-tabs-list hor_1">
                    <li class="all"><img src="<?php echo e(custom_asset('icon1.png')); ?>" width="15" alt="" />&nbsp; All
                        &nbsp;</li>
                    <li class="offers"><img src="<?php echo e(custom_asset('icon2.png')); ?>" width="17" alt="" />&nbsp;
                        M2M Offers &nbsp;</li>
                    <li class="event"><img src="<?php echo e(custom_asset('icon3.png')); ?>" width="18" alt="" />&nbsp;
                        Events &nbsp;</li>
                    <li class="news"><img src="<?php echo e(custom_asset('icon4.png')); ?>" width="25" alt="" />&nbsp;
                        News &nbsp;</li>
                    <li class="platinum-partners"><img src="<?php echo e(custom_asset('icon5.png')); ?>" width="25"
                            alt="" />&nbsp; Platinum Partners &nbsp;</li>
                </ul>
                <div class="resp-tabs-container hor_1">
                    <!--Start All Tab Area-->
                    
                    <!--End All Tab Area-->
                    <?php echo $__env->make('tabs.all', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('tabs.offers', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('tabs.events', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('tabs.news', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('tabs.platinum-partners', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
        <div class="clr"></div>
    </div>
    <!--End Tabbing Area-->
    <!--Start About Area-->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mtb-60 ab-bg">
       <div class="middle">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <!--<p>
                    <b>Get TO Know</b>
                </p>-->
                <h2>Welcome to</h2>
                <h3>Perthshire Chamber of Commerce</h3>
                <p class="text-justify">
                    Perthshire Chamber of Commerce (PCC) is an independent, non-profit making, non-political business
                    membership organisation.
                    <br><br>
                    Our focus is on championing the issues that matter to our members, helping promote and protect the
                    interests of local businesses, and ensuring the economic future for the communities of Perthshire.
                    <br><br>
                    We cater for all sizes, from sole traders up to some of the area’s largest international employers, for
                    all sectors, and from startups to those already well-established including both rural and urban.
                    <br><br>
                    Perthshire Chamber is the local part of Scottish, British and International Chambers of Commerce and is
                    Scotland’s largest and most influential business to business network.
                </p>
                
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 shrink">
                <img src="<?php echo e(custom_asset('ab-img.png')); ?>" width="100%" alt=""  class="blog-img"/>
            </div>
            <div class="clr"></div>
        </div>
         <div class="clr"></div>
    </div>
    <!--End About Area-->
    <div class="platinum-partners-footer">
    </div>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<!-- Frontpage Demo -->
    <!--End Platinum Partners Area-->
    <!--<script src="js/jquery-1.9.1.min.js"></script>-->
    <script src="<?php echo e(custom_asset('owl.carousel.min.js', 'scripts')); ?> "></script>
    <script>
        $(document).ready(function() {

            

        });
    </script>

    <script src="<?php echo e(custom_asset('easyResponsiveTabs.js', 'scripts')); ?>"></script>
    <script type="text/javascript">
        async function getRenderData(){
            limit = 10;
            //onload footer platinum partners
            await ajaxGet("<?php echo e(route('platinum-partners-tab.ajax')); ?>", {limit}, ".platinum-partners-footer",
                    responseType = 'html');
             //onload events
            await ajaxGet("<?php echo e(route('events-tab.ajax')); ?>", {}, ".events-tab", responseType = 'html');
            // all tabs onload
            await ajaxGet("<?php echo e(route('all-tab.ajax')); ?>", {}, ".all-tab", responseType = 'html');
            //onload news
            await ajaxGet("<?php echo e(route('news-tab.ajax')); ?>", {}, ".news-tab", responseType = 'html');
            //onload platinum partners
            await ajaxGet("<?php echo e(route('platinum-partners-tab.ajax')); ?>", {}, ".platinum-partners-tab",
                    responseType = 'html');
                    await ajaxGet("<?php echo e(route('offers-tab.ajax')); ?>", {}, ".offers-tab", responseType = 'html');
        }
        $(document).ready(function() {
            //Horizontal Tab

                getRenderData();

            $('#parentHorizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                tabidentify: 'hor_1', // The tab groups identifier
                activate: function(event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#nested-tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });

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

            $('.event').on('click', function(e) {
                e.preventDefault();
                ajaxGet("<?php echo e(route('events-tab.ajax')); ?>", {}, ".events-tab", responseType = 'html');
            });
            $('.offers').on('click', function(e) {
                e.preventDefault();
                ajaxGet("<?php echo e(route('offers-tab.ajax')); ?>", {}, ".offers-tab", responseType = 'html');
            });
            $('.all').on('click', function(e) {
                e.preventDefault();
                ajaxGet("<?php echo e(route('all-tab.ajax')); ?>", {}, ".all-tab", responseType = 'html');
            });
            $('.news').on('click', function(e) {
                e.preventDefault();
                ajaxGet("<?php echo e(route('news-tab.ajax')); ?>", {}, ".news-tab", responseType = 'html');
            });
            $('.platinum-partners').on('click', function(e) {
                e.preventDefault();
                ajaxGet("<?php echo e(route('platinum-partners-tab.ajax')); ?>", {}, ".platinum-partners-tab",
                    responseType = 'html');
            });

            var owl = $(".wl-carousel");

            owl.owlCarousel({
                items: 2, //10 items above 1000px browser width
                itemsDesktop: [1199, 5], //5 items between 1000px and 901px
                itemsDesktopSmall: [900, 5], // betweem 900px and 601px
                itemsTablet: [768, 4], //2 items between 600 and 0
                itemsMobile: [479, 1], // itemsMobile disabled - inherit from itemsTablet option
                autoplayTimeout:1000,
                autoplayHoverPause:true,
                autoplay:true,
                loop:true,
            });

            // Custom Navigation Events
            $(".next").click(function() {
                owl.trigger('owl.next');
            })
            $(".prev").click(function() {
                owl.trigger('owl.prev');
            })
            $(".play").click(function() {
                owl.trigger('owl.play', 1000); //owl.play event accept autoPlay speed as second parameter
            })
            $(".stop").click(function() {
                owl.trigger('owl.stop');
            })

        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layoutv2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/staging/resources/views/homes/indexv1.blade.php ENDPATH**/ ?>