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
                        Zone View
                    </div>
                    <div class="desc">
                        Map view of all zone
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <a href="">People</a> / <span>Zone View</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row no-gutters map-view">

            <div class="content-panel col-md-12">

                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="advanced-search-v2.php">Search</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="map-view-v2.php">Map</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="zone-view-v2.php">Zone</a>
                    </li>
                </ul>

                <div class="content-inner">
                    <!--<div class="panel-head">Saved Search</div>-->
                    <div class="content-area">

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

                        <div class="mt-5">
                            <div class="text-right results-count mt-4">
                                Displaying 1-10 of 2420 results
                            </div>

                            <div class="table-wrap">

                                <table class="table table-hover table-striped table-custom">
                                    <thead>
                                    <tr>
                                        <th scope="col">Title</th>
                                        <th class="text-center actions saved-search" scope="col">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td>Map zone with filters</td>
                                        <td class="text-center">
                                            <a href="" data-toggle="modal" data-target="#viewDetails" title="View"><i class="fa fa-eye fa-lg"></i></a>
                                            <a href="edit-zone-view.php" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                            <a href="" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Map view test 4</td>
                                        <td class="text-center">
                                            <a href="" data-toggle="modal" data-target="#viewDetails" title="View"><i class="fa fa-eye fa-lg"></i></a>
                                            <a href="edit-zone-view.php" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                            <a href="" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>15130 Search</td>
                                        <td class="text-center">
                                            <a href="" data-toggle="modal" data-target="#viewDetails" title="View"><i class="fa fa-eye fa-lg"></i></a>
                                            <a href="edit-zone-view.php" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                            <a href="" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>

                            </div>

                            <div class="row no-gutters d-flex flex-sm-row-reverse flex-sm-column-reverse flex-md-row">
                                <div class="col-md-6">

                                </div>
                                <div class="col-md-6">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-md-end">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- View Modal -->
            <div class="modal fade" id="viewDetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">

                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title" id="">Map View</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body edit-keyword">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="map-layout" style="height: 400px;">
                                        <div class="mapouter">
                                            <div class="gmap_canvas">
                                                <iframe width="100%" style="height: 400px" id="gmap_canvas" src="https://maps.google.com/maps?q=university of san francisco&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                            </div>
                                            <style>
                                                .mapouter{overflow:hidden;height:400px;width:100%;}
                                                .gmap_canvas {background:none!important;height:400px;width:100%;}
                                            </style>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <?php include 'includes/grid.php'; ?>
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

    });
</script>