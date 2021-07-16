-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jul 2021 pada 10.30
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lokasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `petshop`
--

CREATE TABLE `petshop` (
  `id` int(11) NOT NULL,
  `petshop` varchar(255) NOT NULL,
  `koordinat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petshop`
--

INSERT INTO `petshop` (`id`, `petshop`, `koordinat`) VALUES
(20, 'Zyafira PetShop', '-5.3980947,105.2922354'),
(21, '\"Pet Shop\" Clambit\'s', '-5.3971701,105.2824453'),
(22, 'Rumi Pet Shop', '-5.3971701,105.2824453'),
(23, 'Sky Petshop', '-5.3937851,105.2605619'),
(24, 'Pet Shop Salsa', '-5.3937851,105.2605619'),
(25, 'REL Petshop (Reptil Evolution Lampung Petshop)', '-5.403641,105.2367795'),
(26, 'IBUN PETSHOP', '-5.4096211,105.2473516'),
(27, 'Simpur II Toko', '-5.4125748,105.2479606'),
(28, 'Paws Pet House', '-5.413678,105.2513726'),
(29, 'Belle Pet Shop Salon & Grooming', '-5.413678,105.2513726'),
(30, 'iPet Shop & Care', '-5.413678,105.2513726'),
(31, 'MeMo Petshop', '-5.4255549,105.2545687'),
(32, 'My PetShop', '-5.4252552,105.2656605'),
(33, 'Paws Pet House', '-5.4208954,105.2543788'),
(34, 'Lucky Star Petshop', '-5.4208954,105.2543788'),
(35, 'Evo Petshop', '-5.4208954,105.2543788'),
(36, 'Miko', '-5.4370328,105.2380675'),
(37, 'Aneka Jaya Petshop', '-5.4484572,105.2640706'),
(38, 'Marbel Pet Shop', '-5.4049586,105.2125233'),
(39, 'adi KR', '-5.4366186,105.271722');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `petshop`
--
ALTER TABLE `petshop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `petshop`
--
ALTER TABLE `petshop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
