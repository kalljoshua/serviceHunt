<div id="search-row-wrapper">
  <div class="container">
    <div class="search-inner">

      <div class="row search-bar">
        <div class="advanced-search">
          <form class="search-form" action="/search" method="get">
            <div class="col-md-3 col-sm-6 search-col">
              <div class="input-group-addon search-category-container">
                <label class="styled-select">
                  <select class="dropdown-product selectpicker" name="subcategory">
                    <option value="0">All Sub Categories</option>
                    @foreach(App\SubCategory::all() as $category)
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

    </div>
  </div>
</div>
