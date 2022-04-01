@extends('layouts.base')

@section('pageTitle', 'Comic')

@section('content')

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Immagine</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Prezzo</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td><img src="{{$comic->thumb}}" alt="{{$comic->title}}"></td>
                        <td>{{$comic->title}}</td>
                        <td>{{$comic->series}}</td>
                        <td>{{$comic->price}} &euro;</td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>


@endsection