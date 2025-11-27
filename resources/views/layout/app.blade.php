<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Depok News - @yield('title')</title>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSQjw2EyrAyKxwzu3HBwxbGydmAPPbeQ4&callback=initMap" async defer></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    @stack('styles')
</head>
<body>

    {{-- Navbar (otomatis di semua halaman) --}}
    @include('components.navbar')

    {{-- Konten halaman --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer (kalau ada) --}}
    @include('components.footer')

    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
    @yield('map_script')
</body>
</html>
