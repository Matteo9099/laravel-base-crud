@extends('layouts.base')

@section('pageTitle', 'Comics | List ')

@include('includes.header')

@section('content')

    <section class="bg-light">
        <div class="text-center">
            <a href="{{ route('comic.create') }}" class="btn btn-success text-white mt-2">CREA NUOVO FUMETTO</a>
        </div>
        <div class="container d-flex flex-wrap">
            @foreach ($comics as $comic)
                {{-- Info card --}}
                <div class="card ms_card bg-dark text-white">
                    <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                    <div class="card-body">

                        <h5 class="card-title">{{ $comic->title }}</h5>
                        <p class="card-text">{{ $comic->series }}</p>
                        <p class="card-text">Price: <span class="text-success">{{ $comic->price }} &euro;</span></p>

                        {{-- Bottoni card --}}
                        <div class="d-flex justify-content-around">

                            <a href="{{ route('comic.show', $comic->id) }}" title="Dettagli"
                                class="btn btn-info d-flex align-items-center"><i class="fa-solid fa-eye"></i></a>
                            <a href="{{ route('comic.edit', $comic->id) }}" title="Modifica"
                                class="btn btn-warning d-flex align-items-center"><i class="fa-solid fa-pencil"></i></a>

                            <form action="{{ route('comic.destroy', $comic->id) }}" method="POST"
                                data-name="{{ $comic->title }}" class="form-delete">
                                @csrf
                                @method('DELETE')
                                <button title="Elimina" class="btn btn-danger d-flex align-items-center"
                                    {{-- onclick="return confirm('Sicuro di voler eliminare definitivamente questo elemento?')" --}}
                                    type="submit"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <script>
        var form_delete = document.querySelectorAll('.form-delete');

        for (var i = 0; i < form_delete.length; i++) {
            form_delete[i].addEventListener('submit', function(event) {
                event.preventDefault();

                var accept = confirm('Sicuro di voler eliminare definitivamente questo elemento');

                if (accept) {
                    window.location.form_delete = event.target.submit();
                }
            });
        }
    </script>

@endsection
