  @auth
  <div class="p-4">
    <form action="{{ route('tweet.create') }}" method="post">
      @csrf
      <div class="mt-1">
        <textarea name="tweet" id="" rows="3" class="focus:ring-blue-400 focus:border-blue-400 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md p-2" placeholder="つぶやきを入力"></textarea>
      </div>
      <p class="mt-2 text-sm text-gray-500">140文字まで</p>
      @error('tweet')
        <x-alert.error>{{ $message }}</x-alert.error>
      @enderror
      <div class="flex flex-wrap justify-end">
        <x-element.button>
          つぶやく
        </x-element.button>
      </div>
    </form>
  </div>
  @endauth
  {{-- <div>
    @foreach ($tweets as $tweet)
    <details>
      <summary>{{ $tweet->content }} by {{ $tweet->user->name }}</summary>
      @if (\Illuminate\Support\Facades\Auth::id() === $tweet->user_id)


      <div>
        <a href="{{ route('tweet.update.index', ['tweetId' => $tweet->id]) }}">編集</a>
        <form action="{{ route('tweet.delete', ['tweetId' => $tweet->id]) }}" method="post">
        @method('DELETE')
        @csrf
        <button type="submit">削除</button>
      </form>
      </div>
      @else
        編集できません
      @endif
    </details>
    @endforeach
  </div> --}}
