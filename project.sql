-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2022 at 04:24 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `calculator_results`
--

CREATE TABLE `calculator_results` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `existingWatts` int(11) NOT NULL,
  `CurrentBulbSelect` varchar(255) NOT NULL,
  `ProposedValue` int(11) NOT NULL,
  `NewBulbSelect` varchar(255) NOT NULL,
  `TotalQuantity` int(11) NOT NULL,
  `ElectricityCost` int(11) NOT NULL,
  `HoursUsed` int(11) NOT NULL,
  `DaysUsed` int(11) NOT NULL,
  `PropCost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calculator_results`
--

INSERT INTO `calculator_results` (`id`, `user_id`, `existingWatts`, `CurrentBulbSelect`, `ProposedValue`, `NewBulbSelect`, `TotalQuantity`, `ElectricityCost`, `HoursUsed`, `DaysUsed`, `PropCost`) VALUES
(1, 78, 3, 'incandescent', 7, 'incandescent', 5, 8, 4, 7, 10);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `nameoftool` varchar(255) NOT NULL,
  `linktotool` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tool_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `text`, `nameoftool`, `linktotool`, `user_id`, `tool_id`) VALUES
(1, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(2, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(4, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(5, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(6, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(7, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(8, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(9, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(10, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(11, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(12, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(13, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(14, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(15, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(16, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(17, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(18, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(19, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(20, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(21, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(22, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(23, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(24, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(25, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(26, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(27, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(28, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(29, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(30, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(31, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(32, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(33, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(34, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(35, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(36, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(37, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(38, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(39, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(40, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(41, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(42, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(43, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(44, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(45, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(46, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(47, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(48, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(49, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(50, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(51, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(52, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(53, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(54, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(55, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(56, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(57, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(58, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(59, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(60, 'hey people I have found this tool', 'Look how amazing this tool is:', 'Smartphone', 'www.amazon.com', 3, 4),
(64, 'hey people', 'Look I have found this awesome tool: kjanvkjavkjanvk', 'Google Pixel 6', 'https://www.amazon.com/Google-Pixel-6a-Smartphone-Megapixel/dp/B0B3PSRHHN/ref=sr_1_3?keywords=smartphone&qid=1670675213&sprefix=smartphone%2Caps%2C268&sr=8-3', 3, 4),
(65, 'hey people', 'Look I have found this awesome tool: kjanvkjavkjanvk', 'Google Pixel 6', 'https://www.amazon.com/Google-Pixel-6a-Smartphone-Megapixel/dp/B0B3PSRHHN/ref=sr_1_3?keywords=smartphone&qid=1670675213&sprefix=smartphone%2Caps%2C268&sr=8-3', 3, 4),
(66, 'hey people', 'Look I have found this awesome tool: kjanvkjavkjanvk', 'Google Pixel 6', 'https://www.amazon.com/Google-Pixel-6a-Smartphone-Megapixel/dp/B0B3PSRHHN/ref=sr_1_3?keywords=smartphone&qid=1670675213&sprefix=smartphone%2Caps%2C268&sr=8-3', 3, 4),
(67, 'test 1', 'Look I have found this awesome tool: kjanvkjavkjanvk', 'Google Pixel 6', 'https://www.amazon.com/Google-Pixel-6a-Smartphone-Megapixel/dp/B0B3PSRHHN/ref=sr_1_3?keywords=smartphone&qid=1670675213&sprefix=smartphone%2Caps%2C268&sr=8-3', 3, 4),
(68, 'hey people', 'Look I have found this awesome tool: kjanvkjavkjanvk', 'Google Pixel 6', 'https://www.amazon.com/Google-Pixel-6a-Smartphone-Megapixel/dp/B0B3PSRHHN/ref=sr_1_3?keywords=smartphone&qid=1670675213&sprefix=smartphone%2Caps%2C268&sr=8-3', 3, 4),
(69, 'hey people', 'Look I have found this awesome tool: kjanvkjavkjanvk', 'Google Pixel 6', 'https://www.amazon.com/Google-Pixel-6a-Smartphone-Megapixel/dp/B0B3PSRHHN/ref=sr_1_3?keywords=smartphone&qid=1670675213&sprefix=smartphone%2Caps%2C268&sr=8-3', 3, 4),
(70, 'sdfghjk', 'erxtcyvubhijcytuvhib j', 'jbhvgycf', 'https://www.visible.com/shop/assets/images/shop/catalogue/iPhone_12_mini_PUR_1.jpg', 81, 4),
(71, 'sdfghjk', 'erxtcyvubhijcytuvhib j', 'jbhvgycf', 'https://www.visible.com/shop/assets/images/shop/catalogue/iPhone_12_mini_PUR_1.jpg', 81, 4);

-- --------------------------------------------------------

--
-- Table structure for table `questionforms`
--

CREATE TABLE `questionforms` (
  `id` int(11) NOT NULL,
  `energy_bill` double NOT NULL DEFAULT 0,
  `gas` varchar(255) NOT NULL DEFAULT '"off"',
  `electric` varchar(255) NOT NULL DEFAULT '"off"',
  `central_heating` varchar(255) NOT NULL DEFAULT '"off"',
  `members` int(11) NOT NULL DEFAULT 1,
  `windows` int(11) NOT NULL DEFAULT 1,
  `electronics` varchar(255) NOT NULL DEFAULT '0',
  `solar` varchar(255) NOT NULL DEFAULT '0',
  `additional` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questionforms`
--

INSERT INTO `questionforms` (`id`, `energy_bill`, `gas`, `electric`, `central_heating`, `members`, `windows`, `electronics`, `solar`, `additional`, `user_id`) VALUES
(1, 1, 'off', 'off', 'on', 1, 1, 'Standby', 'Yes', 'aaa', 78),
(2, 1, 'off', 'on', 'off', 1, 1, 'Switch Off', 'No', 'lll', 78),
(3, 3, 'off', 'off', 'on', 1, 1, 'Switch Off', 'No', '', 78),
(4, 2, 'off', 'off', 'on', 1, 1, 'Switch Off', 'No', '', 78),
(5, 0, 'off', 'off', 'off', 0, 0, 'Standby', 'Yes', '', 84);

-- --------------------------------------------------------

--
-- Table structure for table `real_tools`
--

CREATE TABLE `real_tools` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `watt` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `rating` double DEFAULT NULL,
  `serialnumber` varchar(255) DEFAULT NULL,
  `category` enum('smartphone','laptop','coffee machine') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `real_tools`
--

INSERT INTO `real_tools` (`id`, `name`, `watt`, `picture`, `price`, `seller_id`, `rating`, `serialnumber`, `category`) VALUES
(54, 'test', 1000, 'picture.jpg', 100, NULL, NULL, NULL, NULL),
(55, 'test2', 11381, 'jasvkasv.jpg', 1813, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` int(11) NOT NULL,
  `sellername` varchar(255) NOT NULL,
  `sellerurl` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `sellername`, `sellerurl`, `logo`) VALUES
(1, 'Amazon', 'www.amazon.com', 'logo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

CREATE TABLE `tools` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `watt` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `seller_id` int(11) NOT NULL,
  `rating` double NOT NULL,
  `serialnumber` varchar(255) NOT NULL,
  `category` enum('smartphone','laptop','coffee machine') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tools`
--

INSERT INTO `tools` (`id`, `name`, `watt`, `picture`, `price`, `seller_id`, `rating`, `serialnumber`, `category`) VALUES
(4, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'smartphone'),
(5, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'smartphone'),
(6, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'smartphone'),
(7, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'smartphone'),
(8, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'smartphone'),
(9, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'smartphone'),
(10, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'smartphone'),
(11, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'smartphone'),
(12, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'smartphone'),
(13, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'smartphone'),
(14, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'smartphone'),
(15, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'smartphone'),
(16, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'smartphone'),
(17, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'smartphone'),
(18, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'smartphone'),
(19, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'smartphone'),
(20, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'laptop'),
(21, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'laptop'),
(22, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'laptop'),
(23, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'laptop'),
(24, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'laptop'),
(25, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'laptop'),
(26, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'laptop'),
(27, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'laptop'),
(28, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'laptop'),
(29, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'laptop'),
(30, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'laptop'),
(31, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'laptop'),
(32, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'laptop'),
(33, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'laptop'),
(34, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'laptop'),
(35, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'laptop'),
(36, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'laptop'),
(37, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'laptop'),
(38, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'laptop'),
(39, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'laptop'),
(40, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'coffee machine'),
(41, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'coffee machine'),
(42, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'coffee machine'),
(43, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'coffee machine'),
(44, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'coffee machine'),
(45, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'coffee machine'),
(46, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'coffee machine'),
(47, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'coffee machine'),
(48, 'tool', 500, 'tool', 100, 1, 0, '12718383', 'coffee machine'),
(49, 'ashavhasvhs', 1000, 'tool.jpg', 10, 1, 5, '1', 'coffee machine'),
(50, 'tool for pedro', 1000, 'tool.jpg', 10, 1, 5, '1', 'coffee machine'),
(51, 'ashavhasvhs', 1000, 'tool.jpg', 10, 1, 5, '1', 'coffee machine'),
(52, 'ashavhasvhs', 1000, 'tool.jpg', 10, 1, 5, '1', 'coffee machine'),
(53, 'ashavhasvhs', 1000, 'tool.jpg', 10, 1, 5, '1', 'coffee machine'),
(54, 'Pedro Cabral', 88, 'https://s3.static.brasilescola.uol.com.br/be/2020/12/girassol.jpg', 344, 1, 1, '1', 'smartphone'),
(55, 'Pedro', 33, 'shipshap', 344, 1, 1, '1', 'smartphone'),
(56, 'lunateste', 888, 'https://lumiere-a.akamaihd.net/v1/images/image_6fbde8ae.jpeg?region=0%2C0%2C1560%2C878', 22, 1, 1, '1', 'smartphone');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `daily_hours_electricity_use` double NOT NULL DEFAULT 0,
  `isAdmin` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `avatar`, `firstname`, `lastname`, `password`, `email`, `daily_hours_electricity_use`, `isAdmin`) VALUES
(3, 'John', 'John', 'Doe', '12345', 'John@email.com', 12, 0),
(74, 'TestRegistration', 'TestRegistration', 'TestRegistration', '$2y$10$A4p0yGd5HgRVTNUl.qOizO.rkyj6HK0DJMGjgbg5I0eSchbPa247q', 'test@email.com', 0, 0),
(75, 'TestRegistration', 'TestRegistration', 'TestRegistration', '$2y$10$WfNSSuNp7Gz9uvhZdvlAgeCoOsDMfnRr2jRlgJkIy7r4tJuPWdQqm', 'test@email.com', 0, 0),
(76, 'TestRegistration', 'TestRegistration', 'TestRegistration', '$2y$10$NK/AFDEYoCEa8QVGS1wNIu6LrY6khgw9Gua1b3ilKoONK3qt5.mda', 'test@email.com', 0, 0),
(79, 'HashedTest', 'HashedTest', 'HashedTest', '$2y$10$REj.k4m6LqiGuJH0pbfudOYBfbVIQovHHfUHYST2kwJZuOzxBUwXi', 'hashed@email.com', 0, 0),
(80, 'HashedTest', 'HashedTest', 'HashedTest', '$2y$10$gqE87YebPkkgZHcGddRWp.hxUbHBvKwoiHr9FndpCWrN0bUfsaySa', 'hashed@email.com', 0, 0),
(81, 'Pedro', 'Pedro', 'Cabral', '$2y$10$P6Ykv96v.rHTQDD2dJJxXuQMztOUyxocvBltwmJNGWGh5bKd.B3e.', 'phgcabral@hotmail.com', 0, 1),
(86, 'xux', 'xux', 'xaxa', '$2y$10$5XqrUBEMPWOkSpaa/bIlh.aTjc.5nB3Rebw5ys9GB4k46L6Rq1pjW', 'teste@teste.com', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calculator_results`
--
ALTER TABLE `calculator_results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `tool_id` (`tool_id`);

--
-- Indexes for table `questionforms`
--
ALTER TABLE `questionforms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `real_tools`
--
ALTER TABLE `real_tools`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seller_id` (`seller_id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seller_id` (`seller_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calculator_results`
--
ALTER TABLE `calculator_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `questionforms`
--
ALTER TABLE `questionforms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `real_tools`
--
ALTER TABLE `real_tools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tools`
--
ALTER TABLE `tools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`tool_id`) REFERENCES `tools` (`id`);

--
-- Constraints for table `tools`
--
ALTER TABLE `tools`
  ADD CONSTRAINT `tools_ibfk_1` FOREIGN KEY (`seller_id`) REFERENCES `sellers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
