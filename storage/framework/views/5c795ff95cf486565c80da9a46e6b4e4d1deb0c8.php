
<div class="col-xs-12 col-sm-7 col-md-7 col-lg-8 padding border mb-25">
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-5 padding border mb-25">
            <a href=directories/categories> <?php echo e(trans('lang.view-categories')); ?>       </a>
        </div>
       
    </div>
</div>


<!--<div class="col-xs-12 col-sm-7 col-md-7 col-lg-8 padding border mb-25">
    <span class="listin-found"><a href=categories><b>View Categories</b> </a>
</span>
</div>-->
<div class="col-xs-6 col-sm-3 col-md-3 col-lg-2 border mb-25">
    <?php echo $__env->make('sections.search.filterv1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 padding border mb-25">
<?php echo $__env->make('sections.wigets.selectv1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border-all"></div>

<div class="row">
    <?php $__currentLoopData = $Directories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $directory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">

            <div class="main-box">

                <div class="box-img card-image">
      <?php
         $User = auth()->user();
      ?>

      <?php if(!isset($User)): ?>

       <a href="<?php echo e(route('login')); ?>">
       <?php echo $__env->make('components.image',[

                                        'image' => $directory->image_url
                                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </a>
      <?php else: ?>
        <a href="<?php echo e(route('directories.get', $directory->slug)); ?>">
        <?php echo $__env->make('components.image',[

                                        'image' => $directory->image_url
                                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </a>
      <?php endif; ?>
                </div>
                <!--<div class="box-date"><i class="far fa-calendar-alt" style="color: #ffffff;"></i> March 11, 2022</div>-->
                <div class="box-name home home-text">    <div style="display: flex; justify-content: center; align-items: center;">
                                          <?php
         $User = auth()->user();
      ?>

      <?php if(!isset($User)): ?>
       <a href="<?php echo e(route('login')); ?>">
      <?php else: ?>
        <a href="<?php echo e(route('directories.get', $directory->slug)); ?>">
      <?php endif; ?>
          <?php echo e(shortenTextLength($directory->title)); ?>        </a>    </div></div>
                
                <?php  $Description =$directory->description; ?> 
                <?php echo $__env->make('sections.wigets.description', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </div>

            <div class="clr"></div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php echo $__env->make('sections.pagination.paginationv1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /var/www/staging/resources/views/sections/directories.blade.php ENDPATH**/ ?>