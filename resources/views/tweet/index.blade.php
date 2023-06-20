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
    @foreach ($tweets as $tweet)
      <p>{{ $tweet->id }}<span> </span>{{ $tweet->content }}<span> </span>{{ $tweet->updated_at }}</p>
    @endforeach
  </div>
</body>
</html>
