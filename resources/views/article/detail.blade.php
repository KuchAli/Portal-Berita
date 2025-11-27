@extends('layout.app') {{-- Layout publik --}}

@section('content')
<div class="container mx-auto px-4 py-8">

    {{-- Thumbnail --}}
    @if($article->thumbnail)
        <img src="{{ asset('storage/' . $article->thumbnail) }}" 
             alt="{{ $article->title }}" 
             class="w-full h-96 object-cover rounded-lg mb-6">
    @endif

    {{-- Judul --}}
    <h1 class="text-4xl font-bold mb-4">{{ $article->title }}</h1>

    {{-- Meta --}}
    <div class="flex flex-wrap items-center text-gray-600 text-sm mb-6 gap-4">
        <span>Category: <strong>{{ $article->category?->name ?? 'Uncategorized' }}</strong></span>
        @if($article->published_at)
            <span>Published: <strong>{{ $article->published_at->format('d M Y, H:i') }}</strong></span>
        @endif
    </div>

    {{-- Tags --}}
    @if($article->tags && count($article->tags))
        <div class="mb-6">
            @foreach($article->tags as $tag)
                <span class="inline-block bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-xs mr-2 mb-2">{{ $tag }}</span>
            @endforeach
        </div>
    @endif

    {{-- Content --}}
    <div class="prose max-w-none mb-10">
        {!! $article->content !!}
    </div>

    {{-- Komentar (Opsional) --}}
    <h3 class="text-xl font-semibold mb-4">Komentar</h3>

    <div class="space-y-4">
        @forelse($comments as $comment)
            <div class="border rounded p-4">
                <p class="text-sm text-gray-600 mb-1">
                    <strong>{{ $comment->name ?? 'Guest' }}</strong> • 
                    <small>{{ $comment->created_at->diffForHumans() }}</small>
                </p>
                <p>{{ $comment->body }}</p>
            </div>
        @empty
            <p class="text-gray-500">Belum ada komentar.</p>
        @endforelse
    </div>

    {{-- Form tambah komentar --}}
    @auth
        <form action="{{ route('article.comment', $article->id) }}" method="POST" class="mt-6">
            @csrf
            <textarea name="content" rows="3" 
                    class="w-full border rounded p-2" 
                    placeholder="Tulis komentar..." required></textarea>
            <button type="submit" 
                    class="mt-2 bg-gray-500 text-white px-4 py-2 rounded hover:bg-green-600">
                Kirim Komentar
            </button>
        </form>
    @else
        <p class="mt-4 text-gray-500">Silakan <a href="{{ route('login') }}" class="text-blue-500 underline">login</a> untuk berkomentar.</p>
    @endauth

</div>
@endsection
