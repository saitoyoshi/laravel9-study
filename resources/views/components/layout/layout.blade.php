<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>
    <header>
        <h2>つぶやきアプリ</h2>
    </header>
    <main>
    {{ $slot }}
</main>
    <footer>
        @laravel
    </footer>
</body>
</html>
