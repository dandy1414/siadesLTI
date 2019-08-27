-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2019 at 05:37 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siadeslti`
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
(1, 'irasiregar', 'ira0202'),
(2, 'kemal', 'f72064ddd9');

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
  `isi` varchar(10000) NOT NULL,
  `gambar` text NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `kategori`, `isi`, `gambar`, `tanggal`) VALUES
(11, 'Rapat Koordinasi Pamong Desa Sambut Hari Jadi Kabupaten Bantul Ke-188 Tahun', 'Agama', '<p>Pendowoharjo ---&nbsp;Pemerintah Desa Pendowoharjo kembali menggelar rapat koordinasi untuk seluruh pamong desa pada Senin lalu (14/7/2019). Kegiatan ini dilaksanakan di gedung pertemuan Manggolo Manis Desa Pendowoharjo. Peserta rapat koordinasi pamong ini terdiri dari lurah desa, carik (sekretaris desa), Kepala seksi, kepala urusan, dan seluruh staff desa. Rapat koordinasi ini bertujuan sebagai wadah komunikasi para pamong, dan sharing knowledge terkait perkembangan baik di tingkat dusun, desa, kecamatan, maupun tingkat kabupaten. Selain itu kegiatan ini bertujuan sebagai wahana sosialisasi kegiatan desa selama 1 bulan ke depan.</p>\r\n\r\n<p>Topik bahasan pada rapat koordinasi pamong kali ini adalah terkait pelaksanaan kegiatan upacara dan peringatan hari jadi Pemerintah Kabupaten Bantul yang akan digelar pada hari Sabtu (20/07/2019). Selain itu juga membahas terkait persiapan Musdes RKP yang akan segera digelar guna merencanakan kegiatan-kegiatan yang ada di tahun 2019. Mari terus bekerja membangun desa untuk mewujudkan kemandirian dan kesejahteraan bersama. - GNR</p>\r\n', 'gambar3.jpg', '2019-07-31 15:43:06'),
(12, 'Dana Operasional RT, Bentuk Apresiasi Pemerintah Desa Bagi Ketua RT di Desa Pendowoharjo', 'Sosial', '<p>Pendowoharjo--- Pemerintah Desa Pendowoharjo pada tahun 2019 menganggarkan dana intensif kegiatan operasional bagi ketua RT yang berjumlah 94 RT, yang berasal dari Alokasi Dana Desa. Dana operasional ini merupakan salah satu bentuk apresiasi Pemkab Bantul bagi seluruh ketua RT dalam menjalankan tugasnya dengan baik.</p>\r\n\r\n<p>Adapun prosedur pencairan dana operasional ketua RT diserahkan sepenuhnya kepada masing-masing kelurahan. Desa Pendowoharjo mewajibkan ketua RT yang akan mencairkan dana operasional tersebut harus melengkapi berkas kelengkapan SPJ terlebih dahulu. Setelah berkas SPJ dinyatakan lengkap, Pemerintah Desa akan melakukan proses pencairan dan dana dapat diambil di Desa Pendowoharjo bagian keuangan. Adapun jumlah yang diterima oleh masing-masing Ketua RT pada Tahun 2019 sebesar Rp 700.000,00 (belum termasuk pajak). Hingga saat ini, ketua RT yang sudah melengkapi berkas SPJ dan mencairkan dana intensif sebanyak 60 RT dari 94 RT. Para ketua RT sangat berterima kasih ata', '1564563002.png', '2019-07-31 15:50:02');

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
(5, '1553750849.png', 'Pelantikan perangkat desa'),
(6, '1553750862.png', 'Pelantikan lurah'),
(9, '1564919343.png', 'Karang Taruna');

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
(3, 'Ekonomi'),
(4, 'Budaya'),
(5, 'Politik');

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
  `file` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `nama_layanan`, `isi_layanan`, `gambar`, `file`, `tanggal`) VALUES
(39, 'Alur Pelayanan Desa', 'Pelayanan Desa', '1564589462.png', '1564589462.pdf', '2019-07-31 16:11:02');

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
(1, 'Karang Taruna', '<p>Karang Taruna adalah kegiatan muda-mudi di desa pendowoharjo</p>\r\n');

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
  `keluhan` varchar(10000) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `username`, `keluhan`, `tanggal`) VALUES
(11, 'kemal', 'Irigasi Jl.Pendowo tersumbat', '2019-07-11 15:15:14'),
(12, 'kemal', 'saluran mampet', '2019-08-05 10:09:03');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` varchar(10000) NOT NULL,
  `gambar` text NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `judul`, `isi`, `gambar`, `tanggal`) VALUES
(20, 'Rakor Persiapan Evaluasi LPMD Berprestasi Tingkat Kabupaten Bantul Tahun 2019', '<p>Pendowoharjo---&nbsp;Rasa syukur dipanjatkan atas hasil evaluasi tahap I Evaluasi Lembaga Pemberdayaan Masyarakat Desa (LPMD) Berprestasi Tingkat Kabupaten Bantul Tahun 2019 yang menyebutkan bahwa Desa Pendowoharjo masuk dalam 6 besar penilaian atas profil kegiatan LPMDnya. Selanjutnya, bersama 5 terbaik lainnya, akan dilakukan evaluasi tahap II berupa verifikasi lapangan yang akan dilaksanakan Selasa, 9 April 2019.</p>\r\n\r\n<p>Menanggapi hal ini, Ketua LPMD Desa Pendowoharjo, Ngadiman, menyampaikan bahwa untuk menindaklanjuti hasil lomba maka LPMD akan berusaha sebaik mungkin untuk mendapatkan hasil terbaik.</p>\r\n\r\n<p>Dalam rapat koordinasi di Waroeng Omah Sawah Miri, Rabu (3/4/2019) dilakukan pembahasan mengenai persiapan verifikasi lapangan berupa paparan, administrasi kesekretariatan serta kunjungan lapangan di kelompok binaan LPMD. Direncanakan kunjungan nantinya dilakukan ke TK LKMD Kaliputih dan kelompok binaan kerajinan kipas yang ada di Banyon.</p>\r\n\r\n<p>Dengan persiapan ini, diharapkan Desa Pendowoharjo akan mendapatkan prestasi yang bagus dalam evaluasi atau lomba kali ini. Di samping itu, ke depannya, peran LPMD juga sangat diharapkan dalam mensukseskan berbagai program pembangunan yang telah tertuang dalam RPJMDes Pendowoharjo.</p>\r\n', 'gambar3.jpg', '2019-08-04 13:58:23');

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
(1, '1564663108.png', 'Brayut', 'Desa Wisata');

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
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `alamat` varchar(35) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `alamat`, `jenis_kelamin`, `tanggal`) VALUES
(4, 'kemal', 'kemal12', 'Jl. Pendowo 1', 'Laki-laki', '2019-07-31 14:38:01');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `keluarga`
--
ALTER TABLE `keluarga`
  MODIFY `id_keluarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `lembaga`
--
ALTER TABLE `lembaga`
  MODIFY `id_lembaga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `potensidesa`
--
ALTER TABLE `potensidesa`
  MODIFY `id_potensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
