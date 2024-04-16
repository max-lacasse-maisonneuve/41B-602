<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <title>@yield('title')</title>
</head>

<body class="min-h-screen min-w-screen flex flex-col">
    @include('partials.header')

    @yield('content')

    @include('partials.footer')
</body>

</html>
