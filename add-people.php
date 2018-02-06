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
                        Add people
                    </div>
                    <div class="desc">
                        Add new person to the system
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb">
                        <a href="">Home</a> / <a href="">People</a> / <span>Add People</span>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="row no-gutters">
                <div class="content-panel col-md-12">
                    <div class="panel-head">Person Details</div>
                    <div class="content-area">

                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-xl-5">
                                    <label for="fname">First Name</label>
                                    <input type="text" class="form-control" id="fname" placeholder="First Name">
                                </div>
                                <div class="form-group col-md-6 col-xl-5 offset-xl-1 offset-0">
                                    <label for="lname">Last Name</label>
                                    <input type="text" class="form-control" id="lname" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-xl-5">
                                    <label for="email">Email Address</label>
                                    <input type="email" class="form-control" id="email" placeholder="abc@company.com">
                                </div>
                                <div class="form-group col-md-6 col-xl-5 offset-xl-1 offset-0">
                                    <label for="mobile">Mobile Number</label>
                                    <input type="tel" class="form-control" id="mobile" placeholder="+33 000 000 0000">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-xl-5">
                                    <label for="zipcode">Zip Code</label>
                                    <input type="text" class="form-control" id="zipcode" placeholder="ex: 14390">
                                </div>
                                <div class="form-group col-md-6 col-xl-5 offset-xl-1 offset-0">
                                    <label for="address">Street Address</label>
                                    <input type="text" class="form-control" id="address" placeholder="ex: 27 Avenue Pasteur">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-xl-5">
                                    <label for="gender">Gender</label>
                                    <select id="gender" class="form-control">
                                        <option selected>- Select -</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 col-xl-5 offset-xl-1 offset-0">
                                    <label for="category">Category</label>
                                    <select id="category" class="form-control">
                                        <option selected>- Select -</option>
                                        <option>Supporter</option>
                                        <option>Prospect</option>
                                        <option>Non Supporter</option>
                                        <option>Unknown</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-xl-5">
                                    <label for="city">City</label>
                                    <input type="text" class="form-control" id="city" placeholder="ex: Cabourg">
                                </div>
                                <div class="form-group col-md-6 col-xl-5 offset-xl-1 offset-0">
                                    <label for="category">Country</label>
                                    <select id="category" class="form-control">
                                        <option selected>- Select -</option>
                                        <option>France</option>
                                        <option>United States</option>
                                        <option>Italy</option>
                                        <option>United Kingdom</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-xl-5">

                                    <label for="address">Date of Birth</label>
                                    <div class="input-group date" id="dob1" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#dob1" placeholder="00/00/1990"/>
                                        <div class="input-group-append" data-target="#dob1" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group col-md-6 col-xl-5 offset-xl-1 offset-0">
                                    <label for="keywords">Keywords</label>
                                    <select data-placeholder="Choose Keywords..." class="form-control chosen-select" multiple tabindex="4">
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

                            <div class="form-row">
                                <div class="form-group col-md-6 col-xl-5">
                                    <label for="zipcode">Notes</label>
                                    <textarea class="form-control" placeholder="Notes"></textarea>
                                </div>
                                <div class="form-group col-md-6 col-xl-5 offset-xl-1 offset-0">
                                    <label for="zipcode">Custom Field 1</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">
                                            Check me out
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">
                                            Check me out
                                        </label>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Check me out
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </form>

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
            format: 'L'
        });

        $(".chosen-select").chosen()
    });
</script>