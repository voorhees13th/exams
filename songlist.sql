-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.28-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for song_list
DROP DATABASE IF EXISTS `song_list`;
CREATE DATABASE IF NOT EXISTS `song_list` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `song_list`;

-- Dumping structure for table song_list.list
DROP TABLE IF EXISTS `list`;
CREATE TABLE IF NOT EXISTS `list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `song_name` varchar(255) DEFAULT NULL,
  `artist` varchar(255) DEFAULT NULL,
  `lyrics` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table song_list.list: ~1 rows (approximately)
DELETE FROM `list`;
INSERT INTO `list` (`id`, `song_name`, `artist`, `lyrics`) VALUES
	(3, 'Hello Euphoria', 'Turnover', 'Thinner at the waistline\r\nI feel thinner at the waistline\r\nI\'m getting old in the face every day\r\nThere\'s another new line, new line\r\nThinner at the waistline\r\nI feel thinner at the waistline\r\nI\'m getting old in the face every day\r\nThere\'s another new line\r\nYou\'re looking thinner, are you alright?\r\nYeah, I\'m just busy all of the time\r\nI\'m just a little more tired every day\r\nI really don\'t know why\r\nI\'m just so far, I feel so far away\r\nI\'m just so far, I feel so far away\r\nThere\'s really nothing like the first time\r\nThere\'s really nothing like the first time\r\nIt\'s a long way down when you fall\r\nAnd you\'re missing cloud nine\r\nI wish I was more afraid\r\nI made all the same mistakes they told me I\'d make\r\nAnd now it\'s different every day\r\nThey make me, they break me\r\nI\'m just so far, I feel so far away\r\nI\'m just so far, I feel so far away\r\nI\'m just so far, I feel so far away\r\nI\'m just so far, I feel so far away\r\nYou call my name and it pulls me in\r\nYou call my name and it pulls me in\r\nYou call my name and it pulls me in\r\nYou call my name\r\nI\'m just so far, I feel so far away\r\nI\'m just so far, I feel so far away');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
