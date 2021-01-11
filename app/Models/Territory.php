<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Territory extends Model
{
    use HasFactory;


 public function City()
    {
    	return $this->hasOne("App\Models\City","CityId","CityId");
    }

}
