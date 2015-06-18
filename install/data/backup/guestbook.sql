-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 08 月 13 日 00:46
-- 服务器版本: 5.5.38
-- PHP 版本: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `111111`
--

-- --------------------------------------------------------

--
-- 表的结构 `guestbook`
--

CREATE TABLE IF NOT EXISTS `guestbook` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `nickname` varchar(60) CHARACTER SET utf8 NOT NULL,
  `email` varchar(60) CHARACTER SET utf8 NOT NULL,
  `yc_email` int(10) DEFAULT NULL,
  `tel` varchar(60) CHARACTER SET utf8 NOT NULL,
  `qq` varchar(30) CHARACTER SET utf8 NOT NULL,
  `yc_qq` int(10) DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` varchar(255) CHARACTER SET utf8 NOT NULL,
  `add_ip` varchar(100) CHARACTER SET utf8 NOT NULL,
  `add_date` varchar(120) DEFAULT NULL,
  `passed` text CHARACTER SET utf8,
  `reply` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ssfl` varchar(60) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- 转存表中的数据 `guestbook`
--

INSERT INTO `guestbook` (`id`, `title`, `nickname`, `email`, `yc_email`, `tel`, `qq`, `yc_qq`, `address`, `content`, `add_ip`, `add_date`, `passed`, `reply`, `ssfl`) VALUES
(4, '测试新闻', '霏凡', '1213123@qq.com', 0, '1343712719', '314288443', NULL, '啊啊啊啊啊啊啊', '啊啊啊啊啊啊啊啊啊啊啊啊啊', '127.0.0.1', '1407047562', NULL, '', '12'),
(5, '测试新闻', '霏凡', '1213123@qq.com', 0, '1343712719', '314288443', NULL, '啊啊啊啊啊啊啊', '啊啊啊啊啊啊啊啊啊啊啊啊啊', '127.0.0.1', '1407047562', NULL, '', '12'),
(6, '测试新闻', '霏凡', '1213123@qq.com', 0, '1343712719', '314288443', NULL, '啊啊啊啊啊啊啊', '啊啊啊啊啊啊啊啊啊啊啊啊啊', '127.0.0.1', '1407047562', NULL, '', '12'),
(7, '测试新闻', '霏凡', '1213123@qq.com', 0, '1343712719', '314288443', NULL, '啊啊啊啊啊啊啊', '啊啊啊啊啊啊啊啊啊啊啊啊啊', '127.0.0.1', '1407047562', NULL, '', '12'),
(8, '测试新闻', '霏凡', '1213123@qq.com', 0, '1343712719', '314288443', NULL, '啊啊啊啊啊啊啊', '啊啊啊啊啊啊啊啊啊啊啊啊啊', '127.0.0.1', '1407047562', NULL, '', '12'),
(9, '测试新闻', '霏凡', '1213123@qq.com', 0, '1343712719', '314288443', NULL, '啊啊啊啊啊啊啊', '啊啊啊啊啊啊啊啊啊啊啊啊啊', '127.0.0.1', '1407047562', NULL, '', '12'),
(10, '测试新闻', '霏凡', '1213123@qq.com', 0, '1343712719', '314288443', NULL, '啊啊啊啊啊啊啊', '啊啊啊啊啊啊啊啊啊啊啊啊啊', '127.0.0.1', '1407047562', '1', '', '12'),
(11, '测试新闻', '霏凡', '1213123@qq.com', 0, '1343712719', '314288443', NULL, '啊啊啊啊啊啊啊', '啊啊啊啊啊啊啊啊啊啊啊啊啊', '127.0.0.1', '1407047562', '1', '', '12'),
(12, '测试新闻', '霏凡', '1213123@qq.com', 0, '1343712719', '314288443', NULL, '啊啊啊啊啊啊啊', '啊啊啊啊啊啊啊啊啊啊啊啊啊', '127.0.0.1', '1407047562', '1', '', '12'),
(13, '测试新闻', '霏凡', '1213123@qq.com', 0, '1343712719', '314288443', NULL, '啊啊啊啊啊啊啊', '啊啊啊啊啊啊啊啊啊啊啊啊啊', '127.0.0.1', '1407047562', '1', '', '12'),
(14, 'aaaa', '啊啊啊', '1212@qq.com', NULL, '1111111', '1111111', NULL, '1111111111111111111', '111111111111111111', '127.0.0.1', '1407047562', '1', '', '12'),
(15, '测试留言', '张三', 'zyf234@163.com', NULL, '13437192619', '132422324', NULL, '湖北武汉', '测试内容', '127.0.0.1', '1407047562', '1', '', '12'),
(16, '222222', '直招', 'wwdsd@11.com', NULL, '1111111111', '1111111', NULL, '111', '1111111111111111111', '127.0.0.1', '1407047562', '1', '', '12'),
(17, '1111111111', '啊啊啊', '121212@qq.com', NULL, '11111111111', '111111', NULL, '1111111111111', '1111111111111', '127.0.0.1', '1407047562', '1', '', '12'),
(18, '1212', '啊啊啊啊啊', '1212@qq.com', NULL, '121212121', '21121213', NULL, '', '12222222222222', '127.0.0.1', '1407047562', '1', '22222222222', '12'),
(19, '1212', '啊啊啊啊啊', '1212@qq.com', NULL, '121212121', '21121213', NULL, '', '12222222222222', '127.0.0.1', '1407047562', '1', '333311111111', '12'),
(20, '测试网站内容', '测试', 'sae4@q.com', 1, '12123123123', '11233213', 1, '啊啊啊啊啊啊啊啊啊', '测试网站内容', '127.0.0.*', '1407252283', '0', '', '13'),
(21, '测试内容', '测试内容', '23213@qq.cc', 1, '13437192617', '12341231', 1, '啊啊啊啊啊啊啊啊啊啊啊啊啊', '测试内容测试内容测试内容', '127.0.0.*', '1407254398', '0', '', '12'),
(22, '空间购买', '东东', 'zyf@23.cc', 1, '11111111111', '12312341', 1, '嘟嘟', '我要购买贵公司的空间。', '127.0.0.*', '1407255297', '0', '', '12'),
(23, '空间购买', '东东', 'zyf@23.cc', 1, '11111111111', '12312341', 1, '嘟嘟', '我要购买贵公司的空间。', '127.0.0.*', '1407255345', '0', '', '12'),
(24, '测试留言', '测试留言', '1312323@qq.com', 1, '111123123', '11123123', 1, '11111', '测试留言测试留言测试留言', '127.0.0.*', '1407255503', NULL, '', '13');

-- --------------------------------------------------------

--
-- 表的结构 `sort`
--

CREATE TABLE IF NOT EXISTS `sort` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `sort_name` varchar(60) CHARACTER SET utf8 NOT NULL,
  `s_id` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `sort`
--

INSERT INTO `sort` (`id`, `sort_name`, `s_id`) VALUES
(12, '网站空间', '1'),
(13, '网站优化', '2'),
(14, '网站建设', '3'),
(15, '系统帮助', '4');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
