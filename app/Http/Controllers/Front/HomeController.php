<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('front.home');
    }
    public function about() {
        return view('front.about-us');
    }
    public function shop() {
        return view('front.shop');
    }
    public function contact() {
        return view('front.contact');
    }
    public function login() {
        return view('front.login-register');
    }
    public function wishlist() {
        return view('front.wishlist');
    }
    public function produkDetails() {
        return view('front.product-details');
    }
    public function cartPage() {
        return view('front.cart-page');
    }
    public function dashboard() {
        // dd('cek');
        return view('back.home');
    }


}
