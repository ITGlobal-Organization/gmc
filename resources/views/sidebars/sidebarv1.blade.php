<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
      <img src="{{ asset(config('site_config.assets.logo')) }}" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!-- <div class="image">
          <img src="r2../../dist/img/use-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div> -->
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->name}}</a>
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
          @foreach(config('menu.admin.sidebar') as $key => $menu)
                @php
                    $is_route = false;
                @endphp
                @if($menu['has_submenu'])
                    @foreach($menu['submenu'] as $key => $submenu)

                        @if(strpos(\Request::route()->getName(),$submenu['main_route']))

                            @php
                                $is_route = true;
                            @endphp
                        @endif
                    @endforeach
                @endif
          <li class="nav-item {{ $is_route?'menu-open':'' }}">
            <a href="{{ prefix_route($menu['route']) }}" class="nav-link {{ strpos($menu['route'],\Request::route()->getName())?'bg-nav-link':'' }}">
              <i class="{{ $menu['icon'] }}"></i>
              <p>
                {{ trans('lang.'.$menu['name']) }}

                @if($menu['has_submenu'])
                  @if($is_route)
                    <i class="right fa fa-angle-down"></i>
                  @else
                    <i class="right fa fa-angle-left"></i>
                  @endif
                @endif
              </p>
            </a>
            @if($menu['has_submenu'])
              <ul class="nav nav-treeview" style="{{ $is_route?'display:block;':'display:none;'}}">

              @foreach($menu['submenu'] as $key => $submenu)

                <li class="nav-item">

                  <a href="{{ prefix_route($submenu['route']) }}" class="nav-link {{ \Request::route()->getName() == auth()->user()->roles[0]->name.'.'.$submenu['route']?'bg-nav-link':'' }}">
                    <i class="{{ $submenu['icon'] }}"></i>
                    <p>{{ trans('lang.'.$submenu['name']) }}</p>
                  </a>
                </li>
                @endforeach

              </ul>
            @endif
          </li>
          @endforeach

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
