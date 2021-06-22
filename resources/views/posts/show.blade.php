@extends('layouts.basic')

@section('title', 'Homepage')

@section('sidebar')
    @parent
    <p>This is appended to the master sidebar</p>
@endsection



@section('content')
    <h1>{{$post->title}}</h1>
    <small>{{$post->post_data}}</small>
    <h5>{{$post->timestamps}}</h5>
    <h6>{{$post->tags}}</h6>
@endsection



{{--@include('partials.footer')--}}
