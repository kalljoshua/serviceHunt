@extends('layouts.adminLayout')
@section('title')
    <title>ServiceHunt Admin : All-Sub-Categories</title>
@endsection
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Services
      <small>table</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Dashboard</a></li>
      <li class="active">All Sub-Categories</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    @include('flash::message')
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">All available Sub-Categories</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Date</th>
                  <th>Name</th>
                  <th>Category</th>
                  <th>Services</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($sub_categories as $sub_category)
                <tr>
                  <td><span class="label label-info">{{$sub_category->created_at->format('M-d-Y')}}</span></td>
                  <td>{{$sub_category->name}}</td>
                  <td>{{$sub_category->category->name}}</td>
                  <td>{{$sub_category->services->count()}}</td>
                  <td>
                    <div class="timeline-footer">
                      <a class="btn btn-info btn-xs">Edit</a>
                      <a class="btn btn-danger btn-xs">Delete</a>
                    </div>
                    <div class="timeline-footer">

                    </div>
                  </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Date</th>
                  <th>Name</th>
                  <th>Category</th>
                  <th>Services</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
