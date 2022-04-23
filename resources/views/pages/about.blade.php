@extends('layout')

@section('title', 'About Us | ' . config('app.name')) {{-- Pas de @endsection car on a un contenu assez simple --}}

@section('content')
    <h1>A propos de nous</h1>
    <p>Build with ❤ &hearts; ♥ By Arick Bulakali</p>
    <p><a href="/">Revenir à la page d'acceuil</a></p>
@endsection
