<!DOCTYPE HTML>
<html>
@include('partials.header')
<body>

<main class="container">

    <h1>{{$page->title}}</h1>
    <small>{{$page->subtitle}}</small>
    <div class="p-3">
        <h1>{{$page->title}}</h1>
        <small class="text-muted">{{$page->subtitle}}</small>
        <div class="dropdown-divider"></div>
        <div>{!!$page->content!!}</div>
        <form method="POST">
            @csrf
            <textarea id="text_editor" name="editor">
                        {{$page->content}}
                    </textarea>
        </form>
    </div>
    <style>
        .tox-notification {
            display: none !important;
        }
    </style>
</main>

</body>
</html>
