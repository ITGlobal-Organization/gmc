@extends('layouts.layoutv2')

@section('content')
    <!--Start Tabbing Area-->
    <div class="middle mtb-30">
        <div id="container">
            <div id="parentHorizontalTab">
                <ul class="resp-tabs-list hor_1">
                    <li class="all"><img src="{{ custom_asset('icon1.png') }}" width="15" alt="" />&nbsp; All
                        &nbsp;</li>
                    <li class="offers"><img src="{{ custom_asset('icon2.png') }}" width="17" alt="" />&nbsp;
                        M2M Offers &nbsp;</li>
                    <li class="event"><img src="{{ custom_asset('icon3.png') }}" width="18" alt="" />&nbsp;
                        Events &nbsp;</li>
                    <li class="news"><img src="{{ custom_asset('icon4.png') }}" width="25" alt="" />&nbsp;
                        News &nbsp;</li>
                    <li class="platinum-partners"><img src="{{ custom_asset('icon5.png') }}" width="25"
                            alt="" />&nbsp; Platinum Partners &nbsp;</li>
                </ul>
                <div class="resp-tabs-container hor_1">
                    <!--Start All Tab Area-->
                    {{-- <div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border margin-tb25">
                            <div class="row">
                                <?php for($i=1;$i<=8;$i++) : ?>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="main-box">
                                        <div class="box-img card-image">
                                            <a href="blog-details.php"><img src="./media/all/<?php echo $i; ?>.jpg"
                                                    alt="" width="100%" class="box-img"/></a>
                                        </div>
                                        <div class="box-date"><i class="far fa-calendar-alt" style="color: #ffffff;"></i>
                                            March 11, 2022</div>
                                        <div class="box-name">
                                            <a href="blog-details.php">
                                                Business Gateway: Managing People – Sustaining Employee Engagement
                                            </a>
                                        </div>
                                        <div class="box-text">
                                            What to expect from this webinar New and established businesses will require a
                                            business plan for
                                        </div>
                                    </div>
                                    <div class="clr"></div>
                                </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                        <div class="clr"></div>
                    </div> --}}
                    <!--End All Tab Area-->
                    @include('tabs.all')
                    @include('tabs.offers')
                    @include('tabs.events')
                    @include('tabs.news')
                    @include('tabs.platinum-partners')
                </div>
            </div>
        </div>
        <div class="clr"></div>
    </div>
    <!--End Tabbing Area-->
    <!--Start About Area-->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mtb-60 ab-bg">
       <div class="middle">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <!--<p>
                    <b>Get TO Know</b>
                </p>-->
                <h2>Welcome to</h2>
                <h3>Perthshire Chamber of Commerce</h3>
                <p class="text-justify">
                    Perthshire Chamber of Commerce (PCC) is an independent, non-profit making, non-political business
                    membership organisation.
                    <br><br>
                    Our focus is on championing the issues that matter to our members, helping promote and protect the
                    interests of local businesses, and ensuring the economic future for the communities of Perthshire.
                    <br><br>
                    We cater for all sizes, from sole traders up to some of the area’s largest international employers, for
                    all sectors, and from startups to those already well-established including both rural and urban.
                    <br><br>
                    Perthshire Chamber is the local part of Scottish, British and International Chambers of Commerce and is
                    Scotland’s largest and most influential business to business network.
                </p>
                {{-- <div class="bal-btn"><a href="#"><i class="fa fa-long-arrow-right" style="color: #ffffff;" aria-hidden="true"></i> Learn More</a></div> --}}
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 shrink">
                <img src="{{ custom_asset('ab-img.png') }}" width="100%" alt=""  class="blog-img"/>
            </div>
            <div class="clr"></div>
        </div>
         <div class="clr"></div>
    </div>
    <!--End About Area-->
    <div class="platinum-partners-footer">
    </div>
{{-- <div class="row">
   <div class="middle mtb-60">
      <h2 class="text-center mtb-60 text-uppercase">Platinum Partners</h2>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
         <div id="owl-demo" class="owl-carousel">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <div class="main-brand"><a href="/binngroup"><img src="{{ custom_asset('barnd1.png') }}" alt=""/></a></div>
               <div class="clr"></div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <div class="main-brand"><a href="/blackhills/"><img src="{{ custom_asset('barnd3.png') }}" alt=""/></a></div>
               <div class="clr"></div>
            </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <div class="main-brand"><a href="/castlewater"><img src="{{ custom_asset('barnd4.png') }}" alt=""/></a></div>
               <div class="clr"></div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <div class="main-brand"><a href="/crunchycarrot"><img src="{{ custom_asset('barnd10.png') }}" alt=""/></a></div>
               <div class="clr"></div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <div class="main-brand"><a href="/flonix"><img src="{{ custom_asset('barnd5.png') }}" alt=""/></a></div>
               <div class="clr"></div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <div class="main-brand"><a href="/uhiperth"><img src="{{ custom_asset('barnd6.png') }}" alt=""/></a></div>
               <div class="clr"></div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <div class="main-brand"><a href="/pa"><img src="{{ custom_asset('barnd7.png') }}" alt=""/></a></div>
               <div class="clr"></div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <div class="main-brand"><a href="/stv"><img src="{{ custom_asset('barnd11.jpg') }}" alt=""/></a></div>
               <div class="clr"></div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <div class="main-brand"><a href="/thorntons"><img src="{{ custom_asset('barnd13.png') }}" alt=""/></a></div>
               <div class="clr"></div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <div class="main-brand"><a href="/tlc"><img src="{{ custom_asset('barnd12.jpg') }}" alt=""/></a></div>
               <div class="clr"></div>
            </div>
            <div class="clr"></div>
         </div>
      </div>
      <div class="clr"></div>
   </div>
   <div class="clr"></div>
</div> --}}


@endsection

@section('scripts')

<!-- Frontpage Demo -->
    <!--End Platinum Partners Area-->
    <!-- <script src="{{ custom_asset('jquery-1.9.1.min.js', 'scripts') }}"></script> -->
    <script src="{{ custom_asset('owl.carousel.min.js', 'scripts') }} "></script>
    <script>
        $(document).ready(function() {

            

        });
    </script>

    <script src="{{ custom_asset('easyResponsiveTabs.js', 'scripts') }}"></script>
    <script type="text/javascript">
        async function getRenderData(){
            limit = 10;
            //onload footer platinum partners
            await ajaxGet("{{ route('platinum-partners-tab.ajax') }}", {limit}, ".platinum-partners-footer",
                    responseType = 'html');
             //onload events
            await ajaxGet("{{ route('events-tab.ajax') }}", {}, ".events-tab", responseType = 'html');
            // all tabs onload
            await ajaxGet("{{ route('all-tab.ajax') }}", {}, ".all-tab", responseType = 'html');
            //onload news
            await ajaxGet("{{ route('news-tab.ajax') }}", {}, ".news-tab", responseType = 'html');
            //onload platinum partners
            await ajaxGet("{{ route('platinum-partners-tab.ajax') }}", {}, ".platinum-partners-tab",
                    responseType = 'html');
                    await ajaxGet("{{ route('offers-tab.ajax') }}", {}, ".offers-tab", responseType = 'html');
        }
        $(document).ready(function() {
            //Horizontal Tab

                getRenderData();

            $('#parentHorizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                tabidentify: 'hor_1', // The tab groups identifier
                activate: function(event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#nested-tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });

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

            $('.event').on('click', function(e) {
                e.preventDefault();
                ajaxGet("{{ route('events-tab.ajax') }}", {}, ".events-tab", responseType = 'html');
            });
            $('.offers').on('click', function(e) {
                e.preventDefault();
                ajaxGet("{{ route('offers-tab.ajax') }}", {}, ".offers-tab", responseType = 'html');
            });
            $('.all').on('click', function(e) {
                e.preventDefault();
                ajaxGet("{{ route('all-tab.ajax') }}", {}, ".all-tab", responseType = 'html');
            });
            $('.news').on('click', function(e) {
                e.preventDefault();
                ajaxGet("{{ route('news-tab.ajax') }}", {}, ".news-tab", responseType = 'html');
            });
            $('.platinum-partners').on('click', function(e) {
                e.preventDefault();
                ajaxGet("{{ route('platinum-partners-tab.ajax') }}", {}, ".platinum-partners-tab",
                    responseType = 'html');
            });

            var owl = $("#owl-demo");

            owl.owlCarousel({
                items: 5, //10 items above 1000px browser width
                itemsDesktop: [1199, 5], //5 items between 1000px and 901px
                itemsDesktopSmall: [900, 5], // betweem 900px and 601px
                itemsTablet: [768, 4], //2 items between 600 and 0
                itemsMobile: [479, 1], // itemsMobile disabled - inherit from itemsTablet option
                autoplayTimeout:1000,
                autoplayHoverPause:true,
                autoplay:true,
                loop:true,
            });

            // Custom Navigation Events
            $(".next").click(function() {
                owl.trigger('owl.next');
            })
            $(".prev").click(function() {
                owl.trigger('owl.prev');
            })
            $(".play").click(function() {
                owl.trigger('owl.play', 1000); //owl.play event accept autoPlay speed as second parameter
            })
            $(".stop").click(function() {
                owl.trigger('owl.stop');
            })

        });
    </script>
@endsection
