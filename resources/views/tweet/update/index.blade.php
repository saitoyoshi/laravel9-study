<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>つぶやき更新</h1>
  <a href="{{ route('tweet.index') }}">戻る</a>
  @if($errors->any())
  @foreach ($errors->all() as $error)
  <p style="color: red">{{ $error }}</p>

  @endforeach
  @endif
  <form action="{{ route('tweet.update.put', ['tweetId' => $tweet->id ]) }}" method="post">
    @csrf
    @method('PUT')
  <label for=""></label>
  <textarea name="tweet" id="" cols="30" rows="10">{{ $tweet->content }}</textarea>
  <button>更新</button>
</form>
</body>
</html>
