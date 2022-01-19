-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 19, 2022 at 08:54 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bankingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `AccountNo` varchar(10) NOT NULL DEFAULT '',
  `Name` varchar(30) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `CurrentBalance` bigint(10) DEFAULT NULL,
  PRIMARY KEY (`AccountNo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`AccountNo`, `Name`, `Email`, `CurrentBalance`) VALUES
('0827O11500', 'Aayush Kumar', 'aayushK20@gmail.com', 14120),
('0827O11501', 'Akshay Singh', 'akshaySingh007@gmail.com', 520000),
('0827O11502', 'Nitin Dubey', 'ndubey33@gmail.com', 1452392),
('0827O11503', 'Ram Kumar Choubey', 'rkChoubey2001@gmail.com', 12386),
('0827O11504', 'Jayantilaal Mishra', 'jaymishra@gmail.com', 86492),
('0827O11505', 'Aman Shriwastava', 'aman2015@gmail.com', 5889455),
('0827O11506', 'Suman Verma', 'sumanv0092@gmail.com', 5496),
('0827O11507', 'Satyendra Mishra', 'sattu1943@gmail.com', 89254),
('0827O11508', 'Aarti Patil ', 'patilaarti@gmail.com', 158000),
('0827O11509', 'Aniruddh Singh', 'singhAniruddh2908@gmail.com', 9035909);

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

CREATE TABLE IF NOT EXISTS `transfers` (
  `DebitedFrom` varchar(10) NOT NULL,
  `CreditedTo` varchar(10) NOT NULL,
  `Amount` bigint(8) NOT NULL,
  `TransactionDateTime` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfers`
--

INSERT INTO `transfers` (`DebitedFrom`, `CreditedTo`, `Amount`, `TransactionDateTime`) VALUES
('0827O11508', '0827O11500', 120, '2022-01-17 21:14:12'),
('0827O11508', '0827O11509', 10, '2022-01-17 21:08:51'),
('0827O11501', '0827O11500', 4000, '2022-01-17 21:07:45');
