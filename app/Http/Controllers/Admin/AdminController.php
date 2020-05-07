<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Support\Str;

use Validator;
use App\Models\Item;
use DB;
class AdminController extends Controller
{
    public function index(){
        $std=Item::latest()->paginate(10);
        return view('admin.page.dashboard.index', compact('std'));
    }
    
    public function logout(){
        Auth::logout();
        return redirect('/')->with('success', 'Logout successfully.');
    }

}
