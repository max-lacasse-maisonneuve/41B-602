@extends('partials.base')

@section('title', 'Modifier un menu')

@section('content')
    <main class="flex-auto flex flex-col justify-center align-center text-center gap-5 bg-white ">
        <h1 class="text-lg">Modifier un menu</h1>

        <form action="{{ route('menus.update', $menu) }}" method="POST" enctype="multipart/form-data" accept="image/*">
            @csrf
            @method('PUT')
            @if ($menu->image)
                <img class="mx-auto w-1/2" src="{{ $menu->imageFullPath() }}" alt="Image pour {{ $menu->nom }}">
            @endif
            <div class="my-2">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="border-2">
                @error('image')
                    <p class="text-red-900 text-lg">{{ $message }}</p>
                @enderror
            </div>
            <div class="my-2">
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" class="border-2" value="{{ old('nom', $menu->nom) }}">
                @error('nom')
                    <p class="text-red-900 text-lg">{{ $message }}</p>
                @enderror
            </div>
            <div class="my-2">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="border-2">{{ old('description', $menu->description) }}</textarea>
                @error('description')
                    <p class="text-red-900 text-lg">{{ $message }}</p>
                @enderror
            </div>

            <div class="my-2">
                <label for="prix">Prix</label>
                <input type="number" name="prix" id="prix" class="border-2" value="{{ old('prix', $menu->prix) }}">
                @error('prix')
                    <p class="text-red-900 text-lg">Vous devez fournir un prix</p>
                @enderror
            </div>

            <div class="my-2">
                <label for="estVege">Est végétarien?</label>
                <input type="checkbox" name="estVege" id="estVege" value=1
                    {{ old('estVege', $menu->estVege) ? 'checked="checked"' : '' }} class="border-2">

                @error('estVege')
                    <p class="text-red-900 text-lg">Il y a une erreur dans le champ</p>
                @enderror
            </div>
            <button class="bg-amber-700 text-white p-5 rounded-lg" type="submit">Envoyer</button>
        </form>
    </main>
@endsection
