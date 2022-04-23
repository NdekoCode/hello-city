@extends('layout')

@section('title', 'About Us | ' . config('app.name')) {{-- Pas de @endsection car on a un contenu assez simple --}}

@section('content')
    <div>
        <img src="{{ asset('img/VsNavigator.PNG') }}" alt="My Flag DRC">
    </div>
    <h1>A propos de nous</h1>
    <p>Build with ❤ &hearts; ♥ By Arick Bulakali</p>
    <p><a href="{{ route('app_home') }}">Revenir à la page d'acceuil</a></p>
@endsection
