@extends('layouts.layoutv2')
@section('content')
    <!--Start Middle-->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding events">
        <div class="middle mtb-60">
            <h1 class="text-center mb-25">
                {{ trans('messages.edit_msg', [
                    'attribute' => trans('lang.profile'),
                ]) }}
            </h1>
            <div class="contact-success"></div>
            <div class="contact-error"></div>
            <form action="" class="update" enctype="multipart/form-data">
                <input type="hidden" name="is_approved" id="" value="{{ $Company->is_approved }}">
                <input type="hidden" name="user_id" id="" value="{{ auth()->user()->id }}">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mtb-25">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="title">Title</label>
                                <input type="text" class="serch-input" value="{{ $Company->title }}" placeholder="Title"
                                    name="title">
                                <div class="error-title"></div>
                                <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="email">Email</label>
                            <input type="text" class="serch-input" value="{{ $Company->email }}" placeholder="Email"
                                name="email">
                            <div class="error-email"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="phone">Phone</label>
                            <input type="text" class="serch-input" value="{{ $Company->phone }}" placeholder="Mobile No"
                                name="phone">
                            <div class="error-phone"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="address">Address</label>
                            <input type="text" class="serch-input" value="{{ $Company->address }}" placeholder="Address"
                                name="address">
                            <div class="error-address"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="facebook_url">Facebook Url</label>
                            <input type="text" class="serch-input" value="{{ $Company->facebook_url }}"
                                placeholder="Facebook Url" name="facebook_url">
                            <div class="error-facebook_url"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="instagram_url">Instagram Url</label>
                            <input type="text" class="serch-input" value="{{ $Company->instagram_url }}"
                                placeholder="Instagram Url" name="instagram_url">
                            <div class="error-instagram_url"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="linkedin_url">LinkedIn Url</label>
                            <input type="text" class="serch-input" value="{{ $Company->linkedin_url }}"
                                placeholder="LinkedIn Url" name="linkedin_url">
                            <div class="error-linkedin_url"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="youtube_url">Twitter Url</label>
                            <input type="text" class="serch-input" value="{{ $Company->youtube_url }}"
                                placeholder="Youtube Url" name="youtube_url">
                            <div class="error-youtube_url"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="website">Website Url</label>
                            <input type="text" class="serch-input" value="{{ $Company->website }}"
                                placeholder="Website Url" name="website">
                            <div class="error-website"></div>
                            <div class="clr"></div>
                        </div>
                        {{-- <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="categories">Categories:</label>
                        </div> --}}
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="categories">Categories:</label>
                        <select class="select2-multiple form-control serch-input" name="category_ids[]" multiple="multiple"
                            id="select2Multiple">
                            @foreach ($Categories as $key=>$Category)
                                <option value="{{$Category->id}}" @foreach($Company->relatedCategories as $categories){{$Category->id == $categories->id ? 'selected': ''}}   @endforeach>{{$Category->name}}</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mb-20">
                            <label for="description">Description</label>
                            <textarea id="w3review" class="text-area" rows="4" name="description" rows="4"
                                value="{{ $Company->description }}">{!! $Company->description !!}</textarea>
                            <div class="error-description"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="row col-xs-12 col-sm-12 col-md-12 col-lg-12 pt-50" style="padding-top:50px;">
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20 img-div"
                                style="position:relative;">
                                <button class="close AClass" type="button">
                                    <span>&times;</span>
                                </button>
                                <img src="{{ isset($Company->media[0]->image_url) ? $Company->media[0]->image_url : asset('/media/image-not-found.png') }}"
                                    alt="Logo" data-id="{{ isset($Company->image->id) ? $Company->image->id : '' }}">
                                <div class="clr"></div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mtb-25 upload-div hidden">
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20" style="position:relative;">
                                <label for="img">Upload Picture:</label>
                                <input type="file" name="filename[]" class="form-control file">
                                <div class="clr"></div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right mb-20">
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
        $('.update').on('submit', function(e) {
            e.preventDefault();
            var form = new FormData(this);
            prev_img = $('.img-div').children('img').attr("src");
            file = $('.file')[0].files[0];
            if (file != undefined) {
                form.append('image', file);
            }
            if (prev_img != '') {
                let id = '<?php echo $Company->id; ?>';
                let url = "{{ route('user.company.update', '') }}" + "/" + id;
                ajaxPost(url, form, '.contact-success', '.contact-error');
            } else {
                alert("Please Upload Image")
            }

        });

        $(document).ready(function() {
            onChangeFile($('.img-div'), $('.upload-div'), $('.AClass'));
            $('.select2-multiple').select2({
                placeholder: "Select",
                allowClear: true
            });
        });
    </script>
@endsection
