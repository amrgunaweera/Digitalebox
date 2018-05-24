<?php include 'includes/header.php'; ?>

<div class="app-header">
    <?php include 'includes/app-header.php'; ?>

    <link href='css/fullcalendar.min.css' rel='stylesheet' />
    <link href='css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
</div>

<div class="app-body">
    <?php include 'includes/side-bar.php'; ?>

    <div class="app-content">

        <?php include 'includes/config-panel.php'; ?>

        <div class="page-header">
            <div class="row">
                <div class="col-md-6">
                    <div class="title">
                        Manage Events
                    </div>
                    <div class="desc">
                        Events created by users
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <a href="">System</a> / <span>Manage Events</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row no-gutters">
            <div class="content-panel col-md-12">
                <div class="content-inner">
                    <div class="content-area">

                        <div class="form-row mb-2">
                            <div class="form-group col-md-12">
                                <button class="btn btn-primary" onclick="window.location='add-event.php';">Add Event</button>
                            </div>
                        </div>

                        <div class="content-panel-sub">
                            <div class="panel-head">
                                Search by
                            </div>
                        </div>

                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-4 col-xl-2">
                                    <label for="from-date">Start Date</label>
                                    <div class="input-group date" id="from-date" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#from-date" placeholder="1990-01-01"/>
                                        <div class="input-group-append" data-target="#from-date" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-4 col-xl-2">
                                    <label for="to-date">End Date</label>
                                    <div class="input-group date" id="to-date" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#to-date" placeholder="1990-01-01"/>
                                        <div class="input-group-append" data-target="#to-date" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-4 col-xl-2">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Name">
                                </div>
                                <div class="form-group col-md-4 col-xl-2">
                                    <label for="exampleFormControlSelect1">Priority</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>- Select -</option>
                                        <option>Manual</option>
                                        <option>Auto</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4 col-xl-2">
                                    <label for="exampleFormControlSelect1">Status</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>- Select -</option>
                                        <option>Active</option>
                                        <option>Inactive</option>
                                        <option>Disabled</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4 col-xl-2">
                                    <label for="name">Event Owner</label>
                                    <input type="text" class="form-control" id="name" placeholder="Event Owner">
                                </div>
                                <div class="form-group col-md-4 col-xl-12">
                                    <label for="keywords">Keywords</label>
                                    <select data-placeholder="Keywords" id="keywords" class="chosen-select form-control" multiple>
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
                            <div class="form-row text-left text-md-right">
                                <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                    <!--<button type="button" onclick="location.href='add-keywords.php'" class="btn btn-secondary">Add Keyword</button>-->
                                </div>
                            </div>

                        </form>

                        <div class="row mt-5 mb-3">
                            <div class="col-md-12">
                                <div id='eventCalendar'></div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- Event Modal -->
        <div class="modal fade" id="eventView" tabindex="-1" role="dialog" aria-labelledby="guideVideo" aria-hidden="true">
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

        <!-- Day click Modal -->
        <div class="modal fade" id="dayView" tabindex="-1" role="dialog" aria-labelledby="guideVideo" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Event List of the Day</h5>
                        <button type="button" id="guide-video-close" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php include 'includes/grid.php'; ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php include 'includes/app-footer.php'; ?>

</div>

<?php include 'includes/footer.php'; ?>

<script src='js/moment.min.js'></script>
<script src='js/fullcalendar.min.js'></script>

<script>
    $(document).ready(function() {

        $('#from-date').datetimepicker({
            format: 'YYYY-MM-DD'
        });
        $('#to-date').datetimepicker({
            format: 'YYYY-MM-DD'
        });

        $(".chosen-select").chosen();


        // Full calendar
        $('#eventCalendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,listWeek,listDay'
            },

            // customize the button names,
            // otherwise they'd all just say "list"
            views: {
                month: { buttonText: 'Month' },
                listDay: { buttonText: 'Day' },
                listWeek: { buttonText: 'Week' }
            },

            defaultDate: '2018-03-12',
            contentHeight: 'auto',
            navLinks: true, // can click day/week names to navigate views
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: [
                {
                    title: 'All Day Event',
                    start: '2018-03-01'
                },
                {
                    title: 'Long Event',
                    start: '2018-03-07',
                    end: '2018-03-10'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2018-03-09T16:00:00'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2018-03-16T16:00:00'
                },
                {
                    title: 'Conference',
                    start: '2018-03-11',
                    end: '2018-03-13'
                },
                {
                    title: 'Meeting',
                    start: '2018-03-12T10:30:00',
                    end: '2018-03-12T12:30:00'
                },
                {
                    title: 'Lunch',
                    start: '2018-03-12T12:00:00'
                },
                {
                    title: 'Meeting',
                    start: '2018-03-12T14:30:00'
                },
                {
                    title: 'Happy Hour',
                    start: '2018-03-12T17:30:00'
                },
                {
                    title: 'Dinner',
                    start: '2018-03-12T20:00:00'
                },
                {
                    title: 'Birthday Party',
                    start: '2018-03-13T07:00:00'
                },
                {
                    title: 'Click for Google',
                    url: 'http://google.com/',
                    start: '2018-03-28'
                }
            ],
            eventClick: function(calEvent, jsEvent, view) {
                /*alert('Event: ' + calEvent.title);
                alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
                alert('View: ' + view.name);*/

                $('#eventView').modal('show');
            },
            dayClick: function(date, jsEvent, view) {
                /*alert('Clicked on: ' + date.format());
                alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
                alert('Current view: ' + view.name);*/

                $('#dayView').modal('show');

            }
        });

    });
</script>