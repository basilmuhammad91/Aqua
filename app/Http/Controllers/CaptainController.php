<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Captain;
use App\Models\Users;

class CaptainController extends Controller
{
    
    public function index ()
    {	$captains=Captain::get();
	return view('Captains.index')->with("captains",$captains);
    	
    }

    public function create()
    {
    	return view('Captains.create');
    }

    public function submit(Request $req)
    {
    	$user=new Users;
    	$user->Name=$req->Name;
    	$user->Phone=$req->Phone;
    	$user->UserName=$req->UserName;
    	$user->Password=$req->Password;
    	$user->Type='Captain';
    	$user->TerritoryId=$req->TerritoryId;


    	if($user->save())
    	{
    		$captain=new Captain;
    		$captain->CNIC=$req->CNIC;
    		$captain->IsOnRide=0;
    		$captain->IsOnDuty=0;
    		$captain->IsActive=$req->IsActive;
    		$captain->UserId=$user->UserId;
    		$captain->Lat=0;
    		$captain->Long=0;
    		$captain->EmergencyContactNo=$req->EmergencyContactNo;
    		if($req->Image)
    		{
    			$captain->Image=$req->Image->store('Images/CaptainImages','public');
    		}

    		if($captain->save())
	    	{
	    		return redirect()->action('CaptainController@index');
	    	}
	    	else
	    	{
	    		return view('Captains.create');
	    	}
    	}
    	else
    	{
    		return view('Captains.create');
    	}


    	
    }



}
