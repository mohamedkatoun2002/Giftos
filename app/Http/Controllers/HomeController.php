<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //index
    public function index()
    {
        return view('admin.index');
    }

    //home
    public function home()
    {
        return view('home.index');
    }
}
