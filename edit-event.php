<?php include 'includes/header.php'; ?>

<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>tinymce.init({ selector:'.text-editor' });</script>

<div class="app-header">
    <?php include 'includes/app-header.php'; ?>
</div>

<div class="app-body">
    <?php include 'includes/side-bar.php'; ?>

    <div class="app-content">

        <?php include 'includes/config-panel.php'; ?>

        <div class="page-header">
            <div class="row">
                <div class="col-md-6">
                    <div class="title">
                        Edit Event
                    </div>
                    <div class="desc">
                        Edit the event in the system
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <a href="">System</a> / <a href="">Manage Events</a> / <span>Edit Event</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row no-gutters">
            <div class="content-panel col-md-12">
                <div class="content-inner">
                    <div class="content-area">

                        <div class="row">
                            <div class="col-md-12">

                                <div class="content-panel-sub">
                                    <div class="panel-head">
                                        Event Details
                                    </div>
                                </div>

                                <form>
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12 col-xl-10 align-self-start">
                                                    <div class="form-group">
                                                        <label for="etitle">Event Title</label>
                                                        <input type="text" class="form-control" id="etitle" value="Exhibition" placeholder="Event Title">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-lg-12 col-xl-10 mb-3">
                                            <div class="row">
                                                <div class="col-md-4 col-lg-6 col-xl-4">
                                                    <label for="exampleFormControlSelect1">Event Image</label>
                                                    <div class="input-group">
                                                        <img  src="http://54.38.42.53/DigitaleBoxUI/img/event-image.jpg" alt="..." class="img-thumbnail mb-1">
                                                    </div>
                                                </div>

                                                <div class="col-md-8 col-lg-6 col-xl-8 pt-md-4">
                                                    <label for="exampleFormControlSelect1">Upload a New Image</label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" accept="image/jpg,image/jpeg,image/gif,image/png" class="custom-file-input" id="inputGroupFile02">
                                                            <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-feild-info">Minimum width: 200px, Maximum Width: 600px, Maximum size: 500kb</div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="location">Location</label>
                                                <input type="text" class="form-control" id="location" value="BMICH, Colombo 07" placeholder="Location">
                                            </div>
                                            <div class="event-map mb-4">
                                                <div id="event-map"></div>
                                                <script>
                                                    function initMap() {
                                                        // Styles a map in night mode.
                                                        var map = new google.maps.Map(document.getElementById('event-map'), {
                                                            center: {lat: 48.8566, lng: 2.3522},
                                                            zoom: 12,
                                                            styles: [
                                                                {
                                                                    "featureType": "administrative",
                                                                    "elementType": "labels.text.fill",
                                                                    "stylers": [
                                                                        {
                                                                            "color": "#444444"
                                                                        }
                                                                    ]
                                                                },
                                                                {
                                                                    "featureType": "landscape",
                                                                    "elementType": "all",
                                                                    "stylers": [
                                                                        {
                                                                            "color": "#f2f2f2"
                                                                        }
                                                                    ]
                                                                },
                                                                {
                                                                    "featureType": "poi",
                                                                    "elementType": "all",
                                                                    "stylers": [
                                                                        {
                                                                            "visibility": "on"
                                                                        },
                                                                        {
                                                                            "color": "#58d186"
                                                                        },
                                                                        {
                                                                            "saturation": "-24"
                                                                        },
                                                                        {
                                                                            "lightness": "63"
                                                                        }
                                                                    ]
                                                                },
                                                                {
                                                                    "featureType": "poi",
                                                                    "elementType": "labels.text.fill",
                                                                    "stylers": [
                                                                        {
                                                                            "color": "#676767"
                                                                        }
                                                                    ]
                                                                },
                                                                {
                                                                    "featureType": "poi",
                                                                    "elementType": "labels.text.stroke",
                                                                    "stylers": [
                                                                        {
                                                                            "visibility": "off"
                                                                        },
                                                                        {
                                                                            "color": "#979797"
                                                                        }
                                                                    ]
                                                                },
                                                                {
                                                                    "featureType": "poi",
                                                                    "elementType": "labels.icon",
                                                                    "stylers": [
                                                                        {
                                                                            "visibility": "off"
                                                                        },
                                                                        {
                                                                            "color": "#ff0000"
                                                                        }
                                                                    ]
                                                                },
                                                                {
                                                                    "featureType": "road",
                                                                    "elementType": "all",
                                                                    "stylers": [
                                                                        {
                                                                            "saturation": -100
                                                                        },
                                                                        {
                                                                            "lightness": 45
                                                                        }
                                                                    ]
                                                                },
                                                                {
                                                                    "featureType": "road.highway",
                                                                    "elementType": "all",
                                                                    "stylers": [
                                                                        {
                                                                            "visibility": "simplified"
                                                                        }
                                                                    ]
                                                                },
                                                                {
                                                                    "featureType": "road.arterial",
                                                                    "elementType": "labels.icon",
                                                                    "stylers": [
                                                                        {
                                                                            "visibility": "off"
                                                                        }
                                                                    ]
                                                                },
                                                                {
                                                                    "featureType": "transit",
                                                                    "elementType": "all",
                                                                    "stylers": [
                                                                        {
                                                                            "visibility": "off"
                                                                        }
                                                                    ]
                                                                },
                                                                {
                                                                    "featureType": "water",
                                                                    "elementType": "all",
                                                                    "stylers": [
                                                                        {
                                                                            "color": "#46bcec"
                                                                        },
                                                                        {
                                                                            "visibility": "on"
                                                                        }
                                                                    ]
                                                                }
                                                            ]
                                                        });
                                                    }
                                                </script>
                                                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5LULPezUcTTCfzsHIPYHFlHAUOj6seEk&callback=initMap"
                                                        async defer></script>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="from-date">Start Date & Time</label>
                                                <div class="input-group date" id="from-date" data-target-input="nearest">
                                                    <input type="text" class="form-control datetimepicker-input" data-target="#from-date" value="2018-11-15 07:00 AM" placeholder="1990-01-01 03:00"/>
                                                    <div class="input-group-append" data-target="#from-date" data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="to-date">End Date & Time</label>
                                                <div class="input-group date" id="to-date" data-target-input="nearest">
                                                    <input type="text" class="form-control datetimepicker-input" data-target="#to-date" value="2018-11-15 11:00 AM" placeholder="1990-01-01 03:00"/>
                                                    <div class="input-group-append" data-target="#to-date" data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="from-date">Description</label>
                                                <textarea class="form-control text-editor" placeholder="Description">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed congue tellus quam, et ornare nibh euismod eu. Phasellus eget dignissim purus. Vivamus felis ipsum, fermentum a magna eget, scelerisque dictum metus.
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Keywords</label>
                                                <select data-placeholder="Keywords" class="form-control chosen-select" multiple>
                                                    <option>First Name</option>
                                                    <option selected>Last Name</option>
                                                    <option>Email</option>
                                                    <option selected>Contact No</option>
                                                    <option>Gender</option>
                                                    <option selected>Date of birth</option>
                                                    <option>Street Address</option>
                                                </select>
                                                <div class="form-feild-info">Keywords should be separated by commas, Ex: ABC, XYZ</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Advance Keyword</label>
                                                <div class="input-group">
                                                    <select class="custom-select form-control" id="inputGroupSelect04">
                                                        <option selected>- Select -</option>
                                                        <option value="1">One</option>
                                                        <option value="2" selected>Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                    <div class="input-group-append">
                                                        <button class="btn btn-secondary" onclick="window.location='manage-keywords.php';" title="Add Keywords" type="button">Add</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Priority</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>None</option>
                                                    <option>Lower</option>
                                                    <option>Medium</option>
                                                    <option>Higher</option>
                                                    <option>Urgent</option>
                                                </select>
                                                <div class="form-feild-info">Subscriber will receive an email using the selected email template.</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Comments</label>
                                                <textarea class="form-control">Nullam nec ante imperdiet nisi molestie pretium.
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mt-3">
                                                <label for="form-check" class="d-block">RSVP Status</label>
                                                <div class="switch switch-sm">
                                                    <input type="checkbox" class="switch" id="switch-sm">
                                                    <label for="switch-sm">Enable</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-row text-left text-md-right">
                                        <div class="form-group col-md-12">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                            <button type="button" class="btn btn-secondary">Cancel</button>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- Add Modal -->
        <div class="modal fade" id="showCode" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add Form</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>


                    <div class="modal-body">
                        <textarea class="form-control" placeholder="Description">

                        </textarea>

                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary">Copy Code</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php include 'includes/app-footer.php'; ?>

</div>

<?php include 'includes/footer.php'; ?>

<script>
    $(document).ready(function () {
        $('#from-date').datetimepicker({
            format: 'YYYY-MM-DD hh:mm'
        });
        $('#to-date').datetimepicker({
            format: 'YYYY-MM-DD hh:mm'
        });

        $(".chosen-select").chosen();

        $('#switch-sm').change(function(){
           console.log('yes');

            if ($(this).is(':checked')) {
                $('.add-form-payments').show();
            }else{
                $('.add-form-payments').hide();
            }
        });
    });
</script>