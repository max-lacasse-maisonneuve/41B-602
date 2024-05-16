<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>@yield('title')</title>
</head>

<body class="min-h-screen min-w-screen flex flex-col relative ">
    @if (session('success'))
        <x-alert :type="'success'">
            {{ session('success') }}
        </x-alert>
    @endif
    @if (session('erreur'))
        <x-alert :type="'danger'">
            {{ session('erreur') }}
        </x-alert>
    @endif
    @if (session('panier'))
        <x-alert :type="'danger'">
            {{ session('panier')[0] }}
        </x-alert>
    @endif

    @include('partials.header')

    @yield('content')

    @include('partials.footer')
</body>

</html>
