-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2016 at 08:06 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myfiles_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `no_id` int(10) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_umum`
--

CREATE TABLE IF NOT EXISTS `data_umum` (
  `no_data` int(20) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_data` varchar(50) NOT NULL,
  `mata_kuliah` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `type_file` varchar(10) NOT NULL,
  `ukuran` varchar(20) NOT NULL,
  `file` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_umum`
--

INSERT INTO `data_umum` (`no_data`, `tanggal`, `nama_data`, `mata_kuliah`, `semester`, `type_file`, `ukuran`, `file`) VALUES
(1, '2016-01-08', 'internet', 'internet', '5', 'docx', '14606', 'files/internet.docx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`no_id`);

--
-- Indexes for table `data_umum`
--
ALTER TABLE `data_umum`
  ADD PRIMARY KEY (`no_data`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
