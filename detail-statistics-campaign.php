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
                        Detail statistics of the campaign
                    </div>
                    <div class="desc">
                        Status of each email (bounced, opened, spam, sent)
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <a href="">Communication</a> / <a href="">Sent Campaigns</a> / <span>Detail statistics of the campaign</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row no-gutters">
            <div class="content-panel col-md-12">
                <div class="content-inner">
                    <div class="content-area">

                        <div class="content-panel-sub">
                            <div class="panel-head">
                                Progress
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mb-5">
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-dark" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-1">
                                <span>Sent <span class="badge badge-pill badge-success">15</span></span>
                            </div>
                            <div class="col-md-1">
                                <span>Clicked <span class="badge badge-pill badge-success">15</span></span>
                            </div>
                            <div class="col-md-1">
                                <span>Openned <span class="badge badge-pill badge-success">15</span></span>
                            </div>
                            <div class="col-md-1">
                                <span>Bounced <span class="badge badge-pill badge-success">5</span></span>
                            </div>

                            <div class="col-md-1">
                                <span>Blocked <span class="badge badge-pill badge-success">5</span></span>
                            </div>
                            <div class="col-md-1">
                                <span>Spam <span class="badge badge-pill badge-success">5</span></span>
                            </div>
                            <div class="col-md-1">
                                <span>Failed <span class="badge badge-pill badge-success">5</span></span>
                            </div>
                            <div class="col-md-1">
                                <span>Unsubs <span class="badge badge-pill badge-success">5</span></span>
                            </div>
                        </div>

                        <div class="content-panel-sub mt-5">
                            <div class="panel-head">
                                Search by
                            </div>
                        </div>

                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="exampleFormControlSelect1">Status</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>- Select -</option>
                                        <option>Pending</option>
                                        <option>In Progress</option>
                                        <option>Finished</option>
                                        <option>Stopped</option>
                                        <option>AB Test Stopped</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="from-date">Name</label>
                                    <div class="input-group" id="">
                                        <input type="text" class="form-control"  placeholder="Name"/>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="from-date">Email</label>
                                    <div class="input-group" id="">
                                        <input type="email" class="form-control"  placeholder="Email Address"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row text-left text-md-right">
                                <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                    <button type="button" class="btn btn-secondary">Export</button>
                                </div>
                            </div>

                        </form>

                        <?php include 'includes/grid.php'; ?>

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