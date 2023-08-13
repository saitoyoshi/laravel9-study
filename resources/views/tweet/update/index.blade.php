<x-layout.layout>
    <x-slot:title>
        つぶやき更新
    </x-slot:title>
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
</x-layout.layout>
