-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 02:00 PM
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
-- Database: `db-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'jeziel', 'adfasdf@gmail.com', '$2y$10$EMJfVXx1Cuz8NpKfHeR5suiMVKGq/JjKchp5PEq.ZiQvk7.Ejx/7e'),
(2, 'Hera Morningstar', 'hera123@gmail.com', '$2y$10$LLZKKRcd/jLDkfyWLH3bVOnoSbkmQBjpSV3TvnVsJN9jWSroK6UiW'),
(3, 'Jeziel Harana', 'harna1234@gmail.com', '$2y$10$SCD0pla1zeHwnclNRePGUO6twj5e3B/LAslspNRiMUepwoZwLnBCW'),
(4, 'hera', 'hera123@gmail.com', '$2y$10$/9PHshzXWerrG8UfheI/.OL6tVP6laq1sIUZH0mnBCzErRlkhhypu'),
(5, 'Hera One', 'hera2022@gmail.com', '$2y$10$pN3AI3Jnv.9QFHNhVAKRKOcujQTQBBJgHUDnl1NgPQjPLyAk0kyY.'),
(6, 'Hera Morning', 'morning123@gmail.com', '$2y$10$2yd7I/RzsaQEZNPji27vku6JFEu7oC2yqv4EhdZ/3m0Iqmeh940.O'),
(7, 'Lucifer Morningstar', 'morningstar154@gmail.com', '$2y$10$EGsmHGBHDBwOlpGQf/DhY.LuM5Oq6wruhWVQjgUnmgXoFOjbx/hMu'),
(8, 'Jake Cuenca', 'jake54@gmail.com', '$2y$10$3rD28VNe1c5Odv6PL5t4uubDdtauPtBvJoy9bwMLPb9ZUl2mjnXMW'),
(9, 'Lucifer Morningstar', 'lucifermorningstar@gmail.com', '$2y$10$UAqlFO/V.0o1w5YAJFizwOtpJNwyKpzJq3Kn/UAHlRs8ZqOxFpdx.'),
(10, 'Jeziel Meniano', 'jeziel123@gmail.com', '$2y$10$uInk9Bve.Sipg.HV.yv44elTi32z.C8Zu/ZXLPI9tmTVHgv6orON2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
