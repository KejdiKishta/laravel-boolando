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
        <div class="container py-4">
            <div class="row">
                {{-- name and info --}}
                <div class="col text-white">
                    {{-- name --}}
                    <h6 class="fw-bold">Boolando s.r.l.</h6>
                    {{-- info --}}
                    <ul class="d-flex p-0 gap-2 ms_font-size">
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
                {{-- socials --}}
                <div class="col text-white text-end">
                    <div class="fw-bold ms_font-size">Trovaci anche su</div>
                    <ul class="d-flex justify-content-end p-0 gap-2">
                        @foreach ($footerIcons as $icon)
                            <li>
                                <i class="{{ $icon }}"></i>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>