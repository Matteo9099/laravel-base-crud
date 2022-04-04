@extends('layouts.base')

@section('pageTitle', 'Comic')

@section('content')

    <section class="bg-light">
        <div class="text-center">
            <a href="{{route('comic.create')}}" class="btn btn-success text-white mt-2">CREA NUOVO FUMETTO</a>
        </div>
        <div class="container d-flex flex-wrap">
            @foreach ($comics as $comic)
                <div class="card ms_card bg-dark text-white">
                    <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$comic->title}}</h5>
                        <p class="card-text">{{$comic->series}}</p>
                        <p class="card-text">Price: <span class="text-success">{{$comic->price}} &euro;</span></p>
                        <a href="#" class="btn btn-primary">Acquista ora</a>
                        <a href="{{route('comic.show',  $comic->id )}}" class="btn btn-light">Dettagli</a>                       
                        <a href="{{route('comic.edit',  $comic->id )}}" class="btn btn-light">Modifica</a>                       
                        <form action="{{ route('comic.destroy', $comic->id) }}" method="POST" data-name="{{ $comic->title }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger mt-2" type="submit">Elimina</button>
                        </form>

                    </div>
                </div>
            @endforeach
        </div>
    </section>

@endsection