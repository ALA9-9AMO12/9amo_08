<h1>Sidebar template</h1>
<ul>
    @if(count($posts) >= 1)
        @foreach($posts as $post)
            <a href="/posts/{{$post->id}}"> <li>{{$post->title}} - {{$post->created_at}}</li></a>
        @endforeach
    @else
        No posts found
    @endif
</ul>
