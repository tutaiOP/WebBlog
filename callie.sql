-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 13, 2024 lúc 06:24 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `callie`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `authors`
--

INSERT INTO `authors` (`id`, `name`, `email`, `created_at`, `updated_at`) VALUES
(1, 'JOHN', 'john@gmail.com', '2024-08-09 20:16:15', '2024-08-09 20:16:15'),
(2, 'LISA', 'lisa@gmail.com', '2024-08-09 20:16:23', '2024-08-09 20:16:23'),
(3, 'JOHN DOE', 'johndoe@gmail.com', '2024-08-10 07:07:59', '2024-08-10 07:07:59'),
(4, 'Justee', 'Justee@gmail.com', '2024-08-10 21:22:00', '2024-08-10 21:22:00'),
(5, 'Jennie', 'jennie@gmail.com', '2024-08-10 21:22:13', '2024-08-10 21:22:13'),
(6, 'masew', 'masew@gmail.com', '2024-08-10 21:22:23', '2024-08-10 21:22:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'LIFESTYLE', '2024-08-09 20:14:54', '2024-08-09 20:14:54'),
(2, 'FASHION', '2024-08-09 20:14:58', '2024-08-09 20:14:58'),
(3, 'TECHNOLOGY', '2024-08-09 20:15:01', '2024-08-09 20:15:01'),
(4, 'TRAVEL', '2024-08-09 20:15:07', '2024-08-09 20:15:07'),
(5, 'HEALTHY', '2024-08-09 20:15:11', '2024-08-09 20:15:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_post`
--

CREATE TABLE `category_post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_post`
--

INSERT INTO `category_post` (`id`, `post_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(9, 1, 4, NULL, NULL),
(10, 1, 5, NULL, NULL),
(13, 3, 1, NULL, NULL),
(14, 3, 5, NULL, NULL),
(15, 4, 2, NULL, NULL),
(16, 4, 4, NULL, NULL),
(17, 5, 1, NULL, NULL),
(18, 5, 5, NULL, NULL),
(19, 6, 3, NULL, NULL),
(20, 6, 5, NULL, NULL),
(21, 7, 1, NULL, NULL),
(22, 7, 2, NULL, NULL),
(23, 7, 5, NULL, NULL),
(24, 8, 1, NULL, NULL),
(25, 8, 5, NULL, NULL),
(26, 9, 1, NULL, NULL),
(27, 9, 3, NULL, NULL),
(28, 10, 1, NULL, NULL),
(29, 10, 4, NULL, NULL),
(30, 10, 5, NULL, NULL),
(31, 11, 1, NULL, NULL),
(32, 12, 1, NULL, NULL),
(33, 12, 5, NULL, NULL),
(34, 13, 1, NULL, NULL),
(35, 13, 2, NULL, NULL),
(36, 13, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2024_08_07_105537_create_staff_table', 2),
(5, '2024_08_07_151252_add_remember_token_to_staff_table', 3),
(7, '2024_08_08_142455_create_category_table', 5),
(8, '2024_08_08_144034_create_category_table', 6),
(13, '2024_08_10_021106_create_post_category_table', 11),
(14, '0001_01_01_000000_create_users_table', 12),
(15, '0001_01_01_000001_create_cache_table', 12),
(16, '0001_01_01_000002_create_jobs_table', 12),
(17, '2024_08_07_151833_create_staff_table', 12),
(18, '2024_08_08_144414_create_categories_table', 12),
(19, '2024_08_09_024051_create_tags_table', 12),
(20, '2024_08_09_031148_create_authors_table', 12),
(21, '2024_08_09_034901_create_posts_table', 12),
(22, '2024_08_10_025026_create_category_post_table', 12),
(23, '2024_08_10_025510_create_tag_post_table', 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `content` longtext NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `author_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `content`, `thumb`, `author_id`, `created_at`, `updated_at`) VALUES
(1, 'Lối sống lành mạnh', 'Cách chăm sóc bản thân', 'ád', '/storage/uploads/2024/08/11/hot-post-1.jpg', 2, '2024-08-09 20:24:55', '2024-08-10 20:21:13'),
(3, 'Hãy sống hết mình vì bản thân', 'abc', 'abc', '/storage/uploads/2024/08/11/hot-post-2.jpg', 3, '2024-08-10 20:23:28', '2024-08-10 20:23:28'),
(4, 'Tuổi trẻ nên đi mọi nơi', 'abc', 'abc', '/storage/uploads/2024/08/11/hot-post-3.jpg', 1, '2024-08-10 20:24:11', '2024-08-10 20:24:11'),
(5, 'Thời trang nam công sở nên mặc gì ?', 'abc', 'abc', '/storage/uploads/2024/08/11/thoi-trang-nam-cong-so.jpg', 1, '2024-08-10 20:37:18', '2024-08-10 20:37:18'),
(6, 'Tuyệt chiêu giữ nếp tóc xoăn và hiệu quả', 'abc', 'abc', '/storage/uploads/2024/08/11/tuyet-chieu-giu-nep-toc-xoan-hieu-qua-nhat-1.jpg', 2, '2024-08-10 21:02:23', '2024-08-10 21:02:23'),
(7, 'Hướng dẫn cách phối đồ trên màu áo', 'Khi nhắc  đến một người biết cách ăn mặc đẹp thì chúng ta sẽ nghĩ đến ngay là người đấy biết cách kết hợp màu sắc rất tinh tế ...', '<p>Khi nhắc  đến một người biết cách ăn mặc đẹp thì chúng ta sẽ nghĩ đến ngay là người đấy biết cách kết hợp màu sắc rất tinh tế để tạo nên một bộ đồ đẹp với những gam màu không bị phản cảm và khắc nghịch của nhau. Tuy nhiên  với sự đa dạng về màu sắc thì chúng ta cần phải tìm hiểu rất nhiều để có thể hiểu được sự tương tác giữa các màu.</p>\r\n<p>Vì thế mà với những kinh nghiệm cũng như sự tìm tòi chúng tôi muốn giới thiệu cho các bạn  về một số lý thuyết về màu sắc cũng như cách phối hợp màu sắc trên quần áo sao  được ăn nhập và hiệu quả nhất .<p>\r\n<h3>Giới thiệu chung về màu sắc</h3>\r\n<p>Để học được cách mặc đồ đẹp (https://thoitrang.tv/tu-van/5-bi-quyet-mac-do-dep-ban-khong-the-bo-qua.html), đầu tiên bạn phải quan tâm đến màu sắc. Với sự quan trọng của việc phối hợp màu sắc trong cách ăn mặc để cho đẹp hơn và tinh tế hơn thì ai không ai là không biết đến sự quan trọng đó.\r\n\r\nChính vì thế mà nhiều người bỏ ra rất nhiều thời gian để học về những khái niệm màu sắc , các màu tương thích , khắc nghịch nhau.\r\n\r\nNên nếu bạn hiểu  rõ được và biết cách phối hộp màu sắc cho tổng bộ quần áo của bạn thì chắc chắn rằng nhìn bạn sẽ có một phong cách thanh lịch và sang trọng , còn nếu bạn cứ tùy ý sắp xếp thì chỉ có may mắn mới có thể giúp đỡ bạn  chứ chắc chắn là bạn sẽ không vừa ý chút nào với sự lựa chọn đấy của mình .\r\n\r\nMỗi màu sắc có cái nhìn khác nhau cũng như tính chất khác nhau . Ví dụ với màu đen thì bạn sẽ cảm nhận được đó là một màu quyến rũ và bí ẩn, với màu trắng bạn sẽ thấy được sự quý phái cũng tương tự như nhiều màu khắc mà bạn có thể lựa chọn theo phong cách mà bạn muốn hướng đến cũng như địa điểm mà bạn sẽ tham gia để lựa chọn sao cho phù hợp nhất với khung cảnh đấy .\r\n\r\nĐiều đặc biệt chú ý là khi mặc một bộ quần áo thì bạn không được lựa chọn bộ quần áo nào có trên 3 màu. Bạn có thể lựa chọn một hai màu làm màu sắc chủ đạo với bộ đồ đó và nó chiếm phần lớn diện tích , và một màu sắc chiếm ít diện tích và màu này dùng để làm điểm nhấn cho bộ đồ mà bạn chọn.\r\n\r\nNếu trong những tình huống khẩn cấp mà bạn không biết lựa chọn như thế nào thì để an toàn thì bạn nên lựa chọn những gam màu trung tính . Các màu trung tính như đen , trắng , xám … .\r\n\r\nKhi chọn lựa phụ kiện, bạn nên lựa chọn các phụ kiện phù hợp với màu sắc của trang phục bạn đang mặc. Để an toàn, với giày, những màu sắc basic như trắng, đen là sự lựa chọn hoàn hảo. Đối với kính râm bạn nên lựa chọn màu đen.\r\n\r\nTuy nhiên, nếu bạn yêu thích kính râm màu sắc, có thể tham khảo cách chọn kính râm tại đây để tìm ra sản phẩm phù hợp với bản thân.</p>\r\n<h3> Cách chọn và phối màu sắc</h3>\r\n<p>Nếu bạn không quá tự tin về cách phối những màu sắc khác nhau thì bạn có thể sử dụng giải pháp là dùng các màu tương tự nhau với những món đồ khác nhau . Với sự đơn giản như thế này những hiệu quả mà nó mang lại là rất cao đấy.\r\n\r\nVí dụ bạn có thể sử dụng một chiếc cà vạt màu cam đi cùng với nó là một chiếc khăn vuông màu cam như thế sẽ toát lên cá tính mạnh mẽ mà không bị rối màu cho bộ trang phục của bạn .<p>', '/storage/uploads/2024/08/13/huong-dan-cach-phoi-hop-mau-sac-tren-quan-ao-1.jpg', 5, '2024-08-10 21:23:35', '2024-08-12 21:09:54'),
(8, 'lối sống của giới trẻ hiện nay', 'abcdsa dsadsa', 'ádsadsa', '/storage/uploads/2024/08/11/post-7.jpg', 1, '2024-08-11 04:17:27', '2024-08-11 04:17:27'),
(9, 'Trẻ thì hãy nên tập thể dục', 'sadasdsa', 'dsadsadsa', '/storage/uploads/2024/08/11/post-4.jpg', 2, '2024-08-11 04:18:07', '2024-08-11 04:18:07'),
(10, 'Những bãi biển đep ở VN', 'dsadsa', 'Lorem ipsum dolor sit amet, mea ad idque detraxit, cu soleat graecis invenire eam. Vidisse suscipit liberavisse has ex, vocibus patrioque vim et, sed ex tation reprehendunt. Mollis volumus no vix, ut qui clita habemus, ipsum senserit est et. Ut has soluta epicurei mediocrem, nibh nostrum his cu, sea clita electram reformidans an.\r\n<br>\r\nEst in saepe accusam luptatum. Purto deleniti philosophia eum ea, impetus copiosae id mel. Vis at ignota delenit democritum, te summo tamquam delicata pro. Utinam concludaturque et vim, mei ullum intellegam ei. Eam te illum nostrud, suas sonet corrumpit ea per. Ut sea regione posidonium. Pertinax gubergren ne qui, eos an harum mundi quaestio.\r\n<br>\r\nNihil persius id est, iisque tincidunt abhorreant no duo. Eripuit placerat mnesarchum ius at, ei pro laoreet invenire persecuti, per magna tibique scriptorem an. Aeque oportere incorrupte ius ea, utroque erroribus mel in, posse dolore nam in. Per veniam vulputate intellegam et, id usu case reprimique, ne aperiam scaevola sed. Veritus omnesque qui ad. In mei admodum maiorum iracundia, no omnis melius eum, ei erat vivendo his. In pri nonumes suscipit\r\n<br>\r\nSit nulla quidam et, eam ea legimus deserunt neglegentur. Et veri nostrud vix, meis minimum atomorum ex sea, stet case habemus mea no. Ut dignissim dissentiet his, mei ea delectus delicatissimi, debet dissentiunt te duo. Sonet partiendo et qui, pro et veri solet singulis. Vidit viderer eleifend ad nam. Minimum eligendi suscipit ius et, vis ex laoreet detracto scripserit, at sumo sale solum pro.\r\n<br>\r\nMei cu diam sonet audiam, his ad impetus fuisset indoctum. Te sit altera qualisque, stet suavitate ne vel. Euismod suavitate duo eu, habemus rationibus neglegentur ei qui. Debet omittam ad usu, ex vero feugait oporteat eos, id usu sint numquam sententiae.', '/storage/uploads/2024/08/11/post-8.jpg', 6, '2024-08-11 04:34:21', '2024-08-11 06:03:00'),
(11, 'NHỮNG CÁCH CHỌN ÁO SƠ MI NAM CHO NGƯỜI THẤP', 'Trang phục dành cho nam tuy không cầu kỳ như dành cho nữ nhưng việc lựa chọn áo sơ mi…', 'Trang phục dành cho nam tuy không cầu kỳ như dành cho nữ nhưng việc lựa chọn áo sơ mi cho nam cũng cần thực hiện theo những quy tắc để mang đến vẻ sang trọng và lịch lãm cho nam giới. Những cách chọn áo sơ mi nam cho người thấp sẽ mang đến những chiếc áo phù hợp giúp những bạn nam luôn có được sự tự tin.\r\n\r\nÁo sơ mi nam cổ ngắn được thiết kế hiện đại từ cách thiết kế cổ ngắn và đứng, chiều cao của cổ áo được thiết kế vừa phải để lộ phần cổ cao và thanh tú cho những quý ông giúp tăng thâm chiều cao cho phần cổ.\r\n\r\nĐây là lựa chọn tối ưu cho những quý ông mang những phong cách lịch lãm và sang trọng cùng sự năng động.\r\n\r\nNhững chiếc áo sơ mi nam ít họa tiết đơn giản, gôm vừa gọn cơ thể giúp quý ông có dáng thấp sẽ thon gọn hơn và tạo được những nét quyến rũ cũng như mang lại cảm giác tăng chiều cao cho người mặc.\r\n\r\nLựa chọn những chiếc áo sơ mi đơn giản, sáng màu nên được coi là ưu tiển đầu tiên cho những quý ông muốn có một phong cách thời trang nam đơn giản cùng sự gọn gàng.', '/storage/uploads/2024/08/13/nhung-cach-chon-ao-so-mi-nam-cho-nguoi-thap-1.jpg', 4, '2024-08-12 21:02:14', '2024-08-12 21:02:14'),
(12, 'CÁCH CHỌN ÁO KHOÁC NỮ DÁNG DÀI HỢP VỚI TỪNG DÁNG NGƯỜI', 'Áo khoác nữ dáng dài là một trong những loại áo khoác được nhiều chị em yêu thích bởi vì…', 'Áo khoác nữ dáng dài là một trong những loại áo khoác được nhiều chị em yêu thích bởi vì áo khoác dáng dài không chỉ ấm áp mà còn tạo phong cách riêng cho người mặc. Áo khoác dáng dài cũng có rất nhiều kiểu nên tùy vào từng dáng người mà chọn kiểu dáng cho phù hợp. Dưới đây là cách chọn áo khoác nữ dáng dài hợp với từng dáng người.\r\n\r\nNếu bạn sở hữu thân hình như thế này thì sự lựa chọn tốt nhất cho bạn là những chiếc áo khoác nữ dáng dài đến đầu gối và ôm sát những đường cong của cơ thể. Kiểu áo này sẽ giúp bạn che đi phần cơ thể mà bị thừa cân đồng thời tôn lên vòng eo nhỏ nhắn của bạn.\r\n\r\nCác bạn đừng nghĩ rằng chân đã ngắn rồi thì không được mặc áo khoác dáng dài nhé. Nếu bạn thuộc dáng người này thì bạn có thể chọn những loại áo khoác có phần thắt eo cao hơn eo tự nhiên, dáng dài qua hông một chút, không nên dài quá như thế sẽ tạo cảm giác chân của bạn dài hơn. Bạn kết hợp với đôi giày cao gót nữa thì sẽ chẳng ai nói là bạn thấp cả.\r\n\r\nVới dáng người này thì bạn có thể chọn những kiểu áo khoác nữ dáng dài mà có phần thân trên cầu kì, áo cổ lông để tạo sự chú ý trên phần thân trên. Phần thân dưới của áo khoác có độ dài phù hợp đủ để che đi vòng 3, như thế sẽ tạo sự cân đối cho cơ thể.\r\n\r\nHy vọng với những gợi ý trên bạn sẽ chọn được cho mình một chiếc áo khoác dáng dài nữ ưng ý và cảm thấy chiếc áo đó là dành riêng cho mình. Nếu bạn muốn tham khảo nhiều mẫu thời trang nữ đẹp hơn nữa thì hãy liên hệ với thời trang dshop của chúng tôi nhé!', '/storage/uploads/2024/08/13/cach-chon-ao-khoac-nu-dang-dai-hop-voi-tung-dang-nguoi-1.jpg', 2, '2024-08-12 21:03:12', '2024-08-12 21:03:12'),
(13, 'NHỮNG CÁCH PHỐI ĐỒ VỚI GIÀY BOOT CỰC CHUẨN CHO BẠN NỮ CHƠI TẾT', 'Giày boot là một loại giày cao cổ thường khó kết hợp với các trang phục hơn những đôi giày thể thao, giày cao gót hay giày lười....', '<p>Giày boot là một loại giày cao cổ thường khó kết hợp với các trang phục hơn những đôi giày thể thao, giày cao gót hay giày lười và nó thường chỉ được sử dụng và mùa thu và mùa đông. Nhưng nếu bạn biết cách phối đồ với giày boot chuẩn thì trông bạn sẽ cực kỳ sành điệu</p>\r\n<p>Một chiếc áo lông xù và một chiếc quần short bò kết hợp với giầy cao cổ sẽ rất thích hợp với những co nàng cá tính. Một phong cách mang hơi thở của thời trang nam, nhưng những cô nàng này vẫn vô cùng duyên dáng và quyễn rũ.</p>\r\n<p>Mùa đông năm nay không lạnh và có lẽ những ngày Tết sẽ là một ngày nắng ấm, một chiếc áo sơ mi, một chiếc quần jean và một đôi giày cao cổ rất hợp với những cô nàng có tính cách mạnh mẽ và phóng khoáng.</p>\r\n<h3>NHỮNG CÁCH PHỐI ĐỒ VỚI GIÀY BOOT CỰC CHUẨN CHO BẠN NỮ CHƠI TẾT</h3>\r\n<p>Kết hợp giày boot cao cổ cùng áo phông cánh rơi và một chiếc chân váy dịu dàng bạn sẽ trở thành một cô gái thật sành điệu, nữ tính, trong sáng, ngây thơ mà vô cùng phong cách.<p>\r\n<p>Một bộ đầm màu pastel nhẹ nhàng, duyên dáng sẽ trở lên sành điệu và hấp dẫn hơn khi bạn phối đồ với giầy Boot cao gót. Với bộ đồ này bạn có thể đi chơi, đi dạo phố hay đi dự tiệc đều rất thích hợp.</p>\r\n<p>Bạn cũng có thể phá cách độc đáo khi kết hợp giày bốt cao cổ với những bộ trang phục mang phong cách thể thao hay phong cách bụi bặm, cùng cách trang điểm nhẹ nhàng khi nhìn vào bạn người khác sẽ thấy được ở bạn sự bùng nổ, tràn đầy năng lượng của tuổi trẻ của những ngày đầu xuân. Một cô nàng mạnh mẽ mà vẫn vô cùng cuốn hút và quyến rũ.</p>\r\n<h3>NHỮNG CÁCH PHỐI ĐỒ VỚI GIÀY BOOT CỰC CHUẨN CHO BẠN NỮ CHƠI TẾT</h3>\r\n<p>Nếu bạn là một cô gái nhẹ nhàng, dịu dàng thì bạn có thể mix giày boot với một bộ đầm xòe, dài tay. Bộ trang phục này sẽ rất hợp với thời tiết mùa Tết ấm áp năm nay. Với cách phối đồ này, bạn đi cùng với những anh chàng mặc những bộ đồ thời trang công sở nam thì còn gì quả là một cặp đôi hoàn hảo .</p>\r\n</br>\r\n<p>Hãy xuống phố đón xuân mới nhiều niềm vui và rạng rỡ cùng những đô giày boot cá tính, thời trang và sành điệu nhé.</p>', '/storage/uploads/2024/08/13/nhung-cach-phoi-do-voi-giay-boot-cuc-chuan-cho-ban-nu-choi-tet-1 (1).jpg', 5, '2024-08-12 21:15:18', '2024-08-12 21:15:18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('goUg2q68GrloZwwFvCOl54d3ioE2uTH4v1YzT7nE', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiOW5ncTJ5aWg3VnE3a2IzdTBOb3llZ1VpaDlSeFZRUkFjZWJHYzViaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly9jYWxsaWUudGVzdC9kYW5oLW11Yy81LUhFQUxUSFkuaHRtbCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTI6ImxvZ2luX3N0YWZmXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjtzOjI6ImlkIjtpOjI7fQ==', 1723522603);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `is_active` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `staff`
--

INSERT INTO `staff` (`id`, `name`, `mobile`, `username`, `password`, `email`, `is_active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hồ Tú Tài', '0905185626', 'admin', '$2y$12$JdT.DMAxT1NZut1dYXdUheO4mnxoQnnzeJ0wh5fykA7EYcixEm1iW', 'admin@gmail.com', 1, '9YNKJNxLTQEylIlr0PFO8mZRtMcyfd79GwdwncKGsAZxU7iaqV6sT4qZhp1k', '2024-08-09 20:14:29', '2024-08-09 20:14:29'),
(2, 'Hồ Tú Tài', '0905185627', 'admin1', '$2y$12$ine3iaz9toJuiJ0ZLDl/L.vDTyACrVUONbft3FH/wUDFBBB7YAOxK', 'hotutai2002@gmail.com', 1, 'caYPKJQ6DnySaaIo8uXtidoWQXVvfWUKCMz0f39Wmu0ZVTxXLeSPqzMOvYWO', '2024-08-10 04:14:02', '2024-08-10 04:14:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'SOCIAL', '2024-08-09 20:15:22', '2024-08-09 20:15:22'),
(2, 'LIFESTYLE', '2024-08-09 20:15:26', '2024-08-09 20:15:26'),
(3, 'BLOG', '2024-08-09 20:15:29', '2024-08-09 20:15:29'),
(4, 'TRAVEL', '2024-08-09 20:15:32', '2024-08-09 20:15:32'),
(5, 'TECHNOLOGY', '2024-08-09 20:15:36', '2024-08-09 20:15:36'),
(6, 'FASHION', '2024-08-09 20:15:39', '2024-08-09 20:15:39'),
(7, 'LIFE', '2024-08-09 20:15:44', '2024-08-09 20:15:44'),
(8, 'NEWS', '2024-08-09 20:15:48', '2024-08-09 20:15:48'),
(9, 'MAGAZINE', '2024-08-09 20:15:52', '2024-08-09 20:15:52'),
(10, 'FOOD', '2024-08-09 20:15:55', '2024-08-09 20:15:55'),
(11, 'HEALTHY', '2024-08-09 20:15:58', '2024-08-09 20:15:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tag_post`
--

CREATE TABLE `tag_post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tag_post`
--

INSERT INTO `tag_post` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, 3, NULL, NULL),
(2, 1, 4, NULL, NULL),
(11, 3, 2, NULL, NULL),
(12, 3, 6, NULL, NULL),
(13, 3, 9, NULL, NULL),
(14, 4, 1, NULL, NULL),
(15, 4, 3, NULL, NULL),
(16, 4, 4, NULL, NULL),
(17, 4, 6, NULL, NULL),
(18, 5, 1, NULL, NULL),
(19, 5, 2, NULL, NULL),
(20, 5, 3, NULL, NULL),
(21, 6, 1, NULL, NULL),
(22, 6, 2, NULL, NULL),
(23, 6, 7, NULL, NULL),
(24, 6, 10, NULL, NULL),
(25, 7, 3, NULL, NULL),
(26, 7, 6, NULL, NULL),
(27, 7, 7, NULL, NULL),
(28, 7, 11, NULL, NULL),
(29, 8, 2, NULL, NULL),
(30, 8, 3, NULL, NULL),
(31, 9, 2, NULL, NULL),
(32, 9, 3, NULL, NULL),
(33, 9, 5, NULL, NULL),
(34, 9, 6, NULL, NULL),
(35, 10, 1, NULL, NULL),
(36, 10, 2, NULL, NULL),
(37, 10, 3, NULL, NULL),
(38, 10, 7, NULL, NULL),
(39, 10, 11, NULL, NULL),
(40, 11, 2, NULL, NULL),
(41, 11, 3, NULL, NULL),
(42, 12, 1, NULL, NULL),
(43, 12, 2, NULL, NULL),
(44, 12, 3, NULL, NULL),
(45, 12, 11, NULL, NULL),
(46, 13, 1, NULL, NULL),
(47, 13, 2, NULL, NULL),
(48, 13, 3, NULL, NULL),
(49, 13, 6, NULL, NULL),
(50, 13, 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category_post`
--
ALTER TABLE `category_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_post_post_id_foreign` (`post_id`),
  ADD KEY `category_post_category_id_foreign` (`category_id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Chỉ mục cho bảng `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tag_post`
--
ALTER TABLE `tag_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tag_post_post_id_foreign` (`post_id`),
  ADD KEY `tag_post_tag_id_foreign` (`tag_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `category_post`
--
ALTER TABLE `category_post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tag_post`
--
ALTER TABLE `tag_post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `category_post`
--
ALTER TABLE `category_post`
  ADD CONSTRAINT `category_post_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_post_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `tag_post`
--
ALTER TABLE `tag_post`
  ADD CONSTRAINT `tag_post_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tag_post_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
