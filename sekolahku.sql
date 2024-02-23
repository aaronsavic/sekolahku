-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2024 at 06:18 AM
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
-- Database: `sekolahku`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course` varchar(50) NOT NULL,
  `mentor` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course`, `mentor`, `title`) VALUES
(1, 'C++', 'Ari', 'Dr.'),
(2, 'C#', 'Ari', 'Dr.'),
(3, 'C#', 'Ari', 'Dr.'),
(4, 'CSS', 'Cania', 'S.Kom'),
(5, 'HTML', 'Cania', 'S.Kom'),
(6, 'JavaScript', 'Cania', 'S.Kom'),
(7, 'Python', 'Barry', 'S.T.'),
(8, 'Micropython', 'Barry', 'S.T.'),
(9, 'Java', 'Darren', 'M.T.'),
(10, 'Ruby', 'Darren', 'M.T.'),
(12, 'Adam0', 'adam10', 'adam20');

-- --------------------------------------------------------

--
-- Table structure for table `usercourse`
--

CREATE TABLE `usercourse` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_course` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usercourse`
--

INSERT INTO `usercourse` (`id`, `id_user`, `id_course`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 4),
(5, 2, 5),
(6, 2, 6),
(7, 3, 7),
(8, 3, 8),
(9, 3, 9),
(10, 4, 1),
(11, 4, 3),
(12, 4, 5),
(13, 5, 2),
(14, 5, 4),
(15, 5, 6),
(16, 6, 7),
(17, 6, 8),
(18, 6, 9),
(20, 6, 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Andi', 'andi@andi.com', '12345', '2024-02-23 02:35:33', '2024-02-23 02:35:33'),
(2, 'Budi', 'budi@budi.com', '67890', '2024-02-23 02:35:33', '2024-02-23 02:35:33'),
(3, 'Caca', 'caca@caca.com', 'abcde', '2024-02-23 02:35:33', '2024-02-23 02:35:33'),
(4, 'Deni', 'deni@deni.com', 'fghij', '2024-02-23 02:35:33', '2024-02-23 02:35:33'),
(5, 'Euis', 'euis@euis.com', 'klmno', '2024-02-23 02:35:33', '2024-02-23 02:35:33'),
(6, 'Fafa', 'fafa@fafa.com', 'pqrst', '2024-02-23 02:35:33', '2024-02-23 02:35:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usercourse`
--
ALTER TABLE `usercourse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `usercourse`
--
ALTER TABLE `usercourse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
