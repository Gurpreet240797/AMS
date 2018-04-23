-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2018 at 03:20 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ams`
--

-- --------------------------------------------------------

--
-- Table structure for table `airport_names`
--

CREATE TABLE `airport_names` (
  `code` varchar(5) NOT NULL,
  `name` varchar(60) NOT NULL,
  `city` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `depature_from` varchar(70) NOT NULL,
  `arrival_to` varchar(70) NOT NULL,
  `depature_date` varchar(13) NOT NULL,
  `arrival_date` varchar(13) NOT NULL,
  `adult` int(5) NOT NULL,
  `children` int(5) NOT NULL,
  `infant` int(5) NOT NULL,
  `class` varchar(20) NOT NULL,
  `payment` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `depature_from`, `arrival_to`, `depature_date`, `arrival_date`, `adult`, `children`, `infant`, `class`, `payment`) VALUES
(1, 'BOM', 'BKK', '2018-04-18', '2018-05-01', 1, 0, 0, 'Fisrt', 'yes'),
(2, 'BOM', 'DHX', '2018-05-05', '2018-06-09', 8, 0, 0, 'Economy', NULL),
(3, 'BOM', 'DHX', '2018-05-05', 'One_way_trip', 8, 0, 0, 'Economy', 'Yes'),
(4, 'Airport.ADA', 'Airport.BKK', '2018-04-27', '2018-04-14', 0, 0, 0, 'Economy', 'Yes'),
(5, 'Airport.AUH', 'Airport.IXB', '2018-05-01', '2018-05-04', 1, 0, 0, 'Economy', 'Yes'),
(6, 'Airport.GOI', 'Airport.ATQ', '2018-04-27', '2018-05-16', 2, 0, 0, 'Fisrt', 'Yes'),
(7, 'Airport.AUH', 'Airport.AUH', '2018-04-25', '2018-05-04', 1, 0, 0, 'Economy', 'Yes'),
(8, 'Airport.ATQ', 'Airport.BOM', '2018-04-20', 'One_way_trip', 9, 9, 9, 'Business', 'Yes'),
(9, 'Airport.AGX', 'Airport.ALA', '2018-04-27', 'One_way_trip', 5, 9, 9, 'Business', 'No'),
(10, 'Airport.AGX', 'Airport.ALA', '2018-04-21', 'One_way_trip', 5, 9, 9, 'Business', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `password`) VALUES
('xaviashu', 'xaviashu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
