-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2022 at 08:29 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umkm_sulut`
--

-- --------------------------------------------------------

--
-- Table structure for table `galeri_foto`
--

CREATE TABLE `galeri_foto` (
  `id` int(11) NOT NULL,
  `id_umkm` int(11) NOT NULL,
  `nama_umkm` varchar(300) NOT NULL,
  `kategori` varchar(200) NOT NULL,
  `nama_foto` varchar(500) NOT NULL,
  `token` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri_foto`
--

INSERT INTO `galeri_foto` (`id`, `id_umkm`, `nama_umkm`, `kategori`, `nama_foto`, `token`) VALUES
(1, 3, 'Car Wash Tomohon', 'Cuci', 'pasar1.jpg', '0.4539165411013504'),
(2, 3, 'Car Wash Tomohon', 'Cuci', 'buku.jpg', '0.5150005192177198'),
(3, 3, 'Car Wash Tomohon', 'Cuci', 'pexels-engin-akyurt-1435904.jpg', '0.627767024328634'),
(4, 3, 'Car Wash Tomohon', 'Cuci', 'pexels-suzy-hazelwood-2309235.jpg', '0.773855694856219'),
(5, 2, 'Tuna House', 'Kuliner', 'kelapa.jpg', '0.2891263147861425'),
(6, 2, 'Tuna House', 'Kuliner', 'app.jpg', '0.5121772514419685'),
(7, 2, 'Tuna House', 'Kuliner', 'Lion-Parcel.jpg', '0.5396461799901349'),
(8, 4, 'Usaha Butik', 'Fashion', 'sandiaga.jpeg', '0.023945123078299657'),
(9, 4, 'Usaha Butik', 'Fashion', 'slider1.jpg', '0.07356617451485681'),
(10, 4, 'Usaha Butik', 'Fashion', 'slider2.jpg', '0.24823083517636624');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id` int(11) NOT NULL,
  `gambar` varchar(500) NOT NULL,
  `judul` text NOT NULL,
  `konten` text NOT NULL,
  `tags` varchar(128) NOT NULL,
  `tgl` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id`, `gambar`, `judul`, `konten`, `tags`, `tgl`) VALUES
(1, 'minyak.jpg', 'Minyak Goreng Kembali Langka, Kemenperin Ungkap Biang Keroknya!', 'Direktur Jenderal Industri Agro Kementerian Perindustrian, Putu Juli Ardika mengatakan pihaknya telah berupaya untuk mensosialisasi minyak goreng curah harga Rp 14.000/liter dengan memasang spanduk. Namun, dalam praktiknya, dia menyebut masyarakat belum percaya minyak goreng curah sesuai HET itu ada.<br style=\"color: rgb(0, 0, 0); font-family: Helvetica-FF, Arial, Tahoma, sans-serif;\"><br style=\"color: rgb(0, 0, 0); font-family: Helvetica-FF, Arial, Tahoma, sans-serif;\"><span style=\"color: rgb(0, 0, 0); font-family: Helvetica-FF, Arial, Tahoma, sans-serif;\">\"Kami melakukan langkah-langkah untuk HET terjaga salah satunya memasang spanduk bahwa ini minyak goreng curah bersubsidi atau minyak goreng curah HET. Itu sudah kami lakukan. Tetapi dalam praktiknya, masyarakat belum confident bahwa minyak itu ada,\" katanya dalam Rapat Kerja dengan Komisi VII DPR RI, Selasa (24/5/2022).</span><br style=\"color: rgb(0, 0, 0); font-family: Helvetica-FF, Arial, Tahoma, sans-serif;\"><br style=\"color: rgb(0, 0, 0); font-family: Helvetica-FF, Arial, Tahoma, sans-serif;\"><span style=\"color: rgb(0, 0, 0); font-family: Helvetica-FF, Arial, Tahoma, sans-serif;\">Baca artikel detikfinance, \"Kemenperin Ungkap Biang Kerok Minyak Goreng Curah Rp 14.000/Liter Langka\" selengkapnya&nbsp;</span><a href=\"https://finance.detik.com/berita-ekonomi-bisnis/d-6093385/kemenperin-ungkap-biang-kerok-minyak-goreng-curah-rp-14000liter-langka\" style=\"color: rgb(0, 0, 0); background: rgb(255, 255, 255); transition: all 0.3s ease-in-out 0s; font-family: Helvetica-FF, Arial, Tahoma, sans-serif;\">https://finance.detik.com/berita-ekonomi-bisnis/d-6093385/kemenperin-ungkap-biang-kerok-minyak-goreng-curah-rp-14000liter-langka</a><span style=\"color: rgb(0, 0, 0); font-family: Helvetica-FF, Arial, Tahoma, sans-serif;\">.</span><br style=\"color: rgb(0, 0, 0); font-family: Helvetica-FF, Arial, Tahoma, sans-serif;\"><br style=\"color: rgb(0, 0, 0); font-family: Helvetica-FF, Arial, Tahoma, sans-serif;\"><span style=\"color: rgb(0, 0, 0); font-family: Helvetica-FF, Arial, Tahoma, sans-serif;\">Sumber :<a href=\"https://finance.detik.com/berita-ekonomi-bisnis/d-6093385/kemenperin-ungkap-biang-kerok-minyak-goreng-curah-rp-14000liter-langka\" target=\"_blank\">&nbsp;finance.detik.com</a></span><br><p></p>', 'Pemerintahan', '2022-05-25'),
(2, 'Lion-Parcel.jpg', 'Dekati Pasar UMKM, Lion Parcel Operasikan Gudang  Ramah Lingkungan', '<b>SURABAYA</b> - PT Lion Express atau Lion Parcel mengoperasikan gudang baru di area Surabaya, Rabu (25/5/2022). Pengoperasian gudang baru tersebut sebagai upaya untuk mendekati lokasi pangsa pasar yakni Usaha Mikro Kecil Menengah (UMKM). Gudang Lion Parcel berada tidak jauh dari Bandara Internasional Juanda Surabaya tepatnya di Pergudangan Fortune Blok A30-A31, Jl. Tambak Sawah No.6, Tambakrejo, Kecamatan Waru, Sidoarjo. UMKM menurut menurut Chief Marketing Officer Lion Parcel Kenny Kwanto adalah pasar potensial karena menurut dari Dinas Koperasi dan UKM Jawa Timur, UMKM berkontribusi sebesar 57,81 persen terhadap PDRB (Produk Domestik Regional Bruto) Jawa Timur.<br style=\"color: rgb(42, 42, 42); font-family: Roboto, sans-serif; font-size: 14px;\"><br style=\"color: rgb(42, 42, 42); font-family: Roboto, sans-serif; font-size: 14px;\"><span style=\"color: rgb(42, 42, 42); font-family: Tahoma; font-size: 14px;\">Artikel ini telah tayang di&nbsp;</span><a href=\"https://www.kompas.com/\" style=\"color: inherit; vertical-align: baseline; outline: 0px; transition: all 0.2s ease 0s; font-family: Roboto, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\"><span style=\"font-family: Tahoma;\">Kompas.com</span></a><span style=\"color: rgb(42, 42, 42); font-family: Tahoma; font-size: 14px;\">&nbsp;dengan judul \"Dekati Pasar UMKM, Lion Parcel Operasikan Gudang Ramah Lingkungan di Surabaya\", Klik untuk baca:&nbsp;</span><a href=\"https://money.kompas.com/read/2022/05/25/210144326/dekati-pasar-umkm-lion-parcel-operasikan-gudang-ramah-lingkungan-di-surabaya\" style=\"color: inherit; vertical-align: baseline; outline: 0px; transition: all 0.2s ease 0s; font-family: Roboto, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\"><span style=\"font-family: Tahoma;\">https://money.kompas.com/read/2022/05/25/210144326/dekati-pasar-umkm-lion-parcel-operasikan-gudang-ramah-lingkungan-di-surabaya</span></a><span style=\"color: rgb(42, 42, 42); font-family: Tahoma; font-size: 14px;\">.</span><p></p><p><span style=\"color: rgb(42, 42, 42); font-family: Roboto, sans-serif; font-size: 14px;\">Sumber : </span><a href=\"https://money.kompas.com/read/2022/05/25/210144326/dekati-pasar-umkm-lion-parcel-operasikan-gudang-ramah-lingkungan-di-surabaya\" target=\"_blank\" style=\"font-family: Roboto, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\">Kompas.com</a><br></p>', 'Layanan Pemerintah', '2022-05-26'),
(4, 'app.jpg', 'Pemerintah Maksimalkan Dukungan untuk Platform Digital dan UMKM', '<b><span style=\"font-family: Roboto;\">Jakarta</span></b><span style=\"font-family: Roboto;\"> -<span style=\"font-family: Tahoma;\"> Menteri Komunikasi dan Informatika (Menkominfo) Johnny G Plate menyatakan pemerintah mendukung pengembangan platform digital dan pelaku Usaha Mikro Kecil dan Menengah (UMKM).</span><br></span><span style=\"font-family: Tahoma;\">Dukungan itu sudah dilakukan pemerintah dengan pembangunan infrastruktur digital. \"Pemerintah memberikan fasilitasi untuk platform digital yang mendukung </span><a href=\"https://www.jpnn.com/tag/umkm\" title=\"Semua artikel tentang UMKM\" style=\"color: rgb(222, 36, 24); -webkit-font-smoothing: antialiased; background-color: rgb(255, 255, 255);\"><span style=\"font-family: Tahoma;\">UMKM</span></a><span style=\"font-family: Roboto;\"><span style=\"font-family: Tahoma;\"> Indonesia,\" kata Johnny, Selasa (24/5).</span><br></span><span style=\"font-family: Tahoma;\">Dia menjelaskan pembangunan infrastruktur telekomunikasi, </span><em><span style=\"font-family: Tahoma;\">technology company</span></em><span style=\"font-family: Roboto;\"><span style=\"font-family: Tahoma;\"> global, dan platform digital yang ada di Indonesia bisa mendukung bisnis dengan baik.</span><br></span><span style=\"font-family: Tahoma;\">Untuk itu, pemerintah membangun infrastruktur digital berupa jaringan backbone fiber optic, jaringan </span><em><span style=\"font-family: Tahoma;\">middle-mile</span></em><span style=\"font-family: Tahoma;\"> seperti </span><em><span style=\"font-family: Tahoma;\">microwave</span></em><span style=\"font-family: Tahoma;\"> link, fiber link, dan satelit serta</span><em><span style=\"font-family: Tahoma;\"> base transceiver station</span></em><span style=\"font-family: Roboto;\"><span style=\"font-family: Tahoma;\"> (BTS).</span><br></span><span style=\"font-family: Tahoma;\">\"Apa yang telah saya lakukan sebagai menteri adalah menggelar infrastruktur TIK di seluruh negeri melalui jaringan telekomunikasi serta menyediakan High Throughput Satellite dengan kapasitas 300 gigabit per detik yang akan diluncurkan ke orbit tahun depan untuk mendukung kebutuhan digital Indonesia,\" tutur Johnny.</span><div id=\"PC_midcontent\" style=\"color: rgb(0, 0, 0); font-family: merriweather, Georgia, Times, \" times=\"\" new=\"\" roman\",=\"\" serif;=\"\" margin:=\"\" 0px;=\"\" padding:=\"\" 0px;\"=\"\"></div>', 'Teknologi', '2022-05-26');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(200) NOT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id`, `nama_kategori`, `keterangan`) VALUES
(1, 'Kuliner', 'Salah satu bisnis UMKM yang paling banyak digandrungi bahkan hingga kalangan muda sekalipun. Berbekal inovasi dalam bidang makanan dan modal yang tidak terlalu besar.'),
(2, 'Fashion', ' UMKM di bidang fashion ini juga sedang diminati. Setiap tahun mode tren fashion baru selalu hadir yang tentunya meningkatkan pendapatan pelaku bisnis fashion.'),
(3, 'Cuci', 'UMKM yang bergerak dalam sektor jasa ini cukup banyak diminati. Apalagi jika musim penghujan tiba, mayoritas orang akan lebih sering mencucikan motor atau mobilnya karena cepat kotor, terutama bagi mereka yang sibuk bekerja atau kuliah.'),
(4, 'Teknologi', 'UMKM ini bergerak disektor teknologi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `nama_pemilik` varchar(200) NOT NULL,
  `nama_usaha` varchar(200) NOT NULL,
  `deskripsi` text,
  `alamat` varchar(400) NOT NULL,
  `no_hp` varchar(128) NOT NULL,
  `kategori` varchar(200) NOT NULL,
  `kelurahan` varchar(128) NOT NULL,
  `kecamatan` varchar(128) NOT NULL,
  `kabupaten` text NOT NULL,
  `provinsi` varchar(128) NOT NULL,
  `kode_pos` varchar(128) NOT NULL,
  `tgl_posting` varchar(128) NOT NULL,
  `latitude` varchar(300) NOT NULL,
  `longitude` varchar(300) NOT NULL,
  `gambar` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id`, `email`, `nama_pemilik`, `nama_usaha`, `deskripsi`, `alamat`, `no_hp`, `kategori`, `kelurahan`, `kecamatan`, `kabupaten`, `provinsi`, `kode_pos`, `tgl_posting`, `latitude`, `longitude`, `gambar`) VALUES
(1, 'admin@gmail.com', 'Administrator', 'Toko Pakaian', '<p>Tes</p>', 'Tondano', '081242291179', 'Fashion', 'Wenang', 'Manado Selatan', 'Kota Manado', 'Sulawesi Utara', '95618', '1649366245', '1.4800142142738049', '124.85941057045808', 'planet_surf.jpg'),
(2, 'admin@gmail.com', 'Hendra', 'Tuna House', 'Pemilik Restoran Tuna House Manado Ricky Jo, atau biasa disapa Ko’ Ricky mengungkapkan, menu yang paling digemari di restorannya adalah tuna bakar. Harganya bervariasi dari Rp35 ribu sampai Rp45 ribu. Selain itu ada juga tuna bumbu RW yang harganya Rp50 ribu.<p></p><p>UMKM ini bergerak dibidang kuliner yang ada di Kota Manado.&nbsp;<span style=\"color: rgb(68, 68, 68); font-family: \" source=\"\" sans=\"\" pro\",=\"\" \"helvetica=\"\" neue\",=\"\" sans-serif;=\"\" font-size:=\"\" 1rem;\"=\"\">Pemilik Restoran Tuna House Manado Ricky Jo, atau biasa disapa Ko’ Ricky mengungkapkan, menu yang paling digemari di restorannya adalah tuna bakar. Harganya bervariasi dari Rp35 ribu sampai Rp45 ribu. Selain itu ada juga tuna bumbu RW yang harganya Rp50 ribu.</span></p>', 'Manado', '081242291179', 'Kuliner', 'Sario', 'Sario', 'Kota Manado', 'Sulawesi Utara', '95618', '1653417763', '1.4464939617979158', '124.8856903510724', 'Tuna.jpg'),
(3, 'admin@gmail.com', 'Rendi', 'Car Wash Tomohon', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; overflow-wrap: break-word; color: rgb(68, 68, 68); font-family: \" helvetica=\"\" neue\",=\"\" sans-serif;\"=\"\">Telah dibuka Tempat Usaha Cuci Kendaraan sekaligus poles mobil dengan harga terjangkau dan kwalitas mampu bersaing&nbsp;<span style=\"font-weight: 700;\">ET 86 CAR WASH&nbsp;</span><span style=\"font-size: 1rem;\">Dengan konsep yang berbeda&nbsp;</span><span style=\"font-size: 1rem; font-weight: 700;\">ET 86 CAR WASH</span><span style=\"font-size: 1rem;\">, hadir memberikan fasilitas dan pelayanan yang terbaik bagi masyarakat.</span><br></p>', 'Tomohon', '081242291179', 'Cuci', 'Peslaten', 'Tomohon Selatan', 'Kota Tomohon', 'Sulawesi Utara', '93738', '1653418761', '1.318448042918', '124.83833076539094', 'car_wash.jpg'),
(4, 'admin@gmail.com', 'Kila', 'Usaha Butik', '<p>Bergerak dibidang fashion</p>', 'Manado', '081242291179', 'Fashion', 'Sario', 'Sario', 'Kota Manado', 'Sulawesi Utara', '93738', '1653592389', '1.4628537386419505', '124.84012947164187', 'butik.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_setting`
--

CREATE TABLE `tb_setting` (
  `id` int(11) NOT NULL,
  `nama_sistem` varchar(128) NOT NULL,
  `deskripsi` text NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `phone` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `logo` varchar(400) NOT NULL,
  `slider1` varchar(400) NOT NULL,
  `title1` text NOT NULL,
  `deskripsi1` text,
  `slider2` varchar(400) NOT NULL,
  `title2` text NOT NULL,
  `deskripsi2` text,
  `slider3` varchar(400) NOT NULL,
  `title3` text NOT NULL,
  `deskripsi3` text,
  `zoom_peta` int(11) NOT NULL,
  `icon_peta` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_setting`
--

INSERT INTO `tb_setting` (`id`, `nama_sistem`, `deskripsi`, `alamat`, `phone`, `email`, `logo`, `slider1`, `title1`, `deskripsi1`, `slider2`, `title2`, `deskripsi2`, `slider3`, `title3`, `deskripsi3`, `zoom_peta`, `icon_peta`) VALUES
(1, 'Sistem Informasi UMKM', 'Website UMKM ini dibuat untuk memudahkan masyarakat dalam pencarian bahan baku atau produk yang ada di Provinsi Sulawesi Utara', 'Provinsi Sulawesi Utara', '+62 822-000-111', 'umkmsulut@gmail.id', 'm.png', 'pexels-erik-scheel-95425.jpg', 'Usaha Mikro Kecil Menengah', 'Usaha mikro kecil menengah adalah istilah umum dalam dunia ekonomi yang merujuk kepada usaha ekonomi produktif yang dimiliki perorangan maupun badan usaha sesuai dengan kriteria yang ditetapkan oleh Undang-undang No. 20 tahun 2008.', 'slider2.jpg', 'Lokasi UMKM di SULUT', 'Temukan Data Usaha Kecil Mikro Menengah yang ada di Provinsi Sulawesi Utara', 'slider3.jpg', 'Daftarkan Bisnis UMKM Anda', 'Ayo! Daftarkan Usaha Kecil Mikro Menengah Anda.', 11, 'shop.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(200) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL,
  `is_active` int(2) NOT NULL,
  `level` int(2) NOT NULL,
  `foto` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `email`, `password`, `alamat`, `no_hp`, `date_created`, `is_active`, `level`, `foto`) VALUES
(1, 'Administrator', 'admin@gmail.com', '$2y$10$KjQO9xFLKhLWKVFDSj0fTesv56U2nD5lgKo.TH92EOcZcGB1jKtCS', 'Manado', '081242291179', 1649359171, 1, 1, 'default.png'),
(2, 'User', 'priskilakabesi17@gmail.com', '$2y$10$hLp1mauFUghYW9xqdFpBAOKXPlGCNVKpe5/Iw.CcMPbHvLAUipQ9S', 'Manado', '089698016150', 1652499615, 1, 2, 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(11) NOT NULL,
  `ip` varchar(128) NOT NULL,
  `date` date NOT NULL,
  `hits` int(11) NOT NULL,
  `online` varchar(255) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `ip`, `date`, `hits`, `online`, `time`) VALUES
(1, '::1', '2022-04-07', 5, '1649366320', '2022-04-07 21:16:51'),
(2, '192.168.43.24', '2022-04-07', 3, '1649368068', '2022-04-07 23:42:19'),
(3, '::1', '2022-04-08', 20, '1649388830', '2022-04-08 04:42:49'),
(4, '::1', '2022-04-11', 6, '1649684584', '2022-04-11 15:42:24'),
(5, '::1', '2022-05-14', 6, '1652499727', '2022-05-14 05:39:18'),
(6, '::1', '2022-05-23', 32, '1653301203', '2022-05-23 11:32:11'),
(7, '::1', '2022-05-24', 327, '1653423598', '2022-05-24 16:37:50'),
(8, '::1', '2022-05-25', 877, '1653503167', '2022-05-25 06:54:32'),
(9, '::1', '2022-05-26', 15, '1653597562', '2022-05-26 17:44:30'),
(10, '::1', '2022-05-27', 32, '1653669894', '2022-05-27 04:33:50'),
(11, '::1', '2022-06-01', 10, '1654116487', '2022-06-01 11:03:21'),
(12, '::1', '2022-06-03', 559, '1654279907', '2022-06-03 15:37:56'),
(13, '::1', '2022-06-04', 966, '1654372527', '2022-06-04 04:53:39'),
(14, '192.168.43.1', '2022-06-04', 57, '1654372513', '2022-06-04 21:39:40'),
(15, '::1', '2022-06-05', 115, '1654410476', '2022-06-05 04:34:54'),
(16, '192.168.43.1', '2022-06-05', 16, '1654401313', '2022-06-05 04:36:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galeri_foto`
--
ALTER TABLE `galeri_foto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_setting`
--
ALTER TABLE `tb_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galeri_foto`
--
ALTER TABLE `galeri_foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_setting`
--
ALTER TABLE `tb_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
