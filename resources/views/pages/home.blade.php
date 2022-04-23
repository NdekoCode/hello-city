@extends('layout')

@section('title')
    Page d'accueil | {{ config('app.name') }}

    {{-- @stop|@endsection c'est la meme chose --}}
@stop

@section('content')
    <div class="flex justify-center items-center flex-col">

        <div class="mx-2 md:mx-0 mb-3 mt-12 w-64 md:w-96 overflow-hidden">
            <img src="{{ asset('img/drapeau-rdc.png') }}" alt="My Flag DRC" class="shadow-md rounded-full">
        </div>
        <h1 class="text-3xl font-bold text-gray-800 mb-3">Hello from Goma !</h1>
        <p class="mb-2 text-lg">It's currently {{ date('h:i A') }}</p>
    </div>
@endsection
