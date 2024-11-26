-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2024 at 10:04 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_bayu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `nama`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', '$2y$10$mIgX.HoqFitZ59vhyjgzyu7lNbjUXyQW1yjHLoycuLCwcRT7tcqXa', NULL, '2023-03-23 09:12:31');

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kontak` varchar(255) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `nilai` double(8,4) DEFAULT NULL,
  `ranking` int(3) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id`, `nama`, `alamat`, `kontak`, `keterangan`, `nilai`, `ranking`, `created_at`, `updated_at`) VALUES
(17, 'Bell Queen Samarinda', 'Jl. Pramuka 3B No. 117 Kota Samarinda', '081357245079', 'https://goo.gl/maps/fAXxydpGFRqX2Tdc9', 0.0230, 28, '2023-08-24 05:16:27', '2024-11-26 12:48:14'),
(18, 'Eksel Jio', 'Jl. Perjuangan 4 dalam, Blok. C, Sempaja Selatan. Kota Samarinda', '082234456370', 'https://goo.gl/maps/JcK7ASvP3Eu6HV7z6', 0.0256, 24, '2023-08-24 05:17:33', '2024-11-26 12:48:14'),
(19, 'Graha As Salam', 'Jl. Siti Aisyah Gg. 15 Tlk. Lerong Ilir, Kota Samarinda', '081253224555', 'https://goo.gl/maps/VCGWnKdBkcmz11bf8', 0.0292, 16, '2023-08-24 05:18:33', '2024-11-26 12:48:14'),
(20, 'Grand Raudhah Syariah', 'Jl. Perjuangan 2 No. 9 Kota Samarinda', '081347975557', 'https://goo.gl/maps/5KnQS9VTyqdM2Nf79', 0.0382, 11, '2023-08-24 05:19:54', '2024-11-26 12:48:14'),
(21, 'Hijau Azmi', 'Jl. Perjuangan 7 Gg. Cherry No.46, Kota Samarinda', '081346628987', 'https://goo.gl/maps/vJpUd4JG2q7Zi6nu8', 0.0231, 27, '2023-08-24 05:21:01', '2024-11-26 12:48:14'),
(22, 'Juita', 'Jl. A. Wahab Syahranie KOMPLEK VILLA TAMARA, Kota Samarinda', '082246671991', 'https://goo.gl/maps/UUsZeGp5MDmpXyc1A', 0.0413, 7, '2023-08-24 05:21:46', '2024-11-26 12:48:14'),
(23, 'Pelangi', 'Jl. Perjuangan 4 Dalam, Kota Samarinda', '082234456370', 'https://goo.gl/maps/BL1EYDGy7oVCRE739', 0.0291, 17, '2023-08-24 05:23:22', '2024-11-26 12:48:14'),
(24, 'Persik', 'Jl M. Yamin Gg. Persik seberang kampus Widyagama samarinda', '081253360154', 'https://goo.gl/maps/MqVPh9VxWFNvJyeV8', 0.0264, 23, '2023-08-24 05:25:32', '2024-11-26 12:48:14'),
(25, 'Shafira', 'Jl. Pemuda II Blok. C No.97, Temindung Permai, Kec. Sungai Pinang, Kota Samarinda', '082157065556', 'https://goo.gl/maps/SwrTanTDV8jpJgdH7', 0.0291, 18, '2023-08-24 05:26:08', '2024-11-26 12:48:14'),
(26, 'Sophie', 'Jl. Perjuangan No.31, Kel. Sempaja Sel, Kec. Samarinda Utara, Kota Samarinda, Kalimantan Timur', '082155524408', 'https://goo.gl/maps/MPrMkQT67go2AXSP8', 0.0210, 29, '2023-08-24 05:27:47', '2024-11-26 12:48:14'),
(27, 'Starmoon', 'Jl. Pemuda III, Temindung Permai, Kec. Sungai Pinang, Kota Samarinda', '081350014005', 'https://goo.gl/maps/4wdHYvX7BDRfKao49', 0.0443, 5, '2023-08-24 05:28:34', '2024-11-26 12:48:14'),
(28, 'Sultan Ratu', 'Jl. M. Yamin Gg. Persik Perum. Savilla Residence No. C7, Kota Samarinda', '081251212892', 'https://goo.gl/maps/AdE9v3UAQ3YMdWti7', 0.0418, 6, '2023-08-24 05:29:43', '2024-11-26 12:48:14'),
(29, 'Suwandi', 'Jl. H. Suwandi III No. 27, Gn. Kelua, Kec. Samarinda Ulu, Kota Samarinda', '082234456370', 'https://goo.gl/maps/S4g1CMW7HnivdMnV6', 0.0153, 30, '2023-08-24 05:30:13', '2024-11-26 12:48:14'),
(30, 'Unmul', 'Jl. Perjuangan 2, Sempaja Sel., Kec. Samarinda Utara, Kota Samarinda, Kalimantan Timur', '082234456370', 'https://goo.gl/maps/c5tHtxEqcDgLWLy26', 0.0412, 9, '2023-08-24 05:30:55', '2024-11-26 12:48:14'),
(31, 'Zayan', 'Jl. Dr. Sutomo No. 23, Sidodadi, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur', '082234456370', 'https://goo.gl/maps/PkHymPDhZwzviSQV7', 0.0291, 19, '2023-08-24 05:31:48', '2024-11-26 12:48:14'),
(32, '115 Ketapang', 'Jl. Sultan Alimuddin Gg. Ketapang 1A Kel. Sambutan Kec. Sambutan Kota Samarinda', '081377987972', 'https://goo.gl/maps/iJxU4PX9pZzHEmtv6', 0.0234, 26, '2023-08-24 05:32:45', '2024-11-26 12:48:14'),
(33, 'Amoura', 'Jl. Wahid Hasyim 2 Gg. Sepakat II, Sempaja Sel., Kec. Samarinda Utara, Kota Samarinda, Kalimantan Timur', '081350164117', 'https://goo.gl/maps/6nMfUtou6CRKLsmCA', 0.0289, 20, '2023-08-24 05:33:17', '2024-11-26 12:48:14'),
(34, 'Blessing Residence', 'Jl. Perjuangan 7, Sempaja Sel., Kec. Samarinda Utara, Kota Samarinda, Kalimantan Timur', '081347462287', 'https://goo.gl/maps/RSjDnMtCjKwyw9Eb8', 0.0460, 3, '2023-08-24 05:33:49', '2024-11-26 12:48:14'),
(35, 'Cendrawasih Permai 09', 'Jl. A. Yani Komplek Perumahan Cendrawasih Permai Blok. A kiri No. 10, Kota Samarinda, Kalimantan Timur', '081277770718', 'https://goo.gl/maps/xwMV7nDJ199XruYK7', 0.0332, 14, '2023-08-24 05:34:41', '2024-11-26 12:48:14'),
(36, 'El Roi', 'Jl. Pramuka 8 No.6, Gn. Kelua, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur', '081230444403', 'https://goo.gl/maps/39D3BfxhhrMuTtXN7', 0.0402, 10, '2023-08-24 05:35:20', '2024-11-26 12:48:14'),
(37, 'Endera', 'Jl. Bengkuring Raya No. 410, Sempaja Timur, Kec. Samarinda Utara, Kota Samarinda, Kalimantan Timur', '085247799937', 'https://goo.gl/maps/12CyVoZNbYLG5MdQ6', 0.0329, 15, '2023-08-24 05:35:58', '2024-11-26 12:48:14'),
(38, 'Green Borneo', 'Jl. Ontel 5. Sidodadi, Samarinda Ulu, Kota Samarinda ', '085246480201', 'https://goo.gl/maps/xVJWUKv9uJv1anEB8', 0.0286, 21, '2023-08-24 05:36:32', '2024-11-26 12:48:14'),
(39, 'Haji Sukiman', 'Jl. P. Antasari. Teluk Lerong Ulu, Sungai Kunjang, Kota Samrinda', '082234456370', 'https://goo.gl/maps/J11vPMam5QtUBJiu9', 0.0339, 13, '2023-08-24 05:37:14', '2024-11-26 12:48:14'),
(40, 'Haji Ramin', 'Gg. Tinggiran II, Air Putih, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur', '085349342259', 'https://goo.gl/maps/XRvdjVLQqvD4a6ak8', 0.0377, 12, '2023-08-24 05:37:47', '2024-11-26 12:48:14'),
(41, 'House Of Gamelan', 'Jl. Gamelan No.14, Dadi Mulya, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur', '08125818139', 'https://goo.gl/maps/83dgmQzHLMEqpbB98', 0.0413, 8, '2023-08-24 05:38:19', '2024-11-26 12:48:14'),
(42, 'Lestari', 'Jl. Siradj Salman No.1, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur', '082234456370', 'https://goo.gl/maps/4xsbET9KKSws9ruu7', 0.0501, 1, '2023-08-24 05:38:58', '2024-11-26 12:48:14'),
(43, 'Malinda', 'Jl. Suwandi 5 No.26, Gn. Kelua, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur', '081337800064', 'https://goo.gl/maps/YcweTP429jj7z3ZF7', 0.0277, 22, '2023-08-24 05:39:30', '2024-11-26 12:48:14'),
(44, 'Nidira', 'Jl. Anggrek Panda 2 Kel. Air Hitam, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur', '081348014880', 'https://goo.gl/maps/zeYqPU1dRju3vGyy5', 0.0453, 4, '2023-08-24 05:40:10', '2024-11-26 12:48:14'),
(45, 'Pandan Harum', 'Jl. Erlyza, Perum. Pandan Harum, Air Hitam, Samarinda Ulu, Kota Samarinda, Kalimantan Timur', '085787965004', 'https://goo.gl/maps/RSqZQnGzrtJq8bne7', 0.0256, 25, '2023-08-24 05:40:49', '2024-11-26 12:48:14'),
(46, 'Rumah Assalam', 'Jl. P. Hidayatullah Gg. Al Huda, Pelabuhan, Kota Samarinda, Kalimantan Timur', '081310716390', 'https://goo.gl/maps/vRL76d3RhPYvbGCJ8', 0.0472, 2, '2023-08-24 05:41:24', '2024-11-26 12:48:14');

-- --------------------------------------------------------

--
-- Table structure for table `alternatif_sub_kriteria`
--

CREATE TABLE `alternatif_sub_kriteria` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alternatif_id` bigint(20) UNSIGNED NOT NULL,
  `sub_kriteria_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alternatif_sub_kriteria`
--

INSERT INTO `alternatif_sub_kriteria` (`id`, `alternatif_id`, `sub_kriteria_id`) VALUES
(152, 17, 3),
(153, 17, 7),
(154, 17, 13),
(155, 17, 20),
(156, 17, 21),
(157, 18, 4),
(158, 18, 8),
(159, 18, 14),
(160, 18, 20),
(161, 18, 23),
(162, 19, 3),
(163, 19, 8),
(164, 19, 15),
(165, 19, 19),
(166, 19, 21),
(167, 20, 5),
(168, 20, 6),
(169, 20, 14),
(170, 20, 20),
(171, 20, 21),
(172, 21, 3),
(173, 21, 8),
(174, 21, 14),
(175, 21, 20),
(176, 21, 21),
(177, 22, 5),
(178, 22, 6),
(179, 22, 14),
(180, 22, 19),
(181, 22, 22),
(182, 23, 4),
(183, 23, 8),
(184, 23, 14),
(185, 23, 19),
(186, 23, 21),
(187, 24, 4),
(188, 24, 9),
(189, 24, 13),
(190, 24, 17),
(191, 24, 21),
(192, 25, 4),
(193, 25, 8),
(194, 25, 14),
(195, 25, 19),
(196, 25, 21),
(197, 26, 3),
(198, 26, 8),
(199, 26, 13),
(200, 26, 20),
(201, 26, 22),
(202, 27, 5),
(203, 27, 6),
(204, 27, 14),
(205, 27, 18),
(206, 27, 21),
(207, 28, 5),
(208, 28, 6),
(209, 28, 13),
(210, 28, 17),
(211, 28, 22),
(212, 29, 2),
(213, 29, 10),
(214, 29, 13),
(215, 29, 19),
(216, 29, 23),
(217, 30, 5),
(218, 30, 9),
(219, 30, 15),
(220, 30, 16),
(221, 30, 23),
(222, 31, 4),
(223, 31, 8),
(224, 31, 14),
(225, 31, 19),
(226, 31, 21),
(227, 32, 4),
(228, 32, 10),
(229, 32, 15),
(230, 32, 19),
(231, 32, 24),
(232, 33, 4),
(233, 33, 9),
(234, 33, 15),
(235, 33, 19),
(236, 33, 23),
(237, 34, 5),
(238, 34, 6),
(239, 34, 14),
(240, 34, 17),
(241, 34, 21),
(242, 35, 5),
(243, 35, 7),
(244, 35, 13),
(245, 35, 20),
(246, 35, 21),
(247, 36, 5),
(248, 36, 6),
(249, 36, 13),
(250, 36, 18),
(251, 36, 22),
(252, 37, 3),
(253, 37, 8),
(254, 37, 15),
(255, 37, 16),
(256, 37, 21),
(257, 38, 4),
(258, 38, 8),
(259, 38, 14),
(260, 38, 19),
(261, 38, 22),
(262, 39, 5),
(263, 39, 10),
(264, 39, 15),
(265, 39, 17),
(266, 39, 22),
(267, 40, 5),
(268, 40, 9),
(269, 40, 15),
(270, 40, 19),
(271, 40, 21),
(272, 41, 5),
(273, 41, 6),
(274, 41, 14),
(275, 41, 19),
(276, 41, 22),
(277, 42, 5),
(278, 42, 6),
(279, 42, 15),
(280, 42, 18),
(281, 42, 22),
(282, 43, 3),
(283, 43, 8),
(284, 43, 14),
(285, 43, 16),
(286, 43, 23),
(287, 44, 5),
(288, 44, 6),
(289, 44, 14),
(290, 44, 17),
(291, 44, 22),
(292, 45, 4),
(293, 45, 8),
(294, 45, 14),
(295, 45, 20),
(296, 45, 23),
(297, 46, 5),
(298, 46, 7),
(299, 46, 15),
(300, 46, 18),
(301, 46, 22);

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alternatif_id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id`, `alternatif_id`, `foto`, `created_at`, `updated_at`) VALUES
(27, 22, 'foto/OMQgslqpPUnAiBzwgQOsbGv0HqRBv7At2bd9Picf.jpg', '2023-08-24 05:21:46', '2023-08-24 05:21:46'),
(29, 24, 'foto/zHOY9I7hZApAlkRw9RP5au1bBCZ1YbXOGJeRib71.jpg', '2023-08-24 05:25:32', '2023-08-24 05:25:32'),
(44, 39, 'foto/cSJZ1lz0au2XI9FdXAgLCfWR1flOdyugbFyh5Ci6.jpg', '2023-08-24 05:37:14', '2023-08-24 05:37:14'),
(48, 43, 'foto/w9KVegrJnpO2RgvRuPX3OC6bueS4Iv4YW6xFTuyW.jpg', '2023-08-24 05:39:30', '2023-08-24 05:39:30'),
(52, 42, 'foto/x400tOJl9ZWlKoGgyBbdhD04R9w09JFWvY9LCK32.jpg', '2023-09-13 06:55:58', '2023-09-13 06:55:58'),
(53, 17, 'foto/AOWaMgpNm5jcC63yFamvjT70kY2Gwu0qiCuuNnzb.jpg', '2023-09-14 03:38:27', '2023-09-14 03:38:27'),
(54, 18, 'foto/FHIlvMmpjxYCokD3dIITaleksqMzMZ8j7yvh2mJf.jpg', '2023-09-14 03:38:53', '2023-09-14 03:38:53'),
(55, 19, 'foto/N1BOGMvhZTldVdxUCpTZFGKVUgFitBvT9EhCRKbU.jpg', '2023-09-14 03:39:32', '2023-09-14 03:39:32'),
(56, 20, 'foto/8xDiJB1E6gzNKAv1eyIVdEdgUADINAwfKzkMOyZz.jpg', '2023-09-14 03:39:44', '2023-09-14 03:39:44'),
(57, 21, 'foto/axGWVVrOEV8W4bj5enbYYzTYwZN0tGMpsRetl2oP.jpg', '2023-09-14 03:39:57', '2023-09-14 03:39:57'),
(58, 23, 'foto/ezdqqcAva5b6OXLDbJKftNC1YJoPiwhm6fDSipJw.jpg', '2023-09-14 03:40:33', '2023-09-14 03:40:33'),
(59, 25, 'foto/e2lfqsVafcqH89roV9M0Jd7GHdzYPlqE1iinSuJW.jpg', '2023-09-14 03:40:53', '2023-09-14 03:40:53'),
(60, 26, 'foto/Sj2CbfHEdYMghqiJdbLcFKZzsNDyaZCPPONXQpiO.jpg', '2023-09-14 03:41:05', '2023-09-14 03:41:05'),
(61, 29, 'foto/Eoj6B2nILAecHvm8zbnCbFCC8yx9OJppHJ5sxJOE.jpg', '2023-09-14 03:41:51', '2023-09-14 03:41:51'),
(62, 30, 'foto/QNBhN0m8PjdgU44LU2f0N1Uh56AQAECrWc03HckG.jpg', '2023-09-14 03:42:06', '2023-09-14 03:42:06'),
(63, 31, 'foto/eSuPCNSxqLWZ4onSFbAGTI9K14ur1l5mravFWomV.jpg', '2023-09-14 03:42:17', '2023-09-14 03:42:17'),
(64, 32, 'foto/DlUYq2C6yeAJlICedFTcAOvPv64IkB0x4pke6KiC.jpg', '2023-09-14 03:42:27', '2023-09-14 03:42:27'),
(65, 33, 'foto/c3oOu9BfSy0V4FLSSwgwuAr2CvMRnv5CJtphrXhQ.jpg', '2023-09-14 03:42:49', '2023-09-14 03:42:49'),
(66, 34, 'foto/Ork2ExaPBDv3WWIJjTF9INWpDpYBlpTUQblcJmR5.jpg', '2023-09-14 03:43:01', '2023-09-14 03:43:01'),
(67, 36, 'foto/aamsMD56y6i05TOFPaNuX4wZFlYeypDvMbAPZUHj.jpg', '2023-09-14 03:43:22', '2023-09-14 03:43:22'),
(68, 37, 'foto/edgaqYTg5TFFH918NAX96Qju5V61QEZRANLk00YD.jpg', '2023-09-14 03:43:41', '2023-09-14 03:43:41'),
(69, 38, 'foto/7DQ7UO5TboTGXvmYdMwxkux8PJn5gd0FAQvusory.jpg', '2023-09-14 03:43:50', '2023-09-14 03:43:50'),
(70, 41, 'foto/t127OlKi1ydkQMyRTduclPYj1J5TqjebKF9Ui8xv.jpg', '2023-09-14 03:44:20', '2023-09-14 03:44:20'),
(71, 44, 'foto/4sOvmIJlATNjzZADDLotQ35RHni5jHLlNETz8YtF.jpg', '2023-09-14 03:44:53', '2023-09-14 03:44:53'),
(72, 45, 'foto/Ep5vbiGfR0gRKjNLw3CtAP4JjBX6dqr7Ew4xQKkz.jpg', '2023-09-14 03:45:03', '2023-09-14 03:45:03'),
(74, 35, 'foto/ut3otZjmru9GHBmKbYsJOU36lk5SbkCCEa0ciZkW.jpg', '2023-09-14 03:46:20', '2023-09-14 03:46:20'),
(75, 27, 'foto/7X5bGbiJhSz0mpuWAIfGrInHJm99CZmf2UM4Hg60.jpg', '2023-09-14 03:47:16', '2023-09-14 03:47:16'),
(76, 46, 'foto/yH2oyfzCXgphdvZ4IvIsTME0JxUaBUetwq8gRpAm.jpg', '2023-09-14 03:49:26', '2023-09-14 03:49:26'),
(77, 28, 'foto/5hjCqxw3UetU4QSlmQEsupYRk2p7mtHx7c4T0XlB.jpg', '2023-09-14 03:56:26', '2023-09-14 03:56:26'),
(78, 40, 'foto/9MDtmOcIoCrNP98QHHoXoqMg4f9ZsmSj8uLBXh9X.jpg', '2023-09-14 03:57:41', '2023-09-14 03:57:41');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `atribut` enum('benefit','cost') NOT NULL,
  `bobot` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id`, `nama`, `atribut`, `bobot`, `created_at`, `updated_at`) VALUES
(1, 'harga', 'cost', 5, NULL, NULL),
(2, 'fasilitas', 'benefit', 4, NULL, NULL),
(3, 'Jarak', 'cost', 3, NULL, NULL),
(4, 'luas kamar', 'benefit', 2, NULL, NULL),
(5, 'keamanan', 'benefit', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_kriteria`
--

CREATE TABLE `sub_kriteria` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bobot` bigint(20) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `kriteria_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_kriteria`
--

INSERT INTO `sub_kriteria` (`id`, `bobot`, `keterangan`, `kriteria_id`, `created_at`, `updated_at`) VALUES
(1, 5, 'Sangat Murah', 1, NULL, NULL),
(2, 4, 'Murah', 1, NULL, NULL),
(3, 3, 'Sedang', 1, NULL, NULL),
(4, 2, 'Mahal', 1, NULL, NULL),
(5, 1, 'Sangat Mahal', 1, NULL, NULL),
(6, 5, 'Sangat Lengkap', 2, NULL, NULL),
(7, 4, 'Cukup Lengkap', 2, NULL, NULL),
(8, 3, 'Lengkap', 2, NULL, NULL),
(9, 2, 'Kurang Lengkap', 2, NULL, NULL),
(10, 1, 'Tidak Lengkap', 2, NULL, NULL),
(11, 5, 'Sangat Dekat', 3, NULL, NULL),
(12, 4, 'Dekat', 3, NULL, NULL),
(13, 3, 'Sedang', 3, NULL, NULL),
(14, 2, 'Jauh', 3, NULL, NULL),
(15, 1, 'Sangat Jauh', 3, NULL, NULL),
(16, 5, 'Sangat Luas', 4, NULL, NULL),
(17, 4, 'Luas', 4, NULL, NULL),
(18, 3, 'Sedang', 4, NULL, NULL),
(19, 2, 'Kecil', 4, NULL, NULL),
(20, 1, 'Sangat Kecil', 4, NULL, NULL),
(21, 5, 'Sangat Aman', 5, NULL, NULL),
(22, 4, 'Aman', 5, NULL, NULL),
(23, 3, 'Cukup Aman', 5, NULL, NULL),
(24, 2, 'Kurang Aman', 5, NULL, NULL),
(25, 1, 'Sangat Aman', 5, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alternatif_sub_kriteria`
--
ALTER TABLE `alternatif_sub_kriteria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alternatif_sub_kriteria_alternatif_id_foreign` (`alternatif_id`),
  ADD KEY `alternatif_sub_kriteria_sub_kriteria_id_foreign` (`sub_kriteria_id`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foto_alternatif_id_foreign` (`alternatif_id`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_kriteria_kriteria_id_foreign` (`kriteria_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `alternatif_sub_kriteria`
--
ALTER TABLE `alternatif_sub_kriteria`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=302;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alternatif_sub_kriteria`
--
ALTER TABLE `alternatif_sub_kriteria`
  ADD CONSTRAINT `alternatif_sub_kriteria_alternatif_id_foreign` FOREIGN KEY (`alternatif_id`) REFERENCES `alternatif` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `alternatif_sub_kriteria_sub_kriteria_id_foreign` FOREIGN KEY (`sub_kriteria_id`) REFERENCES `sub_kriteria` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `foto_alternatif_id_foreign` FOREIGN KEY (`alternatif_id`) REFERENCES `alternatif` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  ADD CONSTRAINT `sub_kriteria_kriteria_id_foreign` FOREIGN KEY (`kriteria_id`) REFERENCES `kriteria` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
