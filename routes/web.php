<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\FrontController;

Route::get('/', [FrontController::class, "index"])->name("home");

Route::get('rengin-direct-booking', function(){
    return redirect()->route('contact');
})->name('rengin.direct-booking');

