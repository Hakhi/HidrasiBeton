@extends('layout')

@section('container')

<div class="container-fluid">
    <div class="row">
        <!-- Area Chart suhu-->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-danger">Data Grafik suhu terhadap Waktu</h6>
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

        <!-- Area Chart F-->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Data Grafik Strenght terhadap Waktu</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="grafikStrength"></canvas>
                    </div>
                </div>
                <!-- end Area Chart Strength-->
            </div>
        </div>
        <!-- End of Strength chart -->
    </div>
    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Script suhu -->
    <script>
        var ctx = document.getElementById("grafiksuhu");
            var myLineChart = new Chart(ctx, { 
            type: 'line',
            data: {
                labels: {!!json_encode($waktu)!!},
                datasets: [{
                label: "suhu ",
                lineTension: 0.3,
                backgroundColor: "rgba(170, 0,0, 0.05)",
                borderColor: "rgba(170, 0,0, 1)",
                pointRadius: 1,
                pointBackgroundColor: "rgba(170, 0, 0, 1)",
                pointBorderColor: "rgba(170, 0, 0, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(170, 0, 0, 1)",
                pointHoverBorderColor: "rgba(170, 0, 0, 1)",
                pointHitRadius: 10,
                data: {!!json_encode($suhu)!!},
                }],
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
                },
                scales: {
                xAxes: [{
                }],
                yAxes: [{
                }],
                },
                legend: {
                display: false
                },
                tooltips: {
                displayColors: false,
                intersect: false,
                }
            }
            });
    </script>

    <!-- Script Strenght -->
    <script>
        var ctx = document.getElementById("grafikStrength");
            var myLineChart = new Chart(ctx, { 
            type: 'line',
            data: {
                labels: {!!json_encode($waktu)!!},
                datasets: [{
                label: "strenght ",
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
                data: {!!json_encode($strength)!!},
                }],
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
                },
                scales: {
                xAxes: [{
                    
                }],
                yAxes: [{
                   
                }],
                },
                legend: {
                display: false
                },
                tooltips: {
                displayColors: false,
                intersect: false,
                }
            }
            });
    </script>

</div>




@endsection