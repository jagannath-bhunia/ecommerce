<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller as Controller;

use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Item;   
class UserController extends Controller
{
    public function index(){
        $std=Item::all();
        return view('user.page.index',compact('std'));
    }

    public function userloginform(){
        return view('user.page.register');   
    }

    public function userlogin(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);
        $user = $request->only('email', 'password');
        
        if (Auth::guard('user')->attempt($user)) {
            return redirect()->route('user.index')->with('success', 'Login successfully.');
            //echo "Login success";
        }
        else{
            return redirect('userloginform')->with('error', 'These credentials do not match our records.');

        }

    }

    public function userregister(Request $request){
        $request->validate([
            'name' => 'required', 
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required','unique:users'],
            'password' => 'required', 
        ]);
        $input = $request->all(); 
//         echo "<pre>";
//         print_r($input);
// exit();
        $input['password'] = bcrypt($input['password']); 
        $user = User::create($input); 

        if($user){
           // return redirect()-> route('user.index')->with('success','success');
            echo "Register success";
        }else{
            return redirect('user.userregister')->with('error','Invalid email and password');
        }
    }

    public function shop(){
        $item=Item::all();
        return view('user.page.shop',compact('item'));
    }

    public function productdetails($id)
    {
        $item=Item::find($id);
        return view('user.page.product-details', compact('item'));
    }
}
