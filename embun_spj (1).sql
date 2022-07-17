-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jul 2022 pada 07.48
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `embun_spj`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `keterangan`, `gambar`) VALUES
(1, 'Tas Arule', 'Tas Rajut', 'Divisi_Yang_diinginkan_(1)1.png'),
(2, 'Pot Ram', 'Pot anyaman dari bambu', 'favpng_gratuitous-space-battles-wikia1.png'),
(3, 'Douop,', 'Alatp', 'Screenshot_2022-06-23_140038.png'),
(7, 'Tas queue', 'tas beralur', 'Screenshot_2022-06-23_1400381.png'),
(9, 'Dower', 'mantap cepat', 'Kelompok_2_2_TI_E_Struktur_Organisasi_Proyek_(1).png'),
(10, 'Dnuioglbi', 'njgcfdszazgrtf', 'Cerita_Instagram_Ikon_Kuning_Lebaran_Idul_Fitri.png'),
(11, 'j khbjojievnk jio\'p', 'lomjinhubiguhoij', 'pinpng_com-hinata-png-1432857.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pencatatan`
--

CREATE TABLE `pencatatan` (
  `id` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `nama_pembeli` varchar(100) NOT NULL,
  `total_bayar` int(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pembayaran` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pencatatan`
--

INSERT INTO `pencatatan` (`id`, `id_barang`, `jumlah`, `nama_pembeli`, `total_bayar`, `tanggal`, `alamat`, `pembayaran`, `status`) VALUES
(1, 3, 1, 'Rina', 150000, '2022-06-01', 'sungai selodang', 'Tunai', 'Selesai'),
(3, 1, 1, 'Ri', 150000, '2022-06-17', 'sungai selodang', 'BRI 0111-01-058xxx-50-7', 'Dalam Pengiriman'),
(4, 2, 1, 'Rina', 150000, '2022-05-01', 'sungai selodang', 'BRI 0111-01-058xxx-50-7', 'PO');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `gambar`, `role`, `date_created`) VALUES
(1, 'Embun', 'eee@gmail.com', '$2y$10$pofkvkvBgMXPwOINM39a4uZU6RISutK2JLouhHEzqeLCPo.sqg0aC', 'default.jpg', 'Admin', 1655132997),
(2, 'Embun', 'embundutaa@gmail.com', '$2y$10$FXdIxkTARs3okWCbz1EmmOlohNG73WRhg68D9YkhXQehuzHQRsBNa', 'default.jpg', 'Admin', 1655133754),
(3, 'Admin', 'admin@gmail.com', '$2y$10$B2Ln10GD36GWWsBwRjo8RuOLSH/519AGmdagOT5ll9VHybUEG7wFO', 'default.jpg', 'Admin', 1655197144),
(4, 'Embun Duta Laksmana', 'embon122@gmail.com', '$2y$10$PLF/CzyoIhkDqdPduVZl1eQXo6JARGbQhcDmDMuthZYBihEgzeg4S', 'default.jpg', 'Admin', 1655263677),
(5, 'Embun', 'embunduta@gmail.com', '$2y$10$yhrXd1uNHZxfe9E4pwTi8ujmkXC7cJcep2t.PpPkBkPM4YJpNdVLe', 'default.jpg', 'Admin', 1655265229),
(6, 'Embun Duta Laksmana', 'bbs@gmail.com', '$2y$10$jZ0z0jRfW6o6XQeAo2/tzupc702FyI5KStqtLQmuME78pexdIZc/K', 'default.jpg', 'Admin', 1655708835);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pencatatan`
--
ALTER TABLE `pencatatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pencatatan`
--
ALTER TABLE `pencatatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pencatatan`
--
ALTER TABLE `pencatatan`
  ADD CONSTRAINT `pencatatan_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
