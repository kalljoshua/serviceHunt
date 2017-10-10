<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminLoginController extends Controller
{
    //
    public function showLoginForm(){
        return view('admin.login');
    }

    public function login()
    {
    	return redirect(route('admin.dashboard'));
    }
}
