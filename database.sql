-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: 08 Apr 2018 pada 15.28
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imam`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `id` int(11) NOT NULL,
  `kd_buku` varchar(100) NOT NULL,
  `nama_buku` varchar(200) NOT NULL,
  `nama_pengarang` varchar(50) NOT NULL,
  `nama_penerbit` varchar(50) NOT NULL,
  `tahun_terbit` varchar(4) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_buku`
--

INSERT INTO `tbl_buku` (`id`, `kd_buku`, `nama_buku`, `nama_pengarang`, `nama_penerbit`, `tahun_terbit`, `created_on`) VALUES
(2, '115', 'Imama kadu', 'ismail marzuki', 'syafrie', '2018', '2018-04-08 13:20:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_detail`
--

CREATE TABLE `tbl_detail` (
  `kode_transaksi` int(11) NOT NULL,
  `kode_buku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_header`
--

CREATE TABLE `tbl_header` (
  `kode_transaksi` int(11) NOT NULL,
  `kode_siswa` int(11) NOT NULL,
  `kode_petugas` int(11) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `denda` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_judul`
--

CREATE TABLE `tbl_judul` (
  `kode_judul` int(11) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `stok` int(11) NOT NULL,
  `kode_rak` int(11) NOT NULL,
  `kode_baris` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_judul`
--

INSERT INTO `tbl_judul` (`kode_judul`, `judul_buku`, `stok`, `kode_rak`, `kode_baris`) VALUES
(1, 'Matematika', 5, 1112, 2221),
(2201, 'Fisika', 10, 22574, 4887);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `username`, `password`, `status`) VALUES
(1, 'imam', '123', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_petugas`
--

CREATE TABLE `tbl_petugas` (
  `kode_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `no_telepon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `kode_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `kelas_siswa` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`kode_siswa`, `nama_siswa`, `kelas_siswa`, `alamat`) VALUES
(25225, 'Imam Suyudi', 'VIII-2', 'Jl. Kemayoran Barat VI'),
(200015, 'Ima', 'IX-8', 'Jl. Kesiswaan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_header`
--
ALTER TABLE `tbl_header`
  ADD PRIMARY KEY (`kode_transaksi`);

--
-- Indexes for table `tbl_judul`
--
ALTER TABLE `tbl_judul`
  ADD PRIMARY KEY (`kode_judul`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
  ADD PRIMARY KEY (`kode_petugas`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`kode_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
