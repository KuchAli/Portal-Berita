<?php

namespace App\Http\Controllers;

use App\Models\Article;

class PopulerController extends Controller
{
    public function index()
    {
        // Ambil berita populer berdasarkan views terbanyak
        $popularNews = Article::where('status', 'publish')
            ->orderBy('views', 'desc')
            ->paginate(8); // bisa diubah sesuai kebutuhan

        return view('populer', compact('popularNews'));
    }
}
