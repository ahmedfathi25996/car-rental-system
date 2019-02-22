<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/','PagesController@home');
Route::get('/carspage','PagesController@cars');
Route::get('/contactpage','PagesController@contactus');
Route::get('/aboutpage','PagesController@about');
Route::get('/servicepage','PagesController@service');

Route::get('/blogpage','PagesController@bloghome');
Route::post('/contactpage','PagesController@sendemail');

Route::post('/bookcar','PagesController@bookcar');
Route::get('/spacificCar/{id}', 'PagesController@RentSpacificCar');
Route::post('/spacificCar', 'PagesController@StoreSpacificCar');
Route::get('/singleblog/{id}', 'PagesController@singleblog');
Route::post('/singleblog', 'PagesController@StoreComment');
Route::get('/userprofile','PagesController@userProfile');


Route::auth();

Route::get('/home', 'HomeController@index');
Route::group(['middleware'=>['web','admin']],function(){
    Route::get('/adminpanel','AdminController@index');
    Route::resource('/adminpanel/catego','CategoController');
    Route::resource('/adminpanel/cars','CarController');
    Route::resource('/adminpanel/users','UserController');
    Route::resource('/adminpanel/booking','BookingController');
    Route::resource('/adminpanel/blogs','BlogController');
    //Route::post('/adminpanel/count/blogs/{id}','BlogController@store');
   
 });
 