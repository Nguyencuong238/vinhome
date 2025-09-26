<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Channel;
use App\Models\Partner;
use App\Models\Post;
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
        $posts = Post::where('status', 1)->orderByDesc('is_featured')->orderByDesc('id')->paginate(9);
        $categories = Category::where('type', 'post')->get();

        return view('front.news', compact('posts', 'categories'));
    }

    public function newsDetail(Request $req, Post $post)
    {
        $post->increment('view', 1);
        $category = $post->categories()->first();
        
        $relatedPosts = Post::when($category, function($q) use ($category) {
            $q->whereHas('categories', function($q) use ($category) {
                $q->where('id', $category->id);
            });
        })
        ->where('status', 1)
        ->orderByDesc('id')->limit(3)->get();
        
        $otherPosts = Post::query()->where('status', 1)->where('id', '<>', $post->id)->inRandomOrder()->limit(3)->get();
        $categories = Category::where('type', 'post')->get();

        return view('front.news_detail', compact('relatedPosts', 'otherPosts', 'post'));
    }

    public function contact(Request $req)
    {
        
        return view('front.contact');
    }

    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

}