
@guest
<ul class="navbar-nav  flex-row row">
    <h2 class="mt-2 me-3 col-auto">つぶやきアプリ</h2>
       <li class="nav-item me-3 col-auto"><a href="{{ route('login') }}" class="nav-link"><button class="btn btn-primary">ログインする</button></a></li>
        <li class="nav-item col-auto"><a href="{{ route('register') }}" class="nav-link"><button class="btn btn-success">新規登録</button></a></li>
    @endguest
</ul>
    @auth
    <div class="row justify-content-between">
    <h2 class="col-auto">つぶやきアプリ</h2>
    <form  class="col-auto" action="{{ route('logout') }}" method="post">
    @csrf
    <button class="btn btn-success">ログアウト</button>
    </form>
</div>
    @endauth
