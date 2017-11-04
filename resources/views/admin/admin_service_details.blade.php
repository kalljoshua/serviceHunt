@extends('layouts.adminLayout')
@section('title')
<title>Service Hunt Admin : {{$service->title}}</title>
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      User Profile
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Services</a></li>
      <li class="active">{{$service->title}}</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-md-3">

        <!-- Profile Image -->
        <div class="box box-primary">
          <div class="box-body box-profile">
            <img class="profile-user-img img-responsive img-circle" src="/admin_inc/dist/img/user4-128x128.jpg" alt="User profile picture">

            <h3 class="profile-username text-center">{{$service->user->first_name}} {{$service->user->first_name}}</h3>

            <p class="text-muted text-center">{{$service->user->email}}</p>

            <ul class="list-group list-group-unbordered">
              <li class="list-group-item">
                <b>Companies</b> <a class="pull-right">{{App\Company::where('user_id', $service->user->id)->count()}}</a>
              </li>
              <li class="list-group-item">
                <b>Services</b> <a class="pull-right">{{App\Service::where('user_id', $service->user->id)->count()}}</a>
              </li>
              <li class="list-group-item">
                <b>Reviews</b> <a class="pull-right">{{App\Review::where('user_id', $service->user->id)->count()}}</a>
              </li>
            </ul>

            <a href="#" class="btn btn-primary btn-block"><b>{{$service->user->first_name}}'s Services</b></a>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active">
              <h2 class="title-2"><strong>Ad Details</strong></h2>
            </li>
          </ul>
          <div class="tab-content">
            <div class="active tab-pane" id="activity">
              <!-- Post -->
              <div class="post">
                <div class="user-block">
                  <span class="username">
                    <a href="#">{{$service->title}}</a>
                  </span>
                  <span class="description">Shared publicly - <?php echo date_format($service->created_at, 'd-M G:ia');?></span>
                </div>
                <!-- /.user-block -->
                <p>
                  {{$service->description }}
                </p>
                  </div>
                  <!-- /.post -->
                  <div class="box">
                    <div class="row">
                      <div class="ads-details-info col-md-8">
                        <ul class="list-circle">
                          <li><i class="fa fa-check-circle"></i> 256GB PCIe flash storage</li>
                          <li><i class="fa fa-check-circle"></i> 2.7 GHz dual-core Intel Core i5 processor</li>
                          <li><i class="fa fa-check-circle"></i> Turbo Boost up to 3.1GHz</li>
                          <li><i class="fa fa-check-circle"></i> Intel Iris Graphics 6100</li>
                          <li><i class="fa fa-check-circle"></i> 8GB memory (up from 4GB in 2013 model)</li>
                          <li><i class="fa fa-check-circle"></i> 10 hour battery life</li>
                          <li><i class="fa fa-check-circle"></i> 13.3" Retina Display</li>
                          <li><i class="fa fa-check-circle"></i> Intect Box</li>
                          <li><i class="fa fa-check-circle"></i> 1 Year international warranty</li>
                        </div>
                        <div class="col-md-4">
                          <aside class="panel panel-body panel-details">
                            <ul>
                              <li>
                                <p class=" no-margin "><strong>Company:</strong> {{$service->company->name}}</p>
                              </li>
                              <li>
                                <p class="no-margin"><strong>Sub Category:</strong> <a href="ads-details.html#">{{$service->sub_category->name}}</a>, <a href="ads-details.html#">For sale</a></p>
                              </li>
                              <li>
                                <p class="no-margin"><strong>Working Hours:</strong> <a href="ads-details.html#">{{$service->company->opening_time}}</a> to <a href="ads-details.html#">{{$service->company->closing_time}}</a></p>
                              </li>
                              <li>
                                <p class=" no-margin "><strong>Email Address:</strong> {{$service->company->email}}</p>
                              </li>
                              <li>
                                <p class="no-margin"><strong>Type:</strong> <a href="ads-details.html#"> {{$service->type->name}}</a></p>
                              </li>
                            </ul>
                          </aside>
                          </div>
                        </div>
                      </div>

                            <!-- Post -->
                            <div class="post">
                              <div class="row margin-bottom">
                                <div class="col-sm-6">
                                  <img class="img-responsive" src="/admin_inc/dist/img/photo1.png" alt="Photo">
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-6">
                                  <div class="row">
                                    <div class="col-sm-6">
                                      <img class="img-responsive" src="/admin_inc/dist/img/photo2.png" alt="Photo">
                                      <br>
                                      <img class="img-responsive" src="/admin_inc/dist/img/photo3.jpg" alt="Photo">
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-6">
                                      <img class="img-responsive" src="/admin_inc/dist/img/photo4.jpg" alt="Photo">
                                      <br>
                                      <img class="img-responsive" src="/admin_inc/dist/img/photo1.png" alt="Photo">
                                    </div>
                                    <!-- /.col -->
                                  </div>
                                  <!-- /.row -->
                                </div>
                                <!-- /.col -->
                              </div>
                              <!-- /.row -->

                              <ul class="list-inline">
                                <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                                <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                                </li>
                                <li class="pull-right">
                                  <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                                    (5)</a></li>
                                  </ul>

                                  <input class="form-control input-sm" type="text" placeholder="Type a comment">
                                </div>
                                <!-- /.post -->
                              </div>
                              <!-- /.tab-pane -->
                              <div class="tab-pane" id="timeline">
                                <!-- The timeline -->
                                <ul class="timeline timeline-inverse">
                                  <!-- timeline time label -->
                                  <li class="time-label">
                                    <span class="bg-red">
                                      10 Feb. 2014
                                    </span>
                                  </li>
                                  <!-- /.timeline-label -->
                                  <!-- timeline item -->
                                  <li>
                                    <i class="fa fa-envelope bg-blue"></i>

                                    <div class="timeline-item">
                                      <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                                      <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                                      <div class="timeline-body">
                                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                        weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                        jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                        quora plaxo ideeli hulu weebly balihoo...
                                      </div>
                                      <div class="timeline-footer">
                                        <a class="btn btn-primary btn-xs">Read more</a>
                                        <a class="btn btn-danger btn-xs">Delete</a>
                                      </div>
                                    </div>
                                  </li>
                                  <!-- END timeline item -->
                                  <!-- timeline item -->
                                  <li>
                                    <i class="fa fa-user bg-aqua"></i>

                                    <div class="timeline-item">
                                      <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                                      <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                                      </h3>
                                    </div>
                                  </li>
                                  <!-- END timeline item -->
                                  <!-- timeline item -->
                                  <li>
                                    <i class="fa fa-comments bg-yellow"></i>

                                    <div class="timeline-item">
                                      <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                                      <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                                      <div class="timeline-body">
                                        Take me to your leader!
                                        Switzerland is small and neutral!
                                        We are more like Germany, ambitious and misunderstood!
                                      </div>
                                      <div class="timeline-footer">
                                        <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                                      </div>
                                    </div>
                                  </li>
                                  <!-- END timeline item -->
                                  <!-- timeline time label -->
                                  <li class="time-label">
                                    <span class="bg-green">
                                      3 Jan. 2014
                                    </span>
                                  </li>
                                  <!-- /.timeline-label -->
                                  <!-- timeline item -->
                                  <li>
                                    <i class="fa fa-camera bg-purple"></i>

                                    <div class="timeline-item">
                                      <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                                      <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                                      <div class="timeline-body">
                                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                                      </div>
                                    </div>
                                  </li>
                                  <!-- END timeline item -->
                                  <li>
                                    <i class="fa fa-clock-o bg-gray"></i>
                                  </li>
                                </ul>
                              </div>
                              <!-- /.tab-pane -->

                              <div class="tab-pane" id="settings">
                                <form class="form-horizontal">
                                  <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                                    <div class="col-sm-10">
                                      <input type="email" class="form-control" id="inputName" placeholder="Name">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                                    <div class="col-sm-10">
                                      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="inputName" placeholder="Name">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                                    <div class="col-sm-10">
                                      <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                      <div class="checkbox">
                                        <label>
                                          <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                      <button type="submit" class="btn btn-danger">Submit</button>
                                    </div>
                                  </div>
                                </form>
                              </div>
                              <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                          </div>
                          <!-- /.nav-tabs-custom -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                    </section>
                    <!-- /.content -->
                  </div>
                  <!-- /.content-wrapper -->
                  @endsection
