<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\FrontController;

Route::get('/', [FrontController::class, "index"])->name("home");

Route::get('desing-and-art', [FrontController::class, "desingArt"])->name("desing-and-art");

Route::get('restaurant-aranas', [FrontController::class, "resAranas"])->name('restaurant-aranas');
Route::get('restaurant-granada', [FrontController::class, "resGranada"])->name('restaurant-granada');

Route::get('rengin-direct-booking', function(){
    return redirect()->route('contact');
})->name('rengin.direct-booking');

