@extends('layouts.adminLayout')
@section('title')
<title>Service Hunt Admin : Services</title>
@endsection
@section('content')

<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>

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
      <li><a href="#">Tables</a></li>
      <li class="active">All Services</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    @include('flash::message')
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">All available Services</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Date</th>
                  <th>Title</th>
                  <th>Owner</th>
                  <th>SubCategory</th>
                  <th>Status</th>
                  <th>Suspend</th>
                  <th>Recommend</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($services as $service)
                <tr>
                  <td><span class="label label-info">{{$service->created_at->format('M-d-Y')}}</span></td>
                  <td><img src="/admin_inc/dist/img/user2-160x160.jpg" class="img-circle" width="40"/>
                    {{ str_limit($service->title, $limit = 40, $end = '...') }}
                  </td>
                  <td>{{$service->user->first_name}}</td>
                  <td> {{$service->sub_category->name}}</td>
                  <td>
                    @if($service->active==1)
                    <a class="btn btn-primary btn-xs">Approved</a>
                    @else
                    <a class="btn btn-warning btn-xs">Pending</a>
                    @endif
                  </td>
                  <td>
                    <!-- Rounded switch -->
                    <label class="switch">
                      @if($service->suspended==1)
                      <input type="checkbox" checked id="sus-check-service{{$service->id}}"
                      data-property-id="{{$service->id}}"
                      onchange="suspendService({{$service->id}});">
                      @else
                      <input type="checkbox" id="sus-check-service{{$service->id}}"
                      data-property-id="{{$service->id}}"
                      onchange="suspendService({{$service->id}});">
                      @endif
                      <span class="slider round"></span>
                    </label>
                  </td>
                  <td><a href="#" id="rbtn{{$service->id}}"
                    class="@if($service->recommended == 1)
                    btn btn-success
                    @else
                    btn btn-default
                    @endif"

                    onclick="event.preventDefault(); recommend({{$service->id}});">
                    @if($service->recommended == 1)
                    Recommended
                    @else
                    Recommend
                    @endif
                  </a> </td>
                  <td class="text-right">
                    <a href="{{route('admin.service.show',['id'=>$service->id])}}"
                      class="btn btn-info btn-xs" data-toggle="tooltip"
                      data-placement="top" title="View">
                      <i class="fa fa-eye"></i></a>
                      <a href="{{route('admin.service.delete',['id'=>$service->id])}}"
                        class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top"
                        title="Delete"><i
                        class="fa fa-times"></i></a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Date</th>
                      <th>Title</th>
                      <th>Owner</th>
                      <th>SubCategory</th>
                      <th>Status</th>
                      <th>Suspend</th>
                      <th>Recommend</th>
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
