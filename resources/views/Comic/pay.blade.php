@extends('layouts.base')

@section('pageTitle', 'Pagamento')

@section('content')

    <div class="container">

        <h2>Crea il tuo formato di Pasta</h2>

        <form method="POST" action="{{ route('comic.store') }}">

            @csrf
    
            <div class="mb-3">
                <label for="thumb" class="form-label">Indirizzo immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb">
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
    
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series">
            </div>
    
            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="type" name="type">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Data uscita</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date">
            </div>
    
            <div class="form-floating">
                <textarea class="form-control" placeholder="Descrizione..." id="description" name="description" ></textarea>
            </div>
    
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="number" class="form-control" id="price" name="price">
            </div>
    
            <button type="submit" class="btn btn-primary">Invia</button>
    
        </form>
    </div>


@endsection
