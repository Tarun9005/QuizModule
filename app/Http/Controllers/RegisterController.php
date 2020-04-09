<?php



namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //

	public function create(){

		return view('signup');


	}

	public function store(){

		// validation

		$this->validate(request(),[

			'uname'=>'required',
			'email'=>'required|email',
			'branch'=>'required',
			'zealid'=>'required',
			'contact'=>'required'



		]);

		// create and save the user

		User::create(request(['uname','email','branch','zealid','contact']));

		// // sign in
		//  \Auth::login();

		return redirect('/dashboard');

	}
}