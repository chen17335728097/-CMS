-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018-08-21 17:20:08
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fafa`
--

-- --------------------------------------------------------

--
-- 表的结构 `think_active_rule`
--

CREATE TABLE `think_active_rule` (
  `id` int(11) NOT NULL COMMENT '主键id',
  `value` longtext COMMENT '活动规则内容'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='活动规则表';

--
-- 转存表中的数据 `think_active_rule`
--

INSERT INTO `think_active_rule` (`id`, `value`) VALUES
(1, '<p><span style="font-family: monospace; font-size: medium; line-height: normal; white-space: pre-wrap; widows: 1;">（1）每一笔交易可参加抽奖3次，每个客户每天最多可参加抽奖6次；</span></p><p><span style="font-family: monospace; font-size: medium; line-height: normal; white-space: pre-wrap; widows: 1;">（2）每个客户每天可多次中奖，每天仅限一次领奖机会，多次中奖以最高奖项为最终确定奖项；</span></p><p><span style="font-family: monospace; font-size: medium; white-space: pre-wrap; widows: 1;">（3）对于不符参与规则的中奖客户，将取消领奖资格而不另行通知；</span></p><p><span style="font-family: monospace; font-size: medium; white-space: pre-wrap; widows: 1;"><span style="font-family: monospace; font-size: medium; white-space: pre-wrap; widows: 1;">（</span>4）若因漏填或错填信息，造成奖品无法发放，主办方不负相关责任;</span></p><p><span style="font-family: monospace; font-size: medium; white-space: pre-wrap; widows: 1;"><span style="font-family: monospace; font-size: medium; line-height: normal; white-space: pre-wrap; widows: 1;">（5）领奖方式：邮储银行对中奖客户信息审核通过后，在活动结束后的30个工作日内，通知一、二等奖中奖客户凭有效证件到银行指定的地址领取，</span></span></p><p><span style="font-family: monospace; font-size: medium; white-space: pre-wrap; widows: 1;"><span style="font-family: monospace; font-size: medium; line-height: normal; white-space: pre-wrap; widows: 1;">&nbsp;&nbsp; 对于中得话费奖项的客户，话费将直接充值到客户签约手机号码。一、二等奖领奖截止日期2017年11月31日，逾期视同放弃；</span></span></p><p><span style="font-family: monospace; font-size: medium; line-height: normal; white-space: pre-wrap; widows: 1;">（6）本活动最终解释权归邮储银行厦门分行所有，咨询电话0592-2629180；</span></p>'),
(4, '<p><span style="font-family: monospace; font-size: medium; line-height: normal; white-space: pre-wrap; widows: 1;">（1）每一笔交易可参加抽奖3次，每个客户每天最多可参加抽奖6次；</span></p><p><span style="font-family: monospace; font-size: medium; line-height: normal; white-space: pre-wrap; widows: 1;">（2）每个客户每天可多次中奖，每天仅限一次领奖机会，多次中奖以最高奖项为最终确定奖项；</span></p><p><span style="font-family: monospace; font-size: medium; white-space: pre-wrap; widows: 1;">（3）对于不符参与规则的中奖客户，将取消领奖资格而不另行通知；</span></p><p><span style="font-family: monospace; font-size: medium; white-space: pre-wrap; widows: 1;"><span style="font-family: monospace; font-size: medium; white-space: pre-wrap; widows: 1;">（</span>4）若因漏填或错填信息，造成奖品无法发放，主办方不负相关责任;</span></p><p><span style="font-family: monospace; font-size: medium; white-space: pre-wrap; widows: 1;"><span style="font-family: monospace; font-size: medium; line-height: normal; white-space: pre-wrap; widows: 1;">（5）领奖方式：邮储银行对中奖客户信息审核通过后，在活动结束后的30个工作日内，通知一、二等奖中奖客户凭有效证件到银行指定的地址领取，</span></span></p><p><span style="font-family: monospace; font-size: medium; white-space: pre-wrap; widows: 1;"><span style="font-family: monospace; font-size: medium; line-height: normal; white-space: pre-wrap; widows: 1;">&nbsp;&nbsp; 对于中得话费奖项的客户，话费将直接充值到客户签约手机号码。一、二等奖领奖截止日期2014年11月31日，逾期视同放弃；</span></span></p><p><span style="font-family: monospace; font-size: medium; line-height: normal; white-space: pre-wrap; widows: 1;">（6）本活动最终解释权归邮储银行厦门分行所有，咨询电话0592-2629180；154</span></p>');

-- --------------------------------------------------------

--
-- 表的结构 `think_ad`
--

CREATE TABLE `think_ad` (
  `ad_id` int(11) NOT NULL COMMENT '主键ID',
  `ad_name` varchar(50) NOT NULL DEFAULT '' COMMENT '广告名称',
  `ad_pid` tinyint(3) NOT NULL DEFAULT '0' COMMENT '所属位置',
  `ad_pic` varchar(200) NOT NULL DEFAULT '' COMMENT '广告图片URL',
  `ad_url` varchar(200) NOT NULL DEFAULT '' COMMENT '广告链接',
  `ad_addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '添加时间',
  `ad_order` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `ad_open` enum('10','20') NOT NULL DEFAULT '20' COMMENT '10：关闭，20：启用',
  `img` longtext COMMENT '图片路径',
  `keywords` varchar(255) DEFAULT NULL COMMENT '关键字'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='广告';

--
-- 转存表中的数据 `think_ad`
--

INSERT INTO `think_ad` (`ad_id`, `ad_name`, `ad_pid`, `ad_pic`, `ad_url`, `ad_addtime`, `ad_order`, `ad_open`, `img`, `keywords`) VALUES
(2, '广告图片', 7, 'uploads/20171011/cdfe240432b1e8b3db54cb93911a8516.jpg', 'www.baidu.com', '2017-10-11 08:33:11', 323, '10', '', ''),
(15, '首页轮播图', 9, 'uploads/20180521/3a239ef7543726e693ffe845c6251821.jpg', '', '2018-05-08 11:41:24', 2, '20', NULL, NULL),
(14, '首页轮播图', 9, 'uploads/20180521/54106f24e101b199ecba1ac4b7afedbd.jpg', '', '2018-05-08 11:41:12', 1, '20', NULL, NULL),
(17, '大图', 9, 'uploads/20180521/4c9f750988d823f8b616b59b9ecec84e.jpg', '', '2018-05-21 08:59:42', 0, '20', NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `think_address`
--

CREATE TABLE `think_address` (
  `address_id` int(11) NOT NULL COMMENT '主键',
  `address_name` varchar(255) DEFAULT NULL COMMENT '收货地址住址',
  `address_phone` varchar(255) DEFAULT NULL COMMENT '收货电话',
  `member_id` int(11) DEFAULT NULL COMMENT '会员ID'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='收货地址';

-- --------------------------------------------------------

--
-- 表的结构 `think_ad_position`
--

CREATE TABLE `think_ad_position` (
  `ad_pid` tinyint(3) NOT NULL COMMENT '主键',
  `ad_pname` varchar(50) NOT NULL DEFAULT '' COMMENT '广告位名称',
  `ad_porder` int(11) NOT NULL DEFAULT '255' COMMENT '广告位排序',
  `ad_popen` enum('10','20') NOT NULL DEFAULT '20' COMMENT '状态（10：关闭；20：开启）',
  `ad_tag` varchar(25) DEFAULT NULL COMMENT '广告标签',
  `ad_ptime` int(10) DEFAULT '0' COMMENT '时间'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='广告位置';

--
-- 转存表中的数据 `think_ad_position`
--

INSERT INTO `think_ad_position` (`ad_pid`, `ad_pname`, `ad_porder`, `ad_popen`, `ad_tag`, `ad_ptime`) VALUES
(9, '首页轮播图', 1, '20', 'index', 1509000441),
(10, '首页中部banner', 2, '20', 'index_middle', 1509000483),
(11, '首页人气推荐banner', 0, '20', 'Popularity', 1513067995),
(12, '首页本店推荐banner', 0, '20', 'recommend', 1513068572),
(13, '本店置顶', 0, '20', 'top', 1513073027);

-- --------------------------------------------------------

--
-- 表的结构 `think_article`
--

CREATE TABLE `think_article` (
  `aid` int(11) NOT NULL COMMENT '文章主键ID',
  `atitle` char(120) NOT NULL DEFAULT '' COMMENT '文章标题',
  `awriter` char(36) NOT NULL DEFAULT '' COMMENT '作者',
  `acontent` text NOT NULL COMMENT '文章内容',
  `atime` int(10) NOT NULL DEFAULT '0' COMMENT '添加时间',
  `aimg` varchar(255) NOT NULL DEFAULT '' COMMENT '文章主图',
  `astatus` enum('10','20','30') NOT NULL DEFAULT '10' COMMENT '文章状态(10：正常，20：文章回收站，30：待审核)',
  `acnid` int(11) NOT NULL DEFAULT '0' COMMENT '文章分类ID',
  `astro` varchar(255) DEFAULT NULL COMMENT '文章简介',
  `at_content` longtext COMMENT '文章主题内容',
  `at_auto` varchar(25) DEFAULT NULL COMMENT '文章发布者',
  `at_source` varchar(255) DEFAULT NULL COMMENT '文章来源',
  `at_hits` int(11) NOT NULL DEFAULT '200' COMMENT '文章点击量',
  `at_shortTitle` varchar(255) DEFAULT NULL COMMENT '文章短标题'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='文章';

-- --------------------------------------------------------

--
-- 表的结构 `think_articletype`
--

CREATE TABLE `think_articletype` (
  `atid` int(11) NOT NULL,
  `atname` varchar(255) NOT NULL DEFAULT '' COMMENT '文章属性名称',
  `atopen` enum('10','20') NOT NULL DEFAULT '10' COMMENT '状态(10开启,20关闭）',
  `atorder` int(11) NOT NULL DEFAULT '255' COMMENT '排序'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='文章属性';

--
-- 转存表中的数据 `think_articletype`
--

INSERT INTO `think_articletype` (`atid`, `atname`, `atopen`, `atorder`) VALUES
(5, '管吃住，环境好，暑假工', '10', 1),
(6, '管吃管住，待遇好，有五险一金', '10', 2),
(10, '管住，多劳多得，福利好', '10', 0);

-- --------------------------------------------------------

--
-- 表的结构 `think_article_column`
--

CREATE TABLE `think_article_column` (
  `acid` int(11) NOT NULL COMMENT '文章分类主键ID',
  `acname` varchar(255) NOT NULL DEFAULT '' COMMENT '文章分类名称',
  `acorder` tinyint(3) NOT NULL DEFAULT '0' COMMENT '排序',
  `acpid` int(11) DEFAULT '0' COMMENT '分类父ID'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='文章分类表';

-- --------------------------------------------------------

--
-- 表的结构 `think_auth_group`
--

CREATE TABLE `think_auth_group` (
  `id` int(8) UNSIGNED NOT NULL COMMENT '用户组逐渐id',
  `title` varchar(100) NOT NULL DEFAULT '' COMMENT '用户组中文名称',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '用户组状态,0禁用1正常',
  `rules` longtext NOT NULL COMMENT '用户组拥有的规则id， 多个规则","隔开',
  `desc` text COMMENT '职责描述',
  `pid` int(11) DEFAULT NULL COMMENT '父id',
  `type` tinyint(1) DEFAULT NULL COMMENT '职位类别(1工作职位0)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户分组表';

--
-- 转存表中的数据 `think_auth_group`
--

INSERT INTO `think_auth_group` (`id`, `title`, `status`, `rules`, `desc`, `pid`, `type`) VALUES
(1, '管理组', 1, '19,80,81,82,87,86,85,84,83,98,99,100,24,25,23,22,26,20,30,29,37,36,35,34,33,32,31,27,28,21,39,50,49,48,47,46,38,41,45,44,43,42,40,55,54,53,52,51,71,73,74,75,76,72,77,78,79,57,96,97,92,95,94,93,88,91,90,89,59,65,66,67,68,69,58,62,63,64,61,60', '超级管理员', 0, 0),
(23, '普通管理员', 1, '', '夫人捏', 0, 0),
(24, '普通管理员001', 0, '', '反而', 0, 0),
(25, '审核员', 1, '', '审核新闻发布', 0, 0),
(26, '普通', 0, '', '废物', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `think_auth_group_access`
--

CREATE TABLE `think_auth_group_access` (
  `uid` mediumint(8) UNSIGNED NOT NULL COMMENT '用户组ID',
  `group_id` mediumint(8) UNSIGNED NOT NULL COMMENT '分组Id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户权限表';

--
-- 转存表中的数据 `think_auth_group_access`
--

INSERT INTO `think_auth_group_access` (`uid`, `group_id`) VALUES
(1, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 9),
(33, 9),
(34, 9),
(35, 9),
(36, 9),
(37, 9),
(38, 9),
(39, 1),
(40, 1),
(41, 9),
(42, 9),
(43, 5),
(44, 5),
(45, 5),
(46, 9),
(47, 5),
(48, 5),
(49, 5),
(50, 5),
(51, 5),
(52, 5),
(60, 23),
(61, 25),
(62, 1),
(66, 25);

-- --------------------------------------------------------

--
-- 表的结构 `think_auth_rule`
--

CREATE TABLE `think_auth_rule` (
  `id` mediumint(8) UNSIGNED NOT NULL COMMENT '主键',
  `name` char(80) NOT NULL DEFAULT '' COMMENT '规则唯一标示',
  `title` char(20) NOT NULL DEFAULT '' COMMENT '规则中文名称',
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `status` enum('10','20') NOT NULL DEFAULT '10' COMMENT '状态：10:禁止,20:正常',
  `condition` char(100) NOT NULL DEFAULT '' COMMENT '规则表达式，为空表示存在就验证，不为空表示按照条件验证',
  `notcheck` tinyint(1) DEFAULT NULL COMMENT '验证是否',
  `level` tinyint(3) DEFAULT NULL COMMENT '级别',
  `pid` int(11) DEFAULT NULL COMMENT '父节点id',
  `order` int(11) DEFAULT '255' COMMENT '排序'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户规则表';

--
-- 转存表中的数据 `think_auth_rule`
--

INSERT INTO `think_auth_rule` (`id`, `name`, `title`, `type`, `status`, `condition`, `notcheck`, `level`, `pid`, `order`) VALUES
(18, 'back/index', '首页', 1, '20', '', 1, 0, 0, 1),
(19, 'back/system', '系统配置', 1, '20', '', 1, 0, 0, 2),
(20, 'back/product', '商品管理', 1, '10', '', 1, 0, 0, 3),
(21, 'back/admin', '管理员管理', 1, '10', '', 1, 0, 0, 4),
(22, 'back/system/system_base', '系统设置', 1, '20', '', 1, 1, 19, 255),
(23, 'back/system/clearCache', '清除缓存', 1, '20', '', 1, 1, 19, 255),
(24, 'back/system/log', '系统日志', 1, '20', '', 1, 1, 19, 255),
(25, 'back/system/log_del', '删除日志', 1, '20', '', 1, 2, 24, 255),
(26, 'back/system/systemSave', '系统设置---保存', 1, '20', '', 1, 2, 22, 255),
(27, 'back/product/product_list', '获奖者列表', 1, '10', '', 1, 1, 20, 255),
(28, 'back/product/product_list_del', '获奖者列表---删除', 1, '10', '', 1, 2, 27, 255),
(29, 'back/product/product', '商品列表', 1, '10', '', 1, 1, 20, 255),
(30, 'back/product/active_rule_add', '活动规则', 1, '10', '', 1, 1, 20, 255),
(31, 'back/product/product_del', '商品列表---删除', 1, '10', '', 1, 2, 29, 255),
(32, 'back/product/product_edit', '商品列表---编辑', 1, '10', '', 1, 2, 29, 255),
(33, 'back/product/productSave', '商品列表---保存', 1, '10', '', 1, 2, 29, 255),
(34, 'back/product/productEditSave', '商品列表---编辑保存', 1, '10', '', 1, 2, 29, 255),
(35, 'back/product/product_add', '商品列表---添加', 1, '10', '', 1, 2, 29, 255),
(36, 'back/product/product_code', '商品列表---生成产品二维码', 1, '10', '', 1, 2, 29, 255),
(37, 'back/product/productSaveCode', '商品列表---保存产品二维码', 1, '10', '', 1, 2, 29, 255),
(38, 'back/auth/role', '角色列表', 1, '10', '', 1, 1, 21, 255),
(39, 'back/auth/auth', '权限列表', 1, '10', '', 1, 1, 21, 255),
(40, 'back/auth/admin', '管理员列表', 1, '10', '', 1, 1, 21, 255),
(41, 'back/auth/roleadd', '角色列表---添加', 1, '10', '', 1, 2, 38, 255),
(42, 'back/auth/roleSave', '角色列表---添加保存', 1, '10', '', 1, 2, 38, 255),
(43, 'back/auth/roleedit', '角色列表---编辑', 1, '10', '', 1, 2, 38, 255),
(44, 'back/auth/roleEditSave', '角色列表---编辑保存', 1, '10', '', 1, 2, 38, 255),
(45, 'back/auth/roledel', '角色列表---删除', 1, '10', '', 1, 2, 38, 255),
(46, 'back/auth/auth_add', '权限列表---添加', 1, '10', '', 1, 2, 39, 255),
(47, 'back/auth/auth_addSave', '权限列表---添加保存', 1, '10', '', 1, 2, 39, 255),
(48, 'back/auth/auth_eidt', '权限列表---编辑', 1, '10', '', 1, 2, 39, 255),
(49, 'back/auth/auth_editSave', '权限列表---编辑保存', 1, '10', '', 1, 2, 39, 255),
(50, 'back/auth/auth_del', '权限列表---删除', 1, '10', '', 1, 2, 39, 255),
(51, 'back/auth/admin_add', '管理员列表---添加', 1, '10', '', 1, 2, 40, 255),
(52, 'back/auth/admin_save', '管理员列表---添加保存', 1, '10', '', 1, 2, 40, 255),
(53, 'back/auth/admin_eidt', '管理员列表---编辑', 1, '10', '', 1, 2, 40, 255),
(54, 'back/auth/adminSave', '管理员列表---编辑保存', 1, '10', '', 1, 2, 40, 255),
(55, 'back/auth/admin_del', '管理员列表---删除', 1, '10', '', 1, 2, 40, 255),
(57, 'back/news', '资讯管理', 1, '10', '', 1, 0, 0, 255),
(58, 'back/news/news', '文章管理', 1, '10', '', 1, 1, 57, 255),
(59, 'back/news/news_class', '文章分类', 1, '10', '', 1, 1, 57, 255),
(60, 'back/news/news_add', '文章管理---添加', 1, '10', '', 1, 2, 58, 255),
(61, 'back/news/news_save', '文章管理---保存添加', 1, '10', '', 1, 2, 58, 255),
(62, 'back/news/news_edit', '文章管理---编辑', 1, '10', '', 1, 2, 58, 255),
(63, 'back/news/news_editSave', '文章管理---保存编辑', 1, '10', '', 1, 2, 58, 255),
(64, 'back/news/news_del', '文章管理---删除', 1, '10', '', 1, 2, 58, 255),
(65, 'back/news/news_class_add', '文章分类---添加', 1, '10', '', 1, 2, 59, 255),
(66, 'back/news/news_classSave', '文章分类---保存添加', 1, '10', '', 1, 2, 59, 255),
(67, 'back/news/news_class_edit', '文章分类---编辑', 1, '10', '', 1, 2, 59, 255),
(68, 'back/news/news_class_editSave', '文章分类---保存编辑', 1, '10', '', 1, 2, 59, 255),
(69, 'back/news/del_news_class', '文章分类---删除', 1, '10', '', 1, 2, 59, 255),
(71, 'back/ad', '广告管理', 1, '10', '', 1, 0, 0, 255),
(72, 'back/ad/ad_position', '广告位置', 1, '10', '', 1, 1, 71, 255),
(73, 'back/ad/ad', '广告设置', 1, '10', '', 1, 1, 71, 255),
(74, 'back/ad/add_ad_position', '广告设置---添加', 1, '10', '', 1, 2, 73, 255),
(75, 'back/ad/edit_ad_position', '广告设置---编辑', 1, '10', '', 1, 2, 73, 255),
(76, 'back/ad/del_ad_position', '广告设置---删除', 1, '10', '', 1, 2, 73, 255),
(77, 'back/ad/add_ad', '广告位置---添加', 1, '10', '', 1, 2, 72, 255),
(78, 'back/ad/edit_ad', '广告位置---编辑', 1, '10', '', 1, 2, 72, 255),
(79, 'back/ad/del_ad', '广告位置---删除', 1, '10', '', 1, 2, 72, 255),
(80, 'back/system/links', '友情链接', 1, '10', '', 1, 1, 19, 255),
(81, 'back/system/add_link', '友情链接---添加', 1, '10', '', 1, 2, 80, 255),
(82, 'back/system/edit_link', '友情链接---编辑', 1, '10', '', 1, 2, 80, 255),
(83, 'back/system/del_link', '友情链接---删除', 1, '10', '', 1, 2, 80, 255),
(84, 'back/system/link_class', '链接分类', 1, '10', '', 1, 2, 80, 255),
(85, 'back/system/add_link_class', '链接分类---添加', 1, '10', '', 1, 2, 80, 255),
(86, 'back/system/edit_link_class', '链接分类---编辑', 1, '10', '', 1, 2, 80, 255),
(87, 'back/system/del_link_class', '链接分类---删除', 1, '10', '', 1, 2, 80, 255),
(88, 'back/news/leader', '领导列表', 1, '10', '', 1, 1, 57, 255),
(89, 'back/news/leader_add', '领导列表---添加', 1, '10', '', 1, 2, 88, 255),
(90, 'back/news/edit_leader', '领导列表---编辑', 1, '10', '', 1, 2, 88, 255),
(91, 'back/news/del_leader', '领导列表---删除', 1, '10', '', 1, 2, 88, 255),
(92, 'back/news/lead', '领导职务列表', 1, '10', '', 1, 2, 57, 255),
(93, 'back/news/lead_job_add', '领导职务列表---添加', 1, '10', '', 1, 2, 92, 255),
(94, 'back/news/edit_leader_job', '领导职务列表---编辑', 1, '10', '', 1, 2, 92, 255),
(95, 'back/news/del_leader_job', '领导职务列表---删除', 1, '10', '', 1, 2, 92, 255),
(96, 'back/news/news_recycle', '回收站', 1, '10', '', 1, 1, 57, 255),
(97, 'back/news/news_restore', '回收站--恢复还原', 1, '10', '', 1, 2, 96, 255),
(98, 'back/system/sql_copy', '数据备份', 1, '20', '', 1, 1, 19, 255),
(99, 'back/system/sql_read', '数据备份列表', 1, '20', '', 1, 2, 98, 255),
(100, 'back/system/sql_reRead', '数据备份列表---恢复备份', 1, '20', '', 1, 2, 98, 255),
(101, 'back/product/product_type', '商品属性', 1, '20', '', 1, 1, 20, 255),
(102, 'back/product/product_recycle', '商品回收站', 1, '10', '', 1, 1, 20, 255);

-- --------------------------------------------------------

--
-- 表的结构 `think_auth_user`
--

CREATE TABLE `think_auth_user` (
  `id` int(11) NOT NULL,
  `dt_id` int(11) DEFAULT '0' COMMENT '部门id',
  `username` varchar(30) DEFAULT NULL COMMENT '用户名',
  `password` varchar(32) DEFAULT NULL COMMENT '密码',
  `addtime` varchar(10) NOT NULL COMMENT '添加时间',
  `age` tinyint(2) DEFAULT NULL COMMENT '年龄',
  `mobile` varchar(11) DEFAULT '' COMMENT '联系方式',
  `sex` varchar(255) DEFAULT '' COMMENT '性别',
  `login_num` int(11) DEFAULT '0' COMMENT '登陆次数',
  `last_login_time` int(10) DEFAULT '0' COMMENT '上次登录时间',
  `state` tinyint(1) DEFAULT '0' COMMENT '用户状态( 0 正常，1 禁用）',
  `email` varchar(255) DEFAULT NULL COMMENT '邮箱',
  `content` text COMMENT '备注',
  `is_delete` enum('0','1') DEFAULT NULL COMMENT '删除(0未删除，1已删除)',
  `true_name` varchar(255) DEFAULT NULL COMMENT '真是姓名'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='用户表';

--
-- 转存表中的数据 `think_auth_user`
--

INSERT INTO `think_auth_user` (`id`, `dt_id`, `username`, `password`, `addtime`, `age`, `mobile`, `sex`, `login_num`, `last_login_time`, `state`, `email`, `content`, `is_delete`, `true_name`) VALUES
(65, 0, 'admin254', 'e10adc3949ba59abbe56e057f20f883e', '1534079918', NULL, '15236268524', '', 0, 0, 0, '18478478@qq.com', NULL, '1', '陈中124'),
(64, 0, 'admin254', 'e10adc3949ba59abbe56e057f20f883e', '1534079902', NULL, '15236268524', '', 0, 0, 0, '18478478@qq.com', NULL, '1', '陈中124'),
(63, 0, 'admin254', 'e10adc3949ba59abbe56e057f20f883e', '1534079881', NULL, '15236268524', '', 0, 0, 0, '18478478@qq.com', NULL, '1', '陈中124'),
(62, 0, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1534079137', NULL, '17335728097', '', 3, 0, 0, '18478478@qq.com', NULL, '0', '陈中1'),
(61, 0, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1508124607', 0, '15236268527', '', 59, 0, 0, '123456@qq.com', '', '1', '陈中'),
(66, 0, 'admin254', '25f9e794323b453885f5181f1b624d0b', '1534079943', NULL, '15236268524', '', 0, 0, 0, '18478478@qq.com', NULL, '1', '陈中124');

-- --------------------------------------------------------

--
-- 表的结构 `think_brand`
--

CREATE TABLE `think_brand` (
  `brand_id` int(11) NOT NULL COMMENT '主键',
  `brand_name` varchar(60) NOT NULL DEFAULT '' COMMENT '商品名称',
  `brand_order` int(11) NOT NULL DEFAULT '255' COMMENT '品牌排序',
  `brand_logo` varchar(255) DEFAULT NULL COMMENT '品牌Logo',
  `column_id` int(11) DEFAULT NULL COMMENT '商品分类ID',
  `brand_open` enum('10','20') NOT NULL DEFAULT '10' COMMENT '品牌状态(10:开启，20：关闭);',
  `brand_url` varchar(255) DEFAULT NULL COMMENT '品牌url',
  `brand_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '添加时间'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='商品品牌表';

--
-- 转存表中的数据 `think_brand`
--

INSERT INTO `think_brand` (`brand_id`, `brand_name`, `brand_order`, `brand_logo`, `column_id`, `brand_open`, `brand_url`, `brand_time`) VALUES
(3, '万门卡', 50, NULL, 23, '10', '', '2018-01-01 16:19:22');

-- --------------------------------------------------------

--
-- 表的结构 `think_column`
--

CREATE TABLE `think_column` (
  `c_id` int(20) UNSIGNED NOT NULL,
  `column_name` varchar(36) NOT NULL,
  `column_enname` varchar(50) NOT NULL COMMENT '英文标题',
  `column_type` enum('10','20','30','40','50') NOT NULL DEFAULT '10' COMMENT '栏目类别(10频道页面20不发布文章，跳转页面30文章列表作为发布栏目40单页面企业简介50其他)',
  `column_pid` tinyint(3) NOT NULL DEFAULT '0' COMMENT '栏目父ID',
  `column_order` int(7) NOT NULL DEFAULT '255' COMMENT '排序',
  `column_title` varchar(36) NOT NULL DEFAULT '' COMMENT '栏目SEO标题',
  `column_key` varchar(200) NOT NULL DEFAULT '' COMMENT '栏目SEO关键字',
  `column_des` varchar(200) NOT NULL DEFAULT '' COMMENT '栏目SEO描述',
  `column_content` longtext NOT NULL COMMENT '栏目简介',
  `column_img` varchar(255) NOT NULL DEFAULT '' COMMENT '栏目主图',
  `column_keshi` varchar(32) DEFAULT NULL COMMENT '课程课时',
  `column_money` float(6,2) DEFAULT NULL COMMENT '课程收费',
  `column_opentime` varchar(32) DEFAULT NULL COMMENT '开课时间',
  `column_show` enum('10','20') NOT NULL DEFAULT '10' COMMENT '首页导航显示(10隐藏，20显示)',
  `column_controller` varchar(255) DEFAULT '' COMMENT '控制器标签',
  `column_outlink` varchar(255) DEFAULT NULL COMMENT '栏目外链接',
  `column_open` enum('10','20') NOT NULL DEFAULT '20' COMMENT '10：开启；20：关闭'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='栏目表';

--
-- 转存表中的数据 `think_column`
--

INSERT INTO `think_column` (`c_id`, `column_name`, `column_enname`, `column_type`, `column_pid`, `column_order`, `column_title`, `column_key`, `column_des`, `column_content`, `column_img`, `column_keshi`, `column_money`, `column_opentime`, `column_show`, `column_controller`, `column_outlink`, `column_open`) VALUES
(16, '省内名企', '', '30', 20, 1, '', '', '', '', '', NULL, NULL, NULL, '20', '', '', '20'),
(17, '省外名企', '', '30', 20, 2, '', '', '', '', '', NULL, NULL, NULL, '20', '', '', '20'),
(18, '其他行业', '', '30', 20, 3, '', '', '', '', '', NULL, NULL, NULL, '20', '', '', '20'),
(19, '兼职', '', '30', 20, 4, '', '', '', '', '', NULL, NULL, NULL, '20', '', '', '20'),
(20, '招聘职位', '', '10', 0, 0, '', '', '', '', '', NULL, NULL, NULL, '20', '', '', '20'),
(21, '关于我们', 'about', '40', 0, 6, '', '', '', '', '', NULL, NULL, NULL, '20', '', '', '20'),
(22, '分公司', '', '30', 0, 7, '', '', '', '', '', NULL, NULL, NULL, '20', '', '', '20'),
(23, '郑州富士康', '', '30', 22, 0, '', '', '', '', '', NULL, NULL, NULL, '20', '', '', '20'),
(24, '苏州富士康', '', '30', 22, 0, '', '', '', '', '', NULL, NULL, NULL, '20', '', '', '20');

-- --------------------------------------------------------

--
-- 表的结构 `think_comment`
--

CREATE TABLE `think_comment` (
  `id` int(11) NOT NULL COMMENT '主键ID',
  `comment_content` varchar(255) DEFAULT NULL COMMENT '评论内容',
  `comment_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '评论时间',
  `comment_mid` int(11) DEFAULT NULL COMMENT '会员ID',
  `comment_answer` varchar(255) DEFAULT NULL COMMENT '回复',
  `comment_membername` varchar(255) DEFAULT NULL COMMENT '会员名称'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='会员评论表';

-- --------------------------------------------------------

--
-- 表的结构 `think_config`
--

CREATE TABLE `think_config` (
  `id` int(11) NOT NULL COMMENT '主键',
  `web_name` varchar(255) DEFAULT NULL COMMENT '网站名称',
  `web_logo` varchar(255) DEFAULT NULL COMMENT '网站Lgo',
  `wap_logo` varchar(255) DEFAULT NULL COMMENT '手机Logo',
  `member_center_logo` varchar(255) DEFAULT NULL COMMENT '会员中心Logo',
  `wx_logo` varchar(255) DEFAULT NULL COMMENT '微信二维码',
  `web_icp` varchar(70) DEFAULT NULL COMMENT 'ICP证号',
  `web_tel` varchar(20) DEFAULT NULL COMMENT '客服电话',
  `web_email` varchar(255) DEFAULT NULL COMMENT '来信请寄',
  `web_footer` text COMMENT '底部版权信息',
  `web_status` tinyint(3) DEFAULT NULL COMMENT '网站状态',
  `web_keywords` varchar(255) DEFAULT NULL COMMENT '网站关键字',
  `web_desc` varchar(255) DEFAULT NULL COMMENT '网站描述',
  `web_census` varchar(255) DEFAULT NULL COMMENT '统计代码',
  `web_APPID` varchar(255) DEFAULT NULL COMMENT '微信APPID',
  `web_APPSECKET` varchar(255) DEFAULT NULL COMMENT '微信SECKET',
  `web_APPLYID` varchar(255) DEFAULT NULL COMMENT '支付宝id',
  `web_APPLYSECKET` varchar(255) DEFAULT NULL COMMENT '支付宝secket',
  `web_APPKEY` varchar(255) DEFAULT NULL COMMENT '微信支付密钥',
  `web_MECHID` varchar(255) DEFAULT NULL COMMENT '微信商户id（支付）',
  `web_visit` varchar(255) DEFAULT NULL COMMENT '来访地址',
  `web_zip_code` varchar(255) DEFAULT NULL COMMENT '邮编',
  `web_hot_line` varchar(255) DEFAULT NULL COMMENT '举报电话',
  `web_address` varchar(255) DEFAULT NULL COMMENT '联系地址',
  `auth_open` enum('0','1') NOT NULL DEFAULT '0' COMMENT '权限模式(0=关闭，1=开启)',
  `web_email_server` varchar(255) DEFAULT NULL COMMENT 'STMP邮件服务',
  `web_email_user` varchar(255) DEFAULT NULL COMMENT '发送邮箱账号',
  `web_email_pass` varchar(255) DEFAULT NULL COMMENT '发送邮箱密码',
  `web_email_port` varchar(255) DEFAULT NULL COMMENT '发送邮件端口',
  `web_smg_apikey` varchar(255) DEFAULT NULL COMMENT '短信平台apikey',
  `web_smg_trader` varchar(255) DEFAULT NULL COMMENT '短信平台运营商',
  `web_title` varchar(255) DEFAULT NULL COMMENT 'SEO标题',
  `web_technology` varchar(255) DEFAULT NULL COMMENT '技术支持',
  `web_tech_url` varchar(255) DEFAULT NULL COMMENT '技术支持跳转链接',
  `web_url` varchar(255) DEFAULT NULL COMMENT '站点url',
  `web_wx_name` varchar(255) DEFAULT NULL COMMENT '微信公众号名称',
  `web_wz_admin_verify` enum('10','20') NOT NULL DEFAULT '10' COMMENT '后台验证码',
  `web_wz_index_verify` enum('10','20') NOT NULL DEFAULT '10' COMMENT '前台验证码(10=关闭，20=开启)',
  `web_deposit` int(11) NOT NULL DEFAULT '0' COMMENT '提现比例',
  `web_shopping_return_rebate` int(11) NOT NULL DEFAULT '0' COMMENT '购物返点比例',
  `web_register_return_rebate` int(11) NOT NULL DEFAULT '0' COMMENT '注册返点比例',
  `web_recommend_first_rebate` int(11) NOT NULL DEFAULT '0' COMMENT '一级推荐返点比例',
  `web_recommend_second_rebate` int(11) NOT NULL DEFAULT '0' COMMENT '一级推荐返点比例',
  `web_recommend_three_rebate` int(3) NOT NULL DEFAULT '0' COMMENT '三级推荐返点比例',
  `web_shop_pay_open` enum('10','20') NOT NULL DEFAULT '20' COMMENT '10：关闭；20：开启',
  `web_shop_pay_rebate` float(3,2) DEFAULT NULL COMMENT '商城币支付比例',
  `web_learn_pay_open` enum('10','20') NOT NULL DEFAULT '20' COMMENT '10：关闭；20：开启',
  `web_learn_pay_rebate` float(3,2) DEFAULT NULL COMMENT '学习比支付比例',
  `web_point_pay_open` enum('10','20') NOT NULL DEFAULT '20' COMMENT '10：关闭；20：开启',
  `web_point_pay_rebate` float(3,2) DEFAULT NULL COMMENT '积分支付比例',
  `web_qq` varchar(255) DEFAULT NULL COMMENT '网站QQ',
  `web_phone` varchar(255) DEFAULT NULL COMMENT '网站phone',
  `web_wx_logo` varchar(255) DEFAULT NULL COMMENT '微信公众号二维码'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='站点配置';

--
-- 转存表中的数据 `think_config`
--

INSERT INTO `think_config` (`id`, `web_name`, `web_logo`, `wap_logo`, `member_center_logo`, `wx_logo`, `web_icp`, `web_tel`, `web_email`, `web_footer`, `web_status`, `web_keywords`, `web_desc`, `web_census`, `web_APPID`, `web_APPSECKET`, `web_APPLYID`, `web_APPLYSECKET`, `web_APPKEY`, `web_MECHID`, `web_visit`, `web_zip_code`, `web_hot_line`, `web_address`, `auth_open`, `web_email_server`, `web_email_user`, `web_email_pass`, `web_email_port`, `web_smg_apikey`, `web_smg_trader`, `web_title`, `web_technology`, `web_tech_url`, `web_url`, `web_wx_name`, `web_wz_admin_verify`, `web_wz_index_verify`, `web_deposit`, `web_shopping_return_rebate`, `web_register_return_rebate`, `web_recommend_first_rebate`, `web_recommend_second_rebate`, `web_recommend_three_rebate`, `web_shop_pay_open`, `web_shop_pay_rebate`, `web_learn_pay_open`, `web_learn_pay_rebate`, `web_point_pay_open`, `web_point_pay_rebate`, `web_qq`, `web_phone`, `web_wx_logo`) VALUES
(1, '某理发店', 'uploads/20180510/a05cd64851bba581718aadb2d90fb9d4.png', '', '', '', '', '0371-55668899', '499211940@qq.com', '某理发店', 0, '某理发店', '某理发店', '', 'wx1c579abc97861f8d', '8cf60e3328d1e5f9761c6e7954f8e4c2', '', '', '', '1491969102', '郾城区委综合楼301室', '462300', '', '某理发店', '0', 'smtp.163.com', 'chzhlovelsj@163.com', 'chenlovelsj1314', '25325', '7f55c34438e9ef8ce328b454cfb793af', '云片网', '某理发店', '河南一百度集团', 'http://www.yibaidu.cn', '', '天天向上', '10', '20', 1, 0, 50, 20, 20, 10, '10', 9.99, '10', 1.00, '10', 1.00, '', '', 'uploads/20180521/f89cd5d631183b8192c695fe486f8014.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `think_coupon`
--

CREATE TABLE `think_coupon` (
  `coupon_id` int(11) NOT NULL COMMENT '主键',
  `coupon_name` varchar(255) DEFAULT NULL COMMENT '优惠券活动名称',
  `coupon_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '添加时间',
  `coupon_start_time` varchar(255) DEFAULT '' COMMENT '活动开始时间',
  `coupon_end_time` varchar(255) DEFAULT NULL COMMENT '活动结束时间',
  `coupon_full` varchar(255) DEFAULT NULL COMMENT '满多少使用',
  `coupon_count` int(11) NOT NULL DEFAULT '1' COMMENT '每人最大领取数量',
  `coupon_open` enum('10','20') NOT NULL DEFAULT '20' COMMENT '10关闭20开启',
  `coupon_number` int(11) DEFAULT NULL COMMENT '优惠券数量',
  `coupon_account` varchar(255) DEFAULT NULL COMMENT '优惠券面额',
  `coupon_logo` varchar(255) DEFAULT NULL COMMENT '优惠券图片',
  `coupon_width` varchar(255) DEFAULT NULL COMMENT '优惠券长度',
  `coupon_height` varchar(255) DEFAULT NULL COMMENT '优惠券宽度'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='优惠券';

--
-- 转存表中的数据 `think_coupon`
--

INSERT INTO `think_coupon` (`coupon_id`, `coupon_name`, `coupon_time`, `coupon_start_time`, `coupon_end_time`, `coupon_full`, `coupon_count`, `coupon_open`, `coupon_number`, `coupon_account`, `coupon_logo`, `coupon_width`, `coupon_height`) VALUES
(4, '10元优惠券', '2017-12-20 14:04:17', '2017-12-21 00:00:00', '2017-12-21 00:00:00', '200', 1, '20', 200, '10', 'uploads/20171221/fe9472c0b4bb4ca8463c1449ee631181.jpg', '100px', '50px');

-- --------------------------------------------------------

--
-- 表的结构 `think_department`
--

CREATE TABLE `think_department` (
  `dt_id` int(11) NOT NULL COMMENT '部门ID',
  `dt_name` varchar(50) NOT NULL COMMENT '部门名称'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='部门';

-- --------------------------------------------------------

--
-- 表的结构 `think_discount`
--

CREATE TABLE `think_discount` (
  `discount_id` int(11) NOT NULL,
  `discount_name` varchar(255) NOT NULL DEFAULT '' COMMENT '显示折扣活动名称',
  `discount_start_time` varchar(255) DEFAULT NULL COMMENT '活动开始时间',
  `discount_end_time` varchar(255) DEFAULT NULL COMMENT '活动结束时间',
  `discount_open` enum('10','20') NOT NULL DEFAULT '20' COMMENT '10关闭，20开启',
  `discount_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '添加活动时间',
  `discount_rebate` varchar(255) DEFAULT NULL COMMENT '折扣'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='限时折扣表';

--
-- 转存表中的数据 `think_discount`
--

INSERT INTO `think_discount` (`discount_id`, `discount_name`, `discount_start_time`, `discount_end_time`, `discount_open`, `discount_time`, `discount_rebate`) VALUES
(4, '双十一一律八折', '2017-12-22 00:00:00', '2018-01-01 00:00:00', '20', '2017-12-21 06:52:24', '0.8'),
(5, '年底大清仓，甩卖五折优惠', '2017-12-21 00:00:00', '2017-12-31 00:00:00', '20', '2017-12-21 06:54:11', '0.5');

-- --------------------------------------------------------

--
-- 表的结构 `think_full_cut`
--

CREATE TABLE `think_full_cut` (
  `cut_id` int(11) NOT NULL COMMENT '主键',
  `cut_name` varchar(255) DEFAULT NULL COMMENT '满减送',
  `cut_start_time` varchar(255) DEFAULT NULL COMMENT '满减送活动开始时间',
  `cut_end_time` varchar(255) DEFAULT NULL COMMENT '满减送结束时间',
  `cut_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '添加活动时间',
  `cut_open` enum('10','20') NOT NULL DEFAULT '20' COMMENT '10关闭，20开启',
  `cut_pic` varchar(255) DEFAULT NULL COMMENT '活动图片',
  `cut_full_account` int(11) DEFAULT NULL COMMENT '满多少',
  `cut_full_cut_account` int(11) DEFAULT NULL COMMENT '满减额度',
  `cut_logo` varchar(255) DEFAULT NULL COMMENT '活动图片'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='满减送';

--
-- 转存表中的数据 `think_full_cut`
--

INSERT INTO `think_full_cut` (`cut_id`, `cut_name`, `cut_start_time`, `cut_end_time`, `cut_time`, `cut_open`, `cut_pic`, `cut_full_account`, `cut_full_cut_account`, `cut_logo`) VALUES
(7, '满100减10', '2017-12-24 00:00:00', '2017-12-27 00:00:00', '2017-12-23 17:25:52', '20', NULL, 100, 10, 'uploads/20171224/8c1b22b6a493f64d96557152b11a1d70.png');

-- --------------------------------------------------------

--
-- 表的结构 `think_full_shipping`
--

CREATE TABLE `think_full_shipping` (
  `full_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL DEFAULT '' COMMENT '活动名称',
  `full_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '发布活动时间',
  `full_total` float(10,2) NOT NULL DEFAULT '0.00' COMMENT '满额所需金额',
  `full_open` enum('10','20') NOT NULL DEFAULT '20' COMMENT '开启关闭(10关闭，20开启)',
  `full_address` longtext COMMENT '不包邮地区',
  `full_start_time` varchar(255) DEFAULT NULL COMMENT '活动开始时间',
  `full_end_time` varchar(255) DEFAULT NULL COMMENT '活动结束时间'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='满额包邮';

--
-- 转存表中的数据 `think_full_shipping`
--

INSERT INTO `think_full_shipping` (`full_id`, `full_name`, `full_time`, `full_total`, `full_open`, `full_address`, `full_start_time`, `full_end_time`) VALUES
(4, '慢200见10', '2017-12-25 15:38:27', 200.00, '20', '100', '2017-12-26 00:00:00', '2018-01-08 00:00:00'),
(5, '慢200见10', '2017-12-25 15:38:39', 200.00, '10', '100', '2017-12-27 00:00:00', '2018-01-16 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `think_goods_cart`
--

CREATE TABLE `think_goods_cart` (
  `cart_id` int(11) NOT NULL COMMENT '购物车主键ID',
  `member_id` int(11) NOT NULL DEFAULT '0' COMMENT '会员ID',
  `goods_id` int(11) NOT NULL DEFAULT '0' COMMENT '商品ID',
  `goods_name` varchar(255) NOT NULL DEFAULT '' COMMENT '商品名称',
  `goods_num` int(11) NOT NULL DEFAULT '1' COMMENT '商品数量(默认数量为1)',
  `cart_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '添加到购物车时间',
  `goods_img` varchar(255) DEFAULT NULL COMMENT '产品图',
  `goods_price` float(10,2) DEFAULT NULL COMMENT '产品价格',
  `goods_total` float(10,2) DEFAULT NULL COMMENT '产品总价'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='购物车';

--
-- 转存表中的数据 `think_goods_cart`
--

INSERT INTO `think_goods_cart` (`cart_id`, `member_id`, `goods_id`, `goods_name`, `goods_num`, `cart_time`, `goods_img`, `goods_price`, `goods_total`) VALUES
(3, 10, 11, '粤菜', 3, '2017-12-20 01:43:33', 'uploads/20171213/8234c136690374e6b5dcb9d77a8d9480.jpg', 500.00, 1000.00);

-- --------------------------------------------------------

--
-- 表的结构 `think_goods_evaluation`
--

CREATE TABLE `think_goods_evaluation` (
  `e_id` int(11) NOT NULL,
  `e_content` longtext COMMENT '评价内容',
  `e_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '评价时间',
  `m_id` int(11) NOT NULL DEFAULT '0' COMMENT '评价会员ID',
  `e_name` varchar(255) DEFAULT NULL COMMENT '评价会员名称',
  `e_gid` int(11) NOT NULL DEFAULT '0' COMMENT '评价商品ID',
  `e_gname` varchar(255) DEFAULT NULL COMMENT '评价商品名称',
  `e_pid` int(11) NOT NULL DEFAULT '0' COMMENT '评价父ID',
  `e_backName` varchar(255) DEFAULT NULL COMMENT '回复者名称'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='评价';

-- --------------------------------------------------------

--
-- 表的结构 `think_goods_order`
--

CREATE TABLE `think_goods_order` (
  `goods_o_id` int(11) NOT NULL COMMENT '订单ID',
  `goods_order_sn` varchar(255) NOT NULL DEFAULT '' COMMENT '子订单编号',
  `member_id` int(11) NOT NULL DEFAULT '0' COMMENT '会员ID',
  `member_name` varchar(255) DEFAULT NULL COMMENT '会员名',
  `goods_id` int(11) NOT NULL DEFAULT '0' COMMENT '商品ID',
  `goods_order_price` float(10,2) NOT NULL DEFAULT '0.00' COMMENT '商品价格',
  `goods_order_num` int(11) NOT NULL DEFAULT '1' COMMENT '订单商品数量',
  `goods_order_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '下订单时间',
  `goods_order_status` enum('10','20','30','40','50') NOT NULL DEFAULT '10' COMMENT '订单状态(10:待付款;20:已付款待发货;30:已发货;40:已收货；50:已完成;60:已关闭;70:退款中)',
  `goods_order_pay_time` varchar(255) DEFAULT '' COMMENT '订单支付时间',
  `goods_order_total` float(10,2) NOT NULL DEFAULT '0.00' COMMENT '订单商品总价',
  `goods_order_freight` float(4,2) DEFAULT NULL COMMENT '商品运费',
  `goods_order_delivery_time` varchar(32) DEFAULT NULL COMMENT '发货时间',
  `goods_main_order_sn` varchar(32) DEFAULT NULL COMMENT '主订单编号',
  `address_info` varchar(255) DEFAULT NULL COMMENT '收获地址',
  `address_name` varchar(32) DEFAULT NULL COMMENT '收货人',
  `address_phone` varchar(15) DEFAULT NULL COMMENT '收货人联系电话'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='商品订单';

--
-- 转存表中的数据 `think_goods_order`
--

INSERT INTO `think_goods_order` (`goods_o_id`, `goods_order_sn`, `member_id`, `member_name`, `goods_id`, `goods_order_price`, `goods_order_num`, `goods_order_time`, `goods_order_status`, `goods_order_pay_time`, `goods_order_total`, `goods_order_freight`, `goods_order_delivery_time`, `goods_main_order_sn`, `address_info`, `address_name`, `address_phone`) VALUES
(2, '20171222171952ofun6n', 10, '陈中', 61, 99.00, 1, '2017-12-22 09:19:52', '10', '', 99.00, 10.00, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `think_leader`
--

CREATE TABLE `think_leader` (
  `id` int(11) NOT NULL COMMENT '主键',
  `leader_name` varchar(32) DEFAULT NULL COMMENT '领导姓名',
  `leader_jobid` int(11) DEFAULT NULL COMMENT '领导职务id',
  `leader_desc` text COMMENT '领导描述',
  `leader_keywords` text COMMENT '领导摘要',
  `leader_content` longtext COMMENT '领导职务内容',
  `leader_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '创建时间',
  `leader_logo` varchar(255) DEFAULT NULL COMMENT '领导LOGO',
  `leader_order` int(11) NOT NULL DEFAULT '255' COMMENT '排序'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='领导者';

--
-- 转存表中的数据 `think_leader`
--

INSERT INTO `think_leader` (`id`, `leader_name`, `leader_jobid`, `leader_desc`, `leader_keywords`, `leader_content`, `leader_time`, `leader_logo`, `leader_order`) VALUES
(10, '董晓凤', 8, '', '												\r\n												', '', '2017-08-14 11:05:45', 'uploads/20170814/c41263a30fa2b23b50b6375dd86b8b6a.jpg', 255),
(11, '马建良', 9, '', '				\r\n				', '', '2017-08-07 07:32:20', 'uploads/20170807/7b1e7d1251cc13bd1346a32ee8ba0316.jpg', 255),
(12, ' 魏志刚', 9, '', '				\r\n				', '', '2017-08-07 07:32:57', 'uploads/20170807/816945677784f5fb895b87ea546bb691.jpg', 255),
(14, '张江华', 10, '', '				\r\n				', '', '2017-08-08 03:24:54', 'uploads/20170808/cf132bb46825c0c881c0fd596342120c.jpg', 255),
(15, '赵鹏钦', 10, '', '				\r\n				', '', '2017-08-08 03:25:19', 'uploads/20170808/7c5cab314c03ed8f2433beec4ef577af.jpg', 255),
(16, '胡德民', 10, '', '				\r\n				', '', '2017-08-08 03:26:12', 'uploads/20170808/d4d6bfac79f8abe070fa9b7179f2c6c9.jpg', 255),
(17, '吕世敏', 10, '', '				\r\n				', '', '2017-08-08 03:26:45', 'uploads/20170808/993700945ffcc8810c3dd03c7dd567f7.jpg', 255),
(18, '马建良 ', 11, '', '												\r\n												', '', '2017-08-08 03:43:23', '', 255),
(19, '卢彩华（女）', 11, '', '				\r\n				', '', '2017-08-08 03:43:55', '', 255),
(20, '吕世敏（女）', 11, '', '				\r\n				', '', '2017-08-08 03:44:28', '', 255),
(21, '刘拥军', 11, '', '				\r\n				', '', '2017-08-08 03:46:18', '', 255),
(22, '安红章', 11, '', '				\r\n				', '', '2017-08-08 03:46:38', '', 255),
(23, '李晔', 11, '', '				\r\n				', '', '2017-08-08 03:47:01', '', 255),
(24, '李晓勇', 11, '', '				\r\n				', '', '2017-08-08 03:47:23', '', 255),
(25, '何国军', 11, '', '				\r\n				', '', '2017-08-08 03:47:39', '', 255),
(26, '张广民', 11, '', '				\r\n				', '', '2017-08-08 03:47:52', '', 255),
(27, '张存喜', 11, '', '				\r\n				', '', '2017-08-08 03:48:27', '', 255),
(28, '张江华', 11, '', '				\r\n				', '', '2017-08-08 03:48:43', '', 255),
(29, '陈丽娜（女）', 11, '', '				\r\n				', '', '2017-08-08 03:49:05', '', 255),
(30, '陈丽娜（女）', 11, '', '				\r\n				', '', '2017-08-08 03:49:22', '', 255),
(31, '赵鹏钦 ', 11, '', '				\r\n				', '', '2017-08-08 03:49:39', '', 255),
(32, '胡德民', 11, '', '				\r\n				', '', '2017-08-08 03:49:59', '', 255),
(33, '高鑫', 11, '', '				\r\n				', '', '2017-08-08 03:50:16', '', 255),
(34, '曹海峰', 11, '', '				\r\n				', '', '2017-08-08 03:50:28', '', 255),
(35, '董晓凤（女）', 11, '', '				\r\n				', '', '2017-08-08 03:50:49', '', 255),
(36, '蔡卫伟', 11, '', '				\r\n				', '', '2017-08-08 03:51:04', '', 255),
(37, '蔡贵立', 11, '', '				\r\n				', '', '2017-08-08 03:51:18', '', 255),
(38, '魏志刚', 11, '', '				\r\n				', '', '2017-08-08 03:51:33', '', 255);

-- --------------------------------------------------------

--
-- 表的结构 `think_leader_job`
--

CREATE TABLE `think_leader_job` (
  `leader_job_id` int(11) NOT NULL COMMENT '主键',
  `leader_job_name` varchar(32) DEFAULT NULL COMMENT '职务名称',
  `leader_job_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '时间',
  `leader_job_order` int(11) NOT NULL DEFAULT '255' COMMENT '职务排序',
  `leader_job_pid` int(11) NOT NULL DEFAULT '0' COMMENT '父职务'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='领导职务';

--
-- 转存表中的数据 `think_leader_job`
--

INSERT INTO `think_leader_job` (`leader_job_id`, `leader_job_name`, `leader_job_time`, `leader_job_order`, `leader_job_pid`) VALUES
(8, '书记', '2017-08-14 10:18:22', 3, 12),
(9, '副书记', '2017-08-14 10:18:18', 4, 12),
(10, '常务委员会委员', '2017-08-14 10:18:17', 5, 12),
(11, '委员（按姓氏笔画排序）', '2017-08-14 10:18:16', 8, 12),
(12, '中国共产党漯河市郾城区第四届纪律检查委员会', '2017-08-14 10:07:04', 1, 0),
(13, '漯河市郾城区监察局', '2017-08-14 10:07:23', 2, 0),
(14, '局长', '2017-08-14 10:21:39', 1, 13),
(15, '副局长', '2017-08-14 10:21:57', 2, 13);

-- --------------------------------------------------------

--
-- 表的结构 `think_link`
--

CREATE TABLE `think_link` (
  `link_id` int(11) NOT NULL COMMENT '主键',
  `link_name` varchar(255) DEFAULT '' COMMENT '链接名称',
  `link_url` varchar(255) DEFAULT NULL COMMENT '链接地址',
  `link_classid` int(11) DEFAULT NULL COMMENT '链接类型',
  `link_time` int(10) DEFAULT NULL COMMENT '添加时间',
  `link_open` enum('10','20') NOT NULL DEFAULT '20' COMMENT '状态(0=禁止，1=正常)',
  `link_order` int(3) NOT NULL DEFAULT '255' COMMENT '排序',
  `link_blank` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='友情链接';

-- --------------------------------------------------------

--
-- 表的结构 `think_link_class`
--

CREATE TABLE `think_link_class` (
  `c_id` int(11) NOT NULL COMMENT '主键',
  `class_name` varchar(255) DEFAULT NULL COMMENT '链接类型名称',
  `class_pid` int(11) DEFAULT NULL COMMENT '链接类型父id',
  `class_time` int(10) DEFAULT NULL COMMENT '添加时间',
  `class_order` int(3) NOT NULL DEFAULT '255' COMMENT '排序',
  `class_status` enum('0','1') NOT NULL DEFAULT '0' COMMENT '状态(0禁止，1正常)'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='链接分类';

-- --------------------------------------------------------

--
-- 表的结构 `think_log`
--

CREATE TABLE `think_log` (
  `log_id` int(11) NOT NULL COMMENT '主键',
  `log_title` varchar(255) NOT NULL COMMENT '日志标题',
  `log_time` int(10) NOT NULL COMMENT '日志添加时间',
  `u_name` varchar(32) NOT NULL COMMENT '操作者',
  `uid` int(11) NOT NULL COMMENT '用户id',
  `log_state` enum('0','1') DEFAULT '0' COMMENT '日志状态(0正常显示，1删除)'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='日志表';

--
-- 转存表中的数据 `think_log`
--

INSERT INTO `think_log` (`log_id`, `log_title`, `log_time`, `u_name`, `uid`, `log_state`) VALUES
(1, 'admin登录系统后台成功', 1500609546, 'admin', 1, '1'),
(2, 'admin登录系统后台成功', 1500609636, 'admin', 1, '1'),
(3, 'admin删除日志成功', 1500609668, 'admin', 1, '1'),
(4, 'admin删除日志成功', 1500609673, 'admin', 1, '1'),
(5, 'admin删除日志成功', 1500609682, 'admin', 1, '1'),
(6, 'admin删除日志成功', 1500609739, 'admin', 1, '1'),
(7, 'admin删除日志成功', 1500609746, 'admin', 1, '0'),
(8, 'admin保存系统设置成功', 1500609766, 'admin', 1, '0'),
(9, 'admin新增产品产品001成功', 1500609818, 'admin', 1, '0'),
(10, 'admin删除产品成功', 1500609828, 'admin', 1, '0'),
(11, 'admin新增产品产品002成功', 1500609858, 'admin', 1, '0'),
(12, 'admin新增产品产品002成功', 1500609865, 'admin', 1, '0'),
(13, 'admin新增产品产品003成功', 1500609918, 'admin', 1, '0'),
(14, 'admin删除产品成功', 1500609975, 'admin', 1, '0'),
(15, 'admin删除产品成功', 1500609982, 'admin', 1, '0'),
(16, 'admin批量生成二维码成功', 1500610036, 'admin', 1, '0'),
(17, 'admin保存系统设置成功', 1500616413, 'admin', 1, '0'),
(18, 'admin保存系统设置成功', 1500616443, 'admin', 1, '0'),
(19, 'admin登录系统后台成功', 1500617380, 'admin', 1, '0'),
(20, 'admin下架产品成功', 1500617912, 'admin', 1, '0'),
(21, 'admin删除权限成功', 1500620200, 'admin', 1, '0'),
(22, 'admin登录系统后台成功', 1500627306, 'admin', 1, '0'),
(23, 'admin添加权限规则首页成功', 1500627787, 'admin', 1, '0'),
(24, 'admin添加权限规则系统管理成功', 1500630707, 'admin', 1, '0'),
(25, 'admin添加权限规则奖品管理成功', 1500630769, 'admin', 1, '0'),
(26, 'admin添加权限规则管理员管理成功', 1500630987, 'admin', 1, '0'),
(27, 'admin添加权限规则系统设置成功', 1500631113, 'admin', 1, '0'),
(28, 'admin编辑权限规则管理员管理成功', 1500631158, 'admin', 1, '0'),
(29, 'admin编辑权限规则系统管理成功', 1500631171, 'admin', 1, '0'),
(30, 'admin登录系统后台成功', 1500631440, 'admin', 1, '0'),
(31, 'admin保存系统设置成功', 1500631727, 'admin', 1, '0'),
(32, 'admin保存系统设置成功', 1500631741, 'admin', 1, '0'),
(33, 'admin登录系统后台成功', 1500684285, 'admin', 1, '0'),
(34, 'admin新增产品成功', 1500684401, 'admin', 1, '0'),
(35, 'admin编辑商品成功', 1500684421, 'admin', 1, '0'),
(36, 'admin编辑商品成功', 1500684601, 'admin', 1, '0'),
(37, 'admin新增产品成功', 1500684648, 'admin', 1, '0'),
(38, 'admin新增产品成功', 1500684660, 'admin', 1, '0'),
(39, 'admin删除产品成功', 1500684669, 'admin', 1, '0'),
(40, 'admin新增产品成功', 1500685170, 'admin', 1, '0'),
(41, 'admin编辑商品成功', 1500685194, 'admin', 1, '0'),
(42, 'admin编辑商品成功', 1500685300, 'admin', 1, '0'),
(43, 'admin上架产品成功', 1500687252, 'admin', 1, '0'),
(44, 'admin下架产品成功', 1500687364, 'admin', 1, '0'),
(45, 'admin上架产品成功', 1500687369, 'admin', 1, '0'),
(46, 'admin登录系统后台成功', 1500694665, 'admin', 1, '0'),
(47, 'admin登录系统后台成功', 1500703957, 'admin', 1, '0'),
(48, 'admin添加权限规则成功', 1500704183, 'admin', 1, '0'),
(49, 'admin添加权限规则成功', 1500704231, 'admin', 1, '0'),
(50, 'admin添加权限规则成功', 1500704407, 'admin', 1, '0'),
(51, 'admin添加权限规则成功', 1500704549, 'admin', 1, '0'),
(52, 'admin添加权限规则成功', 1500704608, 'admin', 1, '0'),
(53, 'admin添加权限规则成功', 1500704727, 'admin', 1, '0'),
(54, 'admin添加权限规则成功', 1500704825, 'admin', 1, '0'),
(55, 'admin添加权限规则成功', 1500704892, 'admin', 1, '0'),
(56, 'admin添加权限规则成功', 1500704989, 'admin', 1, '0'),
(57, 'admin添加权限规则成功', 1500705013, 'admin', 1, '0'),
(58, 'admin添加权限规则成功', 1500705110, 'admin', 1, '0'),
(59, 'admin添加权限规则成功', 1500705217, 'admin', 1, '0'),
(60, 'admin添加权限规则成功', 1500705264, 'admin', 1, '0'),
(61, 'admin编辑权限规则成功', 1500705302, 'admin', 1, '0'),
(62, 'admin添加权限规则成功', 1500705349, 'admin', 1, '0'),
(63, 'admin添加权限规则成功', 1500705390, 'admin', 1, '0'),
(64, 'admin添加权限规则成功', 1500705530, 'admin', 1, '0'),
(65, 'admin添加权限规则成功', 1500705575, 'admin', 1, '0'),
(66, 'admin添加权限规则成功', 1500705697, 'admin', 1, '0'),
(67, 'admin添加权限规则成功', 1500705775, 'admin', 1, '0'),
(68, 'admin添加权限规则成功', 1500705824, 'admin', 1, '0'),
(69, 'admin添加权限规则成功', 1500705872, 'admin', 1, '0'),
(70, 'admin编辑权限规则成功', 1500705917, 'admin', 1, '0'),
(71, 'admin添加权限规则成功', 1500705953, 'admin', 1, '0'),
(72, 'admin添加权限规则成功', 1500705984, 'admin', 1, '0'),
(73, 'admin添加权限规则成功', 1500706042, 'admin', 1, '0'),
(74, 'admin添加权限规则成功', 1500706100, 'admin', 1, '0'),
(75, 'admin添加权限规则成功', 1500706165, 'admin', 1, '0'),
(76, 'admin添加权限规则成功', 1500706191, 'admin', 1, '0'),
(77, 'admin添加权限规则成功', 1500706231, 'admin', 1, '0'),
(78, 'admin添加权限规则成功', 1500706468, 'admin', 1, '0'),
(79, 'admin添加权限规则成功', 1500706541, 'admin', 1, '0'),
(80, 'admin添加权限规则成功', 1500706570, 'admin', 1, '0'),
(81, 'admin添加权限规则成功', 1500706597, 'admin', 1, '0'),
(82, 'admin添加权限规则成功', 1500706634, 'admin', 1, '0'),
(83, 'admin编辑权限规则成功', 1500706652, 'admin', 1, '0'),
(84, 'admin删除权限成功', 1500709587, 'admin', 1, '0'),
(85, 'admin删除管理员成功', 1500709647, 'admin', 1, '0'),
(86, 'admin删除管理员成功', 1500709652, 'admin', 1, '0'),
(87, 'admin添加管理员成功', 1500710083, 'admin', 1, '0'),
(88, 'admin添加管理员成功', 1500710296, 'admin', 1, '0'),
(89, 'admin删除管理员成功', 1500710304, 'admin', 1, '0'),
(90, 'admin删除管理员成功', 1500710343, 'admin', 1, '0'),
(91, 'admin删除管理员成功', 1500710351, 'admin', 1, '0'),
(92, 'admin登录系统后台成功', 1500710417, 'admin', 1, '0'),
(93, 'admin编辑管理员成功', 1500710451, 'admin', 1, '0'),
(94, 'admin删除角色成功', 1500710617, 'admin', 1, '0'),
(95, 'admin删除角色成功', 1500710619, 'admin', 1, '0'),
(96, 'admin删除角色成功', 1500710622, 'admin', 1, '0'),
(97, 'admin删除角色成功', 1500710630, 'admin', 1, '0'),
(98, 'admin添加角色成功', 1500710677, 'admin', 1, '0'),
(99, 'admin添加角色成功', 1500711120, 'admin', 1, '0'),
(100, 'admin添加角色成功', 1500711219, 'admin', 1, '0'),
(101, 'admin删除角色成功', 1500711228, 'admin', 1, '0'),
(102, 'admin删除角色成功', 1500711381, 'admin', 1, '0'),
(103, 'admin删除角色成功', 1500711472, 'admin', 1, '0'),
(104, 'admin删除角色成功', 1500711541, 'admin', 1, '0'),
(105, 'admin删除角色成功', 1500711547, 'admin', 1, '0'),
(106, 'admin删除角色成功', 1500711551, 'admin', 1, '0'),
(107, 'admin删除管理员成功', 1500711574, 'admin', 1, '0'),
(108, 'admin删除管理员成功', 1500711578, 'admin', 1, '0'),
(109, 'admin批量生成二维码成功', 1500713868, 'admin', 1, '0'),
(110, 'admin批量生成二维码成功', 1500714526, 'admin', 1, '0'),
(111, 'admin登录系统后台成功', 1500719415, 'admin', 1, '0'),
(112, 'admin批量生成二维码成功', 1500719688, 'admin', 1, '0'),
(113, 'admin批量生成二维码成功', 1500719696, 'admin', 1, '0'),
(114, 'admin批量生成二维码成功', 1500720160, 'admin', 1, '0'),
(115, 'admin批量生成二维码成功', 1500724383, 'admin', 1, '0'),
(116, 'admin登录系统后台成功', 1500856994, 'admin', 1, '0'),
(117, 'admin登录系统后台成功', 1500857782, 'admin', 1, '0'),
(118, 'admin设置活动规则成功', 1500857881, 'admin', 1, '0'),
(119, 'admin批量生成二维码成功', 1500858291, 'admin', 1, '0'),
(120, 'admin批量生成二维码成功', 1500858475, 'admin', 1, '0'),
(121, 'admin登录系统后台成功', 1500867577, 'admin', 1, '0'),
(122, 'admin登录系统后台成功', 1500878420, 'admin', 1, '0'),
(123, 'admin删除角色成功', 1500880889, 'admin', 1, '0'),
(124, 'admin编辑角色成功', 1500880905, 'admin', 1, '0'),
(125, 'admin编辑角色成功', 1500880978, 'admin', 1, '0'),
(126, 'admin编辑角色成功', 1500881025, 'admin', 1, '0'),
(127, 'admin添加权限规则成功', 1500882778, 'admin', 1, '0'),
(128, 'admin添加权限规则成功', 1500882818, 'admin', 1, '0'),
(129, 'admin添加权限规则成功', 1500882852, 'admin', 1, '0'),
(130, 'admin添加权限规则成功', 1500882906, 'admin', 1, '0'),
(131, 'admin添加权限规则成功', 1500882952, 'admin', 1, '0'),
(132, 'admin添加权限规则成功', 1500883018, 'admin', 1, '0'),
(133, 'admin添加权限规则成功', 1500883059, 'admin', 1, '0'),
(134, 'admin添加权限规则成功', 1500883105, 'admin', 1, '0'),
(135, 'admin编辑角色成功', 1500883154, 'admin', 1, '0'),
(136, 'admin添加权限规则成功', 1500885461, 'admin', 1, '0'),
(137, 'admin添加权限规则成功', 1500885545, 'admin', 1, '0'),
(138, 'admin添加权限规则成功', 1500885611, 'admin', 1, '0'),
(139, 'admin添加权限规则成功', 1500885649, 'admin', 1, '0'),
(140, 'admin添加权限规则成功', 1500885733, 'admin', 1, '0'),
(141, 'admin编辑角色成功', 1500887685, 'admin', 1, '0'),
(142, 'admin发布新闻成功', 1500892458, 'admin', 1, '0'),
(143, 'admin登录系统后台成功', 1500944071, 'admin', 1, '0'),
(144, 'admin登录系统后台成功', 1500964124, 'admin', 1, '0'),
(145, 'admin发布新闻成功', 1500970525, 'admin', 1, '0'),
(146, 'admin发布新闻成功', 1500972778, 'admin', 1, '0'),
(147, 'admin发布新闻成功', 1500973431, 'admin', 1, '0'),
(148, 'admin发布新闻成功', 1500973604, 'admin', 1, '0'),
(149, 'admin添加权限规则成功', 1500976595, 'admin', 1, '0'),
(150, 'admin编辑权限规则成功', 1500977219, 'admin', 1, '0'),
(151, 'admin添加权限规则成功', 1500977368, 'admin', 1, '0'),
(152, 'admin编辑权限规则成功', 1500977388, 'admin', 1, '0'),
(153, 'admin编辑权限规则成功', 1500977398, 'admin', 1, '0'),
(154, 'admin编辑权限规则成功', 1500977608, 'admin', 1, '0'),
(155, 'admin登录系统后台成功', 1501031177, 'admin', 1, '0'),
(156, 'admin编辑管理员成功', 1501038494, 'admin', 1, '0'),
(157, 'admin添加栏目成功', 1501041725, 'admin', 1, '0'),
(158, 'admin编辑分类成功', 1501041807, 'admin', 1, '0'),
(159, 'admin编辑分类成功', 1501041845, 'admin', 1, '0'),
(160, 'admin登录系统后台成功', 1501049972, 'admin', 1, '0'),
(161, 'admin添加权限规则成功', 1501051435, 'admin', 1, '0'),
(162, 'admin添加权限规则成功', 1501051489, 'admin', 1, '0'),
(163, 'admin添加权限规则成功', 1501051566, 'admin', 1, '0'),
(164, 'admin添加权限规则成功', 1501051602, 'admin', 1, '0'),
(165, 'admin添加权限规则成功', 1501051633, 'admin', 1, '0'),
(166, 'admin添加权限规则成功', 1501051669, 'admin', 1, '0'),
(167, 'admin添加权限规则成功', 1501051761, 'admin', 1, '0'),
(168, 'admin添加权限规则成功', 1501051815, 'admin', 1, '0'),
(169, 'admin编辑角色成功', 1501051925, 'admin', 1, '0'),
(170, 'admin登录系统后台成功', 1501116571, 'admin', 1, '0'),
(171, 'admin登录系统后台成功', 1501136137, 'admin', 1, '0'),
(172, 'admin登录系统后台成功', 1501137944, 'admin', 1, '0'),
(173, 'admin发布新闻成功', 1501145092, 'admin', 1, '0'),
(174, 'admin发布新闻成功', 1501145143, 'admin', 1, '0'),
(175, 'admin发布新闻成功', 1501150685, 'admin', 1, '0'),
(176, 'admin发布新闻成功', 1501150712, 'admin', 1, '0'),
(177, 'admin发布新闻成功', 1501150740, 'admin', 1, '0'),
(178, 'admin发布新闻成功', 1501150803, 'admin', 1, '0'),
(179, 'admin登录系统后台成功', 1501223988, 'admin', 1, '0'),
(180, 'admin发布新闻成功', 1501224040, 'admin', 1, '0'),
(181, 'admin发布新闻成功', 1501226815, 'admin', 1, '0'),
(182, 'admin发布新闻成功', 1501226854, 'admin', 1, '0'),
(183, 'admin发布新闻成功', 1501227323, 'admin', 1, '0'),
(184, 'admin发布新闻成功', 1501227359, 'admin', 1, '0'),
(185, 'admin发布新闻成功', 1501227402, 'admin', 1, '0'),
(186, 'admin保存系统设置成功', 1501237763, 'admin', 1, '0'),
(187, 'admin保存系统设置成功', 1501238115, 'admin', 1, '0'),
(188, 'admin保存系统设置成功', 1501238132, 'admin', 1, '0'),
(189, 'admin保存系统设置成功', 1501238240, 'admin', 1, '0'),
(190, 'admin添加栏目成功', 1501238543, 'admin', 1, '0'),
(191, 'admin添加栏目成功', 1501238561, 'admin', 1, '0'),
(192, 'admin添加栏目成功', 1501238586, 'admin', 1, '0'),
(193, 'admin添加栏目成功', 1501238606, 'admin', 1, '0'),
(194, 'admin保存系统设置成功', 1501239079, 'admin', 1, '0'),
(195, 'admin保存系统设置成功', 1501239108, 'admin', 1, '0'),
(196, 'admin保存系统设置成功', 1501239150, 'admin', 1, '0'),
(197, 'admin保存系统设置成功', 1501240581, 'admin', 1, '0'),
(198, 'admin保存系统设置成功', 1501240616, 'admin', 1, '0'),
(199, 'admin保存系统设置成功', 1501240634, 'admin', 1, '0'),
(200, 'admin保存系统设置成功', 1501240659, 'admin', 1, '0'),
(201, 'admin保存系统设置成功', 1501240712, 'admin', 1, '0'),
(202, 'admin登录系统后台成功', 1501290141, 'admin', 1, '0'),
(203, 'admin添加友情链接成功', 1501293461, 'admin', 1, '0'),
(204, 'admin添加友情链接成功', 1501293628, 'admin', 1, '0'),
(205, 'admin添加友情链接成功', 1501293676, 'admin', 1, '0'),
(206, 'admin添加友情链接成功', 1501293707, 'admin', 1, '0'),
(207, 'admin添加友情链接成功', 1501293733, 'admin', 1, '0'),
(208, 'admin添加友情链接成功', 1501293759, 'admin', 1, '0'),
(209, 'admin添加友情链接成功', 1501293781, 'admin', 1, '0'),
(210, 'admin添加友情链接成功', 1501294050, 'admin', 1, '0'),
(211, 'admin添加友情链接成功', 1501294121, 'admin', 1, '0'),
(212, 'admin添加友情链接成功', 1501294259, 'admin', 1, '0'),
(213, 'admin编辑分类成功', 1501297044, 'admin', 1, '0'),
(214, 'admin添加栏目成功', 1501297312, 'admin', 1, '0'),
(215, 'admin编辑分类成功', 1501297954, 'admin', 1, '0'),
(216, 'admin编辑分类成功', 1501298848, 'admin', 1, '0'),
(217, 'admin添加栏目成功', 1501299024, 'admin', 1, '0'),
(218, 'admin添加栏目成功', 1501299275, 'admin', 1, '0'),
(219, 'admin登录系统后台成功', 1501309561, 'admin', 1, '0'),
(220, 'admin登录系统后台成功', 1501313909, 'admin', 1, '0'),
(221, 'admin批量生成二维码成功', 1501315455, 'admin', 1, '0'),
(222, 'admin批量生成二维码成功', 1501315571, 'admin', 1, '0'),
(223, 'admin批量生成二维码成功', 1501315673, 'admin', 1, '0'),
(224, 'admin批量生成二维码成功', 1501315817, 'admin', 1, '0'),
(225, 'admin批量生成二维码成功', 1501315861, 'admin', 1, '0'),
(226, 'admin批量生成二维码成功', 1501315920, 'admin', 1, '0'),
(227, 'admin批量生成二维码成功', 1501316266, 'admin', 1, '0'),
(228, 'admin批量生成二维码成功', 1501316703, 'admin', 1, '0'),
(229, 'admin登录系统后台成功', 1501461167, 'admin', 1, '0'),
(230, 'admin登录系统后台成功', 1501466491, 'admin', 1, '0'),
(231, 'admin登录系统后台成功', 1501482396, 'admin', 1, '0'),
(232, 'admin编辑分类成功', 1501483186, 'admin', 1, '0'),
(233, 'admin编辑分类成功', 1501483355, 'admin', 1, '0'),
(234, 'admin添加栏目成功', 1501488066, 'admin', 1, '0'),
(235, 'admin添加栏目成功', 1501488096, 'admin', 1, '0'),
(236, 'admin发布新闻成功', 1501488235, 'admin', 1, '0'),
(237, 'admin发布新闻成功', 1501488305, 'admin', 1, '0'),
(238, 'admin登录系统后台成功', 1501553685, 'admin', 1, '0'),
(239, 'admin发布新闻成功', 1501554487, 'admin', 1, '0'),
(240, 'admin发布新闻成功', 1501554906, 'admin', 1, '0'),
(241, 'admin发布新闻成功', 1501555299, 'admin', 1, '0'),
(242, 'admin登录系统后台成功', 1501567644, 'admin', 1, '0'),
(243, 'admin添加权限规则成功', 1501567970, 'admin', 1, '0'),
(244, 'admin添加权限规则成功', 1501568108, 'admin', 1, '0'),
(245, 'admin添加权限规则成功', 1501568176, 'admin', 1, '0'),
(246, 'admin添加权限规则成功', 1501568206, 'admin', 1, '0'),
(247, 'admin添加权限规则成功', 1501569474, 'admin', 1, '0'),
(248, 'admin添加权限规则成功', 1501569514, 'admin', 1, '0'),
(249, 'admin添加权限规则成功', 1501569551, 'admin', 1, '0'),
(250, 'admin添加权限规则成功', 1501569590, 'admin', 1, '0'),
(251, 'admin编辑角色成功', 1501570069, 'admin', 1, '0'),
(252, 'admin编辑权限规则成功', 1501571275, 'admin', 1, '0'),
(253, 'admin编辑权限规则成功', 1501571534, 'admin', 1, '0'),
(254, 'admin保存系统设置成功', 1501575350, 'admin', 1, '0'),
(255, 'admin保存系统设置成功', 1501575382, 'admin', 1, '0'),
(256, 'admin保存系统设置成功', 1501575798, 'admin', 1, '0'),
(257, 'admin保存系统设置成功', 1501575930, 'admin', 1, '0'),
(258, 'admin保存系统设置成功', 1501575988, 'admin', 1, '0'),
(259, 'admin保存系统设置成功', 1501576035, 'admin', 1, '0'),
(260, 'admin保存系统设置成功', 1501576072, 'admin', 1, '0'),
(261, 'admin保存系统设置成功', 1501576109, 'admin', 1, '0'),
(262, 'admin保存系统设置成功', 1501576138, 'admin', 1, '0'),
(263, 'admin保存系统设置成功', 1501576387, 'admin', 1, '0'),
(264, 'admin保存系统设置成功', 1501576517, 'admin', 1, '0'),
(265, 'admin保存系统设置成功', 1501576531, 'admin', 1, '0'),
(266, 'admin保存系统设置成功', 1501576552, 'admin', 1, '0'),
(267, 'admin保存系统设置成功', 1501576574, 'admin', 1, '0'),
(268, 'admin保存系统设置成功', 1501576642, 'admin', 1, '0'),
(269, 'admin保存系统设置成功', 1501576680, 'admin', 1, '0'),
(270, 'admin保存系统设置成功', 1501576915, 'admin', 1, '0'),
(271, 'admin保存系统设置成功', 1501576983, 'admin', 1, '0'),
(272, 'admin保存系统设置成功', 1501576999, 'admin', 1, '0'),
(273, 'admin保存系统设置成功', 1501577019, 'admin', 1, '0'),
(274, 'admin保存系统设置成功', 1501577030, 'admin', 1, '0'),
(275, 'admin保存系统设置成功', 1501577070, 'admin', 1, '0'),
(276, 'admin保存系统设置成功', 1501577171, 'admin', 1, '0'),
(277, 'admin保存系统设置成功', 1501577197, 'admin', 1, '0'),
(278, 'admin保存系统设置成功', 1501577209, 'admin', 1, '0'),
(279, 'admin保存系统设置成功', 1501577219, 'admin', 1, '0'),
(280, 'admin保存系统设置成功', 1501577468, 'admin', 1, '0'),
(281, 'admin保存系统设置成功', 1501577514, 'admin', 1, '0'),
(282, 'admin保存系统设置成功', 1501577584, 'admin', 1, '0'),
(283, 'admin保存系统设置成功', 1501577647, 'admin', 1, '0'),
(284, 'admin保存系统设置成功', 1501577672, 'admin', 1, '0'),
(285, 'admin保存系统设置成功', 1501577768, 'admin', 1, '0'),
(286, 'admin保存系统设置成功', 1501577890, 'admin', 1, '0'),
(287, 'admin保存系统设置成功', 1501577943, 'admin', 1, '0'),
(288, 'admin保存系统设置成功', 1501578677, 'admin', 1, '0'),
(289, 'admin保存系统设置成功', 1501578697, 'admin', 1, '0'),
(290, 'admin保存系统设置成功', 1501578732, 'admin', 1, '0'),
(291, 'admin保存系统设置成功', 1501579293, 'admin', 1, '0'),
(292, 'admin保存系统设置成功', 1501579336, 'admin', 1, '0'),
(293, 'admin保存系统设置成功', 1501579396, 'admin', 1, '0'),
(294, 'admin保存系统设置成功', 1501579477, 'admin', 1, '0'),
(295, 'admin保存系统设置成功', 1501583602, 'admin', 1, '0'),
(296, 'admin发布新闻成功', 1501586856, 'admin', 1, '0'),
(297, 'admin登录系统后台成功', 1501587216, 'admin', 1, '0'),
(298, 'admin登录系统后台成功', 1501637015, 'admin', 1, '0'),
(299, 'admin添加权限规则成功', 1501637607, 'admin', 1, '0'),
(300, 'admin添加权限规则成功', 1501637689, 'admin', 1, '0'),
(301, 'admin添加权限规则成功', 1501637987, 'admin', 1, '0'),
(302, 'admin添加权限规则成功', 1501638020, 'admin', 1, '0'),
(303, 'admin添加权限规则成功', 1501638295, 'admin', 1, '0'),
(304, 'admin添加权限规则成功', 1501638367, 'admin', 1, '0'),
(305, 'admin添加权限规则成功', 1501638449, 'admin', 1, '0'),
(306, 'admin添加权限规则成功', 1501638502, 'admin', 1, '0'),
(307, 'admin保存系统设置成功', 1501638743, 'admin', 1, '0'),
(308, 'admin保存系统设置成功', 1501638783, 'admin', 1, '0'),
(309, 'admin添加栏目成功', 1501640434, 'admin', 1, '0'),
(310, 'admin添加栏目成功', 1501640477, 'admin', 1, '0'),
(311, 'admin添加栏目成功', 1501640539, 'admin', 1, '0'),
(312, 'admin添加栏目成功', 1501640570, 'admin', 1, '0'),
(313, 'admin添加栏目成功', 1501640830, 'admin', 1, '0'),
(314, 'admin编辑栏目分类成功', 1501641349, 'admin', 1, '0'),
(315, 'admin编辑栏目分类成功', 1501641380, 'admin', 1, '0'),
(316, 'admin编辑栏目分类成功', 1501641399, 'admin', 1, '0'),
(317, 'admin编辑栏目分类成功', 1501641434, 'admin', 1, '0'),
(318, 'admin编辑栏目分类成功', 1501641474, 'admin', 1, '0'),
(319, 'admin登录系统后台成功', 1501646048, 'admin', 1, '0'),
(320, 'admin保存系统设置成功', 1501646159, 'admin', 1, '0'),
(321, 'admin编辑栏目分类成功', 1501655768, 'admin', 1, '0'),
(322, 'admin编辑角色成功', 1501656497, 'admin', 1, '0'),
(323, 'admin登录系统后台成功', 1501658264, 'admin', 1, '0'),
(324, 'admin登录系统后台成功', 1501658352, 'admin', 1, '0'),
(325, 'admin编辑栏目分类成功', 1501658655, 'admin', 1, '0'),
(326, 'admin编辑栏目分类成功', 1501658677, 'admin', 1, '0'),
(327, 'admin编辑栏目分类成功', 1501658723, 'admin', 1, '0'),
(328, 'admin编辑栏目分类成功', 1501658843, 'admin', 1, '0'),
(329, 'admin编辑栏目分类成功', 1501658883, 'admin', 1, '0'),
(330, 'admin编辑栏目分类成功', 1501658906, 'admin', 1, '0'),
(331, 'admin编辑角色成功', 1501659469, 'admin', 1, '0'),
(332, 'admin编辑角色成功', 1501659514, 'admin', 1, '0'),
(333, 'admin删除栏目成功', 1501659652, 'admin', 1, '0'),
(334, 'admin添加栏目成功', 1501660686, 'admin', 1, '0'),
(335, 'admin登录系统后台成功', 1501663300, 'admin', 1, '0'),
(336, 'admin删除栏目成功', 1501663337, 'admin', 1, '0'),
(337, 'admin登录系统后台成功', 1501727796, 'admin', 1, '0'),
(338, 'admin登录系统后台成功', 1501744027, 'admin', 1, '0'),
(339, 'admin登录系统后台成功', 1501747801, 'admin', 1, '0'),
(340, 'admin登录系统后台成功', 1501747943, 'admin', 1, '0'),
(341, 'admin发布新闻成功', 1501748949, 'admin', 1, '0'),
(342, 'admin发布新闻成功', 1501752653, 'admin', 1, '0'),
(343, 'admin删除栏目成功', 1501752868, 'admin', 1, '0'),
(344, 'admin发布新闻成功', 1501752993, 'admin', 1, '0'),
(345, 'admin发布新闻成功', 1501753720, 'admin', 1, '0'),
(346, 'admin发布新闻成功', 1501753809, 'admin', 1, '0'),
(347, 'admin发布新闻成功', 1501754388, 'admin', 1, '0'),
(348, 'admin登录系统后台成功', 1501755611, 'admin', 1, '0'),
(349, 'admin发布新闻成功', 1501755761, 'admin', 1, '0'),
(350, 'admin发布新闻成功', 1501755831, 'admin', 1, '0'),
(351, 'admin发布新闻成功', 1501755904, 'admin', 1, '0'),
(352, 'admin编辑角色成功', 1501755988, 'admin', 1, '0'),
(353, 'admin编辑角色成功', 1501756000, 'admin', 1, '0'),
(354, 'admin发布新闻成功', 1501756144, 'admin', 1, '0'),
(355, 'admin发布新闻成功', 1501756228, 'admin', 1, '0'),
(356, 'admin发布新闻成功', 1501756318, 'admin', 1, '0'),
(357, 'admin发布新闻成功', 1501756353, 'admin', 1, '0'),
(358, 'admin发布新闻成功', 1501756434, 'admin', 1, '0'),
(359, 'admin发布新闻成功', 1501756525, 'admin', 1, '0'),
(360, 'admin发布新闻成功', 1501756781, 'admin', 1, '0'),
(361, 'admin发布新闻成功', 1501756919, 'admin', 1, '0'),
(362, 'admin发布新闻成功', 1501756994, 'admin', 1, '0'),
(363, 'admin发布新闻成功', 1501757090, 'admin', 1, '0'),
(364, 'admin发布新闻成功', 1501757204, 'admin', 1, '0'),
(365, 'admin发布新闻成功', 1501757394, 'admin', 1, '0'),
(366, 'admin发布新闻成功', 1501757451, 'admin', 1, '0'),
(367, 'admin发布新闻成功', 1501757715, 'admin', 1, '0'),
(368, 'admin发布新闻成功', 1501757842, 'admin', 1, '0'),
(369, 'admin发布新闻成功', 1501757992, 'admin', 1, '0'),
(370, 'admin发布新闻成功', 1501758111, 'admin', 1, '0'),
(371, 'admin发布新闻成功', 1501758463, 'admin', 1, '0'),
(372, 'admin发布新闻成功', 1501758590, 'admin', 1, '0'),
(373, 'admin发布新闻成功', 1501758626, 'admin', 1, '0'),
(374, 'admin发布新闻成功', 1501758716, 'admin', 1, '0'),
(375, 'admin删除栏目成功', 1501758768, 'admin', 1, '0'),
(376, 'admin发布新闻成功', 1501758821, 'admin', 1, '0'),
(377, 'admin发布新闻成功', 1501758882, 'admin', 1, '0'),
(378, 'admin发布新闻成功', 1501758939, 'admin', 1, '0'),
(379, 'admin发布新闻成功', 1501758972, 'admin', 1, '0'),
(380, 'admin发布新闻成功', 1501759034, 'admin', 1, '0'),
(381, 'admin登录系统后台成功', 1501828644, 'admin', 1, '0'),
(382, 'admin登录系统后台成功', 1501829874, 'admin', 1, '0'),
(383, 'admin登录系统后台成功', 1501831318, 'admin', 1, '0'),
(384, 'admin编辑栏目分类成功', 1501831850, 'admin', 1, '0'),
(385, 'admin编辑栏目分类成功', 1501831935, 'admin', 1, '0'),
(386, 'admin编辑栏目分类成功', 1501831961, 'admin', 1, '0'),
(387, 'admin编辑栏目分类成功', 1501831979, 'admin', 1, '0'),
(388, 'admin编辑栏目分类成功', 1501832004, 'admin', 1, '0'),
(389, 'admin发布新闻成功', 1501832198, 'admin', 1, '0'),
(390, 'admin发布新闻成功', 1501832396, 'admin', 1, '0'),
(391, 'admin发布新闻成功', 1501832458, 'admin', 1, '0'),
(392, 'admin发布新闻成功', 1501832866, 'admin', 1, '0'),
(393, 'admin登录系统后台成功', 1501834451, 'admin', 1, '0'),
(394, 'admin登录系统后台成功', 1501836118, 'admin', 1, '0'),
(395, 'admin登录系统后台成功', 1501836399, 'admin', 1, '0'),
(396, 'admin发布新闻成功', 1501837239, 'admin', 1, '0'),
(397, 'admin删除栏目成功', 1501837286, 'admin', 1, '0'),
(398, 'admin发布新闻成功', 1501837958, 'admin', 1, '0'),
(399, 'admin发布新闻成功', 1501838002, 'admin', 1, '0'),
(400, 'admin发布新闻成功', 1501838040, 'admin', 1, '0'),
(401, 'admin发布新闻成功', 1501838070, 'admin', 1, '0'),
(402, 'admin发布新闻成功', 1501838112, 'admin', 1, '0'),
(403, 'admin编辑新闻成功', 1501838268, 'admin', 1, '0'),
(404, 'admin发布新闻成功', 1501838321, 'admin', 1, '0'),
(405, 'admin编辑新闻成功', 1501838372, 'admin', 1, '0'),
(406, 'admin发布新闻成功', 1501838479, 'admin', 1, '0'),
(407, 'admin发布新闻成功', 1501838529, 'admin', 1, '0'),
(408, 'admin发布新闻成功', 1501838602, 'admin', 1, '0'),
(409, 'admin发布新闻成功', 1501838655, 'admin', 1, '0'),
(410, 'admin发布新闻成功', 1501838702, 'admin', 1, '0'),
(411, 'admin编辑新闻成功', 1501839273, 'admin', 1, '0'),
(412, 'admin编辑新闻成功', 1501839493, 'admin', 1, '0'),
(413, 'admin编辑新闻成功', 1501839545, 'admin', 1, '0'),
(414, 'admin编辑新闻成功', 1501839840, 'admin', 1, '0'),
(415, 'admin编辑新闻成功', 1501839938, 'admin', 1, '0'),
(416, 'admin编辑新闻成功', 1501840059, 'admin', 1, '0'),
(417, 'admin登录系统后台成功', 1502066506, 'admin', 1, '0'),
(418, 'admin添加友情链接成功', 1502066798, 'admin', 1, '0'),
(419, 'admin删除友情链接成功', 1502066855, 'admin', 1, '0'),
(420, 'admin删除友情链接成功', 1502066866, 'admin', 1, '0'),
(421, 'admin删除友情链接成功', 1502066873, 'admin', 1, '0'),
(422, 'admin删除友情链接成功', 1502066877, 'admin', 1, '0'),
(423, 'admin删除友情链接成功', 1502066881, 'admin', 1, '0'),
(424, 'admin添加友情链接成功', 1502066994, 'admin', 1, '0'),
(425, 'admin添加友情链接成功', 1502067045, 'admin', 1, '0'),
(426, 'admin删除友情链接成功', 1502067099, 'admin', 1, '0'),
(427, 'admin添加友情链接成功', 1502067113, 'admin', 1, '0'),
(428, 'admin添加友情链接成功', 1502067159, 'admin', 1, '0'),
(429, 'admin添加友情链接成功', 1502067226, 'admin', 1, '0'),
(430, 'admin发布新闻成功', 1502067596, 'admin', 1, '0'),
(431, 'admin发布新闻成功', 1502067658, 'admin', 1, '0'),
(432, 'admin发布新闻成功', 1502067688, 'admin', 1, '0'),
(433, 'admin发布新闻成功', 1502067718, 'admin', 1, '0'),
(434, 'admin登录系统后台成功', 1502067753, 'admin', 1, '0'),
(435, 'admin发布新闻成功', 1502067801, 'admin', 1, '0'),
(436, 'admin发布新闻成功', 1502067836, 'admin', 1, '0'),
(437, 'admin保存系统设置成功', 1502067984, 'admin', 1, '0'),
(438, 'admin发布新闻成功', 1502068011, 'admin', 1, '0'),
(439, 'admin保存系统设置成功', 1502068067, 'admin', 1, '0'),
(440, 'admin发布新闻成功', 1502068098, 'admin', 1, '0'),
(441, 'admin发布新闻成功', 1502068165, 'admin', 1, '0'),
(442, 'admin添加栏目成功', 1502068484, 'admin', 1, '0'),
(443, 'admin删除友情链接成功', 1502068680, 'admin', 1, '0'),
(444, 'admin删除友情链接成功', 1502068686, 'admin', 1, '0'),
(445, 'admin删除友情链接成功', 1502068689, 'admin', 1, '0'),
(446, 'admin添加友情链接成功', 1502068718, 'admin', 1, '0'),
(447, 'admin添加友情链接成功', 1502068764, 'admin', 1, '0'),
(448, 'admin添加友情链接成功', 1502068820, 'admin', 1, '0'),
(449, 'admin添加友情链接成功', 1502068853, 'admin', 1, '0'),
(450, 'admin添加友情链接成功', 1502068895, 'admin', 1, '0'),
(451, 'admin删除友情链接成功', 1502068932, 'admin', 1, '0'),
(452, 'admin添加友情链接成功', 1502069011, 'admin', 1, '0'),
(453, 'admin添加友情链接成功', 1502069058, 'admin', 1, '0'),
(454, 'admin添加友情链接成功', 1502069092, 'admin', 1, '0'),
(455, 'admin发布新闻成功', 1502069136, 'admin', 1, '0'),
(456, 'admin添加友情链接成功', 1502069139, 'admin', 1, '0'),
(457, 'admin添加友情链接成功', 1502069168, 'admin', 1, '0'),
(458, 'admin删除友情链接成功', 1502069206, 'admin', 1, '0'),
(459, 'admin删除友情链接成功', 1502069212, 'admin', 1, '0'),
(460, 'admin删除友情链接成功', 1502069241, 'admin', 1, '0'),
(461, 'admin添加友情链接成功', 1502069309, 'admin', 1, '0'),
(462, 'admin删除友情链接成功', 1502069325, 'admin', 1, '0'),
(463, 'admin添加友情链接成功', 1502069365, 'admin', 1, '0'),
(464, 'admin添加友情链接成功', 1502069404, 'admin', 1, '0'),
(465, 'admin删除友情链接成功', 1502069460, 'admin', 1, '0'),
(466, 'admin删除友情链接成功', 1502069467, 'admin', 1, '0'),
(467, 'admin添加友情链接成功', 1502069482, 'admin', 1, '0'),
(468, 'admin添加友情链接成功', 1502069516, 'admin', 1, '0'),
(469, 'admin添加友情链接成功', 1502069549, 'admin', 1, '0'),
(470, 'admin添加友情链接成功', 1502069575, 'admin', 1, '0'),
(471, 'admin添加友情链接成功', 1502069632, 'admin', 1, '0'),
(472, 'admin发布新闻成功', 1502069642, 'admin', 1, '0'),
(473, 'admin添加友情链接成功', 1502069668, 'admin', 1, '0'),
(474, 'admin编辑新闻成功', 1502069821, 'admin', 1, '0'),
(475, 'admin编辑新闻成功', 1502069862, 'admin', 1, '0'),
(476, 'admin编辑新闻成功', 1502069904, 'admin', 1, '0'),
(477, 'admin编辑新闻成功', 1502070310, 'admin', 1, '0'),
(478, 'admin编辑新闻成功', 1502070453, 'admin', 1, '0'),
(479, 'admin编辑新闻成功', 1502070541, 'admin', 1, '0'),
(480, 'admin编辑新闻成功', 1502070598, 'admin', 1, '0'),
(481, 'admin编辑新闻成功', 1502070672, 'admin', 1, '0'),
(482, 'admin编辑新闻成功', 1502070778, 'admin', 1, '0'),
(483, 'admin编辑新闻成功', 1502070812, 'admin', 1, '0'),
(484, 'admin登录系统后台成功', 1502071235, 'admin', 1, '0'),
(485, 'admin编辑新闻成功', 1502071273, 'admin', 1, '0'),
(486, 'admin登录系统后台成功', 1502071287, 'admin', 1, '0'),
(487, 'admin编辑新闻成功', 1502071302, 'admin', 1, '0'),
(488, 'admin编辑新闻成功', 1502071328, 'admin', 1, '0'),
(489, 'admin编辑新闻成功', 1502071370, 'admin', 1, '0'),
(490, 'admin编辑新闻成功', 1502071403, 'admin', 1, '0'),
(491, 'admin编辑新闻成功', 1502071438, 'admin', 1, '0'),
(492, 'admin编辑新闻成功', 1502071466, 'admin', 1, '0'),
(493, 'admin编辑新闻成功', 1502071507, 'admin', 1, '0'),
(494, 'admin编辑新闻成功', 1502071548, 'admin', 1, '0'),
(495, 'admin编辑新闻成功', 1502071575, 'admin', 1, '0'),
(496, 'admin编辑新闻成功', 1502071621, 'admin', 1, '0'),
(497, 'admin编辑新闻成功', 1502071658, 'admin', 1, '0'),
(498, 'admin编辑新闻成功', 1502071700, 'admin', 1, '0'),
(499, 'admin编辑新闻成功', 1502071740, 'admin', 1, '0'),
(500, 'admin编辑新闻成功', 1502071811, 'admin', 1, '0'),
(501, 'admin编辑新闻成功', 1502071838, 'admin', 1, '0'),
(502, 'admin编辑新闻成功', 1502071865, 'admin', 1, '0'),
(503, 'admin编辑新闻成功', 1502071891, 'admin', 1, '0'),
(504, 'admin编辑新闻成功', 1502071935, 'admin', 1, '0'),
(505, 'admin编辑新闻成功', 1502071960, 'admin', 1, '0'),
(506, 'admin编辑新闻成功', 1502071993, 'admin', 1, '0'),
(507, 'admin编辑新闻成功', 1502072021, 'admin', 1, '0'),
(508, 'admin编辑新闻成功', 1502072044, 'admin', 1, '0'),
(509, 'admin编辑新闻成功', 1502072077, 'admin', 1, '0'),
(510, 'admin编辑新闻成功', 1502072114, 'admin', 1, '0'),
(511, 'admin编辑新闻成功', 1502072144, 'admin', 1, '0'),
(512, 'admin编辑新闻成功', 1502072181, 'admin', 1, '0'),
(513, 'admin发布新闻成功', 1502073725, 'admin', 1, '0'),
(514, 'admin发布新闻成功', 1502073777, 'admin', 1, '0'),
(515, 'admin发布新闻成功', 1502073808, 'admin', 1, '0'),
(516, 'admin发布新闻成功', 1502073851, 'admin', 1, '0'),
(517, 'admin登录系统后台成功', 1502086773, 'admin', 1, '0'),
(518, 'admin登录系统后台成功', 1502087602, 'admin', 1, '0'),
(519, 'admin删除领导人员成功', 1502087638, 'admin', 1, '0'),
(520, 'admin发布新闻成功', 1502088022, 'admin', 1, '0'),
(521, 'admin编辑新闻成功', 1502088119, 'admin', 1, '0'),
(522, 'admin发布新闻成功', 1502088126, 'admin', 1, '0'),
(523, 'admin编辑新闻成功', 1502088156, 'admin', 1, '0'),
(524, 'admin编辑新闻成功', 1502088183, 'admin', 1, '0'),
(525, 'admin发布新闻成功', 1502088196, 'admin', 1, '0'),
(526, 'admin登录系统后台成功', 1502090908, 'admin', 1, '0'),
(527, 'admin发布领导人成功', 1502091128, 'admin', 1, '0'),
(528, 'admin编辑领导人成功', 1502091164, 'admin', 1, '0'),
(529, 'admin发布领导人成功', 1502091231, 'admin', 1, '0'),
(530, 'admin发布领导人成功', 1502091268, 'admin', 1, '0'),
(531, 'admin发布领导人成功', 1502091317, 'admin', 1, '0'),
(532, 'admin删除领导人员成功', 1502091330, 'admin', 1, '0'),
(533, 'admin发布新闻成功', 1502091388, 'admin', 1, '0'),
(534, 'admin登录系统后台成功', 1502157293, 'admin', 1, '0'),
(535, 'admin编辑栏目分类成功', 1502157428, 'admin', 1, '0'),
(536, 'admin编辑新闻成功', 1502157504, 'admin', 1, '0'),
(537, 'admin登录系统后台成功', 1502157685, 'admin', 1, '0'),
(538, 'admin发布新闻成功', 1502157903, 'admin', 1, '0'),
(539, 'admin删除友情链接分类成功', 1502158674, 'admin', 1, '0'),
(540, 'admin添加友情链接分类成功', 1502158681, 'admin', 1, '0'),
(541, 'admin添加友情链接成功', 1502158775, 'admin', 1, '0'),
(542, 'admin删除友情链接成功', 1502158900, 'admin', 1, '0'),
(543, 'admin添加友情链接成功', 1502159006, 'admin', 1, '0'),
(544, 'admin删除友情链接成功', 1502159191, 'admin', 1, '0'),
(545, 'admin添加友情链接成功', 1502159224, 'admin', 1, '0'),
(546, 'admin删除友情链接成功', 1502159332, 'admin', 1, '0'),
(547, 'admin添加友情链接成功', 1502159351, 'admin', 1, '0'),
(548, 'admin添加友情链接成功', 1502159922, 'admin', 1, '0'),
(549, 'admin删除新闻成功', 1502160239, 'admin', 1, '0'),
(550, 'admin删除新闻成功', 1502160269, 'admin', 1, '0'),
(551, 'admin删除新闻成功', 1502160278, 'admin', 1, '0'),
(552, 'admin删除新闻成功', 1502160379, 'admin', 1, '0'),
(553, 'admin删除新闻成功', 1502160629, 'admin', 1, '0'),
(554, 'admin删除新闻成功', 1502160633, 'admin', 1, '0'),
(555, 'admin删除新闻成功', 1502160636, 'admin', 1, '0'),
(556, 'admin删除新闻成功', 1502160741, 'admin', 1, '0'),
(557, 'admin删除新闻成功', 1502160753, 'admin', 1, '0'),
(558, 'admin删除新闻成功', 1502160765, 'admin', 1, '0'),
(559, 'admin删除新闻成功', 1502160819, 'admin', 1, '0'),
(560, 'admin删除新闻成功', 1502160837, 'admin', 1, '0'),
(561, 'admin删除新闻成功', 1502160851, 'admin', 1, '0'),
(562, 'admin发布新闻成功', 1502161023, 'admin', 1, '0'),
(563, 'admin发布新闻成功', 1502161079, 'admin', 1, '0'),
(564, 'admin删除新闻成功', 1502161138, 'admin', 1, '0'),
(565, 'admin登录系统后台成功', 1502161314, 'admin', 1, '0'),
(566, 'admin删除新闻成功', 1502161963, 'admin', 1, '0'),
(567, 'admin删除新闻成功', 1502162212, 'admin', 1, '0'),
(568, 'admin删除栏目成功', 1502162575, 'admin', 1, '0'),
(569, 'admin发布新闻成功', 1502162627, 'admin', 1, '0'),
(570, 'admin登录系统后台成功', 1502162754, 'admin', 1, '0'),
(571, 'admin发布领导人成功', 1502162785, 'admin', 1, '0'),
(572, 'admin发布领导人成功', 1502162810, 'admin', 1, '0'),
(573, 'admin发布领导人成功', 1502162864, 'admin', 1, '0'),
(574, 'admin发布领导人成功', 1502162897, 'admin', 1, '0'),
(575, 'admin发布领导人成功', 1502162974, 'admin', 1, '0'),
(576, 'admin编辑领导人成功', 1502163020, 'admin', 1, '0'),
(577, 'admin添加栏目成功', 1502163324, 'admin', 1, '0'),
(578, 'admin添加栏目成功', 1502163440, 'admin', 1, '0'),
(579, 'admin发布新闻成功', 1502163548, 'admin', 1, '0'),
(580, 'admin添加栏目成功', 1502163708, 'admin', 1, '0'),
(581, 'admin编辑栏目分类成功', 1502163733, 'admin', 1, '0'),
(582, 'admin添加栏目成功', 1502163752, 'admin', 1, '0'),
(583, 'admin编辑领导职务成功', 1502163892, 'admin', 1, '0'),
(584, 'admin编辑领导人成功', 1502163895, 'admin', 1, '0'),
(585, 'admin发布领导人成功', 1502163926, 'admin', 1, '0'),
(586, 'admin发布领导人成功', 1502163959, 'admin', 1, '0'),
(587, 'admin发布领导人成功', 1502164070, 'admin', 1, '0'),
(588, 'admin发布领导人成功', 1502164089, 'admin', 1, '0'),
(589, 'admin发布领导人成功', 1502164112, 'admin', 1, '0'),
(590, 'admin发布领导人成功', 1502164134, 'admin', 1, '0'),
(591, 'admin发布领导人成功', 1502164150, 'admin', 1, '0'),
(592, 'admin发布领导人成功', 1502164163, 'admin', 1, '0'),
(593, 'admin发布领导人成功', 1502164198, 'admin', 1, '0'),
(594, 'admin发布领导人成功', 1502164215, 'admin', 1, '0'),
(595, 'admin发布领导人成功', 1502164236, 'admin', 1, '0'),
(596, 'admin发布领导人成功', 1502164253, 'admin', 1, '0'),
(597, 'admin发布领导人成功', 1502164270, 'admin', 1, '0'),
(598, 'admin发布领导人成功', 1502164290, 'admin', 1, '0'),
(599, 'admin发布领导人成功', 1502164307, 'admin', 1, '0'),
(600, 'admin发布领导人成功', 1502164319, 'admin', 1, '0'),
(601, 'admin发布领导人成功', 1502164340, 'admin', 1, '0'),
(602, 'admin发布领导人成功', 1502164355, 'admin', 1, '0'),
(603, 'admin发布领导人成功', 1502164369, 'admin', 1, '0'),
(604, 'admin发布领导人成功', 1502164384, 'admin', 1, '0'),
(605, 'admin登录系统后台成功', 1502165681, 'admin', 1, '0'),
(606, 'admin添加权限规则成功', 1502165778, 'admin', 1, '0'),
(607, 'admin编辑角色成功', 1502165788, 'admin', 1, '0'),
(608, 'admin清空新闻回收站成功', 1502166097, 'admin', 1, '0'),
(609, 'admin发布新闻成功', 1502166204, 'admin', 1, '0'),
(610, 'admin登录系统后台成功', 1502172703, 'admin', 1, '0'),
(611, 'admin发布新闻成功', 1502173154, 'admin', 1, '0'),
(612, 'admin发布新闻成功', 1502173216, 'admin', 1, '0'),
(613, 'admin发布新闻成功', 1502173251, 'admin', 1, '0'),
(614, 'admin发布新闻成功', 1502173356, 'admin', 1, '0'),
(615, 'admin发布新闻成功', 1502173762, 'admin', 1, '0'),
(616, 'admin发布新闻成功', 1502174287, 'admin', 1, '0'),
(617, 'admin发布新闻成功', 1502174335, 'admin', 1, '0'),
(618, 'admin发布新闻成功', 1502174403, 'admin', 1, '0'),
(619, 'admin发布新闻成功', 1502174520, 'admin', 1, '0'),
(620, 'admin发布新闻成功', 1502174556, 'admin', 1, '0'),
(621, 'admin发布新闻成功', 1502174597, 'admin', 1, '0'),
(622, 'admin发布新闻成功', 1502174630, 'admin', 1, '0'),
(623, 'admin发布新闻成功', 1502174672, 'admin', 1, '0'),
(624, 'admin发布新闻成功', 1502174723, 'admin', 1, '0'),
(625, 'admin发布新闻成功', 1502174765, 'admin', 1, '0'),
(626, 'admin发布新闻成功', 1502174816, 'admin', 1, '0'),
(627, 'admin发布新闻成功', 1502174888, 'admin', 1, '0'),
(628, 'admin发布新闻成功', 1502174924, 'admin', 1, '0'),
(629, 'admin发布新闻成功', 1502174968, 'admin', 1, '0'),
(630, 'admin发布新闻成功', 1502175005, 'admin', 1, '0'),
(631, 'admin发布新闻成功', 1502175048, 'admin', 1, '0'),
(632, 'admin发布新闻成功', 1502175084, 'admin', 1, '0'),
(633, 'admin发布新闻成功', 1502175113, 'admin', 1, '0'),
(634, 'admin发布新闻成功', 1502175140, 'admin', 1, '0'),
(635, 'admin发布新闻成功', 1502175175, 'admin', 1, '0'),
(636, 'admin发布新闻成功', 1502175229, 'admin', 1, '0'),
(637, 'admin发布新闻成功', 1502175282, 'admin', 1, '0'),
(638, 'admin发布新闻成功', 1502175319, 'admin', 1, '0'),
(639, 'admin发布新闻成功', 1502175346, 'admin', 1, '0'),
(640, 'admin发布新闻成功', 1502175375, 'admin', 1, '0'),
(641, 'admin发布新闻成功', 1502175423, 'admin', 1, '0'),
(642, 'admin发布新闻成功', 1502175454, 'admin', 1, '0'),
(643, 'admin发布新闻成功', 1502175494, 'admin', 1, '0'),
(644, 'admin发布新闻成功', 1502175527, 'admin', 1, '0'),
(645, 'admin发布新闻成功', 1502175553, 'admin', 1, '0'),
(646, 'admin发布新闻成功', 1502175600, 'admin', 1, '0'),
(647, 'admin发布新闻成功', 1502175637, 'admin', 1, '0'),
(648, 'admin发布新闻成功', 1502175672, 'admin', 1, '0'),
(649, 'admin发布新闻成功', 1502175714, 'admin', 1, '0'),
(650, 'admin发布新闻成功', 1502175772, 'admin', 1, '0'),
(651, 'admin发布新闻成功', 1502175868, 'admin', 1, '0'),
(652, 'admin发布新闻成功', 1502175896, 'admin', 1, '0'),
(653, 'admin发布新闻成功', 1502175934, 'admin', 1, '0'),
(654, 'admin发布新闻成功', 1502175987, 'admin', 1, '0'),
(655, 'admin发布新闻成功', 1502176016, 'admin', 1, '0'),
(656, 'admin发布新闻成功', 1502176105, 'admin', 1, '0'),
(657, 'admin发布新闻成功', 1502176145, 'admin', 1, '0'),
(658, 'admin发布新闻成功', 1502176178, 'admin', 1, '0'),
(659, 'admin发布新闻成功', 1502176224, 'admin', 1, '0'),
(660, 'admin发布新闻成功', 1502176257, 'admin', 1, '0'),
(661, 'admin发布新闻成功', 1502176304, 'admin', 1, '0'),
(662, 'admin发布新闻成功', 1502176407, 'admin', 1, '0'),
(663, 'admin发布新闻成功', 1502176449, 'admin', 1, '0'),
(664, 'admin发布新闻成功', 1502176515, 'admin', 1, '0'),
(665, 'admin发布新闻成功', 1502176576, 'admin', 1, '0'),
(666, 'admin发布新闻成功', 1502176609, 'admin', 1, '0'),
(667, 'admin发布新闻成功', 1502176643, 'admin', 1, '0'),
(668, 'admin发布新闻成功', 1502176698, 'admin', 1, '0'),
(669, 'admin发布新闻成功', 1502176737, 'admin', 1, '0'),
(670, 'admin发布新闻成功', 1502176784, 'admin', 1, '0'),
(671, 'admin发布新闻成功', 1502176816, 'admin', 1, '0'),
(672, 'admin发布新闻成功', 1502176845, 'admin', 1, '0'),
(673, 'admin发布新闻成功', 1502176899, 'admin', 1, '0'),
(674, 'admin发布新闻成功', 1502176933, 'admin', 1, '0'),
(675, 'admin发布新闻成功', 1502176996, 'admin', 1, '0'),
(676, 'admin发布新闻成功', 1502177063, 'admin', 1, '0'),
(677, 'admin发布新闻成功', 1502177141, 'admin', 1, '0'),
(678, 'admin发布新闻成功', 1502177167, 'admin', 1, '0'),
(679, 'admin发布新闻成功', 1502177349, 'admin', 1, '0'),
(680, 'admin发布新闻成功', 1502177382, 'admin', 1, '0'),
(681, 'admin发布新闻成功', 1502177527, 'admin', 1, '0'),
(682, 'admin发布新闻成功', 1502177553, 'admin', 1, '0'),
(683, 'admin发布新闻成功', 1502177598, 'admin', 1, '0'),
(684, 'admin发布新闻成功', 1502177879, 'admin', 1, '0'),
(685, 'admin发布新闻成功', 1502177911, 'admin', 1, '0'),
(686, 'admin发布新闻成功', 1502177952, 'admin', 1, '0'),
(687, 'admin发布新闻成功', 1502178006, 'admin', 1, '0'),
(688, 'admin发布新闻成功', 1502178026, 'admin', 1, '0'),
(689, 'admin添加友情链接成功', 1502178193, 'admin', 1, '0'),
(690, 'admin添加友情链接成功', 1502178235, 'admin', 1, '0'),
(691, 'admin添加友情链接成功', 1502178264, 'admin', 1, '0'),
(692, 'admin添加友情链接成功', 1502178297, 'admin', 1, '0'),
(693, 'admin添加友情链接成功', 1502178325, 'admin', 1, '0'),
(694, 'admin添加友情链接成功', 1502178486, 'admin', 1, '0'),
(695, 'admin登录系统后台成功', 1502178719, 'admin', 1, '0'),
(696, 'admin清空新闻回收站成功', 1502178745, 'admin', 1, '0'),
(697, 'admin清空新闻回收站成功', 1502178749, 'admin', 1, '0'),
(698, 'admin清空新闻回收站成功', 1502178753, 'admin', 1, '0'),
(699, 'admin登录系统后台成功', 1502179254, 'admin', 1, '0'),
(700, 'admin发布新闻成功', 1502179780, 'admin', 1, '0'),
(701, 'admin删除新闻成功', 1502179787, 'admin', 1, '0'),
(702, 'admin添加权限规则成功', 1502179945, 'admin', 1, '0'),
(703, 'admin编辑权限规则成功', 1502179975, 'admin', 1, '0'),
(704, 'admin编辑角色成功', 1502180001, 'admin', 1, '0'),
(705, 'admin新闻还原成功', 1502180012, 'admin', 1, '0'),
(706, 'admin删除新闻成功', 1502180032, 'admin', 1, '0'),
(707, 'admin清空新闻回收站成功', 1502180047, 'admin', 1, '0'),
(708, 'admin登录系统后台成功', 1502180936, 'admin', 1, '0'),
(709, 'admin添加友情链接成功', 1502181139, 'admin', 1, '0'),
(710, 'admin添加友情链接成功', 1502181166, 'admin', 1, '0'),
(711, 'admin添加友情链接成功', 1502181196, 'admin', 1, '0'),
(712, 'admin添加友情链接成功', 1502181217, 'admin', 1, '0'),
(713, 'admin添加友情链接成功', 1502181257, 'admin', 1, '0'),
(714, 'admin添加友情链接成功', 1502181289, 'admin', 1, '0'),
(715, 'admin添加友情链接成功', 1502181316, 'admin', 1, '0'),
(716, 'admin添加友情链接成功', 1502181348, 'admin', 1, '0'),
(717, 'admin添加友情链接成功', 1502181387, 'admin', 1, '0'),
(718, 'admin添加友情链接成功', 1502181405, 'admin', 1, '0'),
(719, 'admin添加友情链接成功', 1502181427, 'admin', 1, '0'),
(720, 'admin添加友情链接成功', 1502181458, 'admin', 1, '0'),
(721, 'admin添加友情链接成功', 1502181482, 'admin', 1, '0'),
(722, 'admin添加友情链接成功', 1502181513, 'admin', 1, '0'),
(723, 'admin添加友情链接成功', 1502181542, 'admin', 1, '0'),
(724, 'admin添加友情链接成功', 1502181579, 'admin', 1, '0'),
(725, 'admin删除新闻成功', 1502182080, 'admin', 1, '0'),
(726, 'admin删除新闻成功', 1502182089, 'admin', 1, '0'),
(727, 'admin清空新闻回收站成功', 1502182117, 'admin', 1, '0'),
(728, 'admin发布新闻成功', 1502182226, 'admin', 1, '0'),
(729, 'admin发布新闻成功', 1502182367, 'admin', 1, '0'),
(730, 'admin发布新闻成功', 1502182603, 'admin', 1, '0'),
(731, 'admin发布新闻成功', 1502182660, 'admin', 1, '0'),
(732, 'admin发布新闻成功', 1502182708, 'admin', 1, '0'),
(733, 'admin发布新闻成功', 1502182858, 'admin', 1, '0'),
(734, 'admin发布新闻成功', 1502182948, 'admin', 1, '0'),
(735, 'admin发布新闻成功', 1502183004, 'admin', 1, '0'),
(736, 'admin发布新闻成功', 1502183063, 'admin', 1, '0'),
(737, 'admin发布新闻成功', 1502183126, 'admin', 1, '0'),
(738, 'admin发布新闻成功', 1502183179, 'admin', 1, '0'),
(739, 'admin发布新闻成功', 1502183254, 'admin', 1, '0'),
(740, 'admin发布新闻成功', 1502183305, 'admin', 1, '0'),
(741, 'admin发布新闻成功', 1502183376, 'admin', 1, '0'),
(742, 'admin发布新闻成功', 1502183451, 'admin', 1, '0'),
(743, 'admin发布新闻成功', 1502183499, 'admin', 1, '0'),
(744, 'admin发布新闻成功', 1502183606, 'admin', 1, '0'),
(745, 'admin发布新闻成功', 1502183663, 'admin', 1, '0'),
(746, 'admin删除新闻成功', 1502183847, 'admin', 1, '0'),
(747, 'admin清空新闻回收站成功', 1502183864, 'admin', 1, '0'),
(748, 'admin发布新闻成功', 1502184351, 'admin', 1, '0'),
(749, 'admin登录系统后台成功', 1502187229, 'admin', 1, '0'),
(750, 'admin发布新闻成功', 1502188659, 'admin', 1, '0'),
(751, 'admin登录系统后台成功', 1502188743, 'admin', 1, '0'),
(752, 'admin发布新闻成功', 1502188814, 'admin', 1, '0'),
(753, 'admin发布新闻成功', 1502188940, 'admin', 1, '0'),
(754, 'admin编辑栏目分类成功', 1502189027, 'admin', 1, '0'),
(755, 'admin添加栏目成功', 1502189235, 'admin', 1, '0'),
(756, 'admin编辑栏目分类成功', 1502189255, 'admin', 1, '0'),
(757, 'admin添加栏目成功', 1502189351, 'admin', 1, '0'),
(758, 'admin发布新闻成功', 1502189489, 'admin', 1, '0'),
(759, 'admin发布新闻成功', 1502189564, 'admin', 1, '0'),
(760, 'admin发布新闻成功', 1502189654, 'admin', 1, '0'),
(761, 'admin编辑栏目分类成功', 1502189860, 'admin', 1, '0'),
(762, 'admin编辑栏目分类成功', 1502189882, 'admin', 1, '0'),
(763, 'admin编辑栏目分类成功', 1502189906, 'admin', 1, '0'),
(764, 'admin编辑栏目分类成功', 1502190045, 'admin', 1, '0'),
(765, 'admin编辑栏目分类成功', 1502191517, 'admin', 1, '0'),
(766, 'admin登录系统后台成功', 1502239680, 'admin', 1, '0'),
(767, 'admin添加栏目成功', 1502239720, 'admin', 1, '0'),
(768, 'admin发布新闻成功', 1502239786, 'admin', 1, '0'),
(769, 'admin发布新闻成功', 1502239824, 'admin', 1, '0'),
(770, 'admin发布新闻成功', 1502239866, 'admin', 1, '0'),
(771, 'admin发布新闻成功', 1502239893, 'admin', 1, '0'),
(772, 'admin发布新闻成功', 1502239923, 'admin', 1, '0'),
(773, 'admin添加友情链接成功', 1502240305, 'admin', 1, '0'),
(774, 'admin删除友情链接成功', 1502240589, 'admin', 1, '0'),
(775, 'admin删除友情链接成功', 1502240632, 'admin', 1, '0'),
(776, 'admin添加友情链接成功', 1502240650, 'admin', 1, '0'),
(777, 'admin删除友情链接成功', 1502240721, 'admin', 1, '0'),
(778, 'admin添加友情链接成功', 1502240739, 'admin', 1, '0'),
(779, 'admin添加友情链接成功', 1502240922, 'admin', 1, '0'),
(780, 'admin添加友情链接成功', 1502240943, 'admin', 1, '0'),
(781, 'admin添加友情链接成功', 1502240972, 'admin', 1, '0'),
(782, 'admin添加友情链接成功', 1502240993, 'admin', 1, '0'),
(783, 'admin添加友情链接成功', 1502241014, 'admin', 1, '0'),
(784, 'admin添加友情链接成功', 1502241344, 'admin', 1, '0'),
(785, 'admin添加友情链接成功', 1502241407, 'admin', 1, '0'),
(786, 'admin添加友情链接成功', 1502241436, 'admin', 1, '0'),
(787, 'admin添加友情链接成功', 1502241468, 'admin', 1, '0'),
(788, 'admin添加友情链接成功', 1502241491, 'admin', 1, '0'),
(789, 'admin删除友情链接成功', 1502241511, 'admin', 1, '0'),
(790, 'admin添加友情链接成功', 1502241538, 'admin', 1, '0'),
(791, 'admin添加友情链接成功', 1502241559, 'admin', 1, '0'),
(792, 'admin添加友情链接成功', 1502241590, 'admin', 1, '0'),
(793, 'admin添加友情链接成功', 1502241628, 'admin', 1, '0'),
(794, 'admin删除友情链接成功', 1502241660, 'admin', 1, '0'),
(795, 'admin添加友情链接成功', 1502241682, 'admin', 1, '0'),
(796, 'admin编辑栏目分类成功', 1502241753, 'admin', 1, '0'),
(797, 'admin编辑栏目分类成功', 1502241986, 'admin', 1, '0'),
(798, 'admin删除友情链接成功', 1502242736, 'admin', 1, '0'),
(799, 'admin删除友情链接成功', 1502242791, 'admin', 1, '0'),
(800, 'admin添加友情链接成功', 1502242865, 'admin', 1, '0'),
(801, 'admin添加友情链接成功', 1502242914, 'admin', 1, '0'),
(802, 'admin添加友情链接成功', 1502242965, 'admin', 1, '0'),
(803, 'admin删除友情链接成功', 1502242984, 'admin', 1, '0'),
(804, 'admin添加友情链接成功', 1502243016, 'admin', 1, '0'),
(805, 'admin添加友情链接成功', 1502243039, 'admin', 1, '0'),
(806, 'admin添加友情链接成功', 1502243067, 'admin', 1, '0'),
(807, 'admin添加友情链接成功', 1502243088, 'admin', 1, '0'),
(808, 'admin添加友情链接成功', 1502243115, 'admin', 1, '0'),
(809, 'admin添加友情链接成功', 1502243178, 'admin', 1, '0'),
(810, 'admin添加友情链接成功', 1502243215, 'admin', 1, '0'),
(811, 'admin添加友情链接成功', 1502243314, 'admin', 1, '0'),
(812, 'admin添加友情链接成功', 1502243355, 'admin', 1, '0'),
(813, 'admin添加友情链接成功', 1502243387, 'admin', 1, '0'),
(814, 'admin添加友情链接成功', 1502243417, 'admin', 1, '0'),
(815, 'admin登录系统后台成功', 1502245690, 'admin', 1, '0'),
(816, 'admin登录系统后台成功', 1502246011, 'admin', 1, '0'),
(817, 'admin编辑栏目分类成功', 1502247192, 'admin', 1, '0'),
(818, 'admin编辑栏目分类成功', 1502247320, 'admin', 1, '0'),
(819, 'admin编辑栏目分类成功', 1502247335, 'admin', 1, '0'),
(820, 'admin编辑栏目分类成功', 1502247352, 'admin', 1, '0'),
(821, 'admin登录系统后台成功', 1502259877, 'admin', 1, '0'),
(822, 'admin登录系统后台成功', 1502260223, 'admin', 1, '0'),
(823, 'admin编辑新闻成功', 1502261005, 'admin', 1, '0'),
(824, 'admin编辑友情链接成功', 1502263688, 'admin', 1, '0'),
(825, 'admin登录系统后台成功', 1502263821, 'admin', 1, '0'),
(826, 'admin编辑新闻成功', 1502263967, 'admin', 1, '0'),
(827, 'admin编辑新闻成功', 1502264069, 'admin', 1, '0'),
(828, 'admin编辑新闻成功', 1502264124, 'admin', 1, '0'),
(829, 'admin编辑新闻成功', 1502264158, 'admin', 1, '0'),
(830, 'admin编辑新闻成功', 1502264197, 'admin', 1, '0'),
(831, 'admin删除新闻成功', 1502264338, 'admin', 1, '0'),
(832, 'admin编辑新闻成功', 1502264733, 'admin', 1, '0'),
(833, 'admin新闻还原成功', 1502264864, 'admin', 1, '0'),
(834, 'admin编辑新闻成功', 1502264904, 'admin', 1, '0'),
(835, 'admin编辑新闻成功', 1502265001, 'admin', 1, '0'),
(836, 'admin编辑新闻成功', 1502265046, 'admin', 1, '0'),
(837, 'admin编辑新闻成功', 1502265190, 'admin', 1, '0'),
(838, 'admin编辑新闻成功', 1502265227, 'admin', 1, '0'),
(839, 'admin删除新闻成功', 1502265391, 'admin', 1, '0'),
(840, 'admin清空新闻回收站成功', 1502265400, 'admin', 1, '0'),
(841, 'admin编辑新闻成功', 1502265459, 'admin', 1, '0'),
(842, 'admin编辑新闻成功', 1502265541, 'admin', 1, '0'),
(843, 'admin编辑新闻成功', 1502265577, 'admin', 1, '0'),
(844, 'admin登录系统后台成功', 1502265678, 'admin', 1, '0'),
(845, 'admin编辑新闻成功', 1502265736, 'admin', 1, '0'),
(846, 'admin编辑新闻成功', 1502265768, 'admin', 1, '0'),
(847, 'admin编辑新闻成功', 1502265836, 'admin', 1, '0'),
(848, 'admin编辑新闻成功', 1502265919, 'admin', 1, '0'),
(849, 'admin登录系统后台成功', 1502265935, 'admin', 1, '0'),
(850, 'admin编辑新闻成功', 1502265955, 'admin', 1, '0'),
(851, 'admin编辑栏目分类成功', 1502265957, 'admin', 1, '0'),
(852, 'admin编辑新闻成功', 1502265986, 'admin', 1, '0'),
(853, 'admin编辑新闻成功', 1502266020, 'admin', 1, '0'),
(854, 'admin登录系统后台成功', 1502270864, 'admin', 1, '0'),
(855, 'admin添加商品分类成功', 1502271125, 'admin', 1, '0'),
(856, 'admin添加商品分类成功', 1502272807, 'admin', 1, '0'),
(857, 'admin添加商品分类成功', 1502273627, 'admin', 1, '0'),
(858, 'admin删除回收站商品成功', 1502276320, 'admin', 1, '0'),
(859, 'admin登录系统后台成功', 1502276348, 'admin', 1, '0'),
(860, 'admin新增商品成功', 1502278710, 'admin', 1, '0'),
(861, 'admin登录系统后台成功', 1502351671, 'admin', 1, '0'),
(862, 'admin批量生成二维码成功', 1502435023, 'admin', 1, '0'),
(863, 'admin批量生成二维码成功', 1502435233, 'admin', 1, '0'),
(864, 'admin批量生成二维码成功', 1502435322, 'admin', 1, '0'),
(865, 'admin批量生成二维码成功', 1502435874, 'admin', 1, '0'),
(866, 'admin批量生成二维码成功', 1502435932, 'admin', 1, '0'),
(867, 'admin批量生成二维码成功', 1502435965, 'admin', 1, '0'),
(868, 'admin批量生成二维码成功', 1502436005, 'admin', 1, '0'),
(869, 'admin批量生成二维码成功', 1502436363, 'admin', 1, '0'),
(870, 'admin批量生成二维码成功', 1502436387, 'admin', 1, '0'),
(871, 'admin登录系统后台成功', 1502450160, 'admin', 1, '0'),
(872, 'admin编辑栏目分类成功', 1502531252, 'admin', 1, '0'),
(873, 'admin编辑栏目分类成功', 1502531307, 'admin', 1, '0'),
(874, 'admin编辑栏目分类成功', 1502531670, 'admin', 1, '0'),
(875, 'admin发布新闻成功', 1502537792, 'admin', 1, '0'),
(876, 'admin登录系统后台成功', 1502677379, 'admin', 1, '0'),
(877, 'admin登录系统后台成功', 1502691095, 'admin', 1, '0'),
(878, 'admin添加权限规则成功', 1502698984, 'admin', 1, '0'),
(879, 'admin添加权限规则成功', 1502699094, 'admin', 1, '0'),
(880, 'admin添加权限规则成功', 1502699159, 'admin', 1, '0'),
(881, 'admin编辑权限规则成功', 1502699190, 'admin', 1, '0'),
(882, 'admin编辑角色成功', 1502699280, 'admin', 1, '0'),
(883, 'admin登录系统后台成功', 1502704632, 'admin', 1, '0'),
(884, 'admin发布领导人成功', 1502705224, 'admin', 1, '0'),
(885, 'admin发布领导人成功', 1502705243, 'admin', 1, '0'),
(886, 'admin删除领导职务成功', 1502705259, 'admin', 1, '0'),
(887, 'admin编辑领导职务成功', 1502705278, 'admin', 1, '0'),
(888, 'admin编辑领导职务成功', 1502705297, 'admin', 1, '0'),
(889, 'admin发布领导人成功', 1502706099, 'admin', 1, '0'),
(890, 'admin发布领导人成功', 1502706117, 'admin', 1, '0'),
(891, 'admin编辑栏目分类成功', 1502707469, 'admin', 1, '0'),
(892, 'admin编辑栏目分类成功', 1502707489, 'admin', 1, '0'),
(893, 'admin删除领导职务成功', 1502708715, 'admin', 1, '0'),
(894, 'admin编辑领导人成功', 1502708745, 'admin', 1, '0'),
(895, 'admin登录系统后台成功', 1502846593, 'admin', 1, '0'),
(896, 'admin登录系统后台成功', 1503278208, 'admin', 1, '0'),
(897, 'admin登录系统后台成功', 1503623463, 'admin', 1, '0'),
(898, 'admin删除新闻成功', 1503623510, 'admin', 1, '0'),
(899, 'admin登录系统后台成功', 1503648139, 'admin', 1, '0'),
(900, 'admin添加商品分类成功', 1503655346, 'admin', 1, '0'),
(901, 'admin添加权限规则成功', 1503711758, 'admin', 1, '0'),
(902, 'admin添加权限规则成功', 1503711944, 'admin', 1, '0'),
(903, 'admin添加商品属性成功', 1503715321, 'admin', 1, '0'),
(904, 'admin添加商品属性成功', 1503715422, 'admin', 1, '0'),
(905, 'admin添加商品属性成功', 1503715487, 'admin', 1, '0'),
(906, 'admin编辑商品属性成功', 1503720689, 'admin', 1, '0'),
(907, 'admin编辑商品属性成功', 1503720788, 'admin', 1, '0'),
(908, 'admin删除商品品牌成功', 1503721442, 'admin', 1, '0'),
(909, 'admin新增商品成功', 1503727621, 'admin', 1, '0'),
(910, 'admin删除商品成功', 1503727635, 'admin', 1, '0'),
(911, 'admin备份数据20170826145933_all_v1942.sql成功', 1503730775, 'admin', 1, '0'),
(912, 'admin备份数据20170826151024_all_v4.sql成功', 1503731425, 'admin', 1, '0'),
(913, 'admin登录系统后台成功', 1503734547, 'admin', 1, '0'),
(914, 'admin登录系统后台成功', 1503735756, 'admin', 1, '0'),
(915, 'admin登录系统后台成功', 1503735902, 'admin', 1, '0'),
(916, 'admin登录系统后台成功', 1503736203, 'admin', 1, '0'),
(917, 'admin登录系统后台成功', 1503893003, 'admin', 1, '0'),
(918, 'admin保存系统设置成功', 1503899826, 'admin', 1, '0'),
(919, 'admin备份数据20170828140841_all_v4.sql成功', 1503900522, 'admin', 1, '0'),
(920, 'admin登录系统后台成功', 1503987517, 'admin', 1, '0'),
(921, 'admin删除回收站商品成功', 1503990088, 'admin', 1, '0'),
(922, 'admin新增商品成功', 1503991729, 'admin', 1, '0'),
(923, 'admin新增商品成功', 1503991793, 'admin', 1, '0'),
(924, 'admin删除商品成功', 1503991808, 'admin', 1, '0'),
(925, 'admin新增商品成功', 1503991841, 'admin', 1, '0'),
(926, 'admin新增商品成功', 1503992440, 'admin', 1, '0'),
(927, 'admin编辑商品成功', 1503992775, 'admin', 1, '0'),
(928, 'admin编辑商品成功', 1503993119, 'admin', 1, '0'),
(929, 'admin保存系统设置成功', 1504064401, 'admin', 1, '0'),
(930, 'admin登录系统后台成功', 1504577016, 'admin', 1, '0'),
(931, 'admin登录系统后台成功', 1504577089, 'admin', 1, '0'),
(932, 'admin登录系统后台成功', 1504690168, 'admin', 1, '0'),
(933, 'admin登录系统后台成功', 1506504006, 'admin', 1, '0'),
(934, 'admin登录系统后台成功', 1506504488, 'admin', 1, '0'),
(935, 'admin登录系统后台成功', 1506562878, 'admin', 1, '0'),
(936, 'admin登录系统后台成功', 1506563141, 'admin', 1, '0'),
(937, 'admin登录系统后台成功', 1506563260, 'admin', 1, '0'),
(938, 'admin登录系统后台成功', 1506563299, 'admin', 1, '0'),
(939, 'admin登录系统后台成功', 1506563353, 'admin', 1, '0'),
(940, 'admin登录系统后台成功', 1506563451, 'admin', 1, '0'),
(941, 'admin登录系统后台成功', 1506563575, 'admin', 1, '0'),
(942, 'admin登录系统后台成功', 1506563653, 'admin', 1, '0'),
(943, 'admin登录系统后台成功', 1506563956, 'admin', 1, '0'),
(944, 'admin添加会员用户成功', 1506759731, 'admin', 1, '0'),
(945, 'admin添加会员用户成功', 1506765046, 'admin', 1, '0'),
(946, 'admin删除会员用户成功', 1506765511, 'admin', 1, '0'),
(947, 'admin添加会员用户成功', 1506765531, 'admin', 1, '0'),
(948, 'admin删除会员用户成功', 1506765661, 'admin', 1, '0'),
(949, 'admin删除会员用户成功', 1506766768, 'admin', 1, '0'),
(950, 'admin删除会员用户成功', 1506766930, 'admin', 1, '0'),
(951, 'admin删除会员用户成功', 1506766946, 'admin', 1, '0'),
(952, 'admin添加会员用户成功', 1506767127, 'admin', 1, '0'),
(953, 'admin删除会员用户成功', 1506767134, 'admin', 1, '0'),
(954, 'admin删除会员用户成功', 1506767148, 'admin', 1, '0'),
(955, 'admin登录系统后台成功', 1507529458, 'admin', 1, '0'),
(956, 'admin添加会员用户成功', 1507529517, 'admin', 1, '0'),
(957, 'admin添加会员用户成功', 1507529586, 'admin', 1, '0'),
(958, 'admin添加会员用户成功', 1507529629, 'admin', 1, '0'),
(959, 'admin删除会员用户成功', 1507529638, 'admin', 1, '0'),
(960, 'admin登录系统后台成功', 1507616065, 'admin', 1, '0'),
(961, 'admin登录系统后台成功', 1507626648, 'admin', 1, '0'),
(962, 'admin登录系统后台成功', 1507626723, 'admin', 1, '0'),
(963, 'admin添加栏目成功', 1507628177, 'admin', 1, '0'),
(964, 'admin添加栏目成功', 1507628228, 'admin', 1, '0'),
(965, 'admin添加栏目成功', 1507628280, 'admin', 1, '0'),
(966, 'admin添加栏目成功', 1507637440, 'admin', 1, '0'),
(967, 'admin登录系统后台成功', 1507684332, 'admin', 1, '0'),
(968, 'admin删除导航菜单成功', 1507687431, 'admin', 1, '0'),
(969, 'admin删除导航菜单成功', 1507687570, 'admin', 1, '0'),
(970, 'admin删除导航菜单成功', 1507687578, 'admin', 1, '0'),
(971, 'admin删除导航菜单成功', 1507687707, 'admin', 1, '0'),
(972, 'admin添加栏目成功', 1507691835, 'admin', 1, '0'),
(973, 'admin添加栏目成功', 1507699768, 'admin', 1, '0'),
(974, 'admin删除导航菜单成功', 1507699783, 'admin', 1, '0'),
(975, 'admin编辑导航分类成功', 1507700095, 'admin', 1, '0'),
(976, 'admin编辑导航分类成功', 1507700256, 'admin', 1, '0'),
(977, 'admin删除导航菜单成功', 1507702542, 'admin', 1, '0'),
(978, 'admin删除导航菜单成功', 1507702548, 'admin', 1, '0'),
(979, 'admin删除导航菜单成功', 1507702710, 'admin', 1, '0'),
(980, 'admin删除导航菜单成功', 1507702716, 'admin', 1, '0'),
(981, 'admin删除导航菜单成功', 1507703717, 'admin', 1, '0'),
(982, 'admin删除导航菜单成功', 1507703720, 'admin', 1, '0'),
(983, 'admin删除导航菜单成功', 1507703723, 'admin', 1, '0'),
(984, 'admin添加栏目成功', 1507703778, 'admin', 1, '0'),
(985, 'admin登录系统后台成功', 1507704869, 'admin', 1, '0'),
(986, 'admin登录系统后台成功', 1507705072, 'admin', 1, '0'),
(987, 'admin删除导航菜单成功', 1507712754, 'admin', 1, '0'),
(988, 'admin删除导航菜单成功', 1507712759, 'admin', 1, '0'),
(989, 'admin删除导航菜单成功', 1507712777, 'admin', 1, '0'),
(990, 'admin删除导航菜单成功', 1507712781, 'admin', 1, '0'),
(991, 'admin发布新闻成功', 1507716484, 'admin', 1, '0'),
(992, 'admin删除新闻成功', 1507717291, 'admin', 1, '0'),
(993, 'admin删除新闻成功', 1507717296, 'admin', 1, '0'),
(994, 'admin删除新闻成功', 1507717311, 'admin', 1, '0');
INSERT INTO `think_log` (`log_id`, `log_title`, `log_time`, `u_name`, `uid`, `log_state`) VALUES
(995, 'admin登录系统后台成功', 1507783810, 'admin', 1, '0'),
(996, 'admin删除新闻成功', 1507783926, 'admin', 1, '0'),
(997, 'admin删除新闻成功', 1507783930, 'admin', 1, '0'),
(998, 'admin删除新闻成功', 1507783933, 'admin', 1, '0'),
(999, 'admin删除新闻成功', 1507783936, 'admin', 1, '0'),
(1000, 'admin删除新闻成功', 1507783943, 'admin', 1, '0'),
(1001, 'admin发布新闻成功', 1507786660, 'admin', 1, '0'),
(1002, 'admin新闻还原成功', 1507788187, 'admin', 1, '0'),
(1003, 'admin删除新闻来源成功', 1507789080, 'admin', 1, '0'),
(1004, 'admin新闻还原成功', 1507789122, 'admin', 1, '0'),
(1005, 'admin新闻还原成功', 1507789133, 'admin', 1, '0'),
(1006, 'admin登录系统后台成功', 1507789756, 'admin', 1, '0'),
(1007, 'admin登录系统后台成功', 1507789833, 'admin', 1, '0'),
(1008, 'admin新闻还原成功', 1507790982, 'admin', 1, '0'),
(1009, 'admin删除新闻来源成功', 1507791030, 'admin', 1, '0'),
(1010, 'admin删除新闻来源成功', 1507791124, 'admin', 1, '0'),
(1011, 'admin删除文章属性成功', 1507791271, 'admin', 1, '0'),
(1012, 'admin添加文章属性成功', 1507791298, 'admin', 1, '0'),
(1013, 'admin新闻还原成功', 1507791314, 'admin', 1, '0'),
(1014, 'admin新闻还原成功', 1507791378, 'admin', 1, '0'),
(1015, 'admin新闻还原成功', 1507791420, 'admin', 1, '0'),
(1016, 'admin添加文章属性成功', 1507791494, 'admin', 1, '0'),
(1017, 'admin添加文章属性成功', 1507791541, 'admin', 1, '0'),
(1018, 'admin发布新闻成功', 1507794464, 'admin', 1, '0'),
(1019, 'admin发布新闻成功', 1507794592, 'admin', 1, '0'),
(1020, 'admin发布新闻成功', 1507794686, 'admin', 1, '0'),
(1021, 'admin保存系统设置成功', 1507797090, 'admin', 1, '0'),
(1022, 'admin保存系统设置成功', 1507797176, 'admin', 1, '0'),
(1023, 'admin保存系统设置成功', 1507797187, 'admin', 1, '0'),
(1024, 'admin保存系统设置成功', 1507797780, 'admin', 1, '0'),
(1025, 'admin保存系统设置成功', 1507798447, 'admin', 1, '0'),
(1026, 'admin添加角色成功', 1507801749, 'admin', 1, '0'),
(1027, 'admin添加角色成功', 1507801794, 'admin', 1, '0'),
(1028, 'admin删除角色成功', 1507802070, 'admin', 1, '0'),
(1029, 'admin添加权限规则成功', 1507804178, 'admin', 1, '0'),
(1030, 'admin删除权限成功', 1507804294, 'admin', 1, '0'),
(1031, 'admin登录系统后台成功', 1507856331, 'admin', 1, '0'),
(1032, 'admin删除友情链接成功', 1507857713, 'admin', 1, '0'),
(1033, 'admin删除友情链接成功', 1507857718, 'admin', 1, '0'),
(1034, 'admin删除友情链接成功', 1507857720, 'admin', 1, '0'),
(1035, 'admin删除友情链接成功', 1507857724, 'admin', 1, '0'),
(1036, 'admin登录系统后台成功', 1508117463, 'admin', 1, '0'),
(1037, 'admin删除新闻成功', 1508118461, 'admin', 1, '0'),
(1038, 'admin发布新闻成功', 1508118534, 'admin', 1, '0'),
(1039, 'admin发布新闻成功', 1508118635, 'admin', 1, '0'),
(1040, 'admin发布新闻成功', 1508118679, 'admin', 1, '1'),
(1041, 'admin删除日志成功', 1508121435, 'admin', 1, '0'),
(1042, 'admin添加角色成功', 1508122594, 'admin', 1, '0'),
(1043, 'admin添加管理员成功', 1508124420, 'admin', 1, '0'),
(1044, 'admin添加管理员成功', 1508124466, 'admin', 1, '0'),
(1045, 'admin添加管理员成功', 1508124519, 'admin', 1, '0'),
(1046, 'admin添加管理员成功', 1508124529, 'admin', 1, '0'),
(1047, 'admin添加管理员成功', 1508124607, 'admin', 1, '0'),
(1048, 'admin编辑管理员成功', 1508128535, 'admin', 1, '0'),
(1049, 'admin编辑管理员成功', 1508128588, 'admin', 1, '0'),
(1050, 'admin删除管理员成功', 1508135806, 'admin', 1, '0'),
(1051, 'admin添加角色成功', 1508135920, 'admin', 1, '0'),
(1052, 'admin删除角色成功', 1508136183, 'admin', 1, '0'),
(1053, 'admin备份数据{}成功', 1508150698, 'admin', 1, '0'),
(1054, 'admin备份数据{}成功', 1508150903, 'admin', 1, '0'),
(1055, 'admin备份数据{}成功', 1508150942, 'admin', 1, '0'),
(1056, 'admin备份数据{}成功', 1508150988, 'admin', 1, '0'),
(1057, 'admin备份数据{}成功', 1508151015, 'admin', 1, '0'),
(1058, 'admin备份数据{}成功', 1508151464, 'admin', 1, '0'),
(1059, 'admin备份数据{}成功', 1508153437, 'admin', 1, '0'),
(1060, 'admin恢复备份数据成功', 1508412270, 'admin', 1, '0'),
(1061, 'admin登录系统后台成功', 1508412418, 'admin', 1, '0'),
(1062, 'admin登录系统后台成功', 1508719391, 'admin', 1, '0'),
(1063, 'admin删除文章属性成功', 1508719927, 'admin', 1, '0'),
(1064, 'admin删除文章属性成功', 1508719930, 'admin', 1, '0'),
(1065, 'admin删除文章属性成功', 1508719933, 'admin', 1, '0'),
(1066, 'admin删除新闻来源成功', 1508719940, 'admin', 1, '0'),
(1067, 'admin删除新闻来源成功', 1508719943, 'admin', 1, '0'),
(1068, 'admin删除新闻来源成功', 1508719945, 'admin', 1, '0'),
(1069, 'admin新闻还原成功', 1508719974, 'admin', 1, '0'),
(1070, 'admin新闻还原成功', 1508719989, 'admin', 1, '0'),
(1071, 'admin添加文章属性成功', 1508720033, 'admin', 1, '0'),
(1072, 'admin添加文章属性成功', 1508720045, 'admin', 1, '0'),
(1073, 'admin删除导航菜单成功', 1508720125, 'admin', 1, '0'),
(1074, 'admin添加栏目成功', 1508721256, 'admin', 1, '0'),
(1075, 'admin添加栏目成功', 1508721449, 'admin', 1, '0'),
(1076, 'admin添加栏目成功', 1508721833, 'admin', 1, '0'),
(1077, 'admin添加栏目成功', 1508721884, 'admin', 1, '0'),
(1078, 'admin添加栏目成功', 1508721928, 'admin', 1, '0'),
(1079, 'admin添加栏目成功', 1508721974, 'admin', 1, '0'),
(1080, 'admin添加栏目成功', 1508722008, 'admin', 1, '0'),
(1081, 'admin发布新闻成功', 1508722557, 'admin', 1, '0'),
(1082, 'admin发布新闻成功', 1508724592, 'admin', 1, '0'),
(1083, 'admin发布新闻成功', 1508726174, 'admin', 1, '0'),
(1084, 'admin发布新闻成功', 1508726209, 'admin', 1, '0'),
(1085, 'admin发布新闻成功', 1508726587, 'admin', 1, '0'),
(1086, 'admin发布新闻成功', 1508726775, 'admin', 1, '0'),
(1087, 'admin删除新闻成功', 1508726922, 'admin', 1, '0'),
(1088, 'admin删除新闻成功', 1508752682, 'admin', 1, '0'),
(1089, 'admin登录系统后台成功', 1508807708, 'admin', 1, '0'),
(1090, 'admin编辑导航分类成功', 1508814740, 'admin', 1, '0'),
(1091, 'admin登录系统后台成功', 1508830844, 'admin', 1, '0'),
(1092, 'admin编辑导航分类成功', 1508831044, 'admin', 1, '0'),
(1093, 'admin编辑导航分类成功', 1508831292, 'admin', 1, '0'),
(1094, 'admin编辑导航分类成功', 1508831303, 'admin', 1, '0'),
(1095, 'admin编辑导航分类成功', 1508831390, 'admin', 1, '0'),
(1096, 'admin编辑导航分类成功', 1508831401, 'admin', 1, '0'),
(1097, 'admin编辑导航分类成功', 1508831410, 'admin', 1, '0'),
(1098, 'admin编辑导航分类成功', 1508832455, 'admin', 1, '0'),
(1099, 'admin编辑导航分类成功', 1508832467, 'admin', 1, '0'),
(1100, 'admin删除新闻成功', 1508832646, 'admin', 1, '0'),
(1101, 'admin添加商品分类成功', 1508837798, 'admin', 1, '0'),
(1102, 'admin添加商品分类成功', 1508840431, 'admin', 1, '0'),
(1103, 'admin添加商品分类成功', 1508840449, 'admin', 1, '0'),
(1104, 'admin添加商品分类成功', 1508840490, 'admin', 1, '0'),
(1105, 'admin添加商品分类成功', 1508840515, 'admin', 1, '0'),
(1106, 'admin添加商品分类成功', 1508840545, 'admin', 1, '0'),
(1107, 'admin登录系统后台成功', 1508892408, 'admin', 1, '0'),
(1108, 'admin登录系统后台成功', 1508899798, 'admin', 1, '0'),
(1109, 'admin登录系统后台成功', 1508903919, 'admin', 1, '0'),
(1110, 'admin备份数据{}成功', 1508911719, 'admin', 1, '0'),
(1111, 'admin恢复备份数据成功', 1508911740, 'admin', 1, '0'),
(1112, 'admin编辑权限规则成功', 1508914230, 'admin', 1, '0'),
(1113, 'admin编辑权限规则成功', 1508914243, 'admin', 1, '0'),
(1114, 'admin编辑权限规则成功', 1508914258, 'admin', 1, '0'),
(1115, 'admin编辑权限规则成功', 1508914283, 'admin', 1, '0'),
(1116, 'admin编辑权限规则成功', 1508914297, 'admin', 1, '0'),
(1117, 'admin编辑权限规则成功', 1508914311, 'admin', 1, '0'),
(1118, 'admin编辑权限规则成功', 1508914325, 'admin', 1, '0'),
(1119, 'admin编辑权限规则成功', 1508914340, 'admin', 1, '0'),
(1120, 'admin编辑权限规则成功', 1508914352, 'admin', 1, '0'),
(1121, 'admin编辑权限规则成功', 1508914365, 'admin', 1, '0'),
(1122, 'admin编辑权限规则成功', 1508914798, 'admin', 1, '0'),
(1123, 'admin删除权限成功', 1508915203, 'admin', 1, '0'),
(1124, 'admin编辑权限规则成功', 1508917585, 'admin', 1, '0'),
(1125, 'admin编辑权限规则成功', 1508917599, 'admin', 1, '0'),
(1126, 'admin编辑权限规则成功', 1508917612, 'admin', 1, '0'),
(1127, 'admin编辑权限规则成功', 1508917640, 'admin', 1, '0'),
(1128, 'admin编辑权限规则成功', 1508917818, 'admin', 1, '0'),
(1129, 'admin编辑权限规则成功', 1508917834, 'admin', 1, '0'),
(1130, 'admin编辑权限规则成功', 1508917849, 'admin', 1, '0'),
(1131, 'admin编辑权限规则成功', 1508917862, 'admin', 1, '0'),
(1132, 'admin编辑权限规则成功', 1508917879, 'admin', 1, '0'),
(1133, 'admin登录系统后台成功', 1508919412, 'admin', 1, '0'),
(1134, 'admin删除商品品牌成功', 1508919871, 'admin', 1, '0'),
(1135, 'admin删除商品品牌成功', 1508919987, 'admin', 1, '0'),
(1136, 'admin删除商品品牌成功', 1508922759, 'admin', 1, '0'),
(1137, 'admin删除商品供货商成功', 1508929593, 'admin', 1, '0'),
(1138, 'admin删除商品供货商成功', 1508929619, 'admin', 1, '0'),
(1139, 'admin登录系统后台成功', 1508981519, 'admin', 1, '0'),
(1140, 'admin添加商品规格成功', 1508989481, 'admin', 1, '0'),
(1141, 'admin添加商品规格成功', 1508989578, 'admin', 1, '0'),
(1142, 'admin添加商品规格成功', 1508990208, 'admin', 1, '0'),
(1143, 'admin添加商品规格成功', 1508993682, 'admin', 1, '0'),
(1144, 'admin编辑商品规格成功', 1508993828, 'admin', 1, '0'),
(1145, 'admin删除商品规格成功', 1508994014, 'admin', 1, '0'),
(1146, 'admin添加会员用户成功', 1509004739, 'admin', 1, '0'),
(1147, 'admin添加会员用户成功', 1509004855, 'admin', 1, '0'),
(1148, 'admin添加会员用户成功', 1509006354, 'admin', 1, '0'),
(1149, 'admin添加会员用户成功', 1509006462, 'admin', 1, '0'),
(1150, 'admin删除会员用户成功', 1509008247, 'admin', 1, '0'),
(1151, 'admin删除会员用户成功', 1509008263, 'admin', 1, '0'),
(1152, 'admin删除会员用户成功', 1509008267, 'admin', 1, '0'),
(1153, 'admin添加会员用户成功', 1509008306, 'admin', 1, '0'),
(1154, 'admin删除会员用户成功', 1509008420, 'admin', 1, '0'),
(1155, 'admin删除会员用户成功', 1509009738, 'admin', 1, '0'),
(1156, 'admin删除会员用户成功', 1509009755, 'admin', 1, '0'),
(1157, 'admin删除会员用户成功', 1509009759, 'admin', 1, '0'),
(1158, 'admin登录系统后台成功', 1509010469, 'admin', 1, '0'),
(1159, 'admin删除管理员成功', 1509010658, 'admin', 1, '0'),
(1160, 'admin删除管理员成功', 1509010724, 'admin', 1, '0'),
(1161, 'admin编辑权限规则成功', 1509012108, 'admin', 1, '0'),
(1162, 'admin登录系统后台成功', 1509017519, 'admin', 1, '0'),
(1163, 'admin登录系统后台成功', 1509021243, 'admin', 1, '0'),
(1164, 'admin登录系统后台成功', 1509153162, 'admin', 1, '0'),
(1165, 'admin编辑商品规格成功', 1509178592, 'admin', 1, '0'),
(1166, 'admin编辑商品规格成功', 1509178610, 'admin', 1, '0'),
(1167, 'admin删除商品规格成功', 1509178617, 'admin', 1, '0'),
(1168, 'admin编辑商品规格成功', 1509178633, 'admin', 1, '0'),
(1169, 'admin登录系统后台成功', 1509328356, 'admin', 1, '0'),
(1170, 'admin登录系统后台成功', 1509328394, 'admin', 1, '0'),
(1171, 'admin编辑导航分类成功', 1509329180, 'admin', 1, '0'),
(1172, 'admin编辑导航分类成功', 1509329208, 'admin', 1, '0'),
(1173, 'admin编辑导航分类成功', 1509329266, 'admin', 1, '0'),
(1174, 'admin编辑导航分类成功', 1509329290, 'admin', 1, '0'),
(1175, 'admin编辑导航分类成功', 1509329297, 'admin', 1, '0'),
(1176, 'admin编辑导航分类成功', 1509329345, 'admin', 1, '0'),
(1177, 'admin编辑导航分类成功', 1509329391, 'admin', 1, '0'),
(1178, 'admin编辑导航分类成功', 1509329414, 'admin', 1, '0'),
(1179, 'admin登录系统后台成功', 1509413296, 'admin', 1, '0'),
(1180, 'admin添加栏目成功', 1509430615, 'admin', 1, '0'),
(1181, 'admin编辑导航分类成功', 1509431436, 'admin', 1, '0'),
(1182, 'admin编辑导航分类成功', 1509431534, 'admin', 1, '0'),
(1183, 'admin编辑导航分类成功', 1509431562, 'admin', 1, '0'),
(1184, 'admin添加栏目成功', 1509431840, 'admin', 1, '0'),
(1185, 'admin编辑导航分类成功', 1509432127, 'admin', 1, '0'),
(1186, 'admin编辑导航分类成功', 1509432138, 'admin', 1, '0'),
(1187, 'admin编辑导航分类成功', 1509432153, 'admin', 1, '0'),
(1188, 'admin编辑导航分类成功', 1509432193, 'admin', 1, '0'),
(1189, 'admin删除导航菜单成功', 1509432204, 'admin', 1, '0'),
(1190, 'admin添加栏目成功', 1509432267, 'admin', 1, '0'),
(1191, 'admin编辑导航分类成功', 1509432276, 'admin', 1, '0'),
(1192, 'admin添加栏目成功', 1509432363, 'admin', 1, '0'),
(1193, 'admin编辑导航分类成功', 1509432370, 'admin', 1, '0'),
(1194, 'admin添加栏目成功', 1509432387, 'admin', 1, '0'),
(1195, 'admin删除导航菜单成功', 1509432456, 'admin', 1, '0'),
(1196, 'admin删除导航菜单成功', 1509432584, 'admin', 1, '0'),
(1197, 'admin删除导航菜单成功', 1509432588, 'admin', 1, '0'),
(1198, 'admin删除导航菜单成功', 1509432592, 'admin', 1, '0'),
(1199, 'admin删除导航菜单成功', 1509432596, 'admin', 1, '0'),
(1200, 'admin编辑导航分类成功', 1509432617, 'admin', 1, '0'),
(1201, 'admin发布新闻成功', 1509433236, 'admin', 1, '0'),
(1202, 'admin发布新闻成功', 1509434510, 'admin', 1, '0'),
(1203, 'admin发布新闻成功', 1509435836, 'admin', 1, '0'),
(1204, 'admin删除新闻成功', 1509435856, 'admin', 1, '0'),
(1205, 'admin编辑新闻成功', 1509436051, 'admin', 1, '0'),
(1206, 'admin编辑新闻成功', 1509436100, 'admin', 1, '0'),
(1207, 'admin编辑新闻成功', 1509436241, 'admin', 1, '0'),
(1208, 'admin编辑新闻成功', 1509436294, 'admin', 1, '0'),
(1209, 'admin编辑新闻成功', 1509436336, 'admin', 1, '0'),
(1210, 'admin编辑新闻成功', 1509436362, 'admin', 1, '0'),
(1211, 'admin编辑新闻成功', 1509436378, 'admin', 1, '0'),
(1212, 'admin编辑新闻成功', 1509436481, 'admin', 1, '0'),
(1213, 'admin编辑导航分类成功', 1509437279, 'admin', 1, '0'),
(1214, 'admin删除导航菜单成功', 1509437294, 'admin', 1, '0'),
(1215, 'admin编辑导航分类成功', 1509437301, 'admin', 1, '0'),
(1216, 'admin编辑导航分类成功', 1509437308, 'admin', 1, '0'),
(1217, 'admin编辑导航分类成功', 1509437316, 'admin', 1, '0'),
(1218, 'admin编辑导航分类成功', 1509437324, 'admin', 1, '0'),
(1219, 'admin编辑导航分类成功', 1509437350, 'admin', 1, '0'),
(1220, 'admin添加栏目成功', 1509437382, 'admin', 1, '0'),
(1221, 'admin编辑导航分类成功', 1509437397, 'admin', 1, '0'),
(1222, 'admin发布新闻成功', 1509437857, 'admin', 1, '0'),
(1223, 'admin发布新闻成功', 1509438317, 'admin', 1, '0'),
(1224, 'admin新增商品成功', 1509443888, 'admin', 1, '0'),
(1225, 'admin新增商品成功', 1509444254, 'admin', 1, '0'),
(1226, 'admin删除商品成功', 1509444902, 'admin', 1, '0'),
(1227, 'admin删除商品成功', 1509534595, 'admin', 1, '0'),
(1228, 'admin删除商品品牌成功', 1509534609, 'admin', 1, '0'),
(1229, 'admin删除商品品牌成功', 1509534613, 'admin', 1, '0'),
(1230, 'admin删除商品品牌成功', 1509534616, 'admin', 1, '0'),
(1231, 'admin删除商品供货商成功', 1509534627, 'admin', 1, '0'),
(1232, 'admin删除商品供货商成功', 1509534631, 'admin', 1, '0'),
(1233, 'admin添加商品分类成功', 1509535710, 'admin', 1, '0'),
(1234, 'admin添加商品分类成功', 1509535738, 'admin', 1, '0'),
(1235, 'admin新增商品成功', 1509535839, 'admin', 1, '0'),
(1236, 'admin登录系统后台成功', 1509585828, 'admin', 1, '0'),
(1237, 'admin登录系统后台成功', 1509617691, 'admin', 1, '0'),
(1238, 'admin登录系统后台成功', 1509670634, 'admin', 1, '0'),
(1239, 'admin登录系统后台成功', 1509704511, 'admin', 1, '0'),
(1240, 'admin登录系统后台成功', 1510210633, 'admin', 1, '0'),
(1241, 'admin新增商品成功', 1510211336, 'admin', 1, '0'),
(1242, 'admin登录系统后台成功', 1510212757, 'admin', 1, '0'),
(1243, 'admin下架商品成功', 1510214815, 'admin', 1, '0'),
(1244, 'admin更新商品二维码成功', 1510217213, 'admin', 1, '0'),
(1245, 'admin更新商品二维码成功', 1510217257, 'admin', 1, '0'),
(1246, 'admin更新商品二维码成功', 1510217522, 'admin', 1, '0'),
(1247, 'admin更新商品二维码成功', 1510218813, 'admin', 1, '0'),
(1248, 'admin更新商品二维码成功', 1510218859, 'admin', 1, '0'),
(1249, 'admin更新商品二维码成功', 1510218923, 'admin', 1, '0'),
(1250, 'admin上架商品成功', 1510218941, 'admin', 1, '0'),
(1251, 'admin更新商品二维码成功', 1510218964, 'admin', 1, '0'),
(1252, 'admin更新商品二维码成功', 1510219164, 'admin', 1, '0'),
(1253, 'admin添加商品分类成功', 1510221601, 'admin', 1, '0'),
(1254, 'admin编辑商品分类成功', 1510225528, 'admin', 1, '0'),
(1255, 'admin编辑商品分类成功', 1510225664, 'admin', 1, '0'),
(1256, 'admin编辑商品分类成功', 1510225687, 'admin', 1, '0'),
(1257, 'admin编辑商品分类成功', 1510225748, 'admin', 1, '0'),
(1258, 'admin登录系统后台成功', 1510276132, 'admin', 1, '0'),
(1259, 'admin添加商品分类成功', 1510281803, 'admin', 1, '0'),
(1260, 'admin添加商品分类成功', 1510281823, 'admin', 1, '0'),
(1261, 'admin新增商品成功', 1510281913, 'admin', 1, '0'),
(1262, 'admin新增商品成功', 1510281958, 'admin', 1, '0'),
(1263, 'admin新增商品成功', 1510282177, 'admin', 1, '0'),
(1264, 'admin新增商品成功', 1510282357, 'admin', 1, '0'),
(1265, 'admin更新商品二维码成功', 1510282547, 'admin', 1, '0'),
(1266, 'admin登录系统后台成功', 1510290053, 'admin', 1, '0'),
(1267, 'admin发布新闻成功', 1510314516, 'admin', 1, '0'),
(1268, 'admin发布新闻成功', 1510314548, 'admin', 1, '0'),
(1269, 'admin发布新闻成功', 1510314573, 'admin', 1, '0'),
(1270, 'admin登录系统后台成功', 1510361721, 'admin', 1, '0'),
(1271, 'admin恢复备份数据成功', 1510367018, 'admin', 1, '0'),
(1272, 'admin登录系统后台成功', 1510535350, 'admin', 1, '0'),
(1273, 'admin登录系统后台成功', 1510815291, 'admin', 1, '0'),
(1274, 'admin登录系统后台成功', 1510828895, 'admin', 1, '0'),
(1275, 'admin登录系统后台成功', 1510880342, 'admin', 1, '0'),
(1276, 'admin登录系统后台成功', 1510910328, 'admin', 1, '0'),
(1277, 'admin登录系统后台成功', 1511237676, 'admin', 1, '0'),
(1278, 'admin备份数据{}成功', 1511237699, 'admin', 1, '0'),
(1279, 'admin登录系统后台成功', 1511401923, 'admin', 1, '0'),
(1280, 'admin登录系统后台成功', 1511407642, 'admin', 1, '0'),
(1281, 'admin登录系统后台成功', 1511417333, 'admin', 1, '0'),
(1282, 'admin登录系统后台成功', 1511418391, 'admin', 1, '0'),
(1283, 'admin登录系统后台成功', 1511421031, 'admin', 1, '0'),
(1284, 'admin登录系统后台成功', 1511422178, 'admin', 1, '0'),
(1285, 'admin登录系统后台成功', 1511422496, 'admin', 1, '0'),
(1286, 'admin登录系统后台成功', 1511422768, 'admin', 1, '0'),
(1287, 'admin编辑管理员成功', 1511423716, 'admin', 1, '0'),
(1288, 'admin登录系统后台成功', 1511423738, 'admin', 1, '0'),
(1289, 'admin保存系统设置成功', 1511425233, 'admin', 1, '0'),
(1290, 'admin登录系统后台成功', 1511426499, 'admin', 1, '0'),
(1291, 'admin保存系统设置成功', 1511426529, 'admin', 1, '0'),
(1292, 'admin登录系统后台成功', 1511426589, 'admin', 1, '0'),
(1293, 'admin编辑管理员成功', 1511426618, 'admin', 1, '0'),
(1294, 'admin登录系统后台成功', 1511427304, 'admin', 1, '0'),
(1295, 'admin登录系统后台成功', 1511427389, 'admin', 1, '0'),
(1296, 'admin登录系统后台成功', 1511488280, 'admin', 1, '0'),
(1297, 'admin备份数据{}成功', 1511520796, 'admin', 1, '0'),
(1298, 'admin登录系统后台成功', 1511864739, 'admin', 1, '0'),
(1299, 'admin下架商品成功', 1511866499, 'admin', 1, '0'),
(1300, 'admin上架商品成功', 1511866506, 'admin', 1, '0'),
(1301, 'admin删除商品成功', 1511866567, 'admin', 1, '0'),
(1302, 'admin添加会员用户成功', 1511866995, 'admin', 1, '0'),
(1303, 'admin添加商品分类成功', 1511868853, 'admin', 1, '0'),
(1304, 'admin新增商品成功', 1511868942, 'admin', 1, '0'),
(1305, 'admin新增商品成功', 1511869689, 'admin', 1, '0'),
(1306, 'admin新增商品成功', 1511869736, 'admin', 1, '0'),
(1307, 'admin新增商品成功', 1511869784, 'admin', 1, '0'),
(1308, 'admin新增商品成功', 1511869839, 'admin', 1, '0'),
(1309, 'admin新增商品成功', 1511869887, 'admin', 1, '0'),
(1310, 'admin添加栏目成功', 1511870618, 'admin', 1, '0'),
(1311, 'admin编辑导航分类成功', 1511870640, 'admin', 1, '0'),
(1312, 'admin编辑导航分类成功', 1511870656, 'admin', 1, '0'),
(1313, 'admin登录系统后台成功', 1511944530, 'admin', 1, '0'),
(1314, 'admin登录系统后台成功', 1512004536, 'admin', 1, '0'),
(1315, 'admin登录系统后台成功', 1512004604, 'admin', 1, '0'),
(1316, 'admin编辑导航分类成功', 1512013163, 'admin', 1, '0'),
(1317, 'admin编辑导航分类成功', 1512013496, 'admin', 1, '0'),
(1318, 'admin编辑导航分类成功', 1512013575, 'admin', 1, '0'),
(1319, 'admin编辑导航分类成功', 1512013738, 'admin', 1, '0'),
(1320, 'admin编辑导航分类成功', 1512013765, 'admin', 1, '0'),
(1321, 'admin编辑导航分类成功', 1512013772, 'admin', 1, '0'),
(1322, 'admin编辑导航分类成功', 1512013781, 'admin', 1, '0'),
(1323, 'admin编辑导航分类成功', 1512013787, 'admin', 1, '0'),
(1324, 'admin编辑导航分类成功', 1512013798, 'admin', 1, '0'),
(1325, 'admin编辑导航分类成功', 1512013804, 'admin', 1, '0'),
(1326, 'admin删除新闻成功', 1512026200, 'admin', 1, '0'),
(1327, 'admin登录系统后台成功', 1512380427, 'admin', 1, '0'),
(1328, 'admin登录系统后台成功', 1512381359, 'admin', 1, '0'),
(1329, 'admin登录系统后台成功', 1512436111, 'admin', 1, '0'),
(1330, 'admin登录系统后台成功', 1512436790, 'admin', 1, '0'),
(1331, 'admin登录系统后台成功', 1512699319, 'admin', 1, '0'),
(1332, 'admin登录系统后台成功', 1512729304, 'admin', 1, '0'),
(1333, 'admin登录系统后台成功', 1512729981, 'admin', 1, '0'),
(1334, 'admin登录系统后台成功', 1512781339, 'admin', 1, '0'),
(1335, 'admin保存系统设置成功', 1512782235, 'admin', 1, '0'),
(1336, 'admin登录系统后台成功', 1513044601, 'admin', 1, '0'),
(1337, 'admin登录系统后台成功', 1513063892, 'admin', 1, '0'),
(1338, 'admin登录系统后台成功', 1513072518, 'admin', 1, '0'),
(1339, 'admin新增商品成功', 1513073652, 'admin', 1, '0'),
(1340, 'admin新增商品成功', 1513073701, 'admin', 1, '0'),
(1341, 'admin新增商品成功', 1513073753, 'admin', 1, '0'),
(1342, 'admin备份数据{}成功', 1513073895, 'admin', 1, '0'),
(1343, 'admin登录系统后台成功', 1513149876, 'admin', 1, '0'),
(1344, 'admin编辑商品成功', 1513154285, 'admin', 1, '0'),
(1345, 'admin编辑商品成功', 1513154755, 'admin', 1, '0'),
(1346, 'admin编辑商品成功', 1513154769, 'admin', 1, '0'),
(1347, 'admin编辑商品成功', 1513154784, 'admin', 1, '0'),
(1348, 'admin编辑商品成功', 1513154798, 'admin', 1, '0'),
(1349, 'admin编辑商品成功', 1513154815, 'admin', 1, '0'),
(1350, 'admin编辑商品成功', 1513154843, 'admin', 1, '0'),
(1351, 'admin编辑商品成功', 1513154931, 'admin', 1, '0'),
(1352, 'admin编辑商品成功', 1513154943, 'admin', 1, '0'),
(1353, 'admin编辑商品成功', 1513154956, 'admin', 1, '0'),
(1354, 'admin编辑商品成功', 1513155013, 'admin', 1, '0'),
(1355, 'admin新增商品成功', 1513155237, 'admin', 1, '0'),
(1356, 'admin编辑商品成功', 1513155659, 'admin', 1, '0'),
(1357, 'admin登录系统后台成功', 1513157953, 'admin', 1, '0'),
(1358, 'admin添加商品分类成功', 1513159092, 'admin', 1, '0'),
(1359, 'admin添加商品分类成功', 1513159159, 'admin', 1, '0'),
(1360, 'admin添加商品分类成功', 1513159202, 'admin', 1, '0'),
(1361, 'admin添加商品分类成功', 1513159272, 'admin', 1, '0'),
(1362, 'admin添加商品分类成功', 1513159311, 'admin', 1, '0'),
(1363, 'admin添加商品分类成功', 1513159351, 'admin', 1, '0'),
(1364, 'admin编辑商品分类成功', 1513159602, 'admin', 1, '0'),
(1365, 'admin编辑商品分类成功', 1513159610, 'admin', 1, '0'),
(1366, 'admin编辑商品分类成功', 1513159618, 'admin', 1, '0'),
(1367, 'admin编辑商品分类成功', 1513159631, 'admin', 1, '0'),
(1368, 'admin编辑商品分类成功', 1513159640, 'admin', 1, '0'),
(1369, 'admin登录系统后台成功', 1513245980, 'admin', 1, '0'),
(1370, 'admin新增商品成功', 1513247026, 'admin', 1, '0'),
(1371, 'admin登录系统后台成功', 1513330134, 'admin', 1, '0'),
(1372, 'admin编辑商品成功', 1513332071, 'admin', 1, '0'),
(1373, 'admin编辑商品成功', 1513332112, 'admin', 1, '0'),
(1374, 'admin新增商品成功', 1513332271, 'admin', 1, '0'),
(1375, 'admin编辑商品成功', 1513332387, 'admin', 1, '0'),
(1376, 'admin编辑商品成功', 1513332432, 'admin', 1, '0'),
(1377, 'admin编辑商品成功', 1513332720, 'admin', 1, '0'),
(1378, 'admin编辑商品成功', 1513332935, 'admin', 1, '0'),
(1379, 'admin编辑商品成功', 1513333181, 'admin', 1, '0'),
(1380, 'admin编辑商品成功', 1513333203, 'admin', 1, '0'),
(1381, 'admin编辑商品成功', 1513333216, 'admin', 1, '0'),
(1382, 'admin编辑商品成功', 1513333344, 'admin', 1, '0'),
(1383, 'admin登录系统后台成功', 1513510721, 'admin', 1, '0'),
(1384, 'admin登录系统后台成功', 1513518471, 'admin', 1, '0'),
(1385, 'admin保存系统设置成功', 1513519803, 'admin', 1, '0'),
(1386, 'admin添加会员等级成功', 1513521781, 'admin', 1, '0'),
(1387, 'admin添加会员等级成功', 1513522003, 'admin', 1, '0'),
(1388, 'admin添加会员等级成功', 1513522024, 'admin', 1, '0'),
(1389, 'admin删除会员等级成功', 1513522561, 'admin', 1, '0'),
(1390, 'admin删除会员等级成功', 1513522746, 'admin', 1, '0'),
(1391, 'admin删除会员等级成功', 1513522837, 'admin', 1, '0'),
(1392, 'admin添加会员等级成功', 1513522852, 'admin', 1, '0'),
(1393, 'admin添加会员等级成功', 1513522866, 'admin', 1, '0'),
(1394, 'admin添加会员等级成功', 1513522879, 'admin', 1, '0'),
(1395, 'admin添加文章属性成功', 1513523740, 'admin', 1, '0'),
(1396, 'admin删除文章属性成功', 1513523748, 'admin', 1, '0'),
(1397, 'admin登录系统后台成功', 1513600803, 'admin', 1, '0'),
(1398, 'admin编辑新闻成功', 1513604537, 'admin', 1, '0'),
(1399, 'admin编辑新闻成功', 1513604771, 'admin', 1, '0'),
(1400, 'admin编辑新闻成功', 1513604813, 'admin', 1, '0'),
(1401, 'admin发布新闻成功', 1513604862, 'admin', 1, '0'),
(1402, 'admin添加栏目成功', 1513604902, 'admin', 1, '0'),
(1403, 'admin登录系统后台成功', 1513605046, 'admin', 1, '0'),
(1404, 'admin编辑新闻成功', 1513605058, 'admin', 1, '0'),
(1405, 'admin登录系统后台成功', 1513689219, 'admin', 1, '0'),
(1406, 'admin登录系统后台成功', 1513731838, 'admin', 1, '0'),
(1407, 'admin登录系统后台成功', 1513756994, 'admin', 1, '0'),
(1408, 'admin编辑商品成功', 1513757418, 'admin', 1, '0'),
(1409, 'admin编辑商品成功', 1513757589, 'admin', 1, '0'),
(1410, 'admin编辑商品成功', 1513757609, 'admin', 1, '0'),
(1411, 'admin编辑商品成功', 1513757628, 'admin', 1, '0'),
(1412, 'admin编辑商品成功', 1513757646, 'admin', 1, '0'),
(1413, 'admin编辑商品成功', 1513757667, 'admin', 1, '0'),
(1414, 'admin编辑商品成功', 1513757690, 'admin', 1, '0'),
(1415, 'admin编辑商品成功', 1513757707, 'admin', 1, '0'),
(1416, 'admin编辑商品成功', 1513757729, 'admin', 1, '0'),
(1417, 'admin编辑商品成功', 1513757750, 'admin', 1, '0'),
(1418, 'admin编辑商品成功', 1513757768, 'admin', 1, '0'),
(1419, 'admin编辑商品成功', 1513758198, 'admin', 1, '0'),
(1420, 'admin编辑商品成功', 1513758210, 'admin', 1, '0'),
(1421, 'admin编辑商品成功', 1513758311, 'admin', 1, '0'),
(1422, 'admin编辑商品成功', 1513758365, 'admin', 1, '0'),
(1423, 'admin编辑商品成功', 1513758378, 'admin', 1, '0'),
(1424, 'admin编辑商品成功', 1513758397, 'admin', 1, '0'),
(1425, 'admin编辑商品成功', 1513758413, 'admin', 1, '0'),
(1426, 'admin编辑商品成功', 1513758427, 'admin', 1, '0'),
(1427, 'admin编辑商品成功', 1513758445, 'admin', 1, '0'),
(1428, 'admin编辑商品成功', 1513758459, 'admin', 1, '0'),
(1429, 'admin编辑商品成功', 1513758497, 'admin', 1, '0'),
(1430, 'admin登录系统后台成功', 1513817828, 'admin', 1, '0'),
(1431, 'admin登录系统后台成功', 1513819537, 'admin', 1, '0'),
(1432, 'admin登录系统后台成功', 1513824744, 'admin', 1, '0'),
(1433, 'admin删除新闻成功', 1513824874, 'admin', 1, '0'),
(1434, 'admin删除新闻成功', 1513824921, 'admin', 1, '0'),
(1435, 'admin删除新闻成功', 1513825037, 'admin', 1, '0'),
(1436, 'admin删除新闻成功', 1513828037, 'admin', 1, '0'),
(1437, 'admin删除新闻成功', 1513828137, 'admin', 1, '0'),
(1438, 'admin新闻还原成功', 1513828799, 'admin', 1, '0'),
(1439, 'admin删除新闻成功', 1513828807, 'admin', 1, '0'),
(1440, 'admin新闻还原成功', 1513828819, 'admin', 1, '0'),
(1441, 'admin新闻还原成功', 1513829003, 'admin', 1, '0'),
(1442, 'admin新闻还原成功', 1513829007, 'admin', 1, '0'),
(1443, 'admin下架商品成功', 1513829035, 'admin', 1, '0'),
(1444, 'admin上架商品成功', 1513829079, 'admin', 1, '0'),
(1445, 'admin登录系统后台成功', 1513839040, 'admin', 1, '0'),
(1446, 'admin新闻还原成功', 1513839430, 'admin', 1, '0'),
(1447, 'admin备份数据{}成功', 1513840926, 'admin', 1, '0'),
(1448, 'admin备份数据{}成功', 1513840976, 'admin', 1, '0'),
(1449, 'admin删除管理员成功', 1513843321, 'admin', 1, '0'),
(1450, 'admin删除管理员成功', 1513843329, 'admin', 1, '0'),
(1451, 'admin编辑管理员成功', 1513843343, 'admin', 1, '0'),
(1452, 'admin登录系统后台成功', 1513843358, 'admin', 61, '0'),
(1453, 'admin登录系统后台成功', 1513850677, 'admin', 61, '0'),
(1454, 'admin删除导航菜单成功', 1513851423, 'admin', 61, '0'),
(1455, 'admin删除导航菜单成功', 1513851427, 'admin', 61, '0'),
(1456, 'admin删除导航菜单成功', 1513851430, 'admin', 61, '0'),
(1457, 'admin删除导航菜单成功', 1513851433, 'admin', 61, '0'),
(1458, 'admin删除导航菜单成功', 1513851436, 'admin', 61, '0'),
(1459, 'admin删除导航菜单成功', 1513851439, 'admin', 61, '0'),
(1460, 'admin删除导航菜单成功', 1513851443, 'admin', 61, '0'),
(1461, 'admin删除导航菜单成功', 1513851448, 'admin', 61, '0'),
(1462, 'admin登录系统后台成功', 1513915176, 'admin', 61, '0'),
(1463, 'admin登录系统后台成功', 1513915210, 'admin', 61, '0'),
(1464, 'admin登录系统后台成功', 1513924045, 'admin', 61, '0'),
(1465, 'admin登录系统后台成功', 1513926281, 'admin', 61, '0'),
(1466, 'admin登录系统后台成功', 1513933743, 'admin', 61, '0'),
(1467, 'admin编辑商品成功', 1513934249, 'admin', 61, '0'),
(1468, 'admin登录系统后台成功', 1514021246, 'admin', 61, '0'),
(1469, 'admin登录系统后台成功', 1514042022, 'admin', 61, '0'),
(1470, 'admin添加会员等级成功', 1514042494, 'admin', 61, '0'),
(1471, 'admin添加会员等级成功', 1514042516, 'admin', 61, '0'),
(1472, 'admin添加会员等级成功', 1514042537, 'admin', 61, '0'),
(1473, 'admin还原商品成功', 1514042821, 'admin', 61, '0'),
(1474, 'admin彻底删除商品成功', 1514042829, 'admin', 61, '0'),
(1475, 'admin编辑商品成功', 1514042843, 'admin', 61, '0'),
(1476, 'admin编辑商品成功', 1514043127, 'admin', 61, '0'),
(1477, 'admin编辑商品成功', 1514043143, 'admin', 61, '0'),
(1478, 'admin登录系统后台成功', 1514049234, 'admin', 61, '0'),
(1479, 'admin登录系统后台成功', 1514121120, 'admin', 61, '0'),
(1480, 'admin添加商品规格成功', 1514121812, 'admin', 61, '0'),
(1481, 'admin登录系统后台成功', 1514210950, 'admin', 61, '0'),
(1482, 'admin登录系统后台成功', 1514212027, 'admin', 61, '0'),
(1483, 'admin保存系统设置成功', 1514213061, 'admin', 61, '0'),
(1484, 'admin保存系统设置成功', 1514213071, 'admin', 61, '0'),
(1485, 'admin保存系统设置成功', 1514213226, 'admin', 61, '0'),
(1486, 'admin保存系统设置成功', 1514213381, 'admin', 61, '0'),
(1487, 'admin保存系统设置成功', 1514213457, 'admin', 61, '0'),
(1488, 'admin保存系统设置成功', 1514213691, 'admin', 61, '0'),
(1489, 'admin保存系统设置成功', 1514217188, 'admin', 61, '0'),
(1490, 'admin登录系统后台成功', 1514218826, 'admin', 61, '0'),
(1491, 'admin保存系统设置成功', 1514219353, 'admin', 61, '0'),
(1492, 'admin登录系统后台成功', 1514454094, 'admin', 61, '0'),
(1493, 'admin添加商品规格成功', 1514454400, 'admin', 61, '0'),
(1494, 'admin登录系统后台成功', 1514517622, 'admin', 61, '0'),
(1495, 'admin编辑商品规格成功', 1514518069, 'admin', 61, '0'),
(1496, 'admin编辑商品规格成功', 1514518076, 'admin', 61, '0'),
(1497, 'admin编辑商品规格成功', 1514518083, 'admin', 61, '0'),
(1498, 'admin编辑商品规格成功', 1514518089, 'admin', 61, '0'),
(1499, 'admin登录系统后台成功', 1514529940, 'admin', 61, '0'),
(1500, 'admin编辑商品规格成功', 1514534187, 'admin', 61, '0'),
(1501, 'admin新增商品成功', 1514534741, 'admin', 61, '0'),
(1502, 'admin新增商品成功', 1514535019, 'admin', 61, '0'),
(1503, 'admin新增商品成功', 1514535111, 'admin', 61, '0'),
(1504, 'admin登录系统后台成功', 1514538547, 'admin', 61, '0'),
(1505, 'admin新增商品成功', 1514539536, 'admin', 61, '0'),
(1506, 'admin编辑商品成功', 1514540392, 'admin', 61, '0'),
(1507, 'admin编辑商品成功', 1514540825, 'admin', 61, '0'),
(1508, 'admin编辑商品成功', 1514540852, 'admin', 61, '0'),
(1509, 'admin编辑商品成功', 1514540874, 'admin', 61, '0'),
(1510, 'admin编辑商品成功', 1514540971, 'admin', 61, '0'),
(1511, 'admin编辑商品成功', 1514541023, 'admin', 61, '0'),
(1512, 'admin编辑商品成功', 1514541052, 'admin', 61, '0'),
(1513, 'admin编辑商品成功', 1514541077, 'admin', 61, '0'),
(1514, 'admin编辑商品成功', 1514541095, 'admin', 61, '0'),
(1515, 'admin编辑商品成功', 1514541130, 'admin', 61, '0'),
(1516, 'admin编辑商品成功', 1514541157, 'admin', 61, '0'),
(1517, 'admin编辑商品成功', 1514541206, 'admin', 61, '0'),
(1518, 'admin登录系统后台成功', 1514818405, 'admin', 61, '0'),
(1519, 'admin软删除商品成功', 1514818439, 'admin', 61, '0'),
(1520, 'admin软删除商品成功', 1514818444, 'admin', 61, '0'),
(1521, 'admin软删除商品成功', 1514818449, 'admin', 61, '0'),
(1522, 'admin软删除商品成功', 1514818453, 'admin', 61, '0'),
(1523, 'admin彻底删除商品成功', 1514818467, 'admin', 61, '0'),
(1524, 'admin彻底删除商品成功', 1514818474, 'admin', 61, '0'),
(1525, 'admin彻底删除商品成功', 1514818479, 'admin', 61, '0'),
(1526, 'admin彻底删除商品成功', 1514818485, 'admin', 61, '0'),
(1527, 'admin彻底删除商品成功', 1514818489, 'admin', 61, '0'),
(1528, 'admin添加商品分类成功', 1514818649, 'admin', 61, '0'),
(1529, 'admin添加商品分类成功', 1514818661, 'admin', 61, '0'),
(1530, 'admin添加商品分类成功', 1514818670, 'admin', 61, '0'),
(1531, 'admin添加商品分类成功', 1514818683, 'admin', 61, '0'),
(1532, 'admin添加商品分类成功', 1514818695, 'admin', 61, '1'),
(1533, 'admin编辑商品供货商成功', 1514823259, 'admin', 61, '0'),
(1534, 'admin编辑商品供货商成功', 1514823272, 'admin', 61, '0'),
(1535, 'admin删除商品供货商成功', 1514823276, 'admin', 61, '0'),
(1536, 'admin删除商品品牌成功', 1514823320, 'admin', 61, '0'),
(1537, 'admin删除商品品牌成功', 1514823323, 'admin', 61, '0'),
(1538, 'admin删除商品规格成功', 1514823385, 'admin', 61, '0'),
(1539, 'admin删除商品规格成功', 1514823389, 'admin', 61, '0'),
(1540, 'admin删除商品规格成功', 1514823392, 'admin', 61, '0'),
(1541, 'admin删除商品规格成功', 1514823395, 'admin', 61, '0'),
(1542, 'admin添加商品规格成功', 1514823444, 'admin', 61, '0'),
(1543, 'admin新增商品成功', 1514823523, 'admin', 61, '0'),
(1544, 'admin新增商品成功', 1514823726, 'admin', 61, '0'),
(1545, 'admin新增商品成功', 1514823802, 'admin', 61, '0'),
(1546, 'admin新增商品成功', 1514823889, 'admin', 61, '0'),
(1547, 'admin删除日志成功', 1525771844, 'admin', 61, '0'),
(1548, 'admin保存系统设置成功', 1525773182, 'admin', 61, '0'),
(1549, 'admin添加栏目成功', 1525778904, 'admin', 61, '0'),
(1550, 'admin添加栏目成功', 1525778922, 'admin', 61, '0'),
(1551, 'admin添加栏目成功', 1525778936, 'admin', 61, '0'),
(1552, 'admin添加栏目成功', 1525778953, 'admin', 61, '0'),
(1553, 'admin发布新闻成功', 1525779021, 'admin', 61, '0'),
(1554, 'admin发布新闻成功', 1525779044, 'admin', 61, '0'),
(1555, 'admin发布新闻成功', 1525779085, 'admin', 61, '0'),
(1556, 'admin添加栏目成功', 1525833225, 'admin', 61, '0'),
(1557, 'admin编辑导航分类成功', 1525833236, 'admin', 61, '0'),
(1558, 'admin编辑导航分类成功', 1525833244, 'admin', 61, '0'),
(1559, 'admin编辑导航分类成功', 1525833252, 'admin', 61, '0'),
(1560, 'admin编辑导航分类成功', 1525833268, 'admin', 61, '0'),
(1561, 'admin登录系统后台成功', 1525923776, 'admin', 61, '0'),
(1562, 'admin登录系统后台成功', 1525943345, 'admin', 61, '0'),
(1563, 'admin添加文章属性成功', 1525953309, 'admin', 61, '0'),
(1564, 'admin添加文章属性成功', 1525953320, 'admin', 61, '0'),
(1565, 'admin删除文章属性成功', 1525955084, 'admin', 61, '0'),
(1566, 'admin删除文章属性成功', 1525955086, 'admin', 61, '0'),
(1567, 'admin编辑文章属性成功', 1525955114, 'admin', 61, '0'),
(1568, 'admin编辑文章属性成功', 1525955127, 'admin', 61, '0'),
(1569, 'admin编辑新闻成功', 1525956157, 'admin', 61, '0'),
(1570, 'admin编辑新闻成功', 1525956169, 'admin', 61, '0'),
(1571, 'admin编辑新闻成功', 1525956175, 'admin', 61, '0'),
(1572, 'admin编辑新闻成功', 1525956231, 'admin', 61, '0'),
(1573, 'admin发布新闻成功', 1525956268, 'admin', 61, '0'),
(1574, 'admin发布新闻成功', 1525956306, 'admin', 61, '0'),
(1575, 'admin发布新闻成功', 1525956334, 'admin', 61, '0'),
(1576, 'admin保存系统设置成功', 1525957996, 'admin', 61, '0'),
(1577, 'admin保存系统设置成功', 1525958052, 'admin', 61, '0'),
(1578, 'admin保存系统设置成功', 1525958072, 'admin', 61, '0'),
(1579, 'admin保存系统设置成功', 1525958169, 'admin', 61, '0'),
(1580, 'admin保存系统设置成功', 1525958447, 'admin', 61, '0'),
(1581, 'admin保存系统设置成功', 1525958573, 'admin', 61, '0'),
(1582, 'admin保存系统设置成功', 1525958741, 'admin', 61, '0'),
(1583, 'admin保存系统设置成功', 1525958788, 'admin', 61, '0'),
(1584, 'admin保存系统设置成功', 1525958795, 'admin', 61, '0'),
(1585, 'admin保存系统设置成功', 1525958914, 'admin', 61, '0'),
(1586, 'admin保存系统设置成功', 1525958922, 'admin', 61, '0'),
(1587, 'admin保存系统设置成功', 1525958928, 'admin', 61, '0'),
(1588, 'admin登录系统后台成功', 1526001452, 'admin', 61, '0'),
(1589, 'admin登录系统后台成功', 1526259727, 'admin', 61, '0'),
(1590, 'admin添加栏目成功', 1526259856, 'admin', 61, '0'),
(1591, 'admin发布新闻成功', 1526264090, 'admin', 61, '0'),
(1592, 'admin添加栏目成功', 1526264434, 'admin', 61, '0'),
(1593, 'admin添加栏目成功', 1526264452, 'admin', 61, '0'),
(1594, 'admin添加栏目成功', 1526264467, 'admin', 61, '0'),
(1595, 'admin编辑新闻成功', 1526286149, 'admin', 61, '0'),
(1596, 'admin编辑新闻成功', 1526286161, 'admin', 61, '0'),
(1597, 'admin编辑新闻成功', 1526286172, 'admin', 61, '0'),
(1598, 'admin编辑新闻成功', 1526286189, 'admin', 61, '0'),
(1599, 'admin编辑新闻成功', 1526286198, 'admin', 61, '0'),
(1600, 'admin编辑新闻成功', 1526286207, 'admin', 61, '0'),
(1601, 'admin登录系统后台成功', 1526529300, 'admin', 61, '0'),
(1602, 'admin登录系统后台成功', 1526529375, 'admin', 61, '0'),
(1603, 'admin登录系统后台成功', 1526624910, 'admin', 61, '0'),
(1604, 'admin登录系统后台成功', 1526625031, 'admin', 61, '0'),
(1605, 'admin编辑新闻成功', 1526625231, 'admin', 61, '0'),
(1606, 'admin添加友情链接成功', 1526626790, 'admin', 61, '0'),
(1607, 'admin删除友情链接成功', 1526626815, 'admin', 61, '0'),
(1608, 'admin删除新闻成功', 1526628312, 'admin', 61, '0'),
(1609, 'admin登录系统后台成功', 1526869543, 'admin', 61, '0'),
(1610, 'admin登录系统后台成功', 1526869843, 'admin', 61, '0'),
(1611, 'admin登录系统后台成功', 1526872077, 'admin', 61, '0'),
(1612, 'admin登录系统后台成功', 1526883529, 'admin', 61, '0'),
(1613, 'admin登录系统后台成功', 1526883558, 'admin', 61, '0'),
(1614, 'admin登录系统后台成功', 1526883650, 'admin', 61, '0'),
(1615, 'admin登录系统后台成功', 1526883792, 'admin', 61, '0'),
(1616, 'admin登录系统后台成功', 1526883874, 'admin', 61, '0'),
(1617, 'admin登录系统后台成功', 1526883887, 'admin', 61, '0'),
(1618, 'admin登录系统后台成功', 1526883925, 'admin', 61, '0'),
(1619, 'admin发布新闻成功', 1526886004, 'admin', 61, '0'),
(1620, 'admin编辑新闻成功', 1526886020, 'admin', 61, '0'),
(1621, 'admin删除新闻成功', 1526886237, 'admin', 61, '0'),
(1622, 'admin删除新闻成功', 1526886247, 'admin', 61, '0'),
(1623, 'admin发布新闻成功', 1526886857, 'admin', 61, '0'),
(1624, 'admin编辑新闻成功', 1526886871, 'admin', 61, '0'),
(1625, 'admin删除新闻成功', 1526886883, 'admin', 61, '0'),
(1626, 'admin登录系统后台成功', 1526887066, 'admin', 61, '0'),
(1627, 'admin登录系统后台成功', 1526887113, 'admin', 61, '0'),
(1628, 'admin发布新闻成功', 1526887542, 'admin', 61, '0'),
(1629, 'admin发布新闻成功', 1526887756, 'admin', 61, '0'),
(1630, 'admin发布新闻成功', 1526887812, 'admin', 61, '0'),
(1631, 'admin发布新闻成功', 1526887893, 'admin', 61, '0'),
(1632, 'admin发布新闻成功', 1526888009, 'admin', 61, '0'),
(1633, 'admin发布新闻成功', 1526888063, 'admin', 61, '0'),
(1634, 'admin发布新闻成功', 1526888181, 'admin', 61, '0'),
(1635, 'admin发布新闻成功', 1526888274, 'admin', 61, '0'),
(1636, 'admin发布新闻成功', 1526888314, 'admin', 61, '0'),
(1637, 'admin编辑新闻成功', 1526888400, 'admin', 61, '0'),
(1638, 'admin编辑新闻成功', 1526888427, 'admin', 61, '0'),
(1639, 'admin编辑新闻成功', 1526888451, 'admin', 61, '0'),
(1640, 'admin编辑新闻成功', 1526888466, 'admin', 61, '0'),
(1641, 'admin编辑新闻成功', 1526888481, 'admin', 61, '0'),
(1642, 'admin编辑新闻成功', 1526888498, 'admin', 61, '0'),
(1643, 'admin编辑导航分类成功', 1526889235, 'admin', 61, '0'),
(1644, 'admin编辑导航分类成功', 1526889251, 'admin', 61, '0'),
(1645, 'admin编辑导航分类成功', 1526889323, 'admin', 61, '0'),
(1646, 'admin编辑导航分类成功', 1526889333, 'admin', 61, '0'),
(1647, 'admin登录系统后台成功', 1526890498, 'admin', 61, '0'),
(1648, 'admin编辑新闻成功', 1526890806, 'admin', 61, '0'),
(1649, 'admin保存系统设置成功', 1526890939, 'admin', 61, '0'),
(1650, 'admin编辑新闻成功', 1526890951, 'admin', 61, '0'),
(1651, 'admin发布新闻成功', 1526891086, 'admin', 61, '0'),
(1652, 'admin编辑新闻成功', 1526891329, 'admin', 61, '0'),
(1653, 'admin编辑新闻成功', 1526891382, 'admin', 61, '0'),
(1654, 'admin编辑新闻成功', 1526891455, 'admin', 61, '0'),
(1655, 'admin保存系统设置成功', 1526893286, 'admin', 61, '0'),
(1656, 'admin保存系统设置成功', 1526893311, 'admin', 61, '0'),
(1657, 'admin保存系统设置成功', 1526893382, 'admin', 61, '0'),
(1658, 'admin删除新闻成功', 1526894077, 'admin', 61, '0'),
(1659, 'admin删除新闻成功', 1526894097, 'admin', 61, '0'),
(1660, 'admin删除新闻成功', 1526894102, 'admin', 61, '0'),
(1661, 'admin删除新闻成功', 1526894109, 'admin', 61, '0'),
(1662, 'admin保存系统设置成功', 1526894283, 'admin', 61, '0'),
(1663, 'admin发布新闻成功', 1526895487, 'admin', 61, '0'),
(1664, 'admin编辑新闻成功', 1526895584, 'admin', 61, '0'),
(1665, 'admin发布新闻成功', 1526896137, 'admin', 61, '0'),
(1666, 'admin编辑新闻成功', 1526901974, 'admin', 61, '0'),
(1667, 'admin保存系统设置成功', 1526902135, 'admin', 61, '0'),
(1668, 'admin登录系统后台成功', 1526972782, 'admin', 61, '0'),
(1669, 'admin登录系统后台成功', 1526972892, 'admin', 61, '0'),
(1670, 'admin发布新闻成功', 1526973019, 'admin', 61, '0'),
(1671, 'admin保存系统设置成功', 1526973022, 'admin', 61, '0'),
(1672, 'admin发布新闻成功', 1526973202, 'admin', 61, '0'),
(1673, 'admin发布新闻成功', 1526973429, 'admin', 61, '0'),
(1674, 'admin编辑新闻成功', 1526973453, 'admin', 61, '0'),
(1675, 'admin登录系统后台成功', 1527126031, 'admin', 61, '0'),
(1676, 'admin发布新闻成功', 1527126119, 'admin', 61, '0'),
(1677, 'admin登录系统后台成功', 1527147561, 'admin', 61, '0'),
(1678, 'admin发布新闻成功', 1527147856, 'admin', 61, '0'),
(1679, 'admin编辑新闻成功', 1527148078, 'admin', 61, '0'),
(1680, 'admin编辑新闻成功', 1527148124, 'admin', 61, '0'),
(1681, 'admin编辑新闻成功', 1527148180, 'admin', 61, '0'),
(1682, 'admin编辑新闻成功', 1527148229, 'admin', 61, '0'),
(1683, 'admin编辑新闻成功', 1527148273, 'admin', 61, '0'),
(1684, 'admin编辑新闻成功', 1527148304, 'admin', 61, '0'),
(1685, 'admin登录系统后台成功', 1527148330, 'admin', 61, '0'),
(1686, 'admin编辑新闻成功', 1527148341, 'admin', 61, '0'),
(1687, 'admin编辑新闻成功', 1527148524, 'admin', 61, '0'),
(1688, 'admin编辑新闻成功', 1527148758, 'admin', 61, '0'),
(1689, 'admin添加文章属性成功', 1527148998, 'admin', 61, '0'),
(1690, 'admin编辑新闻成功', 1527149035, 'admin', 61, '0'),
(1691, 'admin编辑新闻成功', 1527149054, 'admin', 61, '0'),
(1692, 'admin编辑新闻成功', 1527149092, 'admin', 61, '0'),
(1693, 'admin发布新闻成功', 1527160348, 'admin', 61, '0'),
(1694, 'admin登录系统后台成功', 1527238606, 'admin', 61, '0'),
(1695, 'admin编辑新闻成功', 1527238744, 'admin', 61, '0'),
(1696, 'admin登录系统后台成功', 1527412160, 'admin', 61, '0'),
(1697, 'admin登录系统后台成功', 1528182816, 'admin', 61, '0'),
(1698, 'admin发布新闻成功', 1528182939, 'admin', 61, '0'),
(1699, 'admin登录系统后台成功', 1529377119, 'admin', 61, '0'),
(1700, 'admin登录系统后台成功', 1532053566, 'admin', 61, '0'),
(1701, 'admin登录系统后台成功', 1533748331, 'admin', 61, '0'),
(1702, 'admin删除会员等级成功', 1533750428, 'admin', 61, '0'),
(1703, 'admin删除会员用户成功', 1533750493, 'admin', 61, '0'),
(1704, 'admin删除会员用户成功', 1533750496, 'admin', 61, '0'),
(1705, 'admin删除会员用户成功', 1533750499, 'admin', 61, '0'),
(1706, 'admin删除会员用户成功', 1533750502, 'admin', 61, '0'),
(1707, 'admin删除会员用户成功', 1533750505, 'admin', 61, '0'),
(1708, 'admin删除会员用户成功', 1533750508, 'admin', 61, '0'),
(1709, 'admin删除会员用户成功', 1533750512, 'admin', 61, '0'),
(1710, 'admin登录系统后台成功', 1533826610, 'admin', 61, '0'),
(1711, 'admin删除会员等级成功', 1533826759, 'admin', 61, '0'),
(1712, 'admin删除会员等级成功', 1533826762, 'admin', 61, '0'),
(1713, 'admin添加会员等级成功', 1533827070, 'admin', 61, '0'),
(1714, 'admin添加会员等级成功', 1533827095, 'admin', 61, '0'),
(1715, 'admin添加会员等级成功', 1533827125, 'admin', 61, '0'),
(1716, 'admin添加会员等级成功', 1533828031, 'admin', 61, '0'),
(1717, 'admin添加商品分类成功', 1533831036, 'admin', 61, '0'),
(1718, 'admin添加商品分类成功', 1533831067, 'admin', 61, '0'),
(1719, 'admin添加商品分类成功', 1533831086, 'admin', 61, '0'),
(1720, 'admin删除商品规格成功', 1533831266, 'admin', 61, '0'),
(1721, 'admin删除商品规格成功', 1533831270, 'admin', 61, '0'),
(1722, 'admin删除商品规格成功', 1533831272, 'admin', 61, '0'),
(1723, 'admin添加商品规格成功', 1533831328, 'admin', 61, '0'),
(1724, 'admin登录系统后台成功', 1533910507, 'admin', 61, '0'),
(1725, 'admin添加商品分类成功', 1533910743, 'admin', 61, '0'),
(1726, 'admin编辑商品分类成功', 1533910760, 'admin', 61, '0'),
(1727, 'admin添加商品分类成功', 1533910778, 'admin', 61, '0'),
(1728, 'admin添加商品分类成功', 1533910794, 'admin', 61, '0'),
(1729, 'admin添加商品分类成功', 1533910828, 'admin', 61, '0'),
(1730, 'admin新增商品成功', 1533910934, 'admin', 61, '0'),
(1731, 'admin删除会员用户成功', 1533914456, 'admin', 61, '0'),
(1732, 'admin添加会员用户成功', 1533914544, 'admin', 61, '0'),
(1733, 'admin添加会员用户成功', 1533914761, 'admin', 61, '0'),
(1734, 'admin删除会员明细成功', 1533962802, 'admin', 61, '0'),
(1735, 'admin删除会员明细成功', 1533962835, 'admin', 61, '0'),
(1736, 'admin删除会员明细成功', 1533963043, 'admin', 61, '0'),
(1737, 'admin删除会员明细成功', 1533963451, 'admin', 61, '0'),
(1738, 'admin删除会员明细成功', 1533963643, 'admin', 61, '0'),
(1739, 'admin新增商品成功', 1533964855, 'admin', 61, '0'),
(1740, 'admin添加商品分类成功', 1533987865, 'admin', 61, '0'),
(1741, 'admin编辑商品分类成功', 1533987873, 'admin', 61, '0'),
(1742, 'admin编辑商品分类成功', 1533987880, 'admin', 61, '0'),
(1743, 'admin编辑商品分类成功', 1533987886, 'admin', 61, '0'),
(1744, 'admin编辑商品分类成功', 1533987893, 'admin', 61, '0'),
(1745, 'admin新增商品成功', 1533988013, 'admin', 61, '0'),
(1746, 'admin编辑商品成功', 1534000809, 'admin', 61, '0'),
(1747, 'admin新增商品成功', 1534001584, 'admin', 61, '0'),
(1748, 'admin删除会员明细成功', 1534007730, 'admin', 61, '0'),
(1749, 'admin删除会员明细成功', 1534007734, 'admin', 61, '0'),
(1750, 'admin删除会员明细成功', 1534007768, 'admin', 61, '0'),
(1751, 'admin删除会员明细成功', 1534007804, 'admin', 61, '0'),
(1752, 'admin添加会员用户成功', 1534010279, 'admin', 61, '0'),
(1753, 'admin添加会员用户成功', 1534010298, 'admin', 61, '0'),
(1754, 'admin添加会员用户成功', 1534010316, 'admin', 61, '0'),
(1755, 'admin登录系统后台成功', 1534010722, 'admin', 61, '0'),
(1756, 'admin保存系统设置成功', 1534010758, 'admin', 61, '0'),
(1757, 'admin登录系统后台成功', 1534010776, 'admin', 61, '0'),
(1758, 'admin登录系统后台成功', 1534042264, 'admin', 61, '0'),
(1759, 'admin删除会员用户成功', 1534047953, 'admin', 61, '0'),
(1760, 'admin登录系统后台成功', 1534065518, 'admin', 61, '0'),
(1761, 'admin登录系统后台成功', 1534068927, 'admin', 61, '0'),
(1762, 'admin登录系统后台成功', 1534070059, 'admin', 61, '0'),
(1763, 'admin保存系统设置成功', 1534070450, 'admin', 61, '0'),
(1764, 'admin保存系统设置成功', 1534071771, 'admin', 61, '0'),
(1765, 'admin保存系统设置成功', 1534072171, 'admin', 61, '0'),
(1766, 'admin添加管理员成功', 1534079137, 'admin', 61, '0'),
(1767, 'admin删除管理员成功', 1534079152, 'admin', 61, '0'),
(1768, 'admin888登录系统后台成功', 1534079170, 'admin888', 62, '0'),
(1769, 'admin888添加管理员成功', 1534079943, 'admin888', 62, '0'),
(1770, 'admin888删除管理员成功', 1534080288, 'admin888', 62, '0'),
(1771, 'admin888删除管理员成功', 1534080658, 'admin888', 62, '0'),
(1772, 'admin888删除管理员成功', 1534080661, 'admin888', 62, '0'),
(1773, 'admin888删除管理员成功', 1534080665, 'admin888', 62, '0'),
(1774, 'admin登录系统后台成功', 1534865499, 'admin', 62, '0'),
(1775, 'admin登录系统后台成功', 1534871883, 'admin', 62, '0');

-- --------------------------------------------------------

--
-- 表的结构 `think_member`
--

CREATE TABLE `think_member` (
  `member_id` int(11) NOT NULL COMMENT '主键id',
  `member_name` varchar(255) NOT NULL DEFAULT '' COMMENT '会员名称',
  `member_nickname` varchar(255) DEFAULT '' COMMENT '会员昵称',
  `member_pass` varchar(32) NOT NULL DEFAULT '' COMMENT '会员密码',
  `member_phone` varchar(30) DEFAULT NULL COMMENT '会员手机号吗',
  `member_email` varchar(255) DEFAULT NULL COMMENT '会员邮箱',
  `member_logo` varchar(255) DEFAULT NULL COMMENT '会员logo',
  `member_ip` varchar(255) DEFAULT NULL COMMENT '会员创建ip',
  `member_recommend` int(11) NOT NULL DEFAULT '0' COMMENT '推荐人ID',
  `member_content` varchar(255) NOT NULL DEFAULT '' COMMENT '会员备注',
  `member_point` float(10,2) NOT NULL DEFAULT '0.00' COMMENT '会员积分',
  `member_account` float(10,2) NOT NULL DEFAULT '0.00' COMMENT '会员账户余额',
  `member_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '会员注册时间',
  `member_last_login` varchar(50) DEFAULT NULL COMMENT '上次登录时间',
  `member_login_number` int(11) NOT NULL DEFAULT '1' COMMENT '会员登陆次数',
  `member_open` enum('10','20','30') NOT NULL DEFAULT '10' COMMENT '10：正常，20：关闭，30：软删除',
  `member_grade` int(11) DEFAULT '0' COMMENT '会员等级',
  `member_qq` varchar(255) DEFAULT NULL COMMENT '会员QQ',
  `member_open_id` varchar(50) DEFAULT '' COMMENT '会员微信openid',
  `member_head_img_url` varchar(255) DEFAULT '' COMMENT '微信头像url',
  `member_sex` enum('1','2','0') DEFAULT '0' COMMENT '性别(1,男，2：女，0：保密)',
  `member_recommend_wx_image_url` varchar(255) DEFAULT '' COMMENT '会员推荐二维码图片',
  `member_state` enum('10','20','30') NOT NULL DEFAULT '10' COMMENT '10：注册，20:补全资料未激活，30:补全资料已激活，',
  `member_subscribe` varchar(255) DEFAULT '' COMMENT '是否关注了公众号',
  `member_value` float(10,2) NOT NULL DEFAULT '0.00' COMMENT '会员值',
  `member_rebate` varchar(255) NOT NULL DEFAULT '0' COMMENT '会员等级返积分比例',
  `member_card` varchar(255) DEFAULT NULL COMMENT '会员卡号',
  `member_recharge_account` float(10,2) NOT NULL DEFAULT '0.00' COMMENT '会员充值总额'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='会员列表';

--
-- 转存表中的数据 `think_member`
--

INSERT INTO `think_member` (`member_id`, `member_name`, `member_nickname`, `member_pass`, `member_phone`, `member_email`, `member_logo`, `member_ip`, `member_recommend`, `member_content`, `member_point`, `member_account`, `member_time`, `member_last_login`, `member_login_number`, `member_open`, `member_grade`, `member_qq`, `member_open_id`, `member_head_img_url`, `member_sex`, `member_recommend_wx_image_url`, `member_state`, `member_subscribe`, `member_value`, `member_rebate`, `member_card`, `member_recharge_account`) VALUES
(11, '测试会员', '陈中', '15236268527', '17335728097', '489489489@qq.com', NULL, '127.0.0.1', 0, '', 0.00, 14105.25, '2018-08-10 15:22:24', '2018-08-10 23:22:24', 1, '10', 1, NULL, '', '', '0', '', '10', '', 5150.00, '0', NULL, 4500.00),
(12, '15236268527', 'reiojerio', '123456', '15236268527', '489489489@qq.com', NULL, '127.0.0.1', 0, '', 0.00, 19879.25, '2018-08-10 15:26:01', '2018-08-10 23:26:01', 1, '10', 1, NULL, '', '', '0', '', '10', '', 1245.20, '0', NULL, 12452.00),
(13, '', '15236268522', '', '15236268599', NULL, NULL, '127.0.0.1', 0, '', 0.00, 0.00, '2018-08-11 17:57:59', '2018-08-12 01:57:59', 1, '10', 0, NULL, '', '', '0', '', '10', '', 0.00, '0', '1526589652556', 0.00),
(15, '', '15236268569', '', '15236268569', NULL, NULL, '127.0.0.1', 0, '', 0.00, 3740.00, '2018-08-11 17:58:36', '2018-08-12 01:58:36', 1, '10', 0, NULL, '', '', '0', '', '10', '', 375.00, '0', '15236268569', 3750.00);

-- --------------------------------------------------------

--
-- 表的结构 `think_member_deposit`
--

CREATE TABLE `think_member_deposit` (
  `deposit_id` int(11) NOT NULL COMMENT '主键ID',
  `deposit_value` text COMMENT '提现说明',
  `member_id` int(11) NOT NULL DEFAULT '0' COMMENT '会员ID',
  `member_name` varchar(255) DEFAULT NULL COMMENT '会员名称',
  `deposit_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '申请会员提现时间',
  `deposit_pay_time` varchar(255) DEFAULT NULL COMMENT '完成时间',
  `deposit_prev_account` float(10,2) DEFAULT NULL COMMENT '申请前余额',
  `deposit_next_account` float(10,2) DEFAULT NULL COMMENT '申请后余额',
  `deposit_account` float(10,2) DEFAULT NULL COMMENT '申请提现金额'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='会员体现申请表';

-- --------------------------------------------------------

--
-- 表的结构 `think_member_grade`
--

CREATE TABLE `think_member_grade` (
  `grade_id` int(11) NOT NULL COMMENT '逐渐ID',
  `grade_name` varchar(255) DEFAULT NULL COMMENT '会员等级名称',
  `grade_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '添加时间',
  `grade_value` float(10,2) NOT NULL DEFAULT '0.00' COMMENT '会员等级值',
  `grade_order` int(11) NOT NULL DEFAULT '255' COMMENT '排序，默认255',
  `grade_rebate` varchar(255) NOT NULL DEFAULT '0' COMMENT '积分提现比例',
  `grade_min` varchar(255) DEFAULT NULL COMMENT '最小值',
  `grade_max` varchar(255) DEFAULT NULL COMMENT '最大值',
  `hair_number` int(11) DEFAULT '0' COMMENT '会员卡赠送理发次数',
  `card_total` float(10,2) DEFAULT NULL COMMENT '会员卡金额',
  `grade_goods_discount` varchar(20) DEFAULT NULL COMMENT '会员折扣'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='会员等级表';

--
-- 转存表中的数据 `think_member_grade`
--

INSERT INTO `think_member_grade` (`grade_id`, `grade_name`, `grade_time`, `grade_value`, `grade_order`, `grade_rebate`, `grade_min`, `grade_max`, `hair_number`, `card_total`, `grade_goods_discount`) VALUES
(4, '普通会员', '2018-08-09 15:04:30', 0.00, 1, '0', '0', '5000', 20, 200.00, '9.5'),
(5, '金牌会员', '2018-08-09 15:04:55', 0.00, 2, '0', '5000', '10000', 30, 299.00, '9'),
(6, '至尊会员', '2018-08-09 15:05:25', 0.00, 3, '0', '10000', '5000', 50, 499.00, '8.5'),
(7, '贵宾会员', '2018-08-09 15:20:31', 0.00, 4, '0', '50000', '100000', 50, 1000.00, '8');

-- --------------------------------------------------------

--
-- 表的结构 `think_member_point`
--

CREATE TABLE `think_member_point` (
  `think_member_deposit` varchar(255) DEFAULT NULL COMMENT '会员体现申请记录表',
  `id` int(11) NOT NULL,
  `mp_id` int(11) DEFAULT NULL COMMENT '会员ID',
  `mp_number` float(10,2) DEFAULT NULL COMMENT '积分量',
  `mp_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '日志时间',
  `mp_desction` varchar(255) DEFAULT NULL COMMENT '积分描述'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='会员积分及余额日志';

-- --------------------------------------------------------

--
-- 表的结构 `think_member_recharge`
--

CREATE TABLE `think_member_recharge` (
  `recharge_id` int(11) NOT NULL,
  `recharge_value` varchar(255) DEFAULT NULL COMMENT '充值说明',
  `recharge_prev` float(10,2) DEFAULT NULL COMMENT '充值前余额',
  `recharge_next` float(10,2) DEFAULT NULL COMMENT '充值后余额',
  `recharge_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '充值时间',
  `member_id` int(11) NOT NULL DEFAULT '0' COMMENT '会员id',
  `recharge_type` enum('10','20','30','40','50','60') NOT NULL DEFAULT '10' COMMENT '10:充值记录；20:消费记录;30:积分记录；40：成长值记录',
  `consume_type` int(11) DEFAULT NULL COMMENT '消费支付方式（10：现金支付；20：余额支付）',
  `recharge_count` float(10,2) DEFAULT NULL COMMENT '消费金额'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='会员充值记录';

--
-- 转存表中的数据 `think_member_recharge`
--

INSERT INTO `think_member_recharge` (`recharge_id`, `recharge_value`, `recharge_prev`, `recharge_next`, `recharge_time`, `member_id`, `recharge_type`, `consume_type`, `recharge_count`) VALUES
(1, '充值1000元，赠送100元', 12455.25, 13555.25, '2018-08-20 16:10:55', 11, '10', NULL, 1000.00),
(2, '会员成长值增长100', 12455.25, 13555.25, '2018-08-21 16:10:55', 11, '40', NULL, NULL),
(3, '尊敬的陈中:你购买了产品离子烫;花费￥50', 13555.25, 13505.25, '2018-08-21 16:11:12', 11, '20', 10, 50.00),
(4, '充值500元，赠送100元', 13505.25, 14105.25, '2018-08-21 16:43:34', 11, '10', NULL, 500.00),
(5, '会员成长值增长50', 13505.25, 14105.25, '2018-08-21 16:43:34', 11, '40', NULL, NULL),
(6, '尊敬的reiojerio:你购买了产品离子烫;原价：50，折扣：4.75', 18910.00, 18905.25, '2018-08-11 17:02:00', 12, '20', 20, 50.00),
(7, '充值200元', 18905.25, 19105.25, '2018-08-07 17:02:11', 12, '10', NULL, 200.00),
(8, '会员成长值增长20', 18905.25, 19105.25, '2018-08-21 17:02:11', 12, '40', NULL, NULL),
(9, '充值800元', 520.00, 1320.00, '2018-08-09 17:02:49', 15, '10', NULL, 800.00),
(10, '会员成长值增长80', 520.00, 1320.00, '2018-08-21 17:02:49', 15, '40', NULL, NULL),
(11, '充值1525元，赠送20元', 1320.00, 2865.00, '2018-08-19 17:02:59', 15, '10', NULL, 1525.00),
(12, '会员成长值增长152.5', 1320.00, 2865.00, '2018-08-21 17:02:59', 15, '40', NULL, NULL),
(13, '充值752元，赠送22元', 19105.25, 19879.25, '2018-08-17 17:03:15', 12, '10', NULL, 752.00),
(14, '会员成长值增长75.2', 19105.25, 19879.25, '2018-08-21 17:03:15', 12, '40', NULL, NULL),
(15, '充值1025元，赠送10元', 2865.00, 3900.00, '2018-08-14 17:04:29', 15, '10', NULL, 1025.00),
(16, '会员成长值增长102.5', 2865.00, 3900.00, '2018-08-21 17:04:29', 15, '40', NULL, NULL),
(17, '尊敬的15236268569:你购买了产品自然数码烫--中发;花费￥160', 3900.00, 3740.00, '2018-08-21 17:07:39', 15, '20', 10, 160.00);

-- --------------------------------------------------------

--
-- 表的结构 `think_message`
--

CREATE TABLE `think_message` (
  `message_id` int(11) NOT NULL,
  `message_title` varchar(255) DEFAULT NULL COMMENT '标题',
  `message_phone` varchar(255) DEFAULT NULL COMMENT '联系电话',
  `message_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '时间',
  `message_name` varchar(255) NOT NULL DEFAULT '' COMMENT '联系人',
  `message_content` longtext COMMENT '留言说明',
  `message_nid` int(11) NOT NULL DEFAULT '0' COMMENT '职位id',
  `message_city` varchar(255) DEFAULT NULL COMMENT '留言公司'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='信息留言';

--
-- 转存表中的数据 `think_message`
--

INSERT INTO `think_message` (`message_id`, `message_title`, `message_phone`, `message_time`, `message_name`, `message_content`, `message_nid`, `message_city`) VALUES
(31, '客户留言', '13223797823', '2018-06-21 08:57:29', '李梦华', '', 0, ''),
(30, '客户留言', '13223797823', '2018-06-21 08:55:06', '李梦华', '', 0, ''),
(29, '客户留言', '13223797823', '2018-06-21 08:54:03', '李梦华', '', 0, ''),
(26, '客户留言', '13223797823', '2018-06-18 02:52:36', '李梦华', '', 0, ''),
(25, '客户留言', '13223797823', '2018-06-18 02:52:36', '李梦华', '', 0, ''),
(24, '客户留言', '13223797823', '2018-06-17 10:07:50', '李梦华', '', 0, ''),
(23, '客户留言', '13223797823', '2018-06-17 10:06:30', '李梦华', '', 0, ''),
(22, '客户留言', '13223797823', '2018-06-17 10:06:02', '李梦华', '', 0, ''),
(21, '客户留言', '13223798823', '2018-06-17 10:04:59', '李梦华', '', 0, ''),
(32, '客户留言', '13223797823', '2018-06-22 05:11:12', '李华', '', 0, ''),
(33, '客户留言', '15538255196', '2018-06-27 04:32:53', '田雨', '', 0, ''),
(34, '客户留言', '15538255196', '2018-06-27 04:32:54', '田雨', '', 0, ''),
(35, '客户留言', '15538255196', '2018-06-27 04:32:59', '田雨', '', 0, ''),
(36, '客户留言', '13290703671', '2018-07-03 06:30:25', '安江龙', '', 0, ''),
(37, '客户留言', '13290703671', '2018-07-03 06:30:57', '安江龙', '', 0, ''),
(38, '客户留言', '13290703671', '2018-07-03 06:32:48', '安江龙', '', 0, ''),
(39, '客户留言', '18438405001', '2018-07-03 06:33:02', '葛佳康', '', 0, ''),
(40, '客户留言', '18438405001', '2018-07-03 06:33:08', '葛佳康', '', 0, ''),
(41, '客户留言', '13223797823', '2018-07-03 07:20:25', '李梦华', '', 0, ''),
(42, '客户留言', '13223897823', '2018-07-03 07:21:28', '李梦华', '', 0, ''),
(43, '客户留言', '13223797823', '2018-07-03 07:22:55', '李梦华', '', 0, ''),
(44, '客户留言', '13223797823', '2018-07-03 07:24:41', '顾青梅', '', 0, ''),
(45, '客户留言', '13223797823', '2018-07-03 07:25:56', '顾青梅', '', 0, '');

-- --------------------------------------------------------

--
-- 表的结构 `think_news`
--

CREATE TABLE `think_news` (
  `n_id` int(36) NOT NULL,
  `news_title` varchar(255) NOT NULL COMMENT '文章标题',
  `news_classid` int(11) NOT NULL DEFAULT '0' COMMENT '新闻分类ID',
  `news_class1` int(11) DEFAULT NULL COMMENT '一级分类',
  `news_class2` int(11) DEFAULT NULL COMMENT '二级分类',
  `news_class3` int(11) DEFAULT '0' COMMENT '三级分类',
  `news_titleshort` varchar(100) DEFAULT NULL COMMENT '简短标题',
  `news_key` varchar(100) DEFAULT '' COMMENT '文章关键字',
  `news_auto` varchar(20) DEFAULT '' COMMENT '发布者',
  `news_source` varchar(20) DEFAULT '未知' COMMENT '来源',
  `news_content` longtext COMMENT '新闻内容',
  `news_scontent` varchar(255) DEFAULT '' COMMENT '新闻简介',
  `news_hits` int(11) DEFAULT '200' COMMENT '点击率',
  `news_img` varchar(100) DEFAULT '' COMMENT '大图地址',
  `news_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '发布时间',
  `news_flag` int(11) DEFAULT NULL COMMENT '文章属性',
  `news_talk` tinyint(3) DEFAULT NULL COMMENT '允许评论',
  `news_delete` enum('10','20','30') NOT NULL DEFAULT '10' COMMENT '新闻状态(20：删除，10：正常，30：未审核)',
  `news_orginaze` varchar(32) DEFAULT NULL COMMENT '发布红头文件机构',
  `news_show` enum('10','20') NOT NULL DEFAULT '20' COMMENT '页面特殊显示(10显示20隐藏)',
  `news_moreImg` text COMMENT '新闻多图',
  `news_xinzi` varchar(255) DEFAULT '' COMMENT '薪资'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='新闻';

--
-- 转存表中的数据 `think_news`
--

INSERT INTO `think_news` (`n_id`, `news_title`, `news_classid`, `news_class1`, `news_class2`, `news_class3`, `news_titleshort`, `news_key`, `news_auto`, `news_source`, `news_content`, `news_scontent`, `news_hits`, `news_img`, `news_time`, `news_flag`, `news_talk`, `news_delete`, `news_orginaze`, `news_show`, `news_moreImg`, `news_xinzi`) VALUES
(26, '美团外卖骑手', 18, NULL, NULL, 0, '', '', '', '0', '<p style="text-align: justify;"><span style="font-size: 20px;"><strong>一，招聘要求：1,男女不限，18—50岁，身体健康！公司可以提供一辆耐跑电动车，自己准备一部智能手机；</strong></span></p><p style="text-align: justify;"><span style="font-size: 20px;"><strong><span style="font-size: 16px;">二,工作内容：负责区域内的外卖取餐送餐，工作简单，易上手，入职有老员工带你！<br/>三、薪资待遇：正常工作：每月4000～6000<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;努力工作：每月6000～8000<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;使劲工作：每月8000+上不封顶，多劳多得！<br/>四、福利待遇：每月休息四天; 免费培训; 提供住宿电动车和各种补贴; 话补+远距离补助+全勤奖+餐补+大单补助+恶劣天气补助+节假日补助+早晚班加班补助等等<br/>五、晋升空间大：骑手——队长——站长——城市经理！</span></strong><strong><span style="font-size: 16px;"></span></strong></span></p><p style="text-align: justify;"><span style="font-size: 20px;"><strong><span style="font-size: 16px;">六,联系方式：任经理15036161032（微信号同手机号）</span></strong><strong><span style="font-size: 16px;"></span></strong></span></p><p style="text-align: justify;"><span style="font-size: 20px;">&nbsp;</span></p><p><br/></p>', '', 200, 'uploads/20180521/6a316717f5e93419cb206a9f5e546c4a.png', '2018-05-24 07:59:18', 5, NULL, '10', NULL, '', '', '4000-8000'),
(27, '护工', 18, NULL, NULL, 0, '', '', '', '0', '<p style="text-align: justify;"><span style="font-size: 16px;">一，招聘要求：<br/>1，男女不限年龄35-55岁 ，五官端正，身体健康，有身份证 </span></p><p style="text-align: justify;"><span style="font-size: 16px;">二，工作内容：&nbsp;</span></p><p style="text-align: justify;"><span style="font-size: 16px;">1、上门老人护理——对于生活不能自己或半自理的老人提供上门护理服务，如助餐、助浴、户外照料、变换体位、移乘护理、起居料理、协护料理等。&nbsp;</span></p><p style="text-align: justify;"><span style="font-size: 16px;">2、上门康复护理——有针对性的进行肢体康复训练，提高老人和患者的自理生活能力，改善其生活质量。</span></p><p style="text-align: justify;"><span style="font-size: 16px;">3、医院陪护服务——上门为住院患者提供生活陪护服务及陪诊服务</span></p><p style="text-align: justify;"><span style="font-size: 16px;">4、舒缓疗护病房——”舒缓疗护“是在舒适温馨的环境中为患者提供症状缓解及身体照护，使病痛得到最大程度缓解的专业医疗服务。</span></p><p style="text-align: justify;"><span style="font-size: 16px;">三，工资待遇：<br/>1,护工：综合工资：3500—6000元（有生活保障）公司免费吃住，统一发放工作服。免费培训。培训发上岗证书。</span></p><p style="text-align: justify;"><span style="font-size: 16px;">四，工作地点：全郑州市家庭医院养老院康复中心等等均可安排，</span></p><p style="text-align: justify;"><span style="font-size: 16px;">五，联系方式：任经理15036161032（微信号同手机号）</span></p><p><br/></p>', '', 200, 'uploads/20180521/69c58bca9ff42111ffd8a040870c4c4d.png', '2018-05-21 07:30:12', 0, NULL, '10', NULL, '', '', ''),
(28, '中国邮政', 18, NULL, NULL, 0, '', '', '', '0', '<p style="text-align: justify;"><span style="font-size: 16px;">中国邮政!招聘【长期工】【高薪日结】</span></p><p style="text-align: justify;"><span style="font-size: 16px;">一，招聘要求：16-50岁，男女不限，身体健康。</span></p><p style="text-align: justify;"><span style="font-size: 16px;">二、工作岗位：</span></p><p style="text-align: justify;"><span style="font-size: 16px;">1、拣货组拣货员：使用手持、拣货小车在库区将顾客订单货物拣出来；</span></p><p style="text-align: justify;"><span style="font-size: 16px;">2、组二次分拣员：使用扫码器、电脑、分拣分拣每个订单的货物；</span></p><p style="text-align: justify;"><span style="font-size: 16px;">3、生产组包装员：在包装台完成货物复核、打包工作；</span></p><p style="text-align: justify;"><span style="font-size: 16px;">4、生产组支持员：耗材的补充、分发；</span></p><p style="text-align: justify;"><span style="font-size: 16px;">5、发运组快递分拣员：将包裹按快递公司的不同分拣出来；</span></p><p style="text-align: justify;"><span style="font-size: 16px;">6、预包装组人员：主要为包装、贴码工作。</span></p><p style="text-align: justify;"><span style="font-size: 16px;">三、工资待遇：</span></p><p style="text-align: justify;"><span style="font-size: 16px;">【临时工】日结工资，工资100-150一天</span></p><p style="text-align: justify;"><span style="font-size: 16px;">管住！中午一餐！下班结工资！</span></p><p style="text-align: justify;"><span style="font-size: 16px;">【长期工】：前7天每小时10元，7天过后计件工资，多劳多得！计件工资4000—6000多劳多得</span></p><p style="text-align: justify;"><span style="font-size: 16px;">四，联系方式：任经理15036161032（微信号同手机号）</span></p><p><br/></p>', '', 200, 'uploads/20180521/5e7cb549ebc348e30b4c38fb35cb28cb.png', '2018-05-21 07:31:33', 0, NULL, '10', NULL, '', '', ''),
(29, '中国邮政', 18, NULL, NULL, 0, '', '', '', '0', '<p style="text-align: justify;"><span style="font-size: 18px;"><strong>中国邮政!招聘【长期工】【高薪日结】</strong></span></p><p style="text-align: justify;"><span style="font-size: 18px;"><strong><span style="font-size: 16px;">一，招聘要求：16-50岁，男女不限，身体健康。</span></strong></span></p><p style="text-align: justify;"><span style="font-size: 18px;"><strong><span style="font-size: 16px;">二、工作岗位：</span></strong></span></p><p style="text-align: justify;"><span style="font-size: 18px;"><strong><span style="font-size: 16px;">1、拣货组拣货员：使用手持、拣货小车在库区将顾客订单货物拣出来；</span></strong></span></p><p style="text-align: justify;"><span style="font-size: 18px;"><strong><span style="font-size: 16px;">2、组二次分拣员：使用扫码器、电脑、分拣分拣每个订单的货物；</span></strong></span></p><p style="text-align: justify;"><span style="font-size: 18px;"><strong><span style="font-size: 16px;">3、生产组包装员：在包装台完成货物复核、打包工作；</span></strong></span></p><p style="text-align: justify;"><span style="font-size: 18px;"><strong><span style="font-size: 16px;">4、生产组支持员：耗材的补充、分发；</span></strong></span></p><p style="text-align: justify;"><span style="font-size: 18px;"><strong><span style="font-size: 16px;">5、发运组快递分拣员：将包裹按快递公司的不同分拣出来；</span></strong></span></p><p style="text-align: justify;"><span style="font-size: 18px;"><strong><span style="font-size: 16px;">6、预包装组人员：主要为包装、贴码工作。</span></strong></span></p><p style="text-align: justify;"><span style="font-size: 18px;"><strong><span style="font-size: 16px;">三、工资待遇：</span></strong></span></p><p style="text-align: justify;"><span style="font-size: 18px;"><strong><span style="font-size: 16px;">【临时工】日结工资，工资100-150一天</span></strong></span></p><p style="text-align: justify;"><span style="font-size: 18px;"><strong><span style="font-size: 16px;">管住！中午一餐！下班结工资！</span></strong></span></p><p style="text-align: justify;"><span style="font-size: 18px;"><strong><span style="font-size: 16px;">【长期工】：前7天每小时10元，7天过后计件工资，多劳多得！计件工资4000—6000多劳多得</span></strong></span></p><p style="text-align: justify;"><span style="font-size: 18px;"><strong><span style="font-size: 16px;">四，联系方式：任经理15036161032（微信号同手机号）</span></strong></span></p><p><br/></p>', '', 200, 'uploads/20180521/37771e63cb1a106f15d88ea4bd9392c1.png', '2018-05-21 08:29:42', 5, NULL, '10', NULL, '', '', '4000-6000'),
(30, '保姆护工', 18, NULL, NULL, 0, '', '', '', '0', '<p style="text-align: justify;"><span style="font-size: 20px;">一，招聘要求：<br/>1，男女不限年龄35-55岁 ，五官端正，身体健康，有身份证 </span></p><p style="text-align: justify;"><span style="font-size: 20px;">二，工作内容：&nbsp;</span></p><p style="text-align: justify;"><span style="font-size: 20px;">1、上门老人护理——对于生活不能自己或半自理的老人提供上门护理服务，如助餐、助浴、户外照料、变换体位、移乘护理、起居料理、协护料理等。&nbsp;</span></p><p style="text-align: justify;"><span style="font-size: 20px;">2、上门康复护理——有针对性的进行肢体康复训练，提高老人和患者的自理生活能力，改善其生活质量。</span></p><p style="text-align: justify;"><span style="font-size: 20px;">3、医院陪护服务——上门为住院患者提供生活陪护服务及陪诊服务</span></p><p style="text-align: justify;"><span style="font-size: 20px;">4、舒缓疗护病房——”舒缓疗护“是在舒适温馨的环境中为患者提供症状缓解及身体照护，使病痛得到最大程度缓解的专业医疗服务。</span></p><p style="text-align: justify;"><span style="font-size: 20px;">三，工资待遇：<br/>1,护工：综合工资：3500—6000元（有生活保障）公司免费吃住，统一发放工作服。免费培训。培训发上岗证书。</span></p><p style="text-align: justify;"><span style="font-size: 20px;">四，工作地点：全郑州市家庭医院养老院康复中心等等均可安排，</span></p><p style="text-align: justify;"><span style="font-size: 20px;">五，联系方式：任经理15036161032（微信号同手机号）</span></p><p style="text-align: justify;"><span style="font-size: 20px;">&nbsp;</span></p><p><br/></p>', '', 200, 'uploads/20180521/ea688d5c9a68aea1f8112ac2335c14b4.png', '2018-05-24 08:04:52', 10, NULL, '10', NULL, '', '', '3500-6000'),
(31, '郑州富士康', 16, NULL, NULL, 0, '', '', '', '0', '<p style="text-align: justify;"><span style="font-size: 16px;">一，招聘要求<br/>1、年龄：16-45周岁，男女不限，身体健康，学历不限<br/>2、二代身份证有效原件（临时。消磁。过期身份证必须提前说明）</span></p><p style="text-align: justify;"><span style="font-size: 16px;">二，工作内容<br/>1.普工（岗位涉及苹果手机以及苹果电脑的测试、组装、包装、操作简单易学）工作轻松，无任何危险性,不穿无尘服。<br/>2.技术工/学徒工（有工作经验者优先，从普工报名，入职满一个月后根据个人能力，由厂区分配岗位，工资可达4500-5000）QC，质检，仓管员，SMT、机台操作、维修、装配、测试等岗位。<br/>三，工作时间：两班制，每天工作10小时左右，月休4天，可以根据个人需要调休。<br/>四，薪资说明：<br/>综合工资：3500-5000（底薪＋加班费＋岗位补贴＋全勤＋奖金等）<br/>薪资发放日：每月7号发上个月工资<br/>基本工资：a,试用期1900元/月；综合工资底薪1900＋加班费＋200元全勤＋200元岗位补贴</span></p><p style="text-align: justify;"><span style="font-size: 16px;">b,&nbsp;转正基本工资2100元/月；综合工资约3850--5200<br/>转正奖金：200-500元<br/>旺季留任奖：500—1000元<br/>年终奖金：每年春节前按当年度工作绩效及整体贡献发放年终奖。<br/>五，福利待遇及吃住情况：<br/>1、休假：员工享受法定节假日、婚假、丧假、产假、带薪年休假；<br/>2、贴心的福利：生日礼券、结婚礼金、生育津贴等；<br/>3、活动：交友晚会、联谊酒会、球类比赛、艺文表演；<br/>4、便利设施：室内篮(羽)球场、图书馆、便利商店、银行、各式美食餐厅等。<br/>吃住情况<br/>伙食：公司园区设有八大菜系，如：豫、川、粤、鲁、苏、浙、湘、徽等菜系；每周一、三、五提供水果；<br/>住宿：公司提供宿舍楼，宿舍6人间，宿舍区设有空调、风扇、24小时饮用水、独立卫浴、衣柜、影视厅、自动售卖机等方便员工生活。<br/>厂车：宿舍与工厂间开通厂车接送。</span></p><p style="text-align: justify;"><span style="font-size: 16px;">六，联系方式：任经理15036161032（微信号同手机号）</span></p><p><br/></p>', '', 200, 'uploads/20180521/c374d46a963ecf15fee751847c0996db.png', '2018-05-21 07:41:21', 6, NULL, '10', NULL, '', '', '3500+'),
(32, '郑州华美科技', 16, NULL, NULL, 0, '', '', '', '0', '<p style="text-align: justify;"><span style="font-size: 20px;"><strong>郑州华美彩印厂主要生产苹果手机盒和各种高档的烟酒礼品纸盒，工作轻松，坐着工作急聘长短期工、短期工、实习生！，学生工！！<br/>一，招聘要求:16-50周岁，身体健康，纹身烟疤，临时身份证、学生证都可以。<br/>二，工资待遇:超高保底3200+加班一个小时12元+绩效奖金+岗位补贴=综合收入3500--4800，吃住一日三餐全部免费。可预支工资。<br/>三，福利待遇:免费食宿。包吃包住。厂区住宿：均配有冲凉房、洗手间、自动饮水机、空调等设施。<br/>四，其他待遇：<br/>1、奖金：发放年终奖和生产激励奖金（生产旺季，依绩效核给）发放端午、中秋等节日礼金及春节开工红包<br/>2、保险：公司依法为员工办理社会保险，并额外为员工办理医疗自保基金，提供双份保障</strong></span></p><p style="text-align: justify;"><span style="font-size: 20px;"><strong><span style="font-size: 16px;">五，联系方式：任经理15036161032（微信号同手机号）</span></strong></span></p><p><br/></p>', '', 200, 'uploads/20180521/a3fb0db6c0bace9c480d4e1a86488df2.png', '2018-05-24 07:49:40', 5, NULL, '10', NULL, '', '', '3500-4500/月'),
(33, '金星啤酒厂', 16, NULL, NULL, 0, '', '', '', '0', '<p style="text-align: justify;"><span style="font-size: 16px;">一、招聘要求：</span></p><p style="text-align: justify;"><span style="font-size: 16px;">1、年龄16-50周岁,男女不限，长期工，短期工，暑假工；</span></p><p style="text-align: justify;"><span style="font-size: 16px;">2、身体健康，无残疾，无传染性疾病；</span></p><p style="text-align: justify;"><span style="font-size: 16px;">3、有第二代有效身份证或临时身份证，消磁均可。</span></p><p style="text-align: justify;"><span style="font-size: 16px;">二 工资待遇： </span></p><p style="text-align: justify;"><span style="font-size: 16px;">保底工资3500以上，旺季可达到4500-5500以上 &nbsp;当天面试 当天入‌‌职进厂，包吃住</span></p><p style="text-align: justify;"><span style="font-size: 16px;">三，招聘职位：</span></p><p style="text-align: justify;"><span style="font-size: 16px;">成品包装工、质检员、流水线作业员、叉车工、仓管员、拉瓶工、上瓶工 检验员 &nbsp;包装工 搬运工</span></p><p style="text-align: justify;"><span style="font-size: 16px;">免费住宿， （夫妻双方同时入职，一个月后可申请夫妻房！）</span></p><p style="text-align: justify;"><span style="font-size: 16px;">免费工作餐，（专职厨师做饭，干净营养健康！） </span></p><p style="text-align: justify;"><span style="font-size: 16px;">免费洗浴！公司自建有职工浴池，可天天免费洗澡，签订正式劳动合同，节假日有福利发放</span></p><p style="text-align: justify;"><span style="font-size: 16px;">&nbsp;</span></p><p style="text-align: justify;"><span style="font-size: 16px;">四，联系方式：任经理15036161032（微信号同手机号）</span></p><p><br/></p>', '', 200, 'uploads/20180521/3afbc9776cd2c1c06a792da6eff82413.png', '2018-05-21 07:40:00', 5, NULL, '10', NULL, '', '', '3500+'),
(34, '康乃馨护理', 18, NULL, NULL, 0, '', '', '', '0', '<p>40-55岁，主要护理老人及病人，保底3500～5500元，免费培训上岗。必须有健康证</p><p><br/></p>', '', 200, '', '2018-05-21 08:24:46', 0, NULL, '10', NULL, '', '', '保底3500～5500元'),
(25, '河南康乃馨居家养老服务有限公司', 18, NULL, NULL, 0, '', '', '', '0', '<p style="text-align: justify;"><span style="font-size: 16px;">一，招聘要求：<br/>1，男女不限年龄35-55岁 ，五官端正，身体健康，有身份证 </span></p><p style="text-align: justify;"><span style="font-size: 16px;">二，工作内容：&nbsp;</span></p><p style="text-align: justify;"><span style="font-size: 16px;">1、上门老人护理——对于生活不能自己或半自理的老人提供上门护理服务，如助餐、助浴、户外照料、变换体位、移乘护理、起居料理、协护料理等。&nbsp;</span></p><p style="text-align: justify;"><span style="font-size: 16px;">2、上门康复护理——有针对性的进行肢体康复训练，提高老人和患者的自理生活能力，改善其生活质量。</span></p><p style="text-align: justify;"><span style="font-size: 16px;">3、医院陪护服务——上门为住院患者提供生活陪护服务及陪诊服务</span></p><p style="text-align: justify;"><span style="font-size: 16px;">4、舒缓疗护病房——”舒缓疗护“是在舒适温馨的环境中为患者提供症状缓解及身体照护，使病痛得到最大程度缓解的专业医疗服务。</span></p><p style="text-align: justify;"><span style="font-size: 16px;">三，工资待遇：<br/>1,护工：综合工资：3500—6000元（有生活保障）公司免费吃住，统一发放工作服。免费培训。培训发上岗证书。</span></p><p style="text-align: justify;"><span style="font-size: 16px;">四，工作地点：全郑州市家庭医院养老院康复中心等等均可安排，</span></p><p style="text-align: justify;"><span style="font-size: 16px;">五，联系方式：任经理15036161032（微信号同手机号）</span></p><p><br/></p>', '', 200, 'uploads/20180521/f701ee589065922b793f7f9eec7dc8f4.png', '2018-05-21 07:25:42', 0, NULL, '10', NULL, '', '', ''),
(40, '双悦公司直聘', 18, NULL, NULL, 0, '', '双悦公司直聘', '', '0', '<p style="text-align: justify; text-indent: 2em;">双悦直聘，主要从事人才招聘，人力输送，人才外包等业务，为合作企业年输送达上万人，现因公司发展需要，诚聘培训老师一名（男性），招聘专员6名。面试专员2名，前台一名。</p><p style="text-align: justify; text-indent: 2em;">一，岗位要求,<br/>1，年龄17-35岁，具有良好的职业道德，踏实稳重，懂得感恩，有上进心，喜欢人力资源行业，敢于挑战高薪。<br/>二：工作内容和待遇：</p><p style="text-align: justify; text-indent: 2em;">1，培训老师：安排工人入职，入职之前的岗前培训，协助总经理完成各个企业的工人入职和调岗工作。（工资面议）<br/>2，招聘专员：负责为其他企业的人员招聘面试工作，网上发布招聘信息，接听电话，微信聊天等等邀约面试。（工资具体咨询）</p><p style="text-align: justify; text-indent: 2em;">3，面试专员：面对面给求职者讲解各种工作中的疑问，帮助求职者选择合适的工作岗位。（工资具体咨询）</p><p style="text-align: justify; text-indent: 2em;">4，前台接待：主要负责来面试人员的接待工作和整理入职资料。5，本公司平均工资3000-8000之间，具体细节可以微信咨询 ，微信号同手机号15036161032</p><p style="text-align: justify; text-indent: 2em;">,三，其他福利及工作时间：1公司设有生日红包，贡献奖，父母节日红包，员工聚餐旅游等各种福利。</p><p style="text-align: justify; text-indent: 2em;">2，工作时间： 上午8:30--12:00 下午13:30--18:00&nbsp;每月4天休息（调休）&nbsp;周一到周日自由选择一天休息。</p><p style="text-align: justify; text-indent: 2em;">3，标准两室一厅，宿舍有淋雨，空调，独立卫生间，厨房可以做饭。宿舍全部是女孩，安全卫生。</p><p><br/></p>', '', 200, 'uploads/20180524/602b32214acf5e73cb2523050f02e4a0.jpg', '2018-05-24 08:03:55', 10, NULL, '10', NULL, '', '', '3000-8000/月'),
(39, '上海昌硕有限公司', 17, NULL, NULL, 0, '', '上海昌硕', '', '0', '<p><span style="font-size: 20px;"><strong>上海昌硕有限公司成立于2004年，主要从事笔记本电脑，手机等电子产品的研发与制造</strong></span></p><p><span style="font-size: 20px;"><strong>一，招聘条件：16-45岁，男女不限，身份证不能过期，需要自带被褥</strong></span></p><p><span style="font-size: 20px;"><strong>二，工资待遇 ：</strong></span></p><p><span style="font-size: 20px;"><strong>1，基本工资2430元+加班费+奖金+津贴，大专以上学历+100元补助 出勤满月综合工资4500-5500元，每个月10号发工资</strong></span></p><p><span style="font-size: 20px;"><strong>2，加班费，平时加班20.9元/小时，周末加班27.9元/小时，法定节假日加班41.8元/小时</strong></span></p><p><span style="font-size: 20px;"><strong>3，其他奖金，工龄工资：满一个月100元，三个月后加40元，六个月再加40元（共180元）</strong></span></p><p><span style="font-size: 20px;"><strong>4，技能津贴：50-150元，</strong></span></p><p><span style="font-size: 20px;"><strong>5，生产奖金：50元/月</strong></span></p><p><span style="font-size: 20px;"><strong>6，上班津贴：白班津贴6元/天，夜班津贴9元/天</strong></span></p><p><span style="font-size: 20px;"><strong>三，吃住情况：企业有食堂，员工自行消费就餐，厂区补贴360元/月，随工资一起发放。</strong></span></p><p><span style="font-size: 20px;"><strong>住宿：工厂提供住宿，有空调，淋雨，卫生间，洗衣间，浴室等等</strong></span></p><p><span style="font-size: 20px;"><strong>四，联系方式：任经理15036161032（微信号同手机号）</strong></span></p><p><br/></p>', '', 200, 'uploads/20180522/3a57e14c286f41f6fb7a28c56cfe032b.png', '2018-05-24 08:04:14', 6, NULL, '10', NULL, '', '', '4500-5500以上'),
(37, '郑州三全食品厂', 16, NULL, NULL, 0, '', '郑州三全食品厂', '', '0', '<p>郑州三全食品厂现大量招聘学生工、长短期工，当天入职，欢迎广大求职者的加入<br/>一、【招工岗位】：<br/>普工、包装工、制作工（汤圆，水饺，粽子，面点等的制作，装袋，装箱，封口）贴商标，打标生产日期<br/>二、【招聘要求】：<br/>1、16-50岁，男女不限，女工条件好可放宽年纪。干净卫生注重个人卫生者优先录用<br/>2、身体健康，无传染性疾病<br/>三、【薪资待遇】：<br/>多劳多得，月薪3500-4800元以上，熟练工可达5500元以上。<br/>四、【工作时间】：<br/>1、上六休一，月可调休四天,可申请加班。加班有加班费。<br/>2、每天工作8-10小时<br/>五、【吃住待遇】：<br/>1、提供免费工作餐，（两荤一素一汤主食免费添加）<br/>2、标准公寓式住宿（4-6人间）空调、热水、独立卫生间齐全（朋友一起的可调配到一个宿舍）<br/>3、连续工作满三个月后工开始享受工龄补贴;缴纳保险</p><p>六，联系方式：任经理15036161032（微信号同手机号）</p><p><br/></p>', '', 200, 'uploads/20180522/64da0e968757c8a73c54e51e04ef4fe5.png', '2018-05-22 07:10:19', 5, NULL, '10', NULL, '', '', '3500-5500'),
(38, '郑州海马汽车', 16, NULL, NULL, 0, '', '郑州海马汽车', '', '0', '<p><span style="font-size: 20px;"><strong>郑州海马汽车生产新能源海马轿车的，诚聘普工，技工，长期工，短期工，实习生。</strong><br/>一、招聘要求：生产线普通操作工（100人）<br/>基本要求：年龄16-45岁。<br/>具体工位：冲压，焊接，组装，模具工。数控，装配技师、物料员，检验员等<br/>薪资：基本薪资+绩效考核+岗位技能补贴月综合工资4500-5500以上<br/>工作时间： 5天8小时制，有加班<br/>二、员工福利<br/>1、免费工作餐：早餐、中餐和加班用餐<br/>2、提供住宿：4人/间，房间内配有空调、热水器、桌椅、衣柜、独立卫生间、网线等，<br/>统一签订劳动合同，办理社保<br/>4、免费购买商业保险：适用个人门诊、急诊、大病医疗费用报销；家属及子女大病医疗费用报销等<br/>5、月度庆生、员工活动、节日福利、年会、年度旅游、公积金等<br/>6、年假、高温假、其他国家规定享有的福利等</span></p><p><span style="font-size: 20px;">三，联系方式：任经理15036161032（微信号同手机号）</span></p><p><br/></p>', '', 200, 'uploads/20180522/97dae93d46f173a89969e92d889147dc.png', '2018-05-24 07:48:44', 5, NULL, '10', NULL, '', '', '2800-4500/月'),
(35, '山东歌尔电子', 17, NULL, NULL, 0, '', '', '', '0', '<p style="text-align: justify;"><span style="font-size: 20px;"><strong>一，招聘要求：男女不限，年龄满16周岁-40岁，符合公司录用标准。</strong></span></p><p style="text-align: justify;"><span style="font-size: 20px;"><strong><span style="font-size: 16px;">二，工作内容：声学及光电等相关产品的设计，研发，制造，包含苹果，华为，三星手机的电子元素生产及组装。电子电声，光电产品组装，测试，包装，贴标签，检验，注型，SMT贴片等<br/>三、工资待遇：每小时14元，月休4天，加岗位补贴。月工资4000-5000元。<br/>四、其它福利待遇：每年发放13个月工资，工作满一年后有年功补贴，每年为240元，逐年累加，每年统一发放。<br/>车间四季恒温24-28度，配置高标准的职工公寓，免费住宿，建有员工餐厅，浴室，超市，社区卫生室，篮球厂，兵羽健身中心，电子阅览室等生活及娱乐设施，配有当地派出所设立的警务室，保障全体员工的安全，歌尔家园配有幼儿园，商场，影院，美食等生活娱乐设施，解决员工后顾之忧。</span></strong></span></p><p style="text-align: justify;"><span style="font-size: 20px;"><strong><span style="font-size: 16px;">五，联系方式：任经理15036161032（微信号同手机号）</span></strong></span></p><p><br/></p>', '', 200, 'uploads/20180521/5941e05b6790d401090873885398f7fd.png', '2018-05-24 07:47:58', 5, NULL, '10', NULL, '', '', '4000-5000'),
(36, '京东物流园', 18, NULL, NULL, 0, '', '', '', '0', '<p style="text-align: justify;"><span style="font-size: 16px;">物流园大量需要人员，主要从事快递的分拣、扫码、打包、贴标，装卸，搬运等等。（短期工最少干7天即可离职结算工资。）！<br/>一、面试要求<br/>1、16-50岁，男女不限，<br/>2、身体健康,无犯罪前科。<br/>二、薪资待遇：<br/>1，福利待遇：11元/时--14元/时，管住管工作餐，综合工资3500-6000，(有计时的有计件的）<br/>三、主要工作内容：<br/>1、工作内容：快递分拣、扫码、贴标签、打包<br/>2、招聘职位：包装员、打包员、质检员、库房登记员、仓管。装卸，搬运等等<br/>四、吃饭住宿：<br/>1、公司提供免费住宿，6-8人/间，有空调、热水器、独立卫生间，自备个人行李、洗漱用品、床上用品<br/>2、免费提供工作餐，三菜一汤（主食可自主添加，每周为员工加餐一次，包括水果。<br/>五、工作形式：<br/>1、工作时间：上6休1，每天8-10小时，月休4天（可调休）。<br/>2、在工作期间能认真完成工作内容，做到守时，守纪，无违规作业，做到品质与质量</span></p><p style="text-align: justify;"><span style="font-size: 16px;">六，联系方式：任经理15036161032（微信号同手机号）</span></p><p><br/></p>', '', 200, 'uploads/20180521/efd32c9c9120c91b35b30ce0f3471d44.png', '2018-05-21 11:26:14', 5, NULL, '10', NULL, '', '', '3500+'),
(22, '关于我们', 21, NULL, NULL, 0, '关于我们', '关于我们', '关于我们', '0', '<p><span style=";font-family:宋体;font-size:14px"><span style="font-family:宋体">郑州双悦人力资源是经工商局批准的一家专业的国内人力资源服务公司。本公司承诺</span>“以人为本、诚信服务”的工作原则，为企业提供更为优质、快捷的劳务服务，致力于以客户需求为中心为国内大中型企业提供专业的人力派遣服务，在广大用人单位和务工人员中拥有良好的口碑。</span></p><p><br/></p>', '郑州双悦人力资源是经工商局批准的一家专业的国内人力资源服务公司。本公司承诺“以人为本、诚信服务”的工作原则，为企业提供更为优质、快捷的劳务服务，致力于以客户需求为中心为国内大中型企业提供专业的人力派遣', 200, '', '2018-05-21 08:20:06', 5, NULL, '10', NULL, '20', '', ''),
(41, '物流分拣', 19, NULL, NULL, 0, '', '工资日结', '', '0', '<p><span style=";font-family:宋体;font-size:14px"><span style="font-family:宋体">物流分拣扫码搬运，</span></span><span style=";font-family:宋体;font-size:14px">16-50<span style="font-family:宋体">岁，男女不限， 一天工资</span><span style="font-family:Calibri">100-140</span><span style="font-family:宋体">元，管住管午餐，下班结工资</span></span></p><p><br/></p>', '', 200, '', '2018-05-24 07:44:16', 0, NULL, '10', NULL, '', '', '100元/天'),
(42, '物流分拣扫码搬运', 19, NULL, NULL, 0, '', '物流分拣扫码搬运', '', '0', '<p style="text-align: left;"><span style="font-size: 16px;">物流分拣扫码搬运，16-50岁，男女不限， 一天工资100-140元，管住管午餐，下班结工资</span></p><p><br/></p>', '', 200, 'uploads/20180524/279f085a046c63254aa2ce58238b33a0.png', '2018-05-25 08:59:04', 5, NULL, '10', NULL, '', '', '100-150/天'),
(43, '郑州格力空调厂', 16, NULL, NULL, 0, '郑州格力空调厂', '郑州格力空调厂', '', '0', '<p style="text-align: justify; text-indent: 2em;">郑州格力空调厂有限公司大量招聘学生工、长短期工、技术工，主要从事格力空调的配件生产和组装。<br/>一、招聘要求：<br/>1、身体健康，16-48岁，男女不限</p><p style="text-align: justify; text-indent: 2em;">2，身份证不过期，有二代身份证。</p><p style="text-align: justify; text-indent: 2em;">二、工作时间：<br/>公司实行白、晚两班制，十五天倒一次班，（中间有2个小时吃饭和休息时间），每月休息4天，团队计件工资多劳多得。<br/>三、工资待遇<br/>试用期3000-3800元/月，试用期2个月转正，综合3800-5500元/月，每月15号准时发放工资，不拖不扣，统一购买社保;<br/>员工每年除发12个月薪外，另依工作表现发放年终奖金。年终奖为1--3个月工资<br/>免费提供标准公寓式宿舍：6-8人/间，配置热水器、冰箱、饮水机、空调、有线电视、家私等设施。</p><p style="text-align: justify; text-indent: 2em;">四，联系方式：任经理15036161032（微信号同手机号）</p><p style="text-align: center; text-indent: 2em;"><img src="/ueditor/php/upload/image/20180605/1528182935332843.png" title="1528182935332843.png" alt="图片1.png"/></p><p><br/></p>', '', 200, 'uploads/20180605/362f0fa4cb69d1d2d5582013fffdbfdb.png', '2018-06-05 07:15:39', 6, NULL, '10', NULL, '10', '', '3800-5500');

-- --------------------------------------------------------

--
-- 表的结构 `think_order`
--

CREATE TABLE `think_order` (
  `order_id` int(11) NOT NULL COMMENT '订单Id',
  `dt_id` int(11) NOT NULL COMMENT '部门ID',
  `product_id` int(11) NOT NULL COMMENT '主键ID',
  `uid` int(11) NOT NULL COMMENT '业务员id',
  `u_name` varchar(50) NOT NULL COMMENT '业务员',
  `buyer_name` varchar(20) NOT NULL COMMENT '买家姓名',
  `order_sn` varchar(32) NOT NULL COMMENT '订单编号',
  `order_start_time` int(10) NOT NULL COMMENT '下订单时间',
  `order_state` enum('10','20','30','40','50','60','70') NOT NULL DEFAULT '10' COMMENT '订单状态(10:待付款;20:已付款待发货;30:已发货;40:已收货；50:已完成;60:已关闭;70:退款中)',
  `buyer_mobile` varchar(11) NOT NULL COMMENT '买家电话',
  `order_content` varchar(255) NOT NULL DEFAULT '' COMMENT '订单备注',
  `order_end_time` int(10) NOT NULL COMMENT '订单完成时间',
  `order_real_time` int(10) NOT NULL COMMENT '订单实际完成时间',
  `order_class` enum('10','20','30') NOT NULL DEFAULT '10' COMMENT '订单类型(10生产订单20销售订单30外购订单)',
  `now_step` int(11) NOT NULL COMMENT '当前进度步骤ID',
  `next_step` int(11) NOT NULL COMMENT '下一步进度ID',
  `order_product_num` int(11) NOT NULL COMMENT '产品数量',
  `pro_typeid` int(11) DEFAULT NULL COMMENT '副产品ID',
  `order_addtime` int(11) DEFAULT '0' COMMENT '新增订单时间',
  `last_edittime` int(11) DEFAULT NULL COMMENT '上一次修改时间',
  `is_order` tinyint(1) DEFAULT '0' COMMENT '是否主副订单（0副订单1主订单）',
  `oid` int(11) DEFAULT NULL COMMENT '主订单id',
  `order_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '下订单时间',
  `pay_time` varchar(255) DEFAULT NULL COMMENT '支付时间',
  `order_total_money` float(10,2) DEFAULT NULL COMMENT '订单金额',
  `member_id` int(11) DEFAULT NULL COMMENT '会员ID',
  `member_name` varchar(255) DEFAULT NULL COMMENT '会员名称',
  `order_goods_num` int(11) DEFAULT NULL COMMENT '订单产品数量',
  `order_goods_freight` float(6,2) DEFAULT NULL COMMENT '订单运费'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='订单表';

-- --------------------------------------------------------

--
-- 表的结构 `think_product`
--

CREATE TABLE `think_product` (
  `product_id` int(11) NOT NULL COMMENT '产品id',
  `pc_id` int(11) NOT NULL COMMENT '产品分类ID',
  `product_name` varchar(50) NOT NULL COMMENT '产品名称',
  `product_type` varchar(32) NOT NULL DEFAULT '0' COMMENT '产品型号',
  `product_state` enum('10','20','30','40') NOT NULL DEFAULT '20' COMMENT '产品状态（10回收站;20显示,30下架,40未审核）',
  `product_account` int(11) DEFAULT '0' COMMENT '数量(即库存)',
  `product_start_time` varchar(50) DEFAULT '' COMMENT '添加日期',
  `product_end_time` varchar(10) NOT NULL DEFAULT '' COMMENT '完成日期',
  `product_content` longtext NOT NULL COMMENT '产品详情',
  `product_content_attr` longtext COMMENT '商品参数',
  `product_thumb_name` varchar(100) DEFAULT '' COMMENT '缩略图',
  `product_image` varchar(100) DEFAULT '' COMMENT '产品主图',
  `product_manager` varchar(50) DEFAULT '' COMMENT '负责人',
  `product_unit` varchar(10) DEFAULT NULL COMMENT '产品单位',
  `product_order` int(11) DEFAULT NULL COMMENT '排序',
  `product_scontent` text COMMENT '产品简介说明',
  `product_title` varchar(255) DEFAULT NULL COMMENT '简短标题',
  `product_price` float(6,2) NOT NULL DEFAULT '0.00' COMMENT '产品价格',
  `brand_id` int(11) DEFAULT '0' COMMENT '品牌ID',
  `product_imgList` text COMMENT '产品多图',
  `product_sale_promotion` varchar(255) DEFAULT NULL COMMENT '商品促销语',
  `product_keywords` varchar(255) DEFAULT NULL COMMENT '关键字',
  `supplier_id` int(11) DEFAULT NULL COMMENT '商品供货商',
  `format_id` text COMMENT '关联规格',
  `product_market_price` float(8,2) DEFAULT '0.00' COMMENT '商品市场价',
  `product_sale_price` float(8,2) DEFAULT '0.00' COMMENT '商品销售价',
  `product_base_price` float(8,2) DEFAULT '0.00' COMMENT '成本价',
  `product_member_price` float(8,2) DEFAULT '0.00' COMMENT '会员价',
  `product_base_sale_count` int(11) DEFAULT '10' COMMENT '基础销量',
  `product_base_hits_count` int(11) DEFAULT '10' COMMENT '基础点击量',
  `product_base_shave_count` int(11) DEFAULT '100' COMMENT '基础分享数',
  `product_call_count` int(11) DEFAULT '10' COMMENT '库存预警',
  `product_wx_code` varchar(255) DEFAULT NULL COMMENT '商品二维码',
  `product_recommend` enum('10','20','30','40','50') DEFAULT '10' COMMENT '10：普通商品，20：置顶商品；30：人气商品，40：本店推荐,50：积分商品',
  `product_point` int(11) DEFAULT NULL COMMENT '积分兑换量'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='产品表' ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `think_product`
--

INSERT INTO `think_product` (`product_id`, `pc_id`, `product_name`, `product_type`, `product_state`, `product_account`, `product_start_time`, `product_end_time`, `product_content`, `product_content_attr`, `product_thumb_name`, `product_image`, `product_manager`, `product_unit`, `product_order`, `product_scontent`, `product_title`, `product_price`, `brand_id`, `product_imgList`, `product_sale_promotion`, `product_keywords`, `supplier_id`, `format_id`, `product_market_price`, `product_sale_price`, `product_base_price`, `product_member_price`, `product_base_sale_count`, `product_base_hits_count`, `product_base_shave_count`, `product_call_count`, `product_wx_code`, `product_recommend`, `product_point`) VALUES
(123, 43, '离子烫长发', '0', '20', NULL, '2018-08-11 13:20:54', '', '', NULL, '', 'uploads/20180811/17f99ce5e6fdf607fbfb0375b08fa516.png', '', NULL, NULL, '', NULL, 0.00, NULL, 'a:1:{i:0;s:53:"uploads\\20180811/ef9a3f0cc7587827f77651262d23aa31.png";}', NULL, NULL, NULL, 'N;', 200.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', 200),
(124, 47, '套餐A（泰式洗头+奶疗头皮理疗+面部深层清洁）', '0', '20', NULL, '2018-08-11 19:46:53', '', '', NULL, '', 'uploads/20180811/0dc095229bb561f9be0ee8d5dd3eae6d.png', '', NULL, NULL, '', NULL, 0.00, NULL, 'a:1:{i:0;s:53:"uploads\\20180811/e1fdf4c45990224576c1cae369544638.png";}', NULL, NULL, NULL, '', 69.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', 99),
(125, 0, '洗剪发', '0', '20', NULL, '2018-08-11 23:33:04', '', '', NULL, '', 'uploads/20180811/cb9cc87d4cf906a4cd2ce96f21f161b5.png', '', NULL, NULL, '', NULL, 0.00, NULL, 'a:1:{i:0;s:53:"uploads\\20180811/5133d9766f394a601d76f4cf8a5398fd.png";}', NULL, NULL, NULL, 'N;', 30.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', 30),
(121, 42, '离子烫', '0', '20', NULL, '', '', '<p>今天又</p>', NULL, '', 'uploads/20180810/9a0aa47f83447a9b07b32250263cfd4c.png', '', NULL, NULL, '局域', NULL, 0.00, NULL, 'a:1:{i:0;s:53:"uploads\\20180810/db87837af72b9c7d4c0357e528c6e6ae.png";}', NULL, NULL, NULL, 'a:1:{i:0;s:2:"11";}', 50.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', 50),
(122, 43, '自然数码烫--中发', '0', '20', NULL, '', '', '', NULL, '', 'uploads/20180810/68627672c3cc11d27c64f49a8b9438dc.png', '', NULL, NULL, '', NULL, 0.00, NULL, 'a:1:{i:0;s:53:"uploads\\20180810/970c97fdc73b7f4902a0dc6753917df8.png";}', NULL, NULL, NULL, 'N;', 160.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', 160);

-- --------------------------------------------------------

--
-- 表的结构 `think_product_attr`
--

CREATE TABLE `think_product_attr` (
  `attr_id` int(11) NOT NULL COMMENT '主键id',
  `attr_value` varchar(255) DEFAULT NULL COMMENT '商品属性规格名称',
  `attr_sale_price` float(10,2) DEFAULT NULL COMMENT '销售价格',
  `attr_market_price` float(10,2) DEFAULT NULL COMMENT '市场价格',
  `attr_base_price` float(10,2) DEFAULT NULL COMMENT '成本价',
  `attr_member_price` float(10,2) DEFAULT NULL COMMENT '会员价',
  `product_id` int(11) DEFAULT NULL COMMENT '商品ID',
  `attr_point` int(11) DEFAULT NULL COMMENT '抵扣积分'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='商品属性规格' ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `think_product_attr`
--

INSERT INTO `think_product_attr` (`attr_id`, `attr_value`, `attr_sale_price`, `attr_market_price`, `attr_base_price`, `attr_member_price`, `product_id`, `attr_point`) VALUES
(208, '50ml*22码', 5287.00, 578.00, 52782.00, 7.00, 119, 245),
(209, '50ml*25码', 245.00, 245.00, 245.00, 245.00, 119, 452),
(210, '100ml*22码', 245.00, 245.00, 245.00, 245.00, 119, 245),
(211, '100ml*25码', 25.00, 245.00, 245.00, 245.00, 119, 24),
(216, '50ml*22码', 25425.00, 527.00, 2542.00, 542452.00, 120, 254),
(217, '50ml*25码', 245.00, 245.00, 245.00, 245.00, 120, 254),
(218, '100ml*22码', 245.00, 245.00, 245.00, 245.00, 120, 254),
(219, '100ml*25码', 245.00, 24525.00, 24.00, 24.00, 120, 245);

-- --------------------------------------------------------

--
-- 表的结构 `think_product_class`
--

CREATE TABLE `think_product_class` (
  `pc_id` int(11) NOT NULL COMMENT '产品匪类ID',
  `pc_name` varchar(50) NOT NULL COMMENT '产品分类名称',
  `pc_order` int(11) NOT NULL COMMENT '排序',
  `pcid` int(11) NOT NULL DEFAULT '255' COMMENT '父类ID',
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '主副产品(1默认主产品)',
  `pc_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '添加时间',
  `pc_open` enum('10','20') NOT NULL DEFAULT '10' COMMENT '10:开启；20：关闭',
  `pc_url` varchar(255) DEFAULT NULL COMMENT '商品分类url',
  `pc_img` varchar(255) DEFAULT '' COMMENT '分类图片'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='产品分类' ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `think_product_class`
--

INSERT INTO `think_product_class` (`pc_id`, `pc_name`, `pc_order`, `pcid`, `type`, `pc_time`, `pc_open`, `pc_url`, `pc_img`) VALUES
(43, '自然数码烫', 50, 0, 1, '2018-08-10 14:19:03', '10', '', 'uploads/20180810/29e9bd4730fd86c101aa9b305e3f9acd.png'),
(42, '离子烫', 50, 0, 1, '2018-08-09 16:11:26', '10', '', 'uploads/20180810/69eee04d71cbf9697c6ef48c2053f65f.png'),
(41, '烫发', 50, 0, 1, '2018-08-09 16:11:07', '10', '', 'uploads/20180810/f0fa5ea54b34b9103f4cf8bb1c9a7a18.png'),
(40, '染发', 50, 0, 1, '2018-08-09 16:10:36', '10', '', 'uploads/20180810/cbe12653908afd7c7dc115ef48c5db57.png'),
(44, '营养烫', 50, 0, 1, '2018-08-10 14:19:38', '10', '', 'uploads/20180811/5fa6894950797546f77333f71b18017b.png'),
(45, '香水烫', 50, 0, 1, '2018-08-10 14:19:54', '10', '', 'uploads/20180811/80634560c32a3875020ef33c58316538.png'),
(46, '致炫馨香烫', 50, 0, 1, '2018-08-10 14:20:28', '10', '', 'uploads/20180811/003b34032b40f3bc4ebfaf46f31964dd.png'),
(47, '套餐', 50, 0, 1, '2018-08-11 11:44:25', '10', '', 'uploads/20180811/2d7baa4e7d94a285019e38a5937477d5.png');

-- --------------------------------------------------------

--
-- 表的结构 `think_product_format`
--

CREATE TABLE `think_product_format` (
  `format_id` int(11) NOT NULL COMMENT '主键',
  `format_name` varchar(255) DEFAULT NULL COMMENT '规格名称',
  `format_tag` varchar(255) NOT NULL DEFAULT '' COMMENT '规格标签',
  `format_order` int(11) DEFAULT NULL COMMENT '规格排序',
  `format_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '时间',
  `format_open` enum('10','20') NOT NULL DEFAULT '10' COMMENT '10：开启，20：关闭',
  `format_value` longtext COMMENT '规格属性值'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='产品规格' ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `think_product_format`
--

INSERT INTO `think_product_format` (`format_id`, `format_name`, `format_tag`, `format_order`, `format_time`, `format_open`, `format_value`) VALUES
(11, '颜色', '颜色', 50, '2018-08-09 16:15:28', '10', 'a:2:{i:0;s:6:"红色";i:1;s:6:"橘黄";}');

-- --------------------------------------------------------

--
-- 表的结构 `think_product_qrcode`
--

CREATE TABLE `think_product_qrcode` (
  `id` int(11) NOT NULL COMMENT '主键id',
  `img` varchar(255) DEFAULT NULL COMMENT '二维码url地址',
  `product_id` int(11) DEFAULT NULL COMMENT '产品id',
  `name` varchar(32) DEFAULT NULL COMMENT '领奖者姓名',
  `time` int(10) DEFAULT '0' COMMENT '领取时间',
  `openid` varchar(32) DEFAULT NULL COMMENT '领奖者微信openid',
  `nickname` varchar(50) DEFAULT NULL COMMENT '领奖者微信昵称',
  `status` tinyint(1) DEFAULT '0' COMMENT '是否已经扫过(0未扫，1以扫)',
  `rand` varchar(255) DEFAULT NULL COMMENT '随机数字符串',
  `mobile` varchar(11) DEFAULT NULL COMMENT '手机号',
  `qr_time` int(10) DEFAULT '0' COMMENT '扫码时间'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='产品二维码表';

-- --------------------------------------------------------

--
-- 表的结构 `think_product_speed`
--

CREATE TABLE `think_product_speed` (
  `sid` int(11) NOT NULL COMMENT '主键ID',
  `sname` varchar(255) NOT NULL COMMENT '产品进度名字',
  `sorder` tinyint(2) NOT NULL COMMENT '排序',
  `spid` int(11) NOT NULL COMMENT '父id'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='产品进度表';

-- --------------------------------------------------------

--
-- 表的结构 `think_product_type`
--

CREATE TABLE `think_product_type` (
  `t_id` int(11) NOT NULL COMMENT '主键ID',
  `t_name` varchar(255) DEFAULT NULL COMMENT '属性名称',
  `t_pid` int(11) DEFAULT '0' COMMENT '父ID',
  `t_order` int(11) NOT NULL DEFAULT '255' COMMENT '排序',
  `t_value` varchar(255) DEFAULT NULL COMMENT '属性值',
  `t_pcid` int(11) DEFAULT NULL COMMENT '商品分类ID',
  `t_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '时间'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='商品属性表';

-- --------------------------------------------------------

--
-- 表的结构 `think_source`
--

CREATE TABLE `think_source` (
  `sid` int(11) NOT NULL,
  `source_name` varchar(255) NOT NULL DEFAULT '' COMMENT '来源',
  `source_order` int(11) NOT NULL DEFAULT '255' COMMENT '来源排序',
  `source_open` enum('10','20') NOT NULL DEFAULT '10' COMMENT '开启(10开启，20关闭)'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='文章来源管理';

--
-- 转存表中的数据 `think_source`
--

INSERT INTO `think_source` (`sid`, `source_name`, `source_order`, `source_open`) VALUES
(7, '本站发布', 11, '10'),
(8, '外部推荐', 21, '10');

-- --------------------------------------------------------

--
-- 表的结构 `think_supplier`
--

CREATE TABLE `think_supplier` (
  `supplier_id` int(11) NOT NULL COMMENT '供货商主键',
  `supplier_name` varchar(255) NOT NULL DEFAULT '' COMMENT '供货商',
  `supplier_address` varchar(255) DEFAULT NULL COMMENT '供货商地址',
  `supplier_tel` varchar(255) DEFAULT NULL COMMENT '供货商电话',
  `supplier_contacts` varchar(255) DEFAULT NULL COMMENT '供货商联系人',
  `supplier_content` longtext COMMENT '供货商说明',
  `supplier_logo` varchar(255) DEFAULT NULL COMMENT '供货商logo',
  `supplier_url` varchar(255) DEFAULT NULL COMMENT '供货商链接url',
  `supplier_order` int(11) NOT NULL DEFAULT '255' COMMENT '排序',
  `supplier_open` enum('10','20') NOT NULL DEFAULT '10' COMMENT '10：开启，20：关闭',
  `supplier_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '添加时间'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='供货商';

--
-- 转存表中的数据 `think_supplier`
--

INSERT INTO `think_supplier` (`supplier_id`, `supplier_name`, `supplier_address`, `supplier_tel`, `supplier_contacts`, `supplier_content`, `supplier_logo`, `supplier_url`, `supplier_order`, `supplier_open`, `supplier_time`) VALUES
(6, '万门总部', '河南郑州', '15236268525', '陈中', '', 'uploads/20171101/48f563d026eaa0c3e4df0b5546c3065a.jpg', 'http://www.baidu.com', 1, '10', '2017-11-01 11:21:03');

-- --------------------------------------------------------

--
-- 表的结构 `think_templates`
--

CREATE TABLE `think_templates` (
  `tem_id` int(11) NOT NULL,
  `tem_name` varchar(255) DEFAULT NULL COMMENT '模板主题',
  `tem_tags` varchar(255) DEFAULT NULL COMMENT '模板标签',
  `tem_img` varchar(255) DEFAULT NULL COMMENT '模板主图',
  `tem_url` varchar(255) DEFAULT NULL COMMENT '模板静态url',
  `tem_open` enum('10','20') DEFAULT '20' COMMENT '前台模板状态（10：启用；20：禁止）',
  `tem_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '添加模板时间',
  `tem_order` int(11) NOT NULL DEFAULT '255' COMMENT '模板排序'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='设置前台模板';

--
-- 转存表中的数据 `think_templates`
--

INSERT INTO `think_templates` (`tem_id`, `tem_name`, `tem_tags`, `tem_img`, `tem_url`, `tem_open`, `tem_time`, `tem_order`) VALUES
(8, '运动健身模板', 'sports', 'uploads/20171110/ad97452d229c59f31a059d762bc94434.jpg', 'http://huo.dd371.com/sports/', '20', '2017-11-10 09:46:30', 1),
(9, '化妆美化模板', 'face_painting', 'uploads/20171110/42512d7a7e3a069057349a7ac0414a26.jpg', 'http://huo.dd371.com/sheyingmb/', '20', '2017-11-10 09:54:41', 3),
(10, '摄影模板', 'photoes', 'uploads/20171110/19eee2ee910af4e22982bc27c28f1b0f.jpg', 'http://huo.dd371.com/sheyingmb/', '20', '2017-11-10 09:55:33', 0),
(11, '咖啡饮品', 'coffee', 'uploads/20171110/e5a2cd32e403a40a09ef469cc509a9fb.jpg', 'http://huo.dd371.com/food/', '20', '2017-11-10 09:56:12', 0),
(12, '机械化工模板', 'machine', 'uploads/20171110/a1445abb0f379d317eb176c632d94360.jpg', 'http://huo.dd371.com/sports/courses.html', '20', '2017-11-10 09:57:07', 0),
(13, '食品模板', 'food', 'uploads/20171110/b58692ad555d2142174b579332ab59df.jpg', 'http://huo.dd371.com/food/', '20', '2017-11-10 10:07:46', 0),
(14, '手机商城模板', 'shop', 'uploads/20171208/f211d878dd8eea8c6972656ff10a4440.jpg', '', '10', '2017-12-08 10:47:00', 0);

-- --------------------------------------------------------

--
-- 表的结构 `think_video`
--

CREATE TABLE `think_video` (
  `video_id` int(11) NOT NULL COMMENT '主键ID',
  `video_name` varchar(255) DEFAULT NULL COMMENT '视频名称',
  `video_url` varchar(255) DEFAULT NULL COMMENT '视频地址',
  `video_content` longtext COMMENT '视频主题',
  `video_open` enum('10','20') NOT NULL DEFAULT '10' COMMENT '状态(10开启，20关闭)',
  `video_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '发布时间',
  `video_pid` int(11) NOT NULL DEFAULT '0' COMMENT '分类ID',
  `video_order` int(11) NOT NULL DEFAULT '255' COMMENT '排序',
  `video_img` varchar(255) DEFAULT NULL COMMENT '视频图',
  `video_width` varchar(255) NOT NULL DEFAULT '585px' COMMENT '视频窗口宽度',
  `video_height` varchar(255) NOT NULL DEFAULT '400px' COMMENT '视频窗口高度',
  `video_iframe` text COMMENT '视频iframe代码'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='视频表';

--
-- 转存表中的数据 `think_video`
--

INSERT INTO `think_video` (`video_id`, `video_name`, `video_url`, `video_content`, `video_open`, `video_time`, `video_pid`, `video_order`, `video_img`, `video_width`, `video_height`, `video_iframe`) VALUES
(4, '小视频', 'http://mp4.vjshi.com/2017-10-30/914db3bbae61f9a6e2fea3e10bba410b.mp4', '', '10', '2017-11-10 04:42:08', 11, 255, 'uploads/20171110/71089f479de9653ac2a59a4c8d160042.jpg', '585px', '400px', ''),
(5, '小视频', 'http://mp4.vjshi.com/2017-10-06/7f10dfeb8cd29e61274ab69785565ee2.mp4', '', '10', '2017-11-10 04:42:49', 11, 255, 'uploads/20171110/f5127ce9fe74ca9748987576c0e45b10.jpg', '585px', '400px', ''),
(6, '小视频', 'http://mp4.vjshi.com/2017-10-29/68519b09398a924341f25edd26ac222e.mp4', '', '10', '2017-11-10 05:02:58', 11, 23, 'uploads/20171110/0f64f4e22d4d4582f4607698e9653857.jpg', '585px', '400px', ''),
(7, '小视频', 'http://mp4.vjshi.com/2017-10-29/68519b09398a924341f25edd26ac222e.mp4', '<p>287528</p>', '10', '2017-11-10 06:39:15', 8, 1, 'uploads/20171110/768b33d0af0446c96c4fe28930000419.jpg', '585px', '400px', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `think_active_rule`
--
ALTER TABLE `think_active_rule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `think_ad`
--
ALTER TABLE `think_ad`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `think_address`
--
ALTER TABLE `think_address`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `think_ad_position`
--
ALTER TABLE `think_ad_position`
  ADD PRIMARY KEY (`ad_pid`);

--
-- Indexes for table `think_article`
--
ALTER TABLE `think_article`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `think_articletype`
--
ALTER TABLE `think_articletype`
  ADD PRIMARY KEY (`atid`);

--
-- Indexes for table `think_article_column`
--
ALTER TABLE `think_article_column`
  ADD PRIMARY KEY (`acid`);

--
-- Indexes for table `think_auth_group`
--
ALTER TABLE `think_auth_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `think_auth_group_access`
--
ALTER TABLE `think_auth_group_access`
  ADD UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  ADD KEY `uid` (`uid`),
  ADD KEY `group_id` (`group_id`);

--
-- Indexes for table `think_auth_rule`
--
ALTER TABLE `think_auth_rule`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `think_auth_user`
--
ALTER TABLE `think_auth_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `think_brand`
--
ALTER TABLE `think_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `think_column`
--
ALTER TABLE `think_column`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `think_comment`
--
ALTER TABLE `think_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `think_config`
--
ALTER TABLE `think_config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `think_coupon`
--
ALTER TABLE `think_coupon`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `think_department`
--
ALTER TABLE `think_department`
  ADD PRIMARY KEY (`dt_id`),
  ADD KEY `dt_id` (`dt_id`);

--
-- Indexes for table `think_discount`
--
ALTER TABLE `think_discount`
  ADD PRIMARY KEY (`discount_id`);

--
-- Indexes for table `think_full_cut`
--
ALTER TABLE `think_full_cut`
  ADD PRIMARY KEY (`cut_id`);

--
-- Indexes for table `think_full_shipping`
--
ALTER TABLE `think_full_shipping`
  ADD PRIMARY KEY (`full_id`);

--
-- Indexes for table `think_goods_cart`
--
ALTER TABLE `think_goods_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `think_goods_evaluation`
--
ALTER TABLE `think_goods_evaluation`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `think_goods_order`
--
ALTER TABLE `think_goods_order`
  ADD PRIMARY KEY (`goods_o_id`);

--
-- Indexes for table `think_leader`
--
ALTER TABLE `think_leader`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `think_leader_job`
--
ALTER TABLE `think_leader_job`
  ADD PRIMARY KEY (`leader_job_id`);

--
-- Indexes for table `think_link`
--
ALTER TABLE `think_link`
  ADD PRIMARY KEY (`link_id`);

--
-- Indexes for table `think_link_class`
--
ALTER TABLE `think_link_class`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `think_log`
--
ALTER TABLE `think_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `think_member`
--
ALTER TABLE `think_member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `think_member_deposit`
--
ALTER TABLE `think_member_deposit`
  ADD PRIMARY KEY (`deposit_id`);

--
-- Indexes for table `think_member_grade`
--
ALTER TABLE `think_member_grade`
  ADD PRIMARY KEY (`grade_id`);

--
-- Indexes for table `think_member_point`
--
ALTER TABLE `think_member_point`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `think_member_recharge`
--
ALTER TABLE `think_member_recharge`
  ADD PRIMARY KEY (`recharge_id`);

--
-- Indexes for table `think_message`
--
ALTER TABLE `think_message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `think_news`
--
ALTER TABLE `think_news`
  ADD PRIMARY KEY (`n_id`),
  ADD KEY `news_titleshort` (`news_titleshort`),
  ADD KEY `news_title` (`news_title`),
  ADD KEY `news_columnid` (`news_class3`);

--
-- Indexes for table `think_order`
--
ALTER TABLE `think_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `order_sn` (`order_sn`);

--
-- Indexes for table `think_product`
--
ALTER TABLE `think_product`
  ADD PRIMARY KEY (`product_id`) USING BTREE,
  ADD KEY `product_id` (`product_id`,`product_name`) USING BTREE,
  ADD KEY `pc_id` (`pc_id`) USING BTREE;

--
-- Indexes for table `think_product_attr`
--
ALTER TABLE `think_product_attr`
  ADD PRIMARY KEY (`attr_id`) USING BTREE;

--
-- Indexes for table `think_product_class`
--
ALTER TABLE `think_product_class`
  ADD PRIMARY KEY (`pc_id`) USING BTREE;

--
-- Indexes for table `think_product_format`
--
ALTER TABLE `think_product_format`
  ADD PRIMARY KEY (`format_id`) USING BTREE;

--
-- Indexes for table `think_product_qrcode`
--
ALTER TABLE `think_product_qrcode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `think_product_speed`
--
ALTER TABLE `think_product_speed`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `think_product_type`
--
ALTER TABLE `think_product_type`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `think_source`
--
ALTER TABLE `think_source`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `think_supplier`
--
ALTER TABLE `think_supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `think_templates`
--
ALTER TABLE `think_templates`
  ADD PRIMARY KEY (`tem_id`);

--
-- Indexes for table `think_video`
--
ALTER TABLE `think_video`
  ADD PRIMARY KEY (`video_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `think_active_rule`
--
ALTER TABLE `think_active_rule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键id', AUTO_INCREMENT=5;
--
-- 使用表AUTO_INCREMENT `think_ad`
--
ALTER TABLE `think_ad`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键ID', AUTO_INCREMENT=18;
--
-- 使用表AUTO_INCREMENT `think_address`
--
ALTER TABLE `think_address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键';
--
-- 使用表AUTO_INCREMENT `think_ad_position`
--
ALTER TABLE `think_ad_position`
  MODIFY `ad_pid` tinyint(3) NOT NULL AUTO_INCREMENT COMMENT '主键', AUTO_INCREMENT=15;
--
-- 使用表AUTO_INCREMENT `think_article`
--
ALTER TABLE `think_article`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT COMMENT '文章主键ID';
--
-- 使用表AUTO_INCREMENT `think_articletype`
--
ALTER TABLE `think_articletype`
  MODIFY `atid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- 使用表AUTO_INCREMENT `think_article_column`
--
ALTER TABLE `think_article_column`
  MODIFY `acid` int(11) NOT NULL AUTO_INCREMENT COMMENT '文章分类主键ID';
--
-- 使用表AUTO_INCREMENT `think_auth_group`
--
ALTER TABLE `think_auth_group`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '用户组逐渐id', AUTO_INCREMENT=27;
--
-- 使用表AUTO_INCREMENT `think_auth_rule`
--
ALTER TABLE `think_auth_rule`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键', AUTO_INCREMENT=103;
--
-- 使用表AUTO_INCREMENT `think_auth_user`
--
ALTER TABLE `think_auth_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- 使用表AUTO_INCREMENT `think_brand`
--
ALTER TABLE `think_brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键', AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `think_column`
--
ALTER TABLE `think_column`
  MODIFY `c_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- 使用表AUTO_INCREMENT `think_comment`
--
ALTER TABLE `think_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键ID';
--
-- 使用表AUTO_INCREMENT `think_config`
--
ALTER TABLE `think_config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键', AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `think_coupon`
--
ALTER TABLE `think_coupon`
  MODIFY `coupon_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键', AUTO_INCREMENT=5;
--
-- 使用表AUTO_INCREMENT `think_department`
--
ALTER TABLE `think_department`
  MODIFY `dt_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '部门ID';
--
-- 使用表AUTO_INCREMENT `think_discount`
--
ALTER TABLE `think_discount`
  MODIFY `discount_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- 使用表AUTO_INCREMENT `think_full_cut`
--
ALTER TABLE `think_full_cut`
  MODIFY `cut_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键', AUTO_INCREMENT=8;
--
-- 使用表AUTO_INCREMENT `think_full_shipping`
--
ALTER TABLE `think_full_shipping`
  MODIFY `full_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- 使用表AUTO_INCREMENT `think_goods_cart`
--
ALTER TABLE `think_goods_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '购物车主键ID', AUTO_INCREMENT=10;
--
-- 使用表AUTO_INCREMENT `think_goods_evaluation`
--
ALTER TABLE `think_goods_evaluation`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `think_goods_order`
--
ALTER TABLE `think_goods_order`
  MODIFY `goods_o_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '订单ID', AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `think_leader`
--
ALTER TABLE `think_leader`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键', AUTO_INCREMENT=39;
--
-- 使用表AUTO_INCREMENT `think_leader_job`
--
ALTER TABLE `think_leader_job`
  MODIFY `leader_job_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键', AUTO_INCREMENT=16;
--
-- 使用表AUTO_INCREMENT `think_link`
--
ALTER TABLE `think_link`
  MODIFY `link_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键', AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `think_link_class`
--
ALTER TABLE `think_link_class`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键';
--
-- 使用表AUTO_INCREMENT `think_log`
--
ALTER TABLE `think_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键', AUTO_INCREMENT=1776;
--
-- 使用表AUTO_INCREMENT `think_member`
--
ALTER TABLE `think_member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键id', AUTO_INCREMENT=16;
--
-- 使用表AUTO_INCREMENT `think_member_deposit`
--
ALTER TABLE `think_member_deposit`
  MODIFY `deposit_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键ID';
--
-- 使用表AUTO_INCREMENT `think_member_grade`
--
ALTER TABLE `think_member_grade`
  MODIFY `grade_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '逐渐ID', AUTO_INCREMENT=8;
--
-- 使用表AUTO_INCREMENT `think_member_point`
--
ALTER TABLE `think_member_point`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `think_member_recharge`
--
ALTER TABLE `think_member_recharge`
  MODIFY `recharge_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- 使用表AUTO_INCREMENT `think_message`
--
ALTER TABLE `think_message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- 使用表AUTO_INCREMENT `think_news`
--
ALTER TABLE `think_news`
  MODIFY `n_id` int(36) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- 使用表AUTO_INCREMENT `think_order`
--
ALTER TABLE `think_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '订单Id';
--
-- 使用表AUTO_INCREMENT `think_product`
--
ALTER TABLE `think_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '产品id', AUTO_INCREMENT=126;
--
-- 使用表AUTO_INCREMENT `think_product_attr`
--
ALTER TABLE `think_product_attr`
  MODIFY `attr_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键id', AUTO_INCREMENT=220;
--
-- 使用表AUTO_INCREMENT `think_product_class`
--
ALTER TABLE `think_product_class`
  MODIFY `pc_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '产品匪类ID', AUTO_INCREMENT=48;
--
-- 使用表AUTO_INCREMENT `think_product_format`
--
ALTER TABLE `think_product_format`
  MODIFY `format_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键', AUTO_INCREMENT=12;
--
-- 使用表AUTO_INCREMENT `think_product_qrcode`
--
ALTER TABLE `think_product_qrcode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键id';
--
-- 使用表AUTO_INCREMENT `think_product_speed`
--
ALTER TABLE `think_product_speed`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键ID';
--
-- 使用表AUTO_INCREMENT `think_product_type`
--
ALTER TABLE `think_product_type`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键ID', AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `think_source`
--
ALTER TABLE `think_source`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- 使用表AUTO_INCREMENT `think_supplier`
--
ALTER TABLE `think_supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '供货商主键', AUTO_INCREMENT=8;
--
-- 使用表AUTO_INCREMENT `think_templates`
--
ALTER TABLE `think_templates`
  MODIFY `tem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- 使用表AUTO_INCREMENT `think_video`
--
ALTER TABLE `think_video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键ID', AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
