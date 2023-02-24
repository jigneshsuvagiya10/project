<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;


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

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/admindashbord', [AdminController::class, 'index'])->name('admindashbord');
Route::get('/productdata', [ProductController::class, 'index']);
Route::get('/addproduct', [ProductController::class, 'create']);
Route::post('/input', [ProductController::class, 'store']);
Route::get('/deleteproduct/{id}', [ProductController::class, 'destroy']);
Route::get('/editproduct/{id}', [ProductController::class, 'edit']);
Route::put('/editproduct/updatepro/{id}', [ProductController::class, 'update']);

Route::get('/showproduct', [ProductController::class, 'show']);
