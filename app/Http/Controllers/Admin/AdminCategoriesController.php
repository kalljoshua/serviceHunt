<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use Input, Redirect;

class AdminCategoriesController extends Controller
{
    //
    public function showAll()
    {
      # code...
      $categories = Category::all();
      return view('admin.categories')
      ->with('categories',$categories);
    }

    public function categoriesForm()
    {
      return view('admin.new_category');
    }

    public function submitCategory()
    {
      # code...
      $category = new Category();
      if(Input::has('name')) $category->name = Input::get('name');
      if(Input::has('description')) $category->description = Input::get('description');
      if($category->save())
      {
          flash('Category has successfully been added.')->success();
          return redirect(route('admin.all.categories'));
      }

      //return "submition awaiting";
    }
}
