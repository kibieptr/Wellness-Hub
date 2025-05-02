<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        // Menampilkan daftar artikel
        $articles = Article::all();
        return view('user.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('user.articles.create');
    }

    public function store(Request $request)
    {
        // Validasi artikel
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Menyimpan artikel baru
        $article = new Article();
        $article->title = $request->input('title');
        $article->content = $request->input('content');
        $article->user_id = auth()->id();
        $article->save();

        return redirect()->route('articles.index')->with('success', 'Article created successfully.');
    }

    public function show(Article $article)
    {
        return view('user.articles.show', compact('article'));
    }

    public function edit(Article $article)
    {
        return view('user.articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        // Validasi artikel
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Mengupdate artikel
        $article->title = $request->input('title');
        $article->content = $request->input('content');
        $article->save();

        return redirect()->route('articles.index')->with('success', 'Article updated successfully.');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index')->with('success', 'Article deleted successfully.');
    }
}
