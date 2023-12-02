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
                            <label for="title">Title</label>
                            <input type="text" class="serch-input" value="" placeholder="Title" name="title">
                            <div class="error-title"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="categories">Categories</label>
                            <input type="text" class="serch-input" value="" placeholder="Categories"
                                name="categories">
                            <div class="error-categories"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="email">Email</label>
                            <input type="text" class="serch-input" value="" placeholder="Email" name="email">
                            <div class="error-email"></div>
                            <div class="clr"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                        <label for="mobile_no">Mobile No</label>
                        <input type="text" class="serch-input" value="" placeholder="Mobile No" name="mobile_no">
                        <div class="error-mobile_no"></div>
                        <div class="clr"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                        <label for="address">Address</label>
                        <input type="text" class="serch-input" value="" placeholder="Address" name="address">
                        <div class="error-address"></div>
                        <div class="clr"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                        <label for="venue_url">Venue</label>
                        <input type="text" class="serch-input" value="" placeholder="Venue" name="venue_url">
                        <div class="error-venue_url"></div>
                        <div class="clr"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                        <label for="facebook_url">Facebook Url</label>
                        <input type="text" class="serch-input" value="" placeholder="Facebook Url"
                            name="facebook_url">
                        <div class="error-facebook_url"></div>
                        <div class="clr"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                        <label for="instagram_url">Instagram Url</label>
                        <input type="text" class="serch-input" value="" placeholder="Instagram Url"
                            name="instagram_url">
                        <div class="error-instagram_url"></div>
                        <div class="clr"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                        <label for="linkedin_url">LinkedIn Url</label>
                        <input type="text" class="serch-input" value="" placeholder="LinkedIn Url"
                            name="linkedin_url">
                        <div class="error-linkedin_url"></div>
                        <div class="clr"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                        <label for="youtube_url">Youtube Url</label>
                        <input type="text" class="serch-input" value="" placeholder="Youtube Url"
                            name="youtube_url">
                        <div class="error-youtube_url"></div>
                        <div class="clr"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                        <label for="web_url">Website Url</label>
                        <input type="text" class="serch-input" value="" placeholder="Website Url"
                            name="web_url">
                        <div class="error-web_url"></div>
                        <div class="clr"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                        <label for="phone">Phone</label>
                        <input type="text" class="serch-input" value="" placeholder="Phone" name="phone">
                        <div class="error-phone"></div>
                        <div class="clr"></div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mtb-25">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mb-20">
                        <label for="description">Description</label>
                        <textarea id="w3review" class="text-area" rows="4" name="description" rows="4" value=""></textarea>
                        <div class="error-description"></div>
                        <div class="clr"></div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mtb-25">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20 img-div hidden"
                        style="position:relative;">
                        <button class="close AClass" type="button">
                            <span>&times;</span>
                        </button>
                        <img src="" alt="" data-id="">
                        <div class="clr"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mtb-25 upload-div">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20" style="position:relative;">
                            <input type="file" name="filename[]" class="form-control file" accept=".png,.jpeg,.jpg">
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
            prev_img = $('.img-div').children('img').attr("src");
            file = $('.file')[0].files[0];
            console.log(file)
            if (file != "undefined") {
                form.append('image', file);
            }
            if (prev_img != '') {
                let id = '';
                let url = "{{ route('user.space-finders.store') }}";
                ajaxPost(url, form, '.contact-success', '.contact-error');
            } else {
                alert("Please Upload Image")
            }


        });

        $(document).ready(function() {
            onChangeFile($('.img-div'), $('.upload-div'), $('.AClass'));
        });


    </script>
@endsection
