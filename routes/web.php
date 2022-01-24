<?php

use App\Http\Controllers\serviceController;
use App\Http\Controllers\skillController;
use App\Http\Controllers\contactController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/service',[serviceController::class,'show']);
Route::get('/skill',[skillController::class,'show']);
Route::get('/contact',[contactController::class,'show']);
