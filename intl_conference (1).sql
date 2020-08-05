-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 05, 2020 at 08:45 AM
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
-- Table structure for table `about`
--

DROP TABLE IF EXISTS `about`;
CREATE TABLE IF NOT EXISTS `about` (
  `about_id` int(11) NOT NULL AUTO_INCREMENT,
  `about` mediumtext NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`about_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `about`, `updated_at`) VALUES
(1, '&lt;h3&gt;&lt;span style=&quot;font-size: 13pt; line-height: 107%; font-family: Tahoma, sans-serif;&quot;&gt;The International Conference of The Federal Polytechnic,\r\nIlaro&lt;/span&gt;&lt;/h3&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-size:12.0pt;\r\nline-height:107%;font-family:&amp;quot;Tahoma&amp;quot;,&amp;quot;sans-serif&amp;quot;&quot;&gt;The Federal Polytechnic,\r\nIlaro is one of the seven Federal Polytechnics established by the Federal\r\nPolytechnics Act No 33 of July 25, 1979. According to the Act, the Institution\r\nis to provide technical and practical-oriented training to meet the manpower requirements\r\nfor the industrial, agricultural, commercial and economic development of\r\nNigeria. &lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;font-size:12.0pt;line-height:107%;font-family:\r\n&amp;quot;Tahoma&amp;quot;,&amp;quot;sans-serif&amp;quot;&quot;&gt;Specifically, the Act requires the Institution&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoListParagraphCxSpFirst&quot; style=&quot;text-indent:-.25in;mso-list:l1 level1 lfo1&quot;&gt;&lt;!--[if !supportLists]--&gt;&lt;span style=&quot;font-family:&amp;quot;Tahoma&amp;quot;,&amp;quot;sans-serif&amp;quot;;mso-fareast-font-family:Tahoma&quot;&gt;a.&lt;span style=&quot;font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &amp;quot;Times New Roman&amp;quot;;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;\r\n&lt;/span&gt;&lt;/span&gt;&lt;!--[endif]--&gt;&lt;span style=&quot;font-family:&amp;quot;Tahoma&amp;quot;,&amp;quot;sans-serif&amp;quot;&quot;&gt;To\r\nprovide full-time and part-time courses of instruction and training to students\r\n&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoListParagraphCxSpMiddle&quot; style=&quot;margin-left:.75in;mso-add-space:\r\nauto;text-indent:-.75in;mso-text-indent-alt:-9.0pt;mso-list:l0 level1 lfo2&quot;&gt;&lt;!--[if !supportLists]--&gt;&lt;span style=&quot;font-family:&amp;quot;Tahoma&amp;quot;,&amp;quot;sans-serif&amp;quot;;mso-fareast-font-family:Tahoma&quot;&gt;&lt;span style=&quot;font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &amp;quot;Times New Roman&amp;quot;;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;\r\n&lt;/span&gt;i.&lt;span style=&quot;font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &amp;quot;Times New Roman&amp;quot;;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp; &lt;/span&gt;&lt;/span&gt;&lt;!--[endif]--&gt;&lt;span style=&quot;font-family:&amp;quot;Tahoma&amp;quot;,&amp;quot;sans-serif&amp;quot;&quot;&gt;in technology, applied science,\r\ncommerce, management and &lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoListParagraphCxSpMiddle&quot; style=&quot;margin-left:.75in;mso-add-space:\r\nauto;text-indent:-.75in;mso-text-indent-alt:-9.0pt;mso-list:l0 level1 lfo2&quot;&gt;&lt;!--[if !supportLists]--&gt;&lt;span style=&quot;font-family:&amp;quot;Tahoma&amp;quot;,&amp;quot;sans-serif&amp;quot;;mso-fareast-font-family:Tahoma&quot;&gt;&lt;span style=&quot;font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &amp;quot;Times New Roman&amp;quot;;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;\r\n&lt;/span&gt;ii.&lt;span style=&quot;font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &amp;quot;Times New Roman&amp;quot;;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp; &lt;/span&gt;&lt;/span&gt;&lt;!--[endif]--&gt;&lt;span style=&quot;font-family:&amp;quot;Tahoma&amp;quot;,&amp;quot;sans-serif&amp;quot;&quot;&gt;in such other fields of applied\r\nlearning relevant to the needs of &lt;br&gt;\r\nthe development of Nigeria in the area of industrial and &lt;br&gt;\r\nagricultural production and distribution and for research in the &lt;br&gt;\r\ndevelopment and adaptation of techniques&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoListParagraphCxSpLast&quot; style=&quot;text-indent:-.25in;mso-list:l1 level1 lfo1&quot;&gt;&lt;!--[if !supportLists]--&gt;&lt;span style=&quot;font-family:&amp;quot;Tahoma&amp;quot;,&amp;quot;sans-serif&amp;quot;;mso-fareast-font-family:Tahoma&quot;&gt;b.&lt;span style=&quot;font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &amp;quot;Times New Roman&amp;quot;;&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;\r\n&lt;/span&gt;&lt;/span&gt;&lt;!--[endif]--&gt;&lt;span style=&quot;font-family:&amp;quot;Tahoma&amp;quot;,&amp;quot;sans-serif&amp;quot;&quot;&gt;To\r\narrange conferences, seminars and study groups relative to the &lt;br&gt;\r\nfields of learning specified in paragraph (a) above&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;font-size:12.0pt;line-height:107%;font-family:\r\n&amp;quot;Tahoma&amp;quot;,&amp;quot;sans-serif&amp;quot;&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-size:12.0pt;\r\nline-height:107%;font-family:&amp;quot;Tahoma&amp;quot;,&amp;quot;sans-serif&amp;quot;&quot;&gt;As part of its pursuit of\r\nthis mandate and other objectives, the Polytechnic instituted &lt;i&gt;“The International Conference of The Federal\r\nPolytechnic, Ilaro. Ogun State”&lt;/i&gt;. The thrust of the Conference is the\r\nprovision of a forum for academics and researchers from within and outside the\r\ncountry, the opportunity to present and discuss their work, exchange\r\ninformation on current best practices across disciplines and proffer or advance\r\nsolutions or recommendations towards addressing issues of great concern or\r\nchallenge. &lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoListParagraphCxSpFirst&quot; style=&quot;margin-left:4.5pt;mso-add-space:auto;\r\ntext-align:justify&quot;&gt;&lt;span style=&quot;font-family:&amp;quot;Tahoma&amp;quot;,&amp;quot;sans-serif&amp;quot;&quot;&gt;The maiden\r\nedition of the Conference was held in November 2018, while the 2&lt;sup&gt;nd&lt;/sup&gt;\r\nEdition with the Theme: &lt;b&gt;&lt;i&gt;“Emerging Trends in TVET as Contributor to\r\nEconomic Transformation for Global Competitiveness” &amp;nbsp;&lt;/i&gt;&lt;/b&gt;has been scheduled to hold from Monday\r\nNovember 9 – Thursday November 12, 2020.&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoListParagraphCxSpLast&quot;&gt;&lt;span style=&quot;font-family:&amp;quot;Tahoma&amp;quot;,&amp;quot;sans-serif&amp;quot;&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-size:12.0pt;\r\nline-height:107%;font-family:&amp;quot;Tahoma&amp;quot;,&amp;quot;sans-serif&amp;quot;&quot;&gt;We have carefully selected\r\npresenters both within and outside the country that are vast in the subject\r\narea to share from their wealth of experience and research exposure in the key\r\narea - &lt;/span&gt;&lt;span style=&quot;font-family:&amp;quot;Tahoma&amp;quot;,&amp;quot;sans-serif&amp;quot;;mso-bidi-font-weight:\r\nbold;mso-bidi-font-style:italic&quot;&gt;Emerging Trends in &lt;/span&gt;&lt;span style=&quot;font-size:12.0pt;line-height:107%;font-family:&amp;quot;Tahoma&amp;quot;,&amp;quot;sans-serif&amp;quot;&quot;&gt;Theme\r\nof the Conference. Authors are invited from various disciplines to send in\r\ntheir original research work related to the theme or sub-theme of the\r\nconference. &lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p class=&quot;MsoNormal&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-size:12.0pt;\r\nline-height:107%;font-family:&amp;quot;Tahoma&amp;quot;,&amp;quot;sans-serif&amp;quot;&quot;&gt;&lt;o:p&gt;&amp;nbsp;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;', '2020-07-31 18:52:44');

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

-- --------------------------------------------------------

--
-- Table structure for table `conference_date`
--

DROP TABLE IF EXISTS `conference_date`;
CREATE TABLE IF NOT EXISTS `conference_date` (
  `conference_date_id` int(11) NOT NULL AUTO_INCREMENT,
  `event` text NOT NULL,
  `description` text NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`conference_date_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conference_date`
--

INSERT INTO `conference_date` (`conference_date_id`, `event`, `description`, `date`) VALUES
(5, 'Full paper and poster submission deadline', 'Full paper and poster submission deadline', 'September 18, 2020'),
(6, 'Notification of Acceptance', 'Notification of Acceptance', 'September 30, 2020'),
(7, 'Deadline for Camera-Ready Paper', 'Deadline for Camera-Ready Paper', 'October 9, 2020'),
(8, 'Conference Dates', 'Conference Dates', 'November 10 – 11, 2020');

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
(1, '&lt;h4 style=&quot;font-size: 14.4px;&quot;&gt;&lt;span style=&quot;font-size: 12pt; line-height: 17.12px; font-family: Tahoma, sans-serif;&quot;&gt;&lt;b&gt;Guidelines for Paper Submission&amp;nbsp;&lt;/b&gt;&lt;/span&gt;&lt;/h4&gt;&lt;h4 style=&quot;font-size: 14.4px;&quot;&gt;&lt;span style=&quot;font-size: 12pt; line-height: 17.12px; font-family: Tahoma, sans-serif;&quot;&gt;&lt;b&gt;&lt;br&gt;&lt;/b&gt;&lt;/span&gt;&lt;span style=&quot;font-weight: normal;&quot;&gt;&lt;span style=&quot;font-size: 12pt; line-height: 17.12px; font-family: Tahoma, sans-serif;&quot;&gt;Abstract&lt;/span&gt;&lt;span style=&quot;font-size: 12pt; line-height: 17.12px; font-family: Tahoma, sans-serif;&quot;&gt;&amp;nbsp;Maximum word count not more than 250.&lt;/span&gt;&lt;/span&gt;&lt;/h4&gt;&lt;h4 style=&quot;font-size: 14.4px;&quot;&gt;&lt;span style=&quot;font-weight: normal;&quot;&gt;&lt;span style=&quot;font-size: 12pt; line-height: 17.12px; font-family: Tahoma, sans-serif;&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;/span&gt;&lt;/h4&gt;&lt;h4 style=&quot;font-size: 14.4px;&quot;&gt;&lt;span style=&quot;font-weight: normal;&quot;&gt;&lt;span style=&quot;font-size: 12pt; line-height: 17.12px; font-family: Tahoma, sans-serif;&quot;&gt; &lt;/span&gt;&lt;/span&gt;&lt;/h4&gt;&lt;h4 style=&quot;font-size: 14.4px;&quot;&gt;&lt;span style=&quot;font-weight: normal;&quot;&gt;&lt;span style=&quot;font-size: 12pt; line-height: 17.12px; font-family: Tahoma, sans-serif;&quot;&gt;Keywords: Minimum of 3 and maximum of 6.&lt;/span&gt;&lt;/span&gt;&lt;/h4&gt;&lt;h4 style=&quot;font-size: 14.4px;&quot;&gt;&lt;span style=&quot;font-weight: normal;&quot;&gt;&lt;span style=&quot;font-size: 12pt; line-height: 17.12px; font-family: Tahoma, sans-serif;&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;/span&gt;&lt;/h4&gt;&lt;h4 style=&quot;font-size: 14.4px;&quot;&gt;&lt;span style=&quot;font-weight: normal;&quot;&gt;&lt;span style=&quot;font-size: 12pt; line-height: 17.12px; font-family: Tahoma, sans-serif;&quot;&gt; &lt;/span&gt;&lt;/span&gt;&lt;/h4&gt;&lt;h4 style=&quot;font-size: 14.4px;&quot;&gt;&lt;span style=&quot;font-weight: normal;&quot;&gt;&lt;span style=&quot;font-size: 12pt; line-height: 17.12px; font-family: Tahoma, sans-serif;&quot;&gt;Font: Times New Roman and font size of 9 points. Spacing: Single.&lt;/span&gt;&lt;/span&gt;&lt;/h4&gt;&lt;h4 style=&quot;font-size: 14.4px;&quot;&gt;&lt;span style=&quot;font-weight: normal;&quot;&gt;&lt;span style=&quot;font-size: 12pt; line-height: 17.12px; font-family: Tahoma, sans-serif;&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;/span&gt;&lt;/h4&gt;&lt;h4 style=&quot;font-size: 14.4px;&quot;&gt;&lt;span style=&quot;font-weight: normal;&quot;&gt;&lt;span style=&quot;font-size: 12pt; line-height: 17.12px; font-family: Tahoma, sans-serif;&quot;&gt;Body of the Paper:&amp;nbsp;&lt;/span&gt;&lt;span style=&quot;font-size: 12pt; line-height: 17.12px; font-family: Tahoma, sans-serif;&quot;&gt;Maximum of 12 pages. &lt;/span&gt;&lt;/span&gt;&lt;/h4&gt;&lt;h4 style=&quot;font-size: 14.4px;&quot;&gt;&lt;span style=&quot;font-weight: normal;&quot;&gt;&lt;span style=&quot;font-size: 12pt; line-height: 17.12px; font-family: Tahoma, sans-serif;&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;/span&gt;&lt;/h4&gt;&lt;h4 style=&quot;font-size: 14.4px;&quot;&gt;&lt;span style=&quot;font-weight: normal;&quot;&gt;&lt;span style=&quot;font-size: 12pt; line-height: 17.12px; font-family: Tahoma, sans-serif;&quot;&gt;Font: Times New Roman and font size of 10 points. Spacing: 1.15.&lt;/span&gt;&lt;/span&gt;&lt;/h4&gt;&lt;h4 style=&quot;font-size: 14.4px;&quot;&gt;&lt;span style=&quot;font-weight: normal;&quot;&gt;&lt;span style=&quot;font-size: 12pt; line-height: 17.12px; font-family: Tahoma, sans-serif;&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;/span&gt;&lt;/h4&gt;&lt;h4 style=&quot;font-size: 14.4px;&quot;&gt;&lt;span style=&quot;font-weight: normal;&quot;&gt;&lt;span style=&quot;font-size: 12pt; line-height: 17.12px; font-family: Tahoma, sans-serif;&quot;&gt;Referencing&lt;/span&gt;&lt;span style=&quot;font-size: 12pt; line-height: 17.12px; font-family: Tahoma, sans-serif;&quot;&gt;: APA style 7&lt;sup style=&quot;font-size: 12px;&quot;&gt;th&lt;/sup&gt;&amp;nbsp;Edition.&lt;/span&gt;&lt;/span&gt;&lt;/h4&gt;&lt;h4 style=&quot;font-size: 14.4px;&quot;&gt;&lt;span style=&quot;font-weight: normal;&quot;&gt;&lt;span style=&quot;font-size: 12pt; line-height: 17.12px; font-family: Tahoma, sans-serif;&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;/span&gt;&lt;/h4&gt;&lt;h4 style=&quot;font-size: 14.4px;&quot;&gt;&lt;span style=&quot;font-weight: normal;&quot;&gt;&lt;span style=&quot;font-size: 12pt; line-height: 17.12px; font-family: Tahoma, sans-serif;&quot;&gt;Template&lt;/span&gt;&lt;/span&gt;&lt;span style=&quot;font-size: 12pt; line-height: 17.12px; font-family: Tahoma, sans-serif;&quot;&gt;&lt;span style=&quot;font-weight: normal;&quot;&gt;: Download full paper Template from the Conference Website via the Institutional Website&lt;/span&gt;.&lt;/span&gt;&lt;/h4&gt;&lt;h4 style=&quot;font-size: 14.4px;&quot;&gt;&lt;span style=&quot;font-size: 12pt; line-height: 17.12px; font-family: Tahoma, sans-serif;&quot;&gt;&lt;h6&gt;&lt;b&gt;&lt;span style=&quot;font-size:12.0pt;line-height:107%;\r\nfont-family:&amp;quot;Tahoma&amp;quot;,&amp;quot;sans-serif&amp;quot;&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;/b&gt;&lt;/h6&gt;&lt;h6&gt;&lt;b&gt;&lt;span style=&quot;font-size:12.0pt;line-height:107%;\r\nfont-family:&amp;quot;Tahoma&amp;quot;,&amp;quot;sans-serif&amp;quot;&quot;&gt;Submission Site/Email&lt;br&gt;&lt;/span&gt;&lt;/b&gt;&lt;/h6&gt;&lt;h6&gt;&lt;b&gt;&lt;span style=&quot;font-size:12.0pt;line-height:107%;\r\nfont-family:&amp;quot;Tahoma&amp;quot;,&amp;quot;sans-serif&amp;quot;&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;/b&gt;&lt;span style=&quot;font-size:12.0pt;line-height:107%;font-family:\r\n&amp;quot;Tahoma&amp;quot;,&amp;quot;sans-serif&amp;quot;&quot;&gt;Conference Email: &amp;nbsp; &amp;nbsp;&lt;/span&gt;&lt;span style=&quot;font-family:&amp;quot;Tahoma&amp;quot;,&amp;quot;sans-serif&amp;quot;&quot;&gt;&lt;a href=&quot;mailto:fpi2ndinterconf@federalpolyilaro.edu.ng&quot;&gt;&lt;span style=&quot;font-size:\r\n12.0pt;line-height:107%&quot;&gt;fpi2ndinterconf@federalpolyilaro.edu.ng&lt;br&gt;&lt;/span&gt;&lt;/a&gt;&lt;/span&gt;&lt;/h6&gt;&lt;h6&gt;&lt;span style=&quot;font-family:&amp;quot;Tahoma&amp;quot;,&amp;quot;sans-serif&amp;quot;&quot;&gt;&lt;a href=&quot;mailto:fpi2ndinterconf@federalpolyilaro.edu.ng&quot;&gt;&lt;span style=&quot;font-size:\r\n12.0pt;line-height:107%&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;/a&gt;&lt;/span&gt;&lt;span style=&quot;font-size:12.0pt;line-height:107%;font-family:\r\n&amp;quot;Tahoma&amp;quot;,&amp;quot;sans-serif&amp;quot;&quot;&gt;Conference Website: &lt;/span&gt;&lt;span style=&quot;font-family:\r\n&amp;quot;Tahoma&amp;quot;,&amp;quot;sans-serif&amp;quot;&quot;&gt;&lt;a href=&quot;https://www.fpi2ndinterconf.federalpolyilaro.edu.ng/&quot;&gt;&lt;span style=&quot;font-size:12.0pt;line-height:107%&quot;&gt;https://www.fpi2ndinterconf.federalpolyilaro.edu.ng&lt;/span&gt;&lt;/a&gt;&lt;/span&gt;&lt;/h6&gt;\r\n\r\n\r\n\r\n&lt;/span&gt;&lt;/h4&gt;&lt;p style=&quot;font-size: 14.4px;&quot;&gt;&lt;/p&gt;', '2020-07-24 00:10:50', '2020-07-31');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `journal`
--

INSERT INTO `journal` (`journal_id`, `title`, `abstract`, `file`, `page_no`, `authors`, `firstname`, `lastname`, `email`, `phone`, `institution`, `upload_date`) VALUES
(1, 'asssss', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'assssss', '24', 'asssss', '', '', '', '', '', '2020-06-07'),
(3, 'Introduction to Computer', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '6767531.png', '234', 'Soneye sina, J.W Jason', 'Soneye', 'Oluwasina', 'advancoplanet@gmail.com', '08141656572', '', '2020-06-14'),
(4, 'Introduction to Computer', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2089900.png', '234', 'Soneye sina, J.W Jason', 'Soneye', 'Oluwasina', 'advancoplanet@gmail.com', '08141656572', '', '2020-06-14'),
(5, 'WDQWsnvhQH', 'TDG6sDvMHp', '2081645.jpg', 'Ko41Q22ozG', 'I2ftmmcWTi', 'B7vjeIsVPk', 's364VmoiND', '23mdu@pbsj.com', '0746728229', '', '2020-06-14'),
(6, 'ZQJNGSbB8x', 'CeamXbOOvq', '1043745.png', 'T6SjymHS8t', '76DF9jORhb', 'OXYXEGFEzD', 'iQJlIeNVi0', 'ihxle@ly75.com', '4094280840', '', '2020-06-14'),
(7, 'yIAvzBp4Tb', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1949525.jpg', 'HY18gURrka', 'QSlZ8UeC6U', 'gy4cJCYZjf', 'qqn2IgyEMM', 'u0kvn@ktie.com', '9191594348', '', '2020-06-14'),
(8, 'zRvgsF7YNX', 'NX0amym3c1', '4750701.jpg', '1RCxbZA6z8', 'IFv4PYEia2', 'wC8f5zWdx7', '9tenij76B0', 'warzkn@v7c.com1', '0041331276', 'eSMJS8ocKD', '2020-07-28');

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_upload`
--

INSERT INTO `new_upload` (`new_upload_id`, `participant_id`, `file_name`, `date_upload_created`) VALUES
(2, 4, '2972511.docx', '2020-07-28');

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
(1, 'United Bank of Africa (UBA)', 'International Conference, Federal Poly Ilaro', '1021398446', 4000, '2020-07-31 20:39:02');

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
  `profile` longtext NOT NULL,
  `type` varchar(200) NOT NULL,
  `speaker_order` int(11) NOT NULL,
  PRIMARY KEY (`speaker_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `speakers`
--

INSERT INTO `speakers` (`speaker_id`, `name`, `institution`, `address`, `picture`, `profile`, `type`, `speaker_order`) VALUES
(3, 'Prof. (Mrs) Maame Afua Nkrumah', 'Takoradi Technical University, Takoradi. Ghana.', '', '7162906.jpg', '', 'Keynote Speaker', 1),
(4, 'Engr. Dr. Kamoru O. Kadiri', 'Department of Electronic/Electrical Engineering. The Federal Polytechnic, Offa Kwara State. Nigeria', '', '8593080.jpg', '', 'Lead Paper Presenter', 2),
(5, 'Prof. Olaniyi Samuel Okedele', 'Department of Architecture. University of Lagos, Lagos. Lagos State. Nigeria.', '', '8529743.jpg', '', 'Lead Paper Presenter', 3);

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

DROP TABLE IF EXISTS `sponsors`;
CREATE TABLE IF NOT EXISTS `sponsors` (
  `sponsor_id` int(11) NOT NULL AUTO_INCREMENT,
  `sponsor_img` varchar(200) NOT NULL,
  PRIMARY KEY (`sponsor_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

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
(1, 'ZOOM Video Conferencing Application', 'Virtual via ZOOM', '5080731.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `welcome_message`
--

DROP TABLE IF EXISTS `welcome_message`;
CREATE TABLE IF NOT EXISTS `welcome_message` (
  `welcome_id` int(11) NOT NULL AUTO_INCREMENT,
  `welcome` mediumtext NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`welcome_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `welcome_message`
--

INSERT INTO `welcome_message` (`welcome_id`, `welcome`, `updated_at`) VALUES
(1, '&lt;p class=&quot;MsoNormal&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-size:12.0pt;\r\nline-height:107%;font-family:&amp;quot;Tahoma&amp;quot;,&amp;quot;sans-serif&amp;quot;&quot;&gt;&lt;span style=&quot;font-family: Arial;&quot;&gt;On behalf of the Organizing\r\nCommittee of the 2&lt;/span&gt;&lt;sup&gt;&lt;span style=&quot;font-family: Arial;&quot;&gt;nd&lt;/span&gt;&lt;/sup&gt;&lt;span style=&quot;font-family: Arial;&quot;&gt; International Conference of The Federal\r\nPolytechnic, Ilaro, I like to welcome you to our Conference slated to take\r\nplace between November 10 – 11, 2020. We welcome Academics and researchers\r\nglobally to contribute and make submission to the conference based on the Theme\r\nand Sub-Themes. The presentation is going to be Virtual via ZOOM bearing in\r\nmind the peculiarity of the period at present. Paper submission can be made via\r\nthe website or the conference email.&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;span style=&quot;font-family: Arial;&quot;&gt;\r\n\r\n&lt;/span&gt;&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;font-size:12.0pt;line-height:107%;font-family:\r\n&amp;quot;Tahoma&amp;quot;,&amp;quot;sans-serif&amp;quot;&quot;&gt;&lt;span style=&quot;font-family: Arial;&quot;&gt;For detailed information, please visit the Conference\r\nWebsite:&amp;nbsp;&lt;/span&gt;&lt;u&gt;&lt;span style=&quot;color: rgb(0, 112, 192); font-family: Arial;&quot;&gt;&lt;a href=&quot;https://www.fpi2ndinterconf@federalpolyilaro.edu.ng&quot; target=&quot;_blank&quot;&gt;https://www.&lt;/a&gt;&lt;/span&gt;&lt;/u&gt;&lt;/span&gt;&lt;span style=&quot;font-size: 12pt; line-height: 107%; font-family: Arial; color: rgb(0, 112, 192);&quot;&gt;&lt;a href=&quot;https://www.fpi2ndinterconf@federalpolyilaro.edu.ng&quot; target=&quot;_blank&quot;&gt;fpi2ndinterconf@federalpolyilaro.edu.ng&lt;/a&gt;&lt;/span&gt;&lt;/p&gt;&lt;span style=&quot;font-family: Arial;&quot;&gt;\r\n\r\n&lt;/span&gt;&lt;p class=&quot;MsoNormal&quot;&gt;&lt;span style=&quot;font-size:12.0pt;line-height:107%;font-family:\r\n&amp;quot;Tahoma&amp;quot;,&amp;quot;sans-serif&amp;quot;&quot;&gt;&lt;span style=&quot;font-family: Arial;&quot;&gt;&lt;b&gt;Engr. Olufemi A. Osore&lt;/b&gt; – Chairman, Conference Organizing\r\nCommittee&lt;/span&gt;&lt;o:p&gt;&lt;/o:p&gt;&lt;/span&gt;&lt;/p&gt;', '2020-07-31 17:54:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `journal`
--
ALTER TABLE `journal` ADD FULLTEXT KEY `title` (`title`,`authors`,`institution`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
