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
                        Form Builder
                    </div>
                    <div class="desc">
                        Forms of DigitaleBox
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <a href="">System</a> / <span>Form Builder</span>
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
                                <button type="" onclick="window.location='add-form.php';" class="btn btn-primary">Add Form</button>
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
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" placeholder="Title">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="exampleFormControlSelect1">Enabled</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>- Select -</option>
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select>
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



                        <div class="text-right results-count mt-4">
                            Displaying 1-10 of 2420 results
                        </div>

                        <div class="table-wrap">

                            <table class="table table-hover table-striped table-custom">
                                <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Created at</th>
                                    <th scope="col">Created by</th>
                                    <th scope="col">Time Spent</th>
                                    <th scope="col">Progress</th>
                                    <th scope="col" class="text-center">Status</th>
                                    <th scope="col" class="text-center">Errors</th>
                                    <th class="text-center actions saved-search" scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td>Phone Number</td>
                                    <td><span class="badge badge-day">2018-01-29</span> <span class="badge badge-time">07:38 AM</span></td>
                                    <td>Digitalbox Testing</td>
                                    <td><i class="fa fa-clock-o fa-lg"></i> 1 sec</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                                        </div>
                                    </td>
                                    <td class="text-center"><span class="badge badge-pill badge-success">Active</span></td>
                                    <td class="text-center"><a href="" title="Download error report"><i class="fa fa-download fa-lg"></i></a></td>
                                    <td class="text-center">
                                        <a href="edit-form.php" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                        <a href="" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>ProspectDigibox</td>
                                    <td><span class="badge badge-day">2017-11-13</span> <span class="badge badge-time">09:46 PM</span></td>
                                    <td>Digitalbox Testing</td>
                                    <td><i class="fa fa-clock-o fa-lg"></i> 29 sec</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                        </div>
                                    </td>
                                    <td class="text-center"><span class="badge badge-pill badge-danger">Deleted</span></td>
                                    <td></td>
                                    <td class="text-center">
                                        <a href="edit-form.php" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                        <a href="" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>15130 Search</td>
                                    <td><span class="badge badge-day">2017-07-04</span> <span class="badge badge-time">08:14 AM</span></td>
                                    <td>Elania Zito</td>
                                    <td><i class="fa fa-clock-o fa-lg"></i> 101 sec</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                        </div>
                                    </td>
                                    <td class="text-center"><span class="badge badge-pill badge-success">Active</span></td>
                                    <td class="text-center"><a href="" title="Download error report"><i class="fa fa-download fa-lg"></i></a></td>
                                    <td class="text-center">
                                        <a href="edit-form.php" title="Edit"><i class="fa fa-edit fa-lg"></i></a>
                                        <a href="" title="Delete"><i class="fa fa-trash fa-lg"></i></a>
                                    </td>
                                </tr>

                                </tbody>
                            </table>

                        </div>

                        <div class="row no-gutters d-flex flex-sm-row-reverse flex-sm-column-reverse flex-md-row">
                            <div class="col-md-6">

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