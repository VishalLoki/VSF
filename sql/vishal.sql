-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2023 at 05:36 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vishal`
--

-- --------------------------------------------------------

--
-- Table structure for table `logg`
--

CREATE TABLE `logg` (
  `email` varchar(30) DEFAULT NULL,
  `pswd` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logg`
--

INSERT INTO `logg` (`email`, `pswd`) VALUES
('vish.71772117149@gct.ac.in', '2108@Vishal');

-- --------------------------------------------------------

--
-- Table structure for table `sdet`
--

CREATE TABLE `sdet` (
  `f_name` varchar(20) DEFAULT NULL,
  `l_name` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(5) DEFAULT NULL,
  `phno` mediumtext DEFAULT NULL,
  `fa_name` varchar(30) DEFAULT NULL,
  `occu` varchar(30) DEFAULT NULL,
  `income` varchar(20) DEFAULT NULL,
  `course` varchar(30) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `i_name` varchar(40) DEFAULT NULL,
  `location` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sdet`
--

INSERT INTO `sdet` (`f_name`, `l_name`, `email`, `dob`, `gender`, `phno`, `fa_name`, `occu`, `income`, `course`, `year`, `i_name`, `location`) VALUES
('Vishal', 'N', 'vish.71772117149@gct.ac.in', '2003-08-21', 'M', '8124390345', 'Narayanasamy N', 'Business', 'Less than 2L', 'B.E/B.TECH', 3, 'Govt clg of Tech', 'Coimbatore');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sdet`
--
ALTER TABLE `sdet`
  ADD UNIQUE KEY `phno` (`phno`) USING HASH;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
