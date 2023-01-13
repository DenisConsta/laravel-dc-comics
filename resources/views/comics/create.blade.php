@extends('layouts.main')

@section('content')
    <div class="bg-dark py-5">
        <div class="container text-light">

            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}

            <form action=" {{ route('comics.store') }} " method="POST">
                @csrf

                {{-- ? Title --}}
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title"
                        class="form-control bg-dark text-light @error('title')
                    is-invalid  @enderror"
                        id="title" placeholder="inserire titolo" value=" {{old('title')}} ">
                    <div class="invalid-feedback">
                        @error('title')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                {{-- ? Thumb --}}
                <div class="mb-3">
                    <label for="thumb" class="form-label">Image</label>
                    <input type="text" name="thumb"
                        class="form-control bg-dark text-light @error('thumb')
                    is-invalid  @enderror"
                        id="thumb" placeholder="inserire l'url dell'immagine" value=" {{old('thumb')}} ">
                    <div class="invalid-feedback" >
                        @error('thumb')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                {{-- ? Price --}}
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" name="price"
                        class="form-control bg-dark text-light @error('price')
                    is-invalid  @enderror"
                        id="price" placeholder="inserire il prezzo " value=" {{old('price')}} ">
                    <div class="invalid-feedback">
                        @error('price')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                {{-- ? Series --}}
                <div class="mb-3">
                    <label for="type" class="form-label">Series</label>
                    <input type="text" name="series"
                        class="form-control bg-dark text-light @error('series')
                    is-invalid  @enderror"
                        id="series" placeholder="inserire la serie di appartenenza " value=" {{old('series')}} ">
                    <div class="invalid-feedback">
                        @error('series')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                {{-- ? Sale_Date --}}
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale Date</label>
                    <input type="text" name="sale_date"
                        class="form-control bg-dark text-light @error('sale_date')
                    is-invalid  @enderror"
                        id="sale_date" placeholder="inserire la data (YY-M-D) " value=" {{old('sale_date')}} ">
                    <div class="invalid-feedback">
                        @error('sale_date')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                {{-- ? Type --}}
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" name="type"
                        class="form-control bg-dark text-light @error('type')
                    is-invalid  @enderror"
                        id="type" placeholder="inserire la tipologia " value=" {{old('type')}} ">
                    <div class="invalid-feedback">
                        @error('type')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                {{-- ? Description --}}
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control bg-dark text-light @error('description')
                    is-invalid  @enderror"
                        name="description" id="description" rows="3">{{old('description')}}</textarea>
                    <div class="invalid-feedback">
                        @error('description')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <button class="btn btn-primary" type="submit">Create</button>

            </form>

        </div>
    </div>
@endsection
