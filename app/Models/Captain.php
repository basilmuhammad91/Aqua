<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Captain extends Model
{
    use HasFactory;

    public function User()
    {
    	return $this->hasOne("App\Models\Users","UserId","UserId");
    }

}


