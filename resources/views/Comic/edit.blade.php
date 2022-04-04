@extends('layouts.base')

@section('pageTitle') 
    Comic | Modifica: {{$comic->title}}
@endsection

@section('content')

    <div class="container">

        <h2>Modifica {{$comic->title}}</h2>

        <form method="POST" action="{{ route('comic.update', ['comic' =>$comic->id]) }}">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="thumb" class="form-label">Indirizzo immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{old('thumb', $comic->thumb)}}">
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{old('title', $comic->title)}}">
            </div>
    
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series" value="{{old('series', $comic->series)}}">
            </div>
    
            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="type" name="type" value="{{old('type', $comic->type)}}">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Data uscita</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{old('sale_date', $comic->sale_date)}}">
            </div>
    
            <div class="form-floating">
                <textarea class="form-control" placeholder="Descrizione..." id="description" name="description">{{old('description', $comic->description)}}</textarea>
            </div>
    
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="number" class="form-control" id="price" name="price" value="{{old('price', $comic->price)}}">
            </div>
    
            <button type="submit" class="btn btn-warning">Modifica</button>
    
        </form>
    </div>


@endsection
