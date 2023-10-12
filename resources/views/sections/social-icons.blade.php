@php 
    $Icons = config('site_config.contacts.social');
@endphp
<ul>
    @foreach($Icons as $icon)
        <li><a href="{{ $icon['url'] }}" target="_blank"><i class="{{ $icon['icon'] }}" aria-hidden="true"></i></a></li>
    @endforeach
</ul>