<?php $__env->startSection('content'); ?>
     <?php $__env->slot('header', null, []); ?> 
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><?php echo e(trans('lang.pages')); ?></h1>
                    </div>

                </div>
            </div>
        </section>
     <?php $__env->endSlot(); ?>

    <section class="content">
        <div class="container-fluid">
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/staging/resources/views/admin/crud/index.blade.php ENDPATH**/ ?>