-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 20, 2021 lúc 09:47 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bookstore`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `slide_name` varchar(100) NOT NULL,
  `imageurl` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `books`
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
  `timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `books`
--

INSERT INTO `books` (`bookid`, `bookname`, `bookimageurl`, `bookdescription`, `bookpages`, `bookweight`, `releasedate`, `nxbid`, `categoryid`, `quantity`, `price`, `timestamp`) VALUES
(000044, 'sach', 'ma-bun-luu-manh-mt.jpg', '', 55, 52, '2021-12-08', 000024, 19, 2, '55000', '2021-12-20 09:40:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `categoryid` int(2) UNSIGNED ZEROFILL NOT NULL,
  `categoryname` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `categories`
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
(34, 'Truyen tranh', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgia`
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
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nxb`
--

CREATE TABLE `nxb` (
  `nxbid` int(6) UNSIGNED ZEROFILL NOT NULL,
  `nxb` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `nxb`
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
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `orderid` int(6) UNSIGNED ZEROFILL NOT NULL,
  `userid` int(6) UNSIGNED ZEROFILL DEFAULT NULL,
  `orderstatus` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `timestamp` datetime NOT NULL DEFAULT current_timestamp(),
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalmoney` double NOT NULL DEFAULT 0,
  `receivername` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ordersdetails`
--

CREATE TABLE `ordersdetails` (
  `qtyordered` int(11) NOT NULL,
  `amount` double NOT NULL,
  `orderid` int(6) UNSIGNED ZEROFILL NOT NULL,
  `bookid` int(6) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
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
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`userid`, `password`, `isadmin`, `isdisable`, `fullname`, `phone`, `email`, `male`, `address`, `dob`) VALUES
(000021, 'admin', 1, 0, 'admin', '', 'admin@localhost', 1, '', '0000-00-00'),
(000023, '$2y$10$Gj/0jSpjFEobcR1FJyvCAufuui29cMxP5Pan2P2KKgRsM9S0WHG4e', 0, 0, 'Quoc Tuan', '0125865325', 'tuanquocle054@gmail.com', 1, NULL, NULL),
(000026, '$2y$10$A.3IfDhR3fXvrd7RFSNdxegui6QwvdnkfD9uylv2nXZHFz7s6wqyK', 0, 0, 'Quoc Tuan', '0254882681', 'tuanquocle@gmail.com', 1, NULL, NULL),
(000028, '$2y$10$KIGzsTdXMXBLup25fAXK7e/e/mUm.UsgNAnvWucvgePbxXHdktk8G', 0, 0, 'Le Quoc Tuan', '0254882681', 'admin@gmail.com', 1, NULL, NULL),
(000029, '$2y$10$S5.ckdp02sCWXVeDzC8dJ.deco5HGt9BemNrzgCOMh/NkNiuk.t7i', 0, 0, 'Viet', '0123456789', 'viet@gmail.com', 1, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookid`) USING BTREE,
  ADD KEY `fkIdx_37` (`nxbid`) USING BTREE,
  ADD KEY `fkIdx_40` (`categoryid`) USING BTREE;

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryid`) USING BTREE;

--
-- Chỉ mục cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD UNIQUE KEY `userid` (`userid`),
  ADD KEY `bookid` (`bookid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nxb`
--
ALTER TABLE `nxb`
  ADD PRIMARY KEY (`nxbid`) USING BTREE;

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`) USING BTREE,
  ADD KEY `fkIdx_58` (`userid`) USING BTREE;

--
-- Chỉ mục cho bảng `ordersdetails`
--
ALTER TABLE `ordersdetails`
  ADD KEY `fkIdx_87` (`orderid`) USING BTREE,
  ADD KEY `fkIdx_90` (`bookid`) USING BTREE;

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`) USING BTREE,
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `books`
--
ALTER TABLE `books`
  MODIFY `bookid` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryid` int(2) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nxb`
--
ALTER TABLE `nxb`
  MODIFY `nxbid` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `FK_37` FOREIGN KEY (`nxbid`) REFERENCES `nxb` (`nxbid`),
  ADD CONSTRAINT `FK_40` FOREIGN KEY (`categoryid`) REFERENCES `categories` (`categoryid`);

--
-- Các ràng buộc cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `danhgia_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`),
  ADD CONSTRAINT `danhgia_ibfk_2` FOREIGN KEY (`bookid`) REFERENCES `books` (`bookid`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `tk_usersid` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `ordersdetails`
--
ALTER TABLE `ordersdetails`
  ADD CONSTRAINT `FK_87` FOREIGN KEY (`orderid`) REFERENCES `orders` (`orderid`),
  ADD CONSTRAINT `FK_90` FOREIGN KEY (`bookid`) REFERENCES `books` (`bookid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
