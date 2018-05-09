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
                        Map View
                    </div>
                    <div class="desc">
                        Search people in map view
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <a href="">People</a> / <span>Map View</span>
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
                        <a class="nav-link active" href="map-view-v2.php">Map</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="zone-view-v2.php">Zone</a>
                    </li>
                </ul>

                <div class="content-inner">
                    <!--<div class="panel-head">Saved Search</div>-->
                    <div class="content-area">

                        <div class="content-panel-sub">
                            <div class="panel-head">
                                Search by criteria
                            </div>
                        </div>

                        <form>

                            <div class="row no-gutters">
                                <div class="col-md-7 col-lg-8 col-xl-6" id="field-list">

                                    <div id="field-1" class="input-group mb-3 field-items">
                                        <input type="text" class="form-control" placeholder="First Name">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary btn-no-frame remove-field" title="Remove Field" type="button"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <div id="field-2" class="input-group mb-3 field-items">
                                        <input type="text" class="form-control" placeholder="Last Name">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary btn-no-frame remove-field" title="Remove Field" type="button"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></button>
                                        </div>
                                    </div>

                                    <div id="field-3" class="input-group mb-3 field-items hidden-field">
                                        <input type="text" class="form-control" id="city" placeholder="City">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary btn-no-frame remove-field" title="Remove Field" type="button"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <div id="field-4" class="input-group mb-3 field-items hidden-field">
                                        <select id="category" class="form-control">
                                            <option selected>- Country -</option>
                                            <option>France</option>
                                            <option>United States</option>
                                            <option>Italy</option>
                                            <option>United Kingdom</option>
                                        </select>
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary btn-no-frame remove-field" title="Remove Field" type="button"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></button>
                                        </div>
                                    </div>

                                    <div id="field-5" class="input-group mb-3 field-items hidden-field">
                                        <select id="gender" class="form-control">
                                            <option selected>- Gender -</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary btn-no-frame remove-field" title="Remove Field" type="button"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></button>
                                        </div>
                                    </div>

                                    <div id="field-6" class="input-group mb-3 field-items hidden-field">
                                        <select id="category" class="form-control">
                                            <option selected>- Category -</option>
                                            <option>Supporter</option>
                                            <option>Prospect</option>
                                            <option>Non Supporter</option>
                                            <option>Unknown</option>
                                        </select>
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary btn-no-frame remove-field" title="Remove Field" type="button"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></button>
                                        </div>
                                    </div>

                                    <div id="field-7" class="input-group mb-3 field-items hidden-field">
                                        <input type="text" class="form-control" id="zipcode" placeholder="Zip Code">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary btn-no-frame remove-field" title="Remove Field" type="button"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></button>
                                        </div>
                                    </div>

                                    <div id="field-10" class="input-group mb-3 field-items hidden-field">
                                        <input type="number" class="form-control" id="age" placeholder="Age (N or N-N)">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary btn-no-frame remove-field" title="Remove Field" type="button"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></button>
                                        </div>
                                    </div>

                                    <div id="field-12" class="input-group mb-3 field-items hidden-field">
                                        <input type="text" class="form-control" id="address" placeholder="Address (27 Avenue Pasteur)">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary btn-no-frame remove-field" title="Remove Field" type="button"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></button>
                                        </div>
                                    </div>

                                    <div id="field-15" class="input-group mb-3 field-items hidden-field">

                                        <div class="form-control no-border pt-3 pb-3 group-bg">
                                            <div class="row no-gutters">
                                                <label class="d-block d-sm-block d-md-none col-md-12">Keywords</label>
                                            </div>
                                            <div class="input-group no-gutters">
                                                <div class="form-control no-border p-0 col-sm-9 col-md-8 col-lg-9">
                                                    <select data-placeholder="Keywords" class="chosen-select form-control" multiple>
                                                        <option value="United States">United States</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="Afghanistan">Afghanistan</option>
                                                        <option value="Aland Islands">Aland Islands</option>
                                                        <option value="Albania">Albania</option>
                                                        <option value="Algeria">Algeria</option>
                                                        <option value="American Samoa">American Samoa</option>
                                                        <option value="Andorra">Andorra</option>
                                                        <option value="Angola">Angola</option>
                                                        <option value="Anguilla">Anguilla</option>
                                                        <option value="Antarctica">Antarctica</option>
                                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                        <option value="Argentina">Argentina</option>
                                                        <option value="Armenia">Armenia</option>
                                                        <option value="Aruba">Aruba</option>
                                                        <option value="Australia">Australia</option>
                                                        <option value="Austria">Austria</option>
                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                    </select>
                                                </div>
                                                <div class="input-group-append col-sm-3 col-md-4 col-lg-3">
                                                    <select class="keyword-select form-control" id="keyword-select-1">
                                                        <option value="1">Normal</option>
                                                        <option value="2">Strict</option>
                                                        <option value="3">Exclude</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div id="exclude-keywords-1">
                                                <label class="mt-2">Exclude keywords</label>
                                                <select data-placeholder="Exclude keywords" class="chosen-select mt-2 form-control" multiple>
                                                    <option value="United States">United States</option>
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="Afghanistan">Afghanistan</option>
                                                    <option value="Aland Islands">Aland Islands</option>
                                                    <option value="Albania">Albania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="American Samoa">American Samoa</option>
                                                    <option value="Andorra">Andorra</option>
                                                    <option value="Angola">Angola</option>
                                                    <option value="Anguilla">Anguilla</option>
                                                    <option value="Antarctica">Antarctica</option>
                                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                    <option value="Argentina">Argentina</option>
                                                    <option value="Armenia">Armenia</option>
                                                    <option value="Aruba">Aruba</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Austria">Austria</option>
                                                    <option value="Azerbaijan">Azerbaijan</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary btn-no-frame remove-field" title="Remove Field" type="button"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></button>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-1 col-lg-auto col-xl-2"></div>
                                <div class="col-md-4 col-lg-4 col-xl-4">
                                    <div class="input-group mt-3 mt-md-0">
                                        <select class="custom-select form-control" id="fields">
                                            <option value="0" selected>- Add search field -</option>
                                            <option value="1" disabled="disabled">First Name</option>
                                            <option value="2" disabled="disabled">Last Name</option>
                                            <option value="3">City</option>
                                            <option value="4">Country</option>
                                            <option value="5">Gender</option>
                                            <option value="6">Category</option>
                                            <option value="7">Zip Code</option>
                                            <option value="10">Age</option>
                                            <option value="12">Address</option>
                                            <option value="15">Keywords</option>
                                        </select>
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary btn-no-frame" id="add-field" type="button"><i class="fa fa-lg fa-plus" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row no-gutters mt-3">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </div>
                            </div>


                        </form>

                        <div class="content-panel-sub mt-4">
                            <div class="panel-head">
                                Map
                            </div>
                        </div>

                        <div class="row flex-column-reverse flex-xl-row">

                            <div class="col-xl-7 mb-2">
                                <div class="row no-gutters">
                                    <div class="col-sm-6 mb-2 mb-sm-0">
                                        <div class="pull-left mr-2">Enable OpenData</div>
                                        <div class="switch switch-sm pull-left mr-4">
                                            <input type="checkbox" class="switch toggle-switch" id="switch-sm1">
                                            <label for="switch-sm1"></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="pull-left mr-2">Zone Color</div>
                                        <ul class="zone-colors pull-left">
                                            <li><div id="blue" class="color-box active"></div></li>
                                            <li><div id="red" class="color-box"></div></li>
                                            <li><div id="green" class="color-box"></div></li>
                                            <li><div id="yellow" class="color-box"></div></li>
                                            <li><div id="purple" class="color-box"></div></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 mb-2">
                                <div class="text-xl-right">
                                    <button type="button" class="btn btn-primary mb-2 mb-xl-0">Save Selected Zone</button>
                                    <button type="button" class="btn btn-secondary mb-2 mb-xl-0">Delete Selected Zone</button>
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



                        <div class="mt-5">
                            <?php include 'includes/grid.php'; ?>
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

        $(".chosen-select").chosen();

        // Zone color select
        $('.zone-colors .color-box').click(function () {
            $('.color-box').removeClass('active');
            $(this).addClass('active');
        });

        $('.bulk-run').click(function (event) {
            event.preventDefault();

            var action = $('#actionToRun').val();
            if(action == 0){
                window.location.href = "http://54.38.42.53/DigitaleBoxUI/bulk-edit.php";
            }else if(action == 1){
                console.log('Delete');
                //window.location.href = "http://www.google.com";
            }else if(action == 2){
                console.log('Export');
                //window.location.href = "http://www.google.com";
            }
        });

        // Exclude keyword field show
        $( ".keyword-select" ).on('change', function() {
            var keywordType = $(this).val();
            if(keywordType == 3){
                $(this).parents('.input-group').find('#exclude-keywords-1, #exclude-keywords-2').show();
                //$('#exclude-keywords').show();
            }else{
                $(this).parents('.input-group').find('#exclude-keywords-1, #exclude-keywords-2').hide();
            }
        });


        // Add field
        $( "#add-field" ).click(function() {
            var fieldValue = parseInt( $('#fields').val() );

            if (fieldValue != 0)
            {
                $('#field-'+fieldValue).removeClass('hidden-field');
            }else{
                alert('Please select a field');
            }

            $('#fields').val('0');
            $('#fields option[value='+fieldValue+']').attr("disabled","disabled");

        });

        // Remove field
        $( ".remove-field" ).click(function() {
            var hiddenItems = $('.hidden-field').length;
            var filedsCount = $('#field-list .field-items').length;

            if(hiddenItems < filedsCount-1){
                $(this).parents('.field-items').addClass('hidden-field');

                var fieldId = $(this).parents('.field-items').attr('id');
                var fieldValue = parseInt( fieldId.substring(6, 10) );
                $('#fields option[value='+fieldValue+']').removeAttr("disabled");

            }
        });
    });
</script>