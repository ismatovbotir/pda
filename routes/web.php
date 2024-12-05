<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ErrorController;
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

Route::get('/', [StockController::class,'index'])->middleware('auth')->name('main.index');

Route::resource('/item',ItemController::class)->middleware(['auth','company']);
Route::post('search',[ItemController::class,'search'])->middleware(['auth','company'])->name('item.search'); 
Route::get('/error',[ErrorController::class,'company'])->name('error.company');

Auth::routes();

Route::group(['prefix'=>'admin','middleware'=>['auth','company']],function(){
    Route::get('/me',[StockController::class,'index'])->name('admin.me');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
  