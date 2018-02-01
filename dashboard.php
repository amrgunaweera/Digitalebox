<?php include 'includes/header.php'; ?>

    <div class="app-header">
        <?php include 'includes/app-header.php'; ?>
    </div>

    <div class="app-body">

	    <?php include 'includes/side-bar.php'; ?>

	    <div class="app-content">


            <div class="dashboard">

                <div class="row highlights">

                    <div class="col-md-3">
                        <div class="boxes" id="box1">
                            <div class="ml-2">
                                <div class="icon">
                                    <i class="fa fa-user-circle"></i>
                                </div>
                                <div class="text">
                                    <div class="title col-md-12">
                                        Total Users
                                    </div>
                                    <div class="value col-md-12">
                                        24,791
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="boxes" id="box2">
                            <div class="ml-2">
                                <div class="icon">
                                    <i class="fa fa-thumbs-up"></i>
                                </div>
                                <div class="text">
                                    <div class="title col-md-12">
                                        Supporters
                                    </div>
                                    <div class="value col-md-12">
                                        26
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="boxes" id="box3">
                            <div class="ml-2">
                                <div class="icon">
                                    <i class="fa fa-dot-circle-o"></i>
                                </div>
                                <div class="text">
                                    <div class="title col-md-12">
                                        Prospects
                                    </div>
                                    <div class="value col-md-12">
                                        20,502
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="boxes" id="box4">
                            <div class="ml-2">
                                <div class="icon">
                                    <i class="fa fa-thumbs-down"></i>
                                </div>
                                <div class="text">
                                    <div class="title col-md-12">
                                        Non Supporters
                                    </div>
                                    <div class="value col-md-12">
                                        2,542
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-8">
                        <div class="content-panel">
                            <div class="panel-head">Community Growth</div>
                            <div id="line-chart"></div>
                        </div>
                    </div>

                    <div class="col-md-4">

                    </div>


                </div>

            </div>


            <script type="text/javascript">

                Highcharts.chart('line-chart', {

                    title: {
                        text: 'Solar Employment Growth by Sector, 2010-2016'
                    },

                    subtitle: {
                        text: 'Source: thesolarfoundation.com'
                    },

                    yAxis: {
                        title: {
                            text: 'Number of Employees'
                        }
                    },
                    legend: {
                        layout: 'vertical',
                        align: 'right',
                        verticalAlign: 'middle'
                    },

                    plotOptions: {
                        series: {
                            pointStart: 2010
                        }
                    },

                    series: [{
                        name: 'Installation',
                        data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
                    }, {
                        name: 'Manufacturing',
                        data: [24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434]
                    }, {
                        name: 'Sales & Distribution',
                        data: [11744, 17722, 16005, 19771, 20185, 24377, 32147, 39387]
                    }, {
                        name: 'Project Development',
                        data: [null, null, 7988, 12169, 15112, 22452, 34400, 34227]
                    }, {
                        name: 'Other',
                        data: [12908, 5948, 8105, 11248, 8989, 11816, 18274, 18111]
                    }]

                });
            </script>

            <?php include 'includes/app-footer.php'; ?>
        </div>

    </div>

<?php include 'includes/footer.php'; ?>