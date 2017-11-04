<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\SubCategory;
use App\Service;
use App\SavedSearch;



class HomeController extends Controller
{
    //
    public function index()
    {
      $categories = Category::all();
      $searches = SavedSearch::orderBy('created_at','DESC')->take(6)->get();
      $featured_services = Service::where('featured',1)->where('active',1)->orderBy('created_at','DESC')->get();
      $most_viewed_services = Service::where('active',1)->orderBy('views','DESC')->get();
      $recent_services = Service::where('active',1)->orderBy('created_at','DESC')->get();
      //return $categories;
        return view('user.index')
        ->with('categories',$categories)
        ->with('featured_services',$featured_services)
        ->with('most_viewed_services',$most_viewed_services)
        ->with('recent_services',$recent_services)
        ->with('searches',$searches);
    }

     public function registerUser()
    {
        return "have reached here!";
    }
}
