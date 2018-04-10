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
                        Statistics - Analytics
                    </div>
                    <div class="desc">
                        Your online community growth at a glance
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <a href="">People</a> / <a href="">Statistics</a> / <span>Analytics</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row no-gutters">
            <div class="content-panel col-md-12">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="statistics.php">Overview</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="">Analytics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="posts.php">Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="people-stats.php">People Statistics</a>
                    </li>
                </ul>
                <div class="content-inner">
                    <div class="content-area">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="content-panel-sub">
                                    <div class="panel-head">Total Supporters</div>
                                    <div class="content-area">
                                        <div class="row no-gutters">
                                            <div class="col-md-8 col-xl-9">

                                            </div>
                                            <div class="col-md-4 col-xl-3">
                                                <form>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <label class="input-group-text" for="inputGroupSelect01">Range</label>
                                                        </div>
                                                        <select class="custom-select" id="inputGroupSelect01">
                                                            <option selected>Last 6 Months</option>
                                                            <option value="1">Last 3 Months</option>
                                                            <option value="2">Last Month</option>
                                                            <option value="3">Last Week</option>
                                                        </select>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-md-12">
                                                <div id="line-chart"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">

                                <div class="content-panel-sub">
                                    <div class="panel-head">New Supporters</div>
                                    <div class="content-area">
                                        <div class="row no-gutters">
                                            <div class="col-md-8 col-xl-9">

                                            </div>
                                            <div class="col-md-4 col-xl-3">
                                                <form>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <label class="input-group-text" for="inputGroupSelect01">Range</label>
                                                        </div>
                                                        <select class="custom-select" id="inputGroupSelect01">
                                                            <option selected>Last 6 Months</option>
                                                            <option value="1">Last 3 Months</option>
                                                            <option value="2">Last Month</option>
                                                            <option value="3">Last Week</option>
                                                        </select>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                        <div class="row no-gutters">
                                            <div class="col-md-12">
                                                <div id="line-chart1"></div>
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

        <?php include 'includes/app-footer.php'; ?>
    </div>

</div>

<?php include 'includes/footer.php'; ?>

<script>
    $(document).ready(function () {

    });


    ////////////////////////////////  Line Chart ////////////////////////////////
    Highcharts.chart('line-chart', {

        title: {
            text: ' '
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'User Count'
            }
        },
        legend: {
            layout: 'horizontal',
            align: 'center',
            verticalAlign: 'top'
        },

        plotOptions: {
            series: {
                //pointStart: 2010
            }
        },

        colors: ['#3f80be', '#fdd695', '#57bdb9'],

        series: [{
            name: 'Total Users',
            data: [43934, 52503, 69658, 57177, 97031, 137133, 119931, 154175]
        }, {
            name: 'Supporters',
            data: [24916, 24064, 29851, 29742, 32490, 38121, 30282, 40434]
        }, {
            name: 'Prospects',
            data: [11744, 17722, 19771, 16005, 20185, 32147, 24377, 39387]
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 700
                },
                chartOptions: {
                    legend: {
                        x: 0,
                        y: 10,
                        floating: false,
                        align: 'center',
                        verticalAlign: 'bottom',
                        layout: 'horizontal'
                    },
                    yAxis: {
                        labels: {
                            align: 'left',
                            x: 0,
                            y: -5
                        },
                        title: {
                            text: null
                        }
                    },
                    subtitle: {
                        text: null
                    },
                    credits: {
                        enabled: false
                    }
                }
            }]
        }

    });

    ////////////////////////////////  Line Chart 1 ////////////////////////////////
    Highcharts.chart('line-chart1', {

        title: {
            text: ' '
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'User Count'
            }
        },
        legend: {
            layout: 'horizontal',
            align: 'center',
            verticalAlign: 'top'
        },

        plotOptions: {
            series: {
                //pointStart: 2010
            }
        },

        colors: ['#3f80be'],

        series: [{
            name: 'New Supporters',
            data: [24916, 24064, 29742, 32490, 29851, 30282, 40434, 38121]
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 700
                },
                chartOptions: {
                    legend: {
                        x: 0,
                        y: 10,
                        floating: false,
                        align: 'center',
                        verticalAlign: 'bottom',
                        layout: 'horizontal'
                    },
                    yAxis: {
                        labels: {
                            align: 'left',
                            x: 0,
                            y: -5
                        },
                        title: {
                            text: null
                        }
                    },
                    subtitle: {
                        text: null
                    },
                    credits: {
                        enabled: false
                    }
                }
            }]
        }

    });
</script>