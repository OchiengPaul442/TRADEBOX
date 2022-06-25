<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        return view('layouts.index');
    }

    public function Home(){
        $title = "Home Page";
        return view('products.Home')->with('title',$title);
    }
}
