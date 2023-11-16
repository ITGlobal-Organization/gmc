<h6 class="mb-25">{{ trans('lang.latest-post')}}</h6>


@foreach($LatestBlog as $blog)
<div class="col-xs-12 col-sm-6 col-md-12 col-lg-12 padding">

<a href="{{ route('blogs.get',$blog->slug) }}"><img src="{{ $blog->image_url}}" alt="" width="100%" class="latest-img" /></a>
<div class="latest-text">
<a href="{{ route('blogs.get',$blog->slug)}}">{{ $blog->title }}</a>
</div>
<span class="p-date">{{$blog->created_at }}</span>
<div class="border-bot"></div>
	
<div class="clr"></div>
</div>
@endforeach