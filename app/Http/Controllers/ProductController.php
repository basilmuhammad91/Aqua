<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductSubCategory;
use App\Models\ProductCategory;
use App\Models\Shop;

class ProductController extends Controller
{
    public function index()
    {
    	$products = Product::get();
    	return view("Products.index")
    	->with("products", $products)
    	;
    }

    public function create()
    {
    	$shops = Shop::get();
    	$cat = ProductCategory::get();
		return view("Products.create")
		->with("cat", $cat)
		->with("shops", $shops)
		;
    }

    public function submit(Request $req)
    {
    	$products = new Product;
    	$products->Name = $req->Name;
    	$products->Description = $req->Description;
    	$products->Price = $req->Price;
    	$products->Quantity = $req->Quantity;
    	$products->Unit = $req->Unit;
    	$products->SubCatId  = $req->SubCatId;
    	$products->ShopId = $req->ShopId;

    	if($req->Image)
    	{
    		$products->Image = $req->Image->store("Images/ProductImages","public");
    	}

    	if($products->save())
    	{
    		return redirect()->action("ProductController@index");
    	}
    	else
    	{
    		return redirect()->back();
    	}
    }

    public function getSubCategories(Request $req)
    {
        $subcategories=ProductSubCategory::where(["CategoryId"=>$req->CategoryId])->get();
        return $subcategories;
    }
}
