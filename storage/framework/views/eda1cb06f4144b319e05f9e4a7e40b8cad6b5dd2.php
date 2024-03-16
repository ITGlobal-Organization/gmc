<?php $__env->startSection('content'); ?>
    <!--Start Middle-->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding events">
        <div class="middle mtb-60">
            <h1 class="text-center mb-25"><?php echo e(trans('messages.edit_msg',[
                    'attribute' => trans('lang.profile')
                ])); ?></h1>
            <div class="contact-success"></div>
            <div class="contact-error"></div>
            <form action="" class="update" enctype="multipart/form-data">
                <input type="hidden" name="is_approved" id="" value="<?php echo e($User->is_approved); ?>">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border mtb-25">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="first_name">First Name</label>
                            <input type="text" class="serch-input" value="<?php echo e($User->first_name); ?>"
                                placeholder="First Name" name="first_name">
                            <div class="error-first_name"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="serch-input" value="<?php echo e($User->first_name); ?>"
                                placeholder="Last Name" name="last_name">
                            <div class="error-last_name"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="email">Email</label>
                            <input type="text" class="serch-input" value="<?php echo e($User->email); ?>" placeholder="Email"
                                name="email">
                            <div class="error-email"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="phone">Phone</label>
                            <input type="text" class="serch-input" value="<?php echo e($User->phone); ?>" placeholder="Mobile No"
                                name="phone">
                            <div class="error-phone"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="address">Address</label>
                            <input type="text" class="serch-input" value="<?php echo e($User->address); ?>" placeholder="Address"
                                name="address">
                            <div class="error-address"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="postalcode">Postal Code</label>
                            <input type="text" class="serch-input" value="<?php echo e($User->postalcode); ?>" placeholder="Postal Code"
                                name="postalcode">
                            <div class="error-postalcode"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="facebook_url">Facebook Url</label>
                            <input type="text" class="serch-input" value="<?php echo e($User->facebook_url); ?>"
                                placeholder="Facebook Url" name="facebook_url">
                            <div class="error-facebook_url"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="instagram_url">Instagram Url</label>
                            <input type="text" class="serch-input" value="<?php echo e($User->instagram_url); ?>"
                                placeholder="Instagram Url" name="instagram_url">
                            <div class="error-instagram_url"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="linkedin_url">LinkedIn Url</label>
                            <input type="text" class="serch-input" value="<?php echo e($User->linkedin_url); ?>"
                                placeholder="LinkedIn Url" name="linkedin_url">
                            <div class="error-linkedin_url"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="youtube_url">Twitter Url</label>
                            <input type="text" class="serch-input" value="<?php echo e($User->youtube_url); ?>"
                                placeholder="Twitter Url" name="youtube_url">
                            <div class="error-youtube_url"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="website">Website Url</label>
                            <input type="text" class="serch-input" value="<?php echo e($User->website); ?>"
                                placeholder="Website Url" name="website">
                            <div class="error-website"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="tel_no">Tel:</label>
                            <input type="text" class="serch-input" value="<?php echo e($User->tel_no); ?>" placeholder="Tel:"
                                name="tel_no">
                            <div class="error-tel_no"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20">
                            <label for="company">Company</label>
                            <input type="text" class="serch-input" value="<?php echo e($User->company); ?>" placeholder="Company"
                                name="company">
                            <div class="error-company"></div>
                            <div class="clr"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 border mb-20 img-div" style="position:relative;">
                            <button class="close AClass" type="button">
                                <span>&times;</span>
                            </button>
                            <img src="<?php echo e(isset($User->image->image_url) ? $User->image->image_url : asset('/media/image-not-found.png')); ?>"
                                alt="Profile Image" data-id="<?php echo e(isset($User->image->id) ? $User->image->id : ''); ?>">
                            <div class="clr"></div>
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
        </form>
        <div class="clr"></div>
    </div>
    <div class="clr"></div>

    </div>
    <!--End Middle-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script>
        ClassicEditor
            .create(document.querySelector('#w3review'))
            .catch(error => {
                console.error(error);
            });
        $('.update').on('submit', function(e) {
            e.preventDefault();
            var form = new FormData(this);
            prev_img = $('.img-div').children('img').attr("src");
            file = $('.file')[0].files[0];
            if (file != undefined) {
                form.append('image', file);
            }
            if (prev_img != '') {
                let id = '<?php echo $User->id; ?>';
                let url = "<?php echo e(route('user.profile.update', '')); ?>" + "/" + id;
                ajaxPost(url, form, '.contact-success', '.contact-error');
            } else {
                alert("Please Upload Image")
            }

        });

        $(document).ready(function() {
            onChangeFile($('.img-div'), $('.upload-div'), $('.AClass'));
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layoutv2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/staging/resources/views/user/profile/edit.blade.php ENDPATH**/ ?>