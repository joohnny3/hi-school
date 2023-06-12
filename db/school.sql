-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-06-12 08:38:54
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
('503', '化工材料', '4', '李永樂'),
('502', '商業管理', '5', '方玉婷'),
('505', '大眾傳播', NULL, '朱怡蓉'),
('504', '觀光事業', NULL, '李禬敏'),
('501', '資訊工程', '6', '林慧卿');

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
(2, '11250101', '11250101.jpg', 'image/jpeg', '2023-06-08 06:01:56', ''),
(3, '11250102', '11250102.png', 'image/png', '2023-06-03 15:13:19', ''),
(4, '11250103', '11250103.jpeg', 'image/jpeg', '2023-06-03 16:57:45', ''),
(5, '11250104', '11250104.jpg', 'image/jpeg', '2023-06-12 02:38:37', ''),
(6, '11250105', '11250105.jpg', 'image/jpeg', '2023-06-12 02:37:22', ''),
(7, '11250106', '11250106.jpg', 'image/jpeg', '2023-06-12 02:41:06', ''),
(8, '11250201', NULL, NULL, NULL, NULL),
(9, '11250202', NULL, NULL, NULL, NULL),
(10, '11250203', NULL, NULL, NULL, NULL),
(11, '11250204', NULL, NULL, NULL, NULL),
(12, '11250205', NULL, NULL, NULL, NULL),
(13, '11250301', NULL, NULL, NULL, NULL),
(14, '11250302', NULL, NULL, NULL, NULL),
(15, '11250303', NULL, NULL, NULL, NULL);

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
(7, '于美人', 'admin507', 'admin', 'teacher', 'G845123812'),
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
(59, '鄭家純', '11250301', '11250301', 'student', 'L199308312'),
(60, '鐘培生', '11250302', '11250302', 'student', 'M199012233'),
(63, '謝淑薇', '11250303', '11250303', 'student', 'N198601044');

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
(11250101, '資訊工程', 70),
(11250102, '資訊工程', 40),
(11250103, '資訊工程', 78),
(11250104, '資訊工程', 90),
(11250105, '資訊工程', 40),
(11250106, '資訊工程', NULL),
(11250201, '商業管理', 80),
(11250202, '商業管理', 40),
(11250203, '商業管理', NULL),
(11250204, '商業管理', NULL),
(11250205, '商業管理', NULL),
(11250301, '化工材料', NULL),
(11250302, '化工材料', NULL),
(11250303, '化工材料', NULL);

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
(17, 11250101, '艾蓮葉卡', 'Allen', '1995/03/30', 'A123456789', '台北市希干希納區', '0987654321', 'theallenman@gmail.com', '資訊工程', '古利夏', '艾連葉卡（Elon Musk）是一位知名的企業家、工程師和創新者，出生於南非。他是特斯拉汽車公司和太空探索技術公司（SpaceX）的聯合創辦人和執行長，也是太陽能城（SolarCity）、開放人工智能公司（OpenAI）和脳電介面公司（Neuralink）的創辦人之一。艾連葉卡以其對創新科技和可持續能源的承諾而聞名。他的企業特斯拉是一家全球領先的電動車製造商，致力於減少化石燃料使用和碳排放，並推動電動交通的普及化。他的另一家公司SpaceX則致力於開發太空運輸技術，旨在實現人類登陸火星的目標。他還推動了太陽能城的發展，該公司提供太陽能解決方案，包括太陽能電池板和電池儲能系統。艾連葉卡的經營哲學是以挑戰傳統思維和突破技術限制為基礎。他常常提倡探索未來的可能性，並樂於冒險創新。他的目標之一是推動人類成為一個多行星物種，並解決地球上的許多重大問題，如氣候變化和可持續發展。除了他的商業成就外，艾連葉卡也因其在社交媒體上的活躍和受到關注。他經常在Twitter上發表引人注目的言論，有時也引發爭議。艾連葉卡被視為當代最具影響力和具有雄心的企業家之一。他的創新精神和對科技的追求使他成為許多人的榜樣，並在全球范圍內產生了廣泛的影響。'),
(18, 11250102, '李子柒', 'Liziqi', '1995/07/06', 'B199007062', '四川市綿陽區', '0919900706', 'theliziqiwoman@gmail.com', '資訊工程', '李佳佳', '李子柒（Li Ziqi）是一位知名的中國網絡紅人和內容創作者。她以在YouTube和其他社交媒體平台上分享自己生活在中國鄉村的日常生活而聞名，她以其精湛的技藝和寧靜美麗的影片風格而受到廣大觀眾的喜愛。  李子柒的真實身份是李雪（Li Xue），她於1990年出生在四川省的一個小村莊。在她年幼時，她的祖父母教會了她許多傳統的手工藝技巧和農耕技術，這些技能在她的影片中得到了展示。她通過展示中國傳統文化和生活方式的美麗，向觀眾展示了她的成長背景和她的家鄉。  李子柒的影片以其高品質的製作和細膩的攝影而聞名。她通常展示自己種植蔬菜、釀造酒、烹飪食物、縫製衣物和制作傳統工藝品等活動。她在影片中展示的技巧和細節使人們對中國傳統文化和農村生活產生了濃厚的興趣。  李子柒的影片在全球范圍內獲得了廣泛的關注和認可。她的YouTube頻道已經擁有數千萬的訂閱者，她的影片在社交媒體上被廣泛分享和轉載。她的作品也獲得了多個獎項和榮譽，並被譽為展示中國傳統文化的優秀代表之一。  李子柒的成功不僅在於她的影片本身，也在於她所代表的價值觀和生活方式。她強調簡單、自然和寧靜的生活，以及對傳統技藝和文化的尊重。她的影片給觀眾帶來了一種尋找平靜和與自然連接的感覺，也啟發了許多人重新思考現代都市生活的價值和意義。 '),
(19, 11250103, '趙正平', 'David', '1995/06/28', 'C196806283', '台北市北投區', '0919680628', 'thedavidman@gamil.com', '資訊工程', '趙少康', '趙正平（Zhao Zhengping）是一位知名的中國經濟學家和政治人物。他出生於1951年，是中國大陸改革開放時期的重要人物之一。\n\n趙正平於1972年畢業於北京大學經濟系，之後在中國社會科學院經濟研究所繼續深造，獲得碩士和博士學位。他的研究專長包括經濟學、金融學、國際貿易和經濟體制改革等領域。\n\n在職業生涯早期，趙正平曾在中國社會科學院經濟研究所工作，並於1980年代初期成為該所的副所長。在這段時間，他積極參與中國經濟改革和開放的相關研究，提出了一系列的政策建議和觀點。\n\n1989年，趙正平擔任中國國家發展計劃委員會（即國家發改委）副主任，開始在政府部門工作，並成為中國經濟政策制定的重要參與者之一。他在職期間積極推動了一系列經濟改革和發展的措施，包括市場化改革、財政金融體制改革、國際貿易和外資引進等方面。\n\n然而，在1989年的政治動蕩中，趙正平被視為改革派領導人之一，他支持更開明的政治和經濟改革。然而，由於政治局勢的變化，他最終失去了權力，被撤銷職務並被軟禁。他於1998年獲得釋放，並選擇離開政治舞台，專注於教學和研究。\n\n趙正平被認為是中國經濟改革的重要思想家之一，他的研究和貢獻在中國經濟發展和改革開放過程中具有重要影響。他的觀點和政策建議對於中國的經濟轉型和現代化進程產生了深遠的影響。雖然他在政治上經歷了挫折，但他的學術成就和對經濟改革的貢獻使他在中國學術界和經濟領域中獲得了廣泛的尊重和讚譽。'),
(20, 11250104, '歐陽靖', 'Ginoy', '1995/09/07', 'D198309074', '台南市安平區', '0919830907', 'theginoywoman@gmail.com', '資訊工程', '譚艾珍', '歐陽靖（Ouyang Jing），藝名「華晨宇」，是一位知名的中國男歌手和音樂創作人。他於1990年6月7日出生於中國湖南省岳陽市。\n\n華晨宇在2013年參加中國選秀節目《中國好歌曲》第一季並獲得冠軍，這使他一炮而紅並贏得了廣大觀眾的喜愛。他以其獨特的音域、熱情洋溢的演唱風格和鮮明的個人形象而聞名。\n\n自從獲得冠軍以來，華晨宇陸續發行了多張個人專輯，其中包括《卡西莫多的禮物》、《雲的形狀》、《新世界》等。他的音樂作品風格多樣，涵蓋了流行音樂、搖滾、民謠和電子音樂等不同類型。他的歌曲以豐富的情感、深入的歌詞和強烈的表演力著稱。\n\n華晨宇的音樂才華廣受肯定，他曾獲得多個音樂獎項，包括金曲獎、音樂風雲榜等。他的表演風格和個人特色也使他成為廣告代言人和品牌大使。\n\n除了音樂方面的成就，華晨宇還積極參與公益活動。他曾參與多項慈善演出和捐贈，並關注環境保護和動物福利等議題。\n\n華晨宇以其獨特的音樂才華和個性鮮明的風格在中國樂壇獨樹一幟，深受樂迷的喜愛和支持。他的音樂作品和演出才華使他成為當代中國流行音樂界的重要代表之一。'),
(21, 11250105, '余祥銓', 'Kenyu', '1995/08/25', 'E198408255', '台北市北投區', '0919840825', 'thekenyuman@gmail.com', '資訊工程', '余天', '持有並吸食大麻遭逮捕：2002年6月18日凌晨，在加拿大留學回國度假的余祥銓，於夜店臨檢時，在京華城頂樓知名PUB被警方查獲涉嫌持有二級毒品大麻；余祥銓當時只有17歲，因持有並吸食大麻而進入勒戒所，受少年感化教育兩周。人在印尼作秀的余天後來返國後，和李亞萍一起到觀護所探望余祥銓；余祥銓痛哭下跪對爸媽道歉認錯，余天夫妻亦因此公開向社會道歉。畢業後，余祥銓隨即回台往演藝圈發展[3][4][2][5]。\n《快樂星期天》表演遭批患憂鬱症：2005年在華視綜藝節目《快樂星期天》的招牌單元〈藝能歌喉戰〉中，余祥銓表演時走音、尚未唱到副歌部份即緊張致嚴重忘詞，在節目中遭評審包小柏嚴厲批評：「你是藝人嗎？你受過訓嗎？」、「拿了麥克風就是歌手啊？有了樂隊老師幫你伴奏，你就是天王了嗎？這只是變成你的高級卡拉OK場所！」[6]。余祥銓為此大受打擊，傳出疑似罹患憂鬱症及恐慌症等精神疾病，有一段時間其虛脫恍神、不吃、不喝、不說話並失控大哭大喊，連父母都不認得；余天夫婦天天找法師為他收驚，醫師則每天電話續診[2]，嚴重影響余祥銓自主生活的能力。此事件上遍各大新聞媒體，使余祥銓在台灣聲名大噪[7] 。該事件使《快樂星期天》節目收視率短暫上升，但亦因此事件導致之後節目評審的評論不再犀利。\n2006年1月，包小柏錄影時遭黑衣人毆打，余天也被影射為幕後主使者。當記者採訪時，余天尷尬地表示，「我知道你們第一個聯想一定是和我有關」；余天強調自己對小柏被打一無所悉，也表示譴責暴力。之後毆打包小柏的3名男子應訊時表示，他們不認識余祥銓，只因看不順眼包氏兄弟的毒舌，才出手教訓[2]。\n停車糾紛：2008年1月19日晚間，余祥銓和曾姓女友在台北市永吉路五分埔地區，與老翁蔡有定（66歲）發生停車糾紛，兩人當場扭打；雙方誰先動手各執一詞[8]。蔡姓老翁表示欲報案驗傷，余祥銓直接開車離開、返回北投家中。當晚深夜12時，余祥銓至時任台北縣新任立法委員的余天其立委服務區三重，找警方備案，控告蔡姓老翁涉嫌傷害，而蔡亦於隔日早上至北市信義分局報案[2]。\n對此，余天發表談話：「我自己覺得，如果因為我當立委，還要當心小孩出去會經常被打，我覺得蠻不可思議的。」、「明知道他是我兒子，還直接跟他講說，你爸當立委有什麼了不起。」蔡有定則指出：「我還在車上，他就下車，用腳踢我的車。我下來的時候他很兇，他說我停車差點撞到他女朋友。」、「我想說，又沒撞到，你下來就踹我車子，還先動手打人，還惡言相向，很大聲。」[2]。三重分局後將全案移至信義分局一併偵辦調查，24日晚余祥銓登門與蔡有定和解。'),
(22, 11250106, '王力宏', 'Leehom', '1995/05/17', 'F197605176', '紐約羅切斯特', '09197605176', 'theleehomman@gmail.com', '資訊工程', '李靚蕾', '王力宏（Leehom Wang），1976年5月17日出生於美國紐約，是一位知名的華人音樂家、歌手、詞曲創作人、音樂製作人、演員和導演。他以其多才多藝、跨界合作和音樂創新而聞名。\n\n王力宏以流行音樂為主，融合了中國傳統音樂、西方流行、爵士、饒舌和古典等不同音樂風格。他的音樂作品通常富有深度和情感，歌曲的主題範圍從愛情、社會議題到個人成長等廣泛涵蓋。\n\n他於1995年發行首張個人專輯《愛的就是你》開始了他的音樂生涯，並迅速贏得了廣大樂迷的喜愛。他的歌曲包括《心中的日月》、《唯一》、《依然愛你》、《你不知道的事》等，這些歌曲在華語流行音樂界取得了巨大的成功。\n\n除了音樂方面的成就，王力宏還參與了多部電影和電視劇的演出，並展現了優秀的演技。他也擔任過電影的導演和音樂製作人，並在多個領域中展現了他的才華和創造力。\n\n王力宏的音樂才華和全能表演使他成為華語流行音樂界的領軍人物之一。他的作品和音樂風格廣受讚譽，並獲得了多個音樂獎項和榮譽。他的表演風格和獨特個性使他贏得了廣大粉絲的喜愛和支持。'),
(23, 11250201, '郭台銘', 'Terry', '1995/02/20', 'G197402207', '新北市板橋區', '0919740220', 'theterryman@gmail.com', '商業管理', '曾馨瑩', NULL),
(24, 11250202, '高嘉瑜', 'ntufish', '1995/10/17', 'H198010178', '基隆市七堵區', '0919801017', 'thentufishwoman@gmail.com', '商業管理', '林秉枢', NULL),
(25, 11250203, '陳映彤', 'Evelyn', '1995/04/23', 'I198704239', '加利福尼亞洲矽谷', '0919870423', 'theevelynwoman@gmail.com', '商業管理', '理科先生', NULL),
(26, 11250204, '陳天予', 'Alisasa', '1995/05/25', 'J199205250', '新北市泰山區', '0919920525', 'thealisasawoman@gmail.com', '商業管理', '呂杰陽', NULL),
(27, 11250205, '劉宇席', 'Xxxxcat', '1995/11/21', 'K198011211', '花蓮市吉安鄉', '0919801121', 'thexxxxcatman@gmail.com', '商業管理', '郭采潔', NULL),
(28, 11250301, '鄭家純', 'lli', '1995/08/31', 'L199308312', '新北市板橋區', '0919930831', 'thelliwoman@gmail.com', '化工材料', 'Akira', NULL),
(29, 11250302, '鐘培生', 'Derek', '1995/12/23', 'M199012233', '香港缽蘭街', '0919901223', 'thederekman01@gmail.com', '化工材料', '王思聰', NULL),
(30, 11250303, '謝淑薇', 'Shuwei', '1995/01/04', 'N198601044', '台中市后里區', '0919860104', 'theweiwoman01@gmail.com', '化工材料', '盧彥勳', NULL);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
