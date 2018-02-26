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
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8;

-- Dumping data for table khmer_fruit.image: ~38 rows (approximately)
/*!40000 ALTER TABLE `image` DISABLE KEYS */;
INSERT INTO `image` (`id`, `pid`, `img1`, `img2`, `img3`, `img4`, `img5`) VALUES
	(30, 3, 'yahoo5.jpg', 'foursquare.jpg', 'facebook2.png', 'odno6.png', 'twitter5.png'),
	(31, 4, '21469806_348302908949954_966799611_n2.png', 'r2.png', 'moeysave4.png', 'r2.png', 'moeysave5.png'),
	(32, 5, '21469806_348302908949954_966799611_n3.png', NULL, NULL, NULL, 'moeysave6.png'),
	(33, 6, '21469806_348302908949954_966799611_n4.png', NULL, NULL, 'r3.png', 'moeysave7.png'),
	(34, 7, '21469806_348302908949954_966799611_n5.png', 'r4.png', 'r5.png', 'r6.png', 'moeysave8.png'),
	(35, 8, NULL, 'r8.png', 'r9.png', 'r10.png', 'moeysave9.png'),
	(36, 9, 'r12.png', 'r1.png', 'r13.png', 'r14.png', 'moeysave10.png'),
	(37, 10, 'r16.png', NULL, 'r17.png', NULL, 'moeysave11.png'),
	(38, 11, 'r1.png', NULL, NULL, NULL, 'moeysave.png'),
	(39, 12, 'r3.png', NULL, 'moeysave1.png', NULL, 'moeysave2.png'),
	(40, 13, NULL, NULL, 'moeysave3.png', NULL, 'moeysave4.png'),
	(41, 14, 'googleplus.png', NULL, 'linkedin.png', NULL, 'odno.png'),
	(42, 15, 'googleplus.png', NULL, 'linkedin.png', NULL, NULL),
	(43, 16, NULL, NULL, 'yahoo1.jpg', 'yahoo2.jpg', NULL),
	(56, 29, 'twitter1.png', 'googleplus1.png', 'yahoo3.jpg', 'yahoo4.jpg', 'yahoo5.jpg'),
	(57, 30, 'twitter.png', 'googleplus.png', 'yahoo.jpg', 'yahoo1.jpg', 'yahoo2.jpg'),
	(58, 31, 'twitter1.png', 'googleplus1.png', 'yahoo3.jpg', 'yahoo4.jpg', 'yahoo5.jpg'),
	(59, 32, NULL, 'r5.png', NULL, 'instagram.jpg', 'r6.png'),
	(60, 33, NULL, 'odno1.png', NULL, 'instagram1.jpg', NULL),
	(61, 34, '', NULL, NULL, 'laliga.jpg', NULL),
	(62, 35, 'twitter1.png', 'icon9.png', NULL, NULL, NULL),
	(64, 37, NULL, 'mef5.png', 'english_primerleague1.jpg', 'ufa_chaimpainlieague1.jpg', 'ufa_europaleague1.jpg'),
	(65, 38, 'r2.png', 'mef2.png', 'mef3.png', 'r3.png', NULL),
	(66, 39, NULL, NULL, NULL, NULL, NULL),
	(67, 40, NULL, 'mef.png', 'r.png', 'r1.png', NULL),
	(68, 41, 'icon6.png', NULL, NULL, NULL, NULL),
	(69, 42, 'icon5.png', 'mef4.png', 'english_primerleague.jpg', 'ufa_chaimpainlieague.jpg', 'ufa_europaleague.jpg'),
	(70, 43, 'icon3.png', NULL, NULL, NULL, NULL),
	(71, 44, 'icon5.png', NULL, NULL, 'icon6.png', '21469806_348302908949954_966799611_n.png'),
	(72, 45, 'r1.png', 'mef2.png', 'r5.png', 'r1.png', 'mef3.png'),
	(73, 46, NULL, NULL, NULL, 'icon1.png', '21469806_348302908949954_966799611_n.png'),
	(74, 47, 'icon3.png', 'icon4.png', NULL, 'icon2.png', '21469806_348302908949954_966799611_n1.png'),
	(75, 48, 'money.png', NULL, 'icon2.png', 'icon3.png', '21469806_348302908949954_966799611_n2.png'),
	(76, 50, NULL, 'money1.png', NULL, NULL, NULL),
	(77, 57, 'icon1.png', 'icon.png', NULL, NULL, NULL),
	(78, 59, 'icon11.png', NULL, 'icon12.png', 'facebook.png', NULL),
	(79, 58, 'r.png', 'mef.png', 'mef1.png', 'r1.png', NULL),
	(80, 36, 'Metfone_Cambodian_League.png', NULL, NULL, 'league1.jpg', NULL),
	(81, 65, '99d36486a9a3deb5e62b3b10c694ecb0.png', '3392555916945ac1cb6ddb1d006ec3e3.png', '39ae767898f0f12fb641de9ff860bf0c.png', NULL, NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- Dumping data for table khmer_fruit.login_attempts: ~0 rows (approximately)
/*!40000 ALTER TABLE `login_attempts` DISABLE KEYS */;
/*!40000 ALTER TABLE `login_attempts` ENABLE KEYS */;

-- Dumping structure for table khmer_fruit.post
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `cid` int(11) DEFAULT NULL,
  `title` varchar(500) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `description` text,
  `img_thumbnail` varchar(500) NOT NULL,
  `address` varchar(500) DEFAULT NULL,
  `price` varchar(100) NOT NULL,
  `post_date` date NOT NULL,
  `status` smallint(6) DEFAULT '1' COMMENT '0 = delete ; 1 = actived ',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;

-- Dumping data for table khmer_fruit.post: ~53 rows (approximately)
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` (`id`, `pid`, `cid`, `title`, `phone`, `description`, `img_thumbnail`, `address`, `price`, `post_date`, `status`) VALUES
	(3, 18, 1, NULL, '09999999999', 'good product , good price , good etc', 'facebook1.png', 'st 8f , sangkat boeung tompun', '4000 / 1kg', '2018-01-29', 0),
	(4, 18, 1, NULL, '019999999', 'good product , good price', 'icon4.png', 'st 8f , sangkat boeung tompun', '4000 / 1kg', '2018-02-08', 1),
	(5, 18, 1, NULL, '01888888', 'good product , good price', 'icon5.png', 'st 8f , sangkat boeung tompun', '4000 / 1kg', '2018-01-26', 1),
	(6, 18, 1, NULL, '01888888', 'good product , good price', 'icon6.png', 'st 8f , sangkat boeung tompun', '4000 / 1kg', '2018-01-26', 1),
	(7, 18, 1, NULL, '01888888', 'good product , good price', 'icon7.png', 'st 8f , sangkat boeung tompun', '4000 / 1kg', '2018-01-26', 1),
	(8, 18, 1, NULL, '01888888', 'good product , good price', 'r7.png', 'st 8f , sangkat boeung tompun', '4000 / 1kg', '2018-01-26', 1),
	(9, 18, 1, NULL, '01888888', 'good product , good price', 'r11.png', 'st 8f , sangkat boeung tompun', '4000 / 1kg', '2018-02-08', 1),
	(10, 18, 1, NULL, '01888888', 'good product , good price', 'r15.png', 'st 8f , sangkat boeung tompun', '4000 / 1kg', '2018-01-26', 1),
	(11, 18, 1, NULL, '01888888', 'good product , good price', 'r.png', 'st 8f , sangkat boeung tompun', '4000 / 1kg', '2018-01-26', 1),
	(12, 18, 1, NULL, '01888888', 'good product , good price', 'r2.png', 'st 8f , sangkat boeung tompun', '4000 / 1kg', '2018-01-26', 1),
	(13, 18, 1, NULL, '01888888', 'good product , good price', 'r4.png', 'st 8f , sangkat boeung tompun', '4000 / 1kg', '2018-01-26', 1),
	(14, 18, 1, NULL, '99999', 'good product', 'facebook.png', 'st 8f , khan chomkamon', '4000 / 1kg', '2018-02-09', 1),
	(15, 17, 1, NULL, '0128589941', 'good product', 'facebook.png', 'st 8f', '6000 / 1kg', '2018-01-29', 1),
	(16, 18, 1, NULL, 'hello world', '', 'yahoo.jpg', 'hello world', 'hello world', '2018-02-05', 1),
	(28, 17, 1, NULL, '012418899', '<p>hello world</p>', 'odno.png', 'ផ្ទះលេខ​ 8f ផ្លូវលេខ271 សង្កាត់ បឺងទំពន់ ខណ្នមានជ័យ ភ្នំពេញ', '1 គឡូ 5000 រៀល', '2018-02-05', 1),
	(29, 17, 1, NULL, '012418899', '<ol><li>គុណភាពល្អ​ ​&nbsp;</li><li>ស្រស</li><li>គ្មានជាតិគីមី</li><li>រស់ជាតិឆ្ញាញ់</li></ol>', 'odno1.png', 'ផ្ទះលេខ​ 8f ផ្លូវលេខ271 សង្កាត់ បឺងទំពន់ ខណ្នមានជ័យ ភ្នំពេញ', '1 គឡូ 5000 រៀល', '2018-02-05', 1),
	(30, 17, 1, NULL, '012418899', '<ol><li>គុណភាពល្អ​ ​&nbsp;</li><li>ស្រស</li><li>គ្មានជាតិគីមី</li><li>រស់ជាតិឆ្ញាញ់</li></ol>', 'odno.png', 'ផ្ទះលេខ​ 8f ផ្លូវលេខ271 សង្កាត់ បឺងទំពន់ ខណ្នមានជ័យ ភ្នំពេញ', '1 គឡូ 5000 រៀល', '2018-02-05', 1),
	(31, 17, 1, NULL, '012418899', '<ol><li>ចំនួនមានកំនត់</li><li>គុណភាពល្អ​ ​&nbsp;</li><li>ស្រស</li><li>គ្មានជាតិគីមី</li><li>រស់ជាតិឆ្ញាញ់</li></ol>', 'odno1.png', 'ផ្ទះលេខ​ 8f ផ្លូវលេខ271 សង្កាត់ បឺងទំពន់ ខណ្នមានជ័យ ភ្នំពេញ', '1 គឡូ 5000 រៀល', '2018-02-05', 1),
	(32, 18, 1, 'Hello new TItle', '09999999999', 'good service , good product , good price , good etc', 'r3.png', 'st 8f , sangkat boeung tompun', '4000 / 1kg', '2018-02-22', 1),
	(33, 21, 2, NULL, '098485555', '<ol><li>Good product&nbsp;</li><li>good price&nbsp;</li><li>good service&nbsp;</li></ol>', 'linkedin1.png', 'st  271 sangkat boeung tompun khan mean chey ', '2$ per 1 kilo', '2018-02-05', 0),
	(34, 18, 1, NULL, '', '', 'yahoo.jpg', 'sankat boeung tom pun khan meanchey ', '', '2018-02-09', 1),
	(35, 18, 1, NULL, '', '<p>Good Service good product&nbsp;</p>', 'yahoo1.jpg', 'sankat boeung tom pun khan meanchey ', '', '2018-02-08', 1),
	(36, 20, 1, NULL, 'sadfsadsadfasf', 'Add more Imae', 'instagram2.jpg', 'adfaf', 'adadfa', '2018-02-09', 1),
	(37, 18, 1, NULL, '09999999999', 'good service , good product , good price , good etc', 'r2.png', 'st 8f , sangkat boeung tompun', '4000 / 1kg', '2018-02-09', 1),
	(38, 18, 1, NULL, '09999999999', 'good service , good product , good price , good etc', 'instagram4.jpg', 'st 8f , sangkat boeung tompun', '4000 / 1kg', '2018-02-09', 0),
	(39, 17, 1, NULL, '', 'WOrk with googole ', 'instagram5.jpg', '', '', '2018-02-05', 0),
	(40, 18, 1, NULL, '09999999999', 'good service , good product , good price , good etc', 'googleplus.png', 'st 8f , sangkat boeung tompun', '4000 / 1kg', '2018-02-09', 0),
	(41, 17, 1, NULL, '0128589941', 'good product good price etc', 'icon.png', 'st 8f', '6000 / 1kg', '2018-02-08', 1),
	(42, 18, 1, NULL, '09999999999', 'good service , good product , good price , good etc', 'icon1.png', 'st 8f , sangkat boeung tompun', '4000 / 1kg', '2018-02-09', 1),
	(43, 21, 2, NULL, '0128589941', 'good product good price etc', 'icon2.png', 'st 8f', '6000 / 1kg', '2018-02-08', 0),
	(44, 21, 2, NULL, '', 'good service and price goo quility ', 'r.png', 'Sangkat boung tompun khan mean chey ', '2$ per 1 kilo', '2018-02-06', 0),
	(45, 18, 1, NULL, '09999999999', 'good service , good product , good price , good etc', 'r.png', 'st 8f , sangkat boeung tompun', '4000 / 1kg', '2018-02-09', 1),
	(46, 17, 0, NULL, '0128589941', 'good  free delivery . good product good price etc', 'r2.png', 'st 8f', '6000 / 1kg', '2018-02-08', 1),
	(47, 17, 0, NULL, '0128589941', 'good product good price etc', 'r3.png', 'st 8f', '6000 / 1kg', '2018-02-08', 1),
	(48, 17, 0, NULL, '0128589941', 'good product good price etc', 'r4.png', 'st 8f', '6000 / 1kg', '2018-02-08', 1),
	(49, 17, 0, NULL, '0128589941', 'good product good price etc', 'r5.png', 'st 8f', '6000 / 1kg', '2018-02-08', 1),
	(50, 17, 0, NULL, '0128589941', 'good product good price etc', 'r6.png', 'st 8f', '6000 / 1kg', '2018-02-08', 1),
	(51, 17, 0, 'Title1 ', '086555532', 'Good Service if you want to order . good product good price etc', 'icon.png', 'st 8f', '6000 / 1kg', '2018-02-08', 1),
	(52, 20, 1, NULL, '123123123131', 'good product', 'r.png', 'st  271 sangkat boeung tompun khan mean chey ', '2$ per 1 kilo', '2018-02-08', 0),
	(53, 20, 1, NULL, '123123123131', 'good product', 'r1.png', 'st  271 sangkat boeung tompun khan mean chey ', '2$ per 1 kilo', '2018-02-06', 0),
	(54, 18, 1, NULL, '123123123131', 'good service', 'r2.png', 'st  271 sangkat boeung tompun khan mean chey ', '2$', '2018-02-06', 0),
	(55, 20, 1, NULL, '123123123131', 'good service', 'r3.png', 'st  271 sangkat boeung tompun khan mean chey ', '2$', '2018-02-06', 0),
	(56, 18, 1, NULL, '011 431 144_', 'aaaa', 'r4.png', 'st  271 sangkat boeung tompun khan mean chey ', '2$ per 1 kilo', '2018-02-06', 0),
	(57, 22, 0, NULL, '011 431 144_', 'boakjaklfjakfjakljfklasfa', 'r4.png', 'Takeo', '6000 / 1kg', '2018-02-08', 1),
	(58, 18, 1, NULL, '09999999999', 'good service , good product , good price , good etc', 'mef.png', 'st 8f , sangkat boeung tompun', '4000 / 1kg', '2018-02-09', 1),
	(59, 18, 1, NULL, '09999999999', 'good service , good product , good price , good etc', 'money1.png', 'st 8f , sangkat boeung tompun', '4000 / 1kg', '2018-02-09', 1),
	(60, 20, 1, NULL, '09999999999', '', 'moeysave.png', 'st 8f , sangkat boeung tompun', '4000 / 1kg', '2018-02-20', 1),
	(61, 38, 3, NULL, '0128545666', '<ol><li>Good Product</li><li>Good price&nbsp;</li><li>&nbsp;</li></ol>', 'icon.png', 'st 8f', '4000 / 1kg', '2018-02-20', 1),
	(62, 38, 3, NULL, '09999999999', '<ol><li>គុណភាំល្អ</li><li>គ្មានគីមី</li></ol>', 'icon1.png', 'st  271 sangkat boeung tompun khan mean chey ', '4000 / 1kg', '2018-02-20', 1),
	(63, 22, 2, NULL, '0128589941', '<ul><li>Good Server</li><li>គុណភាពល្អ</li><li>គ្មានគីមី</li></ul>', 'icon2.png', 'st 8f', '4000 / 1kg', '2018-02-20', 1),
	(64, 38, 3, 'អង្ករល្អគលេខ១', '0128589941', '<p>ាសាសាដាសដ</p><ol></ol>', '593f194d6a342fd8c310deb515645300.png', 'st  271 sangkat boeung tompun khan mean chey ', '6000 / 1kg', '2018-02-22', 1),
	(65, 24, 1, 'Good Qulity In Cambodia', '09999999999', '<ul><li>Good Quility&nbsp;</li><li>Good Price&nbsp;</li><li>Good Product</li></ul>', '8334222105f6c5ff5ad7368aa7b77e2b.png', 'st 8f , sangkat boeung tompun', '4000 / 1kg', '2018-02-22', 1),
	(66, 38, 3, 'អង្ករល្អគ្មានគីមី', '011 223 344_', '<ol><li>Good Qulity</li><li>Good Product</li><li>Good Price</li></ol><p>&nbsp;</p>', 'e464b21a482a52b9b4a6517c2ea8f7d2.png', 'st 8f , sangkat boeung tompun', '4000 / 1kg', '2018-02-22', 1),
	(67, 22, 2, 'Good Product in Takeo ', '09999999999', '<ul><li>Good price Good Service&nbsp;</li><li>Good Product</li></ul>', '8b2794cf8247babeca424894e5723116.png', 'st 8f , sangkat boeung tompun', '6000 / 1kg', '2018-02-25', 1);
/*!40000 ALTER TABLE `post` ENABLE KEYS */;

-- Dumping structure for table khmer_fruit.product
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categories_id` int(11) NOT NULL COMMENT '1= fruit , 2 = Vegetable ; 3 = Cereal , 4 = other',
  `pname_en` varchar(255) DEFAULT NULL,
  `pname_kh` varchar(250) DEFAULT NULL,
  `status` smallint(6) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

-- Dumping data for table khmer_fruit.product: ~14 rows (approximately)
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` (`id`, `categories_id`, `pname_en`, `pname_kh`, `status`) VALUES
	(17, 1, 'Mango', 'ផ្លែស្វាយ', 1),
	(18, 1, 'Banana', 'ផ្លែចេក', 1),
	(20, 1, 'Apple', 'ផ្លែប៉ោម', 1),
	(21, 2, 'Tomato', 'ផ្លែប៉េងបោះ', 1),
	(22, 2, 'Cucumber', 'ផ្លែត្រសក់', 1),
	(23, 1, 'water milon', 'ផ្លែឧឡឹក', 1),
	(24, 1, 'Orange', 'ផ្លែក្រូច', 1),
	(26, 2, NULL, 'ខ្ទឹមបារាំង', 0),
	(28, 2, 'Potato', 'ដំឡូង', 0),
	(33, 1, 'galic', 'ខ្តឹមសរ', 1),
	(37, 1, 'orange', 'ផ្លែក្រូច', 1),
	(38, 3, '', 'អង្ករ', 1),
	(39, 3, '', 'ស្រូវសាលី', 0),
	(40, 3, '', 'ស្រូវសាលី                ', 1);
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumping data for table khmer_fruit.users: ~3 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
	(1, '127.0.0.1', 'administrator', '$2y$08$k4.6dTlMU3GBawKKAQOI1OavrI9SHQl70mEwdzCiz46VH7OgqeXbC', '', 'admin@admin.com', '', '9uPDsUzlMrer2pgOtXBwCee066ef672652194e4d', 1518572819, NULL, 1268889823, 1519196413, 1, 'Admin', 'istrator', 'ADMIN', '0'),
	(2, '::1', 'layboe1111@gmail.com', '$2y$08$KmdTmNoH/rJ7e23aQYmBs.3hAJm9pyUm7KeRH7Yk24/CV0s96gMDG', NULL, 'layboe1111@gmail.com', NULL, NULL, NULL, '.wYcL3lieutHHYSLLf3rNu', 1518573219, 1518573337, 1, 'Lay', 'BoE', 'Boe.co.ltd', '012958899'),
	(3, '::1', 'admin@gmail.com', '$2y$08$LRbyF92IBCvlXrSvRXdNhOoaXzMU1Aoy7CjqYwf8C.2dOus5Hm68e', NULL, 'admin@gmail.com', NULL, NULL, NULL, NULL, 1519004092, 1519199083, 1, 'admin', 'admin', '', ''),
	(4, '::1', 'test@yahoo.com', '$2y$08$GruhCRoJoppJVXlDxGjDFeYf7hFnLaNvunlqBcwQ.UhrSNBSdYoCG', NULL, 'test@yahoo.com', NULL, NULL, NULL, NULL, 1519199019, 1519545919, 1, 'test', 'test123', 'test company', '0123949494');
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- Dumping data for table khmer_fruit.users_groups: ~7 rows (approximately)
/*!40000 ALTER TABLE `users_groups` DISABLE KEYS */;
INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
	(4, 1, 1),
	(5, 1, 2),
	(3, 2, 1),
	(7, 3, 1),
	(6, 3, 2),
	(11, 4, 1),
	(12, 4, 2);
/*!40000 ALTER TABLE `users_groups` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
