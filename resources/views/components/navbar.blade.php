<nav class="">

<ul class="navbar-nav justify-content-end flex-row">
    @guest
       <li class="nav-item me-3"><a href="{{ route('login') }}" class="nav-link"><button class="btn btn-primary">ログインする</button></a></li>
        <li class="nav-item"><a href="{{ route('register') }}" class="nav-link"><button class="btn btn-success">新規登録</button></a></li>

    @endguest
    @auth
    <form action="{{ route('logout') }}" method="post">
    @csrf
    <button>ログアウト</button>
    </form>
    @endauth
</ul>
</nav>
