<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
   
    public function showLoginform(){
        return view('admin.page.auth.login');
    }
    public function login(Request $request){
        
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);
        if(Auth::guard('admin')->attempt(['email'=>$request->email, 'password'=>$request->password ], $request->remember)){
            return redirect()->route('admin.dashboard')->with('success', 'Login successfully.');
      }
        return redirect()->back()->withInput($request->only('email','remember'))->with('error', 'These credentials do not match our records.');;
        
    }
    protected function guard()
    {
        return Auth::guard();
    }
    
}
