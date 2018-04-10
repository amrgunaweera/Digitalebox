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
                        Add User
                    </div>
                    <div class="desc">
                        Add new user to the system
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <a href="">System</a> / <a href="">Manage System Users</a> / <span>Add User</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row no-gutters">
            <div class="content-panel col-md-12">
                <div class="content-inner">
                    <div class="content-area">

                        <div class="row">
                            <div class="col-md-12">

                                <div class="content-panel-sub">
                                    <div class="panel-head">
                                        User Details
                                    </div>
                                </div>

                                <form>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="fname">First Name</label>
                                                <input type="text" class="form-control" id="fname" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="lname">Last Name</label>
                                                <input type="text" class="form-control" id="lname" placeholder="Last Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="username">Username</label>
                                                <input type="text" class="form-control" id="username" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group show_hide_password">
                                                <label for="password">Password</label>
                                                <div class="input-group">
                                                    <input class="form-control" type="password" id="password" placeholder="Password">
                                                    <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group show_hide_password">
                                                <label for="confirmpass">Confirm Password</label>
                                                <div class="input-group">
                                                    <input class="form-control" type="password" id="confirmpass" placeholder="Confirm Password">
                                                    <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Role</label>
                                                <select class="form-control" id="role">
                                                    <option>- Select -</option>
                                                    <option>My Role</option>
                                                    <option>Politician</option>
                                                    <option>PoliticianAdmin</option>
                                                    <option>RegionalAdmin</option>
                                                    <option>Supporter</option>
                                                    <option>SupporterWithoutTeam</option>
                                                    <option>TeamLead</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-row text-left text-md-right">
                                        <div class="form-group col-md-12">
                                            <button type="submit" class="btn btn-primary">Create</button>
                                            <button type="button" class="btn btn-secondary">Cancel</button>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- Add Modal -->
        <div class="modal fade" id="showCode" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add Form</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>


                    <div class="modal-body">
                        <textarea class="form-control" placeholder="Description">

                        </textarea>

                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary">Copy Code</button>
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
        $('#created-on').datetimepicker({
            format: 'YYYY-MM-DD'
        });

        $(".chosen-select").chosen();

        $('#switch-sm').change(function(){
           console.log('yes');

            if ($(this).is(':checked')) {
                $('.add-form-payments').show();
            }else{
                $('.add-form-payments').hide();
            }
        });
    });
</script>