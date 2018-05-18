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
                        Resources
                    </div>
                    <div class="desc">
                        Shared images, videos and documents
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <a href="">People</a> / <span>Resources</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row no-gutters">
            <div class="content-panel col-md-12">
                <div class="content-inner">
                    <div class="content-area">

                        <div class="form-row mb-2">
                            <div class="form-group col-md-12">
                                <button type="" class="btn btn-primary" data-toggle="modal" data-target="#addResource">Add Resource</button>
                            </div>
                        </div>

                        <div class="content-panel-sub">
                            <div class="panel-head">
                                Search By
                            </div>
                        </div>
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="from-date">Start Date</label>
                                    <div class="input-group date" id="from-date" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#from-date" placeholder="1990-01-01"/>
                                        <div class="input-group-append" data-target="#from-date" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="to-date">End Date</label>
                                    <div class="input-group date" id="to-date" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#to-date" placeholder="1990-01-01"/>
                                        <div class="input-group-append" data-target="#to-date" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="exampleFormControlSelect1">Resource Type</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>- Select -</option>
                                        <option>Image</option>
                                        <option>Video</option>
                                        <option>Document</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="exampleFormControlSelect1">Status</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>- Select -</option>
                                        <option>Pending Approval</option>
                                        <option>Approved</option>
                                        <option>Rejected</option>
                                        <option>Deleted</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">Title</label>
                                    <input type="text" class="form-control" id="name" placeholder="Title">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">Tag</label>
                                    <input type="text" class="form-control" id="name" placeholder="Tag">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input custom-icheck" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">My Resources Only</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 text-left text-md-right">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>

                        </form>

                        <div class="content-panel-sub mt-4">
                            <div class="panel-head">
                                Resources
                            </div>
                        </div>
                        <div class="row resources">
                            <div class="col-md-12 text-right results-count mb-3">
                                Displaying 1-10 of 2420 results
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3 text-center">
                                <div href="" class="resource">
                                    <a class="pic" data-toggle="modal" data-target="#viewDetails" href=""><img src="http://via.placeholder.com/200x200" alt="" class="img-thumbnail object-fit_cover"></a>
                                    <div class="title">Resource Title</div>
                                    <div class="desc">Resource description goes here</div>
                                    <div class="created-by">by Abc 20mins ago</div>
                                    <div class="status"><span class="badge badge-pill badge-danger">Rejected</span></div>
                                    <div class="actions">
                                        <a href="" data-toggle="modal" data-target="#viewDetails" title="View Details"><i class="fa fa-eye fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3 text-center">
                                <div href="" class="resource">
                                    <a class="pic" data-toggle="modal" data-target="#viewDetails" href=""><img src="http://staging.moncenis.com/themes/bootstrap_spacelab/img/officeword.png" alt="" class="img-thumbnail object-fit_cover"></a>
                                    <div class="title">Resource Title</div>
                                    <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vulputate ligula arcu, at lacinia leo lacinia id.</div>
                                    <div class="created-by">by Abc 20mins ago</div>
                                    <div class="status"><span class="badge badge-pill badge-info">Pending Approval</span></div>
                                    <div class="actions">
                                        <a href="" data-toggle="modal" data-target="#viewDetails" title="View Details"><i class="fa fa-eye fa-lg"></i></a>
                                        <a href="" title="Approve"><i class="fa  fa-check fa-lg"></i></a>
                                        <a href="" title="Reject"><i class="fa fa-close fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3 text-center">
                                <div href="" class="resource">
                                    <a class="pic" data-toggle="modal" data-target="#viewDetailsVideo" href=""><img id="srcvt-1" src="http://img.youtube.com/vi/6ZfuNTqbHE8/0.jpg" alt="" class="img-thumbnail object-fit_cover"></a>
                                    <div class="title">Resource Title</div>
                                    <div class="desc">Resource description goes here</div>
                                    <div class="created-by">by Abc 20mins ago</div>
                                    <div class="status"><span class="badge badge-pill badge-success">Active</span></div>
                                    <div class="actions">
                                        <a href="" data-toggle="modal" data-target="#viewDetails" title="View Details"><i class="fa fa-eye fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-3 text-center">
                                <div href="" class="resource">
                                    <a class="pic" data-toggle="modal" data-target="#viewDetails" href=""><img src="http://staging.moncenis.com/resources/24//banner-bg.jpg" alt="" class="img-thumbnail object-fit_cover"></a>
                                    <div class="title">Resource Title</div>
                                    <div class="desc">Resource description goes here</div>
                                    <div class="created-by">by Abc 20mins ago</div>
                                    <div class="status"><span class="badge badge-pill badge-danger">Deleted</span></div>
                                    <div class="actions">
                                        <a href="" data-toggle="modal" data-target="#viewDetails" title="View Details"><i class="fa fa-eye fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- View Modal -->
        <div class="modal fade" id="viewDetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Resource Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>


                    <div class="modal-body resource-details">
                        <div class="text-center">
                            <img src="http://staging.moncenis.com/resources/24//banner-bg.jpg" alt="" class="img-thumbnail">
                        </div>
                        <h5 class="mt-3">Resource Title</h5>
                        <p>
                            Resource description goes here
                        </p>
                        <div class="card">
                            <div class="card-body">
                                <div class="table-wrap">
                                    <table class="table table-striped table-custom">
                                        <tr>
                                            <td><strong>Type</strong></td>
                                            <td class="text-right">Image</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Created at</strong></td>
                                            <td class="text-right">2018-02-27 10:25:02</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Created by</strong></td>
                                            <td class="text-right">by Abc 20mins ago</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Tags</strong></td>
                                            <td class="text-right">Politics, Public</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- View Modal Video -->
        <div class="modal fade" id="viewDetailsVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Resource Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>


                    <div class="modal-body resource-details">
                        <div class="text-center resource-video">
                            <iframe id="srcvideo-1" width="560" height="315" src="https://www.youtube.com/embed/6ZfuNTqbHE8?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                        <h5 class="mt-3">Resource Title</h5>
                        <p>
                            Resource description goes here
                        </p>
                        <div class="card">
                            <div class="card-body">
                                <div class="table-wrap">
                                    <table class="table table-striped table-custom">
                                        <tr>
                                            <td><strong>Type</strong></td>
                                            <td class="text-right">Video</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Created at</strong></td>
                                            <td class="text-right">2018-02-27 10:25:02</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Created by</strong></td>
                                            <td class="text-right">by Abc 20mins ago</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Tags</strong></td>
                                            <td class="text-right">Politics, Public</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Modal -->
        <div class="modal fade" id="addResource" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add Resource</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>


                    <div class="modal-body">
                        <p>Upload documents, images, videos to share with users</p>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" class="form-control" id="name" placeholder="Title">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea class="form-control" id="name" placeholder="Description"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Tag</label>
                                    <input type="text" class="form-control" id="name" placeholder="Tag">
                                    <p class="form-feild-info">Comma Separated list of search keywords</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Resource Type</label>
                                    <select class="form-control res-type">
                                        <option>- Select -</option>
                                        <option value="1">Image</option>
                                        <option value="2">Video</option>
                                        <option value="3">Document</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group upload-types upload-video">
                                    <label for="">Youtube Video URL</label>
                                    <input type="text" class="form-control" id="name" placeholder="Youtube Video URL">
                                </div>

                                <div class="form-group upload-types upload-image">
                                    <label for="">Upload Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>
                                    <p class="form-feild-info">Allowed image types: jpg, jpeg, gif, png.</p>
                                </div>

                                <div class="form-group upload-types upload-doc">
                                    <label for="">Upload Document</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>
                                    <p class="form-feild-info">Allowed document types: doc, docx, pdf, xls, xlsx</p>
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

    </div>
    <?php include 'includes/app-footer.php'; ?>

</div>

<?php include 'includes/footer.php'; ?>

<script>
    $(document).ready(function () {
        $('#from-date').datetimepicker({
            format: 'YYYY-MM-DD'
        });
        $('#to-date').datetimepicker({
            format: 'YYYY-MM-DD'
        });

        $('.upload-types').hide();

        $('.res-type').change(function () {
            $('.upload-types').hide();

            if( $('.res-type').val() == 1 ){
                $('.upload-image').show();
            }else if( $('.res-type').val() == 2 ){
                $('.upload-video').show();
            }else if( $('.res-type').val() == 3 ){
                $('.upload-doc').show();
            }

        });

        //Generate url for youtube thumbnail
        var iframe           = $('#srcvideo-1');
        var iframe_src       = iframe.attr('src');
        var youtube_video_id = iframe_src.match(/youtube\.com.*(\?v=|\/embed\/)(.{11})/).pop();


        if (youtube_video_id.length == 11) {
            $('#srcvt-1').attr('src','//img.youtube.com/vi/'+youtube_video_id+'/0.jpg');
        }
    });
</script>