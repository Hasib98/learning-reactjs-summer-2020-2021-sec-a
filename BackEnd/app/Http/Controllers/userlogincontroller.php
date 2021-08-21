<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userlogin;

class userlogincontroller extends Controller
{
    public function index(){
		return view('user_login.userlogin');
	}
	public function verify(Request $req){
		$login = userlogin::where('email', $req->email)
					    ->where('password', $req->password)
					    ->first();
		if(count((array)$login) > 0){
		$req->session()->put('username', $login['name']);
		$req->session()->put('picname', $login['profilepic']);
		$req->session()->put('uname', $login['username']);
		$req->session()->put('type', $login['type']);
		//echo $login['type'];
		return redirect ('/user/dashboard');
		}
		else
			return redirect('/login');
	}
}
