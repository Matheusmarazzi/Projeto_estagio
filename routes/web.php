<?php
use App\Http\Controllers\{
    UserController
};
use Illuminate\Support\Facades\Route;



Route::get('/users', [UserController::class, 'index'] )->name('users.index');
Route::get('/users/{id}', [UserController::class, 'show'] )->name('users.show');

Auth::routes();

/*Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/