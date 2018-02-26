<?php include 'includes/header.php'; ?>

<div class="app-header">
    <?php include 'includes/app-header.php'; ?>
</div>

<div class="app-body">
    <?php include 'includes/side-bar.php'; ?>

    <div class="app-content">

        <div class="page-header">
            <div class="row">
                <div class="col-md-6">
                    <div class="title">
                        Follow Up
                    </div>
                    <div class="desc">
                        Notifications and reminders sent to your supporters
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <a href="">People</a> / <span>Follow Up</span>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="row no-gutters">

                <div class="content-panel col-md-12">

                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link" href="social-activities.php">Social Activities</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="">Follow Up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="broadcast.php">Broadcast</a>
                        </li>
                    </ul>
                    <div class="content-inner">
                        <div class="content-area">

                            <form class="mt-4">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="from-date">From Date</label>
                                        <div class="input-group date" id="from-date" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#from-date" placeholder="1990-01-01"/>
                                            <div class="input-group-append" data-target="#from-date" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="to-date">To Date</label>
                                        <div class="input-group date" id="to-date" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#to-date" placeholder="1990-01-01"/>
                                            <div class="input-group-append" data-target="#to-date" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row text-left text-md-right">
                                    <div class="form-group col-md-12">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </div>

                            </form>

                            <div class="content-panel-sub">
                                <div class="panel-head">
                                    Follow Ups
                                </div>
                                <div class="content-area">
                                    <?php include 'includes/grid.php'; ?>
                                </div>
                            </div>

                            <div class="content-panel-sub">
                                <div class="panel-head">
                                    Top Recruiters
                                </div>
                                <div class="content-area">
                                    <div class="text-right results-count mt-4">
                                        Displaying 1-10 of 2420 results
                                    </div>
                                    <div class="table-wrap">

                                        <!-- Modal -->
                                        <div class="modal fade" id="viewDetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Merge Accounts</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body edit-keyword">
                                                        <h6>Master Account</h6>
                                                        <div class="table-wrap">
                                                            <table class="table table-hover table-striped table-custom">
                                                                <!--<thead>
                                                                <tr>
                                                                    <th class="text-center" scope="col">Profile</th>
                                                                    <th scope="col">First Name</th>
                                                                    <th scope="col">Last Name</th>
                                                                    <th scope="col">Email</th>
                                                                </tr>
                                                                </thead>-->
                                                                <tbody>

                                                                <tr>
                                                                    <td class="text-center">
                                                                        <span class="profile-pic"><img src="img/user-profile.png"></span>
                                                                    </td>
                                                                    <td>Mark</td>
                                                                    <td>Otto</td>
                                                                    <td>mark@gmail.com</td>
                                                                    <td>+330000000000</td>
                                                                </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <div class="row no-gutters mt-2">
                                                            <div class="col-md-12">Merge Similar Accounts with master</div>
                                                        </div>
                                                        <div class="table-wrap mt-3">
                                                            <table class="table table-hover table-striped table-custom">
                                                                <thead>
                                                                <tr>
                                                                    <th class="text-center" scope="col">
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox2" value="option2">
                                                                        </div>
                                                                    </th>
                                                                    <th class="text-center" scope="col">Profile</th>
                                                                    <th scope="col">Network</th>
                                                                    <th scope="col">First Name</th>
                                                                    <th scope="col">Last Name</th>

                                                                    <th class="text-center actions" scope="col">Actions</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>

                                                                <tr>
                                                                    <td class="text-center">
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox2" value="option2">
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <span class="profile-pic"><img src="img/user-profile.png"></span>
                                                                    </td>
                                                                    <td class="text-center"><i class="fa fa-facebook fa-lg"></i></td>
                                                                    <td>Mark</td>
                                                                    <td>Otto</td>

                                                                    <td class="text-center">
                                                                        <a href="" data-target="#viewDetails" title="View"><i class="fa fa-eye fa-lg"></i></a>
                                                                        <a href="" data-toggle="modal" class="hide-merge" data-target="#conflicts" title="Merge"><i class="fa fa-toggle-up fa-lg"></i></a>
                                                                        <a href="" data-target="#viewDetails" title="Reject"><i class="fa fa-trash fa-lg"></i></a>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td class="text-center">
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox2" value="option2">
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <span class="profile-pic"><img src="img/user-profile.png"></span>
                                                                    </td>
                                                                    <td class="text-center"><i class="fa fa-twitter fa-lg"></i></td>
                                                                    <td></td>
                                                                    <td>Otto</td>

                                                                    <td class="text-center">
                                                                        <a href="" data-target="#viewDetails" title="View"><i class="fa fa-eye fa-lg"></i></a>
                                                                        <a href="" data-toggle="modal" class="hide-merge" data-target="#conflicts" title="Merge"><i class="fa fa-toggle-up fa-lg"></i></a>
                                                                        <a href="" data-target="#viewDetails" title="Reject"><i class="fa fa-trash fa-lg"></i></a>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td class="text-center">
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox2" value="option2">
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <span class="profile-pic"><img src="img/user-profile.png"></span>
                                                                    </td>
                                                                    <td class="text-center"><i class="fa fa-facebook fa-lg"></i></td>
                                                                    <td>Mark</td>
                                                                    <td></td>

                                                                    <td class="text-center">
                                                                        <a href="" data-target="#viewDetails" title="View"><i class="fa fa-eye fa-lg"></i></a>
                                                                        <a href="" data-toggle="modal" class="hide-merge" data-target="#conflicts" title="Merge"><i class="fa fa-toggle-up fa-lg"></i></a>
                                                                        <a href="" data-target="#viewDetails" title="Reject"><i class="fa fa-trash fa-lg"></i></a>
                                                                    </td>
                                                                </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <button class="btn btn-secondary btn-sm disabled float-right">Auto Merge</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal ends -->

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
            </div>
        </div>



        <?php include 'includes/app-footer.php'; ?>
    </div>

</div>

<?php include 'includes/footer.php'; ?>

<script>
    $(document).ready(function () {

        $('#from-date').datetimepicker({
            /*debug:true*/
            format: 'YYYY-MM-DD HH:mm'
        });

        $('#to-date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm'
        });

        $(".chosen-select").chosen();

    });
</script>