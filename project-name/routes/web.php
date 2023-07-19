<?php

use Illuminate\Support\Facades\Route;
use App\Models\client;

use App\Http\Controllers\clientcontrollerr;
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
Route::get('/', [clientcontrollerr::class,'index']);

//Route::get('/', 'clientcontrollerr@index');
Route::post('store', [clientcontrollerr::class,'store']);
//Route::get('/ss', 'clientcontrollerr@ss');
Route::get('edit-client/{id}', [clientcontrollerr::class,'edit']);
Route::post('update', [clientcontrollerr::class,'update']);
Route::get('delete-client/{id}', [clientcontrollerr::class,'delete']);
//test