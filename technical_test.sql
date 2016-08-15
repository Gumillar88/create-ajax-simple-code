-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Agu 2016 pada 20.24
-- Versi Server: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `technical_test`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_reg`
--

CREATE TABLE IF NOT EXISTS `tbl_reg` (
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_reg`
--

INSERT INTO `tbl_reg` (`email`, `name`, `password`) VALUES
('er@er', 'er', 'er'),
('', 'name', 'password'),
('', '', ''),
('', '', ''),
('', '', ''),
('sd', 'sd', 'sd'),
('dd', 'dd', 'dd'),
('', '', ''),
('ss', 'ss', 'ss'),
('email@email.com', 'email', 'email'),
('testingcode@email.com', 'testing', 'testin'),
('codetest@code.com', 'code', 'code');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
