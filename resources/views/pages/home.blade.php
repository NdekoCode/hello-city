@extends('layout')

@section('title')
    Page d'accueil | Hello city

    {{-- @stop|@endsection c'est la meme chose --}}
@stop

@section('content')
    <h1>Hello from Goma !</h1>
    <p>It's currently {{ date('h:i A') }}</p>
@endsection
