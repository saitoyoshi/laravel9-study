    @guest
        <a href="{{ route('login') }}">ログインする</a>
        <a href="{{ route('register') }}">新規登録</a>

    @endguest
    @auth
    <form action="{{ route('logout') }}" method="post">
    @csrf
    <button>ログアウト</button>
    </form>
    @endauth
