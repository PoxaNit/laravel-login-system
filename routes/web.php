<?php

use Illuminate\Support\Facades\Route;
use App\Controllers\AuthController;
use App\Controllers\UserController;

Route::get('/', function () {
    return view('page');
});

Route::post("/login", [AuthController::class, "login"]);
Route::post("/users/create", [UserController::class, "create"]);
