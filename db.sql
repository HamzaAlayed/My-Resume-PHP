/*
Navicat MySQL Data Transfer

Source Server         : Local
Source Server Version : 50617
Source Host           : 127.0.0.1:3306
Source Database       : resume

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2014-05-27 04:43:24
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for blog_category
-- ----------------------------
DROP TABLE IF EXISTS `blog_category`;
CREATE TABLE `blog_category` (
  `catId` int(9) NOT NULL AUTO_INCREMENT COMMENT 'Category Id',
  `catName` varchar(100) NOT NULL COMMENT 'Category Name',
  `catParent` int(9) NOT NULL COMMENT 'Parent Category',
  PRIMARY KEY (`catId`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='Blog Categories';

-- ----------------------------
-- Records of blog_category
-- ----------------------------
INSERT INTO `blog_category` VALUES ('1', 'JavaScript', '0');
INSERT INTO `blog_category` VALUES ('2', 'PHP', '0');

-- ----------------------------
-- Table structure for blog_comments
-- ----------------------------
DROP TABLE IF EXISTS `blog_comments`;
CREATE TABLE `blog_comments` (
  `commentId` int(9) NOT NULL AUTO_INCREMENT COMMENT 'Comment ID',
  `commentName` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT 'Commenter Name',
  `commentEmail` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT 'Commenter Email',
  `commentBody` text CHARACTER SET utf8 NOT NULL COMMENT 'Comment Text',
  `commentReply` int(9) DEFAULT NULL COMMENT 'Comment Reply ID',
  `postId` int(9) NOT NULL COMMENT 'Post ID',
  `commentDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Comment Date',
  PRIMARY KEY (`commentId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of blog_comments
-- ----------------------------
INSERT INTO `blog_comments` VALUES ('1', 'Hamza', 'hacker109@gmail.com', 'Test Comment', '0', '1', '2014-05-27 04:32:21');
INSERT INTO `blog_comments` VALUES ('2', 'Ahmad', 'ahmmad@aa.com', 'Testing 2', '0', '1', '2014-05-27 04:32:56');
INSERT INTO `blog_comments` VALUES ('3', 'hamza', 'test@test.com', 'Test reply', '2', '1', '2014-05-27 04:33:42');

-- ----------------------------
-- Table structure for blog_posts
-- ----------------------------
DROP TABLE IF EXISTS `blog_posts`;
CREATE TABLE `blog_posts` (
  `postId` int(9) NOT NULL AUTO_INCREMENT COMMENT 'Article Id',
  `postTitle` text NOT NULL COMMENT 'Article Title',
  `postDate` datetime NOT NULL COMMENT 'Article Publish Date',
  `postBody` longtext NOT NULL COMMENT 'Article Body',
  `postUser` int(9) NOT NULL COMMENT 'Article User',
  `postType` int(9) NOT NULL COMMENT 'Article Type',
  `poetTags` int(9) NOT NULL COMMENT 'Article tags',
  `PostTypeHead` longtext NOT NULL COMMENT 'Article Head view',
  `postIsPublished` int(1) NOT NULL COMMENT 'Article Is Published',
  `postLastEdit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Article Last Edit',
  `postCategory` int(9) NOT NULL COMMENT 'Post Category',
  PRIMARY KEY (`postId`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='Blog Posts';

-- ----------------------------
-- Records of blog_posts
-- ----------------------------
INSERT INTO `blog_posts` VALUES ('1', 'Quisque odio eros', '2014-04-08 20:10:04', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <span id=\"more-42\"></span></p>\r\n                <blockquote class=\"sc_quote sc_quote_style_1\"><span class=\"quotes icon-quote-left\"></span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</blockquote>\r\n                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque consequat nisl erat, non tincidunt justo congue vitae. Maecenas bibendum pretium mi sed dignissim. Duis id posuere neque. Curabitur quis aliquet lacus, faucibus tempus dolor. Nunc porttitor justo urna, id pulvinar felis congue a. Aliquam sit amet ullamcorper diam. Morbi eu enim vitae metus laoreet accumsan.</p>\r\n                <ul>\r\n                  <li>Lorem ipsum dolor sit amet</li>\r\n                  <li>Consectetur adipisicing elit</li>\r\n                  <li>Sed do eiusmod tempor</li>\r\n                </ul>\r\n                <p><strong>Lorem ipsum dolor sit amet</strong>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <em>labore et dolore magna</em> aliqua. Ut enim <span class=\"allocation_white\">ad minim veniam,</span> quis nostrud exercitation <span class=\"allocation_dark\">ullamco laboris nisi</span> ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>', '1', '6', '1', 'http://hamzaalayed.com/v2/design/images_post/girl.jpg', '1', '2014-05-16 13:14:37', '1');
INSERT INTO `blog_posts` VALUES ('2', 'Proin bibendum', '2014-05-17 22:33:16', '<p>Pellentesque luctus urna quis tellus tempus ultrices. Aenean varius pretium nisl, scelerisque mattis nibh laoreet id. Suspendisse nec auctor dolor, ac auctor dolor. Nam ullamcorper sapien sed sollicitudin faucibus. Praesent suscipit, nisi ut interdum aliquet, mauris felis consectetur erat, at scelerisque diam nisl vel magna. Aliquam iaculis augue sem, id luctus orci molestie eu. Morbi et ipsum id ligula eleifend pellentesque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed auctor, lacus vel luctus lobortis, nulla nisl vulputate massa, in condimentum metus orci eget augue. Curabitur eu pharetra neque, nec convallis turpis. In ornare tellus ac justo tempus euismod. Curabitur molestie et neque sed faucibus. Ut eget vehicula leo. Fusce ac dignissim metus, quis aliquet felis. Quisque molestie, tortor sed aliquam mattis, nisi neque porttitor mauris, ultrices bibendum lectus felis non nunc. Aliquam sed odio quis dui hendrerit auctor.</p>', '1', '4', '2', 'http://hamzaalayed.com/v2/design/images_post/bigstock-Freedom-happy-free-couple-in-31838090.jpg|-|http://hamzaalayed.com/v2/design/images_post/bigstock-Smiling-girl-with-shopping-bag-36516358.jpg|-|http://hamzaalayed.com/v2/design/images_post/bigstock-Beautiful-young-woman-jumping-15095405.jpg|-|http://hamzaalayed.com/v2/design/images_post/bigstock-Smiling-girl-with-shopping-bag-36516358.jpg', '1', '2014-05-17 15:38:49', '2');
INSERT INTO `blog_posts` VALUES ('3', 'In mattis risus sed', '2014-02-19 23:24:14', '<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam ac elit risus. Phasellus eu volutpat mi. Vivamus at augue ipsum. Integer lacinia urna tortor, accumsan ullamcorper ante tempus eget. Etiam dictum blandit sapien id pharetra. Integer nec ultricies risus.</p>\r\n                <p>In mattis risus sed interdum hendrerit. Pellentesque commodo tortor nec turpis mattis, at lacinia lorem mollis. Nam commodo, arcu in rhoncus pharetra, justo leo euismod eros, id hendrerit turpis purus et quam. Pellentesque bibendum dolor non nisl adipiscing volutpat. Aliquam adipiscing sed velit vel lacinia. Nam eu hendrerit felis. Cras tincidunt molestie orci. Quisque augue justo, cursus viverra laoreet eu, porttitor sit amet tortor. Etiam ut mi sit amet nunc mollis vehicula sed ut sem. Aliquam rhoncus, mi a tincidunt lobortis, nunc nunc venenatis sapien, sit amet facilisis urna nisl non velit. Nulla bibendum ut purus in pharetra. Sed ac ante non diam rhoncus volutpat. Mauris vel diam porttitor, ornare est eget, vestibulum nisl. Quisque et orci id arcu rutrum tristique vel nec augue. Donec turpis est, molestie a tempus sit amet, vestibulum ac ante.</p>', '1', '3', '3', 'http://www.6rp.com/uploads/eg/Mohamed_Fouad/10/6rp_mo7amed-foad_alby-wro7y-w3omry.mp3', '1', '2014-05-17 16:30:55', '1');
INSERT INTO `blog_posts` VALUES ('4', 'Maecenas dignissim', '2014-05-20 23:26:41', '<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam suscipit tempor justo sit amet fringilla. Nunc mollis justo eu ullamcorper mattis. Phasellus congue at enim nec vulputate. Nam enim sem, viverra et purus ac, tempus bibendum diam.<span id=\"more-50\"></span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquam hendrerit erat. Praesent pretium eleifend dui ultricies fermentum. Aliquam enim risus, bibendum non sem aliquam, sodales luctus leo. Maecenas in lacus malesuada, aliquam nisi id, viverra neque. Praesent et fermentum diam. Curabitur a lorem diam. Mauris nulla nibh, vulputate vel vehicula sed, rhoncus in eros.</p>\r\n                <p>Maecenas dignissim massa vitae aliquet consectetur. Quisque ut laoreet mi. Donec eget accumsan turpis, quis varius orci. Duis facilisis dignissim orci a auctor. In sit amet adipiscing dolor, nec viverra lacus. Praesent nulla massa, tempor sit amet arcu nec, porta aliquet orci. Nam nec rhoncus nisl. Mauris ultrices nulla sed nunc volutpat, a sollicitudin lacus vestibulum. Praesent faucibus, eros non mattis sagittis, massa ante interdum urna, et ultrices lorem odio ultricies tellus. Nunc velit dui, tristique vel porta nec, varius ac purus. Quisque sit amet mi suscipit, consectetur purus in, volutpat nibh. Pellentesque dolor ante, pharetra vitae massa quis, rhoncus hendrerit massa. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>', '1', '2', '4', '//www.youtube.com/embed/16_QBOIyFBw|-|http://i1.ytimg.com/vi_webp/16_QBOIyFBw/mqdefault.webp', '1', '2014-05-17 16:30:55', '2');
INSERT INTO `blog_posts` VALUES ('5', 'Maecenas dignissim', '2014-05-19 18:15:54', '<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam suscipit tempor justo sit amet fringilla. Nunc mollis justo eu ullamcorper mattis. Phasellus congue at enim nec vulputate. Nam enim sem, viverra et purus ac, tempus bibendum diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquam hendrerit erat. Praesent pretium eleifend dui ultricies fermentum. Aliquam enim risus, bibendum non sem aliquam, sodales luctus leo. Maecenas in lacus malesuada, aliquam nisi id, viverra neque. Praesent et fermentum diam. Curabitur a lorem diam. Mauris nulla nibh, vulputate vel vehicula sed, rhoncus in eros.</p>\r\n                <p>Maecenas dignissim massa vitae aliquet consectetur. Quisque ut laoreet mi. Donec eget accumsan turpis, quis varius orci. Duis facilisis dignissim orci a auctor. In sit amet adipiscing dolor, nec viverra lacus. Praesent nulla massa, tempor sit amet arcu nec, porta aliquet orci. Nam nec rhoncus nisl. Mauris ultrices nulla sed nunc volutpat, a sollicitudin lacus vestibulum. Praesent faucibus, eros non mattis sagittis, massa ante interdum urna, et ultrices lorem odio ultricies tellus. Nunc velit dui, tristique vel porta nec, varius ac purus. Quisque sit amet mi suscipit, consectetur purus in, volutpat nibh. Pellentesque dolor ante, pharetra vitae massa quis, rhoncus hendrerit massa. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>', '1', '5', '0', 'http://www.hamzaalayed.com', '1', '2014-05-19 11:22:26', '2');
INSERT INTO `blog_posts` VALUES ('6', 'Hello world!', '2014-01-14 18:18:37', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam suscipit tempor justo sit amet fringilla. Nunc mollis justo eu ullamcorper mattis. Phasellus congue at enim nec vulputate.', '1', '1', '1', 'Hello world!', '1', '2014-05-19 11:22:26', '1');

-- ----------------------------
-- Table structure for blog_tags
-- ----------------------------
DROP TABLE IF EXISTS `blog_tags`;
CREATE TABLE `blog_tags` (
  `tagId` int(9) NOT NULL AUTO_INCREMENT COMMENT 'Tags Id',
  `tags` text NOT NULL COMMENT 'Post Tags ',
  PRIMARY KEY (`tagId`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='Posts Tags ';

-- ----------------------------
-- Records of blog_tags
-- ----------------------------
INSERT INTO `blog_tags` VALUES ('1', 'Video|Audio|Blog');
INSERT INTO `blog_tags` VALUES ('2', 'Video|Audio|Blog');

-- ----------------------------
-- Table structure for blog_types
-- ----------------------------
DROP TABLE IF EXISTS `blog_types`;
CREATE TABLE `blog_types` (
  `typeId` int(9) NOT NULL AUTO_INCREMENT COMMENT 'Type Id',
  `typeName` varchar(50) NOT NULL COMMENT 'Type Name',
  `typeIcon` varchar(100) NOT NULL COMMENT 'Type Icon',
  PRIMARY KEY (`typeId`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog_types
-- ----------------------------
INSERT INTO `blog_types` VALUES ('1', 'Text', 'pencil');
INSERT INTO `blog_types` VALUES ('2', 'Video', 'eye-open');
INSERT INTO `blog_types` VALUES ('3', 'Audio', 'music');
INSERT INTO `blog_types` VALUES ('4', 'Slider', 'camera');
INSERT INTO `blog_types` VALUES ('5', 'Link', 'link');
INSERT INTO `blog_types` VALUES ('6', 'Photo', 'picture');

-- ----------------------------
-- Table structure for portfolio
-- ----------------------------
DROP TABLE IF EXISTS `portfolio`;
CREATE TABLE `portfolio` (
  `portfId` int(9) NOT NULL AUTO_INCREMENT COMMENT 'Portfolio ID',
  `profileId` int(9) NOT NULL COMMENT 'Portfolio Profile ID',
  `portfName` varchar(100) NOT NULL COMMENT 'Portfolio Name',
  `portfLink` text NOT NULL COMMENT 'Portfolio Link',
  `portfImg` text NOT NULL COMMENT 'Portfolio Image',
  `portfTags` text NOT NULL COMMENT 'Portfolio Tags',
  PRIMARY KEY (`portfId`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='Portfolio Data';

-- ----------------------------
-- Records of portfolio
-- ----------------------------
INSERT INTO `portfolio` VALUES ('1', '1', 'Portfolio item', 'http://hamzaalayed.com/v2/assets/images_post/bigstock-Beautiful-stylish-young-woman-38849389-504x348.jpg', 'http://hamzaalayed.com/v2/assets/images_post/bigstock-Beautiful-stylish-young-woman-38849389-504x348.jpg', 'Web|Photo');
INSERT INTO `portfolio` VALUES ('2', '1', 'Portfolio item', 'http://hamzaalayed.com/v2/assets/images_post/bigstock-Beautiful-stylish-young-woman-38849389-504x348.jpg', 'http://hamzaalayed.com/v2/assets/images_post/bigstock-Beautiful-stylish-young-woman-38849389-504x348.jpg', 'Graphic|Photo');
INSERT INTO `portfolio` VALUES ('3', '1', 'Portfolio item', 'http://hamzaalayed.com/v2/assets/images_post/bigstock-Beautiful-stylish-young-woman-38849389-504x348.jpg', 'http://hamzaalayed.com/v2/assets/images_post/bigstock-Beautiful-stylish-young-woman-38849389-504x348.jpg', 'PHP|JavaScript');
INSERT INTO `portfolio` VALUES ('4', '1', 'Portfolio item', 'http://hamzaalayed.com/v2/assets/images_post/bigstock-Beautiful-stylish-young-woman-38849389-504x348.jpg', 'http://hamzaalayed.com/v2/assets/images_post/bigstock-Beautiful-stylish-young-woman-38849389-504x348.jpg', 'PHP|JavaScript');
INSERT INTO `portfolio` VALUES ('5', '1', 'Portfolio item', 'http://hamzaalayed.com/v2/assets/images_post/bigstock-Beautiful-stylish-young-woman-38849389-504x348.jpg', 'http://hamzaalayed.com/v2/assets/images_post/bigstock-Beautiful-stylish-young-woman-38849389-504x348.jpg', 'PHP|PostgreSQL');
INSERT INTO `portfolio` VALUES ('6', '1', 'Portfolio item', 'http://hamzaalayed.com/v2/assets/images_post/bigstock-Beautiful-stylish-young-woman-38849389-504x348.jpg', 'http://hamzaalayed.com/v2/assets/images_post/bigstock-Beautiful-stylish-young-woman-38849389-504x348.jpg', 'PHP|MySQL');

-- ----------------------------
-- Table structure for profile
-- ----------------------------
DROP TABLE IF EXISTS `profile`;
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
  `resumeLink` text NOT NULL COMMENT 'Resume File',
  PRIMARY KEY (`profileId`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='User Profile Information';

-- ----------------------------
-- Records of profile
-- ----------------------------
INSERT INTO `profile` VALUES ('1', 'Hamza Alayed', '1985-09-07', 'Arjan, Amman, Jordan', '+962785330496', 'me@hamzaalayed.com', 'http://www.hamzaalayed.com/', 'WEB / MOBILE DEVELOPER  Projects Analyst', 'I taught myself how to learn quickly. \r\nThis way gave me a lot of skills in a short time. \r\nI started in 2005 to now I\'ve gained a lot of skills and I’m looking to earn more.\r\nMy objective is Obtain a position where I can maximize my Development skills', 'http://hamzaalayed.com/images/pic.png', 'Hamzah%20Alayed%20Resume.pdf');

-- ----------------------------
-- Table structure for profiletoskills
-- ----------------------------
DROP TABLE IF EXISTS `profiletoskills`;
CREATE TABLE `profiletoskills` (
  `profileId` int(9) NOT NULL COMMENT 'Profile Id',
  `skillId` int(9) NOT NULL COMMENT 'Skill Id',
  PRIMARY KEY (`profileId`,`skillId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Relation between profile and skills ';

-- ----------------------------
-- Records of profiletoskills
-- ----------------------------
INSERT INTO `profiletoskills` VALUES ('1', '1');
INSERT INTO `profiletoskills` VALUES ('1', '2');
INSERT INTO `profiletoskills` VALUES ('1', '3');
INSERT INTO `profiletoskills` VALUES ('1', '4');
INSERT INTO `profiletoskills` VALUES ('1', '5');
INSERT INTO `profiletoskills` VALUES ('1', '6');
INSERT INTO `profiletoskills` VALUES ('1', '7');
INSERT INTO `profiletoskills` VALUES ('1', '8');
INSERT INTO `profiletoskills` VALUES ('1', '9');
INSERT INTO `profiletoskills` VALUES ('1', '10');

-- ----------------------------
-- Table structure for skills
-- ----------------------------
DROP TABLE IF EXISTS `skills`;
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
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='Skills Info';

-- ----------------------------
-- Records of skills
-- ----------------------------
INSERT INTO `skills` VALUES ('1', 'PhotoShop', '2', '40', 'ffbc38', '', '', '', '', '');
INSERT INTO `skills` VALUES ('2', 'Javascrpit', '1', '80', '', '', '', '', '', '');
INSERT INTO `skills` VALUES ('3', 'Arabic', '3', '99', '4CA5D0', '', '', '', '', '');
INSERT INTO `skills` VALUES ('4', 'English', '3', '70', '6CA338', '', '', '', '', '');
INSERT INTO `skills` VALUES ('5', 'PHP', '1', '95', '', '', '', '', '', '');
INSERT INTO `skills` VALUES ('6', 'HTML/5', '1', '95', '', '', '', '', '', '');
INSERT INTO `skills` VALUES ('7', 'There are many variations of passages', '5', '0', '4CA5D0', '2003', '2007', 'Director Of Department', 'http://hamzaalayed.com/images/pic.png', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');
INSERT INTO `skills` VALUES ('8', 'Cooper Union', '5', '0', '4CA5D0', '2001', '', 'Programmer', 'http://hamzaalayed.com/images/pic.png', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');
INSERT INTO `skills` VALUES ('9', 'University of Malaya , Kuala Lumpur', '4', '0', '6CA338', '2008', '2010', 'Masters Degree SC', 'http://hamzaalayed.com/images/pic.png', 'Masters Degree SC, Management Information Systems (Not Finish Yet)');
INSERT INTO `skills` VALUES ('10', 'Al-Balqa\' Applied University, AMMAN', '4', '0', '6CA338', '2003', '2007', 'Management Information Systems', 'http://hamzaalayed.com/images/pic.png', 'BA Management Information Systems');

-- ----------------------------
-- Table structure for skilltypes
-- ----------------------------
DROP TABLE IF EXISTS `skilltypes`;
CREATE TABLE `skilltypes` (
  `typeId` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Type ID',
  `typeName` varchar(150) NOT NULL COMMENT 'Type Name',
  `typeTitle` varchar(100) NOT NULL COMMENT 'Type Title',
  PRIMARY KEY (`typeId`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='Skills Type';

-- ----------------------------
-- Records of skilltypes
-- ----------------------------
INSERT INTO `skilltypes` VALUES ('1', 'lines', 'PROGRAMMING SKILLS');
INSERT INTO `skilltypes` VALUES ('2', 'pie', 'GRAPHIC SKILLS');
INSERT INTO `skilltypes` VALUES ('3', 'circle', 'LANGUAGE SKILLS');
INSERT INTO `skilltypes` VALUES ('4', 'EDUCATION', 'EDUCATION');
INSERT INTO `skilltypes` VALUES ('5', 'EMPLOYMENT', 'EMPLOYMENT');
