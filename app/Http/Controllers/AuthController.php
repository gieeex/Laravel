<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    function showRegister(){
        return view('authentication.register');
    }
    function showlogin(){
        return view('authentication.login');
    }

function performregister(Request $request){
    $request->validate([
        'name'     => 'required|string|max:255',
        'email'    => 'required|email|unique:users,email',
        'password' => 'required|min:6|confirmed'
    ]);

    User::create([
        'name'     => $request->name,
        'email'    => $request->email,
        'password' => Hash::make($request->password)
    ]);

    return redirect()->route('login.form')->with('success', 'Registration successful');
}

    function performlogin(Request $request){

    }
}