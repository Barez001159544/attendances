-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2023 at 12:05 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance system`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance list`
--

CREATE TABLE `attendance list` (
  `atendance id` int(11) NOT NULL,
  `date` date NOT NULL,
  `poa` varchar(50) DEFAULT NULL,
  `lecturer id` int(10) NOT NULL,
  `day id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance list`
--

INSERT INTO `attendance list` (`atendance id`, `date`, `poa`, `lecturer id`, `day id`) VALUES
(57, '2023-04-14', 'Absent', 1, 1),
(57, '2023-04-15', 'Absent', 1, 2),
(57, '2023-04-16', 'Here', 1, 3),
(57, '2023-04-17', 'Absent', 1, 4),
(57, '2023-04-18', 'Absent', 1, 5),
(57, '2023-04-19', 'Absent', 1, 6),
(58, '2023-04-14', 'HERE', 1, 1),
(58, '2023-04-15', 'HERE', 1, 2),
(58, '2023-04-16', 'HERE', 1, 3),
(58, '2023-04-17', 'HERE', 1, 4),
(58, '2023-04-18', 'HERE', 1, 5),
(58, '2023-04-19', 'HERE', 1, 6),
(61, '2023-04-15', 'Absent', 2, 1),
(61, '2023-04-16', 'Absent', 2, 2),
(61, '2023-04-17', 'Absent', 2, 3),
(61, '2023-04-18', 'Absent', 2, 4),
(61, '2023-04-19', 'Absent', 2, 5),
(61, '2023-04-20', 'Absent', 2, 6),
(62, '2023-04-15', 'PRESENT', 2, 1),
(62, '2023-04-16', 'Absent', 2, 2),
(62, '2023-04-17', 'Absent', 2, 3),
(62, '2023-04-18', 'Absent', 2, 4),
(62, '2023-04-19', 'Absent', 2, 5),
(62, '2023-04-20', 'Absent', 2, 6),
(66, '2023-04-30', 'Absent', 2, 1),
(66, '2023-05-01', 'Absent', 2, 2),
(66, '2023-05-02', 'Absent', 2, 3),
(66, '2023-05-03', 'Absent', 2, 4),
(66, '2023-05-04', 'Absent', 2, 5),
(66, '2023-05-05', 'Absent', 2, 6),
(71, '2023-05-01', 'Here', 15, 1),
(71, '2023-05-02', 'Absent', 15, 2),
(71, '2023-05-03', 'Absent', 15, 3),
(71, '2023-05-04', 'Absent', 15, 4),
(71, '2023-05-05', 'Absent', 15, 5),
(71, '2023-05-06', 'Absent', 15, 6),
(72, '2023-05-01', 'Absent', 15, 1),
(72, '2023-05-02', 'Absent', 15, 2),
(72, '2023-05-03', 'Absent', 15, 3),
(72, '2023-05-04', 'Absent', 15, 4),
(72, '2023-05-05', 'Absent', 15, 5),
(72, '2023-05-06', 'Absent', 15, 6),
(74, '2023-05-01', 'Absent', 15, 1),
(74, '2023-05-02', 'Absent', 15, 2),
(74, '2023-05-03', 'Absent', 15, 3),
(74, '2023-05-04', 'Absent', 15, 4),
(74, '2023-05-05', 'Absent', 15, 5),
(74, '2023-05-06', 'Absent', 15, 6),
(75, '2023-05-01', 'Present', 15, 1),
(75, '2023-05-02', 'Absent', 15, 2),
(75, '2023-05-03', 'Absent', 15, 3),
(75, '2023-05-04', 'Absent', 15, 4),
(75, '2023-05-05', 'Absent', 15, 5),
(75, '2023-05-06', 'Absent', 15, 6),
(76, '2023-05-01', 'Absent', 2, 1),
(76, '2023-05-02', 'Absent', 2, 2),
(76, '2023-05-03', 'Absent', 2, 3),
(76, '2023-05-04', 'Absent', 2, 4),
(76, '2023-05-05', 'Absent', 2, 5),
(76, '2023-05-06', 'Absent', 2, 6),
(77, '2023-05-02', 'Absent', 16, 1),
(77, '2023-05-03', 'Absent', 16, 2),
(77, '2023-05-04', 'Absent', 16, 3),
(77, '2023-05-05', 'Absent', 16, 4),
(77, '2023-05-06', 'Absent', 16, 5),
(77, '2023-05-07', 'Absent', 16, 6),
(78, '2023-05-02', 'Present', 16, 1),
(78, '2023-05-03', 'Absent', 16, 2),
(78, '2023-05-04', 'Absent', 16, 3),
(78, '2023-05-05', 'Absent', 16, 4),
(78, '2023-05-06', 'Absent', 16, 5),
(78, '2023-05-07', 'Absent', 16, 6),
(79, '2023-05-02', 'Absent', 16, 1),
(79, '2023-05-03', 'Absent', 16, 2),
(79, '2023-05-04', 'Absent', 16, 3),
(79, '2023-05-05', 'Absent', 16, 4),
(79, '2023-05-06', 'Absent', 16, 5),
(79, '2023-05-07', 'Absent', 16, 6),
(80, '2023-05-04', 'Absent', 17, 1),
(80, '2023-05-05', 'Absent', 17, 2),
(80, '2023-05-06', 'Absent', 17, 3),
(80, '2023-05-07', 'Absent', 17, 4),
(80, '2023-05-08', 'Absent', 17, 5),
(80, '2023-05-09', 'Absent', 17, 6),
(81, '2023-05-04', 'Present', 18, 1),
(81, '2023-05-05', 'Absent', 18, 2),
(81, '2023-05-06', 'Absent', 18, 3),
(81, '2023-05-07', 'Absent', 18, 4),
(81, '2023-05-08', 'Absent', 18, 5),
(81, '2023-05-09', 'Absent', 18, 6);

-- --------------------------------------------------------

--
-- Table structure for table `lecturers accounts`
--

CREATE TABLE `lecturers accounts` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `subject_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecturers accounts`
--

INSERT INTO `lecturers accounts` (`id`, `name`, `email`, `password`, `subject_name`) VALUES
(1, 'john doe', 'john@gmail.com', '1234', 'AWD'),
(2, 'jane doe', 'jane@gmail.com', '6789', 'MAP'),
(14, 'Zmnako', 'Zmnako@gmail.com', 'Zmnako12345', 'Sport'),
(15, 'Barez Azad', 'barez@gmail.com', 'Barez12345', 'Sport'),
(16, 'Jamie Dornan', 'jamiedornan@gmail.com', 'Barez12345', 'Fifty Shades'),
(17, 'Husen', 'Husen123@gmail.com', 'H123456a', 'Whatever'),
(18, 'Safar', 'safar.maghdid@koyauniversity.org', 'Q1w2e3r4', 'Advanced Web');

-- --------------------------------------------------------

--
-- Table structure for table `students name`
--

CREATE TABLE `students name` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `note` varchar(250) NOT NULL,
  `lecturer id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students name`
--

INSERT INTO `students name` (`id`, `name`, `email`, `password`, `note`, `lecturer id`) VALUES
(57, 'Blake', 'blake@gmail.com', '1234', 'Blake in San Andreas', 1),
(58, 'Levi', 'levi@gmail.com', '1234', 'Levi Ackerman from Attack on Titan', 1),
(61, 'Martin', 'martin@gmail.com', '1234', 'Martin Garrix from STMPD Records!', 2),
(62, 'David', 'david@gmail.com', '1234', 'David Gutta from Spinning Records', 2),
(66, 'instance', 'instance@gmail.com', '1234', 'instance is someone to be deleted!', 2),
(71, 'Sivan7900', 'sivan@gmail.com', '1234', 'Some sort of note about this student', 15),
(72, 'Ahmad', 'sivan@gmail.com', '1234', 'Some sort of note about this student', 15),
(74, 'Diako', 'sivan@gmail.com', '1234', 'Some sort of note about this student', 15),
(75, 'Husen', 'sivan@gmail.com', '1234', 'Some sort of note about this student', 15),
(76, 'Xavier', 'xavier@gmail.com', '1234', 'Some sort of note about this student', 2),
(77, 'STD1', 'std1@gmail.com', '1234', 'Some sort of note about this student', 16),
(78, 'STD2', 'std2@gmail.com', '1234', 'Some sort of note about this student', 16),
(79, 'STD3', 'std3@gmail.com', '1234', 'Some sort of note about this student', 16),
(80, 'Joe Biden', 'joe@gmail.com', '1234', '', 17),
(81, 'barez1', 'brock1@gmail.com', '12345', '', 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance list`
--
ALTER TABLE `attendance list`
  ADD KEY `atendance id` (`atendance id`);

--
-- Indexes for table `lecturers accounts`
--
ALTER TABLE `lecturers accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students name`
--
ALTER TABLE `students name`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lecturer id` (`lecturer id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance list`
--
ALTER TABLE `attendance list`
  MODIFY `atendance id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `lecturers accounts`
--
ALTER TABLE `lecturers accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `students name`
--
ALTER TABLE `students name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance list`
--
ALTER TABLE `attendance list`
  ADD CONSTRAINT `attendance list_ibfk_1` FOREIGN KEY (`atendance id`) REFERENCES `students name` (`id`);

--
-- Constraints for table `students name`
--
ALTER TABLE `students name`
  ADD CONSTRAINT `students name_ibfk_1` FOREIGN KEY (`lecturer id`) REFERENCES `lecturers accounts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
