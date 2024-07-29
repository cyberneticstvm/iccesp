<?php

use App\Http\Controllers\AdminController;
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
    //return view('web.welcome');
});
Route::get('/about', function () {
    return view('web.about');
})->name('about');
/*Route::get('/abstract', function () {
    return view('web.abstract');
})->name('abstract');*/
Route::get('/committee', function () {
    return view('web.committee');
})->name('committee');
Route::get('/contact', function () {
    return view('web.contact');
})->name('contact');

Route::get('/conference/registration', function () {
    return view('web.conference-registration');
})->name('conference.registration');

Route::get('/login', function () {
    return view('admin.login');
})->name('login');

Route::middleware(['web'])->group(function () {
    Route::controller(WebController::class)->group(function () {
        /*Route::get('/register', 'abstractSubmitPage')->name('register');
        Route::post('/register', 'abstractSubmit')->name('register.abstract');*/

        Route::get('/guidelines', 'guidelines')->name('guidelines');
        Route::get('/paper', 'paper')->name('paper');
        Route::post('/paper', 'submitPaper')->name('paper.submit');
        Route::get('/paper/without/abstract', 'paperWa')->name('paper.wa');
        Route::post('/paper/without/abstract', 'submitWaPaper')->name('paper.wa.submit');
        Route::get('/paper/asce', 'paperAsce')->name('paper.asce');
        Route::post('/paper/asce', 'submitAscePaper')->name('paper.asce.submit');
    });
    Route::controller(AdminController::class)->group(function () {
        Route::post('/login', 'login')->name('signin');
    });
});
Route::middleware(['web', 'auth'])->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/abstracts/wa', 'abstractswa')->name('abstracts.wa');
        Route::get('/abstracts/asce', 'abstractsasce')->name('abstracts.asce');
        Route::get('/abstracts', 'abstracts')->name('abstracts');
        Route::get('/abstract/edit/{id}', 'editUbstract')->name('edit.abstract');
        Route::post('/abstract/update/{id}', 'updateUbstract')->name('update.abstract');

        Route::get('/paper/edit/{id}/{type}', 'editPaper')->name('edit.paper');
        Route::post('/paper/update', 'updatePaper')->name('update.paper');


        Route::get('/dashboard', 'dashboard')->name('dashboard');
        Route::get('/logout', 'logout')->name('logout');
    });
});
Route::middleware(['web', 'auth', 'admin'])->group(function () {
    Route::prefix('staff')->controller(AdminController::class)->group(function () {
        Route::get('/', 'staff')->name('staff');
        Route::get('/create', 'staffcreate')->name('staff.create');
        Route::post('/save', 'staffstore')->name('staff.save');
        Route::get('/edit/{id}', 'staffedit')->name('staff.edit');
        Route::post('/update/{id}', 'staffupdate')->name('staff.update');
        Route::get('/delete/{id}', 'staffdestroy')->name('staff.delete');
    });
});
