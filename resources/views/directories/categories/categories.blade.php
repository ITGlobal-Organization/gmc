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
        $(document).on('click','.page',function(e){
            e.preventDefault();
            $('.page').removeClass("page-active");
            $(this).addClass("page-active");
            filters.start = $(this).text();
            getCategoriesListings();
        })

        $(document).on('click','.next',function(e){
        e.preventDefault();
        totalPages = $('.count').val();
        if( filters.start  == totalPages){
            filters.start  = 1;
            $('.page').removeClass('page-active');
            $('.pagination a[data-page=page-1]').addClass("page-active");
            getCategoriesListings();
        }else{
             filters.start = parseInt(filters.start)+1;
            $('.page').removeClass('page-active')
            $('.pagination a[data-page=page-'+ page + ']').addClass("page-active");
            getCategoriesListings();
        }
    })

    $(document).on('click','.prev',function(e){
        e.preventDefault();
        totalPages = $('.count').val();
        if( filters.start  == 1){
            filters.start  = totalPages;
            $('.page').removeClass('page-active');
            $('.pagination a[data-page=page-'+ totalPages + ']').addClass("page-active");
            getCategoriesListings();
        }else{
             filters.start  = parseInt( filters.start )-1;
            $('.page').removeClass('page-active');
            $('.pagination a[data-page=page-'+ page + ']').addClass("page-active");
            getCategoriesListings();
        }
    })

      function getCategoriesListings() {
            ajaxGet("{{ route('directories.category.ajax') }}", filters, ".categories", responseType = 'html');
      }
   
</script>
@endsection