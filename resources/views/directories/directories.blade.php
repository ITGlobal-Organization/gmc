@extends('layouts.layoutv2')

@section('content')
    <!--Start Middle-->
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
        sort_by = "";

        $(document).on("change", '.sort_by', function() {
            sort_by = $(this).val();
            getDirectoryListing();
        });
        $(document).on('click','.apply-filters',function(){
            let title = $('.title').val();
            let email = $('.email').val();
            let address = $('.address').val();
            let mobile_no = $('.mobile_no').val();
            let phone = $('.phone').val();
            let web_url = $('.web_url').val();

            data = {
                'title':title,
                'email':email,
                'address':address,
                'mobile_no':mobile_no,
                'phone':phone,
                'web_url':web_url
            }
            ajaxGet("{{route('directories.search')}}",data,".directories",responseType = 'html')
        });
        $(document).ready(function() {
            getDirectoryListing();
        });

        function getDirectoryListing() {
            ajaxGet("{{ route('directories.ajax') }}", {sort_by}, ".directories", responseType = 'html');
        }
    </script>
@endsection
