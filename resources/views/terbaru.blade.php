@extends('layout.app')

@section('title', 'Berita Terbaru')

@section('content')

<!-- HERO TITLE -->
<div class="bg-gray-100 py-8 mb-6 border-b">
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold text-gray-800">Berita Terbaru</h1>
        <p class="text-gray-600 mt-1">Update informasi terkini hari ini</p>
    </div>
</div>

<!-- LIST BERITA -->
<div class="container mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        @foreach($latest as $item)
        <div class="bg-white rounded-lg shadow hover:shadow-md transition overflow-hidden">
            
            <!-- Thumbnail -->
            <a href="{{ route('article.detail', $item->slug) }}">
                <img 
                    src="{{ asset('storage/'.$item->thumbnail) }}" 
                    class="w-full h-48 object-cover"  style="width: 1270px; height: 540px;"
                    alt="{{ $item->title }}">
            </a>

            <!-- Content -->
            <div class="p-4">
                <a href="{{ route('article.detail', $item->slug) }}" class="text-decoration-none">
                    <h2 class="text-lg font-semibold text-gray-800 hover:text-blue-600 leading-tight">
                        {{ Str::limit($item->title, 70) }}
                    </h2>
                </a>

                <p class="text-gray-500 text-sm mt-2">
                    {{ $item->published_at ? $item->published_at->format('d M Y') : '-' }}
                </p>

                <p class="text-gray-600 text-sm mt-2">
                    {{ Str::limit(strip_tags($item->content), 50000000) }}
                </p>
            </div>

        </div>
        @endforeach

    </div>

    <!-- PAGINATION -->
    <div class="mt-8">
        {{ $latest->links() }}
    </div>

</div>

@endsection
