<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductSubCategory;

class ProductSubCategoryController extends Controller
{
    public function index()
    {
    	$sub_cat = ProductSubCategory::get();
    	return response()->json(["response"=>$sub_cat]);
    }
}