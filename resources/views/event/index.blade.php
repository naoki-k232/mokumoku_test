<h1>もくもく会一覧画面</h1>

@foreach ($events as $event)
<p>{{ $event->event_id }}</p>
<p>{{ $event->category_id }}</p>
<p>{{ $event->title }}</p>
<p>{{ $event->date }}</p>
<p>{{ $event->start_time }}</p>
<p>{{ $event->end_time }}</p>
<p>{{ $event->content }}</p>
<p>{{ $event->entry_fee }}</p>
@endforeach