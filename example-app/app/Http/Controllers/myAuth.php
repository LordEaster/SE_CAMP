<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class myAuth extends Controller
{
    function login_view () {
        return view('logins.login');
    }

    function login_process (Request $req) {
        $req->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $data = $req->all();

        if(Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
            return Redirect::to('/titles');
        } else {
            return Redirect::to('/login');
        }
    }

    function logout_process () {
        Auth::logout();
        return Redirect::to('/login');
    }

    function register_view () {
        return view('logins.register');
    }

    function register_process (Request $req) {
        $req->validate([
            'name'=>'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $data = $req->all();
        
        User::create($data);

        return Redirect::to('/login');
    }
}