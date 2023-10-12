@extends('layouts.layoutv1')
@section('content')

<!-- BANNER SECTION BEGIN -->
<section class="about-banner-sec">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="about-banner-content">
              <h2>{{ trans('lang.get_a_quote')}}</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- BANNER SECTION END -->
    <!-- QUOTE SECTION BEGIN -->
    <section class="quote-sec">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-2 col-md-2 col-sm-2 col-12"></div>
          <div class="col-lg-8 col-md-8 col-sm-8 col-12">
            <div class="quote-form">
              <h2><span>{{ trans('lang.get')}} {{ trans('lang.a')}}</span> {{ trans('lang.free')}} {{ trans('lang.quote')}}</h2>
              <form class="get-a-quote-form" enctype="multipart/form-data">
                <div class="quote-success"></div>
                <div class="quote-error"></div>
                <div class="row flex-fields">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <input type="text" name="first_name" placeholder="Name" class="form-control first_name">
                  <div class="error-first_name errors"></div>
                  </div>
                   <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <input type="text" name="address" placeholder="Address" class="form-control address">
                  <div class="error-address errors"></div>
                  </div>
                </div>
                <div class="row flex-fields">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <input type="email" name="email" placeholder="Email" class="form-control email">
                  <div class="error-email errors"></div>
                  </div>
                   <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <input type="number" name="phone_no" placeholder="Phone Number" class="form-control phone_no">
                  <div class="error-phone_no errors"></div>
                  </div>
                </div>
                <!-- <div class="row flex-fields">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <input type="text" name="state" placeholder="State" class="form-control state">
                  <div class="error-state errors"></div>
                  </div>
                   <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <input type="number" name="postalcode" placeholder="Postal Code" class="form-control postalcode">
                  <div class="error-postalcode errors"></div>
                  </div>
                </div> -->
                <div class="row flex-fields">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <textarea cols="1" rows="1" name="message" placeholder="Project Details/Message" class="form-control message"></textarea>
                  <div class="error-message errors"></div>
                  </div>
                </div>
                  <div class="panel">
                    <div class="button_outer">
                      <div class="upload-flex">
                      <div class="up-txt">
                        <h6>{{ trans('content.get_a_quote1')}}</h6>
                      </div>
                      <div class="btn_upload">
                        <input type="file" name="file" class="file" id="upload_file" name="">
                        <i class="fa fa-plus" aria-hidden="true"></i> {{ trans('lang.upload') }}
                      </div>
                      </div>
                      <div class="processing_bar"></div>
                      <div class="success_box"></div>
                    </div>
                    <p class="ext-txt">{{ trans('content.get_a_quote2')}}</p>
                  </div>
                  <div class="error_msg"></div>
                  <div class="uploaded_file_view" id="uploaded_view">
                    <span class="file_remove">X</span>
                  </div>
                <div class="form-btn form-btn2">
                <button type="submit" class="btn btn-primary">{{ strtoupper(trans('lang.send')) }}</button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-12"></div>
        </div>
      </div>
    </section>
    <!-- QUOTE SECTION END -->
@endsection
