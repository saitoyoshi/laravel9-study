<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>つぶやきで勉強</title>
</head>
<body>
  <h1>勉強しております</h1>
  <div>
    <p>投稿フォーム</p>
    <form action="{{ route('tweet.create') }}" method="post">
      @csrf
      <label for="tweet-content">つぶやき
        <span>140文字まで</span>
      </label>
      <textarea name="tweet" id="tweet-content" cols="30" rows="10" placeholder="つぶやきを入れてください"></textarea>
      @error('tweet')
        <p style="color: red;">{{ $message }}</p>
      @enderror
      <button>投稿</button>
    </form>
  </div>
  <div>
    @foreach ($tweets as $tweet)
      <p>{{ $tweet->id }}<span> </span>{{ $tweet->content }}<span> </span>{{ $tweet->updated_at }}</p>
    @endforeach
  </div>
</body>
</html>
