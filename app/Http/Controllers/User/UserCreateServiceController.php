<?php

namespace App\Http\Controllers\User;

use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\SubCategory;
use App\Type;
use Input, Redirect;

class UserCreateServiceController extends Controller
{

    public function __construct()
    {
        $this->middleware('create-service');
    }


    //display the package selection page
    function showSelectPackage()
    {
    	return view('user.user_select_package');
    }


    //add package to sessions and redirect to creating a service
    function addPackage(Request $request)
    {
        Session::put('package',$request->input('package_id'));
        return redirect(route('user.create.service'));
    }

    //display the new service form
    function showNewServiceForm(Request $request)
    {
        $categories = Category::all();
        $sub_categories = SubCategory::all();
        $types = Type::all();
        
        return view('user.add_new_service')
        ->with(['categories'=>$categories,'sub_categories'=>$sub_categories,'types'=>$types]);
    }

    function createService()
    {
        ini_set('memory_limit', '256M');
        ini_set('max_execution_time', 600);

        $service = new Service();

        $categories = Category::all();
        $sub_categories = SubCategory::all();
        $types = Type::all();

        if(Input::has('title')) $service->title = Input::get('title');
        if(Input::has('description')) $service->description = Input::get('description');
        if(Input::has('type_id')) $service->type_id = Input::get('type_id');
        if(Input::has('category_id')) $service->category_id = Input::get('category_id');
        if(Input::has('sub_category_id')) $service->sub_category_id = Input::get('sub_category_id');
        if(Input::has('district')) $service->district = Input::get('district');
        if(Input::has('town')) $service->town = Input::get('town');
        if(Input::has('country')) $service->country = Input::get('country');
        if(Input::has('region')) $service->region = Input::get('region');
        if(Input::has('address')) $service->address = Input::get('address');
        $service->user_id = Auth::guard('user')->id();
        $service->package_id =Session::get('package');
        /**
        $check_service_title = Service::where('title',Input::get('title'));
            if(sizeof($check_service_title)>0)
            {
                flash('Please use a different title.')->warning();
                return view('user.add_new_service')
                    ->with(['categories'=>$categories,'sub_categories'=>$sub_categories,'types'=>$types]);
            }*/

        if($service->save())
        {
            flash('Service has successfully been added.')->success();
            return redirect(route('user.payment.form'));
        }

    }

    function showPaymentForm(Request $request)
    {
        //return Session::get('property');
        $package = Session::get('package');
        return view('user.user_make_payment')->with('package',$package);;
    }

    function addPayment()
    {
    	return view('user.user_done_adding_package');
    }

    function editServiceForm()
    {

    }

    function deleteService()
    {
        
    }

}
