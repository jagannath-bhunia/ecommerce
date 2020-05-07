<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller as Controller;

use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Item;   
use App\Models\Message;   
class UserController extends Controller
{
    public function index(){
        $std=Item::all();
        return view('user.page.index',compact('std'));
    }


    public function logoutuser(){
        Auth::logout();
        return redirect('/login')->with('success', 'Logout successfully.');
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
    public function aboutus(){
        return view('user.page.aboutus');   
    }
    public function contuctus(){
        return view('user.page.contuctus');   
    }
   

    public function message(Request $request){
        
        $request->validate([
            
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required',
            
        ]);
        $from_data = array(
            'user_id'=> Auth::User()->id,
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'message'=>$request->message,
        );
           
        // echo "<pre>";
        // print_r($from_data);
        // exit();
        $add = Message::create($from_data);
        if($add){
            return redirect()-> route('user.contuctus')->with('success','Message send success');
        }else{
            return redirect('user.message')->with('error','unsuccess');
        }
    }
}
