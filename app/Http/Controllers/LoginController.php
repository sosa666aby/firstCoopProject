<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('auth.index');
    }
    public function store(Request $request){
        $request->validate([
                'email'=>['required','string','email'],
                'password'=>['required','string'],
            ]
        );
        if(Auth::attempt($request->only('email','password'))){
            return redirect()->route('index');
        }
        return 'fail';
    }
}
