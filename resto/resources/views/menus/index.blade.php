@extends('partials.base')

@section('title', $title)

@section('content')
    <main class="flex-auto flex flex-col justify-center align-center text-center gap-5 "
        style="background:linear-gradient(to left, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.5) 100%), url({{ Vite::asset('resources/img/banniere.jpeg') }}); background-size:cover, cover;">
        <section class="flex flex-wrap gap-3 justify-center items-center">
            @foreach ($menus as $menu)
                <a href="{{ route('menus.show', ['menu' => $menu->id]) }}"
                    class="bg-amber-100 text-amber-900 z-10 basis-1/4 flex flex-col gap-3">
                    <p>{{ $menu->nom }}</p>
                    <p>{{ $menu->prix }}</p>
                    <p>{{ $menu->description }}</p>
                </a>
            @endforeach
        </section>
    </main>

@endsection
