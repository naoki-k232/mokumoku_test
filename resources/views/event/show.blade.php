@extends('layouts.app')

@section('content')
    <div class="container">
        {{ $event->event_id }}
        {{ $event->category->category_name }}
        {{ $event->title }}
        {{ $event->date }}
        {{ $event->start_time }}
        {{ $event->end_time }}
        {{ $event->content }}
        {{ $event->entry_fee }}
    </div>
@endsection
