-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 22, 2018 at 01:56 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lucyv3`
--
CREATE DATABASE IF NOT EXISTS `lucyv3` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lucyv3`;

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE IF NOT EXISTS `about_us` (
  `about_us_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `image_url` varchar(300) NOT NULL,
  `title` varchar(300) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `visiblity` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL,
  PRIMARY KEY (`about_us_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`about_us_id`, `company_id`, `image_url`, `title`, `description`, `visiblity`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 5, 'uploads/about_us/4_1_1_apple1.jpg', 'Who We Are', '<p><em>May-Ayni Business Plc. <strong>(Right Spring Water Factory)</strong> is one of the leading and prime natural spring water bottling company in Tigray Regional state.</em></p>\r\n', 'Off', '2018-08-27 04:40:31', '2018-09-22 08:54:41', '2018-08-27 17:40:31', 1, 1, 0),
(2, 1, 'uploads/about_us/', 'Who We Are', '<p>he water sourcing area, where the factory situated is in the town of Adigrat and its nearby surrounding areas is located in Tigray regional state, northern Ethiopia. It is 900 km north of Addis Ababa and 120 km north of Mekelle city, the capital of Tigray Regional State, in zone 37 UTM grid of 1570000mN to 1580000mN and 543000mE to 562000mE. It is accessible through all asphalt road which runs from Addis Ababa to Adigrat.</p>\r\n', 'On', '2018-08-29 22:37:54', '2018-09-22 08:29:35', '2018-08-30 11:37:54', 1, 1, 0),
(3, 1, 'uploads/about_us/', 'Our Values', '<p>he water sourcing area, where the factory situated is in the town of Adigrat and its nearby surrounding areas is located in Tigray regional state, northern Ethiopia. It is 900 km north of Addis Ababa and 120 km north of Mekelle city, the capital of Tigray Regional State, in zone 37 UTM grid of 1570000mN to 1580000mN and 543000mE to 562000mE. It is accessible through all asphalt road which runs from Addis Ababa to Adigrat.he water sourcing area, where the factory situated is in the town of Adigrat and its nearby surrounding areas is located in Tigray regional state, northern Ethiopia. It is 900 km north of Addis Ababa and 120 km north of Mekelle city, the capital of Tigray Regional State, in zone 37 UTM grid of 1570000mN to 1580000mN and 543000mE to 562000mE. It is accessible through all asphalt road which runs from Addis Ababa to Adigrat.</p>\r\n', 'On', '2018-08-29 22:40:18', '2018-09-22 08:29:48', '2018-08-30 11:40:18', 1, 1, 0),
(4, 1, 'uploads/about_us/', 'Our Mission', '<p>he water sourcing area, where the factory situated is in the town of Adigrat and its nearby surrounding areas is located in Tigray regional state, northern Ethiopia. It is 900 km north of Addis Ababa and 120 km north of Mekelle city, the capital of Tigray Regional State, in zone 37 UTM grid of 1570000mN to 1580000mN and 543000mE to 562000mE. It is accessible through all asphalt road which runs from Addis Ababa to Adigrat.</p>\r\n\r\n<p>he water sourcing area, where the factory situated is in the town of Adigrat and its nearby surrounding areas is located in Tigray regional state, northern Ethiopia. It is 900 km north of Addis Ababa and 120 km north of Mekelle city, the capital of Tigray Regional State, in zone 37 UTM grid of 1570000mN to 1580000mN and 543000mE to 562000mE. It is accessible through all asphalt road which runs from Addis Ababa to Adigrat.</p>\r\n', 'Off', '2018-08-29 22:40:44', '2018-09-22 08:40:05', '2018-08-30 11:40:44', 1, 1, 0),
(5, 4, 'uploads/about_us/33.jpg', 'Who We Are', '<p>The water sourcing area, where the factory situated is in the town of Adigrat and its nearby surrounding areas is located in Tigray regional state, northern Ethiopia. It is 900 km north of Addis Ababa and 120 km north of Mekelle city, the capital of Tigray Regional State, in zone 37 UTM grid of 1570000mN to 1580000mN and 543000mE to 562000mE. It is accessible through all asphalt road which runs from Addis Ababa to Adigrat.</p>\r\n', 'On', '2018-09-05 02:01:16', '2018-09-05 15:01:16', '2018-09-05 15:01:16', 1, 0, 0),
(6, 4, 'uploads/about_us/', 'What We do', '<p>The water sourcing area, where the factory situated is in the town of Adigrat and its nearby surrounding areas is located in Tigray regional state, northern Ethiopia. It is 900 km north of Addis Ababa and 120 km north of Mekelle city, the capital of Tigray Regional State, in zone 37 UTM grid of 1570000mN to 1580000mN and 543000mE to 562000mE. It is accessible through all asphalt road which runs from Addis Ababa to Adigrat.</p>\r\n', 'On', '2018-09-05 02:01:36', '2018-09-05 15:01:36', '2018-09-05 15:01:36', 1, 0, 0),
(7, 5, 'uploads/about_us/', 'Who We Are', '<p>The water sourcing area, where the factory situated is in the town of Adigrat and its nearby surrounding areas is located in Tigray regional state, northern Ethiopia. It is 900 km north of Addis Ababa and 120 km north of Mekelle city, the capital of Tigray Regional State, in zone 37 UTM grid of 1570000mN to 1580000mN and 543000mE to 562000mE. It is accessible through all asphalt road which runs from Addis Ababa to Adigrat.</p>\r\n', 'On', '2018-09-05 02:02:02', '2018-09-05 15:02:02', '2018-09-05 15:02:02', 1, 0, 0),
(8, 5, 'uploads/about_us/', 'What We do', '<p>The water sourcing area, where the factory situated is in the town of Adigrat and its nearby surrounding areas is located in Tigray regional state, northern Ethiopia. It is 900 km north of Addis Ababa and 120 km north of Mekelle city, the capital of Tigray Regional State, in zone 37 UTM grid of 1570000mN to 1580000mN and 543000mE to 562000mE. It is accessible through all asphalt road which runs from Addis Ababa to Adigrat.</p>\r\n', 'On', '2018-09-05 02:02:13', '2018-09-22 08:30:22', '2018-09-05 15:02:13', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `community_services`
--

CREATE TABLE IF NOT EXISTS `community_services` (
  `community_service_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `description` varchar(3000) NOT NULL,
  `image_url` varchar(300) NOT NULL,
  `visiblity` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL DEFAULT '1',
  `updated_by` int(11) NOT NULL DEFAULT '1',
  `deleted_by` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`community_service_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `community_services`
--

INSERT INTO `community_services` (`community_service_id`, `company_id`, `title`, `description`, `image_url`, `visiblity`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 1, 'Support for local football team', '<p>We support a local football team named Gerji heroes,</p>\r\n', 'uploads/community_services/downloadjkk.jpg', 'On', '2018-09-21 08:22:30', '2018-09-22 08:28:41', '2018-09-21 13:22:30', 1, 1, 1),
(2, 1, 'Support for youth to start a car wash business', '<p>We funded unemployed youths to start a car wash business around 24-Bole area.</p>\r\n', 'uploads/community_services/blog2.jpg', 'On', '2018-09-21 08:27:20', '2018-09-21 13:27:20', '2018-09-21 13:27:20', 1, 1, 1),
(3, 1, 'Rehabilitation funds for burayu people', '<p>We donated 1 M ETB for people who are relocated from burayu.</p>\r\n', 'uploads/community_services/images_(10).jpg', 'On', '2018-09-21 09:01:51', '2018-09-21 14:01:51', '2018-09-21 14:01:51', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(300) NOT NULL,
  `company_type` varchar(10) NOT NULL,
  `logo_url` varchar(300) NOT NULL,
  `slogan` varchar(100) NOT NULL,
  `slogan_bg_image_url` varchar(300) NOT NULL,
  `services_bg_image_url` varchar(300) DEFAULT NULL,
  `visiblity` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `company_type`, `logo_url`, `slogan`, `slogan_bg_image_url`, `services_bg_image_url`, `visiblity`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`) VALUES
(1, 'Lucy Agricultural Development PLC', 'Main', 'uploads/company/Picture6_1_741.jpg', '<p>Working hard for innovation and excellence.</p>\r\n', 'uploads/company/gallery6.jpg', 'uploads/company/partner_bg.png', 'On', '2018-08-27 04:23:52', '2018-09-22 08:51:52', '2018-08-27 17:23:52', 1, 1),
(4, 'Derry', 'Sister Com', 'uploads/company/Picture12.jpg', '<p>Excelence in business development and consultancy</p>\r\n', 'uploads/company/partner_bg.png', 'uploads/company/bg3.jpg', 'Off', '2018-09-05 09:06:29', '2018-09-22 08:52:52', '2018-09-05 10:06:29', 1, 1),
(5, 'MyAyni Water ', 'Sister Com', 'uploads/company/myayni_2_461.png', '<p>Enter the companies motto here.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'uploads/company/gallery3.png', 'uploads/company/partner_bg.png', 'On', '2018-09-05 09:06:55', '2018-09-22 08:53:37', '2018-09-05 10:06:55', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE IF NOT EXISTS `contact_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `full_name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `contact_us_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image_url` varchar(300) NOT NULL,
  `phone_office_one` varchar(15) NOT NULL,
  `phone_office_two` varchar(15) NOT NULL,
  `email_one` varchar(300) NOT NULL,
  `facebook` varchar(300) DEFAULT '#',
  `twitter` varchar(300) DEFAULT '#',
  `linkedin` varchar(300) DEFAULT '#',
  `dribble` varchar(300) DEFAULT '#',
  `skype` varchar(300) DEFAULT '#',
  `sitemap` varchar(3000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `visiblity` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL,
  PRIMARY KEY (`contact_us_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`contact_us_id`, `company_id`, `title`, `image_url`, `phone_office_one`, `phone_office_two`, `email_one`, `facebook`, `twitter`, `linkedin`, `dribble`, `skype`, `sitemap`, `description`, `visiblity`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 1, 'Contact Us', '', '0973836611', '0973836611', 'minasmelaku@gmail.com', '', '', '', '', '', '', '<p>We are located in Tigray region adigrat area.</p>\r\n', 'On', '2018-09-04 22:45:22', '2018-09-22 08:21:16', '2018-09-05 11:45:22', 1, 1, 0),
(2, 4, 'Test Address', 'uploads/contact_us/Picture1.jpg', '0973836611', '0973836611', 'melaku@lucy.com', '', '', '', '', '', '', '<p>Gerji Sami Building.</p>\r\n', '0', '2018-09-04 22:47:41', '2018-09-21 09:23:41', '2018-09-05 11:47:41', 1, 1, 0),
(3, 5, 'Contact Us', '', '0973836611', '0973836611', 'example@lucy.com', '', '', '', '', '', '', '<p>Adigrat, 01 Kebele</p>\r\n', '0', '2018-09-04 22:48:11', '2018-09-21 09:24:26', '2018-09-05 11:48:11', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `gallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL DEFAULT '1',
  `title` varchar(100) NOT NULL,
  `category` int(11) NOT NULL,
  `image_url` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `visiblity` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL,
  PRIMARY KEY (`gallery_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `company_id`, `category_id`, `title`, `category`, `image_url`, `description`, `visiblity`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 1, 3, 'Apple', 0, 'uploads/galleries/4_1_1_apricots2.jpg', '<p>Enter the description here.</p>\r\n', 'Off', '2018-09-22 13:02:50', '2018-09-22 08:02:50', '0000-00-00 00:00:00', 1, 1, 0),
(2, 1, 3, 'Apricots', 0, 'uploads/galleries/4_1_1_apricots11.jpg', '<p>Enter the description here.</p>\r\n', 'On', '2018-09-13 16:14:14', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(3, 1, 1, 'Aubergine', 0, 'uploads/galleries/4_1_1_aubergine.jpg', '<p>Enter the descriptions.</p>\r\n', 'On', '2018-08-27 05:06:24', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(4, 1, 1, 'Beetroot', 0, 'uploads/galleries/4_1_1_beetroot.jpg', '<p>Enter the descriptions.</p>\r\n', 'On', '2018-08-27 05:06:54', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(6, 1, 1, 'Brocolli', 0, 'uploads/galleries/4_1_1_broccoli1.jpg', '<p>Enter the descriptions.</p>\r\n', 'On', '2018-09-15 19:22:17', '2018-09-15 14:22:17', '0000-00-00 00:00:00', 1, 1, 0),
(7, 1, 1, 'Brusselssprouts', 0, 'uploads/galleries/4_1_1_Brusselssprouts.jpg', '<p>Enter the descriptions.</p>\r\n', 'On', '2018-08-27 05:09:05', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(8, 1, 3, 'Carrots', 0, 'uploads/galleries/4_1_1_carrots1.jpg', '<p>Enter the description here.</p>\r\n', 'On', '2018-09-13 16:14:47', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(9, 1, 3, 'Cherries', 0, 'uploads/galleries/4_1_1_cherries1.jpg', '<p>Enter the description here.</p>\r\n', 'On', '2018-09-13 16:15:35', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(10, 1, 1, 'Dates', 0, 'uploads/galleries/4_1_1_dates.jpg', '<p>Enter the descriptions.</p>\r\n', 'On', '2018-08-27 06:44:59', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(11, 1, 1, 'ElderBerries', 0, 'uploads/galleries/4_1_1_elderberries.jpg', '<p>Enter the descriptions.</p>\r\n', 'On', '2018-08-27 06:45:34', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(12, 1, 1, 'Endive', 0, 'uploads/galleries/4_1_1_endive.jpg', '<p>Enter the descriptions.</p>\r\n', 'On', '2018-08-28 09:44:13', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(13, 1, 1, 'Fennel', 0, 'uploads/galleries/4_1_1_fennel.jpg', '<p>Enter the descriptions.</p>\r\n', 'On', '2018-08-28 09:45:19', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(14, 1, 1, 'Figs', 0, 'uploads/galleries/4_1_1_figs.jpg', '<p>Enter the descriptions.</p>\r\n', 'On', '2018-08-28 09:47:44', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(15, 1, 3, 'Garlic', 0, 'uploads/galleries/4_1_1_garlic2.jpg', '<p>Enter the description here.</p>\r\n', 'On', '2018-09-13 16:15:58', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(16, 3, 1, 'Banana', 0, 'uploads/galleries/4_1_1_garlic1.jpg', '<p>Enter the descriptions.</p>\r\n', 'On', '2018-09-13 15:39:04', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_category`
--

CREATE TABLE IF NOT EXISTS `gallery_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `gallery_category`
--

INSERT INTO `gallery_category` (`category_id`, `category_name`, `created_at`, `created_by`) VALUES
(1, 'Orange', '2018-09-13 20:27:08', 1),
(3, 'PineApple', '2018-09-13 15:38:27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `home_page_articles`
--

CREATE TABLE IF NOT EXISTS `home_page_articles` (
  `article_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `image_url` varchar(300) NOT NULL,
  `visiblity` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL,
  PRIMARY KEY (`article_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `home_page_articles`
--

INSERT INTO `home_page_articles` (`article_id`, `company_id`, `title`, `content`, `image_url`, `visiblity`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 0, 'Article 1', '<p>Curabitur quis libero leo, pharetra mattis eros. Praesent consequat libero eget dolor convallis vel rhoncus magna scelerisque. Donec nisl ante, elementum eget posuere a, consectetur a metus. Proin a adipiscing sapien. Suspendisse vehicula porta lectus vel semper. Nullam sapien elit, lacinia eu tristique non.posuere at mi. Morbi at turpis id urna ullamcorper ullamcorper</p>\r\n', 'uploads/home_page_articles/bg22.jpg', 'On', '2018-09-22 13:21:31', '2018-09-22 08:21:31', '0000-00-00 00:00:00', 1, 1, 0),
(2, 0, 'Article 2', '<p>Curabitur quis libero leo, pharetra mattis eros. Praesent consequat libero eget dolor convallis vel rhoncus magna scelerisque. Donec nisl ante, elementum eget posuere a, consectetur a metus. Proin a adipiscing sapien. Suspendisse vehicula porta lectus vel semper. Nullam sapien elit, lacinia eu tristique non.posuere at mi. Morbi at turpis id urna ullamcorper ullamcorper</p>\r\n', 'uploads/home_page_articles/bg3.jpg', 'On', '2018-09-22 13:30:51', '2018-09-22 08:30:51', '0000-00-00 00:00:00', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `page_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_label` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(3000) NOT NULL,
  `image_url` varchar(300) NOT NULL,
  `page_type` varchar(50) NOT NULL,
  `visiblity` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `page_label`, `title`, `description`, `image_url`, `page_type`, `visiblity`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 'Vacancy', 'Vacancy at Lucy Agricultural Development', '<p>Enter the Page descriptions.Enter the Page descriptions.Enter the Page descriptions.Enter the Page descriptions.Enter the Page descriptions.</p>\r\n', 'uploads/pages/Chrysanthemum.jpg', 'products', 'On', '2018-09-05 06:59:27', '2018-09-05 07:59:27', '2018-09-05 07:59:27', 1, 0, 0),
(2, 'News ', 'News At Lucy', '<p>Enter the Page descriptions.Enter the Page descriptions.Enter the Page descriptions.Enter the Page descriptions.Enter the Page descriptions.Enter the Page descriptions.</p>\r\n', 'uploads/pages/Jellyfish.jpg', 'services', 'On', '2018-09-05 07:29:06', '2018-09-05 08:29:06', '2018-09-05 08:29:06', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `page_contents`
--

CREATE TABLE IF NOT EXISTS `page_contents` (
  `content_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(3000) NOT NULL,
  `image_url` varchar(300) NOT NULL,
  `visiblity` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL,
  PRIMARY KEY (`content_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `page_contents`
--

INSERT INTO `page_contents` (`content_id`, `page_id`, `title`, `description`, `image_url`, `visiblity`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 1, 'Position Programmer', '<p>We are looking for a qualified programmer&nbsp;We are looking for a qualified programmer&nbsp;We are looking for a qualified programmer&nbsp;We are looking for a qualified programmer&nbsp;We are looking for a qualified programmer&nbsp;We are looking for a qualified programmer&nbsp;</p>\r\n', 'uploads/page_contents/Koala.jpg', '0', '2018-09-05 07:00:10', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(2, 1, 'News At Lucy', '<p>Enter the Page descriptions.Enter the Page descriptions.Enter the Page descriptions.Enter the Page descriptions.Enter the Page descriptions.</p>\r\n', 'uploads/page_contents/Penguins.jpg', '0', '2018-09-05 07:26:57', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(3, 2, 'New CEO Appointed.', '<p>Enter the page_content description here.</p>\r\n', 'uploads/page_contents/Lighthouse.jpg', '0', '2018-09-05 08:31:07', '2018-09-05 07:31:07', '0000-00-00 00:00:00', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE IF NOT EXISTS `portfolios` (
  `portfolio_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `name_of_member` varchar(100) NOT NULL,
  `image_url` varchar(300) NOT NULL,
  `phone_number` varchar(13) NOT NULL,
  `designation` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `job_description` varchar(300) NOT NULL,
  `visiblity` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL,
  PRIMARY KEY (`portfolio_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`portfolio_id`, `company_id`, `name_of_member`, `image_url`, `phone_number`, `designation`, `email`, `job_description`, `visiblity`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 1, 'Joe Quimby', 'uploads/teams/client31.png', '0973836611', 'CEO', 'minasmelaku@gmail.com', '<p>Enter the job descriptions.</p>\r\n', 'On', '2018-09-22 13:27:41', '2018-09-22 08:27:41', '0000-00-00 00:00:00', 1, 1, 0),
(2, 1, 'Gebre W.', 'uploads/teams/man21.jpg', '0973836611', 'IT Consultant', 'minasmelaku@gmail.com', '<p>Enter the job description here.</p>\r\n', 'On', '2018-09-22 13:33:00', '2018-09-22 08:33:00', '0000-00-00 00:00:00', 1, 1, 0),
(3, 1, 'Melaku Minas', 'uploads/teams/man4.jpg', '0973836611', 'Programmer', 'minasmelaku@gmail.com', '<p>Enter the job descriptions.</p>\r\n', 'On', '2018-09-22 13:33:07', '2018-09-22 08:33:07', '0000-00-00 00:00:00', 1, 1, 0),
(4, 1, 'Abebe Kebede', 'uploads/teams/man31.jpg', '0973836611', 'Financial Consultant', 'minasmelaku@gmail.com', '<p>Enter the job descriptions.</p>\r\n', 'On', '2018-09-22 13:33:13', '2018-09-22 08:33:13', '0000-00-00 00:00:00', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `image_url` varchar(300) NOT NULL,
  `title` varchar(300) NOT NULL,
  `description` varchar(300) NOT NULL,
  `visiblity` varchar(10) NOT NULL,
  `local` varchar(5) NOT NULL DEFAULT 'on',
  `import` varchar(5) NOT NULL,
  `export` varchar(5) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `company_id`, `image_url`, `title`, `description`, `visiblity`, `local`, `import`, `export`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 1, 'uploads/product/4_1_1_grapes.jpg', 'Grapes', '<p>Enter the product description here.</p>\r\n', 'On', 'on', 'on', '0', '2018-08-27 22:16:46', '2018-09-22 08:26:46', '2018-08-27 23:16:46', 1, 1, 0),
(2, 1, 'uploads/product/4_1_1_honeydewmelon.jpg', 'Honey Dew Mellon', '<p>Enter the product descriptions.</p>\r\n', '0', 'on', 'on', 'on', '2018-08-27 22:18:01', '2018-08-27 23:18:01', '2018-08-27 23:18:01', 1, 0, 0),
(3, 1, 'uploads/product/4_1_1_iceberglettuce.jpg', 'Iceberglettus', '<p>Enter the product descriptions.</p>\r\n', '0', 'on', 'on', 'on', '2018-08-27 22:19:25', '2018-08-27 23:19:25', '2018-08-27 23:19:25', 1, 0, 0),
(4, 1, 'uploads/product/4_1_1_kiwi.jpg', 'Kiwi', '<p>Enter the product description here.</p>\r\n', '0', 'on', 'on', '0', '2018-08-27 22:20:44', '2018-09-01 02:15:26', '2018-08-27 23:20:45', 1, 1, 0),
(5, 1, 'uploads/product/4_1_1_olives.jpg', 'Olives', '<p>Enter the product descriptions.</p>\r\n', '0', 'on', 'on', 'on', '2018-08-27 22:22:59', '2018-08-27 23:22:59', '2018-08-27 23:22:59', 1, 0, 0),
(6, 1, 'uploads/product/peanut.jpg', 'Peanus', '<p>Enter the product descriptions.</p>\r\n', '0', 'on', 'on', 'on', '2018-08-27 22:23:54', '2018-08-27 23:23:54', '2018-08-27 23:23:54', 1, 0, 0),
(7, 1, 'uploads/product/4_1_1_pineapple2.jpg', 'Pineapple', '<p>Enter the product descriptions.</p>\r\n', '0', 'on', 'on', 'on', '2018-08-27 22:24:44', '2018-08-27 23:24:44', '2018-08-27 23:24:44', 1, 0, 0),
(8, 1, 'uploads/product/pumpkinWeb.jpg', 'Pumpkin', '<p>Enter the product descriptions.</p>\r\n', '0', 'on', 'on', 'on', '2018-08-27 22:25:29', '2018-08-27 23:25:29', '2018-08-27 23:25:29', 1, 0, 0),
(9, 1, 'uploads/product/4_1_1_vineleaf.jpg', 'Vine Leaf', '<p>Enter the product descriptions.</p>\r\n', '0', 'on', 'on', 'on', '2018-09-01 01:57:51', '2018-09-01 14:57:51', '2018-09-01 14:57:51', 1, 0, 0),
(10, 1, 'uploads/product/AZavocado.jpg', 'Avocado', '<p>Enter the product descriptions.</p>\r\n', '0', 'on', 'on', 'on', '2018-09-01 02:00:15', '2018-09-01 15:00:15', '2018-09-01 15:00:15', 1, 0, 0),
(11, 5, 'uploads/product/dd.jpg', 'Spring Watter', '<p>We produce spring watter for local and external market.&nbsp;We produce spring watter for local and external market.&nbsp;</p>\r\n', '0', 'on', 'on', 'on', '2018-09-05 01:08:00', '2018-09-15 14:13:43', '2018-09-05 14:08:00', 1, 1, 0),
(12, 5, 'uploads/product/22.jpg', 'Flavoured Watter', '<p>We produce spring watter for local and external market.&nbsp;We produce spring watter for local and external market.&nbsp;</p>\r\n', '0', '0', '0', '0', '2018-09-05 01:17:01', '2018-09-05 01:52:01', '2018-09-05 14:17:01', 1, 1, 0),
(13, 5, 'uploads/product/33.jpg', 'Plastic Factory', '<p>We produce plastic materials for local and external market.&nbsp;We produce spring watter for local and external market.&nbsp;</p>\r\n', '0', 'on', 'on', '0', '2018-09-05 01:17:45', '2018-09-05 01:52:17', '2018-09-05 14:17:45', 1, 1, 0),
(14, 4, 'uploads/product/66.jpg', 'Business Consultancy', '<p>We Provide business development services for local and foreign companies.</p>\r\n', '0', '0', '0', '0', '2018-09-05 02:03:24', '2018-09-05 15:03:24', '2018-09-05 15:03:24', 1, 0, 0),
(15, 4, 'uploads/product/77.jpg', 'Business Consultancy', '<p>We Provide business development services for local and foreign companies.</p>\r\n', '0', '0', '0', '0', '2018-09-05 02:03:41', '2018-09-05 15:03:41', '2018-09-05 15:03:41', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `image_url` varchar(300) NOT NULL,
  `title` varchar(300) NOT NULL,
  `description` varchar(300) NOT NULL,
  `visiblity` varchar(10) NOT NULL,
  `local` varchar(5) NOT NULL DEFAULT 'on',
  `import` varchar(5) NOT NULL DEFAULT 'on',
  `export` varchar(5) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `company_id`, `image_url`, `title`, `description`, `visiblity`, `local`, `import`, `export`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 1, 'uploads/services/bananaWeb.jpg', 'Cavendish Banana Production', '<p>Enter the service description here.</p>\r\n', 'Off', 'on', '0', 'on', '2018-08-27 04:45:01', '2018-09-22 08:27:27', '2018-08-27 17:45:01', 1, 1, 0),
(2, 1, 'uploads/services/30443460_1800665806908385_3537579935068707654_n.jpg', 'Cotton Production and Ginning Profile ', '<p>Enter the service description here.</p>\r\n', 'On', 'on', 'on', '0', '2018-08-27 04:47:01', '2018-09-22 08:31:28', '2018-08-27 17:47:01', 1, 1, 0),
(3, 5, 'uploads/services/221.jpg', 'Spring Watter Production', '<p>Enter the service description here.</p>\r\n', 'On', 'on', '0', '0', '2018-08-27 22:28:01', '2018-09-22 08:31:52', '2018-08-27 23:28:01', 1, 1, 0),
(4, 5, 'uploads/services/dd1.jpg', 'Water On house delivery', '<p>We produce spring watter for local and external market.&nbsp;We produce spring watter for local and external market.&nbsp;</p>\r\n', 'On', '0', '0', '0', '2018-09-05 01:19:12', '2018-09-22 08:32:13', '2018-09-05 14:19:12', 1, 1, 0),
(5, 5, 'uploads/services/222.jpg', 'Falvoured watter house to house delivery', '<p>We produce spring watter for local and external market.&nbsp;We produce spring watter for local and external market.&nbsp;</p>\r\n', 'On', '0', '0', '0', '2018-09-05 01:20:25', '2018-09-22 08:32:26', '2018-09-05 14:20:25', 1, 1, 0),
(6, 4, 'uploads/services/66.jpg', 'Business Consultancy', '<p>We Provide business consultancy and development services for local and foreign companies.</p>\r\n', 'On', '0', '0', '0', '2018-09-05 01:44:06', '2018-09-05 14:44:06', '2018-09-05 14:44:06', 1, 0, 0),
(7, 4, 'uploads/services/6611.jpg', 'Business Development Services', '<p>We provide business development and consultancy services for local companies</p>\r\n', 'On', '0', '0', '0', '2018-09-05 01:44:38', '2018-09-22 08:32:41', '2018-09-05 14:44:38', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE IF NOT EXISTS `sliders` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `image_url` varchar(300) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `visiblity` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`slider_id`, `company_id`, `image_url`, `title`, `description`, `visiblity`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 1, 'uploads/sliders/GettyImages-542031989-58cff9b85f9b581d72b97bb21.jpg', 'Cotton Production and Ginning', '<p>Cotton Production and Ginning</p>\r\n', 'Off', '2018-09-22 13:18:04', '2018-09-22 08:18:04', '0000-00-00 00:00:00', 1, 1, 0),
(2, 1, 'uploads/sliders/661.jpg', 'Lucy Agricultural Development PLC', '<p>Enter the description here.</p>\r\n', 'On', '2018-09-22 13:18:16', '2018-09-22 08:18:16', '0000-00-00 00:00:00', 1, 1, 0),
(4, 1, 'uploads/sliders/3.jpg', 'Agricultural Development services', '<p>Enter the description here.</p>\r\n', 'On', '2018-09-05 13:52:24', '2018-09-05 00:49:56', '0000-00-00 00:00:00', 1, 1, 0),
(5, 1, 'uploads/sliders/1.jpg', 'And Other Agricultural Works', '<p>Enter the descriptions.</p>\r\n', 'On', '2018-09-05 13:51:34', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(6, 5, 'uploads/sliders/22.jpg', 'Spring Watter', '<p>Enter the descriptions.</p>\r\n', 'On', '2018-09-05 01:08:46', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(7, 1, 'uploads/sliders/33.jpg', 'Plastic Factory', '<p>Enter the description here.</p>\r\n', 'On', '2018-09-05 14:16:02', '2018-09-05 01:16:02', '0000-00-00 00:00:00', 1, 1, 0),
(8, 4, 'uploads/sliders/66.jpg', 'Business Consultancy', '<p>We provide business consultancy services for foreign and nathional copanies.</p>\r\n', 'On', '2018-09-05 01:39:27', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(9, 4, 'uploads/sliders/77.jpg', 'Business Development', '<p>We provide business development serviceses for foreign and national companies.</p>\r\n', 'On', '2018-09-05 01:40:24', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(10, 5, 'uploads/sliders/331.jpg', 'Test Slider', '<p>Enter the descriptions.</p>\r\n', 'On', '2018-09-14 19:21:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
  `testimony_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `testimony_from` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image_url` varchar(300) NOT NULL,
  `visiblity` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL,
  PRIMARY KEY (`testimony_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`testimony_id`, `company_id`, `title`, `testimony_from`, `description`, `image_url`, `visiblity`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(2, 1, 'one of the nest', 'Melaku Minas', 'Lucy is one of the best agricultural development companies in ethiopia.\r\n', 'uploads/testimonials/client1.png', 'Off', '2018-09-22 13:23:09', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(3, 1, 'one of the nest', 'Melaku Minas', '<p>I am glad to work with such a modern and collaborative company.</p>\r\n', 'uploads/testimonials/client3.png', 'On', '2018-09-01 01:10:59', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(4, 1, 'Passionate about devlopment', 'Abebe Kebede', '<p>I personaly found Lucy to be one of the passionate companies for the co-development and induidtrousness.</p>\r\n', 'uploads/testimonials/client2.png', 'On', '2018-09-01 14:18:35', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(500) NOT NULL,
  `image_url` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `image_url`, `created_at`) VALUES
(1, 'Admin', 'melaku@lucy.com', '81dc9bdb52d04dc20036dbd8313ed055', 'uploads/admin/man13.jpg', '2018-08-27 17:08:26');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
