-- phpMyAdmin SQL Dump
-- version 4.4.15
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-11-13 15:31:45
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
  `class_name` varchar(30) NOT NULL COMMENT '投票的班级名称',
  `time` int(11) NOT NULL COMMENT '上一次统计的投票时间',
  `num` int(11) NOT NULL COMMENT '上一次的票数 '
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='返回时间点的表';

-- --------------------------------------------------------

--
-- 表的结构 `tp_class`
--

CREATE TABLE IF NOT EXISTS `tp_class` (
  `id` int(11) NOT NULL COMMENT '唯一id',
  `name` varchar(30) NOT NULL COMMENT '班级名称',
  `info` text NOT NULL COMMENT '班级介绍',
  `cover` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `video` varchar(100) NOT NULL,
  `num` int(11) NOT NULL COMMENT '票数'
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tp_class`
--

INSERT INTO `tp_class` (`id`, `name`, `info`, `cover`, `image`, `video`, `num`) VALUES
(2, '软件一般', '4545', 'http://oga3de3p0.bkt.clouddn.com/FmLpplRxhEsmt_q1nCbT4lyUOdib', 'http://oga3de3p0.bkt.clouddn.com/FgtXXppVedigRpgGFHouNHuXX61r', 'http://oga3de3p0.bkt.clouddn.com/lh9KDdhuc_hLI1N9UN4_cfdKqpDX', 1),
(3, '软件二班', '1245', 'http://oga3de3p0.bkt.clouddn.com/FoaB0n6NzOnsHHskfyaxrg_r311b', 'http://oga3de3p0.bkt.clouddn.com/FoFLPAq2gsnHnKiUk9aA0oGY3Do_', 'http://oga3de3p0.bkt.clouddn.com/FhMdSu7hzr8jGjhzhOyb0cmWYmdg', 0),
(4, '软件三班', '4545', 'http://oga3de3p0.bkt.clouddn.com/FsG-9CPEBZYicCNWHp6gpO9xyHSv', 'http://oga3de3p0.bkt.clouddn.com/Fv19pyzcNnhU9Wjqic710oSq50UX', 'http://oga3de3p0.bkt.clouddn.com/lhsHNomlWxOwscLM3K_JV_NaMi7D', 0);

-- --------------------------------------------------------

--
-- 表的结构 `tp_danmu`
--

CREATE TABLE IF NOT EXISTS `tp_danmu` (
  `id` int(11) NOT NULL COMMENT '主键id',
  `danmu` varchar(400) NOT NULL COMMENT '弹幕json',
  `class_name` varchar(30) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tp_danmu`
--

INSERT INTO `tp_danmu` (`id`, `danmu`, `class_name`) VALUES
(1, '{ "text":"测试","color":"#ffffff","size":"1","position":"0","time":118}', ''),
(2, '{ &quot;text&quot;:&quot;测试2&quot;,&quot;color&quot;:&quot;#ffffff&quot;,&quot;size&quot;:&quot;1&quot;,&quot;position&quot;:&quot;0&quot;,&quot;time&quot;:41}', ''),
(3, '{ &quot;text&quot;:&quot;我又好多弹幕&quot;,&quot;color&quot;:&quot;#ffffff&quot;,&quot;size&quot;:&quot;1&quot;,&quot;position&quot;:&quot;0&quot;,&quot;time&quot;:173}', '');

-- --------------------------------------------------------

--
-- 表的结构 `tp_people`
--

CREATE TABLE IF NOT EXISTS `tp_people` (
  `id` int(11) NOT NULL COMMENT '主键',
  `class_name` varchar(30) NOT NULL COMMENT '投票班级名称',
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
-- Indexes for table `tp_class`
--
ALTER TABLE `tp_class`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `image_origin` (`cover`),
  ADD UNIQUE KEY `video` (`video`),
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
-- AUTO_INCREMENT for table `tp_class`
--
ALTER TABLE `tp_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '唯一id',AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tp_danmu`
--
ALTER TABLE `tp_danmu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键id',AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
