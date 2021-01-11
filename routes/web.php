<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



//USERS
Route::get("/Users","UsersController@index");
Route::get("/Users/create","UsersController@create");
Route::post("/Users/submit","UsersController@submit");


// CAPTAINS
Route::get("/Captains","CaptainController@index");
Route::get("Captains/create","CaptainController@create");
Route::post("Captains/submit","CaptainController@submit");

// SHOPS
Route::get("/shops","ShopController@index");
Route::get("shops/create","ShopController@create");
Route::post("shops/submit","ShopController@submit");
// Route::post("shops/submit","CaptainController@submit");

// CATEGORIES
Route::get("/category","ProductCategoryController@index");
Route::get("category/create","ProductCategoryController@create");
Route::post("category/submit","ProductCategoryController@submit");

// SUB CATEGORIES
Route::get("/subcategory","ProductSubCategoryController@index");
Route::get("subcategory/create","ProductSubCategoryController@create");
Route::post("subcategory/submit","ProductSubCategoryController@submit");

// PRODUCTS
Route::get("/product","ProductController@index");
Route::get("product/create","ProductController@create");
Route::post("product/submit","ProductController@submit");
Route::get('/product/getSubCategories','ProductController@getSubCategories');

// FOR VENDORS
Route::get('vendors','VendorController@index');
Route::get('/vendors/create','VendorController@create');
Route::post('/vendors/submit','VendorController@submit');

// FOR VEHICLE OWNERS
Route::get('vehicleowners','VehicleOwnerController@index');
Route::get('/vehicleowners/create','VehicleOwnerController@create');
Route::post('/vehicleowners/submit','VehicleOwnerController@submit');

// FOR VEHICLE 
Route::get('vehicle','VehicleController@index');
Route::get('/vehicle/create','VehicleController@create');
Route::post('/vehicle/submit','VehicleController@submit');

// FOR RIDES 
Route::get('rides','RideController@index');
Route::get('rides/delete',"RideController@delete");