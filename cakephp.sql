-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2017 at 12:17 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cakephp`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `country_id`, `state_id`, `city_name`, `created`, `modified`) VALUES
(1, 1, 1, 'Chennai', '2017-05-19 10:04:59', '2017-05-19 10:04:59'),
(2, 1, 1, 'Coimbatore', '2017-05-19 10:04:59', '2017-05-19 10:04:59'),
(3, 1, 1, 'Madurai', '2017-05-19 10:05:21', '2017-05-19 10:05:21');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `country_name` varchar(255) NOT NULL,
  `country_code` varchar(25) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_name`, `country_code`, `created`, `modified`) VALUES
(1, 'India', 'IND', '2017-05-19 09:57:22', '2017-05-19 09:57:22'),
(2, 'United states', 'US', '2017-05-19 09:57:22', '2017-05-19 09:57:22');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_name` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `country_id`, `state_name`, `created`, `modified`) VALUES
(1, 1, 'Tamil Nadu', '2017-05-19 10:01:39', '2017-05-19 10:01:39'),
(2, 1, 'Kerala', '2017-05-19 10:01:39', '2017-05-19 10:01:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `doj` date NOT NULL,
  `salary` float(15,2) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1' COMMENT '1-active,0-inactive',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `gender`, `dob`, `address`, `country`, `state`, `city`, `doj`, `salary`, `status`, `created`, `modified`) VALUES
(1, 'suresh', 's', 'test@gmail.com', 'male', '1989-05-08', '1234 five street', '1', '1', '2', '2017-05-22', 40000.99, 1, '2017-05-18 19:39:46', '2017-05-20 08:34:14'),
(2, 'test', '1', 'test1@gmail.com', 'male', '1989-07-05', '123 four street', '1', '1', '3', '2017-06-20', 39999.99, 1, '2017-05-18 19:47:34', '2017-05-18 19:47:34'),
(3, 'test', '2', 'test2@gmail.com', 'male', '1989-05-09', 'tyetaserf', '1', '1', '1', '2017-05-09', 29999.99, 1, '2017-05-18 18:23:14', '2017-05-18 18:23:14'),
(4, 'test', '2', 'test2@gmail.com', 'male', '1989-05-09', 'tyetaserf', '1', '1', '1', '2017-05-09', 41999.99, 1, '2017-05-18 18:23:39', '2017-05-18 18:23:39'),
(5, 'test', 'test', 'test21@gmail.com', 'female', '1999-05-05', 'tyetaserf', '1', '1', '2', '2017-05-09', 45699.99, 1, '2017-05-18 18:24:21', '2017-05-20 10:19:44'),
(6, 'first', 'last', 'first@gmail.com', 'female', '1998-10-05', 'test', '1', '1', '1', '2017-05-21', 25000.56, 1, '2017-05-21 11:26:48', '2017-05-21 12:16:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
