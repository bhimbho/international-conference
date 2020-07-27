-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 27, 2020 at 09:36 PM
-- Server version: 5.7.24
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intl_conference`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

DROP TABLE IF EXISTS `administrator`;
CREATE TABLE IF NOT EXISTS `administrator` (
  `administrator_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`administrator_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`administrator_id`, `admin_username`, `admin_password`, `date_added`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', '2020-07-22 11:28:30');

-- --------------------------------------------------------

--
-- Table structure for table `conference`
--

DROP TABLE IF EXISTS `conference`;
CREATE TABLE IF NOT EXISTS `conference` (
  `conference_id` int(11) NOT NULL AUTO_INCREMENT,
  `theme` text NOT NULL,
  `sub_theme` text NOT NULL,
  `venue` text NOT NULL,
  `email` varchar(150) NOT NULL,
  `about` text NOT NULL,
  `date` varchar(100) NOT NULL,
  PRIMARY KEY (`conference_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conference`
--

INSERT INTO `conference` (`conference_id`, `theme`, `sub_theme`, `venue`, `email`, `about`, `date`) VALUES
(1, 'CFYnUqBEaX', 'sEviiTjT7e', 'BZRedRo0az', 'vui3w@vgiy.com', 'jKLqntN2a5', '2020-05-14'),
(2, 'PsOcBk52NZ', 'N5Xrt0tcZN', 'NRGiQeLYYe', 'upcdz@slpe.com', 'aCstIaF3jU', '2020-05-14'),
(3, 'PsOcBk52NZ', 'N5Xrt0tcZN', 'NRGiQeLYYe', 'upcdz@slpe.com', 'aCstIaF3jU', '2020-05-14'),
(4, 'qxtYq1domS', 'zP5vx7fmyg', 'FzMVmNqaps', 'ck6p9@tght.com', 'JOF3Vd0PBD', '2020-05-14'),
(7, 'nXeW81vUxz', 'DlLbsZ8pxm', 'lRVxgdPmRr', 'warzkn@v7c.com1', 'rKxf4BM6A1', '2020-05-14');

-- --------------------------------------------------------

--
-- Table structure for table `conference_date`
--

DROP TABLE IF EXISTS `conference_date`;
CREATE TABLE IF NOT EXISTS `conference_date` (
  `conference_date_id` int(11) NOT NULL AUTO_INCREMENT,
  `event` text NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`conference_date_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conference_date`
--

INSERT INTO `conference_date` (`conference_date_id`, `event`, `description`, `date`) VALUES
(3, 'Kid Learn ABC', '<h3>saaaaaaaaaaaaa</h3>\r\n<p>lorem impsum tunha kdladasd akdb </p>', '2020-05-14'),
(4, 'Kid Learn ABC', 'asssssssssss', '2020-05-14');

-- --------------------------------------------------------

--
-- Table structure for table `guideline`
--

DROP TABLE IF EXISTS `guideline`;
CREATE TABLE IF NOT EXISTS `guideline` (
  `guideline_id` int(11) NOT NULL AUTO_INCREMENT,
  `guideline` mediumtext NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`guideline_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guideline`
--

INSERT INTO `guideline` (`guideline_id`, `guideline`, `created_at`, `updated_at`) VALUES
(1, 'asssssssss23122222222', '2020-07-24 00:10:50', '2020-07-24');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

DROP TABLE IF EXISTS `hotels`;
CREATE TABLE IF NOT EXISTS `hotels` (
  `hotel_id` int(11) NOT NULL AUTO_INCREMENT,
  `hotel_name` varchar(150) NOT NULL,
  `location` varchar(150) NOT NULL,
  `rates` text NOT NULL,
  `rooms` text NOT NULL,
  `contact` varchar(150) NOT NULL,
  PRIMARY KEY (`hotel_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `journal`
--

DROP TABLE IF EXISTS `journal`;
CREATE TABLE IF NOT EXISTS `journal` (
  `journal_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `abstract` text NOT NULL,
  `file` varchar(200) NOT NULL,
  `page_no` varchar(200) NOT NULL,
  `authors` varchar(200) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(150) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `upload_date` date DEFAULT NULL,
  PRIMARY KEY (`journal_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `journal`
--

INSERT INTO `journal` (`journal_id`, `title`, `abstract`, `file`, `page_no`, `authors`, `firstname`, `lastname`, `email`, `phone`, `institution`, `upload_date`) VALUES
(1, 'asssss', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'assssss', '24', 'asssss', '', '', '', '', '', '2020-06-07'),
(3, 'Introduction to Computer', 'lorem ipsum', '6767531.png', '234', 'Soneye sina, J.W Jason', 'Soneye', 'Oluwasina', 'advancoplanet@gmail.com', '08141656572', '', '2020-06-14'),
(4, 'Introduction to Computer', 'lorem ipsum', '2089900.png', '234', 'Soneye sina, J.W Jason', 'Soneye', 'Oluwasina', 'advancoplanet@gmail.com', '08141656572', '', '2020-06-14'),
(5, 'WDQWsnvhQH', 'TDG6sDvMHp', '2081645.jpg', 'Ko41Q22ozG', 'I2ftmmcWTi', 'B7vjeIsVPk', 's364VmoiND', '23mdu@pbsj.com', '0746728229', '', '2020-06-14'),
(6, 'ZQJNGSbB8x', 'CeamXbOOvq', '1043745.png', 'T6SjymHS8t', '76DF9jORhb', 'OXYXEGFEzD', 'iQJlIeNVi0', 'ihxle@ly75.com', '4094280840', '', '2020-06-14'),
(7, 'yIAvzBp4Tb', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1949525.jpg', 'HY18gURrka', 'QSlZ8UeC6U', 'gy4cJCYZjf', 'qqn2IgyEMM', 'u0kvn@ktie.com', '9191594348', '', '2020-06-14');

-- --------------------------------------------------------

--
-- Table structure for table `new_upload`
--

DROP TABLE IF EXISTS `new_upload`;
CREATE TABLE IF NOT EXISTS `new_upload` (
  `new_upload_id` int(11) NOT NULL AUTO_INCREMENT,
  `participant_id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `date_upload_created` varchar(150) NOT NULL,
  PRIMARY KEY (`new_upload_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `our_team`
--

DROP TABLE IF EXISTS `our_team`;
CREATE TABLE IF NOT EXISTS `our_team` (
  `team_id` int(11) NOT NULL,
  `team_name` varchar(150) NOT NULL,
  `team_pos` varchar(150) NOT NULL,
  `team_pic` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

DROP TABLE IF EXISTS `participant`;
CREATE TABLE IF NOT EXISTS `participant` (
  `participantid` int(11) NOT NULL AUTO_INCREMENT,
  `p_fullname` varchar(255) NOT NULL,
  `p_insitution` varchar(150) NOT NULL,
  `paper_title` text NOT NULL,
  `author` text NOT NULL,
  `file_url` varchar(150) NOT NULL,
  `abstract` longtext NOT NULL,
  `pages` varchar(100) NOT NULL,
  PRIMARY KEY (`participantid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration_fee`
--

DROP TABLE IF EXISTS `registration_fee`;
CREATE TABLE IF NOT EXISTS `registration_fee` (
  `reg_id` int(11) NOT NULL AUTO_INCREMENT,
  `bank` varchar(150) NOT NULL,
  `account_name` varchar(150) NOT NULL,
  `account_number` varchar(150) NOT NULL,
  `amount` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration_fee`
--

INSERT INTO `registration_fee` (`reg_id`, `bank`, `account_name`, `account_number`, `amount`, `updated_at`) VALUES
(1, 'e3h4wnH6J8', 'c2eu1SBrIG', '4121708833', 20002, '2020-07-24 09:40:56');

-- --------------------------------------------------------

--
-- Table structure for table `speakers`
--

DROP TABLE IF EXISTS `speakers`;
CREATE TABLE IF NOT EXISTS `speakers` (
  `speaker_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `institution` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `profile` text NOT NULL,
  `type` varchar(200) NOT NULL,
  `speaker_order` int(11) NOT NULL,
  PRIMARY KEY (`speaker_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `speakers`
--

INSERT INTO `speakers` (`speaker_id`, `name`, `institution`, `address`, `picture`, `profile`, `type`, `speaker_order`) VALUES
(1, 'Soneye Oluwasina', 'The Federal Polytechnic, Ilaro', 'advancoplanet@gmail.com', '2994379.png', 'Phd Bsc', 'Chief Speaker', 1);

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

DROP TABLE IF EXISTS `venue`;
CREATE TABLE IF NOT EXISTS `venue` (
  `venue_id` int(11) NOT NULL AUTO_INCREMENT,
  `venue_address` text NOT NULL,
  `venue_hall` text NOT NULL,
  `venue_picture` varchar(200) NOT NULL,
  PRIMARY KEY (`venue_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`venue_id`, `venue_address`, `venue_hall`, `venue_picture`) VALUES
(1, 'The Federal Polytechnic Ilaro', 'Conference Center Hall #1, 6th floor', 'we.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
