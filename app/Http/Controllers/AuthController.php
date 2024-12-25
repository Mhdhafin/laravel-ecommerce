<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register()
    {
        return view('register', [
            'title' => 'Register'
        ]);
    }

    public function registerPost(Request $request)
    {

        // Validasi Input
        $request->validate([
            'username' => 'required|min:3',
            'name' => 'required',
            'password' => 'required',
            'email' => 'required|unique:users',
            'role' => ''
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role = 'user';
        $user->save();

        return redirect()->back()->with('success', 'Register Successfuly');
    }

    public function login()
    {
        return view('login', [
            'title' => 'login'
        ]);
    }



    public function loginPost(Request $request)
    {
        $validate = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);



        if (Auth::attempt($validate)) {

            return redirect()->intended('/');
        }

        return redirect()->back()->with('error', 'Invalid Username and Password');
    }
}
