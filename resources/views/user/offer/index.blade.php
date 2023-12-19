@extends('layouts.auth')
@section('content')
    

    <div class="offers"></div>
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
            getOffersListing();
        })

        function getOffersListing() {
            ajaxGet("{{ route('user.offers.listing') }}",
                filters
            , ".offers", responseType = 'html');
        }
        $(document).on('click', '.edit', function(e) {
            e.preventDefault();
            let id = $(this).attr('data-id');
            window.location.href = "{{ route('user.offers.edit', '') }}" + "/" + id;
            // ajaxGet("{{ route('user.events.ajax') }}",{id:id},".events",responseType = 'html');
        });
        $(document).on('click', '.delete', function(e) {
            e.preventDefault();
            let id = $(this).attr('data-id');
            let url = "{{ route('user.offers.destroy', '') }}" + "/" + id;
            destroy(url);
        });


        $(document).on("change", '.sort_by', function() {
            let sort_by = $(this).val();
            filters.order_by = sort_by.split('-')[0];
            filters.order = sort_by.split('-')[1];
            getOffersListing();
        });
    </script>
@endsection
