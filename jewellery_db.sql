-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2025 at 02:09 PM
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
-- Database: `jewellery_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `phone`, `email`, `password`, `role`, `status`) VALUES
(1, 'Hari', '6374518238', 'harii@gmail.com', 'e1147fd112823aba54725f871bf2515e', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_num` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_pass` varchar(200) NOT NULL,
  `user_role` int(11) NOT NULL,
  `user_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`user_id`, `user_name`, `user_num`, `user_email`, `user_pass`, `user_role`, `user_status`) VALUES
(1, 'Hari', '77675657565', 'hari@gmail.com', 'hari', 0, 1),
(2, 'Hari1', '7767565756', 'hari1@gmail.com', 'e1147fd112823aba54725f871bf2515e', 0, 1),
(3, 'Hari2', '77675657', 'hari2@gmail.com', '9476bfb82109d7239440a9127d0a5ddd', 0, 1),
(4, 'Hari4', '7767565744', 'hari4@gmail.com', '9f9605142c9af01ec75576388bb3aeac', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subscription_master`
--

CREATE TABLE `subscription_master` (
  `subscription_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `transaction_master_id` int(11) NOT NULL,
  `transaction_amount` varchar(200) NOT NULL,
  `transaction_date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `subscription_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscription_master`
--

INSERT INTO `subscription_master` (`subscription_id`, `user_id`, `transaction_master_id`, `transaction_amount`, `transaction_date_time`, `created_at`, `subscription_status`) VALUES
(1, 2, 3, '1000', '2025-03-14 08:20:18', '2025-03-14 08:20:18', 1),
(2, 3, 4, '1000', '2025-03-14 08:24:10', '2025-03-14 08:24:10', 1),
(3, 3, 5, '1000', '2025-03-14 08:26:27', '2025-03-14 08:26:27', 1),
(4, 3, 6, '1000', '2025-03-14 10:27:23', '2025-03-14 10:27:23', 1),
(5, 2, 7, '1000', '2025-03-14 10:49:06', '2025-03-14 10:49:06', 1),
(6, 2, 8, '1000', '2025-03-14 10:50:42', '2025-03-14 10:50:42', 1),
(7, 2, 9, '1500', '2025-03-14 10:53:14', '2025-03-14 10:53:14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `transaction_id`, `amount`, `created_at`) VALUES
(1, '543964162120', 10.00, '2025-03-14 07:20:58'),
(2, '543953459085', 1.00, '2025-03-14 07:34:29'),
(3, '543953459035', 1000.00, '2025-03-14 08:20:18'),
(4, '543953459025', 1000.00, '2025-03-14 08:24:10'),
(5, '543953459015', 1000.00, '2025-03-14 08:26:27'),
(6, '543953459055', 1000.00, '2025-03-14 10:27:23'),
(7, '543953459065', 1000.00, '2025-03-14 10:49:06'),
(8, '543953459075', 1000.00, '2025-03-14 10:50:42'),
(9, '543953459077', 1500.00, '2025-03-14 10:53:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `subscription_master`
--
ALTER TABLE `subscription_master`
  ADD PRIMARY KEY (`subscription_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `transaction_id` (`transaction_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscription_master`
--
ALTER TABLE `subscription_master`
  MODIFY `subscription_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
