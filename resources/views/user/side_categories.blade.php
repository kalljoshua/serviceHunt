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
            @foreach(App\Category::all() as $category)
            @if($category->sub_category->count()>0)
              <div class="category-header">
                <a data-toggle="collapse" href="#collapse{{$category->id}}">
                <i class="fa fa-tags"></i>
                {{$category->name}} <span class="category-counter">({{$category->sub_category->count()}})</span></a>
              </div>
              <div id="collapse{{$category->id}}" class="category-content">
                @foreach(App\SubCategory::where('category_id', $category->id)->orderBy('created_at','DESC')->take(4)->get() as $sub_category)
                @if($sub_category->services->count()>0)
                <li>
                  <a href="/services/{{$sub_category->id}}/category">{{$sub_category->name}}
                    <span class="category-counter">({{$sub_category->services->count()}})</span></a>

                </li>
                @endif
                @endforeach
              </div>
            @endif
            @endforeach
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
            <img alt="" src="/client_inc/assets/img/featured/img1.jpg">
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