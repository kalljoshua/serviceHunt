
@extends('...layouts.userLayout')
@section('title')
<title>Service Hunt : Home</title>
@endsection
@section('content')

@include('layouts.topSection')
<div class="wrapper">
  <!-- Categories Homepage Section Start -->
  <section id="categories-homepage">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Browse Ads from all Categories</h3>
        </div>
        <?php $x = 0.3;?>
        @foreach($categories as $category)
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="category-box border-1 wow fadeInUpQuick" data-wow-delay="<?php echo $x;?>">
            <div class="icon">
              <a href="category.html"><i class="lnr lnr-users color-1"></i></a>
            </div>
            <div class="category-header">
              <a href="category.html"><h4>{{$category->name}}</h4</a>
              </div>
              <div class="category-content">
                <ul>
                  @foreach(App\SubCategory::where('category_id', $category->id)->orderBy('created_at','DESC')->take(4)->get() as $sub_category)
                  @if($sub_category->services->count()>0)
                  <li>
                    <a href="/services/{{$sub_category->id}}/category">{{$sub_category->name}}</a>
                    <sapn class="category-counter">{{$sub_category->services->count()}}</sapn>
                  </li>
                  @endif
                  @endforeach
                  <li>
                    <a href="category.html">View all subcategories →</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <?php $x = $x+0.3;?>
          @endforeach
        </div>
      </div>
    </section>
    <!-- Categories Homepage Section End -->

    <!-- Featured Listings Start -->
    @if(sizeof($featured_services)>0)
    <section class="featured-lis" >
      <div class="container">
        <div class="row">

          <div class="col-md-12 wow fadeIn" data-wow-delay="0.5s">
            <h3 class="section-title">Featured Listings</h3>
            <div id="new-products" class="owl-carousel">
              @foreach($featured_services as $featured_service)
              <div class="item">
                <div class="product-item">
                  <div class="carousel-thumb">
                    <img src="/client_inc/assets/img/product/img1.jpg" alt="">
                    <div class="overlay">
                      <a href="/services/{{$featured_service->id}}/details"><i class="fa fa-link"></i></a>
                    </div>
                  </div>
                  <a href="/services/{{$featured_service->id}}/details" class="item-name">{{$featured_service->title}}</a>
                  <span class="price">{{$featured_service->sub_category->category->name}}</span>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
    @endif
    <!-- Featured Listings End -->
    @if(sizeof($most_viewed_services)>0)
    <div class="features-lis">
      <div class="container">
        <div class="row">
          <div class="col-md-12 wow fadeIn" data-wow-delay="0.5s">
            <h3 class="section-title">Most Viewed</h3>
            <div id="new-product" class="owl-carousel">
              @foreach($most_viewed_services as $most_viewed_service)
              <div class="item">
                <div class="product-item">
                  <div class="carousel-thumb">
                    <img src="/client_inc/assets/img/product/img1.jpg" alt="">
                    <div class="overlay">
                      <a href="/services/{{$most_viewed_service->id}}/details"><i class="fa fa-link"></i></a>
                    </div>
                  </div>
                  <a href="/services/{{$most_viewed_service->id}}/details" class="item-name">{{$most_viewed_service->title}}</a>
                  <span class="price">{{$most_viewed_service->sub_category->name}}</span>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      @endif

      @if(sizeof($recent_services)>0)
      <div class="features-lis">
        <div class="container">
          <div class="row">
            <div class="col-md-12 wow fadeIn" data-wow-delay="0.5s">
              <h3 class="section-title">Recently Added</h3>
              <div id="recent-products" class="owl-carousel">
                @foreach($recent_services as $recent_service)
                <div class="item">
                  <div class="product-item">
                    <div class="carousel-thumb">
                      <img src="/client_inc/assets/img/product/img1.jpg" alt="">
                      <div class="overlay">
                        <a href="/services/{{$recent_service->id}}/details"><i class="fa fa-link"></i></a>
                      </div>
                    </div>
                    <a href="/services/{{$recent_service->id}}/details" class="item-name">{{$recent_service->title}}</a>
                    <span class="price">{{$recent_service->sub_category->name}}</span>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
        @endif



      <!-- Start Services Section -->
      <div class="features">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-6">
              <div class="features-box wow fadeInDownQuick" data-wow-delay="0.3s">
                <div class="features-icon">
                  <i class="fa fa-book">
                  </i>
                </div>
                <div class="features-content">
                  <h4>
                    Full Documented
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="features-box wow fadeInDownQuick" data-wow-delay="0.6s">
                <div class="features-icon">
                  <i class="fa fa-paper-plane"></i>
                </div>
                <div class="features-content">
                  <h4>
                    Clean & Modern Design
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="features-box wow fadeInDownQuick" data-wow-delay="0.9s">
                <div class="features-icon">
                  <i class="fa fa-map"></i>
                </div>
                <div class="features-content">
                  <h4>
                    Great Features
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="features-box wow fadeInDownQuick" data-wow-delay="1.2s">
                <div class="features-icon">
                  <i class="fa fa-cogs"></i>
                </div>
                <div class="features-content">
                  <h4>
                    Completely Customizable
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="features-box wow fadeInDownQuick" data-wow-delay="1.5s">
                <div class="features-icon">
                  <i class="fa fa-hourglass"></i>
                </div>
                <div class="features-content">
                  <h4>
                    100% Responsive Layout
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="features-box wow fadeInDownQuick" data-wow-delay="1.8s">
                <div class="features-icon">
                  <i class="fa fa-hashtag"></i>
                </div>
                <div class="features-content">
                  <h4>
                    User Friendly
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="features-box wow fadeInDownQuick" data-wow-delay="2.1s">
                <div class="features-icon">
                  <i class="fa fa-newspaper-o"></i>
                </div>
                <div class="features-content">
                  <h4>
                    Awesome Layout
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="features-box wow fadeInDownQuick" data-wow-delay="2.4s">
                <div class="features-icon">
                  <i class="fa fa-leaf"></i>
                </div>
                <div class="features-content">
                  <h4>
                    High Quality
                  </h4>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="features-box wow fadeInDownQuick" data-wow-delay="2.7s">
                <div class="features-icon">
                  <i class="fa fa-google"></i>
                </div>
                <div class="features-content">
                  <h4>
                    Free Google Fonts Use
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
      <!-- End Services Section -->

      <!-- Location Section Start -->
      <section class="location">
        <div class="container">
          <div class="row localtion-list">
            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.5s">
              <h3 class="title-2"><i class="fa fa-envelope"></i> Subscribe for updates</h3>
              <form id="subscribe" action="/subscribe-to-newsletter" method="post">
                {{ csrf_field() }}
                <p>Join our 10,000+ subscribers and get access to the latest templates, freebies, announcements and resources!</p>
                <div class="subscribe">
                  <input class="form-control" name="email" placeholder="Your email here" required="" type="email">
                  <button class="btn btn-common" type="submit">Subscribe</button>
                </div>
              </form>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="1s">
              <h3 class="title-2"><i class="fa fa-search"></i> Popular Searches</h3>
              <ul class="cat-list col-sm-4">
                @foreach($searches as $saved)
                <li> <a href="#">{{$saved->keyword}}</a></li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- Location Section End -->

    </div>

    <!-- Counter Section Start -->
    <section id="counter">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="counting wow fadeInDownQuick" data-wow-delay=".5s">
              <div class="icon">
                <span>
                  <i class="lnr lnr-tag"></i>
                </span>
              </div>
              <div class="desc">
                <h3 class="counter">12090</h3>
                <p>Regular Ads</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="counting wow fadeInDownQuick" data-wow-delay="1s">
              <div class="icon">
                <span>
                  <i class="lnr lnr-map"></i>
                </span>
              </div>
              <div class="desc">
                <h3 class="counter">350</h3>
                <p>Locations</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="counting wow fadeInDownQuick" data-wow-delay="1.5s">
              <div class="icon">
                <span>
                  <i class="lnr lnr-users"></i>
                </span>
              </div>
              <div class="desc">
                <h3 class="counter">23453</h3>
                <p>Reguler Members</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="counting wow fadeInDownQuick" data-wow-delay="2s">
              <div class="icon">
                <span>
                  <i class="lnr lnr-license"></i>
                </span>
              </div>
              <div class="desc">
                <h3 class="counter">150</h3>
                <p>Premium Ads</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Counter Section End -->
    <!-- Copyright Start  -->
    <div id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="site-info pull-left">
              <p>All copyrights reserved @ 2016 - Designed by <a rel="nofollow" href="http://graygrids.com">GrayGrids</a></p>
            </div>
            <div class="bottom-social-icons social-icon pull-right">
              <a class="facebook" target="_blank" href="https://web.facebook.com/GrayGrids"><i class="fa fa-facebook"></i></a>
              <a class="twitter" target="_blank" href="https://twitter.com/GrayGrids"><i class="fa fa-twitter"></i></a>
              <a class="dribble" target="_blank" href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a>
              <a class="flickr" target="_blank" href="https://www.flickr.com/"><i class="fa fa-flickr"></i></a>
              <a class="youtube" target="_blank" href="https://youtube.com"><i class="fa fa-youtube"></i></a>
              <a class="google-plus" target="_blank" href="https://plus.google.com"><i class="fa fa-google-plus"></i></a>
              <a class="linkedin" target="_blank" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Copyright End -->

  </footer>
  <!-- Footer Section End -->

  @endsection
