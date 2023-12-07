@extends('layouts.layoutv2')
@section('content')
    <!--Start Middle-->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding events">
        <div class="middle mtb-60">
            <h1 class="text-center mb-25">Add New</h1>
            <p class="text-center mb-40">
                Please get in touch with us by telephone or email. Alternatively, you can use the enquiry form below.
            </p>
            <div class="contact-success"></div>
            <div class="contact-error"></div>
            <form action="" class="store" enctype="multipart/form-data">
                <input type="hidden" name="user_id" id="" value="{{ Auth::user()->id }}">
                <input type="hidden" name="is_approved" id="" value="0">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mtb-25">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="first_name">First Name</label>
                            <input type="text" class="serch-input" value="" placeholder="First Name"
                                name="first_name">
                            <div class="error-first_name"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="serch-input" value="" placeholder="Last Name"
                                name="last_name">
                            <div class="error-last_name"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="company_name">Company Name</label>
                            <input type="text" class="serch-input" value="" placeholder="Company Name"
                                name="company_name">
                            <div class="error-company_name"></div>
                            <div class="clr"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mtb-25">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="email">Email</label>
                            <input type="text" class="serch-input" value="" placeholder="Email" name="email">
                            <div class="error-email"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="phone">Phone</label>
                            <input type="text" class="serch-input" value="" placeholder="Phone" name="phone">
                            <div class="error-phone"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="web_url">Website Url</label>
                            <input type="text" class="serch-input" value="" placeholder="Website Url"
                                name="web_url">
                            <div class="error-web_url"></div>
                            <div class="clr"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mtb-25">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mb-20">
                        <label for="description">Offer Details</label>
                        <textarea id="w3review" class="text-area" rows="4" name="offer_details" rows="4" value=""></textarea>
                        <div class="error-description"></div>
                        <div class="clr"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mtb-25">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20 img-div hidden"
                            style="position:relative;">
                            <button class="close AClass" type="button">
                                <span>&times;</span>
                            </button>
                            <img src="" alt="" data-id="">
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mtb-25 upload-div">
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20" style="position:relative;">
                                <input type="file" name="filename[]" class="form-control file"
                                    accept=".png,.jpeg,.jpg">
                                <div class="clr"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mtb-25">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20 logo-div hidden"
                            style="position:relative;">
                            <button class="close logo-close" type="button">
                                <span>&times;</span>
                            </button>
                            <img src="" alt="" data-id="">
                            <div class="clr"></div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mtb-25 logo-upload-div">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20" style="position:relative;">
                            <input type="file" name="filename[]" class="form-control logo" accept=".png,.jpeg,.jpg">
                            <div class="clr"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-left mb-20">
                    <input type="submit" class="ct-submit" value="Submit">
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
        $('.store').on('submit', function(e) {
            e.preventDefault();
            var form = new FormData(this);
            img_src = $('.img-div').children('img').attr("src");
            logo_src = $('.logo-div').children('img').attr("src");
            img = $('.file')[0].files[0];
            logo = $('.logo')[0].files[0];
            if (img != "undefined" && logo != "undefined") {
                form.append('image', img);
                form.append('logo', logo);
            }
            if (img_src != '' && logo_src != '') {
                let id = '';
                let url = "{{ route('user.offers.store') }}";
                ajaxPost(url, form, '.contact-success', '.contact-error');
            } else if (img_src == '') {
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
