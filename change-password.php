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
                        Change Password
                    </div>
                    <div class="desc">
                        Change your account password
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <span>Change Password</span>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="row no-gutters">
                <div class="content-panel col-md-12">
                    <div class="content-inner">
                        <!--<div class="panel-head">Enter New Password</div>-->
                        <div class="content-area pt-4">

                            <form>

                                <div class="form-row">
                                    <div class="form-group col-md-6 show_hide_password">
                                        <label for="opass">Old Password</label>
                                        <div class="input-group">
                                            <input class="form-control" type="password" id="opass" placeholder="Old Password">
                                            <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6 show_hide_password">
                                        <label for="npass">New Password</label>
                                        <div class="input-group">
                                            <input class="form-control" type="password" id="npass" placeholder="New Password">
                                            <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 show_hide_password">
                                        <label for="cpass">Confirm New Password</label>
                                        <div class="input-group">
                                            <input class="form-control" type="password" id="cpass" placeholder="Confirm New Password">
                                            <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="text-left text-md-right">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>

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
        $('#dob1').datetimepicker({
            format: 'YYYY-MM-DD'
        });

        $(".chosen-select").chosen();
    });
</script>