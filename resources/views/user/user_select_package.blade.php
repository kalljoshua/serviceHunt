@extends('...layouts.userLayout')
@section('title')
<title>Service Hunt : Select Package</title>
@endsection
@section('content')

<div class="page-header" style="background: url(assets/img/banner3.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="page-title">Pricing Tables</h1>
      </div>
    </div>
  </div>
</div>


<section id="content">

  <section id="pricing-table">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mainHeading">
            <h2 class="section-title">Find a plan that’s right for you.</h2>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="table">
            <div class="title">
              <h3>Silver</h3>
            </div>
            <div class="pricing-header">
              <p class="price-value"> <sup>$</sup>10</p>
              <p class="price-quality">Get Started with Classiera</p>
            </div>
            <ul class="description">
              <li><i class="fa fa-check-square"></i>Free ad posting</li>
              <li><i class="fa fa-check-square"></i>6&nbsp;Featured ads availability</li>
              <li><i class="fa fa-check-square"></i>For&nbsp;25&nbsp;days</li>
              <li><i class="fa fa-check-square"></i>100% Secure!</li>
            </ul>
            <form action="{{route('user.select.package.submit')}}" method="post">
              <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="package_id" value="2">
                <button class="btn btn-common" type="submit">Purchase Now</button>
            </form>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="table" id="active-tb">
            <div class="title">
              <h3>Standard</h3>
            </div>
            <div class="pricing-header">
              <p class="price-value"> <sup>$</sup>12</p>
              <p class="price-quality">Get Started with Classiera</p>
            </div>
            <ul class="description">
              <li><i class="fa fa-check-square"></i>Free ad posting</li>
              <li><i class="fa fa-check-square"></i>6&nbsp;Featured ads availability</li>
              <li><i class="fa fa-check-square"></i>For&nbsp;25&nbsp;days</li>
              <li><i class="fa fa-check-square"></i>100% Secure!</li>
            </ul>
            <form action="{{route('user.select.package.submit')}}" method="post">
              <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="package_id" value="2">
                <button class="btn btn-common" type="submit">Purchase Now</button>
            </form>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="table">
            <div class="title">
              <h3>Platinum</h3>
            </div>
            <div class="pricing-header">
              <p class="price-value"> <sup>$</sup>29</p>
              <p class="price-quality">Get Started with Classiera</p>
            </div>
            <ul class="description">
              <li><i class="fa fa-check-square"></i>Free ad posting</li>
              <li><i class="fa fa-check-square"></i>6&nbsp;Featured ads availability</li>
              <li><i class="fa fa-check-square"></i>For&nbsp;25&nbsp;days</li>
              <li><i class="fa fa-check-square"></i>100% Secure!</li>
            </ul>
            <form action="{{route('user.select.package.submit')}}" method="post">
              <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="package_id" value="2">
                <button class="btn btn-common" type="submit">Purchase Now</button>
            </form>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="table">
            <div class="title">
              <h3>Platinum</h3>
            </div>
            <div class="pricing-header">
              <p class="price-value"> <sup>$</sup>49</p>
              <p class="price-quality">Get Started with Classiera</p>
            </div>
            <ul class="description">
              <li><i class="fa fa-check-square"></i>Free ad posting</li>
              <li><i class="fa fa-check-square"></i>6&nbsp;Featured ads availability</li>
              <li><i class="fa fa-check-square"></i>For&nbsp;25&nbsp;days</li>
              <li><i class="fa fa-check-square"></i>100% Secure!</li>
            </ul>
            <form action="{{route('user.select.package.submit')}}" method="post">
              <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="package_id" value="2">
                <button class="btn btn-common" type="submit">Purchase Now</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

</section>

@endsection
