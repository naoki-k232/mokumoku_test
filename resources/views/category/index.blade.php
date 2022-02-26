@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light container">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('category.index') }}">カテゴリー</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#category"
                aria-controls="category" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="category">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('category.index') }}">一覧画面</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">カテゴリーID</th>
                    <th scope="col">カテゴリー名</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->category_id }}</td>
                        <td>{{ $category->category_name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
