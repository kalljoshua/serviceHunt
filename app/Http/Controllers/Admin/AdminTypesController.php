<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Type;
use Input, Redirect;

class AdminTypesController extends Controller
{
    //
    public function showAll()
    {
      # code...
      $types = Type::all();
      return view('admin.types')
      ->with('types',$types);
    }

    public function typeForm()
    {
      return view('admin.new_type');
    }

    public function submitType()
    {
      # code...
      $type = new Type();
      if(Input::has('name')) $type->name = Input::get('name');
      if($type->save())
      {
          flash('Type has successfully been added.')->success();
          return redirect(route('admin.all.types'));
      }

      //return "submition awaiting";
    }
}
