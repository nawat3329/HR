-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2021 at 01:14 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hr`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_event`
--

CREATE TABLE `company_event` (
  `Event_ID` int(11) NOT NULL,
  `Event_Name` varchar(45) NOT NULL,
  `Event_Date_Start` date NOT NULL,
  `Event_Date_End` date NOT NULL,
  `Event_Detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hr_staff`
--

CREATE TABLE `hr_staff` (
  `HR_ID` int(11) NOT NULL,
  `HR_Role` varchar(25) NOT NULL,
  `HR_WorkDate` varchar(25) NOT NULL,
  `HR_WorkTimeStart` time NOT NULL,
  `HR_WorkTimeEnd` time NOT NULL,
  `User_ID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `leaving_form`
--

CREATE TABLE `leaving_form` (
  `Form_ID` int(8) NOT NULL,
  `Form_Title` varchar(45) NOT NULL,
  `Form_detail` text NOT NULL,
  `Form_status` int(11) NOT NULL,
  `Form_DateStart` date NOT NULL,
  `Form_DateEnd` date NOT NULL,
  `User_ID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_ID` int(8) NOT NULL,
  `User_FNAME` varchar(45) NOT NULL,
  `User_LName` varchar(45) NOT NULL,
  `User_Gender` varchar(6) NOT NULL,
  `User_DOB` date NOT NULL,
  `User_Department` varchar(25) NOT NULL,
  `User_Position` varchar(25) NOT NULL,
  `User_Email` varchar(25) NOT NULL,
  `User_Tel` varchar(25) NOT NULL,
  `User_Address` text NOT NULL,
  `User_Username` varchar(25) NOT NULL,
  `User_Password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_has_company_event`
--

CREATE TABLE `user_has_company_event` (
  `User_ID` int(8) NOT NULL,
  `Event_ID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_event`
--
ALTER TABLE `company_event`
  ADD PRIMARY KEY (`Event_ID`);

--
-- Indexes for table `hr_staff`
--
ALTER TABLE `hr_staff`
  ADD PRIMARY KEY (`HR_ID`),
  ADD KEY `User_User_ID` (`User_ID`);

--
-- Indexes for table `leaving_form`
--
ALTER TABLE `leaving_form`
  ADD PRIMARY KEY (`Form_ID`),
  ADD KEY `User_User_ID` (`User_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `user_has_company_event`
--
ALTER TABLE `user_has_company_event`
  ADD KEY `Company Event_Event_ID` (`Event_ID`),
  ADD KEY `User_User_ID` (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_event`
--
ALTER TABLE `company_event`
  MODIFY `Event_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hr_staff`
--
ALTER TABLE `hr_staff`
  MODIFY `HR_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leaving_form`
--
ALTER TABLE `leaving_form`
  MODIFY `Form_ID` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_ID` int(8) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hr_staff`
--
ALTER TABLE `hr_staff`
  ADD CONSTRAINT `hr_staff_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `user` (`User_ID`);

--
-- Constraints for table `leaving_form`
--
ALTER TABLE `leaving_form`
  ADD CONSTRAINT `leaving_form_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `user` (`User_ID`);

--
-- Constraints for table `user_has_company_event`
--
ALTER TABLE `user_has_company_event`
  ADD CONSTRAINT `user_has_company_event_ibfk_1` FOREIGN KEY (`Event_ID`) REFERENCES `company_event` (`Event_ID`),
  ADD CONSTRAINT `user_has_company_event_ibfk_2` FOREIGN KEY (`User_ID`) REFERENCES `user` (`User_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
