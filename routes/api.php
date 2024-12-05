<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\StockController;
use App\Http\Controllers\api\BarcodeController;
use App\Http\Controllers\api\ItemController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/status/{token?}',[StockController::class,'status']);
Route::resource('/items',ItemController::class);

Route::post('/stocks/delete',[StockController::class,'deleteAll']);
Route::resource('/stocks',StockController::class);
Route::resource('/barcodes',BarcodeController::class);
//Route::default('hi');