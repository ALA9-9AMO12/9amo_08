<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
//        $post = Post::where('slug',$slug)->first();
//        if(!$post)
//        {
//            return redirect('/')->withErrors('requested page not found');
//        }
////        $comments = $post->comments;
        $posts = Post::orderBy('created_at','desc')->get();
        return view('posts.index')->with('posts', $posts);
    }

    public function deletePost($id) {
        return Post::destroy($id);
    }

    public function getPosts(){
        return Post::select('posts.id', 'users.username', 'posts.title', 'posts.short_description', 'posts.tags', 'posts.created_at')
            ->leftJoin('users', 'posts.user_id', '=', 'users.id')
            ->get();
    }

    public function show($id){
        return Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    // Misschien later veranderen naar dit -> https://stackoverflow.com/a/46323565
    public function alterPost($id, $user_id, $title, $desc, $post_data, $tags)
    {
        $post = Post::find($id);
        $post->user_id = $user_id;
        $post->title = $title;
        $post->description = $desc;
        $post->post_data = $post_data;
        $post->tags = $tags;
        return $post->save();
    }

    public function createPost($user_id, $title, $desc, $post_data, $tags)
    {
        return Post::create([
            'user_id' => $user_id,
            'title' => $title,
            'description' => $desc,
            'post_data' => $post_data,
            'tags' => $tags,
        ]);
    }
}
