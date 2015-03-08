-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 15, 2014 at 02:29 PM
-- Server version: 5.5.33
-- PHP Version: 5.4.4-14+deb7u9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `PhoneBookApplication`
--

-- --------------------------------------------------------

--
-- Table structure for table `Contacts`
--

CREATE TABLE IF NOT EXISTS `Contacts` (
  `contactid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(32) DEFAULT NULL,
  `lname` varchar(32) DEFAULT NULL,
  `country` varchar(40) DEFAULT NULL,
  `phonenumber` int(9) NOT NULL DEFAULT '0',
  `addressline` varchar(30) DEFAULT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`contactid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `Contacts`
--

INSERT INTO `Contacts` (`contactid`, `fname`, `lname`, `country`, `phonenumber`, `addressline`, `description`) VALUES
(30, 'Alangi', 'Derick', 'Cameroon', 78010978, 'Likomba-Tiko', ''),
(32, 'Nkwa', 'Walters', 'Gabon', 77313873, 'Douala', 'Good work'),
(35, 'Isaac', 'Kunga', 'American Samoa', 78990987, 'Buea', ''),
(36, 'Alangi', 'Lawrence', 'Cameroon', 78010970, 'Likomba-Tiko', 'I like the app.'),
(37, 'Dema', 'Giscard', 'Cameroon', 51411816, 'Likomba-Tiko', 'I like this app.'),
(40, 'Goumai', 'Damien', 'Cameroon', 77678566, 'Abuja', ''),
(44, 'Alangi', 'Pascal', 'Ghana', 56778545, 'Hindu', 'I like this.'),
(45, 'Ngam Wih', 'Anastasia', 'Cameroon', 78239337, 'Likomba-Tiko', 'Nice app.'),
(48, 'Ibe', 'Augustina', 'Cameroon', 92357688, 'Mutengene', 'I like this app.'),
(49, 'Giant', 'Pandas', 'Egypt', 989788876, 'Forest', 'Meeehhhhhhh'),
(50, 'Tata', 'Isaac', 'Cameroon', 78899876, 'Buea-Tiko', ''),
(51, 'Ngwa', 'Pius', 'Afghanistan', 51678456, 'Buea', ''),
(52, 'Ngong', 'Ethel', 'Canada', 51657787, 'Buea-Tiko', ''),
(54, 'Nana', 'Louise', 'Cameroon', 78909987, 'Cariross Street', 'Nice app with the engine.'),
(55, 'Dipoko', 'Loveline', 'Cameroon', 76456477, 'Moko', ''),
(56, 'Ngatchu', 'Damen', 'Cameroon', 99876755, 'Buea', 'Nice work Derick'),
(57, 'Ngatchu', 'Harry', 'Brazil', 1257674879, 'Hindu', 'Derick, nice work'),
(58, 'Nkwa', 'Brian', 'Cameroon', 77313873, 'Douala', 'Nice work my dear.'),
(59, 'Alangi', 'Patrick', 'Cameroon', 51253167, 'Tiko', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
