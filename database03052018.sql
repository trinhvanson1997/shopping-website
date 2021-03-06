-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 03, 2018 lúc 05:51 PM
-- Phiên bản máy phục vụ: 10.1.30-MariaDB
-- Phiên bản PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`username`, `password`, `position`, `status`) VALUES
('aaaaa', 'aa', 'customer', 'locked'),
('duy', 'duy', 'customer', 'active'),
('hien', 'hien', 'customer', 'active'),
('hienbk', 'hienbk', 'manager', 'active'),
('hienmap', '123', 'employee', 'active'),
('khoe', 'khoe', 'manager', 'active'),
('nam', 'nam', 'customer', 'deny'),
('qq', 'q', 'employee', 'locked'),
('sang', 'sang', 'manager', 'active'),
('son', 'son', 'manager', 'active'),
('tuan', 'tuan', 'customer', 'waiting'),
('van', 'van', 'customer', 'waiting'),
('vananh', 'vananh', 'customer', 'active');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `total` double NOT NULL,
  `buy_date` datetime NOT NULL,
  `process_date` datetime DEFAULT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `emp_id`, `cus_id`, `total`, `buy_date`, `process_date`, `status`) VALUES
(14, 1, 2, 2335000, '2018-04-16 07:08:15', '2018-04-18 00:00:00', 'done'),
(15, 1, 2, 780000, '2018-04-16 07:13:19', '2018-04-18 00:00:00', 'done'),
(16, 1, 2, 1710000, '2018-04-16 07:13:54', NULL, 'destroy'),
(17, 1, 2, 500000, '2018-04-16 12:16:28', NULL, 'processing'),
(18, 1, 2, 9000000, '2018-04-16 15:38:13', '2018-05-02 15:06:12', 'done'),
(19, 1, 2, 780000, '2018-04-16 15:40:39', NULL, 'processing'),
(20, 1, 2, 1280000, '2018-04-16 15:46:06', '2018-05-02 15:10:47', 'done'),
(21, 1, 2, 780000, '2018-04-16 15:54:38', NULL, 'processing'),
(22, 1, 2, 11145000, '2018-04-16 16:21:53', NULL, 'processing'),
(23, 1, 2, 4155000, '2018-04-16 18:09:58', NULL, 'processing'),
(24, 1, 2, 1000000, '2018-04-16 19:32:39', '2018-05-03 17:42:55', 'done'),
(25, 1, 2, 780000, '2018-04-16 20:12:42', '2018-05-02 14:58:36', 'done'),
(26, 1, 3, 4780000, '2018-04-17 14:24:52', '2018-05-02 14:55:58', 'done'),
(27, 1, 2, 1000000, '2018-04-20 23:15:04', '2018-05-02 14:54:48', 'done'),
(28, 1, 2, 1000000, '2018-04-21 19:46:53', '2018-04-27 15:20:36', 'done'),
(29, 1, 2, 2000000, '2018-04-26 20:29:24', '2018-04-27 20:18:44', 'done');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_detail`
--

CREATE TABLE `bill_detail` (
  `bill_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `bill_detail`
--

INSERT INTO `bill_detail` (`bill_id`, `product_id`, `amount`) VALUES
(14, 2, 1),
(14, 1, 1),
(14, 3, 1),
(15, 2, 1),
(16, 6, 2),
(16, 8, 1),
(17, 6, 1),
(18, 1, 9),
(19, 2, 1),
(20, 2, 1),
(20, 6, 1),
(21, 2, 1),
(22, 2, 8),
(22, 3, 5),
(22, 8, 3),
(23, 2, 1),
(23, 3, 1),
(23, 5, 1),
(23, 8, 2),
(23, 1, 1),
(24, 1, 1),
(25, 2, 1),
(26, 1, 4),
(26, 2, 1),
(27, 1, 1),
(28, 1, 1),
(29, 1, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `name`, `birthday`, `address`, `phone`, `username`) VALUES
(2, 'hiền lê', '1997-05-15', 'tam phúc vĩnh tường ', '0123456', 'hien'),
(3, 'nguyễn ngọc duy', '1994-01-01', 'vĩnh tường', '01698899987', 'duy'),
(9, 'trinh', '2018-03-30', 'a', '222', 'nam'),
(11, 'trinh thi van anh', '1995-03-12', 'thon an lao', '664101', 'van'),
(12, 'Trinh Van ANh', '1995-05-15', 'vinh thinh vinh tuong vinh phuc', '097121265', 'vananh'),
(13, 'Tran Van Tuan', '2015-05-07', 'vinh thinh vinh tuong vinh phuc', '012456712', 'tuan');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `salary` double NOT NULL,
  `username` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `employee`
--

INSERT INTO `employee` (`id`, `name`, `birthday`, `address`, `phone`, `salary`, `username`) VALUES
(1, 'trinh van son', '1997-09-01', 'vinh thinh-vinh tuong', '0982747570', 1000000, 'son'),
(2, 'le thi thu hien', '2018-04-13', 'tam phuc', '0978386555', 1000000, 'hienmap'),
(3, 'a', '2018-04-23', 'a', '01245320', 111, 'qq'),
(4, 'aa', '2018-01-20', 'aa', '0163241544', 11111, 'aaaaa'),
(5, 'Tran Van Sang', '1997-01-01', 'a', '0123456789', 100000000, 'sang'),
(6, 'Ha Dinh Khoe', '1997-01-01', 'a', '0123456789', 100000000, 'khoe'),
(7, 'Nguyen Thuong Hien', '1997-01-01', 'a', '0123456789', 100000000, 'hienbk');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type_id` varchar(100) NOT NULL,
  `inventory` int(11) NOT NULL,
  `buy_price` double NOT NULL,
  `sell_price` double NOT NULL,
  `entry_date` datetime DEFAULT NULL,
  `brand` varchar(100) NOT NULL,
  `size` varchar(10) NOT NULL,
  `img` varchar(100) NOT NULL,
  `detail` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `type_id`, `inventory`, `buy_price`, `sell_price`, `entry_date`, `brand`, `size`, `img`, `detail`) VALUES
(1, 'Quần thoi trang', 'QNU', 0, 50000, 1000000, '2018-05-01 00:00:00', 'viettien', 'M', 'product1.jpg', 'được cảm nhận và thăng hoa từ chất lãng mạn và phóng khoáng, từ sự trẻ trung và hiện đại, từ sự năng động và nữ tính,... đó cũng chính là phong cách chủ đạo của thương hiệu.\r\n\r\nCác mẫu thiết kế của Váy đẹp Cần Thơ luôn mang đậm phong cách nhẹ nhàng và sự kết hợp hài hoà với các xu hướng mốt của năm đã tạo cho mỗi sản phẩm mang một nét cá tính riêng không bị trùng lặp.\r\n\r\nKhông chỉ đem đến cho khách hàng những sản phẩm mang phong cách và kiểu dáng độc đáo mà còn giới thiệu đến khách hàng những sản phẩm đạt chất lượng tốt nhất. Các mẫu thiết kế được kiểm duyệt kĩ càng từ khâu chọn chất liệu ,dựng mẫu và hoàn thiện. Chính vì thế , những sản phẩm đến tay khách hàng luôn là những sản phẩm tốt nhất. Với đội ngũ thiết kế được đào tạo chuyên nghiệp cùng sự kết hợp chặt chẽ và thống nhất của ban lãnh đạo , thương hiệu thời trang Váy đẹp Cần Thơ hy vọng sẽ đáp ứng được sự yêu mến và tin cậy của quý khách hàng về dòng sản phẩm thời trang chất lượng cao.'),
(2, 'Váy trắng 2 dây', 'ANU', 2, 500000, 780000, '2018-01-04 00:00:00', 'viettien', 'M S', 'product2.jpg', 'được cảm nhận và thăng hoa từ chất lãng mạn và phóng khoáng, từ sự trẻ trung và hiện đại, từ sự năng động và nữ tính,... đó cũng chính là phong cách chủ đạo của thương hiệu.\r\n\r\nCác mẫu thiết kế của Váy đẹp Cần Thơ luôn mang đậm phong cách nhẹ nhàng và sự kết hợp hài hoà với các xu hướng mốt của năm đã tạo cho mỗi sản phẩm mang một nét cá tính riêng không bị trùng lặp.\r\n\r\nKhông chỉ đem đến cho khách hàng những sản phẩm mang phong cách và kiểu dáng độc đáo mà còn giới thiệu đến khách hàng những sản phẩm đạt chất lượng tốt nhất. Các mẫu thiết kế được kiểm duyệt kĩ càng từ khâu chọn chất liệu ,dựng mẫu và hoàn thiện. Chính vì thế , những sản phẩm đến tay khách hàng luôn là những sản phẩm tốt nhất. Với đội ngũ thiết kế được đào tạo chuyên nghiệp cùng sự kết hợp chặt chẽ và thống nhất của ban lãnh đạo , thương hiệu thời trang Váy đẹp Cần Thơ hy vọng sẽ đáp ứng được sự yêu mến và tin cậy của quý khách hàng về dòng sản phẩm thời trang chất lượng cao.'),
(3, 'Váy xám ngắn', 'ANU', 94, 120000, 555000, '2017-01-04 00:00:00', 'adidas', 'S', 'product3.jpg', 'được cảm nhận và thăng hoa từ chất lãng mạn và phóng khoáng, từ sự trẻ trung và hiện đại, từ sự năng động và nữ tính,... đó cũng chính là phong cách chủ đạo của thương hiệu.\r\n\r\nCác mẫu thiết kế của Váy đẹp Cần Thơ luôn mang đậm phong cách nhẹ nhàng và sự kết hợp hài hoà với các xu hướng mốt của năm đã tạo cho mỗi sản phẩm mang một nét cá tính riêng không bị trùng lặp.\r\n\r\nKhông chỉ đem đến cho khách hàng những sản phẩm mang phong cách và kiểu dáng độc đáo mà còn giới thiệu đến khách hàng những sản phẩm đạt chất lượng tốt nhất. Các mẫu thiết kế được kiểm duyệt kĩ càng từ khâu chọn chất liệu ,dựng mẫu và hoàn thiện. Chính vì thế , những sản phẩm đến tay khách hàng luôn là những sản phẩm tốt nhất. Với đội ngũ thiết kế được đào tạo chuyên nghiệp cùng sự kết hợp chặt chẽ và thống nhất của ban lãnh đạo , thương hiệu thời trang Váy đẹp Cần Thơ hy vọng sẽ đáp ứng được sự yêu mến và tin cậy của quý khách hàng về dòng sản phẩm thời trang chất lượng cao.'),
(4, 'Áo sơ mi trắng', 'ANU', 15, 500000, 780000, '2018-01-04 00:00:00', 'viettien', 'L', 'product4.jpg', 'được cảm nhận và thăng hoa từ chất lãng mạn và phóng khoáng, từ sự trẻ trung và hiện đại, từ sự năng động và nữ tính,... đó cũng chính là phong cách chủ đạo của thương hiệu.\r\n\r\nCác mẫu thiết kế của Váy đẹp Cần Thơ luôn mang đậm phong cách nhẹ nhàng và sự kết hợp hài hoà với các xu hướng mốt của năm đã tạo cho mỗi sản phẩm mang một nét cá tính riêng không bị trùng lặp.\r\n\r\nKhông chỉ đem đến cho khách hàng những sản phẩm mang phong cách và kiểu dáng độc đáo mà còn giới thiệu đến khách hàng những sản phẩm đạt chất lượng tốt nhất. Các mẫu thiết kế được kiểm duyệt kĩ càng từ khâu chọn chất liệu ,dựng mẫu và hoàn thiện. Chính vì thế , những sản phẩm đến tay khách hàng luôn là những sản phẩm tốt nhất. Với đội ngũ thiết kế được đào tạo chuyên nghiệp cùng sự kết hợp chặt chẽ và thống nhất của ban lãnh đạo , thương hiệu thời trang Váy đẹp Cần Thơ hy vọng sẽ đáp ứng được sự yêu mến và tin cậy của quý khách hàng về dòng sản phẩm thời trang chất lượng cao.'),
(5, 'Áo công sở', 'ANU', 14, 250000, 400000, '2018-01-10 00:00:00', 'owen', 'XL', 'product5.jpg', 'được cảm nhận và thăng hoa từ chất lãng mạn và phóng khoáng, từ sự trẻ trung và hiện đại, từ sự năng động và nữ tính,... đó cũng chính là phong cách chủ đạo của thương hiệu.\r\n\r\nCác mẫu thiết kế của Váy đẹp Cần Thơ luôn mang đậm phong cách nhẹ nhàng và sự kết hợp hài hoà với các xu hướng mốt của năm đã tạo cho mỗi sản phẩm mang một nét cá tính riêng không bị trùng lặp.\r\n\r\nKhông chỉ đem đến cho khách hàng những sản phẩm mang phong cách và kiểu dáng độc đáo mà còn giới thiệu đến khách hàng những sản phẩm đạt chất lượng tốt nhất. Các mẫu thiết kế được kiểm duyệt kĩ càng từ khâu chọn chất liệu ,dựng mẫu và hoàn thiện. Chính vì thế , những sản phẩm đến tay khách hàng luôn là những sản phẩm tốt nhất. Với đội ngũ thiết kế được đào tạo chuyên nghiệp cùng sự kết hợp chặt chẽ và thống nhất của ban lãnh đạo , thương hiệu thời trang Váy đẹp Cần Thơ hy vọng sẽ đáp ứng được sự yêu mến và tin cậy của quý khách hàng về dòng sản phẩm thời trang chất lượng cao.'),
(6, 'Áo thun Đài Loan', 'ANU', 9, 120000, 500000, '2018-03-28 00:00:00', 'PhongFashion', 'S M L', 'product6.jpg', 'được cảm nhận và thăng hoa từ chất lãng mạn và phóng khoáng, từ sự trẻ trung và hiện đại, từ sự năng động và nữ tính,... đó cũng chính là phong cách chủ đạo của thương hiệu.\r\n\r\nCác mẫu thiết kế của Váy đẹp Cần Thơ luôn mang đậm phong cách nhẹ nhàng và sự kết hợp hài hoà với các xu hướng mốt của năm đã tạo cho mỗi sản phẩm mang một nét cá tính riêng không bị trùng lặp.\r\n\r\nKhông chỉ đem đến cho khách hàng những sản phẩm mang phong cách và kiểu dáng độc đáo mà còn giới thiệu đến khách hàng những sản phẩm đạt chất lượng tốt nhất. Các mẫu thiết kế được kiểm duyệt kĩ càng từ khâu chọn chất liệu ,dựng mẫu và hoàn thiện. Chính vì thế , những sản phẩm đến tay khách hàng luôn là những sản phẩm tốt nhất. Với đội ngũ thiết kế được đào tạo chuyên nghiệp cùng sự kết hợp chặt chẽ và thống nhất của ban lãnh đạo , thương hiệu thời trang Váy đẹp Cần Thơ hy vọng sẽ đáp ứng được sự yêu mến và tin cậy của quý khách hàng về dòng sản phẩm thời trang chất lượng cao.'),
(7, 'Kimono Tua Dua', 'ANU', 10, 120000, 400000, '2018-03-28 00:00:00', 'DaiLoan', 'L', 'product7.jpg', 'được cảm nhận và thăng hoa từ chất lãng mạn và phóng khoáng, từ sự trẻ trung và hiện đại, từ sự năng động và nữ tính,... đó cũng chính là phong cách chủ đạo của thương hiệu.\r\n\r\nCác mẫu thiết kế của Váy đẹp Cần Thơ luôn mang đậm phong cách nhẹ nhàng và sự kết hợp hài hoà với các xu hướng mốt của năm đã tạo cho mỗi sản phẩm mang một nét cá tính riêng không bị trùng lặp.\r\n\r\nKhông chỉ đem đến cho khách hàng những sản phẩm mang phong cách và kiểu dáng độc đáo mà còn giới thiệu đến khách hàng những sản phẩm đạt chất lượng tốt nhất. Các mẫu thiết kế được kiểm duyệt kĩ càng từ khâu chọn chất liệu ,dựng mẫu và hoàn thiện. Chính vì thế , những sản phẩm đến tay khách hàng luôn là những sản phẩm tốt nhất. Với đội ngũ thiết kế được đào tạo chuyên nghiệp cùng sự kết hợp chặt chẽ và thống nhất của ban lãnh đạo , thương hiệu thời trang Váy đẹp Cần Thơ hy vọng sẽ đáp ứng được sự yêu mến và tin cậy của quý khách hàng về dòng sản phẩm thời trang chất lượng cao.'),
(8, 'Áo khoác ren', 'ANU', 5, 120000, 710000, '2018-03-28 00:00:00', 'AnhKhoi', 'S', 'product8.jpg', 'được cảm nhận và thăng hoa từ chất lãng mạn và phóng khoáng, từ sự trẻ trung và hiện đại, từ sự năng động và nữ tính,... đó cũng chính là phong cách chủ đạo của thương hiệu.\r\n\r\nCác mẫu thiết kế của Váy đẹp Cần Thơ luôn mang đậm phong cách nhẹ nhàng và sự kết hợp hài hoà với các xu hướng mốt của năm đã tạo cho mỗi sản phẩm mang một nét cá tính riêng không bị trùng lặp.\r\n\r\nKhông chỉ đem đến cho khách hàng những sản phẩm mang phong cách và kiểu dáng độc đáo mà còn giới thiệu đến khách hàng những sản phẩm đạt chất lượng tốt nhất. Các mẫu thiết kế được kiểm duyệt kĩ càng từ khâu chọn chất liệu ,dựng mẫu và hoàn thiện. Chính vì thế , những sản phẩm đến tay khách hàng luôn là những sản phẩm tốt nhất. Với đội ngũ thiết kế được đào tạo chuyên nghiệp cùng sự kết hợp chặt chẽ và thống nhất của ban lãnh đạo , thương hiệu thời trang Váy đẹp Cần Thơ hy vọng sẽ đáp ứng được sự yêu mến và tin cậy của quý khách hàng về dòng sản phẩm thời trang chất lượng cao.'),
(9, 'Áo so mi nu', 'ANU', 15, 120000, 505000, '2018-03-29 00:00:00', 'Owen', 'M', 'product9.jpg', 'được cảm nhận và thăng hoa từ chất lãng mạn và phóng khoáng, từ sự trẻ trung và hiện đại, từ sự năng động và nữ tính,... đó cũng chính là phong cách chủ đạo của thương hiệu.\r\n\r\nCác mẫu thiết kế của Váy đẹp Cần Thơ luôn mang đậm phong cách nhẹ nhàng và sự kết hợp hài hoà với các xu hướng mốt của năm đã tạo cho mỗi sản phẩm mang một nét cá tính riêng không bị trùng lặp.\r\n\r\nKhông chỉ đem đến cho khách hàng những sản phẩm mang phong cách và kiểu dáng độc đáo mà còn giới thiệu đến khách hàng những sản phẩm đạt chất lượng tốt nhất. Các mẫu thiết kế được kiểm duyệt kĩ càng từ khâu chọn chất liệu ,dựng mẫu và hoàn thiện. Chính vì thế , những sản phẩm đến tay khách hàng luôn là những sản phẩm tốt nhất. Với đội ngũ thiết kế được đào tạo chuyên nghiệp cùng sự kết hợp chặt chẽ và thống nhất của ban lãnh đạo , thương hiệu thời trang Váy đẹp Cần Thơ hy vọng sẽ đáp ứng được sự yêu mến và tin cậy của quý khách hàng về dòng sản phẩm thời trang chất lượng cao.'),
(10, 'Áo quý tộc đen', 'ANU', 17, 220000, 650000, '2018-03-29 00:00:00', 'AIII', 'M', 'product10.jpg', 'được cảm nhận và thăng hoa từ chất lãng mạn và phóng khoáng, từ sự trẻ trung và hiện đại, từ sự năng động và nữ tính,... đó cũng chính là phong cách chủ đạo của thương hiệu.\r\n\r\nCác mẫu thiết kế của Váy đẹp Cần Thơ luôn mang đậm phong cách nhẹ nhàng và sự kết hợp hài hoà với các xu hướng mốt của năm đã tạo cho mỗi sản phẩm mang một nét cá tính riêng không bị trùng lặp.\r\n\r\nKhông chỉ đem đến cho khách hàng những sản phẩm mang phong cách và kiểu dáng độc đáo mà còn giới thiệu đến khách hàng những sản phẩm đạt chất lượng tốt nhất. Các mẫu thiết kế được kiểm duyệt kĩ càng từ khâu chọn chất liệu ,dựng mẫu và hoàn thiện. Chính vì thế , những sản phẩm đến tay khách hàng luôn là những sản phẩm tốt nhất. Với đội ngũ thiết kế được đào tạo chuyên nghiệp cùng sự kết hợp chặt chẽ và thống nhất của ban lãnh đạo , thương hiệu thời trang Váy đẹp Cần Thơ hy vọng sẽ đáp ứng được sự yêu mến và tin cậy của quý khách hàng về dòng sản phẩm thời trang chất lượng cao.'),
(11, 'Áo len trắng', 'ANU', 27, 120000, 310000, '2018-03-29 00:00:00', 'iZZ', 'S L', 'product11.jpg', 'được cảm nhận và thăng hoa từ chất lãng mạn và phóng khoáng, từ sự trẻ trung và hiện đại, từ sự năng động và nữ tính,... đó cũng chính là phong cách chủ đạo của thương hiệu.\r\n\r\nCác mẫu thiết kế của Váy đẹp Cần Thơ luôn mang đậm phong cách nhẹ nhàng và sự kết hợp hài hoà với các xu hướng mốt của năm đã tạo cho mỗi sản phẩm mang một nét cá tính riêng không bị trùng lặp.\r\n\r\nKhông chỉ đem đến cho khách hàng những sản phẩm mang phong cách và kiểu dáng độc đáo mà còn giới thiệu đến khách hàng những sản phẩm đạt chất lượng tốt nhất. Các mẫu thiết kế được kiểm duyệt kĩ càng từ khâu chọn chất liệu ,dựng mẫu và hoàn thiện. Chính vì thế , những sản phẩm đến tay khách hàng luôn là những sản phẩm tốt nhất. Với đội ngũ thiết kế được đào tạo chuyên nghiệp cùng sự kết hợp chặt chẽ và thống nhất của ban lãnh đạo , thương hiệu thời trang Váy đẹp Cần Thơ hy vọng sẽ đáp ứng được sự yêu mến và tin cậy của quý khách hàng về dòng sản phẩm thời trang chất lượng cao.'),
(12, 'Combo váy thời trang', 'ANU', 17, 220000, 750000, '2018-03-29 00:00:00', 'EST', 'M L', 'product12.jpg', 'được cảm nhận và thăng hoa từ chất lãng mạn và phóng khoáng, từ sự trẻ trung và hiện đại, từ sự năng động và nữ tính,... đó cũng chính là phong cách chủ đạo của thương hiệu.\r\n\r\nCác mẫu thiết kế của Váy đẹp Cần Thơ luôn mang đậm phong cách nhẹ nhàng và sự kết hợp hài hoà với các xu hướng mốt của năm đã tạo cho mỗi sản phẩm mang một nét cá tính riêng không bị trùng lặp.\r\n\r\nKhông chỉ đem đến cho khách hàng những sản phẩm mang phong cách và kiểu dáng độc đáo mà còn giới thiệu đến khách hàng những sản phẩm đạt chất lượng tốt nhất. Các mẫu thiết kế được kiểm duyệt kĩ càng từ khâu chọn chất liệu ,dựng mẫu và hoàn thiện. Chính vì thế , những sản phẩm đến tay khách hàng luôn là những sản phẩm tốt nhất. Với đội ngũ thiết kế được đào tạo chuyên nghiệp cùng sự kết hợp chặt chẽ và thống nhất của ban lãnh đạo , thương hiệu thời trang Váy đẹp Cần Thơ hy vọng sẽ đáp ứng được sự yêu mến và tin cậy của quý khách hàng về dòng sản phẩm thời trang chất lượng cao.'),
(13, 'Áo da cam', 'ANU', 77, 100000, 200000, '2018-04-18 00:00:00', 'unknown', 'M L', 'product13.jpg', 'được cảm nhận và thăng hoa từ chất lãng mạn và phóng khoáng, từ sự trẻ trung và hiện đại, từ sự năng động và nữ tính,... đó cũng chính là phong cách chủ đạo của thương hiệu.\r\n\r\nCác mẫu thiết kế của Váy đẹp Cần Thơ luôn mang đậm phong cách nhẹ nhàng và sự kết hợp hài hoà với các xu hướng mốt của năm đã tạo cho mỗi sản phẩm mang một nét cá tính riêng không bị trùng lặp.\r\n\r\nKhông chỉ đem đến cho khách hàng những sản phẩm mang phong cách và kiểu dáng độc đáo mà còn giới thiệu đến khách hàng những sản phẩm đạt chất lượng tốt nhất. Các mẫu thiết kế được kiểm duyệt kĩ càng từ khâu chọn chất liệu ,dựng mẫu và hoàn thiện. Chính vì thế , những sản phẩm đến tay khách hàng luôn là những sản phẩm tốt nhất. Với đội ngũ thiết kế được đào tạo chuyên nghiệp cùng sự kết hợp chặt chẽ và thống nhất của ban lãnh đạo , thương hiệu thời trang Váy đẹp Cần Thơ hy vọng sẽ đáp ứng được sự yêu mến và tin cậy của quý khách hàng về dòng sản phẩm thời trang chất lượng cao.'),
(14, 'Áo kiểu tay bo', 'ANU', 77, 100000, 400000, '2018-04-03 00:00:00', 'unknown', 'M L', 'product14.jpg', 'được cảm nhận và thăng hoa từ chất lãng mạn và phóng khoáng, từ sự trẻ trung và hiện đại, từ sự năng động và nữ tính,... đó cũng chính là phong cách chủ đạo của thương hiệu.\r\n\r\nCác mẫu thiết kế của Váy đẹp Cần Thơ luôn mang đậm phong cách nhẹ nhàng và sự kết hợp hài hoà với các xu hướng mốt của năm đã tạo cho mỗi sản phẩm mang một nét cá tính riêng không bị trùng lặp.\r\n\r\nKhông chỉ đem đến cho khách hàng những sản phẩm mang phong cách và kiểu dáng độc đáo mà còn giới thiệu đến khách hàng những sản phẩm đạt chất lượng tốt nhất. Các mẫu thiết kế được kiểm duyệt kĩ càng từ khâu chọn chất liệu ,dựng mẫu và hoàn thiện. Chính vì thế , những sản phẩm đến tay khách hàng luôn là những sản phẩm tốt nhất. Với đội ngũ thiết kế được đào tạo chuyên nghiệp cùng sự kết hợp chặt chẽ và thống nhất của ban lãnh đạo , thương hiệu thời trang Váy đẹp Cần Thơ hy vọng sẽ đáp ứng được sự yêu mến và tin cậy của quý khách hàng về dòng sản phẩm thời trang chất lượng cao.'),
(15, 'Sơ mi nam trơn 2018', 'ANA', 70, 100000, 400000, '2018-04-02 00:00:00', 'unknown', 'M L', 'product15.jpg', 'được cảm nhận và thăng hoa từ chất lãng mạn và phóng khoáng, từ sự trẻ trung và hiện đại, từ sự năng động và nữ tính,... đó cũng chính là phong cách chủ đạo của thương hiệu.\r\n\r\nCác mẫu thiết kế của Váy đẹp Cần Thơ luôn mang đậm phong cách nhẹ nhàng và sự kết hợp hài hoà với các xu hướng mốt của năm đã tạo cho mỗi sản phẩm mang một nét cá tính riêng không bị trùng lặp.\r\n\r\nKhông chỉ đem đến cho khách hàng những sản phẩm mang phong cách và kiểu dáng độc đáo mà còn giới thiệu đến khách hàng những sản phẩm đạt chất lượng tốt nhất. Các mẫu thiết kế được kiểm duyệt kĩ càng từ khâu chọn chất liệu ,dựng mẫu và hoàn thiện. Chính vì thế , những sản phẩm đến tay khách hàng luôn là những sản phẩm tốt nhất. Với đội ngũ thiết kế được đào tạo chuyên nghiệp cùng sự kết hợp chặt chẽ và thống nhất của ban lãnh đạo , thương hiệu thời trang Váy đẹp Cần Thơ hy vọng sẽ đáp ứng được sự yêu mến và tin cậy của quý khách hàng về dòng sản phẩm thời trang chất lượng cao.'),
(16, 'Áo sơ mi nam họa tiết HQ', 'ANA', 77, 100000, 400000, '2018-04-04 00:00:00', 'unknown', 'M L', 'product16.jpg', 'được cảm nhận và thăng hoa từ chất lãng mạn và phóng khoáng, từ sự trẻ trung và hiện đại, từ sự năng động và nữ tính,... đó cũng chính là phong cách chủ đạo của thương hiệu.\r\n\r\nCác mẫu thiết kế của Váy đẹp Cần Thơ luôn mang đậm phong cách nhẹ nhàng và sự kết hợp hài hoà với các xu hướng mốt của năm đã tạo cho mỗi sản phẩm mang một nét cá tính riêng không bị trùng lặp.\r\n\r\nKhông chỉ đem đến cho khách hàng những sản phẩm mang phong cách và kiểu dáng độc đáo mà còn giới thiệu đến khách hàng những sản phẩm đạt chất lượng tốt nhất. Các mẫu thiết kế được kiểm duyệt kĩ càng từ khâu chọn chất liệu ,dựng mẫu và hoàn thiện. Chính vì thế , những sản phẩm đến tay khách hàng luôn là những sản phẩm tốt nhất. Với đội ngũ thiết kế được đào tạo chuyên nghiệp cùng sự kết hợp chặt chẽ và thống nhất của ban lãnh đạo , thương hiệu thời trang Váy đẹp Cần Thơ hy vọng sẽ đáp ứng được sự yêu mến và tin cậy của quý khách hàng về dòng sản phẩm thời trang chất lượng cao.'),
(17, 'Quần viền sọc', 'QNU', 77, 100000, 300000, '2018-04-24 00:00:00', 'unknown', 'M L', 'product18.jpg', 'được cảm nhận và thăng hoa từ chất lãng mạn và phóng khoáng, từ sự trẻ trung và hiện đại, từ sự năng động và nữ tính,... đó cũng chính là phong cách chủ đạo của thương hiệu.\r\n\r\nCác mẫu thiết kế của Váy đẹp Cần Thơ luôn mang đậm phong cách nhẹ nhàng và sự kết hợp hài hoà với các xu hướng mốt của năm đã tạo cho mỗi sản phẩm mang một nét cá tính riêng không bị trùng lặp.\r\n\r\nKhông chỉ đem đến cho khách hàng những sản phẩm mang phong cách và kiểu dáng độc đáo mà còn giới thiệu đến khách hàng những sản phẩm đạt chất lượng tốt nhất. Các mẫu thiết kế được kiểm duyệt kĩ càng từ khâu chọn chất liệu ,dựng mẫu và hoàn thiện. Chính vì thế , những sản phẩm đến tay khách hàng luôn là những sản phẩm tốt nhất. Với đội ngũ thiết kế được đào tạo chuyên nghiệp cùng sự kết hợp chặt chẽ và thống nhất của ban lãnh đạo , thương hiệu thời trang Váy đẹp Cần Thơ hy vọng sẽ đáp ứng được sự yêu mến và tin cậy của quý khách hàng về dòng sản phẩm thời trang chất lượng cao.'),
(18, 'Quần ống rộng', 'QNU', 12, 100000, 400000, '2018-04-10 00:00:00', 'unknown', 'M L', 'product17.jpg', 'được cảm nhận và thăng hoa từ chất lãng mạn và phóng khoáng, từ sự trẻ trung và hiện đại, từ sự năng động và nữ tính,... đó cũng chính là phong cách chủ đạo của thương hiệu.\r\n\r\nCác mẫu thiết kế của Váy đẹp Cần Thơ luôn mang đậm phong cách nhẹ nhàng và sự kết hợp hài hoà với các xu hướng mốt của năm đã tạo cho mỗi sản phẩm mang một nét cá tính riêng không bị trùng lặp.\r\n\r\nKhông chỉ đem đến cho khách hàng những sản phẩm mang phong cách và kiểu dáng độc đáo mà còn giới thiệu đến khách hàng những sản phẩm đạt chất lượng tốt nhất. Các mẫu thiết kế được kiểm duyệt kĩ càng từ khâu chọn chất liệu ,dựng mẫu và hoàn thiện. Chính vì thế , những sản phẩm đến tay khách hàng luôn là những sản phẩm tốt nhất. Với đội ngũ thiết kế được đào tạo chuyên nghiệp cùng sự kết hợp chặt chẽ và thống nhất của ban lãnh đạo , thương hiệu thời trang Váy đẹp Cần Thơ hy vọng sẽ đáp ứng được sự yêu mến và tin cậy của quý khách hàng về dòng sản phẩm thời trang chất lượng cao.'),
(19, 'Quần short jean nam đơn giản', 'QNA', 77, 100000, 400000, '2018-04-07 00:00:00', 'unknown', 'M L', 'product19.jpg', 'được cảm nhận và thăng hoa từ chất lãng mạn và phóng khoáng, từ sự trẻ trung và hiện đại, từ sự năng động và nữ tính,... đó cũng chính là phong cách chủ đạo của thương hiệu.\r\n\r\nCác mẫu thiết kế của Váy đẹp Cần Thơ luôn mang đậm phong cách nhẹ nhàng và sự kết hợp hài hoà với các xu hướng mốt của năm đã tạo cho mỗi sản phẩm mang một nét cá tính riêng không bị trùng lặp.\r\n\r\nKhông chỉ đem đến cho khách hàng những sản phẩm mang phong cách và kiểu dáng độc đáo mà còn giới thiệu đến khách hàng những sản phẩm đạt chất lượng tốt nhất. Các mẫu thiết kế được kiểm duyệt kĩ càng từ khâu chọn chất liệu ,dựng mẫu và hoàn thiện. Chính vì thế , những sản phẩm đến tay khách hàng luôn là những sản phẩm tốt nhất. Với đội ngũ thiết kế được đào tạo chuyên nghiệp cùng sự kết hợp chặt chẽ và thống nhất của ban lãnh đạo , thương hiệu thời trang Váy đẹp Cần Thơ hy vọng sẽ đáp ứng được sự yêu mến và tin cậy của quý khách hàng về dòng sản phẩm thời trang chất lượng cao.'),
(20, 'Quần Kaki trắng', 'QNA', 77, 100000, 500000, '2018-04-18 00:00:00', 'unknown', 'M L', 'product20.jpg', 'được cảm nhận và thăng hoa từ chất lãng mạn và phóng khoáng, từ sự trẻ trung và hiện đại, từ sự năng động và nữ tính,... đó cũng chính là phong cách chủ đạo của thương hiệu.\r\n\r\nCác mẫu thiết kế của Váy đẹp Cần Thơ luôn mang đậm phong cách nhẹ nhàng và sự kết hợp hài hoà với các xu hướng mốt của năm đã tạo cho mỗi sản phẩm mang một nét cá tính riêng không bị trùng lặp.\r\n\r\nKhông chỉ đem đến cho khách hàng những sản phẩm mang phong cách và kiểu dáng độc đáo mà còn giới thiệu đến khách hàng những sản phẩm đạt chất lượng tốt nhất. Các mẫu thiết kế được kiểm duyệt kĩ càng từ khâu chọn chất liệu ,dựng mẫu và hoàn thiện. Chính vì thế , những sản phẩm đến tay khách hàng luôn là những sản phẩm tốt nhất. Với đội ngũ thiết kế được đào tạo chuyên nghiệp cùng sự kết hợp chặt chẽ và thống nhất của ban lãnh đạo , thương hiệu thời trang Váy đẹp Cần Thơ hy vọng sẽ đáp ứng được sự yêu mến và tin cậy của quý khách hàng về dòng sản phẩm thời trang chất lượng cao.'),
(21, 'a', 'ANA', 1, 1, 1, '2018-01-01 12:12:12', 'm', 'm', 'product1.jpg', 'được cảm nhận và thăng hoa từ chất lãng mạn và phóng khoáng, từ sự trẻ trung và hiện đại, từ sự năng động và nữ tính,... đó cũng chính là phong cách chủ đạo của thương hiệu.\r\n\r\nCác mẫu thiết kế của Váy đẹp Cần Thơ luôn mang đậm phong cách nhẹ nhàng và sự kết hợp hài hoà với các xu hướng mốt của năm đã tạo cho mỗi sản phẩm mang một nét cá tính riêng không bị trùng lặp.\r\n\r\nKhông chỉ đem đến cho khách hàng những sản phẩm mang phong cách và kiểu dáng độc đáo mà còn giới thiệu đến khách hàng những sản phẩm đạt chất lượng tốt nhất. Các mẫu thiết kế được kiểm duyệt kĩ càng từ khâu chọn chất liệu ,dựng mẫu và hoàn thiện. Chính vì thế , những sản phẩm đến tay khách hàng luôn là những sản phẩm tốt nhất. Với đội ngũ thiết kế được đào tạo chuyên nghiệp cùng sự kết hợp chặt chẽ và thống nhất của ban lãnh đạo , thương hiệu thời trang Váy đẹp Cần Thơ hy vọng sẽ đáp ứng được sự yêu mến và tin cậy của quý khách hàng về dòng sản phẩm thời trang chất lượng cao.'),
(22, 'san pham 123', 'ANU', 11, 111, 1111, '2018-01-01 12:12:12', 'abc', 'M S', 'product1.jpg', 'dang hot hien nay');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_type`
--

CREATE TABLE `product_type` (
  `id` varchar(100) NOT NULL,
  `type_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product_type`
--

INSERT INTO `product_type` (`id`, `type_name`) VALUES
('ANA', 'Áo Nam'),
('ANU', 'Áo Nữ'),
('QNA', 'Quần Nam'),
('QNU', 'Quần Nữ');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_id` (`emp_id`),
  ADD KEY `cus_id` (`cus_id`);

--
-- Chỉ mục cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD KEY `bill_id` (`bill_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Chỉ mục cho bảng `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_id` (`type_id`);

--
-- Chỉ mục cho bảng `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`id`),
  ADD CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`id`);

--
-- Các ràng buộc cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD CONSTRAINT `bill_detail_ibfk_1` FOREIGN KEY (`bill_id`) REFERENCES `bill` (`id`),
  ADD CONSTRAINT `bill_detail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`username`) REFERENCES `account` (`username`);

--
-- Các ràng buộc cho bảng `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`username`) REFERENCES `account` (`username`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `product_type` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
