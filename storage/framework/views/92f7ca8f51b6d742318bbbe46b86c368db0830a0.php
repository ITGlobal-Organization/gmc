<?php $__env->startSection('content'); ?>
    <!--Start Middle-->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
        <div class="middle mtb-60">
            <!--Start Directory Details Area-->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border">

                <h1 class="mtb-25"><?php echo e($SpaceFinder->title); ?></h1>

                <div class="post-meta">
                    <span class="meta-cats">
                        <i class="fad fa-check" style="--fa-primary-color: #5f439b; --fa-secondary-color: #5f439b;"></i>
                        <a><?php echo e($SpaceFinder->categories); ?></a>
                    </span>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding ">
                    <?php if(isset($SpaceFinder->media[0])): ?>
                        <img src="<?php echo e($SpaceFinder->media[0]->image_url); ?>" alt="" class="blog-img" />
                    <?php else: ?>
                        <img src="" alt="" class="blog-img" />
                    <?php endif; ?>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding ">

                    <p><?php echo $SpaceFinder->description; ?></p>


                    <div class="clr"></div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding">

                    <h2 class="mtb-25">Contact Information</h2>

                    <!--Start Box 1-->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contact-list1">
                        <i class="fas fa-map-marker-alt fa-spin"
                            style="color: #ffffff;"></a></i>&nbsp;&nbsp;<b>Address</b> : <?php echo e($SpaceFinder->address); ?>

                        <div class="clr"></div>
                    </div>
                    <!--End Box 1-->

                    <!--Start Box 2-->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contact-list2">
                        <a href="tel://<?php echo e($SpaceFinder->phone); ?>"><i class="fas fa-tty fa-spin" style="color: #ffffff;"></a></i>&nbsp;&nbsp;<b>Telephone</b> :
                        <?php echo e($SpaceFinder->phone); ?>

                        <div class="clr"></div>
                    </div>
                    <!--End Box 2-->

                    <!--Start Box 3-->
                    <!--<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contact-list1">
                        <i class="fas fa-mobile-alt fa-spin" style="color: #ffffff;"></i>&nbsp;&nbsp;<b>Mobile</b> :
                        <?php echo e($SpaceFinder->mobile_no); ?>

                        <div class="clr"></div>
                    </div>-->
                    <!--End Box 3-->

                    <!--Start Box 4-->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contact-list1">
                        <a href="mailto://<?php echo e($SpaceFinder->email); ?>"><i class="fas fa-envelope-open-text fa-spin" style="color: #ffffff;"></a></i>&nbsp;&nbsp;<b>Email</b> :
                        <?php echo e($SpaceFinder->email); ?>

                        <div class="clr"></div>
                    </div>
                    <!--End Box 4-->

                    <!--Start Box 5-->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contact-list2">
                        <a href="<?php echo e($SpaceFinder->web_url); ?>" target="_blank"><i class="fas fa-globe fa-spin" style="color: #ffffff;"></a></i>&nbsp;&nbsp;<b>Website </b> :
                        <?php echo e($SpaceFinder->web_url); ?>

                        <div class="clr"></div>
                    </div>
                    <!--End Box 5-->

                    <!--Start Box 6-->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contact-list1">
                        <a href="<?php echo e($SpaceFinder->venue_url); ?>" target="_blank"><i class="fas fa-link fa-spin" style="color: #ffffff;"></a></i>&nbsp;&nbsp;<b>Venue Hire URL</b> :
                        <?php echo e($SpaceFinder->venue_url); ?>

                        <div class="clr"></div>
                    </div>
                    <!--End Box 6-->

                    <!--Start Box 7-->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contact-list2">
                        <i class="fas fa-share-alt fa-spin" style="color: #ffffff;"></i>&nbsp;&nbsp;<b>Social Info </b> :

                        <span class="social-media2"> <a href="<?php echo e($SpaceFinder->facebook_url); ?>"><i class="fab fa-facebook-f"
                                    title="Facebook"></i></a> </span>
                        <span class="social-media2"> <a href="<?php echo e($SpaceFinder->instagram_url); ?>"><i class="fab fa-instagram"
                                    title="Instagram"></i></a> </span>
                        <span class="social-media2"> <a href="<?php echo e($SpaceFinder->youtube_url); ?>"><i class="fab fa-twitter"
                                    title="Twitter"></i></a> </span>
                        <span class="social-media2"> <a href="<?php echo e($SpaceFinder->linkedin_url); ?>"><i class="fab fa-linkedin"
                                    title="Linkedin"></i></a> </span>

                        <div class="clr"></div>
                    </div>
                    <!--End Box 7-->

                </div>
            </div>
            <!--End Directory Details Area-->

            <div class="clr"></div>
        </div>
        <div class="clr"></div>
    </div>
    <!--End Middle-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layoutv2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/staging/resources/views/space-finders/space-finder-detail.blade.php ENDPATH**/ ?>