START TRANSACTION;
SET time_zone = "+07:00";

CREATE TABLE `accountType` (
  `user_type_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `user_type_name` varchar(100) NOT NULL,
  `active_flag` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `accountType` (`user_type_id`, `user_type_name`, `active_flag`) VALUES
(1, 'Admin', 'Y'),
(2, 'Vendor', 'Y'),
(3, 'Tenant', 'Y'),
(4, 'User', 'Y');

CREATE TABLE `boothColor` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `color` varchar(100) NOT NULL,
  `css` varchar(150) NOT NULL,
  `flag` varchar(1) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

CREATE TABLE `categoryType` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(100) NOT NULL,
  `flag` varchar(1) NOT NULL DEFAULT 'Y',
  `icon` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `displaySetting` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `link` text DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `page` varchar(255) DEFAULT NULL,
  `flag` varchar(1) DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `fasilitasArchieve` (
  `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `user_id` int(11) NOT NULL,
  `order_num` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `creation_date` date NOT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `fotoArchieve` (
  `id_photo` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `user_id` int(11) NOT NULL,
  `order_num` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `creation_date` date NOT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `generalAccount` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
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

CREATE TABLE `adminAccount` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `user_id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'admin.jpg',
  `active_flag` char(1) NOT NULL DEFAULT 'Y',
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `tenantAccount` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
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

CREATE TABLE `userAccount` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
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

CREATE TABLE `logActivity` (
  `id_act` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `user_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL,
  `routes` varchar(100) NOT NULL,
  `user_type_id` int(11) NOT NULL,
  `con_action` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `logVisitors` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `creation_date` datetime NOT NULL DEFAULT current_timestamp(),
  `routes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `postLogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `id_msg` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_subcategory` int(11) NOT NULL,
  `creation_date` datetime NOT NULL,
  `flag` varchar(1) NOT NULL DEFAULT 'Y',
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `postMessage` (
  `id_msg` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
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

CREATE TABLE `subCategoryType` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `id_category` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `flag` varchar(1) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `emailVerification` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `user_id` int(11) NOT NULL,
  `code` varchar(6) NOT NULL,
  `token` varchar(64) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp,
  `verified_at` timestamp DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `resetPassword` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `user_id` int(11) NOT NULL,
  `token` varchar(64) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp,
  `used_at` timestamp DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

COMMIT;