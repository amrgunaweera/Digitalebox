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
                        Broadcast
                    </div>
                    <div class="desc">
                        Publish message Facebook/Twitter/LinkedIn
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <a href="">People</a> / <span>Broadcast</span>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="row no-gutters">

                <div class="content-panel col-md-12">

                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link" href="social-activities.php">Social Activities</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="">Broadcast</a>
                        </li>
                    </ul>
                    <div class="content-inner">
                        <div class="content-area">

                            <div class="row">
                                <div class="col-md-12 text-left">
                                    <button type="submit" class="btn btn-primary" onclick="window.location='create-broadcast-messages.php';">Create Broadcast</button>
                                    <button type="submit" class="btn btn-secondary" title="Authenticate Social Networks">Authenticate</button>
                                </div>
                            </div>

                            <div class="content-panel-sub mt-4">
                                <div class="panel-head">
                                    Search by
                                </div>
                            </div>

                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label for="from-date">Start Date</label>
                                        <div class="input-group date" id="from-date" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#from-date" placeholder="1990-01-01"/>
                                            <div class="input-group-append" data-target="#from-date" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="to-date">End Date</label>
                                        <div class="input-group date" id="to-date" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#to-date" placeholder="1990-01-01"/>
                                            <div class="input-group-append" data-target="#to-date" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="" class="d-none d-md-block">&nbsp;</label>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Search</button>
                                        </div>
                                    </div>
                                </div>

                            </form>

                            <?php include 'includes/grid.php'; ?>

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

        $('#from-date').datetimepicker({
            /*debug:true*/
            format: 'YYYY-MM-DD HH:mm'
        });

        $('#to-date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm'
        });

        $(".chosen-select").chosen();

    });
</script>