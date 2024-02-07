<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomTypeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\ServiceFacilityController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Models\ServiceFacility;
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

Route::controller(PageController::class)->group(function(){
    Route::get('/', 'landing')->name('landing');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/guest-info-add', 'guestInfoAdd')->name('guest-info-add');
    Route::get('/guest-booking', 'guestBooking')->name('guest-booking');
    Route::post('/guest-booking-add', 'guestBookingAdd')->name('guest-booking-add');
    Route::get('/change-guest', 'changeGuest')->name('change-guest');
    Route::get('/room-list', 'roomList')->name('room-list');
});

Route::prefix('/ajax')->name('ajax.')->controller(AjaxController::class)->group(function () {
    Route::get('/search-rooms', 'searchRooms')->name('search-rooms');
    Route::get('/update-status', 'updateStatus')->name('update-status');
});

Route::middleware('auth')->prefix('/profile')->controller(ProfileController::class)->group(function () {
    Route::get('/', 'edit')->name('profile.edit');
    Route::patch('/', 'update')->name('profile.update');
    Route::delete('/', 'destroy')->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->prefix('/admin')->group(function () {
    Route::get('booking/canceled-list', [BookingController::class, 'canceledList'])->name('booking.canceled-list');
    Route::resource('booking', BookingController::class);

    Route::prefix('room-info')->name('room-info.')->group(function (){
        Route::resource('room-type', RoomTypeController::class);
        Route::resource('room', RoomController::class);
        Route::resource('service-facility', ServiceFacilityController::class);
    });

    Route::prefix('setting')->name('setting.')->group(function (){
        Route::view('/', 'setting.index')->name('index');
        Route::resource('/user', RegisteredUserController::class);
        Route::resource('/guest', GuestController::class);
    });
});

require __DIR__.'/auth.php';
