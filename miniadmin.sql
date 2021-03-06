-- --------------------------------------------------------
-- Host:                         118.91.129.10
-- Server version:               5.1.73 - Source distribution
-- Server OS:                    redhat-linux-gnu
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for employee
CREATE DATABASE IF NOT EXISTS `employee` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `employee`;


-- Dumping structure for table employee.ma_articles
CREATE TABLE IF NOT EXISTS `ma_articles` (
  `idarticles` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`idarticles`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table employee.ma_articles: 0 rows
/*!40000 ALTER TABLE `ma_articles` DISABLE KEYS */;
/*!40000 ALTER TABLE `ma_articles` ENABLE KEYS */;


-- Dumping structure for table employee.ma_category
CREATE TABLE IF NOT EXISTS `ma_category` (
  `idcategory` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`idcategory`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table employee.ma_category: 0 rows
/*!40000 ALTER TABLE `ma_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `ma_category` ENABLE KEYS */;


-- Dumping structure for table employee.ma_page
CREATE TABLE IF NOT EXISTS `ma_page` (
  `idpage` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`idpage`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table employee.ma_page: 0 rows
/*!40000 ALTER TABLE `ma_page` DISABLE KEYS */;
/*!40000 ALTER TABLE `ma_page` ENABLE KEYS */;


-- Dumping structure for table employee.ma_post
CREATE TABLE IF NOT EXISTS `ma_post` (
  `idpost` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`idpost`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table employee.ma_post: 0 rows
/*!40000 ALTER TABLE `ma_post` DISABLE KEYS */;
/*!40000 ALTER TABLE `ma_post` ENABLE KEYS */;


-- Dumping structure for table employee.ma_setting
CREATE TABLE IF NOT EXISTS `ma_setting` (
  `idsetting` int(11) NOT NULL AUTO_INCREMENT,
  `setting_name` text,
  `val1` text,
  `val2` text,
  PRIMARY KEY (`idsetting`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table employee.ma_setting: 2 rows
/*!40000 ALTER TABLE `ma_setting` DISABLE KEYS */;
REPLACE INTO `ma_setting` (`idsetting`, `setting_name`, `val1`, `val2`) VALUES
	(1, 'Keyword', '', ''),
	(2, 'Title Description', '', '');
/*!40000 ALTER TABLE `ma_setting` ENABLE KEYS */;


-- Dumping structure for table employee.ma_user
CREATE TABLE IF NOT EXISTS `ma_user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'user',
  PRIMARY KEY (`iduser`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table employee.ma_user: 2 rows
/*!40000 ALTER TABLE `ma_user` DISABLE KEYS */;
REPLACE INTO `ma_user` (`iduser`, `username`, `password`, `status`) VALUES
	(1, 'admin', 'admin', 'admin'),
	(2, 'user', 'user', 'user');
/*!40000 ALTER TABLE `ma_user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
