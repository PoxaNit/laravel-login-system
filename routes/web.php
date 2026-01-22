<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('page');
});

Route::get("/login", function () {

    return view("loginForm");

});

Route::get("/users/form", function () {

    return view("createUserForm");

});

Route::post("/login", [AuthController::class, "login"]);
Route::post("/users/form", [UserController::class, "create"]);
