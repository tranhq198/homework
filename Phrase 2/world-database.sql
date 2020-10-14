-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th10 14, 2020 lúc 03:19 AM
-- Phiên bản máy phục vụ: 8.0.21
-- Phiên bản PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `world-database`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cities`
--

DROP TABLE IF EXISTS `cities`;
CREATE TABLE IF NOT EXISTS `cities` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `countryCode` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `district` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `population` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cities`
--

INSERT INTO `cities` (`id`, `name`, `countryCode`, `district`, `population`) VALUES
(1, 'Ha Noi', '+84', '30', 1000000),
(2, 'Ho Chi Minh', '+84', '24', 2000000),
(3, 'Da Nang', '+84', '8', 3000000),
(4, 'Ca Mau', '+84', '40', 300000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `countries`
--

DROP TABLE IF EXISTS `countries`;
CREATE TABLE IF NOT EXISTS `countries` (
  `code` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `continent` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `surfaceArea` int DEFAULT NULL,
  `expectancy` int DEFAULT NULL,
  `population` int DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=MyISAM AUTO_INCREMENT=87 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `countries`
--

INSERT INTO `countries` (`code`, `name`, `continent`, `surfaceArea`, `expectancy`, `population`) VALUES
(84, 'Viet Nam', 'Asia', 331320, 70, 80000000),
(81, 'Japan', 'Asia', 100000, 80, 20000000),
(44, 'United Kingdom', 'Europe', 200000, 75, 30000000),
(27, 'South Africa', 'Africa', 500000, 72, 70000000),
(1, 'Canada', 'Americas', 2000000, 60, 300000000),
(86, 'China', 'Asia', 2500000, 60, 1000000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `countrieslanguages`
--

DROP TABLE IF EXISTS `countrieslanguages`;
CREATE TABLE IF NOT EXISTS `countrieslanguages` (
  `countryCode` int NOT NULL AUTO_INCREMENT,
  `language` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `official` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `percentage` int DEFAULT NULL,
  PRIMARY KEY (`countryCode`)
) ENGINE=MyISAM AUTO_INCREMENT=87 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `countrieslanguages`
--

INSERT INTO `countrieslanguages` (`countryCode`, `language`, `official`, `percentage`) VALUES
(84, 'Vietnammes, English', 'Vietnammes', 98),
(86, 'Chinese, English', 'Chinese', 99),
(81, 'Japan, English', 'Japan', 90),
(44, 'English, Welsh  ', 'Welsh ', 10),
(1, 'Canada, English', 'Canada', 70),
(27, 'South Africa, English ', 'South Africa', 90);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
