@extends('layout')

@section('title')
    Page d'accueil | {{ config('app.name') }}

    {{-- @stop|@endsection c'est la meme chose --}}
@stop

@section('content')
    <div>
        <img src="{{ asset('img/drapeau-rdc.png') }}" alt="My Flag DRC">
    </div>
    <h1>Hello from Goma !</h1>
    <p>It's currently {{ date('h:i A') }}</p>
@endsection
