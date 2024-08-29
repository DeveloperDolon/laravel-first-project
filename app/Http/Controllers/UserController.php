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

    function getDetails($product) {
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

    function getUserForm() {
        return view("form");
    }
};
