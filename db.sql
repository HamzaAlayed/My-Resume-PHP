-- phpMyAdmin SQL Dump
-- version 2.8.0.1
-- http://www.phpmyadmin.net
-- 
-- Host: custsql-ipg42.eigbox.net
-- Generation Time: May 09, 2014 at 06:26 AM
-- Server version: 5.5.32
-- PHP Version: 4.4.9
-- 
-- Database: `myresume`
-- 

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='User Profile Information' AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `profile`
-- 

INSERT INTO `profile` VALUES (1, 'Hamza Alayed', '1985-09-07', 'Arjan, Amman, Jordan', '+962785330496', 'me@hamzaalayed.com', 'http://www.hamzaalayed.com/', 'WEB / MOBILE DEVELOPER  Projects Analyst', 'I taught myself how to learn quickly. \r\nThis way gave me a lot of skills in a short time. \r\nI started in 2005 to now I''ve gained a lot of skills and I’m looking to earn more.\r\nMy objective is Obtain a position where I can maximize my Development skills', 'http://hamzaalayed.com/images/pic.png');

-- --------------------------------------------------------

-- 
-- Table structure for table `skillTypes`
-- 

CREATE TABLE `skillTypes` (
  `typeId` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Type ID',
  `typeName` varchar(150) NOT NULL COMMENT 'Type Name',
  PRIMARY KEY (`typeId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Skills Type' AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `skillTypes`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `skilles`
-- 

CREATE TABLE `skilles` (
  `skillId` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Skill ID',
  `skillTitel` varchar(150) NOT NULL COMMENT 'Skill Header',
  `skillType` int(5) NOT NULL COMMENT 'Skill Type',
  PRIMARY KEY (`skillId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Skills Info' AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `skilles`
-- 

