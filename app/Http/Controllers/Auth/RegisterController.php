<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('Auth.register');
    }
    public function store(Request $request){
        $this->validate($request, [
            'full_name' => 'required|max:255',
            'username' => 'required|unique:users',
            'email' => 'required|max:255|unique:users|email',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password'
        ]);
        // 1 validation 
        
        User::Create([
            'name' => $request->full_name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
         // 2 store User 

        auth()->attempt($request->only('email','name','password'));
       

         return redirect()->route('dashboard');
        // 3 sign the user in 
        // 4 redirect

        // 1 validation 
        // 2 store User 
        // 3 sign the user in 
        // 4 redirect
    }
}
