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
            <div class="row" style="padding: 0 0 12px 12px">
                <div class="col-sm-12">
                    <label>Full Name: </label>
                    <span>{{ strtoupper($customer->first_name) }} {{ strtoupper($customer->last_name) }}</span>
                </div>
                <div class="col-sm-12">
                    <label>Tel: </label>
                    <span>{{ $customer->tel }}</span>
                </div>
                <div class="col-sm-12">
                    <label>City: </label>
                    <span>{{ $customer->city }}</span>
                </div>
                <div class="col-sm-12">
                    <label>Email: </label>
                    <span>{{ $customer->email }}</span>
                </div>
                <div class="col-sm-12">
                    <label>Order Id: </label>
                    <span>{{ $order->id }}</span>
                </div>
                <div class="col-sm-12">
                    <label>Total Money: </label>
                    <span>{{ $order->total_price }}</span>
                </div>
                <div class="col-sm-12">
                    <label>Total Discount: </label>
                    <span>{{ $order->total_discount }}</span>
                </div>
                <div class="col-sm-12">
                    <label>Total Discount: </label>
                    <span>{{ $order->total_item }}</span>
                </div>
            </div>
            <div class="row" style="padding: 12px 0 0 12px">
                <h2>Detail</h2>
                <table class="table table-striped table-inverse table-responsive">
                    <thead class="thead-inverse">
                        <tr>
                            <th>Item</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Discout(%)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order_item as $item)
                            <tr>
                                <td scope="row">{{ $item->itemDetail->item->name }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->discount }}<b>%</b></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </section>
    </div>
@stop
@section('scripts')
    <script>

    </script>
@stop
