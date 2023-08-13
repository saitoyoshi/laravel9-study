<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <title>{{ $title }}</title>
</head>
<body>
    <header class="container pt-4">

        <x-navbar>
        </x-navbar>
    </header>
    <main class="container">
    {{ $slot }}
</main>
    <footer class="container">
        @laravel
    </footer>
</body>
</html>
