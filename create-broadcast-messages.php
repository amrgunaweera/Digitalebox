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
                        Create Broadcast Messages
                    </div>
                    <div class="desc">
                        Create & Publish new message on Facebook/ Twitter/ LinkedIn
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <a href="">People</a> / <a href="">Broadcast Messages</a> / <span>Create Broadcast Messages</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row no-gutters">
            <div class="content-panel col-md-12">
                <div class="content-inner">
                    <div class="content-area">

                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="from-date">Publish Time</label>
                                    <div class="input-group date" id="publish-time" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#from-date" placeholder="1990-01-01 00:00:00"/>
                                        <div class="input-group-append" data-target="#publish-time" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>

                        <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3">
                                    <div class="card-header">Facebook Page Post <i class="fa fa-facebook fb-icon float-right"></i></div>
                                    <div class="card-body">
                                        <form>
                                            <textarea rows="10" class="form-control"></textarea>
                                            <div class="row mt-2">
                                                <div class="col-6">
                                                    [ 500 ]
                                                </div>
                                                <div class="col-6 text-right">
                                                    <a href="" class="btn btn-secondary btn-sm" title="Shorten links in the message"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-md-12">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend d-none d-sm-block">
                                                            <span class="input-group-text"><i class="fa fa-photo"></i></span>
                                                        </div>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                            <label class="custom-file-label" for="inputGroupFile01">Choose image file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3">
                                    <div class="card-header">Facebook Profile Post <i class="fa fa-facebook fb-icon float-right"></i></div>
                                    <div class="card-body">
                                        <form>
                                            <textarea rows="10" class="form-control"></textarea>
                                            <div class="row mt-2">
                                                <div class="col-6">
                                                    [ 500 ]
                                                </div>
                                                <div class="col-6 text-right">
                                                    <a href="" class="btn btn-secondary btn-sm" title="Shorten links in the message"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-md-12">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend d-none d-sm-block">
                                                            <span class="input-group-text"><i class="fa fa-photo"></i></span>
                                                        </div>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                            <label class="custom-file-label" for="inputGroupFile01">Choose image file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3">
                                    <div class="card-header">LinkedIn Post <i class="fa fa-linkedin in-icon float-right"></i></div>
                                    <div class="card-body">
                                        <form>
                                            <textarea rows="10" class="form-control"></textarea>
                                            <div class="row mt-2">
                                                <div class="col-6">
                                                    [ 700 ]
                                                </div>
                                                <div class="col-6 text-right">
                                                    <a href="" class="btn btn-secondary btn-sm" title="Shorten links in the message"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-md-12">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend d-none d-sm-block">
                                                            <span class="input-group-text"><i class="fa fa-photo"></i></span>
                                                        </div>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                            <label class="custom-file-label" for="inputGroupFile01">Choose image file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3">
                                    <div class="card-header">LinkedIn Page Post <i class="fa fa-linkedin in-icon float-right"></i></div>
                                    <div class="card-body">
                                        <form>
                                            <textarea rows="10" class="form-control"></textarea>
                                            <div class="row mt-2">
                                                <div class="col-6">
                                                    [ 700 ]
                                                </div>
                                                <div class="col-6 text-right">
                                                    <a href="" class="btn btn-secondary btn-sm" title="Shorten links in the message"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-md-12">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend d-none d-sm-block">
                                                            <span class="input-group-text"><i class="fa fa-photo"></i></span>
                                                        </div>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                            <label class="custom-file-label" for="inputGroupFile01">Choose image file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3">
                                    <div class="card-header">Twitter Post <i class="fa fa-twitter tw-icon float-right"></i></div>
                                    <div class="card-body">
                                        <form>
                                            <textarea rows="10" class="form-control"></textarea>
                                            <div class="row mt-2">
                                                <div class="col-6">
                                                    [ 140 ]
                                                </div>
                                                <div class="col-6 text-right">
                                                    <a href="" class="btn btn-secondary btn-sm" title="Shorten links in the message"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-md-12">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend d-none d-sm-block">
                                                            <span class="input-group-text"><i class="fa fa-photo"></i></span>
                                                        </div>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                            <label class="custom-file-label" for="inputGroupFile01">Choose image file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row text-left text-md-right">
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary">Create</button>
                                <button type="button" class="btn btn-secondary">Cancel</button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
    <?php include 'includes/app-footer.php'; ?>

</div>

<?php include 'includes/footer.php'; ?>

<script>
    $(document).ready(function () {
        $('#publish-time').datetimepicker({
            format: 'YYYY-MM-DD hh:mm'
        });
    });
</script>