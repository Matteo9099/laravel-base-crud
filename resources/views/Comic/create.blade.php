@extends('layouts.base')

@section('pageTitle', 'Comic | Creazione fumetto')

@include('includes.header')

@section('content')

    <div class="container">

        <h2>Crea il tuo Fumetto</h2>

        <form method="POST" action="{{ route('comic.store') }}">

            @csrf

            <div class="mb-3">
                <label for="thumb" class="form-label">Carica Immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb') }}" required>
            </div>

            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo Fumetto</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}"
                            required>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="series" class="form-label">Serie Fumetto</label>
                        <input type="text" class="form-control" id="series" name="series" value="{{ old('series') }}"
                            required>
                    </div>
                </div>
                <div class="col-2">
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data uscita</label>
                        <input type="date" class="form-control" id="sale_date" name="sale_date"
                            value="{{ old('sale_date') }}" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="type" class="form-label">Genere Fumetto</label>
                        <input type="text" class="form-control" id="type" name="type" value="{{ old('type') }}"
                            required>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input type="double" class="form-control" id="price" name="price" value="{{ old('price') }}"
                            required>
                    </div>
                </div>
            </div>




            <div class="form-floating">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" placeholder="Descrizione..." id="description" name="description"
                    required>{{ old('description') }}</textarea>
            </div>



            <button type="submit" class="btn btn-primary">Invia</button>

        </form>
    </div>


@endsection
