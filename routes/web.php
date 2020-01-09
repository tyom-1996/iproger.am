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
//
//Route::get('/', function () {
//    return view('home');
//});

Route::get('/',"MainController@index");

Route::get('/login',"LoginController@index");
Route::get('/signup',"RegisterController@index")->name('signup');
Route::get('/signup/candidates',"RegisterController@signupCandidatesTemplate")->name('signup_candidates');
Route::get('/signup/employers',"RegisterController@signupEmployersTemplate")->name('signup_employers');

