-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2022 at 04:24 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `albarokah`
--

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `an` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `norek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `bank`, `an`, `norek`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'BSI', 'Andry Hudarojat', '3510516199', NULL, '2022-11-09 16:22:55', '2022-11-09 16:22:55');

-- --------------------------------------------------------

--
-- Table structure for table `cabangs`
--

CREATE TABLE `cabangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` enum('cowok','cewek') COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cabangs`
--

INSERT INTO `cabangs` (`id`, `nama`, `kategori`, `latitude`, `longitude`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Kos Al Barokah 1', 'cewek', '-8.2995666', '114.3131265', NULL, '2022-11-09 12:37:43', '2022-11-09 12:37:43'),
(2, 'Kos Al Barokah 2', 'cewek', '-8.2995666', '114.3131265', NULL, '2022-11-09 12:38:02', '2022-11-09 12:38:02'),
(3, 'Kos Al Barokah 3', 'cowok', '-8.2995666', '114.3131265', NULL, '2022-11-09 12:38:21', '2022-11-09 12:38:21');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `gambarkos`
--

CREATE TABLE `gambarkos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kamars_id` bigint(20) UNSIGNED DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gambarkos`
--

INSERT INTO `gambarkos` (`id`, `kamars_id`, `gambar`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'gambarkos/DfSkKLXo3wdA00bsYKAg7EkOOPynRUqIXkJ8co9j.jpg', '2022-11-09 12:46:54', NULL, '2022-11-09 12:46:54'),
(2, 1, 'gambarkos/YDxGcfBMc0oGNcoVnODtooZXcu3as6Wu6iBpMbTb.jpg', '2022-11-09 12:46:54', NULL, '2022-11-09 12:46:54'),
(3, 1, 'gambarkos/fsdfECgFcIuPNmjR7W7uJzLhaeQjuxPQQTxolunL.jpg', '2022-11-09 12:46:54', NULL, '2022-11-09 12:46:54'),
(4, 1, 'gambarkos/NXl04E8iqUkRFCam7oDzva9QeanInGMftRT0Wn3v.jpg', '2022-11-09 12:46:54', NULL, '2022-11-09 12:46:54'),
(5, 1, 'gambarkos/E61VJBXfjmbX8zwWj2q6yUEfmZH11JK9EcOqJSJZ.jpg', '2022-11-09 12:46:54', NULL, '2022-11-09 12:46:54'),
(6, 1, 'gambarkos/DkwI6XiciqO0jQhFmEfjhAx9q3jEYJYhIhv7p4tB.jpg', '2022-11-09 12:46:54', NULL, '2022-11-09 12:46:54'),
(7, 1, 'gambarkos/2noOyrfcT1tzJ09bUcIakMHODIUlvtTIekkKW0r4.jpg', '2022-11-09 12:46:54', NULL, '2022-11-09 12:46:54'),
(8, 1, 'gambarkos/wYhrD2cQJsG9jc2CCX8HzjT7E0FPOkPRUuNEz9Rr.jpg', NULL, NULL, NULL),
(9, 1, 'gambarkos/ppiiNwjS0prlufln6szxDLJ4ySJfL4SH8vNWSiXZ.jpg', NULL, NULL, NULL),
(10, 1, 'gambarkos/iTMJrKPgfNlnylVY2WSaatZC4pO06yzigfuISMQD.jpg', NULL, NULL, NULL),
(11, 1, 'gambarkos/fdeiwuI60cctpoGXUTrkgr1dZFE3JzKPID5sLg4Z.jpg', NULL, NULL, NULL),
(12, 1, 'gambarkos/JOHPpBcBAyP5Yn2ozfeKC1uiwDV3NxgERV1M2A88.jpg', NULL, NULL, NULL),
(13, 1, 'gambarkos/ttcbvyJrVTXZzb8Od9287MMSR0NJehSoCEVOmLDJ.jpg', NULL, NULL, NULL),
(14, 2, 'gambarkos/bp9AHgKX0wOxS5GXBAvA7X3EMiHIlx1rCRpmjli8.jpg', '2022-11-09 12:53:49', NULL, '2022-11-09 12:53:49'),
(15, 2, 'gambarkos/bA7kHTZ0syihzTK35sApQFUwuDZbefCZeuEtM2P9.jpg', '2022-11-09 12:53:49', NULL, '2022-11-09 12:53:49'),
(16, 2, 'gambarkos/uxwtTiZWHLtLSgTgOM5sBzXtMXsj8VIEkp6MdQd4.jpg', '2022-11-09 12:53:49', NULL, '2022-11-09 12:53:49'),
(17, 2, 'gambarkos/m7SM6Jc4BxfHuALZ2Vg1PWCgfP5PxP0SduICQpbm.jpg', '2022-11-09 12:53:49', NULL, '2022-11-09 12:53:49'),
(18, 2, 'gambarkos/JCiqxQK7x6IiNqiau3D5RUzVd1zHUAOBy1TOEcxX.jpg', '2022-11-09 12:53:49', NULL, '2022-11-09 12:53:49'),
(19, 2, 'gambarkos/VAcWWdQEYTwjsD4jHSLbh09YwWv46eZNK3jEBwVO.jpg', '2022-11-09 12:53:49', NULL, '2022-11-09 12:53:49'),
(20, 3, 'gambarkos/a0Yt7oXWZhpczv0ERWeJQksRQ74OLnL62Vlzd6MB.jpg', NULL, NULL, NULL),
(21, 3, 'gambarkos/VdFgO3YecY1A2YfGNL8AbjDFdzczmFN3dEsTv76s.jpg', NULL, NULL, NULL),
(22, 3, 'gambarkos/PEEV0HFFyzaQO8RnV3MlhOZu2vKSUEf9FGMDrWsV.jpg', NULL, NULL, NULL),
(23, 3, 'gambarkos/R5AHnpDC0torcriQoELkC0sFAfGOUgBLeKQjPdML.jpg', NULL, NULL, NULL),
(24, 3, 'gambarkos/11x7Fai8mGCXnRIxQox2Av953c6g4m2qPqavc85O.jpg', NULL, NULL, NULL),
(25, 3, 'gambarkos/LI1gfpmBo9WuucVoohO5xU3jU6WprxEOirVrXZ5z.jpg', NULL, NULL, NULL),
(26, 4, 'gambarkos/xE9617HUfQ6Am2im7KF6KE6dY1QY8mF7omCfXfhn.jpg', NULL, NULL, NULL),
(27, 4, 'gambarkos/mF5TawKN643C7Tnmsd8q0TmCLcukY9AJWQYIeBwF.jpg', NULL, NULL, NULL),
(28, 4, 'gambarkos/qCKXaDzxhFnEAG70fRgWC5Q5nBQOueqLprAvh4tJ.jpg', NULL, NULL, NULL),
(29, 4, 'gambarkos/YRYFhQ5bYfgtnNHr1TDm8lUrYEnT4eMjOpAULryL.jpg', NULL, NULL, NULL),
(30, 4, 'gambarkos/Eeo6SWnADRpWnaOFTLoaaYXcIsqxynf0kMb3L2nl.jpg', NULL, NULL, NULL),
(31, 4, 'gambarkos/e29JtVCN3dqRPB22WOOaXM4KEvamePoCWKEgiQBj.jpg', NULL, NULL, NULL),
(32, 5, 'gambarkos/XOqPUhuDIprqteZGOBg5L9fpMpdHaeTllYsHs8kj.jpg', NULL, NULL, NULL),
(33, 5, 'gambarkos/iyM8VQlFF85OHMW9I78tWpXAoYREo2Wi1f4jIrjO.jpg', NULL, NULL, NULL),
(34, 5, 'gambarkos/TEIAteFSoLKcs595i5L7hou8L4NqGLOrpEwxto8V.jpg', NULL, NULL, NULL),
(35, 5, 'gambarkos/oMuoUMJotKqmN5vYf21rM9cZwgK0DYKviG7XCCYp.jpg', NULL, NULL, NULL),
(36, 5, 'gambarkos/w4xDx7BU6LAlxYoOAv6zBR2tF6xIwcraQpCQJXJE.jpg', NULL, NULL, NULL),
(37, 5, 'gambarkos/L7PlrK4eTU4kjt3D7A0CdzbAmtDBt0qnHqgk3xdD.jpg', NULL, NULL, NULL),
(38, 2, 'gambarkos/BoHtNS2auWy1mA8MsCFu7QBf0bxNtsGpM8HSCCyx.jpg', '2022-11-09 12:58:38', NULL, '2022-11-09 12:58:38'),
(39, 2, 'gambarkos/pZLXXyrbEIDzjG8e94ehUxYU5ZaDJkK8fqWhl8OE.jpg', '2022-11-09 12:58:38', NULL, '2022-11-09 12:58:38'),
(40, 2, 'gambarkos/XYxa88WYZuv12abwL6425n304HWT2decqShSDwBH.jpg', '2022-11-09 12:58:38', NULL, '2022-11-09 12:58:38'),
(41, 2, 'gambarkos/jHvXi7toQShvR7bsD8ldFt5ZqwbzduaYKGAL3kPA.jpg', '2022-11-09 12:58:38', NULL, '2022-11-09 12:58:38'),
(42, 2, 'gambarkos/7XofJzvGb7VH5CrbTLDMVac89dcKnmTGf6PcZnUT.jpg', '2022-11-09 12:58:38', NULL, '2022-11-09 12:58:38'),
(43, 2, 'gambarkos/DfuAmMwhq39xll5szFnKsrPWjUBbN5zcPuxGF6FT.jpg', '2022-11-09 12:58:38', NULL, '2022-11-09 12:58:38'),
(44, 2, 'gambarkos/1y5tsaAo4xCr1iBr0GTMSO6Y6F1orIP3R34d8uS1.jpg', '2022-11-09 14:57:36', NULL, '2022-11-09 14:57:36'),
(45, 2, 'gambarkos/yb0fnSnR7ZGFQWZRtDKPLI5biJrzNy9TdvynLKsu.jpg', '2022-11-09 14:57:36', NULL, '2022-11-09 14:57:36'),
(46, 2, 'gambarkos/xm8Cwl45b1e365wwIcpvLHKkjgmexP6SP8fMAsB5.jpg', '2022-11-09 14:57:36', NULL, '2022-11-09 14:57:36'),
(47, 2, 'gambarkos/lLjLw0tNCKSM6ltd1FpacJCeIwKEB7K9eI2wVrER.jpg', '2022-11-09 14:57:36', NULL, '2022-11-09 14:57:36'),
(48, 2, 'gambarkos/oBA3UQgbPi1gsMufpMeWrX0pg70Tqx29h6KVZBlI.jpg', '2022-11-09 14:57:36', NULL, '2022-11-09 14:57:36'),
(49, 2, 'gambarkos/H0HSbtZS73t40HOQrhpx2PnR6Qa54fCZ6OdujRiX.jpg', '2022-11-09 14:57:36', NULL, '2022-11-09 14:57:36'),
(50, 2, 'gambarkos/OzHgDb2LimQ6TubQjHo7Bj1cB9ydHoOStGCamCjd.jpg', NULL, NULL, NULL),
(51, 2, 'gambarkos/X2tcr61VYpmsXbINeRZ0Yvylk3LlAT4w1ryTPrm7.jpg', NULL, NULL, NULL),
(52, 2, 'gambarkos/p6BtzqeFFR9etz3MkLHKRbrG3EE4EbmivWjp62ZT.jpg', NULL, NULL, NULL),
(53, 2, 'gambarkos/LuFk9tlMgkUxiDwr2xTSlYFMzVUOSEJuJYAzFlFF.jpg', NULL, NULL, NULL),
(54, 2, 'gambarkos/GY04tncsduEEHcrWH1CF453vvfcHHvQ8ZWYvktBh.jpg', NULL, NULL, NULL),
(55, 2, 'gambarkos/VozJc8C52Ffm0N98o60hdzIF7MBABJ0T2gzDUdWV.jpg', NULL, NULL, NULL),
(56, 6, 'gambarkos/BZbKUgeFUHGzz7RtDVSErsNxLgucDcDPhejyVg5X.jpg', NULL, NULL, NULL),
(57, 6, 'gambarkos/fyKhiO3IMHjKlUeNqtEEKPZYsaj4lOUM5Vm5a3rB.jpg', NULL, NULL, NULL),
(58, 6, 'gambarkos/3NAnyIbdnlpvttZa2hsncfQGoKI62Ikytz3IFigE.jpg', NULL, NULL, NULL),
(59, 6, 'gambarkos/6RvE9f2MmkpQgcpthZVC17dJoVn5hmLbMvnlaHgS.jpg', NULL, NULL, NULL),
(60, 6, 'gambarkos/REzI6SB5FKVjkfZM1pbJU0SaYTpEb7Pf40MLUWRV.jpg', NULL, NULL, NULL),
(61, 6, 'gambarkos/hKcV7HveAQMsUIiMufCd8uETXWsnHjJp7dXtTXaW.jpg', NULL, NULL, NULL),
(62, 7, 'gambarkos/UibHPAJygDR27Pm7NTQHOB1UYUwTOc9OCjLS3r2I.jpg', NULL, NULL, NULL),
(63, 7, 'gambarkos/le0cRib6vHLy7s21Re0OiyNzo0rhJwezP6ZZu9qQ.jpg', NULL, NULL, NULL),
(64, 7, 'gambarkos/RYAtn7FXZlyxfCYMjdYtVIsq5tfRmbyvND0d7DgD.jpg', NULL, NULL, NULL),
(65, 7, 'gambarkos/7dDZUnCGqB7mXVLgZmUK68QKDZxVrOTfUvJaSvXp.jpg', NULL, NULL, NULL),
(66, 7, 'gambarkos/XF5mVYl6EFGUsVY3iaVqvqNEPokyCfl1263zZBEa.jpg', NULL, NULL, NULL),
(67, 7, 'gambarkos/wkeIWnr7MXiEcsGgjn0SHNQrI0n42nGDfqd4SUgv.jpg', NULL, NULL, NULL),
(68, 8, 'gambarkos/zIBRM92uSN7fJ1qMwyCItyd00Ct9Wht3p5kMvHvK.jpg', NULL, NULL, NULL),
(69, 8, 'gambarkos/zIBp3qbcInl6c98yzYCDzT1W34LRg1Q274Xrw6pn.jpg', NULL, NULL, NULL),
(70, 8, 'gambarkos/GqRfhS0JmE2FRx3g6H2zHI9tuDCoM3kzFD2mXBIz.jpg', NULL, NULL, NULL),
(71, 8, 'gambarkos/mEMK2Fty5vP20IiEYnnPyWvQlNtV82ZmsvdkFJNV.jpg', NULL, NULL, NULL),
(72, 8, 'gambarkos/I3wlM7vNFh3IX9s1CWLyMOYMBGJyOdHTr7im3KFr.jpg', NULL, NULL, NULL),
(73, 8, 'gambarkos/HqcCsgU7M5Qgwdf2i8HoSONLVGH13zGbfO1A4sD3.jpg', NULL, NULL, NULL),
(74, 9, 'gambarkos/MNHgqAgcvFbUiMtc2GmgLxUWSTIlBTn57YUVbUpM.jpg', NULL, NULL, NULL),
(75, 9, 'gambarkos/esblSIeEwZvKuXY0xpcPUfw5qyvYWAgMwhZYk4kh.jpg', NULL, NULL, NULL),
(76, 9, 'gambarkos/laHTkNHZVfHsLpE7gJhAJf3PchjfrE1l7seOPLYr.jpg', NULL, NULL, NULL),
(77, 9, 'gambarkos/VskyrpnNrkJVTZFX1DsMcw9XQRq0YpKH3ExYlRLj.jpg', NULL, NULL, NULL),
(78, 9, 'gambarkos/QM46r5EdISIrpXfPbqEeQ4gaQ7kya5mt8j5ovhNq.jpg', NULL, NULL, NULL),
(79, 9, 'gambarkos/K7ZLcr6nIfvXGL5wNmeUbrgFobKFvfz6ahdbZD8y.jpg', NULL, NULL, NULL),
(80, 10, 'gambarkos/6V4GUhyFa6meqLP5Si1oIb2osx0LaguQ4LtUK9ta.jpg', NULL, NULL, NULL),
(81, 10, 'gambarkos/Un3p6qVHUpBkOiUi51wp2UZpzuEj0a0ChBi2fYyU.jpg', NULL, NULL, NULL),
(82, 10, 'gambarkos/q07YRl4FEycALhScv5zfSULGFRD6o8zB25jTKTuP.jpg', NULL, NULL, NULL),
(83, 10, 'gambarkos/U20yvNfxPLi4jDJQXSAYY4Rhm1N8CsoKis3997wV.jpg', NULL, NULL, NULL),
(84, 10, 'gambarkos/GzlayXEdjkFU2gr4rm2GXkGXHC3RG3Xj0Cf7Y7p0.jpg', NULL, NULL, NULL),
(85, 10, 'gambarkos/q8fvgnjSOwPuxwawfH9oSHYX6uXQwtmwM7DhTpYN.jpg', NULL, NULL, NULL),
(86, 11, 'gambarkos/nIqydPJtEetark4WkTbJjFFjbK3SmFdxdvOCetCV.jpg', NULL, NULL, NULL),
(87, 11, 'gambarkos/sqCNVkhFliIiGPkmNfayggH7alBSeqZB4KJFe8h4.jpg', NULL, NULL, NULL),
(88, 11, 'gambarkos/rmEu8dh0kKpp0PTxl6taxBi209zztmDcfpks6Me1.jpg', NULL, NULL, NULL),
(89, 11, 'gambarkos/MrTvN7csW1pdRbgkYQNt039FKGBdgoiMrnhIzNNC.jpg', NULL, NULL, NULL),
(90, 11, 'gambarkos/9A7RL8mL7gpIDeVyPTBtjashe62Mru31KS6wQekL.jpg', NULL, NULL, NULL),
(91, 11, 'gambarkos/0cfkh3Ekm3vqqIyK4hOCLxyTppEjZPBaenxV82k9.jpg', NULL, NULL, NULL),
(92, 12, 'gambarkos/1QEqinnYdZUVKWld9oH4XfeF15Bcggdg82v3Px6Z.jpg', NULL, NULL, NULL),
(93, 12, 'gambarkos/NpWHFx9eGp5lBGergLuX44VmVLUsB92W3YBvDyuD.jpg', NULL, NULL, NULL),
(94, 12, 'gambarkos/tvhtfJhH21nU4dJsNxSXMk52Gnzm5zHCjsx5bWn9.jpg', NULL, NULL, NULL),
(95, 12, 'gambarkos/GlzRa6pfwGgHOShDyPb5odtAYACPZcoUjgs71IOH.jpg', NULL, NULL, NULL),
(96, 12, 'gambarkos/YucEGiMHAMr1GvD65uTEhLgxSWdkrqogtHWUgkU6.jpg', NULL, NULL, NULL),
(97, 13, 'gambarkos/lYFiKBpoaBGhyCBZNTXDoAQHhbJ448PjBXADQi9l.jpg', NULL, NULL, NULL),
(98, 13, 'gambarkos/TrTXCQFwq3CZvS2EU6j7E8GH8i6f1CGpus0oHmjB.jpg', NULL, NULL, NULL),
(99, 13, 'gambarkos/bdo6jviF82DL1LUPhcuqe3sFuyYJHeIIt52E9Ode.jpg', NULL, NULL, NULL),
(100, 13, 'gambarkos/On6aMjJ11DSVNJpASOpm5GO6VhUR1Rexk0EOvEeo.jpg', NULL, NULL, NULL),
(101, 13, 'gambarkos/DACl4dVeqr1Gj7AvsX3jVQrHq6a0acDZcNeAl5Vd.jpg', NULL, NULL, NULL),
(102, 13, 'gambarkos/r8NrmU5ui0QbC7dASaH4efGYl79HId3Vc6pCv4d2.jpg', NULL, NULL, NULL),
(103, 14, 'gambarkos/G4ccYOJOwhJu950Tcn1z8y5rORWoHTaqL8ieqEnX.jpg', NULL, NULL, NULL),
(104, 14, 'gambarkos/VGI6WdlqRbIGFbeVWfeFatJkfM8mWP4DDepsBEwX.jpg', NULL, NULL, NULL),
(105, 14, 'gambarkos/WNPJkNRjeLFqeWYxwSNtZvrIdYAXsv614gEZI4ev.jpg', NULL, NULL, NULL),
(106, 14, 'gambarkos/ufYIrBaQagR3sKRpbasXoLErlKWoeo8KeqguVyMM.jpg', NULL, NULL, NULL),
(107, 14, 'gambarkos/CVbg0mMQ4QZdZHzLOqLfMVtLbJ9vN8mMela2aDgF.jpg', NULL, NULL, NULL),
(108, 14, 'gambarkos/jV2QWteWsktEwxl4ciNU17C93jnqTNALiGRraRCM.jpg', NULL, NULL, NULL),
(109, 15, 'gambarkos/b9TRXW4J5kXYhvSClzG4Bg0HrBgIxcrV0S7I4Gq1.jpg', NULL, NULL, NULL),
(110, 15, 'gambarkos/h9mVzNuwZ3SOrnMPNCI1RKuhN55VAfnSsB8G6U8s.jpg', NULL, NULL, NULL),
(111, 15, 'gambarkos/VsGIrDJqGK9Ib3WuVk0MAX8u9eB3cfbC1LPf8X6T.jpg', NULL, NULL, NULL),
(112, 15, 'gambarkos/p5eLXnY1c7EH74mDVa8AZdTJE1TaQXJsd4GIDXif.jpg', NULL, NULL, NULL),
(113, 15, 'gambarkos/lVDRagI8w77XurogDJJkmY6bCk1MX2AMLf4cgC0U.jpg', NULL, NULL, NULL),
(114, 15, 'gambarkos/R1kgJWAVWutq7yeeMW33gxRwyc1rwejhHMdd2wey.jpg', NULL, NULL, NULL),
(115, 16, 'gambarkos/bxnTdkTfPoxw8waLD7fL5x6CmpLAE32sohUKLoyI.jpg', NULL, NULL, NULL),
(116, 16, 'gambarkos/DeWGamOfBMYUTBGCUiUFFLnL4LKNJkPNyBAZWdhE.jpg', NULL, NULL, NULL),
(117, 16, 'gambarkos/mGmaLusUXIqPojQ1OlvzyiBigaDIuSKzb6Y5vFnL.jpg', NULL, NULL, NULL),
(118, 16, 'gambarkos/jq8JcPjeRnJZkHyagvVyiyQfH74mOhft9UHhXsiw.jpg', NULL, NULL, NULL),
(119, 16, 'gambarkos/7ZsnDOlQ1JHhRmG6g3BhNFqvIzEOmE5GJBJFD0pv.jpg', NULL, NULL, NULL),
(120, 16, 'gambarkos/MgF1CFPQqftggBOdpddpekcUni13XanXuxtPGoNT.jpg', NULL, NULL, NULL),
(121, 17, 'gambarkos/NI8xl93RrGkxD4O0vlREWrVlRRMwEXd7nmXwu2D3.jpg', NULL, NULL, NULL),
(122, 17, 'gambarkos/yKQ8vnnkMXzMnEefaLckf56B7qtkWiHdJAx6B1EB.jpg', NULL, NULL, NULL),
(123, 17, 'gambarkos/H2koRRq8rLKHjWxn5oSellM5LpyawMQtOD4f1aeh.jpg', NULL, NULL, NULL),
(124, 17, 'gambarkos/g9JKvLfaB3fjFynGRdeAVSaaSiIykCtK9phO1dsl.jpg', NULL, NULL, NULL),
(125, 17, 'gambarkos/gybtTJkOcz1Ja7Uk1AFm2oJ9xb82wf4yQZqQtCRd.jpg', NULL, NULL, NULL),
(126, 17, 'gambarkos/4iTzEBWeSRp9BC1R2c2ij0dhz9qVM7lxAMzWVICj.jpg', NULL, NULL, NULL),
(127, 17, 'gambarkos/QwLGDXH1CE08wNT70i3EZ1XrQVW6XpBf9Cs4s2bl.jpg', NULL, NULL, NULL),
(128, 18, 'gambarkos/qwj8lpv0rzdwSCEjmfkwyJSC08xI7eqtlYHJjiVO.jpg', NULL, NULL, NULL),
(129, 18, 'gambarkos/Hb6sm8pSpEaccHMPtHbiajk8TDvt9tkwgIjMF8cH.jpg', NULL, NULL, NULL),
(130, 18, 'gambarkos/0HkxGBsVHP8X7bE7rniUnPhIvRYGOYCZ1HxFcHy2.jpg', NULL, NULL, NULL),
(131, 18, 'gambarkos/dpqM9MzXNBqanN1frmpI6J9hSJ8Ee0ANZnmil8IJ.jpg', NULL, NULL, NULL),
(132, 18, 'gambarkos/cpXt8UpfRVfCQj14aj7fE54DxXArqbR8I3psDy09.jpg', NULL, NULL, NULL),
(133, 18, 'gambarkos/7OFoyuzfjjewksg9TwW3glRSdDWShs3WmA3v9Pf8.jpg', NULL, NULL, NULL),
(134, 18, 'gambarkos/QhDj8dEvOeM8Rr33ghepnMQWb6IKgSdMoae5MDXp.jpg', NULL, NULL, NULL),
(135, 19, 'gambarkos/cb24rVKv2YaL4O11QcvKP8TQS5vNwnAJWBSShfNd.jpg', NULL, NULL, NULL),
(136, 19, 'gambarkos/e0hFiBalCGcMlikAd2OBTwRd2HGBWAWkwosGsmh0.jpg', NULL, NULL, NULL),
(137, 19, 'gambarkos/FvedhpWmuEaGVbNgjLW0nDnaW3h9kAs2nRrA7PPn.jpg', NULL, NULL, NULL),
(138, 19, 'gambarkos/9o03NIK6ShFxH79Jkh7IWAc5rFbOYnUsWNUpeeVb.jpg', NULL, NULL, NULL),
(139, 19, 'gambarkos/4seebIp04luo0mURaqrZR5KeILFmt3oqRQ6M97S1.jpg', NULL, NULL, NULL),
(140, 19, 'gambarkos/egK5Lf2vxITKxu8qYyfGjMlxuIV6tAsQUPtGJqgj.jpg', NULL, NULL, NULL),
(141, 19, 'gambarkos/USzF2VlKBd3YR0klT73dcIQ3keArd9SwuSjRlkI2.jpg', NULL, NULL, NULL),
(142, 20, 'gambarkos/U3mjFtd4qBJL9jRFrV2waUrBcdQkRFo00E7Dcd6b.jpg', NULL, NULL, NULL),
(143, 20, 'gambarkos/sVt0bWW6PGmBMCz3DxdBMKDvv6vJeEF0TyBv6f5Z.jpg', NULL, NULL, NULL),
(144, 20, 'gambarkos/GCXvBc9xOL4gL8AD0G5Z2GqhlZ0rnhxzToJsaUEJ.jpg', NULL, NULL, NULL),
(145, 20, 'gambarkos/OwkybnSF5CCgO27UETnMaUaXKQsemUHtkirfaf3Y.jpg', NULL, NULL, NULL),
(146, 20, 'gambarkos/wrirc3ra0KEHxH1P203OQwclTCAdg9FeLobp5ZoO.jpg', NULL, NULL, NULL),
(147, 20, 'gambarkos/Nla0VrpKRZYm0w3SHYFiznxOaA0XHhHMTfixlZiA.jpg', NULL, NULL, NULL),
(148, 20, 'gambarkos/blz6AmWujFt76bjVXStVpZRyB5s1I6cYO8En2Hco.jpg', NULL, NULL, NULL),
(149, 21, 'gambarkos/9HWTu9OQy7e0Br068djrLKkcsMCyLTkpUmHnP8yt.jpg', '2022-11-09 15:53:44', NULL, '2022-11-09 15:53:44'),
(150, 21, 'gambarkos/5RwPRmt8Me2Mi0wKtOau0HMzz2ox51GKHehSmhk2.jpg', '2022-11-09 15:53:44', NULL, '2022-11-09 15:53:44'),
(151, 21, 'gambarkos/dcDtaYlhnhtCs4A3UJIUkRt3NwV7mPQ75wWszXd2.jpg', '2022-11-09 15:53:44', NULL, '2022-11-09 15:53:44'),
(152, 21, 'gambarkos/emN73tl6C5RhJMOcs6ciywU2K6HZ6T8WpYSc9asZ.jpg', '2022-11-09 15:53:44', NULL, '2022-11-09 15:53:44'),
(153, 21, 'gambarkos/vTeTfjlUa7Dez3gcsmdd9Qc17tJFWFE3E7Ia6erk.jpg', '2022-11-09 15:53:44', NULL, '2022-11-09 15:53:44'),
(154, 21, 'gambarkos/YP3t3PffJ3B4gzeUla3zut7emWFgCCaX7RjKncOH.jpg', '2022-11-09 15:53:44', NULL, '2022-11-09 15:53:44'),
(155, 21, 'gambarkos/DFlzlenaYsRaB9F1uVlKvkIBPejliJPlGBWg4ALi.jpg', NULL, NULL, NULL),
(156, 21, 'gambarkos/9O4HWySjWMX4CQgCcLPJc5aiG5xTOPQ7R25jp1ug.jpg', NULL, NULL, NULL),
(157, 21, 'gambarkos/sZpn3tBMDmif9EL3QEuirVuQuDY4YPooh91NFLjM.jpg', NULL, NULL, NULL),
(158, 21, 'gambarkos/3asCTZHYhIkBfuCbukWDRq52uUUE62iJcIMwntSW.jpg', NULL, NULL, NULL),
(159, 21, 'gambarkos/UyJU5C8Cq2g5sNLMQQiWL1iwyvRwdUtNJLj8CCYA.jpg', NULL, NULL, NULL),
(160, 22, 'gambarkos/SE3kX2XbuzA20GQfbyv9SvtUfBaUpPchEkHxmzyC.jpg', NULL, NULL, NULL),
(161, 22, 'gambarkos/5XuqDSUKcfKQqvCNbT42EEt2bWF9QBFZDULbqiYN.jpg', NULL, NULL, NULL),
(162, 22, 'gambarkos/bv1SNlY0CUWYaCFFRIu49poH72C2tBKcAX4o2US6.jpg', NULL, NULL, NULL),
(163, 22, 'gambarkos/HnNxSVf7AkaBHoTPzsk12tmtzsAVG5h6OHfvAUw8.jpg', NULL, NULL, NULL),
(164, 22, 'gambarkos/IxrKtFzQ2XC0Lvc9qe1IsrSMJcQlRC3wfieLNjBi.jpg', NULL, NULL, NULL),
(165, 23, 'gambarkos/yjnvXGyPybPYd4MMGFKObXL5pA0MpRGSKTBj7PCc.jpg', NULL, NULL, NULL),
(166, 23, 'gambarkos/bKIyQThlhZL5HjtG7vlLskmZvhpnzhYA0g7HYK0F.jpg', NULL, NULL, NULL),
(167, 23, 'gambarkos/2J4IwS4M95KKbNnEXtn56jgSwZr6WzVRXGhbGJsY.jpg', NULL, NULL, NULL),
(168, 23, 'gambarkos/JLmT7pcZoKzQQCM9hOh4tSb7taofelyiZegrAXCL.jpg', NULL, NULL, NULL),
(169, 23, 'gambarkos/dboH07wTYhhvAFyOl0UUAuzzgJLKSgSNtj60Jfyr.jpg', NULL, NULL, NULL),
(170, 24, 'gambarkos/hDAqiUfgEjyibJmtTuBWpEUNYQE7uAEFWH3ONXWx.jpg', NULL, NULL, NULL),
(171, 24, 'gambarkos/HX6UixCjgLJa6qYvtYdMNElCyMYm9GJ9vRKSzcSH.jpg', NULL, NULL, NULL),
(172, 24, 'gambarkos/PFJ56y3DbzTJJZkkPjH4F3ghMQ25UnQgaQVzCuG9.jpg', NULL, NULL, NULL),
(173, 24, 'gambarkos/sUADQCD6pQiF1ngBVB4v9oxNrk4ChtrCrpqMOMxu.jpg', NULL, NULL, NULL),
(174, 24, 'gambarkos/voSuIzaJmPdynsxeWUJlsYtI26NT0GuuSNJ1RGO0.jpg', NULL, NULL, NULL),
(175, 25, 'gambarkos/AUbRmbaKurrgrDLeVk1zqDSjdVHMipvyBcPA5XI2.jpg', NULL, NULL, NULL),
(176, 25, 'gambarkos/UyIVqZVAmtPXYiKMoXBgtJyMr3xUoIvs3AEQHgz7.jpg', NULL, NULL, NULL),
(177, 25, 'gambarkos/ccjPJ3vvC8BW5DBQoAzWGuQ6DH8ehBgeckMPkL4n.jpg', NULL, NULL, NULL),
(178, 25, 'gambarkos/A91I2e25yWphgTJixydPdzPytba1xerfiUNXN9tm.jpg', NULL, NULL, NULL),
(179, 25, 'gambarkos/j740C75smpCf2dML2vDYNGUSAi9FrLVZFdZDpTh7.jpg', NULL, NULL, NULL),
(180, 26, 'gambarkos/RbGxGKCWFokUfP0GoQyHcCNwxvGJXnsTtjFLZXmK.jpg', '2022-11-09 16:17:25', NULL, '2022-11-09 16:17:25'),
(181, 26, 'gambarkos/KxTdBAThYpU4qhJpO3h5ad47qxaLTYysQtDSGjAP.jpg', '2022-11-09 16:17:25', NULL, '2022-11-09 16:17:25'),
(182, 26, 'gambarkos/WRQwBm5xjnTl2LZRAcnE2YM8Glg65Zo59O2qhtPT.jpg', '2022-11-09 16:17:25', NULL, '2022-11-09 16:17:25'),
(183, 26, 'gambarkos/Rcq5nHC6RvZ8ReCswQV9S1nKgSlHyc9iEhzTkPOD.jpg', '2022-11-09 16:17:25', NULL, '2022-11-09 16:17:25'),
(184, 26, 'gambarkos/RYeozTKYOK5wMpx9ZVDsNGmpOBO0UbmUCMhvtcpu.jpg', '2022-11-09 16:17:25', NULL, '2022-11-09 16:17:25'),
(185, 27, 'gambarkos/bRzAMx0NGjvw1S8e9gqqUgkLvptJ4ngr4hSwlbdk.jpg', '2022-11-09 16:06:44', NULL, '2022-11-09 16:06:44'),
(186, 27, 'gambarkos/XxGjc47dYEHgWFCPYcvxNm5N3lxcK2K4PofXHqcn.jpg', '2022-11-09 16:06:44', NULL, '2022-11-09 16:06:44'),
(187, 27, 'gambarkos/1NDlWCtTKPwyIungdtSAYFxqREIIiz6h1cHFVmsj.jpg', '2022-11-09 16:06:44', NULL, '2022-11-09 16:06:44'),
(188, 27, 'gambarkos/AHe2dXQis13dusqfCGvmCGFxE5u8072H89Ja3Ggk.jpg', '2022-11-09 16:06:44', NULL, '2022-11-09 16:06:44'),
(189, 27, 'gambarkos/9YyIOl2Z5I3znRKpMlugM1KAB3wa4MoqkSv5tLcM.jpg', '2022-11-09 16:06:44', NULL, '2022-11-09 16:06:44'),
(190, 28, 'gambarkos/Q8iDVwdd5VrPndjvwJ9lugfEVUw7LeUZZXDd6k1v.jpg', '2022-11-09 16:06:13', NULL, '2022-11-09 16:06:13'),
(191, 28, 'gambarkos/PtrMf1IiprF4NvNsSi9M4f6OZ5FIVwC4VOXXHYX3.jpg', '2022-11-09 16:06:13', NULL, '2022-11-09 16:06:13'),
(192, 28, 'gambarkos/MoH8zbIsrYAK0POZAgbFpgfKmFNSclPqbxI787mq.jpg', '2022-11-09 16:06:13', NULL, '2022-11-09 16:06:13'),
(193, 28, 'gambarkos/lfxUCEtZ30dOVOuWAcYFCB06gUyf473B5faFLuEw.jpg', '2022-11-09 16:06:13', NULL, '2022-11-09 16:06:13'),
(194, 28, 'gambarkos/UK8pbQVg8W6Zrl3evM7sttGpynJCKp2AIDvXBl6x.jpg', '2022-11-09 16:06:13', NULL, '2022-11-09 16:06:13'),
(195, 29, 'gambarkos/JTaG8008iMnWibywWlcK3gDhr9QLiDNVPS28pEnK.jpg', '2022-11-09 16:02:53', NULL, '2022-11-09 16:02:53'),
(196, 29, 'gambarkos/laeFVhAg1Pk8hFRcVNUTBAonnQWhSEeY2tWejf1L.jpg', '2022-11-09 16:02:53', NULL, '2022-11-09 16:02:53'),
(197, 29, 'gambarkos/3OOVw6s5dldsdQgNovbczvgrv0FPOFWYvmridCSk.jpg', '2022-11-09 16:02:53', NULL, '2022-11-09 16:02:53'),
(198, 29, 'gambarkos/ayqkd6igRarFk6qrgktgJErf7tJO9F5dUHUu90pF.jpg', '2022-11-09 16:02:53', NULL, '2022-11-09 16:02:53'),
(199, 29, 'gambarkos/4ufBFnyMYnJ79Mibmk7yabWO4q5VDRRwDLF7YsQf.jpg', '2022-11-09 16:02:53', NULL, '2022-11-09 16:02:53'),
(200, 29, 'gambarkos/4XZYfKXbqQVxkEYIZaLaC3IoIR5yEiXzhoaN7YS1.jpg', '2022-11-09 16:05:30', NULL, '2022-11-09 16:05:30'),
(201, 29, 'gambarkos/A19YZTPXZ0jB0lMZwILG0UhPtt50OMkkO7mccS6c.jpg', '2022-11-09 16:05:30', NULL, '2022-11-09 16:05:30'),
(202, 29, 'gambarkos/XHYgm6kJaMinpg4hZMRmAFqZ48hXKPNrA6dnm7r0.jpg', '2022-11-09 16:05:30', NULL, '2022-11-09 16:05:30'),
(203, 29, 'gambarkos/Yrjn2NfWxrTj1mWlyiTu1R8Qtapv0McESH1te6wd.jpg', '2022-11-09 16:05:30', NULL, '2022-11-09 16:05:30'),
(204, 29, 'gambarkos/aVfPrrycL1XTUgSzzO2WdrpmG0Qrknsu5prNSsWH.jpg', '2022-11-09 16:05:30', NULL, '2022-11-09 16:05:30'),
(205, 30, 'gambarkos/TYKamCPErVWbGbxScAhLcjbhb5NipHnBRZ7S0JFS.jpg', '2022-11-09 16:04:45', NULL, '2022-11-09 16:04:45'),
(206, 30, 'gambarkos/VyNSWQc91nuU2Mndm9uXvtOZ69G3YHem0aoTt2OM.jpg', '2022-11-09 16:04:45', NULL, '2022-11-09 16:04:45'),
(207, 30, 'gambarkos/nUf0NDcPgbwsmGg0JF4mhuXfJZSaBWObYWyQeFfM.jpg', '2022-11-09 16:04:45', NULL, '2022-11-09 16:04:45'),
(208, 30, 'gambarkos/j53qBRMp6wSm3u04WilZ1AKBfCHNldyjUgl8IN8K.jpg', '2022-11-09 16:04:45', NULL, '2022-11-09 16:04:45'),
(209, 30, 'gambarkos/8NM4x2FnJyGa5jM59WFEcB9DN5KMMb1VT3Eo8TVz.jpg', '2022-11-09 16:04:45', NULL, '2022-11-09 16:04:45'),
(210, 30, 'gambarkos/yQeQTemMzAMMhYxr38i8K0G5vAy9D4Tf4HCGRipu.jpg', '2022-11-09 16:04:51', NULL, '2022-11-09 16:04:51'),
(211, 30, 'gambarkos/hgr2mhwzmQfiULHYqV0T2CRlB8MJVkJs5VAB5iLy.jpg', '2022-11-09 16:04:51', NULL, '2022-11-09 16:04:51'),
(212, 30, 'gambarkos/CpLeCYhIotWlG0kosiC9cTFCUsaFp44dbhbeFUAG.jpg', '2022-11-09 16:04:51', NULL, '2022-11-09 16:04:51'),
(213, 30, 'gambarkos/r0RI2AF7yYYVr5z6Ah4Bw0ZfQ1Ed9732uqRRWlPq.jpg', '2022-11-09 16:04:51', NULL, '2022-11-09 16:04:51'),
(214, 30, 'gambarkos/r4w2A21M47RMJCJcCxaalQdFY4aTnTPSO3RdvtoA.jpg', '2022-11-09 16:04:51', NULL, '2022-11-09 16:04:51'),
(215, 30, 'gambarkos/CwnG0ojSYhERVKRHPWxJKslc4wdrDuWZ0H760iIk.jpg', '2022-11-09 16:04:51', NULL, '2022-11-09 16:04:51'),
(216, 30, 'gambarkos/dzl5iZgNgfY70CnvGUWJcRB9UYuGzbi3k48suoZX.jpg', NULL, NULL, NULL),
(217, 30, 'gambarkos/0leCA9s5JTeYxV5RIQUx2dRpRv4eSDWxW1s8ybJx.jpg', NULL, NULL, NULL),
(218, 30, 'gambarkos/nNj4LVIwjmWS2xUPUAlSSGs00JM1hkXO6SF0E9ag.jpg', NULL, NULL, NULL),
(219, 30, 'gambarkos/wU5KvWMWqREEgzvFPSDucD1JlWraaxeJwNzoQt9t.jpg', NULL, NULL, NULL),
(220, 30, 'gambarkos/jWecynCUDld2OmEMYDWKTAvJXC755A1pofALFI5a.jpg', NULL, NULL, NULL),
(221, 30, 'gambarkos/C9tUVO5kXXuuhxvdwuychyFKt9LsHvqU1q8UsH2N.jpg', NULL, NULL, NULL),
(222, 29, 'gambarkos/7dJ2YuXC6wREa8goCSP9fzayRGl37iL0hebfz5gz.jpg', NULL, NULL, NULL),
(223, 29, 'gambarkos/OkKaVKC6IHdgjUDffmJyk68eP9ln6kPTXjxapdjL.jpg', NULL, NULL, NULL),
(224, 29, 'gambarkos/qQClKHzzEpVJAt1aWqsntmEvsXZsRDFur48aGvqL.jpg', NULL, NULL, NULL),
(225, 29, 'gambarkos/7OCB8JszNUW2wyT9UhHNaa6NJCDhmjcDRJ6L705e.jpg', NULL, NULL, NULL),
(226, 29, 'gambarkos/zYxu3c9YSlqT1O0PdEASiBS54AociPgZJZc8yQm6.jpg', NULL, NULL, NULL),
(227, 29, 'gambarkos/g4H1ryhKXyzHdiFaQqhKIR0svggaMgeUXHDRW1DN.jpg', NULL, NULL, NULL),
(228, 28, 'gambarkos/RMxvSsBTkCpzmky9UWBzMhTfc1XzzObK7VjRXdNZ.jpg', NULL, NULL, NULL),
(229, 28, 'gambarkos/7WXCKVTGxTgE9WffjmcUgESzNURqh2X4jgXbjwDy.jpg', NULL, NULL, NULL),
(230, 28, 'gambarkos/NRTJbY9zP4U2S9af2ZO2Zdo9hMKs4qJhf1SBDE8y.jpg', NULL, NULL, NULL),
(231, 28, 'gambarkos/tXmpOheDHHGu70r16Ek82xt71UN4f0MlfX2xqaUj.jpg', NULL, NULL, NULL),
(232, 28, 'gambarkos/liVsZwC3roRRk3HiqDnZUkmaEfwiE14MDMtIIIWY.jpg', NULL, NULL, NULL),
(233, 28, 'gambarkos/DIyWKfKL4kfxyLStQovA0yiPg6z6MQWMgTSVebKu.jpg', NULL, NULL, NULL),
(234, 27, 'gambarkos/kKc5EtVCXAAd1csUGljGTNwxgNX9SvLAkBD2VXxy.jpg', NULL, NULL, NULL),
(235, 27, 'gambarkos/FpBFwsKYyqNiwVOY3TPtbBoNZOTooEisRyCDrxwn.jpg', NULL, NULL, NULL),
(236, 27, 'gambarkos/B4RBLofrVSm7egwOQT4Q6mfF43o9oZwkjbyDObP6.jpg', NULL, NULL, NULL),
(237, 27, 'gambarkos/eoKdBT0ci9e6QLaS2XvAn1jg2ZAp1Zg4X3xbzLdA.jpg', NULL, NULL, NULL),
(238, 27, 'gambarkos/6zVudBnj8U5hhyXnVbDLIjRcAzUQ7t27kMw35aua.jpg', NULL, NULL, NULL),
(239, 27, 'gambarkos/VL95gJklOPT3Eio8LG54lneQYTm4VjLS1e0YxNq1.jpg', NULL, NULL, NULL),
(240, 26, 'gambarkos/xqoDUBfXj4VNnkdhvXXgpcQo5balqdWqQOL1VDfJ.jpg', NULL, NULL, NULL),
(241, 26, 'gambarkos/qB8YGPgn4wZBDK1v8oMa2KMuWJIx0bvlpuIBm0kD.jpg', NULL, NULL, NULL),
(242, 26, 'gambarkos/jhOIxaBVUqSeQ7S0bJpNZal2bZfLUUZIJnHAUxUl.jpg', NULL, NULL, NULL),
(243, 26, 'gambarkos/xnXzDRRskuNUsunvbdGwkdJkOT2nSO8Lhr2eUYyY.jpg', NULL, NULL, NULL),
(244, 26, 'gambarkos/s4PNXV4QDybwuRIVlCB6VtFSochgaGBQQ3kPSxZq.jpg', NULL, NULL, NULL),
(245, 26, 'gambarkos/L8qJxq7sr2zzR10ciEpsdTirSBTgeoccM8aoRabp.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kamars`
--

CREATE TABLE `kamars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cabangs_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` double NOT NULL,
  `panjang` int(11) NOT NULL,
  `lebar` int(11) NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('sudah','belum') COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kamars`
--

INSERT INTO `kamars` (`id`, `cabangs_id`, `kode`, `harga`, `panjang`, `lebar`, `deskripsi`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'A1', 500000, 4, 3, '<p>Fasilitas :</p>\r\n<ol>\r\n<li>Kamar Mandi Dalam</li>\r\n<li>Kasur</li>\r\n<li>Kipas Angin&nbsp;</li>\r\n<li>Lemari</li>\r\n<li>Free Wifi</li>\r\n<li>Dapur Umum</li>\r\n</ol>', 'sudah', NULL, '2022-11-09 12:44:28', '2022-11-10 05:03:12'),
(2, 1, 'A2', 500000, 4, 3, '<p>Fasilitas :</p>\r\n<ol>\r\n<li>Kamar Mandi Dalam</li>\r\n<li>Kasur</li>\r\n<li>Kipas Angin&nbsp;</li>\r\n<li>Lemari</li>\r\n<li>Free Wifi</li>\r\n<li>Dapur Umum</li>\r\n</ol>', 'sudah', NULL, '2022-11-09 12:48:33', '2022-11-10 08:01:41'),
(3, 1, 'A3', 500000, 4, 3, '<p>Fasilitas :</p>\r\n<ol>\r\n<li>Kamar Mandi Dalam</li>\r\n<li>Kasur</li>\r\n<li>Kipas Angin&nbsp;</li>\r\n<li>Lemari</li>\r\n<li>Free Wifi</li>\r\n<li>Dapur Umum</li>\r\n</ol>', 'sudah', NULL, '2022-11-09 12:49:35', '2022-11-10 05:17:54'),
(4, 1, 'A4', 500000, 4, 3, '<p>Fasilitas :</p>\r\n<ol>\r\n<li>Kamar Mandi Dalam</li>\r\n<li>Kasur</li>\r\n<li>Kipas Angin&nbsp;</li>\r\n<li>Lemari</li>\r\n<li>Free Wifi</li>\r\n<li>Dapur Umum</li>\r\n</ol>', 'belum', NULL, '2022-11-09 12:50:30', '2022-11-09 12:50:30'),
(5, 1, 'A5', 500000, 4, 3, '<p>Fasilitas :</p>\r\n<ol>\r\n<li>Kamar Mandi Dalam</li>\r\n<li>Kasur</li>\r\n<li>Kipas Angin&nbsp;</li>\r\n<li>Lemari</li>\r\n<li>Free Wifi</li>\r\n<li>Dapur Umum</li>\r\n</ol>', 'belum', NULL, '2022-11-09 12:51:16', '2022-11-09 12:51:16'),
(6, 1, 'A6', 400000, 4, 3, '<p>Fasilitas :</p>\r\n<ol>\r\n<li>Kamar Mandi Luar</li>\r\n<li>Kasur</li>\r\n<li>Lemari</li>\r\n<li>Kipas Angin</li>\r\n<li>Dapur Umum</li>\r\n<li>Free Wifi</li>\r\n</ol>', 'belum', NULL, '2022-11-09 15:00:44', '2022-11-09 15:00:44'),
(7, 1, 'A7', 400000, 4, 3, '<p>Fasilitas :</p>\r\n<ol>\r\n<li>Kamar Mandi Luar</li>\r\n<li>Kasur</li>\r\n<li>Lemari</li>\r\n<li>Kipas Angin</li>\r\n<li>Dapur Umum</li>\r\n<li>Free Wifi</li>\r\n</ol>', 'belum', NULL, '2022-11-09 15:02:43', '2022-11-09 15:02:43'),
(8, 1, 'A8', 400000, 4, 3, '<p>Fasilitas :</p>\r\n<ol>\r\n<li>Kamar Mandi Luar</li>\r\n<li>Kasur</li>\r\n<li>Lemari</li>\r\n<li>Kipas Angin</li>\r\n<li>Dapur Umum</li>\r\n<li>Free Wifi</li>\r\n</ol>', 'belum', NULL, '2022-11-09 15:03:48', '2022-11-09 15:03:48'),
(9, 1, 'A9', 400000, 4, 3, '<p>Fasilitas :</p>\r\n<ol>\r\n<li>Kamar Mandi Luar</li>\r\n<li>Kasur</li>\r\n<li>Lemari</li>\r\n<li>Kipas Angin</li>\r\n<li>Dapur Umum</li>\r\n<li>Free Wifi</li>\r\n</ol>', 'belum', NULL, '2022-11-09 15:04:35', '2022-11-09 15:04:35'),
(10, 1, 'A10', 400000, 4, 3, '<p>Fasilitas :</p>\r\n<ol>\r\n<li>Kamar Mandi Luar</li>\r\n<li>Kasur</li>\r\n<li>Lemari</li>\r\n<li>Kipas Angin</li>\r\n<li>Dapur Umum</li>\r\n<li>Free Wifi</li>\r\n</ol>', 'belum', NULL, '2022-11-09 15:05:24', '2022-11-09 15:05:24'),
(11, 2, 'B1', 500000, 4, 3, '<p>Fasilitas :</p>\r\n<ol>\r\n<li>Kamar Mandi Dalam</li>\r\n<li>Kasur</li>\r\n<li>Lemari</li>\r\n<li>Kipas Angin</li>\r\n<li>Dapur Umum</li>\r\n<li>Free Wifi</li>\r\n</ol>', 'belum', NULL, '2022-11-09 15:07:49', '2022-11-09 15:07:49'),
(12, 2, 'B2', 500000, 4, 3, '<p>Fasilitas :</p>\r\n<ol>\r\n<li>Kamar Mandi Dalam</li>\r\n<li>Kasur</li>\r\n<li>Lemari</li>\r\n<li>Kipas Angin</li>\r\n<li>Dapur Umum</li>\r\n<li>Free Wifi</li>\r\n</ol>', 'belum', NULL, '2022-11-09 15:34:56', '2022-11-09 15:34:56'),
(13, 2, 'B3', 500000, 4, 3, '<p>Fasilitas :</p>\r\n<ol>\r\n<li>Kamar Mandi Dalam</li>\r\n<li>Kasur</li>\r\n<li>Lemari</li>\r\n<li>Kipas Angin</li>\r\n<li>Dapur Umum</li>\r\n<li>Free Wifi</li>\r\n</ol>', 'sudah', NULL, '2022-11-09 15:36:38', '2022-11-10 05:36:34'),
(14, 2, 'B4', 500000, 4, 3, '<p>Fasilitas :</p>\r\n<ol>\r\n<li>Kamar Mandi Dalam</li>\r\n<li>Kasur</li>\r\n<li>Lemari</li>\r\n<li>Kipas Angin</li>\r\n<li>Dapur Umum</li>\r\n<li>Free Wifi</li>\r\n</ol>', 'belum', NULL, '2022-11-09 15:37:47', '2022-11-09 15:37:47'),
(15, 2, 'B5', 500000, 4, 3, '<p>Fasilitas :</p>\r\n<ol>\r\n<li>Kamar Mandi Dalam</li>\r\n<li>Kasur</li>\r\n<li>Lemari</li>\r\n<li>Kipas Angin</li>\r\n<li>Dapur Umum</li>\r\n<li>Free Wifi</li>\r\n</ol>', 'sudah', NULL, '2022-11-09 15:42:46', '2022-11-10 05:47:25'),
(16, 2, 'B6', 400000, 4, 3, '<p>Fasilitas :</p>\r\n<ol>\r\n<li>Kamar Mandi Luar</li>\r\n<li>Kasur</li>\r\n<li>Lemari</li>\r\n<li>Kipas Angin</li>\r\n<li>Dapur Umum</li>\r\n<li>Free Wifi</li>\r\n</ol>', 'belum', NULL, '2022-11-09 15:44:30', '2022-11-09 15:44:30'),
(17, 2, 'B7', 400000, 4, 3, '<p>Fasilitas :</p>\r\n<ol>\r\n<li>Kamar Mandi Luar</li>\r\n<li>Kasur</li>\r\n<li>Lemari</li>\r\n<li>Kipas Angin</li>\r\n<li>Dapur Umum</li>\r\n<li>Free Wifi</li>\r\n</ol>', 'belum', NULL, '2022-11-09 15:46:02', '2022-11-09 15:46:02'),
(18, 2, 'B8', 400000, 4, 3, '<p>Fasilitas :</p>\r\n<ol>\r\n<li>Kamar Mandi Luar</li>\r\n<li>Kasur</li>\r\n<li>Lemari</li>\r\n<li>Kipas Angin</li>\r\n<li>Dapur Umum</li>\r\n<li>Free Wifi</li>\r\n</ol>', 'belum', NULL, '2022-11-09 15:47:24', '2022-11-09 15:47:24'),
(19, 2, 'B9', 400000, 4, 3, '<p>Fasilitas :</p>\r\n<ol>\r\n<li>Kamar Mandi Luar</li>\r\n<li>Kasur</li>\r\n<li>Lemari</li>\r\n<li>Kipas Angin</li>\r\n<li>Dapur Umum</li>\r\n<li>Free Wifi</li>\r\n</ol>', 'belum', NULL, '2022-11-09 15:49:11', '2022-11-09 15:49:11'),
(20, 2, 'B10', 400000, 4, 3, '<p>Fasilitas :</p>\r\n<ol>\r\n<li>Kamar Mandi Luar</li>\r\n<li>Kasur</li>\r\n<li>Lemari</li>\r\n<li>Kipas Angin</li>\r\n<li>Dapur Umum</li>\r\n<li>Free Wifi</li>\r\n</ol>', 'belum', NULL, '2022-11-09 15:50:15', '2022-11-09 15:50:15'),
(21, 3, 'C1', 450000, 4, 3, '<p>Fasilitas :</p>\r\n<ol>\r\n<li>Kamar Mandi Dalam</li>\r\n<li>Kasur</li>\r\n<li>Lemari</li>\r\n<li>Kipas Angin</li>\r\n<li>Free Wifi</li>\r\n</ol>', 'belum', NULL, '2022-11-09 15:52:00', '2022-11-09 15:53:44'),
(22, 3, 'C2', 450000, 4, 3, '<p>Fasilitas :</p>\r\n<ol>\r\n<li>Kamar Mandi Dalam</li>\r\n<li>Kasur</li>\r\n<li>Lemari</li>\r\n<li>Kipas Angin</li>\r\n<li>Free Wifi</li>\r\n</ol>', 'belum', NULL, '2022-11-09 15:54:48', '2022-11-09 15:54:48'),
(23, 3, 'C3', 450000, 4, 3, '<p>Fasilitas :</p>\r\n<ol>\r\n<li>Kamar Mandi Dalam</li>\r\n<li>Kasur</li>\r\n<li>Lemari</li>\r\n<li>Kipas Angin</li>\r\n<li>Free Wifi</li>\r\n</ol>', 'sudah', NULL, '2022-11-09 15:55:39', '2022-11-10 05:24:19'),
(24, 3, 'C4', 450000, 4, 3, '<p>Fasilitas :</p>\r\n<ol>\r\n<li>Kamar Mandi Dalam</li>\r\n<li>Kasur</li>\r\n<li>Lemari</li>\r\n<li>Kipas Angin</li>\r\n<li>Free Wifi</li>\r\n</ol>', 'belum', NULL, '2022-11-09 15:56:27', '2022-11-09 15:56:27'),
(25, 3, 'C5', 450000, 4, 3, '<p>Fasilitas :</p>\r\n<ol>\r\n<li>Kamar Mandi Dalam</li>\r\n<li>Kasur</li>\r\n<li>Lemari</li>\r\n<li>Kipas Angin</li>\r\n<li>Free Wifi</li>\r\n</ol>', 'belum', NULL, '2022-11-09 15:57:12', '2022-11-09 15:57:12'),
(26, 3, 'C6', 350000, 3, 3, '<p>Fasilitas :</p>\r\n<ol>\r\n<li>Kamar Mandi Luar</li>\r\n<li>Kasur</li>\r\n<li>Lemari</li>\r\n<li>Kipas Angin</li>\r\n<li>Free Wifi</li>\r\n</ol>', 'belum', NULL, '2022-11-09 15:58:21', '2022-11-09 15:58:21'),
(27, 3, 'C7', 350000, 4, 3, '<p>Fasilitas :</p>\r\n<ol>\r\n<li>Kamar Mandi Luar</li>\r\n<li>Kasur</li>\r\n<li>Lemari</li>\r\n<li>Kipas Angin</li>\r\n<li>Free Wifi</li>\r\n</ol>', 'belum', NULL, '2022-11-09 15:59:20', '2022-11-09 15:59:20'),
(28, 3, 'C8', 350000, 3, 3, '<p>Fasilitas :</p>\r\n<ol>\r\n<li>Kamar Mandi Luar</li>\r\n<li>Kasur</li>\r\n<li>Lemari</li>\r\n<li>Kipas Angin</li>\r\n<li>Free Wifi</li>\r\n</ol>', 'belum', NULL, '2022-11-09 16:01:03', '2022-11-09 16:01:03'),
(29, 3, 'C9', 350000, 3, 3, '<p>Fasilitas :</p>\r\n<ol>\r\n<li>Kamar Mandi Luar</li>\r\n<li>Kasur</li>\r\n<li>Lemari</li>\r\n<li>Kipas Angin</li>\r\n<li>Free Wifi</li>\r\n</ol>', 'belum', NULL, '2022-11-09 16:02:13', '2022-11-09 16:02:53'),
(30, 3, 'C10', 350000, 3, 3, '<p>Fasilitas :</p>\r\n<ol>\r\n<li>Kamar Mandi Luar</li>\r\n<li>Kasur</li>\r\n<li>Lemari</li>\r\n<li>Kipas Angin</li>\r\n<li>Free Wifi</li>\r\n</ol>', 'belum', NULL, '2022-11-09 16:03:52', '2022-11-09 16:04:45');

-- --------------------------------------------------------

--
-- Table structure for table `kontaks`
--

CREATE TABLE `kontaks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkmaps` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kontaks`
--

INSERT INTO `kontaks` (`id`, `email`, `nohp`, `linkmaps`, `created_at`, `updated_at`) VALUES
(1, 'andryhudarojat21@gmail.com', '082141998597', 'https://g.page/Kosbarokah?share', '2022-11-09 16:23:57', '2022-11-09 16:23:57');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_16_031956_create_notifications_table', 1),
(6, '2022_07_20_024737_create_cabangs_table', 1),
(7, '2022_07_20_024927_create_kamars_table', 1),
(8, '2022_07_20_025303_create_transaksis_table', 1),
(9, '2022_07_20_025558_create_notifikasis_table', 1),
(10, '2022_07_20_033000_add_foreign_keys_kamars', 1),
(11, '2022_07_20_033323_add_foreign_keys_transaksis', 1),
(12, '2022_07_20_033554_add_foreign_keys_notifikasis', 1),
(13, '2022_08_17_114227_create_gambarkos_table', 1),
(14, '2022_08_17_114908_add_foreign_keys_gambarkoss', 1),
(15, '2022_08_18_142327_create_banks_table', 1),
(16, '2022_08_21_230617_create_kontaks_table', 1),
(17, '2022_08_25_141758_add_foreign_keys_transaksi2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifikasis`
--

CREATE TABLE `notifikasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaksis_id` bigint(20) UNSIGNED DEFAULT NULL,
  `jatuh_tempo` date NOT NULL,
  `status` enum('dibaca','belum') COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksis`
--

CREATE TABLE `transaksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kamars_id` bigint(20) UNSIGNED DEFAULT NULL,
  `users_id` bigint(20) UNSIGNED DEFAULT NULL,
  `banks_id` bigint(20) UNSIGNED DEFAULT NULL,
  `noinvoice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `status` enum('disetujui','tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `buktitf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_sewa` date NOT NULL,
  `lama_sewa` int(11) NOT NULL,
  `jatuh_tempo` date NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksis`
--

INSERT INTO `transaksis` (`id`, `kamars_id`, `users_id`, `banks_id`, `noinvoice`, `tanggal`, `status`, `harga`, `buktitf`, `tanggal_sewa`, `lama_sewa`, `jatuh_tempo`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 1, '2022111031', '2022-11-10', 'disetujui', 2000000, '20221110Tresya.jpg', '2022-11-01', 4, '2023-03-01', NULL, '2022-11-10 05:03:12', '2022-11-10 05:49:15'),
(2, 3, 4, 1, '2022111042', '2022-11-10', 'disetujui', 500000, '20221110kristiana.jpg', '2022-11-01', 1, '2022-12-01', NULL, '2022-11-10 05:17:54', '2022-11-10 05:49:38'),
(3, 23, 5, 1, '2022111053', '2022-11-10', 'disetujui', 450000, '20221110Rizki Mahardika Putra.jpg', '2022-11-25', 1, '2022-12-25', NULL, '2022-11-10 05:24:19', '2022-11-10 05:50:00'),
(4, 13, 6, 1, '2022111064', '2022-11-10', 'disetujui', 500000, '20221110Ayu Okta Fiya.jpg', '2022-11-30', 1, '2022-12-30', NULL, '2022-11-10 05:36:35', '2022-11-10 05:50:26'),
(5, 15, 7, 1, '2022111075', '2022-11-10', 'disetujui', 500000, '20221110yesi krismonika sari.jpg', '2022-12-01', 1, '2023-01-01', NULL, '2022-11-10 05:47:25', '2022-11-10 05:50:50'),
(6, 2, 8, 1, '2022111086', '2022-11-10', 'disetujui', 500000, '20221110Ledy Intan Liuni.jpg', '2022-11-23', 1, '2022-12-23', NULL, '2022-11-10 08:01:41', '2022-11-10 08:03:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('pemilik','penyewa') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `nohp`, `foto`, `ktp`, `alamat`, `jenis_kelamin`, `role`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Pemilik', 'pemilik@gmail.com', NULL, '$2y$10$5KIdDjowmv.aokT9CP2lt.BxUdwoJxzoCY1AoEXlA2mmvM4kZQ4L.', '088888888888', 'https://cdn.pixabay.com/photo/2016/08/31/11/55/icon-1633250_1280.png', 'https://i.pinimg.com/originals/a9/ce/61/a9ce611ce29b695ba60f2db9d6f2215b.jpg', 'Kabat', 'L', 'pemilik', NULL, NULL, NULL, NULL),
(2, 'Penyewa', 'penyewa@gmail.com', '2022-11-10 04:32:48', '$2y$10$HDaShQuxNlL5k9jG5EUY2.sO.pydUk5SE6tdd.T/WYHRDKxnJo7Ey', '099999999099', 'https://cdn.pixabay.com/photo/2016/08/31/11/55/icon-1633250_1280.png', 'https://i.pinimg.com/originals/a9/ce/61/a9ce611ce29b695ba60f2db9d6f2215b.jpg', 'Tegaldelimo', 'P', 'penyewa', NULL, NULL, NULL, '2022-11-10 04:32:48'),
(3, 'Tresya', 'aisiyahtresya852@gmail.com', '2022-11-10 05:01:01', '$2y$10$f.O8B7g6/hOWVGIfUnsEv./j9pPYxzn9uTSwG2R3e.ggSs.yUGXMG', '083851751436', NULL, 'Tresya.jpg', NULL, 'L', 'penyewa', NULL, NULL, '2022-11-10 04:57:29', '2022-11-10 05:01:01'),
(4, 'kristiana', 'kristianatia6@gmail.com', '2022-11-10 05:16:01', '$2y$10$RtQvSTkr3MtRdSQS/muHeOvhZOHT2TeeNqxwjOR5YQ2gEoyIAnzm2', '081315604131', NULL, 'kristiana.jpg', NULL, 'L', 'penyewa', NULL, NULL, '2022-11-10 05:15:07', '2022-11-10 05:16:01'),
(5, 'Rizki Mahardika Putra', 'rizkimahardikap51@gmai.com', '2022-11-10 05:22:43', '$2y$10$uhdXmvzBJgoCUE2gqDsEreTJLIU7nN/qRxR4xxRSeUthv97lG2ho6', '082266840464', NULL, 'Rizki Mahardika Putra.jpg', NULL, 'L', 'penyewa', NULL, NULL, '2022-11-10 05:22:07', '2022-11-10 05:22:43'),
(6, 'Ayu Okta Fiya', 'ayuoktafiya7@gmail.com', '2022-11-10 05:34:26', '$2y$10$T7s49zJhCANvVEpvZIPuMOOz42dFvDacmWALjlnNmG1UgAJ9ktZxi', '081259757872', NULL, 'Ayu Okta Fiya.jpg', NULL, 'L', 'penyewa', NULL, NULL, '2022-11-10 05:33:54', '2022-11-10 05:34:26'),
(7, 'yesi krismonika sari', 'yesikrismonika64@gmail.com', '2022-11-10 05:46:03', '$2y$10$J8m71uLPlMcJA5N60Y7YkOfwj510LtXq6mes0MrbfVrII6xuqHr6W', '082232115776', NULL, 'yesi krismonika sari.jpg', NULL, 'L', 'penyewa', NULL, NULL, '2022-11-10 05:45:36', '2022-11-10 05:46:03'),
(8, 'Ledy Intan Liuni', 'ledyintan2000@gmail.com', '2022-11-10 07:55:43', '$2y$10$o2yJ.BNzXSoNWuCYNa5WiOh4ZqilcTldwT/OHv77hTFDG1OUjLpMq', '082141998597', NULL, 'Ledy Intan Liuni.jpg', NULL, 'L', 'penyewa', NULL, NULL, '2022-11-10 07:54:57', '2022-11-10 07:55:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cabangs`
--
ALTER TABLE `cabangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gambarkos`
--
ALTER TABLE `gambarkos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kamars_id_fk5_idx` (`kamars_id`);

--
-- Indexes for table `kamars`
--
ALTER TABLE `kamars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cabangs_id_fk1_idx` (`cabangs_id`);

--
-- Indexes for table `kontaks`
--
ALTER TABLE `kontaks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `notifikasis`
--
ALTER TABLE `notifikasis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksis_id_fk4_idx` (`transaksis_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `transaksis_noinvoice_unique` (`noinvoice`),
  ADD KEY `kamars_id_fk2_idx` (`kamars_id`),
  ADD KEY `users_id_fk3_idx` (`users_id`),
  ADD KEY `users_id_fk6_idx` (`banks_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cabangs`
--
ALTER TABLE `cabangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gambarkos`
--
ALTER TABLE `gambarkos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- AUTO_INCREMENT for table `kamars`
--
ALTER TABLE `kamars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `kontaks`
--
ALTER TABLE `kontaks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `notifikasis`
--
ALTER TABLE `notifikasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gambarkos`
--
ALTER TABLE `gambarkos`
  ADD CONSTRAINT `kamars_id_fk5_idx` FOREIGN KEY (`kamars_id`) REFERENCES `kamars` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `kamars`
--
ALTER TABLE `kamars`
  ADD CONSTRAINT `cabangs_id_fk1_idx` FOREIGN KEY (`cabangs_id`) REFERENCES `cabangs` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `notifikasis`
--
ALTER TABLE `notifikasis`
  ADD CONSTRAINT `transaksis_id_fk4_idx` FOREIGN KEY (`transaksis_id`) REFERENCES `transaksis` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD CONSTRAINT `banks_id_fk6_idx` FOREIGN KEY (`banks_id`) REFERENCES `banks` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `kamars_id_fk2_idx` FOREIGN KEY (`kamars_id`) REFERENCES `kamars` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `users_id_fk3_idx` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
