@extends('layouts.main')

@section('content')
    <div class="bg-dark py-5">
        <div class="container text-light">
            <div class="row row-cols-1 row-cols-lg-2">
                <div class="col">
                    <h1 class="display-4"> {{ $comic->title }} </h1>
                    <h4>Series : {{ $comic->series }} </h4>
                    <h4>Sale date : {{ $comic->sale_date }} </h4>
                    <h4>Type : {{ $comic->type }} </h4>
                    <h4>Price : {{ $comic->price }} €</h4>
                    <p>{{ $comic->description }}</p>
                </div>

                <div class="col d-flex justify-content-center align-items-center">
                    <img class="img-fluid" src=" {{ $comic->thumb }} " alt="{{ $comic->title }}">
                </div>

                <div class="btns py-3">
                    <a href=" {{ route('comics.edit', $comic) }} " title="edit" class="btn btn-warning"><i
                            class="fa-solid fa-pen-to-square"></i></a>


                    <form class="d-inline" action=" {{ route('comics.destroy', $comic) }} " method="POST"
                        onsubmit="return confirm('Sei sicuro di voler eliminare {{ $comic->title }} ')">
                        @csrf
                        @method('DELETE')

                        <button title="delete" class="btn btn-danger">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>
                </div>
            </div>

            <a class="btn btn-primary" href=" {{ route('comics.index') }} ">Back</a>

        </div>
    </div>
@endsection
