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
                        Activities
                    </div>
                    <div class="desc">
                        User activities of DigitaleBox
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <a href="">People</a> / <span>Activities</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row no-gutters">
            <div class="content-panel col-md-12">
                <div class="content-inner">
                    <div class="content-area">

                        <div class="text-right results-count mt-4">
                            Displaying 1-10 of 2420 results
                        </div>

                        <div class="table-wrap">

                            <table class="table table-hover table-striped table-custom">
                                <thead>
                                <tr>
                                    <th scope="col" class="text-center">Profile</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Date Time</th>
                                    <th scope="col">Activity</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td class="text-center"><span class="profile-pic"><img src="img/user-profile.png"></span></td>
                                    <td>DB BO Testing</td>
                                    <td><span class="badge badge-day">2018-02-28</span> <span class="badge badge-time">10:16 AM</span></td>
                                    <td>Viewed advanced search people</td>
                                </tr>

                                <tr>
                                    <td class="text-center"><span class="profile-pic"><img src="img/user-profile.png"></span></td>
                                    <td>DB BO Testing</td>
                                    <td><span class="badge badge-day">2018-02-28</span> <span class="badge badge-time">10:13 AM</span></td>
                                    <td>Viewed dashboard</td>
                                </tr>

                                <tr>
                                    <td class="text-center"><span class="profile-pic"><img src="img/user-profile.png"></span></td>
                                    <td>DB BO Testing</td>
                                    <td><span class="badge badge-day">2018-02-28</span> <span class="badge badge-time">09:05 PM</span></td>
                                    <td>Search social feed</td>
                                </tr>

                                <tr>
                                    <td class="text-center"><span class="profile-pic"><img src="img/user-profile.png"></span></td>
                                    <td>DB BO Testing</td>
                                    <td><span class="badge badge-day">2018-02-28</span> <span class="badge badge-time">09:04 AM</span></td>
                                    <td>Created a new membership page</td>
                                </tr>

                                <tr>
                                    <td class="text-center"><span class="profile-pic"><img src="img/user-profile.png"></span></td>
                                    <td>DB BO Testing</td>
                                    <td><span class="badge badge-day">2018-02-28</span> <span class="badge badge-time">09:01 AM</span></td>
                                    <td>Viewed Inbox message</td>
                                </tr>

                                </tbody>
                            </table>

                            <!-- Campaign Modal -->
                            <div class="modal fade" id="sendCampaign" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Start Campaign</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email address</label>
                                                    <select class="form-control" id="">
                                                        <option>- Select Template -</option>
                                                        <option>All Channels</option>
                                                        <option>Digitalebox</option>
                                                        <option>Friends</option>
                                                        <option>Office</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="end-date">End Date</label>
                                                    <div class="input-group date" id="end-date" data-target-input="nearest">
                                                        <input type="text" class="form-control datetimepicker-input" data-target="#end-date" placeholder="1990-01-01"/>
                                                        <div class="input-group-append" data-target="#end-date" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group float-right">
                                                    <button type="submit" class="btn btn-primary">Send</button>
                                                    <button type="submit" class="btn btn-secondary">New Template</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- View Modal -->
                            <div class="modal fade" id="viewDetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Criteria Details</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">

                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="table-wrap">
                                                        <table class="table table-striped table-custom">
                                                            <tr>
                                                                <td><strong>Criteria Name</strong></td>
                                                                <td class="text-right">15130 search</td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>First Name</strong></td>
                                                                <td class="text-right"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Last Name</strong></td>
                                                                <td class="text-right"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Email</strong></td>
                                                                <td class="text-right"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Keywords</strong></td>
                                                                <td class="text-right">google, tt</td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Team</strong></td>
                                                                <td class="text-right"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Gender</strong></td>
                                                                <td class="text-right">Male</td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Zip</strong></td>
                                                                <td class="text-right"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>City</strong></td>
                                                                <td class="text-right"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>User Category</strong></td>
                                                                <td class="text-right"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Age</strong></td>
                                                                <td class="text-right"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Created by</strong></td>
                                                                <td class="text-right">Elania Zito</td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Created at</strong></td>
                                                                <td class="text-right">2017-07-04 08:14:40</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

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
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
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

    </div>

    <?php include 'includes/app-footer.php'; ?>
</div>

<?php include 'includes/footer.php'; ?>

<script>
    $(document).ready(function () {
        $('#from-date').datetimepicker({
            format: 'YYYY-MM-DD'
        });
        $('#to-date').datetimepicker({
            format: 'YYYY-MM-DD'
        });

        $('#end-date').datetimepicker({
            format: 'YYYY-MM-DD'
        });
    });
</script>