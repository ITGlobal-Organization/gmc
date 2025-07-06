@php
    $post = new App\Models\Post();
    $post->setLength(10);
    $Posts = $post->getPosts();
@endphp
<h6 class="mb-25">{{ trans('lang.latest-posts')}}</h6>


@foreach ($Posts as $Post)
<div class="col-xs-12 col-sm-6 col-md-12 col-lg-12 padding">

<a href="{{ prefix_route('forum.post',$Post->slug) }}">
    <img src="{{ $Post->user_image?$Post->user_image:custom_asset('image-not-found.png') }}" alt="" width="100%" class="latest-img" />
</a>
<div class="latest-text">
    <a href="{{ prefix_route('forum.post',$Post->slug) }}">{{ $Post->title }}</a>
    <span class="p-date">{{ $Post->created_at }}<div></div></span>
    <div class="border-bot"></div>
<div class="clr"></div>
</div>


</div>
@endforeach