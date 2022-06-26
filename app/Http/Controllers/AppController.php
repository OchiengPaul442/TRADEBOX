<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    // Index paage route
    public function Home(){
        $title = "Home Page";
        return view('Pages.Home')->with('title',$title);
    }
    // About page route
    public function About(){
        return view('Pages.about')->with('title','About Page');
    }
    // Contact page route
    public function Contact(){
        return view('Pages.contact')->with('title','Contact Page');
    }

    public function Products(){
        return view('products.product')->with('title','Products Page');
    }

    public function Details_on_product(){
        return view('products.detailed_product')->with('title','Details Page');
    }

}
