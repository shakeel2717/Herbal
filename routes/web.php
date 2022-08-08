<?php

use App\Http\Controllers\ActionController;
use Illuminate\Support\Facades\Route;

Route::get('/product/index',[ActionController::class,'index'])->name('products');
Route::post('/product/store',[ActionController::class,'action'])->name("action");
