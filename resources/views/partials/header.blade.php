<header>
    <div class="container ">
        <nav class="d-flex justify-content-between align-items-center ">
            <!-- ? Logo -->
            <div class="logo">
                <a href=" {{route('comics.index')}} ">
                    <img src=" {{ Vite::asset('resources/img/dc-logo.png') }} " alt="DC-Logo">
                </a>
            </div>

            <!-- ? Links -->
            <div class="links  ">
                <ul class="d-flex gap-4  m-0">

                    @foreach (config('links.headerLinks') as $link)

                    @php
                        $class_active = (Route::currentRouteName() == $link) ? 'active' : '';
                    @endphp

                    <li><a href=" # "
                        class=" {{$class_active}} "> {{$link}} </a></li>
                    @endforeach

                </ul>
            </div>

        </nav>
    </div>
</header>
