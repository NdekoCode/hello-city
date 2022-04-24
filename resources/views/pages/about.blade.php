@extends('layouts.layout')

@section('title', 'About Us | ' . config('app.name')) {{-- Pas de @endsection car on a un contenu assez simple --}}

@section('content')
    <div class="flex justify-center items-center flex-col rounded-full">
        <div class="mx-2 md:mx-0 mb-3 mt-12 w-64 md:w-96 overflow-hidden">
            <img src="{{ asset('img/VsNavigator.PNG') }}" alt="My Flag DRC" class="shadow-md rounded-full">
        </div>
        <h1 class="text-3xl font-bold text-gray-800">A propos de nous</h1>
        <p class="my-2 text-lg">Build with <span class="text-pink-500">❤ &hearts;</span> By Arick Bulakali</p>
        <p class="my-2 text-lg"><a class="underline text-indigo-500 hover:text-indigo-700"
                href="{{ route('app_home') }}">Revenir à la page
                d'acceuil</a></p>
    </div>
@endsection
