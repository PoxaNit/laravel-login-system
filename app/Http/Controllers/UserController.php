<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function create (Request $request) {

        $validated = $request->validate([
          "name" => "required|string",
          "email" => "required|email",
          "password" => "required|string"
        ]);

        $email = $validated->input("email");

        $user = User::where("email", $email)->first();

        if ($user):

            return view("createUserForm");

        endif;

        $name = $validated->input("name");

        $password = $validated->input("password");

        $hash = Hash::make($password);

        User::create([
            "name" => $name,
            "email" => $email,
            "password" => $hash
        ]);

        return view("loginForm");

    }

}
