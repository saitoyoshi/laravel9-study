<x-layout.layout>
    <x-slot:title>
        つぶやき一覧
    </x-slot:title>
@guest
        <a href="/login">ログインする</a>
        <a href="/register">新規登録</a>

    @endguest
    @auth
    <form action="{{ route('logout') }}" method="post">
    @csrf
    <button>ログアウト</button>
    </form>
    <h1>つぶやき登録</h1>
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
        <label for="">つぶやき</label>
        <textarea name="tweet" id="" cols="30" rows="10"></textarea>
        <button type="submit">登録</button>
    </form>
    @endauth
    <h1>つぶやき一覧</h1>
  @foreach($tweets as $tweet)
  <ul>
    <li>{{ $tweet->content }} by {{ $tweet->user->name }}</li>
    @if(\Illuminate\Support\Facades\Auth::id() === $tweet->user_id)


    <a href="{{ route('tweet.update.index', ['tweetId' => $tweet->id ]) }}"><button>更新</button></a>
    <form action="{{ route('tweet.delete', ['tweetId' => $tweet->id]) }}" method="post">
    @csrf
    @method('DELETE')
    <button>削除</button>
    </form>
    @else
        操作できません
    @endif
</ul>
  @endforeach
</x-layout.layout>
