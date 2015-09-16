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
CREATE DATABASE IF NOT EXISTS `miniadmin` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `miniadmin`;


-- Dumping structure for table employee.ma_category
CREATE TABLE IF NOT EXISTS `ma_category` (
  `idcategory` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`idcategory`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table employee.ma_category: 0 rows
/*!40000 ALTER TABLE `ma_category` DISABLE KEYS */;
REPLACE INTO `ma_category` (`idcategory`, `category_name`) VALUES
	(2, 'Category 1');
/*!40000 ALTER TABLE `ma_category` ENABLE KEYS */;


-- Dumping structure for table employee.ma_post
CREATE TABLE IF NOT EXISTS `ma_post` (
  `idpost` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`idpost`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table employee.ma_post: 0 rows
/*!40000 ALTER TABLE `ma_post` DISABLE KEYS */;
/*!40000 ALTER TABLE `ma_post` ENABLE KEYS */;


-- Dumping structure for table employee.ma_user
CREATE TABLE IF NOT EXISTS `ma_user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'user',
  PRIMARY KEY (`iduser`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table employee.ma_user: 1 rows
/*!40000 ALTER TABLE `ma_user` DISABLE KEYS */;
REPLACE INTO `ma_user` (`iduser`, `username`, `password`, `status`) VALUES
	(1, 'admin', 'admin', 'admin'),
	(2, 'user', 'user', 'user');
/*!40000 ALTER TABLE `ma_user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
