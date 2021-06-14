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
        $posts = Post::all();
        return view('posts')->with(posts, $posts);
    }

    public function deletePost($id) {
        return Post::destroy($id);
    }

    public function getPosts()
    {
        return Post::select('posts.id', 'users.username', 'posts.title', 'posts.short_description', 'posts.tags', 'posts.created_at')
            ->leftJoin('users', 'posts.user_id', '=', 'users.id')
            ->get();
    }

    public function getPost($id)
    {
        return Post::select('posts.id', 'users.username', 'posts.title', 'posts.short_description', 'posts.tags', 'posts.created_at')
            ->leftJoin('users', 'posts.user_id', '=', 'users.id')
            ->where('posts.id', '=', $id)
            ->get();
    }

    // Misschien later veranderen naar dit -> https://stackoverflow.com/a/46323565
    public function alterPost($id, $user_id, $title, $short_description, $post_data, $tags)
    {
        $post = Post::find($id);
        $post->user_id = $user_id;
        $post->title = $title;
        $post->short_description = $short_description;
        $post->post_data = $post_data;
        $post->tags = $tags;
        return $post->save();
    }

    public function createPost($user_id, $title, $short_description, $post_data, $tags)
    {
        return Post::create([
            'user_id' => $user_id,
            'title' => $title,
            'short_description' => $short_description,
            'post_data' => $post_data,
            'tags' => $tags,
        ]);
    }
}
