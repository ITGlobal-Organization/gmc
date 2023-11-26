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
            <form action="#" class="store">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mtb-25">
                    <input type="hidden" name="user_id" id="" value="{{Auth::user()->id}}">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                        <label for="event_date">Event Date</label>
                        <input type="date" class="serch-input" id="calendar"
                            value=""
                            placeholder="Event Date" name="event_date">
                        <div class="clr"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                        <label for="time">Time</label>
                        <input type="time" class="serch-input"
                            value="" placeholder="Time"
                            name="time">
                        <div class="clr"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                        <label for="title">Title</label>
                        <input type="text" class="serch-input" value="" placeholder="Title"
                            name="title">
                        <div class="clr"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                        <label for="venue">Location</label>
                        <input type="text" class="serch-input" value="" placeholder="Location"
                            name="venue">
                        <div class="clr"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                        <label for="city">City</label>
                        <input type="text" class="serch-input" value="" placeholder="City"
                            name="city">
                        <div class="clr"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                        <label for="price">City</label>
                        <input type="text" class="serch-input" value="" placeholder="Cost"
                            name="price">
                        <div class="clr"></div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                        <label for="booking_link">Booking Link</label>
                        <input type="text" class="serch-input" value=""
                            placeholder="Booking link" name="booking_link">
                        <div class="clr"></div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mb-20">
                        <label for="description">Description</label>
                        <textarea id="w3review" class="text-area" rows="4" name="description"
                            value="" ></textarea>
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

    </div>
    <!--End Middle-->
@endsection
@section('scripts')
    <script>
        $('.store').on('submit', function(e) {
            e.preventDefault();
            var form = new FormData(this);
            let url = "{{ route('user.events.store') }}";
            ajaxPost(url, form, '.contact-success', '.contact-error')
        })

        // var date = location.match(/(?:\?|&)date=(\d+\/\d+\/\d+)(&|$)/)[1];
        // $('#calendar').datepicker();
    </script>
@endsection
