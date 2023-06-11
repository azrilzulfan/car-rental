<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route Halaman
Route::get('/', function () {
    return view('user.index');
});
Route::get('/sign-in', function () {
    return view('auth.sign-in');
});
Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/admin/sewa-admin', function () {
    return view('admin.sewa');
});

//Route CRUD Data Mobil dan Sewa Mobil
Route::get('/admin', [AdminController::class,'count']);
Route::resource('/admin/mobil', \App\Http\Controllers\CarController::class);
Route::get('/admin/sewa-admin',[OrderController::class,'admin']);

//Route Tampilan Data Mobil
Route::get('/',[ProductController::class,'index']);
Route::resource('/sewa', ProductController::class);
Route::get('/pesanan',[OrderController::class,'pesanan']);

//Route Sewa Mobil
Route::post('/checkout',[OrderController::class,'checkout']);
Route::get('/invoice/{id}',[OrderController::class,'invoice']);
