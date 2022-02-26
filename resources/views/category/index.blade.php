<h1>カテゴリー一覧画面</h1>

@foreach ($categories as $category)
<p>{{ $category->category_id }}</p>
<p>{{ $category->category_name }}</p>
@endforeach