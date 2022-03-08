-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 17, 2021 lúc 06:25 AM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `php1120e_nhom2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `phone`, `level`, `avatar`, `created_at`, `update_at`) VALUES
(1, 'Sơn', 'vuson041995@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0929557336', 1, 'assets/img/user/16246397611624612052user-1.jpg', '2021-04-20 00:00:00', '2021-04-20 00:00:00'),
(11, 'Phúc', 'abc@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '0123456789', 1, 'assets/img/user/1624639257user-2.jpg', '2021-06-02 00:00:00', '2021-06-02 00:00:00'),
(65, 'Minh Đức', 'abc@gmail.com', '3822f64474d20ffd28551a30e12aa482', '0123456789', 1, 'assets/img/user/1624639269user-3.jpg', '2021-06-07 00:00:00', '2021-06-07 00:00:00'),
(70, 'Đoàn', 'Doannk@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', '0327160922', 0, 'assets/img/user/1624639792user-2.jpg', '2021-06-25 00:00:00', '2021-06-25 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `articles`
--

INSERT INTO `articles` (`id`, `menu_id`, `admin_id`, `slug`, `title`, `description`, `content`, `image`, `created_at`, `updated_at`) VALUES
(29, 0, 65, '', 'LASVIT – KHI SÁNH SÁNG TRỞ THÀNH NGHỆ THUẬT XOA DỊU TÂM TRÍ', 'Một dự án mới vô cùng độc đáo của thương hiệu Lasvit -CH Séc. Hệ đèn chiếu sáng tại sảnh Trung tâm Y tế Burjeel được gọi là “Nghệ thuật chữa bệnh” có thể vẽ hình ảnh vào hồ cát bên dưới', '<p>Một dự &aacute;n mới v&ocirc; c&ugrave;ng độc đ&aacute;o của thương hiệu Lasvit -CH S&eacute;c. Hệ đ&egrave;n chiếu s&aacute;ng tại sảnh Trung t&acirc;m Y tế Burjeel được gọi l&agrave; &ldquo;Nghệ thuật chữa bệnh&rdquo; c&oacute; thể vẽ h&igrave;nh ảnh v&agrave;o hồ c&aacute;t b&ecirc;n dưới. H&atilde;y nh&igrave;n v&agrave;o vi&ecirc;n ngọc khổng lồ của một t&aacute;c phẩm nghệ thuật, tĩnh tại v&agrave; tập trung v&agrave;o vẻ đẹp tao nh&atilde; của n&oacute;. Một ph&aacute;t minh được truyền cảm hứng từ &yacute; tưởng cổ đại, C&ocirc;ng tr&igrave;nh độc quyền cao 16 m&eacute;t n&agrave;y thu h&uacute;t sự ch&uacute; &yacute; của kh&aacute;ch tham quan với t&iacute;nh thẩm mỹ v&agrave; chức năng động học đặc biệt của n&oacute;. 300 ống pha l&ecirc; kết hợp với nhau tạo h&igrave;nh đầu b&uacute;t l&ocirc;ng v&ocirc; c&ugrave;ng nghệ thuật v&agrave; tinh xảo. Mỗi th&agrave;nh phần k&iacute;nh c&oacute; nguồn s&aacute;ng ri&ecirc;ng, v&igrave; vậy cả phần lắp đặt v&agrave; bản vẽ b&ecirc;n dưới n&oacute; đều được chiếu s&aacute;ng đầy đủ. Con lắc c&aacute;t C&oacute; ba động cơ cho ph&eacute;p đ&egrave;n chiếu s&aacute;ng c&oacute; thể viết chữ tr&ecirc;n c&aacute;t một c&aacute;ch s&aacute;ng tạo.</p>\r\n', 'assets/img/blog/1624682006den.jpg', '2021-06-26 11:33:26', '2021-06-26 11:33:26'),
(30, 0, 11, '', 'BAXTER KẾT HỢP CÙNG VỚI WORLD OF MCINTOSH', 'Tin tức mới nhất của Baxter, họ vừa có sự kết hợp tuyệt vời cùng với công ty âm thanh ‘World of McIntosh” để tạo ra không gian thưởng thức âm nhạc có 1 không 2 tọa lạc tại trung tâm Thành phố New York', '<p>Tin tức mới nhất của Baxter, họ vừa c&oacute; sự kết hợp tuyệt vời c&ugrave;ng với c&ocirc;ng ty &acirc;m thanh &lsquo;World of McIntosh&rdquo; để tạo ra kh&ocirc;ng gian thưởng thức &acirc;m nhạc c&oacute; 1 kh&ocirc;ng 2 tọa lạc tại trung t&acirc;m Th&agrave;nh phố New York. Với mục ti&ecirc;u giới thiệu c&aacute;c dịch vụ &acirc;m thanh mới nhất của McIntosh Group v&agrave;o th&aacute;ng 10 năm nay, ng&ocirc;i nh&agrave; phố được trang bị đồ nội thất sang trọng của &Yacute;, BAXTER được thiết kế như một kh&ocirc;ng gian đương đại ph&ugrave; hợp nhất để trải nghiệm &acirc;m thanh c&ugrave;ng McIntosh, n&oacute; l&agrave;m sống động lịch sử &acirc;m nhạc của Tập đo&agrave;n Mcintosh v&agrave; với những t&aacute;c phẩm đặc trưng của Baxter tạo n&ecirc;n kh&ocirc;ng gian &acirc;m nhạc v&agrave; phong c&aacute;ch nội thất kết hợp nhuần nhuyễn. Sự gắn kết gợi l&ecirc;n tinh thần của nước &Yacute;, đồng điệu với &acirc;m nhạc du dương, l&agrave; những m&oacute;n đồ nội thất bọc da tinh tế với t&ocirc;ng m&agrave;u trầm. C&ocirc;ng việc thủ c&ocirc;ng tạo n&ecirc;n &acirc;m thanh cao cấp của McIntosh song song với đội ngũ c&aacute;c nh&agrave; thiết kế t&agrave;i năng của Baxter v&agrave; thể hiện cam kết mang đến chất lượng sống đẳng cấp nhất. Bộ sưu tập của Baxter được trưng b&agrave;y trong nh&agrave; phố World of McIntosh sẽ cho ph&eacute;p những người y&ecirc;u th&iacute;ch thế giới nội thất v&agrave; thiết kế chạm v&agrave;o, xem v&agrave; trải nghiệm những &acirc;m thanh v&agrave; đồ nội thất tốt nhất trong c&ugrave;ng một kh&ocirc;ng gian.</p>\r\n', 'assets/img/blog/1624682123WOM2020_17.jpg', '2021-06-26 11:35:23', '2021-06-26 11:35:23'),
(32, 0, 1, '', 'WALTER KNOLL- GIỚI THIỆU BỘ SƯU TẬP SẢN PHẨM MỚI- GHẾ SHERU', 'Walter Knoll vừa cho ra mắt sản phẩm mới ghế Sheru. Một thiết kế tối giãn mang lại sự thoải mái tối đa', '<p>GHẾ SHERU NHẸ T&Ecirc;NH NHƯ GI&Oacute;</p>\r\n\r\n<p>Walter Knoll vừa cho ra mắt sản phẩm mới ghế Sheru. Một thiết kế tối gi&atilde;n mang lại sự thoải m&aacute;i tối đa. Sheru, nghĩa l&agrave; &ldquo;vỏ&rdquo; trong tiếng Nhật, thể hiện vẻ đẹp trong thiết kế v&agrave; sự xuất sắc trong nghề thủ c&ocirc;ng. Kiểu d&aacute;ng được nghi&ecirc;n cứu nh&acirc;n học, thiết kế cực mỏng đ&atilde; được c&aacute;ch t&acirc;n từ mọi g&oacute;c độ, để tạo ra một trải nghiệm mới. Khung lưng v&agrave; mặt ngồi của ghế c&oacute; c&aacute;c khe hở gi&uacute;p kh&ocirc;ng kh&iacute; m&aacute;t lưu th&ocirc;ng tự do khắp cơ thể. Một chiếc ghế mỏng nhẹ v&agrave; v&ocirc; c&ugrave;ng thoải m&aacute;i l&agrave; những ưu điểm của chiếc ghế Sheru.</p>\r\n', 'assets/img/blog/1624682402118653281_314145339920540_3083428568386729914_n.jpg', '2021-06-26 11:40:02', '2021-06-26 11:40:02'),
(33, 0, 1, '', 'WALTER KNOLL – SẮC TÍM LÊN NGÔI', 'Thương hiệu Walter Knoll  vừa thay áo mới cho showroom của họ tại Herrnberg (Đức). Cùng với sắc tím đang lên ngôi từ khắp các sàn diễn thời trang cho đến xu hướng nội thất', '<p>Thương hiệu Walter Knoll&nbsp; vừa thay &aacute;o mới cho showroom của họ tại Herrnberg (Đức). C&ugrave;ng với sắc t&iacute;m đang l&ecirc;n ng&ocirc;i từ khắp c&aacute;c s&agrave;n diễn thời trang cho đến xu hướng nội thất, Walter Knoll kh&ocirc;ng thể bỏ qua cơ hội n&agrave;y để l&agrave;m mới khu trưng b&agrave;y với những m&agrave;u sắc nhẹ nh&agrave;ng, tươi mới c&ugrave;ng đa sắc t&iacute;m một c&aacute;ch h&agrave;i h&ograve;a. Phương ch&acirc;m của Walter Knoll l&agrave; thiết kế đi c&ugrave;ng thời đại l&agrave; thiết kế bền vững v&agrave; hiện đại. Kh&ocirc;ng gian sống của bạn sẽ trở n&ecirc;n mềm mại, thu h&uacute;t v&agrave; c&oacute; chiều s&acirc;u nhờ v&agrave;o c&aacute;ch bố tr&iacute; kh&ocirc;ng gian v&agrave; m&agrave;u sắc hợp l&yacute;. H&atilde;y c&ugrave;ng kh&aacute;m ph&aacute; h&igrave;nh ảnh mới lạ tại showroom của Walter Knoll nh&eacute;.</p>\r\n', 'assets/img/blog/1624682476Walter_Knoll-Showroom-Herrenberg_02.jpg', '2021-06-26 11:41:16', '2021-06-26 11:41:16'),
(36, 0, 11, '', 'BAXTER- SOFA PANAMA BOLD THOẢI MÁI VÔ TẬN', 'Sofa Panama Bold ra mắt năm 2015, một trong những thiết kế đặc biệt của cô Paola Navone dành cho bộ sưu tập nội thất tiêu biểu của Baxter Italy', '<p>Sofa Panama Bold ra mắt năm 2015, một trong những thiết kế đặc biệt của c&ocirc; Paola Navone d&agrave;nh cho bộ sưu tập nội thất ti&ecirc;u biểu của Baxter Italy. Sofa được thiết kế mở, với lung tựa l&agrave; gối rời bạn c&oacute; thể đặt ở bất k&igrave; hướng n&agrave;o m&agrave; bạn cảm thấy thoải m&aacute;i nhất. Bạn c&oacute; thể nằm, ngồi tựa một c&aacute;ch thoải m&aacute;i nhất ở bất k&igrave; kh&ocirc;ng gian trong nh&agrave; hoặc ngo&agrave;i trời t&ugrave;y theo chất liệu da được lựa chọn.&nbsp;</p>\r\n', 'assets/img/blog/16246948443ed09f35815123.5704ba73b0f58.jpg', '2021-06-26 15:07:24', '2021-06-26 15:07:24'),
(37, 0, 11, '', 'LASVIT – NHỮNG CHIẾC LÔNG HỒNG TẠI LA PRAILLE, THỤY SĨ', 'Bạn đã nghe về những chiếc lông hồng? Bạn đã từng chơi trò đập gối và những chiếc lông vũ được tung lên trong không trung và nhẹ nhàng rơi xuống một cách lả lơi.', '<p>Bạn đ&atilde; nghe về những chiếc l&ocirc;ng hồng? Bạn đ&atilde; từng chơi tr&ograve; đập gối v&agrave; những chiếc l&ocirc;ng vũ được tung l&ecirc;n trong kh&ocirc;ng trung v&agrave; nhẹ nh&agrave;ng rơi xuống một c&aacute;ch lả lơi. Thật m&agrave;u nhiệm. Đ&oacute; l&agrave; nguồn cảm hứng của nh&agrave; thiết kế Ludmila Ilkova. C&ocirc; đ&atilde; biến h&oacute;a &yacute; tưởng của m&igrave;nh, những mảnh thủy tinh tưởng chừng như trong suốt, c&oacute; sức nặng lại trở n&ecirc;n bay bổng, lơ lửng trong kh&ocirc;ng gian một c&aacute;ch lạ thường. Khu shopping mall La Praille, Thụy Sĩ trở n&ecirc;n v&ocirc; c&ugrave;ng h&uacute;t mắt c&ugrave;ng với d&agrave;n đ&egrave;n l&ocirc;ng vũ tại trung t&acirc;m. Với 236 mảnh gh&eacute;p thủy tinh h&igrave;nh l&ocirc;ng vũ, cả khu thương mại như bừng s&aacute;ng. Đ&oacute; lại l&agrave; một c&ocirc;ng tr&igrave;nh &aacute;nh s&aacute;ng đ&aacute;ng ch&uacute; &yacute; nữa của Lasvit, thương hiệu danh tiếng trong việc thiết lập c&aacute;c t&aacute;c phẩm nghệ thuật &aacute;nh s&aacute;ng phi thường khắp thế giới.</p>\r\n', 'assets/img/blog/1624694998aHR0cHM6Ly9zMy5ldS1jZW50cmFsLTEuYW1hem9uYXdzLmNvbS9sYXN2aXQuY29tL2Ntcy9tZWRpYS8yMDE4LzEwLzA4L2xicDRwbl9sYXN2aXQtZm9yX2xhLXByYWlsbGVfZ2VuZXZlLTEzLS5qcGc.jpg', '2021-06-26 15:09:58', '2021-06-26 15:09:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `image`) VALUES
(1, 'assets/img/banner/banner1.jpg'),
(2, 'assets/img/banner/banner5.jpg'),
(3, 'assets/img/banner/banner3.jpg'),
(4, 'assets/img/banner/banner4.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brand`
--

INSERT INTO `brand` (`id`, `name`, `avatar`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Hòa Phát', 'assets/img/supplier/1624625689hoaphat.jpg', 'Nội Thất Hòa Phát', '2021-04-20 00:23:57', '2021-04-20 00:23:57'),
(5, 'Xuân Hòa', 'assets/img/supplier/1624625524supplier-6.jpg', 'Nội thất Xuân Hòa', '2021-06-04 00:00:00', '2021-06-04 00:00:00'),
(6, 'Erado', 'assets/img/supplier/1624626718images.png', 'Nội thất Erado', '2021-06-04 00:00:00', '2021-06-04 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `slug`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, '', 'Ghế', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '', 'Bàn', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '', 'Tủ', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '', 'Giường', 4, '2021-04-22 20:47:39', '2021-04-22 20:47:39'),
(5, '', 'Kệ', 5, '2021-04-22 22:11:25', '2021-04-22 22:11:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `custormer_id` int(11) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `like` tinyint(4) NOT NULL,
  `dislike` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `name`, `phone`, `email`, `address`, `status`, `created_at`, `updated_at`) VALUES
(21, 'Vũ Thành Sơn', '0929557336', 'vuson041995@gmail.com', 'phú xuyên-hà nội', 0, '2021-06-23 00:00:00', '2021-06-23 00:00:00'),
(22, 'chu thị duyên', '0929557336', 'vuson041995@gmail.com', 'phú xuyên ,Hà Nội', 0, '2021-06-23 00:00:00', '2021-06-23 00:00:00'),
(23, 'Đoàn', '0327160922', 'vuson041995@gmail.com', 'phú xuyên ,Hà Nội', 0, '2021-06-23 00:00:00', '2021-06-23 00:00:00'),
(24, 'Phúc', '0929557336', 'vuson041995@gmail.com', 'Hà Nội', 0, '2021-06-23 00:00:00', '2021-06-23 00:00:00'),
(25, 'Vũ Thành Sơn', '0929557336', 'vuson041995@gmail.com', 'phú xuyên ,Hà Nội', 0, '2021-06-25 00:00:00', '2021-06-25 00:00:00'),
(26, 'Vũ Thành Sơn', '0123456789', 'vuson0495@gmail.com', 'phú xuyên ,Hà Nội', 0, '2021-06-25 00:00:00', '2021-06-25 00:00:00'),
(27, 'Vũ Thành Sơn', '0929557336', 'vuson041995@gmail.com', 'phú xuyên ,Hà Nội', 0, '2021-06-26 00:00:00', '2021-06-26 00:00:00'),
(28, 'nguyen duc', '+84978971462', 'ha2@gmail.com', '16', 0, '2021-07-16 23:36:39', '2021-07-16 23:36:39'),
(29, 'nguyen duc', '0924783833', 'halogin12@gmail.com', '16', 0, '2021-07-16 23:37:08', '2021-07-16 23:37:08'),
(30, 'nguyen duc', '0924783833', 'halogin12@gmail.com', '16', 0, '2021-07-17 00:08:17', '2021-07-17 00:08:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `images`
--

INSERT INTO `images` (`id`, `name`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'assets/img/shop/bed/giuong-go/giuong-shadow.jpg', 5, '2021-05-09 13:18:52', '2021-05-09 13:18:52'),
(2, 'assets/img/shop/bed/giuong-may/giuong_may_1.jpg', 6, '2021-05-09 13:28:01', '2021-05-09 13:28:01'),
(3, 'assets/img/shop/bed/giuong-may/giuong_may_2.jpg', 6, '2021-05-09 13:28:01', '2021-05-09 13:28:01'),
(4, 'assets/img/shop/cabinets/ke-bui/ke_bui_2.jpg', 7, '2021-05-09 13:28:01', '2021-05-09 13:28:01'),
(5, 'assets/img/shop/cabinets/ke-bui/ke_bui_3.jpg', 7, '2021-05-09 13:28:01', '2021-05-09 13:28:01'),
(6, 'assets/img/shop/cabinets/ke-bui/ke_bui_4.jpg', 7, '2021-05-09 13:28:01', '2021-05-09 13:28:01'),
(7, 'assets/img/shop/cabinets/ke-sach-porto/ke-sach-porto-1.jpg', 8, '2021-05-09 13:28:01', '2021-05-09 13:28:01'),
(8, 'assets/img/shop/cabinets/ke-sach-porto/ke-sach-porto-2.jpg', 8, '2021-05-09 13:28:01', '2021-05-09 13:28:01'),
(9, 'assets/img/shop/cabinets/tu-tv-option/tu-tivi-option.jpg', 9, '2021-05-09 13:28:01', '2021-05-09 13:28:01'),
(10, 'assets/img/shop/chairs/armchair/armchair-paradise1.jpg', 10, '2021-05-09 13:28:01', '2021-05-09 13:28:01'),
(11, 'assets/img/shop/chairs/ghe-garbo/ghe-garbo1.jpg', 11, '2021-05-09 13:28:01', '2021-05-09 13:28:01'),
(12, 'assets/img/shop/chairs/sofa_shadow/shadow_1_sofa.jpg', 12, '2021-05-09 13:28:01', '2021-05-09 13:28:01'),
(13, 'assets/img/shop/chairs/sofa_shadow/shadow_1_sofa1.jpg', 12, '2021-05-09 13:28:01', '2021-05-09 13:28:01'),
(14, 'assets/img/shop/chairs/sofa_shadow/shadow_1_sofa2.jpg', 12, '2021-05-09 13:28:01', '2021-05-09 13:28:01'),
(15, 'assets/img/shop/tables/ban-console/ban-console-shadow.jpg', 13, '2021-05-09 13:28:01', '2021-05-09 13:28:01'),
(16, 'assets/img/shop/cabinets/tu-dau-giuong/tu-dau-giuong-shadow1.jpg', 14, '2021-05-09 13:28:01', '2021-05-09 13:28:01'),
(17, 'assets/img/shop/tables/ban-dau-giuong-bui/ban-dau-giuong-bui.jpg', 15, '2021-05-09 13:28:01', '2021-05-09 13:28:01'),
(18, 'assets/img/shop/tables/ban-dau-giuong-bui/ban-dau-giuong-bui2.jpg', 15, '2021-05-09 13:28:01', '2021-05-09 13:28:01'),
(19, 'assets/img/shop/tables/line-may_2/line-may_2-dining-table.jpg', 16, '2021-05-09 13:28:01', '2021-05-09 13:28:01'),
(20, 'assets/img/shop/tables/line-may_2/line-may_2-dining-table2.jpg', 16, '2021-05-09 13:28:01', '2021-05-09 13:28:01'),
(21, 'assets/img/shop/chairs/product-9.jpg', 1, '2021-05-09 15:17:14', '2021-05-09 15:17:14'),
(22, 'assets/img/shop/chairs/product-10.jpg', 3, '2021-05-09 15:17:14', '2021-05-09 15:17:14'),
(23, 'assets/img/shop/chairs/product-11.jpg', 4, '2021-05-09 15:17:14', '2021-05-09 15:17:14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `insta`
--

CREATE TABLE `insta` (
  `id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `insta`
--

INSERT INTO `insta` (`id`, `image`) VALUES
(1, 'assets/img/instagram/insta-1.jpg'),
(2, 'assets/img/instagram/insta-2.jpg'),
(3, 'assets/img/instagram/insta-3.jpg'),
(4, 'assets/img/instagram/insta-4.jpg'),
(5, 'assets/img/instagram/insta-5.jpg'),
(6, 'assets/img/instagram/insta-6.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menu`
--

INSERT INTO `menu` (`id`, `slug`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, '', 'Ghế', 0, '2021-05-17 10:27:34', '2021-05-17 10:27:34'),
(2, '', 'Giường', 0, '2021-05-17 10:27:34', '2021-05-17 10:27:34'),
(3, '', 'Bàn', 0, '2021-05-17 10:27:34', '2021-05-17 10:27:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `total_price` float NOT NULL,
  `note` text COLLATE utf8_unicode_ci NOT NULL,
  `key_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `total_price`, `note`, `key_token`, `status`, `created_at`, `updated_at`) VALUES
(18, 21, 1090000, 'giao hàng ngay', 'b2ac6a64107c28718c87fb747e14b4d6', 0, '2021-06-23 00:00:00', '2021-06-23 00:00:00'),
(19, 22, 1020000, 'giao hàng ngay', '710ff5625c27afc394dc27fd96514c5a', 0, '2021-06-23 00:00:00', '2021-06-23 00:00:00'),
(20, 23, 450000, 'giao hàng ngay', 'ee6026a68f284d2a19e0d8211264e023', 0, '2021-06-23 00:00:00', '2021-06-23 00:00:00'),
(21, 24, 1050000, 'giao hàng trong giờ hành chính', 'b459e1db92705a084865002a85b8f165', 0, '2021-06-23 00:00:00', '2021-06-23 00:00:00'),
(22, 25, 590000, '', 'da728d7d8e95199052e2528c032f88d5', 0, '2021-06-25 00:00:00', '2021-06-25 00:00:00'),
(23, 26, 590000, 'giao hàng trong giờ hành chính', 'a1cbdad49088e84f5158ee52ed80b1cc', 0, '2021-06-25 00:00:00', '2021-06-25 00:00:00'),
(24, 27, 490000, 'giao hàng ngay', '9986ee05343069248854ab3e9ebb9c03', 0, '2021-06-26 00:00:00', '2021-06-26 00:00:00'),
(25, 28, 490000, 'tesst', '707cadfcff608fbd1606e9467e458edb', 0, '2021-07-16 23:36:39', '2021-07-16 23:36:39'),
(26, 29, 490000, 'tesst', 'a407fb4fdd38d71e5ccef986a4995017', 0, '2021-07-16 23:37:08', '2021-07-16 23:37:08'),
(27, 30, 490000, '123123', '2151593242acb50a2e15232d3ebd4a5b', 0, '2021-07-17 00:08:17', '2021-07-17 00:08:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `quantity` tinyint(4) NOT NULL,
  `total` float NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`order_id`, `product_id`, `price`, `quantity`, `total`, `status`, `created_at`, `updated_at`) VALUES
(18, 4, 590000, 1, 590000, 0, '2021-06-23 21:36:50', '2021-06-23 21:36:50'),
(18, 5, 500000, 1, 500000, 0, '2021-06-23 21:36:50', '2021-06-23 21:36:50'),
(19, 7, 420000, 1, 420000, 0, '2021-06-23 21:41:33', '2021-06-23 21:41:33'),
(19, 12, 600000, 1, 600000, 0, '2021-06-23 21:41:33', '2021-06-23 21:41:33'),
(20, 6, 450000, 1, 450000, 0, '2021-06-23 21:44:06', '2021-06-23 21:44:06'),
(21, 10, 500000, 1, 500000, 0, '2021-06-23 21:52:24', '2021-06-23 21:52:24'),
(21, 11, 550000, 1, 550000, 0, '2021-06-23 21:52:24', '2021-06-23 21:52:24'),
(22, 4, 590000, 1, 590000, 0, '2021-06-25 23:51:02', '2021-06-25 23:51:02'),
(23, 4, 590000, 1, 590000, 0, '2021-06-25 23:51:40', '2021-06-25 23:51:40'),
(24, 1, 490000, 1, 490000, 0, '2021-06-26 16:39:34', '2021-06-26 16:39:34'),
(25, 1, 490000, 1, 490000, 0, '2021-07-16 23:36:39', '2021-07-16 23:36:39'),
(26, 1, 490000, 1, 490000, 0, '2021-07-16 23:37:08', '2021-07-16 23:37:08'),
(27, 1, 490000, 1, 490000, 0, '2021-07-17 00:08:17', '2021-07-17 00:08:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categories_id` int(11) NOT NULL COMMENT '1: Ghế\r\n2: Bàn\r\n3: Tủ\r\n4: Giường\r\n5: Kệ',
  `brand_id` int(11) NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `quantity` tinyint(4) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `view` int(6) NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1: New 2: Sale 3: Out Of Stock',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `slug`, `categories_id`, `brand_id`, `avatar`, `price`, `quantity`, `admin_id`, `view`, `description`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ghế hòa phát loại thường', '', 1, 1, 'assets/img/shop/chairs/product-9.jpg', 490000, 5, 1, 0, 'mô tả ghế  hòa phát', '', 1, '2021-04-20 00:00:00', '2021-04-21 00:00:00'),
(3, 'Ghế hòa phát loại trung', '', 1, 1, 'assets/img/shop/chairs/product-10.jpg', 550000, 5, 1, 0, 'mô tả ghế', '', 1, '2021-04-20 00:00:00', '2021-04-21 00:00:00'),
(4, 'Ghế hòa phát cao cấp', '', 1, 1, 'assets/img/shop/chairs/product-11.jpg', 590000, 5, 1, 0, 'mô tả ghế', '', 1, '2021-04-20 00:00:00', '2021-04-21 00:00:00'),
(5, 'Giường gỗ Shadow', '', 4, 1, 'assets/img/shop/bed/giuong-go/giuong-shadow1.jpg', 500000, 0, 1, 0, '', '', 2, '2021-04-22 00:00:00', '2021-04-22 00:00:00'),
(6, 'Giường mây', '', 4, 1, 'assets/img/shop/bed/giuong-may/giuong_may_3.jpg', 450000, 0, 1, 0, '', '', 2, '2021-04-22 00:00:00', '2021-04-22 00:00:00'),
(7, 'Kệ bụi', '', 5, 1, 'assets/img/shop/cabinets/ke-bui/ke_bui_1.jpg', 420000, 0, 1, 0, '', '', 2, '2021-04-22 00:00:00', '2021-04-22 00:00:00'),
(8, 'Kệ sách Porto', '', 5, 1, 'assets/img/shop/cabinets/ke-sach-porto/ke-sach-porto.jpg', 480000, 0, 1, 0, '', '', 3, '2021-04-22 00:00:00', '2021-04-22 00:00:00'),
(9, 'Tủ TV Option', '', 3, 1, 'assets/img/shop/cabinets/tu-tv-option/tu-tivi-option1.jpg', 510000, 0, 1, 0, '', '', 3, '2021-04-22 00:00:00', '2021-04-22 00:00:00'),
(10, 'Ghế Paradise', '', 1, 1, 'assets/img/shop/chairs/armchair/armchair-paradise.jpg', 500000, 0, 1, 0, '', '', 3, '2021-04-22 00:00:00', '2021-04-22 00:00:00'),
(11, 'Ghế Garbo', '', 1, 1, 'assets/img/shop/chairs/ghe-garbo/ghe-garbo.jpg', 550000, 0, 1, 0, '', '', 0, '2021-04-22 00:00:00', '2021-04-22 00:00:00'),
(12, 'Sofa Shadow', '', 1, 1, 'assets/img/shop/chairs/sofa_shadow/shadow_1_sofa3.jpg', 600000, 0, 1, 0, '', '', 2, '2021-04-22 00:00:00', '2021-04-22 00:00:00'),
(13, 'Bàn Console Shadow', '', 2, 1, 'assets/img/shop/tables/ban-console/ban-console-shadow1.jpg', 400000, 0, 1, 0, '', '', 3, '2021-04-22 00:00:00', '2021-04-22 00:00:00'),
(14, 'Tủ đầu giường Shadow', '', 3, 1, 'assets/img/shop/cabinets/tu-dau-giuong/tu-dau-giuong-shadow.jpg', 430000, 0, 1, 0, '', '', 1, '2021-04-22 00:00:00', '2021-04-22 00:00:00'),
(15, 'Bàn đầu giường Buiun', '', 2, 1, 'assets/img/shop/tables/ban-dau-giuong-bui/ban-dau-giuong-bui1.jpg', 350000, 0, 1, 0, '', '', 2, '2021-04-22 00:00:00', '2021-04-22 00:00:00'),
(16, 'Bàn mây', '', 2, 1, 'assets/img/shop/tables/line-may_2/line-may_2-dining-table1.jpg', 450000, 0, 1, 0, '', '', 3, '2021-04-22 00:00:00', '2021-04-22 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ratings`
--

CREATE TABLE `ratings` (
  `id` int(11) NOT NULL,
  `custormer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `number` tinyint(4) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ratings`
--

INSERT INTO `ratings` (`id`, `custormer_id`, `product_id`, `number`, `status`, `created_at`, `updated_at`) VALUES
(2, 23, 8, 5, 1, '2021-07-14 16:45:40', '2021-07-14 16:45:40'),
(6, 25, 15, 0, 1, '2021-07-14 16:51:22', '2021-07-14 16:51:22'),
(7, 25, 1, 2, 1, '2021-07-14 17:52:15', '2021-07-14 17:52:15'),
(8, 23, 3, 3, 1, '2021-07-14 17:52:15', '2021-07-14 17:52:15');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id` (`menu_id`,`admin_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `custormer_id` (`custormer_id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `insta`
--
ALTER TABLE `insta`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `custormer_id` (`customer_id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_id`,`product_id`),
  ADD KEY `order_id` (`order_id`,`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_id` (`categories_id`,`brand_id`,`admin_id`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Chỉ mục cho bảng `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `custormer_id` (`custormer_id`,`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT cho bảng `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `insta`
--
ALTER TABLE `insta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`custormer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`);

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_ibfk_1` FOREIGN KEY (`custormer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ratings_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
