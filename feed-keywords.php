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
                        Feed Keywords
                    </div>
                    <div class="desc">
                        Keywords for search on public feed
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <a href="">System</a> / <span>Feed Keywords</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row no-gutters">
            <div class="content-panel col-md-12">
                <div class="content-inner">
                    <div class="content-area">

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <button type="" data-toggle="modal" data-target="#addKeyword" class="btn btn-primary">Add Keyword</button>

                                <div class="float-sm-right font12 mt-2">
                                    Your daily feed search limit for each network (Twitter) is: 1000
                                </div>
                            </div>
                        </div>

                        <!-- Add Modal -->
                        <div class="modal fade" id="addKeyword" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Add Keyword</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <p>Define new keyword</p>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Keyword</label>
                                                    <input type="text" class="form-control" id="" placeholder="Keyword">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group text-right">
                                                    <button type="submit" class="btn btn-primary">Create</button>
                                                    <button type="submit" class="btn btn-secondary">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                        <?php include 'includes/grid.php'; ?>

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

    });
</script>