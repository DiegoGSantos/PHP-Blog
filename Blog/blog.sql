-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 31, 2014 at 05:03 AM
-- Server version: 5.5.38-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `Posts`
--

CREATE TABLE IF NOT EXISTS `Posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(80) NOT NULL,
  `author` varchar(30) NOT NULL,
  `posttext` varchar(255) NOT NULL,
  `postDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `Posts`
--

INSERT INTO `Posts` (`id`, `title`, `author`, `posttext`, `postDate`) VALUES
(1, 'First Post', 'Diego', 'This is the first Post!!', '2014-10-28 04:50:37'),
(2, 'Second Post', 'Diego', 'This is the second post of the blog!!', '2014-10-28 17:25:47'),
(3, 'Third Post ', 'Diego', 'This is the third post!', '2014-10-28 17:29:34'),
(4, 'Fourth Post', 'Diego', 'This is the fourth post!', '2014-10-28 17:37:23'),
(5, 'Fifth Post', 'Diego', 'This is the fifth post!', '2014-10-28 17:38:01'),
(8, 'Post too long', 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.Vestibulum laoreet, nunc eget laoreet sagittis,quam ligula sodales orci, congue imperdiet eros tortor ac lectus.Duis eget nisl orci. Aliquam mattis purus non mauris blandit id luctus felis colem abad', '2014-10-31 04:41:32');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
