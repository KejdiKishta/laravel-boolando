<header>
    <div class="container py-4 text-white">
        <div class="row">

            {{-- nav col --}}
            <div class="col">
                <ul class="d-flex gap-3">
                    @foreach ($navList as $item)
                        <li>
                            <a href="#">{{ $item }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- logo col --}}
            <div class="col text-center">
                <img class="w-50" src="{{ Vite::asset("resources/img/boolean-logo.png") }}" alt="">
            </div>

            {{-- icons col --}}
            <div class="col">
                <ul class="d-flex gap-3 justify-content-end">
                    @foreach ($headerIcons as $icon)
                        <li>
                            <a href="#"><i class="{{ $icon }}"></i></a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</header>
