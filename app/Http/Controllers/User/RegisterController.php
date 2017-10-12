<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input, Redirect;
use App\User;

class RegisterController extends Controller
{
    //User registration 

    public function registerUser()
    {
    	$user = new User();

    	if(Input::has('first_name')) $user->first_name = Input::get('first_name');
        if(Input::has('last_name')) $user->last_name = Input::get('last_name');
        if(Input::has('username')) $user->username = Input::get('username');
        if(Input::has('phone')) $user->phone = Input::get('phone');
        if(Input::has('email')) $user->email = Input::get('email');
        $user->access_level = 1;
        if(Input::has('password')) $user->password = bcrypt(Input::get('password'));

        $check_agent_email = User::where('email',Input::get('email'));
          if(sizeof($check_agent_email)>0)
          {
            flash('Email Address has already been registered.')->warning();
            return Redirect::back();
          }

        $check_agent_username = User::where('username',Input::get('username'));
          if(sizeof($check_agent_username)>0)
          {
            flash('Username has already been registered. Please choose a different username')->warning();
            return Redirect::back();
          }


        	if($user->save())
        	{
                flash('Data has successfully been added')->success();
        		return redirect(route('home'));
        	}
    	
    }

    function loginUser()
    {
    	
    }
}
