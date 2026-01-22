<?php

use Illuminate\Support\Facades\Route;
use App\Controllers\AuthController;
use App\Controllers\UserController;

Route::get('/', function () {
    return view('page');
});

Route::get("/login", [AuthController::class, "login"]);
Route::get("/users/form", [UserController::class, "create"]);

Route::post("/login", [AuthController::class, "login"]);
Route::post("/users/form", [UserController::class, "create"]);
