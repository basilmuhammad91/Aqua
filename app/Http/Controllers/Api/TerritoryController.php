<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Territory;

class TerritoryController extends Controller
{
    public function index()
    {
    	$territory = Territory::get();
    	return response()->json(["response" => $territory]);
    }
}