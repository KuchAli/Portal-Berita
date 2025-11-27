<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Comments;

class ArticleController extends Controller
{
    public function show($slug)
    {
        // Ambil artikel berdasarkan slug dan status publish
        $article = Article::where('slug', $slug)
            ->where('status', 'publish')
            ->firstOrFail(); // Jika tidak ditemukan, 404 otomatis

        // Bisa juga menambahkan update views
        $article->increment('views');


        $comments = Comments::where('article_id', $article->id)
            ->latest()
            ->get();


        // Kirim data ke view
        return view('article.detail', compact('article', 'comments'));
    }
}
