<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VehicleOwner;
use App\Models\Territory;
use App\Models\Users;

class VehicleOwnerController extends Controller
{
    public function index()
    {
    	$vehicle_owner = VehicleOwner::get();
    	return view("VehicleOwners.index")
    	->with("vehicle_owner", $vehicle_owner)
    	;
    }

    public function create()
    {
    	$territory = Territory::get();
    	return view("VehicleOwners.create")
    	->with("territory",$territory)
    	;
    }

    public function submit(Request $req)
    {
    	$user = new Users;
    	$user->Name=$req->Name;
    	$user->Phone=$req->Phone;
    	$user->UserName=$req->UserName;
    	$user->Password=$req->Password;
    	$user->Type='VehicleOwner';
    	$user->TerritoryId=$req->TerritoryId;

    	if($user->save())
    	{
    		$vehicle_owner = new VehicleOwner;
    		$vehicle_owner->Address = $req->Address;
    		$vehicle_owner->Phone2 = $req->Phone2;
    		$vehicle_owner->Email = $req->Email;
    		$vehicle_owner->UserId = $user->UserId;

    		if($vehicle_owner->save())
    		{
    			return redirect()->action("VehicleOwnerController@index");
    		}
    		else
    		{
    			return redirect()->back();
    		}
    	}
    	else
    	{
    		return redirect()->back();
    	}

    }



}
