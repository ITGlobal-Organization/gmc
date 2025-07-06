<!-- OUR BLOGS SECTION BEGIN -->


<div class="col-xs-8 col-sm-10 col-md-10 col-lg-10 padding border mb-25">
				<span class="listin-found"><b><!--<?php echo e(trans('lang.blogs')); ?>--> &nbsp;(<?php echo e($count); ?>)</b> Articles <?php echo e(trans('lang.found')); ?></span>
			</div>

			<div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 padding border mb-25">

			<?php echo $__env->make('sections.wigets.selectv1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

			</div>
			
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border-all"></div>	
			<?php if(count($Blogs) > 0): ?>
			
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
         <?php $__currentLoopData = $Blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
							<div class="main-box">
								<div class="box-img card-image">
									<a href="<?php echo e(route('blogs.get',$blog->slug)); ?>">
										<?php echo $__env->make('components.image',[
										
											'image' => $blog->image_url 	
										], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
									</a>
								</div>
								<div class="box-name home home-text">
									<a href="<?php echo e(route('blogs.get',$blog->slug)); ?>">
									<?php echo e(shortenTextLength($blog->title)); ?>

									</a>
								</div>
								<?php  $Description =$blog->description; ?> 
								<?php echo $__env->make('sections.wigets.description', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							</div>
							<div class="clr"></div>
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				
			</div>
			<?php else: ?>
			<div class="row">
				<span class="listin-found"><b><?php echo e(trans('lang.not_found')); ?></b></span>
			</div>
			<?php endif; ?>

						
			<?php echo $__env->make('sections.pagination.paginationv1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <!-- OUR BLOGS SECTION END --><?php /**PATH /var/www/staging/resources/views/sections/blogs.blade.php ENDPATH**/ ?>