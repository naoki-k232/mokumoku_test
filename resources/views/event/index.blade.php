@extends('layouts.app')

@section('content')
    <style>
        #mokumoku-lists {
            filter: drop-shadow(2px 4px 6px #000);
        }

        .content-filed {
            width: 60%;
        }

    </style>

    {{-- ナビゲーション --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light container">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('event.index') }}">もくもく会</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mokumoku"
                aria-controls="mokumoku" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mokumoku">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('event.index') }}">一覧</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">開催する</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- もくもく会開催一覧リスト --}}
    <div class="card container text-center mb-5" id="mokumoku-lists">
        <div class="card-header font-weight-bold bg-white">
            <a href="">{{ 'タイトル' }}</a>
        </div>
        <div class="card-body">
            <div class="category text-left">
                <label for="category-label"><span class="badge bg-primary p-2">{{ 'Laravel' }}</span></label>
            </div>
            <div class="entry-fee-wrapper d-flex">
                <label for="entry-fee"><span class="badge bg-success p-2">{{ '参加費' }}</span></label>
                <p class="text-danger font-weight-bold p-1 h5">{{ '500' . '円' }}</p>
            </div>
            <div class="content-wrapper d-flex">
                <div class="content-filed">
                    <p class="card-text text-left">
                        {{ 'テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストストテキストストテキストストテキストストテキストストテキスト' }}
                    </p>
                </div>
                <div class="btn-filed ml-auto">
                    <button class="btn btn-primary mr-3">{{ '詳細' }}</button>
                    <button class="btn btn-info mr-3">{{ '編集' }}</button>
                    <button class="btn btn-danger mr-3">{{ '削除' }}</button>
                </div>
            </div>
        </div>
        <div class="card-footer text-left font-weight-bold bg-white">
            {{ '開催日時: 11/20(木) 15:00 - 18:00' }}
        </div>
    </div>
@endsection
