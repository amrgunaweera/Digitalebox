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
                        Custom Fields
                    </div>
                    <div class="desc">
                        Custom Fields of DigitaleBox
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <a href="">System</a> / <span>Custom Fields</span>
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
                                <button type="" onclick="window.location='add-custom-field.php';" class="btn btn-primary">Add Custom Field</button>
                            </div>
                        </div>

                        <div class="content-panel-sub">
                            <div class="panel-head">
                                Search by
                            </div>
                        </div>

                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="title">Field Name</label>
                                    <input type="text" class="form-control" id="field-name" placeholder="Field Name">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="label">Label</label>
                                    <input type="text" class="form-control" id="label" placeholder="Label">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="related-area">Related Area</label>
                                    <select class="form-control" id="related-area">
                                        <option>- Select -</option>
                                        <option>People</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="display">Display</label>
                                    <select class="form-control" id="display">
                                        <option>- Select -</option>
                                        <option>Checkbox</option>
                                        <option>Checkbox List</option>
                                        <option>Date</option>
                                        <option>Decimal</option>
                                        <option>Dropdown List</option>
                                        <option>Email Address</option>
                                        <option>Number</option>
                                        <option>Option List</option>
                                        <option>Text</option>
                                        <option>Text Area</option>
                                        <option>URL</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="default-val">Default Value</label>
                                    <input type="text" class="form-control" id="default-val" placeholder="Default Value">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="enabled">Enabled</label>
                                    <select class="form-control" id="enabled">
                                        <option>- Select -</option>
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select>
                                </div>

                            </div>
                            <div class="form-row text-left text-md-right">
                                <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                    <!--<button type="button" onclick="location.href='add-keywords.php'" class="btn btn-secondary">Add Keyword</button>-->
                                </div>
                            </div>

                        </form>

                        <?php include 'includes/grid.php'; ?>

                    </div>
                </div>

            </div>
        </div>

        <!-- Add Modal -->
        <!--<div class="modal fade" id="addKeyword" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add Form</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>


                    <div class="modal-body">
                        <p>Define new Form</p>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" class="form-control" id="" placeholder="Title">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Keywords</label>
                                    <select data-placeholder="Keywords" class="form-control chosen-select" multiple>
                                        <option value="United States">United States</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Aland Islands">Aland Islands</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antarctica">Antarctica</option>
                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Redirect URL</label>
                                    <input type="text" class="form-control" id="" placeholder="http://www.example.com">
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Behaviour</label>
                                    <select class="form-control res-type">
                                        <option>- Select -</option>
                                        <option value="1">Manual</option>
                                        <option value="2">Auto</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <select class="form-control res-type">
                                        <option>- Select -</option>
                                        <option>Active</option>
                                        <option>Inactive</option>
                                        <option>Deleted</option>
                                    </select>
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

-->

        <?php include 'includes/app-footer.php'; ?>
    </div>

</div>

<?php include 'includes/footer.php'; ?>

<script>
    $(document).ready(function () {
        $('#created-on').datetimepicker({
            format: 'YYYY-MM-DD'
        });

        $(".chosen-select").chosen();
    });
</script>