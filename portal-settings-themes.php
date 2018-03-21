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
                        Portal Settings - Themes
                    </div>
                    <div class="desc">
                        Change your theme
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <a href="">System</a> / <a href="">Portal Settings</a> / <span>Themes</span>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="row no-gutters">

                <div class="content-panel col-md-12">

                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link" href="portal-settings-images.php">Images</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="portal-settings-texts.php">Texts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="portal-settings-themes.php">Themes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="portal-settings-background.php">Background</a>
                        </li>
                    </ul>
                    <div class="content-inner">
                        <div class="content-area">

                            <div class="content-panel-sub">
                                <div class="panel-head">
                                    Active Theme
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 col-md-4 col-xl-3 text-center mb-3">
                                    <div href="" class="resource">
                                        <a class="portal-setting-images" data-toggle="modal" data-target="#viewDetails" href=""><img src="http://staging.moncenis.com/themes/bootstrap_spacelab/img/skyblue-th.jpg" alt="" class="img-thumbnail object-fit_cover"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="content-panel-sub">
                                <div class="panel-head">
                                    Available Themes
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-sm-6 col-md-4 col-xl-3 text-center">
                                    <div class="mb-4">
                                        <a class="portal-setting-images" data-toggle="modal" data-target="#viewDetails" href=""><img src="http://staging.moncenis.com/themes/bootstrap_spacelab/img/skyblue-th.jpg" alt="" class="img-thumbnail object-fit_cover"></a>
                                        <div class="actions mt-2">
                                            <a class="btn btn-primary" href="">Activate</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-xl-3 text-center">
                                    <div class="mb-4">
                                        <a class="portal-setting-images" data-toggle="modal" data-target="#viewDetails" href=""><img src="http://staging.moncenis.com/themes/bootstrap_spacelab/img/green-tea-th.jpg" alt="" class="img-thumbnail object-fit_cover"></a>
                                        <div class="actions mt-2">
                                            <a class="btn btn-primary" href="">Activate</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-4 col-xl-3 text-center mb-3">
                                    <div class="mb-4">
                                        <a class="portal-setting-images" data-toggle="modal" data-target="#viewDetails" href=""><img src="http://staging.moncenis.com/themes/bootstrap_spacelab/img/sunset-th.jpg" alt="" class="img-thumbnail object-fit_cover"></a>
                                        <div class="actions mt-2">
                                            <a class="btn btn-primary" href="">Activate</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-xl-3 text-center">
                                    <div class="mb-4">
                                        <a class="portal-setting-images" data-toggle="modal" data-target="#viewDetails" href=""><img src="http://staging.moncenis.com/themes/bootstrap_spacelab/img/indego-th.jpg" alt="" class="img-thumbnail object-fit_cover"></a>
                                        <div class="actions mt-2">
                                            <a class="btn btn-primary" href="">Activate</a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- View Modal -->
        <div class="modal fade" id="viewDetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Theme Preview</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="text-center">
                            <img src="https://www.loggly.com/wp-content/uploads/2017/09/Screen-Shot-2017-09-28-at-4.13.35-PM.png" alt="" class="img-thumbnail">
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