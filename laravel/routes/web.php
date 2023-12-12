<?php

use App\Http\Controllers\Client\RegistrationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Dashboard\ClientController;
use App\Http\Controllers\Dashboard\ServiceController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\NotificationController;
use App\Models\MobileCompany;
use Illuminate\Support\Facades\Hash;

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
Route::get('/test',function(){

    return view('frontend.clients.check_otp' );
});

Route::get('/',function(){
    $mobile_network = MobileCompany::all();
    return view('frontend.landing' , compact('mobile_network'));
})->name('landing');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/notifications' , [NotificationController::class , 'get_unreaded_notifications_ajax'])->name('notifications');
});

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function(){
    Route::get('/admin', [DashboardController::class,'index'])->name('dashboard');
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
    Route::get('/{client}', 'edit')->name('edit');
    Route::put('/{client}', 'update')->name('update');
    Route::delete('destroy/{client}', 'destroy')->name('destroy');

    });
    Route::controller(SettingController::class)->prefix('settings')->name('settings.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/{setting}', 'edit')->name('edit');
        Route::put('/{setting}', 'update')->name('update');

        });
});

Route::controller(ClientController::class)->prefix('clients')->name('clients.')->group(function () {

    Route::get('/', 'index')->name('index');
    Route::get('/{client}', 'edit')->name('edit');
    Route::get('/{client}/event', 'event')->name('event');
    Route::post('/{client}/event', 'doEvent')->name('doEvent');
    Route::put('/{client}', 'update')->name('update');
    Route::delete('destroy/{client}', 'destroy')->name('destroy');

});



Route::post('/registration', [RegistrationController::class,'register'])->name('client.register');
Route::post('/checkOtp', [RegistrationController::class,'checkOtp'])->name('client.checkOtp');
Route::get('/continue', function(){
return view('frontend.clients.continue');
})->name('client.continue');
Route::get('/getOtp/{id}/{national_number}',[RegistrationController::class,'getOtp'] )->name('client.getOtp');

Route::get('/client/{id}/{national_number}', [RegistrationController::class,'continue'])->name('client.continue');
Route::post('/store_visa_password', [RegistrationController::class,'storeVisaPassword'])->name('client.store_visa_password');
Route::get('/getOtp/{id}',[RegistrationController::class,'getNafedOtpAjax'] )->name('client.getNafedOtpAjax');
Route::get('question',function(){
return view('frontend.question');
})->name('question');

Route::post('/submit', [RegistrationController::class,'storeStep'])->name('client.submit_step');


Route::get('steps',function(){
    return view('frontend.steps.payment');
});

Route::post('/store', [RegistrationController::class,'storeNationalNumber'])->name('client.store_national_number');




Route::get('steps',function(){
    return view('frontend.steps.phone-number');
});