@extends('partials.base')

@section('title', 'Page non trouvée')

@section('content')
    <main class="flex-auto">
        <h2 class="font-secondaire">Page non trouvée</h2>
        <a href="{{ route('index') }}">Retourner à l'accueil</a>
    </main>
@endsection
