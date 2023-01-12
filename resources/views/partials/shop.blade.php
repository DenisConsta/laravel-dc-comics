<section id="shop">
    <div class="container h-100">
        <ul
            class="
        d-flex
        justify-content-between
        align-items-center
        m-0
        px-4
        w-100
        gap-5
        ">

        @foreach (config('links.appShop') as $link)
            <li >
                <img src=" {{Vite::asset('resources/img/' . $link['img']) }}" alt="{{ $link['text'] }}">
                <a class="d-none d-lg-block">{{ $link['text'] }}</a>
            </li>
        @endforeach
        </ul>
    </div>
</section>
