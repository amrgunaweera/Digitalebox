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
                        Edit Map Zone
                    </div>
                    <div class="desc">
                        Update your Map zone
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <a href="">People</a> / <a href="">Zone View</a> / <span>Edit Zone View</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row no-gutters map-view">

            <div class="content-panel col-md-12">

                <div class="content-inner">
                    <div class="content-area">

                        <form>
                            <div class="row no-gutters">
                                <div class="form-group col-md-4">
                                    <label for="title">Title</label>
                                    <input class="form-control" id="title" placeholder="Title" type="text">
                                </div>
                            </div>

                            <div class="row flex-column-reverse flex-sm-row mt-3">

                                <div class="col-sm-6 col-xl-7 mb-2">
                                    <div class="pull-left mr-2">Zone Color</div>
                                    <ul class="zone-colors pull-left">
                                        <li><div id="blue" class="color-box active"></div></li>
                                        <li><div id="red" class="color-box"></div></li>
                                        <li><div id="green" class="color-box"></div></li>
                                        <li><div id="yellow" class="color-box"></div></li>
                                        <li><div id="purple" class="color-box"></div></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6 col-xl-5 mb-2">
                                    <div class="text-sm-right">
                                        <button type="button" class="btn btn-secondary mb-2 mb-sm-0">Delete Selected Zone</button>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="map-layout">

                                        <div id="map"></div>
                                        <script>
                                            function initMap() {
                                                // Styles a map in night mode.
                                                var map = new google.maps.Map(document.getElementById('map'), {
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

                            <div class="row no-gutters mt-5">
                                <div class="col-md-12">
                                    <div class="form-group text-left text-md-right">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <button type="submit" class="btn btn-secondary">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>

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

        // Zone color select
        $('.zone-colors .color-box').click(function () {
            $('.color-box').removeClass('active');
            $(this).addClass('active');
        });

    });
</script>