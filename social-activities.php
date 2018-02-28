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
                        Social Activities
                    </div>
                    <div class="desc">
                        Twitter & Facebook activities
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <a href="">People</a> / <span>Social Activities</span>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="row no-gutters">

                <div class="content-panel col-md-12">

                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="">Social Activities</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="broadcast.php">Broadcast</a>
                        </li>
                    </ul>
                    <div class="content-inner">
                        <div class="content-area">

                            <div class="content-panel-sub">
                                <div class="panel-head">
                                    Search by
                                </div>
                            </div>

                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="from-date">From Date</label>
                                        <div class="input-group date" id="from-date" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#from-date" placeholder="1990-01-01"/>
                                            <div class="input-group-append" data-target="#from-date" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="to-date">To Date</label>
                                        <div class="input-group date" id="to-date" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#to-date" placeholder="1990-01-01"/>
                                            <div class="input-group-append" data-target="#to-date" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">User Category</label>
                                        <select class="form-control" id="">
                                            <option>- Select Category -</option>
                                            <option>Supporter</option>
                                            <option>Prospect</option>
                                            <option>Non Supporter</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Social Network</label>
                                        <select class="form-control" id="">
                                            <option>- Select -</option>
                                            <option>Twitter</option>
                                            <option>Facebook</option>
                                            <option>LinkedIn</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
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
                                    <div class="form-group col-md-6">
                                        <label>Types</label>
                                        <select data-placeholder="Types" class="form-control chosen-select" multiple>
                                            <option value=""></option>
                                            <option value="United States">Retweet</option>
                                            <option value="United Kingdom">Tweet</option>
                                            <option value="Afghanistan">Reply tweet</option>
                                            <option value="Aland Islands">Facebook page post liker</option>
                                            <option value="Albania">Facebook page post commenter</option>
                                            <option value="Algeria">LinkedIn page post liker</option>
                                            <option value="American Samoa">LinkedIn page post commenter</option>
                                            <option value="Andorra">Google Plus post</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row text-left text-md-right">
                                    <div class="form-group col-md-12">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                        <button type="submit" class="btn btn-secondary">Manage Keywords</button>
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
                                            <th class="text-center">Profile</th>
                                            <th>Post</th>
                                            <th class="text-center">Type</th>
                                            <th class="text-center"><i class="fa fa-link fa-lg" data-toggle="tooltip" title="Connections"></i></th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <tr>
                                            <td class="text-center">
                                                <a href="" id="" data-toggle="modal" data-target="#viewProfile"><span class="profile-pic profile-pic-lg"><img src="img/user-profile.png"></span></a>
                                            </td>
                                            <td>
                                                <div><i class="fa fa-twitter fa-lg tw-icon"></i><a href="">@queen_army01</a> K2: Fears for climber Denis Urubko after expedition row - A <span class="badge badge-light keyword-highlight">Russo-Polish</span> climber is believed to have struck out on his own to…</div>
                                                <div class="mt-1"><span class="font-weight-bold">@Pankracy</span> <span class="font10">4 hours ago</span></div>
                                                <div class="mt-2"><a href="">Reply</a> 0 | <a href="">Favourite</a> 0 | <a href="">Retweet</a> 0 | <a href="">Follow</a></div>
                                            </td>
                                            <td class="text-center"><span class="badge badge-pill badge-info">Prospect</span></td>
                                            <td class="text-center">0</td>

                                            <td class="text-center">
                                                <select>
                                                    <option>- Change Category -</option>
                                                    <option>Supporter</option>
                                                    <option>Non Supporter</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">
                                                <a href="" id="" data-toggle="modal" data-target="#viewProfile"><span class="profile-pic profile-pic-lg"><img src="img/user-profile.png"></span></a>
                                            </td>
                                            <td>
                                                <div><i class="fa fa-twitter fa-lg tw-icon"></i>RT <a href="">@waltshaub</a>: Arrogance & Dissembling. Bad qualities for a cabinet official. And that was before he announced a “purge” of those “subverti…</div>
                                                <div class="mt-1"><span class="font-weight-bold">@Purplegater</span> <span class="font10">8 hours ago</span></div>
                                                <div class="mt-2"><a href="">Reply</a> 0 | <a href="">Favourite</a> 0 | <a href="">Retweet</a> 0 | <a href="">Follow</a></div>
                                            </td>
                                            <td class="text-center"><span class="badge badge-pill badge-info">Prospect</span></td>
                                            <td class="text-center">0</td>

                                            <td class="text-center">
                                                <select>
                                                    <option>- Change Category -</option>
                                                    <option>Supporter</option>
                                                    <option>Non Supporter</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">
                                                <a href="" id="" data-toggle="modal" data-target="#viewProfile"><span class="profile-pic profile-pic-lg"><img src="img/user-profile.png"></span></a>
                                            </td>
                                            <td>
                                                <div><i class="fa fa-twitter fa-lg tw-icon"></i>RT <a href="">@queen_army01</a>: La relación BigHit & ARMY latinas es tipo: -no dormir -madrugar por votaciones -periscope, link, vlive -<span class="badge badge-light keyword-highlight">google</span> traductor…</div>
                                                <div class="mt-1"><span class="font-weight-bold">@Phenomenal</span> <span class="font10">8 hours ago</span></div>
                                                <div class="mt-2"><a href="">Reply</a> 0 | <a href="">Favourite</a> 0 | <a href="">Retweet</a> 0 | <a href="">Follow</a></div>
                                            </td>
                                            <td class="text-center"><span class="badge badge-pill badge-info">Prospect</span></td>
                                            <td class="text-center">0</td>

                                            <td class="text-center">
                                                <select>
                                                    <option>- Change Category -</option>
                                                    <option>Supporter</option>
                                                    <option>Non Supporter</option>
                                                </select>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>

                                <!-- Modal -->
                                <div class="modal fade" id="viewProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Profile Details</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-body edit-keyword">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="mx-auto"><img class="profile-pic" src="img/promo-profile.png"></div>
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

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal ends -->


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
        </div>



        <?php include 'includes/app-footer.php'; ?>
    </div>

</div>

<?php include 'includes/footer.php'; ?>

<script>
    $(document).ready(function () {

        $('#from-date').datetimepicker({
            /*debug:true*/
            format: 'YYYY-MM-DD HH:mm'
        });

        $('#to-date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm'
        });

        $(".chosen-select").chosen();

    });
</script>