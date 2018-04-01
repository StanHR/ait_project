-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 01, 2018 at 08:22 AM
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
-- Database: `ait`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat1`
--

CREATE TABLE `cat1` (
  `teacher_id` varchar(16) NOT NULL,
  `t2_lesson_planning` varchar(16) NOT NULL,
  `t2_effective_comm` varchar(16) NOT NULL,
  `t2_class_control` varchar(16) NOT NULL,
  `t2_student_involvement` varchar(16) NOT NULL,
  `t2_media_usage` varchar(16) NOT NULL,
  `t2_uniform_coverage` varchar(16) NOT NULL,
  `t2_pracs_tuts` varchar(16) NOT NULL,
  `t2_books_usage` varchar(16) NOT NULL,
  `t2_total_points` int(4) NOT NULL,
  `t3_journal_checking` varchar(16) NOT NULL,
  `t3_profile_record_keeping` varchar(16) NOT NULL,
  `t3_answerbook_assessment` varchar(16) NOT NULL,
  `t3_invigilation` varchar(16) NOT NULL,
  `t3_total_points` int(4) NOT NULL,
  `grand_total` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cat2`
--

CREATE TABLE `cat2` (
  `teacher_id` varchar(16) NOT NULL,
  `cultural_and_sports` varchar(16) NOT NULL,
  `assembly_participation` varchar(16) NOT NULL,
  `inst_academic_and_admin` varchar(16) NOT NULL,
  `dept_academic_and_admin` varchar(16) NOT NULL,
  `seminar_and_workshop` varchar(16) NOT NULL,
  `total_points` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat2`
--

INSERT INTO `cat2` (`teacher_id`, `cultural_and_sports`, `assembly_participation`, `inst_academic_and_admin`, `dept_academic_and_admin`, `seminar_and_workshop`, `total_points`) VALUES
('harshit003', 'excellent', 'good', 'satisfactory', 'good', 'satisfactory', 32);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cat1`
--
ALTER TABLE `cat1`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `cat2`
--
ALTER TABLE `cat2`
  ADD PRIMARY KEY (`teacher_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
