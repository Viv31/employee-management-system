-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2021 at 05:51 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee-management-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `city` varchar(100) NOT NULL,
  `course` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime(6) NOT NULL,
  `updated_at` datetime(6) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fullname`, `email`, `pwd`, `gender`, `city`, `course`, `is_admin`, `created_at`, `updated_at`, `is_active`) VALUES
(1, 'Vaibhav Gangrade', 'vivgangs@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Male', 'Ujjain', 'it', 1, '2021-01-23 00:00:00.000000', '2021-01-23 08:43:32.000000', 1),
(5, 'Vaibhav Gangrade', 'vivgangs@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Male', 'Mumbai', 'it', 0, '2021-01-23 02:12:21.000000', '2021-01-23 09:19:34.000000', 1),
(27, 'Vaibhav Gangrade', 'vivgangs@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Male', 'Ujjain', 'it', 0, '2021-01-23 09:18:14.000000', '2021-01-23 09:18:14.000000', 1),
(28, 'Vaibhav Gangrade', 'vivgangs@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Male', 'Ujjain', 'it', 0, '2021-01-23 09:20:06.000000', '2021-01-23 09:20:06.000000', 1),
(29, 'Vaibhav Gangrade', 'vivgangs@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Male', 'Delhi', 'civil,mech', 0, '2021-01-23 09:31:05.000000', '2021-01-23 09:31:05.000000', 1),
(30, 'Vaibhav Gangrade', 'vivgangs@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Male', 'Pune', 'it,civil,mech,ec', 0, '2021-01-24 11:20:14.000000', '2021-01-24 11:20:14.000000', 1),
(31, 'Vaibhav Gangrade', 'vivgangs@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Male', 'Ujjain', 'ec,cs', 0, '2021-01-24 11:33:56.000000', '2021-01-24 11:33:56.000000', 1),
(32, 'Vaibhav Gangrade', 'vivgangs@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Male', 'Ujjain', 'mech,ec', 0, '2021-01-24 11:36:45.000000', '2021-01-24 11:36:45.000000', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
