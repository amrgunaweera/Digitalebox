<?php include 'includes/header.php'; ?>

<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>tinymce.init({ selector:'.text-editor' });</script>

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
                        Portal Settings - Texts
                    </div>
                    <div class="desc">
                        Change portal texts
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <a href="">System</a> / <a href="">Portal Settings</a> / <span>Texts</span>
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
                            <a class="nav-link active" href="portal-settings-texts.php">Texts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="portal-settings-themes.php">Themes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="portal-settings-background.php">Background</a>
                        </li>
                    </ul>
                    <div class="content-inner">
                        <div class="content-area">

                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="header-text">Header Text</label>
                                        <input type="text" id="header-text" class="form-control" placeholder="Header Text" value="Digitalebox">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="from-date">About Text</label>
                                        <textarea class="form-control text-editor" placeholder="Description"></textarea>
                                    </div>
                                </div>
                                <div class="form-row text-left text-md-right">
                                    <div class="form-group col-md-12">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>

                            </form>

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
                        <h5 class="modal-title" id="exampleModalLongTitle">Image View</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body resource-details">
                        <div class="text-center">
                            <img src="http://staging.moncenis.com/resources/24/ur44l.jpg" alt="" class="img-thumbnail">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit Modal -->
        <div class="modal fade" id="editDetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Change Image</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>


                    <div class="modal-body resource-details">
                        <div class="card">
                            <div class="card-body">



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

    });
</script>