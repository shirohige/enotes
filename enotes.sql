-- phpMyAdmin SQL Dump
-- version 4.6.4deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 11, 2017 at 10:57 PM
-- Server version: 5.7.16-0ubuntu0.16.10.1
-- PHP Version: 7.0.8-3ubuntu3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enotes`
--

-- --------------------------------------------------------

--
-- Table structure for table `deleted`
--

CREATE TABLE `deleted` (
  `uid` varchar(32) NOT NULL,
  `path` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `uid` varchar(32) NOT NULL,
  `path` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favourites`
--

INSERT INTO `favourites` (`uid`, `path`) VALUES
('102502669196938371636', '/home/mohammed/server/project/upload/102502669196938371636/markfavandrename');

-- --------------------------------------------------------

--
-- Table structure for table `sharedlink`
--

CREATE TABLE `sharedlink` (
  `fileid` varchar(64) NOT NULL,
  `path` varchar(1024) NOT NULL,
  `uid` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` varchar(32) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `email`) VALUES
('102502669196938371636', 'Mohammed Udaipurwala', 'mcool4151@gmail.com'),
('1317468331660083', 'Mohammed Udaipurwala', 'udaipurwala.mohammed@yahoo.in');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sharedlink`
--
ALTER TABLE `sharedlink`
  ADD PRIMARY KEY (`fileid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
