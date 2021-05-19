<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function registration(){
    	return view('registrationform');
    }

    public function saveuser(Request $request){

    	$validated =  $request->validate([
    		'firstname' => 'required',
    		'lastname' => 'required',
    		'username' => 'required|unique:users,username',
    		'email' => 'required|email|unique:users,email',
    		'password' => 'required|min:8'
    	]);


    	$user  = new User;
    	$user->fname   = $request->input('firstname');
    	$user->lname   = $request->input('lastname');
    	$user->username  = $request->input('username');
    	$user->email   = $request->input('email');
    	$user->password = Hash::make($request->input('password'));
    	$inserted   = $user->save();

        if($inserted){
            if(Auth::loginUsingId($user->id)){
                $request->session()->regenerate();
                return redirect()->intended('user-recipes');
            }
        }
        //If $inserted is false
        return redirect('register');
    	
    }
}
