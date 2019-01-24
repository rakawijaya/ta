-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Des 2018 pada 08.44
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coba`
--

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `am`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `am` (
`k` double
,`pl` double
,`rbl` double
,`ch` double
,`cat` double
,`jt` double
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `ap`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `ap` (
`k` double
,`pl` double
,`rbl` double
,`ch` double
,`cat` double
,`jt` double
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bobot`
--

CREATE TABLE `bobot` (
  `k` varchar(12) NOT NULL,
  `pl` varchar(12) NOT NULL,
  `rbl` varchar(12) NOT NULL,
  `ch` varchar(12) NOT NULL,
  `cat` varchar(12) NOT NULL,
  `jt` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bobot`
--

INSERT INTO `bobot` (`k`, `pl`, `rbl`, `ch`, `cat`, `jt`) VALUES
('0.172131148', '0.12295082', '0.286885246', '0.172131148', '0.12295082', '0.12295082');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `d`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `d` (
`nama` varchar(25)
,`dp` double
,`dm` double
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `hasil`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `hasil` (
`nama` varchar(25)
,`hasil` double
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `isi`
--

CREATE TABLE `isi` (
  `nama` varchar(25) NOT NULL,
  `k` int(11) NOT NULL,
  `pl` int(11) NOT NULL,
  `rbl` int(11) NOT NULL,
  `ch` int(11) NOT NULL,
  `cat` int(11) NOT NULL,
  `jt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `isi`
--

INSERT INTO `isi` (`nama`, `k`, `pl`, `rbl`, `ch`, `cat`, `jt`) VALUES
('ampelgading', 0, 4, 0, 2, 2, 3),
('bantar bolang', 1, 0, 1, 1, 1, 1),
('belik', 1, 0, 2, 1, 1, 2),
('bodeh', 1, 4, 2, 2, 1, 0),
('comal', 0, 2, 0, 2, 2, 3),
('moga', 1, 3, 2, 0, 1, 2),
('pemalang', 0, 3, 0, 2, 2, 3),
('petarukan', 0, 3, 0, 2, 2, 3),
('pulosari', 3, 2, 2, 1, 4, 0),
('randudongkal', 2, 0, 2, 1, 1, 1),
('taman', 0, 3, 0, 2, 0, 3),
('ulujami', 0, 1, 0, 2, 3, 3),
('warungpring', 1, 3, 0, 1, 1, 2),
('watukumpul', 4, 0, 2, 0, 1, 2);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `jumlah`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `jumlah` (
`k` double
,`pl` double
,`rbl` double
,`ch` double
,`cat` double
,`jt` double
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `normalisasi`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `normalisasi` (
`nama` varchar(25)
,`k` double
,`pl` double
,`rbl` double
,`ch` double
,`cat` double
,`jt` double
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `nw`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `nw` (
`nama` varchar(25)
,`k` double
,`pl` double
,`rbl` double
,`ch` double
,`cat` double
,`jt` double
);

-- --------------------------------------------------------

--
-- Struktur untuk view `am`
--
DROP TABLE IF EXISTS `am`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `am`  AS  select min(`nw`.`k`) AS `k`,min(`nw`.`pl`) AS `pl`,min(`nw`.`rbl`) AS `rbl`,max(`nw`.`ch`) AS `ch`,min(`nw`.`cat`) AS `cat`,max(`nw`.`jt`) AS `jt` from `nw` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `ap`
--
DROP TABLE IF EXISTS `ap`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ap`  AS  select max(`nw`.`k`) AS `k`,max(`nw`.`pl`) AS `pl`,max(`nw`.`rbl`) AS `rbl`,min(`nw`.`ch`) AS `ch`,max(`nw`.`cat`) AS `cat`,min(`nw`.`jt`) AS `jt` from `nw` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `d`
--
DROP TABLE IF EXISTS `d`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `d`  AS  select `nw`.`nama` AS `nama`,sqrt((((((((`ap`.`k` - `nw`.`k`) * (`ap`.`k` - `nw`.`k`)) + ((`ap`.`pl` - `nw`.`pl`) * (`ap`.`pl` - `nw`.`pl`))) + ((`ap`.`rbl` - `nw`.`rbl`) * (`ap`.`rbl` - `nw`.`rbl`))) + ((`ap`.`ch` - `nw`.`ch`) * (`ap`.`ch` - `nw`.`ch`))) + ((`ap`.`cat` - `nw`.`cat`) * (`ap`.`cat` - `nw`.`cat`))) + ((`ap`.`jt` - `nw`.`jt`) * (`ap`.`jt` - `nw`.`jt`)))) AS `dp`,sqrt((((((((`am`.`k` - `nw`.`k`) * (`am`.`k` - `nw`.`k`)) + ((`am`.`pl` - `nw`.`pl`) * (`am`.`pl` - `nw`.`pl`))) + ((`am`.`rbl` - `nw`.`rbl`) * (`am`.`rbl` - `nw`.`rbl`))) + ((`am`.`ch` - `nw`.`ch`) * (`am`.`ch` - `nw`.`ch`))) + ((`am`.`cat` - `nw`.`cat`) * (`am`.`cat` - `nw`.`cat`))) + ((`am`.`jt` - `nw`.`jt`) * (`am`.`jt` - `nw`.`jt`)))) AS `dm` from ((`nw` join `ap`) join `am`) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `hasil`
--
DROP TABLE IF EXISTS `hasil`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `hasil`  AS  select `d`.`nama` AS `nama`,(`d`.`dm` / (`d`.`dp` + `d`.`dm`)) AS `hasil` from `d` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `jumlah`
--
DROP TABLE IF EXISTS `jumlah`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `jumlah`  AS  select sqrt(sum((`isi`.`k` * `isi`.`k`))) AS `k`,sqrt(sum((`isi`.`pl` * `isi`.`pl`))) AS `pl`,sqrt(sum((`isi`.`rbl` * `isi`.`rbl`))) AS `rbl`,sqrt(sum((`isi`.`ch` * `isi`.`ch`))) AS `ch`,sqrt(sum((`isi`.`cat` * `isi`.`cat`))) AS `cat`,sqrt(sum((`isi`.`jt` * `isi`.`jt`))) AS `jt` from `isi` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `normalisasi`
--
DROP TABLE IF EXISTS `normalisasi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `normalisasi`  AS  select `isi`.`nama` AS `nama`,(`isi`.`k` / `jumlah`.`k`) AS `k`,(`isi`.`pl` / `jumlah`.`pl`) AS `pl`,(`isi`.`rbl` / `jumlah`.`rbl`) AS `rbl`,(`isi`.`ch` / `jumlah`.`ch`) AS `ch`,(`isi`.`cat` / `jumlah`.`cat`) AS `cat`,(`isi`.`jt` / `jumlah`.`jt`) AS `jt` from (`isi` join `jumlah`) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `nw`
--
DROP TABLE IF EXISTS `nw`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `nw`  AS  select `normalisasi`.`nama` AS `nama`,(`normalisasi`.`k` * `bobot`.`k`) AS `k`,(`normalisasi`.`pl` * `bobot`.`pl`) AS `pl`,(`normalisasi`.`rbl` * `bobot`.`rbl`) AS `rbl`,(`normalisasi`.`ch` * `bobot`.`ch`) AS `ch`,(`normalisasi`.`cat` * `bobot`.`cat`) AS `cat`,(`normalisasi`.`jt` * `bobot`.`jt`) AS `jt` from (`normalisasi` join `bobot`) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `isi`
--
ALTER TABLE `isi`
  ADD PRIMARY KEY (`nama`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
