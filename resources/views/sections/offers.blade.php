<h1 class="mb-80 text-center">{{ trans('lang.offers') }}</h1>
{{-- <p class="mb-40 text-center">
    {!! trans('content.space-finders.description') !!}
</p> --}}
<div class="col-xs-12 col-sm-7 col-md-7 col-lg-8 padding border mb-25">
    <span class="listin-found"><b>{{ $count }}</b> Listings Found</span>
</div>

<div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 padding border mb-25">
    <select class="pd-sort sort_by">
        <option value="">{{ trans('lang.sort_by') }}</option>
        <option value="title-asc">A to Z</option>
        <option value="title-desc">Z to A</option>
        <option value="created_at-desc">{{ trans('lang.latest_to_oldest') }}</option>
        <option value="created_at-asc">{{ trans('lang.oldest_to_latest') }}</option>
    </select>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border-all"></div>
<div class="row">
    @if (isset($Offers))
        @foreach ($Offers as $Offer)
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="main-box">
                    <div class="brand-img">
                        @php
                            $User = auth()->user();
                          
                        @endphp

                        @if (!isset($User))
                            <a href="{{ route('login') }}">
                                @include('components.image', [
                                    'image' => $Offer->image_url,
                                ])
                             
                            </a>
                        @else
                       
                            <a href="{{ route('offers.get', $Offer->slug) }}">
                                @include('components.image', [
                                    'image' => $Offer->image_url,
                                ])
                            </a>
                        @endif
                    </div>
                    <div class="brand-name home home-text">
                        @if (!isset($User))
                            <a href="{{ route('login') }}">
                            @else
                                <a href="{{ route('offers.get', $Offer->slug) }}">
                        @endif
                        {{ shortenTextLength($Offer->company_name) }} </a>
                    </div>
                    <div class="brand-text">
                        {!! shortenTextLength($Offer->offer_details) !!}
                    </div>

                </div>
                <div class="clr"></div>
            </div>
        @endforeach
    @endif
</div>
@include('sections.pagination.paginationv1')
