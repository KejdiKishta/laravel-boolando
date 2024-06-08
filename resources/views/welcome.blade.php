<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- including vite assets --}}
    @vite('resources/js/app.js')
</head>
<body>
    {{-- header --}}
    @include('partials.header')
    {{-- main --}}
    @include('partials.main')
    {{-- footer --}}
    <footer class="bg-dark">
        <div class="container py-3">
            <div class="row">
                {{-- name and info --}}
                <div class="col">
                    {{-- name --}}
                    <h5 class="text-white fw-bold">Boolando s.r.l.</h5>
                    {{-- info --}}
                    <ul class="d-flex text-white p-0 gap-2 ms_font-size">
                        <li>
                            <a href="#">Informazioni legali</a>
                        </li>
                        <li>
                            <a href="#">Informazioni sulla privacy</a>
                        </li>
                        <li>
                            <a href="#">Diritti di recesso</a>
                        </li>
                    </ul>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </footer>
</body>
</html>