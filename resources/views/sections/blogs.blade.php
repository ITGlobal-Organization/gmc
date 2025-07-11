<!-- OUR BLOGS SECTION BEGIN -->


<div class="col-xs-8 col-sm-10 col-md-10 col-lg-10 padding border mb-25">
				<span class="listin-found"><b><!--{{ trans('lang.blogs')}}--> &nbsp;({{$count }})</b> Articles {{ trans('lang.found')}}</span>
			</div>

			<div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 padding border mb-25">

			@include('sections.wigets.selectv1')

			</div>
			
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border-all"></div>	
			@if(count($Blogs) > 0)
			
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
         @foreach($Blogs as $blog)
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
							<div class="main-box">
								<div class="box-img card-image">
									<a href="{{ route('blogs.get',$blog->slug) }}">
										@include('components.image',[
										
											'image' => $blog->image_url 	
										])
									</a>
								</div>
								<div class="box-name home home-text">
									<a href="{{ route('blogs.get',$blog->slug) }}">
									{{ shortenTextLength($blog->title) }}
									</a>
								</div>
								@php  $Description =$blog->description; @endphp 
								@include('sections.wigets.description')
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

						
			@include('sections.pagination.paginationv1')
   <!-- OUR BLOGS SECTION END -->