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
                        Account Merge - Potential Matches
                    </div>
                    <div class="desc">
                        Merge duplicate records to same user into one profile
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <a href="">People</a> / <a href="">Account Merge</a> / <span>Potential Matches</span>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="row no-gutters">

                <div class="content-panel col-md-12">

                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="">Potential Matches</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="user-match.php">User Matching</a>
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
                                    <div class="form-group col-md-5">
                                        <label for="fname">First Name</label>
                                        <input type="text" class="form-control" id="fname" placeholder="First Name">
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="lname">Last Name</label>
                                        <input type="text" class="form-control" id="lname" placeholder="Last Name">
                                    </div>
                                    <div class="form-group col-md-2">
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
                                        <th scope="col" class="text-center">Profile</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Mobile</th>
                                        <th scope="col" class="text-center">Count</th>

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
                                        <td class="text-center">2</td>

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
                                        <td>+330000000000</td>
                                        <td class="text-center">3</td>

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
                                        <td>+330000000000</td>
                                        <td class="text-center">3</td>

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


                            <!-- Merge Accounts Modal -->
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
                                                                <input class="form-check-input custom-icheck" type="checkbox" id="select-all" value="option2">
                                                            </div>
                                                        </th>
                                                        <th class="text-center" scope="col">Profile</th>
                                                        <th class="text-center" scope="col">Network</th>
                                                        <th scope="col">First Name</th>
                                                        <th scope="col">Last Name</th>

                                                        <th class="text-center actions" scope="col">Actions</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    <tr>
                                                        <td class="text-center">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input custom-icheck similar-check" type="checkbox" id="inlineCheckbox2" value="option2">
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
                                                            <a href="" data-target="#viewDetails" title="Reject"><i class="fa fa-close fa-lg"></i></a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="text-center">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input custom-icheck similar-check" type="checkbox" id="inlineCheckbox2" value="option2">
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
                                                            <a href="" data-target="#viewDetails" title="Reject"><i class="fa fa-close fa-lg"></i></a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="text-center">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input custom-icheck similar-check" type="checkbox" id="inlineCheckbox2" value="option2">
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
                                                            <a href="" data-target="#viewDetails" title="Reject"><i class="fa fa-close fa-lg"></i></a>
                                                        </td>
                                                    </tr>

                                                    </tbody>
                                                </table>
                                            </div>

                                            <button class="btn btn-secondary btn-sm float-right disabled" id="auto-merge">Auto Merge</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal ends -->

                            <!-- Conflicts Modal -->
                            <div class="modal fade" id="conflicts" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
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
                                                <div class="col-12"><p>Master Account - <strong>Mark Otto</strong></p></div>
                                            </div>

                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="form-row form-row-separated mb-3">
                                                        <div class="form-group">
                                                            <label>Street Address</label><br>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input custom-icheck" type="radio" id="inline1" name="street" value="option1">
                                                                <label class="form-check-label" for="inlineCheckbox1">Victoria Island</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input custom-icheck" type="radio" id="inline2" name="street" value="option2">
                                                                <label class="form-check-label" for="inlineCheckbox1">Port Harcourt</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input custom-icheck" type="radio" id="inline2" name="street" value="option3">
                                                                <label class="form-check-label" for="inlineCheckbox1">Port Harcourt</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input custom-icheck" type="radio" id="inline2" name="street" value="option4">
                                                                <label class="form-check-label" for="inlineCheckbox1">Port Harcourt</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row form-row-separated mb-3">
                                                        <div class="form-group">
                                                            <label>City</label><br>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input custom-icheck" type="radio" id="" name="city" value="option1">
                                                                <label class="form-check-label" for="inlineCheckbox1">Paris</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input custom-icheck" type="radio" id="" name="city" value="option2">
                                                                <label class="form-check-label" for="inlineCheckbox1">London</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input custom-icheck" type="radio" id="" name="city" value="option3">
                                                                <label class="form-check-label" for="inlineCheckbox1">Washington</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input custom-icheck" type="radio" id="" name="city" value="option4">
                                                                <label class="form-check-label" for="inlineCheckbox1">Wills</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <p class="mt-2 notes"><i>Note: Please use the auto merge, if you found this page empty due to no conflicting attributes.</i></p>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <button class="btn btn-secondary btn-sm show-merge mt-3" data-dismiss="modal">Back</button>
                                                </div>
                                                <div class="col-md-6 text-right">
                                                    <button class="btn btn-primary btn-sm show-merge mt-3" data-dismiss="modal">Merge</button>
                                                    <button class="btn btn-secondary btn-sm mt-3" data-target="#mergePreview" data-toggle="modal" data-dismiss="modal">Preview</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Conflicts ends -->

                            <!-- Preview Modal -->
                            <div class="modal fade" id="mergePreview" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Merge Preview</h5>
                                            <button type="button" class="close show-conflicts" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">
                                            <div class="table-wrap">
                                                <table class="table table-striped table-custom">
                                                    <tr>
                                                        <td><strong>First Name</strong></td>
                                                        <td class="text-right">Mark</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Last Name</strong></td>
                                                        <td class="text-right">Otto</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Email</strong></td>
                                                        <td class="text-right">mark@gmail.com</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Mobile</strong></td>
                                                        <td class="text-right">+3300000000</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Street Address</strong></td>
                                                        <td class="text-right">Victoria Island</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>City</strong></td>
                                                        <td class="text-right">Paris</td>
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
                                                        <td><strong>Age</strong></td>
                                                        <td class="text-right"></td>
                                                    </tr>
                                                </table>
                                            </div>

                                            <button class="btn btn-secondary btn-sm mt-3 show-conflicts" data-dismiss="modal">Back</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Preview ends -->

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

        // Hide Merge Accounts modal
        $('.hide-merge').click(function () {
            $('#viewDetails').modal('hide')
        });

        // Show Merge Accounts modal
        $('.show-merge').click(function () {
            $('#viewDetails').modal('show')
        });

        // Show Merge Conflicts modal
        $('.show-conflicts').click(function () {
            $('#conflicts').modal('show')
        });


        $('#select-all').on('ifToggled', function() {
            if(this.checked){
                $('.similar-check').iCheck('check');
            }else{
                $('.similar-check').iCheck('uncheck');
            }
        });

        $('.similar-check').on('ifToggled', function() {
            var count = $('.similar-check').length;
            var countChkd = $('.similar-check:checked').length;
            //alert($('.similar-check:checked').length);
            if(countChkd > 0){
                $('#auto-merge').removeClass('disabled');
            }else{
                $('#auto-merge').addClass('disabled');
            }

            /*if(count > countChkd){
                //alert('not all checked');
                $('#select-all').iCheck('uncheck');
            }else{
                //alert('all checked');
                //$('#select-all').iCheck('check');
            }*/
        });

        /*$('.similar-check').on('ifChecked', function(event){
            $('.block').show();
        });

        $('.similar-check').on('ifUnchecked', function(event){

            if($('.similar-check:checked').size()==0)
                alert('test');
        });*/


        /*$('.similar-check').on('ifUnchecked', function (event) {
            //counts the number of selected check-boxes
            // if count=0 hide div
            if ($('.similar-check:checked').size() == 0){
                alert('test');
            }
        });*/

    });
</script>