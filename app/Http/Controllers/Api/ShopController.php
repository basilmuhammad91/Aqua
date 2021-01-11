<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shop;

class ShopController extends Controller
{
    public function index()
    {
    	$shop = Shop::get();
    	return response()->json(["response"=>$shop]);
    }
}
