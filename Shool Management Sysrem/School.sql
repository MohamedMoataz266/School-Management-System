-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 07, 2021 at 02:10 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `School`
--
CREATE DATABASE IF NOT EXISTS `School` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `School`;

-- --------------------------------------------------------

--
-- Table structure for table `addcoursevideo`
--

DROP TABLE IF EXISTS `addcoursevideo`;
CREATE TABLE `addcoursevideo` (
  `ID` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `videoname` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `addQuestions`
--

DROP TABLE IF EXISTS `addQuestions`;
CREATE TABLE `addQuestions` (
  `ID` int(11) NOT NULL,
  `email` varchar(80) NOT NULL,
  `question` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addQuestions`
--

INSERT INTO `addQuestions` (`ID`, `email`, `question`) VALUES
(4, 'KareemEhabAbdelrazekDahab@amounegypt.com', 'How Old R U ?'),
(5, 'KareemEhabAbdelrazekDahab@amounegypt.com', 'How R U ?'),
(6, 'KareemEhabAbdelrazekDahab@amounegypt.com', 'What is your favorite class ?'),
(7, 'KareemEhabAbdelrazekDahab@amounegypt.com', 'Good Day ?'),
(8, 'KareemEhabAbdelrazekDahab@amounegypt.com', 'What is Your Opinion about school ?');

-- --------------------------------------------------------

--
-- Table structure for table `Answers`
--

DROP TABLE IF EXISTS `Answers`;
CREATE TABLE `Answers` (
  `ID` int(255) NOT NULL,
  `email` varchar(80) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Answers`
--

INSERT INTO `Answers` (`ID`, `email`, `answer`) VALUES
(26, 'MohamedMoatazKamelFouad@amounegypt.com', '20'),
(27, 'MohamedMoatazKamelFouad@amounegypt.com', 'Fine'),
(28, 'MohamedMoatazKamelFouad@amounegypt.com', 'History'),
(29, 'MohamedMoatazKamelFouad@amounegypt.com', 'No'),
(30, 'MohamedMoatazKamelFouad@amounegypt.com', 'Not Good');

-- --------------------------------------------------------

--
-- Table structure for table `Chat`
--

DROP TABLE IF EXISTS `Chat`;
CREATE TABLE `Chat` (
  `ID` int(11) NOT NULL,
  `Sender` varchar(80) NOT NULL,
  `Receiver` varchar(80) NOT NULL,
  `message` varchar(255) NOT NULL,
  `messageType` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Chat`
--

INSERT INTO `Chat` (`ID`, `Sender`, `Receiver`, `message`, `messageType`) VALUES
(4, 'KareemEhabAbdelrazekDahab@amounegypt.com      ', 'MohamedMoatazKamelFouad@amounegypt.com    ', 'Hi Mohamed', 'Read'),
(5, 'KareemEhabAbdelrazekDahab@amounegypt.com      ', 'MohamedMoatazKamelFouad@amounegypt.com    ', 'How R U ?', 'Read'),
(6, 'MohamedMoatazKamelFouad@amounegypt.com      ', 'KareemEhabAbdelrazekDahab@amounegypt.com    ', 'Hi Kareem', 'Read'),
(8, 'MohamedMoatazKamelFouad@amounegypt.com      ', 'KareemEhabAbdelrazekDahab@amounegypt.com    ', 'Iam fine', 'Read'),
(9, 'MohamedMoatazKamelFouad@amounegypt.com      ', 'KareemEhabAbdelrazekDahab@amounegypt.com    ', 'Tell me about your life', 'Read'),
(14, 'KareemEhabAbdelrazekDahab@amounegypt.com', 'MohamedMoatazKamelFouad@amounegypt.com', 'Every thing is ok ', 'Read'),
(15, 'MohamedMoatazKamelFouad@amounegypt.com', 'KareemEhabAbdelrazekDahab@amounegypt.com', 'Are U Okay ?', 'Read'),
(16, 'KareemEhabAbdelrazekDahab@amounegypt.com', 'MohamedMoatazKamelFouad@amounegypt.com', 'Yes bro', 'Read'),
(17, 'MohamedMoatazKamelFouad@amounegypt.com      ', 'KareemEhabAbdelrazekDahab@amounegypt.com    ', 'Hi ', 'Read'),
(18, 'MohamedMoatazKamelFouad@amounegypt.com      ', 'KareemEhabAbdelrazekDahab@amounegypt.com    ', 'How R U ?', 'Read'),
(19, 'KareemEhabAbdelrazekDahab@amounegypt.com', 'MohamedMoatazKamelFouad@amounegypt.com', 'Fine', 'Read'),
(20, 'KareemEhabAbdelrazekDahab@amounegypt.com      ', 'MohamedMoatazKamelFouad@amounegypt.com    ', 'Good', 'Read'),
(21, 'MohamedMoatazKamelFouad@amounegypt.com', 'KareemEhabAbdelrazekDahab@amounegypt.com', 'Test ?', 'Read'),
(22, 'MohamedMoatazKamelFouad@amounegypt.com      ', 'KareemEhabAbdelrazekDahab@amounegypt.com    ', 'Good Day OR NOT ?', 'Read'),
(23, 'KareemEhabAbdelrazekDahab@amounegypt.com', 'MohamedMoatazKamelFouad@amounegypt.com', 'Not', 'Read'),
(24, 'KareemEhabAbdelrazekDahab@amounegypt.com      ', 'MohamedMoatazKamelFouad@amounegypt.com    ', 'Hi', 'Read'),
(25, 'MohamedMoatazKamelFouad@amounegypt.com', 'KareemEhabAbdelrazekDahab@amounegypt.com', 'Hi', 'Delivered');

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
-- Table structure for table `Registration`
--

DROP TABLE IF EXISTS `Registration`;
CREATE TABLE `Registration` (
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
-- Dumping data for table `Registration`
--

INSERT INTO `Registration` (`ID`, `firstName`, `secondName`, `thirdName`, `forthName`, `email`, `nationalNumber`, `birthDate`, `gender`, `user`) VALUES
(65, 'Kareem', 'Ehab', 'Abdelrazek', 'Dahab', 'KareemEhabAbdelrazekDahab@amounegypt.com', '12345678912344', '6/11/1999', 'Male', 2),
(66, 'Philip', 'George', 'Fayek', 'Barsoum', 'PhilipGeorgeFayekBarsoum@amounegypt.com', '12345678912303', '25/12/1999', 'Male', 3),
(67, 'Saad', 'Kareem', 'Omar', 'Hassan', 'SaadKareemOmarHassan@amounegypt.com', '12589631204597', '06/08/2000', 'Male', 1),
(70, 'Mohamed', 'Moataz', 'Kamel', 'Fouad', 'MohamedMoatazKamelFouad@amounegypt.com', '12345678912345', '6/8/2000', 'on', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Students`
--

DROP TABLE IF EXISTS `Students`;
CREATE TABLE `Students` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `registrationNumber` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `placeOfBirth` varchar(100) NOT NULL,
  `dateOfBirth` varchar(100) NOT NULL,
  `ageInOctober` varchar(255) NOT NULL,
  `motherName` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phoneNumber` varchar(15) NOT NULL,
  `fatherJob` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `nationalNumber` varchar(20) NOT NULL,
  `class` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Students`
--

INSERT INTO `Students` (`ID`, `name`, `registrationNumber`, `nationality`, `religion`, `placeOfBirth`, `dateOfBirth`, `ageInOctober`, `motherName`, `address`, `phoneNumber`, `fatherJob`, `gender`, `nationalNumber`, `class`) VALUES
(5, 'MohamedMoatazKamelFouad', '1254', 'Egyption', 'Musilim', 'Cairo', '6/8/2000', '21 Year 2 Month 35 Day ', 'Sara Ahmed Adel', 'Elkhalefa elmamoun', '01003654587', 'Engineer', 'on', '12345678912345', '1/5');

-- --------------------------------------------------------

--
-- Table structure for table `userType`
--

DROP TABLE IF EXISTS `userType`;
CREATE TABLE `userType` (
  `ID` int(5) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userType`
--

INSERT INTO `userType` (`ID`, `name`) VALUES
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
-- Indexes for table `addQuestions`
--
ALTER TABLE `addQuestions`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Answers`
--
ALTER TABLE `Answers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Chat`
--
ALTER TABLE `Chat`
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
-- Indexes for table `Registration`
--
ALTER TABLE `Registration`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `Students`
--
ALTER TABLE `Students`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `userType`
--
ALTER TABLE `userType`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcoursevideo`
--
ALTER TABLE `addcoursevideo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `addQuestions`
--
ALTER TABLE `addQuestions`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `Answers`
--
ALTER TABLE `Answers`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `Chat`
--
ALTER TABLE `Chat`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
-- AUTO_INCREMENT for table `Registration`
--
ALTER TABLE `Registration`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `Students`
--
ALTER TABLE `Students`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `userType`
--
ALTER TABLE `userType`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Registration`
--
ALTER TABLE `Registration`
  ADD CONSTRAINT `Registration_ibfk_1` FOREIGN KEY (`user`) REFERENCES `userType` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
