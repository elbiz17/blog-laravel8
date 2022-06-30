<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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

        $message = [
            'required' => ':attribute wajib diisi',
            // 'alpha' => ':attribute harus diisi huruf alphabet',
            'min' => ':attribute harus diisi min :min kata',
            'max' => ':attribute harus diisi :max kata',
            'unique' => ':attribute sudah ada',
            'email' => ':attribute harus lengkap'


        ];

       $validatedData = $request->validate([
            'name' => 'required|alpha|min:3',
            'username' => 'required|min:3|max:50|unique:users',
            'email' => 'required|email:dns|max:30|unique:users',
            'password' => 'required|min:6|max:14'
            
        ], $message);

        // $validatedData['password'] = bcrypt(($validatedData['password']));
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);

        return redirect('/login')->with('status', 'user baru telah ditambahkan');

        // dd('registrasi');


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
