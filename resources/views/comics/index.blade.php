@extends('layouts.main')

@section('content')
    <main>
        <!-- ? JumboTron -->
        <div id="hero" class="">
            <img src=" {{ Vite::asset('resources/img/jumbotron.jpg') }} " alt="" />
        </div>

        <!-- ? Main Content -->
        <div id="content" class="">
            <div class="container d-flex ">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <!-- ? Row -->
                <div class="row row-cols-xl-4 row-cols-xxl-4 w-100">
                    @forelse ($comics as $card)
                        <div class="col mb-4">
                            <div class="my-card">
                                <a class="text-decoration-none" href=" {{ route('comics.show', $card) }} ">
                                    <img style="max-height: 290px; max-width: 190px;" src=" {{ $card->thumb }} "
                                        alt="">
                                    <h3 class="text-light lead"> {{ $card->series }} </h3>
                                </a>

                            </div>
                        </div>

                    @empty

                        <h3 class="text-light py-5">No results.</h3>
                    @endforelse
                </div>

                {{ $comics->links() }}

                <a href=" {{ route('comics.create') }} " class="my-btn">Add more</a>
            </div>
        </div>
    </main>
@endsection
