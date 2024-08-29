<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view("/user/welcome", "home")->name("hm");

// Route::get("");

Route::get('/home', function () {
    return view('home');
});

Route::get("/hello/world", [RouteController::class, "show"]);

Route::view("/about", "about"); // we can define route like this

Route::get("/user", [UserController::class, 'getUser']);

Route::get("/name/{name}", [UserController::class, "getUserName"]);

Route::get("/details/{product}", [UserController::class, "getDetails"]);

Route::view("/user-form", "user-form");

Route::post("adduser", [UserController::class, "addUser"]);
