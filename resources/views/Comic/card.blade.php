@extends('layouts.base')

@section('pageTitle') 
    {{$comic->title}}
@endsection

@section('content')

    <div class="container">
        <div class="d-flex justify-content-around">
            <div id="figure">
                <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
                <div class="d-flex justify-content-around">
                    <a type="button" href={{route('comic.index')}} class="btn btn-primary mt-3">Torna alla Lista</a>
                    <a type="button" href={{route('comic.index')}} class="btn btn-primary mt-3">Acquista</a>
                </div>
            </div>
            <div id="description" class="ms-5">
                <div class="description_title d-flex align-items-center">
                    <h3>{{$comic->title}}</h3>
                </div>
                <div id="date-exit" class="d-flex flex-column">
                    <span>Data di uscita: {{$comic->sale_date}}</span>
                    <span class="ms-3">{{$comic->type}}</span>
                </div>
                <div id="text">
                    <h5 class="fw-bold mt-4">Descrizione</h5>
                    <p>{{$comic->description}}</p>
                </div>
                <div id="price">
                    <h5 class="fw-bold mt-4">Prezzo</h5>
                    <span>{{$comic->price}} &euro;</span>
                </div>
            </div>
        </div>
    </div>




@endsection