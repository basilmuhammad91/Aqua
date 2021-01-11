<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Country;
use App\Models\Territory;

class UsersController extends Controller
{
    //

	public function index()
	{
		$users=Users::where(["Type"=>"User"])->get();
		return view('Users.index')->with('users',$users);
	}

	public function create()
	{
		$country = Country::get();
		$territory = Territory::get();
		return view('Users.create')
		->with("country", $country)
		->with("territory", $territory)
		;
	}

	public function submit(Request $req)
	{
		$user = new Users;
		$user->Name = $req->Name;
		$user->Phone = $req->Phone;
		$user->UserName = $req->UserName;
		$user->Password = $req->Password;
		$user->Type = "User";
		$user->TerritoryId = $req->TerritoryId;
		if($user->save())
		{
			return redirect()->action('UsersController@index');
		}
		else
		{
		    return redirect()->back();
		}
	}

}
