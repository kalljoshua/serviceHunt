<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Input, Redirect;
use App\Company;

class CompanyController extends Controller
{
    //
    public function newCompany()
    {
      # code...
      return view('user.add_company');
    }

    public function postCompany()
    {
      ini_set('memory_limit', '256M');
      ini_set('max_execution_time', 600);

      $company = new Company();


      $company->user_id = Auth::guard('user')->id();
      if(Input::has('name')) $company->name = Input::get('name');
      if(Input::has('description')) $company->description = Input::get('description');
      if(Input::has('district')) $company->district = Input::get('district');
      if(Input::has('telephone')) $company->telephone = Input::get('telephone');
      if(Input::has('email')) $company->email = Input::get('email');
      if(Input::has('website')) $company->website = Input::get('website');
      if(Input::has('facebook')) $company->facebook = Input::get('facebook');
      if(Input::has('twitter')) $company->twitter = Input::get('twitter');
      if(Input::has('address')) $company->address = Input::get('address');
      if(Input::has('opening_time')) $company->opening_time = Input::get('opening_time');
      if(Input::has('closing_time')) $company->closing_time = Input::get('closing_time');

      if($company->save())
      {
          flash('Company has successfully been added.')->success();
          return redirect(route('user.profile'));
      }

    }
}
