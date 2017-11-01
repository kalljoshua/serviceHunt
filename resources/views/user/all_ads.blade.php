@extends('...layouts.userLayout')
@section('title')
<title>Service Hunt : All Ads</title>
@endsection
@section('content')
@include('user.search')
<div id="search-row-wrapper">
  <div class="container">
    <div class="search-inner">

      <div class="row search-bar">
        <div class="advanced-search">
          <form class="search-form" method="get">
            <div class="col-md-3 col-sm-6 search-col">
              <div class="input-group-addon search-category-container">
                <label class="styled-select">
                  <select class="dropdown-product selectpicker" name="product-cat">
                    <option value="0">All Categories</option>
                    <option class="subitem" value="community"> Community</option>
                    <option value="items-for-sale"> Items For Sale</option>
                    <option value="jobs"> Jobs</option>
                    <option value="personals"> Personals</option>
                    <option value="training"> Training</option>
                    <option value="real_estate"> Real Estate</option>
                    <option value="services"> Services</option>
                    <option value="vehicles"> Vehicles</option>
                  </select>
                </label>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 search-col">
              <div class="input-group-addon search-category-container">
                <label class="styled-select location-select">
                  <select class="dropdown-product selectpicker" name="product-cat">
                    <option value="0">All Locations</option>
                    <option value="New York">New York</option>
                    <option value="California">California</option>
                    <option value="Washington">Washington</option>
                    <option value="churches">Birmingham</option>
                    <option value="Birmingham">Chicago</option>
                    <option value="Phoenix">Phoenix</option>
                  </select>
                </label>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 search-col">
              <input class="form-control keyword" name="keyword" value="" placeholder="Enter Keyword" type="text">
              <i class="fa fa-search"></i>
            </div>
            <div class="col-md-3 col-sm-6 search-col">
              <button class="btn btn-common btn-search btn-block"><strong>Search</strong></button>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
</div>


<div class="main-container">
  <div class="container">
    <div class="row">
      <div class="col-sm-3 page-sidebar">
        <aside>
          <div class="inner-box">
            <div class="categories">
              <div class="widget-title">
                <i class="fa fa-align-justify"></i>
                <h4>All Categories</h4>
              </div>
              <div class="categories-list">
                <ul>
                  <li>
                    <a href="category.html#">
                      <i class="fa fa-desktop"></i>
                      Electronics <span class="category-counter">(9)</span>
                    </a>
                  </li>
                  <li>
                    <a href="category.html#">
                      <i class="fa fa-wrench"></i>
                      Services <span class="category-counter">(8)</span>
                    </a>
                  </li>
                  <li>
                    <a href="category.html#">
                      <i class="fa fa-github-alt"></i>
                      Pets <span class="category-counter">(2)</span>
                    </a>
                  </li>
                  <li>
                    <a href="category.html#">
                      <i class="fa fa-leaf"></i>
                      Fashion <span class="category-counter">(3)</span>
                    </a>
                  </li>
                  <li>
                    <a href="category.html#">
                      <i class="fa fa-home"></i>
                      Real Estate <span class="category-counter">(4)</span>
                    </a>
                  </li>
                  <li>
                    <a href="category.html#">
                      <i class="fa fa-black-tie"></i>
                      Jobs <span class="category-counter">(5)</span>
                    </a>
                  </li>
                  <li>
                    <a href="category.html#">
                      <i class="fa fa-cutlery"></i>
                      Hotel & Travels <span class="category-counter">(5)</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="inner-box">
            <div class="widget-title">
              <h4>Premium Ads</h4>
            </div>
            <div class="advimg">
              <ul class="featured-list">
                <li>
                  <img alt="" src="/client_inc/assets//img/featured/img1.jpg">
                  <div class="hover">
                    <a href="category.html#"><span>$49</span></a>
                  </div>
                </li>
                <li>
                  <img alt="" src="/client_inc/assets//img/featured/img2.jpg">
                  <div class="hover">
                    <a href="category.html#"><span>$49</span></a>
                  </div>
                </li>
                <li>
                  <img alt="" src="/client_inc/assets//img/featured/img3.jpg">
                  <div class="hover">
                    <a href="category.html#"><span>$49</span></a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="inner-box">
            <div class="widget-title">
              <h4>Advertisement</h4>
            </div>
            <img src="/client_inc/assets//img/img1.jpg" alt="">
          </div>
        </aside>
      </div>
      <div class="col-sm-9 page-content">

        <div class="product-filter">
          <div class="grid-list-count">
            <a class="list switchToGrid" href="category.html#"><i class="fa fa-list"></i></a>
            <a class="grid switchToList" href="category.html#"><i class="fa fa-th-large"></i></a>
          </div>
          <div class="short-name">
            <span>Short By</span>
            <form class="name-ordering" method="post">
              <label>
                <select name="order" class="orderby">
                  <option selected="selected" value="menu-order">Short by</option>
                  <option value="popularity">Price: Low to High</option>
                  <option value="popularity">Price: High to Low</option>
                </select>
              </label>
            </form>
          </div>
          <div class="Show-item">
            <span>Show Items</span>
            <form class="woocommerce-ordering" method="post">
              <label>
                <select name="order" class="orderby">
                  <option selected="selected" value="menu-order">49 items</option>
                  <option value="popularity">popularity</option>
                  <option value="popularity">Average ration</option>
                  <option value="popularity">newness</option>
                  <option value="popularity">price</option>
                </select>
              </label>
            </form>
          </div>
        </div>


        <div class="adds-wrapper">
          <div class="item-list">
            <div class="col-sm-2 no-padding photobox">
              <div class="add-image">
                <a href="category.html#"><img src="/client_inc/assets//img/item/img-1.jpg" alt=""></a>
                <span class="photo-count"><i class="fa fa-camera"></i>2</span>
              </div>
            </div>
            <div class="col-sm-7 add-desc-box">
              <div class="add-details">
                <h5 class="add-title"><a href="ads-details.html">Brand New All about iPhones</a></h5>
                <div class="info">
                  <span class="add-type">B</span>
                  <span class="date">
                    <i class="fa fa-clock"></i>
                    16:22:13 2017-02-29
                  </span> -
                  <span class="category">Electronics</span> -
                  <span class="item-location"><i class="fa fa-map-marker"></i>London</span>
                </div>
                <div class="item_desc">
                  <a href="category.html#">Donec ut quam felis. Cras egestas, quam in plac erat dictum, erat mauris inte rdum est nec.</a>
                </div>
              </div>
            </div>
            <div class="col-sm-3 text-right  price-box">
              <h2 class="item-price"> $ 320 </h2>
              <a class="btn btn-danger btn-sm"><i class="fa fa-certificate"></i>
                <span>Top Ads</span></a>
                <a class="btn btn-common btn-sm"> <i class="fa fa-eye"></i> <span>215</span> </a>
              </div>
            </div>
            <div class="item-list">
              <div class="col-sm-2 no-padding photobox">
                <div class="add-image">
                  <a href="category.html#"><img src="/client_inc/assets//img/item/img-2.jpg" alt=""></a>
                  <span class="photo-count"><i class="fa fa-camera"></i>2</span>
                </div>
              </div>
              <div class="col-sm-7 add-desc-box">
                <div class="add-details">
                  <h5 class="add-title"><a href="ads-details.html">Sony Xperia dual sim 100% brand new iPad</a></h5>
                  <div class="info">
                    <span class="add-type">B</span>
                    <span class="date">
                      <i class="fa fa-clock"></i>
                      16:22:13 2017-02-29
                    </span> -
                    <span class="category">Electronics</span> -
                    <span class="item-location"><i class="fa fa-map-marker"></i> London </span>
                  </div>
                  <div class="item_desc">
                    <a href="category.html#">Donec ut quam felis. Cras egestas, quam in plac erat dictum, erat mauris inte rdum est nec.</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-3 text-right  price-box">
                <h2 class="item-price"> $ 199 </h2>
                <a class="btn btn-danger btn-sm"><i class="fa fa-certificate"></i>
                  <span>Top Ads</span></a>
                  <a class="btn btn-common btn-sm"> <i class="fa fa-eye"></i> <span>215</span> </a>
                </div>
              </div>
              <div class="item-list">
                <div class="col-sm-2 no-padding photobox">
                  <div class="add-image">
                    <a href="category.html#"><img src="/client_inc/assets//img/item/img-3.jpg" alt=""></a>
                    <span class="photo-count"><i class="fa fa-camera"></i>2</span>
                  </div>
                </div>
                <div class="col-sm-7 add-desc-box">
                  <div class="add-details">
                    <h5 class="add-title"><a href="ads-details.html">Digital Cameras brand new</a></h5>
                    <div class="info">
                      <span class="add-type">B</span>
                      <span class="date">
                        <i class="fa fa-clock"></i>
                        16:22:13 2017-02-29
                      </span> -
                      <span class="category">Electronics</span> -
                      <span class="item-location"><i class="fa fa-map-marker"></i> London </span>
                    </div>
                    <div class="item_desc">
                      <a href="category.html#">Donec ut quam felis. Cras egestas, quam in plac erat dictum, erat mauris inte rdum est nec.</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3 text-right  price-box">
                  <h2 class="item-price"> $ 250 </h2>
                  <a class="btn btn-danger btn-sm"><i class="fa fa-certificate"></i>
                    <span>Top Ads</span></a>
                    <a class="btn btn-common btn-sm"> <i class="fa fa-eye"></i> <span>215</span> </a>
                  </div>
                </div>
                <div class="item-list">
                  <div class="col-sm-2 no-padding photobox">
                    <div class="add-image">
                      <a href="category.html#"><img src="/client_inc/assets//img/item/img-4.jpg" alt=""></a>
                      <span class="photo-count"><i class="fa fa-camera"></i>2</span>
                    </div>
                  </div>
                  <div class="col-sm-7 add-desc-box">
                    <div class="add-details">
                      <h5 class="add-title"><a href="ads-details.html">Samsung Galaxy dual sim 100% brand new</a></h5>
                      <div class="info">
                        <span class="add-type">B</span>
                        <span class="date">
                          <i class="fa fa-clock"></i>
                          16:22:13 2017-02-29
                        </span> -
                        <span class="category">Electronics</span> -
                        <span class="item-location"><i class="fa fa-map-marker"></i> London </span>
                      </div>
                      <div class="item_desc">
                        <a href="category.html#">Donec ut quam felis. Cras egestas, quam in plac erat dictum, erat mauris inte rdum est nec.</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3 text-right  price-box">
                    <h2 class="item-price"> $ 150 </h2>
                    <a class="btn btn-danger btn-sm"><i class="fa fa-certificate"></i>
                      <span>Top Ads</span></a>
                      <a class="btn btn-common btn-sm"> <i class="fa fa-eye"></i> <span>199</span> </a>
                    </div>
                  </div>
                  <div class="item-list">
                    <div class="col-sm-2 no-padding photobox">
                      <div class="add-image">
                        <a href="category.html#"><img src="/client_inc/assets//img/item/img-5.jpg" alt=""></a>
                        <span class="photo-count"><i class="fa fa-camera"></i>2</span>
                      </div>
                    </div>
                    <div class="col-sm-7 add-desc-box">
                      <div class="add-details">
                        <h5 class="add-title"><a href="ads-details.html">Brand New Macbook Pro</a></h5>
                        <div class="info">
                          <span class="add-type">B</span>
                          <span class="date">
                            <i class="fa fa-clock"></i>
                            16:22:13 2017-02-29
                          </span> -
                          <span class="category">Electronics</span> -
                          <span class="item-location"><i class="fa fa-map-marker"></i> London </span>
                        </div>
                        <div class="item_desc">
                          <a href="category.html#">Donec ut quam felis. Cras egestas, quam in plac erat dictum, erat mauris inte rdum est nec.</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-3 text-right  price-box">
                      <h2 class="item-price"> $ 120</h2>
                      <a class="btn btn-danger btn-sm"><i class="fa fa-certificate"></i>
                        <span>Top Ads</span></a>
                        <a class="btn btn-common btn-sm"> <i class="fa fa-eye"></i> <span>355</span> </a>
                      </div>
                    </div>
                    <div class="item-list">
                      <div class="col-sm-2 no-padding photobox">
                        <div class="add-image">
                          <a href="category.html#"><img src="/client_inc/assets//img/item/img-6.jpg" alt=""></a>
                          <span class="photo-count"><i class="fa fa-camera"></i>2</span>
                        </div>
                      </div>
                      <div class="col-sm-7 add-desc-box">
                        <div class="add-details">
                          <h5 class="add-title"><a href="ads-details.html">
                            Nexus 7 brand new</a></h5>
                            <div class="info">
                              <span class="add-type">B</span>
                              <span class="date">
                                <i class="fa fa-clock"></i>
                                16:22:13 2017-02-29
                              </span> -
                              <span class="category">Electronics</span> -
                              <span class="item-location"><i class="fa fa-map-marker"></i> London </span>
                            </div>
                            <div class="item_desc">
                              <a href="category.html#">Donec ut quam felis. Cras egestas, quam in plac erat dictum, erat mauris inte rdum est nec.</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3 text-right  price-box">
                          <h2 class="item-price"> $ 150 </h2>
                          <a class="btn btn-danger btn-sm"><i class="fa fa-certificate"></i>
                            <span>Top Ads</span></a>
                            <a class="btn btn-common btn-sm"> <i class="fa fa-eye"></i> <span>215</span> </a>
                          </div>
                        </div>
                      </div>


                      <div class="pagination-bar">
                        <ul class="pagination">
                          <li class="active"><a href="category.html#">1</a></li>
                          <li><a href="category.html#">2</a></li>
                          <li><a href="category.html#">3</a></li>
                          <li><a href="category.html#">4</a></li>
                          <li><a href="category.html#"> ...</a></li>
                          <li><a class="pagination-btn" href="category.html#">Next »</a></li>
                        </ul>
                      </div>

                      <div class="post-promo text-center">
                        <h2> Do you get anything for sell ? </h2>
                        <h5>Sell your products online FOR FREE. It's easier than you think !</h5>
                        <a href="post-ads.html" class="btn btn-post btn-danger">Post a Free Ad </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endsection
