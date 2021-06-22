@extends('layouts.basic')

@section('title', 'Homepage')

@section('sidebar')
    @parent
    <p>This is appended to the master sidebar</p>
@endsection



@section('content')
    <h1>Posts</h1>
    @if(count($posts) >= 1)
        @foreach($posts as $post)
            <h3><a href="/posts/{{$post->id}}" {{$post->title}}</h3>
            <small>{{$post->post_data}}</small>
            <h5>{{$post->timestamps}}</h5>
            <h6>{{$post->tags}}</h6>
        @endforeach
    @else
        No posts found
    @endif
@endsection



{{--@include('partials.footer')--}}
