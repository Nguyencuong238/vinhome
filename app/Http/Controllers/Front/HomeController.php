<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Channel;
use App\Models\Partner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $req)
    {
        return view('front.home', compact([]));
    }

    public function about(Request $req)
    {
        return view('front.about', compact([]));
    }

    public function news(Request $req)
    {
        return view('front.news', compact([]));
    }

    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

}