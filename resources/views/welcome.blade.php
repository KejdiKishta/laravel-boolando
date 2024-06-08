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
                <div class="col-4 p-3 position-relative">
                        {{-- images --}}
                        <img src="{{ Vite::asset("resources/img/" . $product["frontImage"]) }}" alt="">
                        {{-- info --}}
                        <div class="text-secondary ms_font-size">{{ $product["brand"] }}</div>
                        <h6 class="text-uppercase fw-bold m-0">{{ $product["name"] }}</h6>
                        <span class="ms_font-size ms_red fw-bold">{{ $product["price"] }}</span>
                        {{-- favorites btn --}}
                        <button type="button" class="btn rounded-0 py-2 px-3 position-absolute bg-white ms_heart-position">
                            <i class="fa-solid fa-heart {{$product["isInFavorites"] ? 'ms_red' : ''}} "></i>
                        </button>
                        {{-- badges --}}
                        <div class="position-absolute ms_badges-position">
                            @foreach ($product["badges"] as $badge)
                                <span class="px-2 py-1 text-white fw-bold ms_font-size {{ $badge["type"] === "tag" ? 'ms_bg-green' : 'ms_bg-red'}}">{{ $badge["value"] }}</span>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
</body>
</html>