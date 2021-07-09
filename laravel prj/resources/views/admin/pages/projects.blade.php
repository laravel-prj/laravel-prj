@extends('admin.layouts.master')
@section('title', 'App - Top Page')
@section('style-libraries')
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"> --}}
@stop
@section('styles')
{{--custom css item suggest search--}}
<style>
</style>
@stop
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manager Products</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{asset('/')}}">Home</a></li>
              <li class="breadcrumb-item active">Manager Products</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Product items</h3>

          <div class="card-tools">
              <a class="btn btn-primary btn-sm" href="{{asset('admin-mo/create-item')}}">Create</a>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 5%">
                          id
                      </th>
                      <th style="width: 5%;">
                          shop
                      </th>
                      <th style="width: 20%">
                          products name
                      </th>
                      <th style="width: 10%," >
                          type
                      </th>
                      <th style="width: 5%">
                          quantity
                      </th>
                      <th style="width: 5%">
                        price
                      </th>
                      <th style="width:10%">
                        feature
                      </th>
                      <th style="width: 5%">
                        discout
                      </th>
                      <th style="width: 35;">
                      image
                      </th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($data as $item)
                    <tr>
                        <td>
                            {{$item->id}}
                        </td>
                        <td>
                            {{$item->shops->name}}
                        </td>
                        <td>
                            {{$item->name}}
                        </td>
                        <td>
                            {{$item->type->name}}
                        </td>
                        <td>
                            {{$item->quantity}}
                        </td>
                        <td>
                            {{$item->price}}
                        </td>
                        <td>
                            {{$item->feature}}
                        </td>
                        <td>
                            {{$item->discout_item}}
                        </td>
                        <td>
                            @if ($item->img)
                                <img src="{{asset("admin/images/$item->img")}}" style="width:50px; heigth:50px">
                            @else
                                <img src="{{asset("admin/images/no_image.png")}}" style="width:50px; heigth:50px">
                            @endif
                        </td>

                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="#">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a>
                            <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="#">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
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
{{--jquery.autocomplete.js--}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.4.10/jquery.autocomplete.min.js"></script> --}}
{{--quick defined--}}
<script>
   $(function () {

   });
</script>
@stop





