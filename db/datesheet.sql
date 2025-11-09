-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2023 at 01:08 PM
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
-- Database: `datesheet`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `course_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_code`, `course_name`) VALUES
(3, 'ENG101', 'English Comprehension'),
(6, 'PAK301', 'Pakistan Studies'),
(7, 'ISL202', 'Islamic Studies'),
(8, 'CS201', 'Introduction to Programming'),
(9, 'CS302', 'Digital Logic Design'),
(10, 'ENG201', 'Business and Technical English Writing'),
(11, 'MTH301', 'Calculus II'),
(12, 'MTH104', 'Sets and Logic'),
(13, 'CS201P', 'Introduction to Programming (Practical)'),
(15, 'MTH101', 'Calculus And Analytical Geometry'),
(16, 'CS302P', 'Digital Logic Design (Practical)	'),
(17, 'CS304', 'Object Oriented Programming'),
(18, 'CS403', 'Database Management Systems'),
(19, 'CS601', 'Data Communication'),
(20, 'MTH202', 'Discrete Mathematics'),
(21, 'MGT301', 'Principles of Marketing'),
(22, 'CS301', 'Data Structures'),
(23, 'CS401', 'Computer Architecture and Assembly Language Programming'),
(24, 'CS504', 'Software Engineering - I'),
(25, 'CS610', 'Computer Networks'),
(26, 'MGT501', 'Human Resource Management'),
(27, 'CS402', 'Theory of Automata'),
(28, 'CS502', 'Fundamentals of Algorithms'),
(29, 'MCM301', 'Communication skills'),
(30, 'MTH401', 'Differential Equations'),
(31, 'STA301', 'Statistics and Probability'),
(32, 'CS604', 'Operating Systems'),
(33, 'CS606', 'Compiler Construction'),
(34, 'MTH501', 'Linear Algebra'),
(35, 'CS508', 'Modern Programming Languages'),
(36, 'CS602', 'Computer Graphics'),
(37, 'CS501', 'Advance Computer Architecture'),
(38, 'CS506', 'Web Design and Development'),
(39, 'CS609', 'System Programming'),
(40, 'CS611', 'Software Quality Engineering'),
(41, 'MGT502', 'Organizational Behaviour'),
(42, 'CS607', 'Artificial Intelligence'),
(43, 'CS614', 'Data Warehousing'),
(44, 'CS625', 'Professional Practices'),
(45, 'CS607P', 'Artificial Intelligence (Practical)');

-- --------------------------------------------------------

--
-- Table structure for table `exam_type`
--

CREATE TABLE `exam_type` (
  `type_id` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam_type`
--

INSERT INTO `exam_type` (`type_id`, `start_date`, `end_date`, `status`) VALUES
(' Fall-2023', '2023-10-14', '2023-10-20', 'complete'),
(' Spring-2023', '2023-01-11', '2023-01-25', 'complete');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `alias` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `username`, `alias`, `password`, `email`, `designation`) VALUES
(1, 'Teacher 1', 'fac', '1234', 'facultyw@gmail.com', 'Assistance Professor'),
(2, 'faculty1 ', 'fac1', '1234', 'manager1@gmail.com', 'Assistance Professor'),
(3, 'faculty2 ', 'fc2', '1234', 'f22@gmail.com', 'Asociate Professor'),
(4, 'faculty3 ', 'fc3', '1234', 'fc3@gmail.com', 'Lecturar'),
(5, 'faculty4 ', 'fc4', '1234', 'fc4@gmail.com', ' Professor'),
(6, 'faculty5 ', 'fc5', '1234', 'fc5@gmail.com', 'Assistance Professor'),
(7, 'faculty6 ', 'fc6', '1234', 'fc6@gmail.com', 'Assistance Professor'),
(8, 'faculty7 ', 'fc7', '1234', 'fc7@gmail.com', 'Asociate Professor'),
(9, 'faculty8 ', 'fc8', '1234', 'fc8@gmail.com', 'Lecturar'),
(10, 'faculty9 ', 'fc9', '1234', 'fc9@gmail.com', ' Professor'),
(11, 'faculty10 ', 'fc10', '1234', 'fc10@gmail.com', 'Assistance Professor'),
(12, 'faculty11 ', 'fc11', '1234', 'fc11@gmail.com', 'Lecturar'),
(13, 'faculty12 ', 'fc12', '1234', 'fc12@gmail.com', 'Lecturar'),
(14, 'faculty13 ', 'fc13', '1234', 'fc13@gmail.com', 'Asociate Professor'),
(15, 'faculty14 ', 'fc14', '1234', 'fc14@gmail.com', 'Assistance Professor'),
(16, 'faculty16 ', 'fc16', '1234', 'fc16@gmail.com', 'Assistance Professor'),
(17, 'faculty17 ', 'fc17', '1234', 'fc17@gmail.com', ' Professor'),
(18, 'faculty18 ', 'fc18', '1234', 'fc18@gmail.com', 'Asociate Professor'),
(19, 'faculty19 ', 'fc19', '1234', 'fc19@gmail.com', 'Lecturar'),
(20, 'faculty20 ', 'fc20', '1234', 'fc20@gmail.com', 'Asociate Professor'),
(21, 'faculty21 ', 'fc21', '1234', 'fc21@gmail.com', ' Professor');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id` int(11) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `prerequisit` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `faculty_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `course_code`, `title`, `prerequisit`, `semester`, `faculty_id`) VALUES
(24, 'CS101', 'introduction to computing', 'no', 'Semester1', 1),
(25, 'MTH101', 'Calculus And Analytical Geometry', 'no', 'Semester1', 1),
(26, 'ENG101', 'English Comprehension', 'no', 'Semester1', 2),
(27, 'PAK301', 'Pakistan Studies', 'no', 'Semester1', 2),
(28, 'ISL202', 'Islamic Studies', 'no', 'Semester1', 3),
(30, 'CS302', 'Digital Logic Design', 'no', 'Semester2', 3),
(31, 'ENG201', 'Business and Technical English Writing', 'ENG101', 'Semester2', 4),
(32, 'MTH301', 'Calculus II', 'MTH101', 'Semester2', 4),
(33, 'CS201', 'Introduction to Programming', 'CS101', 'Semester2', 5),
(34, 'MTH104', 'Sets and Logic', 'no', 'Semester2', 5),
(35, 'CS302P', 'Digital Logic Design (Practical)	', 'no', 'Semester2', 7),
(37, 'CS304', 'Object Oriented Programming', 'CS201', 'Semester3', 6),
(38, 'CS403', 'Database Management Systems', 'no', 'Semester3', 6),
(39, 'CS601', 'Data Communication', 'no', 'Semester3', 7),
(42, 'MTH202', 'Discrete Mathematics', 'no', 'Semester3', 8),
(43, 'MGT301', 'Principles of Marketing', 'no', 'Semester3', 8),
(44, 'CS301', 'Data Structures', 'no', 'Semester4', 8),
(45, 'CS401', 'Computer Architecture and Assembly Language Progra', 'no', 'Semester4', 10),
(46, 'CS504', 'Software Engineering - I', 'no', 'Semester4', 10),
(47, 'CS610', 'Computer Networks', 'CS601', 'Semester4', 11),
(48, 'MGT501', 'Human Resource Management', 'no', 'Semester4', 11),
(49, 'CS402', 'Theory of Automata', 'no', 'Semester5', 12),
(50, 'CS502', 'Fundamentals of Algorithms', 'CS301', 'Semester5', 13),
(51, 'MCM301', 'Communication skills', 'no', 'Semester5', 12),
(52, 'MTH401', 'Differential Equations', 'no', 'Semester5', 13),
(53, 'STA301', 'Statistics and Probability', 'no', 'Semester5', 14),
(54, 'CS604', 'Operating Systems', 'no', 'Semester6', 14),
(55, 'CS606', 'Compiler Construction', 'CS402', 'Semester6', 15),
(56, 'MTH501', 'Linear Algebra', 'no', 'Semester6', 15),
(57, 'CS508', 'Modern Programming Languages', 'no', 'Semester6', 16),
(58, 'CS602', 'Computer Graphics', 'no', 'Semester6', 16),
(59, 'CS501', 'Advance Computer Architecture', 'no', 'Semester7', 17),
(60, 'CS506', 'Web Design and Development', 'no', 'Semester7', 18),
(61, 'CS609', 'System Programming', 'no', 'Semester7', 18),
(62, 'CS611', 'Software Quality Engineering', 'no', 'Semester7', 18),
(63, 'MGT502', 'Organizational Behaviour', 'no', 'Semester7', 19),
(64, 'CS607', 'Artificial Intelligence', 'no', 'Semester8', 20),
(65, 'CS614', 'Data Warehousing', 'no', 'Semester8', 20),
(66, 'CS625', 'Professional Practices', 'no', 'Semester8', 21),
(67, 'CS607P', 'Artificial Intelligence (Practical)', 'no', 'Semester8', 21),
(68, 'CS609', 'System Programming', 'CS607P', 'Semester3', 0);

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `semester_id` int(11) NOT NULL,
  `semester_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`semester_id`, `semester_name`) VALUES
(13, 'Semester1'),
(2, 'Semester2'),
(3, 'Semester3'),
(4, 'Semester4'),
(5, 'Semester5'),
(6, 'Semester6'),
(7, 'Semester7'),
(9, 'Semester8');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `username`, `first_name`, `last_name`, `password`, `email`, `semester`, `gender`, `address`, `phone`) VALUES
(2, 'student1 ', 'ali', 'khan', '1234', 'sa@gmail.com', ' ', 'female', 'lahore', 3469809989),
(3, 'student2 ', 'asif ', 'khan', '123', 'asif@gmail.com', 'semester1', 'male', 'lahore', 3469809989),
(4, 'student3 ', 'adil', 'khan', '1234', 'adil@gmail.com', 'semester1', 'male', 'lahore', 3469809989),
(6, 'student4 ', 'subhan', 'ali', '1234', 'qqqq@gmail.com', 'semester1', 'male', 'lahore', 3469809989),
(7, 'student20 ', 'zaid', 'khan', '1234', 'zaid@gmail.com', 'semester2', 'male', 'lahore', 3469809989),
(8, 'student21 ', 'sajid', 'khan', '1234', 'sajid@gmail.com', 'semester2', 'male', 'lahore', 3469809989),
(9, 'student22 ', 'zakir', 'ali', '1234', 'zakir@gmail.com', 'semester2', 'male', 'lahore', 3469809989),
(10, 'student23 ', 'fida', 'ali', '1234', 'fida@gmail.com', 'semester2', 'male', 'lahore', 3469809989),
(11, 'student24 ', 'jahan', 'ali', '1234', 'jahan@gmail.com', 'semester2', 'male', 'lahore', 3469809989),
(12, 'student25 ', 'hasher', 'ali', '1234', 'hasher@gmail.com', 'semester2', 'male', 'lahore', 3469809989),
(13, 'student30 ', 'zubair', 'ali', '1234', 'zubair@gmail.com', 'semester3', 'male', 'lahore', 3469809989),
(14, 'student31 ', 'dilawar', 'khan', '1234', 'dilawar@gmail.com', 'semester3', 'male', 'lahore', 3469809989),
(15, 'student32 ', 'amad', 'ali', '1234', 'amad@gmail.com', 'semester3', 'male', 'lahore', 3469809989),
(16, 'student33 ', 'faiq', 'ali', '1234', 'faiq@gmail.com', 'semester3', 'male', 'lahore', 3469809989),
(17, 'student34 ', 'danish', 'khan', '1234', 'danish@gmail.com', 'semester3', 'male', 'lahore', 3469809989),
(18, 'student35 ', 'rizwan', 'ali', '1234', 'rizwan@gmail.com', 'semester3', 'male', 'lahore', 3469809989),
(19, 'student40 ', '`sabir', 'ali', '1234', 'sabir@gmail.com', 'semester4', 'male', 'lahore', 3469809989),
(20, 'student40 ', '`sabir', 'ali', '1234', 'sabir@gmail.com', 'semester4', 'male', 'lahore', 3469809989),
(21, 'student41 ', 'saleem', 'khan', '1234', 'sam2@gmail.com', 'semester4', 'male', 'lahore', 3469809989),
(22, 'student41 ', 'husan', 'jan', '1234', 'husan@gmail.com', 'semester4', 'male', 'lahore', 3469809989),
(24, 'student43 ', 'riaz', 'khan', '1234', 'riaz@gmail.com', 'semester4', 'male', 'lahore', 3469809989),
(25, 'student44 ', 'saqil', 'ahmad', '1234', 'saqil@gmail.com', 'semester4', 'male', 'lahore', 3469809989);

-- --------------------------------------------------------

--
-- Table structure for table `timeslot`
--

CREATE TABLE `timeslot` (
  `timeslot_id` int(11) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `timeslot`
--

INSERT INTO `timeslot` (`timeslot_id`, `start_time`, `end_time`, `type`) VALUES
(1, '10:00:00', '10:00:00', 'Paper'),
(2, '10:00:00', '11:00:00', 'Break'),
(3, '11:00:00', '13:00:00', 'Paper'),
(4, '13:00:00', '14:00:00', 'Break'),
(5, '14:00:00', '16:00:00', 'Paper'),
(6, '05:02:00', '05:02:00', 'Paper');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `timetable_id` int(11) NOT NULL,
  `examtype_id` varchar(50) NOT NULL,
  `timeslot_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`timetable_id`, `examtype_id`, `timeslot_id`, `program_id`, `semester`, `date`) VALUES
(41, ' Spring-2023', 1, 24, 'Semester1', '2023-01-11'),
(42, ' Spring-2023', 3, 25, 'Semester1', '2023-01-11'),
(43, ' Spring-2023', 5, 26, 'Semester1', '2023-01-11'),
(44, ' Spring-2023', 1, 27, 'Semester1', '2023-01-12'),
(45, ' Spring-2023', 3, 28, 'Semester1', '2023-01-12'),
(46, ' Spring-2023', 5, 30, 'Semester2', '2023-01-12'),
(47, ' Spring-2023', 1, 31, 'Semester2', '2023-01-13'),
(48, ' Spring-2023', 3, 32, 'Semester2', '2023-01-13'),
(49, ' Spring-2023', 5, 33, 'Semester2', '2023-01-13'),
(50, ' Spring-2023', 1, 34, 'Semester2', '2023-01-14'),
(51, ' Spring-2023', 3, 35, 'Semester2', '2023-01-14'),
(52, ' Spring-2023', 5, 37, 'Semester3', '2023-01-14'),
(53, ' Spring-2023', 1, 38, 'Semester3', '2023-01-15'),
(54, ' Spring-2023', 3, 39, 'Semester3', '2023-01-15'),
(55, ' Spring-2023', 5, 42, 'Semester3', '2023-01-15'),
(56, ' Spring-2023', 1, 43, 'Semester3', '2023-01-16'),
(57, ' Spring-2023', 3, 44, 'Semester4', '2023-01-16'),
(58, ' Spring-2023', 5, 45, 'Semester4', '2023-01-16'),
(59, ' Spring-2023', 1, 46, 'Semester4', '2023-01-17'),
(60, ' Spring-2023', 3, 47, 'Semester4', '2023-01-17'),
(61, ' Spring-2023', 5, 48, 'Semester4', '2023-01-17'),
(62, ' Spring-2023', 1, 49, 'Semester5', '2023-01-18'),
(63, ' Spring-2023', 3, 50, 'Semester5', '2023-01-18'),
(64, ' Spring-2023', 5, 51, 'Semester5', '2023-01-18'),
(65, ' Spring-2023', 1, 52, 'Semester5', '2023-01-19'),
(66, ' Spring-2023', 3, 53, 'Semester5', '2023-01-19'),
(67, ' Spring-2023', 5, 54, 'Semester6', '2023-01-19'),
(68, ' Spring-2023', 1, 55, 'Semester6', '2023-01-20'),
(69, ' Spring-2023', 3, 56, 'Semester6', '2023-01-20'),
(70, ' Spring-2023', 5, 57, 'Semester6', '2023-01-20'),
(71, ' Spring-2023', 1, 58, 'Semester6', '2023-01-21'),
(72, ' Spring-2023', 3, 59, 'Semester7', '2023-01-21'),
(73, ' Spring-2023', 5, 60, 'Semester7', '2023-01-21'),
(74, ' Spring-2023', 1, 61, 'Semester7', '2023-01-22'),
(75, ' Spring-2023', 3, 62, 'Semester7', '2023-01-22'),
(76, ' Spring-2023', 5, 63, 'Semester7', '2023-01-22'),
(77, ' Spring-2023', 1, 64, 'Semester8', '2023-01-23'),
(78, ' Spring-2023', 3, 65, 'Semester8', '2023-01-23'),
(79, ' Spring-2023', 5, 66, 'Semester8', '2023-01-23'),
(80, ' Spring-2023', 1, 67, 'Semester8', '2023-01-24'),
(81, ' Fall-2023', 1, 24, 'Semester1', '2023-10-14'),
(82, ' Fall-2023', 3, 25, 'Semester1', '2023-10-14'),
(83, ' Fall-2023', 5, 26, 'Semester1', '2023-10-14'),
(84, ' Fall-2023', 6, 27, 'Semester1', '2023-10-14'),
(85, ' Fall-2023', 1, 28, 'Semester1', '2023-10-15'),
(86, ' Fall-2023', 3, 30, 'Semester2', '2023-10-15'),
(87, ' Fall-2023', 5, 31, 'Semester2', '2023-10-15'),
(88, ' Fall-2023', 6, 32, 'Semester2', '2023-10-15'),
(89, ' Fall-2023', 1, 33, 'Semester2', '2023-10-16'),
(90, ' Fall-2023', 3, 34, 'Semester2', '2023-10-16'),
(91, ' Fall-2023', 5, 35, 'Semester2', '2023-10-16'),
(92, ' Fall-2023', 6, 37, 'Semester3', '2023-10-16'),
(93, ' Fall-2023', 1, 38, 'Semester3', '2023-10-17'),
(94, ' Fall-2023', 3, 39, 'Semester3', '2023-10-17'),
(95, ' Fall-2023', 5, 42, 'Semester3', '2023-10-17'),
(96, ' Fall-2023', 6, 43, 'Semester3', '2023-10-17'),
(97, ' Fall-2023', 1, 44, 'Semester4', '2023-10-18'),
(98, ' Fall-2023', 3, 45, 'Semester4', '2023-10-18'),
(99, ' Fall-2023', 5, 46, 'Semester4', '2023-10-18'),
(100, ' Fall-2023', 6, 47, 'Semester4', '2023-10-18'),
(101, ' Fall-2023', 1, 48, 'Semester4', '2023-10-19'),
(102, ' Fall-2023', 3, 49, 'Semester5', '2023-10-19'),
(103, ' Fall-2023', 5, 50, 'Semester5', '2023-10-19'),
(104, ' Fall-2023', 6, 51, 'Semester5', '2023-10-19'),
(105, ' Fall-2023', 1, 52, 'Semester5', '2023-10-20'),
(106, ' Fall-2023', 3, 53, 'Semester5', '2023-10-20'),
(107, ' Fall-2023', 5, 54, 'Semester6', '2023-10-20'),
(108, ' Fall-2023', 6, 55, 'Semester6', '2023-10-20'),
(109, ' Fall-2023', 1, 56, 'Semester6', '0000-00-00'),
(110, ' Fall-2023', 3, 57, 'Semester6', '0000-00-00'),
(111, ' Fall-2023', 5, 58, 'Semester6', '0000-00-00'),
(112, ' Fall-2023', 6, 59, 'Semester7', '0000-00-00'),
(113, ' Fall-2023', 1, 60, 'Semester7', '0000-00-00'),
(114, ' Fall-2023', 3, 61, 'Semester7', '0000-00-00'),
(115, ' Fall-2023', 5, 62, 'Semester7', '0000-00-00'),
(116, ' Fall-2023', 6, 63, 'Semester7', '0000-00-00'),
(117, ' Fall-2023', 1, 64, 'Semester8', '0000-00-00'),
(118, ' Fall-2023', 3, 65, 'Semester8', '0000-00-00'),
(119, ' Fall-2023', 5, 66, 'Semester8', '0000-00-00'),
(120, ' Fall-2023', 6, 67, 'Semester8', '0000-00-00'),
(121, ' Fall-2023', 1, 68, 'Semester3', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`),
  ADD UNIQUE KEY `course_name` (`course_name`),
  ADD UNIQUE KEY `course_code` (`course_code`);

--
-- Indexes for table `exam_type`
--
ALTER TABLE `exam_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`semester_id`),
  ADD UNIQUE KEY `semester_name` (`semester_name`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `timeslot`
--
ALTER TABLE `timeslot`
  ADD PRIMARY KEY (`timeslot_id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`timetable_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `semester_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `timeslot`
--
ALTER TABLE `timeslot`
  MODIFY `timeslot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `timetable_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
