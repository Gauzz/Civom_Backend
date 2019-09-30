<?php

use Illuminate\Http\Request;

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

//Route for shows all the data from database show all assets API
Route::get('/assets','UploadController@show');

//Route for shows data from its ID Show assets from its ID API
Route::get('/assets/{id}','UploadController@showbyid');

//Route for category API which is shows the category of data
Route::get('/categories/{category_name}','UploadController@showbycategory');

//Route for search API which is search the data from the databse
Route::get('/search/{name}','UploadController@search');

//Route for interested for item click then API is give id,email,phone no
Route::post('/leads','LeadController@create');