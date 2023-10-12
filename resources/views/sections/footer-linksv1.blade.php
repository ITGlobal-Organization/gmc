@php
  $Menu = config('site_config.footer-menu1');
   
@endphp

<div class="footer-links">
    <h5>{{ __('lang.useful_links')}}</h5>
    <ul>
        @foreach($Menu as $menu)
            <li><a href="{{ route('site-pages',$menu['link']) }}">{{ __('lang.'.$menu['text'])}}</a></li>
        @endforeach
        <!-- <li><a href="javascript:void(0)">About Us</a></li>
        <li><a href="javascript:void(0)">Our Team</a></li>
        <li><a href="javascript:void(0)">Videos</a></li>
        <li><a href="javascript:void(0)">Blog</a></li>
        <li><a href="javascript:void(0)">Contact Us</a></li>
        <li><a href="javascript:void(0)">Privacy Policy</a></li> -->
    </ul>
</div>