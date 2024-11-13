<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator;

class RegisterController extends Controller
{
    public function index(){
        return view('login.register',['title'=>'Registrasi']);
    }

    public function store(Request $request)
    {
        $validateUser = $request->validate([
            'name' => ['required', 'min:3','max:255'],
            'username' => ['required', 'min:3' , 'max:255','unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:3|max:255'
        ]);

        $validateUser['password'] = Hash::make($validateUser['password']);

        User::create($validateUser);

        

        return redirect('/login')->with('success', 'Registration successfull! Please login');
    }
}
