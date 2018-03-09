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
                        Create AB Testing
                    </div>
                    <div class="desc">
                        Add new AB Testing
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <a href="">Communication</a> / <span>Create AB Testing</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row no-gutters">
            <div class="content-panel col-md-12">
                <div class="content-inner">
                    <div class="panel-head">
                        Create AB Testing
                    </div>
                    <div class="content-area">

                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="name">Title</label>
                                    <input type="text" class="form-control" id="name" placeholder="Testing Title">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="saved">Saved Search</label>
                                    <select class="form-control" id="saved">
                                        <option>- Select -</option>
                                        <option>Office</option>
                                        <option>Friends</option>
                                        <option>QA Test</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="count">Total User Count</label>
                                    <input type="number" class="form-control" id="count" placeholder="0">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="from-date">Start Date</label>
                                    <div class="input-group date" id="from-date" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#from-date" placeholder="1990-01-01"/>
                                        <div class="input-group-append" data-target="#from-date" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row campaigns">
                                <div class="col-md-6">
                                    <div class="card mb-3 campaign-a">
                                        <div class="card-header">Campaign A</div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Email Template A</label>
                                                <div class="row">
                                                    <div class="text-center text-sm-left col-sm-3 col-md-4 col-xl-3 mb-2 mb-sm-0">
                                                        <img src="img/layout.svg" alt="" class="img-thumbnail mx-auto">
                                                    </div>
                                                    <div class="col-sm-9 col-md-8 col-xl-9">
                                                        <div class="form-group">
                                                            <select class="form-control">
                                                                <option>- Select -</option>
                                                                <option>Test Template</option>
                                                                <option>Marketing Template</option>
                                                                <option>Publish</option>
                                                            </select>

                                                            <div class="form-feild-info">
                                                                Subscriber will receive an email using the selected email template.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Sender A</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Sender Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Subject A</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Subject">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">User Count A</label>
                                                <div class="row">
                                                    <div class="col-sm-9 mb-3">
                                                        <input data-rangeslider=""
                                                                class="count-slider"
                                                               id="count-slider-a"
                                                                type="range"
                                                                min="0"
                                                                max="100"
                                                                step="1"
                                                                value="10"
                                                        >
                                                        <!--<output id="js-output">550</output>-->
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <input class="form-control" id="user-count-a" value="" placeholder="0">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-3 campaign-b">
                                        <div class="card-header">Campaign B</div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Email Template B</label>
                                                <div class="row">
                                                    <div class="text-center text-sm-left col-sm-3 col-md-4 col-xl-3 mb-2 mb-sm-0">
                                                        <img src="img/layout.svg" alt="" class="img-thumbnail mx-auto">
                                                    </div>
                                                    <div class="col-sm-9 col-md-8 col-xl-9">
                                                        <div class="form-group">
                                                            <select class="form-control">
                                                                <option>- Select -</option>
                                                                <option>Test Template</option>
                                                                <option>Marketing Template</option>
                                                                <option>Publish</option>
                                                            </select>

                                                            <div class="form-feild-info">
                                                                Subscriber will receive an email using the selected email template.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Sender B</label>
                                                <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Sender Name">
                                            </div>
                                            <div class="form-group">
                                                <label>Subject B</label>
                                                <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Email Subject">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">User Count A</label>
                                                <div class="row">
                                                    <div class="col-sm-9 mb-3">
                                                        <input data-rangeslider=""
                                                               class="count-slider"
                                                               id="count-slider-b"
                                                               type="range"
                                                               min="0"
                                                               max="100"
                                                               step="1"
                                                               value="10"
                                                        >
                                                        <!--<output id="js-output">550</output>-->
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <input class="form-control" id="user-count-b" value="" placeholder="0">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-left text-md-right">
                                <button type="submit" class="btn btn-primary">Create</button>
                                <button type="submit" class="btn btn-secondary">Cancel</button>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>

        <!-- Add Modal -->
        <div class="modal fade" id="addKeyword" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add Keyword</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>


                    <div class="modal-body">
                        <p>Define new keyword</p>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" id="" placeholder="Name">
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

<script src="js/rangeslider.min.js"></script>

<script>
    $(document).ready(function () {
        $('#from-date').datetimepicker({
            format: 'YYYY-MM-DD'
        });
        $('#to-date').datetimepicker({
            format: 'YYYY-MM-DD'
        });

        // Slider A
        $('#count-slider-a').rangeslider({

            // Deactivate the feature detection
            polyfill: false,

            // Callback function
            onInit: function() {
                $('#user-count-a').val(this.$element[0].value);
            },

            // Callback function
            onSlide: function(position, value) {
                /*console.log('onSlide');
                console.log('position: ' + position, 'value: ' + value);*/
                $('#user-count-a').val(value);
            }

        });


        // Slider B
        $('#count-slider-b').rangeslider({

            // Deactivate the feature detection
            polyfill: false,

            // Callback function
            onInit: function() {
                $('#user-count-b').val(this.$element[0].value);
            },

            // Callback function
            onSlide: function(position, value) {
                /*console.log('onSlide');
                console.log('position: ' + position, 'value: ' + value);*/
                $('#user-count-b').val(value);
            }

        });
    });
</script>

