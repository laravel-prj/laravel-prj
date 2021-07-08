@extends('admin.layouts.master')
@section('title', 'App - Top Page')
@section('style-libraries')
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"> --}}
@stop
@section('styles')
    {{-- custom css item suggest search --}}
    <style>
        .btn-create {
            padding: 4px 8px;
            margin-right: 16px;
            border-radius: 12%
        }

        .t-alert {
            position: fixed;
            margin: 0 auto;
            top: 50%;
            width: 50%;
            height: 70px;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 99999;
        }

    </style>
@stop
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                {!! \Session::get('success') !!}
            </div>
        @endif
        @if (\Session::has('error'))
            <div class="alert alert-danger">
                {!! \Session::get('error') !!}
            </div>
        @endif
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Manager Orders</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Manager Orders</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="card-header">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"
                        checked>
                    <label class="form-check-label" for="inlineRadio1">All</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                        value="option2">
                    <label class="form-check-label" for="inlineRadio2">Waiting</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                        value="option2">
                    <label class="form-check-label" for="inlineRadio2">Approve</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                        value="option2">
                    <label class="form-check-label" for="inlineRadio2">Reject</label>
                </div>
            </div>
            <!-- Default box -->
            <div class="card">
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th>
                                    id
                                </th>
                                <th>
                                    Customer
                                </th>
                                <th>
                                    Status
                                </th>
                                <th>
                                    Order Date
                                </th>
                                <th>
                                    Delivery Time
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->customer->first_name }} {{ $order->customer->last_name }}</td>
                                    <td class="project-actions text-right" style="text-align: center !important;">
                                        <iframe src="https://giphy.com/embed/Wodg2kOPJRLbw3Pfjh" width="50" height="50"
                                            frameBorder="0" class="giphy-embed" allowFullScreen
                                            style="display: none"></iframe>
                                        <select id="status{{ $order->id }}" class="form-control" name="status"
                                            onchange="return onChangeStatus({{ $order->id }});">
                                            <option value="0" @if ($order->status == 0) selected @endif>Waiting</option>
                                            <option value="1" @if ($order->status == 1) selected @endif>Approve</option>
                                            <option value="2" @if ($order->status == 2) selected @endif>Reject</option>
                                            <option value="3" @if ($order->status == 3) selected @endif>All</option>
                                        </select>
                                    </td>
                                    <td>{{ $order->order_date }}</td>
                                    @if ($order->delivery_time)
                                        <td id="delivery_time{{ $order->id }}">{{ $order->delivery_time }}</td>
                                    @else
                                        <td id="delivery_time{{ $order->id }}">ーーーーーー</td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@stop
@section('scripts')
    {{-- jquery.autocomplete.js --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.4.10/jquery.autocomplete.min.js"></script> --}}
    {{-- quick defined --}}
    <script>
        function onDeleteBrand(id) {
            var ok = confirm('Are you sure about that !!!!!!');
            if (ok) {
                location.href = '/admin-mo/brand/delete/' + id;
            }
        }
    </script>
@stop
