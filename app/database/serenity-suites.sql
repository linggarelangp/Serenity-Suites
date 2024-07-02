-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2024 at 06:00 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `serenity-suites`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotelfacilities`
--

CREATE TABLE `hotelfacilities` (
  `id` bigint(20) NOT NULL,
  `name` text DEFAULT NULL,
  `createdAt` date DEFAULT NULL,
  `updatedAt` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservationhistory`
--

CREATE TABLE `reservationhistory` (
  `id` bigint(20) NOT NULL,
  `reservation_id` bigint(20) DEFAULT NULL,
  `status` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) NOT NULL,
  `userId` bigint(20) DEFAULT NULL,
  `username` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `roomId` bigint(20) DEFAULT NULL,
  `roomName` varchar(255) DEFAULT NULL,
  `checkIn` date DEFAULT NULL,
  `checkOut` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `createdAt` date DEFAULT NULL,
  `updatedAt` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `createdAt`, `updatedAt`) VALUES
(1, 'Admin', '2024-06-07', '2024-06-07'),
(2, 'Staff', '2024-06-07', '2024-06-07'),
(3, 'User', '2024-06-18', '2024-06-18');

-- --------------------------------------------------------

--
-- Table structure for table `roomdetails`
--

CREATE TABLE `roomdetails` (
  `id` bigint(20) NOT NULL,
  `roomId` bigint(20) DEFAULT NULL,
  `facilitiesRoomId` bigint(20) DEFAULT NULL,
  `createdAt` date DEFAULT NULL,
  `updatedAt` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roomdetails`
--

INSERT INTO `roomdetails` (`id`, `roomId`, `facilitiesRoomId`, `createdAt`, `updatedAt`) VALUES
(2, 8, 1, '2024-06-24', '2024-06-24'),
(3, 8, 6, '2024-06-24', '2024-06-24'),
(4, 7, 1, '2024-06-24', '2024-06-24'),
(5, 7, 5, '2024-06-24', '2024-06-24'),
(6, 7, 6, '2024-06-24', '2024-06-24'),
(8, 10, 5, '2024-06-24', '2024-06-24');

-- --------------------------------------------------------

--
-- Table structure for table `roomfacilities`
--

CREATE TABLE `roomfacilities` (
  `id` bigint(20) NOT NULL,
  `name` text DEFAULT NULL,
  `createdAt` date DEFAULT NULL,
  `updatedAt` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roomfacilities`
--

INSERT INTO `roomfacilities` (`id`, `name`, `createdAt`, `updatedAt`) VALUES
(1, 'Bathroom', '2024-06-22', '2024-06-24'),
(4, 'Shower', '2024-06-24', '2024-06-24'),
(5, 'TV', '2024-06-24', '2024-06-24'),
(6, 'AC', '2024-06-24', '2024-06-24');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `path_image` text DEFAULT NULL,
  `createdAt` date DEFAULT NULL,
  `updatedAt` date DEFAULT NULL,
  `price` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `path_image`, `createdAt`, `updatedAt`, `price`) VALUES
(7, 'Deluxe Double Bed', 'assets/rooms/110050220-room-deluxe-twin.jpg', '2024-06-23', '2024-06-24', 112000),
(8, 'Superior Single Bed', 'assets/rooms/374187636-room-superior.jpg', '2024-06-24', '2024-06-24', 99000),
(9, 'Superior Double Bed', 'assets/rooms/414799338-room-superior-twin.jpg', '2024-06-24', '2024-06-24', 110000),
(10, 'Deluxe Single Bed', 'assets/rooms/1039846972-room-deluxe.jpg', '2024-06-24', '2024-06-24', 229000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `roleid` bigint(20) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `fullname` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `createdAt` date DEFAULT NULL,
  `updatedAt` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `roleid`, `email`, `firstname`, `lastname`, `fullname`, `password`, `createdAt`, `updatedAt`) VALUES
(1, 1, 'axl@contoh.com', 'Marviz', 'Axl', 'Marviz Axl', '12345', '2024-06-18', '2024-06-18'),
(2, 1, 'developerTester@gmail.com', 'Developer', 'Tester', 'Developer Tester', 'developerTester12345', '2024-06-18', '2024-06-18'),
(3, 2, 'gillasGT@gmail.com', NULL, NULL, NULL, 'gillasgt12', '2024-06-18', '2024-06-18'),
(4, 2, 'yudha@gmail.com', NULL, NULL, NULL, 'yudha12345', '2024-06-18', '2024-06-18'),
(6, 2, 'ryoagta@gmail.com', 'Ryo', 'Agata', 'Ryo Agata', 'Ryo12345', '2024-06-24', '2024-06-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotelfacilities`
--
ALTER TABLE `hotelfacilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservationhistory`
--
ALTER TABLE `reservationhistory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservation_id` (`reservation_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `roomId` (`roomId`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roomdetails`
--
ALTER TABLE `roomdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roomsId` (`roomId`),
  ADD KEY `facilitesRoomId` (`facilitiesRoomId`);

--
-- Indexes for table `roomfacilities`
--
ALTER TABLE `roomfacilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roleid` (`roleid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotelfacilities`
--
ALTER TABLE `hotelfacilities`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservationhistory`
--
ALTER TABLE `reservationhistory`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roomdetails`
--
ALTER TABLE `roomdetails`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roomfacilities`
--
ALTER TABLE `roomfacilities`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservationhistory`
--
ALTER TABLE `reservationhistory`
  ADD CONSTRAINT `reservationhistory_ibfk_1` FOREIGN KEY (`reservation_id`) REFERENCES `reservations` (`id`);

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `reservations_ibfk_2` FOREIGN KEY (`roomId`) REFERENCES `rooms` (`id`);

--
-- Constraints for table `roomdetails`
--
ALTER TABLE `roomdetails`
  ADD CONSTRAINT `roomdetails_ibfk_1` FOREIGN KEY (`roomId`) REFERENCES `rooms` (`id`),
  ADD CONSTRAINT `roomdetails_ibfk_2` FOREIGN KEY (`facilitiesRoomId`) REFERENCES `roomfacilities` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`roleid`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
