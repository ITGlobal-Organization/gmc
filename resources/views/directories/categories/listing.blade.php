<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border margin-tb25">
      <div class="middle mtb-60">
        <h1 class="text-center mb-40">{{ trans('lang.categories')}}</h1>
         <div class="search-oh search-box1">
            <input type="image" class="oh-btn search" img="" src="{{ custom_asset('brn-search.png') }}">
            <input type="text" id="searchInput" placeholder="{{ trans('lang.search') }}" class="oh-input">
            <div class="clr"></div>
         </div>
         <div class="row">
            <!-- Start of row -->
            @foreach($Categories as $Category)
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 contact-list2">
               <a href="{{ route('directories.index' ,[
                'category' => $Category->slug
                ]) }}">{{ $Category->name }}</a>
            </div>
            @endforeach
         </div>
         <!-- End of row -->
      </div>
      @include('sections.pagination.paginationv1')
</div>


