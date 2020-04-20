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
        $products = Item::all();
 
        return view('user.page.cart', compact('products'));
    }
    public function cart()
    {
        return view('user.page.cart');
    }
    public function addToCart($id)
    {
        $product = Item::find($id);

        // echo "<pre>";
        // print_r($product->id);
        // exit();

        if(!$product) {

            abort(404);

        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                    $id => [
                        
                        "name" => $product->name,
                        "quantity" => 1,
                        "price" => $product->price,
                        "image" => $product->image,
                        "item_id" => $product->id,
                    ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "image" => $product->image,
            "item_id" => $product->id,
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
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


    public function checkout(Request $request){
        $cart = session()->get('cart');
        $userid = Auth::User()->id;
       
        
        foreach ($cart as $cart1){
            //echo $cat1['item_id'];
            $item = new Cart;
            $item->item_id = $cart1['item_id'];
            $item->user_id = $userid;
            $item->save();
        }


        // echo "<pre>";
        // print_r($item_id);
        //  exit();
    
        if($item){
            return view('user.page.checkout');
            //echo "add";
            //return redirect()-> route('admin.check')->with('success','success');
        }else{
            echo "error";
            //return redirect('admin.store')->with('error','unsuccess');
        }
         
    }
}
