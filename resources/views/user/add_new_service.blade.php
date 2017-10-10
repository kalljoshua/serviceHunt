@extends('...layouts.userLayout')
@section('title')
  <title>Service Hunt : Add New Service</title>
@endsection
@section('content')

    <!--start section page body-->
    <section id="section-body">
        <div class="container">
            <div class="membership-page-top">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="membership-page-title">
                            <h1 class="page-title"> Complete your order </h1>
                            <p class="page-subtitle"> Please enter your Account and Billing information to complete your membership! </p>
                        </div>
                        <ol class="pay-step-bar">                            
                            <li class="pay-step-block"><span>1. <span class="hidden-xs">Select</span> Package</span></li>
                            <li class="pay-step-block active"><span>2. Listing</span></li>
                            <li class="pay-step-block"><span>3. Payment</span></li>
                            <li class="pay-step-block"><span>4. Done</span></li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="membership-content-area">
                <form action="{{route('user.create.service.submit')}}" method="post">
                	{{ csrf_field() }}
                    <div class="account-block">
                        <div class="add-title-tab">
                            <h3>Property description and price</h3>
                            <div class="add-expand"></div>
                        </div>
                        <div class="add-tab-content">
                            <div class="add-tab-row push-padding-bottom">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="property-title">Title</label>
                                            <input class="form-control" id="property-title" name="title" placeholder="Enter your service title">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea class="form-control" id="description" name="description" rows="6" placeholder="Enter your service description"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="add-tab-row push-padding-bottom">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="property-type">Type</label>
                                            <select class="selectpicker" id="property-type" data-live-search="false"
                                                    data-live-search-style="begins" title="Select" name="type_id" required>
                                                @foreach($types as $type)
                                                    <option value="{{$type->id}}" selected="selected">{{$type->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="property-type">Categories</label>
                                            <select class="selectpicker" id="property-type" data-live-search="false"
                                                    data-live-search-style="begins" title="Select" name="category_id" required>
                                                @foreach($categories as $categories)
                                                    <option value="{{$categories->id}}" selected="selected">{{$categories->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="property-type">Sub Categories</label>
                                            <select class="selectpicker" id="property-type" data-live-search="false"
                                                    data-live-search-style="begins" title="Select" name="sub_category_id" required>
                                                @foreach($sub_categories as $sub_categories)
                                                    <option value="{{$sub_categories->id}}" selected="selected">{{$sub_categories->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                            <label for="property-title">Town</label>
                                            <input class="form-control" id="property-title" type="text" name="town" list="cities" placeholder="Enter your Town">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-tab-row push-padding-bottom">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="property-title">Country</label>
                                            <input class="form-control"  type="text" name="country" list="countries" placeholder="Enter your District">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="property-title">Region</label>
                                            <input class="form-control" id="property-title" type="text" name="region" list="regions" placeholder="Enter your Town">
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
                    
                    <div class="account-block text-right">
                        <button type="submit" class="btn btn-primary">Submit Property</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--end section page body-->
@endsection