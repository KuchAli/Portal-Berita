{{-- resources/views/partials/navbar.blade.php --}}
<style>
  .navbar-nav .nav-link.active {
      border-bottom: 2px solid black; /* garis bawah hitam */
      color: inherit; /* biar warna teks tetap */
  }
  .dropdown-menu .dropdown-item.active {
      border-bottom: 2px solid black; /* untuk item dropdown */
  }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
  <div class="container">
    {{-- Logo / Brand --}}
    <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
      <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height:77px;" class="me-2">
    </a>

    {{-- Toggle (mobile) --}}
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
            aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    {{-- Navbar links --}}
    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        {{-- Home --}}
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ url('/') }}">Beranda</a>
        </li>

        {{-- Topik / Sections dropdown (example static + dynamic) --}}
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle {{ request()->is('topik*') ? 'active' : '' }}" href="#" id="topicsDropdown"
             role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Topik
          </a>
          <ul class="dropdown-menu" aria-labelledby="topicsDropdown">
            <li><a class="dropdown-item {{ request()->routeIs('populer') ? 'active' : '' }}" href="{{ route('populer') }}">Populer</a></li>
            <li><a class="dropdown-item {{ request()->routeIs('terbaru') ? 'active' : '' }}" href="{{ route('terbaru') }}">Terbaru</a></li>
          </ul>
        </li>

        {{-- Kategori dinamis (tampilkan maksimal 5, sisanya di "Lainnya") --}}
        @php
            $visibleCategories = $categories ?? collect();
        @endphp

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="categoryDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Kategori
            </a>
            <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
                @forelse($visibleCategories as $cat)
                    <li>
                        <a class="dropdown-item {{ request()->routeIs('category.show') && request()->segment(2) == $cat->slug ? 'active' : '' }}"
                          href="{{ route('category.show', $cat->slug) }}">
                          {{ $cat->name }}
                        </a>
                    </li>
                @empty
                    <li><span class="dropdown-item text-muted">Tidak ada kategori</span></li>
                @endforelse
            </ul>
        </li>
      </ul>

      {{-- Search form --}}
      <form class="d-flex me-3" method="GET" action="{{ route('home') }}">
        <input class="form-control me-1 " type="search" name="q" value="{{ request('q') }}" placeholder="Cari berita..." aria-label="Search">
        <button class="btn btn-outline-primary btn-sm" type="submit"><i class="bi bi-search"></i></button>
      </form>

      {{-- Auth links / User dropdown --}}

      @guest
        <div class="d-flex">
          <a href="{{ route('login') }}" class="btn btn-outline-secondary me-2">Masuk</a>
          <a href="{{ route('register') }}" class="btn btn-primary">Daftar</a>
        </div>
      @else
        <div class="dropdown">
            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button class="btn btn-danger" type="submit">Keluar</button>
            </form>
        </div>
      @endguest

    </div>
  </div>
</nav>
