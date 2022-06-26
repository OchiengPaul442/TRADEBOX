<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

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

// initial pages
 Route::get('/',[AppController::class,'Home'])->name('Home');
Route::get('About',[AppController::class,'About'])->name('About');
Route::get('Contact',[AppController::class,'Contact'])->name('Contact');
Route::get('Products',[AppController::class,'Products'])->name('Products');
Route::get('Details_on_product',[AppController::class,'Details_on_product'])->name('Details_on_product');



