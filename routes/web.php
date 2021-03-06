<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});
Route::get('/rules', function () {
    return view('rules');
});

Route::get('/table', function () {

    $leaders=App\Leader::all();
    return view('leaderboard',compact('leaders'));
});

// rules view
Route::get('/dashboard', function () {
    return view('dashboard');
});

// Route::get('/quiz1', function () {
//     return view('question1');
// });
// question 5
Route::get('/quiz2', function () {
    return view('question2');
});
Route::post('/quiz2', 'SessionController@checkindia');

// Route::get('/quiz3', function () {
//     return view('question3');
// });

// Route::get('/quiz4', function () {
//     return view('question4');
// });

// Route::get('/quiz5', function () {
//     return view('question5');
// });
// question 1
Route::get('/quiz6', function () {
    return view('question6');
});
Route::post('/quiz6', 'SessionController@check');

// question2

Route::get('/quiz7', function () {
    return view('question7');
});

Route::post('/quiz7', 'SessionController@checkagain');

// question 3
Route::get('/quiz8', function () {
    return view('question8');
});
Route::post('/quiz8', 'SessionController@checkonce');

// question4
Route::get('/quiz9', function () {
    return view('question9');
});
Route::post('/quiz9', 'SessionController@checkdollar');

// question5

Route::get('/game1', function () {
    return view('game1');
});

// Route::get('/game1validator', function () {
//     return view('game1validator');
// });

// for registration
Route::get('/register', 'RegisterController@create');
Route::post('/register', 'RegisterController@store');

// for login
Route::get('/login', 'SessionController@create');
Route::post('/login', 'SessionController@store');

// for logout
Route::get('/logout','SessionController@destroy');


Route::get('/leaderboard', 'RegisterController@spy');
Route::post('/leaderboard', 'RegisterController@gen');





