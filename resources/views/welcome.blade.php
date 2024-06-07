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
    <header>
        <div class="container py-4 text-white">
            <div class="row">
                <div class="col">
                    <ul class="d-flex gap-3">
                        @foreach ($navList as $item)
                            <li>
                                <a href="#">{{ $item }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </header>
</body>
</html>