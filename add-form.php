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
                            <div class="col-md-6">

                                <div class="content-panel-sub">
                                    <div class="panel-head">
                                        Form Details
                                    </div>
                                </div>

                                <form>
                                    <div class="">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control" id="title" placeholder="Title">
                                        </div>
                                        <div class="form-group">
                                            <label>Form Fields</label>
                                            <select data-placeholder="Keywords" class="form-control chosen-select" multiple>
                                                <option value=""></option>
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
                                                <option value=""></option>
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
                                            <label for="exampleFormControlSelect1">Template</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>- Select -</option>
                                                <option>Survey</option>
                                                <option>Register</option>
                                            </select>
                                            <div class="form-feild-info">Subscriber will receive an email using the selected email template.</div>
                                        </div>
                                        <div class="form-group mt-3">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox1" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1">Enabled</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox2" value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">Notify Admin</label>
                                            </div>
                                        </div>
                                        


                                        <div class="form-group col-md-4">
                                            <label for="created-on">Created on</label>
                                            <div class="input-group date" id="created-on" data-target-input="nearest">
                                                <input type="text" class="form-control datetimepicker-input" data-target="#created-on" placeholder="1990-01-01"/>
                                                <div class="input-group-append" data-target="#created-on" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row text-left text-md-right">
                                        <div class="form-group col-md-12">
                                            <button type="submit" class="btn btn-primary">Search</button>
                                            <!--<button type="button" onclick="location.href='add-keywords.php'" class="btn btn-secondary">Add Keyword</button>-->
                                        </div>
                                    </div>

                                </form>

                            </div>
                            <div class="col-md-6">
                                <div class="content-panel-sub">
                                    <div class="panel-head">
                                        Form Preview
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- Add Modal -->
        <div class="modal fade" id="addKeyword" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                        <option value=""></option>
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