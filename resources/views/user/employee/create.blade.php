@extends('layouts.auth')
@section('content')
    <!--Start Middle-->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding events">
        <div class="middle mtb-60">
            <h1 class="text-center mb-25">
                {{ trans('messages.add_new_msg', [
                    'attribute' => trans('lang.spacefinder'),
                ]) }}
            </h1>
            <div class="contact-success"></div>
            <div class="contact-error"></div>
            <form action="" class="store" enctype="multipart/form-data">
                <input type="hidden" name="user_id" id="" value="{{ Auth::user()->id }}">
                <input type="hidden" name="is_approved" id="" value="1">
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
                            <label for="last_name">Name</label>
                            <input type="text" class="serch-input" value="" placeholder="Last Name"
                                name="last_name">
                            <div class="error-last_name"></div>
                            <div class="clr"></div>
                        </div>
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
                            <label for="tel_no">Tel:</label>
                            <input type="text" class="serch-input" value="" placeholder="Tel:" name="tel_no">
                            <div class="error-tel_no"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="address">Address</label>
                            <input type="text" class="serch-input" value="" placeholder="Address" name="address">
                            <div class="error-address"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="postalcode">Postal Code</label>
                            <input type="text" class="serch-input" value="" placeholder="Postal Code"
                                name="postalcode">
                            <div class="error-postalcode"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="password">Password</label>
                            <input type="password" class="serch-input" value="" placeholder="Password"
                                name="password">
                            <div class="error-password"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" class="serch-input" value="" placeholder="Password"
                                name="password_confirmation">
                            <div class="error-password"></div>
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
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mtb-25 upload-div">
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20" style="position:relative;">
                                <input type="file" name="filename[]" class="form-control file"
                                    accept=".png,.jpeg,.jpg">
                                <div class="clr"></div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right mb-20">
                            <input type="submit" class="ct-submit" value="Submit">
                        </div>
                    </div>
                </div>
            </form>
        </div>

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
            prev_img = $('.img-div').children('img').attr("src");
            file = $('.file')[0].files[0];
            // console.log(file)
            if (file != "undefined") {
                form.append('image', file);
            }
            if (prev_img != '') {
                let id = '';
                let url = "{{ route('user.employees.store') }}";
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
