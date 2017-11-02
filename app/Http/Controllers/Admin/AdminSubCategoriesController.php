<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SubCategory;
use App\Category;
use Input, Redirect;

class AdminSubCategoriesController extends Controller
{
    //
    public function showAll()
    {
      # code...
      $sub_categories = SubCategory::all();
      return view('admin.sub_categories')
      ->with('sub_categories',$sub_categories);
    }

    public function subcategoriesForm()
    {
      $categories = Category::all();
      return view('admin.new_subcategory')
      ->with('categories',$categories);
    }

    public function submitCategory()
    {
      # code...
      $sub_category = new SubCategory();
      if(Input::has('name')) $sub_category->name = Input::get('name');
      if(Input::has('category_id')) $sub_category->category_id = Input::get('category_id');
      if($sub_category->save())
      {
          flash('Sub-Category has successfully been added.')->success();
          return redirect(route('admin.all.subcategories'));
      }else{
        flash('Sub-Category failed to be added.')->warning();
        return redirect(route('admin.all.subcategories'));
      }

      //return "submition awaiting";
    }
}
