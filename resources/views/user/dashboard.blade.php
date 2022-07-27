@extends('layout')

@section('container')

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 ">Dashboard</h1>
    </div>
    <!-- Content Row -->
    <div class="row">
        <!-- kartu suhu -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Suhu</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$datakartu['suhu']}} °celcius</div>
                        </div>
                        <div class="col-auto">
                            <img src="img\temp.svg" style="height:50px">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- kartu panjang -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                penyusutan (panjang)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$datakartu['panjang']}} cm</div>
                        </div>
                        <div class="col-auto">
                            <img src="img\waterlevel.svg" style="height:50px">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Row -->

        <div class="row">
            <!-- Area Chart suhu-->
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-danger">Data Grafik suhu</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="grafiksuhu"></canvas>
                        </div>
                    </div>
                    <!-- end Area Chart suhu-->
                </div>

            </div>
            <!-- End of suhu chart -->

            <!-- Area Chart panjang-->
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Data Grafik penyusutan (panjang)</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="grafikpanjang"></canvas>
                        </div>
                    </div>
                    <!-- end Area Chart penyusutan-->
                </div>
            </div>
            <!-- End of penyusutan chart -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->

    <!-- Script suhu -->
    <script>
        var ctx = document.getElementById("grafiksuhu");
            var myLineChart = new Chart(ctx, { 
            type: 'line',
            data: {
                labels: {!!json_encode($time)!!},
                datasets: [{
                label: "suhu ",
                lineTension: 0.3,
                backgroundColor: "rgba(170, 0,0, 0.05)",
                borderColor: "rgba(170, 0,0, 1)",
                pointRadius: 1,
                pointHoverRadius: 3,
                pointHitRadius: 10,
                data: {!!json_encode($suhu)!!},
                }],
            },
            options: {
                maintainAspectRatio: false,    
                scales: {
                    x: {
                        title:{
                            display: true,
                            text: 'waktu',
                        }
                    },
                    y:{
                        title:{
                            display: true,
                            text: 'waktu',
                        }
                    }  
                },
                legend: {
                    display: false,
                },
                tooltips: {
                    displayColors: false,
                    intersect: false,
                },
            }
            });
    </script>

    <!-- Script susut -->
    <script>
        var ctx = document.getElementById("grafikpanjang");
            var myLineChart = new Chart(ctx, { 
            type: 'line',
            data: {
                labels: {!!json_encode($time)!!},
                datasets: [{
                label: "level ",
                lineTension: 0.3,
                backgroundColor: "rgba(78, 115, 223, 0.05)",
                borderColor: "rgba(78, 115, 223, 1)",
                pointRadius: 1,
                pointBackgroundColor: "rgba(78, 115, 223, 1)",
                pointBorderColor: "rgba(78, 115, 223, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: {!!json_encode($panjang)!!},
                }],
            },
            options: {
                maintainAspectRatio: false,    
                scales: {
                    x: {
                        title:{
                            display: true,
                            text: 'waktu',
                        }
                    },
                    y:{
                        title:{
                            display: true,
                            text: 'waktu',
                        }
                    }  
                },
                legend: {
                    display: false,
                },
                tooltips: {
                    displayColors: false,
                    intersect: false,
                },
            }
        });
    </script>

    @endsection