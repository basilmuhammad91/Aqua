<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategory;

class ProductCategoryController extends Controller
{
    public function index()
    {
    	$cat = ProductCategory::get();
    	return view("Categories.index")
    	->with("cat", $cat)
    	;
    }

    public function create()
    {
    	return view("Categories.create");
    }

    public function submit(Request $req)
    {
    	$cat = new ProductCategory;
    	$cat->Name = $req->Name;
    	if($req->Image)
        {
            $cat->Image=$req->Image->store('Images/ProductCategoriesImages','public');
        }

        if($cat->save())
        {
            return redirect()->action('ProductCategoryController@index');
        }
        else
        {
            return redirect()->back();
        }
    }
}
