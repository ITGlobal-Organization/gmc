@extends('layouts.auth')
@section('content')
    <!--Start Middle-->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding events">
        <div class="middle mtb-60">

            <h1 class="text-center mb-25">{{ trans('messages.edit_msg',[
                'attribute' => trans('lang.event')
            ]) }}</h1>

            <div class="contact-success"></div>
            <div class="contact-error"></div>
            <form action="" class="update">
                <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mtb-25">
                    <input type="hidden" name="user_id" id="" value="{{ $Event->user_id }}">

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                        <label for="event_date">Event Date</label>
                        <input type="date" class="serch-input" id="calendar"
                            value="{{ old('event_date', \Carbon\Carbon::parse($Event->event_date)->format('Y-m-d')) }}"
                            placeholder="Event Date" name="event_date">
                            <div class="error-event_date"></div>
                        <div class="clr"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                        <label for="time">Time</label>
                        <input type="time" class="serch-input"
                            value="{{ old('time', date('H:i', strtotime($Event->time))) }}" placeholder="Time"
                            name="time">
                            <div class="error-time"></div>
                        <div class="clr"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                        <label for="title">Title</label>
                        <input type="text" class="serch-input" value="{{ $Event->title }}" placeholder="Title"
                            name="title">
                            <div class="error-title"></div>
                        <div class="clr"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                        <label for="venue">Location</label>
                        <input type="text" class="serch-input" value="{{ $Event->venue }}" placeholder="Location"
                            name="venue">
                            <div class="error-venue"></div>
                        <div class="clr"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                        <label for="city">City</label>
                        <input type="text" class="serch-input" value="{{ $Event->city }}" placeholder="City"
                            name="city">
                            <div class="error-city"></div>
                        <div class="clr"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                        <label for="price">Price</label>
                        <input type="text" class="serch-input" value="{{ $Event->price }}" placeholder="Cost"
                            name="price">
                            <div class="error-price"></div>
                        <div class="clr"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                        <label for="booking_link">Booking Link</label>
                        <input type="text" class="serch-input" value="{{ $Event->booking_link }}"
                            placeholder="Booking link" name="booking_link">
                            <div class="error-booking_link"></div>
                        <div class="clr"></div>
                    </div>
                
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mb-20">
                        <label for="description">Description</label>
                        <textarea id="w3review"  class="text-area" rows="4" name="description"
                            value="{{ $Event->description }}">{!! $Event->description !!}</textarea>
                            <div class="error-description"></div>
                            <div class="clr"></div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mtb-25">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20 img-div" style="position:relative;">
                            <button class="close AClass" type="button">
                                <span>&times;</span>
                            </button>
                            <img src="{{ isset($Event->media[0]->image_url) ? $Event->media[0]->image_url : asset('/media/image-not-found.png') }}" alt="Event Image"
                                data-id="{{ isset($Event->media[0]->id) ?  $Event->media[0]->id : ''}}">
                            <div class="clr"></div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mtb-25 upload-div hidden">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20" style="position:relative;">
                            <label for="img">Upload Event Image:</label>
                            <input type="file" name="filename[]" class="form-control file">
                            <div class="clr"></div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">
                        <input type="submit" class="ct-submit" value="Submit">
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
                let id = '<?php echo $Event->id; ?>';
                let url = "{{ route('user.events.update', '') }}" + "/" + id;
                ajaxPost(url, form, '.contact-success', '.contact-error');
            } else {
                alert("Please Upload Image");
            }
        })

        $(document).ready(function() {
            onChangeFile($('.img-div'), $('.upload-div'), $('.AClass'));
        });
    </script>
@endsection
