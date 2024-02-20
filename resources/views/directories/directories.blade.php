@extends('layouts.layoutv2')

@section('content')
    <!--page Middle-->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
        <div class="middle mtb-60">

            <h1 class="mb-40 text-center">{{ trans('lang.directory') }}</h1>

            <div class="directories">

            </div>

            <div class="clr"></div>
        </div>
        <div class="clr"></div>
    </div>
    <!--End Middle-->
@endsection
@section('scripts')
<script>
        // sort_by = "";
        // page = 1;
        let totalPages = 0;
        let filters = {
            order_by:"",
            order:"",
            title:"",
            email:"",
            address:"",
            mobile_no:"",
            phone:"",
            web_url:"",
            category:"{{ $CategoryId }}",
            start:1

        }

        $(document).on("change", '.sort_by', function() {
            let sort_by = $(this).val();
            filters.order_by = sort_by.split('-')[0];
            filters.order = sort_by.split('-')[1];
            getDirectoryListing();
        });
        $(document).on('click','.apply-filters',function(){
            filters.title = $('.title').val();
            filters.email = $('.email').val();
            filters.address = $('.address').val();
            filters.mobile_no = $('.mobile_no').val();
            filters.phone = $('.phone').val();
            filters.web_url = $('.web_url').val();
            filters.category = $('.category').val();
            getDirectoryListing();
        });
        $(document).on('click','.clear-filters',function(){
            filters = {};
            getDirectoryListing();
        });
        $(document).ready(function() {

            getDirectoryListing();

        });

        function getDirectoryListing() {
            ajaxGet("{{ route('directories.ajax') }}", filters, ".directories", responseType = 'html');

        }


        let paginationConfig = {
            renderFunction:getDirectoryListing
        }
</script>
<script src="{{ custom_asset('pagination.js','scripts')}}"></script>
@endsection
