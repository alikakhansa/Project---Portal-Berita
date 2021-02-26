-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Feb 2021 pada 08.42
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Struktur dari tabel `foto`
--

CREATE TABLE `foto` (
  `id_foto` int(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `foto`
--

INSERT INTO `foto` (`id_foto`, `foto`) VALUES
(3, '1.jpg'),
(9, 'pddkn.PNG'),
(10, 'gynura-purple-passion-velvet-leaf-purple-plant-9cm-pot.jpg'),
(11, '1611023925_1-org.jpg'),
(12, '1611429112_1-org (1).jpg'),
(13, '1611464850_1-org.jpg'),
(14, '1611575637_1-org.jpg'),
(15, '1611626369_1-org.jpg'),
(16, '1611562862_1-org.jpeg'),
(17, '1611550699_1-org.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `headline`
--

CREATE TABLE `headline` (
  `id_headline` int(100) NOT NULL,
  `id_post` int(100) NOT NULL,
  `status` varchar(5) NOT NULL DEFAULT 'aktif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `headline`
--

INSERT INTO `headline` (`id_headline`, `id_post`, `status`) VALUES
(1, 1, 'aktif'),
(2, 5, 'aktif'),
(3, 6, 'aktif'),
(4, 7, 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `iklan`
--

CREATE TABLE `iklan` (
  `id_iklan` int(100) NOT NULL,
  `nama_iklan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `link_sosmed` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `iklan`
--

INSERT INTO `iklan` (`id_iklan`, `nama_iklan`, `gambar`, `link_sosmed`) VALUES
(1, 'iklan22', 'gb.PNG', 'nnnnnnnn'),
(3, 'baruu', '1613040245_1-org.jpg', 'nnnnnnn'),
(4, 'satu', '1613038031_1-org.jpg', 'kl');

-- --------------------------------------------------------

--
-- Struktur dari tabel `info_instansi`
--

CREATE TABLE `info_instansi` (
  `id_instansi` int(100) NOT NULL,
  `nama_instansi` varchar(50) NOT NULL,
  `deskripsi_1` text NOT NULL,
  `deskripsi_2` text NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kab_kota` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kode_pos` int(10) NOT NULL,
  `no_telp` varchar(14) NOT NULL,
  `email` varchar(50) NOT NULL,
  `logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `info_instansi`
--

INSERT INTO `info_instansi` (`id_instansi`, `nama_instansi`, `deskripsi_1`, `deskripsi_2`, `alamat`, `kecamatan`, `kab_kota`, `provinsi`, `kode_pos`, `no_telp`, `email`, `logo`) VALUES
(1, 'portal berita', 'qqqqqqqqq', 'wwwwwwwwwwwwwww', 'eeeeeeeeee', 'rrrrrrrrr', 'ssssss', 'tttttt', 222, '3333333', 'uuuuuuuuu', '2.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(100) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `slug` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `slug`) VALUES
(2, 'news', ''),
(3, 'bisnis', ''),
(4, 'electric', ''),
(5, 'cycling', ''),
(6, 'mania', ''),
(7, 'model', ''),
(8, 'modifikasi', ''),
(9, 'dream', ''),
(10, 'travelling', ''),
(11, 'hangout', ''),
(12, 'racing', ''),
(13, 'shop', ''),
(14, 'pembiayaan', ''),
(17, 'slug ini  itu', 'slug-ini--itu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_login` int(100) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `jenis_kelamin` enum('pria','wanita') NOT NULL,
  `no_telp` varchar(14) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tipe_user` enum('admin','author') NOT NULL,
  `gambar` varchar(100) DEFAULT 'user.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_login`, `nama_lengkap`, `jenis_kelamin`, `no_telp`, `username`, `password`, `tipe_user`, `gambar`) VALUES
(1, 'putri defa', 'wanita', '+628997013429', 'putridefa20@gmail.com', 'd82b76b4d6d482e31e48d6ca61222b7a', 'admin', '1613811228_1-org.jpeg'),
(2, 'author', 'pria', '09090909', 'author@gmail.com', 'e22591bbe1941fcc4b78972d4c60281f', 'author', 'ag.PNG'),
(5, 'user', 'wanita', '123456', 'user@gmail.com', 'user123', 'admin', NULL),
(7, 'ini', 'wanita', '111111111112', 'qqqqqq', 'd41d8cd98f00b204e9800998ecf8427e', 'author', 'user.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `post`
--

CREATE TABLE `post` (
  `id_post` int(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `kata_kunci` varchar(100) NOT NULL,
  `id_kategori` int(100) NOT NULL,
  `short_deskripsi` text NOT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `caption` varchar(100) DEFAULT NULL,
  `visit` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deskripsi` text NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `post`
--

INSERT INTO `post` (`id_post`, `judul`, `kata_kunci`, `id_kategori`, `short_deskripsi`, `gambar`, `caption`, `visit`, `created_at`, `deskripsi`, `nama_lengkap`, `slug`) VALUES
(1, 'pl', ' hybhjb', 14, ' nbnnnnn', '2.png', 'kkkkkkkk', 36, '2021-02-12 05:18:36', 'nnnnnnnnnnnnnn', 'putri defa', ''),
(5, 'bbbbbb', 'nnnnnkkkkkkk', 9, 'bhhhhhhhhhhhhhhh', '5.jpg', 'bbbbb', 36, '2021-02-13 05:13:10', '&nbsp;hgggggggggggggggggg', 'putri defa', ''),
(6, 'Sinopsis Ikatan Cinta, Reyna Kabur Persatukan Aldebaran dan Andin, Sabtu 13 Februari 2021', 'Sinopsis, Ikatan Cinta, Reyna, Andin, Aldebaran', 9, 'Sinopsis Ikatan Cinta, Sabtu 13 Februari 2021, Reyna Kabur Persatukan Aldebaran dan Andin', '1613199881_1-org.png', 'Al dan Andin @aldebaranandin.galeri', 36, '2021-02-13 14:39:39', '<p><strong>POSTMEDIA KARAWANG, BANDUNG</strong></p>\r\n<p>&nbsp;</p>\r\n<p>Sinopsis Ikatan Cinta, Sabtu 13 Februari 2021, Reyna Kabur Persatukan Aldebaran dan Andin</p>\r\n<p>&nbsp;</p>\r\n<p>Sinetron Ikatan Cinta yang tayang setiap hari di RCTI sedang seru-serunya, ketika Aldebaran yang diperankan Arya Saloka akan menyerahkan dirinya ke kantor polisi karena membayar saksi palsu untuk memberatkan Andin di persidangan.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><strong>BACA JUGA :&nbsp;<span style=\"color: #3598db;\"><a style=\"color: #3598db;\" href=\"https://postkarawang.com/plugin/article/view/592/selama-libur-panjang-tahun-baru-imlek-2572-pemkab-bogor-memperketat-ppkm\">Selama Libur Panjang Tahun Baru Imlek 2572, Pemkab Bogor Memperketat PPKM</a></span></strong></p>\r\n<p>&nbsp;</p>\r\n<p>Episode sebelumnya Aldebaran masih berusaha keras mengejar maaf Andin, hingga ia lupa menomor duakan janjinya pada Reyna untuk datang ke acara sekolahnya.</p>\r\n<p>&nbsp;</p>\r\n<p>Dan memilih kek kantor poslis untuk menyerahkan diri.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Beruntung Andin segera datang dan menghentikan niatnya.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p style=\"text-align: left;\">\"&nbsp;<em><strong>Kamu emang sering nyakitin aku mas, tapi tolong jangan Reyna, Reyna udah percaya sama kamu mas!! \" Andin<br /><br /></strong></em></p>\r\n<p>Dalam episode selanjutnya Reyna yang kecewa karena Al dan Andin tidak datang kabur dari sekolah, Aldebaran dan Andin yang datang terlambat Panik mendapati Reyna Kabur.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Mereka sadar bahwa masalah yang terjadi pada mereka. Berimbas pada Reyna.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Sementara itu Mama Sarah yang sudah tidak tahan dengan kelakukan Elsa hampir mengutarakan kejahatan Elsa pada Papa Surya namun ia tak tega mengatakan nya.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>BACA JUGA :&nbsp;<span style=\"color: #3598db;\"><a style=\"color: #3598db;\" href=\"https://postkarawang.com/plugin/article/view/590/ada-situs-porno-di-buku-pelajaran-ketua-komisi-x-dpr-ri-syaiful-huda-meminta-kemendikbud-meningkatkan-pengawasan-penerbitan\">Ada Situs Porno di Buku Pelajaran, Ketua Komisi X DPR RI Syaiful Huda Meminta Kemendikbud Meningkatkan Pengawasan Penerbitan</a></span></strong></p>\r\n<p>&nbsp;</p>\r\n<p>Pada episode kali ini juga Mama Sarah keceplosan dengan salah satu kebohongan Elsa yang membuat Nino merasa curiga. Ada kebohongan yang mereka sembunyikan.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Seperti apakah kelanjutan kisah Aldebaran dan Andin apakah Reyna bisa mempersatukan mereka?&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Dan apakah Elsa akan segera tertangkap basah, jangan lewatkan episofe 164 Malam ini di jam dan waktu yang sama - RES</p>\r\n<p style=\"text-align: left;\"><em><strong>&nbsp;</strong></em></p>', 'putri defa', ''),
(7, 'Gisel Pernah Tersandung Video Syur, Kini Ungkap Pernikahannya dengan Wijin', 'Gisel, Wijin, Menikah, Video Syur', 7, 'Beberapa pekan belakangan Nama Gisel sempat ramai dibincangkan karena video mesumnya dengan Nobu seorang atlit yang tinggal di Jepang.', '1613132946_1-org.png', 'Wijin dan Gisel saat merayakan Imlek @Jayforreal', 36, '2021-02-13 14:42:28', '<p><strong>POSTMEDIA KARAWANG, BANDUNG</strong></p>\r\n<p>&nbsp;</p>\r\n<p>Pernah Tersandung Video Syur, Gisel Kini Ungkap Kapan Pernikahanya dengan Wijin</p>\r\n<p><br />Beberapa pekan belakangan Nama Gisel sempat ramai dibincangkan karena video mesumnya dengan Nobu seorang atlit yang tinggal di Jepang.</p>\r\n<p><br />Hingag kini, proses hukum terus berlangsung hingga membuat Gisella Anastasia harus bolak balik ke Polda Metro Jaya untuk melakukan wajib lapor selama dua minggu sekali.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>BACA JUGA :&nbsp;<span style=\"color: #3598db;\"><a style=\"color: #3598db;\" href=\"https://postkarawang.com/plugin/article/view/583/viral-video-syur-14-detik-begini-reaksi-netizen-dan-gabriella-larasati-memilih-bungkam\">Viral Video Syur 14 Detik, Begini Reaksi Netizen dan Gabriella Larasati Memilih Bungkam</a></span></strong></p>\r\n<p>&nbsp;</p>\r\n<p>kasus tersebut sangat membuatnya terpukul, terlebih ia kini tengah menjalin kedekatan serius dengan sosok lelaki, Wijaya Saputra, atau yang akrab disapa WIjin.</p>\r\n<p><br />Melalui akun YouTube KH INFOTAINMENT pada Kamis (11/12/2021), Gisel buka suara terkait rencana pernikahannya bersama sang kekasih. Saat ditanya kapan pernikahan dirinya dengan Wijin.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Baca juga :&nbsp;<span style=\"color: #3598db;\"><a style=\"color: #3598db;\" href=\"https://postkarawang.com/plugin/article/view/587/bayern-munchen-meraih-gelar-juara-piala-dunia-antarklub-2020-dengan-gol-tunggal-benjamin-pavard\">Bayern Munchen Meraih Gelar Juara Piala Dunia Antarklub 2020 dengan Gol Tunggal Benjamin Pavard</a><br /><br /></span></strong></p>\r\n<p>\" Enggak lah, mereka gak pernah nanya (kapan nikah?), mereka baik pisan\" jawab Gisella bila seandainya mendapat pertanyaan kapan menikah dari orang tua khususnya keluarga pihak Wijin saat kumpul</p>\r\n<p><br />\" Pasti kita doain aja, bertanya sama yang di Atas semuanya kan masa depan dan segala macem\" paparnya melanjutkan.<br />Lanjutnya, Gisel mengungkap bahwa semua pihak keluarga selalu mendukungnya secara penuh dalam menjalin hubungan bersama Wijin serta dalam rangka menghadapi kemungkinan akan kasus hukum yang tengah ia jalani.</p>\r\n<p><br />\" Mereka support banget, support terus. Luar biasalah pokoknya, mengharukan. Ya, sama seperti keluargaku, keluarga Wijin, keluarga Papa Gading juga, semuanya saling support dan mendoakan\" . Tutup Gisel.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;<strong>BACA JUGA</strong><strong>:&nbsp;<span style=\"color: #3598db;\"><a style=\"color: #3598db;\" href=\"https://postkarawang.com/plugin/article/view/585/ditengah-pandemi-covid-19-perayaan-imlek-tahun-2021-di-kota-tasikmalaya-sepi\">Ditengah Pandemi Covid-19, Perayaan Imlek Tahun 2021 di Kota Tasikmalaya Sepi</a></span></strong></p>\r\n<p><br />Namun Gisell mengungkapan jika saat ini dia berserah diri kepada Tuhan kapan akanmemebri waktu itu.</p>\r\n<p>&nbsp;</p>\r\n<p>\" Untuk saat ini pertimbangannya cuman tanya sama Tuhan aja sih. Dari awal pasti kan kalau berhubungan enggak kepengen putus. Tapi kan gak mau berdasarkan keputusan-keputusanku sendiri doang. Harus benar-benar dicerna dulu semuanya.\" Tutur gisel.</p>\r\n<p><br />Sebelumnya wijin saat diatanya oleh Boy wiliam di Kanal Youtube Boy wiliam sempat mengungkapkan perasaan Wijin yang akan tetap menikahi Gisell.</p>\r\n<p><strong><span style=\"color: #3598db;\">&nbsp;</span></strong></p>', 'putri defa', ''),
(8, 'Ini Tips Perawatan dan Pemakaian Motor Yamaha', 'nmklp', 6, 'bhyut', 'gynura-purple-passion-velvet-leaf-purple-plant-9cm-pot.jpg', 'vvv', 40, '2021-02-17 15:05:58', '<em><span style=\"text-decoration: underline;\"><strong>bnbnbnbnbnb</strong></span></em>', 'putri defa', 'ini-tips-perawatan-dan-pemakaian-motor-yamaha');

-- --------------------------------------------------------

--
-- Struktur dari tabel `video`
--

CREATE TABLE `video` (
  `id_video` int(100) NOT NULL,
  `link_yt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `video`
--

INSERT INTO `video` (`id_video`, `link_yt`) VALUES
(1, 'https://www.youtube.com/?hl=id&gl=ID');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indeks untuk tabel `headline`
--
ALTER TABLE `headline`
  ADD PRIMARY KEY (`id_headline`),
  ADD KEY `id_post` (`id_post`);

--
-- Indeks untuk tabel `iklan`
--
ALTER TABLE `iklan`
  ADD PRIMARY KEY (`id_iklan`);

--
-- Indeks untuk tabel `info_instansi`
--
ALTER TABLE `info_instansi`
  ADD PRIMARY KEY (`id_instansi`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indeks untuk tabel `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `foto`
--
ALTER TABLE `foto`
  MODIFY `id_foto` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `headline`
--
ALTER TABLE `headline`
  MODIFY `id_headline` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `iklan`
--
ALTER TABLE `iklan`
  MODIFY `id_iklan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `info_instansi`
--
ALTER TABLE `info_instansi`
  MODIFY `id_instansi` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `headline`
--
ALTER TABLE `headline`
  ADD CONSTRAINT `headline_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `post` (`id_post`);

--
-- Ketidakleluasaan untuk tabel `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
