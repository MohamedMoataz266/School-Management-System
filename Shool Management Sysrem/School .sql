-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2021 at 08:27 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--
CREATE DATABASE IF NOT EXISTS `school` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `school`;

-- --------------------------------------------------------

--
-- Table structure for table `addcoursevideo`
--

DROP TABLE IF EXISTS `addcoursevideo`;
CREATE TABLE `addcoursevideo` (
  `ID` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `instructorname` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `coursename` varchar(255) NOT NULL,
  `videoname` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addcoursevideo`
--

INSERT INTO `addcoursevideo` (`ID`, `email`, `instructorname`, `course`, `coursename`, `videoname`, `video`) VALUES
(4, 'moataz@gmail.com', 'moo', 'op', 'csc123', 'lecture one', 'vid1.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `addquestions`
--

DROP TABLE IF EXISTS `addquestions`;
CREATE TABLE `addquestions` (
  `ID` int(11) NOT NULL,
  `email` varchar(80) NOT NULL,
  `question` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addquestions`
--

INSERT INTO `addquestions` (`ID`, `email`, `question`) VALUES
(4, 'KareemEhabAbdelrazekDahab@amounegypt.com', 'How Old R U ?'),
(5, 'KareemEhabAbdelrazekDahab@amounegypt.com', 'How R U ?'),
(6, 'KareemEhabAbdelrazekDahab@amounegypt.com', 'What is your favorite class ?'),
(7, 'KareemEhabAbdelrazekDahab@amounegypt.com', 'Good Day ?');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
CREATE TABLE `answers` (
  `ID` int(255) NOT NULL,
  `email` varchar(80) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`ID`, `email`, `answer`) VALUES
(22, 'MohamedMoatazKamelFouad@amounegypt.com', '20'),
(23, 'MohamedMoatazKamelFouad@amounegypt.com', 'Fine'),
(24, 'MohamedMoatazKamelFouad@amounegypt.com', 'History'),
(25, 'MohamedMoatazKamelFouad@amounegypt.com', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

DROP TABLE IF EXISTS `grades`;
CREATE TABLE `grades` (
  `ID` int(255) NOT NULL,
  `teacher` varchar(80) NOT NULL,
  `student` varchar(80) NOT NULL,
  `subject` varchar(80) NOT NULL,
  `grade` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `personnelaffairs`
--

DROP TABLE IF EXISTS `personnelaffairs`;
CREATE TABLE `personnelaffairs` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(10) NOT NULL,
  `arabicName` varchar(255) NOT NULL,
  `religion` varchar(10) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birthDate` varchar(20) NOT NULL,
  `nationalNumber` varchar(20) NOT NULL,
  `foreginerNumber` varchar(80) NOT NULL,
  `address` varchar(80) NOT NULL,
  `phoneNumber` varchar(15) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `graduationYear` varchar(80) NOT NULL,
  `graduationGrade` varchar(5) NOT NULL,
  `expYears` varchar(10) NOT NULL,
  `job` varchar(50) NOT NULL,
  `specialization` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `contractDate` varchar(50) NOT NULL,
  `insuranceNumber` varchar(100) NOT NULL,
  `insuranceDate` varchar(50) NOT NULL,
  `insuranceEndDate` varchar(50) NOT NULL,
  `systemRole` varchar(30) NOT NULL,
  `educationSystem` varchar(50) NOT NULL,
  `notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personnelaffairs`
--

INSERT INTO `personnelaffairs` (`ID`, `name`, `code`, `arabicName`, `religion`, `nationality`, `gender`, `birthDate`, `nationalNumber`, `foreginerNumber`, `address`, `phoneNumber`, `qualification`, `graduationYear`, `graduationGrade`, `expYears`, `job`, `specialization`, `department`, `contractDate`, `insuranceNumber`, `insuranceDate`, `insuranceEndDate`, `systemRole`, `educationSystem`, `notes`) VALUES
(1, 'KareemAliOmarHassan', '1258', 'كريم علي عمر حسن', 'Musilim', 'Egyption', 'Male', '10/6/1980', '21478639850123', 'K15963487', '22 masr elgdida street cairo', '01005423168', 'high education', '2015', '2.8', '5', 'Teacher', 'History', '.', '10/4/2021', '2145698', '10/4/2021', '10/4/2025', '.', '', '.'),
(2, 'SaadAliOmarIbrahem', '12478', 'سعد علي عمر إبراهيم', 'Musilim', 'Egyption', 'Male', '10/6/1990', '14785236901254', 'D12547862', '10 nasr City Cairo', '01004231258', 'Accountant', '1990', '3.00', '2', 'studentAffairs', 'Employee', '.', '10/3/2021', '621478', '10/3/2021', '10/3/2025', '.', '', '.'),
(3, 'MaiKamelOmarSaad', '12456', 'مي عمر كامل سعد', 'Musilim', 'Egyption', 'Female', '10/4/1995', '15698742365402', 'M12387456', '50 elmaadi street', '01002587631', 'Accountant', '2016', '3.4', '3', 'personnelAffairs', 'employee', '.', '5/5/2021', '1254252166', '5/5/2021', '5/5/2024', '.', '', '.');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE `registration` (
  `ID` int(255) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `secondName` varchar(30) NOT NULL,
  `thirdName` varchar(30) NOT NULL,
  `forthName` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nationalNumber` varchar(20) NOT NULL,
  `birthDate` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `user` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `firstName`, `secondName`, `thirdName`, `forthName`, `email`, `nationalNumber`, `birthDate`, `gender`, `user`) VALUES
(64, 'Mohamed', 'Moataz', 'Kamel', 'Fouad', 'MohamedMoatazKamelFouad@amounegypt.com', '12345678912345', '06/08/2000', 'Male', 1),
(65, 'Kareem', 'Ehab', 'Abdelrazek', 'Dahab', 'KareemEhabAbdelrazekDahab@amounegypt.com', '12345678912344', '6/11/1999', 'Male', 2),
(66, 'Philip', 'George', 'Fayek', 'Barsoum', 'PhilipGeorgeFayekBarsoum@amounegypt.com', '12345678912303', '25/12/1999', 'Male', 3);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

DROP TABLE IF EXISTS `usertype`;
CREATE TABLE `usertype` (
  `ID` int(5) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`ID`, `name`) VALUES
(1, 'Student'),
(2, 'Teacher'),
(3, 'Student Affairs'),
(4, 'Personnel Affairs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcoursevideo`
--
ALTER TABLE `addcoursevideo`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `addquestions`
--
ALTER TABLE `addquestions`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `personnelaffairs`
--
ALTER TABLE `personnelaffairs`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcoursevideo`
--
ALTER TABLE `addcoursevideo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `addquestions`
--
ALTER TABLE `addquestions`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personnelaffairs`
--
ALTER TABLE `personnelaffairs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `registration`
--
ALTER TABLE `registration`
  ADD CONSTRAINT `Registration_ibfk_1` FOREIGN KEY (`user`) REFERENCES `usertype` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
