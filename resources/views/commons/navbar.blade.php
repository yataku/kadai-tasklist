<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        {{-- トップページへのリンク --}}
        <a class="navbar-brand" href="/">TaskList</a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                @if (Auth::check())
                    {{-- メッセージ作成ページへのリンク --}}
                    <li class="nav-item">{!! link_to_route('tasks.create', '新規タスクの作成', [], ['class' => 'nav-link']) !!}</li>
                    {{-- タスク一覧ページへのリンク --}}
                    <li class="nav-item">{!! link_to_route('tasks.index', 'タスク一覧', [], ['class' => 'nav-link']) !!}</li>
                    {{-- ログアウト --}}
                    <li>{!! link_to_route('logout.get', 'Logout', [], ['class' => 'nav-link']) !!}</li>
                @else
                    {{-- ユーザ登録ページへのリンク --}}
                    <li>{!! link_to_route('signup.get', 'Signup', [], ['class' => 'nav-link']) !!}</li>
                    {{-- ログインページへのリンク --}}
                    <li>{!! link_to_route('login', 'Login', [], ['class' => 'nav-link']) !!}</li>
                @endif
            </ul>
        </div>
    </nav>
</header>