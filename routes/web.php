<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    //Admin Route
    Route::group(['middleware'=>'isAdmin','prefix'=>'admin','as'=>'admin.'], function(){
        
    });
    
    //Customer Route
    Route::group(['middleware'=>'isCustomer'], function(){
        
        Route::get('/index', function(){
            return view('dashboard');
        })->name('index');

    });

    //vendor route
    Route::group(['middleware'=>'isVendor','prefix'=>'vendor','as'=>'vendor.'], function(){

    });

    //booking route
    Route::group(['prefix'=>'booking','as'=>'booking.'], function(){
        
    });

    //Service route
    Route::group(['prefix'=>'service','as'=>'service.'], function(){

    });
});
