-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-07-30 11:48:48
-- 服务器版本： 5.5.33
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `admin_username` char(32) CHARACTER SET utf8 NOT NULL DEFAULT 'NOT NULL',
  `admin_password` char(64) CHARACTER SET utf8 NOT NULL DEFAULT 'NOT NULL',
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_username` (`admin_username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', '4d9bc6d3437edb3b9972f7f90138da08');

-- --------------------------------------------------------

--
-- 表的结构 `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `client_name` char(32) CHARACTER SET utf8 NOT NULL DEFAULT 'NOT NULL',
  `client_email` char(64) CHARACTER SET utf8 NOT NULL DEFAULT 'NOT NULL',
  `client_phone` char(32) CHARACTER SET utf8 NOT NULL DEFAULT 'NOT NULL',
  `client_message` varchar(4096) CHARACTER SET utf8 NOT NULL DEFAULT 'NOT NULL',
  `post_time` char(32) CHARACTER SET utf8 NOT NULL DEFAULT 'NOT NULL',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=75 ;

--
-- 转存表中的数据 `client`
--

INSERT INTO `client` (`id`, `client_name`, `client_email`, `client_phone`, `client_message`, `post_time`) VALUES
(5, 'Mingyu Zhu', 'marcuszmy1212@qq.com', '603333333', 'Test', 'NOT NULL'),
(8, 'Mingyu Zhu', 'marcuszmy1212@qq.com', '603333333', 'Test', 'NOT NULL'),
(10, 'æœ±é¸£å®‡', 'marcuszmy1212@qq.com', '	111111', 'ä½ å¥½æˆ‘æƒ³ä¹°è½¦', 'NOT NULL'),
(11, 'å¤§å±Œ', 'mikehahaha@dadiao.com', '8572222222', 'ä½ å¥½æˆ‘æƒ³ä¹°è½¦\r\nhello, I want to buy a car', 'NOT NULL'),
(13, 'Hello', 'TEST@qq.com', 'TEST2', 'TEST post_time', '2015-07-30 08:23:46'),
(69, 'test', 'test@qq.com', '111', 'test', '2015-07-30 05:21:31'),
(71, 'test fresh', 'test@qq.com', 'TEST', 'ssssss', '2015-07-30 05:30:20'),
(72, '', '', '', '', '2015-07-30 05:31:51'),
(73, '', '', '', '', '2015-07-30 05:33:16'),
(74, 'test fresh', 'TEST@qq.com', 'TEST', '111', '2015-07-30 05:46:41');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
