<x-layout.layout>
    <x-slot:title>
        つぶやき更新
    </x-slot:title>
<h3>つぶやき更新</h3>
  <a href="{{ route('tweet.index') }}">戻る</a>
  @if($errors->any())
  @foreach ($errors->all() as $error)
  <p style="color: red">{{ $error }}</p>

  @endforeach
  @endif
  <form action="{{ route('tweet.update.put', ['tweetId' => $tweet->id ]) }}" method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
  <label for="" class="form-label"></label>
  <textarea class="form-control" name="tweet" id="" cols="30" rows="4">{{ $tweet->content }}</textarea>
</div>
<div class="mb-3">
  <button class="btn btn-info">更新</button>

</form>
</x-layout.layout>
