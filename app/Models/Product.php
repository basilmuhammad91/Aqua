<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function subcategory()
    {
    	return $this->hasOne("App\Models\ProductSubCategory","SubCatId","SubCatId");
    }

    public function shop()
    {
    	return $this->hasOne("App\Models\Shop","ShopId","ShopId");
    }

}
