<div class="filter-btn show_hide"><i class="fas fa-filter fa-spin" style="color: #ff8000;"></i>&nbsp;&nbsp;
    {{ trans('lang.search_filter')}}
</div>
<div class="slidingDiv">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 padding border mb-25">
        <h6>{{ trans('lang.search_filter')}}</h6>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 padding border mb-25 text-right">
        <a href="#" class="show_hide">
            <i class="fas fa-times-circle fa-spin" style="color: #ff0000;font-size: 18px;"></i>
        </a>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 border mb-20">
        <label>{{trans('lang.filters_title') }}</label>
        <input type="text" class="join-input title" value="" placeholder="{{trans('lang.filters_title') }}" >
    </div>
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 border mb-20">
        <label>{{ trans('lang.location')}}</label>
        <input type="text" class="join-input address" value="" placeholder="{{ trans('lang.location')}}" >
    </div>
    {{-- <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 border mb-20">
        <label>Post Code</label>
        <input type="text" class="join-input" value="" placeholder="Post Code">
    </div> --}}
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 border mb-20">
        <label>{{ trans('lang.phone') }}</label>
        <input type="text" class="join-input mobile_no" value="" placeholder="{{ trans('lang.phone') }}" >
    </div>
    <!--<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 border mb-20">
        <label>Tel</label>
        <input type="text" class="join-input phone" value="" placeholder="Phone 2">
    </div>-->
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 border mb-20">
        <label>{{ trans('lang.email') }}</label>
        <input type="text" class="join-input email" value="" placeholder="{{ trans('lang.email') }}">
    </div>
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 border mb-20">
        <label>{{ trans('lang.category') }}</label>
        @php 
            $category = new App\Models\Category();
            $category->setLength(1000);
            $Categories = $category->getAll([],['id,name as text']);
        @endphp
        <select class="category select_search">
            <option value="">{{ trans('lang.select_msg',['attribute' => trans('lang.category')]) }}</option>
        @foreach($Categories as $Category)
            <option value="{{ $Category->id }}" {{ $CategoryId == $Category->id?'selected':'' }}>{{ $Category->text }}</option>
        @endforeach
        </select>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 border mb-20">
        <label>{{ trans('lang.website') }}</label>
        <input type="text" class="join-input web_url" value="" placeholder="{{ trans('lang.website') }}">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center mtb-40">
        <input type="submit" class="ct-submit apply-filters" value="{{ trans('lang.apply_filters') }}">
    </div>
</div>

<link href="{{ asset('css/magicsuggest.css') }}" rel="stylesheet" type="text/css">
<script src="{{ asset('js/magicsuggest.js') }}"></script>
<script>
    $(function() {
        var ms1 = $('#ms1').magicSuggest({
            data: ['Academia', 'Access Hire', 'Accommodation', 'Accountancy Services', 'Accountants',
                'Admin Support', 'Advertising Services', 'Aerospace Component Repairs',
                'Aerospace Consultants', 'Agricultural Engineers',
                'Agricultural & Horticultural Products', 'Agricultural Merchants',
                'Alcoholic Beverages Manufacturers', 'Alcoholic Beverages Wholesale', 'Antiques',
                'Architects/Architectural Services', 'Architectural & Planning Consultants',
                'Art Dealers',
            ]
        });
    });
</script>


<script type="text/javascript">
    $(document).ready(function() {


        $(".slidingDiv").hide();
        $(".show_hide").show();

        $('.show_hide').click(function() {
            $(".slidingDiv").slideToggle();
        });
        $('.category').select2();
    });
</script>
