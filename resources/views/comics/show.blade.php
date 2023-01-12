@extends('layouts.main')

@section('content')
    <div class="bg-dark py-5">
        <div class="container text-light">
            <div class="row">
                <div class="col">
                    <h1 class="display-4"> {{ $comic->title }} </h1>
                    <h4>Series : {{$comic->series}} </h4>
                    <h4>Sale date : {{$comic->sale_date}} </h4>
                    <h4>Type : {{$comic->type}} </h4>
                    <h4>Price : {{$comic->price}} </h4>
                    <p>{{$comic->description}}</p>
                </div>

                <div class="col d-flex justify-content-center align-items-center">
                    <img src=" {{$comic->thumb}} " alt="{{ $comic->title }}">
                </div>
            </div>

            <a class="btn btn-primary" href=" {{route('comics.index')}} ">Back</a>

        </div>
    </div>
@endsection
