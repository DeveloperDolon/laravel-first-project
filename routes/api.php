<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get("/hello_world", function() 
{
    return ["name" => "Dolon Chandra", "age" => 22, "profession" => "Software Engineer"];
});
