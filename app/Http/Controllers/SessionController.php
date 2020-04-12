<?php

namespace App\Http\Controllers;
// use App\User;


use Illuminate\Http\Request;
// use Auth;

class SessionController extends Controller
{
    //
    public function destroy(){
    	auth()->logout();
    	return redirect('/table');
    }
    // public function __construct(){
    //     $this->middleware('guest');
    // }

    public function create(){

    	return view('signin');
    }

    public function store(){

    	if(!auth()->attempt(request(['email','password']))){
           return back();

       }
       return redirect('/dashboard');
       

   }
   public function check(){

    $this->validate(request(),[

        'answer6'=>'required'


    ]);
    $name = request('answer6');
    if($name=='yes'){
       
        return redirect('/quiz7');
    }
    else{
     $id=5;
     return redirect('/')->with( [ 'id' => $id ] );

    }
    

}
public function checkagain(){

    $this->validate(request(),[

        'answer7'=>'required'


    ]);
    $name2 = request('answer7');
        if($name2=='javascript'){

             return redirect('/quiz8');

            // $c=$c+10;
        }
        else{
            $idd=10;
            return redirect('/')->with( [ 'idd' => $idd ] );
        }
   

}
public function checkonce(){

    $this->validate(request(),[

        'answer8'=>'required'


    ]);
    $name3 = request('answer8');
        if($name3=='two'){
            // $c=$c+10;
            return redirect('/quiz9');
        }
        else{
            $idy=20;
             return redirect('/')->with( [ 'idy' => $idy ] );
        }
    

}
public function checkdollar(){

    $this->validate(request(),[

        'answer9'=>'required'


    ]);
    $name4 = request('answer9');
         if($name4=='infrared'){

            // $c=$c+10;
    return redirect('/quiz2');


         }
         else{
            $idz=30;
            return redirect('/')->with( [ 'idz' => $idz ] );

         }
            

}
public function checkindia(){

    $this->validate(request(),[

        'answer2'=>'required'


    ]);
    $name5 = request('answer2');
        if($name5=='generalelectric'){
            // $c=$c+10;
             $idx=50;
            return redirect('/')->with( [ 'idx' => $idx ] );

        }
        else{

            $idm=40;
              return redirect('/')->with( [ 'idm' => $idm ] );
        }

    // return redirect('/');

}
}
