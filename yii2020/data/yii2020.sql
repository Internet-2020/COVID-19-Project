-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2020-06-05 11:34:07
-- 服务器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `yii2020`
--

-- --------------------------------------------------------

--
-- 表的结构 `hlw_admin`
--

CREATE TABLE `hlw_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '账户',
  `auth_key` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `role` smallint(6) NOT NULL DEFAULT 10,
  `mobile` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '手机号码（登录账号）',
  `status` smallint(6) NOT NULL DEFAULT 10 COMMENT '状态',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `hlw_admin`
--

INSERT INTO `hlw_admin` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `role`, `mobile`, `status`, `created_at`, `updated_at`) VALUES
(1, 'yicheng', 'kjfaoigk', '$2y$13$k0312JALBVCy7f2iPfJGXOdYUEYl6x8nSynSLpDNx6ky19gqZmCF2', '', '837269003@qq.com', 10, '15980893194', 10, '2017-09-28 08:08:31', '2017-09-19 16:08:28');

-- --------------------------------------------------------

--
-- 表的结构 `hlw_cats`
--

CREATE TABLE `hlw_cats` (
  `id` int(11) NOT NULL COMMENT '自增ID',
  `cat_name` varchar(255) DEFAULT NULL COMMENT '分类名称'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='分类表';

--
-- 转存表中的数据 `hlw_cats`
--

INSERT INTO `hlw_cats` (`id`, `cat_name`) VALUES
(1, '国内'),
(2, '国际');

-- --------------------------------------------------------

--
-- 表的结构 `hlw_china_data`
--

CREATE TABLE `hlw_china_data` (
  `id` int(11) NOT NULL COMMENT '序号',
  `currentConfirmedCount` int(11) DEFAULT NULL COMMENT '当前确诊人数',
  `confirmedCount` int(11) DEFAULT NULL COMMENT '确诊人数',
  `suspectedCount` int(11) DEFAULT NULL COMMENT '怀疑人数',
  `curedCount` int(11) DEFAULT NULL COMMENT '治愈人数',
  `deadCount` int(11) DEFAULT NULL COMMENT '死亡人数',
  `seriousCount` int(11) DEFAULT NULL COMMENT '严重人数',
  `updateTime` datetime NOT NULL COMMENT '更新时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `hlw_china_data`
--

INSERT INTO `hlw_china_data` (`id`, `currentConfirmedCount`, `confirmedCount`, `suspectedCount`, `curedCount`, `deadCount`, `seriousCount`, `updateTime`) VALUES
(1, 237, 84451, 1691, 79570, 4644, 760, '2020-05-12 15:30:00'),
(2, 267, 84450, 1690, 79539, 4644, 780, '2020-05-11 23:46:00'),
(3, 282, 84435, 1683, 79510, 4643, 794, '2020-05-10 23:56:00'),
(4, 356, 84416, 1681, 79417, 4643, 836, '2020-05-09 23:27:00'),
(5, 425, 84416, 1680, 79348, 4643, 854, '2020-05-08 20:39:00'),
(6, 480, 84414, 1680, 79291, 4643, 880, '2020-05-07 23:41:00'),
(7, 525, 84407, 1678, 79239, 4643, 903, '2020-05-06 23:40:00'),
(8, 580, 84404, 1676, 79181, 4643, 947, '2020-05-05 23:59:00'),
(9, 717, 84403, 1675, 79043, 4643, 962, '2020-05-04 20:41:00'),
(10, 785, 84393, 1672, 78965, 4643, 968, '2020-05-03 22:15:00'),
(11, 838, 84391, 1671, 78910, 4643, 981, '2020-05-02 23:58:00'),
(12, 853, 84387, 1670, 78891, 4643, 981, '2020-05-01 23:54:00'),
(13, 915, 84373, 1664, 78815, 4643, 998, '2020-04-30 22:58:00'),
(14, 960, 84369, 1660, 78766, 4643, 993, '2020-04-29 23:45:00'),
(15, 1014, 84367, 1639, 78710, 4643, 997, '2020-04-28 23:34:00'),
(16, 1102, 84341, 1636, 78596, 4643, 974, '2020-04-27 23:40:00'),
(17, 1227, 84338, 1634, 78469, 4642, 1000, '2020-04-26 23:57:00'),
(18, 1286, 84330, 1629, 78402, 4642, 983, '2020-04-25 23:55:00'),
(19, 1383, 84313, 1618, 78288, 4642, 979, '2020-04-24 23:59:00'),
(20, 1473, 84305, 1616, 78190, 4642, 984, '2020-04-23 23:59:00'),
(21, 1557, 84294, 1610, 78095, 4642, 991, '2020-04-22 23:42:00'),
(22, 1620, 84278, 1587, 78016, 4642, 992, '2020-04-21 23:56:00'),
(23, 1649, 84239, 1583, 77948, 4642, 990, '2020-04-20 23:57:00'),
(24, 1704, 84225, 1575, 77879, 4642, 999, '2020-04-19 23:53:00'),
(25, 1751, 84185, 1566, 77792, 4642, 1017, '2020-04-18 23:59:00'),
(26, 1796, 84156, 1549, 77718, 4642, 1038, '2020-04-17 23:54:00'),
(27, 1891, 83799, 1534, 78556, 3352, 1032, '2020-04-16 23:55:00'),
(28, 1965, 83752, 1500, 78435, 3352, 1023, '2020-04-15 23:33:00'),
(29, 2025, 83700, 1464, 78324, 3351, 1005, '2020-04-14 23:52:00'),
(30, 2108, 83607, 1378, 78148, 3351, 1064, '2020-04-13 23:55:00'),
(31, 2109, 83523, 1280, 78065, 3349, 1086, '2020-04-12 23:58:00'),
(32, 2075, 83400, 1183, 77976, 3349, 1092, '2020-04-11 23:46:00'),
(33, 2096, 83324, 1141, 77882, 3346, 1097, '2020-04-10 23:48:00'),
(34, 2174, 83264, 1103, 77746, 3344, 1104, '2020-04-09 23:59:00'),
(35, 2220, 83189, 1042, 77627, 3342, 1095, '2020-04-08 23:23:00'),
(36, 2288, 83095, 983, 77467, 3340, 1033, '2020-04-07 23:57:00'),
(37, 2332, 83039, 951, 77367, 3340, 1047, '2020-04-06 23:47:00'),
(38, 2371, 82966, 913, 77257, 3338, 1024, '2020-04-05 23:59:00'),
(39, 2568, 82899, 888, 76996, 3335, 1030, '2020-04-04 23:59:00'),
(40, 2716, 82857, 870, 76810, 3331, 1027, '2020-04-03 23:59:00'),
(41, 2835, 82772, 841, 76610, 3327, 1422, '2020-04-02 23:49:00'),
(42, 2932, 82691, 806, 76438, 3321, 1367, '2020-04-01 23:47:00'),
(43, 3048, 82601, 771, 76239, 3314, 528, '2020-03-31 23:26:00'),
(44, 3236, 82505, 723, 75956, 3313, 633, '2020-03-30 23:57:00'),
(45, 3509, 82421, 693, 75606, 3306, 742, '2020-03-29 23:57:00'),
(46, 3857, 82282, 649, 75124, 3301, 921, '2020-03-28 23:58:00'),
(47, 4123, 82164, 595, 74743, 3298, 1034, '2020-03-27 23:54:00'),
(48, 4537, 82034, 541, 74204, 3293, 1235, '2020-03-26 23:52:00'),
(49, 4813, 81896, 474, 73796, 3287, 1399, '2020-03-25 23:59:00'),
(50, 5220, 81806, 427, 73303, 3283, 1573, '2020-03-24 23:33:00'),
(51, 5567, 81691, 376, 72848, 3276, 1749, '2020-03-23 23:15:00'),
(52, 5909, 81566, 317, 72390, 3267, 1845, '2020-03-22 23:56:00'),
(53, 6311, 81457, 269, 71885, 3261, 1963, '2020-03-21 23:59:00'),
(54, 6838, 81385, 228, 71292, 3255, 2136, '2020-03-20 23:48:00'),
(55, 7452, 81263, 190, 70561, 3250, 2314, '2020-03-19 22:53:00'),
(56, 8183, 81202, 155, 69777, 3242, 2622, '2020-03-18 23:47:00'),
(57, 9084, 81135, 143, 68820, 3231, 2830, '2020-03-17 23:57:00'),
(58, 9951, 81099, 123, 67930, 3218, 3032, '2020-03-16 23:57:00'),
(59, 10821, 81062, 114, 67037, 3204, 3226, '2020-03-15 21:51:00'),
(60, 12160, 81029, 95, 65675, 3194, 3610, '2020-03-14 22:26:00'),
(61, 13600, 81007, 88, 64226, 3181, 4020, '2020-03-13 21:54:00'),
(62, 14884, 80981, 85, 62924, 3173, 4257, '2020-03-12 21:56:00'),
(63, 16139, 80969, 86, 61668, 3162, 4492, '2020-03-11 23:35:00'),
(64, 17595, 80932, 72, 60197, 3140, 4794, '2020-03-10 23:01:00'),
(65, 18957, 80905, 421, 58824, 3124, 5111, '2020-03-09 22:18:00'),
(66, 20355, 80868, 458, 57412, 3101, 5264, '2020-03-08 22:56:00'),
(67, 22184, 80815, 502, 55558, 3073, 5489, '2020-03-07 22:58:00'),
(68, 23721, 80734, 482, 53968, 3045, 5737, '2020-03-06 23:09:00'),
(69, 25260, 80581, 522, 52305, 3016, 5952, '2020-03-05 23:13:00'),
(70, 27430, 80424, 520, 50010, 2984, 6416, '2020-03-04 23:35:00'),
(71, 29921, 80303, 587, 47434, 2948, 6806, '2020-03-03 23:28:00'),
(72, 32415, 80175, 715, 44845, 2915, 7110, '2020-03-02 23:50:00'),
(73, 34937, 79972, 851, 42162, 2873, 7365, '2020-03-01 22:36:00'),
(74, 37248, 79394, 1418, 39308, 2838, 7664, '2020-02-29 23:30:00'),
(75, 39859, 78962, 2308, 36312, 2791, 7952, '2020-02-28 18:44:00'),
(76, 42968, 78631, 2358, 32916, 2747, 8346, '2020-02-27 22:59:00'),
(77, 45399, 78195, 2491, 30078, 2718, 8752, '2020-02-26 23:00:00'),
(78, 47464, 77785, 2824, 27655, 2666, 9126, '2020-02-25 23:14:00'),
(79, 49666, 77269, 3434, 25007, 2596, 9915, '2020-02-24 23:02:00'),
(80, 51420, 77048, 4148, 23183, 2445, 10968, '2020-02-23 22:38:00'),
(81, 52973, 76396, 5365, 21075, 2348, 11477, '2020-02-22 22:08:00'),
(82, 54645, 75571, 5206, 18687, 2239, 11633, '2020-02-21 23:11:00'),
(83, 55837, 74680, 4922, 16721, 2122, 11864, '2020-02-20 22:36:00'),
(84, 57337, 74284, 5248, 14938, 2009, 11977, '2020-02-19 22:06:00'),
(85, 57657, 72532, 6242, 13003, 1872, 11741, '2020-02-18 23:09:00'),
(86, 57594, 70644, 7264, 11278, 1772, 10644, '2020-02-17 23:43:00'),
(87, 57165, 68595, 8228, 9763, 1667, 11272, '2020-02-16 21:45:00'),
(88, 56563, 66581, 8969, 8494, 1524, 11053, '2020-02-15 22:51:00'),
(89, 55476, 63950, 10109, 7092, 1382, 10204, '2020-02-14 23:18:00'),
(90, 52324, 59907, 13435, 6215, 1368, 8030, '2020-02-13 23:51:00'),
(91, 0, 44765, 16067, 5066, 1116, 8204, '2020-02-12 23:07:00'),
(92, 0, 42747, 21675, 4301, 1017, 7333, '2020-02-11 23:28:00'),
(93, 0, 40262, 23589, 3551, 909, 6484, '2020-02-10 22:16:00'),
(94, 0, 37289, 28942, 2900, 813, 6188, '2020-02-09 23:00:00'),
(95, 0, 34673, 27657, 2375, 724, 6101, '2020-02-08 23:16:00'),
(96, 0, 31264, 26359, 1753, 637, 4821, '2020-02-07 23:23:00'),
(97, 0, 28138, 24702, 1373, 564, 3859, '2020-02-06 23:02:00'),
(98, 0, 24434, 23260, 1018, 493, 3219, '2020-02-05 23:52:00'),
(99, 0, 20530, 23214, 718, 426, 2788, '2020-02-04 23:38:00'),
(100, 0, 17341, 21558, 527, 361, 2296, '2020-02-03 22:56:00'),
(101, 0, 14490, 19544, 434, 304, 0, '2020-02-02 23:47:00'),
(102, 0, 11901, 17988, 275, 259, 0, '2020-02-01 23:46:00'),
(103, 0, 9811, 15238, 214, 213, 0, '2020-01-31 22:43:00'),
(104, 0, 8149, 12167, 135, 171, 0, '2020-01-30 23:08:00'),
(105, 0, 6095, 9239, 119, 133, 0, '2020-01-29 23:31:00'),
(106, 0, 4630, 6973, 73, 106, 0, '2020-01-28 21:02:00'),
(107, 0, 2857, 5794, 56, 82, 0, '2020-01-27 23:55:00'),
(108, 0, 2076, 2692, 49, 56, 0, '2020-01-26 23:03:00'),
(109, 0, 1408, 2032, 39, 42, 0, '2020-01-25 23:54:00'),
(110, 0, 897, 1076, 36, 26, 0, '2020-01-24 23:54:00');

-- --------------------------------------------------------

--
-- 表的结构 `hlw_domestic_data`
--

CREATE TABLE `hlw_domestic_data` (
  `provinceName` char(3) NOT NULL COMMENT '省市名',
  `province_confirmedCount` int(11) NOT NULL COMMENT '省市确诊人数',
  `province_suspectedCount` int(11) NOT NULL COMMENT '省市疑似人数',
  `province_curedCount` int(11) NOT NULL COMMENT '省市治愈人数',
  `province_deadCount` int(11) NOT NULL COMMENT '省市死亡人数',
  `updataTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `hlw_domestic_data`
--

INSERT INTO `hlw_domestic_data` (`provinceName`, `province_confirmedCount`, `province_suspectedCount`, `province_curedCount`, `province_deadCount`, `updataTime`) VALUES
('上海', 659, 300, 631, 7, '2020-05-12 11:49:00'),
('中国', 84451, 0, 79570, 4644, '2020-05-12 11:49:00'),
('云南', 185, 0, 183, 2, '2020-05-10 08:11:00'),
('内蒙古', 209, 34, 188, 1, '2020-05-12 08:26:00'),
('北京', 593, 164, 571, 9, '2020-05-12 08:44:00'),
('台湾', 440, 348, 368, 7, '2020-05-11 16:02:00'),
('吉林', 127, 19, 105, 1, '2020-05-11 09:15:00'),
('四川', 561, 13, 558, 3, '2020-04-24 09:27:00'),
('天津', 191, 48, 186, 3, '2020-05-08 11:54:00'),
('宁夏', 75, 0, 75, 0, '2020-03-16 16:47:00'),
('安徽', 991, 0, 985, 6, '2020-04-24 20:04:00'),
('山东', 788, 14, 777, 7, '2020-05-11 09:24:00'),
('山西', 198, 64, 197, 0, '2020-05-10 08:11:00'),
('广东', 1589, 11, 1578, 8, '2020-05-12 08:38:00'),
('广西', 254, 0, 252, 2, '2020-04-02 08:16:00'),
('新疆', 76, 0, 73, 3, '2020-03-08 13:31:00'),
('江苏', 653, 3, 653, 0, '2020-05-11 09:29:00'),
('江西', 937, 0, 936, 1, '2020-04-10 09:22:00'),
('河北', 328, 0, 321, 6, '2020-05-10 08:37:00'),
('河南', 1276, 0, 1254, 22, '2020-04-14 08:43:00'),
('浙江', 1268, 3, 1267, 1, '2020-05-05 09:15:00'),
('海南', 168, 0, 162, 6, '2020-03-24 12:19:00'),
('湖北', 68134, 0, 63616, 4512, '2020-05-11 09:15:00'),
('湖南', 1019, 0, 1015, 4, '2020-04-18 09:15:00'),
('澳门', 45, 9, 42, 0, '2020-05-11 20:38:00'),
('甘肃', 139, 0, 137, 2, '2020-04-16 21:44:00'),
('福建', 356, 3, 354, 1, '2020-05-07 08:45:00'),
('西藏', 1, 0, 1, 0, '2020-02-23 19:19:00'),
('贵州', 147, 0, 145, 2, '2020-04-19 08:51:00'),
('辽宁', 147, 0, 144, 2, '2020-05-10 17:42:00'),
('重庆', 579, 1, 573, 6, '2020-04-24 08:43:00'),
('陕西', 308, 1, 296, 3, '2020-05-12 09:00:00'),
('青海', 18, 0, 18, 0, '2020-02-23 19:19:00'),
('香港', 1047, 47, 985, 4, '2020-05-11 20:39:00'),
('黑龙江', 945, 394, 924, 13, '2020-05-12 08:38:00');

-- --------------------------------------------------------

--
-- 表的结构 `hlw_feeds`
--

CREATE TABLE `hlw_feeds` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `content` varchar(255) NOT NULL COMMENT '内容',
  `created_at` int(11) NOT NULL COMMENT '创建时间'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='聊天信息表';

--
-- 转存表中的数据 `hlw_feeds`
--

INSERT INTO `hlw_feeds` (`id`, `user_id`, `content`, `created_at`) VALUES
(1, 0, '武汉加油', 1591342420),
(2, 1, '我们一定能战胜疫情', 1591342443),
(3, 4, '感谢医护人员', 1591342465),
(4, 6, '万众一心，齐心协力', 1591342486),
(5, 7, '春天总会到来', 1591342508),
(6, 8, '致敬英雄', 1591342560),
(7, 2, '快点好起来吧', 1591342615),
(8, 5, '我们绝不会被打倒', 1591342665),
(9, 3, '我们要团结一致', 1591342767);

-- --------------------------------------------------------

--
-- 表的结构 `hlw_firstlevelmessage`
--

CREATE TABLE `hlw_firstlevelmessage` (
  `flmID` int(10) UNSIGNED NOT NULL,
  `userName` varchar(255) DEFAULT NULL,
  `flmTime` timestamp NULL DEFAULT NULL,
  `flmContent` text DEFAULT NULL,
  `secNum` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `hlw_firstlevelmessage`
--

INSERT INTO `hlw_firstlevelmessage` (`flmID`, `userName`, `flmTime`, `flmContent`, `secNum`) VALUES
(1, '张三', '2020-06-05 07:43:31', '万众一心，战胜疫情', 3),
(2, '夏天', '2020-06-05 07:44:49', '大家一定要戴口罩', 2),
(3, '异想天开', '2020-06-05 07:46:15', '愿山河无恙，国泰民安', 1),
(4, '李华', '2020-06-05 07:48:21', '疫情什么时候才能结束呢', 2),
(5, '天天', '2020-06-05 07:49:45', '我们会成功的', 0),
(6, '果果', '2020-06-05 07:51:19', '听说武汉要解封了', 2),
(7, '李明', '2020-06-05 07:52:38', '终于要好起来了', 0);

-- --------------------------------------------------------

--
-- 表的结构 `hlw_foreign_current_data`
--

CREATE TABLE `hlw_foreign_current_data` (
  `continentName` varchar(255) DEFAULT NULL COMMENT '大洲名',
  `countryName` varchar(255) NOT NULL COMMENT '国家名',
  `country_name_english` varchar(255) DEFAULT NULL COMMENT '国家英文名',
  `country_confirmedCount` int(11) DEFAULT NULL COMMENT '国家确诊人数',
  `country_suspectedCount` int(11) DEFAULT NULL COMMENT '国家怀疑人数',
  `country_curedCount` int(11) DEFAULT NULL COMMENT '国家治愈人数',
  `country_deadCount` int(11) DEFAULT NULL COMMENT '国家死亡人数'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `hlw_foreign_current_data`
--

INSERT INTO `hlw_foreign_current_data` (`continentName`, `countryName`, `country_name_english`, `country_confirmedCount`, `country_suspectedCount`, `country_curedCount`, `country_deadCount`) VALUES
('亚洲', '不丹', 'Bhutan', 9, 0, 0, 0),
('亚洲', '中国', 'China', 84451, 1691, 79570, 4644),
('非洲', '中非共和国', 'Central African Rep.', 179, 0, 12, 0),
('欧洲', '丹麦', 'Denmark', 10513, 0, 8217, 533),
('欧洲', '乌克兰', 'Ukraine', 15648, 0, 2909, 408),
('亚洲', '乌兹别克斯坦', 'Uzbekistan', 2418, 0, 1881, 10),
('非洲', '乌干达', 'Uganda', 121, 0, 55, 0),
('南美洲', '乌拉圭', 'Uruguay', 702, 0, 492, 17),
('非洲', '乍得', 'Chad', 322, 0, 0, 31),
('亚洲', '也门共和国', 'Yemen', 58, 0, 1, 10),
('亚洲', '亚美尼亚', 'Armenia', 3392, 0, 1359, 46),
('亚洲', '以色列', 'Israel', 16506, 0, 11843, 258),
('亚洲', '伊拉克', 'Iraq', 2818, 0, 1790, 110),
('亚洲', '伊朗', 'Iran', 109286, 0, 87422, 6685),
('非洲', '佛得角', '', 246, 0, 44, 2),
('欧洲', '俄罗斯', 'Russia', 221344, 0, 39801, 2009),
('欧洲', '保加利亚', 'Bulgaria', 1965, 0, 444, 91),
('欧洲', '克罗地亚', 'Croatia', 2196, 0, 1784, 90),
('大洋洲', '关岛', 'Guam', 147, 0, 0, 5),
('欧洲', '冰岛', 'Iceland', 1801, 0, 1755, 10),
('非洲', '几内亚', 'Guinea', 2146, 0, 714, 11),
('非洲', '几内亚比绍', '', 726, 0, 26, 3),
('非洲', '刚果（布）', 'Congo', 333, 0, 53, 11),
('非洲', '刚果（金）', 'Dem. Rep. Congo', 1024, 0, 141, 41),
('非洲', '利比亚', 'Libya', 64, 0, 24, 3),
('非洲', '利比里亚', 'Liberia', 211, 0, 85, 20),
('北美洲', '加拿大', 'Canada', 69981, 0, 32994, 4993),
('非洲', '加纳', 'Ghana', 4700, 0, 494, 22),
('非洲', '加蓬', 'Gabon', 661, 0, 110, 8),
('欧洲', '匈牙利', 'Hungary', 3284, 0, 958, 421),
('欧洲', '北马其顿', 'North Macedonia', 1664, 0, 1200, 91),
('大洋洲', '北马里亚纳群岛联邦', '', 16, 0, 0, 2),
('非洲', '南苏丹', 'S. Sudan', 174, 0, 2, 0),
('非洲', '南非', 'South Africa', 10652, 0, 4357, 206),
('非洲', '博茨瓦纳', 'Botswana', 23, 0, 0, 1),
('亚洲', '卡塔尔', 'Qatar', 23623, 0, 2840, 14),
('非洲', '卢旺达', 'Rwanda', 285, 0, 150, 0),
('欧洲', '卢森堡', 'Luxembourg', 3888, 0, 3602, 101),
('亚洲', '印度', 'India', 70756, 0, 22455, 2293),
('亚洲', '印度尼西亚', 'Indonesia', 14265, 0, 2881, 991),
('北美洲', '危地马拉', 'Guatemala', 967, 0, 0, 24),
('南美洲', '厄瓜多尔', 'Ecuador', 29559, 0, 3433, 2127),
('非洲', '厄立特里亚', 'Eritrea', 39, 0, 6, 0),
('北美洲', '古巴', 'Cuba', 1766, 0, 525, 77),
('亚洲', '吉尔吉斯斯坦', 'Kyrgyzstan', 1016, 0, 675, 12),
('非洲', '吉布提', 'Djibouti', 1227, 0, 872, 3),
('亚洲', '哈萨克斯坦', 'Kazakhstan', 5138, 0, 1766, 31),
('南美洲', '哥伦比亚', 'Colombia', 10495, 0, 1210, 445),
('北美洲', '哥斯达黎加', 'Costa Rica', 780, 0, 0, 6),
('非洲', '喀麦隆', 'Cameroon', 2579, 0, 1465, 114),
('亚洲', '土库曼斯坦', 'Turkmenistan', 0, 0, 0, 0),
('亚洲', '土耳其', 'Turkey', 139771, 0, 95780, 3841),
('非洲', '圣多美和普林西比', 'Sao Tome and Principe', 208, 0, 0, 5),
('北美洲', '圣马丁岛', 'Sint Maarten', 39, 0, 0, 3),
('欧洲', '圣马力诺', 'San Marino', 637, 0, 2, 41),
('南美洲', '圭亚那', 'Guyana', 104, 0, 27, 10),
('非洲', '坦桑尼亚', 'Tanzania', 509, 0, 167, 21),
('非洲', '埃及', 'Egypt', 9746, 0, 2172, 533),
('非洲', '埃塞俄比亚', 'Ethiopia', 250, 0, 105, 5),
('亚洲', '塔吉克斯坦', 'Tajikistan', 612, 0, 0, 20),
('非洲', '塞内加尔', 'Senegal', 1886, 0, 715, 19),
('欧洲', '塞尔维亚', 'Serbia', 11060, 0, 3943, 246),
('非洲', '塞拉利昂', 'Sierra Leone', 338, 0, 72, 19),
('亚洲', '塞浦路斯', 'Cyprus', 901, 0, 504, 26),
('北美洲', '墨西哥', 'Mexico', 36327, 0, 17781, 3573),
('非洲', '多哥', 'Togo', 174, 0, 89, 11),
('北美洲', '多米尼加', 'Dominican Republic', 10347, 0, 993, 388),
('欧洲', '奥地利', 'Austria', 15845, 0, 13228, 620),
('南美洲', '委内瑞拉', 'Venezuela', 402, 0, 0, 10),
('亚洲', '孟加拉国', 'Bangladesh', 15691, 0, 2414, 239),
('非洲', '安哥拉', 'Angola', 45, 0, 11, 2),
('欧洲', '安道尔', 'Andorra', 756, 0, 472, 48),
('北美洲', '尼加拉瓜', 'Nicaragua', 16, 0, 0, 5),
('非洲', '尼日利亚', 'Nigeria', 4641, 0, 902, 150),
('非洲', '尼日尔', 'Niger', 832, 0, 637, 46),
('亚洲', '尼泊尔', 'Nepal', 121, 0, 22, 0),
('亚洲', '巴勒斯坦', 'Palestine', 547, 0, 263, 4),
('亚洲', '巴基斯坦', 'Pakistan', 30941, 0, 8212, 667),
('北美洲', '巴巴多斯', 'Barbados', 84, 0, 0, 7),
('大洋洲', '巴布亚新几内亚', 'Papua New Guinea', 8, 0, 0, 0),
('南美洲', '巴拉圭', 'Paraguay', 713, 0, 130, 10),
('北美洲', '巴拿马', 'Panama', 8282, 0, 455, 237),
('亚洲', '巴林', 'Bahrain', 5157, 0, 2152, 8),
('南美洲', '巴西', 'Brazil', 168331, 0, 69232, 11519),
('非洲', '布基纳法索', 'Burkina Faso', 760, 0, 585, 50),
('非洲', '布隆迪共和国', 'Burundi', 19, 0, 4, 1),
('欧洲', '希腊', 'Greece', 2726, 0, 1473, 151),
('北美洲', '开曼群岛', 'Cayman Is', 81, 0, 0, 2),
('欧洲', '德国', 'Germany', 170508, 0, 147200, 7533),
('欧洲', '意大利', 'Italy', 219814, 0, 106587, 30739),
('欧洲', '拉脱维亚', 'Latvia', 946, 0, 464, 18),
('欧洲', '挪威', 'Norway', 8122, 0, 0, 224),
('欧洲', '捷克', 'Czech Republic', 8157, 0, 4695, 281),
('欧洲', '摩尔多瓦', 'Moldova', 4927, 0, 1958, 171),
('非洲', '摩洛哥', 'Morocco', 6281, 0, 2811, 188),
('亚洲', '文莱', 'Brunei', 141, 0, 131, 1),
('非洲', '斯威士兰', 'Swaziland', 172, 0, 13, 2),
('欧洲', '斯洛伐克', 'Slovakia', 1457, 0, 806, 26),
('欧洲', '斯洛文尼亚', 'Slovenia', 1460, 0, 256, 102),
('亚洲', '斯里兰卡', 'SriLanka', 869, 0, 343, 9),
('亚洲', '新加坡', 'Singapore', 23822, 0, 1408, 20),
('大洋洲', '新西兰', 'New Zealand', 1147, 4, 1347, 21),
('亚洲', '日本', 'Japan', 15847, 0, 8127, 633),
('南美洲', '智利', 'Chile', 30063, 0, 13605, 323),
('亚洲', '柬埔寨', 'Kampuchea (Cambodia )', 122, 0, 50, 0),
('欧洲', '根西岛', 'Guernsey', 252, 0, 0, 13),
('亚洲', '格鲁吉亚', 'Georgia', 638, 0, 288, 10),
('欧洲', '比利时', 'Belgium', 53449, 0, 13697, 8707),
('非洲', '毛里塔尼亚', 'Mauritania', 8, 0, 6, 1),
('非洲', '毛里求斯', 'Mauritius', 332, 0, 322, 10),
('亚洲', '沙特阿拉伯', 'Saudi Arabia', 41014, 0, 12737, 255),
('欧洲', '法国', 'France', 139519, 0, 56724, 26643),
('南美洲', '法属圭亚那', 'French Guiana', 144, 0, 0, 1),
('欧洲', '法罗群岛', 'Faroe', 187, 0, 0, 0),
('欧洲', '波兰', 'Poland', 16326, 0, 5816, 811),
('北美洲', '波多黎各', 'Puerto Rico', 2198, 0, 0, 111),
('欧洲', '波黑', 'Bosnia and Herzegovina', 2106, 0, 1109, 112),
('亚洲', '泰国', 'Thailand', 3017, 0, 2798, 56),
('欧洲', '泽西岛', 'Bailiwick of Jersey', 293, 0, 0, 25),
('非洲', '津巴布韦', 'Zimbabwe', 36, 0, 5, 4),
('北美洲', '洪都拉斯', 'Honduras', 1830, 0, 0, 108),
('北美洲', '海地', 'Haiti', 151, 0, 0, 12),
('大洋洲', '澳大利亚', 'Australia', 6948, 0, 6179, 97),
('欧洲', '爱尔兰', 'Ireland', 23135, 0, 13386, 1467),
('欧洲', '爱沙尼亚', 'Estonia', 1741, 0, 1237, 61),
('北美洲', '牙买加', 'Jamaica', 498, 0, 0, 9),
('北美洲', '特立尼达和多巴哥', 'Trinidad and Tobago', 116, 0, 0, 8),
('南美洲', '玻利维亚', 'Bolivia', 2437, 0, 159, 114),
('欧洲', '瑞典', 'Sweden', 26794, 0, 4971, 3279),
('欧洲', '瑞士', 'Switzerland', 30262, 0, 26545, 1542),
('北美洲', '瓜德罗普岛', '', 154, 0, 0, 13),
('非洲', '留尼旺', 'Reunion', 436, 0, 0, 0),
('欧洲', '白俄罗斯', 'Belarus', 23906, 0, 6531, 135),
('北美洲', '百慕大', '', 118, 0, 0, 7),
('欧洲', '直布罗陀', 'Gibraltar', 146, 0, 0, 1),
('亚洲', '科威特', 'Kuwait', 9286, 0, 2907, 65),
('非洲', '科摩罗', '', 11, 0, 0, 1),
('非洲', '科特迪瓦', 'Ivory Coast', 1730, 0, 891, 21),
('南美洲', '秘鲁', 'Peru', 68822, 0, 22406, 1961),
('非洲', '突尼斯', 'Tunisia', 1032, 0, 600, 45),
('欧洲', '立陶宛', 'Lithuania', 1485, 0, 833, 50),
('﻿非洲', '索马里', 'Somalia', 1089, 0, 121, 52),
('亚洲', '约旦', 'Jordan', 562, 0, 390, 9),
('非洲', '纳米比亚', 'Namibia', 16, 0, 3, 0),
('亚洲', '缅甸', 'Myanmar', 180, 0, 62, 6),
('欧洲', '罗马尼亚', 'Romania', 15588, 0, 7245, 972),
('北美洲', '美国', 'United States', 1347881, 0, 232733, 80684),
('北美洲', '美属维尔京群岛', '', 69, 0, 0, 4),
('非洲', '肯尼亚', 'Kenya', 700, 0, 251, 33),
('欧洲', '芬兰', 'Finland', 5984, 0, 4000, 271),
('非洲', '苏丹', 'Sudan', 1526, 0, 161, 74),
('欧洲', '英国', 'United Kingdom', 223060, 0, 539, 32065),
('欧洲', '荷兰', 'Netherlands', 42788, 0, 291, 5456),
('北美洲', '荷属圣马丁', '', 77, 0, 0, 15),
('非洲', '莫桑比克', 'Mozambique', 103, 0, 34, 0),
('亚洲', '菲律宾', 'Philippines', 11086, 0, 1999, 726),
('北美洲', '萨尔瓦多', 'El Salvador', 889, 0, 0, 17),
('欧洲', '葡萄牙', 'Portugal', 27689, 0, 2549, 1144),
('亚洲', '蒙古', 'Mongolia', 42, 0, 10, 0),
('欧洲', '西班牙', 'Spain', 227436, 0, 137139, 26744),
('非洲', '贝宁', 'Benin', 319, 0, 62, 2),
('非洲', '赞比亚共和国', 'Zambia', 267, 0, 117, 7),
('非洲', '赤道几内亚', 'Eq. Guinea', 439, 0, 13, 4),
('亚洲', '越南', 'Vietnam', 288, 0, 169, 0),
('其他', '钻石公主号邮轮', 'Diamond Princess Cruise Ship', 712, 0, 574, 13),
('亚洲', '阿塞拜疆', 'Azerbaijan', 2589, 0, 1680, 32),
('亚洲', '阿富汗', 'Afghanistan', 4687, 0, 574, 122),
('非洲', '阿尔及利亚', 'Algeria', 5891, 0, 2841, 507),
('欧洲', '阿尔巴尼亚', 'Albania', 872, 0, 650, 31),
('亚洲', '阿曼', 'Oman', 3574, 0, 1211, 17),
('南美洲', '阿根廷', 'Argentina', 6265, 0, 1757, 305),
('亚洲', '阿联酋', 'United Arab Emirates', 18878, 0, 5381, 201),
('北美洲', '阿鲁巴', '', 101, 0, 0, 3),
('亚洲', '韩国', 'Korea', 10936, 0, 9670, 258),
('亚洲', '马尔代夫', 'Maldives', 835, 0, 29, 3),
('欧洲', '马恩岛', 'Isle of Man', 330, 0, 0, 23),
('非洲', '马拉维', 'Malawi', 57, 0, 24, 3),
('北美洲', '马提尼克', 'Martinique', 187, 0, 0, 14),
('亚洲', '马来西亚', 'Malaysia', 6726, 0, 5113, 109),
('非洲', '马约特', '', 1023, 0, 0, 11),
('欧洲', '马耳他', 'Malta', 496, 0, 367, 5),
('非洲', '马达加斯加', 'Madagascar', 186, 0, 105, 0),
('非洲', '马里', 'Mali', 712, 0, 377, 39),
('亚洲', '黎巴嫩', 'Lebanon', 859, 0, 234, 26),
('欧洲', '黑山', 'Bosnia and Herz', 325, 0, 265, 8);

-- --------------------------------------------------------

--
-- 表的结构 `hlw_posts`
--

CREATE TABLE `hlw_posts` (
  `id` int(11) NOT NULL COMMENT '自增ID',
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `media` varchar(255) DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL COMMENT '摘要',
  `content` text DEFAULT NULL COMMENT '内容',
  `label_img` varchar(255) DEFAULT NULL COMMENT '标签图',
  `cat_id` int(11) DEFAULT NULL COMMENT '分类id',
  `user_id` int(11) DEFAULT NULL COMMENT '用户id',
  `user_name` varchar(255) DEFAULT NULL COMMENT '用户名',
  `is_valid` tinyint(1) DEFAULT 0 COMMENT '是否有效：0-未发布 1-已发布',
  `created_at` int(11) DEFAULT NULL COMMENT '创建时间',
  `updated_at` int(11) DEFAULT NULL COMMENT '更新时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='文章主表';

--
-- 转存表中的数据 `hlw_posts`
--

INSERT INTO `hlw_posts` (`id`, `title`, `media`, `summary`, `content`, `label_img`, `cat_id`, `user_id`, `user_name`, `is_valid`, `created_at`, `updated_at`) VALUES
(170, '习近平同塞尔维亚总统武契奇通电话', '人民日报', '习近平指出，中塞关系是最深厚的国与国关系。面对新冠肺炎疫情的考验，两国再次以实际行动体现了亲如手足的兄弟之情和肝胆相照的朋友之义。', '<p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; color: rgb(34, 34, 34); white-space: normal;\">&nbsp; &nbsp; &nbsp; &nbsp;新华社北京4月14日电&nbsp;&nbsp;国家主席习近平14日晚同塞尔维亚总统武契奇通电话。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; color: rgb(34, 34, 34); white-space: normal;\">　　习近平指出，中塞关系是最深厚的国与国关系。面对新冠肺炎疫情的考验，两国再次以实际行动体现了亲如手足的兄弟之情和肝胆相照的朋友之义。中方对当前塞尔维亚人民面临的疫情威胁感同身受，已向塞方提供急需的医疗防护物资，派出高水平医疗专家组。中方将继续为塞方抗疫提供帮助和支持。相信在你坚强领导下，英勇无畏的塞尔维亚人民一定能够早日战胜疫情。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; color: rgb(34, 34, 34); white-space: normal;\">　　习近平强调，中塞深厚、特殊的友谊是用鲜血和意志铸就的，无论什么风险挑战，只会将中塞铁杆情谊淬炼得更加坚不可摧。中方愿同塞方一道，坚定捍卫国际道义，推动国际社会同舟共济、团结合作。相信经过共同抗疫的考验，中塞全面战略伙伴关系将迎来更美好的未来。祝中塞友谊万古长青！</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; color: rgb(34, 34, 34); white-space: normal;\">　　武契奇表示，中方已经控制住疫情，我由衷感到高兴。在塞尔维亚人民处在困难的时候，中方施以援手，特别是中方医疗专家组为塞方防控疫情提供了很大支持和帮助，我们会永远铭记。中国给予塞尔维亚人民战胜疫情的希望。无论遇到什么困难和挑战，塞尔维亚人民永远是中国人民的真诚可靠的铁杆朋友。塞方将尽力照顾好在塞中国公民。我愿同习近平主席继续保持密切交往。塞中友谊万岁！</p><p><br/></p>', '/yii2020/image/20200605/1591346160585544.jpg', 2, 1, 'yicheng', 1, 1591346898, 1591346898),
(171, '人民网评：按下湖北、武汉经济复苏的“快进键”', '人民网', '4月29日，中央政治局常务委员会召开会议，明确提出“党中央研究确定了支持湖北省经济社会发展一揽子政策，从财政税收、金融信贷、投资外贸等方面明确了具体措施。有关部门要会同湖北省认真抓好组织实施，尽快落实到位”。', '<p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\"><span style=\"text-indent: 2em;\">4月29日，中央政治局常务委员会召开会议，明确提出“党中央研究确定了支持湖北省经济社会发展一揽子政策，从财政税收、金融信贷、投资外贸等方面明确了具体措施。有关部门要会同湖北省认真抓好组织实施，尽快落实到位”。对“苏醒”的湖北和武汉来说，这是解决当下困难的一场“及时雨”，更是着眼未来发展的一声“冲锋号”。</span></p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\">为了疫情防控大局，湖北和武汉人民作出了很大贡献，付出了很大牺牲，以“封闭一座城”的壮举，守护着整个国家的健康与平安。正是这些牺牲和奉献、坚持和努力，才有了今天疫情防控的积极向好态势。习近平总书记对此深情赞许：“全党全国各族人民都为你们而感动、而赞叹！党和人民感谢武汉人民！”</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\">湖北是工业大省，武汉是千万人口级别的城市。客观来说，在疫情防控中，湖北省特别是武汉市经济社会发展和民生保障面临的困难较大，湖北一季度地区生产总值比上年同期下降39.2%，远低于全国平均水平。在这个时候，中央和国家机关各部委加大对湖北的支持力度，制定一揽子计划，在就业、财政、税收、金融、脱贫攻坚、重大项目建设等方面适当倾斜，就是为了在湖北最艰难的时期搭把手、拉一把，帮助湖北解决实际困难和具体问题，助其早日全面步入正常轨道，同全国一道完成决胜全面建成小康社会各项任务。党中央确定支持湖北省经济社会发展一揽子政策的决定，提振了人们的信心、鼓舞了人们的士气。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\">“把失去的时间抢回来！”恢复了生活，更恢弘了士气；抖落了尘埃，更抖擞了精神，在湖北，无数人正在为早日恢复正常的生产生活秩序紧张忙碌。一手抓疫情防控，一手抓复工复产，把抗击疫情的努力转化为埋头苦干、艰苦奋斗的实际行动，转化成攻坚克难、共克时艰的精神力量，武汉人民一定能！湖北一定行！</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\">“一起拥抱热干面吧！”4月8日零时起，武汉正式解除离汉通道管控。与深情问候相伴的，还有全国各地“你为湖北拼过命，我为湖北拼过单”的抢购风潮。鸭脖子、小龙虾、莲藕……湖北特色农产品线上线下热销，成为促就业、保民生的有力抓手。再渺小的力量乘以14亿，就能聚沙成塔；再大的困难除以14亿，都会变得渺小如尘。这是万众一心的凝聚力，也是守望相助的向心力。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\">莫道春光难揽取，浮云过后艳阳天。疫情防控慎终如始，发展动能蓄势待发。按下复苏的“快进键”，湖北和武汉定能跑出发展的“加速度”。对此，每个人都深信不疑。</p><p><br/></p>', '/yii2020/image/20200605/1591347176601146.jpg', 1, 1, 'yicheng', 1, 1591347197, 1591347197),
(172, '国家卫健委：全国连续13天无新增死亡病例 继续加固防控薄弱环节', '人民网', '28日，国务院联防联控机制就疫情期间农业农村经济发展工作情况举行发布会。', '<p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-size: 18px; line-height: 32.4px; text-indent: 2em; color: rgb(51, 51, 51); font-family: Verdana, &quot;Microsoft YaHei&quot;, sans-serif; white-space: normal;\">人民网北京4月28日电（王国菁）28日，国务院联防联控机制就疫情期间农业农村经济发展工作情况举行发布会。会上，国家卫生健康委新闻发言人、宣传司副司长米锋在通报疫情情况时表示，4月27日，全国连续13天无新增死亡病例，当日治愈出院的境外输入病例为疫情发生以来最多；但连续21天有新增本土确诊病例报告，一些地方连续发生输入性关联病例和多起聚集性疫情，要继续加固防控薄弱环节，坚决阻断疫情传播，精准抓好内防反弹。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-size: 18px; line-height: 32.4px; text-indent: 2em; color: rgb(51, 51, 51); font-family: Verdana, &quot;Microsoft YaHei&quot;, sans-serif; white-space: normal;\">4月27日0时—24时，各省（区、市）和新疆生产建设兵团报告：新增确诊病例6例，其中3例为境外输入病例，分别为上海2例，内蒙古1例；3例为黑龙江本土病例；无新增死亡病例；新增疑似病例1例，为境外输入上海疑似病例。当日新增治愈出院病例81例，解除医学观察的密切接触者915人，重症病例减少2例。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-size: 18px; line-height: 32.4px; text-indent: 2em; color: rgb(51, 51, 51); font-family: Verdana, &quot;Microsoft YaHei&quot;, sans-serif; white-space: normal;\">境外输入现有确诊病例552例，其中重症病例21例；现有疑似病例6例。累计确诊病例1639例，累计治愈出院病例1087例，无死亡病例。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-size: 18px; line-height: 32.4px; text-indent: 2em; color: rgb(51, 51, 51); font-family: Verdana, &quot;Microsoft YaHei&quot;, sans-serif; white-space: normal;\">截至4月27日24时，据各省（区、市）和新疆生产建设兵团报告：现有确诊病例648例，其中重症病例50例；累计治愈出院病例77555例，累计死亡病例4633例，累计报告确诊病例82836例，现有疑似病例9例。累计追踪到密切接触者731015人，尚在医学观察的密切接触者8014人。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-size: 18px; line-height: 32.4px; text-indent: 2em; color: rgb(51, 51, 51); font-family: Verdana, &quot;Microsoft YaHei&quot;, sans-serif; white-space: normal;\">湖北当日无新增和现有确诊、疑似病例，无新增死亡病例。累计治愈出院病例63616例，其中武汉46464例；累计死亡病例4512例，其中武汉3869例；累计确诊病例68128例，其中武汉50333例。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-size: 18px; line-height: 32.4px; text-indent: 2em; color: rgb(51, 51, 51); font-family: Verdana, &quot;Microsoft YaHei&quot;, sans-serif; white-space: normal;\">各省（区、市）和新疆生产建设兵团报告：新增无症状感染者40例，其中境外输入3例；当日无转为确诊病例；当日解除医学观察17例，其中来自境外输入4例；尚在医学观察无症状感染者997例，其中境外输入130例。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-size: 18px; line-height: 32.4px; text-indent: 2em; color: rgb(51, 51, 51); font-family: Verdana, &quot;Microsoft YaHei&quot;, sans-serif; white-space: normal;\">累计收到港澳台地区通报确诊病例1511例。其中，香港特别行政区1037例，澳门特别行政区45例，台湾地区429例。</p><p><br/></p>', '/yii2020/image/20200605/1591347359690318.jpg', 1, 1, 'yicheng', 1, 1591347382, 1591347382),
(173, '在鄂境外人员可申领湖北健康码 绿码通行', '人民网', '湖北省新型冠状病毒感染肺炎疫情防控指挥部发布最新通告，在鄂外籍、港澳台人员可使用“鄂汇办”移动端申领湖北健康码。', '<p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\">人民网武汉4月25日电 刚刚，湖北省新型冠状病毒感染肺炎疫情防控指挥部发布最新通告，在鄂外籍、港澳台人员可使用“鄂汇办”移动端申领湖北健康码。具体通告如下：</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal; text-align: center;\"><strong>湖北省新型冠状病毒感染肺炎疫情防控指挥部通告</strong></p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\">为进一步加强精准防疫、助力复工复产，体现对在鄂境外人员“一视同仁，同等对待”精神，现就在鄂外籍、港澳台人员申领湖北健康码有关事项和流程通告如下：</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\">一、申领要求</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\">1. 在鄂外籍、港澳台人员可使用“鄂汇办”移动端申领湖北健康码。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\">2.外籍人员使用入境时所持护照在我省公安机关完成备案后可申领湖北健康码；港澳人员使用港澳居民来往内地通行证，台湾人员使用台湾居民来往大陆通行证登记申领湖北健康码。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\">二、申请流程</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\">1.手机搜索下载“鄂汇办”APP，点击进入“湖北健康码外籍、港澳台人员申领页面”。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\">2.如实填写相关信息。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\">3.提交后即可完成申领。一般24小时内，点击“我的健康码”即可亮码使用。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\">三、核验通行</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\">1.按照“绿码通行”原则，卡口核验人员使用鄂汇办APP软件扫码核验功能，识别持码人的健康信息，并对体温异常信息及时记录上报。持码人可主动扫描支付宝场所码，自助完成进出卡口登记。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\">2.境外人员可凭国家防疫健康信息码，作为进入我省健康凭证。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\">3.境外人员应积极申领湖北健康码，并服从卡口管理。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\">4.咨询电话：027-87122256</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal; text-align: right;\">湖北省新型冠状病毒感染肺炎疫情防控指挥部</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal; text-align: right;\">2020年4月25日</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; color: rgb(34, 34, 34); white-space: normal; text-align: center;\"><img alt=\"\" src=\"http://hb.people.com.cn/NMediaFile/2020/0425/LOCAL202004251642000578133691785.jpg\" width=\"600\" height=\"616\" style=\"border: none; max-width: 660px; height: auto;\"/></p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal; text-align: center;\"><span style=\"font-family: 楷体;\">湖北省人民政府网站截图</span></p><p><br/></p>', '/yii2020/image/20200605/1591347447839773.jpg', 1, 1, 'yicheng', 1, 1591347516, 1591347516),
(174, '求真|这些涉外疫情谣言可别信！', '人民网', '近日，新冠肺炎疫情在多国持续弥漫，全球多个国家拉响警报,境外新增病例数已持续多日超过境内，因此不少人开始担忧国外输入病例。而有些人便利用大家慌乱的情绪制造种种谣言，各类与境外疫情输入相关的谣言散布在各种社交网络平台上，一时难辨真假。小编盘点了一些相关谣言，为你逐一击破！', '<p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\">人民网北京3月19日电 （记者 温璐）近日，新冠肺炎疫情在多国持续弥漫，全球多个国家拉响警报,境外新增病例数已持续多日超过境内，因此不少人开始担忧国外输入病例。而有些人便利用大家慌乱的情绪制造种种谣言，各类与境外疫情输入相关的谣言散布在各种社交网络平台上，一时难辨真假。小编盘点了一些相关谣言，为你逐一击破！</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\"><strong>1、湖州2名境外输入病例回家后串门访客？</strong></p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\">【真相】3月4日，浙江新增确诊病例2例，且均为湖州市德清县报告的意大利输入病例。随后网上出现传言称“2名境外（意大利）输入患者于2月29日抵达德清后，又去该县上柏等地串门走访请客”。对此，德清相关部门人士表示，上述言论系谣传。此外，德清县疾控中心回应称，阜溪街道已提前掌握2名患者返德信息并做好相关防控措施，2名患者已按要求进行居家隔离。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\">此外，德清县疾控中心回应称，阜溪街道已提前掌握2名患者返德信息并做好相关防控措施。2名患者在2月29日下午5时许从申嘉湖杭高速德清出口下高速后，直接进入阜溪街道美立方小区，同时阜溪街道随即按要求对其进行居家隔离硬管控。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\">从2月29日居家隔离硬管控至3月4日送至湖州市定点医院隔离治疗，2名患者不存<span style=\"text-indent: 2em;\">在自行外出的情况。</span></p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\">密切接触者胡某月，在2月29日驾车从杭州萧山机场接回2名患者后，随即返回蓝色港湾小区居所并进行居家自我隔离。从2月29日居家自我隔离至3月4日送至县集中隔离医学观察点，胡某月不存在自行外出的情况。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\">“湖州发布”5日通报，新增2例境外输入病例为母女关系（母亲 45岁，女儿16岁），一直生活在意大利。两人于2月28日由意大利都灵起程（AF1503航班），途经巴黎戴高乐机场转机（CZ348航班）、2月29日约6点40分到达广州，再转机（CZ3803航班，座位号53C、53H）到达杭州萧山机场。2月29日下午由其家人自驾接回德清，即被居家隔离医学观察。2人于3月4日凌晨发病，3月4日新冠病毒核酸检测阳性。目前在湖州定点医疗机构隔离治疗。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; color: rgb(34, 34, 34); white-space: normal; text-align: center;\"><img alt=\"\" src=\"http://society.people.com.cn/NMediaFile/2020/0318/MAIN202003181431000388906752238.jpg\" width=\"440\" height=\"320\" style=\"border: none; max-width: 660px; height: auto;\"/></p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\"><strong>2、网传“东海县聚龙公馆被带走的疑似病例今日被查出确诊”</strong></p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\">【真相】经核查，3月4日，东海县聚龙名苑小区张某从泰国经上海返回县里后，已经进行居家隔离管理，3月10日，张某出现轻微咳嗽症状，无发热。为了排除新冠肺炎隐患，将张某送往定点医院进行隔离治疗。目前经核酸检测为阴性，张某仍在定点医院接受观察。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\"><strong>3、近日，有网民杜撰“从伊朗接回的200名宁夏籍人员其中已确诊的有12例……被治愈的病患又个别出现返病的症状”等信息。</strong></p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\">【真相】经核查，该信息为虚假信息。当晚10时，银川市公安局金凤区分局长城中路派出所民警依法将涉嫌散布谣言的段某查获，并口头传唤至派出所调查。段某对其散布谣言的违法事实供认不讳。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\"><strong>4、近日，有传言称“韩国人来青岛躲避疫情、不需要强制隔离、首尔飞青岛航班爆满、航班价格暴涨等。”</strong></p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\">【真相】2月24日，青岛市人民政府新闻办公室官方微博“青岛发布”发《青岛严格防控境外疫情输入》辟谣。随着境外疫情形势变化，青岛市自2月24日开始，对所有入境人员，除需要隔离或留观的外，均由居住地所在区市派车接回，对在境内有居所的，居家隔离观察14天；对商务旅游等短期居住的，安排在指定宾馆住居、活动。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; color: rgb(34, 34, 34); white-space: normal; text-align: center;\"><img alt=\"\" src=\"http://society.people.com.cn/NMediaFile/2020/0318/MAIN202003181430000015719135744.jpg\" width=\"400\" height=\"620\" style=\"border: none; max-width: 660px; height: auto;\"/></p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\"><strong>5、网传中国留学生在英感染新冠死亡信息不实</strong></p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\">【真相】近日，社交平台流传多则信息，声称英国高校内有我留学人员疑似感染新冠肺炎，拨打NHS111热线得不到回应，或要求就医被拒，导致在家自我隔离期间死亡。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\">驻英国使馆对此高度重视，立即通过有关渠道调查核实，现确认，使馆未收到英国官方关于此类案件的通报，相关各校校方和中国学联也均予否认。事实证明，有关消息皆为谣言。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; color: rgb(34, 34, 34); white-space: normal; text-align: center;\"><img alt=\"\" src=\"http://society.people.com.cn/NMediaFile/2020/0316/MAIN202003161358000322754012010.jpg\" width=\"400\" height=\"867\" style=\"border: none; max-width: 660px; height: auto;\"/></p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; color: rgb(34, 34, 34); white-space: normal;\"><strong>&nbsp; &nbsp; &nbsp; 6、华人感染新冠回国后因为自费治疗要投诉？假的！</strong></p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\">【真相】3月15日，昵称为“苏州河”的网民发布了一条帖子内容为“一个美国国籍的华人感染新冠了，听说国内免费治疗，且非常有经验，一家三口吃了一倍量的退烧药逃避防疫检查回到中国，第二天得知，治疗费用自己掏，非常不满，询问在哪里投诉？是否可以募捐？”一时引起大众争议，并遭到声讨。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\">3月16日上午，帖子发布者“苏州河”改名，删除了之前全部帖子，并发布了《真诚跟所有朋友道歉，是我错了，真心道歉》一文称，前几天看到过一篇关于“女子在美国感染后，携家眷飞奔回祖国”的新闻，因为想蹭流量，就根据自己的想法，编了一个类似的小故事，之后没想到会引起公愤。该网民表示，自己作为一个成年人，应该对自己的作为负责任，不管受到怎样的处罚。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\">3月16日下午，今日头条相关工作人员表示，因该账号发布虚假内容，按照平台规则，已对该账号做了封禁处理。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\"><strong>7、4名意大利返乡人员发烧？一男子发视频造谣被拘！</strong></p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\">【真相】3月17日，黑龙江省龙江县一男子在微信朋友圈发布 “龙江县四名意大利返乡人员出现发烧症状，大家都别出来了”的视频。随后，齐齐哈尔龙江县公安局龙华派出所接到网安部门移交的该线索后，民警迅速展开调查，成功锁定了视频发布者。<span style=\"text-indent: 2em;\">经了解，该男子于3月16日途经龙江县中医院门前时，看到火车站分流返乡人员在医院接受例行检查，便萌生了编造虚假视频的想法，将其发布在个人网络平台上。</span><span style=\"text-indent: 2em;\">目前，该人已被龙江县公安局依法给予拘留10日并处罚款500元的行政处罚。</span></p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\"><strong>点评：</strong>此前，国内疫情暴发物资短缺之时，海外华人华侨伸出援手，纷纷募集防疫物资援助<span style=\"text-indent: 2em;\">国内。如今华侨归国，他们与我们血脉相连，在艰难时刻我们应团结起来，抱团取暖</span><span style=\"text-indent: 2em;\">。</span></p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\">目前国外疫情泛滥，华人、华侨该怎样入境，我们身边就有“教科书式”的教材，商<span style=\"text-indent: 2em;\">丘2名从意大利回来的女孩，还没有回到老家，就已经主动联系当地社区，要求进行隔</span><span style=\"text-indent: 2em;\">离。女孩教科书式回国暖人心扉，令人称赞。他们自觉遵守规定，不瞒报不谎报，不</span><span style=\"text-indent: 2em;\">给社会添麻烦，这就是普通民众为疫情防控做出的最大贡献。不遵守规矩和法律的毕</span><span style=\"text-indent: 2em;\">竟是少数，他们也终将受到法律的严惩。</span></p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\">疫情当前，我们要擦亮双眼不要被一些别有用心的人利用谣言扰乱我们的心智，谣言终将止于智者！</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\"><span style=\"text-indent: 2em;\">中华民族是自强不息的民族，从来没有被任何灾难压垮，大家团结一心，众志成城，</span><span style=\"text-indent: 2em;\">一定能打赢这场疫情防控阻击战。</span></p><p><br/></p>', '/yii2020/image/20200605/1591347729504371.jpg', 2, 1, 'yicheng', 1, 1591347762, 1591347762),
(175, '中西医结合医生：回忆在雷神山医院的战“疫”时光', '人民网', '刘黎明带领的医疗队是第一批接管C9病区的医务人员，他们需要从工程队手里验收病区和施工队伍一起核查细节。为了抢时间，早点接收患者，医疗队员们在雪天用手推车，人力搬完了8车设备。', '<p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-size: 18px; line-height: 32.4px; text-indent: 2em; color: rgb(51, 51, 51); font-family: Verdana, &quot;Microsoft YaHei&quot;, sans-serif; white-space: normal;\">人民网北京4月8日电 如今，湖北省第三人民医院中西医结合肝病科主任刘黎明已基本恢复了往常的生活和工作节奏。当得知雷神山C9病区清零时，曾经C9病区的主任刘黎明表示，很开心、很激动，同时也有一些五味杂陈。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-size: 18px; line-height: 32.4px; text-indent: 2em; color: rgb(51, 51, 51); font-family: Verdana, &quot;Microsoft YaHei&quot;, sans-serif; white-space: normal;\">刘黎明带领的医疗队是第一批接管C9病区的医务人员，他们需要从工程队手里验收病区和施工队伍一起核查细节。为了抢时间，早点接收患者，医疗队员们在雪天用手推车，人力搬完了8车设备。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-size: 18px; line-height: 32.4px; text-indent: 2em; color: rgb(51, 51, 51); font-family: Verdana, &quot;Microsoft YaHei&quot;, sans-serif; white-space: normal;\">“当时我们连吃饭的地方都没有，医疗队员们都是蹲在地上或坐在水泥管子上扒拉几口。”刘黎明回忆道。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-size: 18px; line-height: 32.4px; text-indent: 2em; color: rgb(51, 51, 51); font-family: Verdana, &quot;Microsoft YaHei&quot;, sans-serif; white-space: normal;\">从2月14日抵达雷神山医院到病区正式接收患者，医疗队员们只用了五天的时间。“2月19日我们顺利开科收治患者。”刘黎明介绍，收治的第一批患者中，危重症患者数量仅次于ICU。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-size: 18px; line-height: 32.4px; text-indent: 2em; color: rgb(51, 51, 51); font-family: Verdana, &quot;Microsoft YaHei&quot;, sans-serif; white-space: normal;\">作为科主任和医疗队队长，责任有多大，压力就有多大。为了最大程度地控制患者的病情，C9病区结合中西医治疗方式，实现了一人一方的中医治疗方案。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-size: 18px; line-height: 32.4px; text-indent: 2em; color: rgb(51, 51, 51); font-family: Verdana, &quot;Microsoft YaHei&quot;, sans-serif; white-space: normal;\">刘黎明本人是中医博士，每天查房时为病人看舌象，查脉象，结合患者各项临床检查结果和体征，做到了一人开一方。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-size: 18px; line-height: 32.4px; text-indent: 2em; color: rgb(51, 51, 51); font-family: Verdana, &quot;Microsoft YaHei&quot;, sans-serif; white-space: normal;\">刘黎明表示，中医治疗和西医治疗是同步的，根据西医化验和中医临床症状的表现，通过及时干预减少轻症向重症，重症向危重症方向的发展，使处在炎症风暴期的患者改善炎症风暴对肺、肝、心、肾等器官的打击，并缩短患者康复时间。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-size: 18px; line-height: 32.4px; text-indent: 2em; color: rgb(51, 51, 51); font-family: Verdana, &quot;Microsoft YaHei&quot;, sans-serif; white-space: normal;\">尽管有着中西医结合的治疗方式，但由于接收的病人大多年龄较大且合并有基础病，在雷神山医院的30多天时间里，对刘黎明和医疗队员们来说，压力非常大。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-size: 18px; line-height: 32.4px; text-indent: 2em; color: rgb(51, 51, 51); font-family: Verdana, &quot;Microsoft YaHei&quot;, sans-serif; white-space: normal;\">“我们要尽全力降低患者死亡率，”刘黎明说，有些患者治好了新冠肺炎，但自身的基础病严重仍存在致命的风险，对于这类患者既要联系转院，又要安抚患者和家属的情绪。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-size: 18px; line-height: 32.4px; text-indent: 2em; color: rgb(51, 51, 51); font-family: Verdana, &quot;Microsoft YaHei&quot;, sans-serif; white-space: normal;\">在担心患者的同时，防范医疗队员被感染也是刘黎明的重点工作内容。他很担心带过来医护人员会发生院内感染。为了降低感染风险，他规定C9病区的核酸检测科主任要带头采样，然而就是其中一次的核酸采样过程，让他至今想起仍心有余悸，甚至不敢对妻子和父母说。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-size: 18px; line-height: 32.4px; text-indent: 2em; color: rgb(51, 51, 51); font-family: Verdana, &quot;Microsoft YaHei&quot;, sans-serif; white-space: normal;\">“有一次，我负责20位患者的核酸采样，有位病人在采样时忍不住对着我咳嗽，一些口水喷到了防护面屏上，本来我也不担心，因为面屏下面还有N95口罩，但采样结束脱防护服时才发现，我的N95口罩裂开了，这意味着在采样时我可能暴露在了气溶胶下面。”刘黎明说，当时自己很担心被感染病毒，出病区后便告诉其他同事保持距离，并时刻佩戴N95口罩。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-size: 18px; line-height: 32.4px; text-indent: 2em; color: rgb(51, 51, 51); font-family: Verdana, &quot;Microsoft YaHei&quot;, sans-serif; white-space: normal;\">当天回到住处后，他便给自己用了抗病毒药物。“我本来没有写日记的习惯，但那段时间心里很难受，晚上我只能通过写日记来渲泄一下。”刘黎明称，随着心理压力增大，找上门的并不是咳嗽和发烧，而是整夜的失眠、耳鸣和出虚汗。这个时候稍微能缓解心理压力的只有手机里女儿的视频。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-size: 18px; line-height: 32.4px; text-indent: 2em; color: rgb(51, 51, 51); font-family: Verdana, &quot;Microsoft YaHei&quot;, sans-serif; white-space: normal;\">终于刘黎明悬着的心在核酸检测结果出来的那天放下了。他没有被感染，他带领的医务队员们也没有被感染，整个病区在交接时真正实现了医务人员零感染。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-size: 18px; line-height: 32.4px; text-indent: 2em; color: rgb(51, 51, 51); font-family: Verdana, &quot;Microsoft YaHei&quot;, sans-serif; white-space: normal;\">如今，虽然已经返回到了自己的工作岗位，但他仍然穿着防护服在门诊上开展工作。“门诊是医院的第一道防线，我还要坚持守好这道防线。”刘黎明说。</p><p><br/></p>', '/yii2020/image/20200605/1591347935223268.jpg', 1, 1, 'yicheng', 1, 1591348015, 1591348015),
(177, '北京：加强入境人员集中医学观察和核酸检测', '新华网', '3月23日下午召开的北京新冠肺炎疫情防控工作领导小组第四十七次会议暨首都严格进京管理联防联控协调机制第十四次会议要求，全面加强入境人员集中医学观察和核酸检测。', '<p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; color: rgb(34, 34, 34); white-space: normal;\">　　新华社北京3月24日电（记者王君璐）3月23日下午召开的北京新冠肺炎疫情防控工作领导小组第四十七次会议暨首都严格进京管理联防联控协调机制第十四次会议要求，全面加强入境人员集中医学观察和核酸检测。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; color: rgb(34, 34, 34); white-space: normal;\">　　会议进一步研究调度疫情防控工作，强调要研究制定更加严格的防控措施，全面加强入境人员集中医学观察和核酸检测。加强从其他口岸中转进京人员的管控，实现全国口岸信息互通，提前监测预警，各场站责任单位有序接转，形成闭环，实行集中医学观察。严格入境航班管理，加强与分流加降机场的衔接，做好前端筛查、卫生检疫等工作。按照防疫要求，落实所有国际航班机组和空乘人员封闭式管理，纳入本市防控体系。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; color: rgb(34, 34, 34); white-space: normal;\">　　会议强调，要对所有境外进京人员开展全面排查，评估居家观察执行情况，对不遵守规定的要及时纠正，对隐瞒出境史、故意逃避集中医学观察的要予以曝光，依法严肃处理。各区要加强集中医学观察点的统筹和储备，落实设置标准和管理技术指引，提高服务管理水平。加强对集中医学观察入境人员尤其是留学生的心理疏导，缓解思想压力和紧张情绪。严防境外疫情输入引发本地病例，深入严格进行流调，及时采取必要措施堵塞漏洞，消除隐患。重视发热门诊日常管理。</p><center style=\"color: rgb(15, 15, 15); font-family: &quot;Microsoft Yahei&quot;; font-size: 12px; white-space: normal;\"><table align=\"center\" width=\"646\"><tbody><tr class=\"firstRow\"></tr></tbody></table></center><p><br/></p>', '/yii2020/image/20200605/1591348287278244.jpg', 1, 1, 'yicheng', 1, 1591348314, 1591348314),
(178, '中国红十字会志愿专家团队与德黑兰医科大学交流研讨', '人民网', '中国红十字会赴伊朗志愿专家团队再次应邀前往德黑兰医科大学公共卫生学院进行交流，双方就近期伊朗疫情有关情况和两国传统草药结合治疗新冠肺炎的方案进行了研讨，伊朗积极采纳中国诊疗新冠肺炎的临床经验', '<p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\">人民网北京3月19日电 记者今天从中国红十字会了解到，日前，中国红十字会赴伊朗志愿专家团队再次应邀前往德黑兰医科大学公共卫生学院进行交流，双方就近期伊朗疫情有关情况和两国传统草药结合治疗新冠肺炎的方案进行了研讨，伊朗积极采纳中国诊疗新冠肺炎的临床经验。德黑兰医科大学在伊朗有14家附属医院，其中6家综合性医院负责收治新冠肺炎患者，两家医院已开展新冠肺炎治疗的临床试验。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\">自2月29日以来，中国红十字会向伊朗方面捐赠的5个批次6大类物资已顺利运抵德黑兰，其中包括核酸检测试剂及检测仪、呼吸机、药物注射液、中成药、白介素6检测仪及检测试剂、病毒样品采集试剂盒等。（朱紫阳 刘姝）</p><p><br/></p>', '/yii2020/image/20200605/1591348426350770.jpg', 2, 1, 'yicheng', 1, 1591348445, 1591348445),
(179, '人民网评：提振经济，应对各地“新政”多些包容', '人民网', '中共中央政治局3月27日召开会议，要求在疫情防控常态化条件下加快恢复生产生活秩序，力争把疫情造成的损失降到最低限度。', '<p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\">“加大宏观政策调节和实施力度”“加快释放国内市场需求”“扩大居民消费，合理增加公共消费”……中共中央政治局3月27日召开会议，要求在疫情防控常态化条件下加快恢复生产生活秩序，力争把疫情造成的损失降到最低限度。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\">随着疫情防控形势向好，复工复产步入“快车道”,各省市纷纷因地制宜，开出了复苏经济的“药方”，包括补短板，加快推进重大项目建设；减税、贴息、免租金，打通企业发展“大动脉”；运用保险、税收手段对受疫情影响企业加大支持力度；提振消费，畅通经济末梢“微循环”……例如南京、合肥、浙江、济南、青岛、重庆等全国不少城市，已先后宣布将向市民发放消费券；多个省市拿出了景区旅游优惠政策；部分地方探索有限放开个别行业的限制政策，等等。各地在恢复经济、拉动消费领域的探索和采取的措施，取得了一定效果。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\">经济社会是一个动态循环系统，不能长时间停摆。新冠肺炎疫情已经持续了两个月有余，虽然当前全国疫情防控形势持续向好、生产生活秩序加快恢复，但经济社会活动远未恢复到正常水平。从全球经济形势看，新冠肺炎疫情大有引发经济衰退的趋势。受国内外多种因素影响，当前我国经济下行压力持续加大。对各级党委和政府而言，加快建立同疫情防控常态化相适应的经济社会运行秩序是一项必须完成好的硬任务，消极作为、保守作为就是严重失职。压力既是动力，危机可以转为契机，变量就在于能不能激发主动性，努力把疫情造成的损失降到最低限度。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\">经济发展能不能化危为机、转危为安，取决于市场各主体的表现。此次疫情对各类服务性企业影响特别严重。扩大居民消费，启动实体商店消费，能有效快速地恢复服务性企业的经营信心。各级政府不仅要拿出有效的政策，更要带头促进消费。近日，呼和浩特要求暂时关闭单位集体食堂，鼓励干部职工到餐饮企业用餐。消息一出，立即引发网友的质疑。小道理是要服从大道理的。网友的质疑是可以理解的，但面对疫情这个前所未见的冲击，任何尝试都是创新，我们更应持包容和理解的态度。餐饮行业是受疫情影响较为严重的几个行业之一，特别是其中的中小微企业和个体工商户面临的困境尤为突出。各地政府制定“新政”、采取一些临时性举措，目的是带来新的改变、带动消费，尽快恢复城市往日的“烟火气”。客观地说，即使呼和浩特所有的干部职工都下馆子，所能带来的消费，对于当地受损的餐饮企业来说也是杯水车薪，但其起到的示范作用，影响是深远的。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\">履险如夷，事在人为。更多的振兴经济政策，不妨积极试行起来。比如，不搞“大水漫灌”，但为企业减税降费、降低成本的“放水养鱼”措施应该坚决执行；帮助个体工商户纾困解难，可以提供贴息或低息贷款，落实好税费等政策；等等。因地制宜、因时制宜，下好精准功夫，趋利避害用好有利条件，为经济企稳提供有力支撑。</p><p style=\"margin-top: 25px; margin-bottom: 25px; padding: 0px; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 18px; line-height: 32.4px; font-family: &quot;Microsoft Yahei&quot;; text-indent: 2em; color: rgb(34, 34, 34); white-space: normal;\">艰难时刻，没有谁能独善其身，惟有同舟共济、守望相助才能共克时艰、安渡难关。经历了疫情考验的中国，还远没有到松口气、歇歇脚的时候，还需要经历统筹疫情防控和复工复产的很大挑战，还需要稳妥纾解疫情带给经济社会的较大冲击以及各种潜在影响。凡事做最坏的打算，付出最大的努力，争取最好的结果，我们一定能从容应对一切可能的风险，努力实现既定的发展目标。</p><p><br/></p>', '/yii2020/image/20200605/1591348513892873.jpg', 1, 1, 'yicheng', 1, 1591348528, 1591348528);

-- --------------------------------------------------------

--
-- 表的结构 `hlw_post_extends`
--

CREATE TABLE `hlw_post_extends` (
  `id` int(11) NOT NULL COMMENT '自增ID',
  `post_id` int(11) DEFAULT NULL COMMENT '文章id',
  `browser` int(11) DEFAULT 0 COMMENT '浏览量',
  `collect` int(11) DEFAULT 0 COMMENT '收藏量',
  `praise` int(11) DEFAULT 0 COMMENT '点赞',
  `comment` int(11) DEFAULT 0 COMMENT '评论'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='文章扩展表';

--
-- 转存表中的数据 `hlw_post_extends`
--

INSERT INTO `hlw_post_extends` (`id`, `post_id`, `browser`, `collect`, `praise`, `comment`) VALUES
(68, 170, 3, 0, 0, 0),
(69, 171, 2, 0, 0, 0),
(70, 172, 2, 0, 0, 0),
(71, 173, 3, 0, 0, 0),
(72, 174, 2, 0, 0, 0),
(73, 175, 2, 0, 0, 0),
(74, 176, 2, 0, 0, 0),
(75, 177, 2, 0, 0, 0),
(76, 178, 2, 0, 0, 0),
(77, 179, 2, 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `hlw_relation_post_tags`
--

CREATE TABLE `hlw_relation_post_tags` (
  `id` int(11) NOT NULL COMMENT '自增ID',
  `post_id` int(11) DEFAULT NULL COMMENT '文章ID',
  `tag_id` int(11) DEFAULT NULL COMMENT '标签ID'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='文章和标签关系表';

--
-- 转存表中的数据 `hlw_relation_post_tags`
--

INSERT INTO `hlw_relation_post_tags` (`id`, `post_id`, `tag_id`) VALUES
(91, 170, 64),
(92, 171, 65),
(93, 172, 66),
(94, 173, 67),
(95, 174, 68),
(96, 175, 69),
(97, 176, 70),
(98, 177, 71),
(99, 178, 72),
(100, 179, 65);

-- --------------------------------------------------------

--
-- 表的结构 `hlw_seclevelmessage`
--

CREATE TABLE `hlw_seclevelmessage` (
  `flmID` int(10) UNSIGNED NOT NULL,
  `slmID` int(10) UNSIGNED NOT NULL,
  `userName` varchar(255) DEFAULT NULL,
  `secTime` timestamp NULL DEFAULT NULL,
  `slmContent` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `hlw_seclevelmessage`
--

INSERT INTO `hlw_seclevelmessage` (`flmID`, `slmID`, `userName`, `secTime`, `slmContent`) VALUES
(1, 1, '果果', '2020-06-05 07:44:16', '说得对，大家一定要团结起来啊'),
(1, 2, '夏天', '2020-06-05 07:45:09', '我们一定能成功'),
(1, 3, '异想天开', '2020-06-05 07:47:07', '疫情总会过去的'),
(2, 1, '异想天开', '2020-06-05 07:46:31', '也不要去人多的地方啊'),
(2, 2, '李华', '2020-06-05 07:48:45', '宅家保平安'),
(3, 1, '韩梅梅', '2020-06-05 07:47:47', '一定会的'),
(4, 1, '天天', '2020-06-05 07:50:06', '坚持住'),
(4, 2, '果果', '2020-06-05 07:50:42', '快了，一定不会太久的'),
(6, 1, '李明', '2020-06-05 07:52:52', '是啊，太好了'),
(6, 2, '韩梅梅', '2020-06-05 07:53:20', '真的么，太好了');

-- --------------------------------------------------------

--
-- 表的结构 `hlw_tags`
--

CREATE TABLE `hlw_tags` (
  `id` int(11) NOT NULL COMMENT '自增ID',
  `tag_name` varchar(255) DEFAULT NULL COMMENT '标签名称',
  `post_num` int(11) DEFAULT 0 COMMENT '关联文章数'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='标签表';

--
-- 转存表中的数据 `hlw_tags`
--

INSERT INTO `hlw_tags` (`id`, `tag_name`, `post_num`) VALUES
(64, '领导人', 1),
(65, '经济', 2),
(66, '数据', 1),
(67, '健康码', 1),
(68, '辟谣', 1),
(69, '抗疫英雄', 1),
(70, '医疗队', 1),
(71, '医疗', 1),
(72, '中外交流', 1);

-- --------------------------------------------------------

--
-- 表的结构 `hlw_team`
--

CREATE TABLE `hlw_team` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `introduction` text NOT NULL,
  `label_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `hlw_team`
--

INSERT INTO `hlw_team` (`id`, `name`, `introduction`, `label_img`) VALUES
(1, '周新星', '2018级<br/>\r\n计算机学院<br/>\r\n计算机科学与技术专业<br/>\r\n于以采蘋？南涧之滨。于以采藻？于彼行潦。<br/>\r\n于以盛之？维筐及筥。于以湘之？维锜及釜。<br/>\r\n于以奠之？宗室牖下。谁其尸之？有齐季女。', '/yii2020/image/20200605/1591347528549484.jpg'),
(2, '李姝睿', '2018级<br/>\r\n计算机学院<br/>\r\n计算机科学与技术专业<br/>\r\n南有樛木，葛藟累之。乐只君子，福履绥之。<br/>\r\n南有樛木，葛藟荒之。乐只君子，福履将之。<br/>\r\n南有樛木，葛藟萦之。乐只君子，福履成之。', '/yii2020/image/20200605/1591347563478339.jpg'),
(3, '郑羽辰', '2018级<br/>\r\n计算机学院<br/>\r\n计算机科学与技术专业<br/>\r\n于以采蘩？于沼于沚。于以用之？公侯之事。<br/>\r\n于以采蘩？于涧之中。于以用之？公侯之宫。<br/>\r\n被之僮僮，夙夜在公。被之祁祁，薄言还归。', '/yii2020/image/20200605/1591347543895583.jpg'),
(4, '姜欣妮', '2018级<br/>\r\n计算机学院<br/>\r\n计算机科学与技术专业<br/>\r\n蔽芾甘棠，勿翦勿伐，召伯所茇。<br/>\r\n蔽芾甘棠，勿翦勿败，召伯所憩。<br/>\r\n蔽芾甘棠，勿翦勿拜，召伯所说。\r\n', '/yii2020/image/20200605/1591347517396522.jpg'),
(5, '侯潇', '2018级<br/>\r\n计算机学院<br/>\r\n计算机科学与技术专业<br/>\r\n何彼襛矣，唐棣之华？曷不肃雍？王姬之车。<br/>\r\n何彼襛矣，华如桃李？平王之孙，齐侯之子。<br/>\r\n其钓维何？维丝伊缗。齐侯之子，平王之孙。', '/yii2020/image/20200605/1591347577242244.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `hlw_user`
--

CREATE TABLE `hlw_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `hlw_user`
--

INSERT INTO `hlw_user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(0, '游客', '', '', NULL, '', 10, 0, 0, NULL),
(1, 'root', 'qPZVP399YZJeyDsuh7owGlexCOZD54sB', '$2y$13$bWY7q306XoDq8sehsLkvm.7wDuCPuQ9O8qeLJaUtY.AT1xe2E1WuW', NULL, '1@1.com', 10, 1591341246, 1591341246, NULL),
(2, '异想天开', 'PAr4axdsN5SADTCtOe6ZvP-LPSdQwk4x', '$2y$13$HfTPbBCLHWqWzWWsWcwLd.RNQHYdxFx9TCYrmCJTceNcmIMZCUGVi', NULL, '2@2.com', 10, 1591341303, 1591341303, NULL),
(3, '张三', 'ZUUSRcykmCNZ_iZwtn4rZCal0JHH7nzO', '$2y$13$pmiLyAl7RO1qpAoBJxSWjOzWfq3huUtMd/CUoMLgy9VXd9GU/qiOW', NULL, '3@3.com', 10, 1591342001, 1591342001, NULL),
(4, '夏天', 'xgcaeSH43ODKhkBJ_kooHARBGKw2tSN5', '$2y$13$v748tSs266ouQF0x8UcHbOPr4vCgDUq990E6HIg1xGR0cL9mtAgMG', NULL, '4@4.com', 10, 1591341419, 1591341419, NULL),
(5, '果果', 'H0WE-np9rqXwPRP_E5IY4bIxo_IEEoUC', '$2y$13$Mv8LS4BN7ZUrwuMJwJSFReD07HkrOQzMZ74WbQOvieu5VkdgqYh2i', NULL, '5@5.com', 10, 1591341492, 1591341492, NULL),
(6, '李明', 'UGPlNfnBJhLL3GiJH6bHHq0PLDHdp-Zx', '$2y$13$OmA7m/h7Z19zMJYI4eL/heRXwjulPSfdWiTbsoBc2zZZOEYndVmhC', NULL, '6@6.com', 10, 1591341626, 1591341626, NULL),
(7, '李华', 'FzOoKVEzNZy7fcA7sc07Qe5-F1RB-rM-', '$2y$13$Y1mf7hRc89JVOrsGJ8fujeag9.gR4gOYBJ3f4V0px.f2XYZURWLPC', NULL, '7@7.com', 10, 1591342203, 1591342203, NULL),
(8, '韩梅梅', 'JyC-Y0YeMfI_4OuGq7yGb_nSMxA0itKT', '$2y$13$nymMVVPT.YEVhD0doHbbxOPWnjQyKgOKYEx4iok0WpGymoGU2xuUe', NULL, '8@8.com', 10, 1591342273, 1591342273, NULL),
(9, '天天', 'HeeID_giaraWf-h3qFfGhK2eRNaSZW6-', '$2y$13$p1ybTbbqFWwN5DfJlhDnfeuCTnjBW/EOPnGM.AcyHk9uPtaY2fEfO', NULL, '9@9.com', 10, 1591342378, 1591342378, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1587294479),
('m130524_201442_init', 1587294485),
('m190124_110200_add_verification_token_column_to_user_table', 1587294485);

--
-- 转储表的索引
--

--
-- 表的索引 `hlw_admin`
--
ALTER TABLE `hlw_admin`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `hlw_cats`
--
ALTER TABLE `hlw_cats`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `hlw_china_data`
--
ALTER TABLE `hlw_china_data`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `hlw_domestic_data`
--
ALTER TABLE `hlw_domestic_data`
  ADD PRIMARY KEY (`provinceName`);

--
-- 表的索引 `hlw_feeds`
--
ALTER TABLE `hlw_feeds`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `hlw_firstlevelmessage`
--
ALTER TABLE `hlw_firstlevelmessage`
  ADD PRIMARY KEY (`flmID`) USING BTREE;

--
-- 表的索引 `hlw_foreign_current_data`
--
ALTER TABLE `hlw_foreign_current_data`
  ADD PRIMARY KEY (`countryName`);

--
-- 表的索引 `hlw_posts`
--
ALTER TABLE `hlw_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_cat_valid` (`cat_id`,`is_valid`) USING BTREE;

--
-- 表的索引 `hlw_post_extends`
--
ALTER TABLE `hlw_post_extends`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `hlw_relation_post_tags`
--
ALTER TABLE `hlw_relation_post_tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `post_id` (`post_id`,`tag_id`) USING BTREE;

--
-- 表的索引 `hlw_seclevelmessage`
--
ALTER TABLE `hlw_seclevelmessage`
  ADD PRIMARY KEY (`flmID`,`slmID`) USING BTREE;

--
-- 表的索引 `hlw_tags`
--
ALTER TABLE `hlw_tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tag_name` (`tag_name`) USING BTREE;

--
-- 表的索引 `hlw_team`
--
ALTER TABLE `hlw_team`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `hlw_user`
--
ALTER TABLE `hlw_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- 表的索引 `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `hlw_admin`
--
ALTER TABLE `hlw_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `hlw_cats`
--
ALTER TABLE `hlw_cats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID', AUTO_INCREMENT=7;

--
-- 使用表AUTO_INCREMENT `hlw_china_data`
--
ALTER TABLE `hlw_china_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '序号', AUTO_INCREMENT=111;

--
-- 使用表AUTO_INCREMENT `hlw_feeds`
--
ALTER TABLE `hlw_feeds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用表AUTO_INCREMENT `hlw_firstlevelmessage`
--
ALTER TABLE `hlw_firstlevelmessage`
  MODIFY `flmID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用表AUTO_INCREMENT `hlw_posts`
--
ALTER TABLE `hlw_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID', AUTO_INCREMENT=180;

--
-- 使用表AUTO_INCREMENT `hlw_post_extends`
--
ALTER TABLE `hlw_post_extends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID', AUTO_INCREMENT=78;

--
-- 使用表AUTO_INCREMENT `hlw_relation_post_tags`
--
ALTER TABLE `hlw_relation_post_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID', AUTO_INCREMENT=101;

--
-- 使用表AUTO_INCREMENT `hlw_tags`
--
ALTER TABLE `hlw_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID', AUTO_INCREMENT=73;

--
-- 使用表AUTO_INCREMENT `hlw_team`
--
ALTER TABLE `hlw_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用表AUTO_INCREMENT `hlw_user`
--
ALTER TABLE `hlw_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
