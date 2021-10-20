-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 20, 2021 at 10:28 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id17797112_utsweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `nama_depan` varchar(35) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama_belakang` varchar(35) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama_lengkap` varchar(35) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(35) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alamat` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deskripsi_diri` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nomor_hp` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `github` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`nama_depan`, `nama_belakang`, `nama_lengkap`, `email`, `alamat`, `deskripsi_diri`, `nomor_hp`, `facebook`, `github`) VALUES
('RIA', 'SUSANTI', 'RIA SUSANTI', 'riassnti24@gmail.com', 'Puri Adiyasa Residence, Tangerang, Indonesia', NULL, '082113446584', 'https://web.facebook.com/riassnti', 'https://github.com/riassnti');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `nama_universitas` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jurusan_kuliah` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `waktu_kuliah` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama_sma` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jurusan_sma` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `waktu_sma` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`nama_universitas`, `jurusan_kuliah`, `waktu_kuliah`, `nama_sma`, `jurusan_sma`, `waktu_sma`) VALUES
('Pembangunan Jaya University', 'Informatics Student', 'August 2019 - now', 'State High School 1 Cikande', 'IPS', 'July 2016 - May 2019');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `divisi_pekerjaan` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama_perusahaan` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deskripsi_pekerjaan` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `waktu_menjabat` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`divisi_pekerjaan`, `nama_perusahaan`, `deskripsi_pekerjaan`, `waktu_menjabat`) VALUES
('SPG Carvil', 'Carvil Cikande Store', NULL, 'May 2019 - June 2019');

-- --------------------------------------------------------

--
-- Table structure for table `interests`
--

CREATE TABLE `interests` (
  `interests_1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `interests_2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `interests_3` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `interests`
--

INSERT INTO `interests` (`interests_1`, `interests_2`, `interests_3`) VALUES
('Karate Martial Arts', 'Travelling', 'Programming');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `skills_1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `skills_2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`skills_1`, `skills_2`) VALUES
('basic programming', 'microsoft');

-- --------------------------------------------------------

--
-- Table structure for table `webinar_certifications`
--

CREATE TABLE `webinar_certifications` (
  `certifications_1` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `certifications_2` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `certifications_3` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `certifications_4` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `webinar_certifications`
--

INSERT INTO `webinar_certifications` (`certifications_1`, `certifications_2`, `certifications_3`, `certifications_4`) VALUES
('Participant Webminar -  Introducing Android Studio And Creating Your First App - by AKADEMIKITA', 'Microsoft Office Training - Excellent Training Center Certification', 'Cybersecurity Essentials - Cisco Certification', 'Introduction to Cybersecurity - Cisco Certification');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
