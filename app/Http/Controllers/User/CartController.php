<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller as Controller;

use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Item; 
use App\Models\Cart; 
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

        

        // $cart = session()->get('cart');
        // // if cart is empty then this the first product
        // if(!$cart) {
        //     $cart = [
        //             $id => [
                        
        //                 "name" => $product->name,
        //                 "quantity" => 1,
        //                 "price" => $product->price,
        //                 "image" => $product->image,
        //                 "item_id" => $product->id,
        //             ]
        //     ];
        //     session()->put('cart', $cart);
        //     return redirect()->back()->with('success', 'Product added to cart successfully!');
        // }
        // if cart not empty then check if this product exist then increment quantity
        // if(isset($cart[$id])) {
        //     $cart[$id]['quantity']++;
        //     session()->put('cart', $cart);
        //     return redirect()->back()->with('success', 'Product added to cart successfully!');
        // }
        // // if item not exist in cart then add to cart with quantity = 1
        // $cart[$id] = [      
        //     "name" => $product->name,
        //     "quantity" => 1,
        //     "price" => $product->price,
        //     "image" => $product->image,
        //     "item_id" => $product->id,
        // ];
        // session()->put('cart', $cart);
        // return redirect()->back()->with('success', 'Product added to cart successfully!');
    }


    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
 
            $cart[$request->id]["quantity"] = $request->quantity;
 
            session()->put('cart', $cart);
 
            session()->flash('success', 'Cart updated successfully');
        }
    }
 
    public function remove(Request $request)
    {
        if($request->id) {
 
            $cart = session()->get('cart');
 
            if(isset($cart[$request->id])) {
 
                unset($cart[$request->id]);
 
                session()->put('cart', $cart);
            }
 
            session()->flash('success', 'Product removed successfully');
        }
    }


    public function qty(){
        $userid = Auth::User()->id;
        $count = DB::table('carts')->where('user_id',$userid)->count();
        echo $count;
    }


    public function checkout(Request $request){
        
            return view('user.page.checkout');
    
         
    }
}
