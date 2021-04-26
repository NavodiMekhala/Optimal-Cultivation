<?php

use App\Http\Controllers\HomeController;
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
})->name('welcome');

Route::get('/view', [HomeController::class, 'view'])->name('home.view');
Route::post('/import', [HomeController::class, 'index'])->name('home.import');
Route::get('/item/get', [HomeController::class, 'getItem'])->name('get.item');
Route::get('/item/get/details', [HomeController::class, 'getItemDetails'])->name('get.item.details');
Route::get('/get/climate', [HomeController::class, 'getClimate'])->name('get.climate');


