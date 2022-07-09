-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 03, 2012 at 04:50 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ds`
--

-- --------------------------------------------------------

--
-- Table structure for table `biz_register`
--

CREATE TABLE IF NOT EXISTS `biz_register` (
  `trans_id` int(11) NOT NULL AUTO_INCREMENT,
  `ent_id` varchar(12) NOT NULL,
  `biz_name` varchar(40) NOT NULL,
  `biz_cat` varchar(25) NOT NULL,
  `biz_prod` varchar(25) NOT NULL,
  `biz_dis` varchar(25) NOT NULL,
  `biz_div` varchar(25) NOT NULL,
  `biz_add` varchar(50) NOT NULL,
  `biz_add2` varchar(30) NOT NULL,
  `biz_tp` int(14) NOT NULL,
  `biz_email` varchar(30) NOT NULL,
  `user` varchar(12) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`trans_id`),
  UNIQUE KEY `biz_name` (`biz_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `biz_register`
--

INSERT INTO `biz_register` (`trans_id`, `ent_id`, `biz_name`, `biz_cat`, `biz_prod`, `biz_dis`, `biz_div`, `biz_add`, `biz_add2`, `biz_tp`, `biz_email`, `user`, `date`) VALUES
(12, '1', 'ab pvt', 'ELECTRONIC', 'electronic', '', '', '15,nw', '', 5465654, 'asdsd@kjk', 'hemal', '2010-10-04 19:21:53'),
(13, 'hemal', 'abd pvt', '3', 'GSHGH', '', '', 'GFSHGH', '', 718060578, 'hemal@localhost', 'hemal', '2005-08-19 02:26:34'),
(14, 'hemal', 'abd2 pvt', 'FOOD', 'GSHGH', '', '', 'GFSHGH', '', 718060578, 'hemal@localhost', 'hemal', '2005-08-19 02:36:48'),
(15, '', 'hk product', 'CHEMICALE', 'milk related', 'Kandy', 'panvila', '46,test ad', 'address 02', 81235465, 'hemal@localhost', 'hemal', '2010-10-17 18:58:46'),
(16, 'hemal', 'hk product2', 'CHEMICALE', 'milk related', 'Kandy', 'patha', '46,test ad', 'address 02', 81235465, 'hemal@localhost', 'hemal', '2010-10-17 19:03:16');

-- --------------------------------------------------------

--
-- Table structure for table `c_status`
--

CREATE TABLE IF NOT EXISTS `c_status` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_status` varchar(15) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `c_status`
--

INSERT INTO `c_status` (`c_id`, `c_status`) VALUES
(1, 'Married'),
(2, 'Widowed'),
(3, 'Divorced'),
(4, 'Single');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
  `dis_id` int(11) NOT NULL,
  `district` varchar(30) NOT NULL,
  PRIMARY KEY (`dis_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`dis_id`, `district`) VALUES
(1, 'Colombo'),
(2, 'Gampaha'),
(3, 'Kaluthara'),
(4, 'Kandy'),
(5, 'Nuwara_Eliya'),
(6, 'Mathale'),
(7, 'Kegalle');

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE IF NOT EXISTS `division` (
  `div_id` int(11) NOT NULL,
  `dis_id` int(11) NOT NULL,
  `division` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`div_id`, `dis_id`, `division`) VALUES
(1, 4, 'Gangawata Korale'),
(2, 4, 'Yatinuwara'),
(3, 4, 'Udunuwara'),
(4, 4, 'Udapalatha'),
(5, 4, 'Doluva'),
(6, 4, 'Pasbage korale'),
(7, 4, 'Ganga Ihala korale'),
(8, 4, 'Delthota'),
(9, 4, 'Hatharaliyadda'),
(10, 4, 'Thumpane'),
(11, 4, 'Akurana'),
(12, 4, 'Harispaththuva'),
(13, 4, 'Pujapitiya'),
(14, 4, 'Patha Dumbara'),
(15, 4, 'Meda Dumbara'),
(16, 4, 'Udadumbara'),
(17, 4, 'Minipe'),
(18, 4, 'Kundasale'),
(19, 4, 'patha hevahata'),
(20, 4, 'panvila');

-- --------------------------------------------------------

--
-- Table structure for table `edu`
--

CREATE TABLE IF NOT EXISTS `edu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `std_id` varchar(12) NOT NULL,
  `inst` varchar(40) DEFAULT NULL,
  `e_from` text,
  `e_to` text,
  `e_field` varchar(30) DEFAULT NULL,
  `received` varchar(12) DEFAULT NULL,
  `granted` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `edu`
--

INSERT INTO `edu` (`id`, `std_id`, `inst`, `e_from`, `e_to`, `e_field`, `received`, `granted`) VALUES
(7, 'hemal', 'B.Sc ( Computer Science )', '2000', '2003', 'Computer Science', '', ''),
(8, 'hemal', 'M.Sc ( Computer Science )', '2008', '2010', 'Computer Science', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `emp_details`
--

CREATE TABLE IF NOT EXISTS `emp_details` (
  `emp_id` varchar(12) NOT NULL,
  `emp_com_name` varchar(15) DEFAULT NULL,
  `emp_full_name` varchar(75) DEFAULT NULL,
  `emp_desig` varchar(35) DEFAULT NULL,
  `emp_class` varchar(5) DEFAULT '1',
  `emp_loc` varchar(12) NOT NULL DEFAULT '1',
  `emp_nic` varchar(10) DEFAULT NULL,
  `emp_gender` decimal(10,0) NOT NULL DEFAULT '0',
  `emp_dob` date DEFAULT NULL,
  `emp_add1` varchar(35) DEFAULT NULL,
  `emp_add2` varchar(20) DEFAULT NULL,
  `emp_tp_home` decimal(14,0) DEFAULT NULL,
  `emp_tp_mo` decimal(14,0) DEFAULT NULL,
  `emp_email` varchar(45) DEFAULT NULL,
  `emp_app_date` date DEFAULT NULL,
  `emp_mar` varchar(8) NOT NULL DEFAULT '1',
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT COMMENT='InnoDB free: 3072 kB';

--
-- Dumping data for table `emp_details`
--

INSERT INTO `emp_details` (`emp_id`, `emp_com_name`, `emp_full_name`, `emp_desig`, `emp_class`, `emp_loc`, `emp_nic`, `emp_gender`, `emp_dob`, `emp_add1`, `emp_add2`, `emp_tp_home`, `emp_tp_mo`, `emp_email`, `emp_app_date`, `emp_mar`) VALUES
('hemal', 'Hemal', 'Hemal Hashantha Kaviraj', 'Science & Technology Officer', '', '3', '782992350v', 0, '1978-10-25', '226, Nawalapitiya Rd', 'Ginigathena', 512242174, 776578578, 'kavirajhh@yahoo.com', '2006-12-16', 'Married');

-- --------------------------------------------------------

--
-- Table structure for table `ent_info`
--

CREATE TABLE IF NOT EXISTS `ent_info` (
  `reg_no` int(11) NOT NULL AUTO_INCREMENT,
  `l_name` varchar(15) DEFAULT '""',
  `f_name` varchar(15) DEFAULT '""',
  `m_name` varchar(15) DEFAULT '""',
  `marital` int(11) DEFAULT '0',
  `gender` int(11) NOT NULL DEFAULT '0',
  `nic` varchar(10) DEFAULT '0',
  `dob` date DEFAULT NULL,
  `add1` varchar(25) DEFAULT '""',
  `add2` varchar(25) DEFAULT '""',
  `distric` varchar(20) NOT NULL,
  `division` varchar(20) NOT NULL,
  `tp` int(14) DEFAULT '0',
  `tp2` int(11) NOT NULL,
  `email` varchar(30) DEFAULT '""',
  `user_id` varchar(12) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`reg_no`),
  UNIQUE KEY `user_id` (`user_id`),
  UNIQUE KEY `nic_3` (`nic`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ent_info`
--

INSERT INTO `ent_info` (`reg_no`, `l_name`, `f_name`, `m_name`, `marital`, `gender`, `nic`, `dob`, `add1`, `add2`, `distric`, `division`, `tp`, `tp2`, `email`, `user_id`, `date`) VALUES
(1, 'hemal', 'kaviraj', 'hashantha', 0, 0, '78299', '2010-10-25', '16', 'ginigathena', 'kandy', 'pasbagekorale', 54545, 0, 'hemal@localhost', 'hemal', '2010-10-17'),
(2, 'kaviraj', 'hemal', '', 0, 0, '785655656v', '2010-10-25', '14,samansirigama', 'Ginigathena', 'kandy', 'Patha', 125785887, 512242106, 'hemal@localhost', 'kaviraj', '2005-08-19');

-- --------------------------------------------------------

--
-- Table structure for table `exp`
--

CREATE TABLE IF NOT EXISTS `exp` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `std_id` varchar(12) NOT NULL,
  `employer` varchar(45) NOT NULL,
  `ex_from` text,
  `ex_to` text,
  `discription` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `exp`
--

INSERT INTO `exp` (`id`, `std_id`, `employer`, `ex_from`, `ex_to`, `discription`) VALUES
(9, 'hemal', 'Peoples Bank', '1999', '2000', 'As a Trainee'),
(10, 'hemal', 'CDA', '2003', '2004', 'Graduat Trainee'),
(11, 'hemal', '3WI', '2004', '2005', 'Software Engineer'),
(12, 'hemal', 'Jhon Keels', '2006', '2006', 'Software Engineer');

-- --------------------------------------------------------

--
-- Table structure for table `intended`
--

CREATE TABLE IF NOT EXISTS `intended` (
  `std_id` varchar(12) NOT NULL,
  `year` varchar(4) DEFAULT '2009',
  `batch` decimal(1,0) DEFAULT '1',
  `type` decimal(1,0) DEFAULT '1',
  `sought` varchar(20) DEFAULT NULL,
  `field` int(11) DEFAULT '1',
  `ass_ship` decimal(1,0) DEFAULT NULL,
  `pro_name` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`std_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intended`
--

INSERT INTO `intended` (`std_id`, `year`, `batch`, `type`, `sought`, `field`, `ass_ship`, `pro_name`) VALUES
('hemal', '2009', 1, 1, NULL, 1, NULL, 'proposal/hemal.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `issues`
--

CREATE TABLE IF NOT EXISTS `issues` (
  `issue_id` int(11) NOT NULL AUTO_INCREMENT,
  `client` varchar(30) DEFAULT NULL,
  `title` varchar(25) DEFAULT NULL,
  `issue` text NOT NULL,
  `date` datetime NOT NULL,
  `auth` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`issue_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `issues`
--

INSERT INTO `issues` (`issue_id`, `client`, `title`, `issue`, `date`, `auth`) VALUES
(3, 'hemal', 'computer', 'beep', '2005-08-19 01:56:57', 1),
(4, 'hemal', 'computer', 'message id for ', '2005-08-19 01:57:21', 1),
(5, 'acsac', 'cas', 'cdsffdsadfdfd\r\n454545454544', '0000-00-00 00:00:00', 1),
(6, 'hkk', 'zz', 'test is', '2010-10-05 10:16:39', 1),
(7, 'kaviraj', 'test', 'this is test message for test search', '2010-10-05 05:32:24', 1),
(8, 'hemal@localhost', 'test retern mail', 'check the return mail of issues', '2010-10-13 22:14:05', 1),
(9, 'hemal@localhost', 'test retern mail', 'check the return mail of issues', '2010-10-13 22:14:40', 1),
(10, 'hemal@localhost', 'test retern mail', 'check the return mail of issues', '2010-10-13 22:15:25', 0),
(11, '', 'computer', 'fghfghgfh', '2010-10-13 22:17:18', 0),
(12, '', 'computer', 'fghfghgfh', '2010-10-13 22:19:59', 0),
(13, 'hemal@localhos', 'computer', 'fghfghgfh', '2010-10-13 22:20:42', 0),
(14, 'hemal@localhos', 'chemical', 'what is the easiest way for develop pqrs ', '2010-10-20 20:22:58', 0),
(15, 'hemal@localhost', 'chemical', 'what is the easiest way for develop pqrs ', '2010-10-20 20:24:06', 0),
(16, 'hemal@localhost', 'chemical', 'what is the easiest way for develop pqrs ', '2010-10-20 20:24:39', 1),
(17, 'hemal@localhost', 'chemical', 'what is the easiest way for develop pqrs ', '2010-10-20 20:26:55', 1),
(18, 'hemal@localhost', 'chemical', 'what is the easiest way for develop pqrs ', '2010-10-20 20:27:53', 0),
(19, 'hemal@localhost', 'chemical', 'what is the easiest way for develop pqrs ', '2010-10-20 20:29:23', 1),
(20, 'hemal@localhost', 'test retern mail', 'test the php page', '2010-10-20 20:33:52', 0),
(21, 'hemal@localhost', 'ICT', 'wwwww', '2010-10-20 20:41:13', 1),
(22, 'hemal@localhost', 'CHEMICALE', 'test che', '2010-10-20 21:42:30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recever` varchar(12) NOT NULL,
  `title` varchar(40) NOT NULL,
  `post` varchar(300) NOT NULL,
  `date` datetime NOT NULL,
  `sender` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `recever`, `title`, `post`, `date`, `sender`) VALUES
(20, 'kaviraj', 'test', 'sadasdsadsd', '2005-08-19 00:31:35', 'hemal'),
(24, 'guest', '6563565636', '735676675347', '2005-08-19 01:29:21', 'hemal'),
(33, 'all', 'SDG', 'SDGSDG', '2012-08-02 19:37:14', 'hemal'),
(34, 'hemal', 'aaaaaaaaaaaaa', 'ffffffffffffffffff', '2012-08-02 19:47:03', 'hemal');

-- --------------------------------------------------------

--
-- Table structure for table `ml_subscribe`
--

CREATE TABLE IF NOT EXISTS `ml_subscribe` (
  `trans_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(12) NOT NULL,
  `tech_cat` int(2) NOT NULL,
  PRIMARY KEY (`trans_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `ml_subscribe`
--

INSERT INTO `ml_subscribe` (`trans_id`, `user_id`, `tech_cat`) VALUES
(36, 'hemal', 5),
(37, 'hemal', 4);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `pg_id` varchar(4) NOT NULL,
  `pg_name` char(25) NOT NULL,
  `pg_cat` int(11) NOT NULL,
  `pg_link` varchar(40) NOT NULL,
  PRIMARY KEY (`pg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`pg_id`, `pg_name`, `pg_cat`, `pg_link`) VALUES
('adct', 'Technology Category''s', 0, ''),
('addb', 'Add Business to user', 1, 'biz_register.php'),
('addu', 'User Register', 1, 'ent_register.php'),
('adpr', 'Add Program', 5, ''),
('atis', 'Authorized Issues', 2, ''),
('atso', 'Authorized Solutions', 2, ''),
('chau', 'View & Change Data', 1, 'view_ent.php'),
('flat', 'File Authorize', 3, ''),
('flua', 'Unauthorized Files', 0, ''),
('isat', 'Issue Authorize', 2, ''),
('mlsb', 'Mail List Subscribe', 1, ''),
('ncot', 'Not Complete Task', 4, ''),
('opts', 'Open Task', 4, ''),
('prol', 'Program List', 5, ''),
('pron', 'Program Names', 5, ''),
('schf', 'Search File', 3, ''),
('schi', 'Search', 2, ''),
('scht', 'Search', 4, ''),
('soat', 'Solution Authorize', 2, ''),
('solu', 'Solution''s', 2, ''),
('subi', 'Submit Issue', 2, ''),
('tetn', 'Task Transaction', 4, ''),
('upfl', 'File Upload', 3, ''),
('vatr', 'View Authorize Technical', 3, ''),
('vnar', 'View non Authorize Techni', 3, ''),
('vtbd', 'View Task BY Date', 4, ''),
('vtbn', 'View Task BY Name', 4, '');

-- --------------------------------------------------------

--
-- Table structure for table `pg_access`
--

CREATE TABLE IF NOT EXISTS `pg_access` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` varchar(4) NOT NULL,
  `u_cat` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=181 ;

--
-- Dumping data for table `pg_access`
--

INSERT INTO `pg_access` (`id`, `page_id`, `u_cat`) VALUES
(142, 'addu', 1),
(143, 'adpr', 1),
(144, 'atis', 1),
(145, 'atso', 1),
(146, 'flat', 1),
(147, 'isat', 1),
(148, 'mlsb', 1),
(149, 'ncot', 1),
(150, 'opts', 1),
(151, 'prol', 1),
(152, 'pron', 1),
(153, 'schf', 1),
(154, 'schi', 1),
(155, 'scht', 1),
(156, 'soat', 1),
(157, 'solu', 1),
(158, 'subi', 1),
(159, 'tetn', 1),
(160, 'upfl', 1),
(161, 'vatr', 1),
(162, 'vnar', 1),
(163, 'vtbd', 1),
(164, 'vtbn', 1),
(167, 'adct', 2),
(171, 'adct', 2),
(174, 'addb', 1),
(175, 'chau', 1),
(176, 'chau', 1),
(177, 'flua', 1),
(178, 'addb', 1),
(179, 'adct', 1),
(180, 'VIEW', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(12) NOT NULL,
  `product` varchar(30) NOT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `user`, `product`) VALUES
(1, 'hemal', 'bites');

-- --------------------------------------------------------

--
-- Table structure for table `pro_id`
--

CREATE TABLE IF NOT EXISTS `pro_id` (
  `trans_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` varchar(12) NOT NULL,
  `name` varchar(25) NOT NULL,
  `add` varchar(60) NOT NULL,
  `tp` int(16) NOT NULL,
  `email` varchar(35) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`trans_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `pro_id`
--

INSERT INTO `pro_id` (`trans_id`, `course_id`, `name`, `add`, `tp`, `email`, `date`) VALUES
(1, 'ntr13', 'hemal', '30, new road, nawalapitiya', 45654545, 'hjhg@bkjbh.com', '2005-08-21 04:08:51'),
(2, 'ntr13', 'hemal2', '30, new road, nawalapitiya', 125785887, 'hjjh@hjghg.com', '2005-08-21 04:08:28'),
(3, 'ntr13', 'hemal6', '30, new road, nawalapitiya', 776578578, 'hjjh@hjghg.com', '2005-08-21 05:08:22'),
(4, 'eproduct3', '', '', 0, '', '2010-10-20 03:10:35');

-- --------------------------------------------------------

--
-- Table structure for table `pro_schedule`
--

CREATE TABLE IF NOT EXISTS `pro_schedule` (
  `pro_trns_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_id` varchar(12) NOT NULL,
  `program` varchar(50) NOT NULL,
  `pro_date` datetime NOT NULL,
  `pro_org` varchar(25) NOT NULL,
  `pro_location` varchar(50) NOT NULL,
  `pro_tp` int(11) NOT NULL,
  `pro_email` varchar(50) NOT NULL,
  `pro_vacants` int(11) NOT NULL,
  `user` varchar(12) NOT NULL,
  `up_date` datetime NOT NULL,
  `pro_com` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`pro_trns_id`),
  UNIQUE KEY `pro_id_2` (`pro_id`),
  KEY `pro_id` (`pro_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pro_schedule`
--

INSERT INTO `pro_schedule` (`pro_trns_id`, `pro_id`, `program`, `pro_date`, `pro_org`, `pro_location`, `pro_tp`, `pro_email`, `pro_vacants`, `user`, `up_date`, `pro_com`) VALUES
(1, 'ntr13', 'dehydration', '2010-10-03 09:30:00', 'vrc psk', 'psk', 5245445, 'bv@hjgvh.com', 3, 'hemal', '2005-08-21 12:34:55', 0),
(2, 'eproduct3', 'Training program abour e product dev', '2010-10-03 09:30:30', 'VRC pasbage', 'DS_nawalapitiya', 542222238, 'ds@pasbagekorale.lk', 30, 'hk', '2005-08-21 12:48:16', 0),
(3, 'eproduct2', 'Training program abour e product development', '2010-11-03 09:30:00', 'VRC pasbage', 'DS_nawalapitiya', 542222238, 'ds@pasbagekorale.lk', 45, 'hemal', '2005-08-21 01:08:14', 0),
(4, 'eproduct', 'Training program abour e product development', '2010-11-03 09:30:00', 'VRC pasbage', 'DS_nawalapitiya', 542222238, 'ds@pasbagekorale.lk', 45, 'hemal', '2005-08-21 01:08:29', 0),
(5, 'food', '', '0000-00-00 00:00:00', '', 'psk', 0, '', 0, 'hemal', '2005-08-21 04:08:19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `solution`
--

CREATE TABLE IF NOT EXISTS `solution` (
  `trans_id` int(11) NOT NULL AUTO_INCREMENT,
  `issue_id` int(11) NOT NULL,
  `solution` text NOT NULL,
  `catagory` varchar(20) NOT NULL DEFAULT 'other',
  `user_ID` varchar(12) NOT NULL,
  `date` datetime NOT NULL,
  `auth` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`trans_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `solution`
--

INSERT INTO `solution` (`trans_id`, `issue_id`, `solution`, `catagory`, `user_ID`, `date`, `auth`) VALUES
(1, 8, 'qqqq', 'other', 'hk trans', '2010-10-05 00:00:00', 1),
(2, 9, 'qqqq', 'other', 'hk trans', '2010-10-05 00:00:00', 1),
(3, 8, 'qqqq', 'other', 'hk trans', '2010-10-05 10:10:32', 1),
(4, 3, 'this is test massege for check solution', 'IT', 'hk trans', '2010-10-05 05:10:31', 0),
(5, 4, 'solution screen test', 'test', 'hk trans', '2010-10-06 23:10:32', 0),
(6, 17, 'it is like that', 'kavirajhh@yahoo.com', 'hemal', '2010-10-20 21:10:40', 1),
(7, 22, 'is 22 solution test', 'kavirajhh@yahoo.com', 'hemal', '2010-10-20 22:10:21', 1),
(8, 22, 'test second', 'kavirajhh@yahoo.com', 'hemal', '2010-10-20 22:10:41', 1);

-- --------------------------------------------------------

--
-- Table structure for table `task_open`
--

CREATE TABLE IF NOT EXISTS `task_open` (
  `task_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `task_date` date NOT NULL,
  `task_user` varchar(12) NOT NULL,
  `task` varchar(100) NOT NULL,
  `task_client` varchar(45) DEFAULT NULL,
  `task_email` varchar(45) DEFAULT NULL,
  `task_phone` int(11) DEFAULT NULL,
  `task_complete` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`task_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `task_open`
--

INSERT INTO `task_open` (`task_id`, `task_date`, `task_user`, `task`, `task_client`, `task_email`, `task_phone`, `task_complete`) VALUES
(4, '0000-00-00', 'hemal', 'request info', 'kumara', 'abc@yahoo.com', 1254878, 1),
(5, '2010-09-30', 'hemal', 'for', 'hemal', 'kavirajhh@yahoo.com', 215455, 1),
(6, '2010-09-30', 'hemal', 'for', 'hemal', 'kavirajhh@yahoo.com', 215455, 1),
(7, '2010-10-02', 'hemal', 'register to classs', 'weerasingha', 'khfg@yahoo.com', 125484, 1),
(8, '2010-10-02', 'hemal', 'soil test ', 'kapila', 'kapila@hey.com', 79546566, 1),
(9, '2010-10-02', 'hemal', 'soil test ', 'kapila', 'kapila@hey.com', 79546566, 1),
(10, '2010-10-02', 'hemal', 'llllllll', 'kapila', 'kapila@hey.com', 125484, 1),
(11, '2010-10-02', 'hemal', 'requesr loan', 'nihal', 'nkk@ghg.com', 45654545, 1),
(12, '2010-10-14', 'hemal', 'test the auto generate email', 'pereira', 'hemal@localhost', 718060578, 1),
(13, '2010-10-14', 'hemal', 'test the auto generate email', 'pereira', 'hemal@localhost', 718060578, 0),
(14, '2010-10-14', 'hemal', 'test 2', 'shantha', 'hemal@localhost', 125484, 0),
(15, '2010-10-14', 'hemal', 'test the auto generate email', 'pereira', 'hemal@localhost', 718060578, 1),
(16, '2010-10-14', 'hemal', 'test the auto generate email', 'pereira', 'hemal@localhost', 718060578, 0),
(17, '2010-10-14', 'hemal', 'test the auto generate email', 'pereira', 'hemal@localhost', 718060578, 0),
(18, '2010-10-14', 'hemal', 'test the auto generate email', 'pereira', 'hemal@localhost', 718060578, 0),
(19, '2010-10-19', 'hemal', 'Request the matirial test', 'Gunasekara', 'hemal@localhost', 542232365, 0),
(20, '2010-10-19', 'hemal', 'Request the matirial test for metle', 'Gunasekara', 'hemal@localhost', 542232365, 0),
(21, '2010-10-19', 'hemal', 'Request the matirial test for metle', 'Gunasekara p.N', 'hemal@localhost', 542232365, 0),
(22, '2010-10-19', 'hemal', 'Request the matirial test for metle', 'Gunasekara PN', 'hemal@localhost', 542232365, 0);

-- --------------------------------------------------------

--
-- Table structure for table `task_trans`
--

CREATE TABLE IF NOT EXISTS `task_trans` (
  `trans_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `task_id` int(10) unsigned NOT NULL,
  `trans_date` date NOT NULL,
  `trans_job` varchar(45) NOT NULL,
  `trans_dis` varchar(150) DEFAULT NULL,
  `trans_user` varchar(12) NOT NULL,
  `forward` varchar(12) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`trans_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `task_trans`
--

INSERT INTO `task_trans` (`trans_id`, `task_id`, `trans_date`, `trans_job`, `trans_dis`, `trans_user`, `forward`, `status`) VALUES
(3, 4, '2010-09-30', 'jkhgkj', 'lgg', 'hk trans', '', 1),
(4, 4, '2010-09-30', 'jkhgkj', 'lgg', 'hk trans', '', 1),
(5, 5, '2010-10-02', 'send to kandy', 'for autho', 'hk trans', '', 1),
(6, 5, '2010-10-02', 'return report', 'ret date 2012', 'hk trans', '', 1),
(7, 9, '2010-10-02', 'send to test', 'on 2010/07/03', 'hk trans', '', 1),
(8, 9, '2010-10-02', 'PH is ok', 'on 2010/07/09', 'hk trans', '', 1),
(9, 10, '2010-10-02', 'hjgjgjh', 'jhgkgjg', 'hk trans', '', 1),
(10, 11, '2010-10-02', 'application error', 'no garantee', 'hk trans', '', 1),
(11, 11, '2010-10-02', 'JOB COMPLETED', '', 'hk trans', '', 1),
(12, 11, '2010-10-02', 'JOB COMPLETED', '', 'hk trans', '', 1),
(13, 11, '2010-10-02', 'JOB COMPLETED', '', 'hk trans', '', 1),
(14, 10, '2010-10-04', 'JOB COMPLETED', '', 'hk trans', '', 1),
(15, 6, '2010-10-04', 'test', 'test task trans', 'hk trans', 'hemal', 1),
(16, 6, '2005-08-19', 'JOB COMPLETED', '', 'hk trans', '', 1),
(17, 0, '0000-00-00', '', '', '', '', 1),
(18, 7, '2010-10-14', 'JOB COMPLETED', '', 'hk trans', '', 1),
(19, 9, '2010-10-14', 'JOB COMPLETED', '', 'hk trans', '', 1),
(20, 12, '2010-10-14', 'JOB COMPLETED', '', 'hk trans', '', 1),
(21, 15, '2005-08-19', 'test task transection', 'trans discription', 'hk trans', 'hemal', 1),
(22, 13, '2005-08-19', 'return report', 'test mail', 'hk trans', 'hemal', 1),
(23, 13, '2005-08-19', 'return report', 'test mail', 'hk trans', '', 1),
(24, 13, '2005-08-19', 'return report', 'test mail', 'hk trans', '', 1),
(25, 13, '2005-08-19', 'return report', 'test mail', 'hk trans', '', 1),
(26, 13, '2005-08-19', 'return report', 'test mail', 'hk trans', '', 1),
(27, 13, '2005-08-19', 'return report', 'test mail', 'hk trans', '', 1),
(28, 13, '2005-08-19', 'return report', 'test mail', 'hk trans', '', 1),
(29, 15, '2005-08-19', 'JOB COMPLETED', '', 'hk trans', '', 1),
(30, 13, '2010-10-19', 'test task transection', 'this is test', '', 'hemal', 1),
(31, 13, '2010-10-19', 'test task transection', 'this is test', '', 'hemal', 1),
(32, 18, '2010-10-20', 'test the forward', 'test ', 'hemal', 'hemal', 1),
(33, 21, '2010-10-20', 'fdsaf', 'dsfdsf', 'hemal', 'hemal', 1),
(34, 13, '2005-08-19', 'test', 'test thw foeward', 'hemal', 'hemal', 1),
(35, 13, '2005-08-19', 'test task transection', 'forward', 'hemal', 'hemal', 0),
(36, 21, '2005-08-19', 'send to test', 'the test', 'hemal', 'hemal', 0),
(37, 13, '2005-08-19', 'test ', 'kjhjhj', 'hemal', 'kaviraj', 0),
(38, 13, '2005-08-19', 'rrr', 'rrrr', 'hemal', 'kaviraj', 0),
(39, 13, '2005-08-19', 'application error', 'adddad', 'hemal', 'kaviraj', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tech_catagory`
--

CREATE TABLE IF NOT EXISTS `tech_catagory` (
  `cat_id` int(2) NOT NULL AUTO_INCREMENT,
  `catagory` varchar(25) NOT NULL,
  PRIMARY KEY (`cat_id`),
  UNIQUE KEY `catagory` (`catagory`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tech_catagory`
--

INSERT INTO `tech_catagory` (`cat_id`, `catagory`) VALUES
(2, 'ICT'),
(6, 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `up_file`
--

CREATE TABLE IF NOT EXISTS `up_file` (
  `file_id` varchar(60) NOT NULL,
  `file_type` int(2) NOT NULL DEFAULT '1',
  `file_dis` varchar(200) DEFAULT NULL,
  `file_cat` varchar(25) NOT NULL,
  `up_date` date NOT NULL,
  `up_user` varchar(12) NOT NULL,
  `up_level` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`file_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `up_file`
--

INSERT INTO `up_file` (`file_id`, `file_type`, `file_dis`, `file_cat`, `up_date`, `up_user`, `up_level`) VALUES
('report/admin.gif', 1, 'test image', 'CHEMICALE', '2010-10-19', 'hemal', 1),
('report/hemal_project_report.doc', 2, 'test file', 'Civil_Engineering', '2010-10-19', 'hemal', 1),
('report/New Stories (Highway Blues).wma', 3, 'test video', 'ELECTRONIC', '2010-10-19', 'hemal', 1),
('report/sql.txt', 2, 'test chemical cat', 'CHEMICALE', '2005-08-19', 'hemal', 1),
('report/Winter.jpg', 1, 'test image', 'ICT', '2005-08-19', 'hemal', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `u_id` varchar(10) NOT NULL,
  `u_pw` varchar(32) DEFAULT NULL,
  `u_cat` int(2) NOT NULL DEFAULT '3',
  `last` datetime NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_pw`, `u_cat`, `last`) VALUES
('cat', '202cb962ac59075b964b07152d234b70', 4, '0000-00-00 00:00:00'),
('hemal', '202cb962ac59075b964b07152d234b70', 1, '2012-08-02 07:08:30');

-- --------------------------------------------------------

--
-- Table structure for table `user_cat`
--

CREATE TABLE IF NOT EXISTS `user_cat` (
  `cat_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `catagory` varchar(15) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user_cat`
--

INSERT INTO `user_cat` (`cat_id`, `catagory`) VALUES
(1, 'admin'),
(2, 'officer'),
(3, 'user'),
(4, 'temp');
