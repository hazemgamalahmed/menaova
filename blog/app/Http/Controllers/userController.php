<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function login_get()
    {
    	return view('auth.login');
    }
    public function login_post()
    {
    	$remember = request()->has('remember') ? true : false;
    	if(auth()->attempt(['email'=>request('email'), 'password'=>request('password')], $remember)){
    		return redirect('admin');
    	}else{
    		session()->flash('message', 'sorry your email or password is not true');
    		return back();
    	}
    }
}
