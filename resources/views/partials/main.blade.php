<main>
    <div class="container py-5">
        <div class="row">
            {{-- products --}}
            @foreach ($products as $product)
            <div class="col-4 p-3 position-relative">
                    {{-- images --}}
                    <img src="{{ Vite::asset("resources/img/" . $product["frontImage"]) }}" alt="">
                    {{-- info --}}
                    <div class="ms_font-size">{{ $product["brand"] }}</div>
                    <h6 class="text-uppercase fw-bold m-0">{{ $product["name"] }}</h6>
                    <span class="ms_font-size ms_red fw-bold">{{ str_replace('.', ',', $product["price"]) }}</span>
                    @if ($product["badges"][0]["type"] === "discount")
                        <span class="text-decoration-line-through ms_font-size">{{ number_format($product["price"] / (1 - (str_replace(['-','%'], '', $product["badges"][0]["value"])) / 100), 2, ',') }}</span>
                        {{----------------------------------------------------------------------------------------------------------------------------
                        str_replace per togliere il - e il % dalla stringa del valore
                        1 - risultato (da -50% a 50) / 100 = 0.5
                        prezzo (29.99) / 0.5 = 59.98
                        number_format per formattare il risultato, number_format(numero, numero decimali, separatore decimali, separatore migliaia)
                        mi piace la matematica ma tutte ste parentesi mi hanno messo in crisi
                        -----------------------------------------------------------------------------------------------------------------------------}}
                    @endif
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
