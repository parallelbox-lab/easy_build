-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2020 at 10:12 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easybuild`
--

-- --------------------------------------------------------

--
-- Table structure for table `designs`
--

CREATE TABLE `designs` (
  `id` int(11) NOT NULL,
  `design_id` varchar(50) NOT NULL,
  `design_name` varchar(50) NOT NULL,
  `things_selected` varchar(50) NOT NULL,
  `design_url` varchar(50) NOT NULL,
  `stampdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `designs`
--

INSERT INTO `designs` (`id`, `design_id`, `design_name`, `things_selected`, `design_url`, `stampdate`) VALUES
(1, 'AD19gh', 'bungalow', 'duplex', 'google.com', '2020-08-24 20:40:36'),
(2, 'KD19sv', 'easubuild', 'bungalow', 'futa.com', '2020-08-24 20:41:10');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `payers_id` varchar(50) NOT NULL,
  `transaction_id` varchar(50) NOT NULL,
  `transaction_date` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `stampdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `payers_id`, `transaction_id`, `transaction_date`, `amount`, `stampdate`) VALUES
(1, 'PI20mz', 'TR50yu', '5-08-20', '25,000', '2020-08-24 20:43:31'),
(2, 'PY30my', 'TR60yu', '07-08-20', '50,000', '2020-08-24 20:43:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `income` varchar(50) NOT NULL,
  `stampdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `first_name`, `last_name`, `email`, `password`, `date`, `address`, `income`, `stampdate`) VALUES
(1, 'FH19vnx', 'olalekan', 'akintola', 'akintola41@gmail.com', '12345', '28-08-20', 'futa north gate', 'civil servant', '2020-08-24 20:39:07'),
(2, 'HY19xyz', 'john', 'akin', 'john41@gmail.com', '1234', '15-08-20', 'futa south gate', 'contractor', '2020-08-24 20:37:44'),
(15, 'bn66jp', 'Akintola', 'Olamilekan', 'temi47@gmail.com', 'a0wf', '', '', '', '2020-08-25 21:48:40'),
(50, 't3uino', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '2020-08-26 19:05:42'),
(115, 'qaa9ce', 'Akintola', 'Olamilekan', 'temi47@gmail.com', 'b1pd', '', '', '', '2020-08-26 16:08:39'),
(136, 'ng6jyr', '', '', '', '', '', '', '', '2020-08-27 06:18:24'),
(137, 'q2xa44', '', '', '', '', '', '', '', '2020-08-27 06:18:24'),
(138, 'sgx2oj', 'Akintola', 'Olamilekan', 'temi47@gmail.com', 'b1pd', '', '', '', '2020-08-27 06:18:57'),
(139, 'q3dm89', 'Akintola', 'Olamilekan', 'temi47@gmail.com', 'b1pd', '', '', '', '2020-08-27 06:19:13'),
(140, 'vh85qe', 'Akintola', 'Olamilekan', 'temi47@gmail.comd', 'b1pd', '', '', '', '2020-08-27 06:19:48'),
(141, '8odixn', 'Akintola', 'Olamilekan', 'temi47@gmail.com', 'b1pd', '', '', '', '2020-08-27 06:20:44'),
(142, 'mguqvt', 'Akintola', 'Olamilekan', 'temi47@gmail.com', 'b1pd', '', '', '', '2020-08-27 06:22:28'),
(143, 'yftxvj', 'Akintola', 'Olamilekan', 'temi47@gmail.com', 'b1pd', '', '', '', '2020-08-27 06:22:33'),
(144, 'r2hvwa', '', '', '', '', '', '', '', '2020-08-27 06:22:43'),
(145, 'ik59an', '', '', '', '', '', '', '', '2020-08-27 06:22:44'),
(146, '9s8jsn', '', '', '', '', '', '', '', '2020-08-27 06:22:44'),
(147, 'y2bop6', '', '', '', '', '', '', '', '2020-08-27 06:22:44'),
(148, 'ttwcx7', '', '', '', '', '', '', '', '2020-08-27 06:22:44'),
(149, '897g6l', '', '', '', '', '', '', '', '2020-08-27 06:22:45'),
(150, 'rvvv2m', 'Akintola', 'Olamilekan', 'temi47@gmail.com', 'b1pd', '', '', '', '2020-08-27 06:23:28'),
(151, '36xiwr', 'Akintola', 'Olamilekan', 'temi47@gmail.com', 'b1pd', '', '', '', '2020-08-27 07:10:59'),
(152, 'mwkvfh', 'Akintola', 'Olalekan', 'temi47@gmail.com', 'b1pd', '', '', '', '2020-08-27 14:38:44'),
(153, 'yjxnrv', 'Akintola', 'Olalekan', 'temi47@gmail.com', 'b1pd', '', '', '', '2020-08-27 14:39:18'),
(154, 'p7tltp', 'Akintola', 'Olamilekan', 'temi47@gmail.com', 'b1pd', '', '', '', '2020-08-28 08:08:37');

-- --------------------------------------------------------

--
-- Table structure for table `user_design`
--

CREATE TABLE `user_design` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `design_id` varchar(50) NOT NULL,
  `stampdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `designs`
--
ALTER TABLE `designs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_design`
--
ALTER TABLE `user_design`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `designs`
--
ALTER TABLE `designs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `user_design`
--
ALTER TABLE `user_design`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
