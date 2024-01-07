<nav x-data="{ open: false }" class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        
      </li>

      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
      <?php
        //   $notifications =\App\Models\Notification::where('notifiable_id',auth()->user()->id)->get();
      ?>
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>

      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-th-large"></i>
        </a>
        <div class="dropdown-menu dropdown-menu dropdown-menu-right">
            <?php if(!auth()->user()->hasRole('admin')): ?>
                <a href="<?php echo e(route('profile.edit')); ?>" class="dropdown-item">
                    <i class="fa fa-logout mr-2"></i>
                    <?php echo e(trans('lang.edit_profile')); ?>

                </a>
            <?php endif; ?>
            <a href="<?php echo e(route('logout')); ?>" class="dropdown-item">
                <i class="fa fa-logout mr-2"></i>
                <?php echo e(trans('lang.log-out')); ?>

            </a>
        </div>
      </li>
    </ul>
</nav>


<?php /**PATH /var/www/staging/resources/views/navigations/navigationv1.blade.php ENDPATH**/ ?>