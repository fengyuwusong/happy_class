-- phpMyAdmin SQL Dump
-- version 4.4.15
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-11-14 22:26:40
-- 服务器版本： 10.1.8-MariaDB
-- PHP Version: 5.4.45

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `happy_class`
--

-- --------------------------------------------------------

--
-- 表的结构 `tp_back`
--

CREATE TABLE IF NOT EXISTS `tp_back` (
  `id` int(11) NOT NULL COMMENT '主键id',
  `class_id` int(3) NOT NULL COMMENT '投票的班级id',
  `time` int(11) NOT NULL COMMENT '上一次统计的投票时间',
  `num` int(11) NOT NULL COMMENT '上一次的票数 '
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='返回时间点的表';

-- --------------------------------------------------------

--
-- 表的结构 `tp_button`
--

CREATE TABLE IF NOT EXISTS `tp_button` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `num` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `tp_class`
--

CREATE TABLE IF NOT EXISTS `tp_class` (
  `id` int(11) NOT NULL COMMENT '唯一id',
  `name` varchar(30) NOT NULL COMMENT '班级名称',
  `info` text NOT NULL COMMENT '班级介绍',
  `num` int(11) NOT NULL COMMENT '票数'
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tp_class`
--

INSERT INTO `tp_class` (`id`, `name`, `info`, `num`) VALUES
(1, '1班', '//回调函数，当异步执行完了之后执行该方法//回调函数，当异步执行完了之后执行该方法', 0),
(2, '软件二班', '//回调函数，当异步执行完了之后执行该方法', 0),
(3, '计算机科学与技术3班', '计算机科学与技术3班计算机科学与技术3班计算机科学与技术3班', 0),
(4, '软件4班', '软件4班软件4班软件4班软件4班', 0),
(5, '电气5班', '电气5班电气5班电气5班', 0),
(6, '通信6班', '我是班级信息！我是班级信息！我是班级信息！我是班级信息！', 0),
(7, '营销7班', '我是班级信息！我是班级信息！我是班级信息！', 0),
(8, '网络8班', '我是班级信息！我是班级信息！我是班级信息！我是班级信息！', 0),
(9, '我是9班', '我是班级信息！我是班级信息！我是班级信息！', 0),
(10, '最后一个', '我是10班我是班级信息！我是班级信息！', 0);

-- --------------------------------------------------------

--
-- 表的结构 `tp_danmu`
--

CREATE TABLE IF NOT EXISTS `tp_danmu` (
  `id` int(11) NOT NULL COMMENT '主键id',
  `danmu` varchar(400) NOT NULL COMMENT '弹幕json',
  `class_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `tp_people`
--

CREATE TABLE IF NOT EXISTS `tp_people` (
  `id` int(11) NOT NULL COMMENT '主键',
  `class_id` int(11) NOT NULL COMMENT '投票班级名称',
  `time` int(11) NOT NULL COMMENT '投票时间戳',
  `ip` varchar(30) NOT NULL COMMENT '投票者的ip'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='记录投票人信息的表';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tp_back`
--
ALTER TABLE `tp_back`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tp_button`
--
ALTER TABLE `tp_button`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tp_class`
--
ALTER TABLE `tp_class`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tp_danmu`
--
ALTER TABLE `tp_danmu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tp_people`
--
ALTER TABLE `tp_people`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tp_button`
--
ALTER TABLE `tp_button`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tp_class`
--
ALTER TABLE `tp_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '唯一id',AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tp_danmu`
--
ALTER TABLE `tp_danmu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键id';
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
