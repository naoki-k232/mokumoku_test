@extends('layouts.app')

@section('content')
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
