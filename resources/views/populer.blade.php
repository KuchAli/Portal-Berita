@extends('layout.app')

@section('title', 'Berita Populer')

@section('content')
    

    <section class="container mx-auto px-4 py-10">
        <h2 class="text-2xl font-bold mb-4 border-b pb-2">
            Berita Populer
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">

            @forelse ($popularNews as $pop)
                <div class="bg-white shadow rounded overflow-hidden hover:shadow-lg transition">

                    {{-- Thumbnail --}}
                    @if ($pop->thumbnail)
                        <a href="{{ route('article.detail', $pop->slug) }}">
                            <img src="{{ asset('storage/' . $pop->thumbnail) }}"
                                class="w-full h-40 object-cover"
                                alt="{{ $pop->title }}">
                        </a>
                    @endif

                    {{-- Content --}}
                    <div class="p-4">
                        <a href="{{ route('article.detail', $pop->slug) }}"
                        class="font-semibold text-lg hover:text-blue-600">
                            {{ Str::limit($pop->title, 60) }}
                        </a>

                        <p class="text-gray-500 text-sm mt-2">
                            {{ number_format($pop->views) }}x dibaca •
                            {{ $pop->created_at->diffForHumans() }}
                        </p>
                    </div>

                </div>
            @empty
                <p class="text-gray-500">Belum ada berita populer.</p>
            @endforelse

        </div>
    </section>

@endsection