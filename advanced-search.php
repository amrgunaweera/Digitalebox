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
                        Advanced Search
                    </div>
                    <div class="desc">
                        Search people by various criteria
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <a href="">People</a> / <span>Advanced Search</span>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="row no-gutters">

                <div class="content-panel col-md-12">
                    <div class="panel-head">Saved Search</div>
                    <div class="content-area">

                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-xl-5">
                                    <select id="category" class="form-control">
                                        <option selected>- Select -</option>
                                        <option>Supporter</option>
                                        <option>Prospect</option>
                                        <option>Non Supporter</option>
                                        <option>Unknown</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 col-xl-5">
                                    <button type="submit" class="btn btn-primary">Send Emails</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

                <div class="content-panel col-md-12">
                    <div class="panel-head">Search by criteria</div>
                    <div class="content-area">

                        <form>

                            <div class="form-row">
                                <div class="form-group col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <input type="text" class="form-control" id="fname" placeholder="First Name">
                                </div>
                                <div class="form-group col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <input type="text" class="form-control" id="lname" placeholder="Last Name">
                                </div>
                                <div class="form-group col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <input type="text" class="form-control" id="city" placeholder="City">
                                </div>
                                <div class="form-group col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <select id="category" class="form-control">
                                        <option selected>- Country -</option>
                                        <option>France</option>
                                        <option>United States</option>
                                        <option>Italy</option>
                                        <option>United Kingdom</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <select id="gender" class="form-control">
                                        <option selected>- Gender -</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <select id="category" class="form-control">
                                        <option selected>- Category -</option>
                                        <option>Supporter</option>
                                        <option>Prospect</option>
                                        <option>Non Supporter</option>
                                        <option>Unknown</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <input type="text" class="form-control" id="zipcode" placeholder="Zip Code">
                                </div>
                                <div class="form-group col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <input type="email" class="form-control" id="email" placeholder="Email Address">
                                </div>
                                <div class="form-group col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <input type="tel" class="form-control" id="mobile" placeholder="Mobile Phone">
                                </div>
                                <div class="form-group col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <input type="number" class="form-control" id="age" placeholder="Age (N or N-N)">
                                </div>
                                <div class="form-group col-sm-6 col-md-4 col-lg-4 col-xl-2">
                                    <select id="category" class="form-control">
                                        <option selected>- Zone -</option>
                                        <option>Z - 1</option>
                                        <option>Z - 2</option>
                                        <option>Z - 3</option>
                                        <option>Z - 4</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control" id="address" placeholder="Address(27 Avenue Pasteur)">
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <div class="form-check form-check-inline">
                                        <div for="networks" class="networks">Networks</div>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Twitter</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Facebook</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Linkedin</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                                        <label class="form-check-label" for="inlineCheckbox4">Mobile</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option5">
                                        <label class="form-check-label" for="inlineCheckbox5">Email</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <select data-placeholder="Team Names" class="form-control chosen-select" multiple tabindex="4">
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

                                <div class="form-group col-md-2 d-none d-xs-block d-sm-block d-md-none">
                                    Keywords
                                </div>
                                <div class="form-group col-md-2">

                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle btn-block" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Normal
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-10">
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




                            <button type="submit" class="btn btn-primary">Create</button>
                            <button type="submit" class="btn btn-secondary">Cancel</button>
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