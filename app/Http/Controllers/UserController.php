<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function getUsers()
    {
        // return "Code step by step.";

        // return response("Code step by step.");

        // return response()->json(["Code step by step."]);

        // return view('get-user');
        return DB::select("select * from users");
    }

    function getUserName()
    {
        // $result = DB::table("users")->where("name", "Durjoy Roy")->delete();

        // if($result) {
        //     echo "User add success.";
        // } else {
        //     echo "User add failed.";
        // }

        // $response = DB::table("users")->get();

        $response = Student::get();
        // $result = Student::where("name", "Kabab Lalu")->delete();

        // $result = Student::insert([
        //     "id" => 2,
        //     "name" => "Sristi Rani",
        //     "email" => "sristi@gmail.com",
        //     "password" => "password"
        // ]);

        // if ($result) {
        //     echo "User insert success.";
        // } else {
        //     echo "User insert failed.";
        // }
        return view("getUserName", ["data" => json_decode($response)]);
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
                "name" => "required | uppercase | min:3 | max:10",
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
                "skill.required" => "The attribute field must",
                "name.uppercase" => "Nam upper case kor hala.",
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

    function handleSession(Request $req) 
    {
        $userName = $req->input("name");
        $req->session()->put('name', $userName);
        return redirect('get-user');
    }

    function fileUpload(Request $req) 
    {
        // $req->validate([
        //     'file' =>'required|mimes:jpg,png,jpeg|max:2048',
        // ]);
        $path = $req->file("file")->store("public");
        $mainPath = explode("/", $path);
        
        return view("display-image", ["image" => $mainPath[1]]);
    }
};
