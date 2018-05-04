
<?php include 'includes/header.php'; ?>

    <div class="app-header">
        <?php include 'includes/app-header.php'; ?>
    </div>

    <div class="app-body">

	    <?php include 'includes/side-bar.php'; ?>

	    <div class="app-content">

            <?php include 'includes/config-panel.php'; ?>

            <div class="dashboard">

                <style>
                    .highcharts-credits{
                        display: none;
                    }
                </style>

                <div class="row highlights">

                    <div class="col-sm-6 col-xl-3">
                        <div class="boxes" id="box1">
                            <div class="row">
                                <div class="icon col-4">
                                    <i class="fa fa-user-circle"></i>
                                </div>
                                <div class="text col-8">
                                    <div class="title row">
                                        Total Users
                                    </div>
                                    <div class="value row">
                                        24,791
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <div class="boxes" id="box2">
                            <div class="row">
                                <div class="icon col-4">
                                    <i class="fa fa-thumbs-up"></i>
                                </div>
                                <div class="text col-8">
                                    <div class="title row">
                                        Supporters
                                    </div>
                                    <div class="value row">
                                        26
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <div class="boxes" id="box3">
                            <div class="row">
                                <div class="icon col-4">
                                    <i class="fa fa-dot-circle-o"></i>
                                </div>
                                <div class="text col-8">
                                    <div>
                                        <div class="title row">
                                            Prospects
                                        </div>
                                        <div class="value row">
                                            20,502
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <div class="boxes" id="box4">
                            <div class="row">
                                <div class="icon col-4">
                                    <i class="fa fa-thumbs-down"></i>
                                </div>
                                <div class="text col-8">
                                    <div class="title row">
                                        Non Supporters
                                    </div>
                                    <div class="value row">
                                        2,542
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-12 col-xl-8">
                        <div class="content-panel">
                            <div class="content-inner">
                                <div class="panel-head">Community Growth</div>
                                <div class="content-area chart-side-padding">
                                    <div id="line-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-xl-4">
                        <div class="content-panel">
                            <div class="content-inner">
                                <div class="panel-head">Campaign Media</div>
                                <div class="content-area chart-side-padding">
                                    <div id="donut-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-12 col-xl-6">
                        <div class="content-panel">
                            <div class="content-inner">
                                <div class="panel-head">Social Activities</div>

                                <div class="content-area">
                                    <div id="activity">

                                        <div class="row">
                                            <div class="col-md-12">

                                                <a class="line" href="">

                                                    <div class="media">
                                                        <div class="profile-pic">
                                                            <img src="img/sample-profile-1.jpg" alt="Profile picture">
                                                        </div>
                                                        <div class="media-body text">
                                                            <div class="desc">
                                                                In recent days, we've had a bug displaying an error message when trying to import a file. We made the update. Everything is in order. However, if you notice a problem make us sign.
                                                            </div>
                                                            <div class="account">
                                                            <span class="icons">
                                                                <i class="fa fb fa-facebook-square"></i>
                                                                <i class="fa in fa-linkedin-square"></i>
                                                            </span>
                                                                <span class="account-name">@marcelleHalphen</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>

                                                <a class="line" href="">

                                                    <div class="media">
                                                        <div class="profile-pic">
                                                            <img src="img/sample-profile-2.jpg" alt="Profile picture">
                                                        </div>
                                                        <div class="media-body text">
                                                            <div class="desc">
                                                                Belgian political parties equip themselves with electoral strategy software, DigitaleBox in Metrotime.be http://bit.ly/2uPfuzp #compol #belgium
                                                            </div>
                                                            <div class="account">
                                                            <span class="icons">
                                                                <i class="fa fb fa-facebook-square"></i>
                                                                <i class="fa tw fa-twitter-square"></i>
                                                                <i class="fa in fa-linkedin-square"></i>
                                                            </span>
                                                                <span class="account-name">@GrégoryDelafose</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </a>

                                                <a class="line" href="">

                                                    <div class="media">
                                                        <div class="profile-pic">
                                                            <img src="img/user-profile.png" alt="Profile picture">
                                                        </div>
                                                        <div class="media-body text">
                                                            <div class="desc">
                                                                Corrections in progress on a bug found in the function fusion and match contact, you will be notified as soon as resolution. For more information write to us at contact@digitalebox.fr
                                                            </div>
                                                            <div class="account">
                                                            <span class="icons">
                                                                <i class="fa in fa-linkedin-square"></i>
                                                            </span>
                                                                <span class="account-name">@raoul-gaudin</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </a>

                                                <a class="line" href="">

                                                    <div class="media">
                                                        <div class="profile-pic">
                                                            <img src="img/sample-profile-2.jpg" alt="Profile picture">
                                                        </div>
                                                        <div class="media-body text">
                                                            <div class="desc">
                                                                Partial Legislative: Will the #PS lose its last seat in #HauteGaronne? https://t.co/iWsbZB5LGU #compol
                                                            </div>
                                                            <div class="account">
                                                            <span class="icons">
                                                                <i class="fa fb fa-facebook-square"></i>
                                                                <i class="fa in fa-linkedin-square"></i>
                                                            </span>
                                                                <span class="account-name">@GrégoryDelafose</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </a>

                                                <a class="line" href="">

                                                    <div class="media">
                                                        <div class="profile-pic">
                                                            <img src="img/user-profile.png" alt="Profile picture">
                                                        </div>
                                                        <div class="media-body text">
                                                            <div class="desc">
                                                                Partial Legislative: The campaign more than ever digital https://t.co/m992M9Eyt1 #Guyane #compol
                                                            </div>
                                                            <div class="account">
                                                            <span class="icons">
                                                                <i class="fa fb fa-facebook-square"></i>
                                                            </span>
                                                                <span class="account-name">@anne-marie-calvet</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </a>

                                                <a class="line" href="">

                                                    <div class="media">
                                                        <div class="profile-pic">
                                                            <img src="img/user-profile.png" alt="Profile picture">
                                                        </div>
                                                        <div class="media-body text">
                                                            <div class="desc">
                                                                The reform of the constitution would increase the number of parliamentarians from 925 to 616, to be divided between the two chambers https://t.co/3QxLOKOpNw #directan #qag #compol
                                                            </div>
                                                            <div class="account">
                                                            <span class="icons">
                                                                <i class="fa fb fa-facebook-square"></i>
                                                                <i class="fa tw fa-twitter-square"></i>
                                                                <i class="fa in fa-linkedin-square"></i>
                                                            </span>
                                                                <span class="account-name">@albanClérisseau</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </a>

                                                <a class="line" href="">

                                                    <div class="media">
                                                        <div class="profile-pic">
                                                            <img src="img/sample-profile-1.jpg" alt="Profile picture">
                                                        </div>
                                                        <div class="media-body text">
                                                            <div class="desc">
                                                                Christophe Castaner launches his major works for #EnMarche
                                                                "Heal the local implantation in view of municipal"
                                                                https://t.co/nhN60jDWjk #compol #municipal2020
                                                            </div>
                                                            <div class="account">
                                                                <span class="icons">
                                                                    <i class="fa tw fa-twitter-square"></i>
                                                                </span>
                                                                <span class="account-name">@marcelleHalphen</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </a>

                                                <a class="line read-more" href="">

                                                    <div class="text-center">
                                                        Read More
                                                    </div>

                                                </a>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-12 col-xl-6">
                        <div class="content-panel">
                            <div class="content-inner">
                                <div class="panel-head">Campaign Media</div>
                                <div class="content-area chart-side-padding">
                                    <div id="line-chart-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>


            <script type="text/javascript">

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
                            text: 'Users'
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
                        data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
                    }, {
                        name: 'Supporters',
                        data: [24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434]
                    }, {
                        name: 'Prospects',
                        data: [11744, 17722, 16005, 19771, 20185, 24377, 32147, 39387]
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


                ////////////////////////////////  Donut Chart ////////////////////////////////
                Highcharts.chart('donut-chart', {
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: 0,
                        plotShadow: false
                    },
                    title: {
                        text: '',
                        align: 'center',
                        verticalAlign: 'middle',
                        y: -10
                    },
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                    },
                    plotOptions: {
                        pie: {
                            dataLabels: {
                                useHTML: true,
                                enabled: true,
                                distance: -40,
                                style: {
                                    fontWeight: 'bold',
                                    color: 'white'
                                }
                            },
                            startAngle: 0,
                            endAngle: 360,
                            center: ['50%', '50%']
                        }
                    },

                    colors: ['#0274b3', '#2daae2', '#3b5998', '#ed7e7d', '#fdd695'],

                    series: [{
                        type: 'pie',
                        name: 'Browser share',
                        innerSize: '50%',
                        data: [
                            ['Facebook',   20],
                            ['Twitter',       30],
                            ['Linkedin', 15],
                            ['Email',    20],
                            ['Mobile',     25],
                            {
                                name: 'Proprietary or Undetectable',
                                y: 0.2,
                                dataLabels: {
                                    enabled: false
                                }
                            }
                        ]
                    }]
                });


                ////////////////////////////////  Line Chart 2 ////////////////////////////////
                Highcharts.chart('line-chart-2', {

                    title: {
                        text: ' '
                    },
                    xAxis: {
                        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                    },
                    yAxis: {
                        title: {
                            text: 'Users'
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
                        data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
                    }, {
                        name: 'Supporters',
                        data: [24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434]
                    }, {
                        name: 'Prospects',
                        data: [11744, 17722, 16005, 19771, 20185, 24377, 32147, 39387]
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


        </div>

        <?php include 'includes/app-footer.php'; ?>

    </div>

<?php include 'includes/footer.php'; ?>