let show_password = false;
const config = {
    timeout: 3000,
}


function showPassword(event) {


    var password = document.getElementById(event.target.getAttribute('data-password'));

    if (!show_password) {
        password.setAttribute('type', 'text');
        event.target.setAttribute('class', 'fa fa-eye-slash')
        show_password = true;
    } else {
        password.setAttribute('type', 'password');
        event.target.setAttribute('class', 'fa fa-eye')
        show_password = false;
        console.log(show_password);
    }

}

$('.newsletter-form').on('submit', (e) => {
    e.preventDefault();
    var form = new FormData();
    form.append('email', $('.newsletter-email').val());
    ajaxPost(
        '/newsletter',
        form,
        '.newsletter-success','.newsletter-error',
    )
});

$('.contact-form').on('submit', (e) => {
    e.preventDefault();
    var form = new FormData();
    $('.form').find('.form-field').each((index,element) => {
        console.log(element.getAttribute('name'), element.value);
        form.append(element.getAttribute('name'), element.value);

    });
    // form.append('first_name', $('.first_name').val());
    // form.append('last_name', $('.last_name').val());
    // form.append('email', $('.email').val());
    // form.append('subject', $('.subject').val());
    // form.append('message', $('.message').val());

    ajaxPost('/contact-us',form,'.contact-success','.contact-error')
});

$(function () {
    // Mobiscroll Select initialization
    $('#services-select').mobiscroll().select({
        inputElement: document.getElementById('services-select-input')  // More info about inputElement: https://docs.mobiscroll.com/5-23-2/select#opt-inputElement
    });
});

$('.get-a-quote-form').on('submit', (e) => {
    e.preventDefault();
    var _this = this;

    var form = new FormData();
    console.log(form)
    form.append('first_name', $('.first_name').val());
    // form.append('last_name', $('.last_name').val());
    form.append('email', $('.email').val());
    form.append('phone_no', $('.phone_no').val());
    form.append('message', $('.message').val());
    form.append('address', $('.address').val());
    //form.append('postal_code', $('.postalcode').val());
    form.append('file', $('.file')[0].files[0]);
    // Posting a form;
    ajaxPost('/custom-form/get-a-quote',form,'.quote-success','.quote-error')
});

function ajaxPost(url,data,succssContainer,errorContainer) {
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
     });
    $.ajax({
        url: url,
        method: 'POST',
        data:data,
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function() {
            setLoader(true);
        },
        success: function(response) {
            $(succssContainer).addClass("alert alert-success");
            $(succssContainer).text(response.message);
            setTimeout(function() {
                if(response.data.route){
                    window.location.href = response.data.route;
                }else if (response.data.data.route){
                    window.location.href = response.data.data.route;
                }
            },3000)


        },
        error:function(error){
            console.log(error)
            $(errorContainer).text(error.responseJSON.message);
            $(errorContainer).addClass("alert alert-danger");
            if(error.status === 422){
                let errors = error.responseJSON.errors;
                let errorsKeys = Object.keys(error.responseJSON.errors)
                errorsKeys.map((error,index) => {
                    let html = "<ul>";
                    errors[error].map((e) => {
                        html += '<li>'+e+'</li>';
                    })
                    html += '</ul>';
                    $(".error-"+error).html(html);
                    $(".error-"+error).addClass("text-danger");
                });
            }
        },
        complete:function(){
            setLoader(false);
            setTimeout(() => {
                $(succssContainer).text('');
                $(errorContainer).text('');

                $(succssContainer).html('');
                $(errorContainer).html('');

                $(succssContainer).removeClass('alert alert-success');
                $(errorContainer).removeClass('alert alert-danger');
                if($('.errors')){

                    $('.errors').removeClass('text-danger');
                    $('.errors').html('');

                }


            },config.timeout)

        }
    })
}

// Ajax get
function ajaxGet(url,data,dataContainer,responseType='html',callback=null){
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
          'X-Requested-With':!(responseType =='html')?'XMLHttpRequest':'HttpRequest'
        }
     });
    $.ajax({
        url: url,
        method: 'GET',
        data:data,

        beforeSend: function() {
            setLoader(true);
        },
        success: function(response) {
            if(responseType == 'html'){
                $(dataContainer).html(response);
            }else if(responseType == 'json'){
               callback(response);
            }

        },
        error:function(error){
            console.log(error)
            // $(errorContainer).text(error.responseJSON.message);
            // $(errorContainer).addClass("alert alert-danger");

        },
        complete:function(){
            setLoader(false);
        }
    })
}

function setLoader(state){
    if(state){
        $('#loader').removeClass('deactive');
    }else{
        $('#loader').addClass('deactive');
    }

}

// Image not found issue
$(document).on('error','img',function(e){
    e.preventDefault();
    $(this).attr('src',blade_config.baseUrl+'/images/image-not-found.png');
})
window.onload = function(e){

    getCities();
}

// Get all cities of a country
function getCities() {
    let ref = $('.cities');

    var urlParameter = window.location.href.split('?')[1];
    if(urlParameter && urlParameter.length > 0){
        city_parameter = urlParameter.split('&')[0];
        var city = city_parameter.split('=')[1];

    }

    var html = '<option value="">Select City</option>';
    var cities = ['Islamabad','Rawalpindi', 'Gujjar Khan','Mardan','Peshawar','Quetta','Karachi','Multan',
        'Sialkot','Lahore'];

        cities.forEach(element => {
            if(city && city == element){
                html += '<option value="'+element+'" selected>'+element+'</option>';
            }else{
                html += '<option value="'+element+'">'+element+'</option>';
            }

        });
        ref.html(html);



    // $.post('https://countriesnow.space/api/v0.1/countries/cities',{
    //     "country": "pakistan"
    // },(response,status)=>{


    //     ref.html(html);
    // });
}
function changeFile() {
    $('.file').on('change', function(e) {
        let reader = new FileReader();
        reader.onload = (e) => {
            $('.preview-image').removeClass("hidden");
            $('.upload-div').addClass("hidden");
            $('.preview-image').children('img').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
    });
}
