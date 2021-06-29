<?php

namespace App\Http\Controllers;

use App\Page;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RouteController extends Controller
{
    public function index($route) {
            $page = Page::select('*')
                ->where('pages.url', '=', $route)
                ->first();
            $posts = Post::orderBy('created_at','desc')->get();
        return view("layouts.layout_{$page->template}", compact('page','posts'));
    }

    public function posts($slug) {
//        $post = Post::where('slug',$slug)->first();
//        if(!$post)
//        {
//            return redirect('/')->withErrors('requested page not found');
//        }
////        $comments = $post->comments;
        return view('posts');
    }

    public function homePage() {
        return view("home");
    }

    public function adminPage() {
        if (Auth::check()) {
            return view('admin');
        } else {
            return view('auth.login');
        }
    }
}
