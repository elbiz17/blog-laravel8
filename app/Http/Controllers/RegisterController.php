<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index',[
            'title'=>'login',
            'active'=>'register'
        ]);
    }
    public function store(Request $request){
        // cek requesst
        // return request()->all();

        $request->validate([
            'name' => 'required|max:50',
            'username' => 'required|min:3|max:50|unique:users',
            'email' => 'required|email:dns|max:30|unique:users',
            'password' => 'required|min:6|max:14'
            
        ]);
        dd('registrasi');


        // $request->validate([
        //     'name' => 'required|max:50',
        //     'username' => 'required|min:3|max:50|unique:users',
        //     'email' => 'required|email:dns|max:30|unique:users',
        //     'password' => 'required|min:6|max:14'
        // ]);
        // dd('berhsail');

        // $validatedData = $request->validate([
		// 	'name' => 'required|max:50',
		// 	'username' => ['required', 'min:4', 'max:15', 'unique:users'],
		// 	'email' => 'required|email:dns|max:30|unique:users',
		// 	'password' => 'required|min:6|max:14'
		// ]);

        // dd('registrasi');

    }
}
