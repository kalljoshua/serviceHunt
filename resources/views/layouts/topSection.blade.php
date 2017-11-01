<!-- Start intro section -->
<section id="intro" class="section-intro">
  <div class="overlay">
    <div class="container">
      <div class="main-text">
        <h1 class="intro-title">Welcome To <span style="color: red">Service</span><span style="color: blue">Hunt</span></h1>
        <p class="sub-title">Buy and sell everything from used cars to mobile phones and computers, or search for property, jobs and more</p>

        <!-- Start Search box -->
        <div class="row search-bar">
          <div class="advanced-search">
            <form class="search-form" action="/search" role="search" method="get">
              <div class="col-md-3 col-sm-6 search-col">
                <div class="input-group-addon search-category-container">
                  <label class="styled-select">
                    <select class="dropdown-product selectpicker" name="subcategory" >
                      <option value="0">All Sub Categories</option>
                      @foreach($categories as $category)
                      <option class="subitem" value="{{$category->id}}"> {{$category->name}}</option>
                      @endforeach
                    </select>
                  </label>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 search-col">
                <div class="input-group-addon search-category-container">
                  <label class="styled-select location-select">
                    <input class="form-control keyword" type="text" name="town" list="cities" placeholder="Enter your Location">
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
        <!-- End Search box -->
      </div>
    </div>
  </div>
</section>
<!-- end intro section -->
