-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 25, 2022 at 12:59 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `userId` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `suiteId` int(11) NOT NULL,
  `bookingDate` date NOT NULL,
  `duration` int(11) NOT NULL,
  `payable` float NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `userId`, `name`, `email`, `phone`, `suiteId`, `bookingDate`, `duration`, `payable`, `createdAt`, `status`) VALUES
(1, 'lorem@yopmail.com', 'Lorem Ipsum', 'lorem@yopmail.com', '985230555', 2, '2022-02-28', 2, 6000, '2022-02-24 20:15:54', -1),
(3, 'lorem@yopmail.com', 'Lorem Ipsum', 'lorem@yopmail.com', '985230555', 2, '2022-02-28', 5, 15000, '2022-02-24 22:34:27', 1),
(4, 'user@yopmail.com', 'Shivangi Rai', 'user@yopmail.com', '8603292635', 3, '2022-02-28', 2, 10000, '2022-02-25 00:33:52', 1),
(5, 'raishivangi943@gmail.com', 'Shivangi Rai', 'raishivangi943@gmail.com', '8603292635', 4, '2022-03-02', 3, 1500, '2022-02-25 00:43:32', 1);

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` text DEFAULT NULL,
  `createdAt` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `name`, `email`, `phone`, `message`, `createdAt`, `status`) VALUES
(1, 'Lorem', 'lorem@yopmail.com', '9876543210', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Octavium, Marci filium, familiarem meum, confici vidi, nec vero semel nec ad breve tempus, sed et saepe et plane diu. Numquam audivi in Epicuri', '2022-02-23 01:14:46', 1),
(2, 'Lorem', 'lorem@yopmail.com', '985230555', '', '2022-02-23 01:20:24', 1),
(3, 'Lorem', 'lorem@yopmail.com', '985230555', '', '2022-02-23 01:46:28', 1),
(4, 'lorem ipsum', 'lorem@yopmail.com', '09852303373', '', '2022-02-23 01:54:22', 1),
(5, 'lorem ipsum', 'lorem@yopmail.com', '09852303373', '', '2022-02-23 01:56:00', 1),
(6, 'lorem ipsum', 'lorem@yopmail.com', '09852303373', '', '2022-02-23 01:56:39', 1),
(7, 'Shivangi Rai', 'lorem@yopmail.com', '8603292635', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quae est enim, quae se umquam deserat aut partem aliquam sui aut eius partis habitum aut vini aut ullius earum rerum, quae secundum naturam sunt, aut motum aut statum? Qui non moveatur et offensione turpitudinis et comprobatione honestatis?', '2022-02-25 00:45:52', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `meta` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL
) ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `password`, `phone`, `meta`, `type`, `createdAt`, `status`) VALUES
(1, 'admin@yopmail.com', 'Admin', '123', '985230555', NULL, 1, '2022-02-18 23:15:45', 1),
(2, 'user@yopmail.com', 'User', '123', NULL, NULL, 2, '2022-02-18 23:16:17', 1),
(3, 'lorem@yopmail.com', 'Lorem Ipsum', '123', '985230555', NULL, 2, '2022-02-18 23:46:57', 1),
(6, 'raishivangi943@gmail.com', 'Shivangi Rai', '123', '8603292635', NULL, 2, '2022-02-25 00:40:23', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FOREIGN` (`userId`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `FOREIGN` FOREIGN KEY (`userId`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
