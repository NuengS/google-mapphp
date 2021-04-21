-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2021 at 02:12 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `locationdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_location`
--

CREATE TABLE `tbl_location` (
  `id` int(11) NOT NULL,
  `location_name` varchar(255) DEFAULT NULL,
  `lat` varchar(100) DEFAULT NULL,
  `lng` varchar(100) DEFAULT NULL,
  `location_detail` varchar(255) NOT NULL,
  `image_name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_location`
--

INSERT INTO `tbl_location` (`id`, `location_name`, `lat`, `lng`, `location_detail`, `image_name`) VALUES
(17, 'มุ่งมั่น Coffee ', '7.196211919185521', '100.60734272003174', 'มุ่งมั่น Coffee - แยกไชยา ถนนศรีสุดา', '1619006272.jpg'),
(16, 'สโตยคาเฟ่ สาขาสงขลา', '7.193242142832533', '100.59204339981079', 'เปิดบริการแล้ว\r\nพบกับหลากหลายเมนูอาหารคาวหวาน\r\nที่เดียวจบพบกันที่ สโตยคาเฟ่ สาขาสงขลา\r\n-เครื่องดื่ม\r\n-พิซซ๋า\r\n-บิงซูสายไหม\r\n-แลพอื่นๆอีกมากมาย\r\nที่สโตยคาเฟ่สาขาสงขลา\r\nเปิดทุกวัน เวลา  10.30-21.00 น.\r\nพิกัด ถนนพัทลุง แยกไฟแดงลี 7 เลี้ยวซ้าย อยู่ซ้ายมือ', '1619005003.png'),
(13, 'เซ็นโกะชาบู', '7.178430584821018', '100.61184888207008', 'ทานชาบูร้านนี้มีแต่รอยยิ้ม ส่งยิ้มให้กันทุกค่ำคืน \r\nอีกหนึ่งเมนูทอดที่มียอดสั่งเยอะสั่งแล้วต้องสั่งเพิ่ม \r\nเด็กทานได้ผู้ใหญ่ก็ช้อบชอบ \r\nชีสบอลร้อนๆทานตอนชีสเยิ้มๆ\r\nเซ็นโกะชาบูยินดีต้อนรับทุกท่านครับ', '1619004148.jpg'),
(15, 'นานาหมูกระทะ', '7.168599701510513', '100.59554100036621', 'ทานหมูกระทะให้อร่อย ต้องอยู่ที่น้ำจิ้ม น้ำจิ้มที่นี่เด็ดมาก\r\nสุกี้ และ จิ้มแจ่ว ต้องมาลองอ่ะ แนะนำเลยจริงๆ ส่วนน้ำจิ้มทะเล ยังไม่ได้ลอง \r\nอาหารสดต่างๆ หมู ไก่ เนื้อหมัก ไส้กรอก ลูกชิ้น หอยแมลงภู่ หอยตลับ ปลาหมึก ปลาแซลมอน ภาพรวม สดและสะอาด  ของเต็ม ไม่อั้', '1619004777.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_location`
--
ALTER TABLE `tbl_location`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_location`
--
ALTER TABLE `tbl_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
