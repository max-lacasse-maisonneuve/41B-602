<nav class="flex items-center gap-5">
    {{-- @dump(request()->is('/')) --}}
    <a class="font-bold text-md text-amber-900 hover:text-amber-400 hover:underline 
    {{ request()->is('/') ? 'active' : '' }}"
        href="{{ route('index') }}">Accueil</a>

    <a class="font-bold text-md text-amber-900 hover:text-amber-400 hover:underline 
    {{ request()->is('allergies') ? 'active' : '' }}"
        href="#">Allergies,
        contre-indications</a>

    <a class="font-bold text-md text-amber-900 hover:text-amber-400 hover:underline
    {{ request()->is('a-propos') ? 'active' : '' }}"
        href="{{ route('about') }}">À
        propos</a>

    <a class="font-bold text-md text-amber-900 hover:text-amber-400 hover:underline {{ request()->is('heures') ? 'active' : '' }}"
        href="#">Heures d'ouverture</a>
</nav>
