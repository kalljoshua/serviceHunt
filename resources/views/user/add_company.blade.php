@extends('...layouts.userLayout')
@section('title')
<title>Service Hunt : Add New Company</title>
@endsection
@section('content')

@include('user.search')
<section id="content">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-11 col-md-offset-1" >
        <h2 class="title-2">New Company</h2>
        <div class="page-ads box">
        <form action="{{route('company.submit')}}" method="post">
                	{{ csrf_field() }}
          <h2 class="title-2">Company name and Description</h2>
          <div class="add-tab-content form-group mb30 clearfix">
            <div class="form-group mb30">
              <label class="control-label">Company name</label>
              <input class="form-control input-md" name="name" placeholder="Enter a company name" required="" type="text">
            </div>
            <div class="form-group mb30">
              <label class="control-label" for="textarea">Describe ad</label>
              <textarea class="form-control" id="textarea" name="description" placeholder="Describe what makes your company does!" rows="4"></textarea>
            </div>
          </div>

      <h2 class="title-2">Contact and Location/Address</h2>
      <div class="form-group mb30 clearfix">
        <div class="add-tab-content">
          <div class="add-tab-row push-padding-bottom">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="property-title">District</label>
                  <input class="form-control"  type="text" name="district" list="districts" placeholder="Enter your District">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="property-title">Telephone</label>
                  <input class="form-control" id="property-title" type="text" name="telephone" placeholder="Enter your Telephone number">
                </div>
              </div>
            </div>
          </div>
          <div class="add-tab-row push-padding-bottom">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="property-title">Email Address</label>
                  <input class="form-control"  type="text" name="email" placeholder="Enter your company Email">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="property-title">Website</label>
                  <input class="form-control"  type="text" name="website" placeholder="Enter your Website URL http://website.com">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="property-title">Facebook Link</label>
                  <input class="form-control" id="property-title" type="text" name="facebook" placeholder="Enter your Facebook Link">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="property-title">Twitter Link</label>
                  <input class="form-control" id="property-title" type="text" name="twitter" placeholder="Enter your Twitter Link">
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="description">Address</label>
                  <textarea class="form-control" id="description" name="address" rows="6" placeholder="Enter your business Address"></textarea>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <h2 class="title-2">Working Hours</h2>
      <div class="form-group">
        <div class="col-sm-12">
          <div class="form-group">
            <label for="description">Opening Time</label>
            <input class="form-control" name="opening_time" placeholder="Enter your business Opening time"/>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <label for="description">Closing Time</label>
            <input class="form-control" name="closing_time" placeholder="Enter your business Closing Time"/>
          </div>
        </div>
      </div>
      <p class="help-block">Add up to 4 photos. Use a real image of your product, not catalogs.</p>

    </div>

    <div class="mb30"></div>
    <div class="account-block text-right">
      <button type="submit" class="btn btn-primary">Submit Property</button>
    </div>
  </form>
</div>
</div>
</div>
</section>
@endsection
