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
            <form action="" class="update" enctype="multipart/form-data">
                <input type="hidden" name="user_id" id="" value="{{ $SpaceFinder->user_id }}">
                <input type="hidden" name="is_approved" id="" value="{{ $SpaceFinder->is_approved }}">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mtb-25">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                        <label for="title">Title</label>
                        <input type="text" class="serch-input" value="{{ $SpaceFinder->title }}" placeholder="Title"
                            name="title">
                        <div class="clr"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                        <label for="categories">Categories</label>
                        <input type="text" class="serch-input" value="{{ $SpaceFinder->categories }}"
                            placeholder="Categories" name="categories">
                        <div class="clr"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                        <label for="email">Email</label>
                        <input type="text" class="serch-input" value="{{ $SpaceFinder->email }}" placeholder="Email"
                            name="email">
                        <div class="clr"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                        <label for="mobile_no">Mobile No</label>
                        <input type="text" class="serch-input" value="{{ $SpaceFinder->mobile_no }}"
                            placeholder="Mobile No" name="mobile_no">
                        <div class="clr"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                        <label for="address">Address</label>
                        <input type="text" class="serch-input" value="{{ $SpaceFinder->address }}" placeholder="Address"
                            name="address">
                        <div class="clr"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                        <label for="venue_url">Venue</label>
                        <input type="text" class="serch-input" value="{{ $SpaceFinder->venue_url }}" placeholder="Venue"
                            name="venue_url">
                        <div class="clr"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                        <label for="facebook_url">Facebook Url</label>
                        <input type="text" class="serch-input" value="{{ $SpaceFinder->facebook_url }}"
                            placeholder="Facebook Url" name="facebook_url">
                        <div class="clr"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                        <label for="instagram_url">Instagram Url</label>
                        <input type="text" class="serch-input" value="{{ $SpaceFinder->instagram_url }}"
                            placeholder="Instagram Url" name="instagram_url">
                        <div class="clr"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                        <label for="linkedin_url">LinkedIn Url</label>
                        <input type="text" class="serch-input" value="{{ $SpaceFinder->linkedin_url }}"
                            placeholder="LinkedIn Url" name="linkedin_url">
                        <div class="clr"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                        <label for="youtube_url">Youtube Url</label>
                        <input type="text" class="serch-input" value="{{ $SpaceFinder->youtube_url }}"
                            placeholder="Youtube Url" name="youtube_url">
                        <div class="clr"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                        <label for="web_url">Website Url</label>
                        <input type="text" class="serch-input" value="{{ $SpaceFinder->web_url }}"
                            placeholder="Website Url" name="web_url">
                        <div class="clr"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                        <label for="phone">Phone</label>
                        <input type="text" class="serch-input" value="{{ $SpaceFinder->phone }}" placeholder="Phone"
                            name="phone">
                        <div class="clr"></div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mtb-25">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mb-20">
                        <label for="description">Description</label>
                        <textarea id="w3review" class="text-area" rows="4" name="description" rows="4"
                            value="{{ $SpaceFinder->description }}">{!! $SpaceFinder->description !!}</textarea>
                        <div class="clr"></div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mtb-25">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20 img-div" style="position:relative;">
                        <button class="close AClass" type="button">
                            <span>&times;</span>
                        </button>
                        <img src="{{ $SpaceFinder->media[0]->image_url }}" alt="" data-id="{{$SpaceFinder->media[0]->id}}">
                        <div class="clr"></div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mtb-25 upload-div hidden">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20" style="position:relative;">
                        <input type="file" name="filename[]" class="form-control file">
                        <div class="clr"></div>
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
        $('.update').on('submit', function(e) {
            e.preventDefault();
            var form = new FormData(this);
            prev_img = $('.img-div').children('img').attr("src");
            file = $('input[type=file]')[0].files[0];
            if (file != "undefined") {
                form.append('image', file);
            }
            if (prev_img != '') {
                let id = '<?php echo $SpaceFinder->id; ?>';
                let url = "{{ route('user.space-finders.update', '') }}" + "/" + id;
                ajaxPost(url, form, '.contact-success', '.contact-error');
            } else {
                alert("Please Upload Image")
            }


        });

        $(document).ready(function() {
            onChangeFile($('.img-div'), $('.upload-div'),$('.AClass'));
        });
    </script>
@endsection
