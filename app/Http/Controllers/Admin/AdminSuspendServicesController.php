<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;

class AdminSuspendServicesController extends Controller
{
  //
  public function suspendService()
  {
    # code...
    //return "am here";
    $res = array();
    $message = "";
    $error = "";
    $status = "";

    $service_id = $_GET['service_id'];
    $state = $_GET['state'];
      if($state == 1){
        $service = Service::find($service_id);

        $service->suspended = 1;

        $service->save();

        $error = 0;
        $status = 1;
        $message = "Service suspended";
      }elseif($state == 0){
        $Service = Service::find($service_id);

        $service->suspended = 0;

        $service->save();

        $error = 0;
        $status = 2;
        $message = "Service unsuspended";
      }else{
        $error = 0;
        $status = 3;
        $message = "Suspension state unknown";
      }
    $res['error'] = $error;
    $res['status'] = $status;
    $res['message'] = $message;

    return json_encode($res);
  }

  function getSuspendedServices(){
    //return "am here";

    $services = Service::where('suspended',1)->get();

    $res = array();

    $service_array = array();
    foreach ($services as $service) {
      array_push($service_array,$service->id);
    }

    $res["suspended"] = $service_array;
    return json_encode($res);

  }

  public function reactivateService($service_id)
  {
    # code...

    $service = Service::find($service_id);
    //return $service;
    $service->suspended = 0;

    if($service->save()){
      flash('Service has been reactivated.')->success();
      return redirect(route('admin.all.services'));
    }
  }


}
