-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 11, 2019 at 10:26 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `md_category`
--

DROP TABLE IF EXISTS `md_category`;
CREATE TABLE IF NOT EXISTS `md_category` (
  `catg_id` int(11) NOT NULL AUTO_INCREMENT,
  `catg_name` varchar(50) NOT NULL,
  `catg_desc` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`catg_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `md_category`
--

INSERT INTO `md_category` (`catg_id`, `catg_name`, `catg_desc`, `status`) VALUES
(1, 'Mobile Phone', 'mobile', 1),
(2, 'Cloths', 'cloths', 1);

-- --------------------------------------------------------

--
-- Table structure for table `md_products`
--

DROP TABLE IF EXISTS `md_products`;
CREATE TABLE IF NOT EXISTS `md_products` (
  `catg_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(50) NOT NULL,
  `prod_desc` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `img_path` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`catg_id`,`prod_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `md_products`
--

INSERT INTO `md_products` (`catg_id`, `prod_id`, `prod_name`, `prod_desc`, `amount`, `img_path`, `status`) VALUES
(1, 1, 'Nokia 6.1', 'nokia6.1', 6000, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `md_prod_images`
--

DROP TABLE IF EXISTS `md_prod_images`;
CREATE TABLE IF NOT EXISTS `md_prod_images` (
  `catg_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `prod_img` varchar(50) NOT NULL,
  PRIMARY KEY (`catg_id`,`prod_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `md_users`
--

DROP TABLE IF EXISTS `md_users`;
CREATE TABLE IF NOT EXISTS `md_users` (
  `user_id` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_status` char(1) NOT NULL DEFAULT 'A',
  `created_by` varchar(50) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `modified_by` varchar(50) DEFAULT NULL,
  `modified_dt` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `md_users`
--

INSERT INTO `md_users` (`user_id`, `password`, `user_name`, `user_status`, `created_by`, `created_dt`, `modified_by`, `modified_dt`) VALUES
('sss', '$2y$10$Gl6MrxNXud5muy9wNRLmdunAsa/bc/T0NCa1pavUmVjw7y3eqyUOK', 'SSS', 'A', 'SSS', '2018-08-20 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `md_user_addresses`
--

DROP TABLE IF EXISTS `md_user_addresses`;
CREATE TABLE IF NOT EXISTS `md_user_addresses` (
  `user_id` varchar(30) NOT NULL,
  `id` int(11) NOT NULL,
  `address` text NOT NULL,
  `pin` int(11) NOT NULL,
  `state` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `md_user_addresses`
--

INSERT INTO `md_user_addresses` (`user_id`, `id`, `address`, `pin`, `state`) VALUES
('sss', 1, 'Kolkata, 700039', 700030, 'West Bengal'),
('sss', 2, 'Contai, Purba Medinipur', 700122, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `td_cart`
--

DROP TABLE IF EXISTS `td_cart`;
CREATE TABLE IF NOT EXISTS `td_cart` (
  `user_id` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
