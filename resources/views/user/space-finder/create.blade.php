@extends('layouts.auth')
@section('content')
    <!--Start Middle-->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding events">
        <div class="middle mtb-60">
            <h1 class="text-center mb-25">{{ trans('messages.add_new_msg',[
                    'attribute' => trans('lang.space_finder')
                ])}}</h1>
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
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="youtube_url">Twitter Url</label>
                            <input type="text" class="serch-input" value="" placeholder="Twitter Url"
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
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mb-20">
                                <label for="description">Description</label>
                                <textarea id="w3review" class="text-area" rows="4" name="description" rows="4" value=""></textarea>
                                <div class="error-description"></div>
                                <div class="clr"></div>
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
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mt-25 upload-div">
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border" style="position:relative;">
                                <label for="img">Upload Image:</label>
                                <input type="file" name="filename[]" class="form-control file" accept=".png,.jpeg,.jpg">
                                <div class="clr"></div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mb-25  upload-div">
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border " style="position:relative;">
                                <a href="url" class="gallery-link" data-name="main">Select from gallery:</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mtb-25 border">
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border  thumbnail-img-div hidden"
                                style="position:relative;">
                                <button class="close close-thumbnail" type="button">
                                    <span>&times;</span>
                                </button>
                                <img src="" alt="" data-id="">
                                <div class="clr"></div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mt-25 upload-thumbnail-div">
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border " style="position:relative;">
                                <label for="img">Upload Thumbnail:</label>
                                <input type="file" name="filename[]" multiple class="form-control thumbnail" accept=".png,.jpeg,.jpg" id="imageInput">
                                <div class="clr"></div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mb-25 upload-thumbnail-div">
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border " style="position:relative;">
                                <a href="url" class="gallery-link" data-name="thumbnail">Select from gallery:</a>
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
    {{-- Modal --}}
    @include('user.common.gallery-modal')
@endsection
@section('scripts')
    <script>
        var main_img_id='';
        var thumbnail_img_id='';
        ClassicEditor
            .create(document.querySelector('#w3review'))
            .catch(error => {
                console.error(error);
            });
        $('.store').on('submit', function(e) {
            e.preventDefault();
            var form = new FormData(this);
            main_img_src = $('.img-div').children('img').attr("src");
            thumbnail_img_src = $('.thumbnail-img-div').children('img').attr("src");
            main_image = $('.file')[0].files[0];
            thumbnail_image = $('.thumbnail')[0].files[0];

            if (main_image != undefined) {
                form.append('image', main_image);
            }
            if (thumbnail_image != undefined) {
                form.append('thumbnail', thumbnail_image);
            }
            if (main_img_src != '' && thumbnail_img_src != '') {
                let url = "{{ route('user.space-finders.store') }}";
                form.append('main_img_id', main_img_id);
                form.append('thumbnail_img_id', thumbnail_img_id);
                ajaxPost(url, form, '.contact-success', '.contact-error');
            } else {
                alert("Please Upload Image and thumbnail");
            }
        });

        $(document).ready(function() {
            let img_div= $('.img-div');
            let upload_div=$('.upload-div');
            let close_btn=$('.AClass');
            let thumbnail_img_div = $('.thumbnail-img-div');
            let thumbnail_upload_div = $('.upload-thumbnail-div');
            let thumbnail_close_btn =$('.close-thumbnail');
            var galleryFor = '';
            onChangeFile(img_div, upload_div, close_btn);
            onChangeThumbnail(thumbnail_img_div, thumbnail_upload_div, thumbnail_close_btn);
            showgalleryImages(galleryFor);

});


    </script>
@endsection
