-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               11.1.2-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for btth01_cse485
CREATE DATABASE IF NOT EXISTS `btth01_cse485` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `btth01_cse485`;

-- Dumping structure for table btth01_cse485.baiviet
CREATE TABLE IF NOT EXISTS `baiviet` (
  `ma_bviet` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tieude` varchar(200) NOT NULL,
  `ten_bhat` varchar(100) NOT NULL,
  `ma_tloai` int(10) unsigned NOT NULL,
  `tomtat` text NOT NULL,
  `noidung` text DEFAULT NULL,
  `ma_tgia` int(10) unsigned NOT NULL,
  `ngayviet` date NOT NULL,
  `hinhanh` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ma_bviet`),
  KEY `ma_tloai` (`ma_tloai`),
  KEY `ma_tgia` (`ma_tgia`),
  CONSTRAINT `baiviet_ibfk_1` FOREIGN KEY (`ma_tloai`) REFERENCES `theloai` (`ma_tloai`),
  CONSTRAINT `baiviet_ibfk_2` FOREIGN KEY (`ma_tgia`) REFERENCES `tacgia` (`ma_tgia`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table btth01_cse485.baiviet: ~4 rows (approximately)
INSERT INTO `baiviet` (`ma_bviet`, `tieude`, `ten_bhat`, `ma_tloai`, `tomtat`, `noidung`, `ma_tgia`, `ngayviet`, `hinhanh`) VALUES
	(1, 'hoa va la', 'hoa va la', 2, 'hoa va la', 'hoa va la', 2, '2023-09-02', 'hoa.png'),
	(2, 'thương em', 'co la va cay', 2, 'Co la va cay', 'Co la va cay', 1, '2023-09-20', 'cay.png'),
	(3, 'love you', 'thương', 2, 'love you', 'love you', 1, '2023-09-07', 'love.png'),
	(4, 'Nhạc sôi động', 'yêu em', 3, 'Nhạc sôi động', 'Nhạc sôi động', 2, '0000-00-00', 'nhac.png');

-- Dumping structure for table btth01_cse485.tacgia
CREATE TABLE IF NOT EXISTS `tacgia` (
  `ma_tgia` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ten_tgia` varchar(100) NOT NULL,
  `hinh_tgia` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ma_tgia`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table btth01_cse485.tacgia: ~3 rows (approximately)
INSERT INTO `tacgia` (`ma_tgia`, `ten_tgia`, `hinh_tgia`) VALUES
	(1, 'Nhacvietplus', 'Nhacvietplus.png'),
	(2, 'Ngoc Bich', 'anh.pgn'),
	(3, 'Nguyen duc', 'chi.png');

-- Dumping structure for table btth01_cse485.theloai
CREATE TABLE IF NOT EXISTS `theloai` (
  `ma_tloai` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ten_tloai` varchar(50) NOT NULL,
  PRIMARY KEY (`ma_tloai`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table btth01_cse485.theloai: ~4 rows (approximately)
INSERT INTO `theloai` (`ma_tloai`, `ten_tloai`) VALUES
	(1, 'Nhạc trữ tình'),
	(2, 'Nhạc trẻ'),
	(3, 'Nhạc pop'),
	(4, 'Nhạc vàng');

-- Dumping structure for table btth01_cse485.users
CREATE TABLE IF NOT EXISTS `users` (
  `idusers` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  PRIMARY KEY (`idusers`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table btth01_cse485.users: ~0 rows (approximately)

-- Dumping structure for view btth01_cse485.vw_music
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `vw_music` (
	`ma_bviet` INT(10) UNSIGNED NOT NULL,
	`tieude` VARCHAR(200) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`ten_bhat` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`ma_tloai` INT(10) UNSIGNED NOT NULL,
	`tomtat` TEXT NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`noidung` TEXT NULL COLLATE 'utf8mb4_unicode_ci',
	`ma_tgia` INT(10) UNSIGNED NOT NULL,
	`ngayviet` DATE NOT NULL,
	`hinhanh` VARCHAR(200) NULL COLLATE 'utf8mb4_unicode_ci',
	`ten_tloai` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`ten_tgia` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_unicode_ci'
) ENGINE=MyISAM;

-- Dumping structure for view btth01_cse485.vw_music
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `vw_music`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `vw_music` AS SELECT `baiviet`.`ma_bviet` AS `ma_bviet`, `baiviet`.`tieude` AS `tieude`, `baiviet`.`ten_bhat` AS `ten_bhat`, `baiviet`.`ma_tloai` AS `ma_tloai`, `baiviet`.`tomtat` AS `tomtat`, `baiviet`.`noidung` AS `noidung`, `baiviet`.`ma_tgia` AS `ma_tgia`, `baiviet`.`ngayviet` AS `ngayviet`, `baiviet`.`hinhanh` AS `hinhanh`, `theloai`.`ten_tloai` AS `ten_tloai`, `tacgia`.`ten_tgia` AS `ten_tgia` FROM ((`baiviet` join `theloai` on(`baiviet`.`ma_tloai` = `theloai`.`ma_tloai`)) join `tacgia` on(`baiviet`.`ma_tgia` = `tacgia`.`ma_tgia`)) ;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
