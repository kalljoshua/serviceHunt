@extends('...layouts.userLayout')
@section('title')
<title>Service Hunt : Archived Ads</title>
@endsection
@section('content')

@include('user.search')
<div id="content">
  <div class="container">
    <div class="row">
      @include("user.side_bar")
      <div class="col-sm-9 page-content">
        <div class="inner-box">
          <h2 class="title-2"><i class="fa fa-hourglass-o"></i> Pending Ads</h2>
          @if(sizeof($services)>0)
          <div class="table-responsive">
            <div class="adds-wrapper">
              @foreach($services as $service)
              <div class="item-list">
                <div class="col-sm-2 no-padding photobox">
                  <div class="add-image">
                    <a href="category.html#"><img src="/client_inc/assets//img/item/img-1.jpg" alt=""></a>
                    <span class="photo-count"><i class="fa fa-camera"></i>2</span>
                  </div>
                </div>
                <div class="col-sm-7 add-desc-box">
                  <div class="add-details">
                    <h5 class="add-title"><a href="/services/{{$service->id}}/details">{{$service->title}}</a></h5>
                    <div class="info">
                      <span class="date">
                        <i class="fa fa-clock"></i>
                        <?php echo date_format($service->created_at, 'G:ia Y-m-d');?>
                      </span> -
                      <span class="category">{{$service->sub_category->category->name}}</span> -
                      <span class="item-location"><i class="fa fa-map-marker"></i>{{$service->district}}</span>
                    </div>
                    <div class="item_desc">
                      <a href="category.html#">
                        {{ str_limit($service->description, $limit = 70, $end = '...') }}
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3 text-right  price-box">
                  <a class="btn btn-warning btn-sm">{{$service->type->name}}</a>
                  <a class="btn btn-danger btn-sm"><i class="fa fa-certificate"></i>
                    <span>Delete</span></a>
                    <a class="btn btn-common btn-sm"> <i class="fa fa-eye"></i> <span>{{$service->views}}</span> </a>
                    <a class="btn btn-info btn-sm">Edit</a>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
            @else
            <div class="text-center" style="margin-top:50px">
            <h3>No Pending Services available under your account!</h3>
          </div>
            @endif
          </div>
        </div>
        <div class="pagination-bar">
          <ul class="pagination">
            <?php echo $services->render(); ?>
          </ul>
        </div>
      </div>
    </div>
  </div>

  @endsection
