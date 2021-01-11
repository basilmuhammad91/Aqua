<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ride;

class RideController extends Controller
{
    public function index()
    {
    	$rides = Ride::get();
    	return view("Rides.index")
    	->with("rides", $rides)
    	;
    }

    public function delete(Request $req)
    {
    	$rides = Rides::where(["RideId"=>$req->Id])->delete();
    	if($rides)
    	{
    		return redirect()->action("RideController@index");
    	}

    	else
    	{
    		return redirect()->back();
    	}

    }
}