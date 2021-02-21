-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 22, 2021 at 12:23 AM
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
  `valid_flag` char(1) NOT NULL DEFAULT 'Y',
  `active_flag` char(1) NOT NULL DEFAULT 'Y',
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminAccount`
--

INSERT INTO `adminAccount` (`id`, `user_id`, `fullname`, `photo`, `valid_flag`, `active_flag`, `creation_date`) VALUES
(1, 1, 'admin', 'admin.jpg', 'Y', 'Y', '2021-02-20 19:50:39'),
(2, 8, 'Hwang Yeji', 'admin.jpg', 'Y', 'Y', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `allHastags`
--

CREATE TABLE `allHastags` (
  `id` int(11) NOT NULL,
  `tag` varchar(100) NOT NULL,
  `flag` varchar(1) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allHastags`
--

INSERT INTO `allHastags` (`id`, `tag`, `flag`) VALUES
(1, 'SekolahMurah', 'Y'),
(2, 'SmpDiPedurungan', 'Y'),
(3, 'SdDiTlogosari', 'Y'),
(4, 'TkDiKlipang', 'Y'),
(5, 'HmmMasihBingung', 'Y'),
(6, 'GalauGabisaMilih', 'Y');

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
  `flag` varchar(1) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categoryType`
--

INSERT INTO `categoryType` (`id`, `name`, `flag`) VALUES
(1, 'Formal', 'Y'),
(2, 'Non-Formal', 'Y'),
(3, 'Lainnya', 'Y'),
(4, 'Vendor', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitasArchieve`
--

CREATE TABLE `fasilitasArchieve` (
  `id_fasilitas` int(11) NOT NULL,
  `id_profile` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_num` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fotoArchieve`
--

CREATE TABLE `fotoArchieve` (
  `id_photo` int(11) NOT NULL,
  `id_profile` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_num` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `generalAccount`
--

CREATE TABLE `generalAccount` (
  `user_id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `res_password` varchar(6) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `phone_number` varchar(17) NOT NULL,
  `user_type_id` int(11) NOT NULL DEFAULT 0,
  `admin_acc_flag` varchar(1) NOT NULL DEFAULT 'N',
  `vendor_acc_flag` varchar(1) NOT NULL DEFAULT 'N',
  `tenant_acc_flag` varchar(1) NOT NULL DEFAULT 'N',
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `generalAccount`
--

INSERT INTO `generalAccount` (`user_id`, `username`, `email`, `password`, `res_password`, `fullname`, `phone_number`, `user_type_id`, `admin_acc_flag`, `vendor_acc_flag`, `tenant_acc_flag`, `creation_date`) VALUES
(1, 'admin', 'admin@hmssemarang.com', 'admin123', 'XVY312', 'Admin FEX', '081234567890', 1, 'Y', 'N', 'N', '2021-02-20 19:48:59'),
(2, 'VE-0001', 'info@sidomuncul.co.id', 'rmH1FiNA', 'QBUP0W', 'Sidomuncul', '628199281722', 2, 'N', 'Y', 'N', '2021-02-20 23:38:50'),
(3, 'VE-0002', 'marketing@tango.co.id', '0dr3UWJ1', '74GI5G', 'Tango', '6287711002', 2, 'N', 'Y', 'N', '2021-02-20 23:43:59'),
(4, 'VE-0003', 'weareall@supreme.co.sg', 'G92qIHcB', 'YEQ3GF', 'Supreme', '658312219921', 2, 'N', 'Y', 'N', '2021-02-20 23:45:57'),
(5, 'VE-0004', 'ourshoes@belenciaga.co.id', 'KFBaASH5', 'IYWQEC', 'Belenciaga', '65099881128', 2, 'N', 'Y', 'N', '2021-02-21 01:05:07'),
(6, 'TE-0001', 'smpn1smg@sch.id', 'zLnyH2Rd', '2ZKYZS', 'SMP Negeri 1 Semarang', '9889009', 3, 'N', 'N', 'Y', '2021-02-21 01:21:10'),
(7, 'TE-0002', 'esperojos@sch.id', 'Yyz5gT2I', 'E4R2G4', 'SMP Negeri 2 Semarang', '778299102', 3, 'N', 'N', 'Y', '2021-02-21 01:24:40'),
(8, 'ADM-0002', 'yeji.admin@hmssemarang.com', 'bnowSxbE', 'WF6ORF', 'Hwang Yeji', '628129907371', 1, 'Y', 'N', 'N', '2021-02-21 02:07:15');

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
(1, 1, '2021-02-21 03:17:18', 'http://[::1]/ci-new/Auth', 1, 0),
(2, 1, '2021-02-21 03:17:18', 'http://[::1]/ci-new/Dashboard', 1, 0),
(3, 1, '2021-02-21 03:20:24', 'http://[::1]/ci-new/Dashboard', 1, 0),
(4, 1, '2021-02-21 03:30:58', 'http://[::1]/ci-new/Auth', 1, 0),
(5, 1, '2021-02-21 03:30:58', 'http://[::1]/ci-new/Dashboard', 1, 0),
(6, 1, '2021-02-21 03:35:04', 'http://[::1]/ci-new/Auth', 1, 0),
(7, 1, '2021-02-21 03:35:04', 'http://[::1]/ci-new/Dashboard', 1, 0),
(8, 1, '2021-02-21 03:35:45', 'http://[::1]/ci-new/Auth', 1, 0),
(9, 1, '2021-02-21 03:35:45', 'http://[::1]/ci-new/Dashboard', 1, 0),
(10, 0, '2021-02-21 03:35:51', 'http://[::1]/ci-new/Auth', 0, 0),
(11, 1, '2021-02-21 03:36:04', 'http://[::1]/ci-new/Auth', 1, 0),
(12, 1, '2021-02-21 03:36:04', 'http://[::1]/ci-new/Dashboard', 1, 0),
(13, 1, '2021-02-21 03:37:42', 'http://[::1]/ci-new/Dashboard', 1, 0),
(14, 1, '2021-02-21 03:38:08', 'http://[::1]/ci-new/Dashboard', 1, 0),
(15, 1, '2021-02-21 03:38:23', 'http://[::1]/ci-new/Dashboard', 1, 0),
(16, 1, '2021-02-21 03:38:47', 'http://[::1]/ci-new/Dashboard', 1, 0),
(17, 1, '2021-02-21 03:39:01', 'http://[::1]/ci-new/Dashboard', 1, 0),
(18, 1, '2021-02-21 03:40:41', 'http://[::1]/ci-new/Dashboard', 1, 0),
(19, 1, '2021-02-21 03:41:22', 'http://[::1]/ci-new/Dashboard', 1, 0),
(20, 1, '2021-02-21 03:46:03', 'http://[::1]/ci-new/Dashboard', 1, 0),
(21, 1, '2021-02-21 03:47:22', 'http://[::1]/ci-new/Dashboard', 1, 0),
(22, 1, '2021-02-21 08:02:06', 'http://[::1]/ci-new/Auth', 1, 0),
(23, 1, '2021-02-21 08:02:06', 'http://[::1]/ci-new/Dashboard', 1, 0),
(24, 0, '2021-02-21 08:03:27', 'http://[::1]/ci-new/DashboardAdmin', 0, 0),
(25, 0, '2021-02-21 08:03:46', 'http://[::1]/ci-new/DashboardAdmin', 0, 0),
(26, 1, '2021-02-21 08:04:13', 'http://[::1]/ci-new/DashboardAdmin', 1, 0),
(27, 1, '2021-02-21 08:04:14', 'http://[::1]/ci-new/Dashboard', 1, 0),
(28, 1, '2021-02-21 08:05:48', 'http://[::1]/ci-new/Dashboard', 1, 0),
(29, 1, '2021-02-21 08:06:28', 'http://[::1]/ci-new/Dashboard', 1, 0),
(30, 1, '2021-02-22 04:21:34', 'http://[::1]/ci-new/Auth', 1, 0),
(31, 1, '2021-02-22 04:21:34', 'http://[::1]/ci-new/Dashboard', 1, 0),
(32, 1, '2021-02-22 04:24:57', 'http://[::1]/ci-new/Dashboard', 1, 0),
(33, 1, '2021-02-22 04:25:06', 'http://[::1]/ci-new/Dashboard', 1, 0),
(34, 1, '2021-02-22 04:26:25', 'http://[::1]/ci-new/Dashboard', 1, 0),
(35, 1, '2021-02-22 04:27:02', 'http://[::1]/ci-new/Dashboard', 1, 0),
(36, 1, '2021-02-22 04:28:03', 'http://[::1]/ci-new/Dashboard', 1, 0),
(37, 1, '2021-02-22 04:28:08', 'http://[::1]/ci-new/DashboardAdmin', 1, 0),
(38, 0, '2021-02-22 04:28:11', 'http://[::1]/ci-new/AddVendor', 0, 0),
(39, 1, '2021-02-22 04:29:12', 'http://[::1]/ci-new/AddVendor', 1, 0),
(40, 1, '2021-02-22 04:29:15', 'http://[::1]/ci-new/AddTenant', 1, 0),
(41, 1, '2021-02-22 04:29:16', 'http://[::1]/ci-new/AddAdmin', 1, 0),
(42, 1, '2021-02-22 04:29:19', 'http://[::1]/ci-new/AddTenant', 1, 0),
(43, 1, '2021-02-22 04:29:26', 'http://[::1]/ci-new/AddVendor', 1, 0),
(44, 1, '2021-02-22 04:29:28', 'http://[::1]/ci-new/AddAdmin', 1, 0),
(45, 1, '2021-02-22 04:29:29', 'http://[::1]/ci-new/DisplaySetting', 1, 0),
(46, 1, '2021-02-22 04:29:29', 'http://[::1]/ci-new/MenuSetup', 1, 0),
(47, 1, '2021-02-22 04:29:30', 'http://[::1]/ci-new/ExportImport', 1, 0),
(48, 1, '2021-02-22 04:29:41', 'http://[::1]/ci-new/DashboardVendor', 1, 0),
(49, 1, '2021-02-22 04:36:35', 'http://[::1]/ci-new/DashboardVendor', 1, 0),
(50, 1, '2021-02-22 04:36:35', 'http://[::1]/ci-new/Dashboard', 1, 0),
(51, 2, '2021-02-22 04:37:28', 'http://[::1]/ci-new/Auth', 2, 0),
(52, 2, '2021-02-22 04:37:28', 'http://[::1]/ci-new/Dashboard', 2, 0),
(53, 2, '2021-02-22 04:38:44', 'http://[::1]/ci-new/Dashboard', 2, 0),
(54, 2, '2021-02-22 04:38:57', 'http://[::1]/ci-new/Dashboard', 2, 0),
(55, 2, '2021-02-22 04:39:02', 'http://[::1]/ci-new/DashboardVendor', 2, 0),
(56, 2, '2021-02-22 04:39:30', 'http://[::1]/ci-new/DashboardVendor', 2, 0),
(57, 2, '2021-02-22 04:39:49', 'http://[::1]/ci-new/DashboardVendor', 2, 0),
(58, 2, '2021-02-22 04:40:10', 'http://[::1]/ci-new/DashboardVendor', 2, 0),
(59, 2, '2021-02-22 04:40:36', 'http://[::1]/ci-new/DashboardVendor', 2, 0),
(60, 2, '2021-02-22 04:51:15', 'http://[::1]/ci-new/DashboardVendor', 2, 0),
(61, 2, '2021-02-22 04:51:34', 'http://[::1]/ci-new/VendorEditProfile', 2, 0),
(62, 2, '2021-02-22 05:58:59', 'http://[::1]/ci-new/VendorEditProfile', 2, 0),
(63, 2, '2021-02-22 05:59:01', 'http://[::1]/ci-new/VendorEditProfile', 2, 0),
(64, 2, '2021-02-22 06:02:06', 'http://[::1]/ci-new/VendorEditProfile', 2, 0),
(65, 2, '2021-02-22 06:02:25', 'http://[::1]/ci-new/VendorEditProfile', 2, 0),
(66, 2, '2021-02-22 06:03:43', 'http://[::1]/ci-new/VendorEditProfile', 2, 0),
(67, 2, '2021-02-22 06:07:23', 'http://[::1]/ci-new/VendorEditProfile', 2, 0),
(68, 2, '2021-02-22 06:07:59', 'http://[::1]/ci-new/VendorEditProfile', 2, 0),
(69, 2, '2021-02-22 06:14:19', 'http://[::1]/ci-new/VendorEditProfile', 2, 0),
(70, 2, '2021-02-22 06:14:46', 'http://[::1]/ci-new/VendorEditProfile', 2, 0),
(71, 2, '2021-02-22 06:15:16', 'http://[::1]/ci-new/VendorEditProfile', 2, 0),
(72, 2, '2021-02-22 06:16:21', 'http://[::1]/ci-new/VendorEditProfile', 2, 0),
(73, 2, '2021-02-22 06:16:36', 'http://[::1]/ci-new/VendorEditProfile', 2, 0),
(74, 2, '2021-02-22 06:18:07', 'http://[::1]/ci-new/VendorEditProfile', 2, 0),
(75, 2, '2021-02-22 06:21:06', 'http://[::1]/ci-new/VendorEditProfile', 2, 0),
(76, 2, '2021-02-22 06:21:55', 'http://[::1]/ci-new/VendorEditProfile', 2, 0),
(77, 2, '2021-02-22 06:22:29', 'http://[::1]/ci-new/VendorEditProfile', 2, 0),
(78, 2, '2021-02-22 06:22:52', 'http://[::1]/ci-new/DashboardVendor', 2, 0),
(79, 2, '2021-02-22 06:23:00', 'http://[::1]/ci-new/VendorEditProfile', 2, 0),
(80, 2, '2021-02-22 06:23:16', 'http://[::1]/ci-new/VendorEditProfile', 2, 0),
(81, 2, '2021-02-22 06:23:18', 'http://[::1]/ci-new/DashboardVendor', 2, 0);

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
(1, '2021-02-21 02:59:01', 'http://[::1]/ci-new/'),
(2, '2021-02-21 02:59:45', 'http://[::1]/ci-new/Login'),
(3, '2021-02-21 03:00:27', 'http://[::1]/ci-new/Login'),
(4, '2021-02-21 03:00:33', 'http://[::1]/ci-new/Login'),
(5, '2021-02-21 03:01:57', 'http://[::1]/ci-new/Login'),
(6, '2021-02-21 03:03:00', 'http://[::1]/ci-new/Login'),
(7, '2021-02-21 03:03:08', 'http://[::1]/ci-new/Login'),
(8, '2021-02-21 03:03:12', 'http://[::1]/ci-new/Login'),
(9, '2021-02-21 03:03:15', 'http://[::1]/ci-new/Login'),
(10, '2021-02-21 03:03:18', 'http://[::1]/ci-new/Login'),
(11, '2021-02-21 03:03:55', 'http://[::1]/ci-new/Login'),
(12, '2021-02-21 03:04:01', 'http://[::1]/ci-new/Login'),
(13, '2021-02-21 03:05:03', 'http://[::1]/ci-new/Login'),
(14, '2021-02-21 03:05:12', 'http://[::1]/ci-new/Login'),
(15, '2021-02-21 03:05:59', 'http://[::1]/ci-new/Login'),
(16, '2021-02-21 03:12:05', 'http://[::1]/ci-new/Login'),
(17, '2021-02-21 03:13:05', 'http://[::1]/ci-new/Login'),
(18, '2021-02-21 03:13:17', 'http://[::1]/ci-new/Login'),
(19, '2021-02-21 03:14:51', 'http://[::1]/ci-new/Login'),
(20, '2021-02-21 03:14:57', 'http://[::1]/ci-new/Login'),
(21, '2021-02-21 03:15:21', 'http://[::1]/ci-new/Login'),
(22, '2021-02-21 03:15:26', 'http://[::1]/ci-new/Login'),
(23, '2021-02-21 03:15:30', 'http://[::1]/ci-new/Login'),
(24, '2021-02-21 03:15:33', 'http://[::1]/ci-new/Login'),
(25, '2021-02-21 03:16:10', 'http://[::1]/ci-new/Login'),
(26, '2021-02-21 03:16:48', 'http://[::1]/ci-new/Login'),
(27, '2021-02-21 03:17:14', 'http://[::1]/ci-new/Login'),
(28, '2021-02-21 03:20:37', 'http://[::1]/ci-new/Login'),
(29, '2021-02-21 03:20:44', 'http://[::1]/ci-new/Login'),
(30, '2021-02-21 03:20:52', 'http://[::1]/ci-new/Login'),
(31, '2021-02-21 03:21:14', 'http://[::1]/ci-new/Login'),
(32, '2021-02-21 03:21:24', 'http://[::1]/ci-new/Login'),
(33, '2021-02-21 03:22:25', 'http://[::1]/ci-new/Login'),
(34, '2021-02-21 03:22:31', 'http://[::1]/ci-new/Login'),
(35, '2021-02-21 03:23:10', 'http://[::1]/ci-new/Login'),
(36, '2021-02-21 03:23:14', 'http://[::1]/ci-new/Login'),
(37, '2021-02-21 03:23:41', 'http://[::1]/ci-new/Login'),
(38, '2021-02-21 03:23:49', 'http://[::1]/ci-new/Login'),
(39, '2021-02-21 03:24:46', 'http://[::1]/ci-new/Login'),
(40, '2021-02-21 03:25:52', 'http://[::1]/ci-new/Login'),
(41, '2021-02-21 03:26:11', 'http://[::1]/ci-new/Login'),
(42, '2021-02-21 03:26:17', 'http://[::1]/ci-new/Login'),
(43, '2021-02-21 03:26:17', 'http://[::1]/ci-new/Login'),
(44, '2021-02-21 03:26:17', 'http://[::1]/ci-new/Login'),
(45, '2021-02-21 03:26:18', 'http://[::1]/ci-new/Login'),
(46, '2021-02-21 03:26:18', 'http://[::1]/ci-new/Login'),
(47, '2021-02-21 03:27:12', 'http://[::1]/ci-new/Login'),
(48, '2021-02-21 03:28:30', 'http://[::1]/ci-new/Login'),
(49, '2021-02-21 03:30:09', 'http://[::1]/ci-new/Login'),
(50, '2021-02-21 03:30:27', 'http://[::1]/ci-new/Login'),
(51, '2021-02-21 03:30:49', 'http://[::1]/ci-new/Login'),
(52, '2021-02-21 03:31:41', 'http://[::1]/ci-new/Login'),
(53, '2021-02-21 03:31:49', 'http://[::1]/ci-new/Login'),
(54, '2021-02-21 03:32:49', 'http://[::1]/ci-new/Login'),
(55, '2021-02-21 03:32:58', 'http://[::1]/ci-new/Login'),
(56, '2021-02-21 03:33:04', 'http://[::1]/ci-new/Login'),
(57, '2021-02-21 03:33:12', 'http://[::1]/ci-new/Login'),
(58, '2021-02-21 03:33:59', 'http://[::1]/ci-new/Login'),
(59, '2021-02-21 03:35:00', 'http://[::1]/ci-new/Login'),
(60, '2021-02-21 03:35:40', 'http://[::1]/ci-new/Login'),
(61, '2021-02-21 03:35:49', 'http://[::1]/ci-new/Login'),
(62, '2021-02-21 03:35:59', 'http://[::1]/ci-new/Login'),
(63, '2021-02-21 08:01:51', 'http://[::1]/ci-new/Login'),
(64, '2021-02-21 08:01:57', 'http://[::1]/ci-new/Login'),
(65, '2021-02-22 04:20:54', 'http://localhost/ci-new/'),
(66, '2021-02-22 04:21:05', 'http://[::1]/ci-new/Login'),
(67, '2021-02-22 04:21:19', 'http://localhost/ci-new/'),
(68, '2021-02-22 04:37:12', 'http://[::1]/ci-new/Login');

-- --------------------------------------------------------

--
-- Table structure for table `postMessage`
--

CREATE TABLE `postMessage` (
  `id_msg` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `msg` int(11) NOT NULL,
  `creation_date` int(11) NOT NULL,
  `deleted_flag` varchar(1) NOT NULL,
  `deleted_date` datetime NOT NULL,
  `edited_flag` varchar(1) NOT NULL,
  `edited_date` datetime NOT NULL,
  `filename` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `profileDetail`
--

CREATE TABLE `profileDetail` (
  `id_profile` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `warna_booth` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `url_embed` text NOT NULL,
  `additional` text NOT NULL,
  `foto_flag` varchar(1) NOT NULL,
  `fasilitas_flag` varchar(1) NOT NULL,
  `creation_date` datetime NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `valid_flag` char(1) NOT NULL DEFAULT 'Y',
  `active_flag` char(1) NOT NULL DEFAULT 'Y',
  `creation_date` datetime NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_subcategory` int(11) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `color_id` int(11) NOT NULL DEFAULT 0,
  `alamat` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `fitur` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tenantAccount`
--

INSERT INTO `tenantAccount` (`id`, `user_id`, `fullname`, `logo`, `valid_flag`, `active_flag`, `creation_date`, `id_category`, `id_subcategory`, `tags`, `deskripsi`, `color_id`, `alamat`, `url`, `fitur`) VALUES
(1, 6, 'SMP Negeri 1 Semarang', 'tenant.jpg', 'Y', 'Y', '0000-00-00 00:00:00', 1, 4, 'HmmMasihBingung#SmpDiPedurungan#SekolahMurah', NULL, 0, NULL, NULL, NULL),
(2, 7, 'SMP Negeri 2 Semarang', 'tenant.jpg', 'Y', 'Y', '0000-00-00 00:00:00', 1, 4, 'GalauGabisaMilih#HmmMasihBingung#SekolahMurah', NULL, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userAccount`
--

CREATE TABLE `userAccount` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'user.jpg',
  `date_birth` date NOT NULL,
  `activation_code` varchar(10) NOT NULL,
  `valid_flag` char(1) NOT NULL DEFAULT 'Y',
  `active_flag` char(1) NOT NULL DEFAULT 'Y',
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vendorAccount`
--

CREATE TABLE `vendorAccount` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `logo` varchar(255) NOT NULL DEFAULT 'vendor.jpg',
  `valid_flag` char(1) NOT NULL DEFAULT 'Y',
  `active_flag` char(1) NOT NULL DEFAULT 'Y',
  `creation_date` datetime NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_subcategory` int(11) NOT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `color_id` int(11) DEFAULT 0,
  `alamat` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `fitur` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendorAccount`
--

INSERT INTO `vendorAccount` (`id`, `user_id`, `fullname`, `logo`, `valid_flag`, `active_flag`, `creation_date`, `id_category`, `id_subcategory`, `tags`, `deskripsi`, `color_id`, `alamat`, `url`, `fitur`) VALUES
(1, 2, 'Sidomuncul', 'vendor.jpg', 'Y', 'Y', '0000-00-00 00:00:00', 3, 14, '#ApaanSih', NULL, NULL, NULL, '', ''),
(2, 3, 'Tango', 'vendor.jpg', 'Y', 'Y', '0000-00-00 00:00:00', 4, 0, '#MlsBanget', NULL, NULL, NULL, '', ''),
(3, 4, 'Supreme', 'vendor.jpg', 'Y', 'Y', '0000-00-00 00:00:00', 3, 14, 'GalauGabisaMilih#HmmMasihBingung', NULL, NULL, NULL, '', ''),
(4, 5, 'Belenciaga', 'vendor.jpg', 'Y', 'Y', '0000-00-00 00:00:00', 3, 17, 'SdDiTlogosari#SmpDiPedurungan#SekolahMurah', NULL, NULL, NULL, '', '');

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
-- Indexes for table `allHastags`
--
ALTER TABLE `allHastags`
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
-- Indexes for table `postMessage`
--
ALTER TABLE `postMessage`
  ADD PRIMARY KEY (`id_msg`);

--
-- Indexes for table `profileDetail`
--
ALTER TABLE `profileDetail`
  ADD PRIMARY KEY (`id_profile`);

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
-- AUTO_INCREMENT for table `allHastags`
--
ALTER TABLE `allHastags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- AUTO_INCREMENT for table `fasilitasArchieve`
--
ALTER TABLE `fasilitasArchieve`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fotoArchieve`
--
ALTER TABLE `fotoArchieve`
  MODIFY `id_photo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `generalAccount`
--
ALTER TABLE `generalAccount`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `logActivity`
--
ALTER TABLE `logActivity`
  MODIFY `id_act` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `logVisitors`
--
ALTER TABLE `logVisitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `postMessage`
--
ALTER TABLE `postMessage`
  MODIFY `id_msg` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profileDetail`
--
ALTER TABLE `profileDetail`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subCategoryType`
--
ALTER TABLE `subCategoryType`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tenantAccount`
--
ALTER TABLE `tenantAccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userAccount`
--
ALTER TABLE `userAccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendorAccount`
--
ALTER TABLE `vendorAccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
