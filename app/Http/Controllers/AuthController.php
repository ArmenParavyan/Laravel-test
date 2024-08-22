<?php

namespace App\Http\Controllers;

use App\Http\Requests\SingninRequest;
use App\Http\Requests\SingnupRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function viewSignIn() {
        return view("signin");
    }
    public function viewSignUp() {
        return view("signup");
    }
    public function register(SingnupRequest $request) {
        $data = $request->all();
        $user = User::create([
            "email"=> $data["email"],
            "password"=> Hash::make($data["password"])
        ]);

        $token = $user->createToken("auth_token")->plainTextToken; 
        return response()->json(['success' => true,'token'=> $token]);
    }

    public function login(SingninRequest $request) {

        if (!auth()->attempt($request->only('email','password'))) {
            return response()->json(['success'=> false], 401);
        } 

        $user = auth()->user();
        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json(['success' => true,'token'=> $token]);
    }

    public function getAuthUser() {
        return response()->json(['success' => true,'user'=> auth()->user()]);
    }
}