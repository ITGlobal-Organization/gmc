@extends('layouts.layoutv2')
@section('content')
    <!--Start Middle-->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
        <div class="middle mtb-60">
            <h1 class="text-center mb-40">Apply to Join </h1>
            <p class="text-center">
                If you would like to join Perthshire Chamber of Commerce, please fill in your details in the form below. We
                will send you an invoice after we receive your submission. Your entry will be published in our directory
                once payment is received. We would love to hear from you.
                <br><br>
                Please have a look at our Benefits from the top menu to see what is included.
                <br><br>
                Our membership fees offer excellent value for money and return on investment with New Starts trading within
                their first year being able to take advantage of an introductory rate of £50 + vat.
            </p>
            <div class="bal-btn"><a href="benifits"></i> Benefits</a></div>
            <!--Start Table listing-->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding margin-tb35">
                <h2 class="text-center mb-40">Annual Subscription</h2>
                <div class="table-div1">
                    <table>
                        <tr>
                            <th class="side1">Category</th>
                            <th>Size of Business</th>
                            <th>Rate</th>
                            <th>VAT</th>
                            <th class="side2">Total inc VAT</th>
                        </tr>
                        <!--Start Listing 1-->
                        <tr>
                            <td class="list10">New Start</td>
                            <td class="list20">Trading within first year</td>
                            <td class="list20">£50.00</td>
                            <td class="list20 side2">£10.00</td>
                            <td class="list20 side2">£60.00</td>
                        </tr>
                        <!--End Listing 1-->
                        <!--Start Listing 2-->
                        <tr>
                            <td class="list10">Band A</td>
                            <td class="list20">1-5 Employees</td>
                            <td class="list20">£160</td>
                            <td class="list20 side2">£32.00</td>
                            <td class="list20 side2">£192.00</td>
                        </tr>
                        <!--End Listing 2-->
                        <!--Start Listing 3-->
                        <tr>
                            <td class="list10">Band B</td>
                            <td class="list20">6-10 Employees</td>
                            <td class="list20">£190</td>
                            <td class="list20 side2">£38.00</td>
                            <td class="list20 side2">£228.00</td>
                        </tr>
                        <!--End Listing 3-->
                        <!--Start Listing 4-->
                        <tr>
                            <td class="list10">Band C</td>
                            <td class="list20">11-25 Employees</td>
                            <td class="list20">£238</td>
                            <td class="list20 side2">£47.60</td>
                            <td class="list20 side2">£285.60</td>
                        </tr>
                        <!--End Listing 4-->
                        <!--Start Listing 5-->
                        <tr>
                            <td class="list10">Band D</td>
                            <td class="list20"> 26-50 Employees</td>
                            <td class="list20">£299</td>
                            <td class="list20 side2">£59.80</td>
                            <td class="list20 side2">£358.80</td>
                        </tr>
                        <!--End Listing 5-->
                        <!--Start Listing 6-->
                        <tr>
                            <td class="list10">Band E</td>
                            <td class="list20">51-100 Employees</td>
                            <td class="list20">£442</td>
                            <td class="list20 side2">£88.40</td>
                            <td class="list20 side2">£530.40</td>
                        </tr>
                        <!--End Listing 6-->
                        <!--Start Listing 7-->
                        <tr>
                            <td class="list10">Band F</td>
                            <td class="list20">101-250 Employees</td>
                            <td class="list20">£552</td>
                            <td class="list20 side2">£110.40</td>
                            <td class="list20 side2">£662.40</td>
                        </tr>
                        <!--End Listing 7-->
                        <!--Start Listing 8-->
                        <tr>
                            <td class="list10">Band G</td>
                            <td class="list20">Over 250 Employees</td>
                            <td class="list20">£605</td>
                            <td class="list20 side2">£121.00</td>
                            <td class="list20 side2">£726.00</td>
                        </tr>
                        <!--End Listing 8-->
                    </table>
                </div>
                <div class="clr"></div>
            </div>
            <!--End Table listing-->
            <!--Strat Foram Area-->
            <form action="" method="POST" action="{{ route('register.post') }}" class="register">
                @csrf
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding mtb-25">
                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 border padding form-none"></div>
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 border join-bg">
                        <h5 class="text-center mb-25">Join GMC Flonix</h5>
                        <div class="success"></div>
                        <div class="error"></div>
                        <input type="hidden" name="is_approved" value="1">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
                                <div>
                                    <label>First Name <span class="red">*</span></label>
                                    <input type="text" class="join-input" value="" placeholder="First Name *"
                                        name="first_name">
                                    <div class="error-first_name"></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
                                <label>Last Name <span class="red">*</span></label>
                                <input type="text" class="join-input" value="" placeholder="Last Name *"
                                    name="last_name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
                                <label>Password<span class="red">*</span></label>
                                <input type="password" class="join-input" value="" placeholder="Password *"
                                    name="password">
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
                                <label>Password Confirmation<span class="red">*</span></label>
                                <input type="password" class="join-input" value=""
                                    placeholder="Password Confirmation *" name="password_confirmation">
                            </div>
                        </div>
                        <!--End Table listing-->
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
                            <label>Company Name <span class="red">*</span></label>
                            <input type="text" class="join-input" value="" placeholder="Company Name *"
                                name="title">
                            <div class="error-company"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
                            <label>Trading As <span class="red">*</span></label>
                            <input type="text" class="join-input" value="" placeholder="Trading As *">
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
                            <label>Address 1<span class="red"> *</span></label>
                            <input type="text" class="join-input" value="" placeholder="Address 1"
                                name="address">
                            <div class="error-address"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
                            <label>Country<span class="red"></span> *</label>
                            <input type="text" class="join-input" value="" placeholder="Country">
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
                            <label>Postcode<span class="red"> *</span></label>
                            <input type="text" class="join-input" value="" placeholder="Postcode"
                                name="postalcode">
                            <div class="error-postalcode"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
                            <label>Email Address<span class="red"> *</span></label>
                            <input type="text" class="join-input" value="" placeholder="Email Address"
                                name="email">
                            <div class="error-email"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
                            <label>Telephone No<span class="red"> *</span></label>
                            <input type="text" class="join-input" value="" placeholder="Telephone No"
                                name="tel_no">
                            <div class="error-tel_no"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
                            <label>Mobile Number<span class="red"> *</span></label>
                            <input type="text" class="join-input" value="" placeholder="Mobile Number"
                                name="phone">
                            <div class="error-phone"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12 border mb-20">
                            <div>
                                <label>Are you happy for PCC to promote your business?<span class="red">
                                        *</span></label>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20 padding">
                                <input type="radio" class="radio-input">
                                <span class="font-12">Yes. If so, please provide the following URLs (if available):</span>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20 padding">
                                <input type="radio" class="radio-input">
                                <span class="font-12">No</span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
                            <label>Website Url<span class="red"> *</span></label>
                            <input type="text" class="join-input" value="" placeholder="Website Url"
                                name="web_url">
                            <div class="error-web_url"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
                            <label for="categories">Categories:</label>
                            <select class="select2-multiple form-control serch-input" name="category_ids[]"
                                multiple="multiple" id="select2Multiple">
                                @foreach ($Categories as $key => $Category)
                                    <option value="{{ $Category->id }}">{{ $Category->name }}</option>
                                @endforeach
                            </select>
                            <div class="error-category_ids[]"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
                            <label>Facebiook page (n/a if none)<span class="red"> *</span></label>
                            <input type="text" class="join-input" value="" placeholder="Facebiook page"
                                name="facebook_url">
                            <div class="error-facebook_url"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
                            <label>Instagram page (n/a if none)<span class="red"> *</span></label>
                            <input type="text" class="join-input" value="" placeholder="Instagram page"
                                name="instagram_url">
                            <div class="error-instagram_url"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20">
                            <label>Your LinkedIn page (n/a if none)<span class="red"> *</span></label>
                            <input type="text" class="join-input" value="" placeholder="LinkedIn page"
                                name="linkedin_url">
                            <div class="error-linkedin_url"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12 border mb-20">
                            <div>
                                <label>Mentoring<span class="red"> *</span></label>
                                <div class="font-12 mb-20">Are you interested in receiving free mentoring for your
                                    business?
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20 padding">
                                <input type="radio" class="radio-input">
                                Yes
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20 padding">
                                <input type="radio" class="radio-input">
                                No
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12 border mb-20">
                            <div>
                                <label>Being a Mentor<span class="red"> *</span></label>
                                <div class="font-12 mb-20">Are you interested in being a mentor?</div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20 padding">
                                <input type="radio" class="radio-input">
                                Yes
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20 padding">
                                <input type="radio" class="radio-input">
                                No
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12 border mb-20">
                            <div>
                                <label>Exporting<span class="red"> *</span></label>
                                <div class="font-12 mb-20">Are you interested in exporting?</div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20 padding">
                                <input type="radio" class="radio-input">
                                Yes
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20 padding">
                                <input type="radio" class="radio-input">
                                No
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12 border mb-20">
                            <div>
                                <label>The Chamber Plan: Healthcare from Westfield Health<span class="red">
                                        *</span></label>
                                <div class="font-12 mb-20">Would you like more information about the Chamber Plan from
                                    Westfield Health? (This service can be used to recover costs incurred from accessing
                                    private
                                    healthcare including consultations, scans and dental work among many others).</div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20 padding">
                                <input type="radio" class="radio-input">
                                Yes
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 border mb-20 padding">
                                <input type="radio" class="radio-input">
                                No
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mb-20">
                            <label>Please let us know your top 3 concerns/priorities as a business joining Perthshire
                                Chamber of
                                Commerce:<span class="red"> *</span></label>
                            <textarea class="join-comment"></textarea>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mb-20">
                            <label>Please tell us about your business, and what makes it different, in 100 words:<span
                                    class="red"> *</span></label>
                            <textarea class="join-comment"></textarea>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center mtb-40">
                            <input type="submit" class="ct-submit" value="Submit">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 border padding form-none"></div>
                </div>
            </form>
        </div>
    </div>

    {{-- <div class="bal-btn"><a href="https://zfrmz.eu/WE4879RxJDaqMSUINzn8" target="_blank"></i> Join Now</a></div>  --}}


    <div class="clr"></div>
    {{-- </div> --}}
    <div class="clr"></div>
    </div>
    <!--End Middle-->
@endsection
@section('scripts')
    <script>
        $('.select2-multiple').select2({
            placeholder: "Select",
            allowClear: true
        });
        $('.register').submit(function(e) {
            e.preventDefault();
            alert("form")
            let formData = new FormData(this);
            let url = "{{ route('register.post') }}";
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: url,
                method: 'POST',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    setLoader(true);
                },
                success: function(response) {
                    if (response.status) {
                        window.location.href = "/";
                    } else {
                        $('.error').addClass("alert alert-danger");
                        $('.error').text(response.message);
                    }
                    $('.success').addClass("alert alert-success");
                    $('.success').text(response.message);
                    // setTimeout(function() {
                    //     if (response.data.route) {
                    //         window.location.href = response.data.route;
                    //     }
                    // }, 3000)


                },
                error: function(error) {
                    console.log((error))
                    $('.error').text(error.responseJSON.message);
                    $('.error').addClass("alert alert-danger");
                    if (error.status === 422) {
                        let errors = error.responseJSON.errors;
                        let errorsKeys = Object.keys(error.responseJSON.errors)
                        errorsKeys.map((error, index) => {
                            let html = "<ul>";
                            errors[error].map((e) => {
                                html += '<li>' + e + '</li>';
                            })
                            html += '</ul>';
                            $(".error-" + error).html(html);
                            $(".error-" + error).addClass("text-danger");
                        });
                    }
                },
                complete: function() {
                    setLoader(false);
                    setTimeout(() => {
                        $(".success").text('');
                        $(".error").text('');

                        $(".success").html('');
                        $(".error").html('');

                        $(".success").removeClass('alert alert-success');
                        $(".error").removeClass('alert alert-danger');
                        if ($('.errors')) {

                            $('.errors').removeClass('text-danger');
                            $('.errors').html('');

                        }


                    }, config.timeout)

                }
            })
            // ajaxPost(url,formData,'.contact-success','.contact-error');
        });
    </script>
@endsection
