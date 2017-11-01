<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;

class AdminServicesController extends Controller
{
    //
    public function showAll()
    {
      # code...
      $services = Service::all();
      return view('admin.all_services')
      ->with('services',$services);
    }

    public function suspended()
    {
      # code...
      $services = Service::where('suspended',1)->get();
      return view('admin.suspended_services')
      ->with('services',$services);
    }

    public function pending()
    {
      # code...
      $services = Service::where('active',0)->get();
      return view('admin.pending_services')
      ->with('services',$services);
    }
}
