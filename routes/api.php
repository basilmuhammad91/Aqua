<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// FOR USERS
Route::get("/users","Api\UsersController@index");
Route::post("/users/submit","Api\UsersController@submit");

//TERRITORY
Route::get("/territories","Api\TerritoryController@index");

//CATEGORIES
Route::get("/categories","Api\ProductCategoryController@index");

//SUB CATEGORIES
Route::get("/subcategories","Api\ProductSubCategoryController@index");

//SHOP
Route::get("/shops","Api\ShopController@index");

//PRODUCTS
Route::get("/products","Api\ProductController@index");
Route::post("shopproducts", "Api\ProductController@shopProducts");