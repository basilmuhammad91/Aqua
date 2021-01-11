<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ride extends Model
{
    use HasFactory;

    public function captain()
    {
    	return $this->hasOne("App\Models\Captain","CaptainId","CaptainId");
    }

    public function user()
    {
    	return $this->hasOne("App\Models\Users","UserId","UserId");
    }

    public function vehicle()
    {
    	return $this->hasOne("App\Models\Vehicle","VehicleId","VehicleId");
    }
}
