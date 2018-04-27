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
                        Statistics - People Statistics
                    </div>
                    <div class="desc">
                        Your online community graphical representation for Supporters, Prospect, Non Supporters & Unknown
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="main-breadcrumb pt-3 text-left text-md-right">
                        <a href="">Home</a> / <a href="">People</a> / <a href="">Statistics</a> / <span>People Statistics</span>
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
                        <a class="nav-link" href="analytics.php">Analytics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="posts.php">Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="">People</a>
                    </li>
                </ul>
                <div class="content-inner">
                    <div class="content-area">

                        <div class="row">
                            <div class="col-md-12">
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#v-pills-keywords" role="tab" aria-controls="pills-home" aria-selected="true">Keywords</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="" data-toggle="pill" href="#v-pills-age" role="tab" aria-controls="pills-profile" aria-selected="false">Age</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="ch-city" data-toggle="pill" href="#v-pills-city" role="tab" aria-controls="pills-contact" aria-selected="false">City</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="" data-toggle="pill" href="#v-pills-zip" role="tab" aria-controls="pills-contact" aria-selected="false">Zip</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="" data-toggle="pill" href="#v-pills-gender" role="tab" aria-controls="pills-contact" aria-selected="false">Gender</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="" data-toggle="pill" href="#v-pills-type" role="tab" aria-controls="pills-contact" aria-selected="false">Category</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="" data-toggle="pill" href="#v-pills-media" role="tab" aria-controls="pills-contact" aria-selected="false">Media</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="" data-toggle="pill" href="#v-pills-email" role="tab" aria-controls="pills-contact" aria-selected="false">Email</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-12">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane active" id="v-pills-keywords" role="tabpanel">
                                        <div class="form-row">
                                            <div class="form-group col-md-10">
                                                <select data-placeholder="Keywords" class="form-control chosen-select" multiple>
                                                    <option value="" selected>Test</option>
                                                    <option value="" selected>iPhone</option>
                                                    <option value="" selected>Google</option>
                                                    <option value="" selected>Galaxy8</option>
                                                    <option value="" selected>Android Headlines</option>
                                                    <option value="">HTC</option>
                                                    <option value="">One Plus</option>
                                                    <option value="">Huawei</option>
                                                    <option value="">Xiomi</option>
                                                    <option value="">LG</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <button type="submit" class="btn btn-primary">Search</button>
                                            </div>
                                        </div>

                                        <div id="chart-keywords"></div>
                                    </div>
                                    <div class="tab-pane" id="v-pills-age" role="tabpanel">
                                        <div id="chart-age"></div>
                                    </div>
                                    <div class="tab-pane" id="v-pills-city" role="tabpanel">
                                        <div id="chart-city"></div>
                                    </div>
                                    <div class="tab-pane" id="v-pills-zip" role="tabpanel">
                                        <div id="chart-zip"></div>
                                    </div>
                                    <div class="tab-pane" id="v-pills-gender" role="tabpanel">
                                        <div id="chart-gender"></div>
                                    </div>
                                    <div class="tab-pane" id="v-pills-type" role="tabpanel">
                                        <div id="chart-category"></div>
                                    </div>
                                    <div class="tab-pane" id="v-pills-media" role="tabpanel">
                                        <div id="chart-media"></div>
                                    </div>
                                    <div class="tab-pane" id="v-pills-email" role="tabpanel">
                                        <div id="chart-email"></div>
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

<?php include 'includes/footer.php'; ?>

<script>
    $(document).ready(function () {
        $(".chosen-select").chosen();


    });


    ////////////////////////////////  Keywords  ////////////////////////////////
    Highcharts.chart('chart-keywords', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'People Statistics by Keywords'
        },
        xAxis: {
            categories: ['Test', 'iPhone', 'Google', 'Galaxy8', 'Android Headlines']
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Total Users'
            },
            stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
                }
            }
        },
        legend: {
            align: 'right',
            x: -30,
            verticalAlign: 'top',
            y: 25,
            floating: true,
            backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
            borderColor: '#CCC',
            borderWidth: 1,
            shadow: false
        },
        tooltip: {
            headerFormat: '<b>{point.x}</b><br/>',
            pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
        },
        plotOptions: {
            column: {
                stacking: 'normal',
                dataLabels: {
                    useHTML: true,
                    enabled: true,
                    color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
                }
            }
        },
        colors: ['#0274b3', '#57bdb9', '#ed7e7d', '#2daae2', '#fdd695'],
        series: [{
            name: 'Supporters',
            data: [5, 3, 4, 7, 2]
        }, {
            name: 'Prospects',
            data: [2, 2, 3, 2, 1]
        }, {
            name: 'Non Supporters',
            data: [3, 4, 4, 2, 5]
        }, {
            name: 'Unknown',
            data: [5, 3, 2, 1, 4]
        }, {
            name: 'Others',
            data: [4, 3, 2, 1, 5]
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

    ////////////////////////////////  Age  ////////////////////////////////
    var colors = Highcharts.getOptions().colors,
        categories = ['Below 40', '40 - 60', 'Above 60'],
        data = [{
            y: 25,
            color: '#0274b3',
            drilldown: {
                name: 'Below 40',
                categories: ['Prospects', 'Non Supporters', 'Others'],
                data: [5, 15, 5],
                color: colors[0]
            }
        }, {
            y: 40,
            color: '#57bdb9',
            drilldown: {
                name: '40 - 60',
                categories: ['Prospects', 'Non Supporters', 'Others'],
                data: [15, 20, 5],
                color: colors[1]
            }
        }, {
            y: 35,
            color: '#ed7e7d',
            drilldown: {
                name: 'Above 60',
                categories: ['Prospects', 'Non Supporters', 'Others'],
                data: [15, 10, 10],
                color: colors[2]
            }
        }],
        browserData = [],
        versionsData = [],
        i,
        j,
        dataLen = data.length,
        drillDataLen,
        brightness;


    // Build the data arrays
    for (i = 0; i < dataLen; i += 1) {

        // add browser data
        browserData.push({
            name: categories[i],
            y: data[i].y,
            color: data[i].color
        });

        // add version data
        drillDataLen = data[i].drilldown.data.length;
        for (j = 0; j < drillDataLen; j += 1) {
            brightness = 0.2 - (j / drillDataLen) / 5;
            versionsData.push({
                name: data[i].drilldown.categories[j],
                y: data[i].drilldown.data[j],
                color: Highcharts.Color(data[i].color).brighten(brightness).get()
            });
        }
    }

    // Create the chart
    Highcharts.chart('chart-age', {
        chart: {
            type: 'pie'
        },
        title: {
            text: 'People Statistics by Age'
        },
        subtitle: {
            text: 'Total Users: 6 (with Age)'
        },
        plotOptions: {
            pie: {
                shadow: false,
                center: ['50%', '50%']
            }
        },
        tooltip: {
            valueSuffix: '%'
        },
        series: [{
            name: 'Age',
            data: browserData,
            size: '60%',
            dataLabels: {
                formatter: function () {
                    return this.y > 5 ? this.point.name : null;
                },
                useHTML: true,
                color: '#ffffff',
                distance: -30
            }
        }, {
            name: 'Categories',
            data: versionsData,
            size: '80%',
            innerSize: '60%',
            dataLabels: {
                formatter: function () {
                    // display only if larger than 1
                    return this.y > 1 ? '<b>' + this.point.name + ':</b> ' +
                        this.y + '%' : null;
                }
            },
            id: 'versions'
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    series: [{
                        id: 'versions',
                        dataLabels: {
                            useHTML: false,
                            enabled: false
                        }
                    }]
                }
            }]
        }
    });


    ////////////////////////////////  City  ////////////////////////////////
    Highcharts.chart('chart-city', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'People Statistics by Top 5 Cities'
        },
        xAxis: {
            categories: ['Cayenne', 'Cabourg', 'Colombo', 'Paris', 'London']
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Total Users'
            },
            stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
                }
            }
        },
        legend: {
            align: 'right',
            x: -30,
            verticalAlign: 'top',
            y: 25,
            floating: true,
            backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
            borderColor: '#CCC',
            borderWidth: 1,
            shadow: false
        },
        tooltip: {
            headerFormat: '<b>{point.x}</b><br/>',
            pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
        },
        plotOptions: {
            column: {
                stacking: 'normal',
                dataLabels: {
                    useHTML: true,
                    enabled: true,
                    color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
                }
            }
        },
        colors: ['#0274b3', '#57bdb9', '#ed7e7d', '#2daae2', '#fdd695'],
        series: [{
            name: 'Supporters',
            data: [2, 2, 3, 2, 1]
        }, {
            name: 'Prospects',
            data: [5, 3, 4, 7, 2]
        }, {
            name: 'Non Supporters',
            data: [4, 3, 2, 1, 5]
        }, {
            name: 'Unknown',
            data: [3, 4, 4, 2, 5]
        }, {
            name: 'Others',
            data: [5, 3, 2, 1, 4]
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



    ////////////////////////////////  Zip Code  ////////////////////////////////
    Highcharts.chart('chart-zip', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'People Statistics by Top 5 Zip Code'
        },
        xAxis: {
            categories: ['14390', '10120', '97306', '2060', '97299']
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Total Users'
            },
            stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
                }
            }
        },
        legend: {
            align: 'right',
            x: -30,
            verticalAlign: 'top',
            y: 25,
            floating: true,
            backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
            borderColor: '#CCC',
            borderWidth: 1,
            shadow: false
        },
        tooltip: {
            headerFormat: '<b>{point.x}</b><br/>',
            pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
        },
        plotOptions: {
            column: {
                stacking: 'normal',
                dataLabels: {
                    useHTML: true,
                    enabled: true,
                    color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
                }
            }
        },
        colors: ['#0274b3', '#57bdb9', '#ed7e7d', '#2daae2', '#fdd695'],
        series: [{
            name: 'Supporters',
            data: [4, 3, 2, 1, 5]
        }, {
            name: 'Prospects',
            data: [3, 4, 4, 2, 5]
        }, {
            name: 'Non Supporters',
            data: [2, 2, 3, 2, 1]
        }, {
            name: 'Unknown',
            data: [5, 3, 2, 1, 4]
        }, {
            name: 'Others',
            data: [5, 3, 4, 7, 2]
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

    ////////////////////////////////  Gender  ////////////////////////////////
    Highcharts.chart('chart-gender', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'People Statistics by Gender'
        },
        xAxis: {
            categories: ['Male', 'Female', 'Other']
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Total Users'
            },
            stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
                }
            }
        },
        legend: {
            align: 'right',
            x: -30,
            verticalAlign: 'top',
            y: 25,
            floating: true,
            backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
            borderColor: '#CCC',
            borderWidth: 1,
            shadow: false
        },
        tooltip: {
            headerFormat: '<b>{point.x}</b><br/>',
            pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
        },
        plotOptions: {
            column: {
                stacking: 'normal',
                dataLabels: {
                    useHTML: true,
                    enabled: true,
                    color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
                }
            }
        },
        colors: ['#0274b3', '#57bdb9', '#ed7e7d', '#2daae2', '#fdd695'],
        series: [{
            name: 'Supporters',
            data: [5, 3, 4]
        }, {
            name: 'Prospects',
            data: [4, 3, 2]
        }, {
            name: 'Non Supporters',
            data: [5, 3, 2]
        }, {
            name: 'Unknown',
            data: [2, 2, 3]
        }, {
            name: 'Others',
            data: [3, 4, 4]
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

    ////////////////////////////////  Category  ////////////////////////////////
    Highcharts.chart('chart-category', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'People Statistics by Category'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        colors: ['#0274b3', '#57bdb9', '#ed7e7d', '#2daae2', '#fdd695'],
        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: [{
                name: 'Supporters',
                y: 56.33
            }, {
                name: 'Prospects',
                y: 24.03,
                sliced: true,
                selected: true
            }, {
                name: 'Non Supporters',
                y: 10.38
            }, {
                name: 'Unknown',
                y: 4.77
            }, {
                name: 'Others',
                y: 0.91
            }]
        }]
    });

    ////////////////////////////////  Media  ////////////////////////////////
    Highcharts.chart('chart-media', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'People Statistics by Keywords'
        },
        xAxis: {
            categories: ['Mobile', 'Email', 'FB', 'Ln', 'Tw', 'Bitly', 'Mc', 'Change']
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Total Users'
            },
            stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
                }
            }
        },
        legend: {
            align: 'right',
            x: -30,
            verticalAlign: 'top',
            y: 25,
            floating: true,
            backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
            borderColor: '#CCC',
            borderWidth: 1,
            shadow: false
        },
        tooltip: {
            headerFormat: '<b>{point.x}</b><br/>',
            pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
        },
        plotOptions: {
            column: {
                stacking: 'normal',
                dataLabels: {
                    useHTML: true,
                    enabled: true,
                    color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
                }
            }
        },
        colors: ['#0274b3', '#57bdb9', '#ed7e7d', '#2daae2', '#fdd695'],
        series: [{
            name: 'Supporters',
            data: [5, 3, 4, 7, 2, 6, 8, 2]
        }, {
            name: 'Prospects',
            data: [2, 2, 3, 2, 1, 1, 1, 1]
        }, {
            name: 'Non Supporters',
            data: [3, 4, 4, 2, 5, 2, 2, 1]
        }, {
            name: 'Unknown',
            data: [5, 3, 2, 1, 4, 1, 3, 2]
        }, {
            name: 'Others',
            data: [4, 3, 2, 1, 5, 3, 2, 1]
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

    ////////////////////////////////  Email  ////////////////////////////////
    Highcharts.chart('chart-email', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Statistics by Email'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        colors: ['#0274b3', '#57bdb9', '#ed7e7d', '#2daae2'],
        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: [{
                name: 'Un Subscribe',
                y: 56.33
            }, {
                name: 'Bounced',
                y: 24.03,
                sliced: true,
                selected: true
            }, {
                name: 'Blocked',
                y: 10.38
            }, {
                name: 'Useable emails',
                y: 4.77
            }]
        }]
    });





</script>