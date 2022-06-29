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

    // products page route
    public function Products(){
        return view('products.product')->with('title','Products Page');
    }

    // details page route
    public function Details_on_product(){
        return view('products.detailed_product')->with('title','Details Page');
    }

    //add product page route
    public function Add_product(){
        return view('products.add_product')->with('title','Add Product');
    }

}
