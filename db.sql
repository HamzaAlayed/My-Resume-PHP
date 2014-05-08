-- phpMyAdmin SQL Dump
-- version 2.8.0.1
-- http://www.phpmyadmin.net
--
-- Host: custsql-ipg42.eigbox.net
-- Generation Time: May 08, 2014 at 02:54 PM
-- Server version: 5.5.32
-- PHP Version: 4.4.9
--
-- Database: `myresume`
--
CREATE DATABASE `myresume` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `myresume`;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `profileId` int(9) NOT NULL AUTO_INCREMENT COMMENT 'Profile ID',
  `profileName` varchar(100) NOT NULL COMMENT 'User Full Name',
  `profileDob` date NOT NULL COMMENT 'User Date Of Birth',
  `profileAddress` varchar(150) NOT NULL COMMENT 'User Adress',
  `profilePhone` varchar(20) NOT NULL COMMENT 'User Phone',
  `profileEmail` varchar(50) NOT NULL COMMENT 'User Email',
  `profileWebsite` text NOT NULL COMMENT 'User Website',
  `profileTitle` varchar(100) NOT NULL COMMENT 'User Title',
  `profileAbout` text NOT NULL COMMENT 'User About',
  `profileImg` text NOT NULL COMMENT 'User Image',
  PRIMARY KEY (`profileId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='User Profile Information' AUTO_INCREMENT=1 ;

--
-- Dumping data for table `profile`
--

