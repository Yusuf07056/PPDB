-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Bulan Mei 2021 pada 09.40
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
(29, '1wyhxf1.jpg', '0880101324342'),
(30, 'logo_channel_copy.png', '08823232323'),
(31, 'album202009031521111.jpg', '2312321312'),
(32, 'ktp.jpeg', '088232323231'),
(33, 'hinabb.jpg', '0822331106466');

-- --------------------------------------------------------

--
-- Struktur dari tabel `formulir`
--

CREATE TABLE `formulir` (
  `no_daftar` int(16) NOT NULL,
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
  `provinsi` varchar(128) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `nisn` varchar(50) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `alamat_asal_sekolah` varchar(50) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `nama_orangtua` varchar(50) NOT NULL,
  `alamat_orangtua` varchar(50) NOT NULL,
  `no_kk` int(16) NOT NULL,
  `pendapatan` int(16) NOT NULL,
  `no_hp_ortu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `formulir`
--

INSERT INTO `formulir` (`no_daftar`, `nama_lengkap`, `gender`, `kota_kelahiran`, `tgl_lahir`, `agama`, `anak_ke`, `saudara`, `alamat`, `RT`, `RW`, `kelurahan`, `kecamatan`, `kota_kab`, `provinsi`, `kode_pos`, `no_hp`, `nisn`, `asal_sekolah`, `alamat_asal_sekolah`, `foto`, `nama_orangtua`, `alamat_orangtua`, `no_kk`, `pendapatan`, `no_hp_ortu`) VALUES
(4, 'namikaze minato', 'Laki-laki', 'surabaya', '2000-11-09', 'Islam', 1, 0, 'bulan', 1, 1, 'semili', 'sukolili', 'surabaya', 'jatim', 9110, 9110, '231093', 'SDN konoha', 'konoha gakure  gang1', 'nasi-goreng-jawa-500x300.jpg', '', '', 0, 0, 0),
(5, 'halo', 'Laki-laki', 'surabaya', '2021-05-10', 'Islam', 1, 1, 'surabaya', 1, 1, 'semolowaru', 'sukolilo', 'surabaya', 'jatim', 1, 1, '432423', 'SDN konoha', 'partai', '', '', '', 0, 0, 0),
(6, 'mmmmm', 'Laki-laki', 'mmmmm', '2021-05-10', 'Islam', 1, 1, 'mmmmm', 1, 1, 'mmmm', 'mmmm', 'mmmm', 'mmmm', 2, 2, '231241', 'SDN konoha', 'mmmmmm', 'ere21.png', '', '', 0, 0, 0),
(7, 'bayu', 'Laki-laki', 'surabaya', '2021-05-10', 'Islam', 1, 1, 'halod', 1, 1, 'mbuh', 'gaeroh', 'surabaya', 'jatim', 1, 1, '23432', 'SDN konoha', 'sdnkonoha gang1', 'aki-p-bubarkan-jkt48-58c743fbae7e619511589981.jpg', '', '', 0, 0, 0),
(8, 'yusuf krisna novanda', 'Laki-laki', 'surabaya', '2000-11-09', 'Islam', 1, 0, 'JL.semolowaru no 32 surabaya', 1, 1, 'semolowaru', 'sukolilo', 'surabaya', 'jatim', 60119, 2147483647, '1243234452354234', 'home schooling', 'JL.semolowaru no 32 surabaya', 'aki-p-bubarkan-jkt48-58c743fbae7e6195115899812.jpg', '', '', 0, 0, 0),
(9, 'yudhis', 'Laki-laki', 'surabaya', '2021-05-17', 'Islam', 1, 1, 'semolo', 1, 1, 'semolowaru', 'sukolilo', 'surabaya', 'jatim', 80119, 2147483647, '2314234323423', 'smp untag', 'smptag surabaya', 'aki-p-bubarkan-jkt48-58c743fbae7e6195115899813.jpg', '', '', 0, 0, 0),
(10, 'halo', 'Laki-laki', 'malang', '2021-05-17', 'Islam', 1, 1, 'alamat', 1, 1, 'pp', 'mmmm', 'surabaya', 'jatim', 1, 1, '2314234323423', 'SDN konoha', 'apa kamu', 'aki-p-bubarkan-jkt48-58c743fbae7e6195115899815.jpg', '', '', 0, 0, 0),
(11, 'p', 'Laki-laki', 'pp', '2021-05-17', 'Islam', 1, 1, 'ppp', 1, 1, 'pppp', 'ppppp', 'pppppp', 'ppppppp', 1, 1, '1', 'SDN konoha', 'konoha', 'aki-p-bubarkan-jkt48-58c743fbae7e61951158998112.jpg', 'll', 'lll', 1, 1, 1),
(12, 'andara', 'Laki-laki', 'surabaya', '2000-04-18', 'Islam', 1, 4, 'trunojoyo', 1, 1, 'semolowaru', 'sukolilo', 'surabaya', 'jawa timur', 6118, 2147483647, '01293000891203', 'smp untag', 'semolo selatan', 'aki-p-bubarkan-jkt48-58c743fbae7e61951158998113.jpg', 'bambang', 'sedati', 2147483647, 2000000, 2147483647);

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
-- Dumping data untuk tabel `validasi_bukti`
--

INSERT INTO `validasi_bukti` (`id_valbuk`, `id_bukti`, `stts`) VALUES
(1, 24, 'TERIMA'),
(2, 25, 'TERIMA'),
(3, 31, 'REVISI'),
(4, 24, 'REVISI'),
(5, 24, 'TERIMA'),
(6, 24, 'TERIMA'),
(7, 24, 'TERIMA'),
(8, 24, 'TERIMA'),
(9, 24, 'TERIMA'),
(10, 24, 'TERIMA'),
(11, 24, 'TERIMA'),
(12, 24, 'TERIMA'),
(13, 24, 'TERIMA'),
(14, 24, 'TERIMA'),
(15, 24, 'TERIMA'),
(16, 24, 'TERIMA'),
(17, 24, 'TERIMA'),
(18, 24, 'TERIMA'),
(19, 24, 'TERIMA'),
(20, 24, 'TERIMA'),
(21, 33, 'REVISI');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bukti_pembayaran`
--
ALTER TABLE `bukti_pembayaran`
  ADD PRIMARY KEY (`id_bukti`);

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
-- AUTO_INCREMENT untuk tabel `bukti_pembayaran`
--
ALTER TABLE `bukti_pembayaran`
  MODIFY `id_bukti` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

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
  MODIFY `id_valbuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
