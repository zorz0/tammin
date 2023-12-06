<?php

use App\Http\Controllers\Dashboard\ClientController;
use App\Http\Controllers\Dashboard\ServiceController;
use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\PriceController;
// use App\Http\Controllers\AboutUsController;
// use App\Http\Controllers\DashboardController;
// use App\Http\Controllers\UserController;
// use App\Http\Controllers\WebsiteSettingController;
// use App\Http\Controllers\PaymentController;
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
    return view('dashboard.index');
});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// // Define routes for each page


// Route::get('/price', [PriceController::class, 'index'])->name('price');

// Route::get('/about-us', [AboutUsController::class, 'index'])->name('about');

// Route::middleware(['auth'])->group(function () {
//     // Authenticated routes
//     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
//     Route::get('/user', [UserController::class, 'index'])->name('user');
//     Route::get('/website-settings', [WebsiteSettingController::class, 'index'])->name('website.settings');
// });

// Route::get('/payment', [PaymentController::class, 'index'])->name('payment');

Route::controller(ServiceController::class)->prefix('services')->name('services.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{service}', 'edit')->name('edit');
        Route::put('/{service}', 'update')->name('update');
        Route::delete('destroy/{service}', 'destroy')->name('destroy');

});

Route::controller(ClientController::class)->prefix('clients')->name('clients.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/', 'store')->name('store');
    Route::get('/{client}', 'edit')->name('edit');
    Route::put('/{client}', 'update')->name('update');
    Route::delete('destroy/{client}', 'destroy')->name('destroy');

});
