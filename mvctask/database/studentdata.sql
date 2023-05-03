-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2023 at 10:58 AM
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
-- Database: `studentdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_course`
--

CREATE TABLE `t_course` (
  `course_id` int(11) NOT NULL,
  `coursename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_course`
--

INSERT INTO `t_course` (`course_id`, `coursename`) VALUES
(1, 'BCA'),
(2, 'MCA'),
(3, 'B.TECH');

-- --------------------------------------------------------

--
-- Table structure for table `t_student`
--

CREATE TABLE `t_student` (
  `s_id` int(11) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` bigint(20) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_student`
--

INSERT INTO `t_student` (`s_id`, `Firstname`, `Lastname`, `Email`, `Phone`, `course_id`) VALUES
(1, 'rushi', 'patel', 'rushi@gmail.com', 98565325695, 1),
(2, 'jigna', 'patel', 'jigna@gmail.com', 9856321456, 1),
(3, 'palak', 'pandya', 'pal@gmail.com', 9856235412, 3),
(4, 'mahi', 'patel', 'mahi1@gmail.com', 9856235412, 2),
(5, 'mahi', 'patel', 'mahi1@gmail.com', 9856321456, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_course`
--
ALTER TABLE `t_course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `t_student`
--
ALTER TABLE `t_student`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `course_id` (`course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_course`
--
ALTER TABLE `t_course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_student`
--
ALTER TABLE `t_student`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
