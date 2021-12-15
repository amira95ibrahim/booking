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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', [App\Http\Admin\Controllers\HomeController::class, 'index'])->name('home');


    Route::group(['namespace' => 'Admin', 'middleware' => 'auth:admin','prefix' => 'admin'], function () {

        Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin');

        Route::prefix('dashboard')->group(static function () {
            Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.dashboard');
            Route::get('/stays', [App\Http\Controllers\StaysController::class, 'index'])->name('stays');
            Route::get('/staysList', [App\Http\Controllers\HomeController::class, 'staysList'])->name('staysList');
            Route::get('/flight', [App\Http\Controllers\FlightController::class, 'index'])->name('Flights');
            Route::get('/car', [App\Http\Controllers\CarController::class, 'index'])->name('Cars');
            Route::get('/vendors', [App\Http\Controllers\VendorController::class, 'index'])->name('vendors');
            Route::get('/logout', [App\Http\Controllers\Admin\AdminController::class, 'logout'])->name('admin.logout');


        });

    });
 

    Route::group(['prefix' => 'admin'], function () {

        Route::get('/login', [App\Http\Controllers\Admin\AdminController::class, 'login'])->name('admin.login');

        Route::post('/login/post', [App\Http\Controllers\Admin\AdminController::class, 'loginpost'])->name('admin.loginpost');

    });
