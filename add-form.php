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
                        Add Form
                    </div>
                    <div class="desc">
                        Define new Form
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <a href="">System</a> / <a href="">Form Builder</a> / <span>Add Form</span>
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
                                        Form Details
                                    </div>
                                </div>

                                <form>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" class="form-control" id="title" placeholder="Title">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Form Fields</label>
                                                <select data-placeholder="Keywords" class="form-control chosen-select" multiple>
                                                    <option>First Name</option>
                                                    <option>Last Name</option>
                                                    <option>Email</option>
                                                    <option>Contact No</option>
                                                    <option>Gender</option>
                                                    <option>Date of birth</option>
                                                    <option>Street Address</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Redirect URL</label>
                                                <input type="text" class="form-control" id="" placeholder="http://www.example.com">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
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
                                        <div class="col-md-6">
                                            <div class="form-group mt-3">
                                                <label for="form-check" class="d-block">Options</label>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox1" value="option1">
                                                    <label class="form-check-label" for="inlineCheckbox1">Enabled</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox2" value="option2">
                                                    <label class="form-check-label" for="inlineCheckbox2">Notify Admin</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Template</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>- Select -</option>
                                                    <option>Survey</option>
                                                    <option>Register</option>
                                                </select>
                                                <div class="form-feild-info">Subscriber will receive an email using the selected email template.</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-12 col-xl-5">
                                                        <div class="switch switch-sm">
                                                            <input type="checkbox" class="switch" id="switch-sm">
                                                            <label for="switch-sm">Enable Payment</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-xl-7 add-form-payments">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox3" value="option3">
                                                            <label class="form-check-label" for="inlineCheckbox3">Membership Payment</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox4" value="option4">
                                                            <label class="form-check-label" for="inlineCheckbox4">Donation Payment</label>
                                                        </div>
                                                    </div>
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