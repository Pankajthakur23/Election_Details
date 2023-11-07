<?php

use App\Http\Controllers\ElectionController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('create',[ElectionController::class,'create']);
Route::post('store',[ElectionController::class,'store'])->name('store');
Route::get('Index',[ElectionController::class,'Index'])->name('Index');
Route::get('edit/{id}',[ElectionController::class,'edit'])->name('edit');
Route::post('update/{election}',[ElectionController::class,'update'])->name('update');
Route::get('delete/{election}',[ElectionController::class,'delete'])->name('delete');
