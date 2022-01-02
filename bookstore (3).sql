-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2022 at 04:17 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `slide_name` varchar(100) NOT NULL,
  `imageurl` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bookid` int(6) UNSIGNED ZEROFILL NOT NULL,
  `bookname` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bookimageurl` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bookdescription` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bookpages` int(11) DEFAULT 0,
  `bookweight` float DEFAULT 0,
  `releasedate` date DEFAULT NULL,
  `nxbid` int(6) UNSIGNED ZEROFILL NOT NULL,
  `categoryid` int(2) UNSIGNED ZEROFILL NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `price` decimal(10,0) UNSIGNED DEFAULT 0,
  `timestamp` datetime DEFAULT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookid`, `bookname`, `bookimageurl`, `bookdescription`, `bookpages`, `bookweight`, `releasedate`, `nxbid`, `categoryid`, `quantity`, `price`, `timestamp`, `type`) VALUES
(000044, 'Ma bùn lưu manh', 'ma-bun-luu-manh-mt.jpg', '', 55, 52, '2021-12-08', 000024, 19, 2, '55000', '2021-12-20 09:40:11', 1),
(000046, 'Lập kế hoạch kinh doanh hiệu quả', 'lap-ke-hoach-kinh-doanh-hieu-qua.jpg', 'a', 100, 100, '2021-12-06', 000021, 19, 100, '119000', '2021-12-28 17:20:26', 1),
(000047, 'Bank 4.0 - Giao Dịch Mọi Nơi, Không Chỉ Là Ng', 'bank-4.0.jpg', 'Kirito, nhân vật chính, là người đầu tiên trong số game thủ SAO biết chấp nhận chân tướng ấy. Và ở hiện trường của trò chơi - một thành nổi khổng lồ mang tên Aincrad, cậu ta dần dà hiển lộ được tài năng trong vai trò game thủ solo. Kirito vốn định duy trì tình trạng chiến đấu đơn độc đầy mạo hiểm đó cho đến khi đạt mục tiêu là vươn tới tầng cao nhất để phá đảo game, nhưng sau lời mời giàu sức thuyết phục của nữ kiếm sĩ Asuna, cậu quyết định sát cánh cùng cô. Cuộc gặp gỡ ấy đã tạo nên bước ngoặt có thể gọi là định mệnh đối với Kirito…', 568, 350, '2015-01-03', 000017, 34, 56, '103000', '2022-01-02 03:49:59', 1),
(000048, 'Bộ Sách 500 Câu Chuyện Đạo Đức ', 'bo-sach-500-cau-chuyen-dao-duc.jpg', '', 300, 290, '2022-01-11', 000022, 24, 200, '210000', '2022-01-02 03:51:25', 1),
(000049, 'Lịch Sử Ung Thư - Hoàng Đế Của Bách Bệnh', 'ung-thu-hoang-de-cua-bach-benh.jpg', '', 800, 290, '2022-01-10', 000020, 27, 190, '900', '2022-01-02 03:52:34', 1),
(000050, 'Cuốn Sách Khám Phá : Trời Đêm Huyền Diệu', 'troi-dem-huyen-dieu.jpg', '', 902, 180, '2021-12-08', 000017, 20, 211, '195000', '2022-01-02 03:55:02', 1),
(000051, 'Combo Mẹ Con Sư Tử - Bồ Tát Ngàn Tay Ngàn Mắt', 'combo-me-con-su-tu-bo-tat-ngan-tay-ngan-mat.jpg', '', 200, 100, '2021-12-08', 000018, 27, 902, '315000', '2022-01-02 03:57:47', 2),
(000052, 'Chuyện Nghề và Chuyện Đời - Bộ 4 cuốn', 'combo-chuyen-nghe-chuyen-doi.jpg', '', 800, 197, '2021-12-06', 000022, 21, 200, '340000', '2022-01-02 04:00:05', 2),
(000053, 'Combo Osho: Hạnh Phúc Tại Tâm, Can Đảm Biến', 'combo-hanh-phuc-sang-tao.jpg', '', 144, 255, '2015-01-03', 000018, 24, 244, '120000', '2022-01-02 04:01:14', 2),
(000054, 'Combo Giáo Dục và Ý Nghĩa Cuộc Sống', 'combo-giao-duc-va-y-nghia-cuoc-song.jpg', '', 800, 1345, '2022-01-11', 000023, 39, 100, '240000', '2022-01-02 04:02:26', 2),
(000055, 'Đường Mây Trong Cõi Mộng', 'duong-may-trong-coi-mong.jpg', '', 400, 210, '2022-01-10', 000018, 26, 24, '99000', '2022-01-02 04:05:49', 3),
(000056, 'Muôn Kiếp Nhân Sinh', 'muon-kiep-nhan-sinh.jpg', '', 2344, 190, '2021-12-15', 000022, 24, 12, '245000', '2022-01-02 04:06:47', 3),
(000057, 'Đường Mây Trên Đất Hoa', 'duong-may-tren-dat-hoa.jpg', '', 52, 124, '2015-01-03', 000020, 26, 23, '123000', '2022-01-02 04:08:52', 3),
(000058, 'Đại dịch trên  những con đường tơ lụa', 'dai-dich-tren-con-duong-to-lua.jpg', '', 245, 123, '2022-01-14', 000022, 22, 234, '340000', '2022-01-02 04:09:58', 4),
(000059, 'Suối nguồn và cái tối hiện trong từng cá thể', 'suoi-nguon-va-cai-toi-trong-tung-ca-the.jpg', '', 210, 90, '2021-12-06', 000020, 20, 100, '200000', '2022-01-02 04:10:56', 4),
(000060, 'Hào quan của vua Gia Long trong mắt Michel', 'vua-gia-long.jpg', '', 398, 187, '2017-08-07', 000018, 25, 56, '195000', '2022-01-02 04:12:05', 5),
(000061, 'Cám  ơn vì đã được thương', 'cam-on-vi-da-duoc-thuong.jpg', '', 23, 167, '2015-01-03', 000017, 20, 23, '56000', '2022-01-02 04:12:58', 4);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryid` int(2) UNSIGNED ZEROFILL NOT NULL,
  `categoryname` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryid`, `categoryname`, `parent`) VALUES
(19, 'Sách kinh tế - kỹ năng', 1),
(20, 'Nghệ thuật sống - tâm lý', 1),
(21, 'Sách văn học Việt Nam', 1),
(22, 'Sách văn học nước ngoài', 1),
(23, 'Sách thiếu nhi', 1),
(24, 'Sách giáo dục - gia đình', 1),
(25, 'Sách lịch sử', 1),
(26, 'Sách văn hóa - nghệ thuật', 1),
(27, 'Sách khoa học - triết học', 1),
(28, 'Sách tâm linh, tôn giáo', 1),
(29, 'Sách y học - thực dưỡng', 1),
(34, 'Kinh tế - chính trị', 19),
(35, 'Sách khởi nghiệp', 19),
(36, 'Tài chính kế toán', 19),
(37, 'Quản lí nhân sự', 19),
(38, 'Sách kỹ năng làm việc', 19),
(39, 'Sách kỹ năng làm việc', 19);

-- --------------------------------------------------------

--
-- Table structure for table `danhgia`
--

CREATE TABLE `danhgia` (
  `id` int(11) DEFAULT NULL,
  `danhgia` varchar(200) NOT NULL,
  `sosao` int(11) NOT NULL,
  `userid` int(6) UNSIGNED ZEROFILL NOT NULL,
  `bookid` int(6) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nxb`
--

CREATE TABLE `nxb` (
  `nxbid` int(6) UNSIGNED ZEROFILL NOT NULL,
  `nxb` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `nxb`
--

INSERT INTO `nxb` (`nxbid`, `nxb`) VALUES
(000017, 'Nhà xuất bảng Thanh Niên'),
(000018, 'Nhà xuất bảng Văn hóa nghệ thuật'),
(000019, 'Nhà xuất bản Tôn giáo'),
(000020, 'Nhà xuất bản Kim Đồng'),
(000021, 'Nhà xuất bản Triết học'),
(000022, 'Nhà xuất bản Giáo dục'),
(000023, 'Nhà xuất bản Kỹ năng sống'),
(000024, 'Nhà xuất bản Kinh tế - Chính trị');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(6) UNSIGNED ZEROFILL NOT NULL,
  `userid` int(6) UNSIGNED ZEROFILL DEFAULT NULL,
  `orderstatus` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `timestamp` datetime NOT NULL DEFAULT current_timestamp(),
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalmoney` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `receivername` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `userid`, `orderstatus`, `timestamp`, `address`, `totalmoney`, `receivername`, `phone`) VALUES
(000079, 000030, '0', '2021-12-29 17:40:15', '144', '287,980.00 đ', 'Nguyễn Hoàng Việt', '0768570252'),
(000080, 000030, '0', '2021-12-29 22:22:07', '144', '143,990.00 đ', 'Nguyễn Hoàng Việt', '0768570252'),
(000081, 000030, '1', '2021-12-29 22:23:43', '144', '66,550.00 đ', 'Nguyễn Hoàng Việt', '0768570252'),
(000082, 000030, '0', '2021-12-29 23:53:30', '144', '210,540.00 đ', 'Nguyễn Hoàng Việt', '0768570252'),
(000083, 000030, '0', '2021-12-30 17:30:53', '144', '66,550.00 đ', 'Nguyễn Hoàng Việt', '0768570252'),
(000084, 000030, '0', '2021-12-30 17:38:59', '144', '410,190.00 đ', 'Nguyễn Hoàng Việt', '0768570252'),
(000085, 000030, '0', '2021-12-30 22:13:20', '144', '133,100.00 đ', 'Nguyễn Hoàng Việt', '0768570252');

-- --------------------------------------------------------

--
-- Table structure for table `ordersdetails`
--

CREATE TABLE `ordersdetails` (
  `qtyordered` int(11) NOT NULL,
  `amount` double NOT NULL,
  `orderid` int(6) UNSIGNED ZEROFILL NOT NULL,
  `bookid` int(6) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `ordersdetails`
--

INSERT INTO `ordersdetails` (`qtyordered`, `amount`, `orderid`, `bookid`) VALUES
(2, 119000, 000079, 000046),
(1, 119000, 000080, 000046),
(1, 55000, 000081, 000044),
(1, 119000, 000082, 000046),
(1, 55000, 000082, 000044),
(1, 55000, 000083, 000044),
(4, 55000, 000084, 000044),
(1, 119000, 000084, 000046),
(2, 55000, 000085, 000044);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(6) UNSIGNED ZEROFILL NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isadmin` int(4) NOT NULL DEFAULT 0,
  `isdisable` int(4) NOT NULL DEFAULT 0,
  `fullname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `male` int(4) NOT NULL DEFAULT 1,
  `address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `password`, `isadmin`, `isdisable`, `fullname`, `phone`, `email`, `male`, `address`, `dob`) VALUES
(000021, 'admin', 1, 0, 'admin', '', 'admin@localhost', 1, '', '0000-00-00'),
(000023, '$2y$10$Gj/0jSpjFEobcR1FJyvCAufuui29cMxP5Pan2P2KKgRsM9S0WHG4e', 0, 0, 'Quoc Tuan', '0125865325', 'tuanquocle054@gmail.com', 1, NULL, NULL),
(000026, '$2y$10$A.3IfDhR3fXvrd7RFSNdxegui6QwvdnkfD9uylv2nXZHFz7s6wqyK', 0, 0, 'Quoc Tuan', '0254882681', 'tuanquocle@gmail.com', 1, NULL, NULL),
(000028, '$2y$10$KIGzsTdXMXBLup25fAXK7e/e/mUm.UsgNAnvWucvgePbxXHdktk8G', 0, 0, 'Le Quoc Tuan', '0254882681', 'admin@gmail.com', 1, NULL, NULL),
(000029, '$2y$10$S5.ckdp02sCWXVeDzC8dJ.deco5HGt9BemNrzgCOMh/NkNiuk.t7i', 0, 0, 'Viet', '0123456789', 'viet@gmail.com', 1, NULL, NULL),
(000030, '$2y$10$JXRAK04JSTK4MM9eQHXpCedjlpqAZosDGvtNR00AC6ac4ynq6qtgK', 0, 0, 'Nguyễn Hoàng Việt', '0768570252', 'hoangvietnguyen2602@gmail.com', 0, 'huế', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookid`) USING BTREE,
  ADD KEY `fkIdx_37` (`nxbid`) USING BTREE,
  ADD KEY `fkIdx_40` (`categoryid`) USING BTREE;

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryid`) USING BTREE;

--
-- Indexes for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD UNIQUE KEY `userid` (`userid`),
  ADD KEY `bookid` (`bookid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nxb`
--
ALTER TABLE `nxb`
  ADD PRIMARY KEY (`nxbid`) USING BTREE;

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`) USING BTREE,
  ADD KEY `fkIdx_58` (`userid`) USING BTREE;

--
-- Indexes for table `ordersdetails`
--
ALTER TABLE `ordersdetails`
  ADD KEY `fkIdx_87` (`orderid`) USING BTREE,
  ADD KEY `fkIdx_90` (`bookid`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`) USING BTREE,
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bookid` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryid` int(2) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nxb`
--
ALTER TABLE `nxb`
  MODIFY `nxbid` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `FK_37` FOREIGN KEY (`nxbid`) REFERENCES `nxb` (`nxbid`),
  ADD CONSTRAINT `FK_40` FOREIGN KEY (`categoryid`) REFERENCES `categories` (`categoryid`);

--
-- Constraints for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `danhgia_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`),
  ADD CONSTRAINT `danhgia_ibfk_2` FOREIGN KEY (`bookid`) REFERENCES `books` (`bookid`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `tk_usersid` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `ordersdetails`
--
ALTER TABLE `ordersdetails`
  ADD CONSTRAINT `FK_87` FOREIGN KEY (`orderid`) REFERENCES `orders` (`orderid`),
  ADD CONSTRAINT `FK_90` FOREIGN KEY (`bookid`) REFERENCES `books` (`bookid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
