@include(App\Post::class)

@extends('layouts.basic')

@section('title', 'Homepage')

@section('sidebar')
    @parent
    <p>This is appended to the master sidebar</p>
@endsection



@section('content')
    @if(count($posts))
        @foreach($posts as $post)
            <h1>Posts!</h1>
        @endforeach
    @else
        No posts found
    @endif
@endsection



@include('partials.footer')
