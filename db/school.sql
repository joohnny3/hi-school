-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2023 年 06 月 03 日 22:01
-- 伺服器版本： 10.4.28-MariaDB
-- PHP 版本： 8.2.4

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
('503', '化工材料', '2', '李永樂'),
('502', '商業管理', '5', '方玉婷'),
('505', '大眾傳播', NULL, '朱怡蓉'),
('504', '觀光事業', NULL, '李禬敏'),
('501', '資訊工程', '6', '林慧卿');

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
(49, '李子柒', '11250102', '11250102', 'student', 'B199007062'),
(50, '趙正平', '11250103', '11250103', 'student', 'C196806283'),
(51, '歐陽靖', '11250104', '11250104', 'student', 'D198309074'),
(52, '余祥銓', '11250105', '11250105', 'student', 'E198408255'),
(53, '王力宏', '11250106', '11250106', 'student', 'F197605176'),
(54, '郭台銘', '11250201', '11250201', 'student', 'G197402207'),
(55, '高嘉瑜', '11250202', '11250202', 'student', 'H198010178'),
(56, '陳映彤', '11250203', '11250203', 'student', 'I198704239'),
(57, '陳天予', '11250204', '11250204', 'student', 'J199205250'),
(58, '劉宇席', '11250205', '11250205', 'student', 'K198011211'),
(59, '鄭家純', '11250301', '11250301', 'student', 'L199308312');

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
(11250101, '資訊工程', 90),
(11250102, '資訊工程', NULL),
(11250103, '資訊工程', NULL),
(11250104, '資訊工程', NULL),
(11250105, '資訊工程', NULL),
(11250106, '資訊工程', NULL),
(11250201, '商業管理', NULL),
(11250202, '商業管理', NULL),
(11250203, '商業管理', NULL),
(11250204, '商業管理', NULL),
(11250205, '商業管理', NULL),
(11250301, '化工材料', NULL);

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
  `guardian` varchar(16) NOT NULL COMMENT '監護人',
  `intro` text DEFAULT NULL COMMENT '簡介'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `students`
--

INSERT INTO `students` (`id`, `school_num`, `name`, `en_name`, `birthday`, `uni_id`, `addr`, `tel`, `email`, `dept`, `guardian`, `intro`) VALUES
(1, 9902123, '張育誠', 'Joohnny', '1995/03/12', 'F129047308', '新北市永和區', '0929312288', 'johnny31258@gmail.com', '化工材料', '張國榮', NULL),
(17, 11250101, '艾蓮葉卡', 'Allen', '1995/03/30', 'A123456789', '台北市希干希納區', '0987654321', 'theallenman@gmail.com', '資訊工程', '古利夏', '艾連葉卡（Elon Musk）是一位知名的企業家、工程師和創新者，出生於南非。他是特斯拉汽車公司和太空探索技術公司（SpaceX）的聯合創辦人和執行長，也是太陽能城（SolarCity）、開放人工智能公司（OpenAI）和脳電介面公司（Neuralink）的創辦人之一。\n\n艾連葉卡以其對創新科技和可持續能源的承諾而聞名。他的企業特斯拉是一家全球領先的電動車製造商，致力於減少化石燃料使用和碳排放，並推動電動交通的普及化。他的另一家公司SpaceX則致力於開發太空運輸技術，旨在實現人類登陸火星的目標。他還推動了太陽能城的發展，該公司提供太陽能解決方案，包括太陽能電池板和電池儲能系統。\n\n艾連葉卡的經營哲學是以挑戰傳統思維和突破技術限制為基礎。他常常提倡探索未來的可能性，並樂於冒險創新。他的目標之一是推動人類成為一個多行星物種，並解決地球上的許多重大問題，如氣候變化和可持續發展。\n\n除了他的商業成就外，艾連葉卡也因其在社交媒體上的活躍和受到關注。他經常在Twitter上發表引人注目的言論，有時也引發爭議。\n\n艾連葉卡被視為當代最具影響力和具有雄心的企業家之一。他的創新精神和對科技的追求使他成為許多人的榜樣，並在全球范圍內產生了廣泛的影響。'),
(18, 11250102, '李子柒', 'Liziqi', '1995/07/06', 'B199007062', '四川市綿陽區', '0919900706', 'theliziqiwoman@gmail.com', '資訊工程', '李佳佳', NULL),
(19, 11250103, '趙正平', 'David', '1995/06/28', 'C196806283', '台北市北投區', '0919680628', 'thedavidman@gamil.com', '資訊工程', '趙少康', NULL),
(20, 11250104, '歐陽靖', 'Ginoy', '1995/09/07', 'D198309074', '台南市安平區', '0919830907', 'theginoywoman@gmail.com', '資訊工程', '譚艾珍', NULL),
(21, 11250105, '余祥銓', 'Kenyu', '1995/08/25', 'E198408255', '台北市北投區', '0919840825', 'thekenyuman@gmail.com', '資訊工程', '余天', NULL),
(22, 11250106, '王力宏', 'Leehom', '1995/05/17', 'F197605176', '紐約羅切斯特', '09197605176', 'theleehomman@gmail.com', '資訊工程', '李靚蕾', NULL),
(23, 11250201, '郭台銘', 'Terry', '1995/02/20', 'G197402207', '新北市板橋區', '0919740220', 'theterryman@gmail.com', '商業管理', '曾馨瑩', NULL),
(24, 11250202, '高嘉瑜', 'ntufish', '1995/10/17', 'H198010178', '基隆市七堵區', '0919801017', 'thentufishwoman@gmail.com', '商業管理', '林秉枢', NULL),
(25, 11250203, '陳映彤', 'Evelyn', '1995/04/23', 'I198704239', '加利福尼亞洲矽谷', '0919870423', 'theevelynwoman@gmail.com', '商業管理', '理科先生', NULL),
(26, 11250204, '陳天予', 'Alisasa', '1995/05/25', 'J199205250', '新北市泰山區', '0919920525', 'thealisasawoman@gmail.com', '商業管理', '呂杰陽', NULL),
(27, 11250205, '劉宇席', 'Xxxxcat', '1995/11/21', 'K198011211', '花蓮市吉安鄉', '0919801121', 'thexxxxcatman@gmail.com', '商業管理', '郭采潔', NULL),
(28, 11250301, '鄭家純', 'lli', '1995/08/31', 'L199308312', '新北市板橋區', '0919930831', 'thelliwoman@gmail.com', '化工材料', 'Akira', NULL);

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
-- 使用資料表自動遞增(AUTO_INCREMENT) `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
