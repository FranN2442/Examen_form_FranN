<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index(){

        $user = Auth::user();

        return view('user.index',compact('user'));

    }
    public function login(Request $request) : RedirectResponse
    {

        $credentials =  [

            'email' => $request->email,
            'password' => $request->password,
    
        ];

        if(Auth::attempt($credentials)){

            return redirect()->route('user.index')->with('success','Inicio de sessión correcto');

        }

        return redirect()->route("user.login-page")->with('denied','Inicio de sessión incorrecto');

    }
    public function logout() : RedirectResponse
    {

        Auth::logout();
        return redirect()->route('user.login-page');

    }
    public function register(UserRequest $userRequest): RedirectResponse
    {
        User::create([
            'name' => $userRequest->name,
            'email' => $userRequest->email,
            'password' => $userRequest->password,
        ]);

        return redirect()->route("user.login-page");
    }
}
