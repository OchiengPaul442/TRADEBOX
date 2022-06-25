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

    public function About(){
        return view('about')->with('title','About Page');
    }

    public function Contact(){
        return view('contact')->with('title','Contact Page');
    }

    public function Auth(){
        return view('auth.auth')->with('title','Auth Page');
    }
}
