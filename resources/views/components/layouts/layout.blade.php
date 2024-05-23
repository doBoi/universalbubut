<!DOCTYPE html>
<html data-theme="coffee">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />

    <!-- Styles -->
    @vite('resources/css/app.css')

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <title>Universal Teknik Mandiri</title>

</head>

<body>

    <x-navbar></x-navbar>

    {{-- Content --}}
    <main class="-mt-20">
        {{ $slot }}
    </main>
    {{-- Content --}}

    <x-footer></x-footer>
</body>

</html>
