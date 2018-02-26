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
                        Add Keyword
                    </div>
                    <div class="desc">
                        Define new keyword
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <a href="">People</a> / <a href="">Manage Keywords</a> / <span>Add Keyword</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row no-gutters">
            <div class="content-panel col-md-12">
                <div class="content-area">

                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Name">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleFormControlSelect1">Behaviour</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Manual</option>
                                    <option>Auto</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleFormControlSelect1">Status</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Active</option>
                                    <option>Inactive</option>
                                    <option>Deleted</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row text-left text-md-right">
                            <div class="form-group col-md-12">
                                <button type="submit" onclick="location.href='manage-keywords.php'" class="btn btn-primary">Create</button>
                                <button type="button" onclick="location.href='manage-keywords.php'" class="btn btn-secondary">Cancel</button>
                            </div>
                        </div>
                    </form>

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