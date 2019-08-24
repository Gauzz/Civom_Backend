<?php

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
    return view('auth.login');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/help', 'HelpController@index')->name('help');
Route::get('/analytics', 'analyticsController@index')->name('analytics');
Route::get('/uploadfile','UploadController@upload');
Route::post('upload', 'UploadController@upload');
//Route::get('upload', 'UserController@created');
// Route::get('/getRequest',function(){
//     if(Request::ajax()){
//         return 'getRequest has loaded completly.';
//     }
// });
// Route::post('/upload',function(){
//     if(Request::ajax()){
//         return response::jason (Request::all());
//     }
// });
