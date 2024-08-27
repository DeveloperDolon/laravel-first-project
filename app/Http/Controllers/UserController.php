<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser()
    {
        return "Code step by step.";
    }

    function getUserName($name) {
        return view("getUserName", ["name" => $name]);
    }
};
