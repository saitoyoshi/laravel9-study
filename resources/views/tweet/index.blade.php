<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
    <h1>つぶやき登録</h1>
    <form action="{{ route('tweet.create') }}" method="post">
        @csrf
        <label for="">つぶやき</label>
        <textarea name="tweet" id="" cols="30" rows="10"></textarea>
        <button type="submit">登録</button>
    </form>
    <h1>つぶやき一覧</h1>
  @foreach($tweets as $tweet)
  <ul>
    <li>{{ $tweet->content }}</li>
</ul>
  @endforeach
</body>
</html>
