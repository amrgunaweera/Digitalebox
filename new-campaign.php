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
            <div class="content-panel col-md-12">
                <div class="content-inner">
                    <div class="content-area">

                        <div class="content-panel-sub">
                            <div class="panel-head">
                                New Campaign Wizard
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">

                                <div class="stepper-wrap">
                                    <div class="step-wizard">
                                        <div class="progress">
                                            <div class="progressbar empty"></div>
                                            <div id="prog" class="progressbar"></div>
                                        </div>
                                        <ul class="stepper">
                                            <li class="active">
                                                <a href="#" data-step="0" id="step1">
                                                    <div class="step"><i class="fa fa-photo"></i></div>
                                                    <div class="title">Type</div>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#" data-step="1" id="step2">
                                                    <div class="step"><i class="fa fa-photo"></i></div>
                                                    <div class="title">List</div>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#" data-step="2" id="step3">
                                                    <div class="step"><i class="fa fa-photo"></i></div>
                                                    <div class="title">Template</div>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#" data-step="3" id="step4">
                                                    <div class="step"><i class="fa fa-photo"></i></div>
                                                    <div class="title">Send</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">

                                <div class="owl-carousel owl-theme">
                                    <div class="item"><h4>1</h4></div>
                                    <div class="item"><h4>2</h4></div>
                                    <div class="item"><h4>3</h4></div>
                                    <div class="item"><h4>4</h4></div>
                                </div>

                            </div>
                        </div>




                        <div></div>

                    </div>
                </div>

            </div>
        </div>



        <?php include 'includes/app-footer.php'; ?>
    </div>

</div>

<?php include 'includes/footer.php'; ?>

<script>
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            items:1,
            margin:10,
            nav:true,
            onInitialized:clicked_event,
            onChange:clicked_event
        });

        $('.stepper a').click(function () {
            clicked_event(this);

        });

        function clicked_event(event){
            $('.stepper li').removeClass('active');

            //var clicked = $(selector).attr('data-step');
            var current = event.item.index+1;
            console.log(current);
            //$('.owl-carousel').trigger('to.owl.carousel',[clicked]);

            for (i = 1; i < current+1; i++) {
                $('.stepper li:nth-child('+ i +')').addClass('active');
            }
        }
    });
</script>