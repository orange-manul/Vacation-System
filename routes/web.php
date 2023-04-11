<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\MainController::class, 'index'])->name('main');

// Route employees
Route::middleware(['auth'])->group(function () {
    Route::get('/users', \App\Http\Controllers\Employee\IndexController::class)->name('user.index');
    Route::get('/users/vacation/create', \App\Http\Controllers\Employee\CreateController::class)->name('user.create');
    Route::post('/users', \App\Http\Controllers\Employee\StoreController::class)->name('user.store');
    Route::get('/users/vacation/{id}/edit', \App\Http\Controllers\Employee\EditController::class)->name('user.edit');
    Route::put('/users/vacation/{id}', \App\Http\Controllers\Employee\UpdateController::class)->name('user.update');
    Route::get('/users/{id}', \App\Http\Controllers\Employee\ShowController::class)->name('user.show');
});

// Route for managers
Route::middleware(['auth', 'manager'])->group(function () {
    Route::get('/managers', \App\Http\Controllers\Managers\IndexController::class)->name('managers.index');
    Route::get('/managers/user/{id}', \App\Http\Controllers\Managers\ShowController::class)->name('managers.vacation.show');
    Route::get('/managers/vacation/{user}/edit', \App\Http\Controllers\Managers\EditController::class)->name('managers.vacation.edit');
    Route::put('/managers/vacation/{user}', \App\Http\Controllers\Managers\UpdateController::class)->name('managers.vacation.update');
});

Route::get('/all-employees', \App\Http\Controllers\IndexEmployeeController::class)->name('employees.index');


Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');

Auth::routes();
