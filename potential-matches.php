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
                        Account Merge
                    </div>
                    <div class="desc">
                        Merge duplicate records to same user into one profile
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <a href="">People</a> / <span>Account Merge</span>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="row no-gutters">
                <div class="content-panel col-md-12">
                    <div class="content-area">

                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="">Potential Matches</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="user-match.php">User Matching</a>
                            </li>
                        </ul>

                        <form class="mt-4">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="fname">First Name</label>
                                    <input type="text" class="form-control" id="fname" placeholder="First Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="lname">Last Name</label>
                                    <input type="text" class="form-control" id="lname" placeholder="Last Name">
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
                                        <th class="text-center" scope="col">Profile</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Mobile</th>
                                        <th scope="col">Count</th>

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
                                        <td>+330000000000</td>
                                        <td>3</td>

                                        <td class="text-center">
                                            <a href="" data-toggle="modal" data-target="#viewDetails" title="View"><i class="fa fa-edit fa-lg"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">
                                            <span class="profile-pic"><img src="img/user-profile.png"></span>
                                        </td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>mark@gmail.com</td>
                                        <td>+330000000000</td>
                                        <td>3</td>

                                        <td class="text-center">
                                            <a href="" data-toggle="modal" data-target="#viewDetails" title="View"><i class="fa fa-edit fa-lg"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">
                                            <span class="profile-pic"><img src="img/user-profile.png"></span>
                                        </td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>mark@gmail.com</td>
                                        <td>+330000000000</td>
                                        <td>3</td>

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
                                                        <td>+330000000000</td>
                                                    </tr>

                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="row no-gutters mt-2">
                                                <div class="col-md-12">Merge Similar Accounts with master</div>
                                            </div>
                                            <div class="table-wrap mt-3">
                                                <table class="table table-hover table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center" scope="col">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
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
                                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <span class="profile-pic"><img src="img/user-profile.png"></span>
                                                        </td>
                                                        <td class="text-center"><i class="fa fa-facebook fa-lg"></i></td>
                                                        <td>Mark</td>
                                                        <td>Otto</td>

                                                        <td class="text-center">
                                                            <a href="" data-toggle="tooltip" data-target="#viewDetails" title="View"><i class="fa fa-eye fa-lg"></i></a>
                                                            <a href="" data-toggle="modal" class="hide-merge" data-target="#conflicts" title="Merge"><i class="fa fa-toggle-up fa-lg"></i></a>
                                                            <a href="" data-toggle="tooltip" data-target="#viewDetails" title="Reject"><i class="fa fa-close fa-lg"></i></a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="text-center">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <span class="profile-pic"><img src="img/user-profile.png"></span>
                                                        </td>
                                                        <td class="text-center"><i class="fa fa-twitter fa-lg"></i></td>
                                                        <td></td>
                                                        <td>Otto</td>

                                                        <td class="text-center">
                                                            <a href="" data-toggle="tooltip" data-target="#viewDetails" title="View"><i class="fa fa-eye fa-lg"></i></a>
                                                            <a href="" data-toggle="modal" class="hide-merge" data-target="#conflicts" title="Merge"><i class="fa fa-toggle-up fa-lg"></i></a>
                                                            <a href="" data-toggle="tooltip" data-target="#viewDetails" title="Reject"><i class="fa fa-close fa-lg"></i></a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="text-center">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <span class="profile-pic"><img src="img/user-profile.png"></span>
                                                        </td>
                                                        <td class="text-center"><i class="fa fa-facebook fa-lg"></i></td>
                                                        <td>Mark</td>
                                                        <td></td>

                                                        <td class="text-center">
                                                            <a href="" data-toggle="tooltip" data-target="#viewDetails" title="View"><i class="fa fa-eye fa-lg"></i></a>
                                                            <a href="" data-toggle="modal" class="hide-merge" data-target="#conflicts" title="Merge"><i class="fa fa-toggle-up fa-lg"></i></a>
                                                            <a href="" data-toggle="tooltip" data-target="#viewDetails" title="Reject"><i class="fa fa-close fa-lg"></i></a>
                                                        </td>
                                                    </tr>

                                                    </tbody>
                                                </table>
                                            </div>

                                            <button class="btn btn-secondary btn-sm disabled">Auto Merge</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal ends -->

                            <!-- Modal 2 -->
                            <div class="modal fade" id="conflicts" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Merge Conflicts</h5>
                                            <button type="button" class="close show-merge" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">
                                            <div class="row no-gutters">
                                                <p class="tite-desc">Displaying conflict attributes. Please select the value you require to merge.</p>
                                            </div>

                                            <div class="row no-gutters mt-2">
                                                <div class="col-4"><p>Master Account</p></div>
                                                <div class="col-8"><p><strong>Mark Otto</strong></p></div>
                                            </div>

                                            <div class="table-wrap">
                                                <table class="table table-striped">
                                                    <tr>
                                                        <td width="40%">Street Address</td>
                                                        <td>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" id="inline1" name="street" value="option1">
                                                                <label class="form-check-label" for="inlineCheckbox1">Victoria Island</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" id="inline2" name="street" value="option2">
                                                                <label class="form-check-label" for="inlineCheckbox1">Port Harcourt</label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>City</td>
                                                        <td>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" id="inline1" name="city" value="option1">
                                                                <label class="form-check-label" for="inlineCheckbox1">Paris</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" id="inline2" name="city" value="option2">
                                                                <label class="form-check-label" for="inlineCheckbox1">London</label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>

                                            <p class="mt-2 notes"><i>Note: Please use the auto merge, if you found this page empty due to no conflicting attributes.</i></p>

                                            <button class="btn btn-primary btn-sm show-merge mt-3" data-dismiss="modal">Save</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal 2 ends -->


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



        <?php include 'includes/app-footer.php'; ?>
    </div>

</div>

<?php include 'includes/footer.php'; ?>

<script>
    $(document).ready(function () {

        $('.hide-merge').click(function () {
            $('#viewDetails').modal('hide')
        });

        $('.show-merge').click(function () {
            $('#viewDetails').modal('show')
        });

    });
</script>