<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login.login-register',[
            "title"=>"Login And Register",
            "active"=>"login"
        ]);
    }
}
