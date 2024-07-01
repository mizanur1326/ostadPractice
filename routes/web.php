<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// create users
Route::get('users/create', [ FormController::class, 'create' ]);
Route::post('users/create', [ FormController::class, 'store' ])->name('users.store');


// view users list
Route::get('/users', [UserController::class, 'index']);

// upload file
Route::get('file-upload', [FileController::class, 'index']);
Route::post('file-upload', [FileController::class, 'store'])->name('file.store');

