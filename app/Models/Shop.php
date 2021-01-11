<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    public function users()
    {
    	return $this->hasOne("App\Models\Users", "UserId", "UserId");
    }

    public function territory()
    {
    	return $this->hasOne("App\Models\Territory", "TerritoryId", "Territory_Id");
    }
}
