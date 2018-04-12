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
                        Saved Search
                    </div>
                    <div class="desc">
                        Different search criterias saved by you.
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <a href="">People</a> / <span>Saved Search</span>
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
                                <div class="form-group col-md-3">
                                    <label for="from-date">From Date</label>
                                    <div class="input-group date" id="from-date" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#from-date" placeholder="1990-01-01"/>
                                        <div class="input-group-append" data-target="#from-date" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="to-date">To Date</label>
                                    <div class="input-group date" id="to-date" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#to-date" placeholder="1990-01-01"/>
                                        <div class="input-group-append" data-target="#to-date" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="criteria">Criteria name</label>
                                    <input type="text" class="form-control" id="criteria" placeholder="Criteria name">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="" class="d-none d-md-block">&nbsp;</label>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
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
                                    <th scope="col">Criteria Name</th>
                                    <th scope="col">Created at</th>
                                    <th scope="col">Created by</th>
                                    <th class="text-center actions saved-search" scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td>Phone Number</td>
                                    <td><span class="badge badge-day">2018-01-29</span> <span class="badge badge-time">07:38 AM</span></td>
                                    <td>Digitalbox Testing</td>
                                    <td class="text-center">
                                        <a href="" data-toggle="modal" data-target="#sendCampaign" title="All"><i class="fa fa-star fa-lg"></i></a>
                                        <a href="" data-toggle="modal" data-target="#sendCampaign" title="SMS Campaign"><i class="fa fa-mobile-phone fa-lg"></i></a>
                                        <a href="" data-toggle="modal" data-target="#sendCampaign" title="Email Campaign"><i class="fa fa-envelope fa-lg"></i></a>
                                        <a href="" data-toggle="modal" data-target="#sendCampaign" title="Twitter Campaign"><i class="fa fa-twitter fa-lg"></i></a>

                                        <a href="" data-toggle="modal" data-target="#viewDetails" title="View Details"><i class="fa fa-eye fa-lg"></i></a>
                                        <a href="" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                        <a href="" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>ProspectDigibox</td>
                                    <td><span class="badge badge-day">2017-11-13</span> <span class="badge badge-time">09:46 PM</span></td>
                                    <td>Digitalbox Testing</td>
                                    <td class="text-center">
                                        <a href="" data-toggle="modal" data-target="#sendCampaign" title="All"><i class="fa fa-star fa-lg"></i></a>
                                        <a href="" data-toggle="modal" data-target="#sendCampaign" title="SMS Campaign"><i class="fa fa-mobile-phone fa-lg"></i></a>
                                        <a href="" data-toggle="modal" data-target="#sendCampaign" title="Email Campaign"><i class="fa fa-envelope fa-lg"></i></a>
                                        <a href="" data-toggle="modal" data-target="#sendCampaign" title="Twitter Campaign"><i class="fa fa-twitter fa-lg"></i></a>

                                        <a href="" data-toggle="modal" data-target="#viewDetails" title="View Details"><i class="fa fa-eye fa-lg"></i></a>
                                        <a href="" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                        <a href="" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>15130 Search</td>
                                    <td><span class="badge badge-day">2017-07-04</span> <span class="badge badge-time">08:14 PM</span></td>
                                    <td>Elania Zito</td>
                                    <td class="text-center">
                                        <a href="" data-toggle="modal" data-target="#sendCampaign" title="All"><i class="fa fa-star fa-lg"></i></a>
                                        <a href="" data-toggle="modal" data-target="#sendCampaign" title="SMS Campaign"><i class="fa fa-mobile-phone fa-lg"></i></a>
                                        <a href="" data-toggle="modal" data-target="#sendCampaign" title="Email Campaign"><i class="fa fa-envelope fa-lg"></i></a>
                                        <a href="" data-toggle="modal" data-target="#sendCampaign" title="Twitter Campaign"><i class="fa fa-twitter fa-lg"></i></a>

                                        <a href="" data-toggle="modal" data-target="#viewDetails" title="View Details"><i class="fa fa-eye fa-lg"></i></a>
                                        <a href="" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                        <a href="" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
                                    </td>
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
                                                                <td class="text-right"><span class="badge badge-day">2017-07-04</span> <span class="badge badge-time">08:14 AM</span></td>
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