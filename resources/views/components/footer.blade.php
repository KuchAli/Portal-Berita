{{-- resources/views/partials/footer.blade.php --}}
<footer class="bg-dark text-light pt-5 pb-3 mt-5">
    <div class="container">

        <div class="row">

            {{-- Logo & Deskripsi --}}
            <div class="col-md-4 mb-4">
                <div class="d-flex align-items-center mb-3">
                    <img src="{{  asset('images/logo.png') }}" style="height:96px;" class="me-2" alt="Logo">
                </div>
                <p class="text-muted">
                    Portal berita terpercaya yang menyajikan informasi aktual, tajam, dan berimbang dari seluruh penjuru Nusantara.
                </p>
            </div>

            {{-- Menu Navigasi --}}
            <div class="col-md-2 mb-4">
                <h5 class="fw-bold mb-3">Menu</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{ route('home') }}" class="text-light text-decoration-none">Beranda</a></li>
                    <li class="mb-2"><a href="{{ route('populer') }}" class="text-light text-decoration-none">Populer</a></li>
                    <li class="mb-2"><a href="{{ route('terbaru') }}" class="text-light text-decoration-none">Terbaru</a></li>
                    <li class="mb-2"><a href="{{ route('home') }}" class="text-light text-decoration-none">Cari Berita</a></li>
                </ul>
            </div>

            {{-- Kategori Dinamis --}}
            <div class="col-md-3 mb-4">
                <h5 class="fw-bold mb-3">Kategori</h5>
                <ul class="list-unstyled">
                    @if(!empty($categories) && $categories->count())
                        @foreach($categories->take(6) as $cat)
                            <li class="mb-2">
                                <a href="#" class=" text-decoration-none">
                                    {{ $cat->name }}
                                </a>
                            </li>
                        @endforeach
                    @else
                        <li class="text-muted">Tidak ada kategori</li>
                    @endif
                </ul>
            </div>

            {{-- Sosial Media --}}
            <div class="col-md-3 mb-4">
                <h5 class="fw-bold mb-3">Ikuti Kami</h5>
                <p class="text-muted mb-2">Tetap terhubung untuk berita terbaru:</p>
                <div class="d-flex gap-3">
                    <a href="https://web.facebook.com/kampusbsi/?_rdc=1&_rdr#" class="text-light fs-4"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/kuliahbsiaja/" class="text-light fs-4"><i class="bi bi-instagram"></i></a>
                    <a href="https://x.com/bsimargonda_id/status/1458329482452897792" class="text-light fs-4"><i class="bi bi-twitter"></i></a>
                    <a href="https://www.youtube.com/channel/UCoWyVzpEpSx6G8GY89qULPA" class="text-light fs-4"><i class="bi bi-youtube"></i></a>
                </div>
            </div>

        </div>

        <hr class="border-secondary">

        <div class="text-center mt-3">
            <small class="text-muted">
                &copy; {{ date('Y') }} PortalBerita — Semua hak cipta dilindungi.
            </small>
        </div>
    </div>
</footer>
