<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
    	$products = Product::get();
    	return response()->json(["response"=>$products]);
    }

    public function shopProducts(Request $req)
    {
    	$products = Product::where(["SubCatId"=>$req->SubCatId, "ShopId"=>$req->ShopId])->first();
    	return response()->json(["products"=>$products, "shop"=>$products->shop, "category"=>$products->subcategory->category, "subcategory"=>$products->subcategory]);
    }
}
