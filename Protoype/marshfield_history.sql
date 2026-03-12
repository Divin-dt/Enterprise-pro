-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2026 at 09:25 PM
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
-- Database: `marshfield_history`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`) VALUES
(1, 'Infant'),
(2, 'Junior'),
(3, 'Senior');

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
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `school_id` int(11) NOT NULL,
  `school_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`school_id`, `school_name`) VALUES
(4, 'Bradford School Board'),
(1, 'Chapel Green Board School'),
(5, 'Chapel Green Church School'),
(3, 'Marshfield School'),
(2, 'Thornton Lane Board School');

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
-- Table structure for table `source`
--

CREATE TABLE `source` (
  `source_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `school_id` int(11) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `source_type_id` int(11) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `hyperlink` varchar(500) DEFAULT NULL,
  `year_start` int(11) DEFAULT NULL,
  `year_end` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `source`
--

INSERT INTO `source` (`source_id`, `title`, `school_id`, `department_id`, `source_type_id`, `notes`, `hyperlink`, `year_start`, `year_end`) VALUES
(1, 'Infant School Log Book 1877 - 1905', 1, 1, 1, 'Not available', NULL, 1877, 1905),
(2, 'Infant School Log Book 1877 - 1905', 2, 1, 1, 'Not available', NULL, 1877, 1905),
(3, 'Infant School Log Book 1905 - 1939', NULL, 1, 1, 'Not available', NULL, 1905, 1939),
(4, 'Infant School Log Book 1905 - 1939', NULL, 1, 1, 'Not available', NULL, 1905, 1939),
(5, 'Infant School Log Book 1939 - 1969', 3, 1, 1, NULL, NULL, 1939, 1969),
(6, 'Infant School Log Book 1969 - 1973', 3, 1, 1, NULL, NULL, 1969, 1973),
(7, 'Infant Admission Register Sep 1943 - Jan 1954', 3, 1, 2, NULL, NULL, 1943, 1954),
(8, 'Infant Admission Register Sep 1954 - Jul 1965', 3, 1, 2, NULL, NULL, 1954, 1965),
(9, 'Infant Admission Register Sep 1965 - Jan 1973', 3, 1, 2, NULL, NULL, 1965, 1973),
(10, 'Photos - May day celebrations', 3, 1, 3, NULL, NULL, NULL, NULL),
(11, 'Junior School Log Book 1877 - 1910', 1, 2, 1, 'Not available', NULL, 1877, 1910),
(12, 'Junior School Log Book 1877 - 1910', 2, 2, 1, 'Not available', NULL, 1877, 1910),
(13, 'Junior School Log Book 1910 - 1933', NULL, 2, 1, 'Not available', NULL, 1910, 1933),
(14, 'Junior School Log Book 1933 - 1964', 3, 2, 1, NULL, NULL, 1933, 1964),
(15, 'Junior Admission Register Jan 1894 - Feb 1901', 2, 2, 2, NULL, NULL, 1894, 1901),
(16, 'Junior Admission Register Apr 1906 - Sep 1911', 3, 2, 2, NULL, NULL, 1906, 1911),
(17, 'Junior Admission Register Aug 1911 - Jul 1917', 3, 2, 2, NULL, NULL, 1911, 1917),
(18, 'Senior Admission Register Jul 1901 - Jul 1928', 3, 3, 2, NULL, NULL, 1901, 1928),
(19, 'Junior Admission Register Jan Aug 1928 - Jan 1944', 3, 2, 2, NULL, NULL, 1928, 1944),
(20, 'Junior Admission Register Mar 1944 - Feb 1954', 3, 2, 2, NULL, NULL, 1944, 1954),
(21, 'Junior Admission Register Mar 1954 - Jan 1963', 3, 2, 2, NULL, NULL, 1954, 1963),
(22, 'Junior Admission Register Sep 1971 - Sep 1973', 3, 2, 2, NULL, NULL, 1971, 1973),
(23, 'Punishment book 1902 - 1965', 3, 2, 6, NULL, NULL, 1902, 1965),
(24, 'Miss Teal\'s scapbook 1931 - 1952', 3, 2, 3, NULL, NULL, 1931, 1952),
(25, 'Miss Teal\'s scrapbook tour to Northern Ireland 1949', 3, 2, 3, NULL, NULL, 1949, 1949),
(26, 'Miss Teal\'s scrapbook tour to London 1950 and Bournemouth 1851', 3, 2, 3, NULL, NULL, 1950, 1951),
(27, 'Photograph album circa 1955-56', 3, 2, 3, NULL, NULL, 1955, 1956),
(28, 'Miss Leach/Mrs Emmerson\'s album', 3, 2, 3, NULL, NULL, NULL, NULL),
(29, 'Miscellaneous pictures', 3, 2, 3, NULL, NULL, NULL, NULL),
(30, 'Marshfield School Magazine 1926', 3, 2, 3, NULL, NULL, 1926, 1926),
(31, 'Extracts from Marshfield Infant Log book 1905 - 1936', 3, 2, 3, NULL, NULL, 1905, 1936),
(32, 'Proposed plan of Junior and Senior Mixed School', 3, 2, 4, NULL, NULL, NULL, NULL),
(33, 'Plan for new Infant School', 3, 1, 4, NULL, NULL, NULL, NULL),
(34, 'Plan for new Thornton Lane Board School', 2, NULL, 4, NULL, NULL, NULL, NULL),
(35, 'Thornton Lane School opening', 2, NULL, 7, NULL, NULL, NULL, NULL),
(36, 'Extracts form Bradford School Board Minutes 1877-78', 4, NULL, 5, NULL, NULL, 1877, 1878),
(37, 'Plan of Chapel Green Board School', 1, NULL, 4, NULL, NULL, NULL, NULL),
(38, 'Plan of Chapel Green Church School', 5, NULL, 4, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sources`
--

CREATE TABLE `sources` (
  `id` int(11) NOT NULL,
  `source_name` varchar(255) NOT NULL,
  `source_type` varchar(100) NOT NULL DEFAULT '',
  `school` varchar(255) NOT NULL DEFAULT '',
  `dept` varchar(100) DEFAULT '',
  `notes` text DEFAULT '',
  `link` varchar(500) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sources`
--

INSERT INTO `sources` (`id`, `source_name`, `source_type`, `school`, `dept`, `notes`, `link`) VALUES
(1, 'Infant School Log Book 1877 - 1905', 'Log Book', 'Chapel Green Board School', 'Infant', 'Not available', ''),
(2, 'Infant School Log Book 1877 - 1905', 'Log Book', 'Thornton Lane Board School', 'Infant', 'Not available', ''),
(3, 'Infant School Log Book 1905 - 1939', 'Log Book', '', 'Infant', 'Not available', ''),
(4, 'Infant School Log Book 1905 - 1939', 'Log Book', '', 'Infant', 'Not available', ''),
(5, 'Infant School Log Book 1939 - 1969', 'Log Book', 'Marshfield School', 'Infant', '', ''),
(6, 'Infant School Log Book 1969 - 1973', 'Log Book', 'Marshfield School', 'Infant', '', ''),
(7, 'Infant Admission Register Sep 1943 - Jan 1954', 'Admission Register', 'Marshfield School', 'Infant', '', ''),
(8, 'Infant Admission Register Sep 1954 - Jul 1965', 'Admission Register', 'Marshfield School', 'Infant', '', ''),
(9, 'Infant Admission Register Sep 1965 - Jan 1973', 'Admission Register', 'Marshfield School', 'Infant', '', ''),
(10, 'Photos - May day celebrations', 'Images', 'Marshfield School', 'Infant', '', ''),
(11, 'Junior School Log Book 1877 - 1910', 'Log Book', 'Chapel Green Board School', 'Junior', 'Not available', ''),
(12, 'Junior School Log Book 1877 - 1910', 'Log Book', 'Thornton Lane Board School', 'Junior', 'Not available', ''),
(13, 'Junior School Log Book 1910 - 1933', 'Log Book', '', 'Junior', 'Not available', ''),
(14, 'Junior School Log Book 1933 - 1964', 'Log Book', 'Marshfield School', 'Junior', '', ''),
(15, 'Junior Admission Register Jan 1894 - Feb 1901', 'Admission Register', 'Thornton Lane Board School', 'Junior', '', ''),
(16, 'Junior Admission Register Apr 1906 - Sep 1911', 'Admission Register', 'Marshfield School', 'Junior', '', ''),
(17, 'Junior Admission Register Aug 1911 - Jul 1917', 'Admission Register', 'Marshfield School', 'Junior', '', ''),
(18, 'Senior Admission Register Jul 1901 - Jul 1928', 'Admission Register', 'Marshfield School', 'Senior', '', ''),
(19, 'Junior Admission Register Jan Aug 1928 - Jan 1944', 'Admission Register', 'Marshfield School', 'Junior', '', ''),
(20, 'Junior Admission Register Mar 1944 - Feb 1954', 'Admission Register', 'Marshfield School', 'Junior', '', ''),
(21, 'Junior Admission Register Mar 1954 - Jan 1963', 'Admission Register', 'Marshfield School', 'Junior', '', ''),
(22, 'Junior Admission Register Sep 1971 - Sep 1973', 'Admission Register', 'Marshfield School', 'Junior', '', ''),
(23, 'Punishment book 1902 - 1965', 'Punishment Book', 'Marshfield School', 'Junior', '', ''),
(24, 'Miss Teal\'s scapbook 1931 - 1952', 'Images', 'Marshfield School', 'Junior', '', ''),
(25, 'Miss Teal\'s scrapbook tour to Northern Ireland 1949', 'Images', 'Marshfield School', 'Junior', '', ''),
(26, 'Miss Teal\'s scrapbook tour to London 1950 and Bournemouth 1851', 'Images', 'Marshfield School', 'Junior', '', ''),
(27, 'Photograph album circa 1955-56', 'Images', 'Marshfield School', 'Junior', '', ''),
(28, 'Miss Leach/Mrs Emmerson\'s album', 'Images', 'Marshfield School', 'Junior', '', ''),
(29, 'Miscellaneous pictures', 'Images', 'Marshfield School', 'Junior', '', ''),
(30, 'Marshfield School Magazine 1926', 'Images', 'Marshfield School', 'Junior', '', ''),
(31, 'Extracts from Marshfield Infant Log book 1905 - 1936', 'Images', 'Marshfield School', 'Junior', '', ''),
(32, 'Proposed plan of Junior and Senior Mixed School', 'Plan', 'Marshfield School', 'Junior', '', ''),
(33, 'Plan for new Infant School', 'Plan', 'Marshfield School', 'Infant', '', ''),
(34, 'Plan for new Thornton Lane Board School', 'Plan', 'Thornton Lane Board School', '', '', ''),
(35, 'Thornton Lane School opening', 'Doc', 'Thornton Lane Board School', '', '', ''),
(36, 'Extracts form Bradford School Board Minutes 1877-78', 'School Board', 'Bradford School Board', '', '', ''),
(37, 'Plan of Chapel Green Board School', 'Plan', 'Chapel Green Board School', '', '', ''),
(38, 'Plan of Chapel Green Church School', 'Plan', 'Chapel Green Church School', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `source_pages`
--

CREATE TABLE `source_pages` (
  `page_id` int(11) NOT NULL,
  `source_id` int(11) NOT NULL,
  `page_number` int(11) DEFAULT NULL,
  `page_label` varchar(50) DEFAULT NULL,
  `school_id` int(11) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `hyperlink` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `source_type`
--

CREATE TABLE `source_type` (
  `source_type_id` int(11) NOT NULL,
  `type_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `source_type`
--

INSERT INTO `source_type` (`source_type_id`, `type_name`) VALUES
(2, 'Admission Register'),
(7, 'Doc'),
(3, 'Images'),
(1, 'Log Book'),
(4, 'Plan'),
(6, 'Punishment Book'),
(5, 'School Board');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `dept` varchar(100) DEFAULT '',
  `title` varchar(50) DEFAULT '',
  `last_name` varchar(100) NOT NULL,
  `first_name` varchar(100) DEFAULT '',
  `position` varchar(100) DEFAULT '',
  `address` varchar(255) DEFAULT '',
  `start_year` varchar(10) DEFAULT '',
  `left_year` varchar(10) DEFAULT '',
  `notes` text DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `school_name`, `dept`, `title`, `last_name`, `first_name`, `position`, `address`, `start_year`, `left_year`, `notes`) VALUES
(1, '', '', 'Miss', 'Knowles', 'Maria Ann', '', '', '', '', ''),
(2, '', '', 'Miss', 'Rhodes', 'Louisa', '', '', '', '', ''),
(3, '', '', 'Miss', 'Foster', 'Sarah Elizabeth', '', '', '', '', ''),
(4, '', '', 'Miss', 'Jennings', 'Kate', '', '', '', '', ''),
(5, '', '', 'Mrs', 'Pearson (Knowles)', 'Maria Ann', '', '', '', '', ''),
(6, '', '', 'Miss', 'Davy', 'Sarah Ann', '', '', '', '', ''),
(7, '', '', 'Miss', 'Mathews', 'Sarah Elizabeth', '', '', '', '', ''),
(8, '', '', 'Miss', 'Hirst', 'R', '', '', '', '', ''),
(9, '', '', 'Miss', 'Hirst', 'E', '', '', '', '', ''),
(10, '', '', 'Miss', 'Speight', 'Emily Moorhouse', '', '', '', '', ''),
(11, '', '', 'Miss', 'Brooke', 'Mary Hannah', '', '', '', '', ''),
(12, '', '', 'Miss', 'Coulter', 'Emily Jane', '', '', '', '', ''),
(13, '', '', 'Miss', 'Whitaker', 'Alice', '', '', '', '', ''),
(14, '', '', 'Miss', 'Dennis', 'Henrietta', '', '', '', '', ''),
(15, '', '', 'Miss', 'Carter', 'Sarah', '', '', '', '', ''),
(16, '', '', 'Miss', 'Blackburn', 'Clara', '', '', '', '', ''),
(17, '', '', 'Miss', 'Pickles', 'Emma', '', '', '', '', ''),
(18, '', '', 'Miss', 'Pickard', 'Sarah J', '', '', '', '', ''),
(19, '', '', 'Miss', 'Greenwood', 'Mary Elizabeth', '', '', '', '', ''),
(20, 'Chapel Green Board School', 'Infant', 'Miss', 'Knowles', 'Maria Ann', 'Head Mistress', '', '1877', '', ''),
(21, 'Chapel Green Board School', 'Infant', 'Miss', 'Rhodes', 'Louisa', 'Assistant Mistress', '', '1877', '', ''),
(22, 'Chapel Green Board School', 'Infant', 'Miss', 'Foster', 'Sarah Elizabeth', 'Monitor', '', '1877', '', ''),
(23, 'Chapel Green Board School', 'Infant', 'Miss', 'Jennings', 'Kate', 'Candidate', '', '1878', '', ''),
(24, 'Chapel Green Board School', 'Infant', 'Mrs', 'Pearson (Knowles)', 'Maria Ann', 'Head Mistress', '', '1878', '1878', 'Married James Fletcher Pearson'),
(25, 'Chapel Green Board School', 'Infant', 'Miss', 'Davy', 'Sarah Ann', 'Monitor', '', '1878', '', ''),
(26, 'Chapel Green Board School', 'Infant', 'Miss', 'Mathews', 'Sarah Elizabeth', 'Candidate', '', '1879', '1879', 'Transferred to Mixed department'),
(27, 'Chapel Green Board School', 'Infant', 'Miss', 'Mathews', 'Sarah Elizabeth', 'Head Mistress', '', '1879', '', ''),
(28, 'Chapel Green Board School', 'Infant', 'Miss', 'Foster', 'Sarah Elizabeth', '1st year Pupil Teacher', '', '1879', '', ''),
(29, 'Chapel Green Board School', 'Infant', 'Miss', 'Davy', 'Sarah Ann', 'Candidate', '', '1879', '', ''),
(30, 'Chapel Green Board School', 'Infant', 'Miss', 'Hirst', 'R', 'Assistant Mistress', '', '1879', '', ''),
(31, 'Chapel Green Board School', 'Infant', 'Miss', 'Davy', 'Sarah Ann', 'Monitor', '', '1879', '1879', 'Moved to Ryan Infant School'),
(32, 'Chapel Green Board School', 'Infant', 'Miss', 'Speight', 'Emily Moorhouse', '4th year Pupil Teacher', '', '1879', '', ''),
(33, 'Chapel Green Board School', 'Infant', 'Miss', 'Hirst', 'E', 'Assistant Mistress', '', '1879', '1879', 'Moved to Great Horton School'),
(34, 'Chapel Green Board School', 'Infant', 'Miss', 'Foster', 'Sarah Elizabeth', '3rd year Pupil Teacher', '', '1880', '', ''),
(35, 'Chapel Green Board School', 'Infant', 'Miss', 'Mathews', 'Sarah Elizabeth', 'Head Mistress', '', '1880', '', ''),
(36, 'Chapel Green Board School', 'Infant', 'Miss', 'Speight', 'Emily Moorhouse', '4th year Pupil Teacher', '', '1880', '1880', 'Moved to Darlington Training College'),
(37, 'Chapel Green Board School', 'Infant', 'Miss', 'Brooke', 'Mary Hannah', '', '', '1880', '', 'Temporary assistance'),
(38, 'Chapel Green Board School', 'Infant', 'Miss', 'Brooke', 'Mary Hannah', '', '', '1880', '1880', 'Returned to Great Horton Infants School'),
(39, 'Chapel Green Board School', 'Infant', 'Miss', 'Coulter', 'Emily Jane', 'Monitor', '', '1880', '', 'Previously at Bramley Street Infant School'),
(40, 'Chapel Green Board School', 'Infant', 'Miss', 'Whitaker', 'Alice', 'Assistant Mistress', '', '1880', '', ''),
(41, 'Chapel Green Board School', 'Infant', 'Miss', 'Mathews', 'Sarah Elizabeth', 'Head Mistress', '', '1881', '', ''),
(42, 'Chapel Green Board School', 'Infant', 'Miss', 'Whitaker', 'Alice', 'Assistant Mistress', '', '1881', '', ''),
(43, 'Chapel Green Board School', 'Infant', 'Miss', 'Dennis', 'Henrietta', '1st year Pupil Teacher', '13 Leatham Street', '1881', '', ''),
(44, 'Chapel Green Board School', 'Infant', 'Miss', 'Coulter', 'Emily Jane', '1st year Pupil Teacher', '19 Elizabeth Street, Little Horton', '1881', '', ''),
(45, 'Chapel Green Board School', 'Infant', 'Miss', 'Carter', 'Sarah', 'Head Mistress', '', '1882', '', ''),
(46, 'Chapel Green Board School', 'Infant', 'Miss', 'Whitaker', 'Alice', 'Assistant Mistress', '', '1882', '', ''),
(47, 'Chapel Green Board School', 'Infant', 'Miss', 'Dennis', 'Henrietta', '2nd year Pupil Teacher', '10 Mial Street', '1882', '', ''),
(48, 'Chapel Green Board School', 'Infant', 'Miss', 'Coulter', 'Emily Jane', '2nd year Pupil Teacher', '', '1882', '', ''),
(49, 'Chapel Green Board School', 'Infant', 'Miss', 'Mathews', 'Sarah Elizabeth', 'Head Mistress', '', '1883', '1883', 'Resigned'),
(50, 'Chapel Green Board School', 'Infant', 'Miss', 'Blackburn', 'Clara', 'Head Mistress', '', '1883', '', ''),
(51, 'Chapel Green Board School', 'Infant', 'Miss', 'Coulter', 'Emily Jane', '2nd year Pupil Teacher', '', '1883', '1883', 'Transferred to Ryan Street Girls'),
(52, 'Chapel Green Board School', 'Infant', 'Miss', 'Pickles', 'Emma', 'Monitor', '', '1883', '', ''),
(53, 'Chapel Green Board School', 'Infant', 'Miss', 'Dennis', 'Henrietta', '2nd year Pupil Teacher', '', '1883', '1883', 'Transferred to Princeville Infants'),
(54, 'Chapel Green Board School', 'Infant', 'Miss', 'Pickard', 'Sarah J', 'Monitor', '', '1883', '', ''),
(55, 'Chapel Green Board School', 'Infant', 'Miss', 'Blackburn', 'Clara', 'Head Mistress', '', '1884', '', ''),
(56, 'Chapel Green Board School', 'Infant', 'Miss', 'Pickles', 'Emma', 'Candidate', '10 Sherbourne Road', '1884', '', ''),
(57, 'Chapel Green Board School', 'Infant', 'Miss', 'Pickard', 'Sarah J', 'Candidate', '', '1884', '', ''),
(58, 'Chapel Green Board School', 'Infant', 'Miss', 'Blackburn', 'Clara', 'Head Mistress', '', '1884', '1884', 'Transferred to Tyersal School'),
(59, 'Chapel Green Board School', 'Infant', 'Miss', 'Greenwood', 'Mary Elizabeth', 'Head Mistress', '', '1886', '', ''),
(60, 'Chapel Green Board School', 'Infant', 'Miss', 'Pickles', 'Emma', '4th year Pupil Teacher', '', '1886', '', ''),
(61, 'Chapel Green Board School', 'Infant', 'Miss', 'Pickard', 'Sarah J', '3rd year Pupil Teacher', '', '1886', '', '');

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
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`),
  ADD UNIQUE KEY `department_name` (`department_name`);

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
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`school_id`),
  ADD UNIQUE KEY `school_name` (`school_name`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`school_id`);

--
-- Indexes for table `source`
--
ALTER TABLE `source`
  ADD PRIMARY KEY (`source_id`),
  ADD KEY `school_id` (`school_id`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `source_type_id` (`source_type_id`);

--
-- Indexes for table `sources`
--
ALTER TABLE `sources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `source_pages`
--
ALTER TABLE `source_pages`
  ADD PRIMARY KEY (`page_id`),
  ADD KEY `source_id` (`source_id`),
  ADD KEY `school_id` (`school_id`);

--
-- Indexes for table `source_type`
--
ALTER TABLE `source_type`
  ADD PRIMARY KEY (`source_type_id`),
  ADD UNIQUE KEY `type_name` (`type_name`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `school_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `source`
--
ALTER TABLE `source`
  MODIFY `source_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `sources`
--
ALTER TABLE `sources`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `source_pages`
--
ALTER TABLE `source_pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `source_type`
--
ALTER TABLE `source_type`
  MODIFY `source_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `source`
--
ALTER TABLE `source`
  ADD CONSTRAINT `source_ibfk_1` FOREIGN KEY (`school_id`) REFERENCES `school` (`school_id`),
  ADD CONSTRAINT `source_ibfk_2` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`),
  ADD CONSTRAINT `source_ibfk_3` FOREIGN KEY (`source_type_id`) REFERENCES `source_type` (`source_type_id`);

--
-- Constraints for table `source_pages`
--
ALTER TABLE `source_pages`
  ADD CONSTRAINT `source_pages_ibfk_1` FOREIGN KEY (`source_id`) REFERENCES `source` (`source_id`),
  ADD CONSTRAINT `source_pages_ibfk_2` FOREIGN KEY (`school_id`) REFERENCES `school` (`school_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
