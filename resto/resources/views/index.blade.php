@extends('partials.base')

@section('title', 'Accueil')

@section('content')
    <main class="flex-auto flex flex-col justify-center align-center text-center gap-5 "
        style="background:linear-gradient(to left, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.5) 100%), url({{ Vite::asset('resources/img/banniere.jpeg') }}); background-size:cover, cover;">
        <h1 class="text-6xl patate">Bienvenue au Resto à déjeuner</h1>
        <p class="text-3xl text-white">Le meilleur endroit pour déjeuner à Montréal</p>
        <a
            href="#"class="mx-auto w-fit items-center rounded-md bg-amber-50 px-2 py-1 text-lg font-medium text-amber-600 ring-1 ring-inset ring-amber-500/10">Voir
            le menu</a>
        <a
            href="#"class="mx-auto w-fit items-center rounded-md bg-amber-50 px-2 py-1 text-lg font-medium text-amber-800 ring-1 ring-inset ring-amber-800/10">Réserver
            une table</a>
    </main>

@endsection
