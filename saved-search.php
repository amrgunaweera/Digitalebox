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
                <div class="content-area">

                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="from-date">From Date</label>
                                <div class="input-group date" id="from-date" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" data-target="#from-date" placeholder="00/00/1990"/>
                                    <div class="input-group-append" data-target="#from-date" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="to-date">To Date</label>
                                <div class="input-group date" id="to-date" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" data-target="#to-date" placeholder="00/00/1990"/>
                                    <div class="input-group-append" data-target="#to-date" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="criteria">Criteria name</label>
                                <input type="text" class="form-control" id="criteria" placeholder="Criteria name">
                            </div>
                        </div>
                        <div class="form-row text-left text-md-right">
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </div>

                    </form>

                    <div class="text-right results-count mt-4">
                        Displaying 1-10 of 2420 results
                    </div>

                    <div class="table-wrap">

                        <table class="table table-hover table-striped">
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
                                <td>29/01/2018 07:38:08</td>
                                <td>Digitalbox Testing</td>
                                <td class="text-center">
                                    <a href="" data-toggle="modal" data-target="#viewDetails" title="View"><i class="fa fa-star fa-lg"></i></a>
                                    <a href="" data-toggle="modal" data-target="#viewDetails" title="View"><i class="fa fa-mobile-phone fa-lg"></i></a>
                                    <a href="" data-toggle="modal" data-target="#viewDetails" title="View"><i class="fa fa-envelope fa-lg"></i></a>
                                    <a href="" data-toggle="modal" data-target="#viewDetails" title="View"><i class="fa fa-twitter fa-lg"></i></a>

                                    <a href="" data-toggle="modal" data-target="#viewDetails" title="View"><i class="fa fa-eye fa-lg"></i></a>
                                    <a href="" data-target="#viewDetails" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                    <a href="" title="Delete"><i class="fa fa-close fa-lg"></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td>ProspectDigibox</td>
                                <td>13/11/2017 09:46:07</td>
                                <td>Digitalbox Testing</td>
                                <td class="text-center">
                                    <a href="" data-toggle="modal" data-target="#viewDetails" title="View"><i class="fa fa-edit fa-lg"></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td>15130 Search</td>
                                <td>04/07/2017 08:14:40</td>
                                <td>Elania Zito</td>
                                <td class="text-center">
                                    <a href="" data-toggle="modal" data-target="#viewDetails" title="View"><i class="fa fa-edit fa-lg"></i></a>
                                </td>
                            </tr>

                            </tbody>
                        </table>

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
                                            <table class="table table-hover table-striped">
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

                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>


                                        <p>Merge Similar Accounts with master</p>
                                        <div class="table-wrap">
                                            <table class="table table-hover table-striped">
                                                <thead>
                                                <tr>
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
                                                        <span class="profile-pic"><img src="img/user-profile.png"></span>
                                                    </td>
                                                    <td class="text-center"><i class="fa fa-facebook fa-lg"></i></td>
                                                    <td>Mark</td>
                                                    <td>Otto</td>

                                                    <td class="text-center">
                                                        <a href="" data-toggle="tooltip" data-target="#viewDetails" title="View"><i class="fa fa-eye fa-lg"></i></a>
                                                        <a href="" data-toggle="tooltip" data-target="#viewDetails" title="Merge"><i class="fa fa-toggle-up fa-lg"></i></a>
                                                        <a href="" data-toggle="tooltip" data-target="#viewDetails" title="Reject"><i class="fa fa-close fa-lg"></i></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="text-center">
                                                        <span class="profile-pic"><img src="img/user-profile.png"></span>
                                                    </td>
                                                    <td class="text-center"><i class="fa fa-twitter fa-lg"></i></td>
                                                    <td></td>
                                                    <td>Otto</td>

                                                    <td class="text-center">
                                                        <a href="" data-toggle="tooltip" data-target="#viewDetails" title="View"><i class="fa fa-eye fa-lg"></i></a>
                                                        <a href="" data-toggle="tooltip" data-target="#viewDetails" title="Merge"><i class="fa fa-toggle-up fa-lg"></i></a>
                                                        <a href="" data-toggle="tooltip" data-target="#viewDetails" title="Reject"><i class="fa fa-close fa-lg"></i></a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="text-center">
                                                        <span class="profile-pic"><img src="img/user-profile.png"></span>
                                                    </td>
                                                    <td class="text-center"><i class="fa fa-facebook fa-lg"></i></td>
                                                    <td>Mark</td>
                                                    <td></td>

                                                    <td class="text-center">
                                                        <a href="" data-toggle="tooltip" data-target="#viewDetails" title="View"><i class="fa fa-eye fa-lg"></i></a>
                                                        <a href="" data-toggle="tooltip" data-target="#viewDetails" title="Merge"><i class="fa fa-toggle-up fa-lg"></i></a>
                                                        <a href="" data-toggle="tooltip" data-target="#viewDetails" title="Reject"><i class="fa fa-close fa-lg"></i></a>
                                                    </td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!--
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                            </div>-->
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



        <?php include 'includes/app-footer.php'; ?>
    </div>

</div>

<?php include 'includes/footer.php'; ?>

<script>
    $(document).ready(function () {
        $('#from-date').datetimepicker({
            format: 'L'
        });
        $('#to-date').datetimepicker({
            format: 'L'
        });
    });
</script>