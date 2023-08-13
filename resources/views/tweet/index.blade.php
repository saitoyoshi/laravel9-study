<x-layout.layout>
    <x-slot:title>
        つぶやき一覧
    </x-slot:title>


    @auth
    <div class="mb-3">
    <h3>つぶやき登録</h3>
    @if(session('message'))
        <p style="color: green">{{ session('message') }}</p>
    @endif
    @if($errors->any())
        @foreach($errors->all() as $error)
            <p style="color: red">{{ $error }}</p>
        @endforeach
    @endif
    <form action="{{ route('tweet.create') }}" method="post">
        @csrf
        <div class="mb-3">
        <label for="" class="form-label">つぶやきを入力</label>
        <textarea name="tweet" id="" cols="30" rows="4" class="form-control"></textarea>
    </div>
        <button type="submit" class="btn btn-primary">登録</button>
    </form>
</div>
    @endauth

    <h3>つぶやき一覧</h3>
  @foreach($tweets as $tweet)
  <ul class="nav mb-3">
    <li class="nav-item me-3">{{ $tweet->content }} by {{ $tweet->user->name }}</li>
    @if(\Illuminate\Support\Facades\Auth::id() === $tweet->user_id)


    <a href="{{ route('tweet.update.index', ['tweetId' => $tweet->id ]) }}"><button class="btn btn-info me-3">更新</button></a>
    <form action="{{ route('tweet.delete', ['tweetId' => $tweet->id]) }}" method="post">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger">削除</button>
    </form>
    @else
        操作できません
    @endif
</ul>
  @endforeach
</x-layout.layout>
