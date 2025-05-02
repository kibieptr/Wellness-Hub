@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Artikel Kesehatan Mental</h1>
    <a href="{{ route('articles.create') }}" class="btn btn-primary mb-3">Tulis Artikel</a>
    @foreach($articles as $article)
        <div class="card mb-2">
            <div class="card-body">
                <h5>{{ $article->title }}</h5>
                <p>{{ Str::limit($article->content, 100) }}</p>
                <a href="{{ route('articles.show', $article) }}" class="btn btn-info">Baca Selengkapnya</a>
            </div>
        </div>
    @endforeach
    {{ $articles->links() }}
</div>
@endsection
