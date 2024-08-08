<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function viewSignIn() {
        return view("signin");
    }
    public function viewSignUp() {
        return view("signup");
    }
    public function register(Request $request) {
        dd($request->all());
    }
}
