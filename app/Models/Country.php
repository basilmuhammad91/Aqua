<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    public function province()
    {
    	return $this->hasMany("App\Models\Province","ProvinceId","ProvinceId");
    }
}
