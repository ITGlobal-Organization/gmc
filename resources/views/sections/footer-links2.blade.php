@php
  $Menu = config('site_config.footer-menu2');
   
@endphp

<div class="footer-links">
    <h5>{{ __('lang.our_projects')}}</h5>
    <ul>
        @foreach($Menu as $menu)
            <li><a href="{{ route('projects.get',$menu['link']) }}">{{ $menu['text']}}</a></li>
        @endforeach
        <!-- <li><a href="javascript:void(0)">About Us</a></li>
        <li><a href="javascript:void(0)">Our Team</a></li>
        <li><a href="javascript:void(0)">Videos</a></li>
        <li><a href="javascript:void(0)">Blog</a></li>
        <li><a href="javascript:void(0)">Contact Us</a></li>
        <li><a href="javascript:void(0)">Privacy Policy</a></li> -->
    </ul>
</div>