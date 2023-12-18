@extends('layouts.auth')

@section('content')
    <!--Start Middle-->

    <!--Start Middle Side-->

                <!--Start Mid Box 1-->
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 border">
                    @php


                        $directory = new App\Models\Directory();
                        $Directory=$directory->first('user_id',$user->id,'=');

                    @endphp
                        <div class="mid-box">

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-left padding">
                                    <h1 class="mb-40">{{ trans('lang.company_detail')}}</h1>
                                    <div class="profile-img">
                                        @if(isset($Directory->media[0]))
                                        <img src="{{ $Directory->media[0]->image_url }}" alt="" class="blog-img img-fuild"/>
                                        @else
                                        <img src="{{ custom_asset('image-not-found.png') }}" alt="" class="blog-img"/>
                                        @endif
                                    </div>
                                    <br/>
                                    {!! $Directory->description !!}
                                <div>
                            </div>
                        </div>
                        <div class="clr"></div>
                    </div>
                    <div class="clr"></div>

                </div>

                <!--End Mid Box 1-->
                <!--Start Right Box 2-->
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 border">
                    <div class="mid-box">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle"

                        src="{{ isset($user->image)?$user->image->image_url:custom_asset('image-not-found.png')}}"

                        alt="User profile picture">
                        </div>
                        <h3 class="profile-username text-center">{{ $user->first_name}}</h3>

                        @if($user->hasRole('user'))

                            <p class="text-muted text-center">{{ trans('lang.owner')}}</p>
                        @else
                            <p class="text-muted text-center">{{ trans('lang.employee')}}</p>
                        @endif
                        <h5 class="mb-20">{{ trans('lang.welcome')}}!</h5>

                        <p class="text-justify mb-20">



                        </p>

                        {!! trans('content.dashboard.welcome') !!}

                    </div>

                    <div class="clr"></div>

                </div>

                <!--End Right Box 2-->

                <!--Start Mid Box 2-->

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border">

                    <div class="mid-box">

                        <h5 class="mb-20">{{ trans('lang.my_listings')}}</h5>

                        <div id="parentHorizontalTab" class="parentHorizontalTab">
                                <div class="event-tabs-cal-list">
                                <ul class="resp-tabs-list hor_1 resp-tabs-list1">
                                    <li>&nbsp; {{ trans('lang.events')}} &nbsp;</li>
                                    <li>&nbsp; {{ trans('lang.space_finders')}} &nbsp;</li>
                                    <li>&nbsp; {{ trans('lang.news')}} &nbsp;</li>

                                </ul>
                                </div>
                            <div class="resp-tabs-container hor_1">
                                <!--Start Table View listing-->
                                <div>
                                    <div class="events"></div>
                                    <div class="clr"></div>
                                </div>
                                <!--End Table View listing-->
                                <!--Start Table View listing-->
                                <div>
                                    <div class="spacefinders"></div>
                                    <div class="clr"></div>
                                </div>
                                <!--End Table View listing-->
                                <!--Start Calendar View listing-->
                                <div>
                                    <div class="news"></div>
                                    <div class="clr"></div>
                                </div>
                                <!--End Calendar View listing-->
                            </div>
                        </div>

                    </div>

                    <div class="clr"></div>

                </div>

                <!--End Mid Box 2-->

                <!--Start Mid Box 3-->

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border">

                    <div class="mid-box">

                        <h5 class="mb-20">Your Chats</h5>

                        Location for links to chat/messages

                    </div>

                    <div class="clr"></div>

                </div>

                <!--End Mid Box 3-->



                <!--Start Mid Box 4-->

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border">

                    <div class="mid-box">

                        Content Here

                    </div>

                    <div class="clr"></div>
                </div>

                <!--End Mid Box 4-->







            <!--End Middle Side-->

    <!--End Middle-->
@endsection
@section('scripts')
<script src="{{ custom_asset('easyResponsiveTabs.js','scripts') }}"></script>
<script>
     async function getMylistings(){
          await ajaxGet("{{route('event-calenders.ajax')}}",{length:10,order_by:'created_at',order:'desc',view_type:'box'},".events",responseType='html');
          await ajaxGet("{{route('space-finders.ajax')}}",{length:10,order_by:'created_at',order:'desc'},".spacefinders",responseType='html');
          await ajaxGet("{{route('blogs.ajax')}}",{length:10,order_by:'created_at',order:'desc'},".news",responseType='html');
     }
     $(function (e) {
        getMylistings();
    });
   let parent = $( '#parentHorizontalTab' );
               console.log(parent)
               parent.easyResponsiveTabs( {
                   type: 'default', //Types: default, vertical, accordion
                   width: 'auto', //auto or any width like 600px
                   fit: true, // 100% fit in a container
                   tabidentify: 'hor_1', // The tab groups identifier
                   activate: function ( event ) { // Callback function if tab is switched
                       var $tab = $( this );
                       var $info = $( '#nested-tabInfo' );
                       var $name = $( 'span', $info );
                       $name.text( $tab.text() );
                       $info.show();
                   }
               } );
   // Child Tab
   $('#ChildVerticalTab_1').easyResponsiveTabs({
               type: 'vertical',
               width: 'auto',
               fit: true,
               tabidentify: 'ver_1', // The tab groups identifier
               activetab_bg: '#fff', // background color for active tabs in this group
               inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
               active_border_color: '#c1c1c1', // border color for active tabs heads in this group
               active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
           });

           //Vertical Tab
           $('#parentVerticalTab').easyResponsiveTabs({
               type: 'vertical', //Types: default, vertical, accordion
               width: 'auto', //auto or any width like 600px
               fit: true, // 100% fit in a container
               closed: 'accordion', // Start closed if in accordion view
               tabidentify: 'hor_1', // The tab groups identifier
               activate: function(event) { // Callback function if tab is switched
                   var $tab = $(this);
                   var $info = $('#nested-tabInfo2');;
                   var $name = $('span', $info);
                   $name.text($tab.text());
                   $info.show();
               }
           });

</script>
@endsection
