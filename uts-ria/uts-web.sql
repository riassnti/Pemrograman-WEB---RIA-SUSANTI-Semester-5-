-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table uts-web.about
CREATE TABLE IF NOT EXISTS `about` (
  `nama_lengkap` varchar(30) DEFAULT NULL,
  `nama_depan` varchar(30) DEFAULT NULL,
  `nama_belakang` varchar(30) DEFAULT NULL,
  `nomor_hp` varchar(12) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `deskripsi_diri` varchar(250) DEFAULT NULL,
  `facebook` varchar(250) DEFAULT NULL,
  `github` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table uts-web.about: ~1 rows (approximately)
/*!40000 ALTER TABLE `about` DISABLE KEYS */;
INSERT INTO `about` (`nama_lengkap`, `nama_depan`, `nama_belakang`, `nomor_hp`, `email`, `alamat`, `deskripsi_diri`, `facebook`, `github`) VALUES
	('RIA SUSANTI', 'RIA', 'SUSANTI', '082113446584', 'riassnti24@gmail.com', 'Puri Adiyasa Residence, Solear, Tangerang-Banten', NULL, 'https://web.facebook.com/riassnti', 'https://github.com/riassnti');
/*!40000 ALTER TABLE `about` ENABLE KEYS */;

-- Dumping structure for table uts-web.education
CREATE TABLE IF NOT EXISTS `education` (
  `nama_universitas` varchar(50) DEFAULT NULL,
  `jurusan_kuliah` varchar(50) DEFAULT NULL,
  `waktu_kuliah` varchar(50) DEFAULT NULL,
  `nama_sma` varchar(50) DEFAULT NULL,
  `jurusan_sma` varchar(50) DEFAULT NULL,
  `waktu_sma` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table uts-web.education: ~0 rows (approximately)
/*!40000 ALTER TABLE `education` DISABLE KEYS */;
INSERT INTO `education` (`nama_universitas`, `jurusan_kuliah`, `waktu_kuliah`, `nama_sma`, `jurusan_sma`, `waktu_sma`) VALUES
	('Pembangunan Jaya University', 'Informatics Student', 'August 2019 - now', 'State High School 1 Cikande', 'IPS', 'July 2016 - May 2019');
/*!40000 ALTER TABLE `education` ENABLE KEYS */;

-- Dumping structure for table uts-web.experiences
CREATE TABLE IF NOT EXISTS `experiences` (
  `divisi_pekerjaan` varchar(100) DEFAULT NULL,
  `nama_perusahaan` varchar(100) DEFAULT NULL,
  `deskripsi_pekerjaan` varchar(100) DEFAULT NULL,
  `waktu_menjabat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table uts-web.experiences: ~0 rows (approximately)
/*!40000 ALTER TABLE `experiences` DISABLE KEYS */;
INSERT INTO `experiences` (`divisi_pekerjaan`, `nama_perusahaan`, `deskripsi_pekerjaan`, `waktu_menjabat`) VALUES
	('SPG Carvil', 'Carvil Cikande Store', NULL, 'May 2019 - June 2019');
/*!40000 ALTER TABLE `experiences` ENABLE KEYS */;

-- Dumping structure for table uts-web.interests
CREATE TABLE IF NOT EXISTS `interests` (
  `interests_1` varchar(500) DEFAULT NULL,
  `interests_2` varchar(500) DEFAULT NULL,
  `interests_3` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table uts-web.interests: ~1 rows (approximately)
/*!40000 ALTER TABLE `interests` DISABLE KEYS */;
INSERT INTO `interests` (`interests_1`, `interests_2`, `interests_3`) VALUES
	('Karate Martial Arts', 'Travelling', 'Programming');
/*!40000 ALTER TABLE `interests` ENABLE KEYS */;

-- Dumping structure for table uts-web.skills
CREATE TABLE IF NOT EXISTS `skills` (
  `skills_1` varchar(1000) DEFAULT NULL,
  `skills_2` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table uts-web.skills: ~1 rows (approximately)
/*!40000 ALTER TABLE `skills` DISABLE KEYS */;
INSERT INTO `skills` (`skills_1`, `skills_2`) VALUES
	('basic programming', 'microsoft');
/*!40000 ALTER TABLE `skills` ENABLE KEYS */;

-- Dumping structure for table uts-web.webinar_certifications
CREATE TABLE IF NOT EXISTS `webinar_certifications` (
  `certifications_1` varchar(500) DEFAULT NULL,
  `certifications_2` varchar(500) DEFAULT NULL,
  `certifications_3` varchar(500) DEFAULT NULL,
  `certifications_4` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table uts-web.webinar_certifications: ~1 rows (approximately)
/*!40000 ALTER TABLE `webinar_certifications` DISABLE KEYS */;
INSERT INTO `webinar_certifications` (`certifications_1`, `certifications_2`, `certifications_3`, `certifications_4`) VALUES
	('Participant Webminar -  Introducing Android Studio And Creating Your First App - by AKADEMIKITA', 'Microsoft Office Training - Excellent Training Center Certification', 'Cybersecurity Essentials - Cisco Certification', 'Introduction to Cybersecurity - Cisco Certification');
/*!40000 ALTER TABLE `webinar_certifications` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
