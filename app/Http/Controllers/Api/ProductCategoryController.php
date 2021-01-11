<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;

class ProductCategoryController extends Controller
{
    public function index()
    {
    	$cat = ProductCategory::get();
    	return response()->json(["response"=>$cat]);
    }
}
