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
                                <div class="form-check form-check-inline align-top">
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

                        <div class="form-row mt-3">
                            <div class="form-group col-md-8">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Enable Keywords 2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">Exclude Personal Facebook Contacts</label>
                                </div>
                            </div>
                            <div class="form-group col-md-4 text-left text-md-right">
                                <button type="submit" class="btn btn-primary">Search</button>
                                <button type="submit" class="btn btn-secondary">Save Search</button>
                            </div>
                        </div>


                    </form>

                </div>
            </div>

            <div class="content-panel col-md-12">
                <div class="content-area">


                    <div class="text-right results-count">
                        Displaying 1-10 of 24420 results
                    </div>

                    <div class="table-wrap">

                        <table class="table table-hover table-striped advanced-search">
                            <thead>
                            <tr>
                                <th class="text-center" scope="col">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
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
                                <th class="text-center" scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td class="text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
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
                                    <td class="text-center">2017-11-25</td>
                                    <td class="text-center">24</td>
                                    <td class="text-center"></td>
                                    <td class="text-center">
                                        <a href="" data-toggle="tooltip" title="View"><i class="fa fa-eye fa-lg"></i></a>
                                        <a href="" data-toggle="tooltip" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                        <a href="" data-toggle="tooltip" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
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
                                    <td class="text-center">2017-11-25</td>
                                    <td class="text-center">24</td>
                                    <td class="text-center"></td>
                                    <td class="text-center">
                                        <a href="" data-toggle="tooltip" title="View"><i class="fa fa-eye fa-lg"></i></a>
                                        <a href="" data-toggle="tooltip" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                        <a href="" data-toggle="tooltip" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
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
                                    <td class="text-center">2017-11-25</td>
                                    <td class="text-center">24</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">
                                        <a href="" data-toggle="tooltip" title="View"><i class="fa fa-eye fa-lg"></i></a>
                                        <a href="" data-toggle="tooltip" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                        <a href="" data-toggle="tooltip" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
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
                                    <td class="text-center">2017-11-25</td>
                                    <td class="text-center">24</td>
                                    <td class="text-center"></td>
                                    <td class="text-center">
                                        <a href="" data-toggle="tooltip" title="View"><i class="fa fa-eye fa-lg"></i></a>
                                        <a href="" data-toggle="tooltip" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                        <a href="" data-toggle="tooltip" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
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
                                    <td class="text-center">2017-11-25</td>
                                    <td class="text-center">24</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">
                                        <a href="" data-toggle="tooltip" title="View"><i class="fa fa-eye fa-lg"></i></a>
                                        <a href="" data-toggle="tooltip" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                        <a href="" data-toggle="tooltip" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
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
                                    <td class="text-center">2017-11-25</td>
                                    <td class="text-center">24</td>
                                    <td class="text-center"></td>
                                    <td class="text-center">
                                        <a href="" data-toggle="tooltip" title="View"><i class="fa fa-eye fa-lg"></i></a>
                                        <a href="" data-toggle="tooltip" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                        <a href="" data-toggle="tooltip" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
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
                                    <td class="text-center">2017-11-25</td>
                                    <td class="text-center">24</td>
                                    <td class="text-center"></td>
                                    <td class="text-center">
                                        <a href="" data-toggle="tooltip" title="View"><i class="fa fa-eye fa-lg"></i></a>
                                        <a href="" data-toggle="tooltip" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                        <a href="" data-toggle="tooltip" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
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
                                    <td class="text-center">2017-11-25</td>
                                    <td class="text-center">24</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">
                                        <a href="" data-toggle="tooltip" title="View"><i class="fa fa-eye fa-lg"></i></a>
                                        <a href="" data-toggle="tooltip" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                        <a href="" data-toggle="tooltip" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
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
                                    <td class="text-center">2017-11-25</td>
                                    <td class="text-center">24</td>
                                    <td class="text-center"></td>
                                    <td class="text-center">
                                        <a href="" data-toggle="tooltip" title="View"><i class="fa fa-eye fa-lg"></i></a>
                                        <a href="" data-toggle="tooltip" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                        <a href="" data-toggle="tooltip" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
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
                                    <td class="text-center">2017-11-25</td>
                                    <td class="text-center">24</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">
                                        <a href="" data-toggle="tooltip" title="View"><i class="fa fa-eye fa-lg"></i></a>
                                        <a href="" data-toggle="tooltip" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                        <a href="" data-toggle="tooltip" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>

                        <!-- Modal -->
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

                    </div>

                    <div class="row no-gutters d-flex flex-sm-row-reverse flex-sm-column-reverse flex-md-row">
                        <div class="col-md-6">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-8 col-sm-4">
                                        <select id="inputState" class="form-control">
                                            <option selected>Bulk Edit</option>
                                            <option>Bulk Delete</option>
                                            <option>Bulk Export</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-4 col-sm-3">
                                        <button type="submit" class="btn btn-primary">Run</button>
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



        <?php include 'includes/app-footer.php'; ?>
    </div>

</div>

<?php include 'includes/footer.php'; ?>

<script>
    $(document).ready(function () {

        $(".chosen-select").chosen();

        $('[data-toggle="tooltip"]').tooltip();

    });
</script>