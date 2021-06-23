<!DOCTYPE HTML>
<html>
@include('partials.header')
<body>

<main class="container">

    <h1>{{$page->title}}</h1>
    <small>{{$page->subtitle}}</small>
    <div class="row no-gutters flex-column-reverse flex-xl-row">
        <div class="col-12 col-xl-8 p-3">
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
        </div>
        <div class="col-12 col-xl-4 p-3">
            @include('partials.sidebar')
        </div>
    </div>
    <style>
        .tox-notification {
            display: none !important;
        }
    </style>
</main>

</body>
</html>
