<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo e(route('home')); ?>" class="brand-link">
      <img src="<?php echo e(asset(config('site_config.assets.logo'))); ?>" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><?php echo e(config('app.name')); ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!-- <div class="image">
          <img src="r2../../dist/img/use-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div> -->
        <div class="info">
          <a href="#" class="d-block"><?php echo e(auth()->user()->name); ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <?php $__currentLoopData = config('menu.admin.sidebar'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $is_route = false;
                ?>
                <?php if($menu['has_submenu']): ?>
                    <?php $__currentLoopData = $menu['submenu']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $submenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <?php if(strpos(\Request::route()->getName(),$submenu['main_route'])): ?>

                            <?php
                                $is_route = true;
                            ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
          <li class="nav-item <?php echo e($is_route?'menu-open':''); ?>">
            <a href="<?php echo e(prefix_route($menu['route'])); ?>" class="nav-link <?php echo e(strpos($menu['route'],\Request::route()->getName())?'bg-nav-link':''); ?>">
              <i class="<?php echo e($menu['icon']); ?>"></i>
              <p>
                <?php echo e(trans('lang.'.$menu['name'])); ?>


                <?php if($menu['has_submenu']): ?>
                  <?php if($is_route): ?>
                    <i class="right fa fa-angle-down"></i>
                  <?php else: ?>
                    <i class="right fa fa-angle-left"></i>
                  <?php endif; ?>
                <?php endif; ?>
              </p>
            </a>
            <?php if($menu['has_submenu']): ?>
              <ul class="nav nav-treeview" style="<?php echo e($is_route?'display:block;':'display:none;'); ?>">

              <?php $__currentLoopData = $menu['submenu']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $submenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <li class="nav-item">

                  <a href="<?php echo e(prefix_route($submenu['route'])); ?>" class="nav-link <?php echo e(\Request::route()->getName() == auth()->user()->roles[0]->name.'.'.$submenu['route']?'bg-nav-link':''); ?>">
                    <i class="<?php echo e($submenu['icon']); ?>"></i>
                    <p><?php echo e(trans('lang.'.$submenu['name'])); ?></p>
                  </a>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              </ul>
            <?php endif; ?>
          </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<?php /**PATH /var/www/staging/resources/views/sidebars/sidebarv1.blade.php ENDPATH**/ ?>