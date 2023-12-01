<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <input type="hidden" class="count" value="{{ $count }}"/>
    @php $totalPages = 0; @endphp
    @php $totalPages = (int)ceil($count / config('site_config.constants.item_per_page')); @endphp
    @if($totalPages > 0 && $count > config('site_config.constants.item_per_page'))
 
    <div class="pagination">
        <a href="#" title="previous page" class="prev"><svg fill="currentColor"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/></svg> {{ trans('lang.previous')}}</a>
            @for ($i = 1; $i <= $totalPages; $i++)
               
                    <a href="#" class="{{ $i == $page?'page-active':'' }} page" data-page = "page-{{$i}}">{{$i}}</a>
                
                 
            @endfor
        <a href="#" title="next page" class="next">{{ trans('lang.next')}} <svg fill="currentColor"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg></a>
    @endif
</div>