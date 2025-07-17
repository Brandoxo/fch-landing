<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\FrontController;

Route::get('/', [FrontController::class, "index"])->name("home");

Route::get('desing-and-art', [FrontController::class, "desingArt"])->name("desing-and-art");

Route::get('restaurant-ananas', [FrontController::class, "resAnanas"])->name('restaurant-ananas');
Route::get('restaurant-granada', [FrontController::class, "resGranada"])->name('restaurant-granada');

Route::get('contact', [FrontController::class, "contact"])->name('contact');
Route::get('event-contact', [FrontController::class, 'eventContact'])->name('event.contact');

Route::post('event-contact', [ContactController::class, 'sendEventContactEmail'])->name('event.contact.send');

Route::get('rengin-direct-booking', function(){
    return redirect()->route('contact');
})->name('rengin.direct-booking');

