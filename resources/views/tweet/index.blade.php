<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
    <h1>つぶやき一覧</h1>
  @foreach($tweets as $tweet)
  <ul>
    <li>{{ $tweet->content }}</li>
</ul>
  @endforeach
</body>
</html>
