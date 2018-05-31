<?php include 'includes/header.php'; ?>

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
                        View Event
                    </div>
                    <div class="desc">
                        Event details
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <a href="">People</a> / <a href="">Manage Events</a> / <span>View Event</span>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="row no-gutters">

                <div class="content-panel col-md-12">

                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="">Attend (3)</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Not Attend (0)</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Invited (0)</a>
                        </li>
                    </ul>
                    <div class="content-inner">
                        <div class="content-area">

                            <div class="form-row mb-2">
                                <div class="form-group col-md-12">
                                    <button type="" class="btn btn-primary" data-toggle="modal" data-target="#showEvent">Show Event</button>
                                </div>
                            </div>

                            <div class="content-panel-sub">
                                <div class="panel-head">
                                    Event Members
                                </div>
                            </div>

                            <?php include 'includes/grid.php'; ?>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Event Modal -->
        <div class="modal fade" id="showEvent" tabindex="-1" role="dialog" aria-labelledby="guideVideo" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Event Details</h5>
                        <button type="button" id="guide-video-close" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="event-details">
                            <div class="event-title mt-3 mb-1">Event Title Goes Here</div>
                            <div class="event-time mb-4">2018-07-08 | 18:45</div>
                            <img class="event-image" src="http://54.38.42.53/DigitaleBoxUI/img/event-image.jpg">

                            <div class="event-description mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed congue tellus quam, et ornare nibh euismod eu. Phasellus eget dignissim purus. Vivamus felis ipsum, fermentum a magna eget, scelerisque dictum metus.</div>

                            <div class="row mt-4 mb-3">
                                <div class="col-md-12">
                                    <div class="event-map form-group">
                                        <label>Event Location</label>
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
                            </div>

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

        // Hide Merge Accounts modal
        $('.hide-merge').click(function () {
            $('#viewDetails').modal('hide')
        });

        // Show Merge Accounts modal
        $('.show-merge').click(function () {
            $('#viewDetails').modal('show')
        });

        // Show Merge Conflicts modal
        $('.show-conflicts').click(function () {
            $('#conflicts').modal('show')
        });


        $('#select-all').on('ifToggled', function() {
            if(this.checked){
                $('.similar-check').iCheck('check');
            }else{
                $('.similar-check').iCheck('uncheck');
            }
        });

        $('.similar-check').on('ifToggled', function() {
            var count = $('.similar-check').length;
            var countChkd = $('.similar-check:checked').length;
            //alert($('.similar-check:checked').length);
            if(countChkd > 0){
                $('#auto-merge').removeClass('disabled');
            }else{
                $('#auto-merge').addClass('disabled');
            }

            /*if(count > countChkd){
                //alert('not all checked');
                $('#select-all').iCheck('uncheck');
            }else{
                //alert('all checked');
                //$('#select-all').iCheck('check');
            }*/
        });

        /*$('.similar-check').on('ifChecked', function(event){
            $('.block').show();
        });

        $('.similar-check').on('ifUnchecked', function(event){

            if($('.similar-check:checked').size()==0)
                alert('test');
        });*/


        /*$('.similar-check').on('ifUnchecked', function (event) {
            //counts the number of selected check-boxes
            // if count=0 hide div
            if ($('.similar-check:checked').size() == 0){
                alert('test');
            }
        });*/

    });
</script>