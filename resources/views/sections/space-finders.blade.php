<h1 class="mb-25 text-center">{{ trans('lang.space-finders')}}</h1>
<p class="mb-40 text-center">
    {!! trans('content.space-finders.description') !!}
</p>

<div class="col-xs-12 col-sm-7 col-md-7 col-lg-8 padding border mb-25">
    <span class="listin-found"><b>{{ $count }}</b> Listings Found</span>
</div>

<div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 padding border mb-25">
    <select class="pd-sort sort_by">
        <option value="">{{ trans('lang.sort_by') }}</option>
        <option value="title-asc">A to Z</option>
        <option value="title-desc">Z to A</option>
        <option value="created_at-asc">{{ trans('lang.latest_to_oldest') }}</option>
        <option value="created_at-desc">{{ trans('lang.oldest_to_latest') }}</option>
    </select>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border-all"></div>
<div class="row">
    @foreach ($SpaceFinders as $SpaceFinder)
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">

            <div class="main-box">

                <div class="box-img card-image">
        @php 
         $User = auth()->user();
      @endphp
      
      @if(!isset($User))
       <a href="{{ route('login') }}">
       @include('components.image',[
										
                                        'image' =>  $SpaceFinder->image_url 
                                    ]) 
            <img src="" alt="" width="100%" class="box-img" />
        </a>
      @else
        <a href="{{ route('space-finders.get', $SpaceFinder->slug) }}">
        @include('components.image',[
										
                                        'image' =>  $SpaceFinder->image_url 
                                    ]) 
                        </a>
      @endif
                     
                </div>
                <!--<div class="box-date"><i class="far fa-calendar-alt" style="color: #ffffff;"></i> March 11, 2022</div>-->
                <div class="box-name home home-text">
    <div style="display: flex; justify-content: center; align-items: center;">
     @php 
         $User = auth()->user();
      @endphp
      
      @if(!isset($User))
       <a href="{{ route('login') }}">
      @else
        <a href="{{ route('space-finders.get', $SpaceFinder->slug) }}">
      @endif
          {{ $SpaceFinder->title }}        </a>    </div></div>
                <div class="box-text1">
                    <i class="fad fa-check"
                        style="--fa-primary-color: #5f439b; --fa-secondary-color: #5f439b;"></i>&nbsp;{{$SpaceFinder->categories}}
                </div>

            </div>

            <div class="clr"></div>
        </div>
    @endforeach
</div>
<div class="clr"></div>
@include('sections.pagination.paginationv1')
