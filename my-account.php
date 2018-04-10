<?php include 'includes/header.php'; ?>

<div class="app-header">
    <?php include 'includes/app-header.php'; ?>
</div>

<link rel="stylesheet" href="css/cropper.css">
<link rel="stylesheet" href="css/cropper-main.css">
<!--Plugin source
https://github.com/fengyuanchen/jquery-cropper-->

<div class="app-body">
    <?php include 'includes/side-bar.php'; ?>

    <div class="app-content">

        <?php include 'includes/config-panel.php'; ?>

        <div class="page-header">
            <div class="row">
                <div class="col-md-6">
                    <div class="title">
                        My Account
                    </div>
                    <div class="desc">
                        Change your account settings
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <span>My Account</span>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="row no-gutters">
                <div class="content-panel col-md-12">
                    <div class="content-inner">
                        <!--<div class="panel-head">Person Details</div>-->
                        <div class="content-area pt-5">

                            <form>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-row">
                                            <div class="form-group profile-image text-center">
                                                <div class="account-picture">
                                                    <img src="img/main-profile-pic.jpg" alt="John Doe" >
                                                </div>
                                                <a class="btn btn-primary" data-toggle="modal" data-target="#addImage">Add/Change Image</a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="fname">First Name</label>
                                                <input type="text" class="form-control" id="fname" placeholder="First Name" value="John">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="lname">Last Name</label>
                                                <input type="text" class="form-control" id="lname" placeholder="Last Name" value="Doe">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="email">Email Address</label>
                                                <input type="email" class="form-control is-invalid" id="email" placeholder="abc@company.com" value="johndoe@gmail.com">
                                                <div class="invalid-feedback">Error Message</div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="mobile">Mobile Number</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/lang-eng.png"></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#"><img src="img/lang-fra.png"> France</a>
                                                            <a class="dropdown-item" href="#"><img src="img/lang-ita.png"> Italy</a>
                                                            <a class="dropdown-item" href="#"><img src="img/lang-por.png"> Portugal</a>
                                                            <a class="dropdown-item" href="#"><img src="img/lang-rus.png"> Russia</a>
                                                        </div>
                                                    </div>
                                                    <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="+33 000 000 0000" value="+3978789789">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="address">Street Address</label>
                                                <input type="text" class="form-control" id="address" placeholder="ex: 27 Avenue Pasteur" value="27 Avenue Pasteur">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="zipcode">Zip Code</label>
                                                <input type="text" class="form-control" id="zipcode" placeholder="ex: 14390" value="8768">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="gender">Gender</label>
                                                <select id="gender" class="form-control">
                                                    <option>- Select -</option>
                                                    <option selected>Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="category">Country</label>
                                                <select id="category" class="form-control">
                                                    <option>- Select -</option>
                                                    <option selected>France</option>
                                                    <option>United States</option>
                                                    <option>Italy</option>
                                                    <option>United Kingdom</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="city">City</label>
                                                <input type="text" class="form-control" id="city" placeholder="ex: Cabourg" value="Paris">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="address">Date of Birth</label>
                                                <div class="input-group date" id="dob1" data-target-input="nearest">
                                                    <input type="text" class="form-control datetimepicker-input" data-target="#dob1" placeholder="1990-01-01" value="1991-05-04"/>
                                                    <div class="input-group-append" data-target="#dob1" data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-left text-md-right">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>


                            </form>



                            <!-- Add Modal -->
                            <div class="modal fade" id="addImage" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Add/Change Profile Image</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>


                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-12 mb-3">
                                                            <h6>Current background image</h6>
                                                            <img class="img-thumbnail" width="200" src="img/main-profile-pic.jpg">
                                                        </div>
                                                        <div class="col-md-12 mb-3">
                                                            <!-- <h3>Demo:</h3> -->
                                                            <label class="btn btn-primary btn-upload" for="inputImage">
                                                                <input type="file" class="sr-only" id="inputImage" name="file" accept=".jpg,.jpeg,.png">
                                                                <span class="docs-tooltip" data-animation="false">
                                                                    <i class="fa fa-upload"></i> Upload Image
                                                                </span>
                                                            </label>
                                                            <div class="form-feild-info">Image Formats - *.jpg, *.jpeg, *.png. Minimum size 200px X 200px</div>

                                                            <div class="img-container mt-3">
                                                                <img id="uploadedImage" class="uploadedImage" src="img/" alt="Upload Your Image">
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-8 docs-buttons mb-3">
                                                            <!-- <h3>Toolbar:</h3> -->

                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-primary" data-method="zoom" data-toggle="tooltip" data-option="0.1" title="Zoom In">
                                                                    <span class="docs-tooltip" data-animation="false" title="$().cropper(&quot;zoom&quot;, 0.1)">
                                                                      <span class="fa fa-search-plus"></span>
                                                                    </span>
                                                                </button>
                                                            </div>

                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-primary" data-method="zoom" data-toggle="tooltip" data-option="-0.1" title="Zoom Out">
                                                                    <span class="docs-tooltip" data-animation="false" title="$().cropper(&quot;zoom&quot;, -0.1)">
                                                                      <span class="fa fa-search-minus"></span>
                                                                    </span>
                                                                </button>
                                                            </div>


                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-primary" data-method="rotate" data-toggle="tooltip" data-option="-45" title="Rotate Left">
                                                                    <span class="docs-tooltip" data-animation="false" title="$().cropper(&quot;rotate&quot;, -45)">
                                                                      <span class="fa fa-rotate-left"></span>
                                                                    </span>
                                                                </button>
                                                            </div>

                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-primary" data-method="rotate" data-toggle="tooltip" data-option="45" title="Rotate Right">
                                                                    <span class="docs-tooltip" data-animation="false" title="$().cropper(&quot;rotate&quot;, 45)">
                                                                      <span class="fa fa-rotate-right"></span>
                                                                    </span>
                                                                </button>
                                                            </div>

                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-primary" data-method="scaleX" data-toggle="tooltip" data-option="-1" title="Flip Horizontal">
                                                                    <span class="docs-tooltip" data-animation="false" title="$().cropper(&quot;scaleX&quot;, -1)">
                                                                      <span class="fa fa-arrows-h"></span>
                                                                    </span>
                                                                </button>
                                                            </div>

                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-primary" data-method="scaleY" data-toggle="tooltip" data-option="-1" title="Flip Vertical">
                                                                    <span class="docs-tooltip" data-animation="false" title="$().cropper(&quot;scaleY&quot;, -1)">
                                                                      <span class="fa fa-arrows-v"></span>
                                                                    </span>
                                                                </button>
                                                            </div>


                                                            <!-- Show the cropped image in modal -->
                                                            <div class="modal fade docs-cropped" id="getCroppedCanvasModal" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="getCroppedCanvasTitle">Cropped</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body"></div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                            <a class="btn btn-primary" id="download" href="javascript:void(0);" download="cropped.jpg">Download</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- /.modal -->

                                                        </div><!-- /.docs-buttons -->

                                                        <div class="col-md-4 text-left text-md-right docs-buttons mb-4">
                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-primary" data-method="crop" data-toggle="tooltip" title="Crop">
                                                                    <span class="docs-tooltip" data-animation="false" title="$().cropper(&quot;crop&quot;)">
                                                                      <span class="fa fa-check"></span>
                                                                    </span>
                                                                </button>
                                                            </div>

                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-primary" data-method="reset" data-toggle="tooltip" title="Reset">
                                                                    <span class="docs-tooltip" data-animation="false" title="$().cropper(&quot;reset&quot;)">
                                                                      <span class="fa fa-refresh"></span>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>



        <?php include 'includes/app-footer.php'; ?>
    </div>

</div>

<?php include 'includes/footer.php'; ?>

<script src="js/cropper.js"></script>
<script src="js/jquery-cropper.js"></script>

<script>
    $(document).ready(function () {
        $('#dob1').datetimepicker({
            format: 'YYYY-MM-DD'
        });

    });

    $(function () {

        'use strict';

        var console = window.console || { log: function () {} };
        var URL = window.URL || window.webkitURL;
        var $image = $('#uploadedImage');
        var $download = $('#download');
        var $dataX = $('#dataX');
        var $dataY = $('#dataY');
        var $dataHeight = $('#dataHeight');
        var $dataWidth = $('#dataWidth');
        var $dataRotate = $('#dataRotate');
        var $dataScaleX = $('#dataScaleX');
        var $dataScaleY = $('#dataScaleY');
        var options = {
            aspectRatio: 1 / 1,
            preview: '.img-preview',
            crop: function (e) {
                $dataX.val(Math.round(e.detail.x));
                $dataY.val(Math.round(e.detail.y));
                $dataHeight.val(Math.round(e.detail.height));
                $dataWidth.val(Math.round(e.detail.width));
                $dataRotate.val(e.detail.rotate);
                $dataScaleX.val(e.detail.scaleX);
                $dataScaleY.val(e.detail.scaleY);
            }
        };
        var originalImageURL = $image.attr('src');
        var uploadedImageName = 'cropped.jpg';
        var uploadedImageType = 'image/jpeg';
        var uploadedImageURL;


        // Tooltip
        $('[data-toggle="tooltip"]').tooltip();


        // Cropper
        $image.on({
            ready: function (e) {
                console.log(e.type);
            },
            cropstart: function (e) {
                console.log(e.type, e.detail.action);
            },
            cropmove: function (e) {
                console.log(e.type, e.detail.action);
            },
            cropend: function (e) {
                console.log(e.type, e.detail.action);
            },
            crop: function (e) {
                console.log(e.type);
            },
            zoom: function (e) {
                console.log(e.type, e.detail.ratio);
            }
        }).cropper(options);


        // Buttons
        if (!$.isFunction(document.createElement('canvas').getContext)) {
            $('button[data-method="getCroppedCanvas"]').prop('disabled', true);
        }

        if (typeof document.createElement('cropper').style.transition === 'undefined') {
            $('button[data-method="rotate"]').prop('disabled', true);
            $('button[data-method="scale"]').prop('disabled', true);
        }


        // Download
        if (typeof $download[0].download === 'undefined') {
            $download.addClass('disabled');
        }


        // Options
        $('.docs-toggles').on('change', 'input', function () {
            var $this = $(this);
            var name = $this.attr('name');
            var type = $this.prop('type');
            var cropBoxData;
            var canvasData;

            if (!$image.data('cropper')) {
                return;
            }

            if (type === 'checkbox') {
                options[name] = $this.prop('checked');
                cropBoxData = $image.cropper('getCropBoxData');
                canvasData = $image.cropper('getCanvasData');

                options.ready = function () {
                    $image.cropper('setCropBoxData', cropBoxData);
                    $image.cropper('setCanvasData', canvasData);
                };
            } else if (type === 'radio') {
                options[name] = $this.val();
            }

            $image.cropper('destroy').cropper(options);
        });


        // Methods
        $('.docs-buttons').on('click', '[data-method]', function () {
            var $this = $(this);
            var data = $this.data();
            var cropper = $image.data('cropper');
            var cropped;
            var $target;
            var result;

            if ($this.prop('disabled') || $this.hasClass('disabled')) {
                return;
            }

            if (cropper && data.method) {
                data = $.extend({}, data); // Clone a new one

                if (typeof data.target !== 'undefined') {
                    $target = $(data.target);

                    if (typeof data.option === 'undefined') {
                        try {
                            data.option = JSON.parse($target.val());
                        } catch (e) {
                            console.log(e.message);
                        }
                    }
                }

                cropped = cropper.cropped;

                switch (data.method) {
                    case 'rotate':
                        if (cropped && options.viewMode > 0) {
                            $image.cropper('clear');
                        }

                        break;

                    case 'getCroppedCanvas':
                        if (uploadedImageType === 'image/jpeg') {
                            if (!data.option) {
                                data.option = {};
                            }

                            data.option.fillColor = '#fff';
                        }

                        break;
                }

                result = $image.cropper(data.method, data.option, data.secondOption);

                switch (data.method) {
                    case 'rotate':
                        if (cropped && options.viewMode > 0) {
                            $image.cropper('crop');
                        }

                        break;

                    case 'scaleX':
                    case 'scaleY':
                        $(this).data('option', -data.option);
                        break;

                    case 'getCroppedCanvas':
                        if (result) {
                            // Bootstrap's Modal
                            $('#getCroppedCanvasModal').modal().find('.modal-body').html(result);

                            if (!$download.hasClass('disabled')) {
                                download.download = uploadedImageName;
                                $download.attr('href', result.toDataURL(uploadedImageType));
                            }
                        }

                        break;

                    case 'destroy':
                        if (uploadedImageURL) {
                            URL.revokeObjectURL(uploadedImageURL);
                            uploadedImageURL = '';
                            $image.attr('src', originalImageURL);
                        }

                        break;
                }

                if ($.isPlainObject(result) && $target) {
                    try {
                        $target.val(JSON.stringify(result));
                    } catch (e) {
                        console.log(e.message);
                    }
                }

            }
        });


        // Keyboard
        $(document.body).on('keydown', function (e) {

            if (!$image.data('cropper') || this.scrollTop > 300) {
                return;
            }

            switch (e.which) {
                case 37:
                    e.preventDefault();
                    $image.cropper('move', -1, 0);
                    break;

                case 38:
                    e.preventDefault();
                    $image.cropper('move', 0, -1);
                    break;

                case 39:
                    e.preventDefault();
                    $image.cropper('move', 1, 0);
                    break;

                case 40:
                    e.preventDefault();
                    $image.cropper('move', 0, 1);
                    break;
            }

        });


        // Import image
        var $inputImage = $('#inputImage');

        if (URL) {
            $inputImage.change(function () {
                var files = this.files;
                var file;

                if (!$image.data('cropper')) {
                    return;
                }

                if (files && files.length) {
                    file = files[0];

                    if (/^image\/\w+$/.test(file.type)) {
                        uploadedImageName = file.name;
                        uploadedImageType = file.type;

                        if (uploadedImageURL) {
                            URL.revokeObjectURL(uploadedImageURL);
                        }

                        uploadedImageURL = URL.createObjectURL(file);
                        $image.cropper('destroy').attr('src', uploadedImageURL).cropper(options);
                        $inputImage.val('');
                    } else {
                        window.alert('Please choose an image file.');
                    }
                }
            });
        } else {
            $inputImage.prop('disabled', true).parent().addClass('disabled');
        }

    });

</script>