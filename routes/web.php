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
    \App\Asset::chunk(10000,function($assets)
    {

    });
    return view('auth.login');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/help', 'HelpController@index')->name('help');
Route::get('/analytics', 'analyticsController@index')->name('analytics');
Route::get('/uploadfile','UploadController@upload');
Route::post('upload', 'UploadController@upload');
Route::get('home','UploadController@index');
//Route::resource('home','UploadController');
// Route::get('/find',function(){
//     $assets = \App\Asset::find(101);
//     return view('home')->with('assets',$assets);
    // foreach($assets as $value){
       // return $assets->pname;

    // }
//});
//Route::resource('index','UploadController');
//Route::get('/home','UploadController@getData');
//Route::get('/index', 'UploadController@index')->name('retrieve');
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
