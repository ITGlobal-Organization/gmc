@extends('layouts.layoutv2')
@section('content')
    <!--Start Middle-->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding events">
        <div class="middle mtb-60">
            <h1 class="text-center mb-25">{{ trans('messages.edit_msg',[
                'attribute' => trans('lang.news')
            ]) }}</h1>

            <div class="contact-success"></div>
            <div class="contact-error"></div>
            <form action="" class="update" enctype="multipart/form-data">
                <input type="hidden" name="author" id="" value="{{ $Blog->author }}">
                <input type="hidden" name="is_approved" id="" value="{{ $Blog->is_approved }}">
                <input type="hidden" name="slug" id="" value="{{ $Blog->slug }}">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mtb-25">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
                            <label for="title">Title</label>
                            <input type="text" class="serch-input" value="{{ $Blog->title }}" placeholder="Title"
                                name="title">
                                <div class="error-title"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
                            <label for="publisher">Publisher</label>
                            <input type="text" class="serch-input" value="{{ $Blog->publisher }}"
                                placeholder="Publisher" name="publisher">
                                <div class="error-publisher"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
                            <label for="publish_at">Publish at</label>
                            <input type="date" class="serch-input" value="{{ old('publish_at', \Carbon\Carbon::parse($Blog->publish_at)->format('Y-m-d')) }}" placeholder="Publish at"
                                name="publish_at">
                                <div class="error-publish_at"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mb-20">
                            <label for="description">Description</label>
                            <textarea id="w3review" class="text-area" rows="4" name="description" rows="4"
                                value="{{ $Blog->description }}">{!! $Blog->description !!}</textarea>
                            <div class="error-description"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mb-20 img-div" style="position:relative;">
                            <button class="close AClass" type="button">
                                <span>&times;</span>
                            </button>
                            <div class="box-img card-image">
                            <img src="{{ isset($Blog->media[0]->image_url) ? $Blog->media[0]->image_url : asset('/media/image-not-found.png') }}" alt="Blog Image"
                                data-id="{{ isset($Blog->media[0]->id) ? $Blog->media[0]->id : "" }}" class="box-img">
                            </div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20" style="position:relative;">
                            <label for="img">Upload News Image:</label>
                            <input type="file" name="filename[]" class="form-control file">
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-left mb-20">
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
        .create( document.querySelector( '#w3review' ) )
        .catch( error => {
            console.error( error );
        } );
        $('.update').on('submit', function(e) {
            e.preventDefault();
            var form = new FormData(this);
            prev_img = $('.img-div').children('img').attr("src");
            file = $('.file')[0].files[0];
            if (file != "undefined") {
                form.append('image', file);
            }
            if (prev_img != '') {
                let id = '<?php echo $Blog->id; ?>';
                let url = "{{ route('user.news.update', '') }}" + "/" + id;
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
