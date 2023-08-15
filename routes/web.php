<?php

use App\Http\Livewire\Pages\Devices\DeviceLivewire;
use App\Http\Livewire\Pages\Dashboard\DashboardLivewire;
use App\Http\Livewire\Pages\Devices\AssignLivewire;
use App\Http\Livewire\Pages\Devices\DevicesLivewire;
use App\Http\Livewire\Pages\Devices\PublicDeviceLivewire;
use App\Http\Livewire\Pages\Location\LocationHistoryLivewire;
use App\Http\Livewire\Pages\Profile\ProfileLivewire;
use App\Http\Livewire\Pages\Users\UsersLivewire;

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
    return view('landing');
});

Auth::routes();


Route::middleware(['auth'])->group(function () {
    Route::middleware(['validateRole'])->group(function () {
        Route::get('/users', UsersLivewire::class)->name('users');
        Route::get('/devices', DevicesLivewire::class)->name('devices');
        Route::get('/devices/device/assign/{id}', AssignLivewire::class)->name('assign');
        Route::get('/devices/device/location/{id}', LocationHistoryLivewire::class)->name('location.history');
    });
    Route::get('/home', DashboardLivewire::class)->name('home');
    Route::get('/profile', ProfileLivewire::class)->name('profile');
    Route::get('/devices/device/{id}', DeviceLivewire::class)->name('device');
    Route::get('/devices/public/device/{id}', PublicDeviceLivewire::class)->name('public.device');
});


// Route::get()
