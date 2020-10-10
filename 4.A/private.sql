-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Okt 2020 pada 16.15
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `private`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `author`
--

CREATE TABLE `author` (
  `id_at` int(11) NOT NULL,
  `name_at` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `author`
--

INSERT INTO `author` (`id_at`, `name_at`) VALUES
(1, 'Achmad Solichin'),
(2, 'www.duniailkom.com'),
(3, 'Agus Prawoto Had'),
(4, 'Andre Pratama');

-- --------------------------------------------------------

--
-- Struktur dari tabel `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `name_ct` varchar(30) DEFAULT NULL,
  `video_link` varchar(100) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `id_cr` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `content`
--

INSERT INTO `content` (`id`, `name_ct`, `video_link`, `type`, `id_cr`) VALUES
(1, 'Pembelajaran PHP', 'https://www.youtube.com/watch?v=gvkr2V-JULE', 'Video', 1),
(7, 'Belajar JavaScript', 'https://www.youtube.com/watch?v=RUTV_5m4VeI&list=PLFIM0718LjIWXagluzROrA-iBY9eeUt4w', 'Video', 2),
(8, 'Tutorial MySql', 'https://www.youtube.com/watch?v=BfwEPIOKTsg&list=PLF82-I80PwDN7KSzsJOmd8mwHYe4aAqfF', 'Video', 3),
(9, 'Belajar CSS', 'https://www.youtube.com/watch?v=1Rs2ND1ryYc', 'Video', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `course`
--

CREATE TABLE `course` (
  `id_cr` int(10) NOT NULL,
  `name_cr` varchar(30) DEFAULT NULL,
  `thumbnail` varchar(30) DEFAULT NULL,
  `duration` varchar(30) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `course`
--

INSERT INTO `course` (`id_cr`, `name_cr`, `thumbnail`, `duration`, `description`) VALUES
(1, 'PHP', 'php.jpg', '-----', 'Melalui buku gratis php mysql ini, penulis berusaha mengenalkan dasar-dasar dari PHP dan MySQL untuk membangun suatu situs web. Buku ini sebagian besar menyajikan berbagai contoh program yang disusun secara terstruktur dari yang mudah sampai yang cukup kompleks. Dengan adanya contoh-contoh program tersebut, diharapkan pembaca dapat mempraktekkannya secara langsung (learning by doing) dan dapat menyimpulkan sendiri maksud dari setiap perintah dalam program dengan cara melihat hasil yang ditampilkan di layar (browser). Di akhir buku ini, disajikan contoh yang lebih nyata, yaitu aplikasi situs berita sederhana yang dapat dikembangkan lebih lanjut.\r\n\r\nBuku ini cocok bagi pembaca yang baru mulai belajar PHP dan MySQL secara mandiri karena contoh-contoh dalam buku ini disajikan sesederhana mungkin. Buku ini juga cocok digunakan sebagai panduan praktikum pemrograman web di perguruan tinggi, sekolah maupun kursus-kursus.'),
(2, 'JavaScript', 'javascript.jpg', '-----', 'Semuanya butuh JavaScript.\r\n\r\nPerkembangan JavaScript juga sangat pesat. Saat ini muncul berbagai teknologi turunan JavaScript, seperti jQuery, Node.js, Angular.js, React.js, Meteor.js, dan masih banyak lagi.\r\n\r\nBersama-sama dengan HTML dan CSS, JavaScript menjadi teknologi inti dari pembuatan konten halaman web (front-end). HTML digunakan untuk membuat struktur dan isi dari halaman web (content). CSS untuk mempercantik tampilan website (design). Sedangkan Javacript berfungsi menangani interaksi (behavior). Sebutan kerennya:\r\n\r\n“HTML for content, CSS for presentation and JavaScript for behavior”.\r\n\r\nDi buku JavaScript Uncover ini saya akan membahas banyak aspek terkait dasar-dasar JavaScript, mulai dari sejarah, cara menjalankan kode JavaScript, mengenal ECMAScript, konsep dasar pemrograman ECMAScript, berbagai function bawaan, regular expression, date, pengenalan object, DOM (Document Object Model), event handling, BOM (Browser Object Model), form processing, hingga AJAX.\r\n\r\nKita juga akan membuat berbagai mini project atau case study, seperti menampilkan waktu saat ini, membuat validasi form, membuat dropdown dinamis, membuat jendela popup, membuat slideshow, hingga menampilkan tabel database menggunakan AJAX.\r\n\r\nBuku JavaScript Uncover terdiri dari 662 halaman yang mencakup 26 bab, dengan rincian sebagai berikut:\r\n\r\nBerkenalan Dengan JavaScript\r\nSejarah dan Perkembangan JavaScript\r\nMenjalankan Kode Program JavaScript\r\nAturan Dasar, Variabel dan Konstanta\r\nVariabel dan Konstanta\r\nTipe Data JavaScript\r\nOperator JavaScript\r\nStruktur Logika dan Perulangan\r\nFunction\r\nJavaScript Object\r\nObject Oriented Programming JavaScript\r\nNumber Object\r\nMath Object\r\nString Object\r\nRegular Expression Object\r\nArray Object\r\nDate Object\r\nGlobal Property dan Global Function\r\nDOM (Document Object Model)\r\nDocument dan Element Object\r\nDOM Event\r\nForm Processing\r\nBOM (Browser Object Model)\r\nWindow Object\r\nAJAX\r\nCase Study: SlideShow'),
(3, 'MySql', 'mysql.png', '-----', 'Buku ini berisi berbagai teknik query yang dapat diterapkan pada database MySQL, Anda akan mulai belajar dan menguasai statemen terkait Data Definition Language, Data Manipulation Language, Stored Routines, Triggers, Events, dll.\r\n\r\nBuku ini terdiri dari 29 pokok bahasan dimana setiap pokok bahasan dibahas secara mendalam sehingga Anda akan memiliki pemahaman dan gambaran utuh mengenai statemen, fungsi, maupun fitur yang sedang dibahas.\r\n\r\nTidak hanya referensi tentang berbagai fungsi  dan statemen SQL, buku ini juga berisi tutorial bagaimana menggunakan fungsi dan statemen tersebut, selain itu juga dilengkapi tips dan saran bermanfaat yang bisa jadi tidak Anda temukan di tempat lain.\r\n\r\nDetail Buku:\r\n\r\nJudul: Panduan Query MySQL – Tutorial dan Referensi Lengkap Query MySQL\r\nPenulis: Agus Prawoto Hadi\r\nEdisi: I (Pertama)\r\nTerbit: April 2017, Revisi 1: 18 Juni 2017. NOTE: Meskipun terbit 2017, materi di e-book ini masih sangat relevan dengan MySQL terbaru yang saat ini yang baru mencapai versi 5.7.21. Rencananya, e-book akan segera diupdate jika MySQL versi 8 sudah final release.\r\nDimensi: 15,7 cm x 23 cm\r\nJumlah Halaman: xviii, 519\r\nBuku ini untuk siapa:\r\n\r\nPengajar / Dosen sebagai bahan materi mengajar (lihat testimoni)\r\nMahasiswa sebagai materi untuk belajar matakuliah tentang basis data (lihat testimoni)\r\nPelamar pekerjaan, untuk membantu menjawab pertanyaan saat interview pekerjaan (lihat testimoni)\r\nKaryawan yang sedang menggeluti dunia database (lihat testimoni)\r\nPemula dan programmer otodidak. Dengan materi yang lengkap dan urut, dapat membantu para pemula dan programmer otodidak untuk menguasai query MySQL (lihat testimoni)\r\nProgrammer yang ingin meningkatkan skill query MySQL\r\nFitur:\r\n\r\nDitulis secara komprehensif dan detail serta mudah dipahami, seperti posting populer yang ada di blog ini.\r\nMaterinya padat ilmu (lihat testimoni).\r\nMenggunakan MySQL terbaru Versi 5.7.17\r\nInclude source code.\r\nFree lifetime update versi berikutnya.\r\nFree support materi yang ada di buku.\r\nDaftar Isi:\r\n\r\nKata Pengantar\r\nSource Code\r\nCode Convention\r\nDaftar Isi\r\nBAB 1 SQL dan Database\r\n1.1. SQL\r\n1.2. Database\r\n1.3. Database Relasional\r\n1.4. MySQL\r\nBAB 2 Install MySQL\r\n2.1. Download MySQL\r\n2.2. Install MySQL di Windows\r\n2.3. Menjalankan Query Dengan Command Prompt\r\nBAB 3 Menginstall dan Menggunakan HeidiSQL\r\n3.1. Download HeidiSQL'),
(4, 'CSS', 'css.jpg', '-----', 'Semuanya butuh CSS.\r\n\r\nTanpa CSS, halaman web menjadi tanpa “warna”. Meskipun HTML memiliki beberapa atribut untuk mengatur tampilan, tapi cara ini sudah tidak disarankan lagi. HTML difokuskan untuk membuat struktur, sedangkan untuk tampilan diserahkan kepada CSS. Sebutan kerennya:\r\n\r\n“HTML for content, CSS for presentation and JavaScript for behavior”.\r\n\r\nDi buku CSS Uncover ini saya akan membahas berbagai materi dasar CSS. Mulai dari perkenalan, aturan dasar penulisan CSS, memahami jenis-jenis selector CSS, konsep cascading, inheritance, specificity, hingga fitur terbaru dari CSS3 seperti media query, transisi, dan animasi. Setiap pembahasan dilengkapi contoh-contoh penerapan dari kode CSS yang dipelajari.\r\n\r\nBuku CSS Uncover terdiri dari 555 halaman yang mencakup 18 bab, dengan rincian sebagai berikut:\r\n\r\nPerkenalan dan pengertian CSS.\r\nSejarah dan perkembangan CSS.\r\nWeb browser dan text editor CSS (menggunakan Komodo Edit).\r\nAturan dasar penulisan CSS (pengertian selector, declaration, property dan value).\r\nCSS Selector (termasuk selector CSS3 seperti pseudo selector).\r\nKonsep cascade, inheritance dan specificity CSS.\r\nCSS Typography (property text formatting).\r\nCSS Box Model (property width, height, padding, border dan margin).\r\nCSS Background.\r\nCSS Positioning\r\nCSS3 Gradient\r\nCSS3 Multiple Column\r\nCSS3 Border Image dan Box Shadow\r\nCSS3 2D Transform\r\nCSS3 Transisi dan Animasi\r\nCSS3 Media Query\r\nCSS Case Study (contoh penerapan CSS: cara membuat horizontal menu, menu dropdown, table, list, dan cara penggunaan font awesome).\r\nCSS Layout (contoh kasus perancangan layout halaman web sederhana).');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id_at`);

--
-- Indeks untuk tabel `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id_cr`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `author`
--
ALTER TABLE `author`
  MODIFY `id_at` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `course`
--
ALTER TABLE `course`
  MODIFY `id_cr` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
