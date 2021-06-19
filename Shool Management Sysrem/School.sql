-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 19, 2021 at 10:41 PM
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
(8, 'KareemEhabAbdelrazekDahab@amounegypt.com', 'What is Your Opinion about school ?'),
(9, '', 'How Old R U ?');

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
(31, 'MohamedMoatazKamelFouad@amounegypt.com', '20'),
(32, 'MohamedMoatazKamelFouad@amounegypt.com', 'Fine'),
(33, 'MohamedMoatazKamelFouad@amounegypt.com', 'History'),
(34, 'MohamedMoatazKamelFouad@amounegypt.com', 'Yes'),
(35, 'MohamedMoatazKamelFouad@amounegypt.com', 'Good'),
(36, 'MohamedMoatazKamelFouad@amounegypt.com', '1');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `banner_title` varchar(200) NOT NULL,
  `banner_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `banner_title`, `banner_image`) VALUES
(1, 'Entrance', 'school1.jpg'),
(2, 'Amoun students', 'school2.jpg'),
(3, 'Amoun private school', 'school3.jpg'),
(4, 'Play ground', 'School3.jpeg'),
(5, 'Achievements', 'School4.jpeg'),
(6, 'Kg classes', 'School5.jpeg'),
(7, 'Baby class classes', 'School6.jpeg'),
(8, 'Honored students', 'School7.jpeg'),
(9, 'Honored students', 'School8.jpeg'),
(10, 'Walkway', 'School9.jpeg'),
(11, 'School gate', 'School10.jpeg'),
(12, 'School historical building ', 'School11.jpeg');

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
(27, 'MohamedMoatazKamelFouad@amounegypt.com      ', 'KareemEhabAbdelrazekDahab@amounegypt.com    ', 'Hi How R U ?', 'Read'),
(28, 'MohamedMoatazKamelFouad@amounegypt.com      ', 'KareemEhabAbdelrazekDahab@amounegypt.com    ', 'Hi', 'Read'),
(29, 'MohamedMoatazKamelFouad@amounegypt.com      ', 'KareemEhabAbdelrazekDahab@amounegypt.com    ', 'Good Day ?', 'Read'),
(30, 'KareemEhabAbdelrazekDahab@amounegypt.com', 'MohamedMoatazKamelFouad@amounegypt.com', 'Every Thing IS OK', 'Read'),
(32, 'MohamedMoatazKamelFouad@amounegypt.com', 'KareemEhabAbdelrazekDahab@amounegypt.com', 'HI', 'Read'),
(33, 'MohamedMoatazKamelFouad@amounegypt.com', 'KareemEhabAbdelrazekDahab@amounegypt.com', 'Every thing is ok', 'Read'),
(34, 'MohamedMoatazKamelFouad@amounegypt.com', 'KareemEhabAbdelrazekDahab@amounegypt.com', 'Yes', 'Read'),
(35, 'MohamedMoatazKamelFouad@amounegypt.com', 'KareemEhabAbdelrazekDahab@amounegypt.com', 'Hi', 'Read'),
(36, 'KareemEhabAbdelrazekDahab@amounegypt.com', 'MohamedMoatazKamelFouad@amounegypt.com', 'HI', 'Read'),
(37, 'KareemEhabAbdelrazekDahab@amounegypt.com', 'SaadKareemOmarHassan@amounegypt.com', 'hi Bro How R U ?', 'Delivered'),
(38, 'KareemEhabAbdelrazekDahab@amounegypt.com', 'MohamedMoatazKamelFouad@amounegypt.com', 'Good Morning Bro', 'Read'),
(39, 'MohamedMoatazKamelFouad@amounegypt.com', 'KareemEhabAbdelrazekDahab@amounegypt.com', 'السلام عليكم', 'Read'),
(40, 'MohamedMoatazKamelFouad@amounegypt.com', 'KareemEhabAbdelrazekDahab@amounegypt.com', 'كيف حالك ', 'Read'),
(41, 'KareemEhabAbdelrazekDahab@amounegypt.com', 'MohamedMoatazKamelFouad@amounegypt.com', 'Ho', 'Read'),
(42, 'KareemEhabAbdelrazekDahab@amounegypt.com', 'MohamedMoatazKamelFouad@amounegypt.com', 'HI', 'Read'),
(43, 'MohamedMoatazKamelFouad@amounegypt.com', 'KareemEhabAbdelrazekDahab@amounegypt.com', 'He', 'Read'),
(44, 'KareemEhabAbdelrazekDahab@amounegypt.com', 'MohamedMoatazKamelFouad@amounegypt.com', 'MOrning', 'Read'),
(45, 'MohamedMoatazKamelFouad@amounegypt.com', 'KareemEhabAbdelrazekDahab@amounegypt.com', 'HEHE', 'Read'),
(46, 'KareemEhabAbdelrazekDahab@amounegypt.com', 'MohamedMoatazKamelFouad@amounegypt.com', 'A5oya', 'Read'),
(47, 'KareemEhabAbdelrazekDahab@amounegypt.com', 'MohamedMoatazKamelFouad@amounegypt.com', 'A5oya', 'Read'),
(48, 'KareemEhabAbdelrazekDahab@amounegypt.com', 'SaadKareemOmarHassan@amounegypt.com', 'HE', 'Delivered'),
(49, 'MohamedMoatazKamelFouad@amounegypt.com', 'KareemEhabAbdelrazekDahab@amounegypt.com', 'Hi ', 'Read'),
(50, 'KareemEhabAbdelrazekDahab@amounegypt.com', 'MohamedMoatazKamelFouad@amounegypt.com', 'HI', 'Delivered');

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
-- Table structure for table `personnelAffairs`
--

DROP TABLE IF EXISTS `personnelAffairs`;
CREATE TABLE `personnelAffairs` (
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
-- Dumping data for table `personnelAffairs`
--

INSERT INTO `personnelAffairs` (`ID`, `name`, `code`, `arabicName`, `religion`, `nationality`, `gender`, `birthDate`, `nationalNumber`, `foreginerNumber`, `address`, `phoneNumber`, `qualification`, `graduationYear`, `graduationGrade`, `expYears`, `job`, `specialization`, `department`, `contractDate`, `insuranceNumber`, `insuranceDate`, `insuranceEndDate`, `systemRole`, `educationSystem`, `notes`) VALUES
(1, 'KareemAliOmarHassan', '1258', 'كريم علي عمر حسن', 'Musilim', 'Egyption', 'Male', '10/6/1980', '21478639850123', 'K15963487', '22 masr elgdida street cairo', '01005423168', 'high education', '2015', '2.8', '5', 'Teacher', 'History', '.', '10/4/2021', '2145698', '10/4/2021', '10/4/2025', '.', '', '.');

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
  `nationalNumber` varchar(255) NOT NULL,
  `birthDate` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `user` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Registration`
--

INSERT INTO `Registration` (`ID`, `firstName`, `secondName`, `thirdName`, `forthName`, `email`, `nationalNumber`, `birthDate`, `gender`, `user`) VALUES
(65, 'Kareem', 'Ehab', 'Abdelrazek', 'Dahab', 'KareemEhabAbdelrazekDahab@amounegypt.com', '653057a7b6525cace04ca92a5e65f33f', '6/11/1999', 'Male', 2),
(66, 'Philip', 'George', 'Fayek', 'Barsoum', 'PhilipGeorgeFayekBarsoum@amounegypt.com', 'bc09d52c5087937b9c56fe9588e3f0cd', '25/12/1999', 'Male', 3),
(67, 'Saad', 'Kareem', 'Omar', 'Hassan', 'SaadKareemOmarHassan@amounegypt.com', '75387cc14497476d8023b893a910ec71', '06/08/2000', 'Male', 1),
(70, 'Mohamed', 'Moataz', 'Kamel', 'Fouad', 'MohamedMoatazKamelFouad@amounegypt.com', '0c433bffb79eee2842b108f59c2432a4', '6/8/2000', 'on', 1),
(71, 'Ali', 'Hassan', 'Kamel', 'Hossam', 'AliHassanKamelHossam@amounegypt.com', 'b4b2c373c2b7599275e1db0ec27e075e', '6/7/1980', 'Male', 5),
(72, 'Mohamed', 'Kareem', 'Ahmed', 'Ali', 'MohamedKareemAhmedAli@amounegypt.com', '046102ad344945872ec8f4a97a35794e', '1/2/1980', 'Male', 5),
(75, 'Mohamed', 'Ali', 'Hassan', 'Ibraheem', 'MohamedAliHassanIbraheem@amounegypt.com', 'fd22f766e7514f3ad2804efdfeeb1040', '10/01/2003', 'Male', 1);

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
  `phoneNumber` varchar(20) NOT NULL,
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
(4, 'Personnel Affairs'),
(5, 'topAdmin');

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
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

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
-- Indexes for table `personnelAffairs`
--
ALTER TABLE `personnelAffairs`
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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `addQuestions`
--
ALTER TABLE `addQuestions`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Answers`
--
ALTER TABLE `Answers`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `Chat`
--
ALTER TABLE `Chat`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personnelAffairs`
--
ALTER TABLE `personnelAffairs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Registration`
--
ALTER TABLE `Registration`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `Students`
--
ALTER TABLE `Students`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `userType`
--
ALTER TABLE `userType`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
