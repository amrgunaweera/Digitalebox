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
                        Bulk Edit
                    </div>
                    <div class="desc">
                        Preview for Bulk Edit
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <a href="">People</a> / <span>Bulk Edit</span>
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
                                <p class="alert alert-primary">You have chosen <strong>3976</strong> records to bulk edit. Please fill the only values you need to edit and leave others empty.</p>
                            </div>
                        </div>

                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="zip-code">Zip Code</label>
                                        <input type="text" class="form-control" id="zip-code" placeholder="Zip Code">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Gender</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>- Select -</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Unknown</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control" id="city" placeholder="City">
                                    </div>
                                </div>
                                <div class="col-md-6">
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
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="notes">Notes</label>
                                        <input type="text" class="form-control" id="notes" placeholder="Notes">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select class="form-control">
                                            <option value="">- Select -</option>
                                            <option>Supporter</option>
                                            <option>Prospect</option>
                                            <option>Non-Supporter</option>
                                            <option>Unknown</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Keywords</label>
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
                                <div class="col-md-6">
                                    <div class="form-group mt-3">
                                        <label for="form-check" class="d-block">Custom checkbox</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox1" value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1">Checkbox 1</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox2" value="option2">
                                            <label class="form-check-label" for="inlineCheckbox2">Checkbox 2</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Custom Multi select</label>
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
                                        <label>Custom text area</label>
                                        <textarea class="form-control" id="" placeholder="Description"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mt-3">
                                        <label for="form-check" class="d-block">Custom option list</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input custom-icheck" type="radio" name="options" id="inlineCheckbox3" value="option3" checked>
                                            <label class="form-check-label" for="inlineCheckbox3">Option 1</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input custom-icheck" type="radio" name="options" id="inlineCheckbox4" value="option4">
                                            <label class="form-check-label" for="inlineCheckbox4">Option 2</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address">Date of Birth</label>
                                        <div class="input-group date" id="dob1" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#dob1" placeholder="1990-00-00"/>
                                            <div class="input-group-append" data-target="#dob1" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-row text-left text-md-right">
                                        <div class="form-group col-md-12">
                                            <button type="submit" class="btn btn-primary">Save</button>
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



        <?php include 'includes/app-footer.php'; ?>
    </div>

</div>

<?php include 'includes/footer.php'; ?>

<script>
    $(document).ready(function () {
        $('#dob1').datetimepicker({
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