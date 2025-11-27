<!-- resources/views/admin/dashboard.blade.php -->
@extends('admin.layouts.main')

@section('title', 'Dashboard Admin')

@section('admin-content')
<div class="container-fluid py-4">
    <h1 class="fw-bold fs-2 mb-4">Dashboard Admin DepokNews</h1>

    <!-- Statistik Cards -->
    <div class="row g-4">
        <div class="col-md-3">
            <div class="card shadow-sm border-0 p-3">
                <h5>Total Berita</h5>
                <h2>{{ $totalArticles ?? 0 }}</h2>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm border-0 p-3">
                <h5>Total Kategori</h5>
                <h2>{{ $totalCategories ?? 0 }}</h2>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm border-0 p-3">
                <h5>Total Pengguna</h5>
                <h2>{{ $totalUser ?? 0 }}</h2>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm border-0 p-3">
                <h5>Berita published</h5>
                <h2>{{ $published?? 0 }}</h2>
            </div>
        </div>
    </div>

    <!-- Grafik atau Tabel -->
    <div class="row mt-5">
        <div class="col-lg-8">
            <div class="card shadow-sm border-0 p-3">
                <h5 class="fw-semibold mb-3">Berita Terbaru</h5>
                <div class="d-flex flex-column gap-3">
                    @forelse($beritaTerbaru ?? [] as $b)
                    <div class="p-3 border rounded shadow-sm bg-light">
                        <h5 class="mb-1 fw-bold">{{ is_object($b) && isset($b->title) ? $b->title : 'Judul tidak tersedia' }}</h5>

                        <p class="mb-1">
                            Kategori: <strong>{{ optional($b->category)->name ?? 'Tidak ada kategori' }}</strong>
                        </p>

                        <p class="mb-1">
                            Penulis: <strong>{{ optional($b->user)->name ?? 'Tidak ada penulis' }}</strong>
                        </p>

                        <p class="text-muted mb-0">
                            {{ optional($b->created_at)->format('d M Y') ?? 'Tanggal tidak tersedia' }}
                        </p>


                    </div>
                    @empty
                    <p class="text-center py-3">Belum ada berita</p>
                    @endforelse
                </div>
                 <div class="mt-6">
                    {{ $beritaTerbaru->links() }}
                </div>
            </div>
        </div>
        </div>

       <div class="col-lg-4 mt-5">
            <div class="card shadow-sm border-0 p-3">
                <h5 class="fw-semibold mb-3">Komentar Terbaru</h5>
                <ul class="list-group">
                    @forelse($comments  as $comment)
                        <li class="list-group-item">
                            <strong>{{ optional($comment)->name ?? 'Guest' }}:</strong>
                            <p class="mb-0 text-sm">{{ Str::limit(optional($comment)->body ?? 'Komentar tidak tersedia', 50) }}</p>
                            <small class="text-muted">{{ optional($comment)->created_at->diffForHumans() ?? 'Waktu tidak tersedia' }}</small>
                        </li>
                    @empty
                        <li class="list-group-item text-center">Belum ada komentar</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
