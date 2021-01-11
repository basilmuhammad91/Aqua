<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductSubCategory;
use App\Models\ProductCategory;

class ProductSubCategoryController extends Controller
{
    public function index()
    {
        $subcat = ProductSubCategory::get();
    	return view("SubCategories.index")
        ->with("subcat", $subcat);
        ;
    }

    public function create()
    {
    	$cat = ProductCategory::get();
    	return view("SubCategories.create")
    	->with("cat", $cat)
    	;
    }

    public function submit(Request $req)
    {
    	$subcat = new ProductSubCategory;
    	$subcat->Name = $req->Name;
    	$subcat->CategoryId = $req->CategoryId;

    	if($subcat->save())
    	{
    		return redirect()->action("ProductSubCategoryController@index");
    	}
    	else
    	{
    		return redirect()->back();
    	}
    }
}