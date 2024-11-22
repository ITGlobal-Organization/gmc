

show_password = false;
config = {
    timeout: 3000,
}


function showPassword(event) {


    var password = document.getElementById(event.getAttribute('data-password'));

    if (!show_password) {
        password.setAttribute('type', 'text');
        event.setAttribute('src', event.getAttribute('data-imageopen'))
        show_password = true;
    } else {
        password.setAttribute('type', 'password');
        event.setAttribute('src', event.getAttribute('data-imageclose'))
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

// $(function () {
//     // Mobiscroll Select initialization
//     $('#services-select').mobiscroll().select({
//         inputElement: document.getElementById('services-select-input')  // More info about inputElement: https://docs.mobiscroll.com/5-23-2/select#opt-inputElement
//     });
// });

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

async function ajaxPost(url,data,succssContainer,errorContainer,loader=true) {
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
     });
    await $.ajax({
        url: url,
        method: 'POST',
        data:data,
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function() {
            if(loader)
                setLoader(true);
        },
        success: function(response) {
            console.log(response)
            $(succssContainer).addClass("alert alert-success");
            $(succssContainer).text(response.message);
            if(response.data.route){
                window.location.href = response.data.route;
            }else if (response.data.data.route){
                window.location.href = response.data.data.route;
            }
            // else if(callback){
            //     callback(response);
            // }

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
async function ajaxGet(url,data,dataContainer,responseType='html',callback=null,loader=true){
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
          'X-Requested-With':!(responseType =='html')?'XMLHttpRequest':'HttpRequest'
        }
     });
    await $.ajax({
        url: url,
        method: 'GET',
        data:data,

        beforeSend: function() {
            if(loader)
                setLoader(true);
        },
        success: function(response) {

            if(responseType == 'html'){

                $(dataContainer).html(response);
            }else if(responseType == 'json'){
                console.log('here');
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
            // Image not found issue
            $('img').on('error',function(e){
                e.preventDefault();
                console.log('here');
                $(this).attr('src',blade_config.baseUrl+'/media/image-not-found.png');
            })
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
$('img').on('error',function(e){
    e.preventDefault();
    console.log('here');
    $(this).attr('src',blade_config.baseUrl+'/media/image-not-found.png');
})

// Phone No Validation

$(document).on("keypress",".phone", function (e) {
    var phoneNumber = $(this).val();
    if (!validatePhoneNumberLength(phoneNumber)) {
        e.preventDefault();
        return false;
    }
});

function validatePhoneNumberLength(phoneNumber) {
    var minDigits = 10;
    var maxDigits = 11;
    var phoneNumberPattern =/^[\d+\-*/()]+$/;
    console.log(phoneNumberPattern.test(phoneNumber))
    if(phoneNumber.length > maxDigits || !phoneNumberPattern.test(phoneNumber))
        return false
    else
        return true
}
function onChangeFile(img_div,upload_div,close_btn) {
    $('.file').on('change', function(e) {
        let reader = new FileReader();
        reader.onload = (e) => {
            img_div.children('img').attr('src', e.target.result);
            img_div.removeClass("hidden");
            upload_div.addClass("hidden");
        }
        reader.readAsDataURL(this.files[0]);
    });
    close_btn.on('click', function(e) {
        e.preventDefault();
        img_div.children('img').attr("src","");
        img_div.addClass("hidden");
        upload_div.removeClass('hidden');
        // let id=$(this).siblings('img').attr("data-id");
        // if(id != ''){
        //     $(this).siblings('img').attr("data-id",'');
        //     let url = "/media/delete/"+id+"";
        //     ajaxDelete(url,id,'','');
        // }
        resetFile();
    });
}
function onChangeLogo(img_div,upload_div,close_btn) {
    $('.logo').on('change', function(e) {
        let reader = new FileReader();
        reader.onload = (e) => {
            console.log("logo")
            console.log("img-div",img_div)
            img_div.children('img').attr('src', e.target.result);
            img_div.removeClass("hidden");
            upload_div.addClass("hidden");
        }
        reader.readAsDataURL(this.files[0]);
    });
    close_btn.on('click', function(e) {
        e.preventDefault();
        img_div.children('img').attr("src","");
        img_div.addClass("hidden");
        upload_div.removeClass('hidden');
        // let id=$(this).siblings('img').attr("data-id");
        // if(id != ''){
        //     $(this).siblings('img').attr("data-id",'');
        //     let url = "/media/delete/"+id+"";
        //     ajaxDelete(url,id,'','');
        // }
        resetFile();
    });
}


function resetFile() {
    const file = document.querySelector('.file');
    var emptyFile = document.createElement('input');
    emptyFile.type = 'file';
    file.files = emptyFile.files;
}

function destroy(url,message = '', confirm_color = '#d32525', deny_color = '#6c757d') {
    swal.fire({
        title: 'Are you sure?',
        text: message,
        icon: 'warning',
        showDenyButton: true,
        confirmButtonText: 'Yes',
        confirmButtonColor: confirm_color,
        denyButtonText: `No`,
        denyButtonColor: deny_color,
    }).then((result) => {
        if (result.isConfirmed) {
            ajaxPost(url, {}, ".success");
        }
    });
}
function ajaxDelete(url,id,succssContainer='',errorContainer='') {
    console.log("asfhb")
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
     });
    $.ajax({
        url: url,
        method: 'DELETE',
        id:id,
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function() {
            setLoader(true);
            console.log(url)
        },
        success: function(response) {
            console.log(response)
            $(succssContainer).addClass("alert alert-success");
            $(succssContainer).text(response.message);
            if(response.data.route){
                window.location.href = response.data.route;
            }else if (response.data.data.route){
                window.location.href = response.data.data.route;
            }

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

function notify(heading,type,description=''){
    let snackbarEl = $('.custom-snackbar');
    let headingEl =  $('.snackbar-heading');
    let descriptionEl = $('.snackbar-description');
    let iconEl = $('.snackbar-icon');
    let classMapper = {
        success:"snackbar-success",
        warning:"snackbar-warning",
        error:"snackbar-error",
        notify:"snackbar-notify"
    }
    headingEl.text(heading);
    snackbarEl.addClass('show');
    snackbarEl.addClass(classMapper[type]);
    iconEl.addClass(classMapper[type]);

    descriptionEl.text(description);
    setTimeout(function(){
        snackbarEl.removeClass('show');
    },config.timeout)
}

function showgalleryImages(galleryFor){
    $('.gallery-link').on('click',function(e){
        e.preventDefault();
        $('.gallery-item').removeClass('active');
        $('#myModal').addClass('show');
        galleryFor = $(this).attr('data-name');
    });
    $('.gallery-img').on('click',function(e){
        e.preventDefault();
        $('.gallery-item').removeClass('active');
        $(this).parent().addClass('active');
        if(galleryFor == "main"){
            main_img_id = $(this).attr('data-id');
        }else if(galleryFor == "thumbnail"){
            thumbnail_img_id = $(this).attr('data-id');
        }

    });
    $('.modal-close').on('click',function(e){
        e.preventDefault();
        $('#myModal').removeClass('show');
    });
    $('.add-image-btn').on('click',function(e){
        e.preventDefault();
        const activeGalleryItem = $('.modal-contents .gallery-item.active');
        const imgSrc = activeGalleryItem.find('img').attr('src');
        if(imgSrc == "" || imgSrc == undefined){
            alert("Please Select Image.")
        }else{
            if(galleryFor == "main"){
                $('.img-div').removeClass('hidden');
                $('.upload-div').addClass("hidden");
                $('.img-div').children('img').attr("src",imgSrc);
            }else if (galleryFor == "thumbnail"){
                $('.thumbnail-img-div').removeClass('hidden');
                $('.upload-thumbnail-div').addClass("hidden");
                $('.thumbnail-img-div').children('img').attr("src",imgSrc);
            }

            $('#myModal').removeClass('show');
        }
    });
}

function onChangeThumbnail(thumbnail_img_div, thumbnail_upload_div, thumbnail_close_btn) {
    $('.thumbnail').on('change', function(e) {
        let reader = new FileReader();
        reader.onload = (e) => {
            thumbnail_img_div.children('img').attr('src', e.target.result);
            thumbnail_img_div.removeClass("hidden");
            thumbnail_upload_div.addClass("hidden");
        }
        reader.readAsDataURL(this.files[0]);
    });
    thumbnail_close_btn.on('click', function(e) {
        e.preventDefault();
        thumbnail_img_div.children('img').attr("src","");
        thumbnail_img_div.addClass("hidden");
        thumbnail_upload_div.removeClass('hidden');
        resetThumbnail();
    });
}

function resetThumbnail() {
    const file = document.querySelector('.thumbnail');
    var emptyFile = document.createElement('input');
    emptyFile.type = 'file';
    file.files = emptyFile.files;
}

function uploadThumbnail(){


    $('.imageInput').on('change',function(e){
        e.preventDefault();
        $('.imagePreview').innerHTML('');
        const files = this.files;
        for (let i = 0; i < files.length; i++) {
            const file = files[i];
            if (file.type.match('image.*')) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    const img = document.createElement('div');
                    img.classList.add('image-preview-item');

                    const closeButton = document.createElement('button');
                    closeButton.classList.add('close-button');
                    closeButton.innerHTML = '&times;';
                    closeButton.addEventListener('click', function() {
                        img.remove(); // Remove the image preview when close button is clicked
                    });

                    img.appendChild(closeButton);

                    const imgElem = document.createElement('img');
                    imgElem.src = event.target.result;
                    img.appendChild(imgElem);

                    imagePreview.appendChild(img);
                }
                reader.readAsDataURL(file);
            }
        }

    })
}
