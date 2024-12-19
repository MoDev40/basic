<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function register()
    {
        return view('auth.register');
    }
    public function store(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        User::create([
            'name' => $req->name,
            'email' => $req->name,
            'password' => Hash::make($req->password),
        ]);
        return to_route('auth.login');
    }
    public function login()
    {
        return view('auth.login');
    }
}
