<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function login(){
    	return view('loginform');
    }

    public function authenticate(Request $request){
    	$credentials = $request->only('username', 'password');
		if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('user-recipes');
        }
        $request->flash();
        return back()->withErrors([
            'loginerr' => 'Invalid username or password!',
        ]);
    }

    public function logout(Request $request){
    	Auth::logout();
		$request->session()->invalidate();
		$request->session()->regenerateToken();
		return redirect('login');
    }
}
