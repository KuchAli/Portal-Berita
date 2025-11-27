📰 Portal Berita Sederhana – Laravel

Portal berita sederhana berbasis Laravel dengan fitur manajemen artikel, kategori, komentar, dan pengaturan website melalui dashboard admin.


🚀 Fitur Utama
Frontend (Publik)

1.Menampilkan daftar berita terbaru
2.Halaman detail artikel
3.Pencarian artikel
4.Filter berdasarkan kategori
5.Komentar pada artikel (opsional, jika diaktifkan)
6.Tampilan responsif

Backend (Admin Panel)

1.CRUD Artikel
2.CRUD Kategori
3.CRUD User Admin
4.Manajemen Komentar (Pantau & Hapus)
5.Fitur publish/unpublish artikel
6.Upload thumbnail

🛠️ Teknologi yang Digunakan

1.Laravel 10 / Laravel 11
2.MySQL / MariaDB
3.Bootstrap 5
4.Blade Template
5.Laravel Breeze / Auth lainnya (opsional)

📦 Instalasi

Ikuti langkah berikut untuk menjalankan project:

1️⃣ Clone Repository

git clone https://github.com/username/repo-portal-berita.git
cd repo-portal-berita

2️⃣ Install Dependency

composer install
npm install
npm run build


3️⃣ Copy & Konfigurasi Environment

cp .env.example .env
php artisan key:generate

Sesuaikan bagian database:


4️⃣ Migrasi Database

php artisan migrate

6️⃣ Jalankan Server

php artisan serve



