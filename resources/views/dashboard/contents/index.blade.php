<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Percetakan Rajawali</title>
    <!-- icon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{ asset('assets02/css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css_native/style.css') }}">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    @include('dashboard.layouts.navbar')

    <div id="layoutSidenav">
        @include('dashboard.layouts.sidebar')

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">
                                    <h3>{{ $countProduct }}</h3>
                                    <p>Jumlah Produk</p>
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-bag-shopping"></i>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">
                                    <h3>{{ $totalCategories }}</h3>
                                    <p>Jumlah Kategori Produk</p>
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-chart-simple"></i>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">
                                    <h3>{{ $totalPrice }}</h3>
                                    <p>Total Harga Semua Produk</p>
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-calculator"></i>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body">
                                    <h3>{{ $totalStock }}</h3>
                                    <p>Jumlah Stok Produk</p>
                                </div>
                                <div class="icon">
                                    <i class="fa-solid fa-box"></i>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- pie chart -->
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-pie me-1"></i>
                                    Stok produk/kategori
                                </div>
                                <div class="card-body">
                                    <div id="container-3" style="width:100%; height:300px;"></div>
                                </div>
                            </div>
                        </div>
                        <!-- area chart -->
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-area me-1"></i>
                                    Total harga produk/kategori
                                </div>
                                <div class="card-body">
                                    <div id="container-2" style="width:100%; height:300px;"></div>
                                </div>
                            </div>
                        </div>
                        <!-- bar chart -->
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-bar me-1"></i>
                                    Jumlah produk/kategori
                                </div>
                                <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <!-- footer -->
            @include('dashboard.layouts.footer')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets02/js/scripts.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    {{-- <script src="{{ asset('assets02/assets/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets02/assets/demo/chart-bar-demo.js') }}"></script>
    <script src="{{ asset('assets02/assets/demo/chart-pie-demo.js') }}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="{{ asset('assets02/js/datatables-simple-demo.js') }}"></script>

    {{-- Highchart --}}
    <script src="https://code.highcharts.com/highcharts.js"></script>

    <!-- HightCharts -->
    <script>
        // Bar Chart Example
        var ctx = document.getElementById("myBarChart");
        var myLineChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Desserts", "Seafood", "Snacks"],
                datasets: [{
                    label: "Revenue",
                    backgroundColor: "rgba(2,117,216,1)",
                    borderColor: "rgba(2,117,216,1)",
                    data: [
                        {{ $category1 ?? 0 }},
                        {{ $category2 ?? 0 }},
                        {{ $category3 ?? 0 }}
                    ],
                }],
            },
            options: {
                scales: {
                    xAxes: [{
                        time: {
                            unit: 'categories'
                        },
                        gridLines: {
                            display: false
                        },
                        ticks: {
                            maxTicksLimit: 6
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            min: 0,
                            max: 50,
                            maxTicksLimit: 5
                        },
                        gridLines: {
                            display: true
                        }
                    }],
                },
                legend: {
                    display: false
                }
            }
        });

        // jumlah stok per kategori
        document.addEventListener('DOMContentLoaded', function() {
            Highcharts.chart('container-3', {
                chart: {
                    type: 'pie'
                },
                title: {
                    text: 'Stok Produk/Kategori'
                },
                tooltip: {
                    valueSuffix: '%'
                },
                plotOptions: {
                    series: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: [{
                            enabled: true,
                            distance: 20
                        }, {
                            enabled: true,
                            distance: -40,
                            format: '{point.percentage:.1f}%',
                            style: {
                                fontSize: '1.2em',
                                textOutline: 'none',
                                opacity: 0.7
                            },
                            filter: {
                                operator: '>',
                                property: 'percentage',
                                value: 10
                            }
                        }]
                    }
                },
                series: [{
                    name: 'Percentage',
                    colorByPoint: true,
                    data: [{
                            name: 'Desserts',
                            y: {{ $stock1 }}
                        },
                        {
                            name: 'Seafood',
                            y: {{ $stock2 }}
                        },
                        {
                            name: 'Snacks',
                            y: {{ $stock3 }}
                        }
                    ]
                }]
            });

        })

        // total harga per kategori
        document.addEventListener('DOMContentLoaded', function() {
            Highcharts.chart('container-2', {
                chart: {
                    type: 'spline'
                },
                title: {
                    text: 'Total harga produk/kategori'
                },
                xAxis: {
                    categories: ['December'],
                    accessibility: {
                        description: 'Months of the year'
                    }
                },
                yAxis: {
                    title: {
                        text: 'Total harga (dalam ribuan)'
                    }
                },
                tooltip: {
                    crosshairs: true,
                    shared: true
                },
                plotOptions: {
                    spline: {
                        marker: {
                            radius: 4,
                            lineColor: '#666666',
                            lineWidth: 1
                        }
                    }
                },
                series: [{
                        name: 'Desserts',
                        marker: {
                            symbol: 'square'
                        },
                        data: [{{ $total3Des }}]

                    }, {
                        name: 'Seafood',
                        marker: {
                            symbol: 'diamond'
                        },
                        data: [{{ $total4Des }}]
                    },
                    {
                        name: 'Snacks',
                        marker: {
                            symbol: 'star'
                        },
                        data: [{{ $total5Des }}]
                    }
                ]
            });
        });
    </script>
</body>

</html>
