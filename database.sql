-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2023 at 04:39 AM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('cusat123', 'cusat123');

-- --------------------------------------------------------

--
-- Table structure for table `civil_engineering`
--

CREATE TABLE `civil_engineering` (
  `candidates_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `votes` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `civil_engineering`
--

INSERT INTO `civil_engineering` (`candidates_id`, `name`, `votes`) VALUES
(1, 'Candidate 1', 0),
(2, 'Candidate 2', 1),
(3, 'Candidate 3', 0),
(4, 'Candidate 4', 0),
(5, 'Candidate 5', 0),
(6, 'Candidate 6', 0);

-- --------------------------------------------------------

--
-- Table structure for table `computer_science`
--

CREATE TABLE `computer_science` (
  `candidates_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `votes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `computer_science`
--

INSERT INTO `computer_science` (`candidates_id`, `name`, `votes`) VALUES
(1, 'Candidate 1', 0),
(2, 'Candidate 2', 0),
(3, 'Candidate 3', 0),
(4, 'Candidate 4', 0),
(5, 'Candidate 5', 1),
(6, 'Candidate 6', 0);

-- --------------------------------------------------------

--
-- Table structure for table `electronic_communication`
--

CREATE TABLE `electronic_communication` (
  `candidates_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `votes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `electronic_communication`
--

INSERT INTO `electronic_communication` (`candidates_id`, `name`, `votes`) VALUES
(1, 'Candidate 1', 1),
(2, 'Candidate 2', 1),
(3, 'Candidate 3', 0),
(4, 'Candidate 4', 0),
(5, 'Candidate 5', 0),
(6, 'Candidate 6', 0);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `regno` int(3) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `semester` enum('1st semester','2nd semester','3rd semester','4th semester','5th semester','6th semester','7th semester','8th semester') NOT NULL,
  `department` varchar(50) NOT NULL,
  `voters` text NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`regno`, `name`, `email`, `semester`, `department`, `voters`, `password`) VALUES
(20421001, 'Aadithya', 'aadithya@gmail.com', '4th semester', 'IT', '', '$2y$10$2Kg4T3xwGY4S/wYKnBZy9uArP6k20WPCGAYlwuXSpthevB1SjfMBO'),
(20421002, 'Aakash', 'aakash@gmail.com', '4th semester', 'IT', '', '$2y$10$nU3OATZFL7bXOio.RsVHwO6SjBPZPkk/hlD2W.z3xKkDDIFSntH.C'),
(20421003, 'Aazim', 'aazim@gmail.com', '4th semester', 'IT', '', '$2y$10$HMWqtLCrjQnZ3Zzi6d.IbeDaKIPtINpEVotaqb.isC/vcQ94i0o5O'),
(20421004, 'Abdulla Sameer', 'abdullasameer@gmail.com', '4th semester', 'CS', '', '$2y$10$IEfqrpjy2FzByHUnronViezRgRSfOUVABcxrR3pJ5CVOs1dXNe5jW'),
(20421011, 'Abin Francis', 'abinf@gmail.com', '4th semester', 'CS', '', '$2y$10$Q0mNE7AnViJlNj.0Y2U61.Y9vWznJbxSxykqkY20kc9cdjexSJ6vS'),
(20421023, 'Anish Raj', 'anish@gmail.com', '4th semester', 'IT', 'yes', '$2y$10$otBoeUyYCQ4R2UXVaej0MeuWKSdNUXwhyqwzSTEnQLz2GXzRHVNDa'),
(20421047, 'Harsh Neelabh', 'hneelabh13@gmail.com', '4th semester', 'IT', '', '$2y$10$iV5LU.HKetLG4DDf30dJmueDb1CeAqDsDyOhSxExGlMx6.mBNNpka'),
(20422003, 'B', 'b@mail.com', '6th semester', 'ME', '', '$2y$10$/N05No4LgibQ8kipvWhWjOUOdlVZdZjH298KhjGybLVV3HECsZHjS'),
(20422004, 'C', 'c@mail.com', '6th semester', 'ME', '', '$2y$10$RtJuuhR9Ia2LZubD3uUG5OLCgMLFQQJGHzu5tERWnB1b9X6TIJiWa'),
(20422005, 'D', 'd@mail.com', '8th semester', 'SF', '', '$2y$10$qQiw1c0ixYtOHALNBeF.SOKCNSyW4ffyvy.0g.zHstqgb/rTWIDdq'),
(20422006, 'E', 'e@mail.com', '6th semester', 'SF', '', '$2y$10$BjqQYl4hjipAEd9G8I8p5.3ob.BvxxIzSOIYK0L8XWuTCaX.cb0w.'),
(20422012, 'M', 'm@mail.com', '5th semester', 'EC', '', '$2y$10$QIZzrR.O9jAlLfWWKxVf/OdHh78.95xwRNrmqK7yJuxm2mkMtrrJu');

-- --------------------------------------------------------

--
-- Table structure for table `information_and_technology`
--

CREATE TABLE `information_and_technology` (
  `candidates_id` int(3) NOT NULL,
  `name` text NOT NULL,
  `votes` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `information_and_technology`
--

INSERT INTO `information_and_technology` (`candidates_id`, `name`, `votes`) VALUES
(1, 'Candidate 1', 0),
(2, 'Candidate 2', 4),
(3, 'Candidate 3', 0),
(4, 'Candidate 4', 1),
(5, 'Candidate 5', 0),
(6, 'Candidate 6', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(2) NOT NULL,
  `value` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `value`) VALUES
(1, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `mechanical_engineering`
--

CREATE TABLE `mechanical_engineering` (
  `candidates_id` int(3) NOT NULL,
  `name` text NOT NULL,
  `votes` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mechanical_engineering`
--

INSERT INTO `mechanical_engineering` (`candidates_id`, `name`, `votes`) VALUES
(1, 'Candidate 1', 0),
(2, 'Candidate 2', 0),
(3, 'Candidate 3', 1),
(4, 'Candidate 4', 0),
(5, 'Candidate 5', 0),
(6, 'Candidate 6', 0);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(2) NOT NULL,
  `value` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `value`) VALUES
(1, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `result_show_homepage`
--

CREATE TABLE `result_show_homepage` (
  `id` int(1) NOT NULL,
  `vlaue` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `result_show_homepage`
--

INSERT INTO `result_show_homepage` (`id`, `vlaue`) VALUES
(1, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `safety_and_fire`
--

CREATE TABLE `safety_and_fire` (
  `candidates_id` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `votes` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `safety_and_fire`
--

INSERT INTO `safety_and_fire` (`candidates_id`, `name`, `votes`) VALUES
(1, 'Candidate 1', 0),
(2, 'Candidate 2', 0),
(3, 'Candidate 3', 0),
(4, 'Candidate 4', 0),
(5, 'Candidate 5', 0),
(6, 'Candidate 6', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `regno` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`regno`, `name`, `semester`, `department`) VALUES
(20421001, 'Aadithya', '4', 'IT'),
(20421002, 'Aakash', '4', 'IT'),
(20421003, 'Aazim', '4', 'IT'),
(20421004, 'Abdulla Sameer', '4', 'CS'),
(20421005, 'Abhijeet', '4', 'IT'),
(20421006, 'Abhinav CV', '4', 'IT'),
(20421007, 'Abhinav', '4', 'IT'),
(20421008, 'Abhinav MR', '4', 'IT'),
(20421009, 'Abhiram ', '4', 'IT'),
(20421010, 'Abhishek', '4', 'IT'),
(20421011, 'Abin Francis', '4', 'CS'),
(20421012, 'Adharsh', '4', 'IT'),
(20421013, 'Adharsh Sajeesh', '4', 'IT'),
(20421014, 'Adithya', '4', 'IT'),
(20421015, 'Adithyan', '4', 'IT'),
(20421023, 'Anish Raj', '4', 'IT'),
(20421047, 'Harsh Neelabh', '4', 'IT'),
(20421060, 'Mohit kumar', '4', 'IT'),
(20421080, 'Shubham Kumar', '4', 'IT'),
(20422001, 'O', '4', 'CS'),
(20422002, 'A', '4', 'ME'),
(20422003, 'B', '4', 'ME'),
(20422004, 'C', '4', 'ME'),
(20422005, 'D', '4', 'SF'),
(20422006, 'E', '4', 'SF'),
(20422007, 'F', '4', 'SF'),
(20422008, 'G', '4', 'CE'),
(20422009, 'J', '4', 'CE'),
(20422010, 'K', '4', 'CE'),
(20422011, 'L', '4', 'CE'),
(20422012, 'M', '4', 'EC'),
(20422013, 'N', '4', 'EC'),
(20422014, 'H', '4', 'EC'),
(204220015, 'I', '4', 'EC');

-- --------------------------------------------------------

--
-- Table structure for table `totalvotes`
--

CREATE TABLE `totalvotes` (
  `candidates_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `totalVotes` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `totalvotes`
--

INSERT INTO `totalvotes` (`candidates_id`, `name`, `totalVotes`) VALUES
('1', 'Candidate 1', 1),
('2', 'Candidate 2', 6),
('3', 'Candidate 3', 2),
('4', 'Candidate 4', 1),
('5', 'Candidate 5', 1),
('6', 'Candidate 6', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `computer_science`
--
ALTER TABLE `computer_science`
  ADD PRIMARY KEY (`candidates_id`);

--
-- Indexes for table `electronic_communication`
--
ALTER TABLE `electronic_communication`
  ADD PRIMARY KEY (`candidates_id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `information_and_technology`
--
ALTER TABLE `information_and_technology`
  ADD PRIMARY KEY (`candidates_id`);

--
-- Indexes for table `mechanical_engineering`
--
ALTER TABLE `mechanical_engineering`
  ADD PRIMARY KEY (`candidates_id`);

--
-- Indexes for table `safety_and_fire`
--
ALTER TABLE `safety_and_fire`
  ADD PRIMARY KEY (`candidates_id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `totalvotes`
--
ALTER TABLE `totalvotes`
  ADD PRIMARY KEY (`candidates_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
