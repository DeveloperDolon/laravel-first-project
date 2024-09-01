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

Route::get("/user", [UserController::class, 'getUsers']);

Route::get("/name", [UserController::class, "getUserName"]);

Route::get("/details/{product}", [UserController::class, "getDetails"]);

Route::view("/user-form", "user-form");

Route::post("adduser", [UserController::class, "addUser"]);

Route::prefix("student")->group(function () { // route handling with prefix function in laravel routes
    Route::controller(UserController::class)->group(function () {
        Route::view("/home", "home")->middleware("check1");

        Route::get("/profile", "getUser");

        Route::get("/login", "addUser");

        Route::get("/details/{name}", "getUserName");
    });
});

// Route::middleware("check1")->group(function () { // to apply middleware group to all routes
//     Route::view("/home", "home")->middleware("check1");

//     Route::get("/profile", "getUser");

//     Route::get("/login", "addUser");

//     Route::get("/details/{name}", "getUserName");
// });
