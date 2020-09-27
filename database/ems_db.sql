-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 23, 2020 at 08:30 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ems_db`
--

-- --------------------------------------------------------


--
-- Table structure for table `ems_employee`
--

CREATE TABLE `ems_employee` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(100) NOT NULL,
  `emp_name` varchar(255) NOT NULL,
  `emp_residence` varchar(255) NOT NULL,
  `emp_email` varchar(100) NOT NULL,
  `emp_pass` varchar(100) NOT NULL,
  `emp_phone` int(11) NOT NULL DEFAULT '+254',
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ems_employee`
--

INSERT INTO `ems_employee` (`id`, `emp_id`, `emp_name`, `emp_residence`, `emp_email`, `emp_pass`, `emp_phone`, `last_login`) VALUES
(1, 'EMPLOYEE1', 'Mwangi', 'Nairobi', 's@s.s', 'f27f6f1c7c5cbf4e3e192e0a47b85301', 12000,'2020-09-21 01:09:42'),
(2, 'EMPLOYEE2', 'Otieno', 'Nyeri', 'p@p.p', 'f27f6f1c7c5cbf4e3e192e0a47b85300', 15000,'2020-09-21 09:47:19'),
(3, 'EMPLOYEE3', 'Kipkoech', 'Roysambu', 'a@a.a', '47bce5c74f589f4867dbd57e9ca9f808', 10000,'2020-09-21 07:46:09'),
(4, 'EMPLOYEE4', 'Imani', 'Nakuru', 'imani', '343d9040a671c45832ee5381860e2996', 20000,'2020-09-21 01:09:42'),
(5, 'EMPLOYEE5', 'Odril', 'Nanyuki', 'Odril', 'f3abb86bd34cf4d52698f14c0da1dc60', 11111111,'2020-09-21 01:09:42');

--
-- Table structure for table `ems_users`
--

CREATE TABLE `ems_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ems_users`
--

INSERT INTO `ems_users` (`id`, `name`, `username`, `password`) VALUES
(1, 'Admin', 'admin', '$2a$08$Jo/6eisBA1vUzzrRYLgP9eL2aQ0nbsruwKJr2xkFqmi7a6VoEtAP6');

--
-- Table structure for table `emp_leaves`
--

CREATE TABLE `emp_leaves` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(100) NOT NULL,
  `leaves_left` int(3) NOT NULL,
  `reason_for_leave` varchar(255) NOT NULL,
  `total_leave_days` int(3) NOT NULL,
  `leave_from` date NOT NULL,
  `leave_to` date NOT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_leaves`
--

INSERT INTO `emp_leaves` (`id`, `emp_id`, `leaves_left`, `reason_for_leave`, `total_leave_days`, `leave_from`, `leave_to`, `status`) VALUES
(1, 'EMPLOYEE1', 15, 'This paragraphcontains a lot of linesin the source code,but the browser ignores it.This paragraphcontainsa lot of spacesin the source    code,but the    browser ignores it.The number of lines in a paragraph depends on the size of the ', 3, '2020-09-20', '2020-09-23', 0),
(2, 'EMPLOYEE2', 15, 'asdasdasddasdasdasdasdasdasdas\r\nsad\r\nasdasdasdasdasdadasdasdasdasdasdasdasd\r\nasdasdasdasdasda\r\ndsasdadsasdadadadadsas\r\ndasda\r\ndasdasdadsasd\r\nasdasdasd\r\nasdasdasdasdasdasddasdasdasdasdasdasdas\r\nsad\r\nasdasdasdasdasdadasdasdasdasdasdasdasd\r\nasdasdasdasdasda\r', 1, '2020-09-28', '2020-09-27', 1),
(3, 'EMPLOYEE3', 15, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 2, '2020-09-29', '2020-09-31', 2),
(4, 'EMPLOYEE4', 15, 'klsjdalsd', 2, '2020-09-19', '2020-09-30', 0),
(5, 'EMPLOYEE5', 15, 'ASDASDASDASDASDASDASDASDASDASDA', 3, '2020-09-20', '2020-09-27', 1);

-- --------------------------------------------------------





-- --------------------------------------------------------



-- --------------------------------------------------------

--
-- Table structure for table `works_hours`
--

CREATE TABLE `works_hours` (
  `id` int(11) NOT NULL,
  `empid` varchar(20) NOT NULL,
  `Login` datetime NOT NULL,
  `Logout` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `works_hours`
--

INSERT INTO `works_hours` (`id`, `empid`, `Login`, `Logout`) VALUES
(1, 'EMPLOYEE1', '2020-09-19 19:18:18', '2020-09-19 19:25:01'),
(2, 'EMPLOYEE2', '2020-09-21 19:28:09', '2020-09-21 19:36:36'),
(3, 'EMPLOYEE2', '2020-09-21 19:36:42', '2020-09-21 19:37:35'),
(4, 'EMPLOYEE3', '2020-09-21 19:37:41', '2020-09-21 19:37:50'),
(5, 'EMPLOYEE4', '2020-09-21 19:44:55', '2020-09-21 19:45:36'),
(6, 'EMPLOYEE5', '2020-09-21 19:45:47', '2020-09-21 19:46:09'),
(7, 'EMPLOYEE6', '2020-09-23 19:46:11', '2020-09-23 21:47:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_leaves`
--
ALTER TABLE `emp_leaves`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `ems_employee`
--
ALTER TABLE `ems_employee`
  ADD PRIMARY KEY (`id`,`emp_id`) USING BTREE,
  ADD UNIQUE KEY `emp_email` (`emp_email`);

--
-- Indexes for table `ems_users`
--
ALTER TABLE `ems_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `works_hours`
--
ALTER TABLE `works_hours`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_leaves`
--
ALTER TABLE `emp_leaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ems_employee`
--
ALTER TABLE `ems_employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ems_users`
--
ALTER TABLE `ems_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `works_hours`
--
ALTER TABLE `works_hours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
