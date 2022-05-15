<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;

use App\Models\Event;

class HomeController extends Controller
{
    //index function
    public function index()
    {
        //home View in views
        $data = product::all();
        $data2 = event::all();
        return view("home", compact("data", "data2"));
    }

    public function redirects()
    {
        $data = product::all();
        $usertype = Auth::user()->usertype;
        if ($usertype == '1') {
            return view('admin.adminhome');
        } else {
            return view('home', compact('data'));
        }
    }
}
