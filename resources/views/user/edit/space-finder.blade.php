@extends('layouts.layoutv2')
@section('content')
    <!--Start Middle-->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding events">
        <div class="middle mtb-60">

            <h1 class="text-center mb-25">Add New</h1>
            <p class="text-center mb-40">
                Please get in touch with us by telephone or email. Alternatively, you can use the enquiry form below.
            </p>
            <form action="" class="update">
                <input type="hidden" name="user_id" id="" value="{{ $SpaceFinder->user_id }}">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mtb-25">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                        <input type="text" class="serch-input" value="{{ $SpaceFinder->title }}" placeholder="Title"
                            name="title">
                        <div class="clr"></div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mtb-25">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mb-20">
                        <textarea id="w3review" class="serch-input" name="description"  rows="4"  value="{{ $SpaceFinder->description }}">{!! $SpaceFinder->description !!}</textarea>
                        <div class="clr"></div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mtb-25">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20 img-div" style="position:relative;">
                        <button type="submit" class="close AClass">
                            <span>&times;</span>
                         </button>
                         <img src="{{ $SpaceFinder->media[0]->image_url }}" alt="">
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
    <div class="contact-success"></div>
    <div class="contact-error"></div>
    </div>
    <!--End Middle-->
@endsection
@section('scripts')
    <script>
        $('.update').on('submit', function(e) {
            e.preventDefault();
            var form = new FormData(this);
            let id = '<?php echo $SpaceFinder->id; ?>';
            let url = "{{ route('user.space-finders.update', '') }}" + "/" + id;
            ajaxPost(url, form, '.contact-success', '.contact-error')
        })
        $('.close').on('click',function(e){
            e.preventDefault();
            $('.img-div').addClass("hidden");
            $('.upload-div').removeClass('hidden');
        })
        $('.file').on('change',function(){
            let file = $(this).prop('files');
            console.log(file[0])
        })
        // var date = location.match(/(?:\?|&)date=(\d+\/\d+\/\d+)(&|$)/)[1];
        // $('#calendar').datepicker();
    </script>
@endsection
