<!-- HEADER SECTION BEGIN -->
<header class="header" id="header">
     <div class="container">
       <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-12">
           <div class="header-inner">
              <nav class="navbar container">
              <a href="{{ route('home') }}"><img src="{{ asset(config('site_config.assets.logo')) }}" alt="image" class="img-fluid"></a>
                <div class="burger" id="burger">
                   <span class="burger-line"></span>
                   <span class="burger-line"></span>
                   <span class="burger-line"></span>
                </div>
                <div class="menu" id="menu">
                <ul class="menu-inner">
                        @php
                            $Menus = config('site_config.menus.pages');
                        @endphp

                        @if(true)
                            @foreach($Menus as $key => $menu)

                                @if(!$menu['is_main'])
                                <li class="{{ $menu['class']}} dropdown_c dropdown_click" >
                                 @if($menu['has_submenu'])

                                 <div class="selected menu-item" data-target="#dropdown{{ $key }}">
                                       <a href="{{ $menu['type'] == 'page'?route('site-pages',$menu['link']):route($menu['link'])  }}" class="{{ $menu['link-class']}}" data-target="#dropdown{{ $key }}">{{ trans('lang.'.$menu['name'])}}</a>
                                    </div>
                                    <div class="drop-content" data-target="#dropdown{{ $key }}">
                                       <ul id="dropdown{{ $key }}">
                                         @if(count($menu['submenu']) > 0)
                                             @foreach($menu['submenu'] as $submenu)
                                                <li>
                                                   <a href="{{ route($submenu['route'],$submenu['link']) }}">{{ $submenu['text'] }} </a>
                                                </li>
                                             @endforeach
                                          @endif
                                       </ul>
                                    </div>
                                    @else

                                    @if($menu['type'] == 'page')

                                       <a href="{{ route('site-pages',$menu['link']) }}" class="{{ $menu['link-class']}} {{ \Request::url() ==  route('site-pages',$menu['link'])?'active':''}}">{{ trans('lang.'.$menu['name'])}}</a>
                                    @else

                                    <a href="{{ route($menu['link']) }} " class="{{ $menu['link-class']}} {{ \Request::route()->getName() ==  $menu['link']?'active':''}}">{{ trans('lang.'.$menu['name'])}}</a>

                                    @endif
                                 @endif

                                 </li>
                                @else
                                <li class="{{ $menu['class'] }}">
                                    <a href="{{ route('home') }}" class="{{ $menu['link-class'] }}">{{ trans('lang.'.$menu['name'])}}</a>

                                 </li>
                                @endif
                            @endforeach
                        @endif

                    </ul>
                   <!-- <ul class="menu-inner">
                      <li class="menu-item"><a href="#" class="menu-link active">Home</a></li>
                      <li class="menu-item"><a href="#" class="menu-link">About us</a></li>
                      <li class="menu-item"><a href="#" class="menu-link">Services</a></li>
                      <li class="menu-item"><a href="#" class="menu-link">Blogs</a></li>
                      <li class="menu-item"><a href="#" class="menu-link">Contact Us</a></li>
                      <li class="menu-item"><a href="javascript:void(0)" class="btn btn-primary">Book Now!</a></li>
                   </ul> -->
                </div>
                <div class="book-now-btn">
                  <a href="{{ route('site-pages','contact-us') }}" class="btn btn-primary">{{ trans('lang.book_now')}}!</a>
                </div>
              </nav>
           </div>
         </div>
       </div>
     </div>
   </header>

    <!-- HEADER SECTION END -->
