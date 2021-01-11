<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\VehicleOwner;
use App\Models\Captain;

class VehicleController extends Controller
{
    public function index()
    {
    	$vehicle = Vehicle::get();
    	return view("Vehicles.index")
    	->with("vehicle", $vehicle)
    	;
    }

    public function create()
    {
    	$vehicle_owner = VehicleOwner::get();
    	$captain = Captain::get();
    	return view("Vehicles.create")
    	->with("captain",$captain)
    	->with("vehicle_owner", $vehicle_owner)
    	;
    }

    public function submit(Request $req)
    {
    	$vehicle = new Vehicle;
    	$vehicle->Type = $req->Type;
    	$vehicle->VehicleNo = $req->VehicleNo;
    	$vehicle->Wheels = $req->Wheels;
    	$vehicle->Model = $req->Model;
    	$vehicle->Brand = $req->Brand;
    	$vehicle->IsAC = $req->IsAC;
    	$vehicle->Color = $req->Color;
    	$vehicle->CaptainId = $req->CaptainId;
    	$vehicle->VehicleOwnerId = $req->VehicleOwnerId;
    	
    	if($vehicle->save())
    	{
    		return redirect()->action("VehicleController@index");
    	}

    }

}
