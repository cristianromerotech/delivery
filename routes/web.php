<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\LoginController;
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
Route::get('/login', function () {
    return view('login.index');
});


 Route::post('/login', [LoginController::class, 'index'])->name('login');
/* 
Route::get('/login', function () {
    return 'holaaaaa';
}); */
Route::get('/delivery', [DeliveryController::class, 'index'])->name('delivery');
Route::post('/delivery', [DeliveryController::class, 'store'])->name('delivery');

Route::get('/delivery/{id}', [DeliveryController::class, 'show'])->name('delivery-edit');
Route::patch('/delivery/{id}', [DeliveryController::class, 'update'])->name('delivery-update');
Route::delete('/delivery/{id}', [DeliveryController::class, 'destroy'])->name('delivery-destroy');