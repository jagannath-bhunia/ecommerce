<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class AdminLoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest:admin');
    }
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
        return redirect()->back()->withInput($request->only('email','remember'));
        
    }
    
}
