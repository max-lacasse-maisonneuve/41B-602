@extends('partials.base')

@section('title', 'À propos')

@section('content')
    <main class="flex-auto flex flex-col justify-center align-center text-center gap-5 "
        style="background:linear-gradient(to left, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.5) 100%), url({{ Vite::asset('resources/img/banniere.jpeg') }}); background-size:cover, cover;">
        <h1 class="text-6xl patate">A propos</h1>
    </main>

@endsection
