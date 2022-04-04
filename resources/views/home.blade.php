@extends('layouts.base')

@section('pageTitle', 'Home')

@section('content')


    <body class="d-flex vh-100 text-center text-white bg-dark">

        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

            @include('includes.header')

            <main class="px-3 pt-5">
                <h1>CREA E VENDI FUMETTI</h1>
                <p class="lead my-3 w-75 m-auto">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi impedit
                    dicta corrupti expedita quo tempora quos eius aspernatur maiores nihil, est quas odio illum cupiditate
                    iure harum magnam, sit officiis!</p>
                <p class="lead">
                    <a href="{{route('comic.index')}}" class="btn btn-lg btn-secondary fw-bold border-white bg-white text-dark">Fumetti</a>
                </p>
            </main>

        </div>
    </body>

@endsection
