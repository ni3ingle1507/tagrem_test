-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2020 at 07:59 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tagrem_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tagrem_users`
--

CREATE TABLE IF NOT EXISTS `tagrem_users` (
  `id` bigint(20) NOT NULL,
  `name` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `confirm_password` varchar(250) NOT NULL,
  `zip` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tagrem_users`
--

INSERT INTO `tagrem_users` (`id`, `name`, `username`, `password`, `confirm_password`, `zip`, `created_date`, `updated_date`) VALUES
(1, 'nitin', 'admin123', 'admin123', '123456', 23456, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'nitin', 'admin123', 'admin123', '123456', 23456, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'nitin', 'admin123', 'admin123', '123456', 23456, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'nitin', 'admin123', 'admin123', '123456', 23456, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'nitin', 'admin123', 'admin123', '123456', 23456, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'nitin', 'admin123', 'admin123', '22', 22, '2020-12-10 19:55:33', '2020-12-10 19:55:33'),
(7, 'nitin', 'admin123', 'admin123', '22', 22, '2020-12-10 19:56:11', '2020-12-10 19:56:11'),
(8, 'nitin', 'admin123', 'admin123', '22', 22, '2020-12-10 19:56:33', '2020-12-10 19:56:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tagrem_users`
--
ALTER TABLE `tagrem_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tagrem_users`
--
ALTER TABLE `tagrem_users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
