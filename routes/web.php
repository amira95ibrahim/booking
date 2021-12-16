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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/stays', [App\Http\Controllers\StaysController::class, 'index'])->name('stays');
Route::get('/staysList', [App\Http\Controllers\HomeController::class, 'staysList'])->name('staysList');
Route::get('/flight', [App\Http\Controllers\FlightController::class, 'index'])->name('Flights');
Route::get('/car', [App\Http\Controllers\CarController::class, 'index'])->name('Cars');
Route::get('/taxi', [App\Http\Controllers\TaxiController::class, 'index'])->name('Taxis');
Route::get('/attraction', [App\Http\Controllers\AttractionController::class, 'index'])->name('Attractions');
Route::get('/vendor', [App\Http\Controllers\VendorController::class, 'index'])->name('vendor');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');


// Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
//     Route::prefix('admin')->namespace('App\Http\Controllers')->name('admin/')->group(static function() {
//         Route::prefix('cars')->name('cars/')->group(static function() {
//             Route::get('/',                                             'CarController@index')->name('index');
//             Route::get('/create',                                       'CarController@create')->name('create');
//             // Route::post('/',                                            'CarController@store')->name('store');
//             // Route::get('/{car}/edit',                               'CarController@edit')->name('edit');
//             // Route::post('/bulk-destroy',                                'CarController@bulkDestroy')->name('bulk-destroy');
//             // Route::post('/{car}',                                   'CarController@update')->name('update');
//             // Route::delete('/{car}',                                 'CarController@destroy')->name('destroy');
//             // Route::get('/export',                                       'CarController@export')->name('export');
//         });
//     });
// });