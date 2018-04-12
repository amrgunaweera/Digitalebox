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
                        Add Custom Field
                    </div>
                    <div class="desc">
                        Define new Custom Field
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <a href="">System</a> / <a href="">Custom Fields</a> / <span>Add Custom Field</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row no-gutters">
            <div class="content-panel col-md-12">
                <div class="content-inner">
                    <div class="content-area">

                        <div class="row">
                            <div class="col-md-12">

                                <div class="content-panel-sub">
                                    <div class="panel-head">
                                        Custom Field Details
                                    </div>
                                </div>

                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="label">Label</label>
                                                <input type="text" class="form-control" id="label" placeholder="Label">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-name">Field Name</label>
                                                <input type="text" class="form-control" id="field-name" placeholder="Field Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Related Areas</label>
                                                <select class="form-control">
                                                    <option value="">- Select -</option>
                                                    <option>People</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Custom Type</label>
                                                <select class="form-control">
                                                    <option value="">- Select -</option>
                                                    <option>Related Areas First</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="default-value">Default Value</label>
                                                <input type="text" class="form-control" id="default-value" placeholder="Default Value">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="sort-order">Sort Order</label>
                                                <input type="number" class="form-control" id="sort-order" placeholder="Sort Order">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mt-3">
                                                <label for="form-check" class="d-block">Display On</label>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox3" value="option3">
                                                    <label class="form-check-label" for="inlineCheckbox3">Volunteer Sign Up</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox4" value="option4">
                                                    <label class="form-check-label" for="inlineCheckbox4">People Bulk Insert</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox5" value="option5">
                                                    <label class="form-check-label" for="inlineCheckbox5">People Advanced Search</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox6" value="option6">
                                                    <label class="form-check-label" for="inlineCheckbox6">Form Builder</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mt-3">
                                                <label for="form-check" class="d-block">Options</label>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox1" value="option1">
                                                    <label class="form-check-label" for="inlineCheckbox1">Enabled</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox2" value="option2">
                                                    <label class="form-check-label" for="inlineCheckbox2">Required</label>
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

                                </form>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- Add Modal -->
        <div class="modal fade" id="showCode" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add Form</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>


                    <div class="modal-body">
                        <textarea class="form-control" placeholder="Description">

                        </textarea>

                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary">Copy Code</button>
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
        $('#created-on').datetimepicker({
            format: 'YYYY-MM-DD'
        });

        $(".chosen-select").chosen();

        $('#switch-sm').change(function(){
           console.log('yes');

            if ($(this).is(':checked')) {
                $('.add-form-payments').show();
            }else{
                $('.add-form-payments').hide();
            }
        });
    });
</script>