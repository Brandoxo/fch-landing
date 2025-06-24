<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\front\FrontController;

Route::get('/', [frontController::class, "index"])->name("home");

Route::get('rengin-direct-booking', function(){
    return redirect()->route('contact');
})->name('rengin.direct-booking');
