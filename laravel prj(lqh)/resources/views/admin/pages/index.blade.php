@extends('admin.layouts.master')
@section('title', 'App - Top Page')
@section('style-libraries')
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"> --}}
@stop
@section('styles')
    {{-- custom css item suggest search --}}
    <style>
    </style>
@stop
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ asset('/admin-mol') }}">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{ $numDashBoard['newOrder'] }}</h3>
                                <p>New Orders (Current Month)</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $numDashBoard['product'] }}</h3>
                                <p>Product</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ $numDashBoard['customerRegistration'] }}</h3>
                                <p>User Registrations</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{ $numDashBoard['completedOreder'] }}</h3>
                                <p>Completed Order</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <section class="col-lg-5 connectedSortable">
                        <canvas id="myChart" width="400" height="200"></canvas>
                    </section>

                    <section class="col-lg-5 offset-md-1 connectedSortable">
                        <canvas id="myChart2" width="400" height="200"></canvas>
                    </section>
                    <!-- /.Left col -->

                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@stop
@section('scripts')
    <script>
        var itemNum;
        var hotNum;
        var normalNum;


        function resolveAfter2Seconds() {
            return new Promise(resolve => {
                let day = new Date();
                let month = day.getMonth() + 1;
                $.ajax({
                    type: "get",
                    url: window.location.origin + "/api/ajaxLoadChart",
                    data: {
                        month: month
                    },
                    success: function(response) {
                        console.log(response);
                        itemNum = response.itemNum;
                        hotNum = response.hotNum;
                        normalNum = response.normalNum;
                        resolve(itemNum, hotNum, normalNum);
                    }
                });
            });
        }

        var ctx = document.getElementById('myChart').getContext('2d');
        async function asyncCall() {
            const result = await resolveAfter2Seconds();
            const myChart = await new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['SaleItem', 'Hot', 'Normal'],
                    datasets: [{
                        label: 'Current Month',
                        data: [itemNum, hotNum, normalNum],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }
        asyncCall();


        // Chart 2
        var priceNum;
        var discountNum;

        function resolveAfter2() {
            return new Promise(resolve => {
                let day = new Date();
                let month = day.getMonth() + 1;
                $.ajax({
                    type: "get",
                    url: window.location.origin + "/api/ajaxLoadChart2",
                    data: {
                        month: month
                    },
                    success: function(response) {
                        priceNum = response.priceNum;
                        discountNum = response.discountNum;
                        resolve(priceNum, discountNum);
                    }
                });
            });
        }

        var ctx2 = document.getElementById('myChart2').getContext('2d');
        async function asyncCall2() {
            const result = await resolveAfter2();
            const myChart2 = await new Chart(ctx2, {
                type: 'bar',
                data: {
                    labels: ['Price', 'Discount'],
                    datasets: [{
                        label: 'Current Month',
                        data: [priceNum, discountNum],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }
        asyncCall2();
    </script>
@stop
