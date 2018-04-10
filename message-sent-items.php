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
                        Message Box - Sent Items
                    </div>
                    <div class="desc">
                        Messages sent by you
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                    <a href="">Home</a> / <a href="">Communication</a> / <a href="">Message Box</a> / <span>Sent Items</span>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="row no-gutters">

                <div class="content-panel col-md-12">

                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link" href="message-box-inbox.php">Message Inbox</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="message-compose.php">Compose</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="">Sent Items</a>
                        </li>
                    </ul>
                    <div class="content-inner">
                        <div class="content-area">

                            <div class="content-panel-sub">
                                <div class="panel-head">
                                    Search by
                                </div>
                            </div>

                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label for="from-date">From Date</label>
                                        <div class="input-group date" id="from-date" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#from-date" placeholder="1990-01-01"/>
                                            <div class="input-group-append" data-target="#from-date" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="to-date">To Date</label>
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