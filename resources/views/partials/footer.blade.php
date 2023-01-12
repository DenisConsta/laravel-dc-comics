<footer>
    <!-- ? Top Footer -->
    <div id="top-footer" class="">
        <div class="container  h-100">
            <div class="row h-100">

                <!-- ? links -->
                <div class="col links-col d-flex justify-content-between">

                    @foreach (config('links.footerLinks') as $list)
                        <nav class="py-5 px-2">
                            <ul>
                                <h3> {{ $list['name'] }} </h3>
                                @foreach ($list['items'] as $item)
                                    <li>
                                        <a href="#"> {{ $item }} </a>
                                    </li>
                                @endforeach
                            </ul>
                        </nav>
                    @endforeach

                </div>

                <!-- ? Logo -->
                <div class="col logo-bg d-none d-lg-block"></div>
            </div>
        </div>
    </div>

    <!-- ? Bottom Footer -->
    <div id="bottom-footer" class="">
        <div class="container ">
            <div class="my-btn">Sign-up now!</div>
            <nav class="d-flex ">
                <h3 class="d-none d-md-block">Follow us</h3>
                <ul class="d-flex m-0 gap-3">

                    @foreach (config('links.socials') as $social)
                        <li> <img src=" {{ Vite::asset('resources/img/' . $social) }} " alt=""> </li>
                    @endforeach

                </ul>
            </nav>
        </div>
    </div>


</footer>
