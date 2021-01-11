<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Captain;

class Vehicle extends Model
{
    use HasFactory;
    
    public function captain()
    {
    	return $this->hasOne("App\Models\Captain","CaptainId","CaptainId");
    }

    public function vehicle_owner()
    {
    	return $this->hasOne("App\Models\VehicleOwner","VehicleOwnerId","VehicleOwnerId");
    }

}
