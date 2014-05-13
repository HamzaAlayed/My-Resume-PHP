-- phpMyAdmin SQL Dump
-- version 2.8.0.1
-- http://www.phpmyadmin.net
-- 
-- Host: custsql-ipg42.eigbox.net
-- Generation Time: May 13, 2014 at 01:42 PM
-- Server version: 5.5.32
-- PHP Version: 4.4.9
-- 
-- Database: `myresume`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `portfolio`
-- 

CREATE TABLE `portfolio` (
  `portfId` int(9) NOT NULL AUTO_INCREMENT COMMENT 'Portfolio ID',
  `profileId` int(9) NOT NULL COMMENT 'Portfolio Profile ID',
  `portfName` varchar(100) NOT NULL COMMENT 'Portfolio Name',
  `portfLink` text NOT NULL COMMENT 'Portfolio Link',
  `portfImg` text NOT NULL COMMENT 'Portfolio Image',
  `portfTags` text NOT NULL COMMENT 'Portfolio Tags',
  PRIMARY KEY (`portfId`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='Portfolio Data' AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `portfolio`
-- 

INSERT INTO `portfolio` VALUES (1, 1, 'Portfolio item', 'http://hamzaalayed.com/v2/assets/images_post/bigstock-Beautiful-stylish-young-woman-38849389-504x348.jpg', 'http://hamzaalayed.com/v2/assets/images_post/bigstock-Beautiful-stylish-young-woman-38849389-504x348.jpg', 'Web|Photo');
INSERT INTO `portfolio` VALUES (2, 1, 'Portfolio item', 'http://hamzaalayed.com/v2/assets/images_post/bigstock-Beautiful-stylish-young-woman-38849389-504x348.jpg', 'http://hamzaalayed.com/v2/assets/images_post/bigstock-Beautiful-stylish-young-woman-38849389-504x348.jpg', 'Graphic|Photo');
INSERT INTO `portfolio` VALUES (3, 1, 'Portfolio item', 'http://hamzaalayed.com/v2/assets/images_post/bigstock-Beautiful-stylish-young-woman-38849389-504x348.jpg', 'http://hamzaalayed.com/v2/assets/images_post/bigstock-Beautiful-stylish-young-woman-38849389-504x348.jpg', 'PHP|JavaScript');
INSERT INTO `portfolio` VALUES (4, 1, 'Portfolio item', 'http://hamzaalayed.com/v2/assets/images_post/bigstock-Beautiful-stylish-young-woman-38849389-504x348.jpg', 'http://hamzaalayed.com/v2/assets/images_post/bigstock-Beautiful-stylish-young-woman-38849389-504x348.jpg', 'PHP|JavaScript');
INSERT INTO `portfolio` VALUES (5, 1, 'Portfolio item', 'http://hamzaalayed.com/v2/assets/images_post/bigstock-Beautiful-stylish-young-woman-38849389-504x348.jpg', 'http://hamzaalayed.com/v2/assets/images_post/bigstock-Beautiful-stylish-young-woman-38849389-504x348.jpg', 'PHP|PostgreSQL');
INSERT INTO `portfolio` VALUES (6, 1, 'Portfolio item', 'http://hamzaalayed.com/v2/assets/images_post/bigstock-Beautiful-stylish-young-woman-38849389-504x348.jpg', 'http://hamzaalayed.com/v2/assets/images_post/bigstock-Beautiful-stylish-young-woman-38849389-504x348.jpg', 'PHP|MySQL');

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
-- Table structure for table `profileToSkills`
-- 

CREATE TABLE `profileToSkills` (
  `profileId` int(9) NOT NULL COMMENT 'Profile Id',
  `skillId` int(9) NOT NULL COMMENT 'Skill Id',
  PRIMARY KEY (`profileId`,`skillId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Relation between profile and skills ';

-- 
-- Dumping data for table `profileToSkills`
-- 

INSERT INTO `profileToSkills` VALUES (1, 1);
INSERT INTO `profileToSkills` VALUES (1, 2);
INSERT INTO `profileToSkills` VALUES (1, 3);
INSERT INTO `profileToSkills` VALUES (1, 4);
INSERT INTO `profileToSkills` VALUES (1, 5);
INSERT INTO `profileToSkills` VALUES (1, 6);
INSERT INTO `profileToSkills` VALUES (1, 7);
INSERT INTO `profileToSkills` VALUES (1, 8);
INSERT INTO `profileToSkills` VALUES (1, 9);
INSERT INTO `profileToSkills` VALUES (1, 10);

-- --------------------------------------------------------

-- 
-- Table structure for table `skillTypes`
-- 

CREATE TABLE `skillTypes` (
  `typeId` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Type ID',
  `typeName` varchar(150) NOT NULL COMMENT 'Type Name',
  `typeTitle` varchar(100) NOT NULL COMMENT 'Type Title',
  PRIMARY KEY (`typeId`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='Skills Type' AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `skillTypes`
-- 

INSERT INTO `skillTypes` VALUES (1, 'lines', 'PROGRAMMING SKILLS');
INSERT INTO `skillTypes` VALUES (2, 'pie', 'GRAPHIC SKILLS');
INSERT INTO `skillTypes` VALUES (3, 'circle', 'LANGUAGE SKILLS');
INSERT INTO `skillTypes` VALUES (4, 'EDUCATION', 'EDUCATION');
INSERT INTO `skillTypes` VALUES (5, 'EMPLOYMENT', 'EMPLOYMENT');

-- --------------------------------------------------------

-- 
-- Table structure for table `skills`
-- 

CREATE TABLE `skills` (
  `skillId` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Skill ID',
  `skillTitel` varchar(150) NOT NULL COMMENT 'Skill Header',
  `skillType` int(5) NOT NULL COMMENT 'Skill Type',
  `lineValue` int(2) NOT NULL COMMENT 'Progress line',
  `legendColor` varchar(6) NOT NULL COMMENT 'legend Color',
  `paragraphStart` varchar(4) NOT NULL COMMENT 'Paragraph Start',
  `paragraphEnd` varchar(4) NOT NULL COMMENT 'Paragraph End',
  `paragraphHead` varchar(150) NOT NULL COMMENT 'Paragraph Head',
  `paragraphLogo` text NOT NULL COMMENT 'Paragraph Logo',
  `paragraph` text NOT NULL COMMENT 'Paragraph Body',
  PRIMARY KEY (`skillId`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='Skills Info' AUTO_INCREMENT=11 ;

-- 
-- Dumping data for table `skills`
-- 

INSERT INTO `skills` VALUES (1, 'PhotoShop', 2, 40, 'ffbc38', '', '', '', '', '');
INSERT INTO `skills` VALUES (2, 'Javascrpit', 1, 80, '', '', '', '', '', '');
INSERT INTO `skills` VALUES (3, 'Arabic', 3, 99, '4CA5D0', '', '', '', '', '');
INSERT INTO `skills` VALUES (4, 'English', 3, 70, '6CA338', '', '', '', '', '');
INSERT INTO `skills` VALUES (5, 'PHP', 1, 95, '', '', '', '', '', '');
INSERT INTO `skills` VALUES (6, 'HTML/5', 1, 95, '', '', '', '', '', '');
INSERT INTO `skills` VALUES (7, 'There are many variations of passages', 5, 0, '4CA5D0', '2003', '2007', 'Director Of Department', 'http://hamzaalayed.com/images/pic.png', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');
INSERT INTO `skills` VALUES (8, 'Cooper Union', 5, 0, '4CA5D0', '2001', '', 'Programmer', 'http://hamzaalayed.com/images/pic.png', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');
INSERT INTO `skills` VALUES (9, 'University of Malaya , Kuala Lumpur', 4, 0, '6CA338', '2008', '2010', 'Masters Degree SC', 'http://hamzaalayed.com/images/pic.png', 'Masters Degree SC, Management Information Systems (Not Finish Yet)');
INSERT INTO `skills` VALUES (10, 'Al-Balqa'' Applied University, AMMAN', 4, 0, '6CA338', '2003', '2007', 'Management Information Systems', 'http://hamzaalayed.com/images/pic.png', 'BA Management Information Systems');
