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

    function getService(Request $request,$id){
      $service = Service::find($id);
      return view('admin.admin_service_details')
      ->with('service',$service);
    }

    function delete(Request $request,$id){
      $service = Service::find($id);
      return view('admin.admin_property_delete')
      ->with('property',$property);
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

    public function approve($service_id)
    {
      # code...

      $service = Service::find($service_id);
      //return $service;
      $service->active = 1;

      if($service->save()){
        flash('Service has been approved.')->success();
        return redirect(route('admin.all.services'));
      }
    }
}
