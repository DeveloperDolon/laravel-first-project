<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\StudentController;
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

Route::view("get-user", "get-user");

Route::view("login", "login");
Route::post("login", [UserController::class, "handleSession"]);


Route::get("update/{id}", [StudentController::class, "update"]);

Route::patch("update-student/{id}", [StudentController::class, "updateStudent"]);

Route::view("file-upload", "file-upload");
Route::post("/file-upload", [UserController::class, "fileUpload"]);


Route::view("add-student", "add-student");
Route::post("add-student", [StudentController::class, "addStudent"]);

Route::get("student-list", [StudentController::class, "getAllStudents"]);

Route::get("search", [StudentController::class, "searchData"]);

Route::get("delete-student/{id}", [StudentController::class, "deleteStudent"]);

Route::get("courses", [CourseController::class, "getAllCourse"]);

Route::get("souravData", [StudentController::class, "getStudentDataWithCourse"]);

Route::get("many-to-one", [StudentController::class, "manyToOneRelation"]);

Route::get("course/{key:id}", [CourseController::class, "index"]);

// Route::middleware("check1")->group(function () { // to apply middleware group to all routes
//     Route::view("/home", "home")->middleware("check1");

//     Route::get("/profile", "getUser");

//     Route::get("/login", "addUser");

//     Route::get("/details/{name}", "getUserName");
// });
