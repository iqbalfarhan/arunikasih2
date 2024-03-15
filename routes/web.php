<?php

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
    return redirect()->route('home');
});

Route::middleware('guest')->group(function(){
    Route::get('/login', App\Livewire\Auth\Login::class)->name('login');
});

Route::middleware('auth')->group(function(){
    Route::get('/home', App\Livewire\Pages\Home::class)->name('home');
    Route::get('/dashboard', App\Livewire\Pages\Dashboard::class)->name('dashboard');
    Route::get('/dokumentasi', App\Livewire\Pages\Dokumentasi::class)->name('dokumentasi');
    Route::get('/profile', App\Livewire\Pages\Profile::class)->name('profile');

    Route::prefix('master')->group(function(){
        Route::get('/jenis', App\Livewire\Pages\Jenis\Index::class)->name('jenis.index');
        Route::get('/paket', App\Livewire\Pages\Paket\Index::class)->name('paket.index');
        Route::get('/user', App\Livewire\Pages\User\Index::class)->name('user.index');
        Route::get('/music', App\Livewire\Pages\Music\Index::class)->name('music.index');
    });
});
