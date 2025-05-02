@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $article->title }}</h1>
    <p>{{ $article->content }}</p>
    <p><strong>Author:</strong> {{ $article->author->name }}</p>
</div>
@endsection
