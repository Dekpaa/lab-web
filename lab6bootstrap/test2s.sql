-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2022 at 04:31 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test2s`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL DEFAULT 0,
  `basic_salary` int(10) NOT NULL,
  `allowance` varchar(10) NOT NULL,
  `deduction` varchar(10) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `month` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `basic_salary`, `allowance`, `deduction`, `emp_id`, `month`) VALUES
(3, 13, '8:00', '18:00', 3, 2),
(4, 12, '8:00', '16:00', 4, 2),
(7, 15, '8:00', '16:00', 2, 2),
(9, 12, '8:00', '16:00', 4, 2),
(10, 18, '8:00', '16:00', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `dept` varchar(15) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `position`, `dept`, `username`, `password`) VALUES
(1, 'ali', 'manager', '1.png', 'ali', 'ali'),
(2, 'sarah', 'manager', '2.png', 'abu', 'abu'),
(3, 'larry', 'manager', '3.png', 'larry', 'larry'),
(4, 'clara', 'engineer', '4.png', 'clara', 'clara'),
(5, 'harry', 'general manager', '10.png', 'larry', 'larry'),
(7, 'jayjay', 'progrommer', '7.png', '', ''),
(9, 'pichai', 'manager', '9.png', '', ''),
(10, 'Ruzairi ', 'VC', '10.png', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `hadir`
--

CREATE TABLE `hadir` (
  `id` int(11) NOT NULL,
  `emp_num` varchar(10) NOT NULL,
  `time_in` varchar(10) NOT NULL,
  `time_out` varchar(10) NOT NULL,
  `date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hadir`
--

INSERT INTO `hadir` (`id`, `emp_num`, `time_in`, `time_out`, `date`) VALUES
(1, '1001', '09:00:00.0', '22:00:00.0', '2021-01-20'),
(3, '1002', '09:00:00.0', '22:00:00.0', '2021-01-20');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(11) NOT NULL,
  `basic_salary` int(10) NOT NULL,
  `allowance` int(10) NOT NULL,
  `deduction` int(10) NOT NULL,
  `emp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `basic_salary`, `allowance`, `deduction`, `emp_id`) VALUES
(1, 5000, 1000, 500, 1),
(2, 4500, 500, 250, 2),
(3, 5000, 1000, 500, 3),
(4, 4500, 500, 250, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hadir`
--
ALTER TABLE `hadir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_id` (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hadir`
--
ALTER TABLE `hadir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `salary_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
