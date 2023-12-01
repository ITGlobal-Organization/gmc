@extends('layouts.layoutv2')
@section('content')
    <style>
        .addnew-btn a {
            margin: 0px 0px 0px 0px;
            padding: 15px 25px 15px 25px !important;
            width: auto;
            height: auto;
            font-size: 14px;
            color: #fff;
            border-radius: 10px;
            font-weight: 100;
            text-align: center;
            border: 0px solid #eee;
            background-color: #2b9acb;
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
            font-family: 'Montserrat-Regular';
            cursor: pointer;
            display: inline-block;
            transition: all 0.4s linear;
        }
    </style>

    <!--Start Middle-->

    <div class="spacefinders"></div>
    <!--End Middle-->
@endsection
@section('scripts')
    <script>
        let filters = {
            start_date: "",
            end_date: "",
            order_by: "",
            order: "",

        }
        $(document).ready(function() {
            getSpaceFinderListing();
        })

        function getSpaceFinderListing() {
            ajaxGet("{{ route('user.space-finders.listing') }}", 
                filters
            , ".spacefinders", responseType = 'html');
        }
        $(document).on('click', '.edit', function(e) {
            e.preventDefault();
            let id = $(this).attr('data-id');
            window.location.href = "{{ route('user.space-finders.edit', '') }}" + "/" + id;
            // ajaxGet("{{ route('user.events.ajax') }}",{id:id},".events",responseType = 'html');
        });
        $(document).on('click', '.delete', function(e) {
            e.preventDefault();
            let id = $(this).attr('data-id');
            let url = "{{ route('user.space-finders.destroy', '') }}" + "/" + id;
            destroy(url);
        });


        $(document).on("change", '.sort_by', function() {
            let sort_by = $(this).val();
            filters.order_by = sort_by.split('-')[0];
            filters.order = sort_by.split('-')[1];
            getSpaceFinderListing();
        });
    </script>
@endsection
