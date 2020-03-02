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
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/quiz1', function () {
    return view('question1');
});
Route::get('/quiz2', function () {
    return view('question2');
});

Route::get('/quiz3', function () {
    return view('question3');
});

Route::get('/quiz4', function () {
    return view('question4');
});

Route::get('/quiz5', function () {
    return view('question5');
});

Route::get('/quiz6', function () {
    return view('question6');
});
Route::get('/quiz7', function () {
    return view('question7');
});
Route::get('/quiz8', function () {
    return view('question8');
});
Route::get('/quiz9', function () {
    return view('question9');
});

Route::get('/game1', function () {
    return view('game1');
});

Route::get('/game1validator', function () {
    return view('game1validator');
});