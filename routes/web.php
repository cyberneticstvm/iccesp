<?php

use App\Http\Controllers\WebController;
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
    return view('web.index');
});
Route::get('/about', function () {
    return view('web.about');
})->name('about');
Route::get('/abstract', function () {
    return view('web.abstract');
})->name('abstract');
Route::get('/committee', function () {
    return view('web.committee');
})->name('committee');
Route::get('/contact', function () {
    return view('web.contact');
})->name('contact');

Route::middleware(['web'])->group(function () {
    Route::controller(WebController::class)->group(function () {
        Route::get('/register', 'abstractSubmitPage')->name('register');
        Route::post('/register', 'abstractSubmit')->name('register.abstract');
    });
});
