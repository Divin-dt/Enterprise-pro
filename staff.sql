-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2026 at 10:50 AM
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
-- Database: `staff`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`dept_id`, `dept_name`) VALUES
(1, 'Infant'),
(2, 'Mixed'),
(3, 'Girls');

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `position_id` int(11) NOT NULL,
  `position_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`position_id`, `position_name`) VALUES
(1, 'Head Mistress'),
(2, 'Assistant Mistress'),
(3, 'Monitor'),
(4, 'Candidate'),
(5, '1st year Pupil Teacher'),
(6, '2nd year Pupil Teacher'),
(7, '3rd year Pupil Teacher'),
(8, '4th year Pupil Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `school_id` int(11) NOT NULL,
  `school_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`school_id`, `school_name`) VALUES
(1, 'Chapel Green Board School'),
(2, 'Thornton Lane Board School');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `title` varchar(10) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `title`, `first_name`, `last_name`) VALUES
(1, 'Miss', 'Maria Ann', 'Knowles'),
(2, 'Miss', 'Louisa', 'Rhodes'),
(3, 'Miss', 'Sarah Elizabeth', 'Foster'),
(4, 'Miss', 'Kate', 'Jennings'),
(5, 'Mrs', 'Maria Ann', 'Pearson (Knowles)'),
(6, 'Miss', 'Sarah Ann', 'Davy'),
(7, 'Miss', 'Sarah Elizabeth', 'Mathews'),
(8, 'Miss', 'R', 'Hirst'),
(9, 'Miss', 'E', 'Hirst'),
(10, 'Miss', 'Emily Moorhouse', 'Speight'),
(11, 'Miss', 'Mary Hannah', 'Brooke'),
(12, 'Miss', 'Emily Jane', 'Coulter'),
(13, 'Miss', 'Alice', 'Whitaker'),
(14, 'Miss', 'Henrietta', 'Dennis'),
(15, 'Miss', 'Sarah', 'Carter'),
(16, 'Miss', 'Clara', 'Blackburn'),
(17, 'Miss', 'Emma', 'Pickles'),
(18, 'Miss', 'Sarah J', 'Pickard'),
(19, 'Miss', 'Mary Elizabeth', 'Greenwood');

-- --------------------------------------------------------

--
-- Table structure for table `staffrecords`
--

CREATE TABLE `staffrecords` (
  `record_id` int(11) NOT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `school_id` int(11) DEFAULT NULL,
  `dept_id` int(11) DEFAULT NULL,
  `position_id` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `year_recorded` int(11) DEFAULT NULL,
  `left_school` date DEFAULT NULL,
  `notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staffrecords`
--

INSERT INTO `staffrecords` (`record_id`, `staff_id`, `school_id`, `dept_id`, `position_id`, `address`, `year_recorded`, `left_school`, `notes`) VALUES
(3, 1, 1, 1, 1, NULL, 1877, NULL, NULL),
(4, 2, 1, 1, 2, NULL, 1877, NULL, NULL),
(5, 3, 1, 1, 3, NULL, 1877, NULL, NULL),
(6, 4, 1, 1, 4, NULL, 1878, NULL, NULL),
(7, 1, 1, 1, 1, NULL, 1878, '1878-07-31', 'Married James Fletcher Pearson'),
(8, 6, 1, 1, 3, NULL, 1878, NULL, NULL),
(9, 4, 1, 1, 4, NULL, 1879, '1879-03-03', 'Transferred to Mixed department'),
(10, 7, 1, 1, 1, NULL, 1879, NULL, NULL),
(11, 3, 1, 1, 5, NULL, 1879, NULL, NULL),
(12, 6, 1, 1, 4, NULL, 1879, NULL, NULL),
(13, 8, 1, 1, 2, NULL, 1879, NULL, NULL),
(14, 6, 1, 1, 3, NULL, 1879, '1879-09-15', 'Moved to Ryan Infant School'),
(15, 10, 1, 1, 8, NULL, 1879, NULL, NULL),
(16, 9, 1, 1, 2, NULL, 1879, '1879-11-17', 'Moved to Great Horton School'),
(17, 3, 1, 1, 7, NULL, 1880, NULL, NULL),
(18, 7, 1, 1, 1, NULL, 1880, NULL, NULL),
(19, 10, 1, 1, 8, NULL, 1880, '1880-01-16', 'Moved to Darlington Training College'),
(20, 11, 1, 1, NULL, NULL, 1880, NULL, 'Temporary assistance'),
(21, 11, 1, 1, NULL, NULL, 1880, '1880-02-13', 'Returned to Great Horton Infants School'),
(22, 12, 1, 1, 3, NULL, 1880, NULL, 'Previously at Bramley Street Infant School'),
(23, 13, 1, 1, 2, NULL, 1880, NULL, NULL),
(24, 7, 1, 1, 1, NULL, 1881, NULL, NULL),
(25, 13, 1, 1, 2, NULL, 1881, NULL, NULL),
(26, 14, 1, 1, 5, '13 Leatham Street', 1881, NULL, NULL),
(27, 12, 1, 1, 5, '19 Elizabeth Street, Little Horton', 1881, NULL, NULL),
(28, 15, 1, 1, 1, NULL, 1882, NULL, NULL),
(29, 13, 1, 1, 2, NULL, 1882, NULL, NULL),
(30, 14, 1, 1, 6, '10 Mial Street', 1882, NULL, NULL),
(31, 12, 1, 1, 6, NULL, 1882, NULL, NULL),
(32, 7, 1, 1, 1, NULL, 1883, '1883-02-02', 'Resigned'),
(33, 16, 1, 1, 1, NULL, 1883, NULL, NULL),
(34, 12, 1, 1, 6, NULL, 1883, '1883-03-09', 'Transferred to Ryan Street Girls'),
(35, 17, 1, 1, 3, NULL, 1883, NULL, NULL),
(36, 14, 1, 1, 6, NULL, 1883, '1883-05-21', 'Transferred to Princeville Infants'),
(37, 18, 1, 1, 3, NULL, 1883, NULL, NULL),
(38, 16, 1, 1, 1, NULL, 1884, NULL, NULL),
(39, 17, 1, 1, 4, '10 Sherbourne Road', 1884, NULL, NULL),
(40, 18, 1, 1, 4, NULL, 1884, NULL, NULL),
(41, 16, 1, 1, 1, NULL, 1884, '1884-07-04', 'Transferred to Tyersal School'),
(42, 19, 1, 1, 1, NULL, 1886, NULL, NULL),
(43, 17, 1, 1, 8, NULL, 1886, NULL, NULL),
(44, 18, 1, 1, 7, NULL, 1886, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`position_id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`school_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `staffrecords`
--
ALTER TABLE `staffrecords`
  ADD PRIMARY KEY (`record_id`),
  ADD KEY `staff_id` (`staff_id`),
  ADD KEY `school_id` (`school_id`),
  ADD KEY `dept_id` (`dept_id`),
  ADD KEY `position_id` (`position_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `position_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `school_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `staffrecords`
--
ALTER TABLE `staffrecords`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `staffrecords`
--
ALTER TABLE `staffrecords`
  ADD CONSTRAINT `staffrecords_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`),
  ADD CONSTRAINT `staffrecords_ibfk_2` FOREIGN KEY (`school_id`) REFERENCES `schools` (`school_id`),
  ADD CONSTRAINT `staffrecords_ibfk_3` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`dept_id`),
  ADD CONSTRAINT `staffrecords_ibfk_4` FOREIGN KEY (`position_id`) REFERENCES `positions` (`position_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
