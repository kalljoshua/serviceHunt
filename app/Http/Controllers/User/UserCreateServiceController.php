<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Category;
use App\SubCategory;
use App\Type;

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
    	return redirect(route('user.payment.form'));
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
