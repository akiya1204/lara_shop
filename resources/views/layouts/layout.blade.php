<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    {{-- @csrfのトークンを発行 --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>lara_shop</title>
    {{-- 元々用意されているapp.jsの読み込み(Vue.jsを使うための処理が記述されている) --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- 元々用意されているapp.cssの読み込み(スタイルがそれっぽくなる) --}}
    {{-- app.cssを使用することで、Bootstrap4も使えるようになる --}}
    {{-- asset()でpublicディレクトリまでのパスを返す --}}
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    {{--  shopping.cssの読み込み  --}}
    <link href="{{ asset('/css/shopping.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                {{-- route() web.phpで定義したルート名を入れることでルーティングで設定したurlまで飛ぶことができる --}}
                <a class="navbar-brand" href="{{ route('top') }}">
                     lara_shop
                </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        {{-- @guest 認証しているかどうかを判別する --}}
                        {{-- もし認証していた場合は@elseの方が実行される --}}
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            {{-- @if 条件分岐、条件がtrueだった場合の処理 --}}
                            {{-- @elseも使えるが今回は不使用 --}}
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('list') }}">{{ __('shop') }}</a>
                            </li>
                            <li class="nav-item">
                                {{-- __() 多言語処理、さまざまな言語をサポートする --}}
                                <a class="nav-link" href="./home">{{ __('mypage') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{-- @csrfをフォームに記述するだけで簡単に保護できる --}}
                                {{-- @csrfを書かない場合はエラーが発生します --}}
                                @csrf
                            </form>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            {{-- 子要素をmainタグの中で反映させる --}}
            @yield('content')
        </main>
    </div>
</body>
</html>