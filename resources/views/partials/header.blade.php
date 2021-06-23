<head>
    <title>Imker - @yield('title')</title>
    <script src="{{asset('js/bootstrap.js')}}" defer></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({
            selector: 'textarea#text_editor',
            plugins: 'save image',
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help | save | image',
            height: 600,
        });
    </script>
</head>
<div class="d-flex justify-content-around align-items-center p-3 bg-yellow fw-bold">
    <a href="/">
        <img class="img-fluid" src="{{asset('images/logo.png')}}">
    </a>
    <a class="text-decoration-none text-white" href="./voor_imkers">Voor imkers</a>
    <a class="text-decoration-none text-white" href="./cursussen">Cursussen</a>
    <a class="text-decoration-none text-white" href="./nieuws">Nieuws</a>
    <a class="text-decoration-none text-white" href="./artikellen">Artikellen</a>
    <a class="text-decoration-none text-white" href="./over_ons">Over ons</a>
    <a class="text-decoration-none text-white" href="./contact">Contact</a>
</div>
