<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view("Auth.login");
    }
    public function store(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);


        if(!auth()->attempt($request->only('email','name','password'))){
            return back()->with('state', "Invalide login details");
        }
       

         return redirect()->route('dashboard');
    }
}
