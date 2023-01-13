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
                <div class="row row-cols-xl-4 row-cols-xxl-4 w-100 ">
                    @forelse ($comics as $card)
                        <div class="col mb-4 h-100">
                            <div class="my-card h-100">
                                <img style="height: 290px; max-width: 190px;" src=" {{ $card->thumb }} "
                                    alt="">
                                <h3 class="text-light lead"> {{ $card->title }} </h3>

                                <div class="btns">
                                    <a href=" {{route('comics.show', $card)}} " title="show" class="btn btn-primary"><i
                                            class="fa-regular fa-eye"></i></a>
                                    <a href=" # " title="show" class="btn btn-warning"><i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                    <button class="btn btn-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>

                                </div>

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
