<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;

class AdminRecommendServicesController extends Controller
{
    //
    function recommendService(){
      $res = array();
      $message = "";
      $error = "";
      $status = "";

      $service_id = $_GET['service_id'];


      $service = Service::find($service_id)
      ->where('featured',1)
      ->get();

      if($service->count()>0){
        $service = Service::find($service_id);

        $service->featured = 0;

        $service->save();

        $error = 0;
        $status = 2;
        $message = "Service unrecommended";

      }else{
        $service = Service::find($service_id);

        $service->featured = 1;

        $service->save();

        $error = 0;
        $status = 1;
        $message = "Service recommended";


      }

      $res['error'] = $error;
      $res['status'] = $status;
      $res['message'] = $message;

      return json_encode($res);
    }

    function getRecommended(){

      $services = Service::where('featured',1)->get();

      $res = array();

      $prop_array = array();
      foreach ($services as $service) {
        array_push($prop_array,$service->id);
      }

      $res["recommended"] = $prop_array;
      return json_encode($res);

    }
}
