<?php

namespace App\Http\Controllers;

use App\Page;
use App\Post;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index($route) {
            $page = Page::select('*')
                ->leftJoin('page_content', 'page_content.page_id', '=', 'pages.id')
                ->where('pages.url', '=', $route)
                ->first();
        return view("layouts.layout_{$page->template}", compact('page'));
    }

    public function homePage() {
        return view("home");
    }
}
