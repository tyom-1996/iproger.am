<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('signup.signup');
    }


    public function signupCandidatesTemplate()
    {
        return view('signup.signup-candidates');
    }
    public function signupEmployersTemplate()
    {
        return view('signup.signup-employers');
    }




}
