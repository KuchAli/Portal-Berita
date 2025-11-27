<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class TerbaruController extends Controller
{
    public function index()
    {
        // Berita terbaru
        $latest = Article::where('status', 'publish')
            ->latest('published_at')
            ->paginate(8); // bisa diganti take(8)->get() kalau tidak ingin pagination

        return view('terbaru', compact('latest'));
    }
}
