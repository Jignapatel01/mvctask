-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2023 at 11:19 AM
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
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `Email`, `Password`) VALUES
(1, 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE `tbl_city` (
  `city_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `cityname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`city_id`, `state_id`, `cityname`) VALUES
(1, 1, 'Ahemdabad'),
(2, 1, 'Surat'),
(3, 1, 'Rajkot'),
(4, 1, 'Vadodara'),
(5, 2, 'Udaipur'),
(6, 2, 'Jaipur'),
(7, 3, 'Mumabi'),
(8, 3, 'Pune'),
(9, 4, 'Lacknow'),
(10, 4, 'Varansi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE `tbl_state` (
  `state_id` int(11) NOT NULL,
  `statename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`state_id`, `statename`) VALUES
(1, 'Gujarat'),
(2, 'Rajasthan'),
(3, 'Maharastra'),
(4, 'Uttar Pradesh');

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
  `Password` varchar(255) NOT NULL,
  `Photo` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Hobby` varchar(255) NOT NULL,
  `Phone` bigint(20) NOT NULL,
  `course_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `Registered_date_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_student`
--

INSERT INTO `t_student` (`s_id`, `Firstname`, `Lastname`, `Email`, `Password`, `Photo`, `Gender`, `Hobby`, `Phone`, `course_id`, `state_id`, `city_id`, `Registered_date_time`) VALUES
(4, 'jay', 'patel', 'jay12@gmail.com', 'j1234', 'upload/students/chef1.webp', 'male', 'reading,playing,dancing', 9856235412, 1, 1, 1, '4'),
(5, 'krupali', 'gohel', 'krupali12@gmail.com', 'krupa123', 'upload/students/w8.jpg', 'female', 'reading,playing,dancing', 9856235412, 3, 1, 4, '4'),
(6, 'shivansh', 'patel', 'shiv1@gmail.com', 'shiv123', 'upload/students/k5.jpg', 'male', 'reading,playing', 9856321478, 2, 2, 6, '04/05/2023 '),
(7, 'bhavya', 'patel', 'bhavya@gmail.com', 'bh1234', 'upload/students/k2.jpg', 'male', 'reading,playing,dancing', 9856321478, 1, 1, 3, '04/05/2023 '),
(8, 'raj', 'patel', 'raj@gmail.com', '12345', 'upload/students/m4.jpg', 'male', 'reading,playing,dancing', 7898532145, 2, 3, 7, '04/05/2023 '),
(9, 'yash', 'patel', 'yash@gmail.com', '123456', 'upload/students/m5.jpg', 'male', 'reading,playing', 9563214569, 1, 2, 6, '04/05/2023 14:37:52 pm'),
(10, 'pyari', 'patel', 'pyari01@gmail.com', '112233', 'upload/students/w2.jpg', 'female', 'playing,dancing', 9988774450, 3, 4, 9, '08/05/2023 13:03:05 pm'),
(11, 'jigna', 'patel', 'jigna@gmail.com', 'j001122', 'upload/students/w1.jpg', 'female', 'reading,playing,dancing,surffing', 7898532145, 2, 2, 5, '08/05/2023 16:05:31 pm'),
(12, 'aditya', 'patel', 'aditya01@gmail.com', 'adi1234', 'upload/students/m6.jpg', 'male', 'reading,playing', 9856235412, 2, 1, 1, '10/05/2023 13:00:14 pm'),
(13, 'jigna', 'patel', '', 'MTIzNDU2', 'upload/students/w2.jpg', 'female', 'reading,playing,surffing', 999811554465, 2, 1, 1, '10/05/2023 14:42:10 pm'),
(15, 'krupali', 'vaghela', 'krupaliv09@gmail.com', 'a3J1cGEwMDA=', 'upload/students/w1.jpg', 'female', 'reading,playing', 9856321478, 3, 1, 3, '11/05/2023 13:35:20 pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`state_id`);

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
  ADD KEY `course_id` (`course_id`),
  ADD KEY `state_id` (`state_id`),
  ADD KEY `city_id` (`city_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_city`
--
ALTER TABLE `tbl_city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_course`
--
ALTER TABLE `t_course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_student`
--
ALTER TABLE `t_student`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD CONSTRAINT `state_id` FOREIGN KEY (`state_id`) REFERENCES `tbl_state` (`state_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
