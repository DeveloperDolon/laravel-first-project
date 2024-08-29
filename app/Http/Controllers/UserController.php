<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser()
    {
        return "Code step by step.";
    }

    function getUserName($name)
    {
        return view("getUserName", ["name" => $name]);
    }

    function getDetails($product)
    {
        $products = [
            [
                "name" => "Monitor 1D G5",
                "brand" => "Samsung",
                "price" => 34000,
                "description" => "This is a 1D G5 monitor."
            ],
            [
                "name" => "Samurai 545",
                "brand" => "Samsung",
                "price" => 34600,
                "description" => "This is a Samurai 545 monitor."
            ],
            [
                "name" => "Ultra gaming monitor",
                "brand" => "Samsung",
                "price" => 234000,
                "description" => "This is a Ultra gaming monitor."
            ],
            [
                "name" => "Monitor 1D G5",
                "brand" => "Samsung",
                "price" => 34000,
                "description" => "This is a 1D G5 monitor."
            ]
        ];
        return view("productDetails", ["product" => $product, "products" => $products]);
    }

    function addUser(Request $req)
    {
        $req->validate(
            [
                "name" => "required | min:3 | max:10",
                "email" => "required | email",
                "password" => "required",
                "mobile_number" => "required | digits:11",
                "skill" => "required"
            ],
            [
                "name.required" => "The attribute field is required.",
                "name.min" => "The attribute field must be at least :min characters.",
                "name.max" => "The attribute field must be less than or equal to :max characters.",
                "email.required" => "The attribute field must be a valid email address.",
                "password.required" => "The attribute field must be a valid password.",
                "skill.required" => "The attribute field must"
            ]
        );

        echo "User name is $req->name";
        echo "<br>";
        echo "User email is $req->email";
        echo "<br>";
        echo "User phone number is $req->mobile_number";
        echo "<br>";
        echo "User password is $req->password";
    }
};
