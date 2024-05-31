@extends('partials.base')

@section('title', $title)

@section('content')
    <main class="flex-auto flex flex-col justify-center align-center text-center gap-5 bg-white ">
        <h1 class="text-lg">Se connecter</h1>

        <form action="{{ route('authenticate') }}" method="POST">
            @csrf
            <div class="my-2">
                <label for="email">Courriel</label>
                <input type="email" name="email" id="email" class="border-2" value="{{ old('email') }}">
                @error('email')
                    <p class="text-red-900 text-lg">{{ $message }}</p>
                @enderror
            </div>
            <div class="my-2">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password" class="border-2" value="{{ old('password') }}">
                @error('password')
                    <p class="text-red-900 text-lg">{{ $message }}</p>
                @enderror
            </div>
            <button class="bg-amber-700 text-white p-5 rounded-lg" type="submit">Se connecter</button>
        </form>
    </main>
@endsection
