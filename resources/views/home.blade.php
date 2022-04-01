@extends('layouts.base')

@section('pageTitle', 'Home')

@section('content')
    
    
    <h1>
       <a href="{{ route('comic.index') }}">Guarda la lista fumetti</a>
    </h1>
@endsection