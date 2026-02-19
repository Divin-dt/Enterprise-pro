-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2026 at 11:37 AM
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
-- Database: `sources`
--

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
(38, 'Plan of Chapel Green Church School', 5, NULL, 4, NULL, NULL, NULL, NULL),
(39, 'Infant School Log Book 1877 - 1905', 1, 1, 1, 'Not available', NULL, 1877, 1905),
(40, 'Infant School Log Book 1877 - 1905', 2, 1, 1, 'Not available', NULL, 1877, 1905),
(41, 'Infant School Log Book 1905 - 1939', NULL, 1, 1, 'Not available', NULL, 1905, 1939),
(42, 'Infant School Log Book 1905 - 1939', NULL, 1, 1, 'Not available', NULL, 1905, 1939),
(43, 'Infant School Log Book 1939 - 1969', 3, 1, 1, NULL, NULL, 1939, 1969),
(44, 'Infant School Log Book 1969 - 1973', 3, 1, 1, NULL, NULL, 1969, 1973),
(45, 'Infant Admission Register Sep 1943 - Jan 1954', 3, 1, 2, NULL, NULL, 1943, 1954),
(46, 'Infant Admission Register Sep 1954 - Jul 1965', 3, 1, 2, NULL, NULL, 1954, 1965),
(47, 'Infant Admission Register Sep 1965 - Jan 1973', 3, 1, 2, NULL, NULL, 1965, 1973),
(48, 'Photos - May day celebrations', 3, 1, 3, NULL, NULL, NULL, NULL),
(49, 'Junior School Log Book 1877 - 1910', 1, 2, 1, 'Not available', NULL, 1877, 1910),
(50, 'Junior School Log Book 1877 - 1910', 2, 2, 1, 'Not available', NULL, 1877, 1910),
(51, 'Junior School Log Book 1910 - 1933', NULL, 2, 1, 'Not available', NULL, 1910, 1933),
(52, 'Junior School Log Book 1933 - 1964', 3, 2, 1, NULL, NULL, 1933, 1964),
(53, 'Junior Admission Register Jan 1894 - Feb 1901', 2, 2, 2, NULL, NULL, 1894, 1901),
(54, 'Junior Admission Register Apr 1906 - Sep 1911', 3, 2, 2, NULL, NULL, 1906, 1911),
(55, 'Junior Admission Register Aug 1911 - Jul 1917', 3, 2, 2, NULL, NULL, 1911, 1917),
(56, 'Senior Admission Register Jul 1901 - Jul 1928', 3, 3, 2, NULL, NULL, 1901, 1928),
(57, 'Junior Admission Register Jan Aug 1928 - Jan 1944', 3, 2, 2, NULL, NULL, 1928, 1944),
(58, 'Junior Admission Register Mar 1944 - Feb 1954', 3, 2, 2, NULL, NULL, 1944, 1954),
(59, 'Junior Admission Register Mar 1954 - Jan 1963', 3, 2, 2, NULL, NULL, 1954, 1963),
(60, 'Junior Admission Register Sep 1971 - Sep 1973', 3, 2, 2, NULL, NULL, 1971, 1973),
(61, 'Punishment book 1902 - 1965', 3, 2, 6, NULL, NULL, 1902, 1965),
(62, 'Miss Teal\'s scapbook 1931 - 1952', 3, 2, 3, NULL, NULL, 1931, 1952),
(63, 'Miss Teal\'s scrapbook tour to Northern Ireland 1949', 3, 2, 3, NULL, NULL, 1949, 1949),
(64, 'Miss Teal\'s scrapbook tour to London 1950 and Bournemouth 1851', 3, 2, 3, NULL, NULL, 1950, 1951),
(65, 'Photograph album circa 1955-56', 3, 2, 3, NULL, NULL, 1955, 1956),
(66, 'Miss Leach/Mrs Emmerson\'s album', 3, 2, 3, NULL, NULL, NULL, NULL),
(67, 'Miscellaneous pictures', 3, 2, 3, NULL, NULL, NULL, NULL),
(68, 'Marshfield School Magazine 1926', 3, 2, 3, NULL, NULL, 1926, 1926),
(69, 'Extracts from Marshfield Infant Log book 1905 - 1936', 3, 2, 3, NULL, NULL, 1905, 1936),
(70, 'Proposed plan of Junior and Senior Mixed School', 3, 2, 4, NULL, NULL, NULL, NULL),
(71, 'Plan for new Infant School', 3, 1, 4, NULL, NULL, NULL, NULL),
(72, 'Plan for new Thornton Lane Board School', 2, NULL, 4, NULL, NULL, NULL, NULL),
(73, 'Thornton Lane School opening', 2, NULL, 7, NULL, NULL, NULL, NULL),
(74, 'Extracts form Bradford School Board Minutes 1877-78', 4, NULL, 5, NULL, NULL, 1877, 1878),
(75, 'Plan of Chapel Green Board School', 1, NULL, 4, NULL, NULL, NULL, NULL),
(76, 'Plan of Chapel Green Church School', 5, NULL, 4, NULL, NULL, NULL, NULL),
(77, 'Infant School Log Book 1877 - 1905', 1, 1, 1, 'Not available', NULL, 1877, 1905),
(78, 'Infant School Log Book 1877 - 1905', 2, 1, 1, 'Not available', NULL, 1877, 1905),
(79, 'Infant School Log Book 1905 - 1939', NULL, 1, 1, 'Not available', NULL, 1905, 1939),
(80, 'Infant School Log Book 1905 - 1939', NULL, 1, 1, 'Not available', NULL, 1905, 1939),
(81, 'Infant School Log Book 1939 - 1969', 3, 1, 1, NULL, NULL, 1939, 1969),
(82, 'Infant School Log Book 1969 - 1973', 3, 1, 1, NULL, NULL, 1969, 1973),
(83, 'Infant Admission Register Sep 1943 - Jan 1954', 3, 1, 2, NULL, NULL, 1943, 1954),
(84, 'Infant Admission Register Sep 1954 - Jul 1965', 3, 1, 2, NULL, NULL, 1954, 1965),
(85, 'Infant Admission Register Sep 1965 - Jan 1973', 3, 1, 2, NULL, NULL, 1965, 1973),
(86, 'Photos - May day celebrations', 3, 1, 3, NULL, NULL, NULL, NULL),
(87, 'Junior School Log Book 1877 - 1910', 1, 2, 1, 'Not available', NULL, 1877, 1910),
(88, 'Junior School Log Book 1877 - 1910', 2, 2, 1, 'Not available', NULL, 1877, 1910),
(89, 'Junior School Log Book 1910 - 1933', NULL, 2, 1, 'Not available', NULL, 1910, 1933),
(90, 'Junior School Log Book 1933 - 1964', 3, 2, 1, NULL, NULL, 1933, 1964),
(91, 'Junior Admission Register Jan 1894 - Feb 1901', 2, 2, 2, NULL, NULL, 1894, 1901),
(92, 'Junior Admission Register Apr 1906 - Sep 1911', 3, 2, 2, NULL, NULL, 1906, 1911),
(93, 'Junior Admission Register Aug 1911 - Jul 1917', 3, 2, 2, NULL, NULL, 1911, 1917),
(94, 'Senior Admission Register Jul 1901 - Jul 1928', 3, 3, 2, NULL, NULL, 1901, 1928),
(95, 'Junior Admission Register Jan Aug 1928 - Jan 1944', 3, 2, 2, NULL, NULL, 1928, 1944),
(96, 'Junior Admission Register Mar 1944 - Feb 1954', 3, 2, 2, NULL, NULL, 1944, 1954),
(97, 'Junior Admission Register Mar 1954 - Jan 1963', 3, 2, 2, NULL, NULL, 1954, 1963),
(98, 'Junior Admission Register Sep 1971 - Sep 1973', 3, 2, 2, NULL, NULL, 1971, 1973),
(99, 'Punishment book 1902 - 1965', 3, 2, 6, NULL, NULL, 1902, 1965),
(100, 'Miss Teal\'s scapbook 1931 - 1952', 3, 2, 3, NULL, NULL, 1931, 1952),
(101, 'Miss Teal\'s scrapbook tour to Northern Ireland 1949', 3, 2, 3, NULL, NULL, 1949, 1949),
(102, 'Miss Teal\'s scrapbook tour to London 1950 and Bournemouth 1851', 3, 2, 3, NULL, NULL, 1950, 1951),
(103, 'Photograph album circa 1955-56', 3, 2, 3, NULL, NULL, 1955, 1956),
(104, 'Miss Leach/Mrs Emmerson\'s album', 3, 2, 3, NULL, NULL, NULL, NULL),
(105, 'Miscellaneous pictures', 3, 2, 3, NULL, NULL, NULL, NULL),
(106, 'Marshfield School Magazine 1926', 3, 2, 3, NULL, NULL, 1926, 1926),
(107, 'Extracts from Marshfield Infant Log book 1905 - 1936', 3, 2, 3, NULL, NULL, 1905, 1936),
(108, 'Proposed plan of Junior and Senior Mixed School', 3, 2, 4, NULL, NULL, NULL, NULL),
(109, 'Plan for new Infant School', 3, 1, 4, NULL, NULL, NULL, NULL),
(110, 'Plan for new Thornton Lane Board School', 2, NULL, 4, NULL, NULL, NULL, NULL),
(111, 'Thornton Lane School opening', 2, NULL, 7, NULL, NULL, NULL, NULL),
(112, 'Extracts form Bradford School Board Minutes 1877-78', 4, NULL, 5, NULL, NULL, 1877, 1878),
(113, 'Plan of Chapel Green Board School', 1, NULL, 4, NULL, NULL, NULL, NULL),
(114, 'Plan of Chapel Green Church School', 5, NULL, 4, NULL, NULL, NULL, NULL),
(115, 'Infant School Log Book 1877 - 1905', 1, 1, 1, 'Not available', NULL, 1877, 1905),
(116, 'Infant School Log Book 1877 - 1905', 2, 1, 1, 'Not available', NULL, 1877, 1905),
(117, 'Infant School Log Book 1905 - 1939', NULL, 1, 1, 'Not available', NULL, 1905, 1939),
(118, 'Infant School Log Book 1905 - 1939', NULL, 1, 1, 'Not available', NULL, 1905, 1939),
(119, 'Infant School Log Book 1939 - 1969', 3, 1, 1, NULL, NULL, 1939, 1969),
(120, 'Infant School Log Book 1969 - 1973', 3, 1, 1, NULL, NULL, 1969, 1973),
(121, 'Infant Admission Register Sep 1943 - Jan 1954', 3, 1, 2, NULL, NULL, 1943, 1954),
(122, 'Infant Admission Register Sep 1954 - Jul 1965', 3, 1, 2, NULL, NULL, 1954, 1965),
(123, 'Infant Admission Register Sep 1965 - Jan 1973', 3, 1, 2, NULL, NULL, 1965, 1973),
(124, 'Photos - May day celebrations', 3, 1, 3, NULL, NULL, NULL, NULL),
(125, 'Junior School Log Book 1877 - 1910', 1, 2, 1, 'Not available', NULL, 1877, 1910),
(126, 'Junior School Log Book 1877 - 1910', 2, 2, 1, 'Not available', NULL, 1877, 1910),
(127, 'Junior School Log Book 1910 - 1933', NULL, 2, 1, 'Not available', NULL, 1910, 1933),
(128, 'Junior School Log Book 1933 - 1964', 3, 2, 1, NULL, NULL, 1933, 1964),
(129, 'Junior Admission Register Jan 1894 - Feb 1901', 2, 2, 2, NULL, NULL, 1894, 1901),
(130, 'Junior Admission Register Apr 1906 - Sep 1911', 3, 2, 2, NULL, NULL, 1906, 1911),
(131, 'Junior Admission Register Aug 1911 - Jul 1917', 3, 2, 2, NULL, NULL, 1911, 1917),
(132, 'Senior Admission Register Jul 1901 - Jul 1928', 3, 3, 2, NULL, NULL, 1901, 1928),
(133, 'Junior Admission Register Jan Aug 1928 - Jan 1944', 3, 2, 2, NULL, NULL, 1928, 1944),
(134, 'Junior Admission Register Mar 1944 - Feb 1954', 3, 2, 2, NULL, NULL, 1944, 1954),
(135, 'Junior Admission Register Mar 1954 - Jan 1963', 3, 2, 2, NULL, NULL, 1954, 1963),
(136, 'Junior Admission Register Sep 1971 - Sep 1973', 3, 2, 2, NULL, NULL, 1971, 1973),
(137, 'Punishment book 1902 - 1965', 3, 2, 6, NULL, NULL, 1902, 1965),
(138, 'Miss Teal\'s scapbook 1931 - 1952', 3, 2, 3, NULL, NULL, 1931, 1952),
(139, 'Miss Teal\'s scrapbook tour to Northern Ireland 1949', 3, 2, 3, NULL, NULL, 1949, 1949),
(140, 'Miss Teal\'s scrapbook tour to London 1950 and Bournemouth 1851', 3, 2, 3, NULL, NULL, 1950, 1951),
(141, 'Photograph album circa 1955-56', 3, 2, 3, NULL, NULL, 1955, 1956),
(142, 'Miss Leach/Mrs Emmerson\'s album', 3, 2, 3, NULL, NULL, NULL, NULL),
(143, 'Miscellaneous pictures', 3, 2, 3, NULL, NULL, NULL, NULL),
(144, 'Marshfield School Magazine 1926', 3, 2, 3, NULL, NULL, 1926, 1926),
(145, 'Extracts from Marshfield Infant Log book 1905 - 1936', 3, 2, 3, NULL, NULL, 1905, 1936),
(146, 'Proposed plan of Junior and Senior Mixed School', 3, 2, 4, NULL, NULL, NULL, NULL),
(147, 'Plan for new Infant School', 3, 1, 4, NULL, NULL, NULL, NULL),
(148, 'Plan for new Thornton Lane Board School', 2, NULL, 4, NULL, NULL, NULL, NULL),
(149, 'Thornton Lane School opening', 2, NULL, 7, NULL, NULL, NULL, NULL),
(150, 'Extracts form Bradford School Board Minutes 1877-78', 4, NULL, 5, NULL, NULL, 1877, 1878),
(151, 'Plan of Chapel Green Board School', 1, NULL, 4, NULL, NULL, NULL, NULL),
(152, 'Plan of Chapel Green Church School', 5, NULL, 4, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `source`
--
ALTER TABLE `source`
  ADD PRIMARY KEY (`source_id`),
  ADD KEY `school_id` (`school_id`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `source_type_id` (`source_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `source`
--
ALTER TABLE `source`
  MODIFY `source_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
