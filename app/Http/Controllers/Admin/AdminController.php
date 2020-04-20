<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Support\Str;

use Validator;
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
            $user = $request->only('email', 'password');
            if (Auth::guard('admin')->attempt($user)) {

        // echo "<pre>";
        // print_r(Auth::user());
        // exit();
            return redirect()->route('admin.dashboard')->with('success', 'Login successfully.');
            }
            else{
            return redirect('/')->with('error', 'These credentials do not match our records.');
            }
    }

    public function register(Request $request){
       
        $validator = Validator::make($request->all(), [ 
            'name' => 'required', 
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => 'required', 
            
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }
        $input = $request->all(); 
        $input['password'] = bcrypt($input['password']); 
        $user = Admin::create($input); 

        $success['name'] =  $user->name;
        $success['email'] =  $user->email;
        $success['password'] =  $user->password;
        
        return response()->json(['success'=>$success], 200);
    }

}
