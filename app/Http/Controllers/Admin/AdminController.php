<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Support\Str;
use Auth;
use Validator;
use App\Models\Item;
use DB;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $std=Item::latest()->paginate(10);
        return view('admin.page.dashboard.index', compact('std'));
    }
    public function logoutadmin(){
        Auth::logout();
        return redirect()->route('admin.login')->with('success', 'Logout successfully.');
    }
}

