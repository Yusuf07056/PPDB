-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Apr 2021 pada 19.35
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
-- Database: `ppdb_ipiems`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata`
--

CREATE TABLE `biodata` (
  `id_biodata` int(11) NOT NULL,
  `id_formulir` int(11) NOT NULL,
  `id_data_ortu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukti_pembayaran`
--

CREATE TABLE `bukti_pembayaran` (
  `id_bukti` int(100) NOT NULL,
  `bukti_transfer` varchar(100) NOT NULL,
  `no_wa` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bukti_pembayaran`
--

INSERT INTO `bukti_pembayaran` (`id_bukti`, `bukti_transfer`, `no_wa`) VALUES
(24, 'WIN_20201022_18_33_24_Pro.jpg', '090930123'),
(25, '7.jpg', '09879678798'),
(27, '8.jpg', '4320493249'),
(28, '011.jpg', '1321312312'),
(29, '1wyhxf1.jpg', '0880101324342');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_orang_tua_wali`
--

CREATE TABLE `data_orang_tua_wali` (
  `id_orangtua` int(11) NOT NULL,
  `nama_orangtua` varchar(50) NOT NULL,
  `alamat_orangtua` varchar(50) NOT NULL,
  `nik` int(11) NOT NULL,
  `pendapatan` int(11) NOT NULL,
  `no_hp_ortu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `formulir`
--

CREATE TABLE `formulir` (
  `no_daftar` int(16) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `kota_kelahiran` varchar(50) NOT NULL,
  `tgl_lahir` varchar(128) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `anak_ke` int(11) NOT NULL,
  `saudara` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `RT` int(11) NOT NULL,
  `RW` int(11) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kota_kab` varchar(50) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `nisn` varchar(50) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `alamat_asal_sekolah` varchar(50) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `formulir`
--

INSERT INTO `formulir` (`no_daftar`, `jurusan`, `nama_lengkap`, `gender`, `kota_kelahiran`, `tgl_lahir`, `agama`, `anak_ke`, `saudara`, `alamat`, `RT`, `RW`, `kelurahan`, `kecamatan`, `kota_kab`, `kode_pos`, `no_hp`, `nisn`, `asal_sekolah`, `alamat_asal_sekolah`, `foto`) VALUES
(1, 'IPA', 'yusuf krisna', 'Laki-laki', 'surabaya', '', 'Islam', 1, 1, 'semolo32', 1, 1, 'semolowaru', 'sukolilo', 'jatim', 1, 2147483647, '2131434123123', 'smp untag', 'jl 17 agustus surabaya', 'raiku2.png'),
(2, 'IPA', 'bayu', 'Laki-laki', 'sidoarjo', '2021-04-13', 'Islam', 1, 3, 'bnbnbn', 1, 2, 'krdeungsugo', 'prambon', 'sidoarjo', 32443, 6656566, '67687998', 'smp bbbb', 'bbbb', 'ere11.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_role`
--

CREATE TABLE `list_role` (
  `id_role` int(11) NOT NULL,
  `nama_role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `list_role`
--

INSERT INTO `list_role` (`id_role`, `nama_role`) VALUES
(1, 'admin_utama'),
(2, 'admin_dua');

-- --------------------------------------------------------

--
-- Struktur dari tabel `registrasi`
--

CREATE TABLE `registrasi` (
  `id_regis` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `date` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `registrasi`
--

INSERT INTO `registrasi` (`id_regis`, `nama`, `password`, `date`, `email`, `role_id`, `is_active`) VALUES
(1, 'yusuf krisna', '$2y$10$QxC9VKNFyRCDHmchHOFAC.0Gs0884dlA9gFHUbgemjfhKn5JvJRgy', '0000-00-00', 'ghidora@qmail.id', 1, 1),
(2, 'azrul aris', '$2y$10$aY9roGnSbN16XlDQWdSn9ucAGL3Ftkbw8VBJ8ECjJq3qAPNOkTLo2', '0000-00-00', 'mazrul@gmail.com', 1, 1),
(3, 'arman', '$2y$10$ep/x/bztiXy2m95S1Nrf2umB5YFYavFb7b.HflyJDFzdLOW3y11ym', '0000-00-00', 'arman@gmail.com', 1, 1),
(4, 'bayu', '$2y$10$a3lFcd2Y8hxEAyIzvTIbXOnH/MkAsciJryd5RZg23yHhvMNUfA5em', '0000-00-00', 'bayu@gmail.com', 1, 1),
(5, 'andra', '$2y$10$JhP0hH1cdgvLhT/tkHYI/OSEVe62qqh8idKfaR6r.SI5eYZmSEAb2', 'Fri, 26 Mar 21 05:54:33 +0100', 'andra@gmail.com', 1, 1),
(6, 'admin', '$2y$10$A1yr3Iayi4oOeWF6q8rd3OBc4ExhK8QbFhnBbnTgULMzlgGEml8i6', 'Fri, 16 Apr 21 16:08:54 +0200', 'admin@gmail.com', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `validasi_biodata`
--

CREATE TABLE `validasi_biodata` (
  `id_valbio` int(11) NOT NULL,
  `id_biodata` int(11) NOT NULL,
  `stts` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `validasi_bukti`
--

CREATE TABLE `validasi_bukti` (
  `id_valbuk` int(11) NOT NULL,
  `id_bukti` int(11) NOT NULL,
  `stts` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id_biodata`),
  ADD KEY `id_formulir` (`id_formulir`),
  ADD KEY `id_data_ortu` (`id_data_ortu`);

--
-- Indeks untuk tabel `bukti_pembayaran`
--
ALTER TABLE `bukti_pembayaran`
  ADD PRIMARY KEY (`id_bukti`);

--
-- Indeks untuk tabel `data_orang_tua_wali`
--
ALTER TABLE `data_orang_tua_wali`
  ADD PRIMARY KEY (`id_orangtua`);

--
-- Indeks untuk tabel `formulir`
--
ALTER TABLE `formulir`
  ADD PRIMARY KEY (`no_daftar`);

--
-- Indeks untuk tabel `list_role`
--
ALTER TABLE `list_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id_regis`);

--
-- Indeks untuk tabel `validasi_bukti`
--
ALTER TABLE `validasi_bukti`
  ADD PRIMARY KEY (`id_valbuk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id_biodata` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `bukti_pembayaran`
--
ALTER TABLE `bukti_pembayaran`
  MODIFY `id_bukti` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `data_orang_tua_wali`
--
ALTER TABLE `data_orang_tua_wali`
  MODIFY `id_orangtua` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `formulir`
--
ALTER TABLE `formulir`
  MODIFY `no_daftar` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `list_role`
--
ALTER TABLE `list_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id_regis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `validasi_bukti`
--
ALTER TABLE `validasi_bukti`
  MODIFY `id_valbuk` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `biodata`
--
ALTER TABLE `biodata`
  ADD CONSTRAINT `id_data_ortu` FOREIGN KEY (`id_data_ortu`) REFERENCES `data_orang_tua_wali` (`id_orangtua`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
