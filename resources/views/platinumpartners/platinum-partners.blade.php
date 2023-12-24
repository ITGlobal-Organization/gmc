@extends('layouts.layoutv2')

@section('content')
    <!--Start Middle-->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
        <div class="middle mtb-60">
            <div class="platinum-partners"></div>
            <div class="clr"></div>
        </div>
        <!--End Middle-->
    @endsection
    @section('scripts')
        <script>
            let totalPages = 0;
            let filters = {
                order_by: "",
                order: "",
                title: "",
                email: "",
                address: "",
                mobile_no: "",
                phone: "",
                web_url: "",
                start: 1

            }

            $(document).on("change", '.sort_by', function() {
                let sort_by = $(this).val();
                filters.order_by = sort_by.split('-')[0];
                filters.order = sort_by.split('-')[1];
                console.log(filters.order_by);
                console.log(filters.order);
                getPlatinumPartnersListing();
            });
            $(document).on('click', '.apply-filters', function() {
                filters.title = $('.title').val();
                filters.email = $('.email').val();
                filters.address = $('.address').val();
                filters.mobile_no = $('.mobile_no').val();
                filters.phone = $('.phone').val();
                filters.web_url = $('.web_url').val();

                getPlatinumPartnersListing()
            });

            $(document).ready(function() {
                getPlatinumPartnersListing();
            })

            function getPlatinumPartnersListing() {
                ajaxGet("{{ route('platinum-partners.ajax') }}", filters, ".platinum-partners", responseType = 'html');
            }


            $(document).on('click', '.page', function(e) {
                e.preventDefault();
                $('.page').removeClass("page-active");
                $(this).addClass("page-active");
                filters.start = $(this).text();
                getPlatinumPartnersListing();
            })

            $(document).on('click', '.next', function(e) {
                e.preventDefault();
                totalPages = $('.count').val();
                if (filters.start == totalPages) {
                    filters.start = 1;
                    $('.page').removeClass('page-active');
                    $('.pagination a[data-page=page-1]').addClass("page-active");
                    getPlatinumPartnersListing();
                } else {
                    filters.start = parseInt(filters.start) + 1;
                    $('.page').removeClass('page-active')
                    $('.pagination a[data-page=page-' + filters.start + ']').addClass("page-active");
                    getPlatinumPartnersListing();
                }
            })

            $(document).on('click', '.prev', function(e) {
                e.preventDefault();
                totalPages = $('.count').val();
                if (filters.start == 1) {
                    filters.start = totalPages;
                    $('.page').removeClass('page-active');
                    $('.pagination a[data-page=page-' + filters.start + ']').addClass("page-active");
                    getPlatinumPartnersListing();
                } else {
                    filters.start = parseInt(filters.start) - 1;
                    $('.page').removeClass('page-active');
                    $('.pagination a[data-page=page-' + filters.start + ']').addClass("page-active");
                    getPlatinumPartnersListing();
                }
            })
        </script>
    @endsection
