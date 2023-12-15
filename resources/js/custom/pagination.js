 // Pagination
 $(document).on('click','.page',async function(e){
    e.preventDefault();
    $('.page').removeClass("page-active");
    $(this).addClass("page-active");
    filters.start = $(this).text();
   await paginationConfig.renderFunction()
})

$(document).on('click','.page.next',async function(e){
e.preventDefault();
totalPages = $('.count').val();
if( filters.start  == totalPages){
    filters.start  = 1;
    $('.page').removeClass('page-active');
    $('.pagination a[data-page=page-1]').addClass("page-active");
   await paginationConfig.renderFunction()
}else{
     filters.start = parseInt(filters.start)+1;
    $('.page').removeClass('page-active')

    $('.pagination a[data-page=page-'+filters.start+ ']').addClass("page-active");
   await paginationConfig.renderFunction()

}
})

$(document).on('click','.page.prev',async function(e){
e.preventDefault();
totalPages = $('.count').val();
if( filters.start  == 1){
    filters.start  = totalPages;
    $('.page').removeClass('page-active');

    $('.pagination a[data-page=page-'+ totalPages + ']').addClass("page-active");
   await paginationConfig.renderFunction()
}else{
     filters.start  = parseInt( filters.start )-1;
    $('.page').removeClass('page-active');
    $('.pagination a[data-page=page-'+filters.start+ ']').addClass("page-active");
   await paginationConfig.renderFunction()
}
})