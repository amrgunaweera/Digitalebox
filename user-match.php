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
                        Account Merge - User Matching
                    </div>
                    <div class="desc">
                        Merge duplicate profiles
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <a href="">People</a> / <a href="">Account Merge</a> / <span>User Matching</span>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="row no-gutters">
                <div class="content-panel col-md-12">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link" href="potential-matches.php">Potential Matches</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">User Matching</a>
                        </li>
                    </ul>
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
                                        <label for="fname">First Name</label>
                                        <input type="text" class="form-control" id="fname" placeholder="First Name">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="lname">Last Name</label>
                                        <input type="text" class="form-control" id="lname" placeholder="Last Name">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="Email Address">
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
                                        <th class="text-center" scope="col">Profile</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Email</th>

                                        <th class="text-center actions" scope="col">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td class="text-center">
                                            <span class="profile-pic"><img src="img/user-profile.png"></span>
                                        </td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>mark@gmail.com</td>

                                        <td class="text-center">
                                            <a href="" data-toggle="modal" data-target="#viewDetails" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">
                                            <span class="profile-pic"><img src="img/user-profile.png"></span>
                                        </td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>mark@gmail.com</td>

                                        <td class="text-center">
                                            <a href="" data-toggle="modal" data-target="#viewDetails" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">
                                            <span class="profile-pic"><img src="img/user-profile.png"></span>
                                        </td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>mark@gmail.com</td>

                                        <td class="text-center">
                                            <a href="" data-toggle="modal" data-target="#viewDetails" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
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

                            <!-- Merge Modal -->
                            <div class="modal fade" id="viewDetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
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

                                                    </tr>

                                                    </tbody>
                                                </table>
                                            </div>


                                            <p>Merge Similar Accounts with master</p>
                                            <div class="table-wrap">
                                                <table class="table table-hover table-striped table-custom">
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
                                                            <a href="" data-target="#viewDetails" title="View"><i class="fa fa-eye fa-lg"></i></a>
                                                            <a href="" data-target="#viewDetails" title="Merge"><i class="fa fa-toggle-up fa-lg"></i></a>
                                                            <a href="" data-target="#viewDetails" title="Reject"><i class="fa fa-close fa-lg"></i></a>
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
                                                            <a href="" data-target="#viewDetails" title="View"><i class="fa fa-eye fa-lg"></i></a>
                                                            <a href="" data-target="#viewDetails" title="Merge"><i class="fa fa-toggle-up fa-lg"></i></a>
                                                            <a href="" data-target="#viewDetails" title="Reject"><i class="fa fa-close fa-lg"></i></a>
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

    });
</script>