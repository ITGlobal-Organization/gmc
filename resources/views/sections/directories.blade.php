
<div class="col-xs-12 col-sm-7 col-md-7 col-lg-8 padding border mb-25">
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-5 padding border mb-25">
            <a href=directories/categories> {{ trans('lang.view-categories')}}       </a>
        </div>
       
    </div>
</div>


<!--<div class="col-xs-12 col-sm-7 col-md-7 col-lg-8 padding border mb-25">
    <span class="listin-found"><a href=categories><b>View Categories</b> </a>
</span>
</div>-->
<div class="col-xs-6 col-sm-3 col-md-3 col-lg-2 border mb-25">
    @include('sections.search.filterv1')
</div>
<div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 padding border mb-25">
@include('sections.wigets.selectv1')
</div>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border-all"></div>

<div class="row">
    @foreach ($Directories as $directory)
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">

            <div class="main-box">

                <div class="box-img card-image">
      @php
         $User = auth()->user();
      @endphp

      @if(!isset($User))

       <a href="{{ route('login') }}">
       @include('components.image',[

                                        'image' => $directory->image_url
                                    ])
        </a>
      @else
        <a href="{{ route('directories.get', $directory->slug) }}">
        @include('components.image',[

                                        'image' => $directory->image_url
                                    ])
        </a>
      @endif
                </div>
                <!--<div class="box-date"><i class="far fa-calendar-alt" style="color: #ffffff;"></i> March 11, 2022</div>-->
                <div class="box-name home home-text">    <div style="display: flex; justify-content: center; align-items: center;">
                                          @php
         $User = auth()->user();
      @endphp

      @if(!isset($User))
       <a href="{{ route('login') }}">
      @else
        <a href="{{ route('directories.get', $directory->slug) }}">
      @endif
          {{ shortenTextLength($directory->title) }}        </a>    </div></div>
                
                @php  $Description =$directory->description; @endphp 
                @include('sections.wigets.description')

            </div>

            <div class="clr"></div>
        </div>
    @endforeach
</div>
@include('sections.pagination.paginationv1')
