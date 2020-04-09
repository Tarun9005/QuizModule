<?php

namespace App\Http\Controllers;
use App\User;


use Illuminate\Http\Request;
use Auth;

class SessionController extends Controller
{
    //
    // public function destroy(){
    // 	auth->logout();
    // 	return redirect('/');
    // }

    public function create(){

    	return view('signin');
    }

    public function store(){
    	if(!auth()->attempt(request(['email','zealid']))){
    		return back();
    	}

    	return redirect('/dashboard');
    }
}
