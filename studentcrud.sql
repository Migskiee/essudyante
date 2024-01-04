-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2023 at 01:48 PM
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
-- Database: `studentcrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(100) NOT NULL,
  `reference_id` int(255) NOT NULL,
  `input_name` varchar(255) NOT NULL,
  `input_studentnum` varchar(255) NOT NULL,
  `input_schoolyear` varchar(255) NOT NULL,
  `input_semester` varchar(255) NOT NULL,
  `input_periods` varchar(255) NOT NULL,
  `input_course` varchar(255) NOT NULL,
  `input_section` varchar(255) NOT NULL,
  `DC_1` varchar(255) NOT NULL,
  `DC_2` varchar(255) NOT NULL,
  `DC_3` varchar(255) NOT NULL,
  `DC_4` varchar(255) NOT NULL,
  `DC_5` varchar(255) NOT NULL,
  `DC_6` varchar(255) NOT NULL,
  `DC_7` varchar(255) NOT NULL,
  `DC_8` varchar(255) NOT NULL,
  `DC_9` varchar(255) NOT NULL,
  `DC_10` varchar(255) NOT NULL,
  `DC_11` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `reference_id`, `input_name`, `input_studentnum`, `input_schoolyear`, `input_semester`, `input_periods`, `input_course`, `input_section`, `DC_1`, `DC_2`, `DC_3`, `DC_4`, `DC_5`, `DC_6`, `DC_7`, `DC_8`, `DC_9`, `DC_10`, `DC_11`) VALUES
(25, 812485, 'BALDADO, JOSE MIGUEL BASA', '22-12123', '2022-2023', '1ST SEMESTER', 'FINALS', 'BS in computer Engineering', '2-A', 'READINGS IN PHILIPPINE HISTORY', 'ETHICS', 'CALCULUS 1', 'CALCULUS 2', 'PHYSICS', 'GREAT BOOKS', 'ECONOMICS', 'MATHEMATICS IN THE MODERN WORLD', 'PLD', 'OOP', 'DSA');

-- --------------------------------------------------------

--
-- Table structure for table `applications_record`
--

CREATE TABLE `applications_record` (
  `id` int(255) NOT NULL,
  `reference_id` varchar(255) NOT NULL,
  `output_name` varchar(255) NOT NULL,
  `output_studentnum` varchar(255) NOT NULL,
  `output_schoolyear` varchar(255) NOT NULL,
  `output_semester` varchar(255) NOT NULL,
  `output_periods` varchar(255) NOT NULL,
  `output_course` varchar(255) NOT NULL,
  `output_section` varchar(255) NOT NULL,
  `DC_1` varchar(255) NOT NULL,
  `DC_2` varchar(255) NOT NULL,
  `DC_3` varchar(255) NOT NULL,
  `DC_4` varchar(255) NOT NULL,
  `DC_5` varchar(255) NOT NULL,
  `DC_6` varchar(255) NOT NULL,
  `DC_7` varchar(255) NOT NULL,
  `DC_8` varchar(255) NOT NULL,
  `DC_9` varchar(255) NOT NULL,
  `DC_10` varchar(255) NOT NULL,
  `DC_11` varchar(255) NOT NULL,
  `G_1` varchar(255) NOT NULL,
  `G_2` varchar(255) NOT NULL,
  `G_3` varchar(255) NOT NULL,
  `G_4` varchar(255) NOT NULL,
  `G_5` varchar(255) NOT NULL,
  `G_6` varchar(255) NOT NULL,
  `G_7` varchar(255) NOT NULL,
  `G_8` varchar(255) NOT NULL,
  `G_9` varchar(255) NOT NULL,
  `G_10` varchar(255) NOT NULL,
  `G_11` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applications_record`
--

INSERT INTO `applications_record` (`id`, `reference_id`, `output_name`, `output_studentnum`, `output_schoolyear`, `output_semester`, `output_periods`, `output_course`, `output_section`, `DC_1`, `DC_2`, `DC_3`, `DC_4`, `DC_5`, `DC_6`, `DC_7`, `DC_8`, `DC_9`, `DC_10`, `DC_11`, `G_1`, `G_2`, `G_3`, `G_4`, `G_5`, `G_6`, `G_7`, `G_8`, `G_9`, `G_10`, `G_11`) VALUES
(5, '812485', 'BALDADO, JOSE MIGUEL BASA', '22-12123', '2022-2023', '1ST SEMESTER', 'FINALS', 'BS in computer Engineering', '2-A', 'READINGS IN PHILIPPINE HISTORY', 'ETHICS', 'CALCULUS 1', 'CALCULUS 2', 'PHYSICS', 'GREAT BOOKS', 'ECONOMICS', 'MATHEMATICS IN THE MODERN WORLD', 'PLD', 'OOP', 'DSA', '2', '3', '1', '3.1', '2.1', '1.2', '3.2', '1.2', '2.13', '2.5', '2.7');

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `studentnum` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'user',
  `COGinput` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`id`, `user_id`, `name`, `studentnum`, `password`, `usertype`, `COGinput`) VALUES
(1, 123, 'ADMIN', 'ADMIN', 'ADMIN', 'admin', ''),
(12, 812485, 'JOSE_MIGUEL_BASA_BALDADO', '22-12123', '1234', 'user', ''),
(13, 957, 'BALDAD_RAFAEL_JOSHUA_BASA', '22-22123', '1234', 'user', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applications_record`
--
ALTER TABLE `applications_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `applications_record`
--
ALTER TABLE `applications_record`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `studentinfo`
--
ALTER TABLE `studentinfo`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
