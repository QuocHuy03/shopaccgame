-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 16, 2022 lúc 03:03 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopaccgame`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `accessories`
--

CREATE TABLE `accessories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `accessories`
--

INSERT INTO `accessories` (`id`, `title`, `status`, `category_id`) VALUES
(2, 'Tướng', 1, 9),
(3, 'Skin', 1, 9),
(4, 'Rank', 1, 9),
(5, 'Bảng Ngọc', 1, 9),
(6, 'Đăng ký', 1, 11),
(7, 'Pet', 1, 11),
(8, 'Rank', 1, 11),
(9, 'Ghi chú', 1, 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `status` int(11) NOT NULL,
  `content` longtext NOT NULL,
  `king_of_blogs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `image`, `description`, `status`, `content`, `king_of_blogs`) VALUES
(2, 'Địa chỉ nạp game giá rẻ online, chất lượng nhất hiện nay', 'dia-chi-nap-game-gia-re-online-chat-luong-nhat-hien-nay', 'https://nick.vn/upload/userfiles/images/nick-vn.jpg', '<p>Nạp game l&agrave; một c&aacute;ch để c&aacute;c anh em người chơi c&oacute; thể mua sắm vật phẩm, n&acirc;ng cấp nh&acirc;n vật hay sử dụng c&aacute;c chức năng độc quyền trong game. Ng&agrave;y nay, c&oacute; nhiều cửa h&agrave;ng nạp game gi&uacute;p người chơi dễ để mua vật phẩm, nạp tiền v&agrave;o game nhanh ch&oacute;ng.</p>', 1, '<p><img alt=\"Nạp game giá rẻ\" src=\"https://nick.vn/upload/userfiles/images/nick-vn.jpg\" style=\"height:300px; width:600px\" /></p>\r\n\r\n<p>C&ugrave;ng theo d&otilde;i tiếp b&agrave;i viết dưới đ&acirc;y, t&ocirc;i&nbsp;sẽ cung cấp cho bạn đọc top địa chỉ nạp game gi&aacute; rẻ, chất lượng, , được đ&aacute;nh gi&aacute; cao trong thời gian gần đ&acirc;y.</p>\r\n\r\n<h2><strong>1.&nbsp;<a href=\"https://napgamegiare.net/\">Napgamegiare.net</a></strong></h2>\r\n\r\n<p>C&aacute;i t&ecirc;n đầu ti&ecirc;n trong top địa chỉ nạp game gi&aacute; rẻ, chất lượng, được đ&aacute;nh gi&aacute; cao ch&iacute;nh l&agrave; napgamegiare.net. Trang web đang nhận được rất nhiều phản hồi, đ&aacute;nh gi&aacute; tốt từ c&aacute;c streamer, youtuber v&agrave; reviewer trong thời gian gần đ&acirc;y.</p>\r\n\r\n<p><img alt=\"Nạp game giá rẻ\" src=\"https://lh5.googleusercontent.com/zprnwy4JP7DYBsw8UVm85l81dDuz6rFyLIA7Ap7WOcfmcqc8WbZCI6GjCjnM5nrVVh3lj0Bre-CPhQBXxWRwRzG_Xq0x8Q0At7It2cDpdVejTvKgtMpFc6yT85rfN7gZFM29jJN-\" /></p>\r\n\r\n<p>Shop napgamegiare c&oacute; c&aacute;c g&oacute;i nạp game của c&aacute;c tựa game phổ biến như:&nbsp;<strong><a href=\"https://napgamegiare.net/dich-vu/nap-kim-cuong-free-fire\">kim cương free fire</a></strong>,&nbsp;<strong><a href=\"https://napgamegiare.net/dich-vu/nap-quan-huy-lien-quan\">qu&acirc;n huy li&ecirc;n qu&acirc;n</a></strong>,&nbsp;<strong><a href=\"https://napgamegiare.net/dich-vu/nap-can-nguyen-toc-chien\">căn nguy&ecirc;n tốc chiến</a></strong>,....</p>\r\n\r\n<p><em>Hướng Dẫn C&aacute;ch Nạp Kim Cương Free Fire Gi&aacute; Rẻ, Mua V&agrave; Đổi Thẻ Garena Từ Card Điện Thoại</em></p>\r\n\r\n<p><iframe align=\"middle\" frameborder=\"0\" id=\"widget2\" scrolling=\"no\" src=\"https://www.youtube.com/embed/THF6lk_7W7E?enablejsapi=1&amp;origin=https:%2F%2Fnick.vn\" title=\"YouTube video player\"></iframe></p>\r\n\r\n<p>Kh&ocirc;ng chỉ b&aacute;n c&aacute;c g&oacute;i nạp game m&agrave; website c&ograve;n b&aacute;n thẻ game của c&aacute;c NPH như : garena, zing, gate, vcoin, gosu,... với mức chiết khấu từ 3 - 18%.</p>\r\n\r\n<p><strong><a href=\"https://napgamegiare.net/\">Truy cập website nạp game gi&aacute; rẻ ngay</a></strong>.</p>\r\n\r\n<p><a href=\"https://napgamegiare.net/dich-vu/\"><img alt=\"Nạp ngay\" src=\"https://nick.vn/upload/userfiles/images/nut-nap-ngay(13)(15).gif\" /></a></p>\r\n\r\n<h2><strong>2.&nbsp;<a href=\"https://napgame24h.net/\">Napgame24h.net</a></strong></h2>\r\n\r\n<p><strong><a href=\"https://napgame24h.net/\">napgame24h.net</a></strong>&nbsp;l&agrave; trang nạp game c&oacute; hệ thống bảo mật tuyệt đối. Do đ&oacute;, kh&aacute;ch h&agrave;ng ho&agrave;n to&agrave;n y&ecirc;n t&acirc;m khi thực hiện giao dịch tại đ&acirc;y m&agrave; kh&ocirc;ng sợ bị lộ th&ocirc;ng tin.</p>\r\n\r\n<p><em>Hướng Dẫn Nạp Kim Cương Free Fire Gi&aacute; Rẻ, Mua V&agrave; Đổi Thẻ Garena Từ Thẻ Viettel Mới Nhất 2022</em></p>\r\n\r\n<p><iframe align=\"middle\" frameborder=\"0\" id=\"widget4\" scrolling=\"no\" src=\"https://www.youtube.com/embed/2jVVRJkTcF0?enablejsapi=1&amp;origin=https:%2F%2Fnick.vn\" title=\"YouTube video player\"></iframe></p>\r\n\r\n<p>Tại&nbsp;<strong><a href=\"https://napgame24h.net/\">napgame24h.net</a></strong>&nbsp;cung cấp tất cả c&aacute;c g&oacute;i nạp game như:&nbsp;<strong><a href=\"https://napgame24h.net/dich-vu/nap-kim-cuong-free-fire\">kim cương free fire</a></strong>,&nbsp;<strong><a href=\"https://napgame24h.net/dich-vu/nap-quan-huy-lien-quan\">qu&acirc;n huy li&ecirc;n qu&acirc;n</a></strong>,&nbsp;<strong><a href=\"https://napgame24h.net/dich-vu/nap-can-nguyen-toc-chien\">căn nguy&ecirc;n tốc chiến</a></strong>,&nbsp;<strong><a href=\"https://napgame24h.net/dich-vu/nap-play-together\">play together</a></strong>,.... với mức gi&aacute; cực kỳ hấp dẫn, chỉ từ 10. 000 đồng l&agrave; bạn đ&atilde; dễ d&agrave;ng nạp tiền v&agrave;o t&agrave;i khoản game.</p>\r\n\r\n<p><img alt=\"Nạp game giá rẻ\" src=\"https://lh4.googleusercontent.com/lwv1s3TbHlOwBCrBUNV6uuE8QyC5_VuM08rU50EiFMXlKw5ggBBPrbgRgOGc8PV8wq0wzDTKXe2YsNHh7G6gWAdFgTZqlwxyl4_6FPgJKnr5Z-D3kD3obzkC3T2JKKqXyTLvbd_X\" /></p>\r\n\r\n<p>Truy cập&nbsp;<strong><a href=\"https://napgame24h.net/\">napgame24h.net</a></strong>&nbsp;để mua g&oacute;i nạp game gi&aacute; rẻ</p>\r\n\r\n<p><img alt=\"Nạp game\" src=\"https://nick.vn/upload/userfiles/images/nut-nap-ngay(13)(15)(1).gif\" /></p>', 'blogs'),
(3, 'BỘ SƯU TẬP ẢNH FREE FIRE ĐẦY ĐỦ NHẤT', 'bo-suu-tap-anh-free-fire-day-du-nhat', 'https://nick.vn/storage/images/hBgFA2KkMm_1635704002.jpg', '<p>Đ&acirc;y l&agrave; tổng hợp bộ sưu tập những h&igrave;nh ảnh đẹp nhất full HD theo từng chủ đề của game Free Fire để những fan trung th&agrave;nh của tựa game c&oacute; thể tải về để set avatar Facebook, d&ugrave;ng l&agrave;m ảnh nền điện thoại v&agrave; m&aacute;y t&iacute;nh rất ngầu v&agrave; thể hiện c&aacute; t&iacute;nh ri&ecirc;ng của bạn!</p>', 1, '<h2><strong>&nbsp;Ảnh anime chibi Free Fire cute, dễ thương</strong></h2>\r\n\r\n<p><strong><img alt=\"png-image\" src=\"https://lh3.googleusercontent.com/0OyquLE-BTWVEe_1uSXH8UJpAW1HBVzppZTP-0k_GmhZsssWoNg7Qr_bHIQhIv2ho6IMlD4fi9dlZ40BE_WRq5_kSBvr4jlb7mQDtSJE7C5VUnD8GyHT2Lt-llaghv7vxS5Mkw7E\" style=\"height:667px; width:500px\" /></strong></p>', 'huongdan');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `decs` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `order_categoies` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `slug`, `title`, `decs`, `image`, `status`, `order_categoies`) VALUES
(9, 'danh-muc-game-lien-minh', 'Danh Mục Game Liên Minh', 'Danh Mục Game Liên Minh', 'https://nick.vn/storage/images/nijYzYWqiq_1623164431.gif', 1, NULL),
(10, 'danh-muc-game-ngoc-rong', 'Danh Mục Game Ngọc Rồng', 'Danh Mục Game Ngọc Rồng', 'https://nick.vn/storage/images/Sbcs9ooDuN_1623164443.gif', 1, NULL),
(11, 'danh-muc-game-free-fire', 'Danh Mục Game Free Fire', 'Danh Mục Game Free Fire', 'https://nick.vn/storage/images/bHhkJqAKlB_1623164417.gif', 1, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `nick_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `title`, `nick_id`) VALUES
(3, '191.jpg', 'MÁC CHIẾN TƯỚNG. NAKROTH LÔI QUANG SỨ', 4),
(5, '396.jpg', 'MÁC CHIẾN TƯỚNG. NAKROTH LÔI QUANG SỨ', 4),
(6, '3RcdbTs582_165018870684.jpg', 'MÁC CHIẾN TƯỚNG. NAKROTH LÔI QUANG SỨ', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nicks`
--

CREATE TABLE `nicks` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `ms` int(11) NOT NULL,
  `attribute` varchar(255) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nicks`
--

INSERT INTO `nicks` (`id`, `title`, `ms`, `attribute`, `category_id`, `image`, `price`, `status`, `description`) VALUES
(4, 'MÁC CHIẾN TƯỚNG. NAKROTH LÔI QUANG SỨ', 405178, '[\"Tướng: 342\",\"Skin: 165\",\"Rank: Cao Thủ\",\"Bảng Ngọc: 90\"]', 9, 'https://nick.vn/storage/images/FSPfB05HiR_1632531414.jpg', '20000', 1, '<p>Violet Huyết M&agrave; Thần, Ryoma Samurai, Ryoma Thanh Long Bang Chủ, Florentino ULTRAMAN, Lilianna Nguyệt Mỵ Ly, Nakroth Si&ecirc;u Việt III, Nakroth Qu&aacute;n Qu&acirc;n, Bboy C&ocirc;ng Nghệ, Murad Si&ecirc;u Việt, Murad MTP, Triệu V&acirc;n Qu&yacute; C&ocirc;ng Tử, Volkath Xung Thi&ecirc;n Thần Tướng.DƯ 1 VI&Ecirc;N Đ&Aacute; QU&Yacute;.</p>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `slider`
--

INSERT INTO `slider` (`id`, `description`, `title`, `status`, `image`) VALUES
(1, 'Slider Khuyến Mãi Thật Tuyệt', 'Slider Khuyễn Mãi', 1, 'https://nick.vn/storage/images/pHqmqsnmhX_1623851481.jpg'),
(2, 'Slider Bán ACC', 'Slider Bán Acc', 1, 'https://nick.vn/storage/images/lITvp1Ph8r_1623147594.jpg'),
(3, 'Giới Thiệu', 'Giới Thiệu', 1, 'https://nick.vn/storage/images/XoBF4ldarS_1623147567.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'huydev', 'huylquoc19102003@gmail.com', NULL, '$2y$10$xgTsItqyCaVietzXxX0LXuR6rVbyFnQf1WP7lrBKVhfn3MoJ3PI4u', NULL, '2022-10-27 21:54:05', '2022-10-27 21:54:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `link` longtext NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `videos`
--

INSERT INTO `videos` (`id`, `slug`, `title`, `image`, `description`, `link`, `status`) VALUES
(1, 'tong-hop-highlight-lien-quan-mua-24-hay-nhat', 'Tổng Hợp Highlight Liên Quân Mùa 24 Hay Nhất', 'https://nick.vn/storage/images/0jjbYp7OmJ_1623164374.gif', 'Hay Nè', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/t1NS-m875lY\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nicks`
--
ALTER TABLE `nicks`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `accessories`
--
ALTER TABLE `accessories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `nicks`
--
ALTER TABLE `nicks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
