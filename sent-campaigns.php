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
                        Sent Campaigns
                    </div>
                    <div class="desc">
                        Manage your Email/ SMS/ Facebook/ Twitter campaigns
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <a href="">Communication</a> / <span>Sent Campaigns</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row no-gutters">
            <div class="content-panel col-md-12">
                <div class="content-inner">
                    <div class="content-area">

                        <div class="content-panel-sub">
                            <div class="panel-head">
                                Search by
                            </div>
                        </div>

                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="from-date">From Date</label>
                                    <div class="input-group date" id="from-date" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#from-date" placeholder="1990-01-01"/>
                                        <div class="input-group-append" data-target="#from-date" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="to-date">To Date</label>
                                    <div class="input-group date" id="to-date" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#to-date" placeholder="1990-01-01"/>
                                        <div class="input-group-append" data-target="#to-date" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="exampleFormControlSelect1">Saved Searches</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>- Select -</option>
                                        <option>Email List</option>
                                        <option>Office</option>
                                        <option>Friends</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="exampleFormControlSelect1">Status</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>- Select -</option>
                                        <option>Pending</option>
                                        <option>In Progress</option>
                                        <option>Finished</option>
                                        <option>Stopped</option>
                                        <option>AB Test Stopped</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="type">Type</label>
                                    <select class="form-control" id="type">
                                        <option>- Select -</option>
                                        <option>Email</option>
                                        <option>Twitter</option>
                                        <option>Facebook</option>
                                        <option>SMS</option>
                                        <option>LinkedIn</option>
                                        <option>A/B Testing</option>
                                        <option>All</option>
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

                        <div class="text-right results-count mt-4">
                            Displaying 1-10 of 2420 results
                        </div>

                        <div class="table-wrap">

                            <table class="table table-hover table-striped table-custom">
                                <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Created at</th>
                                    <th scope="col">Created by</th>
                                    <th scope="col">Time Spent</th>
                                    <th scope="col">Progress</th>
                                    <th scope="col" class="text-center">Status</th>
                                    <th scope="col" class="text-center">Errors</th>
                                    <th class="text-center actions saved-search" scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td>Phone Number</td>
                                    <td><span class="badge badge-info">2018-01-29</span> <span class="badge badge-dark">07:38 AM</span></td>
                                    <td>Digitalbox Testing</td>
                                    <td><i class="fa fa-clock-o fa-lg"></i> 1 sec</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                                        </div>
                                    </td>
                                    <td class="text-center"><span class="badge badge-pill badge-success">Active</span></td>
                                    <td class="text-center"><a href="" title="Download error report"><i class="fa fa-download fa-lg"></i></a></td>
                                    <td class="text-center">
                                        <a href="" data-toggle="modal" data-target="#viewDetails" title="Progress"><i class="fa  fa-clock-o fa-lg"></i></a>
                                        <a href="detail-statistics-campaign.php" title="Statistics"><i class="fa fa-bar-chart fa-lg"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>ProspectDigibox</td>
                                    <td><span class="badge badge-info">2017-11-13</span> <span class="badge badge-dark">09:46 PM</span></td>
                                    <td>Digitalbox Testing</td>
                                    <td><i class="fa fa-clock-o fa-lg"></i> 29 sec</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                        </div>
                                    </td>
                                    <td class="text-center"><span class="badge badge-pill badge-danger">Deleted</span></td>
                                    <td></td>
                                    <td class="text-center">
                                        <a href="" data-toggle="modal" data-target="#viewDetails" title="Progress"><i class="fa fa-clock-o fa-lg"></i></a>
                                        <a href="detail-statistics-campaign.php" title="Statistics"><i class="fa fa-bar-chart fa-lg"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>15130 Search</td>
                                    <td><span class="badge badge-info">2017-07-04</span> <span class="badge badge-dark">08:14 AM</span></td>
                                    <td>Elania Zito</td>
                                    <td><i class="fa fa-clock-o fa-lg"></i> 101 sec</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                        </div>
                                    </td>
                                    <td class="text-center"><span class="badge badge-pill badge-success">Active</span></td>
                                    <td class="text-center"><a href="" title="Download error report"><i class="fa fa-download fa-lg"></i></a></td>
                                    <td class="text-center">
                                        <a href="" data-toggle="modal" data-target="#viewDetails" title="Progress"><i class="fa fa-clock-o fa-lg"></i></a>
                                        <a href="detail-statistics-campaign.php" title="Statistics"><i class="fa fa-bar-chart fa-lg"></i></a>
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

        <!-- Add Modal -->
        <div class="modal fade" id="viewDetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Campaign Progress</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6 col-sm-3">Success <span class="badge badge-pill badge-success">2</span></div>
                            <div class="col-6 col-sm-3">Failed <span class="badge badge-pill badge-danger">1</span></div>
                            <div class="col-6 col-sm-3">Pending <span class="badge badge-pill badge-warning">3</span></div>
                            <div class="col-6 col-sm-3">Total <span class="badge badge-pill badge-info">6</span></div>
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
            format: 'YYYY-MM-DD'
        });
        $('#to-date').datetimepicker({
            format: 'YYYY-MM-DD'
        });
    });
</script>