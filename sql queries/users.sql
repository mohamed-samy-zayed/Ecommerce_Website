-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2024 at 08:56 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password_hash` varchar(255) DEFAULT NULL,
  `api_token` varchar(64) DEFAULT NULL,
  `reset_token` varchar(64) DEFAULT NULL,
  `reset_token_expires_at` datetime DEFAULT NULL,
  `profile_img_url` varchar(255) DEFAULT NULL,
  `verifyCode` int(6) DEFAULT NULL,
  `verified` varchar(1) DEFAULT 'N',
  `err_try` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password_hash`, `api_token`, `reset_token`, `reset_token_expires_at`, `profile_img_url`, `verifyCode`, `verified`, `err_try`) VALUES
(55, 'Mohamed Gamil', 'manar245963@gmail.com', '$2y$10$pkTO0k9gY1STxvguLbHPNeDeBhvTEzj9.tTB5uaarBaVoiq04jWcu', '6e283fc1d473ddcc081c25261d7cbee7cfafed7845d997d686a70692cee8f2d1', 'd6d120d6e53d9fcad990a0b9cd95376ee00cc321293d4f7ef561307280d5122b', NULL, 'http://localhost/all/project/ecommerce/static/profile/55/avatar.png', 0, 'Y', 0),
(77, 'toqa', 'hamza4927@gmail.com', '$2y$10$T8CEFOAqjNobYu4qdLcVZ.Cm5ZU8N2qc0EjFHUyJOI2E2oiPyVnci', NULL, NULL, NULL, 'http://localhost/all/project/ecommerce/static/profile/77/avatar.png', NULL, 'N', 0),
(78, 'karim maher', 'adham7462@gmail.com', '$2y$10$KToiA/0ezo55Ta8q1cJUrOHPxFz1ozXqgDsessQzw85VX.OhAgGMG', NULL, NULL, NULL, 'http://localhost/all/project/ecommerce/static/profile/78/avatar.png', NULL, 'N', 0),
(81, 'zakaria', 'zika8369@gmail.com', '$2y$10$YbduZs8oHzZYjnFovR6wqeASH1E1Chy5P2NxK7/sb5FF18K79s6IC', NULL, NULL, NULL, 'http://localhost/all/project/ecommerce/static/profile/81/avatar.png', NULL, 'N', 0),
(82, 'karim maher', 'karim4458@gmail.com', '$2y$10$4.93irtJ6jSdcnLQOCXZsOA7tTLK4Cmg.sJgDutB0rJoXsAoMRkCS', NULL, NULL, NULL, 'http://localhost/all/project/ecommerce/static/profile/82/avatar.png', NULL, 'Y', 0),
(87, 'admin', 'admin2@gmail.com', '$2y$10$XwL7ZTs7obtYTw7VbR81FeaZlAqjfH9TMkguoa6gBMOc0b8rUhTD6', NULL, NULL, NULL, 'http://localhost/all/project/ecommerce/static/profile/87/avatar.png', 810693, 'N', 0),
(89, 'mohamed alsaeed', 'mohamedalqemary@gmail.com', '$2y$10$iEc.tIsx2pxsV3sKSdBv4.eqBLb.PgGj3gum8nvrbDBRuBOlsMJWa', '1295376a6fbf45aa9b6313221b2cba64750c5b4894ab3cee549371369d2839da', NULL, NULL, NULL, 0, 'Y', 1),
(94, 'admin5', 'admin5@gmail.com', '$2y$10$3ql2XyWMStpolmhOZPvW8O.1TDNQvJs4HpcSnsQc.JB68kYeyCRbK', NULL, NULL, NULL, NULL, 109038, 'N', 0),
(95, 'adalertmin5', 'adalertmin5@gmail.com', '$2y$10$hYxzcUFxohEaPrhjOrEnzuLb6uaQtelTWUSHMzNqVO18itM6cRKui', NULL, NULL, NULL, NULL, 873330, 'N', 0),
(98, 'mohamed gamil', 'mmm845162@gmail.com', '$2y$10$Khtb/uVUAR6mHk/Cnt7HwOSj3ROQPPsBuaU95zlMs8xRxmKxKPM6W', 'd251065db1a500d211cf5b548e84acbfa9b59ed7716cb0c932086e40521b8bf0', '323a3e58a132e3a2880920224f87afd00727af27d3b2d15d262c8883517e1088', NULL, 'http://localhost/all/project/ecommerce/static/profile/98/avatar.png', 0, 'Y', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `reset_token_hash` (`reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
