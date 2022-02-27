@extends('layouts.app')

@section('content')
    <style>
        .date-time-entryFee-wrapper {
            height: 10em;
        }

        .date-time-entryFee-wrapper__date,
        .date-time-entryFee-wrapper__time,
        .date-time-entryFee-wrapper__entryFee {
            width: calc(100% / 3);
            height: 10em;
            border: 1px solid #d9d9d9;
            border-radius: 4px;
        }

        .content-title {
            background-color: #253458;
            color: #fff;
            padding: 10px 20px;
            margin: 20px 0;
            border-radius: 4px;
        }

        .date-col,
        .time-col,
        .entryFee-col {
            height: 10em;
            margin: 0 auto;
            padding: 20px 50px;
        }

        .date-col-header,
        .time-col-header,
        .entryFee-col-header,
        .date-col-main,
        .time-col-main,
        .entryFee-col-main {
            height: 50%;
        }

    </style>
    <div class="container">
        <div class="title-wrapper mt-3">
            <h1>{{ $event->title }}</h1>
        </div>
        <div class="category mt-3">
            <label for="category-label"><span
                    class="badge badge-primary p-2">{{ $event->category->category_name }}</span></label>
        </div>
        <div class="date-time-entryFee-wrapper d-flex mt-5">
            <div class="date-time-entryFee-wrapper__date">
                <div class="date-col">
                    <div class="date-col-header">
                        <h4 class="text-center pt-3">{{ '開催日' }}</h4>
                    </div>
                    <div class="date-col-main">
                        <p class="text-center pt-1">{{ $date . '(' . $week[$getWeek] . ')' }}</p>
                    </div>
                </div>
            </div>
            <div class="date-time-entryFee-wrapper__time">
                <div class="time-col">
                    <div class="time-col-header">
                        <h4 class="text-center pt-3">{{ '開催時間' }}</h4>
                    </div>
                    <div class="time-col-main">
                        <p class="text-center pt-1">{{ $start_time }}{{ '-' }}{{ $end_time }}</p>
                    </div>
                </div>
            </div>
            <div class="date-time-entryFee-wrapper__entryFee">
                <div class="entryFee-col">
                    <div class="entryFee-col-header">
                        <h4 class="text-center pt-3">{{ '参加費' }}</h4>
                    </div>
                    <div class="entryFee-col-main">
                        <p class="text-center pt-1">{{ $event->entry_fee . '円' }}</p>
                    </div>
                </div>
            </div>
        </div>
        <section>
            <div class="content-title mt-5">
                <h4 class="pt-2">{{ 'イベント内容' }}</h4>
            </div>
            <div class="content">
                {{ $event->content }}
            </div>
        </section>
    </div>
@endsection
