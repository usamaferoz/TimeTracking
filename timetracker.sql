-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2018 at 02:05 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timetracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `durations`
--

CREATE TABLE IF NOT EXISTS `durations` (
  `task_id` int(11) NOT NULL,
  `end_timestap` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `start_timestamp` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `duration` int(11) NOT NULL DEFAULT '0',
  `creation_timestamp` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `durations`
--

INSERT INTO `durations` (`task_id`, `end_timestap`, `start_timestamp`, `duration`, `creation_timestamp`) VALUES
(1, '2018-01-31 12:56:42', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(2, '2018-01-31 12:56:42', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(3, '2018-01-31 12:57:08', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(4, '2018-01-31 12:57:08', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(5, '2018-01-31 12:57:21', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(6, '2018-01-31 12:57:21', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(7, '2018-01-31 13:05:07', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE IF NOT EXISTS `task` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `start_timestamp` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `create_timestamp` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  ` update_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `title`, `description`, `user_id`, `duration`, `start_timestamp`, `create_timestamp`, ` update_timestamp`) VALUES
(1, 'c', 'sdgsdfg', 34, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2018-01-31 12:16:20'),
(2, 's', '', 0, 0, '2018-01-31 11:50:31', '0000-00-00 00:00:00', '2018-01-31 12:16:00'),
(3, 'f', '', 0, 0, '2018-01-31 11:51:20', '0000-00-00 00:00:00', '2018-01-31 12:16:05'),
(4, 'g', '', 0, 0, '2018-01-31 11:51:23', '0000-00-00 00:00:00', '2018-01-31 12:16:08'),
(5, 't', '', 0, 0, '2018-01-31 11:53:30', '0000-00-00 00:00:00', '2018-01-31 12:16:12'),
(6, 'r', '', 0, 0, '2018-01-31 11:57:12', '0000-00-00 00:00:00', '2018-01-31 12:16:15'),
(7, 'test', 'test', 55, 99, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2018-01-31 12:55:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
