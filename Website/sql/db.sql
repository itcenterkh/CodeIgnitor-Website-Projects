-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.14 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for khmer_fruit
CREATE DATABASE IF NOT EXISTS `khmer_fruit` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `khmer_fruit`;

-- Dumping structure for table khmer_fruit.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `name_kh` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table khmer_fruit.categories: ~2 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`, `name_kh`) VALUES
	(1, 'Fruit', 'ផ្លែឈើ'),
	(2, 'Vegetable', 'បន្លែ');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table khmer_fruit.groups
CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table khmer_fruit.groups: ~2 rows (approximately)
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` (`id`, `name`, `description`) VALUES
	(1, 'admin', 'Administrator'),
	(2, 'members', 'General User');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;

-- Dumping structure for table khmer_fruit.image
CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `img1` varchar(500) DEFAULT NULL,
  `img2` varchar(500) DEFAULT NULL,
  `img3` varchar(500) DEFAULT NULL,
  `img4` varchar(500) DEFAULT NULL,
  `img5` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

-- Dumping data for table khmer_fruit.image: ~13 rows (approximately)
/*!40000 ALTER TABLE `image` DISABLE KEYS */;
INSERT INTO `image` (`id`, `pid`, `img1`, `img2`, `img3`, `img4`, `img5`) VALUES
	(30, 3, 'yahoo5.jpg', 'foursquare.jpg', 'facebook2.png', 'odno6.png', 'twitter5.png'),
	(31, 4, '21469806_348302908949954_966799611_n2.png', NULL, 'moeysave4.png', 'r2.png', 'moeysave5.png'),
	(32, 5, '21469806_348302908949954_966799611_n3.png', NULL, NULL, NULL, 'moeysave6.png'),
	(33, 6, '21469806_348302908949954_966799611_n4.png', NULL, NULL, 'r3.png', 'moeysave7.png'),
	(34, 7, '21469806_348302908949954_966799611_n5.png', 'r4.png', 'r5.png', 'r6.png', 'moeysave8.png'),
	(35, 8, NULL, 'r8.png', 'r9.png', 'r10.png', 'moeysave9.png'),
	(36, 9, 'r12.png', NULL, 'r13.png', 'r14.png', 'moeysave10.png'),
	(37, 10, 'r16.png', NULL, 'r17.png', NULL, 'moeysave11.png'),
	(38, 11, 'r1.png', NULL, NULL, NULL, 'moeysave.png'),
	(39, 12, 'r3.png', NULL, 'moeysave1.png', NULL, 'moeysave2.png'),
	(40, 13, NULL, NULL, 'moeysave3.png', NULL, 'moeysave4.png'),
	(41, 14, 'googleplus.png', NULL, 'linkedin.png', NULL, 'odno.png'),
	(42, 15, 'googleplus.png', NULL, 'linkedin.png', NULL, NULL);
/*!40000 ALTER TABLE `image` ENABLE KEYS */;

-- Dumping structure for table khmer_fruit.keys
CREATE TABLE IF NOT EXISTS `keys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT '0',
  `is_private_key` tinyint(1) NOT NULL DEFAULT '0',
  `ip_addresses` text,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table khmer_fruit.keys: ~0 rows (approximately)
/*!40000 ALTER TABLE `keys` DISABLE KEYS */;
INSERT INTO `keys` (`id`, `user_id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
	(1, 0, '12345', 0, 0, 0, NULL, 0);
/*!40000 ALTER TABLE `keys` ENABLE KEYS */;

-- Dumping structure for table khmer_fruit.login_attempts
CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table khmer_fruit.login_attempts: ~0 rows (approximately)
/*!40000 ALTER TABLE `login_attempts` DISABLE KEYS */;
INSERT INTO `login_attempts` (`id`, `ip_address`, `login`, `time`) VALUES
	(1, '::1', 'administrator', 1517561856);
/*!40000 ALTER TABLE `login_attempts` ENABLE KEYS */;

-- Dumping structure for table khmer_fruit.post
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `img_thumbnail` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `price` varchar(100) NOT NULL,
  `post_date` date NOT NULL,
  `status` smallint(6) DEFAULT '1' COMMENT '0 = delete ; 1 = actived ',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- Dumping data for table khmer_fruit.post: ~13 rows (approximately)
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` (`id`, `pid`, `cid`, `phone`, `description`, `img_thumbnail`, `address`, `price`, `post_date`, `status`) VALUES
	(3, 18, 1, '09999999999', 'good product , good price , good etc', 'facebook1.png', 'st 8f , sangkat boeung tompun', '4000 / 1kg', '2018-01-29', 0),
	(4, 18, 1, '019999999', 'good product , good price', 'icon4.png', 'st 8f , sangkat boeung tompun', '4000 / 1kg', '2018-01-26', 1),
	(5, 18, 1, '01888888', 'good product , good price', 'icon5.png', 'st 8f , sangkat boeung tompun', '4000 / 1kg', '2018-01-26', 1),
	(6, 18, 1, '01888888', 'good product , good price', 'icon6.png', 'st 8f , sangkat boeung tompun', '4000 / 1kg', '2018-01-26', 1),
	(7, 18, 1, '01888888', 'good product , good price', 'icon7.png', 'st 8f , sangkat boeung tompun', '4000 / 1kg', '2018-01-26', 1),
	(8, 18, 1, '01888888', 'good product , good price', 'r7.png', 'st 8f , sangkat boeung tompun', '4000 / 1kg', '2018-01-26', 1),
	(9, 18, 1, '01888888', 'good product , good price', 'r11.png', 'st 8f , sangkat boeung tompun', '4000 / 1kg', '2018-01-26', 1),
	(10, 18, 1, '01888888', 'good product , good price', 'r15.png', 'st 8f , sangkat boeung tompun', '4000 / 1kg', '2018-01-26', 1),
	(11, 18, 1, '01888888', 'good product , good price', 'r.png', 'st 8f , sangkat boeung tompun', '4000 / 1kg', '2018-01-26', 1),
	(12, 18, 1, '01888888', 'good product , good price', 'r2.png', 'st 8f , sangkat boeung tompun', '4000 / 1kg', '2018-01-26', 1),
	(13, 18, 1, '01888888', 'good product , good price', 'r4.png', 'st 8f , sangkat boeung tompun', '4000 / 1kg', '2018-01-26', 1),
	(14, 18, 1, '99999', 'good product', 'facebook.png', 'st 8f , khan chomkamon', '4000 / 1kg', '2018-01-29', 1),
	(15, 17, 1, '0128589941', 'good product', 'facebook.png', 'st 8f', '6000 / 1kg', '2018-01-29', 1);
/*!40000 ALTER TABLE `post` ENABLE KEYS */;

-- Dumping structure for table khmer_fruit.product
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categories_id` int(11) NOT NULL,
  `pname_en` varchar(255) NOT NULL,
  `pname_kh` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- Dumping data for table khmer_fruit.product: ~3 rows (approximately)
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` (`id`, `categories_id`, `pname_en`, `pname_kh`) VALUES
	(17, 1, 'Mango', 'ស្វាយ'),
	(18, 1, 'Banana', 'ចេក'),
	(20, 1, 'Apple', 'ផ្លែប៉ោម');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;

-- Dumping structure for table khmer_fruit.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(254) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table khmer_fruit.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
	(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1517561863, 1, 'Admin', 'istrator', 'ADMIN', '0');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table khmer_fruit.users_groups
CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`),
  CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table khmer_fruit.users_groups: ~2 rows (approximately)
/*!40000 ALTER TABLE `users_groups` DISABLE KEYS */;
INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
	(1, 1, 1),
	(2, 1, 2);
/*!40000 ALTER TABLE `users_groups` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
