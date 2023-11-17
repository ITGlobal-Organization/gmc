<div class="filter-btn show_hide"><i class="fas fa-filter fa-spin" style="color: #ff8000;"></i>&nbsp;&nbsp;
    Search Filter
</div>
<div class="slidingDiv">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 padding border mb-25">
        <h6>Search Filter</h6>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 padding border mb-25 text-right">
        <a href="#" class="show_hide">
            <i class="fas fa-times-circle fa-spin" style="color: #ff0000;font-size: 18px;"></i>
        </a>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 border mb-20">
        <label>What are you looking for?</label>
        <input type="text" class="join-input title" value="" placeholder="What are you looking for?" >
    </div>
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 border mb-20">
        <label>Location</label>
        <input type="text" class="join-input address" value="" placeholder="Location" >
    </div>
    {{-- <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 border mb-20">
        <label>Post Code</label>
        <input type="text" class="join-input" value="" placeholder="Post Code">
    </div> --}}
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 border mb-20">
        <label>Mobile</label>
        <input type="text" class="join-input mobile_no" value="" placeholder="Phone" >
    </div>
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 border mb-20">
        <label>Tel</label>
        <input type="text" class="join-input phone" value="" placeholder="Phone 2">
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
        <label>Email</label>
        <input type="text" class="join-input email" value="" placeholder="Fax">
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
        <label>Website</label>
        <input type="text" class="join-input web_url" value="" placeholder="Website">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center mtb-40">
        <input type="submit" class="ct-submit apply-filters" value="Apply Filters">
    </div>
</div>
{{-- <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script> --}}
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

<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
<script type="text/javascript">
    $(document).ready(function() {


        $(".slidingDiv").hide();
        $(".show_hide").show();

        $('.show_hide').click(function() {
            $(".slidingDiv").slideToggle();
        });

    });
</script>
