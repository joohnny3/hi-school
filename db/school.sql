-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-06-01 08:26:23
-- 伺服器版本： 10.4.27-MariaDB
-- PHP 版本： 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `school`
--

-- --------------------------------------------------------

--
-- 資料表結構 `class`
--

CREATE TABLE `class` (
  `class_code` varchar(10) NOT NULL,
  `dept` varchar(10) NOT NULL,
  `class_num` varchar(10) DEFAULT NULL,
  `teacher` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `class`
--

INSERT INTO `class` (`class_code`, `dept`, `class_num`, `teacher`) VALUES
('503', '化工材料', NULL, '李永樂'),
('502', '商業管理', NULL, '方玉婷'),
('505', '大眾傳播', NULL, '朱怡蓉'),
('501', '綜合教育', '3', '林慧卿'),
('504', '觀光事業', NULL, '李禬敏');

-- --------------------------------------------------------

--
-- 資料表結構 `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `school_num` varchar(16) NOT NULL,
  `img` text DEFAULT NULL,
  `type` text DEFAULT NULL,
  `created_time` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `story` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `images`
--

INSERT INTO `images` (`id`, `school_num`, `img`, `type`, `created_time`, `story`) VALUES
(2, '11250101', NULL, NULL, '2023-06-01 06:20:25', NULL),
(3, '11250102', NULL, NULL, '2023-06-01 06:20:22', NULL),
(4, '11250103', NULL, NULL, '2023-06-01 06:20:19', NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(16) NOT NULL,
  `uni_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `user`, `password`, `role`, `uni_id`) VALUES
(1, '林慧卿', 'admin501', 'admin', 'teacher', 'G200000123'),
(2, '方玉婷', 'admin502', 'admin', 'teacher', 'K100000199'),
(3, '李永樂', 'admin503', 'admin', 'teacher', 'C100000067'),
(4, '李禬敏', 'admin504', 'admin', 'teacher', 'C100000209'),
(5, '朱怡蓉', 'admin505', 'admin', 'teacher', 'F200000131'),
(6, '張育誠', 'root', '9902', 'student', 'F129047308'),
(10, '古利夏', 'admin506', 'admin', 'teacher', 'X678954321'),
(48, '艾蓮葉卡', '11250101', '11250101', 'student', 'A123456789'),
(49, '李子柒', '11250102', '11250102', 'student', 'B199007067'),
(50, '趙正平', '11250103', '11250103', 'student', 'C196806283');

-- --------------------------------------------------------

--
-- 資料表結構 `scores`
--

CREATE TABLE `scores` (
  `school_num` int(15) NOT NULL,
  `dept` varchar(10) NOT NULL,
  `scores` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `scores`
--

INSERT INTO `scores` (`school_num`, `dept`, `scores`) VALUES
(11250101, '綜合教育', NULL),
(11250102, '綜合教育', NULL),
(11250103, '綜合教育', NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `school_num` int(15) NOT NULL COMMENT '學號',
  `name` varchar(16) NOT NULL COMMENT '姓名',
  `en_name` varchar(16) NOT NULL COMMENT '英文名字',
  `birthday` varchar(20) NOT NULL COMMENT '出生年月日',
  `uni_id` varchar(16) NOT NULL COMMENT '身分證號碼',
  `addr` varchar(50) NOT NULL COMMENT '住址',
  `tel` varchar(16) NOT NULL COMMENT '電話',
  `email` varchar(50) NOT NULL COMMENT '電子郵件',
  `dept` varchar(10) NOT NULL COMMENT '科系',
  `guardian` varchar(16) NOT NULL COMMENT '監護人'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `students`
--

INSERT INTO `students` (`id`, `school_num`, `name`, `en_name`, `birthday`, `uni_id`, `addr`, `tel`, `email`, `dept`, `guardian`) VALUES
(1, 9902123, '張育誠', 'Joohnny', '1995/03/12', 'F129047308', '新北市永和區', '0929312288', 'johnny31258@gmail.com', '化工材料', '張國榮'),
(17, 11250101, '艾蓮葉卡', 'Allen', '1995/03/30', 'A123456789', '台北市希干希納區', '0987654321', 'theallenman@gmail.com', '綜合教育', '古利夏'),
(18, 11250102, '李子柒', 'Liziqi', '1995/07/06', 'B199007067', '四川市綿陽區', '0919900706', 'theliziqiwoman@gmail.com', '綜合教育', '李佳佳'),
(19, 11250103, '趙正平', 'David', '1995/06/28', 'C196806283', '台北市北投區', '0919680628', 'thedavidman@gamil.com', '綜合教育', '趙少康');

--
-- 觸發器 `students`
--
DELIMITER $$
CREATE TRIGGER `class_num` AFTER INSERT ON `students` FOR EACH ROW BEGIN
   UPDATE class
   SET class_num =  (SELECT COUNT(*) FROM students WHERE students.dept = NEW.dept)
   WHERE class.dept = NEW.dept;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_class_num_after_delete` AFTER DELETE ON `students` FOR EACH ROW BEGIN
   UPDATE class
   SET class_num =  (SELECT COUNT(*) FROM students WHERE students.dept = OLD.dept)
   WHERE class.dept = OLD.dept;
END
$$
DELIMITER ;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`dept`,`class_code`,`teacher`);

--
-- 資料表索引 `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`school_num`);

--
-- 資料表索引 `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `school_num` (`school_num`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
