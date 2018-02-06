<?php include 'includes/header.php'; ?>

<link rel="stylesheet" href="css/front-pages.css">

<div class="register">

    <div class="container">

            <div class="mainframe">
                <div class="row d-flex flex-md-row flex-column-reverse">
                    <div class="col-md-6"><div class="title">Sign Up</div></div>
                    <div class="col-md-6 mb-2 text-center text-lg-right"><img src="img/digitalebox-logo.png"></div>
                </div>
                <form action="dashboard.php">
                    <div class="row">

                        <div class="col-lg-6">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" id="" placeholder="First Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Password</label>
                                            <input type="text" class="form-control" id="" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" class="form-control" id="" placeholder="ex: abc@companyname.com">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>User Name</label>
                                            <input type="text" class="form-control" id="" placeholder="User Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>City</label>
                                            <input type="text" class="form-control" id="" placeholder="ex: Paris">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Street Address</label>
                                        <input type="text" class="form-control" id="" placeholder="ex: 27 Avenue Pasteur">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Zip Code</label>
                                            <input type="text" class="form-control" id="" placeholder="ex: 14390">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Country</label>
                                            <select id="" class="form-control">
                                                <option selected>- Select -</option>
                                                <option>France</option>
                                                <option>United Kingdom</option>
                                                <option>United States</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6 show_hide_password">
                                            <label>Password</label>
                                            <div class="input-group">
                                                <input class="form-control" type="password" placeholder="Password">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 show_hide_password">
                                            <label>Confirm Password</label>
                                            <div class="input-group">
                                                <input class="form-control" type="password" placeholder="Confirm Password">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                        </div>
                        <div class="col-lg-6">
                            <div><label>Point your location</label></div>
                            <div class="map">

                                <div id="map" style="height: 100%"></div>
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
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck" name="iCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        I Agree to the <a href="">Terms & Conditions</a>
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" id="signup">Sign Up</button>
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-right mt-3 mt-md-5">
                                Already have an account? <span><a href="login.php">Sign In</a></span>
                            </div>
                        </div>
                    </div>
                </form>

            </div>

    </div>

</div>



<?php include 'includes/footer.php'; ?>


<script>
    $(document).ready(function () {



    });
</script>