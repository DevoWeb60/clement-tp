<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('storage/' . $siteInfo->favicon) }}" type="image/x-icon">
    <title>{{ $title }} | {{ $siteInfo->title }}</title>
    <meta name="description" content="{{ $siteInfo->description }}">
    @vite(['resources/sass/style.scss', 'resources/js/app.js'])
</head>

<body>
    <x-connectedHeader route="dashboard">
        Retourner à l'administration
    </x-connectedHeader>
    <x-header role="guest" />
    {{ $slot }}
    <x-footer />
</body>

</html>
