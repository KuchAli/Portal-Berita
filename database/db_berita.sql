-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 27, 2025 at 07:46 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_berita`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` json DEFAULT NULL,
  `status` enum('draft','publish') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'draft',
  `views` bigint UNSIGNED NOT NULL DEFAULT '0',
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `user_id`, `category_id`, `title`, `slug`, `content`, `thumbnail`, `tags`, `status`, `views`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Esports Indonesia Melesat Maju', 'esports-indonesia-melesat-maju-lOKC', 'Ketua Marvellous (MLS) Esport Kalimantan Selatan (Kalsel) HM Lutfi Saifuddin SSos menyatakan, kegiatan esport pada komunitasnya juga mengedepankan pendidikan karakter.\r\n\r\n\r\n\"Kegiatan esport yang ada di kami bukan hanya fokus pada latihan dan pertandingan games, tetapi juga mengedepankan pendidikan karakter melalui kegiatan sosial dan pendidikan,\" tegasnya melalui WA, Ahad (12/12).\r\nSebagai contoh kegiatan sosial berupa donor darah dalam rangka Hari Ulang Tahun (HUT) ke-12 Organisasi Masyarkat (Ormas) Orang Indonesia (OI) di Kota Banjarmasin, Sabtu (11/12).', 'articles/li4QXXs0KUW1V4Dp2gQSaLyUznYKyvaVBaZL7TML.jpg', '[\"indonesia\", \"ewc\"]', 'publish', 19, '2025-11-23 17:22:00', '2025-11-23 10:17:56', '2025-11-24 01:28:41'),
(2, 2, 2, 'Soto Bu Tjondro', 'soto-bu-tjondro-rEAB', 'Berlokasi di Jl. Sersan Anning No.1, Pancoran Mas, Soto Bu Tjondro menjadi surga bagi pencinta makanan berkuah. Soto yang disajikan memiliki cita rasa gurih dan segar yang khas, dengan harga yang sangat terjangkau mulai dari Rp16.000 hingga Rp29.000 per porsi.\r\n\r\nSelain soto yang menjadi andalan, tempat ini juga menyajikan berbagai menu tradisional lainnya seperti nasi gudeg dan ayam kremes. Jam operasional dari pukul 10.00 hingga 22.00 WIB, namun sebaiknya datang lebih awal saat makan siang karena tempat ini selalu ramai pengunjung.', 'articles/jRrhWrFeMSl6EjAB3Vzd7Vb12T1clwOD5JUO0alC.jpg', '[\"kuliner\"]', 'publish', 0, '2025-11-25 07:26:00', '2025-11-25 00:01:37', '2025-11-25 00:26:27'),
(3, 2, 3, 'Parade Lenong Betawi Depok Tampilkan Cerita Rakyat dengan Sentuhan Modern', 'parade-lenong-betawi-depok-tampilkan-cerita-rakyat-dengan-sentuhan-modern-eqgQ', 'Sebuah parade lenong yang digelar di Gedung Kesenian Depok menyita perhatian pecinta seni. Lima grup lenong lokal tampil membawakan cerita rakyat Betawi dengan sentuhan modern tanpa menghilangkan ciri khas lawakan khas Betawi.\r\n\r\nPenonton tampak antusias menikmati dialog lucu, musik gambang kromong, serta kostum berwarna cerah.\r\nSutradara acara menjelaskan bahwa modernisasi dilakukan untuk menarik minat anak muda\r\n\r\n“Kami tetap mempertahankan bahasa dan musikalitas Betawi, tetapi memberikan alur cerita yang relevan dengan kondisi saat ini,” katanya.\r\nAcara ini diharapkan menjadi pintu masuk regenerasi pelaku seni lenong di Depok.', 'articles/1ErJaXbSidyiCUBIZ8XOX3JAQ0UXofuNVPQXKYaP.webp', '[\"budaya\"]', 'publish', 0, '2025-11-25 07:26:00', '2025-11-25 00:09:49', '2025-11-25 00:26:42'),
(4, 2, 3, 'Rebut Dandang', 'rebut-dandang-ribl', 'Tradisi ini biasanya dilakukan saat acara pernikahan dengan menggabungkan seni beladiri dan pantun.\r\nRebut Dandang ini menggambarkan tentang tantangan dan hambatan yang dihadapi oleh mempelai pria saat akan menikahi mempelai wanita.\r\nProses tradisi ini melibatkan dua jawara dari dua belah pihak lalu melakukan pantun dan adu beladiri. Jawara dari pihak mempelai pria akan merebut dandang dari jawara mempelai wanita.\r\nSetelah berhasil direbut oleh jawara mempelai pria, lalu pasangan pengantin ini akan bersanding yang berarti mempelai pria berhasil menghadapi segala tantangan dan hambatan yang ada.', 'articles/cl4uXrzuI7a6TV4slFcvvtch8SlBN4KBz70Zt410.jpg', '[\"budaya\", \"depok\"]', 'publish', 0, '2025-11-25 07:27:00', '2025-11-25 00:15:03', '2025-11-25 00:27:07'),
(5, 2, 3, 'Sawer Pengantin', 'sawer-pengantin-i0QU', 'Sawer Pengantin ini merupakan adaptasi dari tradisi Sunda.\r\nTradisi ini menyimbolkan pasangan pengantin tidak lupa untuk bersedekah dan berbagi terhadap sesama.\r\nBiasanya Sawer Pengantin ini dilakukan dengan menyebarkan beras, kunyit, permen, atau uang logam setelah prosesi akad nikah dan sungkeman.', 'articles/2W3VJtxhGliSuumSjWFoFRCbqFCDx4JKbjSSQhDz.jpg', '[\"budaya\", \"unik\", \"depok\"]', 'publish', 0, '2025-11-25 07:27:00', '2025-11-25 00:16:40', '2025-11-25 00:27:22'),
(6, 2, 3, 'Ruwahan', 'ruwahan-0jyZ', 'Ruwahan atau rowahan adalah tradisi masyarakat Betawi Depok yang dilakukan di akhir bulan Syaban.\r\nTujuan dari tradisi ini untuk mendoakan arwah leluhur. Rangkaian tradisi ini biasanya diisi dengan pembacaan doa, tahlil, dan Yasin.\r\nSelain itu terdapat makanan yang disuguhkan seperti tape uli, geplak, dan camilan lainnya.', 'articles/z8xJC4PnGTxinJ4rkzAZtnGQaWMNTWZtAjF9Evie.jpg', '[\"budaya\", \"unik\"]', 'publish', 0, '2025-11-25 07:28:00', '2025-11-25 00:19:16', '2025-11-25 00:27:53'),
(7, 2, 3, 'Gong Sibolong', 'gong-sibolong-NSJ2', 'Gong Si Bolong merupakan alat kesenian berupa gong yang berbentuk bolong di bagian tengah asal Depok, Jawa Barat.\r\nKesenian Gong Si Bolong terbentuk berawal dari penemuan seperangkat alat musik tradisional Sunda yang ditemukan oleh alim ulama asal Cianjur, Pak Jimin, pada tahun 1648 di Kampung Tanah Baru, Depok.\r\nSejarah tersebut diceritakan Buang Jayadi selaku pewaris Gong Si Bolong.', 'articles/2zU36RMc8QmGrpkXIiRA90qaOS12A26ffJtiKSdE.webp', '[\"budaya\", \"unik\", \"depok\"]', 'publish', 0, '2025-11-25 07:29:00', '2025-11-25 00:20:40', '2025-11-25 00:28:10'),
(8, 2, 3, 'Andilan', 'andilan-55qz', 'Tradisi Motong Kebo Andil merupakan salah satu warisan budaya masyarakat Betawi Depok yang sarat dengan nilai kebersamaan.\r\nWali Kota Depok, Supian Suri menyebut, tradisi Motong Kebo Andil atau Andilan sebagai bentuk gotong royong warga yang secara kolektif membeli seekor kerbau untuk dipotong bersama menjelang lebaran.\r\n“Andilan ini bernilai gotong royong, kebersamaan, dan cita-cita kita sebagai warga Depok. Dahulu, jika ingin makan daging, tidak bisa sendiri, tapi harus bersama-sama, patungan saling mengambil peran,” ujar Supian, dilansir dari situs resmi Pemkot Depok.', 'articles/9kWoJVyGUelcdQeNHEiEzWA4fo49NJzWFidR8h98.webp', '[\"budaya\", \"unik\", \"depok\"]', 'publish', 0, '2025-11-25 07:29:00', '2025-11-25 00:22:21', '2025-11-25 00:28:26'),
(9, 2, 3, 'Nyorog', 'nyorog-h72V', 'Ketua Kumpulan Orang-Orang Depok (KOOD) Kota Depok, Ahmad Dahlan mengatakan, tradisi nyorog dilakukan orang Depok terdahulu setiap perayaan Lebaran Depok.\r\nTradisi tersebut dilakukan dengan membawa makanan kepada orang tua dan pimpinan daerah di Kota Depok.\r\n\"Makanan yang kami serahkan ini berupa makanan khas Depok,\" tuturnya saat menyerahkan rantangan yang berisi makanan kepada Wali Kota Depok, Mohammad Idris.\r\nBaba Dahlan, sapaan akrabnya menambahkan, nyorog ini juga sebagai simbol masyarakat Depok yang menghormati orang tua dan pimpinan daerah.\r\n\"Tolong diterima, mudah-mudahan makanannya enak. Dengan nyorog ini mari kita rawat sama-sama budaya Depok,\" tambahnya.\r\nSementara itu, Wali Kota Depok Mohammad Idris mengucapkan terima kasih kepada pengurus KOOD yang sudah memberikan makanan sebagai tradisi nyorog tersebut.\r\n\"Alhamdulillah, kami yang menerima nyorog haturkan terima kasih,\" pungkasnya.', 'articles/E6vS2uXRB3FEPmmbcv44FvIvXkXTXhvqEknh60W2.jpg', '[\"budaya\", \"unik\"]', 'publish', 0, '2025-11-25 07:30:00', '2025-11-25 00:23:19', '2025-11-25 00:28:50'),
(10, 2, 3, 'Ngored', 'ngored-NUDK', 'Tidak diketahui sejak kapan orang Betawi memulai tradisi bebersih kubur. Namun hal pasti yang dikatakan di sini bahwa orang Betawi memiliki pemahaman bahwa manusia tercipta dari tanah dan akan kembali ke tanah.\r\nOleh karena, dahulu kita menyaksikan bahwa orang Betawi banyak memiliki tanah luas. Tanah itu untuk diwariskan kepada anak cucu dan generasi sesudahnya, bukan untuk dijual.\r\nKarena itu, dahulu dan mungkin hingga kini masih kita temukan adanya kuburan di dekat rumah.\r\nHal itu memudahkan bagi orang atau keluarga Betawi untuk sesering mungkin datang ke kuburan untuk berziarah dan bebersih atau Ngored rerumputan atau ilalang kuburan orang tua dan makam keluarganya.\r\nSetelah kuburan dikoredin dan bersih mereka membaca surat Yasin dan berdo’a untuk orang yang sudah meninggal.\r\nMereka berharap orang-orang yang mereka sayangi, diampuni segala dosa dan kekhilafannya.', 'articles/k0ihSGu1uNrhL9tu5HRi8dnG3nYBfCn523lQX4Yk.webp', '[\"budaya\", \"unik\", \"depok\"]', 'publish', 1, '2025-11-25 07:31:00', '2025-11-25 00:25:17', '2025-11-25 21:45:53'),
(11, 2, 5, 'Kampung 99 Pepohonan', 'kampung-99-pepohonan-dZR5', 'Tempat wisata alam pertama yang bisa dikunjungi adalah Kampung 99 Pepohonan. Berlokasi di Kecamatan Limo, tempat wisata ini menawarkan berbagai kegiatan seru yang bisa dicoba, seperti outbound hingga berinteraksi dengan hewan ternak.\r\nDi sini, tersedia beberapa paket wisata yang bisa dipilih seperti memerah susu sapi, memerah susu kambing, mencukur domba, memberi makan hewan ternak, memandikan hewan ternak, hingga memanen sayuran di kebun.\r\nBerbagai kegiatan menarik seputar peternakan dan perkebunan ini bisa dicoba saat berkunjung ke Kampung 99 Pepohonan. Suasana alam yang menyegarkan dengan pepohonan yang rimbun membuat suasana jadi lebih teduh dan asri.', 'articles/2ZTDJEd5yST4L6tqiRKKux7uiWZmN2Cqji1XDr5b.jpg', '[\"wisata\"]', 'publish', 0, '2025-11-26 14:54:00', '2025-11-25 00:36:59', '2025-11-26 07:58:56'),
(12, 2, 5, 'Godong Ijo Depok', 'godong-ijo-depok-R3RL', 'Godong Ijo menawarkan tempat wisata alam dengan konsep hutan di tengah kota.\r\nTempat wisata ini dinobatkan sebagai amazing garden se-Asia Tenggara dan dilengkapi dengan sejumlah fasilitas yang menambah kenyamanan para pengunjung.\r\nFasilitas seperti kolam pemancingan, restoran, ruang serbaguna, hingga program eco-tainment dan vertical garden center tersedia di sini.\r\nPengunjung bisa menikmati suasana alam yang menyegarkan sambil mencoba berbagai aktivitas menarik, seperti memancing maupun melihat aneka satwa.', 'articles/aypUJHVco5ZTv71ArXHl4aAqXgfhY4NtBzIetwBS.webp', '[\"wisata\"]', 'publish', 0, '2025-11-26 14:56:00', '2025-11-25 00:38:52', '2025-11-26 07:59:05'),
(13, 2, 1, 'D’Kandang Amazing Farm', 'dkandang-amazing-farm-OeCh', 'Selanjutnya ada tempat wisata alam yang menawarkan wisata edukasi seru untuk anak-anak yaitu D’Kandang Amazing Farm.\r\nDikelilingi pepohonan yang hijau, tempat wisata ini menghadirkan berbagai wahana permainan dan aktivitas seru yang bisa dicoba.\r\nBerbagai wahana edukasi, wahana bermain, dan wahana kreasi bisa dinikmati dengan membayar tiket tambahan.\r\nAdapun wahana tersebut seperti memanah, beri pakan kuda, flying fox, ATV, tangkap ikan, hingga mencoba bercocok tanam di mini farm.', 'articles/WzeDBF31dLaJDHkHnIrM710ibxw8UdhlKcWsMoNe.jpg', '[\"wisata\"]', 'publish', 0, '2025-11-26 14:56:00', '2025-11-25 00:42:10', '2025-11-26 07:59:13'),
(14, 2, 5, 'Taman Lembah Gurame', 'taman-lembah-gurame-MIod', 'Taman Lembah Gurame menjadi salah satu taman yang dilabeli dengan julukan sebagai taman terbuka terbesar di Depok.\r\nTak heran, jika taman ini selalu menjadi perbincangan banyak orang, tak hanya oleh masyarakat kota Depok tapi juga kota-kota yang ada di sekitarnya.\r\nPenamaan kata gurame di dalamnya bukan berarti di dalamnya terdapat ikan gurame atau taman ini berbentuk seperti ikan gurame, ya!', 'articles/7b0xgzXMXpiMhEfdU2oFYzzjd65rCQsjyvlGSEic.jpg', '[\"wisata\"]', 'publish', 0, '2025-11-26 14:58:00', '2025-11-25 00:43:24', '2025-11-26 07:59:20'),
(15, 2, 5, 'Taman Wisata Pasir Putih', 'taman-wisata-pasir-putih-dfGX', 'Taman Wisata Pasir Putih Depok bisa menjadi pilihan liburan keluarga yang menyenangkan. Terutama untuk warga Ibu Kota, pilihan wisata satu ini tentunya sangat menarik, karena selain cocok untuk keluarga, lokasinya juga tidak begitu jauh.\r\nPasir Putih ini berlokasi di Sawangan, Depok, Jawa Barat. Tempat rekreasi ini menawarkan berbagai pengalaman bermain dan liburan bagi anak-anak maupun dewasa.\r\nDengan harga tiket yang juga murah kamu bisa menikmati segala permainan yang disediakan.\r\nTaman Wisata Pasir Putih Depok memiliki berbagai wahana dan fasilitas yang seru.\r\nDari wahana permainan air dan outbond untuk anak-anak, hingga bungalow, karaoke, kolam pemancingan, dan lapangan futsal untuk remaja dan orang dewasa bisa dijadikan untuk seru-seruan.', 'articles/cqA8IXPX7hBtjxtegB8Bq46iiIk6VskTYOCKhNJt.jpg', '[\"wisata\"]', 'publish', 0, '2025-11-26 14:59:00', '2025-11-25 00:44:11', '2025-11-26 07:59:28'),
(16, 2, 2, 'Dodol Depok', 'dodol-depok-76kL', 'Dodol Depok adalah varian dodol khas dari kota Depok, Jawa Barat. Camilan manis dan kenyal ini memiliki ciri khas penggunaan bahan baku lokal yang sering kali membedakannya dari dodol daerah lain, seperti dodol Betawi atau dodol Garut. \r\nCiri khas Dodol Depok biasanya melibatkan penggunaan buah-buahan atau bahan pangan lokal yang melimpah di daerah tersebut, seperti:\r\n\r\nDodol Belimbing: Depok dikenal sebagai \"Kota Belimbing\", sehingga varian dodol yang menggunakan sari atau daging belimbing menjadi yang paling ikonik dan dicari [1]. Rasanya unik, manis dengan sedikit sentuhan rasa buah belimbing yang khas.\r\n\r\nDodol Jambu Biji Merah: Varian populer lainnya yang memanfaatkan hasil panen lokal.', 'articles/Itr8TsCU7EgRefiNuT81IypMX3USXpXTJXrsxbxn.jpg', '[\"kuliner\"]', 'publish', 0, '2025-11-26 15:31:00', '2025-11-26 08:21:11', '2025-11-26 08:31:32'),
(17, 2, 2, 'Opak Depok', 'opak-depok-VcZC', 'Opak Depok umumnya merujuk pada opak singkong yang dijual dan diproduksi oleh berbagai penjual di Kota Depok. Meskipun opak sendiri merupakan kudapan khas Sunda atau Jawa Barat yang terbuat dari tepung beras atau ketan, varian yang banyak ditemui di Depok sering berbahan dasar singkong dan dijual sebagai oleh-oleh atau camilan rumahan. \r\nKarakteristik Opak Depok:\r\n\r\nBahan Utama: Sebagian besar terbuat dari singkong pilihan, berbeda dengan opak tradisional Sunda yang berbahan dasar tepung beras/ketan.\r\n\r\nRasa dan Tekstur: Memiliki rasa gurih dan tekstur yang renyah setelah digoreng.\r\n\r\nVarian: Tersedia dalam bentuk mentah siap goreng atau sudah matang dengan berbagai pilihan rasa seperti original, pedas, dan kadang-kadang rasa balado.\r\n\r\nOleh-oleh Khas: Meskipun Depok lebih dikenal dengan oleh-oleh khas belimbing dewa, opak singkong juga merupakan salah satu produk UMKM lokal yang populer di sana.', 'articles/xqmLjHPgBtX43s5PeERzmc6TFo2CyGfVA5EHscjN.jpg', '[\"kuliner\", \"opak\"]', 'publish', 0, '2025-11-26 15:31:00', '2025-11-26 08:25:42', '2025-11-26 08:31:18'),
(18, 2, 2, 'Kue Cincin Depok', 'kue-cincin-depok-QWbO', 'Kue cincin adalah jajanan tradisional Indonesia yang populer, terutama sebagai kudapan khas Betawi, Sunda (dikenal sebagai Ali Agrem), dan Banjar (dikenal sebagai Wadai Cincin). Kue ini memiliki bentuk unik menyerupai cincin dan rasa manis yang khas. \r\nKarakteristik Utama\r\nBahan Utama: Umumnya terbuat dari campuran tepung beras, tepung ketan, gula merah, dan santan atau kelapa parut sangrai.\r\nRasa dan Tekstur: Rasanya manis legit, dengan tekstur yang bisa renyah di luar namun lembut di dalam. Teksturnya sangat dipengaruhi oleh perbandingan bahan-bahan seperti tepung dan santan.\r\nVariasi Regional:\r\n\r\nBetawi: Dibuat dengan tepung beras, tepung ketan, dan gula merah.\r\nSunda (Ali Agrem): Memiliki bentuk yang mirip donat kecil, dengan \"ali\" berarti cincin dalam bahasa Sunda.\r\nBanjar (Wadai Cincin): Sering kali menyertakan kelapa parut dan rempah-rempah dalam adonannya.\r\nPenyajian: Sering dinikmati sebagai camilan atau teman minum kopi/teh, dan dapat bertahan hingga beberapa hari jika disimpan dengan baik.', 'articles/JlAwfSuIrElDvWYGD4ytIhWaca2zeXZ4cFyHegOn.jpg', '[\"kuliner\"]', 'publish', 1, '2025-11-26 15:30:00', '2025-11-26 08:28:08', '2025-11-26 08:33:21'),
(19, 2, 2, 'Kue Lupis Depok', 'kue-lupis-depok-oFS4', 'Kue lupis adalah kue manis tradisional Indonesia yang terbuat dari beras ketan, kelapa parut, dan saus gula merah (gula aren cair). Hidangan ini adalah jajanan pasar populer yang dikenal karena teksturnya yang kenyal dan rasanya yang manis-gurih. \r\n\r\nKarakteristik Utama\r\nBahan Dasar: Bahan utamanya adalah beras ketan, yang memberikan tekstur kenyal dan padat.\r\nBentuk dan Warna: Lupis biasanya dibungkus dan dimasak dalam daun pisang, sering kali dibentuk menjadi segitiga atau silinder panjang seperti lontong, dan memiliki warna kehijauan alami dari daun pisang atau tambahan pasta pandan.\r\n\r\nPenyajian: Lupis disajikan dengan taburan kelapa parut kasar yang telah diberi sedikit garam, dan disiram dengan saus gula merah yang kental dan manis.\r\nRasa: Rasanya merupakan perpaduan unik antara gurih dari kelapa dan ketan, serta manis legit dari saus gula aren.', 'articles/tbMNKieSzCl2Q3uDB5ckOH8jDq9AN6rfO0BMETVL.jpg', '[\"kuliner\", \"lupis\"]', 'publish', 0, '2025-11-26 15:30:00', '2025-11-26 08:30:16', '2025-11-26 08:30:44');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Olahraga', 'olahraga', 'Dalam Kategori Ini meliput berbagai berita seputar olahraga', '2025-11-23 09:41:02', '2025-11-23 09:46:06'),
(2, 'Kuliner', 'kuliner', 'Dalam Kategori Ini meliput berbagai berita seputar kuliner kota depok', '2025-11-24 23:52:25', '2025-11-24 23:52:25'),
(3, 'Budaya', 'budaya', 'Dalam Kategori Ini meliput berbagai berita seputar Budaya', '2025-11-24 23:53:26', '2025-11-24 23:53:26'),
(4, 'Hukum', 'hukum', 'Dalam Kategori Ini meliput berbagai berita seputar kasus yang terjadi di sekitar kota depok', '2025-11-24 23:54:37', '2025-11-24 23:54:37'),
(5, 'Wisata', 'wisata', 'Dalam Kategori Ini meliput berbagai berita seputar kasus yang terjadi di sekitar kota depok', '2025-11-25 00:30:28', '2025-11-25 00:30:28');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `article_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pending','approved','spam') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `article_id`, `user_id`, `name`, `email`, `body`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'Khidir Ali', 'khidirgaminghd@gmail.com', 'hebat banget indo😭😭', 'pending', '2025-11-24 00:30:20', '2025-11-24 00:30:20'),
(2, 1, NULL, 'Khidir Ali', 'khidirgaminghd@gmail.com', 'baguss', 'pending', '2025-11-24 00:31:28', '2025-11-24 00:31:28');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_11_20_131416_create_categories_table', 2),
(5, '2025_11_20_131454_create_articles_table', 2),
(6, '2025_11_20_132548_create_comments_table', 2),
(7, '2025_11_23_152817_create_settings_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('JCstZ7A6AXNzJg1M6LI7wO7L10JBMrutgzvN5BSp', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYzZna2t4REF1TWN2UjUwU1dJc21CNTBWMTB5V2dadHIwUVRaSzF6cSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1764171277);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('user','admin') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Khidir Ali', 'khidirgaminghd@gmail.com', '$2y$12$5MsG70uW98D8BnC/qk3xReu6SDA6QYBTShrEmEBJdU8Kz0v/SleHy', 'user', '2025-11-23 04:51:11', '2025-11-23 04:51:11'),
(2, 'Admin', 'admin@berita.com', '$2y$12$CQT/OuvsENFo.E0/4RaW.ut9HtUaSCgENl9ZO0VFzK8EGtqxu.mvm', 'admin', '2025-11-23 05:50:44', '2025-11-23 05:50:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_slug_unique` (`slug`),
  ADD KEY `articles_user_id_foreign` (`user_id`),
  ADD KEY `articles_category_id_foreign` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_article_id_foreign` (`article_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
