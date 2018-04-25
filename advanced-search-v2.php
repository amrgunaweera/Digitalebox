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
                        Advanced Search V2
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

        <div class="row no-gutters advanced-search">

            <div class="content-panel col-md-12">

                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="">Advanced Search</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Map View</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Messages</a>
                    </li>
                </ul>

                <div class="content-inner">
                    <!--<div class="panel-head">Saved Search</div>-->
                    <div class="content-area">

                        <div class="content-panel-sub">
                            <div class="panel-head">
                                Saved Searches
                            </div>
                        </div>

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

                        <div class="content-panel-sub">
                            <div class="panel-head">
                                Search by criteria
                            </div>
                        </div>

                        <form>

                            <div class="row no-gutters">
                                <div class="col-md-6" id="field-list">

                                    <div id="field-1" class="input-group mb-3 field-items">
                                        <input type="text" class="form-control" placeholder="First Name">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary btn-no-frame remove-field" title="Remove Field" type="button"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <div id="field-2" class="input-group mb-3 field-items">
                                        <input type="text" class="form-control" placeholder="Last Name">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary btn-no-frame remove-field" title="Remove Field" type="button"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></button>
                                        </div>
                                    </div>

                                    <div id="field-3" class="input-group mb-3 field-items hidden-field">
                                        <input type="text" class="form-control" id="city" placeholder="City">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary btn-no-frame remove-field" title="Remove Field" type="button"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <div id="field-4" class="input-group mb-3 field-items hidden-field">
                                        <select id="category" class="form-control">
                                            <option selected>- Country -</option>
                                            <option>France</option>
                                            <option>United States</option>
                                            <option>Italy</option>
                                            <option>United Kingdom</option>
                                        </select>
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary btn-no-frame remove-field" title="Remove Field" type="button"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></button>
                                        </div>
                                    </div>

                                    <div id="field-5" class="input-group mb-3 field-items hidden-field">
                                        <select id="gender" class="form-control">
                                            <option selected>- Gender -</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary btn-no-frame remove-field" title="Remove Field" type="button"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></button>
                                        </div>
                                    </div>

                                    <div id="field-6" class="input-group mb-3 field-items hidden-field">
                                        <select id="category" class="form-control">
                                            <option selected>- Category -</option>
                                            <option>Supporter</option>
                                            <option>Prospect</option>
                                            <option>Non Supporter</option>
                                            <option>Unknown</option>
                                        </select>
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary btn-no-frame remove-field" title="Remove Field" type="button"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></button>
                                        </div>
                                    </div>

                                    <div id="field-7" class="input-group mb-3 field-items hidden-field">
                                        <input type="text" class="form-control" id="zipcode" placeholder="Zip Code">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary btn-no-frame remove-field" title="Remove Field" type="button"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></button>
                                        </div>
                                    </div>

                                    <div id="field-8" class="input-group mb-3 field-items hidden-field">
                                        <input type="email" class="form-control" id="email" placeholder="Email Address">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary btn-no-frame remove-field" title="Remove Field" type="button"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></button>
                                        </div>
                                    </div>

                                    <div id="field-9" class="input-group mb-3 field-items hidden-field">
                                        <input type="tel" class="form-control" id="mobile" placeholder="Mobile Phone">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary btn-no-frame remove-field" title="Remove Field" type="button"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></button>
                                        </div>
                                    </div>

                                    <div id="field-10" class="input-group mb-3 field-items hidden-field">
                                        <input type="number" class="form-control" id="age" placeholder="Age (N or N-N)">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary btn-no-frame remove-field" title="Remove Field" type="button"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></button>
                                        </div>
                                    </div>

                                    <div id="field-11" class="input-group mb-3 field-items hidden-field">
                                        <select id="category" class="form-control">
                                            <option selected>- Zone -</option>
                                            <option>Z - 1</option>
                                            <option>Z - 2</option>
                                            <option>Z - 3</option>
                                            <option>Z - 4</option>
                                        </select>
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary btn-no-frame remove-field" title="Remove Field" type="button"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></button>
                                        </div>
                                    </div>

                                    <div id="field-12" class="input-group mb-3 field-items hidden-field">
                                        <input type="text" class="form-control" id="address" placeholder="Address (27 Avenue Pasteur)">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary btn-no-frame remove-field" title="Remove Field" type="button"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></button>
                                        </div>
                                    </div>

                                    <div id="field-13" class="input-group mb-3 field-items hidden-field">
                                        <div class="form-control pt-2">
                                            <div class="form-check form-check-inline align-top col-md-12">
                                                <div for="networks" class="networks">Networks</div>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox1" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1">Twitter</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox20" value="option2">
                                                <label class="form-check-label" for="inlineCheckbox20">Facebook</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox3" value="option3">
                                                <label class="form-check-label" for="inlineCheckbox3">Linkedin</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox4" value="option4">
                                                <label class="form-check-label" for="inlineCheckbox4">Mobile</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox5" value="option5">
                                                <label class="form-check-label" for="inlineCheckbox5">Email</label>
                                            </div>

                                        </div>
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary btn-no-frame remove-field" title="Remove Field" type="button"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></button>
                                        </div>
                                    </div>

                                    <div id="field-14" class="input-group mb-3 field-items hidden-field">
                                        <div class="form-control no-border p-0 chosen-field">
                                            <select data-placeholder="Team Names" class="chosen-select" multiple tabindex="4">
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
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary btn-no-frame remove-field" title="Remove Field" type="button"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></button>
                                        </div>
                                    </div>

                                    <div id="field-15" class="input-group mb-3 field-items hidden-field">

                                        <div class="form-control no-border p-0">
                                            <div class="input-group">
                                                <div class="form-control no-border p-0">
                                                    <select data-placeholder="Keywords" class="chosen-select" multiple>
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
                                                <div class="input-group-append">
                                                    <select class="keyword-select" id="keyword-select-1">
                                                        <option value="1">Normal</option>
                                                        <option value="2">Strict</option>
                                                        <option value="3">Exclude</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <select data-placeholder="Exclude keywords" class="chosen-select mt-2" id="exclude-keywords-1" multiple>
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

                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary btn-no-frame remove-field" title="Remove Field" type="button"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></button>
                                        </div>
                                    </div>

                                    <div id="field-16" class="input-group mb-3 field-items hidden-field">
                                        <div class="form-control no-border p-0">
                                            <div class="input-group">
                                                <div class="form-control no-border p-0">
                                                    <select data-placeholder="Keywords 2" class="chosen-select" multiple>
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
                                                <div class="input-group-append">
                                                    <select class="keyword-select" id="keyword-select-2">
                                                        <option value="1">Normal</option>
                                                        <option value="2">Strict</option>
                                                        <option value="3">Exclude</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <select data-placeholder="Exclude keywords 2" class="chosen-select mt-2" id="exclude-keywords-2" multiple>
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
                                            <!--<input class="form-control mt-2 exclude-keywords" placeholder="Exclude keywords 2">-->
                                        </div>

                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary btn-no-frame remove-field" title="Remove Field" type="button"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></button>
                                        </div>
                                    </div>

                                    <div id="field-17" class="input-group mb-3 field-items hidden-field">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox1" value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1">Enable Keywords 2</label>
                                        </div>
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary btn-no-frame remove-field" title="Remove Field" type="button"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></button>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <select class="custom-select form-control" id="fields">
                                            <option value="0" selected>- Add search field -</option>
                                            <option value="1" disabled="disabled">First Name</option>
                                            <option value="2" disabled="disabled">Last Name</option>
                                            <option value="3">City</option>
                                            <option value="4">Country</option>
                                            <option value="5">Gender</option>
                                            <option value="6">Category</option>
                                            <option value="7">Zip Code</option>
                                            <option value="8">Email Address</option>
                                            <option value="9">Mobile Phone</option>
                                            <option value="10">Age</option>
                                            <option value="11">Zone</option>
                                            <option value="12">Address</option>
                                            <option value="13">Networks</option>
                                            <option value="14">Team Names</option>
                                            <option value="15">Keywords</option>
                                            <option value="16">Keywords 2</option>
                                        </select>
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary btn-no-frame" id="add-field" type="button"><i class="fa fa-lg fa-plus" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row no-gutters mt-3">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox10" value="option10">
                                            <label class="form-check-label" for="inlineCheckbox10">Exclude Personal Facebook Contacts</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                        <button type="submit" class="btn btn-secondary">Save Search</button>
                                    </div>
                                </div>
                            </div>


                            <!--<div class="form-row">

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
                                    <div class="form-check form-check-inline align-top">
                                        <div for="networks" class="networks">Networks</div>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Twitter</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Facebook</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox3" value="option3">
                                        <label class="form-check-label" for="inlineCheckbox3">Linkedin</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox4" value="option4">
                                        <label class="form-check-label" for="inlineCheckbox4">Mobile</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox5" value="option5">
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

                            <div class="form-row mt-3">
                                <div class="form-group col-md-8">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Enable Keywords 2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2">Exclude Personal Facebook Contacts</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-4 text-left text-md-right">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                    <button type="submit" class="btn btn-secondary">Save Search</button>
                                </div>
                            </div>-->


                        </form>


                        <div class="mt-5">
                            <div class="text-right results-count">
                                Displaying 1-10 of 24420 results
                            </div>

                            <div class="table-wrap">

                                <table class="table table-hover table-striped advanced-search table-custom">
                                    <thead>
                                    <tr>
                                        <th class="text-center" scope="col">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox2" value="option2">
                                            </div>
                                        </th>
                                        <th class="text-center" scope="col">Profile</th>
                                        <th class="text-center" scope="col">First Name</th>
                                        <th class="text-center" scope="col">Last Name</th>
                                        <th class="text-center" scope="col">Email</th>
                                        <th class="text-center" scope="col">Phone</th>
                                        <th class="text-center" scope="col">Keywords</th>
                                        <th class="text-center" scope="col">City</th>
                                        <th class="text-center" scope="col">Joined on</th>
                                        <th class="text-center" scope="col">Age</th>
                                        <th class="text-center" scope="col"><i class="fa fa-link fa-lg" data-toggle="tooltip" title="Connections"></i></th>
                                        <th class="text-center actions" scope="col">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td class="text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox2" value="option2">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <span class="profile-pic"><img src="img/user-profile.png"></span>
                                            <span class="gender" data-toggle="tooltip" title="Female"><img src="img/gender-female.svg"></span>
                                            <span class="social"><i class="fa fa-twitter fa-lg tw-icon"></i></span>
                                        </td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td class="text-center">mark@gmail.com</td>
                                        <td class="text-center">+33212265149</td>
                                        <td class="text-center">
                                            <a href="#" data-toggle="tooltip" title="My Twitter, Email Friends, FB Friends"><i class="fa fa-eye fa-lg"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#editKeywords" title="Edit" id="username"><i class="fa fa-edit fa-lg"></i></a>
                                        </td>
                                        <td class="text-center">-</td>
                                        <td class="text-center"><span class="badge badge-day">2017-11-25</span></td>
                                        <td class="text-center">24</td>
                                        <td class="text-center"></td>
                                        <td class="text-center">
                                            <a href="" data-toggle="modal" data-target="#viewDetails" title="View"><i class="fa fa-eye fa-lg"></i></a>
                                            <a href="" data-toggle="modal" data-target="#editDetails" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                            <a href="" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox2" value="option2">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <span class="profile-pic"><img src="img/user-profile.png"></span>
                                            <span class="gender" data-toggle="tooltip" title="Male"><img src="img/gender-male.svg"></span>
                                            <span class="social"><a href="" data-toggle="tooltip" data-html="true" title="<i class='fa fa-twitter fa-lg tw-icon'></i><i class='fa fa-facebook fa-lg fb-icon'></i><i class='fa fa-linkedin fa-lg in-icon'></i>"><i class="fa fa-angle-right fa-lg"></i></a></span>
                                        </td>
                                        <td>Jacob</td>
                                        <td>Thorton</td>
                                        <td class="text-center">jacob@gmail.com</td>
                                        <td class="text-center">+33212265149</td>
                                        <td class="text-center">
                                            <a href="#" data-toggle="tooltip" title="Office, Friends, My Twitter, Email Friends, FB Friends, Followers, James"><i class="fa fa-eye fa-lg"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#editKeywords" title="Edit" id="username"><i class="fa fa-edit fa-lg"></i></a>
                                        </td>
                                        <td class="text-center">Cabourg</td>
                                        <td class="text-center"><span class="badge badge-day">2017-11-25</span></td>
                                        <td class="text-center">24</td>
                                        <td class="text-center"></td>
                                        <td class="text-center">
                                            <a href="" data-toggle="modal" data-target="#viewDetails" title="View"><i class="fa fa-eye fa-lg"></i></a>
                                            <a href="" data-toggle="modal" data-target="#editDetails" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                            <a href="" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox2" value="option2">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <span class="profile-pic"><img src="img/user-profile.png"></span>
                                            <span class="gender" data-toggle="tooltip" title="Male"><img src="img/gender-male.svg"></span>
                                            <span class="social"><i class="fa fa-facebook fa-lg fb-icon"></i></span>
                                        </td>
                                        <td>Larry</td>
                                        <td>the bird</td>
                                        <td class="text-center">larry@gmail.com</td>
                                        <td class="text-center">+33212265149</td>
                                        <td class="text-center">
                                            <a href="#" data-toggle="tooltip" title="Office, Friends, My Twitter, Email Friends, FB Friends, Followers, James"><i class="fa fa-eye fa-lg"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#editKeywords" title="Edit" id="username"><i class="fa fa-edit fa-lg"></i></a>
                                        </td>
                                        <td class="text-center">-</td>
                                        <td class="text-center"><span class="badge badge-day">2017-11-25</span></td>
                                        <td class="text-center">24</td>
                                        <td class="text-center">2</td>
                                        <td class="text-center">
                                            <a href="" data-toggle="modal" data-target="#viewDetails" title="View"><i class="fa fa-eye fa-lg"></i></a>
                                            <a href="" data-toggle="modal" data-target="#editDetails" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                            <a href="" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox2" value="option2">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <span class="profile-pic"><img src="img/user-profile.png"></span>
                                            <span class="gender" data-toggle="tooltip" title="Male"><img src="img/gender-male.svg"></span>
                                            <span class="social"><i class="fa fa-linkedin fa-lg in-icon"></i></span>
                                        </td>
                                        <td>David</td>
                                        <td>Beckahm</td>
                                        <td class="text-center">david@gmail.com</td>
                                        <td class="text-center">+33212265149</td>
                                        <td class="text-center">
                                            <a href="#" data-toggle="tooltip" title="Office, Friends, My Twitter, Email Friends, FB Friends, Followers, James"><i class="fa fa-eye fa-lg"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#editKeywords" title="Edit" id="username"><i class="fa fa-edit fa-lg"></i></a>
                                        </td>
                                        <td class="text-center">Paris</td>
                                        <td class="text-center"><span class="badge badge-day">2017-11-25</span></td>
                                        <td class="text-center">24</td>
                                        <td class="text-center"></td>
                                        <td class="text-center">
                                            <a href="" data-toggle="modal" data-target="#viewDetails" title="View"><i class="fa fa-eye fa-lg"></i></a>
                                            <a href="" data-toggle="modal" data-target="#editDetails" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                            <a href="" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox2" value="option2">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <span class="profile-pic"><img src="img/user-profile.png"></span>
                                            <span class="gender" data-toggle="tooltip" title="Female"><img src="img/gender-female.svg"></span>
                                            <span class="social"><a href="" data-toggle="tooltip" data-html="true" title="<i class='fa fa-twitter fa-lg tw-icon'></i><i class='fa fa-linkedin fa-lg in-icon'></i>"><i class="fa fa-angle-right fa-lg"></i></a></span>
                                        </td>
                                        <td>James</td>
                                        <td>Bond</td>
                                        <td class="text-center">james@gmail.com</td>
                                        <td class="text-center">+33212265149</td>
                                        <td class="text-center">
                                            <a href="#" data-toggle="tooltip" title="Office, Friends, My Twitter, Email Friends, FB Friends, Followers, James"><i class="fa fa-eye fa-lg"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#editKeywords" title="Edit" id="username"><i class="fa fa-edit fa-lg"></i></a>
                                        </td>
                                        <td class="text-center">-</td>
                                        <td class="text-center"><span class="badge badge-day">2017-11-25</span></td>
                                        <td class="text-center">24</td>
                                        <td class="text-center">3</td>
                                        <td class="text-center">
                                            <a href="" data-toggle="modal" data-target="#viewDetails" title="View"><i class="fa fa-eye fa-lg"></i></a>
                                            <a href="" data-toggle="modal" data-target="#editDetails" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                            <a href="" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox2" value="option2">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <span class="profile-pic"><img src="img/user-profile.png"></span>
                                            <span class="gender" data-toggle="tooltip" title="Female"><img src="img/gender-female.svg"></span>
                                            <span class="social"><i class="fa fa-twitter fa-lg tw-icon"></i></span>
                                        </td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td class="text-center">mark@gmail.com</td>
                                        <td class="text-center">+33212265149</td>
                                        <td class="text-center">
                                            <a href="#" data-toggle="tooltip" title="My Twitter, Email Friends, FB Friends"><i class="fa fa-eye fa-lg"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#editKeywords" title="Edit" id="username"><i class="fa fa-edit fa-lg"></i></a>
                                        </td>
                                        <td class="text-center">-</td>
                                        <td class="text-center"><span class="badge badge-day">2017-11-25</span></td>
                                        <td class="text-center">24</td>
                                        <td class="text-center"></td>
                                        <td class="text-center">
                                            <a href="" data-toggle="modal" data-target="#viewDetails" title="View"><i class="fa fa-eye fa-lg"></i></a>
                                            <a href="" data-toggle="modal" data-target="#editDetails" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                            <a href="" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox2" value="option2">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <span class="profile-pic"><img src="img/user-profile.png"></span>
                                            <span class="gender" data-toggle="tooltip" title="Male"><img src="img/gender-male.svg"></span>
                                            <span class="social"><a href="" data-toggle="tooltip" data-html="true" title="<i class='fa fa-twitter fa-lg tw-icon'></i><i class='fa fa-facebook fa-lg fb-icon'></i><i class='fa fa-linkedin fa-lg in-icon'></i>"><i class="fa fa-angle-right fa-lg"></i></a></span>
                                        </td>
                                        <td>Jacob</td>
                                        <td>Thorton</td>
                                        <td class="text-center">jacob@gmail.com</td>
                                        <td class="text-center">+33212265149</td>
                                        <td class="text-center">
                                            <a href="#" data-toggle="tooltip" title="Office, Friends, My Twitter, Email Friends, FB Friends, Followers, James"><i class="fa fa-eye fa-lg"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#editKeywords" title="Edit" id="username"><i class="fa fa-edit fa-lg"></i></a>
                                        </td>
                                        <td class="text-center">Cabourg</td>
                                        <td class="text-center"><span class="badge badge-day">2017-11-25</span></td>
                                        <td class="text-center">24</td>
                                        <td class="text-center"></td>
                                        <td class="text-center">
                                            <a href="" data-toggle="modal" data-target="#viewDetails" title="View"><i class="fa fa-eye fa-lg"></i></a>
                                            <a href="" data-toggle="modal" data-target="#editDetails" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                            <a href="" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox2" value="option2">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <span class="profile-pic"><img src="img/user-profile.png"></span>
                                            <span class="gender" data-toggle="tooltip" title="Male"><img src="img/gender-male.svg"></span>
                                            <span class="social"><i class="fa fa-facebook fa-lg fb-icon"></i></span>
                                        </td>
                                        <td>Larry</td>
                                        <td>the bird</td>
                                        <td class="text-center">larry@gmail.com</td>
                                        <td class="text-center">+33212265149</td>
                                        <td class="text-center">
                                            <a href="#" data-toggle="tooltip" title="Office, Friends, My Twitter, Email Friends, FB Friends, Followers, James"><i class="fa fa-eye fa-lg"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#editKeywords" title="Edit" id="username"><i class="fa fa-edit fa-lg"></i></a>
                                        </td>
                                        <td class="text-center">-</td>
                                        <td class="text-center"><span class="badge badge-day">2017-11-25</span></td>
                                        <td class="text-center">24</td>
                                        <td class="text-center">2</td>
                                        <td class="text-center">
                                            <a href="" data-toggle="modal" data-target="#viewDetails" title="View"><i class="fa fa-eye fa-lg"></i></a>
                                            <a href="" data-toggle="modal" data-target="#editDetails" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                            <a href="" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox2" value="option2">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <span class="profile-pic"><img src="img/user-profile.png"></span>
                                            <span class="gender" data-toggle="tooltip" title="Male"><img src="img/gender-male.svg"></span>
                                            <span class="social"><i class="fa fa-linkedin fa-lg in-icon"></i></span>
                                        </td>
                                        <td>David</td>
                                        <td>Beckahm</td>
                                        <td class="text-center">david@gmail.com</td>
                                        <td class="text-center">+33212265149</td>
                                        <td class="text-center">
                                            <a href="#" data-toggle="tooltip" title="Office, Friends, My Twitter, Email Friends, FB Friends, Followers, James"><i class="fa fa-eye fa-lg"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#editKeywords" title="Edit" id="username"><i class="fa fa-edit fa-lg"></i></a>
                                        </td>
                                        <td class="text-center">Paris</td>
                                        <td class="text-center"><span class="badge badge-day">2017-11-25</span></td>
                                        <td class="text-center">24</td>
                                        <td class="text-center"></td>
                                        <td class="text-center">
                                            <a href="" data-toggle="modal" data-target="#viewDetails" title="View"><i class="fa fa-eye fa-lg"></i></a>
                                            <a href="" data-toggle="modal" data-target="#editDetails" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                            <a href="" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox2" value="option2">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <span class="profile-pic"><img src="img/user-profile.png"></span>
                                            <span class="gender" data-toggle="tooltip" title="Female"><img src="img/gender-female.svg"></span>
                                            <span class="social"><a href="" data-toggle="tooltip" data-html="true" title="<i class='fa fa-twitter fa-lg tw-icon'></i><i class='fa fa-linkedin fa-lg in-icon'></i>"><i class="fa fa-angle-right fa-lg"></i></a></span>
                                        </td>
                                        <td>James</td>
                                        <td>Bond</td>
                                        <td class="text-center">james@gmail.com</td>
                                        <td class="text-center">+33212265149</td>
                                        <td class="text-center">
                                            <a href="#" data-toggle="tooltip" title="Office, Friends, My Twitter, Email Friends, FB Friends, Followers, James"><i class="fa fa-eye fa-lg"></i></a>
                                            <a href="#" data-toggle="modal" data-target="#editKeywords" title="Edit" id="username"><i class="fa fa-edit fa-lg"></i></a>
                                        </td>
                                        <td class="text-center">-</td>
                                        <td class="text-center"><span class="badge badge-day">2017-11-25</span></td>
                                        <td class="text-center">24</td>
                                        <td class="text-center">3</td>
                                        <td class="text-center">
                                            <a href="" data-toggle="modal" data-target="#viewDetails" title="View"><i class="fa fa-eye fa-lg"></i></a>
                                            <a href="" data-toggle="modal" data-target="#editDetails" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                            <a href="" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>

                                <!-- Edit Keywords Modal -->
                                <div class="modal fade" id="editKeywords" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">


                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Edit Keywords</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-body edit-keyword">
                                                <div class="form-group">
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

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- View Modal -->
                                <div class="modal fade" id="viewDetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">

                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h5 class="modal-title" id="">View Details</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-body edit-keyword">
                                                <div class="row">
                                                    <div class="col-md-6 mb-4">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="mx-auto"><img class="profile-pic" src="img/promo-profile.png"></div>
                                                                <h5 class="card-title"><h5>DigitaleBox Profile</h5></h5>
                                                                <div class="table-wrap">
                                                                    <table class="table table-striped table-custom">
                                                                        <tr>
                                                                            <td><strong>Name</strong></td>
                                                                            <td class="text-right">René ALLIER ADAMUS</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Email</strong></td>
                                                                            <td class="text-right"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Mobile</strong></td>
                                                                            <td class="text-right"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Gender</strong></td>
                                                                            <td class="text-right"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Zip</strong></td>
                                                                            <td class="text-right">97306</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-4">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="mx-auto"><img class="profile-pic" src="img/user-profile.png"></div>
                                                                <h5 class="card-title"><h5><i class="fa fa-twitter fa-lg profiles"></i> Twitter Profile</h5></h5>
                                                                <div class="table-wrap">
                                                                    <table class="table table-striped table-custom">
                                                                        <tr>
                                                                            <td><strong>Name</strong></td>
                                                                            <td class="text-right">René ALLIER ADAMUS</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Email</strong></td>
                                                                            <td class="text-right"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Mobile</strong></td>
                                                                            <td class="text-right"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Gender</strong></td>
                                                                            <td class="text-right"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Zip</strong></td>
                                                                            <td class="text-right">97306</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-4">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="mx-auto"><img class="profile-pic" src="img/user-profile.png"></div>
                                                                <h5 class="card-title"><h5><i class="fa fa-facebook fa-lg profiles"></i> Facebook Profile</h5></h5>
                                                                <div class="table-wrap">
                                                                    <table class="table table-striped table-custom">
                                                                        <tr>
                                                                            <td><strong>Name</strong></td>
                                                                            <td class="text-right">René ALLIER ADAMUS</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Email</strong></td>
                                                                            <td class="text-right"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Mobile</strong></td>
                                                                            <td class="text-right"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Gender</strong></td>
                                                                            <td class="text-right"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Zip</strong></td>
                                                                            <td class="text-right">97306</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-4">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="mx-auto"><img class="profile-pic" src="img/user-profile.png"></div>
                                                                <h5 class="card-title"><h5><i class="fa fa-linkedin fa-lg profiles"></i> LinkedIn Profile</h5></h5>
                                                                <div class="table-wrap">
                                                                    <table class="table table-striped table-custom">
                                                                        <tr>
                                                                            <td><strong>Name</strong></td>
                                                                            <td class="text-right">René ALLIER ADAMUS</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Email</strong></td>
                                                                            <td class="text-right"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Mobile</strong></td>
                                                                            <td class="text-right"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Gender</strong></td>
                                                                            <td class="text-right"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Zip</strong></td>
                                                                            <td class="text-right">97306</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-4">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="mx-auto"><img class="profile-pic" src="img/user-profile.png"></div>
                                                                <h5 class="card-title"><h5><i class="fa fa-google fa-lg profiles"></i> Google Profile</h5></h5>
                                                                <div class="table-wrap">
                                                                    <table class="table table-striped table-custom">
                                                                        <tr>
                                                                            <td><strong>Name</strong></td>
                                                                            <td class="text-right">René ALLIER ADAMUS</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Email</strong></td>
                                                                            <td class="text-right"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Mobile</strong></td>
                                                                            <td class="text-right"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Gender</strong></td>
                                                                            <td class="text-right"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><strong>Zip</strong></td>
                                                                            <td class="text-right">97306</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6"></div>
                                                <div class="col-md-6"></div>
                                                <div class="col-md-6"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Edit Details Modal -->
                                <div class="modal fade" id="editDetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">

                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Update People</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-body edit-keyword">

                                                <form>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="fname">First Name</label>
                                                            <input type="text" class="form-control" id="fname" placeholder="First Name">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="lname">Last Name</label>
                                                            <input type="text" class="form-control" id="lname" placeholder="Last Name">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="email">Email Address</label>
                                                            <input type="email" class="form-control is-invalid" id="email" placeholder="abc@company.com">
                                                            <div class="invalid-feedback">Error Message</div>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="mobile">Mobile Number</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/lang-eng.png"></button>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="#"><img src="img/lang-fra.png"> France</a>
                                                                        <a class="dropdown-item" href="#"><img src="img/lang-ita.png"> Italy</a>
                                                                        <a class="dropdown-item" href="#"><img src="img/lang-por.png"> Portugal</a>
                                                                        <a class="dropdown-item" href="#"><img src="img/lang-rus.png"> Russia</a>
                                                                    </div>
                                                                </div>
                                                                <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="+33 000 000 0000">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="zipcode">Zip Code</label>
                                                            <input type="text" class="form-control" id="zipcode" placeholder="ex: 14390">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="address">Street Address</label>
                                                            <input type="text" class="form-control" id="address" placeholder="ex: 27 Avenue Pasteur">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="gender">Gender</label>
                                                            <select id="gender" class="form-control">
                                                                <option selected>- Select -</option>
                                                                <option>Male</option>
                                                                <option>Female</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-6">
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
                                                        <div class="form-group col-md-6">
                                                            <label for="city">City</label>
                                                            <input type="text" class="form-control" id="city" placeholder="ex: Cabourg">
                                                        </div>
                                                        <div class="form-group col-md-6">
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
                                                        <div class="form-group col-md-12">

                                                            <label for="dob1">Date of Birth</label>
                                                            <div class="input-group date" id="dob1" data-target-input="nearest">
                                                                <input type="text" class="form-control datetimepicker-input" data-target="#dob1" placeholder="1990-00-00"/>
                                                                <div class="input-group-append" data-target="#dob1" data-toggle="datetimepicker">
                                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="form-group col-md-12" id="edit-keywords">
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
                                                        <div class="form-group col-md-6">
                                                            <label for="zipcode">Notes</label>
                                                            <textarea class="form-control" placeholder="Notes"></textarea>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="zipcode">Custom Field 1</label><br>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox1" value="option1">
                                                                <label class="form-check-label" for="inlineCheckbox1">1</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox2" value="option2">
                                                                <label class="form-check-label" for="inlineCheckbox2">2</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
                                                                <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="zipcode">Custom Field 2</label><br>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input custom-icheck" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                                <label class="form-check-label" for="inlineRadio1">1</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input custom-icheck" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                                <label class="form-check-label" for="inlineRadio2">2</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input custom-icheck" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled>
                                                                <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-6">

                                                        </div>
                                                    </div>
                                                </form>

                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row no-gutters d-flex flex-sm-row-reverse flex-sm-column-reverse flex-md-row">
                                <div class="col-md-6">
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-8 col-sm-4">
                                                <select id="actionToRun" class="form-control">
                                                    <option value="0" selected>Bulk Edit</option>
                                                    <option value="1">Bulk Delete</option>
                                                    <option value="2">Bulk Export</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-4 col-sm-3">
                                                <button type="" class="btn btn-primary bulk-run">Run</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-md-end">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>

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

        /*$('#dob1').datetimepicker({
            format: 'L',
            autoclose: false
        });*/
        /*$('#dob1').datetimepicker('show');*/
        $(".chosen-select").chosen();

        $('.bulk-run').click(function (event) {
            event.preventDefault();

            var action = $('#actionToRun').val();
            if(action == 0){
                window.location.href = "http://54.38.42.53/DigitaleBoxUI/bulk-edit.php";
            }else if(action == 1){
                console.log('Delete');
                //window.location.href = "http://www.google.com";
            }else if(action == 2){
                console.log('Export');
                //window.location.href = "http://www.google.com";
            }
        });

        // Exclude keyword field show
        $( ".keyword-select" ).on('change', function() {
            var keywordType = $(this).val();
            if(keywordType == 3){
                $(this).parents('.input-group').find('#exclude_keywords_1_chosen, #exclude_keywords_2_chosen').show();
                //$('#exclude-keywords').show();
            }else{
                $(this).parents('.input-group').find('#exclude_keywords_1_chosen, #exclude_keywords_2_chosen').hide();
            }
        });


        // Add field
        $( "#add-field" ).click(function() {
            var fieldValue = parseInt( $('#fields').val() );

            if (fieldValue != 0)
            {
                $('#field-'+fieldValue).removeClass('hidden-field');
            }else{
                alert('Please select a field');
            }

            $('#fields').val('0');
            $('#fields option[value='+fieldValue+']').attr("disabled","disabled");
        });

        // Remove field
        $( ".remove-field" ).click(function() {
            var hiddenItems = $('.hidden-field').length;
            var filedsCount = $('#field-list .field-items').length;

            if(hiddenItems < filedsCount-1){
                $(this).parents('.field-items').addClass('hidden-field');

                var fieldId = $(this).parents('.field-items').attr('id');
                var fieldValue = parseInt( fieldId.substring(6, 10) );
                $('#fields option[value='+fieldValue+']').removeAttr("disabled");

            }
        });



        /*function addField( selectedField ){
            console.log( selectedField );
            /!*$('#field-list').append('<input type="text">');*!/

            if (selectedField != 0)
            {
                var start = '<div class="input-group mb-3">';
                var ending = '<div class="input-group-append"><button class="btn btn-outline-secondary btn-no-frame" title="Remove Field" type="button"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></button></div></div>';

                switch (selectedField) {
                    case 1:
                        $('#field-list').append(start+'<input type="text" class="form-control" placeholder="First Name">'+ending);
                        break;
                    case 2:
                        $('#field-list').append(start+'<input type="text" class="form-control" placeholder="Last Name">'+ending);
                        break;
                    case 3:
                        $('#field-list').append(start+'<input type="text" class="form-control" placeholder="City">'+ending);
                        break;
                    case 4:
                        $('#field-list').append(start+'<input type="text" class="form-control" placeholder="City">'+ending);
                        break;
                    case 5:
                        $('#field-list').append('<input type="text">');
                        break;
                    case 6:
                        $('#field-list').append('<input type="text">');
                        break;
                    case 7:
                        $('#field-list').append('<input type="text">');
                        break;
                    case 8:
                        $('#field-list').append('<input type="text">');
                        break;
                    case 9:
                        $('#field-list').append('<input type="text">');
                        break;
                    case 10:
                        $('#field-list').append('<input type="text">');
                        break;
                    case 11:
                        $('#field-list').append('<input type="text">');
                        break;
                    case 12:
                        $('#field-list').append('<input type="text">');
                        break;
                    case 13:
                        $('#field-list').append('<input type="text">');
                        break;
                    case 14:
                        $('#field-list').append('<input type="text">');
                        break;
                    case 15:
                        $('#field-list').append('<input type="text">');
                        break;
                }

            }

        }*/
    });
</script>