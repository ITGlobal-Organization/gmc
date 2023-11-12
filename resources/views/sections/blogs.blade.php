<!-- OUR BLOGS SECTION BEGIN -->


<div class="col-xs-8 col-sm-10 col-md-10 col-lg-10 padding border mb-25">
				<span class="listin-found"><b><!--{{ trans('lang.blogs')}}--> &nbsp;({{count($Blogs) }})</b> Articles {{ trans('lang.found')}}</span>
			</div>

			<div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 padding border mb-25">

				<select class="pd-sort sort_by">
					<option value="">{{ trans('lang.sort_by')}}</option>
					<option value="title-asc">A to Z</option>
					<option value="title-desc">Z to A</option>
					<option value="created_at-asc">{{ trans('lang.latest_to_oldest')}}</option>
					<option value="created_at-desc">{{ trans('lang.oldest_to_latest')}}</option>
				</select>

			</div>
			
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border-all"></div>	
			@if(count($Blogs) > 0)
			
			<div class="row">
         @foreach($Blogs as $blog)
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
							<div class="main-box">
								<div class="box-img card-image">
									<a href="{{ route('blogs.get',$blog->slug) }}"><img src="{{ $blog->image_url }}" alt="" width="100%" class="box-img" /></a>
								</div>
								<div class="box-name">
									<a href="{{ route('blogs.get',$blog->slug) }}">
									{{ $blog->title}}
									</a>
								</div>
								<div class="box-text">
									{!! $blog->description !!}
								</div>
							</div>
							<div class="clr"></div>
						</div>
					@endforeach
				
			</div>
			@else
			<div class="row">
				<span class="listin-found"><b>{{ trans('lang.not_found')}}</b></span>
			</div>
			@endif

						

   <!-- OUR BLOGS SECTION END -->
