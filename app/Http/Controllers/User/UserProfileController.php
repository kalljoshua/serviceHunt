<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserProfileController extends Controller
{
    //
    function showUserProfile(Request $request){

        //$auth_agent_id = Auth::guard('agent')->id();

        //$agent = Agent::find($auth_agent_id);

        return view('user.user_profile');
        //->with('agent',$agent)
        //->with('property_type',$this->property_types)
        //->with('t','agent');
    }

}
