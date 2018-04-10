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
                        Manage Roles
                    </div>
                    <div class="desc">
                        Manage system roles
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <a href="">System</a> / <span>Manage Roles</span>
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
                                <button type="" onclick="window.location='create-role.php';" class="btn btn-primary">Create Role</button>
                            </div>
                        </div>

                        <div class="text-right results-count mt-4">
                            Displaying 1-10 of 2420 results
                        </div>

                        <div class="table-wrap">

                            <table class="table table-hover table-striped table-custom">
                                <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Type</th>
                                    <th class="text-center actions saved-search" scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td>My Role</td>
                                    <td>My Role</td>
                                    <td><span class="badge badge-primary">User Defined</span></td>
                                    <td class="text-center">
                                        <a href="" data-toggle="modal" data-target="#viewDetails" title="View Details"><i class="fa fa-eye fa-lg"></i></a>
                                        <a href="edit-role.php" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                        <a href="" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>teamLead</td>
                                    <td>Role for team leaders</td>
                                    <td><span class="badge badge-secondary">System Default</span></td>
                                    <td class="text-center">
                                        <a href="" data-toggle="modal" data-target="#viewDetails" title="View Details"><i class="fa fa-eye fa-lg"></i></a>
                                        <a href="edit-role.php" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                        <a href="" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Supporter</td>
                                    <td>Role for supporters</td>
                                    <td><span class="badge badge-secondary">System Default</span></td>
                                    <td class="text-center">
                                        <a href="" data-toggle="modal" data-target="#viewDetails" title="View Details"><i class="fa fa-eye fa-lg"></i></a>
                                        <a href="edit-role.php" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                        <a href="" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Politician</td>
                                    <td>Political Role</td>
                                    <td><span class="badge badge-secondary">System Default</span></td>
                                    <td class="text-center">
                                        <a href="" data-toggle="modal" data-target="#viewDetails" title="View Details"><i class="fa fa-eye fa-lg"></i></a>
                                        <a href="edit-role.php" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                        <a href="" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>SuperAdmin</td>
                                    <td>Super Administrator role</td>
                                    <td><span class="badge badge-secondary">System Default</span></td>
                                    <td class="text-center">
                                        <a href="" data-toggle="modal" data-target="#viewDetails" title="View Details"><i class="fa fa-eye fa-lg"></i></a>
                                        <a href="edit-role.php" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                        <a href="" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Regional Admin</td>
                                    <td>admin is based only for his zip code</td>
                                    <td><span class="badge badge-primary">User Defined</span></td>
                                    <td class="text-center">
                                        <a href="" data-toggle="modal" data-target="#viewDetails" title="View Details"><i class="fa fa-eye fa-lg"></i></a>
                                        <a href="edit-role.php" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                        <a href="" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
                                    </td>
                                </tr>

                                </tbody>
                            </table>

                            <!-- View Modal -->
                            <div class="modal fade" id="viewDetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Role Details</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">
                                            <p>View specific role details</p>

                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="table-wrap">
                                                        <table class="table table-striped table-custom">
                                                            <tr>
                                                                <td><strong>Name</strong></td>
                                                                <td>My Role</td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Description</strong></td>
                                                                <td>Basic User</td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Permissions</strong></td>
                                                                <td>
                                                                    <div>Manage Campaigns</div>
                                                                    <div>Delete Campaign</div>
                                                                    <div>Resume Campaign</div>
                                                                    <div>Stop Campaign</div>
                                                                    <div>View Campaign Progress</div>
                                                                    <div>Email Statistics</div>
                                                                    <div>SMS Statistics</div>
                                                                    <div>Manage Roles</div>
                                                                    <div>Create Role</div>
                                                                    <div>Delete Role</div>
                                                                    <div>Update Role</div>
                                                                    <div>View Role</div>
                                                                    <div>Manage System Users</div>
                                                                    <div>Change Password</div>
                                                                    <div>Create User</div>
                                                                    <div>Delete User</div>
                                                                    <div>My Account</div>
                                                                    <div>Update User</div>
                                                                    <div>View User</div>
                                                                </td>
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

        $('#end-date').datetimepicker({
            format: 'YYYY-MM-DD'
        });
    });
</script>