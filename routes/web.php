<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home/{name}', function ($name) {
    return view('home', ["name" => $name]);
});

Route::view("/about", "about"); // we can define route like this

Route::get("/user", [UserController::class, 'getUser']);

Route::get("/name/{name}", [UserController::class, "getUserName"]);