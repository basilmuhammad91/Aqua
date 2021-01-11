<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;

class UsersController extends Controller
{
    public function index()
	{
		$users=Users::where(["Type"=>"User"])->get();
		return response()->json(["response"=>$users]);
	}

	public function submit(Request $req)
	{
		// $validator = $req->validate([
	 //        'Name' => 'required|min:2',
	 //        'Phone' => 'required|min:11',
	 //        'UserName' => 'required',
	 //        'Email' => 'required',
	 //        'Password' => 'required',
	 //        'TerritoryId' => 'required'
  //   	]);
    	
		$user = new Users;
		$user->Name = $req->Name;
		$user->Phone = $req->Phone;
		$user->UserName = $req->UserName;
		$user->Email = $req->Email;
		$user->Password = $req->Password;
		$user->Type = "User";
		$user->TerritoryId = $req->TerritoryId;
		if($user->save())
		{
			return response()->json(["response"=>"Submitted"]);
		}
		else
		{
		    return redirect()->back();
		}
	}


}
