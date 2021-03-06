@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div>{{ session('status') }}</div>
    @endif

    <h1>Accueil de la page My home</h1>
    <div>
        <p>Bonjour {{ auth()->user()->name }}, vous êtes bien connecté !</p>
        {{-- <p>Bonjour {{ Auth::user()->name }}, vous êtes bien connecté !</p> --}}
    </div>

    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <button type="submit">
            {{ __('Se déconnecter') }}
        </button>
    </form>

    <hr>

@endsection