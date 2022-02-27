{{-- ナビゲーション --}}
<nav class="navbar navbar-expand-lg navbar-light bg-light container">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('event.index') }}">{{ 'もくもく会' }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mokumoku"
            aria-controls="mokumoku" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mokumoku">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page"
                        href="{{ route('event.index') }}">{{ 'もくもく会一覧' }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page"
                        href="{{ route('category.index') }}">{{ 'カテゴリ一覧' }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('event.register') }}">{{ '開催する' }}</a>
                </li>
            </ul>
            {{-- 検索フォーム --}}
            <form class="form-inline" id="search-form" method="GET" action="{{ route('event.index') }}">
                <input class="form-control mr-sm-2" id="search-input" type="search" name="search" placeholder="キーワードを入力"
                    {{-- $wordの値がセットされていれば、$wordの値を、セットされていなければ値は空を返します。 --}} value="{{ isset($word) ? $word : '' }}">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">検索</button>
            </form>
        </div>
    </div>
</nav>
