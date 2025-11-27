@extends('layout.app')

@section('title', 'Beranda')



@section('content')
{{-- HERO SECTION --}}
<section class="bg-gray-100 py-8">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-3xl font-bold text-gray-800 mb-3">Selamat Datang di DepokNews</h1>
        <p class="text-gray-600 text-base">Portal berita terpercaya, cepat, dan akurat.</p>
    </div>
</section>

{{-- LIST BERITA --}}
<section class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        {{-- KOLOM KIRI (2 kolom) --}}
        <div class="md:col-span-2 mb-4">
            <h2 class="text-xl font-bold mb-5 text-gray-800 border-b">Berita Terbaru</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach ($articles as $item)
                    <div class="bg-white rounded-lg shadow hover:shadow-md transition-shadow duration-300 overflow-hidden">
                        {{-- PERUBAHAN DI SINI: height gambar diperkecil --}}
                        <img src="{{ asset('storage/' . $item->thumbnail) }}"
                             class="rounded-t-lg h-32  w-full object-cover" > {{-- h-48 diubah jadi h-32 --}}
                        
                        <div class="p-4">
                            <span class="text-xs bg-blue-100 text-blue-600 px-2 py-1 rounded">{{ $item->category->name ?? 'Umum' }}</span>
                            <h3 class="font-semibold text-base mt-2">
                                <a href="{{ route('article.detail', $item->slug) }}"
                                   class="hover:text-blue-600 text-gray-800 text-decoration-none">
                                    {{ $item->title }}
                                </a>
                            </h3>
                            <p class="text-gray-500 text-sm mt-2">
                                {{ Str::limit(strip_tags($item->content), 100) }}
                            </p>
                            <div class="flex items-center mt-3 text-xs text-gray-400">
                                <span>{{ $item->created_at->diffForHumans() }}</span>
                                <span class="mx-2">•</span>
                                <span>{{ $item->views }} dibaca</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-6">
                {{ $articles->links() }}
            </div>
        </div>

        {{-- KOLOM KANAN (SIDEBAR) --}}
        <div>
            {{-- Sidebar Berita Terbaru --}}
            <div class="bg-white p-4 rounded-lg shadow mb-6">
                <h3 class="text-base font-semibold mb-3 text-gray-800 border-b pb-2">Berita Terbaru</h3>
                <ul class="space-y-3">
                    @foreach ($sidebarLatest as $news)
                        <li>
                            <a href="{{ route('article.detail', $news->slug) }}"
                               class="hover:text-blue-600 text-sm text-gray-700 flex items-start text-decoration-none">
                                <img src="{{ asset('storage/' . $news->thumbnail) }}" alt="" style="width: 30px; height: 20px; object-fit: cover; margin-right: 5px;">
                                <span>{{ Str::limit($news->title, 60) }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Sidebar Berita Lainnya --}}
            <div class="bg-white p-4 rounded-lg shadow mb-6">
                <h3 class="text-base font-semibold mb-3 text-gray-800 border-b pb-2">Berita Lainnya</h3>
                <ul class="space-y-3">
                    @foreach ($sidebarOther as $news)
                        <li>
                            <a href="{{ route('article.detail', $news->slug) }}"
                               class="hover:text-blue-600 text-sm text-gray-700 flex items-start text-decoration-none">
                                 <img src="{{ asset('storage/' . $news->thumbnail) }}" alt="" style="width: 30px; height: 20px; object-fit: cover; margin-right: 5px;">
                                <span>{{ Str::limit($news->title, 60) }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection