<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('storage/png/favicon.png') }}" type="image/x-icon">
    <title>Clément Construction</title>
    @vite(['resources/sass/style.scss', 'resources/js/app.js'])
</head>

<body>
    <x-header />
    @yield('content')
    <x-footer />
</body>

</html>
