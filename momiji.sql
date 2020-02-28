-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 28, 2020 at 07:28 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `momiji`
--

-- --------------------------------------------------------

--
-- Table structure for table `approvecomment`
--

CREATE TABLE `approvecomment` (
  `id` int(11) NOT NULL,
  `message` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `approvecomment`
--

INSERT INTO `approvecomment` (`id`, `message`, `firstname`, `picture`) VALUES
(1, 'Test', 'ADMIN', 'jab.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(10) NOT NULL,
  `message` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `message`, `name`, `email`, `rate`, `username`) VALUES
(1, 'เยี่ยมมากๆ', 'Akaded', 'akaded@gmail.com', '55555', 0),
(2, 'อาหารอร่อยมากๆ', 'Noraset', 'noraseat@gmail.com', '1500', 0),
(3, 'อร่อยมากๆ', 'นรเศรษฐ์ พนาวงศ์', '55555', 'jabnakub01@gmail.com', 0),
(4, 'เป็นร้านอาหารที่มีคุณภาพ อร่อยราคากำลังดี', 'Parada', '15000', 'parada@gmail.com', 0),
(5, 'เป็นร้านอาหารที่มีคุณภาพ อร่อยราคากำลังดี', 'Parada', '15000', 'parada@gmail.com', 0),
(6, 'อาหารญี่ปุ่นที่อร่อยมากร้านหนึ่งในเมืองไทยที่ราคากำลังดี ถ้าไปช่วงโปรโมชั่นหรือเทศกาลจะดีมาก', 'Marl', '15621', 'mark@gmail.com', 0),
(7, 'อาหารอร่อยมากสะอาดละถูกมากๆ', 'ณภัทร ', 'ดี', 'napath@gmail.com', 0),
(8, 'ร้านสกปรกอาหารไม่อร่อยไม่มีคุณภาพ', 'napat', 'คุณภาพดี', 'napath@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `active` tinyint(4) NOT NULL,
  `address` varchar(60) NOT NULL,
  `picture` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `username`, `password`, `firstname`, `lastname`, `email`, `active`, `address`, `picture`) VALUES
(1, 'Noraseat', '25d55ad283aa400af464c76d713c07ad', 'Noraseat', 'Panawong', 'jabnakub01@gmail.com', 1, '', '0.png'),
(2, 'root', '25d55ad283aa400af464c76d713c07ad', 'ADMIN', 'JAB', 'noraseat@gmail.com', 0, '129 ม.2, ต.บางไทรป่า อ.บางเลน', 'jab.jpg'),
(3, 'test', '124bd1296bec0d9d93c7b52a71ad8d5b', 'Test', 'ADmin', 'testadmin@gmail.com', 0, '', '0.png'),
(4, 'test', '81dc9bdb52d04dc20036dbd8313ed055', 'bew', 'na', 'na@gmail.com', 0, '', ''),
(5, 'loli', '25d55ad283aa400af464c76d713c07ad', 'Lo', 'Li', 'LOLI@gmail.com', 0, '', '0.png');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` float NOT NULL,
  `unintInStock` int(11) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `unintInStock`, `picture`, `category`) VALUES
(21, 'MAKURO ZUKE DON', 'Project ง่ายๆแต่ทำไม่ได้', 250, 50, 'MAKURO-ZUKE-DON.jpg', 1),
(22, 'NEGI TORO DON', 'ข้าวหน้าโทโร่สับ', 230, 50, 'NEGI-TORO-DON.jpg', 1),
(24, 'SALMON IKURA CHAHAN', 'ข้าวผัดปลาแซลมอน', 300, 50, 'SALMON-IKURA-CHAHAN.jpg', 1),
(25, 'SALMON SALMON TORO DON', 'ข้าวหน้าแซลมอน-ท้องแซลมอน', 350, 30, 'SALMON-SALMON-TORO-DON.jpg', 1),
(26, 'UNAGI DON', 'ข้าวหน้าปลาไหล', 30, 50, 'UNAGI-DON.jpg', 1),
(27, 'UNAGI FOIE GRAS DON', 'ข้าวหน้าปลาไหล-ตับห่าน', 250, 50, 'UNAGI-FOIE-GRAS-DON.jpg', 1),
(28, 'WAGYU DON', 'ข้าวหน้าวากิว', 230, 50, 'WAGYU-DON.jpg', 1),
(29, 'CHA SOBA HOT', 'เส้นโซบะชาเขียวร้อน', 250, 50, 'CHA-SOBA-HOT.jpg', 2),
(30, 'CHAWANMUCHI', 'ไข่ตุ๋นญี่ปุ่น', 150, 50, 'CHAWANMUCHI.jpg', 2),
(31, 'FIN NABE', 'ฟิน นาเบ', 200, 50, 'FIN-NABE.jpg', 2),
(32, 'MISOSHIRU', 'ซุปมิโส๊ะ', 150, 50, 'MISOSHIRU.jpg', 2),
(33, 'SALMON KABUTONI', 'หัวปลาแซลมอนต้มซีอิ้ว', 300, 50, 'SALMON-KABUTONI.jpg', 2),
(34, 'SOBA HOT', 'เส้นโซบะร้อน', 250, 50, 'SOBA-HOT.jpg', 2),
(35, 'SOMEN HOT', 'เส้นโซเมนร้อน', 250, 50, 'SOMEN-HOT.jpg', 2),
(36, 'UDON HOT', 'เส้นอูด้งร้อน', 250, 50, 'UDON-HOT.jpg', 2),
(37, 'ZARU CHA SOBA', 'เส้นโซบะชาเขียวเย็น', 250, 50, 'ZARU-CHA-SOBA.jpg', 2),
(38, 'ZARU INANIWA', 'เส้นอินานิวะเย็น', 250, 50, 'ZARU-INANIWA.jpg', 2),
(39, 'ZARU SOBA', 'เส้นโซบะเย็น', 250, 50, 'ZARU-SOBA.jpg', 2),
(40, 'ZARU SOMEN', 'เส้นโซเมนเย็น', 250, 50, 'ZARU-SOBA.jpg', 2),
(41, 'ZARU SOMEN', 'เส้นโซเมนเย็น', 280, 50, 'ZARU-SOMEN.jpg', 2),
(42, 'ZARU UDON', 'เส้นอูด้งเย็น', 280, 50, 'ZARU-UDON.jpg', 2),
(43, 'CALIFONIA ROLL', 'เคลิฟอร์เนียโรล', 300, 30, 'CALIFONIA-ROLL.jpg', 3),
(44, 'CRUNCHY TEMPURA ROLL', 'กุ้งทอดกรอบโรล', 300, 50, 'CRUNCHY-TEMPURA-ROLL.jpg', 3),
(45, 'HAMACHI ROLL', 'ปลาหางเหลืองโรล', 300, 50, 'HAMACHI-ROLL.jpg', 3),
(46, 'HAMACHI SAIKYO ROLL', 'ปลาหางเหลือง มิโส๊ะหวานโรล', 300, 50, 'HAMACHI-SAIKYO-ROLL.jpg', 3),
(47, 'HAMACHI SPICY MISO ROLL', 'ปลางหางเหลือง ซอสสไปซี่มิโส๊ะโรล', 300, 30, 'HAMACHI-SPICY-MISO-ROLL.jpg', 3),
(48, 'MAGURO SPICY ROLL', 'ทูน่าสไปซี่โรล', 300, 30, 'HAMACHI-SPICY-MISO-ROLL.jpg', 3),
(49, 'SALMON FOIE GRAS CHEESE ROLL', 'แซลมอนตับห่านชีสโรล', 350, 30, 'SALMON-FOIE-GRAS-CHEESE-ROLL.jpg', 3),
(50, 'SALMON FOIE GRAS ROLL', 'แซลมอนตับห่านโรล', 300, 30, 'SALMON-FOIE-GRAS-ROLL.jpg', 3),
(51, 'SALMON-ROLL', 'แซลมอนโรล', 350, 50, 'SALMON-ROLL.jpg', 3),
(52, 'SALMON SAIKYO ROLL', 'แซลมอน มิโส๊ะหวานโรล', 350, 50, 'SALMON-SAIKYO-ROLL.jpg', 3),
(53, 'SALMON SPICY MISO-ROLL', 'แซลมอน ซอสสไปซี่มิโส๊ะโรล', 350, 30, 'SALMON-SPICY-MISO-ROLL.jpg', 3),
(54, 'SALMON SPICY ROLL', 'แซลมอนสไปซี่โรล', 350, 30, 'SALMON-SPICY-ROLL.jpg', 3),
(55, 'UNAGI LOVERROLL', 'ปลาไหลญี่ปุ่นโรล', 350, 30, 'UNAGI-LOVER-ROLL.jpg', 3),
(56, 'WAGYU FOIE GRAS ROLL', 'วากิวตับห่านโรล', 350, 30, 'UNAGI-LOVER-ROLL.jpg', 3),
(57, 'FIN CRUNCHY TATAKI', 'ยำฟินสเปเชียลหนังปลากรอบ', 200, 20, 'FIN-CRUNCHY-TATAKI.jpg', 4),
(58, 'FIN SALAD', 'สลัดสเปเชียล', 250, 30, 'FIN-SALAD.jpg', 4),
(59, 'KANI SALAD', 'สลัดปูอัด', 250, 30, 'KANI-SALAD.jpg', 4),
(60, 'SALMON SALAD', 'สลัดปลาแซลมอน', 250, 20, 'SALMON-SALAD.jpg', 4),
(61, 'SALMON SKIN SALAD', 'สลัดหนังปลากรอบ', 300, 30, 'SALMON-SKIN-SALAD.jpg', 4),
(62, 'SALMON SPICY MISO SALAD', 'สลัดแซลมอนราดซอสสไปซี่มิโส๊ะ', 300, 30, 'SALMON-SPICY-MISO-SALAD.jpg', 4),
(63, 'TUNA SPICY MISO SALAD', 'สลัดทูน่าราดซอสสไปซี่มิโส๊ะ', 350, 30, 'TUNA-SPICY-MISO-SALAD.jpg', 4),
(64, 'TUNA TATAKI,TAKO TATAKI,SALMON TATAKI ', 'ยำทูน่า,ยำหนวดหมึกยักษ์,ยำหนวดหมึกยักษ์,ยำแซลมอน', 350, 30, 'TUNA-TATAKITAKO-TATAKISALMON-TATAKI.jpg', 4),
(65, 'AKAMI SASHIMI', 'ทูน่า ซาซิมิ', 200, 50, 'AKAMI-SASHIMI.jpg', 5),
(66, 'BOTANEBI SASHIMI', 'กุ้งหวานตัวใหญ่ ซาซิมิ', 400, 30, 'BOTANEBI-SASHIMI.jpg', 5),
(67, 'CHUTORO SASHIMI', 'ชูโทโร่ ซาซิมิ', 400, 50, 'CHUTORO-SASHIMI.jpg', 5),
(68, 'FIN SASHIMI Premium11', 'ชุดปลาดิบ Premium11', 550, 50, 'FIN-SASHIMI.jpg', 5),
(69, 'HAMACHI CAPPACHIO USUZUKURI', 'ปลาหางเหลืองสไลด์บางซอสพิเศษ', 550, 30, 'HAMACHI-CAPPACHIO-USUZUKURI.jpg', 5),
(70, 'HAMACHI SASHIMI', 'ปลาหางเหลือง ซาซิมิ', 550, 30, 'HAMACHI-SASHIMI.jpg', 5),
(71, 'HIRAME SASHIMI', 'ปลาตาเดียว ซาซิมิ', 550, 10, 'HIRAME-SASHIMI.jpg', 5),
(72, 'HIRAME USUZUKURI', 'ปลาตาเดียวสไลด์บาง', 500, 20, 'HIRAME-USUZUKURI.jpg', 5),
(73, 'HOKKIGAI SASHIMI', 'หอยปีกนก ซาซิมิ', 500, 20, 'HOKKIGAI-SASHIMI.jpg', 5),
(74, 'HOTATE SASHIMI', 'หอยเชลล์ ซาซิมิ', 500, 20, 'HOTATE-SASHIMI.jpg', 5),
(75, 'IKURA SASHIMI', 'ไข่แซลมอน ซาซิมิ', 500, 20, 'IKURA-SASHIMI.jpg', 5),
(76, 'KANI SASHIMI', 'ปูอัด ซาซิมิ', 450, 20, 'KANI-SASHIMI.jpg', 5),
(77, 'LOBSTER SASHIMI', 'กุ้งมังกรแคนนาดา ซาซิมิ', 500, 20, 'LOBSTER-SASHIMI.jpg', 5),
(78, 'MADAI SASHIMI', 'ปลากระพงแดงญี่ปุ่น ซาซิมิ', 500, 20, 'MADAI-SASHIMI.jpg', 5),
(79, 'MADAI USUZUKURI', 'ปลากระพงแดงญี่ปุ่นสไลด์บาง', 600, 20, 'MADAI-USUZUKURI.jpg', 5),
(80, 'MAKORO-MORI-SASHIMI', 'ชุดทูน่า premium', 600, 20, 'MAKORO-MORI-SASHIMI.jpg', 5),
(81, 'OTORO SASHIMI', 'โอโทโร่ ซาซิมิ', 600, 20, 'OTORO-SASHIMI.jpg', 5),
(82, 'SALMON SASHIMI', 'แซลมอน ซาซิมิ', 600, 20, 'SALMON-SASHIMI.jpg', 5),
(83, 'SALMON TORO SASHIMI', 'ท้องแซลมอน ซาซิมิ', 600, 20, 'SALMON-TORO-SASHIMI.jpg', 5),
(84, 'SALMON USUZUKURI', 'แซลมอนสไลด์บาง', 600, 20, 'SALMON-USUZUKURI.jpg', 5),
(85, 'TAKE SASHIMI', 'ชุดปลาดิบ', 600, 20, 'TAKE-SASHIMI.jpg', 5),
(86, 'TAKO SASHIMI', 'หนวดหมึกยักษ์ ซาซิมิ', 600, 20, 'TAKO-SASHIMI.jpg', 5),
(87, 'UME SASHIMI', 'ชุดปลาดิบ premium7', 600, 20, 'UME-SASHIMI.jpg', 5),
(88, 'UNI SASHIMI', 'ไข่หอยเม่น ซาซิมิ', 600, 20, 'UME-SASHIMI.jpg', 5),
(89, 'EBI TEMPURA', 'กุ้งเท็มปุระ', 450, 20, 'EBI-TEMPURA.jpg', 6),
(90, 'HAMACHI KAMA', 'คางปลาหางเหลืองย่างเกลือ', 450, 20, 'HAMACHI-KAMA.jpg', 6),
(91, 'KAKI AGE TEMPURA', 'เท็มปุระผักรวม', 450, 20, 'KAKI-AGE-TEMPURA.jpg', 6),
(92, 'SABA SHIO', 'ซาบะย่างเกลือ', 450, 20, 'SABA-SHIO.jpg', 6),
(93, 'SABA STEAK', 'ซาบะสเต็ก', 450, 20, 'SABA-STEAK.jpg', 6),
(94, 'SABA TERI', 'ซาบะซอสหวาน', 450, 20, 'SABA-TERI.jpg', 6),
(95, 'SALMON MENTAI', 'แซลมอนย่างซอสไข่ปลาค็อส', 450, 20, 'SALMON-MENTAI.jpg', 6),
(96, 'SALMON SHIO', 'แซลมอนย่างเกลือ', 450, 20, 'SALMON-SHIO.jpg', 6),
(97, 'SALMON STEAK', 'แซลมอนสเต็ก', 450, 20, 'SALMON-STEAK.jpg', 6),
(98, 'SALMON TERI', 'แซลมอนซอสหงาน', 450, 20, 'SALMON-TERI.jpg', 6),
(99, 'SALMON TORO KUSHI YAKI', 'ท้องปลาแซลมอนเสียบไม้ย่าง', 450, 20, 'SALMON-TORO-KUSHI-YAKI.jpg', 6),
(100, 'SANMA SHIO', 'ซันมะย่างเกลือ', 450, 20, 'SANMA-SHIO.jpg', 6),
(101, 'SANMA TERI', 'ซันมะซอสหวาน', 450, 20, 'SANMA-TERI.jpg', 6),
(102, 'TEMPURA MORI', 'เท็มปุระรวม', 450, 20, 'TEMPURA-MORI.jpg', 6),
(103, 'WAGYU STEAK', 'วากิวสเต็ก', 450, 20, 'WAGYU-STEAK.jpg', 6),
(104, 'AKAMI SUSHI', 'อากามิ ซูชิ', 100, 50, 'AKAMI-SUSHI.jpg', 7),
(105, 'AMAEBI SASHIMI', 'กุ้งหวานตัวเล็ก ซาซิมิ', 100, 50, 'AMAEBI-SASHIMI.jpg', 7),
(106, 'AMAEBI SUSHI', 'กุ้งหวานตัวเล็ก ซูชิ', 100, 50, 'AMAEBI-SUSHI.jpg', 7),
(107, 'BOTANEBI SUSHI', 'กุ้งหวานตัวใหญ่ ซูชิ', 100, 50, 'BOTANEBI-SUSHI.jpg', 7),
(108, 'CHUTORO SUSHI', 'ชูโทโร่ ซูชิ', 100, 50, 'CHUTORO-SUSHI.jpg', 7),
(109, 'ENKAWA SUSHI', 'ครีบปลาตาเดียว ซูชิ', 100, 50, 'ENKAWA-SUSHI.jpg', 7),
(110, 'FIN HAMACHI SUSHI SET', 'เซตซุชิ ปลาหางเหลือง', 100, 50, 'FIN-HAMACHI-SUSHI-SET.jpg', 7),
(111, 'FIN SALMON SUSHI SET', 'เซตซูชิ ปลาแซลมอน', 100, 50, 'FIN-SALMON-SUSHI-SET.jpg', 7),
(112, 'FIN SUSHI SET', 'เซตซูชิ special 11 คำ', 100, 50, 'FIN-SUSHI-SET.jpg', 7),
(113, 'FOIE GRAS SUSHI', 'ตับห่านฝรั่งเศส ซูชิ', 100, 50, 'FOIE-GRAS-SUSHI.jpg', 7),
(114, 'HAMACHI SAIKYO SUSHI', 'ปลาหางเหลือง มิโส๊ะหวาน ซูชิ', 100, 50, 'HAMACHI-SAIKYO-SUSHI.jpg', 7),
(115, 'HAMACHI SUSHI', 'ปลาหางเหลือง ซูชิ', 100, 50, 'HAMACHI-SUSHI.jpg', 7),
(116, 'HIRAME SUSHI', 'ปลาตาเดียว ซูชิ', 100, 50, 'HIRAME-SUSHI.jpg', 7),
(117, 'HOTATE MENTAI SUSHI', 'หอยเชลล์ ซอสไข่ปลาค็อด ซูชิ', 100, 50, 'HOTATE-MENTAI-SUSHI.jpg', 7),
(118, 'HOTATE SUSHI', 'หอยเชลล์ ซูชิ', 100, 50, 'HOTATE-SUSHI.jpg', 7),
(119, 'IKURA SUSHI', 'ไข่แซลมอน ซูชิ', 100, 50, 'IKURA-SUSHI.jpg', 7),
(120, 'KANI SUSHI', 'ปูอัด ซูชิ', 100, 50, 'KANI-SUSHI.jpg', 7),
(121, 'MADAI SUSHI', 'ปลากระพงแดงญี่ปุ่น ซูชิ', 100, 50, 'MADAI-SUSHI.jpg', 7),
(122, 'NEGITORO SUSHI', 'โทโร่สับ ซูชิ', 100, 50, 'NEGITORO-SUSHI.jpg', 7),
(123, 'NEGITORO SUSHI', 'โทโร่สับ ซูชิ', 100, 50, 'NEGITORO-SUSHI.jpg', 7),
(124, 'SALMON IKURA SUSHI', 'แซลมอน ไข่แซลมอน', 100, 50, 'OTORO-SUSHI.jpg', 7),
(125, 'SALMON SAIKYO SUSHI', 'แซลมอน มิโส๊ะหวาน ซูชิ', 100, 50, 'SALMON-IKURA-SUSHI.jpg', 7),
(126, 'SALMON SUSHI', 'เนื้อแซลมอน ซูชิ', 100, 50, 'SALMON-SAIKYO-SUSHI.jpg', 7),
(127, 'SALMON TORO SAIKYO SUSHI', 'ท้องแซลมอน มิโส๊ะหวาน ซูชิ', 100, 50, 'SALMON-SUSHI.jpg', 7),
(128, 'SALMON TORO SUSHI', 'ท้องแซลมอน', 100, 50, 'SALMON-TORO-SAIKYO-SUSHI.jpg', 7),
(129, 'SHIMAAJI SUSHI', 'ปลาหางแข็งญี่ปุ่น ซูชิ', 100, 50, 'SALMON-TORO-SUSHI.jpg', 7),
(130, 'TAKE SUSHI SET', 'เซตซุชิ special 9 คำ', 100, 50, 'SHIMAAJI-SUSHI.jpg', 7),
(131, 'TAKO SUSHI', 'หนวดหมึกยักษ์ ซูชิ', 100, 50, 'TAKE-SUSHI-SET.jpg', 7),
(132, 'TAMAGO SUSHI', 'ไข่หวาน ซูชิ', 100, 50, 'TAKO-SUSHI.jpg', 7),
(133, 'TOBIKO SUSHI', 'ไข่ปลาบิน ซูชิ', 100, 50, 'TAMAGO-SUSHI.jpg', 7),
(134, 'UME SUSHI SET', 'เซตซูชิ special 7', 100, 50, 'TOBIKO-SUSHI.jpg', 7),
(135, 'UNAGI SUSHI', 'ปลาไหลญี่ปุ่น ซูชิ', 100, 50, 'UME-SUSHI-SET.jpg', 7),
(136, 'UNI SUSHI', 'ไข่หอยเม่น ซูชิ', 100, 50, 'UNAGI-SUSHI.jpg', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approvecomment`
--
ALTER TABLE `approvecomment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `approvecomment`
--
ALTER TABLE `approvecomment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
