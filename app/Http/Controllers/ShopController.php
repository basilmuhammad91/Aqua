<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Territory;
use App\Models\Shop;
use App\Models\Users;

class ShopController extends Controller
{
   
    public function index()
    {
        $shops = Shop::get();
    	return view("Shops.index")
        ->with("shops", $shops)
        ;
    }

    public function create()
    {
        $territory = Territory::get();
		return view("Shops.create")
        ->with("territory", $territory)
        ;
    }

    public function submit(Request $req)
    {
        $user=new Users;
        $user->Name=$req->Name;
        $user->Phone=$req->Phone;
        $user->UserName=$req->UserName;
        $user->Password=$req->Password;
        $user->Type='Shop';
        $user->TerritoryId=$req->TerritoryId;

        if($user->save())
        {
            $shops = new Shop;
            $shops->Slogan = $req->Slogan;
            $shops->Address = $req->Address;
            $shops->Description=$req->Description;
            $shops->UserId = $user->UserId;
            if($req->Image)
                {
                    $shops->Image=$req->Image->store('Images/ShopImages','public');
                }

                if($shops->save())
                {
                    return redirect()->action('ShopController@index');
                }
                else
                {
                    return view('Shops.create');
                }
            }
    }
    
}