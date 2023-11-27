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
            category:"",
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
        $(document).ready(function() {
            getDirectoryListing();
        });

        function getDirectoryListing() {
            ajaxGet("{{ route('directories.ajax') }}", filters, ".directories", responseType = 'html');
        }


        // Pagination
        $(document).on('click','.page',function(e){
            e.preventDefault();
            $('.page').removeClass("page-active");
            $(this).addClass("page-active");
            filters.start = $(this).text();
            getDirectoryListing();
        })

        $(document).on('click','.next',function(e){
        e.preventDefault();
        totalPages = $('.count').val();
        if( filters.start  == totalPages){
            filters.start  = 1;
            $('.page').removeClass('page-active');
            $('.pagination a[data-page=page-1]').addClass("page-active");
            getDirectoryListing();
        }else{
             filters.start = parseInt(filters.start)+1;
            $('.page').removeClass('page-active')
            $('.pagination a[data-page=page-'+ page + ']').addClass("page-active");
            getDirectoryListing();
        }
    })

    $(document).on('click','.prev',function(e){
        e.preventDefault();
        totalPages = $('.count').val();
        if( filters.start  == 1){
            filters.start  = totalPages;
            $('.page').removeClass('page-active');
            $('.pagination a[data-page=page-'+ totalPages + ']').addClass("page-active");
            getDirectoryListing();
        }else{
             filters.start  = parseInt( filters.start )-1;
            $('.page').removeClass('page-active');
            $('.pagination a[data-page=page-'+ page + ']').addClass("page-active");
            getDirectoryListing();
        }
    })
</script>
@endsection
