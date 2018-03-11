-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 11, 2018 at 09:09 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ams`
--

-- --------------------------------------------------------

--
-- Table structure for table `baggage`
--

CREATE TABLE IF NOT EXISTS `baggage` (
  `f_no` int(10) NOT NULL,
  `dateoftravel` date NOT NULL,
  `record_no` int(15) NOT NULL,
  `item_category` varchar(20) NOT NULL,
  `item_description` varchar(10) NOT NULL,
  `location` varchar(20) NOT NULL,
  `u_id` int(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `baggage`
--


-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `b_id` int(10) NOT NULL AUTO_INCREMENT,
  `u_id` int(10) NOT NULL,
  `b_category` varchar(15) NOT NULL,
  `b_flight` varchar(15) NOT NULL,
  `b_from` varchar(20) NOT NULL,
  `b_to` varchar(20) NOT NULL,
  `b_class` varchar(10) NOT NULL,
  `b_adult` varchar(10) NOT NULL,
  `b_departing` varchar(15) NOT NULL,
  `b_returning` varchar(10) NOT NULL,
  `b_concession` varchar(10) NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `booking`
--


-- --------------------------------------------------------

--
-- Table structure for table `fedback`
--

CREATE TABLE IF NOT EXISTS `fedback` (
  `u_id` int(10) NOT NULL,
  `f_id` int(10) NOT NULL,
  `f_date` date NOT NULL,
  `f_details` varchar(25) NOT NULL,
  PRIMARY KEY (`u_id`),
  UNIQUE KEY `f_id` (`f_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fedback`
--


-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE IF NOT EXISTS `flight` (
  `f_no` int(10) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `f_capacity` int(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight`
--


-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `f_no` varchar(10) NOT NULL,
  `boardingtime` time NOT NULL,
  `takeoff` time NOT NULL,
  `landing` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `u_id` int(10) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(25) NOT NULL,
  `u_gender` varchar(10) NOT NULL,
  `u_email` varchar(15) NOT NULL,
  `u_date` date NOT NULL,
  `u_address` varchar(50) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `users`
--


-- --------------------------------------------------------

--
-- Table structure for table `web_checkin`
--

CREATE TABLE IF NOT EXISTS `web_checkin` (
  `w_id` int(10) NOT NULL,
  `u_id` int(15) NOT NULL,
  `b_id` int(15) NOT NULL,
  `w_status` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_checkin`
--

