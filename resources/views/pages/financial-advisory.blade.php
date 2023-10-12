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
        'src' => asset(config('site_config.assets.images/.'.'banner-animation.mp4')),
    ], 
    'link' => [
            'display' => true,
            'link' => route('site-pages','contact-us'),
            'text' => 'book_now'
    ]
])
@php 
      $Advisories = config('site_config.financial-advisory.sections')
@endphp
    <!-- VIDEO BANNER SECTION END -->
    <!-- ADVISORY SECTION BEGIN -->
    <section class="advisory-sec">
      <div class="container-fluid">
        <div class="row advise-row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <img src="/images//f3.jpg" alt="image" class="img-fluid wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay="0.7s">
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="advise-content wow fadeInRight" data-wow-duration="0.7s" data-wow-delay="0.7s">
              <h4><span>Real Estate Merger and Acquisitions </span></h4>
              <p>Mergers are rewarding, but an entry into a new market can be financially challenging too. At Reality One Group, we provide you with holistic financial consultations pertaining to the investment strategies involved in setting up production centers, initiating distribution channels, managing the old and new storage places, buying new machinery and equipment, and locating financially stable land. </p>
              <br/>
              <br/>
              <h4><span>Portfolio Analysis and Property Analysis  </span></h4>
              <p>Our expert team undertakes in-depth market research to assess the quality of the property where you will invest. We will align you in the process to detail a comprehensive analysis of several components of property investment that may suit your needs and secure a long-term benefit. </p>
            </div>
          </div>
        </div>
        <div class="row advise-row">
          
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="advise-content wow fadeInRight" data-wow-duration="0.7s" data-wow-delay="0.7s">
              <h4><span>Real Estate Transaction Advisory </span></h4>
              <p>Reality One Group helps clients in all the stages of real estate and property transactions whether you are interested in buying or selling residential or commercial property. </p>
              <br/>
              <br/>
              <h4><span>Corporate Financial Advisory </span></h4>
              <p>Reality One Group advises commercial projects, asset managers, and investment bankers about the technology-enabled financial security strategies and restructure the financial frameworks of commercial projects with pre and post-transaction assistance in areas of cyber/IT fraud risks, accounting and audit, tax compliance, and financial operations</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <img src="/images//f2.jpg" alt="image" class="img-fluid wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay="0.7s">
          </div>
        </div>

        <div class="row advise-row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <img src="/images//f4.jpg" alt="image" class="img-fluid wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay="0.7s">
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="advise-content wow fadeInRight" data-wow-duration="0.7s" data-wow-delay="0.7s">
              <h4><span>Valuation Advisory Services </span></h4>
              <p>We provide unbiased valuation assessments of residential and commercial projects, and low and high-end properties to resolve the critical financial issues of the clients. We update our clients with the latest taxation policies and financial requirements to make secured investment decisions that manage the risks and optimize the value. </p>
              <br/>
              <br/>
              <h4><span>Business Services </span></h4>
              <p>We have an innovative and proprietary technology platform to manage the millions of rupees in investments through our data-driven financial solutions. Our financial consultancy enables clients to scale their businesses without worrying about financial risks and bankruptcies. Individuals and businesses trust us when they need help in complex administrative processes that involve financial decisions. </p>
            </div>
          </div>
        </div>

        <div class="row advise-row">
          
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="advise-content wow fadeInRight" data-wow-duration="0.7s" data-wow-delay="0.7s">
              <h4><span>Cyber Risk Solutions </span></h4>
              <p>We aim to establish a cyber-security center at Reality One Group, which will provide financial litigation services to the clients, manage and terminate the active and passive financial online threats, address the financial concerns of the businesses via our call center services, and provide the threat related risk assessments to make a safe digital space for our clients where they can perform minimal or large transactions without any fear. </p>
             
             
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <img src="/images//f1.jpg" alt="image" class="img-fluid wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay="0.7s">
          </div>
        </div>
       
      </div>
    </section>
    <!-- ADVISORY SECTION END --> 
@endsection