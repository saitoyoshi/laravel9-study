<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $title ?? 'laravel9勉強'}}</title>
  <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
  <script src="{{ mix('/js/app.js') }}" async defer></script>
</head>
<body class="bg-gray-50">
  {{ $slot }}
</body>
</html>
