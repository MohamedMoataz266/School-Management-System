-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 09, 2021 at 08:51 PM
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
  `notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personnelAffairs`
--

INSERT INTO `personnelAffairs` (`ID`, `name`, `code`, `arabicName`, `religion`, `nationality`, `gender`, `birthDate`, `nationalNumber`, `foreginerNumber`, `address`, `phoneNumber`, `qualification`, `graduationYear`, `graduationGrade`, `expYears`, `job`, `specialization`, `department`, `contractDate`, `insuranceNumber`, `insuranceDate`, `insuranceEndDate`, `systemRole`, `notes`) VALUES
(1, 'KareemAliOmarHassan', '1258', 'كريم علي عمر حسن', 'Musilim', 'Egyption', 'Male', '10/6/1980', '21478639850123', 'K15963487', '22 masr elgdida street cairo', '01005423168', 'high education', '2015', '2.8', '5', 'Teacher', 'History', '.', '10/4/2021', '2145698', '10/4/2021', '10/4/2025', '.', '.'),
(2, 'SaadAliOmarIbrahem', '12478', 'سعد علي عمر إبراهيم', 'Musilim', 'Egyption', 'Male', '10/6/1990', '14785236901254', 'D12547862', '10 nasr City Cairo', '01004231258', 'Accountant', '1990', '3.00', '2', 'studentAffairs', 'Employee', '.', '10/3/2021', '621478', '10/3/2021', '10/3/2025', '.', '.');

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
  `password` varchar(80) NOT NULL,
  `nationalNumber` varchar(20) NOT NULL,
  `birthDate` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `user` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Registration`
--

INSERT INTO `Registration` (`ID`, `firstName`, `secondName`, `thirdName`, `forthName`, `email`, `password`, `nationalNumber`, `birthDate`, `gender`, `user`) VALUES
(22, 'Amr', 'Hassan', 'Ali', 'Omar', 'AmrHassanAliOmar@amounegypt.com', '5520053214', '21365478963214', '5/5/2005', 'Male', 1),
(37, 'samar', 'ali', 'omar', 'hassan', 'samaraliomarhassan@amounegypt.com', '1420087563', '12354896207563', '01/04/2008', 'Female', 1),
(56, 'ahmed', 'ali', 'kamel', 'kamal', 'ahmedalikamelkamal@amounegypt.com', '3220086321', '12596387456321', '03/02/2008', 'Male', 1),
(57, 'saad', 'omar', 'hassan', 'karam', 'saadomarhassankaram@amounegypt.com', '29720103212', '21456987563212', '29/07/2010', 'Male', 1),
(58, 'kareem', 'ehab', 'ahmed', 'saad', 'kareemehabahmedsaad@amounegypt.com', '12820029630', '12589634789630', '12/08/2002', 'Male', 1);

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
  `ageInOctober` varchar(15) NOT NULL,
  `motherName` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phoneNumber` varchar(12) NOT NULL,
  `fatherJob` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `nationalNumber` varchar(20) NOT NULL,
  `class` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Students`
--

INSERT INTO `Students` (`ID`, `name`, `registrationNumber`, `nationality`, `religion`, `placeOfBirth`, `dateOfBirth`, `ageInOctober`, `motherName`, `address`, `phoneNumber`, `fatherJob`, `gender`, `nationalNumber`, `class`) VALUES
(1, 'AhmedKareemOmarSaad', '1259', 'Egyption', 'Musilim', 'Cairo', '10/6/2001', '20', 'MaiKamel', '22 masr elgdida street', '01145698753', 'Engineer', 'Male', '12563987456321', '1/6'),
(2, 'AliHassanSaiedIbrahem', '1247', 'Algerian', 'Musilim', 'Algeria', '10/5/2000', '20', 'SamarHassan', '10 nasr city stree', '01004568723', 'Doctor', 'Male', '21456398703156', '3/4');

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
-- AUTO_INCREMENT for table `personnelAffairs`
--
ALTER TABLE `personnelAffairs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Registration`
--
ALTER TABLE `Registration`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `Students`
--
ALTER TABLE `Students`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
