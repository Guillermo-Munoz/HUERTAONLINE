<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\buyerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\sellerController;

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

Route::get('/', [logincontroller::class, 'index']);


Route::get('/buyer', [buyerController::class, 'buyerIndex']);
Route::get('/buyer/bought', [buyerController::class, 'bought']);


Route::get('/seller/',[sellerController::class, 'sellerIndex']);
Route::get('/seller/add',[sellerController::class, 'addsell']);
