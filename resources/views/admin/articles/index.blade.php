@extends('admin.layouts.main')

@section('admin-content')
<div class="container mx-auto px-4">
    <div class="flex items-center justify-between mt-6 mb-6">
        <h1 class="text-2xl font-bold">Articles</h1>
        <a href="{{ route('admin.articles.create') }}" class="px-4 py-2 btn btn-secondary text-white rounded hover:bg-green-700 px-4 py-2 rounded-lg shadow mt-4">Tambah Article</a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($articles as $article)
        <div class="border rounded-lg shadow hover:shadow-lg overflow-hidden">
            @if($article->thumbnail)
                <img src="{{ asset('storage/'.$article->thumbnail) }}" alt="{{ $article->title }}" class="w-full h-48 object-cover">
            @else
                <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-500">
                    No Image
                </div>
            @endif

            <div class="p-4">
                <h2 class="font-bold text-lg mb-1">{{ $article->title }}</h2>
                <p class="text-gray-600 text-sm mb-2">{{ $article->category?->name ?? 'No Category' }}</p>
                <p class="mb-2">
                    @if($article->status == 'publish')
                        <span class="text-green-600 font-semibold">Published</span>
                    @else
                        <span class="text-gray-600 font-semibold">Draft</span>
                    @endif
                </p>
                <div class="flex gap-2">
                    <a href="{{ route('admin.articles.edit', $article->id) }}" class="bg-yellow-400 text-white px-3 py-1 rounded hover:bg-yellow-500 text-sm">Edit</a>
                    <form action="{{ route('admin.articles.destroy', $article->id) }}" method="POST" onsubmit="return confirm('Yakin ingin hapus?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 text-sm">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="mt-6">
        {{ $articles->links() }}
    </div>
</div>
@endsection
