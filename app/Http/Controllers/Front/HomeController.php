<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Category;
use App\Models\Channel;
use App\Models\Partner;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $req)
    {
        $posts = Post::where('status', 1)->orderByDesc('is_featured')->orderByDesc('id')->paginate(9);

        return view('front.home', compact('posts'));
    }

    public function about(Request $req)
    {
        return view('front.about', compact([]));
    }

    public function news(Request $req)
    {
        $featuredPost = Post::where('status', 1)->where('is_featured', 1)->orderByDesc('id')->first();
        $posts = Post::where('status', 1)
            ->where('id', '<>', $featuredPost->id)
            ->orderByDesc('is_featured')
            ->orderByDesc('id')
            ->paginate(6);

        if ($req->ajax()) {
            $view = view('front._news', compact('posts'))->render();
            return response()->json(['html' => $view, 'totalPage' => $posts->lastPage()]);
        }

        $categories = Category::where('type', 'post')->get();

        return view('front.news', compact('posts', 'categories', 'featuredPost'));
    }

    public function newsDetail(Request $req, Post $post)
    {
        $post->increment('view', 1);
        $category = $post->categories()->first();

        $relatedPosts = Post::when($category, function ($q) use ($category) {
            $q->whereHas('categories', function ($q) use ($category) {
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

    public function gallery(Request $req)
    {
        $galleries = Album::where('status', 1)->orderByDesc('id')->get();
        $categories = Category::where('type', 'image')->get();

        return view('front.gallery', compact('galleries', 'categories'));
    }

    public function utility(Request $req)
    {
        return view('front.utility', compact([]));
    }

    public function progress(Request $req)
    {
        $galleries = Album::where('status', 1)->orderByDesc('id')->get();
        $categories = Category::where('type', 'image')->get();

        return view('front.progress', compact('galleries', 'categories'));
    }

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }
}
