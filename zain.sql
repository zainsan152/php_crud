-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2019 at 08:27 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zain`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(40) NOT NULL,
  `pic` varchar(400) NOT NULL,
  `name` varchar(40) NOT NULL,
  `contact` varchar(40) NOT NULL,
  `address` varchar(50) NOT NULL,
  `age` varchar(30) NOT NULL,
  `qualification` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `pic`, `name`, `contact`, `address`, `age`, `qualification`) VALUES
(20, 'student/395t9cktViG0J0R8f95oAeLhlmzmLgwPAaG65uRSxlMtxAIVYSW3V-bNusdk6xMaqJYjJmpgF8H9ssRM_AHMsqM0biM8ekVBIrXlpewFAJTxsTSJZJh4Kh8=w343-h429-nc.jpg', 'Misbah Ul Haq', '03047625271', 'Lahore', '45', 'Cricketer');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(70) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `username`, `password`, `email`, `contact`, `city`, `country`) VALUES
(1, '', '', '', '', '', ''),
(2, 'zain_ul_abideen', 'zainsan152', 'zain@gmail.com', '03047625271', 'Pakistan', 'Pakistan'),
(3, 'admin', 'admin', 'zain@gmail.com', '03047625271', 'Lahore', 'Pakistan'),
(4, 'zainsan152', '12345', 'zain@gmail.com', '03047625271', 'lahore', 'pakistan'),
(5, 'waqas_aslam', '12345', 'waqas@gmail.com', '9320920', 'lhr', 'pak'),
(6, '', '', '', '', '', ''),
(7, 'waqas', '1234', 'waqas@gmail.com', '8536834', 'lhr', 'pak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
