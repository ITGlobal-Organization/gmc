@extends('layouts.layoutv2')
@section('content')
    <!--Start Middle-->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding events">
        <div class="middle mtb-60">
            <div class="row">
                <div class="col-xs-8 col-sm-8 col-md-8">
                    <h1 class="text-center mb-25">{{ trans('messages.edit_msg',[
                        'attribute' => trans('lang.employee')
                    ])}}</h1>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4"><button>Back</button></div>
            </div>
            
            <div class="contact-success"></div>
            <div class="contact-error"></div>
            <form action="" class="update" enctype="multipart/form-data">
                <input type="hidden" name="user_id" id="" value="{{ Auth::user()->id }}">
                <input type="hidden" name="is_approved" id="" value="1">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mtb-25">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="first_name">First Name</label>
                            <input type="text" class="serch-input" value="{{$User->first_name}}" placeholder="First Name"
                                name="first_name" >
                            <div class="error-first_name"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="last_name">Name</label>
                            <input type="text" class="serch-input" value="{{$User->last_name}}" placeholder="Last Name"
                                name="last_name">
                            <div class="error-last_name"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="email">Email</label>
                            <input type="text" class="serch-input" value="{{$User->email}}" placeholder="Email" name="email">
                            <div class="error-email"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="phone">Mobile</label>
                            <input type="text" class="serch-input" value="{{$User->phone}}" placeholder="Phone" name="phone">
                            <div class="error-phone"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="tel_no">Tel</label>
                            <input type="text" class="serch-input" value="{{$User->tel_no}}" placeholder="Tel:" name="tel_no">
                            <div class="error-tel_no"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="address">Address</label>
                            <input type="text" class="serch-input" value="{{$User->address}}" placeholder="Address" name="address">
                            <div class="error-address"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="postalcode">Postal Code</label>
                            <input type="text" class="serch-input" value="{{$User->postalcode}}" placeholder="Postal Code"
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
                            <div class="error-password_confirmation"></div>
                            <div class="clr"></div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mtb-25">
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20 img-div" style="position:relative;">
                                <button class="close AClass" type="button">
                                    <span>&times;</span>
                                </button>
                                <img src="{{isset($User->image->image_url) ? $User->image->image_url : asset('/media/image-not-found.png')}}" alt="Profile Picture"
                                    data-id="{{isset($User->image->id) ? $User->image->id : ""}}">
                                <div class="clr"></div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mtb-25 upload-div hidden">
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20" style="position:relative;">
                                <label for="img">Upload Profile Picture:</label>
                                <input type="file" name="filename[]" class="form-control file">
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
        </form>
        <div class="clr"></div>
    </div>
    <div class="clr"></div>

    </div>
    <!--End Middle-->
@endsection
@section('scripts')
    <script>
        // ClassicEditor
        // .create( document.querySelector( '#w3review' ) )
        // .catch( error => {
        //     console.error( error );
        // } );
        $('.update').on('submit', function(e) {
            e.preventDefault();
            var form = new FormData(this);
            prev_img = $('.img-div').children('img').attr("src");
            file = $('.file')[0].files[0];
            if (file != "undefined") {
                form.append('image', file);
            }
            if (prev_img != '') {
                let id = '<?php echo $User->id; ?>';
                let url = "{{ route('user.employees.update', '') }}" + "/" + id;
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
