@extends('...layouts.userLayout')
@section('title')
<title>Service Hunt : Ads-Details</title>
@endsection
@section('content')
@include('user.search')
<div id="content">
  <div class="container">
    <div class="row">

      <div class="product-info">
        <div class="col-sm-8">
          <div class="inner-box ads-details-wrapper">
            <h2>{{$service->title}}</h2>
            <p class="item-intro"><span class="poster">For sale by <span class="ui-bubble is-member">{{$service->user->first_name}}</span>
              <span class="date"> <?php echo date_format($service->created_at, 'd-M G:ia');?></span> from
              <span class="location">{{$service->town}}</span></p>
              <div id="owl-demo" class="owl-carousel owl-theme">
                <div class="item">
                  <img src="/client_inc/assets/img/productinfo/img1.jpg" alt="">
                </div>
                <div class="item">
                  <img src="/client_inc/assets/img/productinfo/img2.jpg" alt="">
                </div>
                <div class="item">
                  <img src="/client_inc/assets/img/productinfo/img3.jpg" alt="">
                </div>
              </div>
            </div>
            <div class="box">
              <h2 class="title-2"><strong>Ad Details</strong></h2>
              <div class="row">
                <div class="ads-details-info col-md-8">
                  <p class="mb15">{{$service->description }}</p>
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
                    <div class="ads-action">
                      <ul class="list-border">
                        <li>
                          <a href="ads-details.html#"> <i class=" fa fa-phone"></i> {{$service->company->telephone}} </a></li>
                          <li>
                            <li>
                              <a href="ads-details.html#">Posted by <i class=" fa fa-user"></i> {{$service->user->first_name}}</a></li>
                              <li>
                                <a href="ads-details.html#"> <i class=" fa fa-heart"></i> Save ad</a></li>
                                <li>
                                  <a href="ads-details.html#"> <i class="fa fa-share-alt"></i> Share </a>
                                  <div class="social-link">
                                    <a class="twitter" target="_blank" data-original-title="twitter" href="ads-details.html#" data-toggle="tooltip" data-placement="top"><i class="fa fa-twitter"></i></a>
                                    <a class="facebook" target="_blank" data-original-title="facebook" href="ads-details.html#" data-toggle="tooltip" data-placement="top"><i class="fa fa-facebook"></i></a>
                                    <a class="google" target="_blank" data-original-title="google-plus" href="ads-details.html#" data-toggle="tooltip" data-placement="top"><i class="fa fa-google"></i></a>
                                    <a class="linkedin" target="_blank" data-original-title="linkedin" href="ads-details.html#" data-toggle="tooltip" data-placement="top"><i class="fa fa-linkedin"></i></a>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="clr"><br></div>
                      <div class="box">
                        <h2 class="title-2"><strong>Reviews and Comments</strong></h2>
                        <div class="row">

                          <div id="contact-info" class="detail-contact detail-block target-block">
                            @foreach(App\Review::where('service_id', $service->id)->orderBy('created_at','DESC')->take(4)->get() as $reviews)
                            <div class="media-left">
                              <a href="#">
                                <img src="/client_inc/assets/img/user.jpg" class="media-object" alt="image" width="74" height="74">
                              </a>
                            </div>
                            <div class="media-body">
                              <ul>
                                <li><i class="fa fa-user"></i> {{$reviews->user->first_name}} {{$reviews->user->last_name}}</li>

                                <li>
                                  <div class="rating">
                                    <span class="bottom-ratings">
                                      @for ($k=1; $k <= 5 ; $k++)
                                      <span data-title="Average Rate: 5 / 5" class="bottom-ratings tip">
                                        <span class="glyphicon glyphicon-star{{ ($k <= $reviews->service->rating) ? '' : '-empty'}}"></span></span>
                                        @endfor
                                      </div>
                                    </li>
                                    <li>
                                      <p>{{$reviews->review}}</p>
                                    </li>
                                  </ul>
                                </div>
                                @endforeach

                              </div>

                              <form method="post" action="{{route('user.review.submit')}}">
                                   {{ csrf_field() }}
                                   <input type="hidden" name="service_id" value="{{ $service->id }}">

                                   <div class="row" style="padding-left:15px;">
                                       <div class="col-sm-8 col-xs-10">
                                           <div class="range-advanced-main">
                                               <div class="range-text">
                                                   <label><span class="range-title">Rate:</span></label>
                                                   {{Form::hidden('rating', null, array('id'=>'ratings-hidden'))}}
                                                   <div class="text-left">
                                                       <div class="stars starrr"></div>
                                                       <a href="#" class="btn btn-danger btn-sm" id="close-review-box" style="display:none; margin-right:10px;">
                                                           <span class="glyphicon glyphicon-remove"></span>Cancel</a>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col-sm-8 col-xs-10">
                                           <div class="form-group">
                                               <label><span class="range-title">Review:</span></label>
                                               <textarea class="form-control" name="review" rows="5" placeholder="Your review"></textarea>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="form-group">
                                     &nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-common">submit review</button>
                                   </div>
                               </form>

                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="inner-box">
                            <div class="widget-title">
                              <h4>Advertisement</h4>
                            </div>
                            <img src="/client_inc/assets//img/img1.jpg" alt="">
                          </div>
                          <div class="col-xs-12">
                            <div class="features-box wow fadeInDownQuick" data-wow-delay="0.3s">
                              <div class="features-icon">
                                <i class="lnr lnr-star">
                                </i>
                              </div>
                              <div class="features-content">
                                <h4>
                                  Fraud Protection
                                </h4>
                                <p>
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere.
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-12">
                            <div class="features-box wow fadeInDownQuick" data-wow-delay="0.6s">
                              <div class="features-icon">
                                <i class="lnr lnr-chart-bars"></i>
                              </div>
                              <div class="features-content">
                                <h4>
                                  No Extra Fees
                                </h4>
                                <p>
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere.
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-12">
                            <div class="features-box wow fadeInDownQuick" data-wow-delay="0.9s">
                              <div class="features-icon">
                                <i class="lnr lnr-spell-check"></i>
                              </div>
                              <div class="features-content">
                                <h4>
                                  Verified Data
                                </h4>
                                <p>
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere.
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-12">
                            <div class="features-box wow fadeInDownQuick" data-wow-delay="0.9s">
                              <div class="features-icon">
                                <i class="lnr lnr-smile"></i>
                              </div>
                              <div class="features-content">
                                <h4>
                                  Friendly Return Policy
                                </h4>
                                <p>
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere.
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


                  <section class="featured-lis mb30">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 wow fadeIn" data-wow-delay="0.5s">
                          <h3 class="section-title">Related Products</h3>
                          <div id="new-products" class="owl-carousel">
                          @foreach(App\Service::where('sub_category_id', $service->sub_category_id)->orderBy('created_at','DESC')->take(5)->get() as $related)
                            <div class="item">
                              <div class="product-item">
                                <div class="carousel-thumb">
                                  <img src="/client_inc/assets//img/product/img4.jpg" alt="">
                                  <div class="overlay">
                                    <a href="/services/{{$related->id}}/details"><i class="fa fa-link"></i></a>
                                  </div>
                                </div>
                                <a href="/services/{{$related->id}}/details" class="item-name">{{$related->title}}</a>
                                <span class="price">{{$related->sub_category->name}}</span>
                              </div>
                            </div>
                            @endforeach

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                @endsection
