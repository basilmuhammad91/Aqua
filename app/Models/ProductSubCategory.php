<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSubCategory extends Model
{
    use HasFactory;

    public function category()
    {
    	return $this->hasOne("App\Models\ProductCategory","CategoryId","CategoryId");
    }

}
