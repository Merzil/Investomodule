-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2023 at 08:14 PM
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
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `ful_name` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ful_name`, `email`, `password`) VALUES
(1, 'm', 'merlferns28@gmail.com', '$2y$10$B/bE3Clzdum5ACN8trHdJePUWuyKgbha9nrtTWhAU1JIoy7A4ichu'),
(2, 'Merline', 'abc@gmail.com', '$2y$10$rYADd5hp/CSRi7ni1X7RXOFrACa80jEfnjNGzDFZBQz9eWG2iPng6'),
(3, 'Merline Fernandes', 'xyz@gmail.com', '$2y$10$HlaxHQgrAfOWjQ8a/0j7cOlgHyubDHVOprEGFGiLcYQWyq27GG1FK'),
(4, 'Merline Fernandes', 'den@gmail.com', '$2y$10$KI8GiT9.cimLyBKInTBoQO/6Tsy1sQt8DjkVRVprxP.dipMJEqwNO'),
(5, 'Mer', 'ronald@gmail.com', '$2y$10$VcHsvsMRlzA.6wW3951CpO/G9hsZB1fYgjNtu4vZrIYxs.3dF1acy'),
(6, 'Rizwan', 'rizwan123@gmail.com', '$2y$10$llhyfHU2dBy.8Y22bVBrGeUyXJTWnnX.rkyyO9fd3P1ZtgP7ws1Rq'),
(7, 'Henry', 'henry@gmail.com', '$2y$10$xXbUU0QNG..62bD3dxUlK.xzEnzWJVnK.0RVj0wPB0leRMI/YrMNG'),
(8, 'Mer', 'mer123@gmail.com', '$2y$10$2k8.lbdaDqw7xbL9YXFlKu3eCaVv0eAOjSYTrWdplYspT1pFOXB9a');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
