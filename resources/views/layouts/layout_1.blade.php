<!DOCTYPE HTML>
<html>
@include('partials.header')
<body>

<main class="container">
<<<<<<< Updated upstream
    <style>
        * {
            font-family: charter, Georgia, Cambria, "Times New Roman", Times, serif;
        }
    </style>
=======

    <h1>{{$page->title}}</h1>
    <small>{{$page->subtitle}}</small>
>>>>>>> Stashed changes
    <div class="row no-gutters flex-column-reverse flex-xl-row">
        <div class="col-12 col-xl-8 p-3">
            <div class="p-3">
                <h1>{{$page->title}}</h1>
                <small class="text-muted">{{$page->subtitle}}</small>
                <div class="dropdown-divider"></div>

                <img class="mt-3 img-fluid w-100" src="{{$page->img_url1}}" onerror="this.remove()">
                <p class="mt-3">
                    {{$page->text1}}
                </p>

                <img class="mt-3 img-fluid w-100" src="{{$page->img_url2}}" onerror="this.remove()">
                <p class="mt-3">
                    {{$page->text2}}
                </p>


                <h1 class="mt-3">{{$page->banner_text}}</h1>
                <img class="mt-3 img-fluid w-100" src="{{$page->banner_img_url}}">

                <form method="POST">
                    @csrf
                    <textarea id="text_editor" name="editor">
                        {{@$_POST['editor']}}
                    </textarea>
                </form>


            </div>
        </div>
<<<<<<< Updated upstream


        <div class="col-12 col-xl-4 p-3">
            <div class="card card-body">@include('partials.sidebar')</div>
        </div>

    </div>
    <style>
        .tox-notification {
            display: none !important
        }
    </style>
=======
    </div>
>>>>>>> Stashed changes
</main>

</body>
</html>
