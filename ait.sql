-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 01, 2018 at 12:54 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `cat3_avgs`
--

CREATE TABLE `cat3_avgs` (
  `teacher_id` varchar(16) NOT NULL,
  `t5_avg` int(6) NOT NULL,
  `t5_points_achieved` int(6) NOT NULL,
  `t6_points_achieved` int(6) NOT NULL,
  `t7_avg` int(6) NOT NULL,
  `t7_points_achieved` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cat3_tab5`
--

CREATE TABLE `cat3_tab5` (
  `teacher_id` varchar(16) NOT NULL,
  `class` varchar(32) NOT NULL,
  `subject_taught` varchar(32) NOT NULL,
  `students_present` int(6) NOT NULL,
  `lectures_actually_engaged` int(6) NOT NULL,
  `students_o_roll` int(6) NOT NULL,
  `avg_attendance` int(6) NOT NULL,
  `performance_per_subject` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cat3_tab6`
--

CREATE TABLE `cat3_tab6` (
  `teacher_id` varchar(16) NOT NULL,
  `class` varchar(32) NOT NULL,
  `subject_taught` varchar(32) NOT NULL,
  `institute_passing_percent` int(6) NOT NULL,
  `current_passing_percent` int(6) NOT NULL,
  `points_per_subject` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cat3_tab7`
--

CREATE TABLE `cat3_tab7` (
  `teacher_id` varchar(16) NOT NULL,
  `class` varchar(32) NOT NULL,
  `subject_taught` varchar(32) NOT NULL,
  `total_students` int(6) NOT NULL,
  `review_excellent` int(6) NOT NULL,
  `review_good` int(6) NOT NULL,
  `review_satisfactory` int(6) NOT NULL,
  `review_poor` int(6) NOT NULL,
  `performance` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cat5`
--

CREATE TABLE `cat5` (
  `teacher_id` varchar(16) NOT NULL,
  `orientation_prog_duration` int(8) NOT NULL,
  `orientation_prog_desc` varchar(250) NOT NULL,
  `sttp_duration` int(8) NOT NULL,
  `sttp_desc` varchar(250) NOT NULL,
  `workshop_duration` int(16) NOT NULL,
  `workshop_desc` varchar(250) NOT NULL,
  `refresher_course_duration` int(16) NOT NULL,
  `refresher_course_desc` varchar(250) NOT NULL,
  `fdp_duration` int(16) NOT NULL,
  `fdp_desc` varchar(250) NOT NULL,
  `soft_skillsDP_duration` int(16) NOT NULL,
  `soft_skillsDP_desc` varchar(250) NOT NULL,
  `seminars_duration` int(16) NOT NULL,
  `seminars_desc` varchar(250) NOT NULL,
  `points_achieved` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
