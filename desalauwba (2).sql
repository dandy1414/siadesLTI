-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2019 at 03:45 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desalauwba`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'irasiregar', 'ira0202');

-- --------------------------------------------------------

--
-- Table structure for table `balita`
--

CREATE TABLE `balita` (
  `gender` varchar(10) NOT NULL,
  `jumlah` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `balita`
--

INSERT INTO `balita` (`gender`, `jumlah`) VALUES
('Laki-laki', 50),
('Perempuan', 65);

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `isi` varchar(1000) NOT NULL,
  `gambar` text NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `kategori`, `isi`, `gambar`, `tanggal`) VALUES
(5, 'Sosialisasi pkk', 'Sosial', 'Melakukan sosialisasi rutin dalam meiningkatkan perekonomian masyarakat yang dilakukan oleh kelompok ibu-ibu pkk ', '1553564958.png', '2019-03-26 08:49:18'),
(6, 'Menyambut Ramadhan', 'Agama', 'Marhaban YA Ramadhan', '1553565170.png', '2019-03-26 08:52:50'),
(7, 'Kerjabakti sosial sosial', 'Agama', 'melakukan kerjabakti sosial agama', '1553602753.png', '2019-03-26 19:19:13'),
(8, 'H-30 Ramadhan', 'Agama', 'H-30 bulan Ramadhan', '1553749637.png', '2019-03-28 12:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `gambar`, `keterangan`) VALUES
(2, '1553498623.png', 'Gotong Royong'),
(4, '1553750839.png', 'Karang Taruna'),
(5, '1553750849.png', 'Pelantikan'),
(6, '1553750862.png', 'Pelantikan lurah');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Agama'),
(2, 'Sosial'),
(3, 'Ekonomi');

-- --------------------------------------------------------

--
-- Table structure for table `keluarga`
--

CREATE TABLE `keluarga` (
  `status` varchar(30) NOT NULL,
  `jumlah` double NOT NULL,
  `id_keluarga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keluarga`
--

INSERT INTO `keluarga` (`status`, `jumlah`, `id_keluarga`) VALUES
('Kepala Keluarga Laki-laki', 200, 4),
('Kepala Keluarga Perempuan', 250, 6);

-- --------------------------------------------------------

--
-- Table structure for table `lansia`
--

CREATE TABLE `lansia` (
  `gender` varchar(10) NOT NULL,
  `jumlah` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lansia`
--

INSERT INTO `lansia` (`gender`, `jumlah`) VALUES
('Laki-laki', 23),
('Perempuan', 50);

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id_layanan` int(11) NOT NULL,
  `nama_layanan` varchar(40) NOT NULL,
  `isi_layanan` text NOT NULL,
  `gambar` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `nama_layanan`, `isi_layanan`, `gambar`, `tanggal`) VALUES
(22, 'Pindah Penduduk ', 'Pindah Penduduk', '1553607221.png', '2019-03-26 13:33:41'),
(23, 'Alur Pelayanan Desa', 'Alur Pelayanan Desa', '1553607383.png', '2019-03-26 13:36:23');

-- --------------------------------------------------------

--
-- Table structure for table `lembaga`
--

CREATE TABLE `lembaga` (
  `id_lembaga` int(11) NOT NULL,
  `nama_lembaga` varchar(40) NOT NULL,
  `detail_lembaga` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lembaga`
--

INSERT INTO `lembaga` (`id_lembaga`, `nama_lembaga`, `detail_lembaga`) VALUES
(1, 'Karang Taruna', 'Karang Taruna adalah kegiatan muda-mudi di desa pendowoharjo'),
(2, 'Wirid Yasin sss', '                                        fjghergjih             sssss                       ');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id_pendidikan` int(11) NOT NULL,
  `status` varchar(30) NOT NULL,
  `jumlah` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id_pendidikan`, `status`, `jumlah`) VALUES
(2, 'TIDAK/BELUM SEKOLAH', 3892),
(3, 'BELUM TAMAT SD/SEDERAJAT', 1660),
(4, 'TAMAT SD/SEDERAJAT', 4065),
(5, 'SLTP/SEDERAJAT', 3182),
(6, 'SLTA/SEDERAJAT', 6783),
(7, 'DIPLOMA I/II', 232),
(8, 'AKADEMI/DIPLOMATIKA/SARJANA MU', 659),
(9, 'DIPLOMA IV/STRATA I', 1736),
(10, 'STRATA-II', 158),
(11, 'STRATA-III', 12),
(12, 'Tidak ada pendidikan', 120),
(13, 'Masih Bayi', 550);

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `gender` varchar(10) NOT NULL,
  `jumlah` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`gender`, `jumlah`) VALUES
('Laki-laki', 11260),
('Perempuan', 11122);

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `keluhan` varchar(50) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `username`, `keluhan`, `tanggal`) VALUES
(1, 'irasiregar', 'aaaaaaaaaaaaaaaaaaaaa', '2019-03-28 10:42:48'),
(3, 'qqqqqqqqqq', 'aaaaaaaaaaaaa                       bbbbbbbbb', '2019-03-28 10:57:05');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` varchar(1000) NOT NULL,
  `gambar` text NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `judul`, `isi`, `gambar`, `tanggal`) VALUES
(15, 'Pengumuman', 'Pengumuman', '1553607636.png', '2019-03-26 20:40:36'),
(16, 'Gotong royong ', '        Pengumuman Gotong Royong  Bersama', '1553607721.png', '2019-03-26 14:42:43'),
(17, 'Musyawarah Besar', 'Musyawarah Besar akan dilakukan di balai desa', '1553750566.png', '2019-03-28 12:22:46'),
(18, 'Penyambutan Bupati', 'Penyambutan bupati dibuka dengan arak-arakan keliling kampung', '1553750611.png', '2019-03-28 12:23:31');

-- --------------------------------------------------------

--
-- Table structure for table `potensidesa`
--

CREATE TABLE `potensidesa` (
  `id_potensi` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `nama_desa` varchar(20) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `potensidesa`
--

INSERT INTO `potensidesa` (`id_potensi`, `gambar`, `nama_desa`, `keterangan`) VALUES
(1, '1553607827.png', 'konoha ', 'Ninjutsu'),
(2, 'af.jpg', 'konoha ', 'Apa ajalah vvvvv bbb');

-- --------------------------------------------------------

--
-- Table structure for table `privacy`
--

CREATE TABLE `privacy` (
  `id_privacy` int(11) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `privacy`
--

INSERT INTO `privacy` (`id_privacy`, `isi`) VALUES
(2, '                                          Information Collection and Uses\r\n\r\nFor a better experience,while using our Service, we may require you to provide us with certain personally identifiable information,including but not limited to Name,Email. \r\nThe information that we request will be retained by us and used as described in this privacy policy.');

-- --------------------------------------------------------

--
-- Table structure for table `programdesa`
--

CREATE TABLE `programdesa` (
  `id_program` int(11) NOT NULL,
  `lokasi` varchar(35) NOT NULL,
  `pekerjaan` varchar(40) NOT NULL,
  `keterangan` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programdesa`
--

INSERT INTO `programdesa` (`id_program`, `lokasi`, `pekerjaan`, `keterangan`) VALUES
(7, 'Dagen RT 02', 'Pasang paving blok tebal 6 cm', 'Pekerjaan rutin bulanan'),
(9, 'Cepit RT 07', 'Bangket Dinding Saluran,Cor Blok Jalanan', 'Sudah Terlaksana'),
(10, 'Sawahan RT 13', 'Bangket Talud Jalan Desa', 'Masih Rencana'),
(11, 'Sawahan RT 14', 'Cor Blok Jalan', 'Masih Rencana'),
(12, 'Krandahon RT 17 ', 'Bangket Dinding Saluran', 'Rencana'),
(13, 'Pendowo RT 92', 'Cor Blok Jalan', 'Sudah Terlaksana'),
(14, 'Pendowo RT 92', 'Bangket Talud Jalan Desa', 'Sudah Terlaksana'),
(15, 'Ngimbang RT 21 ', 'Cor Blok Jalan', 'Proses Pengerjaan'),
(16, 'Miri RT 23', 'Pengaspalan Jalan', 'Proses Pengerjaan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `alamat` varchar(35) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`, `alamat`, `jenis_kelamin`, `tanggal`) VALUES
(1, 'zelvi@gmail.com', '12345', 'Padang', 'Perempuan', '2019-03-31 21:40:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `balita`
--
ALTER TABLE `balita`
  ADD PRIMARY KEY (`gender`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`id_keluarga`);

--
-- Indexes for table `lansia`
--
ALTER TABLE `lansia`
  ADD PRIMARY KEY (`gender`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `lembaga`
--
ALTER TABLE `lembaga`
  ADD PRIMARY KEY (`id_lembaga`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`gender`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `potensidesa`
--
ALTER TABLE `potensidesa`
  ADD PRIMARY KEY (`id_potensi`);

--
-- Indexes for table `privacy`
--
ALTER TABLE `privacy`
  ADD PRIMARY KEY (`id_privacy`);

--
-- Indexes for table `programdesa`
--
ALTER TABLE `programdesa`
  ADD PRIMARY KEY (`id_program`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `keluarga`
--
ALTER TABLE `keluarga`
  MODIFY `id_keluarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `lembaga`
--
ALTER TABLE `lembaga`
  MODIFY `id_lembaga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `potensidesa`
--
ALTER TABLE `potensidesa`
  MODIFY `id_potensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `privacy`
--
ALTER TABLE `privacy`
  MODIFY `id_privacy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `programdesa`
--
ALTER TABLE `programdesa`
  MODIFY `id_program` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
