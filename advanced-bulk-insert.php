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
                        Advanced Bulk Insert
                    </div>
                    <div class="desc">
                        Import mass people data
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <a href="">People</a> / <span>Advanced Bulk Insert</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row no-gutters">
            <div class="content-panel col-md-12">
                <div class="content-inner">
                    <div class="content-area">

                        <form>
                            <div class="form-row text-left">
                                <div class="form-group col-md-12">
                                    <button type="button" onclick="location.href='add-zip-file.php'" class="btn btn-primary" >Add Zip File</button>
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