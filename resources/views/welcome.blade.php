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
                {{-- products --}}
                @foreach ($products as $product)
                <div class="col-4 p-3">
                        {{-- images --}}
                        <img src="{{ Vite::asset("resources/img/" . $product["frontImage"]) }}" alt="">
                        {{-- info --}}
                        <div class="text-secondary ms_font-size">{{ $product["brand"] }}</div>
                        <h6 class="text-uppercase fw-bold m-0">{{ $product["name"] }}</h6>
                        <span class="ms_font-size ms_red fw-bold">{{ $product["price"] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
</body>
</html>