<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index');
    }
    public function store(Request $request){

        $request->validate([
            'name'=>'required|string|unique:users',
                'email'=>'required|string|unique:users',
                'password'=>'required|string',
                ]
        );
        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password
        ]);
        Auth::login($user);

        return redirect()->route('index');
    }
}
