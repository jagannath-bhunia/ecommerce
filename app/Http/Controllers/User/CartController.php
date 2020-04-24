<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller as Controller;

use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Item; 
use App\Models\Cart;
use App\Models\Book; 
use App\Models\Order; 

use DB; 
class CartController extends Controller
{
    
    public function cartindex()
    {

        $item = DB::table('carts')
            ->join('items', 'carts.item_id', '=', 'items.id')->where('carts.user_id', '=', Auth::user()->id)
            
            ->get();
 
        return view('user.page.cart', compact('item'));
    }
    public function cart()
    {
        return view('user.page.cart');
    }
    public function addToCart( Request $request)
    {
        $qty = $request->qty;
        $product = Item::find($request->item_id);
        $item_id = $product->id;
        $userid = Auth::User()->id;

        //if cart is empty then this the first product
        $a=DB::table('carts')->where('item_id',$item_id)->where('user_id',$userid)->count();
        if($a==0){
            $item = new Cart;
            $item->item_id = $item_id;
            $item->user_id = $userid;
            $item->qty = $qty;
            $item->save();
            //return redirect()->back()->with('success', 'Product added to cart successfully!');
        }else{
            DB::table('carts')->where('item_id',$item_id)->where('user_id',$userid)->update(['qty' => $qty]);
           
        }

        

    }


    public function update(Request $request)
    {
        // echo "abc";
        // exit();
        $qty = $request->qty;
        $product = Item::find($request->item_id);
        $item_id = $product->id;
        $userid = Auth::User()->id;
        DB::table('carts')->where('item_id',$item_id)->where('user_id',$userid)->update(['qty' => $qty]);
    }
 
    public function remove(Request $request)
    {

        
        $cart_id = $request->cart_id;
       $a= DB::table('carts')->where('cart_id',$cart_id)->delete();
        echo $a;
        // $user->delete();
    }


    public function qty(){
        $userid = Auth::User()->id;
        $count = DB::table('carts')->where('user_id',$userid)->count();
        echo $count;
    }


    public function checkout(Request $request){
        $item = DB::table('carts')
            ->join('items', 'carts.item_id', '=', 'items.id')->where('carts.user_id', '=', Auth::user()->id)
            
            ->get();
            return view('user.page.checkout', compact('item'));
    
         
    }

    public function book(Request $request){
       
        $product = Item::find($request->item_id);
        $item_id = $product->id;
        $userid = Auth::User()->id;

        $book = new Book;
        $book->user_id = $userid;
        $book->country = $request->country;
        $book->f_name = $request->f_name;
        $book->l_name = $request->l_name;
        $book->address = $request->address;
        $book->city = $request->city;
        $book->state = $request->state;
        $book->zip = $request->zip;
        $book->email = $request->email;
        $book->phone = $request->phone;
        $book->payment = $request->payment;
        $book->total = $request->total;

        $book->save();

        
     
        $users =  DB::table('books')->latest('book_id')->first();

        
        $userid = Auth::User()->id;
        $cart=Cart::all();
        
            foreach($cart as $cart1){
                $cart2= new Order;
                $cart2->book_id=$users->book_id;
                $cart2->item_id=$cart1->item_id;
                $cart2->qty=$cart1->qty;
    
                $cart2->save();
            }
        
        
            DB::table('carts')->delete();
        
        // echo $email;
     
    }
}
