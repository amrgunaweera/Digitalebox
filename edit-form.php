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
                        Edit Form
                    </div>
                    <div class="desc">
                        Update Form
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <a href="">System</a> / <a href="">Form Builder</a> / <span>Update Form</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row no-gutters">
            <div class="content-panel col-md-12">
                <div class="content-inner">
                    <div class="content-area">

                        <form>
                            <div class="row">
                                <div class="col-md-8 col-lg-7 col-xl-8">

                                    <div class="content-panel-sub">
                                        <div class="panel-head">
                                            Form Details
                                        </div>
                                    </div>


                                        <div class="">
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" class="form-control" id="title" placeholder="Title">
                                            </div>
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
                                            <div class="form-group">
                                                <label>Redirect URL</label>
                                                <input type="text" class="form-control" id="" placeholder="http://www.example.com">
                                            </div>
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
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Template</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>- Select -</option>
                                                    <option>Survey</option>
                                                    <option>Register</option>
                                                </select>
                                                <div class="form-feild-info">Subscriber will receive an email using the selected email template.</div>
                                            </div>
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
                                <div class="col-md-4 col-lg-5 col-xl-4">
                                    <div class="content-panel-sub">
                                        <div class="panel-head">
                                            Form Preview
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="form-group mt-3">
                                                    <a data-toggle="modal" data-target="#showCode" class="btn btn-primary btn-sm">Show HTML Code</a>
                                                </div>

                                                <div class="form-group">
                                                    <iframe class="form-preview" src="add-form-preview.php" height="100%" width="100%"></iframe>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-row text-left text-md-right">
                                        <div class="form-group col-md-12">
                                            <button type="submit" class="btn btn-primary">Create</button>
                                            <button type="button" class="btn btn-secondary">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>

        <!-- Add Modal -->
        <div class="modal fade" id="showCode" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered model-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">HTML Code</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>


                    <div class="modal-body">
                        <textarea class="form-control" rows="10" placeholder="Description">
                            <form>
                                <div class="">
                                    <div class="form-group">
                                        <label for="fname">First Name</label>
                                        <input type="text" class="form-control" id="fname" placeholder="First Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="lname">Last Name</label>
                                        <input type="text" class="form-control" id="lname" placeholder="Last Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input type="email" class="form-control" id="email" placeholder="Email Address">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Mobile Number</label>
                                        <input type="tel" class="form-control" id="phone" placeholder="Mobile Number">
                                    </div>
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <select class="form-control">
                                            <option>- Select -</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="dob">Date of birth</label>
                                        <div class="input-group date" id="dob" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#dob" placeholder="1990-01-01"/>
                                            <div class="input-group-append" data-target="#dob" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Street Address</label>
                                        <input type="text" class="form-control" id="" placeholder="Street Address">
                                    </div>
                                    <div class="form-group">
                                        <label>Postal Code</label>
                                        <input type="text" class="form-control" id="" placeholder="Postal Code">
                                    </div>
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" class="form-control" id="" placeholder="City">
                                    </div>
                                    <div class="form-group">
                                        <label>Country</label>
                                        <select class="form-control">
                                            <option value="">- Select -</option>
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

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>

                                </div>
                            </form>
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
            if ($(this).is(':checked')) {
                $('.add-form-payments').show();
            }else{
                $('.add-form-payments').hide();
            }
        });
    });
</script>