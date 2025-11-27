<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        $query = $request->input('q');

        // Jika ada pencarian
       if ($query) {
            $articles = Article::where(function($q) use ($query) {
                    $q->where('title', 'like', "%{$query}%")
                    ->orWhere('content', 'like', "%{$query}%")
                    ->orWhereHas('category', function($cat) use ($query) {
                        $cat->where('name', 'like', "%{$query}%");
                    });
                })
                ->where('status', 'publish')
                ->latest()
                ->paginate(8)
                ->appends(['q' => $query]);
        } else {
            $articles = Article::where('status', 'publish')
                ->latest()
                ->paginate(8);
        }


        $latest = Article::where('status', 'publish')
            ->orderBy('published_at', 'desc')
            ->paginate(8);

        $sidebarLatest = Article::where('status', 'publish')
            ->orderBy('published_at', 'desc')
            ->take(5)
            ->get();

        $sidebarOther = Article::where('status', 'publish')
            ->inRandomOrder()
            ->take(5)
            ->get();

        return view('home', compact(
            'latest',
            'sidebarLatest',
            'sidebarOther',
            'articles',
            'query',
            'categories'
        ));
    }

    public function categoryShow($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        $articles = Article::where('category_id', $category->id)
            ->where('status', 'publish')
            ->latest()
            ->paginate(8);

        $categories = Category::all();
        $latest = $articles; // tampilkan artikel kategori di halaman utama UI

        $sidebarLatest = Article::where('status', 'publish')
            ->orderBy('published_at', 'desc')
            ->take(5)
            ->get();

        $sidebarOther = Article::where('status', 'publish')
            ->inRandomOrder()
            ->take(5)
            ->get();

        return view('home', compact(
            'articles',
            'category',
            'categories',
            'latest',
            'sidebarLatest',
            'sidebarOther'
        ));
    }
}
