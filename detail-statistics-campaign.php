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
                            <div class="col-md-12 mb-4">
                                <div class="progress">
                                    <div class="progress-bar bg-not-opened" title="Not Opened 30%" data-toggle="tooltip" role="progressbar" style="width: 30%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-clicked" title="Clicked 10%" data-toggle="tooltip" role="progressbar" style="width: 10%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-opened" title="Opened 20%" data-toggle="tooltip" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-bounced" title="Bounced 5%" data-toggle="tooltip" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-blocked" title="Blockd 10%" data-toggle="tooltip" role="progressbar" style="width: 10%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-spam" title="Spam 10%" data-toggle="tooltip" role="progressbar" style="width: 10%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-failed" title="Failed 5%" data-toggle="tooltip" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-unsubs" title="Unsubs 10%" data-toggle="tooltip" role="progressbar" style="width: 10%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="progress-keys">
                                    <span>Not Opened <span class="badge badge-pill bg-not-opened">60</span></span>
                                </div>
                                <div class="progress-keys">
                                    <span>Clicked <span class="badge badge-pill bg-clicked">20</span></span>
                                </div>
                                <div class="progress-keys">
                                    <span>Openned <span class="badge badge-pill bg-opened">40</span></span>
                                </div>
                                <div class="progress-keys">
                                    <span>Bounced <span class="badge badge-pill bg-bounced">10</span></span>
                                </div>

                                <div class="progress-keys">
                                    <span>Blocked <span class="badge badge-pill bg-blocked">20</span></span>
                                </div>
                                <div class="progress-keys">
                                    <span>Spam <span class="badge badge-pill bg-spam">20</span></span>
                                </div>
                                <div class="progress-keys">
                                    <span>Failed <span class="badge badge-pill bg-failed">10</span></span>
                                </div>
                                <div class="progress-keys">
                                    <span>Unsubs <span class="badge badge-pill bg-unsubs">20</span></span>
                                </div>
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