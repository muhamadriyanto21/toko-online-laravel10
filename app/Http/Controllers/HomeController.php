<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home');
    }
    public function about() {
        return view('about-us');
    }
    public function contact() {
        return view('contact');
    }
    public function login() {
        return view('login-register');
    }
    public function wishlist() {
        return view('wishlist');
    }
    public function produkDetails() {
        return view('product-details');
    }
    public function cartPage() {
        return view('cart-page');
    }

}
