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
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mtb-25">
                    <input type="hidden" name="user_id" id="" value="{{$Event->user_id}}">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                        <input type="date" class="serch-input" id="calendar" value="{{ old('event_date', \Carbon\Carbon::parse($Event->event_date)->format('Y-m-d')) }}"
                            placeholder="Date" name="event_date" >
                        <div class="clr"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                        <input type="time" class="serch-input"
                            value="{{ old('time',date('H:i', strtotime($Event->time))) }}"
                            placeholder="Time" name="time">
                        <div class="clr"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                        <input type="text" class="serch-input" value="{{ $Event->title }}" placeholder="Title"
                            name="title">
                        <div class="clr"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                        <input type="text" class="serch-input" value="{{ $Event->venue }}" placeholder="Location"
                            name="venue">
                        <div class="clr"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                        <input type="text" class="serch-input" value="{{ $Event->city }}" placeholder="City"
                            name="city">
                        <div class="clr"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                        <input type="text" class="serch-input" value="{{ $Event->price }}" placeholder="Cost"
                            name="price">
                        <div class="clr"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                        <input type="text" class="serch-input" value="{{ $Event->booking_link }}"
                            placeholder="Booking link" name="booking_link">
                        <div class="clr"></div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mb-20">
                        <textarea id="w3review" rows="4" cols="50" class="serch-input" name="description" value="{{$Event->description}}">{!!$Event->description!!}</textarea>
                        <div class="clr"></div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-left">
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
            let id = '<?php echo $Event->id; ?>';
            let url = "{{ route('user.events.update', '') }}" + "/" + id;
            ajaxPost(url, form, '.contact-success', '.contact-error')
        })
        // var date = location.match(/(?:\?|&)date=(\d+\/\d+\/\d+)(&|$)/)[1];
        // $('#calendar').datepicker();
    </script>
@endsection
