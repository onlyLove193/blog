-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-05-07 06:58:53
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- 表的结构 `bl_article`
--

CREATE TABLE IF NOT EXISTS `bl_article` (
  `aid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL DEFAULT '',
  `keywords` char(150) NOT NULL DEFAULT '',
  `auid` int(11) NOT NULL DEFAULT '0',
  `content` text,
  `preread` char(255) NOT NULL DEFAULT '',
  `hot` tinyint(1) NOT NULL DEFAULT '1',
  `new` tinyint(1) NOT NULL DEFAULT '1',
  `cid` int(11) NOT NULL DEFAULT '0',
  `red` int(11) NOT NULL DEFAULT '94',
  `wtime` char(15) NOT NULL DEFAULT '0',
  `aimg` char(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=51 ;

--
-- 转存表中的数据 `bl_article`
--

INSERT INTO `bl_article` (`aid`, `title`, `keywords`, `auid`, `content`, `preread`, `hot`, `new`, `cid`, `red`, `wtime`, `aimg`, `status`) VALUES
(1, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 94, '1475457197', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 1),
(2, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 94, '1475458227', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 1),
(3, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 94, '1475458458', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 1),
(4, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 94, '1475458462', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 1),
(5, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 94, '1475458799', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 1),
(6, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 94, '1475458954', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 1),
(7, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 94, '1475460031', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 1),
(8, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 94, '1475460167', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 1),
(9, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 94, '1475460179', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 1),
(10, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 94, '1475460263', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 1),
(11, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 94, '1475460352', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 1),
(12, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 94, '1475460356', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 1),
(13, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 94, '1475460422', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 1),
(14, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 94, '1475460425', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 1),
(15, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 94, '1475460437', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 1),
(16, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 94, '1475460519', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 1),
(17, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 94, '1475460521', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 0),
(18, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 94, '1475460533', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 1),
(19, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 94, '1475460586', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 1),
(20, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 94, '1475460588', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 1),
(21, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 94, '1475460588', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 1),
(22, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 94, '1475460589', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 1),
(23, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 94, '1475460589', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 1),
(24, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 94, '1475460589', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 1),
(25, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 94, '1475460589', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 1),
(26, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 99, '1475460590', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 1),
(27, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 98, '1475460734', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 1),
(28, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 96, '1475460735', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 1),
(29, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 97, '1475460736', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 1),
(30, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 94, '1475460751', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 1),
(31, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 94, '1475460952', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 1),
(32, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 94, '1475460954', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 1),
(33, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 94, '1475460955', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 1),
(34, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 94, '1475460955', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 1),
(35, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 94, '1475460955', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 1),
(36, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 94, '1475460996', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 1),
(37, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 94, '1475461030', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 0),
(38, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 94, '1475461034', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 1),
(39, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 94, '1475461036', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 1),
(40, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 94, '1475461098', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 1),
(41, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 94, '1475461186', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 1),
(42, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 94, '1475461213', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 1),
(43, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 94, '1475461214', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 1),
(44, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 94, '1475461216', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 1),
(45, '男人歌', '一个人　伤心　疗伤圣曲', 1, '<p>醒在午夜两点十分，对着镜子里的自己疑问，太多的压力与苦闷，怎样保持一颗真挚的灵魂，不管时间造物弄人．．．<br/></p>', '歌唱了一个男人，对自我的描述，对爱情的理解．', 1, 1, 10, 94, '1475461267', '/Data/Upload/2016-10-03/57f1e6fb0c1cf.jpg', 1),
(49, '做一个不愿意将就的人', '心灵', 4, '<p>熟悉陌生的画面，唤醒封印的思念，注定什么样的你，继承蔓延的思绪，留下牵挂的日记，风滑过我的脸，带我回到好远，</p><p>那一天，原来啊。。<br/></p>', '不愿意将就所带来的后果，可能好，也可能坏，但作为一个成年人，得为自己的行为负责', 1, 1, 8, 94, '1488608666', '/Data/Upload/2017-03-04/58ba5d489d49e.jpg', 1),
(50, '不知不觉忘记目的地', '夏日 忘记 留存', 5, '<p style="padding: 5px 0px; margin-top: 0px; margin-bottom: 0px; text-indent: 2em; color: rgb(43, 43, 43); font-family: Verdana, Arial, Tahoma; font-size: 14px; white-space: normal; background-color: rgb(246, 252, 255);">91岁的叶嘉莹女士曾表示：她喜欢多些安静的时间，多读些好书，多些静思，多些与先哲的神交。百岁高龄的杨绛先生守静功力更是了得，她和钱钟书在春节也一样专注学问，面对前来拜年的客人只透过门缝寒暄几句，没有让客人进屋，有些不近人情。正是因为有了这种超常守静的功力，才铸成大美之作。</p><p style="padding: 5px 0px; margin-top: 0px; margin-bottom: 0px; text-indent: 2em; color: rgb(43, 43, 43); font-family: Verdana, Arial, Tahoma; font-size: 14px; white-space: normal; background-color: rgb(246, 252, 255);">“动静等观”。人的生命与动密不可分，生活中要有动态美，但不能过，更不能变味。追求动态美更不能演变成：公共场所的喧嚣，极尽显露能事的夸张动作，声嘶力竭的吼叫，酒桌上的推杯换盏，资讯的有量无质。这都属于厚动薄静，不具有持久的生命力。</p><p style="padding: 5px 0px; margin-top: 0px; margin-bottom: 0px; text-indent: 2em; color: rgb(43, 43, 43); font-family: Verdana, Arial, Tahoma; font-size: 14px; white-space: normal; background-color: rgb(246, 252, 255);">守静能安。韩国的一项长期跟踪实验显示：长期身处节奏过快、喧嚣的环境，少年易有注意力不集中、多动症等疾患，成年人逻辑推理能力会弱化，主管短期愉悦的细胞会更活跃。美国的脑科学研究也证实：长期守静有利于神经细胞轴突的延长，有利于信息在脑细胞中的存储、分辨、比较与联系，有利于提升记忆力、分析力、判断力与决策力。这些恰恰应验了“水静极而形象明，心静极而智慧生”“非宁静无以致远，非淡泊无以明志”等诸多中华古训。</p><p style="padding: 5px 0px; margin-top: 0px; margin-bottom: 0px; text-indent: 2em; color: rgb(43, 43, 43); font-family: Verdana, Arial, Tahoma; font-size: 14px; white-space: normal; background-color: rgb(246, 252, 255);">守静以削冗举要。信息爆炸的当今，削冗力、举要力至关重要。此力不举，个人就无法从杂乱的海量信息中甄别出主信息与有效信息。此力足，主信息得以甄别，有效信息得以链接，创新性认知易得，大美之作可成。而削冗力、举要力、甄别力、链接力的提升无一不需要守静。万万不可因占有信息的过于求多而挤没了“思”的时间，车多而不管理堵路，信息多而不整理堵心，学而不思则罔。过多的信息缺乏整理，带来的只能是负效用。只有在“不窥牖，见天道”的守静中方能带来创新与突破。</p><p style="padding: 5px 0px; margin-top: 0px; margin-bottom: 0px; text-indent: 2em; color: rgb(43, 43, 43); font-family: Verdana, Arial, Tahoma; font-size: 14px; white-space: normal; background-color: rgb(246, 252, 255);">守静以求“信息一致”。神经生物学进一步证实，注重整理信息使头脑中信息得以一致，不但有益于认知创新，而且有益于提升积极情绪占比。杨绛百岁时感言：我们曾如此期盼外界的认可，到最后才知道世界是自己的。人生最曼妙的风景，竟是内心的淡定与从容。谁得“内在信息一致”之法，谁就得“真实幸福”之道。</p><p style="padding: 5px 0px; margin-top: 0px; margin-bottom: 0px; text-indent: 2em; color: rgb(43, 43, 43); font-family: Verdana, Arial, Tahoma; font-size: 14px; white-space: normal; background-color: rgb(246, 252, 255);">守静而“无不为”，“大音希声，大象无形”。叶、杨两位大师因守静有了大为，并得人生之大乐。“重为轻根，静为躁君”，环境略显喧嚣时，多些静，或许更好。</p><p><br/></p>', '是否还有怀念，从此真的不能再相见', 1, 1, 8, 104, '1489889035', '/Data/Upload/2017-03-19/58cde5bb538a7.jpg', 1);

-- --------------------------------------------------------

--
-- 表的结构 `bl_author`
--

CREATE TABLE IF NOT EXISTS `bl_author` (
  `tid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uname` char(20) NOT NULL DEFAULT '',
  `timg` varchar(50) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `bl_author`
--

INSERT INTO `bl_author` (`tid`, `uname`, `timg`, `status`) VALUES
(1, '午夜迷惘', '', 1),
(4, 'smart', '', 1),
(5, 'ifanor', '', 1);

-- --------------------------------------------------------

--
-- 表的结构 `bl_category`
--

CREATE TABLE IF NOT EXISTS `bl_category` (
  `gid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cname` char(20) NOT NULL DEFAULT '',
  `pid` int(11) NOT NULL DEFAULT '0',
  `descript` char(255) NOT NULL DEFAULT '',
  `keywords` varchar(80) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`gid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `bl_category`
--

INSERT INTO `bl_category` (`gid`, `cname`, `pid`, `descript`, `keywords`, `status`) VALUES
(1, '技术文档', 0, '', '', 1),
(2, 'PHP', 1, '', '', 1),
(3, 'Linux', 1, '', '', 1),
(4, 'Mysql', 1, '', '', 1),
(5, 'Jquery', 1, '', '', 1),
(6, 'Html5', 1, '', '', 1),
(7, 'CSS3', 1, '', '', 1),
(8, '心情', 0, '', '', 1),
(9, '音乐', 0, '', '', 1),
(10, '流行', 9, '', '', 1),
(11, '古典', 9, '', '', 1),
(12, '爵士', 9, '', '', 1),
(13, '喜欢', 0, '', '', 1);

-- --------------------------------------------------------

--
-- 表的结构 `bl_comment`
--

CREATE TABLE IF NOT EXISTS `bl_comment` (
  `cid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `auid` int(10) unsigned NOT NULL DEFAULT '0',
  `aid` int(10) unsigned NOT NULL DEFAULT '0',
  `content` char(255) NOT NULL DEFAULT '',
  `comment_ip` char(18) NOT NULL DEFAULT '',
  `time` char(10) NOT NULL DEFAULT '0',
  `status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `bl_user`
--

CREATE TABLE IF NOT EXISTS `bl_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(20) NOT NULL DEFAULT '',
  `mark` char(255) DEFAULT NULL,
  `passwd` char(32) NOT NULL DEFAULT '',
  `log_time` int(10) unsigned NOT NULL DEFAULT '0',
  `log_ip` char(32) NOT NULL DEFAULT '',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `bl_user`
--

INSERT INTO `bl_user` (`id`, `name`, `mark`, `passwd`, `log_time`, `log_ip`, `status`) VALUES
(1, 'admin', '超级管理员', '21232f297a57a5a743894a0e4a801fc3', 1493863670, '127.0.0.1', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
