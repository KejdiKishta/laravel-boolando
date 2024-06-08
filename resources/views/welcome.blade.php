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
    <main>
        <div class="container py-5">
            <div class="row">
                {{-- images --}}
                @foreach ($products as $product)
                    <div class="col-4 p-2">
                        <img src="{{ Vite::asset("resources/img/" . $product["frontImage"]) }}" alt="">
                    </div>
                @endforeach
            </div>
        </div>
    </main>
</body>
</html>