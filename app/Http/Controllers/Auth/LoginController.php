<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;


class LoginController extends Controller{

    public function __construct()
    {
        $this->middleware(['guest']);
    }


    public function index(){
        return view('Auth.login');
    }
    public function store(Request $request){
        
        $this->validate($request, [
            
            'email' => 'required|email',
            'password' => 'required'

        ]);

        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('status','Invalid login');
        }

        return redirect()->route('profile');
    }
    
}
