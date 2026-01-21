<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{

    public function login (Request $request) {

        $validated = $request->validate([
          "email" => "required|email",
          "password" => "required|string"
        ]);

        $email = $validated->email;

        $password = $validated->password;

        $hash = Hash::make($password);

        $user = User::where("email", $email)->first();

        if (!$user):

            return view("loginForm");

        endif;

        $storedHash = $user->password;

        if (Hash::check($storedHash, $hash)):

            return view("page");

        endif;

        return view("loginForm");

    }

}
