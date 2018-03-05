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
                        Friend Finder
                    </div>
                    <div class="desc">
                        Find your friends and invite them to join with DigitaleBox
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <a href="">People</a> / <span>Friend Finder</span>
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
                                Invite Friends
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-12">
                                <a href="" class="btn btn-tw mr-2"><i class="fa fa-twitter"></i> Twitter</a>
                                <a href="" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-md-12">
                                <span>Invite your Twitter, Facebook friends to join with Digitalebox</span>
                            </div>
                        </div>


                        <div class="content-panel-sub">
                            <div class="panel-head">
                                Search by
                            </div>
                        </div>

                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" id="" placeholder="First Name">
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="Email Address">
                                </div>
                                <div class="form-group col-md-3">
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



        <?php include 'includes/app-footer.php'; ?>
    </div>

</div>

<?php include 'includes/footer.php'; ?>

<script>
    $(document).ready(function () {

    });
</script>