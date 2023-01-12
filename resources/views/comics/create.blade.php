@extends('layouts.main')

@section('content')
    <div class="bg-dark py-5">
        <div class="container text-light">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action=" {{ route('comics.store') }} " method="POST">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control bg-dark text-light" id="title"
                        placeholder="inserire titolo">
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Image</label>
                    <input type="text" name="thumb" class="form-control bg-dark text-light" id="thumb"
                        placeholder="inserire l'url dell'immagine">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" name="price" class="form-control bg-dark text-light" id="price"
                        placeholder="inserire il prezzo ">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Series</label>
                    <input type="text" name="series" class="form-control bg-dark text-light" id="series"
                        placeholder="inserire la serie di appartenenza ">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale Date</label>
                    <input type="text" name="sale_date" class="form-control bg-dark text-light" id="sale_date"
                        placeholder="inserire la data (YY-M-D) ">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" name="type" class="form-control bg-dark text-light" id="type"
                        placeholder="inserire la tipologia ">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control bg-dark text-light" name="description" id="description" rows="3"></textarea>
                </div>

                <button class="btn btn-primary" type="submit">Create</button>

            </form>

        </div>
    </div>
@endsection
