-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 24, 2022 at 11:34 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `as_airline`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintb`
--

CREATE TABLE `admintb` (
  `UserName` varchar(250) NOT NULL,
  `Password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admintb`
--

INSERT INTO `admintb` (`UserName`, `Password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bid` int(15) NOT NULL auto_increment,
  `pid` varchar(15) NOT NULL,
  `count` varchar(50) NOT NULL,
  `totp` varchar(50) NOT NULL,
  `fid` varchar(200) NOT NULL,
  `uid` varchar(200) NOT NULL,
  PRIMARY KEY  (`bid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bid`, `pid`, `count`, `totp`, `fid`, `uid`) VALUES
(1, '5', '2', '200', 'sam@mail.com', 'rose@mail.com'),
(2, '6', '2', '4000', 'admin', 'San@gmail.com'),
(3, '6', '2', '4000', 'admin', 'San@gmail.com'),
(4, '6', '2', '4000', 'admin', 'San@gmail.com'),
(5, '6', '5', '10000', 'admin', 'San@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(15) NOT NULL auto_increment,
  `gname` varchar(100) NOT NULL,
  `gtype` varchar(100) NOT NULL,
  `gprice` varchar(100) NOT NULL,
  `gsize` varchar(100) NOT NULL,
  `gnpack` varchar(100) NOT NULL,
  `gquantity` varchar(100) NOT NULL,
  `gimg` varchar(150) NOT NULL,
  `fid` varchar(200) NOT NULL,
  PRIMARY KEY  (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `gname`, `gtype`, `gprice`, `gsize`, `gnpack`, `gquantity`, `gimg`, `fid`) VALUES
(6, 'king', 'trichy', 'covai', 'fever', '', '2000', 'gimg20221124062421', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `userregister`
--

CREATE TABLE `userregister` (
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `userregister`
--

INSERT INTO `userregister` (`id`, `name`, `email`, `contact`, `password`, `address`) VALUES
(4, 'san', 'san@gmail.com', '9486365535', 'san', 'nnn');
