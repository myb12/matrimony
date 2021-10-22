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

// Route::get('/', function () {
//     return view('welcome');
// });

//===========Admin section router===========//
Route::group(['prefix'=>'admin','namespace'=>'admin'], function(){
    Route::resource('/dashboard','DashboardController');

    //----------category section route---------//
    Route::resource('/category','CategoryController');

    //----------marital status section route---------//
    Route::resource('/marital_status','MaritalStatusController');

    //----------district section route---------//
    Route::resource('/district','DistrictController');

    //----------division section route---------//
    Route::resource('/division','DivisionController');

    //----------birth year section route---------//
    Route::resource('/birth_year','BirthYearController');

    //----------race section route---------//
    Route::resource('/race','RaceController');

    //----------height section route---------//
    Route::resource('/height','HeightController');

    //----------weight section route---------//
    Route::resource('/weight','WeightController');

});


//===========Website section router===========//
Route::group(['prefix'=>'site','namespace'=>'site'], function () {
    Route::resource('/','HomeController');
    Route::resource('/blogs','BlogController');
    Route::resource('/faq','FaqController');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
