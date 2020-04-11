<?php



namespace App\Http\Controllers;
use App\User;
use App\Leader;

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
			'password'=>'required',
			'contact'=>'required'



		]);

		// create and save the user

		$user=User::create(request(['uname','email','branch','password','contact']));

		// // sign in
		 auth()->login($user);

		return redirect('/dashboard');

	}

	public function spy(){
		return view('login');
	}


	public function gen(){


		$leader=Leader::create(request(['name','score']));

		return redirect('/rules');


		// $project=request('var');
		// $igi=request('dell');
		// dd($igi,$project);

		// dd($project);

		// dd('{{ session()->get( 'id' ) }}');
  //            {{ session()->get( 'idd' ) }}
  //               {{ session()->get( 'idy' ) }}
  //                  {{ session()->get( 'idz' ) }}
  //                  {{ session()->get( 'idx' ) }}
  //                    {{ session()->get( 'idm' ) }}
}
}