-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 07, 2014 at 09:33 AM
-- Server version: 5.5.35-0ubuntu0.13.10.2
-- PHP Version: 5.5.3-1ubuntu2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `relevancy-search`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `post` longtext NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `title`, `post`, `Date`) VALUES
(3, 'DATA RELEVANCY SEARCH', 'new data inserted in the database new data inserted in the database new data inserted in the database new data inserted in the database new data inserted in the database new data inserted in the database new data inserted in the database new data inserted in the database new data inserted in the database new data inserted in the database new data inserted in the database new data inserted in the database new data inserted in the database new data inserted in the database new data inserted in the database new data inserted in the database new data inserted in the databasenew data inserted in the databasenew data inserted in the database new data inserted in the databasenew data inserted in the database new data inserted in the database new data inserted in the database new data inserted in the database', '2014-02-07 07:56:17'),
(4, 'jk post', 'jk project jk projectjk projectjk projectjk projectjk projectjk projectjk projectjk projectjk projectjk project', '2014-02-07 09:16:35');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
