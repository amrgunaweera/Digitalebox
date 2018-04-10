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
                        Manage System Users
                    </div>
                    <div class="desc">
                        Manage users who are using this system
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <a href="">System</a> / <span>Manage System Users</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row no-gutters">
            <div class="content-panel col-md-12">
                <div class="content-inner">
                    <div class="content-area">

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <button type="" onclick="window.location='add-user.php';" class="btn btn-primary">Add User</button>
                            </div>
                        </div>

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
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" placeholder="Username">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Email">
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
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">User Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>
                                    <th class="text-center actions saved-search" scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td>Rebecca</td>
                                    <td>Thron</td>
                                    <td>Demo</td>
                                    <td>manoj@keeneye.solutions</td>
                                    <td>politician</td>
                                    <td class="text-center">
                                        <a href="edit-user.php" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                        <a href="" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Regional</td>
                                    <td>Admin</td>
                                    <td>region@123</td>
                                    <td>regional@gmail.com</td>
                                    <td>teamLead</td>
                                    <td class="text-center">
                                        <a href="edit-user.php" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                        <a href="" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>James</td>
                                    <td>Adam</td>
                                    <td>jadam</td>
                                    <td>jadam@gmail.com</td>
                                    <td>Supporter</td>
                                    <td class="text-center">
                                        <a href="edit-user.php" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                        <a href="" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
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
        <!--<div class="modal fade" id="addKeyword" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add Form</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>


                    <div class="modal-body">
                        <p>Define new Form</p>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" class="form-control" id="" placeholder="Title">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Keywords</label>
                                    <select data-placeholder="Keywords" class="form-control chosen-select" multiple>
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
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Redirect URL</label>
                                    <input type="text" class="form-control" id="" placeholder="http://www.example.com">
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Behaviour</label>
                                    <select class="form-control res-type">
                                        <option>- Select -</option>
                                        <option value="1">Manual</option>
                                        <option value="2">Auto</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <select class="form-control res-type">
                                        <option>- Select -</option>
                                        <option>Active</option>
                                        <option>Inactive</option>
                                        <option>Deleted</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group text-right">
                                    <button type="submit" class="btn btn-primary">Create</button>
                                    <button type="submit" class="btn btn-secondary">Cancel</button>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

-->

        <?php include 'includes/app-footer.php'; ?>
    </div>

</div>

<?php include 'includes/footer.php'; ?>

<script>
    $(document).ready(function () {
        $('#created-on').datetimepicker({
            format: 'YYYY-MM-DD'
        });

        $(".chosen-select").chosen();
    });
</script>