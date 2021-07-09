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
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="4"
                        checked>
                    <label class="form-check-label" for="inlineRadio1">All</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="0">
                    <label class="form-check-label" for="inlineRadio2">Waiting</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="1">
                    <label class="form-check-label" for="inlineRadio2">Approve</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2">
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
                                    Total Price ($)
                                </th>
                                <th>
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody id="oderBody">
                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->customer->first_name }} {{ $order->customer->last_name }}</td>
                                    <td class="project-actions text-right" style="text-align: left !important;">
                                        <iframe id="gifLoad{{ $order->id }}"
                                            src="https://giphy.com/embed/Wodg2kOPJRLbw3Pfjh" width="50" height="50"
                                            frameBorder="0" class="giphy-embed" allowFullScreen
                                            style="display: none"></iframe>
                                        <select id="status{{ $order->id }}" class="form-control" name="status"
                                            onchange="return onChangeStatus(this,{{ $order->id }});">
                                            <option value="0" @if ($order->status == 0) selected @endif>Waiting</option>
                                            <option value="1" @if ($order->status == 1) selected @endif>Approve</option>
                                            <option value="2" @if ($order->status == 2) selected @endif>Reject</option>
                                        </select>
                                    </td>
                                    <td>{{ $order->order_date }}</td>
                                    <td>{{ $order->total_price }}<b>$</b></td>
                                    <td>
                                        <a href="{{ asset("admin-mo/order/view/$order->id") }}" type="button"
                                            class="btn btn-primary">View</a>
                                        <a href="javascript:void(0);" type="button" class="btn btn-danger"
                                            onclick="return onDeleteOrder({{ $order->id }});">Delete</a>
                                    </td>
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
    <script>
        $('input[type=radio][name=inlineRadioOptions]').change(function() {
            console.log(this.value);
            $.ajax({
                type: "post",
                url: window.location.origin + "/api/ajaxSearchOrder",
                data: {
                    status: this.value
                },
                success: function(response) {
                    $('#oderBody').html(response);
                },
                error: function(xhr) {
                    alert('Co Loi Xay Ra');
                    location.reload();
                }
            });
        });

        function onChangeStatus(selectObject, orderId) {
            $('#gifLoad' + orderId).attr('style', 'display: inline-block');
            $('#status' + orderId).attr('style', 'display: none');
            $.ajax({
                    type: "post",
                    url: window.location.origin + "/api/ajaxUpdateStatusOrder",
                    data: {
                        status: selectObject.value,
                        orderId: orderId
                    },
                    success: function(response) {
                        console.log(response);
                    },
                    error: function(xhr) {
                        alert('Co Loi Xay Ra');
                        // location.reload();
                    }
                })
                .done(function(response) {
                    $('#gifLoad' + orderId).attr('style', 'display: none');
                    $('#status' + orderId).attr('style', 'display: inline-block');
                });
        }

        function onDeleteOrder(orderId) {
            var ok = confirm('Are you sure about that !!!!!!');
            if (ok) {
                location.href = '/admin-mo/order/delete/' + orderId;
            }
        }
    </script>
@stop
