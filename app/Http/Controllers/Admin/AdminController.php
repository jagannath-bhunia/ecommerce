<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Support\Str;
use App\Models\Admin;
use DB;
class AdminController extends Controller
{
    public function index(){
        return view('admin.page.auth.login'); 
    }

    public function login(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);

        $email = $request->only('email');
        $password = $request->only('password');

        $users=Admin::where('email', '=', $email)->where('password', '=', $password)->first();
        // $user = $request->only('email','password');
        // // echo "<pre>";
        // //     print_r($user);
        // //     exit();

        if ($users) {
            //echo $user;
            return redirect()->route('admin.dashboard')->with('success', 'Login successfully.');
        }
        else{
            return redirect('/')->with('error', 'These credentials do not match our records.');

        }
    }

}
