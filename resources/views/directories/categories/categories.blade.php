@extends('layouts.layoutv2')
@section('content')
<div class="categories">
   
</div>
<div class="clr"></div>
<script>
  let totalPages = 0;
        let filters = {
            search:"",
            start:1

        }

        $(document).on('keyup','#searchInput',function(e){
            filters.search = $(this).val();
            setTimeout(() => {
               getCategoriesListings();
            }, 2000);
            
        });

        $(document).ready(function() {
         getCategoriesListings();
        });
        // Pagination
        

      function getCategoriesListings() {
            ajaxGet("{{ route('directories.category.ajax') }}", filters, ".categories", responseType = 'html');
      }

      let paginationConfig = {
            renderFunction:getCategoriesListings
        }
   
</script>
<script src="{{ custom_asset('pagination.js','scripts')}}"></script>
@endsection