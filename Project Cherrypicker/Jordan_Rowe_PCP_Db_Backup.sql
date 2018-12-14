-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2018 at 02:27 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_cherrypicker`
--

-- --------------------------------------------------------

--
-- Table structure for table `cherries`
--

CREATE TABLE `cherries` (
  `db_id` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `cherry_a1_name` varchar(15) NOT NULL DEFAULT 'Cherry A1',
  `cherry_a1_desc` varchar(50) NOT NULL DEFAULT 'Undefined',
  `cherry_b1_name` varchar(15) NOT NULL DEFAULT 'Cherry B1',
  `cherry_b1_desc` varchar(50) NOT NULL DEFAULT 'Undefined',
  `cherry_b2_name` varchar(15) NOT NULL DEFAULT 'Cherry B2',
  `cherry_b2_desc` varchar(50) NOT NULL DEFAULT 'Undefined',
  `cherry_b3_name` varchar(15) NOT NULL DEFAULT 'Cherry B3',
  `cherry_b3_desc` varchar(50) NOT NULL DEFAULT 'Undefined',
  `cherry_b4_name` varchar(15) NOT NULL DEFAULT 'Cherry B4',
  `cherry_b4_desc` varchar(50) NOT NULL DEFAULT 'Undefined',
  `cherry_c1_name` varchar(15) NOT NULL DEFAULT 'Cherry C1',
  `cherry_c1_desc` varchar(50) NOT NULL DEFAULT 'Undefined',
  `cherry_c2_name` varchar(15) NOT NULL DEFAULT 'Cherry C2',
  `cherry_c2_desc` varchar(50) NOT NULL DEFAULT 'Undefined',
  `cherry_c3_name` varchar(15) NOT NULL DEFAULT 'Cherry C3',
  `cherry_c3_desc` varchar(50) NOT NULL DEFAULT 'Undefined',
  `cherry_c4_name` varchar(15) NOT NULL DEFAULT 'Cherry C4',
  `cherry_c4_desc` varchar(50) NOT NULL DEFAULT 'Undefined',
  `cherry_c5_name` varchar(15) NOT NULL DEFAULT 'Cherry C5',
  `cherry_c5_desc` varchar(50) NOT NULL DEFAULT 'Undefined',
  `cherry_c6_name` varchar(15) NOT NULL DEFAULT 'Cherry C6',
  `cherry_c6_desc` varchar(50) NOT NULL DEFAULT 'Undefined',
  `cherry_c7_name` varchar(15) NOT NULL DEFAULT 'Cherry C7',
  `cherry_c7_desc` varchar(50) NOT NULL DEFAULT 'Undefined',
  `cherry_c8_name` varchar(15) NOT NULL DEFAULT 'Cherry C8',
  `cherry_c8_desc` varchar(50) NOT NULL DEFAULT 'Undefined',
  `cherry_c9_name` varchar(15) NOT NULL DEFAULT 'Cherry C9',
  `cherry_c9_desc` varchar(50) NOT NULL DEFAULT 'Undefined',
  `cherry_c10_name` varchar(15) NOT NULL DEFAULT 'Cherry C10',
  `cherry_c10_desc` varchar(50) NOT NULL DEFAULT 'Undefined',
  `cherry_c11_name` varchar(15) NOT NULL DEFAULT 'Cherry C11',
  `cherry_c11_desc` varchar(50) NOT NULL DEFAULT 'Undefined',
  `cherry_c12_name` varchar(15) NOT NULL DEFAULT 'Cherry C12',
  `cherry_c12_desc` varchar(50) NOT NULL DEFAULT 'Undefined'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cherries`
--

INSERT INTO `cherries` (`db_id`, `subject`, `cherry_a1_name`, `cherry_a1_desc`, `cherry_b1_name`, `cherry_b1_desc`, `cherry_b2_name`, `cherry_b2_desc`, `cherry_b3_name`, `cherry_b3_desc`, `cherry_b4_name`, `cherry_b4_desc`, `cherry_c1_name`, `cherry_c1_desc`, `cherry_c2_name`, `cherry_c2_desc`, `cherry_c3_name`, `cherry_c3_desc`, `cherry_c4_name`, `cherry_c4_desc`, `cherry_c5_name`, `cherry_c5_desc`, `cherry_c6_name`, `cherry_c6_desc`, `cherry_c7_name`, `cherry_c7_desc`, `cherry_c8_name`, `cherry_c8_desc`, `cherry_c9_name`, `cherry_c9_desc`, `cherry_c10_name`, `cherry_c10_desc`, `cherry_c11_name`, `cherry_c11_desc`, `cherry_c12_name`, `cherry_c12_desc`) VALUES
(1, 'Maths - Level 1', 'Cherry A1', 'Undefined', 'Cherry B1', 'Undefined', 'Cherry B2', 'Undefined', 'Cherry B3', 'Undefined', 'Cherry B4', 'Undefined', 'Cherry C1', 'Undefined', 'Cherry C2', 'Undefined', 'Cherry C3', 'Undefined', 'Cherry C4', 'Undefined', 'Cherry C5', 'Undefined', 'Cherry C6', 'Undefined', 'Cherry C7', 'Undefined', 'Cherry C8', 'Undefined', 'Cherry C9', 'Undefined', 'Cherry C10', 'Undefined', 'Cherry C11', 'Undefined', 'Cherry C12', 'Undefined'),
(3, 'Maths - Level 2', 'Cherry A1', 'Undefined', 'Cherry B1', 'Undefined', 'Cherry B2', 'Undefined', 'Cherry B3', 'Undefined', 'Cherry B4', 'Undefined', 'Cherry C1', 'Undefined', 'Cherry C2', 'Undefined', 'Cherry C3', 'Undefined', 'Cherry C4', 'Undefined', 'Cherry C5', 'Undefined', 'Cherry C6', 'Undefined', 'Cherry C7', 'Undefined', 'Cherry C8', 'Undefined', 'Cherry C9', 'Undefined', 'Cherry C10', 'Undefined', 'Cherry C11', 'Undefined', 'Cherry C12', 'Undefined'),
(4, 'Maths - Level 3', 'Cherry A1', 'Undefined', 'Cherry B1', 'Undefined', 'Cherry B2', 'Undefined', 'Cherry B3', 'Undefined', 'Cherry B4', 'Undefined', 'Cherry C1', 'Undefined', 'Cherry C2', 'Undefined', 'Cherry C3', 'Undefined', 'Cherry C4', 'Undefined', 'Cherry C5', 'Undefined', 'Cherry C6', 'Undefined', 'Cherry C7', 'Undefined', 'Cherry C8', 'Undefined', 'Cherry C9', 'Undefined', 'Cherry C10', 'Undefined', 'Cherry C11', 'Undefined', 'Cherry C12', 'Undefined'),
(5, 'English - Level 1', 'Cherry A1', 'Undefined', 'Cherry B1', 'Undefined', 'Cherry B2', 'Undefined', 'Cherry B3', 'Undefined', 'Cherry B4', 'Undefined', 'Cherry C1', 'Undefined', 'Cherry C2', 'Undefined', 'Cherry C3', 'Undefined', 'Cherry C4', 'Undefined', 'Cherry C5', 'Undefined', 'Cherry C6', 'Undefined', 'Cherry C7', 'Undefined', 'Cherry C8', 'Undefined', 'Cherry C9', 'Undefined', 'Cherry C10', 'Undefined', 'Cherry C11', 'Undefined', 'Cherry C12', 'Undefined'),
(6, 'English - Level 2', 'Cherry A1', 'Undefined', 'Cherry B1', 'Undefined', 'Cherry B2', 'Undefined', 'Cherry B3', 'Undefined', 'Cherry B4', 'Undefined', 'Cherry C1', 'Undefined', 'Cherry C2', 'Undefined', 'Cherry C3', 'Undefined', 'Cherry C4', 'Undefined', 'Cherry C5', 'Undefined', 'Cherry C6', 'Undefined', 'Cherry C7', 'Undefined', 'Cherry C8', 'Undefined', 'Cherry C9', 'Undefined', 'Cherry C10', 'Undefined', 'Cherry C11', 'Undefined', 'Cherry C12', 'Undefined'),
(7, 'English - Level 3', 'Cherry A1', 'Undefined', 'Cherry B1', 'Undefined', 'Cherry B2', 'Undefined', 'Cherry B3', 'Undefined', 'Cherry B4', 'Undefined', 'Cherry C1', 'Undefined', 'Cherry C2', 'Undefined', 'Cherry C3', 'Undefined', 'Cherry C4', 'Undefined', 'Cherry C5', 'Undefined', 'Cherry C6', 'Undefined', 'Cherry C7', 'Undefined', 'Cherry C8', 'Undefined', 'Cherry C9', 'Undefined', 'Cherry C10', 'Undefined', 'Cherry C11', 'Undefined', 'Cherry C12', 'Undefined');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `db_id` int(11) NOT NULL,
  `staff_id` varchar(50) NOT NULL,
  `forename` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `number_of_students` int(5) NOT NULL,
  `campus` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `a_cherries_complete` int(3) NOT NULL,
  `b_cherries_complete` int(3) NOT NULL,
  `c_cherries_complete` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`db_id`, `staff_id`, `forename`, `surname`, `course`, `department`, `number_of_students`, `campus`, `level`, `a_cherries_complete`, `b_cherries_complete`, `c_cherries_complete`) VALUES
(1, 'BEN123456789', 'Brian', 'Bentham', 'BSc Applied Computing', 'IT', 30, 'City of Bath College', 5, 12, 14, 19);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `db_id` int(11) NOT NULL,
  `student_id` varchar(20) NOT NULL,
  `forename` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `course` varchar(50) NOT NULL,
  `department` varchar(30) NOT NULL,
  `campus` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  `tutor` varchar(50) NOT NULL,
  `qualification_code` varchar(10) DEFAULT NULL,
  `grade` varchar(10) DEFAULT NULL,
  `test_date` date DEFAULT NULL,
  `cherry_a1` tinyint(1) NOT NULL DEFAULT '0',
  `cherry_b1` tinyint(1) NOT NULL DEFAULT '0',
  `cherry_b2` tinyint(1) NOT NULL DEFAULT '0',
  `cherry_b3` tinyint(1) NOT NULL DEFAULT '0',
  `cherry_b4` tinyint(1) NOT NULL DEFAULT '0',
  `cherry_c1` tinyint(1) NOT NULL DEFAULT '0',
  `cherry_c2` tinyint(1) NOT NULL DEFAULT '0',
  `cherry_c3` tinyint(1) NOT NULL DEFAULT '0',
  `cherry_c4` tinyint(1) NOT NULL DEFAULT '0',
  `cherry_c5` tinyint(1) NOT NULL DEFAULT '0',
  `cherry_c6` tinyint(1) NOT NULL DEFAULT '0',
  `cherry_c7` tinyint(1) NOT NULL DEFAULT '0',
  `cherry_c8` tinyint(1) NOT NULL DEFAULT '0',
  `cherry_c9` tinyint(1) NOT NULL DEFAULT '0',
  `cherry_c10` tinyint(1) NOT NULL DEFAULT '0',
  `cherry_c11` tinyint(1) NOT NULL DEFAULT '0',
  `cherry_c12` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`db_id`, `student_id`, `forename`, `surname`, `dob`, `course`, `department`, `campus`, `level`, `tutor`, `qualification_code`, `grade`, `test_date`, `cherry_a1`, `cherry_b1`, `cherry_b2`, `cherry_b3`, `cherry_b4`, `cherry_c1`, `cherry_c2`, `cherry_c3`, `cherry_c4`, `cherry_c5`, `cherry_c6`, `cherry_c7`, `cherry_c8`, `cherry_c9`, `cherry_c10`, `cherry_c11`, `cherry_c12`) VALUES
(1, 'CAL12345678', 'Samuel', 'Callaghan', '0000-00-00', 'BSc Applied Computing', 'Maths', 'City of Bath College', 2, 'Brain Bentham', '', '', '0000-00-00', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(2, 'CAL12345678', 'Samuel', 'Callaghan', '0000-00-00', 'BSc Applied Computing', 'English', 'City of Bath College', 1, 'Brain Bentham', '', '', '0000-00-00', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(3, 'ROW15150174', 'Jordan', 'Rowe', '0000-00-00', 'BSc Applied Computing', 'Maths', 'City of Bath College', 1, 'Brian Bentham', '', '', '0000-00-00', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(4, 'CAL12345678', 'Samuel', 'Callaghan', '0000-00-00', 'BSc Applied Computing', 'Maths', 'City of Bath College', 2, 'Brain Bentham', '', '', '0000-00-00', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(5, 'CAL12345678', 'Samuel', 'Callaghan', '0000-00-00', 'BSc Applied Computing', 'English', 'City of Bath College', 1, 'Brain Bentham', '', '', '0000-00-00', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(6, 'ROW15150174', 'Jordan', 'Rowe', '0000-00-00', 'BSc Applied Computing', 'Maths', 'City of Bath College', 1, 'Brian Bentham', '', '', '0000-00-00', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(7, 'CAL12345678', 'Samuel', 'Callaghan', '0000-00-00', 'BSc Applied Computing', 'Maths', 'City of Bath College', 2, 'Brain Bentham', '', '', '0000-00-00', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(8, 'CAL12345678', 'Samuel', 'Callaghan', '0000-00-00', 'BSc Applied Computing', 'English', 'City of Bath College', 1, 'Brain Bentham', '', '', '0000-00-00', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(9, 'ROW15150174', 'Jordan', 'Rowe', '0000-00-00', 'BSc Applied Computing', 'Maths', 'City of Bath College', 1, 'Brian Bentham', '', '', '0000-00-00', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(10, 'CAL12345678', 'Samuel', 'Callaghan', '0000-00-00', 'BSc Applied Computing', 'Maths', 'City of Bath College', 2, 'Brain Bentham', '', '', '0000-00-00', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(11, 'CAL12345678', 'Samuel', 'Callaghan', '0000-00-00', 'BSc Applied Computing', 'English', 'City of Bath College', 1, 'Brain Bentham', '', '', '0000-00-00', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(12, 'ROW15150174', 'Jordan', 'Rowe', '0000-00-00', 'BSc Applied Computing', 'Maths', 'City of Bath College', 1, 'Brian Bentham', '', '', '0000-00-00', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(13, 'CAL12345678', 'Samuel', 'Callaghan', '0000-00-00', 'BSc Applied Computing', 'Maths', 'City of Bath College', 2, 'Brain Bentham', '', '', '0000-00-00', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(14, 'CAL12345678', 'Samuel', 'Callaghan', '0000-00-00', 'BSc Applied Computing', 'English', 'City of Bath College', 1, 'Brain Bentham', '', '', '0000-00-00', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(15, 'ROW15150174', 'Jordan', 'Rowe', '0000-00-00', 'BSc Applied Computing', 'Maths', 'City of Bath College', 1, 'Brian Bentham', '', '', '0000-00-00', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(16, 'CAL12345678', 'Samuel', 'Callaghan', '0000-00-00', 'BSc Applied Computing', 'Maths', 'City of Bath College', 2, 'Brain Bentham', '', '', '0000-00-00', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(17, 'CAL12345678', 'Samuel', 'Callaghan', '0000-00-00', 'BSc Applied Computing', 'English', 'City of Bath College', 1, 'Brain Bentham', '', '', '0000-00-00', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(18, 'ROW15150174', 'Jordan', 'Rowe', '0000-00-00', 'BSc Applied Computing', 'Maths', 'City of Bath College', 1, 'Brian Bentham', '', '', '0000-00-00', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(19, 'CAL12345678', 'Samuel', 'Callaghan', '0000-00-00', 'BSc Applied Computing', 'Maths', 'City of Bath College', 2, 'Brain Bentham', '', '', '0000-00-00', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(20, 'CAL12345678', 'Samuel', 'Callaghan', '0000-00-00', 'BSc Applied Computing', 'English', 'City of Bath College', 1, 'Brain Bentham', '', '', '0000-00-00', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(21, 'ROW15150174', 'Jordan', 'Rowe', '0000-00-00', 'BSc Applied Computing', 'Maths', 'City of Bath College', 1, 'Brian Bentham', '', '', '0000-00-00', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(22, 'CAL12345678', 'Samuel', 'Callaghan', '0000-00-00', 'BSc Applied Computing', 'Maths', 'City of Bath College', 2, 'Brain Bentham', '', '', '0000-00-00', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(23, 'CAL12345678', 'Samuel', 'Callaghan', '0000-00-00', 'BSc Applied Computing', 'English', 'City of Bath College', 1, 'Brain Bentham', '', '', '0000-00-00', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(24, 'ROW15150174', 'Jordan', 'Rowe', '0000-00-00', 'BSc Applied Computing', 'Maths', 'City of Bath College', 1, 'Brian Bentham', '', '', '0000-00-00', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(25, 'CAL12345678', 'Samuel', 'Callaghan', '0000-00-00', 'BSc Applied Computing', 'Maths', 'City of Bath College', 2, 'Brain Bentham', '', '', '0000-00-00', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(26, 'CAL12345678', 'Samuel', 'Callaghan', '0000-00-00', 'BSc Applied Computing', 'English', 'City of Bath College', 1, 'Brain Bentham', '', '', '0000-00-00', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(27, 'ROW15150174', 'Jordan', 'Rowe', '0000-00-00', 'BSc Applied Computing', 'Maths', 'City of Bath College', 1, 'Brian Bentham', '', '', '0000-00-00', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(28, 'CAL12345678', 'Samuel', 'Callaghan', '0000-00-00', 'BSc Applied Computing', 'Maths', 'City of Bath College', 2, 'Brain Bentham', '', '', '0000-00-00', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(29, 'CAL12345678', 'Samuel', 'Callaghan', '0000-00-00', 'BSc Applied Computing', 'English', 'City of Bath College', 1, 'Brain Bentham', '', '', '0000-00-00', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(30, 'ROW15150174', 'Jordan', 'Rowe', '0000-00-00', 'BSc Applied Computing', 'Maths', 'City of Bath College', 1, 'Brian Bentham', '', '', '0000-00-00', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(31, 'CAL12345678', 'Samuel', 'Callaghan', '0000-00-00', 'BSc Applied Computing', 'Maths', 'City of Bath College', 2, 'Brain Bentham', '', '', '0000-00-00', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(32, 'CAL12345678', 'Samuel', 'Callaghan', '0000-00-00', 'BSc Applied Computing', 'English', 'City of Bath College', 1, 'Brain Bentham', '', '', '0000-00-00', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(33, 'ROW15150174', 'Jordan', 'Rowe', '0000-00-00', 'BSc Applied Computing', 'Maths', 'City of Bath College', 1, 'Brian Bentham', '', '', '0000-00-00', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_profile`
--

CREATE TABLE `student_profile` (
  `db_id` int(11) NOT NULL,
  `student_id` varchar(20) NOT NULL,
  `qualification_code` varchar(20) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `test_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_profile`
--

INSERT INTO `student_profile` (`db_id`, `student_id`, `qualification_code`, `grade`, `test_date`) VALUES
(1, 'ROW15150174', 'QC1', 'B', '2018-04-25'),
(2, 'HAN12345678', 'QC2', 'E', '2018-04-25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cherries`
--
ALTER TABLE `cherries`
  ADD PRIMARY KEY (`db_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`db_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`db_id`);

--
-- Indexes for table `student_profile`
--
ALTER TABLE `student_profile`
  ADD PRIMARY KEY (`db_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cherries`
--
ALTER TABLE `cherries`
  MODIFY `db_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `db_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `db_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `student_profile`
--
ALTER TABLE `student_profile`
  MODIFY `db_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
