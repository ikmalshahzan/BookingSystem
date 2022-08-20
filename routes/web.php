<?php

use App\Http\Controllers\ServiceController;
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
    Route::group(['middleware' => 'isAdmin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::get('/', function () {
            return view('admin.dashboard');
        })->name('dashboard');
    });

    //Customer Route
    Route::group(['middleware' => 'isCustomer'], function () {

        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    });

    //vendor route
    Route::group(['middleware' => 'isVendor', 'prefix' => 'vendor', 'as' => 'vendor.'], function () {
        Route::get('/dashboard', function () {
            return view('vendor.dashboard');
        })->name('dashboard');
    });

    //booking route
    Route::group(['prefix' => 'booking', 'as' => 'booking.'], function () {
    });

    //Service route
    Route::group(['prefix' => 'service', 'as' => 'service.'], function () {
        Route::get('/service', [ServiceController::class, 'index'])->name('index');

        Route::get('/create', [ServiceController::class, 'create'])->name('create');
        Route::post('/create', [ServiceController::class, 'store'])->name('store');
        Route::delete('/destroy/{service}', [ServiceController::class, 'destroy'])->name('destroy');
    });
});
