@extends('layouts.layoutv1')
@section('content')

<!-- VIDEO BANNER SECTION BEGIN -->
@include('sections.bannerv1',[
    'heading' => $title,
    'sub_heading' => trans('messages.banner_subheading1'),
    'image' => [
        'display' => false,
        'src' => '',
    ],
    'video' => [
        'display' => false,
        'src' => asset(config('site_config.assets.images.'.'banner-animation.mp4')),
    ], 
    'link' => [
            'display' => true,
            'link' => route('site-pages','contact-us'),
            'text' => 'book_now'
    ]
])
<!-- VIDEO BANNER SECTION END -->
<!-- BUY SELL SECTION BEGIN -->

<section class="buy-sell-sec buy-sell-al">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            @include('sections.filters.filterv1',[
                'heading'  => __('messages.properties.sec-heading'),
                'subheading' => __('messages.properties.sec-subheading'),
                'Properties' => $Properties, 
            ])
         </div>
      </div>
        <div id="properties">
           
        </div>
        
    </div>
   </div>
   
</section> 
<div class="map" id="map" style="height: 400px;margin-top:20px;">

    </div> 
<!-- BUY SELL SECTION END -->
@endsection
@section('scripts')
<script>
$(document).ready(function(e){
    //getCities();
    getProperties({});
});
// $(document).ready(function(){
    
// })
 $(document).on('click','.page-link',function(e){
    e.preventDefault();
    getProperties({
        start:$(this).data('value')
    });
 });

 $(document).on('click','.search_filter',function(e){
    e.preventDefault();
    getProperties({
        category:$(this).data('value')
    });
 });

function getProperties(data){
    var city = '';
    var urlParameter = window.location.href.split('?')[1];
    if(urlParameter && urlParameter.length > 0){
        city_parameter = urlParameter.split('&')[0];        
        city = city_parameter.split('=')[1]?city_parameter.split('=')[1]:''; 
        
    }
    
    let request = {
        
        search_city:$('.search_city option:selected').val()!= ''?$('.search_city option:selected').val():city.replace('+',' '),
        search_location:$('.search_location').val(),
        search_developer:$('.search_developer').val(),
        search_type:$('.search_type').val(),
        search_min_price:$('.search_min_price').val(),
        search_max_price:$('.search_max_price').val(),
        search_min_area:$('.search_min_area').val(),
        search_max_area:$('.search_max_area').val(),
        category:$('#category').val(),
        start:1,
        length:9,
        ...data
    };
    ajaxGet(`/properties/`,request,'#properties');
    ajaxGet(`/properties/locations`,request,'#properties','json',function(response){
        // console.log(response);
        if(response.data.totalRecord > 0){
            var map = new GMaps({
                el: '#map',
                lat: '31.03337426163127',
                lng: '69.29326878452582',
                scrollwheel: true
            });
            
            

            var bounds = [];
            
        for (i = 0; i < response.data.data.length; i++) {  
            var latlng = new google.maps.LatLng(response.data.data[i].latitude, response.data.data[i].lognitude);
            bounds.push(latlng);
            map.addMarker({
                lat: response.data.data[i].latitude,
                lng: response.data.data[i].lognitude,
                title: response.data.data[i].name,
                infoWindow: {
                    content: '<p>'+response.data.data[i].name+'</p>'
                }
            })
        }
        map.fitLatLngBounds(bounds);
    }
    });
}





</script>


@endsection