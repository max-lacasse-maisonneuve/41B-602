<header class="flex-none min-h-10 bg-amber-50 flex justify-center gap-10 shadow-md  z-9">
    <div class="logo ">
        <img class="h-auto max-h-24 object-contain" src="{{ Vite::asset('resources/img/logo.png') }}" alt="">
    </div>
    @include('partials.nav')
    <div class="flex justify-center items-center gap-6">
        <a href={{ route("locale", ["lang"=>"en"]) }}>EN</a>
        <a href="/locale?lang=fr">FR</a>
    </div>

</header>
