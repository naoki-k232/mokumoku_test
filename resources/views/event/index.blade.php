{{-- フラッシュメッセージ --}}
{{-- 成功した時 --}}
@if (session('success'))
    <div class="alert alert-success text-center" role="alert">
        {{ session('success') }}
    </div>
@endif
{{-- 失敗した時 --}}
@if (session('error'))
    <div class="alert alert-danger text-center" role="alert">
        {{ session('error') }}
    </div>
@endif
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

    {{-- もくもく会開催一覧リスト --}}
    @foreach ($events as $event)
        <div class="card container text-center mb-5" id="mokumoku-lists">
            <div class="card-header font-weight-bold bg-white">
                <a href="{{ route('event.show', ['id' => $event->event_id]) }}">{{ $event->title }}</a>
            </div>
            <div class="card-body">
                <div class="category text-left">
                    <label for="category-label"><span
                            class="badge bg-primary p-2">{{ $event->category->category_name }}</span></label>
                </div>
                <div class="entry-fee-wrapper d-flex">
                    <label for="entry-fee"><span class="badge bg-success p-2">{{ '参加費' }}</span></label>
                    <p class="text-danger font-weight-bold p-1 h5">{{ $event->entry_fee . '円' }}</p>
                </div>
                <div class="content-wrapper d-flex">
                    <div class="content-filed">
                        <p class="card-text text-left">
                            {{-- PHPのmb_substr関数を使って制御する --}}
                            {{-- mb_substr(指定文字列, 開始位置, 終了位置, 文字のエンコード) . '終了位置に追加する文字' --}}
                            {{ mb_substr($event->content, 0, 100, 'UTF-8') . '...' }}
                        </p>
                    </div>
                    <div class="btn-filed ml-auto d-flex">
                        <a href="{{ route('event.show', ['id' => $event->event_id]) }}"
                            class="btn btn-primary mr-3">{{ '詳細' }}</a>
                        <a href="{{ route('event.edit', ['id' => $event->event_id]) }}"
                            class="btn btn-info mr-3">{{ '編集' }}</a>
                        <form action="{{ route('event.delete', ['id' => $event->event_id]) }}" method="POST">
                            @csrf
                            <button class="btn btn-danger mr-3">{{ '削除' }}</button>
                        </form>
                    </div>
                </div>
            </div>
            @php
                // 指定の日付を△△/××に変換する
                $date = date('m/d', strtotime($event->date));
                // 指定日の曜日を取得する
                $getWeek = date('w', strtotime($event->date));
                // 配列を使用し、要素順に(日:0〜土:6)を設定する
                $week = [
                    '日', //0
                    '月', //1
                    '火', //2
                    '水', //3
                    '木', //4
                    '金', //5
                    '土', //6
                ];

                // 開始時間 ex.15:00:00→15:00に変換。秒部分を切り捨て
                $start_time = substr($event->start_time, 0, -3);
                // 終了時間 ex.19:00:00→19:00に変換。秒部分を切り捨て
                $end_time = substr($event->end_time, 0, -3);

                // substr関数の基本的な使い方
                // substr関数は指定文字列を切り取って返す関数
                // substr(指定文字列, 開始位置, 終了位置);

                // 結果：he
                // substr('hello', 0, 2);

                // 結果：hel 終了位置を−に指定すると、末尾も文字列を削除してくれる
                // substr('hello', 0, -2);

            @endphp
            <div class="card-footer text-left font-weight-bold bg-white">
                {{ '開催日時:' . $date . '(' . $week[$getWeek] . ')' . $start_time . '-' . $end_time }}
            </div>
        </div>
    @endforeach
@endsection
