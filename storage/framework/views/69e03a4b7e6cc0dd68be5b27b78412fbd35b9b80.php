<!--Start Platinum Partners Area-->
<div class="row">
    <div class="middle mtb-60">
        <h2 class="text-center mtb-60 text-uppercase"><?php echo e(trans('lang.platiniumpartners')); ?></h2>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div id="owl-demo" class="owl-carousel">
                <?php $__currentLoopData = $PlatinumPartners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $PlatinumPartner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="main-brand"><a href="<?php echo e(route('platinum-partners.get',$PlatinumPartner->slug)); ?>"><img src="<?php echo e($PlatinumPartner->image_url); ?>"
                                alt="" /></a></div>
                    <div class="clr"></div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="clr"></div>
            </div>
        </div>
        <div class="clr"></div>
    </div>
    <div class="clr"></div>
</div>
    <!-- Frontpage Demo -->
    <!--End Platinum Partners Area-->
    <!--<script src="js/jquery-1.9.1.min.js"></script>-->
    <script src="<?php echo e(custom_asset('owl.carousel.min.js', 'scripts')); ?> "></script>
    <script>
        $(document).ready(function() {

            var owl = $("#owl-demo");

            owl.owlCarousel({
                items: 5, //10 items above 1000px browser width
                itemsDesktop: [1199, 5], //5 items between 1000px and 901px
                itemsDesktopSmall: [900, 5], // betweem 900px and 601px
                itemsTablet: [768, 4], //2 items between 600 and 0
                itemsMobile: [479, 1], // itemsMobile disabled - inherit from itemsTablet option
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
<?php /**PATH /var/www/staging/resources/views/tabs/footer-platinum-partners.blade.php ENDPATH**/ ?>