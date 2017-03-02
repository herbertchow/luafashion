-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-03-31 08:03:51
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vog`
--

-- --------------------------------------------------------

--
-- 表的结构 `vog_user`
--

CREATE TABLE IF NOT EXISTS `vog_user` (
  `id` int(5) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `username` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '用户名',
  `password` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '用户密码',
  `name` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '用户姓名或昵称',
  `email` varchar(40) CHARACTER SET utf8 NOT NULL COMMENT '用户邮箱',
  `type` int(1) NOT NULL DEFAULT '0' COMMENT '用户类型 1管理员 0普通用户',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `vog_user`
--

INSERT INTO `vog_user` (`id`, `username`, `password`, `name`, `email`, `type`) VALUES
(1, 'zhp', '123456', '你打我啊', 'qwe@qq.com', 1),
(4, 'lpc', '123456', '呵呵哒', 'asd@qq.com', 0),
(5, 'gasd', '555', 'dsdsdss', '22@qq.com', 0),
(6, 'wcnm', '654321', '握草尼玛', 'wcnm@qq.com', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
