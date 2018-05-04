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
                        New Campaign
                    </div>
                    <div class="desc">
                        Launch new Email/ SMS/ Twitter campaign
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <a href="">Communication</a> / <span>New Campaign</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row no-gutters">
            <div class="content-panel col-md-12 campaign-outer">
                <div class="content-inner">
                    <div class="panel-head">
                        New Campaign Wizard
                    </div>
                    <div class="content-area">

                        <div class="row">
                            <div class="col-md-12">

                                <div class="stepper-wrap">
                                    <div class="step-wizard">
                                        <div class="progress">
                                            <!--<div class="progressbar empty"></div>-->
                                            <div id="prog" class="progressbar"></div>
                                        </div>
                                        <ul class="stepper">
                                            <li class="active">
                                                <a href="#" data-step="0" id="step1">
                                                    <div class="step"><i class="fa fa-th-large fa-lg"></i></div>
                                                    <div class="title">Type</div>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#" data-step="1" id="step2">
                                                    <div class="step"><i class="fa fa-list fa-lg"></i></div>
                                                    <div class="title">List</div>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#" data-step="2" id="step3">
                                                    <div class="step"><i class="fa fa-address-card fa-lg"></i></div>
                                                    <div class="title">Template</div>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#" data-step="3" id="step4">
                                                    <div class="step"><i class="fa fa-send fa-lg"></i></div>
                                                    <div class="title">Send</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">

                                <div class="owl-carousel owl-theme campaign-slides">
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row no-gutters">
                                                    <div class="col-6 col-md-3">
                                                        <a class="campaign-type-1 active">
                                                            <div class="icon"><i class="fa fa-envelope"></i></div>
                                                            <div class="title d-none d-sm-block">Email Campaign</div>
                                                        </a>
                                                    </div>
                                                    <div class="col-6 col-md-3">
                                                        <a class="campaign-type-1">
                                                            <div class="icon"><i class="fa fa-tty"></i></div>
                                                            <div class="title d-none d-sm-block">SMS Campaign</div>
                                                        </a>
                                                    </div>
                                                    <div class="col-6 col-md-3">
                                                        <a class="campaign-type-1">
                                                            <div class="icon"><i class="fa fa-twitter"></i></div>
                                                            <div class="title d-none d-sm-block">Twitter Campaign</div>
                                                        </a>
                                                    </div>
                                                    <div class="col-6 col-md-3">
                                                        <a class="campaign-type-1">
                                                            <div class="icon"><i class="fa fa-send"></i></div>
                                                            <div class="title d-none d-sm-block">Email & Twitter</div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="heading text-center mb-3">
                                                    Sending List
                                                </div>
                                                <div class="text-center">
                                                    <div class="row">
                                                        <div class="col-11 col-lg-6 col-xl-4 mx-auto">
                                                            <div class="form-group">
                                                                <label>Select a existing user list</label>
                                                                <select class="form-control" id="exampleFormControlSelect1">
                                                                    <option>- Select -</option>
                                                                    <option>Test Group</option>
                                                                    <option>Friends</option>
                                                                    <option>Office</option>
                                                                    <option>Email List</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="staticEmail" class="col-sm-6 col-form-label text-center text-sm-right">Need a new list?</label>
                                                                <div class="col-sm-6 text-center text-sm-left">
                                                                    <button class="btn btn-primary">Add New</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="heading text-center mb-3">
                                                    Campaign Template
                                                </div>
                                                <div class="text-center">
                                                    <div class="row">
                                                        <div class="col-11 col-md-10 col-lg-10 col-xl-8 mx-auto">
                                                            <div class="row">
                                                                <div class="col-md-12 col-lg-3 text-center mb-2 mb-lg-0">
                                                                    <img src="img/layout.svg" alt="" class="img-thumbnail mx-auto">
                                                                </div>
                                                                <div class="col-md-12 col-lg-9">

                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="exampleFormControlSelect1" class="float-left">Select a existing template</label>
                                                                                <select class="form-control" id="exampleFormControlSelect1">
                                                                                    <option>- Select -</option>
                                                                                    <option>Base Template</option>
                                                                                    <option>All Template</option>
                                                                                    <option>Apple</option>
                                                                                    <option>QA test</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="float-left" for="end-date">End Date</label>
                                                                                <div class="input-group date" id="end-date" data-target-input="nearest">
                                                                                    <input type="text" class="form-control datetimepicker-input" data-target="#end-date" placeholder="1990-01-01"/>
                                                                                    <div class="input-group-append" data-target="#end-date" data-toggle="datetimepicker">
                                                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row form-group no-gutters">
                                                                        <label for="staticEmail" class="col-12 col-md-4 col-lg-5 col-xl-4 col-form-label text-center text-md-left">Start your campaign</label>
                                                                        <div class="col-12 col-md-8 col-lg-4 col-xl-3 text-center text-md-left">
                                                                            <button class="btn btn-primary">Start Now</button>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="heading text-center mb-3">
                                                    Start Campaign
                                                </div>
                                                <div class="text-center">
                                                    <div class="row">
                                                        <div class="col-11 col-md-7 col-lg-6 col-xl-5 mx-auto">
                                                            <form>
                                                                <div class="form-group">
                                                                    <label class="float-left">Send test email to</label>
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" placeholder="Email Address" aria-label="Email Address">
                                                                        <div class="input-group-append">
                                                                            <button class="btn btn-secondary" type="button">Send Test</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <div class="form-group row">
                                                                <label for="staticEmail" class="col-sm-6 col-form-label text-center text-sm-right">Start your campaign</label>
                                                                <div class="col-sm-6 text-center text-sm-left">
                                                                    <button class="btn btn-primary">Start Now</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>




                        <div></div>

                    </div>
                </div>

            </div>
        </div>

    </div>
    <?php include 'includes/app-footer.php'; ?>

</div>

<?php include 'includes/footer.php'; ?>

<script>
    $(document).ready(function() {

        //date picker
        $('#end-date').datetimepicker({
            format: 'YYYY-MM-DD',
            /*debug: true*/
        });

        $('.campaign-type-1').click(function () {
           $('.campaign-type-1').removeClass('active');
           $(this).addClass('active');
        });

        // campaign slider
        $('.owl-carousel').owlCarousel({
            items:1,
            margin:10,
            nav:true,
            navText: ['Back','Next'],
            onChanged:clicked_event
        });

        $('.stepper a').click(function () {
            var clicked = $(this).attr('data-step');
            console.log(clicked);
            $('.owl-carousel').trigger('to.owl.carousel',[clicked]);
        });

        function clicked_event(event){
            $('.stepper li').removeClass('active');

            var current = event.item.index+1;
            for (i = 1; i < current+1; i++) {
                $('.stepper li:nth-child('+ i +')').addClass('active');
            }
            if(current == 1){
                $('.progress .progressbar').css('width','0%');
            }else if(current == 2) {
                $('.progress .progressbar').css('width', '35%');
            }else if(current == 3){
                $('.progress .progressbar').css('width','65%');
            }else if(current == 4){
                $('.progress .progressbar').css('width','100%');
            }
        }
    });
</script>