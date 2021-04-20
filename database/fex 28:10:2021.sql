-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 28, 2021 at 11:57 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fex`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountType`
--

CREATE TABLE `accountType` (
  `user_type_id` int(11) NOT NULL,
  `user_type_name` varchar(100) NOT NULL,
  `active_flag` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accountType`
--

INSERT INTO `accountType` (`user_type_id`, `user_type_name`, `active_flag`) VALUES
(1, 'Admin', 'Y'),
(2, 'Vendor', 'Y'),
(3, 'Tenant', 'Y'),
(4, 'User', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `adminAccount`
--

CREATE TABLE `adminAccount` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'admin.jpg',
  `active_flag` char(1) NOT NULL DEFAULT 'Y',
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminAccount`
--

INSERT INTO `adminAccount` (`id`, `user_id`, `fullname`, `photo`, `active_flag`, `creation_date`) VALUES
(1, 1, 'admin', 'admin.jpg', 'Y', '2021-02-20 19:50:39'),
(2, 8, 'Hwang Yeji', 'admin.jpg', 'Y', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `boothColor`
--

CREATE TABLE `boothColor` (
  `id` int(11) NOT NULL,
  `color` varchar(100) NOT NULL,
  `css` varchar(150) NOT NULL,
  `flag` varchar(1) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `boothColor`
--

INSERT INTO `boothColor` (`id`, `color`, `css`, `flag`) VALUES
(1, 'purple', 'filter: hue-rotate(0deg);', 'Y'),
(2, 'lilac', 'filter: hue-rotate(40deg);', 'Y'),
(3, 'pink', 'filter: hue-rotate(80deg);', 'Y'),
(4, 'orange', 'filter: hue-rotate(120deg);', 'Y'),
(5, 'solid', 'filter: hue-rotate(160deg);', 'Y'),
(6, 'army', 'filter: hue-rotate(200deg);', 'Y'),
(7, 'green', 'filter: hue-rotate(240deg);', 'Y'),
(8, 'tosca', 'filter: hue-rotate(280deg);', 'Y'),
(9, 'blue', 'filter: hue-rotate(320deg);', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `categoryType`
--

CREATE TABLE `categoryType` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `flag` varchar(1) NOT NULL DEFAULT 'Y',
  `icon` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categoryType`
--

INSERT INTO `categoryType` (`id`, `name`, `flag`, `icon`) VALUES
(1, 'Formal', 'Y', 'formal.png'),
(2, 'Non-Formal', 'Y', 'non formal.png'),
(3, 'Lainnya', 'Y', 'fashion icon.png'),
(4, 'Vendor', 'Y', 'fashion icon.png');

-- --------------------------------------------------------

--
-- Table structure for table `displaySetting`
--

CREATE TABLE `displaySetting` (
  `id` int(11) NOT NULL,
  `link` text DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `page` varchar(255) DEFAULT NULL,
  `flag` varchar(1) DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `displaySetting`
--

INSERT INTO `displaySetting` (`id`, `link`, `filename`, `page`, `flag`) VALUES
(1, 'https://www.youtube.com/embed/oqnn_xhELG8', NULL, 'Livestream', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitasArchieve`
--

CREATE TABLE `fasilitasArchieve` (
  `id_fasilitas` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_num` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `creation_date` date NOT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fasilitasArchieve`
--

INSERT INTO `fasilitasArchieve` (`id_fasilitas`, `user_id`, `order_num`, `filename`, `note`, `creation_date`, `update_date`) VALUES
(3, 2, 1, 'foto-2-903d6f17a979be631182a0216a17c2fb.jpg', 'Suasana di pabrik', '2021-02-25', '2021-02-28'),
(4, 2, 2, 'foto-2-0fd2424f684dc11825b8bf392132d71b.jpg', 'Pendiri', '2021-02-25', '2021-02-28'),
(8, 6, 1, 'fasilitas-6-81532b25e1ad4dfd88d4cb3930bfd1ae.jpg', 'Keren gais di Rinjani', '2021-02-26', '0000-00-00'),
(9, 6, 2, 'fasilitas-6-4c60a6c4b06ff68674f8b1d100fcdfec.jpg', 'Keren di danau', '2021-02-26', '0000-00-00'),
(10, 6, 3, 'fasilitas-6-a1925dbb8ab480041b7577f26e216797.jpg', 'Keren di Semeru', '2021-02-26', '0000-00-00'),
(11, 11, 1, 'fasilitas-11-30e62fddc14c05988b44e7c02788e187.jpg', 'RPU', '2021-02-27', '0000-00-00'),
(12, 11, 2, 'fasilitas-11-8cda81fc7ad906927144235dda5fdf15.jpg', 'Bengkel Otomotif', '2021-02-27', '0000-00-00'),
(13, 11, 3, 'fasilitas-11-fe5df232cafa4c4e0f1a0294418e5660.jpg', 'Ruang Gambar Teknik', '2021-02-27', '0000-00-00'),
(14, 7, 1, 'fasilitas-7-648ca1195b8b7ab6ad307c3498281447.jpg', 'Lapangan Tengah', '2021-02-27', '0000-00-00'),
(15, 7, 2, 'fasilitas-7-1623351d585163aa528d080009203ab6.jpg', 'Ruang 8D', '2021-02-27', '0000-00-00'),
(16, 7, 3, 'fasilitas-7-f333f17385a7c655b060a0404afc5cca.jpg', 'Lapangan Depan', '2021-02-27', '0000-00-00'),
(17, 2, 1, 'foto-2-903d6f17a979be631182a0216a17c2fb.jpg', 'Suasana di pabrik', '2021-02-28', '2021-02-28');

-- --------------------------------------------------------

--
-- Table structure for table `fotoArchieve`
--

CREATE TABLE `fotoArchieve` (
  `id_photo` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_num` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `creation_date` date NOT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fotoArchieve`
--

INSERT INTO `fotoArchieve` (`id_photo`, `user_id`, `order_num`, `filename`, `creation_date`, `update_date`) VALUES
(4, 2, 1, 'foto-2-032498ca4c4dbaca0a56ca1015c95b76.jpg', '2021-02-25', '2021-02-28'),
(5, 2, 2, 'foto-2-cc156448bc4ee16fe84ecdeb5e133b95.jpg', '2021-02-25', '2021-02-28'),
(6, 2, 3, 'foto-2-e564bd4a9893d5bc3fcdd662b320bd08.jpg', '2021-02-25', '2021-02-28'),
(10, 6, 1, 'foto-6-cce4c01f033291257eab1d082d39d8bd.jpg', '2021-02-26', '0000-00-00'),
(11, 6, 2, 'foto-6-96649caa6a580de9cdd73f78d6aa7515.jpg', '2021-02-26', '0000-00-00'),
(12, 6, 3, 'foto-6-e45ab86d8e2abfe687c4eeeca16fcb69.jpg', '2021-02-26', '0000-00-00'),
(13, 11, 1, 'foto-11-d0096ec6c83575373e3a21d129ff8fef.jpg', '2021-02-27', '0000-00-00'),
(14, 11, 2, 'foto-11-032b2cc936860b03048302d991c3498f.jpg', '2021-02-27', '0000-00-00'),
(15, 11, 3, 'foto-11-18e2999891374a475d0687ca9f989d83.jpg', '2021-02-27', '0000-00-00'),
(16, 7, 1, 'foto-7-5e92a5b37887dd889950b0f617f157ff.jpg', '2021-02-27', '0000-00-00'),
(17, 7, 2, 'foto-7-7ba62b904108e9410ed8135f51cefc26.jpg', '2021-02-27', '0000-00-00'),
(18, 7, 3, 'foto-7-a76398a8c063997eff6be09e1a115c99.jpg', '2021-02-27', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `generalAccount`
--

CREATE TABLE `generalAccount` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `res_password` varchar(6) DEFAULT NULL,
  `fullname` varchar(30) DEFAULT NULL,
  `phone_number` varchar(17) DEFAULT NULL,
  `user_type_id` int(11) NOT NULL DEFAULT 0,
  `admin_acc_flag` varchar(1) NOT NULL DEFAULT 'N',
  `vendor_acc_flag` varchar(1) NOT NULL DEFAULT 'N',
  `tenant_acc_flag` varchar(1) NOT NULL DEFAULT 'N',
  `creation_date` datetime DEFAULT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `generalAccount`
--

INSERT INTO `generalAccount` (`user_id`, `username`, `email`, `password`, `res_password`, `fullname`, `phone_number`, `user_type_id`, `admin_acc_flag`, `vendor_acc_flag`, `tenant_acc_flag`, `creation_date`, `update_date`) VALUES
(1, 'admin', 'admin@hmssemarang.com', 'admin123', 'XVY312', 'Admin FEX', '081234567890', 1, 'Y', 'N', 'N', '2021-02-20 19:48:59', '0000-00-00'),
(2, 'VE-0001', 'info@sidomuncul.co.id', 'sidomuncul123', 'QBUP0W', 'Sidomuncul Sejak 1951', '628199281722', 2, 'N', 'Y', 'N', '2021-02-20 23:38:50', '2021-02-28'),
(3, 'VE-0002', 'marketing@tango.co.id', '0dr3UWJ1', '74GI5G', 'Tango', '6287711002', 2, 'N', 'Y', 'N', '2021-02-20 23:43:59', '0000-00-00'),
(4, 'VE-0003', 'weareall@supreme.co.sg', 'G92qIHcB', 'YEQ3GF', 'Supreme', '658312219921', 2, 'N', 'Y', 'N', '2021-02-20 23:45:57', '0000-00-00'),
(5, 'VE-0004', 'ourshoes@belenciaga.co.id', 'KFBaASH5', 'IYWQEC', 'Belenciaga', '65099881128', 2, 'N', 'Y', 'N', '2021-02-21 01:05:07', '0000-00-00'),
(6, 'TE-0001', 'pr@hikingtouragency.co.id', 'hiking123', '2ZKYZS', 'Hiking Tour Agency', '9889009', 3, 'N', 'N', 'Y', '2021-02-21 01:21:10', '2021-02-26'),
(7, 'TE-0002', 'smpn2_semarang@yahoo.com', 'Yyz5gT2I', 'E4R2G4', 'SMP Negeri 2 Semarang', '8411211', 3, 'N', 'N', 'Y', '2021-02-21 01:24:40', '2021-02-27'),
(8, 'ADM-0002', 'yeji.admin@hmssemarang.com', 'bnowSxbE', 'WF6ORF', 'Hwang Yeji', '628129907371', 1, 'Y', 'N', 'N', '2021-02-21 02:07:15', '0000-00-00'),
(9, 'VE-0005', 'pubrec@dominospizza.co.id', 'qCaLHBp5', 'TU9UN2', 'Dominos Pizza', '78990112', 2, 'N', 'Y', 'N', '2021-02-24 19:07:41', '0000-00-00'),
(10, 'VE-0006', 'pubrec@wendyspizza.co.id', 'd9QURoE5', 'OAHOFY', 'Wendy s Pizza', '88112991', 2, 'N', 'Y', 'N', '2021-02-24 19:31:59', '0000-00-00'),
(11, 'TE-0003', 'smkn1smg@sch.id', 'Q6JtZB0u', '9W8OCM', 'SMK Negeri 1 Semarang', '6283102021321', 3, 'N', 'N', 'Y', '2021-02-27 07:31:38', '2021-02-27'),
(12, 'TE-0004', 'sman1smg@sch.id', 'lMQxiAjs', 'Y4YB42', 'SMA Negeri 1 Semarang', '6283102021321', 3, 'N', 'N', 'Y', '2021-02-27 07:32:09', '0000-00-00'),
(13, 'TE-0005', 'sdntlogosarikulon05@sch.id', 'A9nlWC6j', '10KXPC', 'SD Negeri Tlogosari Kulon 05', '6283102021321', 3, 'N', 'N', 'Y', '2021-02-27 07:32:39', '0000-00-00'),
(14, 'TE-0006', 'tk.syuhada.smg@gmail.com', 'TbPAx0R0', 'NS8SY4', 'TK As-Syuhada', '6283102021321', 3, 'N', 'N', 'Y', '2021-02-27 07:33:14', '0000-00-00'),
(16, 'sunrising2', 'fahimanabila82@gmail.com', 'gogo', 'OKJAR0', 'Fahima Choirun Nabila', '6283102021312', 4, 'N', 'N', 'N', '2021-02-28 11:20:38', '2021-02-28'),
(19, 'gettingsick', 'username@gmail.com', '00000', 'GRDB9M', 'Fahima Choirun Nabila', '6287655612166', 4, 'N', 'N', 'N', '2021-02-28 12:48:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `logActivity`
--

CREATE TABLE `logActivity` (
  `id_act` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL,
  `routes` varchar(100) NOT NULL,
  `user_type_id` int(11) NOT NULL,
  `con_action` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logActivity`
--

INSERT INTO `logActivity` (`id_act`, `user_id`, `creation_date`, `routes`, `user_type_id`, `con_action`) VALUES
(227, 1, '2021-02-28 15:25:38', '/Profile/3/6', 1, 0),
(228, 1, '2021-02-28 15:34:53', '/Profile/3/7', 1, 0),
(229, 1, '2021-02-28 15:34:56', '/Profile/3/11', 1, 0),
(230, 1, '2021-02-28 15:36:55', '/ci-new/Profile/3/6', 1, 0),
(231, 1, '2021-02-28 15:37:23', '/ci-new/DashboardAdmin', 1, 0),
(232, 1, '2021-02-28 15:37:23', '/ci-new/DashboardAdmin', 1, 0),
(233, 1, '2021-02-28 15:37:23', '/ci-new/DashboardAdmin', 1, 0),
(234, 1, '2021-02-28 15:37:23', '/ci-new/DashboardAdmin', 1, 0),
(235, 1, '2021-02-28 15:37:23', '/ci-new/DashboardAdmin', 1, 0),
(236, 1, '2021-02-28 15:37:23', '/ci-new/DashboardAdmin', 1, 0),
(237, 1, '2021-02-28 15:37:23', '/ci-new/DashboardAdmin', 1, 0),
(238, 1, '2021-02-28 15:37:23', '/ci-new/DashboardAdmin', 1, 0),
(239, 1, '2021-02-28 15:37:23', '/ci-new/DashboardAdmin', 1, 0),
(240, 1, '2021-02-28 15:37:23', '/ci-new/DashboardAdmin', 1, 0),
(241, 1, '2021-02-28 15:37:24', '/ci-new/DashboardAdmin', 1, 0),
(242, 1, '2021-02-28 15:37:24', '/ci-new/DashboardAdmin', 1, 0),
(243, 1, '2021-02-28 15:37:24', '/ci-new/DashboardAdmin', 1, 0),
(244, 1, '2021-02-28 15:37:24', '/ci-new/DashboardAdmin', 1, 0),
(245, 1, '2021-02-28 15:37:24', '/ci-new/DashboardAdmin', 1, 0),
(246, 1, '2021-02-28 15:37:24', '/ci-new/DashboardAdmin', 1, 0),
(247, 1, '2021-02-28 15:37:24', '/ci-new/DashboardAdmin', 1, 0),
(248, 1, '2021-02-28 15:37:24', '/ci-new/DashboardAdmin', 1, 0),
(249, 1, '2021-02-28 15:37:24', '/ci-new/DashboardAdmin', 1, 0),
(250, 1, '2021-02-28 15:37:24', '/ci-new/DashboardAdmin', 1, 0),
(251, 1, '2021-02-28 15:37:25', '/ci-new/DashboardAdmin', 1, 0),
(252, 1, '2021-02-28 15:37:25', '/ci-new/DashboardAdmin', 1, 0),
(253, 1, '2021-02-28 15:37:25', '/ci-new/DashboardAdmin', 1, 0),
(254, 1, '2021-02-28 15:37:25', '/ci-new/DashboardAdmin', 1, 0),
(255, 1, '2021-02-28 15:37:25', '/ci-new/DashboardAdmin', 1, 0),
(256, 1, '2021-02-28 15:37:25', '/ci-new/DashboardAdmin', 1, 0),
(257, 1, '2021-02-28 15:37:25', '/ci-new/DashboardAdmin', 1, 0),
(258, 1, '2021-02-28 15:37:25', '/ci-new/DashboardAdmin', 1, 0),
(259, 1, '2021-02-28 15:37:25', '/ci-new/DashboardAdmin', 1, 0),
(260, 1, '2021-02-28 15:37:25', '/ci-new/DashboardAdmin', 1, 0),
(261, 1, '2021-02-28 15:37:25', '/ci-new/DashboardAdmin', 1, 0),
(262, 1, '2021-02-28 15:37:25', '/ci-new/DashboardAdmin', 1, 0),
(263, 1, '2021-02-28 15:37:25', '/ci-new/DashboardAdmin', 1, 0),
(264, 1, '2021-02-28 15:37:25', '/ci-new/DashboardAdmin', 1, 0),
(265, 1, '2021-02-28 15:37:25', '/ci-new/DashboardAdmin', 1, 0),
(266, 1, '2021-02-28 15:37:25', '/ci-new/DashboardAdmin', 1, 0),
(267, 1, '2021-02-28 15:37:25', '/ci-new/DashboardAdmin', 1, 0),
(268, 1, '2021-02-28 15:37:25', '/ci-new/DashboardAdmin', 1, 0),
(269, 1, '2021-02-28 15:37:25', '/ci-new/DashboardAdmin', 1, 0),
(270, 1, '2021-02-28 15:37:25', '/ci-new/DashboardAdmin', 1, 0),
(271, 1, '2021-02-28 15:37:30', '/ci-new/DashboardAdmin', 1, 0),
(272, 1, '2021-02-28 15:37:30', '/ci-new/DashboardAdmin', 1, 0),
(273, 1, '2021-02-28 15:37:30', '/ci-new/DashboardAdmin', 1, 0),
(274, 1, '2021-02-28 15:37:30', '/ci-new/DashboardAdmin', 1, 0),
(275, 1, '2021-02-28 15:37:30', '/ci-new/DashboardAdmin', 1, 0),
(276, 1, '2021-02-28 15:37:30', '/ci-new/DashboardAdmin', 1, 0),
(277, 1, '2021-02-28 15:37:30', '/ci-new/DashboardAdmin', 1, 0),
(278, 1, '2021-02-28 15:37:30', '/ci-new/DashboardAdmin', 1, 0),
(279, 1, '2021-02-28 15:37:30', '/ci-new/DashboardAdmin', 1, 0),
(280, 1, '2021-02-28 15:37:30', '/ci-new/DashboardAdmin', 1, 0),
(281, 1, '2021-02-28 15:37:30', '/ci-new/DashboardAdmin', 1, 0),
(282, 1, '2021-02-28 15:37:30', '/ci-new/DashboardAdmin', 1, 0),
(283, 1, '2021-02-28 15:37:30', '/ci-new/DashboardAdmin', 1, 0),
(284, 1, '2021-02-28 15:37:30', '/ci-new/DashboardAdmin', 1, 0),
(285, 1, '2021-02-28 15:37:30', '/ci-new/DashboardAdmin', 1, 0),
(286, 1, '2021-02-28 15:37:30', '/ci-new/DashboardAdmin', 1, 0),
(287, 1, '2021-02-28 15:37:30', '/ci-new/DashboardAdmin', 1, 0),
(288, 1, '2021-02-28 15:37:30', '/ci-new/DashboardAdmin', 1, 0),
(289, 1, '2021-02-28 15:37:30', '/ci-new/DashboardAdmin', 1, 0),
(290, 1, '2021-02-28 15:37:31', '/ci-new/DashboardAdmin', 1, 0),
(291, 1, '2021-02-28 15:38:11', '/ci-new/Profile/3/6', 1, 0),
(292, 1, '2021-02-28 15:39:49', '/ci-new/Auth', 1, 0),
(293, 1, '2021-02-28 15:39:49', '/ci-new/Dashboard', 1, 0),
(294, 1, '2021-02-28 15:39:55', '/ci-new/Profile/3/7', 1, 0),
(295, 1, '2021-02-28 15:39:57', '/ci-new/Dashboard', 1, 0),
(296, 1, '2021-02-28 15:40:00', '/ci-new/Profile/3/7', 1, 0),
(297, 1, '2021-02-28 15:40:06', '/ci-new/Dashboard', 1, 0),
(298, 1, '2021-02-28 15:40:11', '/ci-new/DashboardAdmin', 1, 0),
(299, 1, '2021-02-28 15:40:11', '/ci-new/DashboardAdmin', 1, 0),
(300, 1, '2021-02-28 15:40:11', '/ci-new/DashboardAdmin', 1, 0),
(301, 1, '2021-02-28 15:40:11', '/ci-new/DashboardAdmin', 1, 0),
(302, 1, '2021-02-28 15:40:11', '/ci-new/DashboardAdmin', 1, 0),
(303, 1, '2021-02-28 15:40:11', '/ci-new/DashboardAdmin', 1, 0),
(304, 1, '2021-02-28 15:40:11', '/ci-new/DashboardAdmin', 1, 0),
(305, 1, '2021-02-28 15:40:11', '/ci-new/DashboardAdmin', 1, 0),
(306, 1, '2021-02-28 15:40:11', '/ci-new/DashboardAdmin', 1, 0),
(307, 1, '2021-02-28 15:40:11', '/ci-new/DashboardAdmin', 1, 0),
(308, 1, '2021-02-28 15:40:11', '/ci-new/DashboardAdmin', 1, 0),
(309, 1, '2021-02-28 15:40:11', '/ci-new/DashboardAdmin', 1, 0),
(310, 1, '2021-02-28 15:40:11', '/ci-new/DashboardAdmin', 1, 0),
(311, 1, '2021-02-28 15:40:11', '/ci-new/DashboardAdmin', 1, 0),
(312, 1, '2021-02-28 15:40:11', '/ci-new/DashboardAdmin', 1, 0),
(313, 1, '2021-02-28 15:40:11', '/ci-new/DashboardAdmin', 1, 0),
(314, 1, '2021-02-28 15:40:11', '/ci-new/DashboardAdmin', 1, 0),
(315, 1, '2021-02-28 15:40:11', '/ci-new/DashboardAdmin', 1, 0),
(316, 1, '2021-02-28 15:40:11', '/ci-new/DashboardAdmin', 1, 0),
(317, 1, '2021-02-28 15:40:11', '/ci-new/DashboardAdmin', 1, 0),
(318, 1, '2021-02-28 15:40:12', '/ci-new/DashboardAdmin', 1, 0),
(319, 1, '2021-02-28 15:40:12', '/ci-new/DashboardAdmin', 1, 0),
(320, 1, '2021-02-28 15:40:12', '/ci-new/DashboardAdmin', 1, 0),
(321, 1, '2021-02-28 15:40:12', '/ci-new/DashboardAdmin', 1, 0),
(322, 1, '2021-02-28 15:40:12', '/ci-new/DashboardAdmin', 1, 0),
(323, 1, '2021-02-28 15:40:12', '/ci-new/DashboardAdmin', 1, 0),
(324, 1, '2021-02-28 15:40:12', '/ci-new/DashboardAdmin', 1, 0),
(325, 1, '2021-02-28 15:40:12', '/ci-new/DashboardAdmin', 1, 0),
(326, 1, '2021-02-28 15:40:12', '/ci-new/DashboardAdmin', 1, 0),
(327, 1, '2021-02-28 15:40:12', '/ci-new/DashboardAdmin', 1, 0),
(328, 1, '2021-02-28 15:40:12', '/ci-new/DashboardAdmin', 1, 0),
(329, 1, '2021-02-28 15:40:12', '/ci-new/DashboardAdmin', 1, 0),
(330, 1, '2021-02-28 15:40:13', '/ci-new/DashboardAdmin', 1, 0),
(331, 1, '2021-02-28 15:40:13', '/ci-new/DashboardAdmin', 1, 0),
(332, 1, '2021-02-28 15:40:13', '/ci-new/DashboardAdmin', 1, 0),
(333, 1, '2021-02-28 15:40:13', '/ci-new/DashboardAdmin', 1, 0),
(334, 1, '2021-02-28 15:40:13', '/ci-new/DashboardAdmin', 1, 0),
(335, 1, '2021-02-28 15:40:13', '/ci-new/DashboardAdmin', 1, 0),
(336, 1, '2021-02-28 15:40:13', '/ci-new/DashboardAdmin', 1, 0),
(337, 1, '2021-02-28 15:40:13', '/ci-new/DashboardAdmin', 1, 0),
(338, 1, '2021-02-28 15:40:18', '/ci-new/DashboardAdmin', 1, 0),
(339, 1, '2021-02-28 15:40:18', '/ci-new/DashboardAdmin', 1, 0),
(340, 1, '2021-02-28 15:40:18', '/ci-new/DashboardAdmin', 1, 0),
(341, 1, '2021-02-28 15:40:18', '/ci-new/DashboardAdmin', 1, 0),
(342, 1, '2021-02-28 15:40:18', '/ci-new/DashboardAdmin', 1, 0),
(343, 1, '2021-02-28 15:40:18', '/ci-new/DashboardAdmin', 1, 0),
(344, 1, '2021-02-28 15:40:18', '/ci-new/DashboardAdmin', 1, 0),
(345, 1, '2021-02-28 15:40:18', '/ci-new/DashboardAdmin', 1, 0),
(346, 1, '2021-02-28 15:40:18', '/ci-new/DashboardAdmin', 1, 0),
(347, 1, '2021-02-28 15:40:18', '/ci-new/DashboardAdmin', 1, 0),
(348, 1, '2021-02-28 15:40:18', '/ci-new/DashboardAdmin', 1, 0),
(349, 1, '2021-02-28 15:40:18', '/ci-new/DashboardAdmin', 1, 0),
(350, 1, '2021-02-28 15:40:18', '/ci-new/DashboardAdmin', 1, 0),
(351, 1, '2021-02-28 15:40:18', '/ci-new/DashboardAdmin', 1, 0),
(352, 1, '2021-02-28 15:40:18', '/ci-new/DashboardAdmin', 1, 0),
(353, 1, '2021-02-28 15:40:18', '/ci-new/DashboardAdmin', 1, 0),
(354, 1, '2021-02-28 15:40:18', '/ci-new/DashboardAdmin', 1, 0),
(355, 1, '2021-02-28 15:40:18', '/ci-new/DashboardAdmin', 1, 0),
(356, 1, '2021-02-28 15:40:18', '/ci-new/DashboardAdmin', 1, 0),
(357, 1, '2021-02-28 15:40:18', '/ci-new/DashboardAdmin', 1, 0),
(358, 1, '2021-02-28 15:40:37', '/ci-new/Auth', 1, 0),
(359, 1, '2021-02-28 15:40:37', '/ci-new/Dashboard', 1, 0),
(360, 1, '2021-02-28 15:40:42', '/ci-new/DashboardAdmin', 1, 0),
(361, 1, '2021-02-28 15:40:42', '/ci-new/DashboardAdmin', 1, 0),
(362, 1, '2021-02-28 15:40:42', '/ci-new/DashboardAdmin', 1, 0),
(363, 1, '2021-02-28 15:40:42', '/ci-new/DashboardAdmin', 1, 0),
(364, 1, '2021-02-28 15:40:42', '/ci-new/DashboardAdmin', 1, 0),
(365, 1, '2021-02-28 15:40:42', '/ci-new/DashboardAdmin', 1, 0),
(366, 1, '2021-02-28 15:40:42', '/ci-new/DashboardAdmin', 1, 0),
(367, 1, '2021-02-28 15:40:43', '/ci-new/DashboardAdmin', 1, 0),
(368, 1, '2021-02-28 15:40:43', '/ci-new/DashboardAdmin', 1, 0),
(369, 1, '2021-02-28 15:40:43', '/ci-new/DashboardAdmin', 1, 0),
(370, 1, '2021-02-28 15:40:43', '/ci-new/DashboardAdmin', 1, 0),
(371, 1, '2021-02-28 15:40:43', '/ci-new/DashboardAdmin', 1, 0),
(372, 1, '2021-02-28 15:40:43', '/ci-new/DashboardAdmin', 1, 0),
(373, 1, '2021-02-28 15:40:43', '/ci-new/DashboardAdmin', 1, 0),
(374, 1, '2021-02-28 15:40:43', '/ci-new/DashboardAdmin', 1, 0),
(375, 1, '2021-02-28 15:40:43', '/ci-new/DashboardAdmin', 1, 0),
(376, 1, '2021-02-28 15:40:43', '/ci-new/DashboardAdmin', 1, 0),
(377, 1, '2021-02-28 15:40:43', '/ci-new/DashboardAdmin', 1, 0),
(378, 1, '2021-02-28 15:40:43', '/ci-new/DashboardAdmin', 1, 0),
(379, 1, '2021-02-28 15:40:43', '/ci-new/DashboardAdmin', 1, 0),
(380, 1, '2021-02-28 15:40:44', '/ci-new/DashboardAdmin', 1, 0),
(381, 1, '2021-02-28 15:40:44', '/ci-new/DashboardAdmin', 1, 0),
(382, 1, '2021-02-28 15:40:44', '/ci-new/DashboardAdmin', 1, 0),
(383, 1, '2021-02-28 15:40:44', '/ci-new/DashboardAdmin', 1, 0),
(384, 1, '2021-02-28 15:40:44', '/ci-new/DashboardAdmin', 1, 0),
(385, 1, '2021-02-28 15:40:44', '/ci-new/DashboardAdmin', 1, 0),
(386, 1, '2021-02-28 15:40:44', '/ci-new/DashboardAdmin', 1, 0),
(387, 1, '2021-02-28 15:40:44', '/ci-new/DashboardAdmin', 1, 0),
(388, 1, '2021-02-28 15:40:44', '/ci-new/DashboardAdmin', 1, 0),
(389, 1, '2021-02-28 15:40:44', '/ci-new/DashboardAdmin', 1, 0),
(390, 1, '2021-02-28 15:40:44', '/ci-new/DashboardAdmin', 1, 0),
(391, 1, '2021-02-28 15:40:44', '/ci-new/DashboardAdmin', 1, 0),
(392, 1, '2021-02-28 15:40:44', '/ci-new/DashboardAdmin', 1, 0),
(393, 1, '2021-02-28 15:40:44', '/ci-new/DashboardAdmin', 1, 0),
(394, 1, '2021-02-28 15:40:44', '/ci-new/DashboardAdmin', 1, 0),
(395, 1, '2021-02-28 15:40:44', '/ci-new/DashboardAdmin', 1, 0),
(396, 1, '2021-02-28 15:40:44', '/ci-new/DashboardAdmin', 1, 0),
(397, 1, '2021-02-28 15:40:44', '/ci-new/DashboardAdmin', 1, 0),
(398, 1, '2021-02-28 15:40:44', '/ci-new/DashboardAdmin', 1, 0),
(399, 1, '2021-02-28 15:40:44', '/ci-new/DashboardAdmin', 1, 0),
(400, 1, '2021-02-28 15:40:47', '/ci-new/DashboardAdmin', 1, 0),
(401, 1, '2021-02-28 15:40:47', '/ci-new/DashboardAdmin', 1, 0),
(402, 1, '2021-02-28 15:40:47', '/ci-new/DashboardAdmin', 1, 0),
(403, 1, '2021-02-28 15:40:47', '/ci-new/DashboardAdmin', 1, 0),
(404, 1, '2021-02-28 15:40:47', '/ci-new/DashboardAdmin', 1, 0),
(405, 1, '2021-02-28 15:40:47', '/ci-new/DashboardAdmin', 1, 0),
(406, 1, '2021-02-28 15:40:47', '/ci-new/DashboardAdmin', 1, 0),
(407, 1, '2021-02-28 15:40:47', '/ci-new/DashboardAdmin', 1, 0),
(408, 1, '2021-02-28 15:40:47', '/ci-new/DashboardAdmin', 1, 0),
(409, 1, '2021-02-28 15:40:47', '/ci-new/DashboardAdmin', 1, 0),
(410, 1, '2021-02-28 15:40:48', '/ci-new/DashboardAdmin', 1, 0),
(411, 1, '2021-02-28 15:40:48', '/ci-new/DashboardAdmin', 1, 0),
(412, 1, '2021-02-28 15:40:48', '/ci-new/DashboardAdmin', 1, 0),
(413, 1, '2021-02-28 15:40:48', '/ci-new/DashboardAdmin', 1, 0),
(414, 1, '2021-02-28 15:40:48', '/ci-new/DashboardAdmin', 1, 0),
(415, 1, '2021-02-28 15:40:48', '/ci-new/DashboardAdmin', 1, 0),
(416, 1, '2021-02-28 15:40:48', '/ci-new/DashboardAdmin', 1, 0),
(417, 1, '2021-02-28 15:40:48', '/ci-new/DashboardAdmin', 1, 0),
(418, 1, '2021-02-28 15:40:48', '/ci-new/DashboardAdmin', 1, 0),
(419, 1, '2021-02-28 15:40:48', '/ci-new/DashboardAdmin', 1, 0),
(420, 1, '2021-02-28 15:41:05', '/ci-new/Auth', 1, 0),
(421, 1, '2021-02-28 15:41:05', '/ci-new/Dashboard', 1, 0),
(422, 1, '2021-02-28 15:41:13', '/ci-new/DashboardAdmin', 1, 0),
(423, 1, '2021-02-28 15:41:13', '/ci-new/DashboardAdmin', 1, 0),
(424, 1, '2021-02-28 15:41:13', '/ci-new/DashboardAdmin', 1, 0),
(425, 1, '2021-02-28 15:41:13', '/ci-new/DashboardAdmin', 1, 0),
(426, 1, '2021-02-28 15:41:13', '/ci-new/DashboardAdmin', 1, 0),
(427, 1, '2021-02-28 15:41:14', '/ci-new/DashboardAdmin', 1, 0),
(428, 1, '2021-02-28 15:41:14', '/ci-new/DashboardAdmin', 1, 0),
(429, 1, '2021-02-28 15:41:14', '/ci-new/DashboardAdmin', 1, 0),
(430, 1, '2021-02-28 15:41:14', '/ci-new/DashboardAdmin', 1, 0),
(431, 1, '2021-02-28 15:41:14', '/ci-new/DashboardAdmin', 1, 0),
(432, 1, '2021-02-28 15:41:14', '/ci-new/DashboardAdmin', 1, 0),
(433, 1, '2021-02-28 15:41:14', '/ci-new/DashboardAdmin', 1, 0),
(434, 1, '2021-02-28 15:41:14', '/ci-new/DashboardAdmin', 1, 0),
(435, 1, '2021-02-28 15:41:14', '/ci-new/DashboardAdmin', 1, 0),
(436, 1, '2021-02-28 15:41:14', '/ci-new/DashboardAdmin', 1, 0),
(437, 1, '2021-02-28 15:41:14', '/ci-new/DashboardAdmin', 1, 0),
(438, 1, '2021-02-28 15:41:14', '/ci-new/DashboardAdmin', 1, 0),
(439, 1, '2021-02-28 15:41:14', '/ci-new/DashboardAdmin', 1, 0),
(440, 1, '2021-02-28 15:41:14', '/ci-new/DashboardAdmin', 1, 0),
(441, 1, '2021-02-28 15:41:14', '/ci-new/DashboardAdmin', 1, 0),
(442, 1, '2021-02-28 15:41:15', '/ci-new/DashboardAdmin', 1, 0),
(443, 1, '2021-02-28 15:41:15', '/ci-new/DashboardAdmin', 1, 0),
(444, 1, '2021-02-28 15:41:15', '/ci-new/DashboardAdmin', 1, 0),
(445, 1, '2021-02-28 15:41:15', '/ci-new/DashboardAdmin', 1, 0),
(446, 1, '2021-02-28 15:41:15', '/ci-new/DashboardAdmin', 1, 0),
(447, 1, '2021-02-28 15:41:15', '/ci-new/DashboardAdmin', 1, 0),
(448, 1, '2021-02-28 15:41:15', '/ci-new/DashboardAdmin', 1, 0),
(449, 1, '2021-02-28 15:41:15', '/ci-new/DashboardAdmin', 1, 0),
(450, 1, '2021-02-28 15:41:15', '/ci-new/DashboardAdmin', 1, 0),
(451, 1, '2021-02-28 15:41:15', '/ci-new/DashboardAdmin', 1, 0),
(452, 1, '2021-02-28 15:41:15', '/ci-new/DashboardAdmin', 1, 0),
(453, 1, '2021-02-28 15:41:15', '/ci-new/DashboardAdmin', 1, 0),
(454, 1, '2021-02-28 15:41:15', '/ci-new/DashboardAdmin', 1, 0),
(455, 1, '2021-02-28 15:41:15', '/ci-new/DashboardAdmin', 1, 0),
(456, 1, '2021-02-28 15:41:15', '/ci-new/DashboardAdmin', 1, 0),
(457, 1, '2021-02-28 15:41:15', '/ci-new/DashboardAdmin', 1, 0),
(458, 1, '2021-02-28 15:41:15', '/ci-new/DashboardAdmin', 1, 0),
(459, 1, '2021-02-28 15:41:15', '/ci-new/DashboardAdmin', 1, 0),
(460, 1, '2021-02-28 15:41:15', '/ci-new/DashboardAdmin', 1, 0),
(461, 1, '2021-02-28 15:41:15', '/ci-new/DashboardAdmin', 1, 0),
(462, 1, '2021-02-28 15:41:20', '/ci-new/DashboardAdmin', 1, 0),
(463, 1, '2021-02-28 15:41:20', '/ci-new/DashboardAdmin', 1, 0),
(464, 1, '2021-02-28 15:41:20', '/ci-new/DashboardAdmin', 1, 0),
(465, 1, '2021-02-28 15:41:20', '/ci-new/DashboardAdmin', 1, 0),
(466, 1, '2021-02-28 15:41:20', '/ci-new/DashboardAdmin', 1, 0),
(467, 1, '2021-02-28 15:41:20', '/ci-new/DashboardAdmin', 1, 0),
(468, 1, '2021-02-28 15:41:20', '/ci-new/DashboardAdmin', 1, 0),
(469, 1, '2021-02-28 15:41:20', '/ci-new/DashboardAdmin', 1, 0),
(470, 1, '2021-02-28 15:41:20', '/ci-new/DashboardAdmin', 1, 0),
(471, 1, '2021-02-28 15:41:20', '/ci-new/DashboardAdmin', 1, 0),
(472, 1, '2021-02-28 15:41:20', '/ci-new/DashboardAdmin', 1, 0),
(473, 1, '2021-02-28 15:41:20', '/ci-new/DashboardAdmin', 1, 0),
(474, 1, '2021-02-28 15:41:20', '/ci-new/DashboardAdmin', 1, 0),
(475, 1, '2021-02-28 15:41:20', '/ci-new/DashboardAdmin', 1, 0),
(476, 1, '2021-02-28 15:41:21', '/ci-new/DashboardAdmin', 1, 0),
(477, 1, '2021-02-28 15:41:21', '/ci-new/DashboardAdmin', 1, 0),
(478, 1, '2021-02-28 15:41:21', '/ci-new/DashboardAdmin', 1, 0),
(479, 1, '2021-02-28 15:41:21', '/ci-new/DashboardAdmin', 1, 0),
(480, 1, '2021-02-28 15:41:21', '/ci-new/DashboardAdmin', 1, 0),
(481, 1, '2021-02-28 15:41:21', '/ci-new/DashboardAdmin', 1, 0),
(482, 1, '2021-02-28 15:41:51', '/ci-new/DashboardAdmin', 1, 0),
(483, 1, '2021-02-28 15:41:51', '/ci-new/DashboardAdmin', 1, 0),
(484, 1, '2021-02-28 15:41:51', '/ci-new/DashboardAdmin', 1, 0),
(485, 1, '2021-02-28 15:41:51', '/ci-new/DashboardAdmin', 1, 0),
(486, 1, '2021-02-28 15:41:51', '/ci-new/DashboardAdmin', 1, 0),
(487, 1, '2021-02-28 15:41:51', '/ci-new/DashboardAdmin', 1, 0),
(488, 1, '2021-02-28 15:41:51', '/ci-new/DashboardAdmin', 1, 0),
(489, 1, '2021-02-28 15:41:51', '/ci-new/DashboardAdmin', 1, 0),
(490, 1, '2021-02-28 15:41:51', '/ci-new/DashboardAdmin', 1, 0),
(491, 1, '2021-02-28 15:41:51', '/ci-new/DashboardAdmin', 1, 0),
(492, 1, '2021-02-28 15:41:51', '/ci-new/DashboardAdmin', 1, 0),
(493, 1, '2021-02-28 15:41:51', '/ci-new/DashboardAdmin', 1, 0),
(494, 1, '2021-02-28 15:41:51', '/ci-new/DashboardAdmin', 1, 0),
(495, 1, '2021-02-28 15:41:51', '/ci-new/DashboardAdmin', 1, 0),
(496, 1, '2021-02-28 15:41:51', '/ci-new/DashboardAdmin', 1, 0),
(497, 1, '2021-02-28 15:41:51', '/ci-new/DashboardAdmin', 1, 0),
(498, 1, '2021-02-28 15:41:51', '/ci-new/DashboardAdmin', 1, 0),
(499, 1, '2021-02-28 15:41:51', '/ci-new/DashboardAdmin', 1, 0),
(500, 1, '2021-02-28 15:41:51', '/ci-new/DashboardAdmin', 1, 0),
(501, 1, '2021-02-28 15:41:51', '/ci-new/DashboardAdmin', 1, 0),
(502, 1, '2021-02-28 15:42:51', '/ci-new/DashboardAdmin', 1, 0),
(503, 1, '2021-02-28 15:42:51', '/ci-new/DashboardAdmin', 1, 0),
(504, 1, '2021-02-28 15:42:51', '/ci-new/DashboardAdmin', 1, 0),
(505, 1, '2021-02-28 15:42:51', '/ci-new/DashboardAdmin', 1, 0),
(506, 1, '2021-02-28 15:42:51', '/ci-new/DashboardAdmin', 1, 0),
(507, 1, '2021-02-28 15:42:51', '/ci-new/DashboardAdmin', 1, 0),
(508, 1, '2021-02-28 15:42:51', '/ci-new/DashboardAdmin', 1, 0),
(509, 1, '2021-02-28 15:42:51', '/ci-new/DashboardAdmin', 1, 0),
(510, 1, '2021-02-28 15:42:51', '/ci-new/DashboardAdmin', 1, 0),
(511, 1, '2021-02-28 15:42:51', '/ci-new/DashboardAdmin', 1, 0),
(512, 1, '2021-02-28 15:42:51', '/ci-new/DashboardAdmin', 1, 0),
(513, 1, '2021-02-28 15:42:51', '/ci-new/DashboardAdmin', 1, 0),
(514, 1, '2021-02-28 15:42:51', '/ci-new/DashboardAdmin', 1, 0),
(515, 1, '2021-02-28 15:42:51', '/ci-new/DashboardAdmin', 1, 0),
(516, 1, '2021-02-28 15:42:51', '/ci-new/DashboardAdmin', 1, 0),
(517, 1, '2021-02-28 15:42:51', '/ci-new/DashboardAdmin', 1, 0),
(518, 1, '2021-02-28 15:42:51', '/ci-new/DashboardAdmin', 1, 0),
(519, 1, '2021-02-28 15:42:51', '/ci-new/DashboardAdmin', 1, 0),
(520, 1, '2021-02-28 15:42:51', '/ci-new/DashboardAdmin', 1, 0),
(521, 1, '2021-02-28 15:42:51', '/ci-new/DashboardAdmin', 1, 0),
(522, 1, '2021-02-28 15:46:07', '/ci-new/DashboardAdmin', 1, 0),
(523, 1, '2021-02-28 15:46:22', '/ci-new/DashboardAdmin', 1, 0),
(524, 1, '2021-02-28 15:46:30', '/ci-new/MenuSetup', 1, 0),
(525, 1, '2021-02-28 16:11:20', '/ci-new/Auth', 1, 0),
(526, 1, '2021-02-28 16:11:20', '/ci-new/Dashboard', 1, 0),
(527, 1, '2021-02-28 16:15:55', '/ci-new/Profile/3/7', 1, 0),
(528, 1, '2021-02-28 16:16:00', '/ci-new/Dashboard', 1, 0),
(529, 1, '2021-02-28 16:18:21', '/ci-new/Explore', 1, 0),
(530, 1, '2021-02-28 16:44:42', '/ci-new/Dashboard', 1, 0),
(531, 1, '2021-02-28 16:44:45', '/ci-new/Livestream', 1, 0),
(532, 1, '2021-02-28 16:45:23', '/ci-new/Dashboard', 1, 0),
(533, 1, '2021-02-28 16:45:25', '/ci-new/PostMessage', 1, 0),
(534, 1, '2021-02-28 16:46:07', '/ci-new/Dashboard', 1, 0),
(535, 1, '2021-02-28 16:46:11', '/ci-new/PostMessage', 1, 0),
(536, 1, '2021-02-28 16:46:13', '/ci-new/Dashboard', 1, 0),
(537, 1, '2021-02-28 16:46:14', '/ci-new/Livestream', 1, 0),
(538, 1, '2021-02-28 16:46:16', '/ci-new/Dashboard', 1, 0),
(539, 1, '2021-02-28 16:46:17', '/ci-new/Explore', 1, 0),
(540, 1, '2021-02-28 16:46:21', '/ci-new/Dashboard', 1, 0),
(541, 1, '2021-02-28 16:46:24', '/ci-new/Profile/3/6', 1, 0),
(542, 1, '2021-02-28 16:46:27', '/ci-new/Dashboard', 1, 0),
(543, 1, '2021-02-28 16:49:32', '/ci-new/PostMessage', 1, 0),
(544, 1, '2021-02-28 16:52:44', '/ci-new/PostMessage', 1, 0),
(545, 1, '2021-02-28 16:52:58', '/ci-new/Dashboard', 1, 0),
(546, 1, '2021-02-28 16:55:57', '/ci-new/Search', 1, 0),
(547, 1, '2021-02-28 16:56:10', '/ci-new/Dashboard', 1, 0),
(548, 1, '2021-02-28 16:57:36', '/ci-new/Dashboard', 1, 0),
(549, 1, '2021-02-28 16:57:41', '/ci-new/Search?email_username=hmm', 1, 0),
(550, 1, '2021-02-28 16:57:52', '/ci-new/Dashboard', 1, 0),
(551, 1, '2021-02-28 16:57:55', '/ci-new/Search?q=hmm', 1, 0),
(552, 1, '2021-02-28 16:59:23', '/ci-new/Search?q=hmm', 1, 0),
(553, 1, '2021-02-28 16:59:37', '/ci-new/Dashboard', 1, 0),
(554, 1, '2021-02-28 16:59:57', '/ci-new/PostMessage', 1, 0),
(555, 1, '2021-02-28 17:00:00', '/ci-new/Dashboard', 1, 0),
(556, 1, '2021-02-28 17:00:08', '/ci-new/Search', 1, 0),
(557, 1, '2021-02-28 17:01:21', '/ci-new/Dashboard', 1, 0),
(558, 1, '2021-02-28 17:01:31', '/ci-new/EditProfile', 1, 0),
(559, 1, '2021-02-28 17:03:23', '/ci-new/EditProfile', 1, 0),
(560, 1, '2021-02-28 17:03:23', '/ci-new/DashboardAdmin', 1, 0),
(561, 1, '2021-02-28 17:03:27', '/ci-new/AddVendor', 1, 0),
(562, 1, '2021-02-28 17:03:29', '/ci-new/DashboardAdmin', 1, 0),
(563, 1, '2021-02-28 17:03:30', '/ci-new/Dashboard', 1, 0),
(564, 1, '2021-02-28 17:06:34', '/ci-new/Dashboard', 1, 0),
(565, 1, '2021-02-28 17:08:24', '/ci-new/Dashboard', 1, 0),
(566, 1, '2021-02-28 17:08:36', '/ci-new/PostMessage', 1, 0),
(567, 1, '2021-02-28 17:08:38', '/ci-new/Dashboard', 1, 0),
(568, 1, '2021-02-28 17:09:29', '/ci-new/Dashboard', 1, 0),
(569, 1, '2021-02-28 17:11:19', '/ci-new/Dashboard', 1, 0),
(570, 1, '2021-02-28 17:11:26', '/ci-new/DashboardAdmin', 1, 0),
(571, 16, '2021-02-28 17:11:38', '/ci-new/Auth', 4, 0),
(572, 16, '2021-02-28 17:11:38', '/ci-new/Dashboard', 4, 0),
(573, 16, '2021-02-28 17:11:49', '/ci-new/EditProfile', 4, 0),
(574, 16, '2021-02-28 17:14:42', '/ci-new/Dashboard', 4, 0),
(575, 16, '2021-02-28 17:14:49', '/ci-new/DashboardAdmin', 4, 0),
(576, 16, '2021-02-28 17:15:23', '/ci-new/AddVendor', 4, 0),
(577, 16, '2021-02-28 17:16:27', '/ci-new/AddVendor', 4, 0),
(578, 16, '2021-02-28 17:17:23', '/ci-new/AddTenant', 4, 0),
(579, 16, '2021-02-28 17:17:32', '/ci-new/AddAdmin', 4, 0),
(580, 16, '2021-02-28 17:17:43', '/ci-new/DashboardAdmin', 4, 0),
(581, 16, '2021-02-28 17:17:44', '/ci-new/AddVendor', 4, 0),
(582, 16, '2021-02-28 17:18:12', '/ci-new/DashboardAdmin', 4, 0),
(583, 16, '2021-02-28 17:18:17', '/ci-new/AddVendor', 4, 0),
(584, 16, '2021-02-28 17:19:34', '/ci-new/MenuSetup', 4, 0),
(585, 16, '2021-02-28 17:21:29', '/ci-new/DisplaySetting', 4, 0),
(586, 16, '2021-02-28 17:22:28', '/ci-new/ExportImport', 4, 0),
(587, 16, '2021-02-28 17:23:34', '/ci-new/DashboardAdmin', 4, 0),
(588, 16, '2021-02-28 17:23:35', '/ci-new/AddVendor', 4, 0),
(589, 16, '2021-02-28 17:23:36', '/ci-new/AddTenant', 4, 0),
(590, 16, '2021-02-28 17:23:36', '/ci-new/AddAdmin', 4, 0),
(591, 16, '2021-02-28 17:23:37', '/ci-new/MenuSetup', 4, 0),
(592, 16, '2021-02-28 17:23:38', '/ci-new/DisplaySetting', 4, 0),
(593, 16, '2021-02-28 17:23:38', '/ci-new/ExportImport', 4, 0),
(594, 2, '2021-02-28 17:24:17', '/ci-new/Auth', 2, 0),
(595, 2, '2021-02-28 17:24:17', '/ci-new/Dashboard', 2, 0),
(596, 2, '2021-02-28 17:24:28', '/ci-new/DashboardVendor', 2, 0),
(597, 2, '2021-02-28 17:26:37', '/ci-new/DashboardVendor', 2, 0),
(598, 2, '2021-02-28 17:27:00', '/ci-new/VendorEditProfile', 2, 0),
(599, 2, '2021-02-28 17:27:04', '/ci-new/VendorManageAccount', 2, 0),
(600, 2, '2021-02-28 17:27:15', '/ci-new/VendorEditProfile', 2, 0),
(601, 2, '2021-02-28 17:29:51', '/ci-new/VendorManageAccount', 2, 0),
(602, 2, '2021-02-28 17:29:52', '/ci-new/DashboardVendor', 2, 0),
(603, 2, '2021-02-28 17:29:53', '/ci-new/VendorManageAccount', 2, 0),
(604, 2, '2021-02-28 17:29:57', '/ci-new/VendorManageAccount', 2, 0),
(605, 2, '2021-02-28 17:29:59', '/ci-new/VendorManageAccount', 2, 0),
(606, 2, '2021-02-28 17:30:01', '/ci-new/DashboardVendor', 2, 0),
(607, 2, '2021-02-28 17:30:02', '/ci-new/VendorEditProfile', 2, 0),
(608, 2, '2021-02-28 17:30:03', '/ci-new/VendorManageAccount', 2, 0),
(609, 6, '2021-02-28 17:30:33', '/ci-new/Auth', 3, 0),
(610, 6, '2021-02-28 17:30:33', '/ci-new/Dashboard', 3, 0),
(611, 6, '2021-02-28 17:30:43', '/ci-new/DashboardTenant', 3, 0),
(612, 6, '2021-02-28 17:31:15', '/ci-new/TenantEditProfile', 3, 0),
(613, 6, '2021-02-28 17:31:16', '/ci-new/TenantManageAccount', 3, 0),
(614, 6, '2021-02-28 17:31:49', '/ci-new/TenantEditProfile', 3, 0),
(615, 6, '2021-02-28 17:31:50', '/ci-new/DashboardTenant', 3, 0),
(616, 6, '2021-02-28 17:31:58', '/ci-new/TenantEditProfile', 3, 0),
(617, 2, '2021-02-28 17:36:27', '/ci-new/Auth', 2, 0),
(618, 2, '2021-02-28 17:36:27', '/ci-new/Dashboard', 2, 0),
(619, 2, '2021-02-28 17:36:36', '/ci-new/DashboardVendor', 2, 0),
(620, 2, '2021-02-28 17:36:37', '/ci-new/VendorEditProfile', 2, 0),
(621, 2, '2021-02-28 17:42:33', '/ci-new/VendorEditProfile', 2, 0),
(622, 2, '2021-02-28 17:42:47', '/ci-new/Dashboard', 2, 0),
(623, 2, '2021-02-28 17:42:54', '/ci-new/Profile/2/14', 2, 0),
(624, 2, '2021-02-28 17:43:16', '/ci-new/Profile/2/14', 2, 0),
(625, 2, '2021-02-28 17:43:25', '/ci-new/Profile/2/14', 2, 0),
(626, 2, '2021-02-28 17:43:49', '/ci-new/Profile/2/14', 2, 0),
(627, 2, '2021-02-28 17:44:50', '/ci-new/Profile/3/7', 2, 0),
(628, 2, '2021-02-28 17:44:59', '/ci-new/Profile/3/6', 2, 0),
(629, 2, '2021-02-28 17:45:52', '/ci-new/Dashboard', 2, 0),
(630, 2, '2021-02-28 17:45:56', '/ci-new/Profile/2/14', 2, 0),
(631, 2, '2021-02-28 17:48:42', '/ci-new/Dashboard', 2, 0),
(632, 2, '2021-02-28 17:48:47', '/ci-new/Profile/2/14', 2, 0),
(633, 2, '2021-02-28 17:48:54', '/ci-new/Profile/2/14', 2, 0),
(634, 2, '2021-02-28 17:49:00', '/ci-new/Dashboard', 2, 0),
(635, 2, '2021-02-28 17:49:01', '/ci-new/Dashboard', 2, 0),
(636, 2, '2021-02-28 17:49:02', '/ci-new/Dashboard', 2, 0),
(637, 2, '2021-02-28 17:49:14', '/ci-new/Dashboard', 2, 0),
(638, 2, '2021-02-28 17:49:18', '/ci-new/Profile/2/2', 2, 0),
(639, 2, '2021-02-28 17:54:24', '/ci-new/Dashboard', 2, 0),
(640, 2, '2021-02-28 17:54:26', '/ci-new/PostMessage', 2, 0),
(641, 16, '2021-02-28 17:54:42', '/ci-new/Auth', 4, 0),
(642, 16, '2021-02-28 17:54:42', '/ci-new/Dashboard', 4, 0),
(643, 16, '2021-02-28 17:54:46', '/ci-new/PostMessage', 4, 0),
(644, 16, '2021-02-28 17:55:30', '/ci-new/doPost', 4, 0),
(645, 16, '2021-02-28 17:55:30', '/ci-new/PostMessage', 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `logVisitors`
--

CREATE TABLE `logVisitors` (
  `id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL DEFAULT current_timestamp(),
  `routes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logVisitors`
--

INSERT INTO `logVisitors` (`id`, `creation_date`, `routes`) VALUES
(1, '2021-02-27 07:28:25', 'http://[::1]/ci-new/Login'),
(2, '2021-02-27 07:30:47', 'http://[::1]/ci-new/Login'),
(3, '2021-02-27 07:33:29', 'http://[::1]/ci-new/Login'),
(4, '2021-02-27 13:40:52', 'http://localhost/ci-new/'),
(5, '2021-02-27 13:40:59', 'http://[::1]/ci-new/Login'),
(6, '2021-02-27 13:41:21', 'http://[::1]/ci-new/Login'),
(7, '2021-02-27 13:57:24', 'http://[::1]/ci-new/Login'),
(8, '2021-02-27 18:09:24', 'http://[::1]/ci-new/Login'),
(9, '2021-02-27 18:10:47', 'http://[::1]/ci-new/Login'),
(10, '2021-02-28 10:36:50', 'http://localhost/ci-new/'),
(11, '2021-02-28 10:37:11', 'http://[::1]/ci-new/Login'),
(12, '2021-02-28 11:09:47', 'http://[::1]/ci-new/Login'),
(13, '2021-02-28 11:10:10', 'http://[::1]/ci-new/Login'),
(14, '2021-02-28 11:20:02', 'http://[::1]/ci-new/Login'),
(15, '2021-02-28 12:48:58', 'http://[::1]/ci-new/Login'),
(16, '2021-02-28 13:04:20', 'http://[::1]/ci-new/Login'),
(17, '2021-02-28 14:11:27', 'http://[::1]/ci-new/Login'),
(18, '2021-02-28 14:11:58', 'http://[::1]/ci-new/Login'),
(19, '2021-02-28 14:12:17', 'http://[::1]/ci-new/'),
(20, '2021-02-28 14:20:40', 'http://[::1]/ci-new/Login'),
(21, '2021-02-28 14:20:48', 'http://[::1]/ci-new/Login'),
(22, '2021-02-28 14:25:55', 'http://[::1]/ci-new/Login'),
(23, '2021-02-28 14:26:00', 'http://[::1]/ci-new/Login'),
(24, '2021-02-28 14:26:24', 'http://[::1]/ci-new/Login'),
(25, '2021-02-28 14:26:32', 'http://[::1]/ci-new/Login'),
(26, '2021-02-28 14:27:26', 'http://[::1]/ci-new/Login'),
(27, '2021-02-28 14:27:36', 'http://[::1]/ci-new/Login'),
(28, '2021-02-28 14:28:15', 'http://[::1]/ci-new/Login'),
(29, '2021-02-28 14:28:30', 'http://[::1]/ci-new/Login'),
(30, '2021-02-28 14:28:51', 'http://[::1]/ci-new/Login'),
(31, '2021-02-28 14:29:04', 'http://[::1]/ci-new/Login'),
(32, '2021-02-28 14:36:50', 'http://[::1]/ci-new/Login'),
(33, '2021-02-28 14:37:17', 'http://[::1]/ci-new/'),
(34, '2021-02-28 14:39:59', 'http://[::1]/ci-new/'),
(35, '2021-02-28 14:40:27', 'http://[::1]/ci-new/'),
(36, '2021-02-28 14:40:38', 'http://[::1]/ci-new/index'),
(37, '2021-02-28 14:40:49', 'http://[::1]/ci-new/index'),
(38, '2021-02-28 14:40:52', 'http://[::1]/ci-new/'),
(39, '2021-02-28 14:41:02', 'http://[::1]/ci-new/Login'),
(40, '2021-02-28 15:24:44', 'index'),
(41, '2021-02-28 15:25:30', 'index'),
(42, '2021-02-28 15:34:51', 'index'),
(43, '2021-02-28 15:34:54', 'index'),
(44, '2021-02-28 15:35:13', 'index'),
(45, '2021-02-28 15:36:52', 'index'),
(46, '2021-02-28 15:36:57', 'index'),
(47, '2021-02-28 15:37:32', 'index'),
(48, '2021-02-28 15:38:04', 'index'),
(49, '2021-02-28 15:38:37', 'index'),
(50, '2021-02-28 15:39:33', 'index'),
(51, '2021-02-28 15:39:43', 'index'),
(52, '2021-02-28 15:40:28', 'index'),
(53, '2021-02-28 15:40:57', 'index'),
(54, '2021-02-28 15:59:03', 'index'),
(55, '2021-02-28 16:03:50', 'index'),
(56, '2021-02-28 16:07:47', 'index'),
(57, '2021-02-28 16:08:05', 'index'),
(58, '2021-02-28 16:09:24', 'index'),
(59, '2021-02-28 17:11:33', 'index'),
(60, '2021-02-28 17:23:42', 'index'),
(61, '2021-02-28 17:30:06', 'index'),
(62, '2021-02-28 17:30:13', 'index'),
(63, '2021-02-28 17:32:06', 'index'),
(64, '2021-02-28 17:54:31', 'index'),
(65, '2021-02-28 17:55:41', 'index');

-- --------------------------------------------------------

--
-- Table structure for table `postLogs`
--

CREATE TABLE `postLogs` (
  `id` int(11) NOT NULL,
  `id_msg` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_subcategory` int(11) NOT NULL,
  `creation_date` datetime NOT NULL,
  `flag` varchar(1) NOT NULL DEFAULT 'Y',
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `postLogs`
--

INSERT INTO `postLogs` (`id`, `id_msg`, `id_category`, `id_subcategory`, `creation_date`, `flag`, `user_id`) VALUES
(1, 1, 1, 4, '2021-02-27 06:48:30', 'Y', 6),
(2, 1, 1, 5, '2021-02-27 06:48:30', 'Y', 6),
(3, 1, 1, 6, '2021-02-27 06:48:30', 'Y', 6),
(4, 2, 1, 1, '2021-02-28 17:55:30', 'Y', 16),
(5, 2, 1, 2, '2021-02-28 17:55:30', 'Y', 16),
(6, 2, 1, 3, '2021-02-28 17:55:30', 'Y', 16),
(7, 2, 1, 4, '2021-02-28 17:55:30', 'Y', 16),
(8, 2, 1, 5, '2021-02-28 17:55:30', 'Y', 16),
(9, 2, 1, 6, '2021-02-28 17:55:30', 'Y', 16),
(10, 2, 1, 7, '2021-02-28 17:55:30', 'Y', 16);

-- --------------------------------------------------------

--
-- Table structure for table `postMessage`
--

CREATE TABLE `postMessage` (
  `id_msg` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `msg` text NOT NULL,
  `creation_date` datetime NOT NULL,
  `deleted_flag` varchar(1) NOT NULL DEFAULT 'N',
  `deleted_date` datetime NOT NULL,
  `edited_flag` varchar(1) NOT NULL DEFAULT 'N',
  `edited_date` datetime NOT NULL,
  `filename` varchar(255) NOT NULL,
  `flag` varchar(1) NOT NULL DEFAULT 'Y',
  `id_category` int(11) NOT NULL,
  `id_subcategory` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `postMessage`
--

INSERT INTO `postMessage` (`id_msg`, `user_id`, `msg`, `creation_date`, `deleted_flag`, `deleted_date`, `edited_flag`, `edited_date`, `filename`, `flag`, `id_category`, `id_subcategory`) VALUES
(1, 6, 'Trial', '2021-02-27 06:48:30', 'N', '0000-00-00 00:00:00', 'N', '0000-00-00 00:00:00', 'post-6-bfc2d6b4f85e7cded992654bf24d2838.jpg', 'Y', 1, '4,5,6'),
(2, 16, 'Trial trial tired', '2021-02-28 17:55:30', 'N', '0000-00-00 00:00:00', 'N', '0000-00-00 00:00:00', 'post-16-c3b8458b52bbdf5ed5f4b69c7855c870.jpg', 'Y', 1, '1,2,3,4,5,6,7');

-- --------------------------------------------------------

--
-- Table structure for table `subCategoryType`
--

CREATE TABLE `subCategoryType` (
  `id` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `flag` varchar(1) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subCategoryType`
--

INSERT INTO `subCategoryType` (`id`, `id_category`, `name`, `flag`) VALUES
(1, 1, 'Paud', 'Y'),
(2, 1, 'TK', 'Y'),
(3, 1, 'SD', 'Y'),
(4, 1, 'SMP', 'Y'),
(5, 1, 'SMA', 'Y'),
(6, 1, 'SMK', 'Y'),
(7, 1, 'Universitas', 'Y'),
(8, 2, 'Art', 'Y'),
(9, 2, 'Beladiri', 'Y'),
(10, 2, 'Musik', 'Y'),
(11, 4, 'Makanan', 'Y'),
(12, 4, 'Minuman', 'Y'),
(13, 4, 'Vendor', 'Y'),
(14, 3, 'Lainnya', 'Y'),
(15, 3, 'Obat dan Jamu', 'Y'),
(16, 3, 'Fashion', 'Y'),
(17, 3, 'Sepatu', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tenantAccount`
--

CREATE TABLE `tenantAccount` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL DEFAULT 'tenant.jpg',
  `active_flag` char(1) NOT NULL DEFAULT 'Y',
  `creation_date` datetime NOT NULL,
  `id_category` int(11) NOT NULL DEFAULT 0,
  `id_subcategory` varchar(20) NOT NULL DEFAULT '0',
  `deskripsi` text DEFAULT NULL,
  `color_id` int(11) NOT NULL DEFAULT 0,
  `alamat` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `fitur` text DEFAULT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tenantAccount`
--

INSERT INTO `tenantAccount` (`id`, `user_id`, `fullname`, `logo`, `active_flag`, `creation_date`, `id_category`, `id_subcategory`, `deskripsi`, `color_id`, `alamat`, `url`, `fitur`, `update_date`) VALUES
(1, 6, 'Hiking Tour Agency', 'logo-6-0396b52cbde6aa86c73cc008f9bbd185.jpg', 'Y', '0000-00-00 00:00:00', 4, '4,13', 'Sebuah agent yang menawarkan jasa pemandu hiking dengan destinasi Gunung di seluruh Indonesia', 8, 'Jl. Dieng No.12, Parikesit, Kejajar, Kabupaten Wonosobo, Jawa Tengah 56354', 'https://www.youtube.com/watch?v=zbO8zY2revE', '- Include biaya transport, konsumsi, tenda, dll.', '2021-02-26'),
(2, 7, 'SMP Negeri 2 Semarang', 'logo-7-01973744403f2937db161acd29bdda95.jpg', 'Y', '0000-00-00 00:00:00', 1, '4', 'SMP Negeri 2 Semarang, merupakan salah satu Sekolah Menengah Pertama Negeri yang ada di Provinsi Semarang,Jawa Tengah, Indonesia. SMP Negeri 2 Semarang memiliki Program khusus Akselerasi yang pertama kali di Jawa Tengah dari tahun 2000,Tetapi Sekarang Sudah Ditiadakan', 3, 'Jl. Brigjend Katamso No.14, Karangtempel, Kec. Semarang Tim., Kota Semarang, Jawa Tengah 50242', 'https://www.youtube.com/embed/giwxYwFGYqE', 'Nilai Akreditasi: 95\r\nPeringkat Akreditasi: A\r\nTanggal Penetapan: 09-Nov-2010.', '2021-02-27'),
(3, 11, 'SMK Negeri 1 Semarang', 'logo-11-63c3c25da856471e39e73837e6c519bf.jpg', 'Y', '0000-00-00 00:00:00', 1, '6', 'Beralamat di Jl Dr. Cipto no 93 Semarang didirikan pada  tahun 1939, oleh pemerintah Hindia Belanda. Berdiri di atas tanah seluas 1,8 Ha. Hingga saat ini telah dipimpin oleh 14 Kepala Sekolah. Berdiri dengan nama Sekolah Teknik Semarang yang nama aslinya Technische School Semarang (TSS), dikepalai oleh seorang insinyur dari negeri Belanda  hingga tahun 1953. Kepala sekolah yang kedua pun masih seorang Belanda yakni Ir. Bhe Kee Hay tahun 1953 hingga tahun 1967. Terdapat keterkaitan dengan STM 3 (sekarang SMK N 3 Semarang), mengingat beberapa tahun setelah berdirinya SMK N 1 berdiri pula SMK N 3 pada lokasi yang sama, hingga terkenal dengan nama STM 1-3, yang akhirnya dipecah pada tahun 1983.', 6, 'Jalan Dokter Cipto No.93, Sarirejo, Kec. Semarang Tim., Kota Semarang, Jawa Tengah 50124', 'https://www.youtube.com/watch?v=1xnGL-yzNQo', 'Jurusan Teknik Ketenagalistrikan, Jurusan Teknik Pemesinan, Jurusan Teknik Otomotif, Jurusan Teknik Elektronika, Sistem Broadcast', '2021-02-27'),
(4, 12, 'SMA Negeri 1 Semarang', 'tenant.jpg', 'Y', '0000-00-00 00:00:00', 0, '0', NULL, 0, NULL, NULL, NULL, '0000-00-00'),
(5, 13, 'SD Negeri Tlogosari Kulon 05', 'tenant.jpg', 'Y', '0000-00-00 00:00:00', 0, '0', NULL, 0, NULL, NULL, NULL, '0000-00-00'),
(6, 14, 'TK As-Syuhada', 'tenant.jpg', 'Y', '0000-00-00 00:00:00', 0, '0', NULL, 0, NULL, NULL, NULL, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `userAccount`
--

CREATE TABLE `userAccount` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `google_id` varchar(32),
  `fullname` varchar(150) DEFAULT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'user.jpg',
  `date_birth` date DEFAULT NULL,
  `active_flag` char(1) NOT NULL DEFAULT 'Y',
  `creation_date` datetime DEFAULT NULL,
  `address` text DEFAULT NULL,
  `phone_verified` varchar(1) NOT NULL DEFAULT 'N',
  `email_verified` varchar(1) NOT NULL DEFAULT 'N',
  `update_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userAccount`
--

INSERT INTO `userAccount` (`id`, `user_id`, `fullname`, `photo`, `date_birth`, `active_flag`, `creation_date`, `address`, `phone_verified`, `email_verified`, `update_date`) VALUES
(1, 16, 'Fahima Choirun Nabila', 'userphoto-16-2c9bed44b07bacb76a948d13bce32119.jpg', '2021-02-28', 'Y', '0000-00-00 00:00:00', 'Jl. Dieng No.12, Parikesit, Kejajar, Kabupaten Wonosobo, Jawa Tengah 56354', 'N', 'N', '2021-02-28 14:08:37'),
(2, 17, 'Fahima Choirun Nabila', 'user.jpg', NULL, 'Y', '0000-00-00 00:00:00', NULL, 'N', 'N', '0000-00-00 00:00:00'),
(3, 18, 'sunrising2', 'user.jpg', NULL, 'Y', '0000-00-00 00:00:00', NULL, 'N', 'N', '0000-00-00 00:00:00'),
(4, 19, 'Fahima Choirun Nabila', 'user.jpg', NULL, 'Y', '0000-00-00 00:00:00', NULL, 'N', 'N', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `vendorAccount`
--

CREATE TABLE `vendorAccount` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `logo` varchar(255) NOT NULL DEFAULT 'vendor.jpg',
  `active_flag` char(1) NOT NULL DEFAULT 'Y',
  `creation_date` datetime NOT NULL,
  `id_category` int(11) NOT NULL DEFAULT 0,
  `id_subcategory` varchar(10) NOT NULL DEFAULT '0',
  `deskripsi` text DEFAULT NULL,
  `color_id` int(11) DEFAULT 0,
  `alamat` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `fitur` text DEFAULT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendorAccount`
--

INSERT INTO `vendorAccount` (`id`, `user_id`, `fullname`, `logo`, `active_flag`, `creation_date`, `id_category`, `id_subcategory`, `deskripsi`, `color_id`, `alamat`, `url`, `fitur`, `update_date`) VALUES
(1, 2, 'Sidomuncul Sejak 1951', 'logo-2-20ec249d6357ebb004c58d7c9c4614b7.jpg', 'Y', '0000-00-00 00:00:00', 3, '15', 'Outlet berskala internasional yang menjual obat, jamu, dan suplemen.', 5, 'Jl. Industri II No.A No.19, Muktiharjo Lor, Kec. Genuk, Kota Semarang, Jawa Tengah 50111', 'https://www.youtube.com/embed/JGe9ePvKFx8', 'Sido Muncul is a publicly listed herbal medicine and food products company based in Semarang, Indonesia, established in 1940. It produces and markets a variety of consumer products related to herbal medication, such as the jamu Tolak Angin.', '2021-02-28'),
(2, 3, 'Tango', 'vendor.jpg', 'Y', '0000-00-00 00:00:00', 4, '0', NULL, NULL, NULL, '', '', '0000-00-00'),
(3, 4, 'Supreme', 'vendor.jpg', 'Y', '0000-00-00 00:00:00', 3, '14', NULL, NULL, NULL, '', '', '0000-00-00'),
(4, 5, 'Belenciaga', 'vendor.jpg', 'Y', '0000-00-00 00:00:00', 3, '17', NULL, NULL, NULL, '', '', '0000-00-00'),
(5, 9, 'Dominos Pizza', 'vendor.jpg', 'Y', '0000-00-00 00:00:00', 4, '0', NULL, 0, NULL, NULL, NULL, '0000-00-00'),
(6, 10, 'Wendy s Pizza', 'vendor.jpg', 'Y', '0000-00-00 00:00:00', 4, '11', NULL, 0, NULL, NULL, NULL, '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountType`
--
ALTER TABLE `accountType`
  ADD PRIMARY KEY (`user_type_id`);

--
-- Indexes for table `adminAccount`
--
ALTER TABLE `adminAccount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boothColor`
--
ALTER TABLE `boothColor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categoryType`
--
ALTER TABLE `categoryType`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `displaySetting`
--
ALTER TABLE `displaySetting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fasilitasArchieve`
--
ALTER TABLE `fasilitasArchieve`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `fotoArchieve`
--
ALTER TABLE `fotoArchieve`
  ADD PRIMARY KEY (`id_photo`);

--
-- Indexes for table `generalAccount`
--
ALTER TABLE `generalAccount`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `logActivity`
--
ALTER TABLE `logActivity`
  ADD PRIMARY KEY (`id_act`);

--
-- Indexes for table `logVisitors`
--
ALTER TABLE `logVisitors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postLogs`
--
ALTER TABLE `postLogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postMessage`
--
ALTER TABLE `postMessage`
  ADD PRIMARY KEY (`id_msg`);

--
-- Indexes for table `subCategoryType`
--
ALTER TABLE `subCategoryType`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenantAccount`
--
ALTER TABLE `tenantAccount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userAccount`
--
ALTER TABLE `userAccount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendorAccount`
--
ALTER TABLE `vendorAccount`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accountType`
--
ALTER TABLE `accountType`
  MODIFY `user_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `adminAccount`
--
ALTER TABLE `adminAccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `boothColor`
--
ALTER TABLE `boothColor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categoryType`
--
ALTER TABLE `categoryType`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `displaySetting`
--
ALTER TABLE `displaySetting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fasilitasArchieve`
--
ALTER TABLE `fasilitasArchieve`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `fotoArchieve`
--
ALTER TABLE `fotoArchieve`
  MODIFY `id_photo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `generalAccount`
--
ALTER TABLE `generalAccount`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `logActivity`
--
ALTER TABLE `logActivity`
  MODIFY `id_act` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=646;

--
-- AUTO_INCREMENT for table `logVisitors`
--
ALTER TABLE `logVisitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `postLogs`
--
ALTER TABLE `postLogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `postMessage`
--
ALTER TABLE `postMessage`
  MODIFY `id_msg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subCategoryType`
--
ALTER TABLE `subCategoryType`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tenantAccount`
--
ALTER TABLE `tenantAccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userAccount`
--
ALTER TABLE `userAccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vendorAccount`
--
ALTER TABLE `vendorAccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
