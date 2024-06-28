<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Users;

Route::get('/', function () { 
        if (auth()->check()) {
            return redirect()->route('home');
        }
        return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


