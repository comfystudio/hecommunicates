-- phpMyAdmin SQL Dump
-- version 4.0.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 17, 2015 at 01:44 PM
-- Server version: 5.5.33
-- PHP Version: 5.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cl35-linda`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE IF NOT EXISTS `admin_users` (
  `id` int(36) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `password_token` varchar(128) DEFAULT NULL,
  `email` varchar(128) NOT NULL,
  `email_verified` tinyint(1) DEFAULT '0',
  `email_token` varchar(128) DEFAULT NULL,
  `email_token_expires` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0',
  `last_login` datetime DEFAULT NULL,
  `last_action` datetime DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT '0',
  `role` varchar(128) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`, `password_token`, `email`, `email_verified`, `email_token`, `email_token_expires`, `active`, `last_login`, `last_action`, `is_admin`, `role`, `created`, `modified`) VALUES
(5, 'gwam', '$2a$10$QR99VDZ0LLOinz123kTn8OI7OfIgZ9pCr/O7RB2KLfJINP/d5od5e', NULL, 'will_byrne56@hotmail.com', 1, '0dgkvmfz8i', '2014-03-21 22:14:00', 1, '2014-03-21 10:24:24', NULL, 1, NULL, '2013-09-02 16:35:11', '2014-03-21 10:24:24'),
(6, 'linda', '$2a$10$G59Knxhg3C9ltwuf.n/bw.JF.fzy3HzwWY4.JAWfZk7Ii2xcSRtWS', NULL, 'miss1plane@yahoo.com', 1, 'ouf84tswxy', '2014-03-22 10:32:35', 1, '2015-01-11 13:08:24', NULL, 1, NULL, '2014-03-21 10:32:35', '2015-01-11 13:08:24');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE IF NOT EXISTS `information` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `text` text,
  `order` int(10) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `title`, `text`, `order`, `created`, `modified`) VALUES
(1, 'telephone', '<p>&nbsp;&nbsp; 00 44 (0) 79 628 646 05</p>', NULL, '2014-10-28 12:59:19', '2014-10-28 13:01:41');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `project_image_count` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `project_image_count`, `created`, `modified`) VALUES
(21, 'antrim coast', 6, '2014-07-03 13:48:41', '2014-07-04 15:16:54'),
(23, 'portraits', 4, '2014-07-03 14:33:45', '2014-07-03 14:33:45'),
(24, 'mouth trumpet', 4, '2014-07-03 14:36:01', '2014-07-03 14:36:01'),
(25, 'between', 3, '2014-07-03 14:37:07', '2014-07-03 14:37:07'),
(26, 'bureau', 4, '2014-07-03 14:38:06', '2014-07-03 14:38:06'),
(27, 'belfast docks', 5, '2014-07-03 14:39:11', '2014-07-04 15:17:23'),
(28, 'suffolk', 5, '2014-07-03 14:41:06', '2014-07-03 14:41:06'),
(29, 'city picnic', 7, '2014-07-03 14:43:13', '2014-07-03 14:43:13');

-- --------------------------------------------------------

--
-- Table structure for table `project_images`
--

CREATE TABLE IF NOT EXISTS `project_images` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `project_id` int(10) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '0',
  `image_file_name` varchar(255) NOT NULL,
  `order` int(10) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=181 ;

--
-- Dumping data for table `project_images`
--

INSERT INTO `project_images` (`id`, `project_id`, `name`, `image_file_name`, `order`, `created`, `modified`) VALUES
(104, 21, '', '5_rockr.jpg', 1, '2014-07-03 13:50:18', '2014-07-04 14:21:00'),
(105, 21, '', '6_hazelbank.jpg', 3, '2014-07-03 13:50:40', '2014-10-28 11:29:19'),
(112, 21, '', '12_DSC_0242.jpg', 5, '2014-07-03 13:52:32', '2014-10-28 11:29:47'),
(123, 23, '', '1_doctor_lilt.jpg', 2, '2014-07-03 14:34:10', '2014-07-04 15:22:38'),
(125, 23, '', '3_cab.jpg', 4, '2014-07-03 14:34:38', '2014-10-28 11:40:21'),
(128, 23, '', '6_duncrue.jpg', 1, '2014-07-03 14:35:24', '2014-07-04 15:22:52'),
(129, 24, '', '1_glove.jpg', 1, '2014-07-03 14:36:22', '2014-07-03 14:36:22'),
(130, 24, '', '2_hedge.jpg', 2, '2014-07-03 14:36:38', '2014-07-03 14:36:38'),
(131, 24, '', '3_harbour.jpg', 4, '2014-07-03 14:36:54', '2014-10-28 11:37:38'),
(132, 25, '', '1_bald_spot_man.jpg', 1, '2014-07-03 14:37:26', '2014-07-03 14:37:26'),
(133, 25, '', '2_citreon_man2.jpg', 2, '2014-07-03 14:37:40', '2014-07-03 14:37:40'),
(134, 25, '', '3_umbrella3.jpg', 3, '2014-07-03 14:37:53', '2014-07-03 14:37:53'),
(135, 26, '', '1_shop_front.jpg', 1, '2014-07-03 14:38:30', '2014-07-03 14:38:30'),
(137, 26, '', '3_pass.jpg', 3, '2014-07-03 14:38:56', '2014-07-03 14:38:56'),
(138, 27, '', '1_DSC_0109r.jpg', 1, '2014-07-03 14:39:30', '2014-07-03 14:39:30'),
(139, 27, '', '2_DSC_0173r.jpg', 3, '2014-07-03 14:39:44', '2014-10-30 11:54:35'),
(141, 27, '', '4_DSC_0084r.jpg', 2, '2014-07-03 14:40:07', '2014-10-30 11:55:11'),
(144, 28, '', '1_fantasty_tree.jpg', 1, '2014-07-03 14:41:27', '2014-07-03 14:41:27'),
(148, 28, '', '5_pole.jpg', 7, '2014-07-03 14:42:18', '2014-10-28 12:31:49'),
(152, 29, '', '1_window.jpg', 1, '2014-07-03 14:43:41', '2014-07-03 14:43:41'),
(154, 29, '', '3_shop.jpg', 4, '2014-07-03 14:44:07', '2014-10-30 11:56:25'),
(155, 29, '', '4_service.jpg', 3, '2014-07-03 14:44:19', '2014-10-30 11:56:51'),
(159, 29, '', '5_shelf.jpg', 4, '2014-08-23 16:23:42', '2014-08-23 16:23:42'),
(160, 29, '', '6_ice_cream.jpg', 5, '2014-08-23 16:24:10', '2014-08-23 16:24:10'),
(161, 21, '', '4_DSC_0148.jpg', 2, '2014-08-23 16:25:13', '2014-10-28 11:29:06'),
(162, 21, '', '3_DSC_0140r.jpg', 4, '2014-08-23 16:26:38', '2014-10-28 11:29:31'),
(163, 28, '', '6_curtain.jpg', 4, '2014-08-23 16:27:20', '2014-08-23 16:27:20'),
(164, 28, '', '2_tarmac.jpg', 3, '2014-08-23 16:27:41', '2014-10-28 10:49:12'),
(167, 27, '', '3_DSC_0124r.jpg', 4, '2014-08-23 16:40:21', '2014-08-23 16:40:21'),
(168, 29, '', 'counter.jpg', 2, '2014-10-28 10:44:17', '2014-10-30 11:57:05'),
(169, 29, '', '7_posters.jpg', 6, '2014-10-28 10:44:47', '2014-10-28 10:44:47'),
(171, 27, '', 'DSC_0072r.jpg', 5, '2014-10-28 11:25:34', '2014-10-28 11:25:34'),
(172, 21, '', '11_red_jacket.jpg', 6, '2014-10-28 11:28:15', '2014-10-28 11:28:15'),
(173, 24, '', 'flats.jpg', 3, '2014-10-28 11:37:10', '2014-10-28 11:37:10'),
(174, 23, '', 'beach_eye.jpg', 3, '2014-10-28 11:39:43', '2014-10-28 12:51:31'),
(175, 26, '', '5_changing_rooms.jpg', 3, '2014-10-28 12:19:49', '2014-10-28 12:19:49'),
(176, 26, '', '4_shirt.jpg', 4, '2014-10-28 12:20:12', '2014-10-28 12:20:12'),
(179, 28, '', '10_road.jpg', 6, '2014-10-28 12:31:28', '2014-10-28 12:40:53');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
