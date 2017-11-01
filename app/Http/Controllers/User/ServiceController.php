<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;
use App\Category;

class ServiceController extends Controller
{
    //
    public function getAll()
    {
      # code...
      return view("user.all_ads");
    }
    public function getCategory(Request $request, $id)
    {
      # code...
      $categories = Category::where('id',$id)->first();
      $services = Service::where('sub_category_id',$id)->where('active',1)->paginate(5);
      //return $categories->id;
      return view("user.get_category")
      ->with('services',$services)
      ->with('categories',$categories);
    }

    public function adsDetails()
    {
      # code...
      return view("user.ads_details");
    }
}
