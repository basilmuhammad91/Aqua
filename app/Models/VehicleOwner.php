<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleOwner extends Model
{
    use HasFactory;
    public function users()
    {
    	return $this->hasOne("App\Models\Users","UserId","UserId");
    }
}
