<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use App\Models\Item;   
use App\Models\Catagory; ;

class DashboardController extends Controller
{
    public function index(){
        $std=Item::latest()->paginate(10);
        return view('admin.page.dashboard.index', compact('std'));
    }

    public function create(){
        $cat=catagory::all();
        return view('admin.page.dashboard.create', compact('cat'));
    }

    public function store(Request $request){
        $request->validate([
            'cat_id'=>'required',
            'name'=>'required',
            'about'=>'required',
            'Quantity'=>'required',
            'price'=>'required',
            'image'=>'required',
        ]);
        $image = $request->file('image');
        $new= rand() . '.' . $image->getClientOriginalExtension();
        $image->move('uploads/item', $new);
        // echo 
        // $cat_id=$request->cat_id;
        // exit();
        $from_data = array(
            'cat_id'=>$request->cat_id,
            'name'=>$request->name,
            'about'=>$request->about,
            'Quantity'=>$request->Quantity,
            'price'=>$request->price,
            'image'=>$new
        );
           
        // echo "<pre>";
        // print_r($from_data);
        // exit();
        $add = Item::create($from_data);
        if($add){
            return redirect()-> route('admin.dashboard')->with('success','success');
        }else{
            return redirect('admin.store')->with('error','unsuccess');
        }
    }

    public function show($id){
        $user=Item::find($id);
        return view('admin.page.dashboard.show', compact('user'));
    }

    public function edit($id){
       $user = Item::find($id);
       $cat=catagory::all();
        return view('admin.page.dashboard.edit', compact('user','id','cat'));
    }

    public function update(Request $request, $id){

        $item = Item::find($id);
        $item->cat_id = $request->input('cat_id');
        $item->name = $request->input('name');
        $item->about = $request->input('about');
        $item->Quantity = $request->input('Quantity');
        $item->price = $request->input('price');
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/item', $filename);
            $item->image = $filename;
        }
        $item->save();
        // $request->validate([
        //     'name'=>'required',
        //     'Quantity'=>'required',
        //     'price'=>'required',
        //     'image'=>'required',
        // ]);
        // $image = $request->file('image');
        // $new= rand() . '.' . $image->getClientOriginalExtension();
        // $image->move('uploads/item', $new);
        // $from_data = array(
        //     'name'=>$request->name,
        //     'Quantity'=>$request->Quantity,
        //     'price'=>$request->price,
        //     'image'=>$new
        // );
           
        // $user = Item::find($id);
        // $user->update($from_data);
        return redirect()->route('admin.dashboard');
    }

    public function delete($id){
        $user=Item::find($id);
        $user->delete();
        return redirect()->route('admin.dashboard')->with('success','delete');
    }

    public function addcatagory(){
        return view('admin.page.dashboard.addcatagory');

    }

    public function storecartagory(Request $request){
        $request->validate([
            'cat_name'=>'required',
            
        ]);
       
        $from_data = array(
            'cat_name'=>$request->cat_name,
           
        );
           
        // echo "<pre>";
        // print_r($new);
        // exit();
        $add = Catagory::create($from_data);
        if($add){
            return redirect()-> route('admin.showcatagory')->with('success','success');
        }else{
            return redirect('admin.addcatagory')->with('error','unsuccess');
        }
    }

    public function showcatagory(){
        $cat=Catagory::latest()->paginate(10);
        return view('admin.page.dashboard.showcatagory', compact('cat'));
    }

    public function deletecatagory( $id){
        $cat=Catagory::find($id);
        $cat->delete();
        return redirect()->route('admin.showcatagory')->with('success','delete');

    }
}
