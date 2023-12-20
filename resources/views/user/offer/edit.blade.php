@extends('layouts.auth')
@section('content')
    <!--Start Middle-->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding events">
        <div class="middle mtb-60">
            <h1 class="text-center mb-25">{{ trans('messages.edit_msg',[
                    'attribute' => trans('lang.offer')
                ])}}</h1>
            <div class="contact-success"></div>
            <div class="contact-error"></div>
            <form action="" class="update" enctype="multipart/form-data">
                <input type="hidden" name="user_id" id="" value="{{ $Offers->user_id }}">
                <input type="hidden" name="is_approved" id="" value="{{ $Offers->is_approved }}">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mtb-25">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="first_name">First Name</label>
                            <input type="text" class="serch-input" value="{{ $Offers->first_name }}" placeholder="First Name"
                                name="first_name">
                            <div class="error-first_name"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="serch-input" value="{{ $Offers->last_name }}"
                                placeholder="Last Name" name="last_name">
                            <div class="error-last_name"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="email">Email</label>
                            <input type="text" class="serch-input" value="{{ $Offers->email }}" placeholder="Email"
                                name="email">
                            <div class="error-email"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="company_name">Company Name</label>
                            <input type="text" class="serch-input" value="{{ $Offers->company_name }}"
                                placeholder="Company Name" name="company_name">
                            <div class="error-company_name"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="web_url">Website Url</label>
                            <input type="text" class="serch-input" value="{{ $Offers->web_url }}"
                                placeholder="Website Url" name="web_url">
                            <div class="error-web_url"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="phone">Phone</label>
                            <input type="text" class="serch-input" value="{{ $Offers->phone }}" placeholder="Phone"
                                name="phone">
                            <div class="error-phone"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mb-20">
                            <label for="offer_details">Offer Details</label>
                            <textarea id="w3review" class="text-area" rows="4" name="offer_details" rows="4"
                                value="{{ $Offers->offer_details }}">{!! $Offers->offer_details !!}</textarea>
                            <div class="error-offer_details"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mtb-25">
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20 img-div" style="position:relative;">
                                <button class="close AClass" type="button">
                                    <span>&times;</span>
                                </button>
                                <img src="{{ isset($Offers->media[0]->image_url) ? $Offers->media[0]->image_url : asset('/media/image-not-found.png') }}" alt=""
                                    data-id="{{ isset($Offers->media[0]->id) ? $Offers->media[0]->id : "" }}">
                                <div class="clr"></div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mtb-25 upload-div hidden">
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20" style="position:relative;">
                                <label for="img">Upload Image:</label>
                                <input type="file" name="filename[]" class="form-control file">
                                <div class="clr"></div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mtb-25">
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20 logo-div" style="position:relative;">
                                <button class="close logo-close" type="button">
                                    <span>&times;</span>
                                </button>
                                <img src="{{ isset($Offers->media[1]->image_url) ? $Offers->media[1]->image_url : asset('/media/image-not-found.png') }}" alt=""
                                    data-id="{{ isset($Offers->media[1]->id) ? $Offers->media[1]->id : "" }}">
                                <div class="clr"></div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mtb-25 logo-upload-div hidden">
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20" style="position:relative;">
                                <input type="file" name="filename[]" class="form-control logo">
                                <div class="clr"></div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right mb-20">
                            <input type="submit" class="ct-submit" value="Submit">
                        </div>
                    </div>
                </div>

        </div>
        </form>
        <div class="clr"></div>
    </div>
    <div class="clr"></div>

    </div>
    <!--End Middle-->
@endsection
@section('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#w3review'))
            .catch(error => {
                console.error(error);
            });
        $('.update').on('submit', function(e) {
            e.preventDefault();
            var form = new FormData(this);
            prev_img = $('.img-div').children('img').attr("src");
            prev_logo = $('.logo-div').children('img').attr("src");
            img = $('.file')[0].files[0];
            logo = $('.logo')[0].files[0];
            if (img != "undefined") {
                form.append('image', img);
            }
            if(logo != "undefined"){
                form.append('logo', logo);
            }
            if (prev_img != '' && prev_logo != '') {
                let id = '<?php echo $Offers->id; ?>';
                let url = "{{ route('user.offers.update', '') }}" + "/" + id;
                ajaxPost(url, form, '.contact-success', '.contact-error');
            }
            else if(prev_img == ''){
                alert("Please Upload Image")
            } else {
                alert("Please Upload Logo")
            }


        });

        $(document).ready(function() {
            onChangeFile($('.img-div'), $('.upload-div'), $('.AClass'));
            onChangeLogo($('.logo-div'), $('.logo-upload-div'), $('.logo-close'));
        });
    </script>
@endsection
