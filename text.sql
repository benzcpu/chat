-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2019 at 06:27 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `text`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_chat`
--

CREATE TABLE `tb_chat` (
  `ch_id` int(11) NOT NULL,
  `ch_name` text NOT NULL,
  `ch_text` text NOT NULL,
  `ch_server` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_chat`
--

INSERT INTO `tb_chat` (`ch_id`, `ch_name`, `ch_text`, `ch_server`, `user_id`, `create_date`) VALUES
(117, 'benz', 'xxx', 'http://localhost/chat/index.php/', 16, '2019-06-11 06:04:10'),
(118, 'test', '\'\'\'', 'http://localhost/chat/index.php/', 17, '2019-06-11 06:04:38'),
(119, 'test', 'asadas', 'http://localhost/chat/index.php/', 17, '2019-06-11 06:04:48'),
(120, 'benz', '\'\'\'', 'http://localhost/chat/index.php/', 18, '2019-06-11 06:05:24'),
(121, 'test', 'ทำอะไรอยู่', 'http://localhost/chat/index.php/', 17, '2019-06-11 06:05:29'),
(122, 'benz', 'เขียนโปรแกรม', 'http://localhost/chat/index.php/', 18, '2019-06-11 06:05:35'),
(123, 'benz', 'แล้งทำไรอะไรอยู่หราาาาา', 'http://localhost/chat/index.php/', 18, '2019-06-11 06:05:40'),
(124, 'test', 'ยุ่ง', 'http://localhost/chat/index.php/', 17, '2019-06-11 06:05:47'),
(125, 'test', 'ไปไกลๆเลยปะ', 'http://localhost/chat/index.php/', 17, '2019-06-11 06:05:54'),
(126, 'benz', 'อ้าว', 'http://localhost/chat/index.php/', 18, '2019-06-11 06:05:58'),
(127, 'benz', 'เดียวหมี่เรื่องนะ', 'http://localhost/chat/index.php/', 18, '2019-06-11 06:06:06'),
(128, 'test', 'ก็มาดิครายบบ', 'http://localhost/chat/index.php/', 17, '2019-06-11 06:06:16'),
(129, 'benz', 'เข้าเกมส์เลยมา', 'http://localhost/chat/index.php/', 18, '2019-06-11 06:06:26'),
(130, 'test', 'อันนี้เป็นห้องchat แบบ ใส่ชื่อ ใส่ชื่อเข้ามาก่อนถึงจะคุยกันได้', 'http://localhost/chat/index.php/', 17, '2019-06-11 06:12:28'),
(131, 'benz', 'aaaaaaaaaa aaaaaaaaaa aaaaaa', 'http://localhost/chat/index.php/', 18, '2019-06-11 06:15:41'),
(132, 'benz', 'aaaaaaaaaa aaaaaaaaaa aaaaaaaa', 'http://localhost/chat/index.php/', 18, '2019-06-11 06:15:51'),
(133, 'benz', 'xx', 'http://localhost/chat/index.php/', 18, '2019-06-11 06:23:36'),
(134, 'benz', 'vvv', 'http://localhost/chat/index.php/', 18, '2019-06-11 06:23:41'),
(135, 'benz', 'asdasdasd', 'http://localhost/chat/index.php/', 18, '2019-06-11 06:23:50'),
(136, 'benz', 'iquwieuoijasdasd', 'http://localhost/chat/index.php/', 18, '2019-06-11 06:23:54');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `user_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_name`) VALUES
(16, 'benz'),
(17, 'test'),
(18, 'benz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_chat`
--
ALTER TABLE `tb_chat`
  ADD PRIMARY KEY (`ch_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_chat`
--
ALTER TABLE `tb_chat`
  MODIFY `ch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
