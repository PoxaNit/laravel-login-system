<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function createUser (Request $request) {

        $validated = $request->validate([
          "name" => "required|string",
          "email" => "required|email",
          "password" => "required|string"
        ]);

        $email = $validated->input("email");

        $user = User::where("email", $email)->get();

        if (!$user):

            return response()->json([
              "message" => "User already exists",
              "data" => null,
              "success" => false
            ], 409);

        endif;

        $name = $validated->input("name");

        $password = $validated->input("password");

        User::create([
            "name" => $name,
            "email" => $email,
            "password" => $hash
        ]);

    }

}
