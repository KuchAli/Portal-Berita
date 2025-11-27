<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::with('category', 'user')->latest()->paginate(12);
        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.articles.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required',
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'published_at' => 'nullable|date',
            'tags' => 'nullable|string',
            'status' => 'required|in:draft,publish'
        ]);

        $data = $request->only(['title', 'content', 'category_id', 'tags', 'status', 'published_at']);
        $data['user_id'] = $request->user()->id;

        if ($request->hasFile('thumbnail')) {
            $path = $request->file('thumbnail')->store('articles', 'public');
            $data['thumbnail'] = $path;
        }

        // Slug unik
        $data['slug'] = Str::slug($request->title) . '-' . Str::random(4);

        // Jika tags kosong, set ke array kosong
        if (!empty($data['tags'])) {
            $data['tags'] = array_map('trim', explode(',', $data['tags']));
        } else {
            $data['tags'] = [];
        }

        Article::create($data);

        return redirect()->route('admin.articles.index')->with('success', 'Artikel dibuat');
    }

    public function edit(Article $article)
    {
        $categories = Category::all();
        return view('admin.articles.edit', compact('article', 'categories'));
    }

    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required',
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'published_at' => 'nullable|date',
            'tags' => 'nullable|string',
            'status' => 'required|in:draft,publish'
        ]);

        $data = $request->only(['title', 'content', 'category_id', 'tags', 'status', 'published_at']);

        if ($request->hasFile('thumbnail')) {
            if ($article->thumbnail) Storage::disk('public')->delete($article->thumbnail);
            $path = $request->file('thumbnail')->store('articles', 'public');
            $data['thumbnail'] = $path;
        }

        // Hanya ubah slug jika title berubah
        if ($article->title !== $request->title) {
            $data['slug'] = Str::slug($request->title) . '-' . Str::random(4);
        }

        // Handle tags
        if (!empty($data['tags'])) {
            $data['tags'] = array_map('trim', explode(',', $data['tags']));
        } else {
            $data['tags'] = [];
        }

        $article->update($data);

        return redirect()->route('admin.articles.index')->with('success', 'Artikel diperbarui');
    }

    public function destroy(Article $article)
    {
        if ($article->thumbnail) {
            Storage::disk('public')->delete($article->thumbnail);
        }

        $article->delete();

        return redirect()->route('admin.articles.index')->with('success', 'Artikel dihapus');
    }
}
